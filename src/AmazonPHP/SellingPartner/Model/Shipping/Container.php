<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Shipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Shipping
*
* Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
*
* The version of the OpenAPI document: v1
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Container implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'container_type' => 'string',
        'container_reference_id' => 'string',
        'value' => '\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\Shipping\Dimensions',
        'items' => '\AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[]',
        'weight' => '\AmazonPHP\SellingPartner\Model\Shipping\Weight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
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
        'weight' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'container_type' => 'containerType',
        'container_reference_id' => 'containerReferenceId',
        'value' => 'value',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'container_type' => 'setContainerType',
        'container_reference_id' => 'setContainerReferenceId',
        'value' => 'setValue',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'container_type' => 'getContainerType',
        'container_reference_id' => 'getContainerReferenceId',
        'value' => 'getValue',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'weight' => 'getWeight'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
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

    const CONTAINER_TYPE_PACKAGE = 'PACKAGE';

    /**
     * Gets allowable values of the enum
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['container_type']) && !in_array($this->container['container_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'container_type', must be one of '%s'",
                    $this->container['container_type'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['container_reference_id'] === null) {
            throw new AssertionException("'container_reference_id' can't be null");
        }

        if ((mb_strlen($this->container['container_reference_id']) > 40)) {
            throw new AssertionException("invalid value for 'container_reference_id', the character length must be smaller than or equal to 40.");
        }

        if ($this->container['value'] === null) {
            throw new AssertionException("'value' can't be null");
        }

            $this->container['value']->validate();

        if ($this->container['dimensions'] === null) {
            throw new AssertionException("'dimensions' can't be null");
        }

            $this->container['dimensions']->validate();

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }

        if ($this->container['weight'] === null) {
            throw new AssertionException("'weight' can't be null");
        }

            $this->container['weight']->validate();

    }


    /**
     * Gets container_type
     *
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string|null $container_type The type of physical container being used. (always 'PACKAGE')
     *
     * @return self
     */
    public function setContainerType($container_type) : self
    {
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_reference_id
     *
     * @return string
     */
    public function getContainerReferenceId()
    {
        return $this->container['container_reference_id'];
    }

    /**
     * Sets container_reference_id
     *
     * @param string $container_reference_id An identifier for the container. This must be unique within all the containers in the same shipment.
     *
     * @return self
     */
    public function setContainerReferenceId($container_reference_id) : self
    {
        $this->container['container_reference_id'] = $container_reference_id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\Currency
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Currency $value value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Dimensions $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\ContainerItem[] $items A list of the items in the container.
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

