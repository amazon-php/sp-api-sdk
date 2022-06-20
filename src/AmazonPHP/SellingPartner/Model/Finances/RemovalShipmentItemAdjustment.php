<?php declare(strict_types=1);
/**
 * RemovalShipmentItemAdjustment.
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
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class RemovalShipmentItemAdjustment implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RemovalShipmentItemAdjustment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'removal_shipment_item_id' => 'string',
        'tax_collection_model' => 'string',
        'fulfillment_network_sku' => 'string',
        'adjusted_quantity' => 'int',
        'revenue_adjustment' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_amount_adjustment' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_withheld_adjustment' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'removal_shipment_item_id' => null,
        'tax_collection_model' => null,
        'fulfillment_network_sku' => null,
        'adjusted_quantity' => 'int32',
        'revenue_adjustment' => null,
        'tax_amount_adjustment' => null,
        'tax_withheld_adjustment' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
        'tax_collection_model' => 'TaxCollectionModel',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'adjusted_quantity' => 'AdjustedQuantity',
        'revenue_adjustment' => 'RevenueAdjustment',
        'tax_amount_adjustment' => 'TaxAmountAdjustment',
        'tax_withheld_adjustment' => 'TaxWithheldAdjustment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'removal_shipment_item_id' => 'setRemovalShipmentItemId',
        'tax_collection_model' => 'setTaxCollectionModel',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'adjusted_quantity' => 'setAdjustedQuantity',
        'revenue_adjustment' => 'setRevenueAdjustment',
        'tax_amount_adjustment' => 'setTaxAmountAdjustment',
        'tax_withheld_adjustment' => 'setTaxWithheldAdjustment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
        'tax_collection_model' => 'getTaxCollectionModel',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'adjusted_quantity' => 'getAdjustedQuantity',
        'revenue_adjustment' => 'getRevenueAdjustment',
        'tax_amount_adjustment' => 'getTaxAmountAdjustment',
        'tax_withheld_adjustment' => 'getTaxWithheldAdjustment',
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
        $this->container['removal_shipment_item_id'] = $data['removal_shipment_item_id'] ?? null;
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['adjusted_quantity'] = $data['adjusted_quantity'] ?? null;
        $this->container['revenue_adjustment'] = $data['revenue_adjustment'] ?? null;
        $this->container['tax_amount_adjustment'] = $data['tax_amount_adjustment'] ?? null;
        $this->container['tax_withheld_adjustment'] = $data['tax_withheld_adjustment'] ?? null;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        return [];
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
     * Gets removal_shipment_item_id.
     */
    public function getRemovalShipmentItemId() : ?string
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id.
     *
     * @param null|string $removal_shipment_item_id an identifier for an item in a removal shipment
     */
    public function setRemovalShipmentItemId(?string $removal_shipment_item_id) : self
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }

    /**
     * Gets tax_collection_model.
     */
    public function getTaxCollectionModel() : ?string
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model.
     *
     * @param null|string $tax_collection_model The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     */
    public function setTaxCollectionModel(?string $tax_collection_model) : self
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     */
    public function getFulfillmentNetworkSku() : ?string
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param null|string $fulfillment_network_sku the Amazon fulfillment network SKU for the item
     */
    public function setFulfillmentNetworkSku(?string $fulfillment_network_sku) : self
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets adjusted_quantity.
     */
    public function getAdjustedQuantity() : ?int
    {
        return $this->container['adjusted_quantity'];
    }

    /**
     * Sets adjusted_quantity.
     *
     * @param null|int $adjusted_quantity adjusted quantity of removal shipmentItemAdjustment items
     */
    public function setAdjustedQuantity(?int $adjusted_quantity) : self
    {
        $this->container['adjusted_quantity'] = $adjusted_quantity;

        return $this;
    }

    /**
     * Gets revenue_adjustment.
     */
    public function getRevenueAdjustment() : ?Currency
    {
        return $this->container['revenue_adjustment'];
    }

    /**
     * Sets revenue_adjustment.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $revenue_adjustment revenue_adjustment
     */
    public function setRevenueAdjustment(?Currency $revenue_adjustment) : self
    {
        $this->container['revenue_adjustment'] = $revenue_adjustment;

        return $this;
    }

    /**
     * Gets tax_amount_adjustment.
     */
    public function getTaxAmountAdjustment() : ?Currency
    {
        return $this->container['tax_amount_adjustment'];
    }

    /**
     * Sets tax_amount_adjustment.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_amount_adjustment tax_amount_adjustment
     */
    public function setTaxAmountAdjustment(?Currency $tax_amount_adjustment) : self
    {
        $this->container['tax_amount_adjustment'] = $tax_amount_adjustment;

        return $this;
    }

    /**
     * Gets tax_withheld_adjustment.
     */
    public function getTaxWithheldAdjustment() : ?Currency
    {
        return $this->container['tax_withheld_adjustment'];
    }

    /**
     * Sets tax_withheld_adjustment.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_withheld_adjustment tax_withheld_adjustment
     */
    public function setTaxWithheldAdjustment(?Currency $tax_withheld_adjustment) : self
    {
        $this->container['tax_withheld_adjustment'] = $tax_withheld_adjustment;

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
