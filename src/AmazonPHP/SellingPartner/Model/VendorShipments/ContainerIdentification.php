<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContainerIdentification implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const CONTAINER_IDENTIFICATION_TYPE_SSCC = 'SSCC';

    final public const CONTAINER_IDENTIFICATION_TYPE_AMZNCC = 'AMZNCC';

    final public const CONTAINER_IDENTIFICATION_TYPE_GTIN = 'GTIN';

    final public const CONTAINER_IDENTIFICATION_TYPE_BPS = 'BPS';

    final public const CONTAINER_IDENTIFICATION_TYPE_CID = 'CID';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ContainerIdentification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'container_identification_type' => 'string',
        'container_identification_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'container_identification_type' => null,
        'container_identification_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'container_identification_type' => 'containerIdentificationType',
        'container_identification_number' => 'containerIdentificationNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'container_identification_type' => 'setContainerIdentificationType',
        'container_identification_number' => 'setContainerIdentificationNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'container_identification_type' => 'getContainerIdentificationType',
        'container_identification_number' => 'getContainerIdentificationNumber',
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
        $this->container['container_identification_type'] = $data['container_identification_type'] ?? null;
        $this->container['container_identification_number'] = $data['container_identification_number'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
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
    public function getContainerIdentificationTypeAllowableValues() : array
    {
        return [
            self::CONTAINER_IDENTIFICATION_TYPE_SSCC,
            self::CONTAINER_IDENTIFICATION_TYPE_AMZNCC,
            self::CONTAINER_IDENTIFICATION_TYPE_GTIN,
            self::CONTAINER_IDENTIFICATION_TYPE_BPS,
            self::CONTAINER_IDENTIFICATION_TYPE_CID,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['container_identification_type'] === null) {
            throw new AssertionException("'container_identification_type' can't be null");
        }

        $allowedValues = $this->getContainerIdentificationTypeAllowableValues();

        if (null !== $this->container['container_identification_type'] && !\in_array($this->container['container_identification_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'container_identification_type', must be one of '%s'",
                    $this->container['container_identification_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['container_identification_number'] === null) {
            throw new AssertionException("'container_identification_number' can't be null");
        }
    }

    /**
     * Gets container_identification_type.
     */
    public function getContainerIdentificationType() : string
    {
        return $this->container['container_identification_type'];
    }

    /**
     * Sets container_identification_type.
     *
     * @param string $container_identification_type the container identification type
     */
    public function setContainerIdentificationType(string $container_identification_type) : self
    {
        $this->container['container_identification_type'] = $container_identification_type;

        return $this;
    }

    /**
     * Gets container_identification_number.
     */
    public function getContainerIdentificationNumber() : string
    {
        return $this->container['container_identification_number'];
    }

    /**
     * Sets container_identification_number.
     *
     * @param string $container_identification_number container identification number that adheres to the definition of the container identification type
     */
    public function setContainerIdentificationNumber(string $container_identification_number) : self
    {
        $this->container['container_identification_number'] = $container_identification_number;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
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
    public function offsetGet($offset) : mixed
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
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
