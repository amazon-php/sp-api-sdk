<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Model\CatalogItem\ItemImage;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\CurrencyCode;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepDetails;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepInstruction;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\SellerFreightClass;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\EventCode;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\FileType;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\LabelFormat;

final class ObjectSerializer
{
    private static string $dateTimeFormat = 'Y-m-d\TH:i:s.v\Z';

    /**
     * Change the date format.
     *
     * @param string $format the new date format to use
     */
    public static function setDateTimeFormat(string $format) : void
    {
        self::$dateTimeFormat = $format;
    }

    /**
     * Serialize data.
     *
     * @param mixed $data the data to serialize
     * @param null|string $type the OpenAPIToolsType of the data
     * @param null|string $format the format of the OpenAPITools type of the data
     *
     * @return null|array|object|scalar serialized form of $data
     */
    public static function sanitizeForSerialization(mixed $data, string $type = null, string $format = null)
    {
        if (\is_scalar($data) || null === $data) {
            return $data;
        }

        if ($data instanceof \DateTimeInterface) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->setTimezone(new \DateTimeZone('UTC'))->format(self::$dateTimeFormat);
        }

        if (\is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }

            return $data;
        }

        if (\is_object($data)) {
            $values = [];

            if ($data instanceof ModelInterface) {
                $formats = $data::openAPIFormats();

                foreach ($data::openAPITypes() as $property => $openAPIType) {
                    $getter = $data::getters()[$property];
                    $value = $data->{$getter}();

                    if ($value !== null && \is_object($value) && \method_exists($value, 'getAllowableEnumValues')) {
                        $callable = [$openAPIType, 'getAllowableEnumValues'];

                        if (\is_callable($callable)) {
                            /** array $callable */
                            $allowedEnumTypes = $callable();

                            if (!\in_array($value->toString(), $allowedEnumTypes, true) &&
                                !\in_array(\ltrim((string) $openAPIType, '\\'), self::getBrokenModelDefinitions(), true)) {
                                $imploded = \implode("', '", $allowedEnumTypes);

                                throw new \InvalidArgumentException("Invalid value for enum '{$openAPIType}', must be one of: '{$imploded}'");
                            }
                        }

                        $value = $value->toString();
                    }

                    if ($value !== null) {
                        $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $openAPIType, $formats[$property]);
                    }
                }
            } else {
                foreach ($data as $property => $value) {
                    $values[$property] = self::sanitizeForSerialization($value);
                }
            }

            return $values;
        }

        return (string) $data;
    }

    /**
     * Sanitize filename by removing path.
     * e.g. ../../sun.gif becomes sun.gif.
     *
     * @param string $filename filename to be sanitized
     *
     * @return mixed|string the sanitized filename
     */
    public static function sanitizeFilename(string $filename)
    {
        if (\preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        }

        return $filename;
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the path, by url-encoding.
     *
     * @param string $value a string which will be part of the path
     *
     * @return string the serialized object
     */
    public static function toPathValue(string $value) : string
    {
        return \rawurlencode(self::toString($value));
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the query, by imploding comma-separated if it's an object.
     * If it's a string, pass through unchanged. It will be url-encoded
     * later.
     *
     * @param \DateTime|string|string[] $object an object to be serialized to a string
     *
     * @return string the serialized object
     */
    public static function toQueryValue(\DateTime|string|array $object) : string
    {
        if (\is_array($object)) {
            return \implode(',', $object);
        }

        return self::toString($object);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the header. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param string $value a string which will be part of the header
     *
     * @return mixed|string the header string
     */
    public static function toHeaderValue(string $value)
    {
        $callable = [$value, 'toHeaderValue'];

        if (\is_callable($callable)) {
            return $callable();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the http body (form parameter). If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601.
     *
     * @param \SplFileObject|string $value the value of the form parameter
     *
     * @return bool|string the form string
     */
    public static function toFormValue(\SplFileObject|string $value) : bool|string
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        }

        return self::toString($value);
    }

    /**
     * Take value and turn it into a string suitable for inclusion in
     * the parameter. If it's a string, pass through unchanged
     * If it's a datetime object, format it in ISO8601
     * If it's a boolean, convert it to "true" or "false".
     *
     * @param mixed $value the value of the parameter
     *
     * @return string the header string
     */
    public static function toString(mixed $value) : string
    {
        if ($value instanceof \DateTimeInterface) { // datetime in ISO8601 zulu format
            return $value->setTimezone(new \DateTimeZone('UTC'))->format(self::$dateTimeFormat);
        }

        if (\is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return (string) $value;
    }

    /**
     * Serialize an array to a string.
     *
     * @param array $collection collection to serialize to a string
     * @param string $style the format use for serialization (csv,
     *                      ssv, tsv, pipes, multi)
     * @param bool $allowCollectionFormatMulti allow collection format to be a multidimensional array
     *
     * @return null|string|void
     */
    public static function serializeCollection(array $collection, string $style, bool $allowCollectionFormatMulti = false) : ?string
    {
        if ($allowCollectionFormatMulti && ('multi' === $style)) {
            // http_build_query() almost does the job for us. We just
            // need to fix the result of multidimensional arrays.
            return \preg_replace('/%5B[0-9]+%5D=/', '=', \http_build_query($collection, '', '&'));
        }

        return match ($style) {
            'pipeDelimited', 'pipes' => \implode('|', $collection),
            'tsv' => \implode("\t", $collection),
            'spaceDelimited', 'ssv' => \implode(' ', $collection),
            default => \implode(',', $collection),
        };
    }

    /**
     * @psalm-template T
     * Deserialize a JSON string into an object.
     *
     * @param mixed $data object or primitive to be deserialized
     * @param T $class class name is passed as a string
     * @param null|string[] $httpHeaders HTTP headers
     *
     * @psalm-return T
     */
    public static function deserialize(Configuration $configuration, mixed $data, string $class, array $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        }

        if (\strcasecmp(\substr($class, -2), '[]') === 0) {
            $data = \is_string($data) ? \json_decode($data, null, 512, JSON_THROW_ON_ERROR) : $data;

            if (!\is_array($data)) {
                throw new \InvalidArgumentException("Invalid array '{$class}'");
            }

            $subClass = \substr($class, 0, -2);
            $values = [];

            foreach ($data as $value) {
                $values[] = self::deserialize($configuration, $value, $subClass, null);
            }

            return $values;
        }

        if (\preg_match('/^(array<|map\[)/', $class)) { // for associative array e.g. array<string,int>
            $data = \is_string($data) ? \json_decode($data, null, 512, JSON_THROW_ON_ERROR) : $data;
            $data = (array) $data;
            $inner = \substr($class, 4, -1);
            $deserialized = [];

            if (\strrpos($inner, ',') !== false) {
                $subClass_array = \explode(',', $inner, 2);
                $subClass = $subClass_array[1];

                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($configuration, $value, $subClass, null);
                }
            }

            return $deserialized;
        }

        if ($class === '\DateTime' || $class === '\DateTimeImmutable' || $class === '\DateTimeInterface') {
            // Some API's return an invalid, empty string as a
            // date-time property. DateTime::__construct() will return
            // the current time for empty input which is probably not
            // what is meant. The invalid empty string is probably to
            // be interpreted as a missing field/value. Let's handle
            // this graceful.
            if (!empty($data)) {
                try {
                    return new \DateTimeImmutable($data);
                } catch (\Exception) {
                    // Some API's return a date-time with too high nanosecond
                    // precision for php's DateTime to handle. This conversion
                    // (string -> unix timestamp -> DateTime) is a workaround
                    // for the problem.
                    return (new \DateTimeImmutable())->setTimestamp(\strtotime((string) $data));
                }
            } else {
                return null;
            }
        }

        switch ($class) {
            case 'bool':
            case 'boolean':
                return \filter_var($data, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
            case 'double':
            case 'float':
                return (float) $data;
            case 'int':
            case 'integer':
                return (int) $data;
            case 'number':
                return +$data;
            case 'byte':
            case 'string':
                return (string) $data;
            case 'object':
                return (array) $data;
            case 'mixed':
                return $data;
            case 'void':
                return;
        }

        if ($class === '\SplFileObject') {
            // determine file name
            if (\array_key_exists('Content-Disposition', $httpHeaders) &&
                \preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = $configuration->tmpFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = \tempnam($configuration->tmpFolderPath(), '');
            }

            $file = \fopen($filename, 'w');

            while ($chunk = $data->read(200)) {
                \fwrite($file, (string) $chunk);
            }
            \fclose($file);

            return new \SplFileObject($filename, 'r');
        }

        if (\method_exists($class, 'getAllowableEnumValues')) {
            // Do not validate if class is one of amazon broken model definitions.
            if (\in_array(\ltrim($class, '\\'), self::getBrokenModelDefinitions(), true)) {
                return new $class($data);
            }

            if (!\in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = \implode("', '", $class::getAllowableEnumValues());

                throw new \InvalidArgumentException("Invalid value for enum '{$class}', must be one of: '{$imploded}'");
            }

            return new $class($data);
        }

        try {
            $data = \is_string($data) ? \json_decode($data, null, 512, JSON_THROW_ON_ERROR) : $data;
        } catch (\JsonException) {
        }

        // If a discriminator is defined and points to a valid subclass, use it.
        $discriminator = $class::DISCRIMINATOR;

        if (!empty($discriminator) && isset($data->{$discriminator}) && \is_string($data->{$discriminator})) {
            $subclass = '\AmazonPHP\SellingPartner\Model\\' . $data->{$discriminator};

            if (\is_subclass_of($subclass, $class)) {
                $class = $subclass;
            }
        }

        $instance = new $class();

        foreach ($instance::openAPITypes() as $property => $type) {
            $propertySetter = $instance::setters()[$property];

            if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                continue;
            }

            if (isset($data->{$instance::attributeMap()[$property]})) {
                $propertyValue = self::castEmptyStringToNull($data->{$instance::attributeMap()[$property]}, $type);
                $propertyValue = self::filterEmptyCollectionElement($propertyValue, $type);

                $instance->{$propertySetter}(self::deserialize($configuration, $propertyValue, $type, null));
            }
        }

        return $instance;
    }

    /**
     * Define a class name to disable enum value validation for incomplete model definitions.
     *
     * Due to an incomplete Amazon model definition, an unknown enum value in the API response would result in an exception and error during validation.
     * This array defines in advance the class name of the enum value that will invalidate the validation, and returns it to the caller.
     *
     * EventCode - https://github.com/amazon-php/sp-api-sdk/issues/191
     * ItemImage - https://github.com/amazon-php/sp-api-sdk/issues/156
     * AdditionalLocationInfo & CurrentStatus - https://github.com/amzn/selling-partner-api-models/issues/257
     * FileType - https://github.com/amzn/selling-partner-api-models/issues/258
     * ShipmentStatus - https://github.com/amzn/selling-partner-api-models/issues/270
     *
     * @return array<class-string<ModelInterface>> enum value class name
     */
    private static function getBrokenModelDefinitions() : array
    {
        return [
            \ltrim(EventCode::class, '\\'),
            \ltrim(ItemImage::class, '\\'),
            \ltrim(CurrencyCode::class, '\\'),
            \ltrim(AdditionalLocationInfo::class, '\\'),
            \ltrim(CurrentStatus::class, '\\'),
            \ltrim(FileType::class, '\\'),
            \ltrim(ShipmentStatus::class, '\\'),
            \ltrim(UnitOfMeasurement::class, '\\'),
            \ltrim(PrepInstruction::class, '\\'),
            \ltrim(SellerFreightClass::class, '\\'),
        ];
    }

    /**
     * @note amazon returns empty string here, which is not a valid enum value
     * https://github.com/amzn/selling-partner-api-models/issues/226#issuecomment-1075640380
     *
     * @param null|array|string $value value that needs to be parsed
     *
     * @return null|array|string parsed object property
     */
    private static function castEmptyStringToNull($value, string $type)
    {
        if ('' === $value && \is_a(LabelFormat::class, $type, true)) {
            $value = null;
        }

        return $value;
    }

    /**
     * @note amazon sometimes return collection with empty elements.
     * We're going to filter those element, and if resulting array is empty, it'll return null.
     *
     * @param null|array|string $value value that needs to be parsed
     *
     * @return null|array|string parsed object property
     */
    private static function filterEmptyCollectionElement($value, string $type)
    {
        if (!\str_ends_with($type, '[]')) {
            return $value;
        }

        if (!\is_array($value)) {
            return $value;
        }

        if (\is_a(PrepDetails::class, \substr($type, 0, -2), true)) {
            $value = \array_filter($value, fn ($prepDetails) : bool => \count((array) $prepDetails) > 0);

            return \count($value) > 0 ? $value : null;
        }

        return $value;
    }
}
