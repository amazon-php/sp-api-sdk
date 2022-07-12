<?php declare(strict_types=1);
/**
 * Container.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Shipping;

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
class Container implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const CONTAINER_TYPE_PACKAGE = 'PACKAGE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Container';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'container_type' => 'string',
        'container_reference_id' => 'string',
        'value' => '\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\Shipping\Dimensions',
        'items' => '\AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[]',
        'weight' => '\AmazonPHP\SellingPartner\Model\Shipping\Weight',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'container_type' => null,
        'container_reference_id' => null,
        'value' => null,
        'dimensions' => null,
        'items' => null,
        'weight' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'container_type' => 'containerType',
        'container_reference_id' => 'containerReferenceId',
        'value' => 'value',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'weight' => 'weight',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'container_type' => 'setContainerType',
        'container_reference_id' => 'setContainerReferenceId',
        'value' => 'setValue',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'weight' => 'setWeight',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'container_type' => 'getContainerType',
        'container_reference_id' => 'getContainerReferenceId',
        'value' => 'getValue',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'weight' => 'getWeight',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['container_type'] = $data['container_type'] ?? null;
        $this->container['container_reference_id'] = $data['container_reference_id'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
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
        return \json_encode(
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
    public function getContainerTypeAllowableValues() : array
    {
        return [
            self::CONTAINER_TYPE_PACKAGE,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        $allowedValues = $this->getContainerTypeAllowableValues();

        if (null !== $this->container['container_type'] && !\in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'container_type', must be one of '%s'",
                $this->container['container_type'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_reference_id'] === null) {
            $invalidProperties[] = "'container_reference_id' can't be null";
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets container_type.
     */
    public function getContainerType() : ?string
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type.
     *
     * @param null|string $container_type The type of physical container being used. (always 'PACKAGE')
     */
    public function setContainerType(?string $container_type) : self
    {
        $allowedValues = $this->getContainerTypeAllowableValues();

        if (null !== $container_type && !\in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'container_type', must be one of '%s'",
                    $container_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_reference_id.
     */
    public function getContainerReferenceId() : string
    {
        return $this->container['container_reference_id'];
    }

    /**
     * Sets container_reference_id.
     *
     * @param string $container_reference_id An identifier for the container. This must be unique within all the containers in the same shipment.
     */
    public function setContainerReferenceId(string $container_reference_id) : self
    {
        $this->container['container_reference_id'] = $container_reference_id;

        return $this;
    }

    /**
     * Gets value.
     */
    public function getValue() : Currency
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Currency $value value
     */
    public function setValue(Currency $value) : self
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets dimensions.
     */
    public function getDimensions() : Dimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Dimensions $dimensions dimensions
     */
    public function setDimensions(Dimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[] $items a list of the items in the container
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets weight.
     */
    public function getWeight() : Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Weight $weight weight
     */
    public function setWeight(Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
