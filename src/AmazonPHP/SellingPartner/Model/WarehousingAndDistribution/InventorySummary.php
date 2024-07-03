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
class InventorySummary implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'InventorySummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'inventory_details' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryDetails',
        'sku' => 'string',
        'total_onhand_quantity' => 'int',
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
        'inventory_details' => null,
        'sku' => null,
        'total_onhand_quantity' => 'int64',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inventory_details' => 'inventoryDetails',
        'sku' => 'sku',
        'total_onhand_quantity' => 'totalOnhandQuantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'inventory_details' => 'setInventoryDetails',
        'sku' => 'setSku',
        'total_onhand_quantity' => 'setTotalOnhandQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'inventory_details' => 'getInventoryDetails',
        'sku' => 'getSku',
        'total_onhand_quantity' => 'getTotalOnhandQuantity',
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
        $this->container['inventory_details'] = $data['inventory_details'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['total_onhand_quantity'] = $data['total_onhand_quantity'] ?? null;
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
        if ($this->container['inventory_details'] !== null) {
            $this->container['inventory_details']->validate();
        }

        if ($this->container['sku'] === null) {
            throw new AssertionException("'sku' can't be null");
        }
    }

    /**
     * Gets inventory_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryDetails
     */
    public function getInventoryDetails() : ?InventoryDetails
    {
        return $this->container['inventory_details'];
    }

    /**
     * Sets inventory_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryDetails $inventory_details inventory_details
     */
    public function setInventoryDetails(?InventoryDetails $inventory_details) : self
    {
        $this->container['inventory_details'] = $inventory_details;

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
     * Gets total_onhand_quantity.
     */
    public function getTotalOnhandQuantity() : ?int
    {
        return $this->container['total_onhand_quantity'];
    }

    /**
     * Sets total_onhand_quantity.
     *
     * @param null|int $total_onhand_quantity total quantity that is present in AWD distribution centers
     */
    public function setTotalOnhandQuantity(?int $total_onhand_quantity) : self
    {
        $this->container['total_onhand_quantity'] = $total_onhand_quantity;

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
