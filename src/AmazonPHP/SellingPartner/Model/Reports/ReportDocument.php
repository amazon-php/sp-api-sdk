<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Reports;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReportDocument implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const COMPRESSION_ALGORITHM_GZIP = 'GZIP';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ReportDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'report_document_id' => 'string',
        'url' => 'string',
        'compression_algorithm' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'report_document_id' => null,
        'url' => null,
        'compression_algorithm' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'report_document_id' => 'reportDocumentId',
        'url' => 'url',
        'compression_algorithm' => 'compressionAlgorithm',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'report_document_id' => 'setReportDocumentId',
        'url' => 'setUrl',
        'compression_algorithm' => 'setCompressionAlgorithm',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'report_document_id' => 'getReportDocumentId',
        'url' => 'getUrl',
        'compression_algorithm' => 'getCompressionAlgorithm',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['report_document_id'] = $data['report_document_id'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['compression_algorithm'] = $data['compression_algorithm'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues() : array
    {
        return [
            self::COMPRESSION_ALGORITHM_GZIP,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['report_document_id'] === null) {
            throw new AssertionException("'report_document_id' can't be null");
        }

        if ($this->container['url'] === null) {
            throw new AssertionException("'url' can't be null");
        }

        $allowedValues = $this->getCompressionAlgorithmAllowableValues();

        if (null !== $this->container['compression_algorithm'] && !\in_array($this->container['compression_algorithm'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                    $this->container['compression_algorithm'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets report_document_id.
     */
    public function getReportDocumentId() : string
    {
        return $this->container['report_document_id'];
    }

    /**
     * Sets report_document_id.
     *
     * @param string $report_document_id The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportDocumentId(string $report_document_id) : self
    {
        $this->container['report_document_id'] = $report_document_id;

        return $this;
    }

    /**
     * Gets url.
     */
    public function getUrl() : string
    {
        return $this->container['url'];
    }

    /**
     * Sets url.
     *
     * @param string $url A presigned URL for the report document. This URL expires after 5 minutes.
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets compression_algorithm.
     *
     * @return null|string
     */
    public function getCompressionAlgorithm() : ?string
    {
        return $this->container['compression_algorithm'];
    }

    /**
     * Sets compression_algorithm.
     *
     * @param null|string $compression_algorithm if present, the report document contents have been compressed with the provided algorithm
     *
     * @return self
     */
    public function setCompressionAlgorithm(?string $compression_algorithm) : self
    {
        $this->container['compression_algorithm'] = $compression_algorithm;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return bool|string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
