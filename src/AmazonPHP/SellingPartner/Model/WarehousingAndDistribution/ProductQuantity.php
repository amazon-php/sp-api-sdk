<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\WarehousingAndDistribution;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for AWD.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD).
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductQuantity implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ProductQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'attributes' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\ProductAttribute[]',
        'quantity' => 'int',
        'sku' => 'string',
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
        'attributes' => null,
        'quantity' => 'int32',
        'sku' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'attributes' => 'attributes',
        'quantity' => 'quantity',
        'sku' => 'sku',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'attributes' => 'setAttributes',
        'quantity' => 'setQuantity',
        'sku' => 'setSku',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'attributes' => 'getAttributes',
        'quantity' => 'getQuantity',
        'sku' => 'getSku',
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
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if ($this->container['sku'] === null) {
            throw new AssertionException("'sku' can't be null");
        }
    }

    /**
     * Gets attributes.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\ProductAttribute[]
     */
    public function getAttributes() : ?array
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\ProductAttribute[] $attributes Attributes for this instance of the product. For example, already-prepped, or other attributes that distinguish the product beyond the SKU.
     */
    public function setAttributes(?array $attributes) : self
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity product quantity
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets sku.
     */
    public function getSku() : string
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param string $sku the seller or merchant SKU
     */
    public function setSku(string $sku) : self
    {
        $this->container['sku'] = $sku;

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