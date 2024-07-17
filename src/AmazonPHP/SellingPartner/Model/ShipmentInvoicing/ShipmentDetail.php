<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ShipmentInvoicing;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Shipment Invoicing.
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentDetail implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ShipmentDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'warehouse_id' => 'string',
        'amazon_order_id' => 'string',
        'amazon_shipment_id' => 'string',
        'purchase_date' => '\DateTimeInterface',
        'shipping_address' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Address',
        'payment_method_details' => 'string[]',
        'marketplace_id' => 'string',
        'seller_id' => 'string',
        'buyer_name' => 'string',
        'buyer_county' => 'string',
        'buyer_tax_info' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\BuyerTaxInfo',
        'marketplace_tax_info' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\MarketplaceTaxInfo',
        'seller_display_name' => 'string',
        'shipment_items' => '\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\ShipmentItem[]',
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
        'warehouse_id' => null,
        'amazon_order_id' => null,
        'amazon_shipment_id' => null,
        'purchase_date' => 'date-time',
        'shipping_address' => null,
        'payment_method_details' => null,
        'marketplace_id' => null,
        'seller_id' => null,
        'buyer_name' => null,
        'buyer_county' => null,
        'buyer_tax_info' => null,
        'marketplace_tax_info' => null,
        'seller_display_name' => null,
        'shipment_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'warehouse_id' => 'WarehouseId',
        'amazon_order_id' => 'AmazonOrderId',
        'amazon_shipment_id' => 'AmazonShipmentId',
        'purchase_date' => 'PurchaseDate',
        'shipping_address' => 'ShippingAddress',
        'payment_method_details' => 'PaymentMethodDetails',
        'marketplace_id' => 'MarketplaceId',
        'seller_id' => 'SellerId',
        'buyer_name' => 'BuyerName',
        'buyer_county' => 'BuyerCounty',
        'buyer_tax_info' => 'BuyerTaxInfo',
        'marketplace_tax_info' => 'MarketplaceTaxInfo',
        'seller_display_name' => 'SellerDisplayName',
        'shipment_items' => 'ShipmentItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'warehouse_id' => 'setWarehouseId',
        'amazon_order_id' => 'setAmazonOrderId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'purchase_date' => 'setPurchaseDate',
        'shipping_address' => 'setShippingAddress',
        'payment_method_details' => 'setPaymentMethodDetails',
        'marketplace_id' => 'setMarketplaceId',
        'seller_id' => 'setSellerId',
        'buyer_name' => 'setBuyerName',
        'buyer_county' => 'setBuyerCounty',
        'buyer_tax_info' => 'setBuyerTaxInfo',
        'marketplace_tax_info' => 'setMarketplaceTaxInfo',
        'seller_display_name' => 'setSellerDisplayName',
        'shipment_items' => 'setShipmentItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'warehouse_id' => 'getWarehouseId',
        'amazon_order_id' => 'getAmazonOrderId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'purchase_date' => 'getPurchaseDate',
        'shipping_address' => 'getShippingAddress',
        'payment_method_details' => 'getPaymentMethodDetails',
        'marketplace_id' => 'getMarketplaceId',
        'seller_id' => 'getSellerId',
        'buyer_name' => 'getBuyerName',
        'buyer_county' => 'getBuyerCounty',
        'buyer_tax_info' => 'getBuyerTaxInfo',
        'marketplace_tax_info' => 'getMarketplaceTaxInfo',
        'seller_display_name' => 'getSellerDisplayName',
        'shipment_items' => 'getShipmentItems',
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
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['purchase_date'] = $data['purchase_date'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['payment_method_details'] = $data['payment_method_details'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['seller_id'] = $data['seller_id'] ?? null;
        $this->container['buyer_name'] = $data['buyer_name'] ?? null;
        $this->container['buyer_county'] = $data['buyer_county'] ?? null;
        $this->container['buyer_tax_info'] = $data['buyer_tax_info'] ?? null;
        $this->container['marketplace_tax_info'] = $data['marketplace_tax_info'] ?? null;
        $this->container['seller_display_name'] = $data['seller_display_name'] ?? null;
        $this->container['shipment_items'] = $data['shipment_items'] ?? null;
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
        if ($this->container['shipping_address'] !== null) {
            $this->container['shipping_address']->validate();
        }

        if ($this->container['buyer_tax_info'] !== null) {
            $this->container['buyer_tax_info']->validate();
        }

        if ($this->container['marketplace_tax_info'] !== null) {
            $this->container['marketplace_tax_info']->validate();
        }
    }

    /**
     * Gets warehouse_id.
     */
    public function getWarehouseId() : ?string
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id.
     *
     * @param null|string $warehouse_id the Amazon-defined identifier for the warehouse
     */
    public function setWarehouseId(?string $warehouse_id) : self
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id the Amazon-defined identifier for the order
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     */
    public function getAmazonShipmentId() : ?string
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param null|string $amazon_shipment_id the Amazon-defined identifier for the shipment
     */
    public function setAmazonShipmentId(?string $amazon_shipment_id) : self
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets purchase_date.
     */
    public function getPurchaseDate() : ?\DateTimeInterface
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date.
     *
     * @param null|\DateTimeInterface $purchase_date the date and time when the order was created
     */
    public function setPurchaseDate(?\DateTimeInterface $purchase_date) : self
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets shipping_address.
     */
    public function getShippingAddress() : ?Address
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\Address $shipping_address shipping_address
     */
    public function setShippingAddress(?Address $shipping_address) : self
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets payment_method_details.
     *
     * @return null|string[]
     */
    public function getPaymentMethodDetails() : ?array
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details.
     *
     * @param null|string[] $payment_method_details the list of payment method details
     */
    public function setPaymentMethodDetails(?array $payment_method_details) : self
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : ?string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param null|string $marketplace_id the identifier for the marketplace where the order was placed
     */
    public function setMarketplaceId(?string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets seller_id.
     */
    public function getSellerId() : ?string
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param null|string $seller_id the seller identifier
     */
    public function setSellerId(?string $seller_id) : self
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets buyer_name.
     */
    public function getBuyerName() : ?string
    {
        return $this->container['buyer_name'];
    }

    /**
     * Sets buyer_name.
     *
     * @param null|string $buyer_name the name of the buyer
     */
    public function setBuyerName(?string $buyer_name) : self
    {
        $this->container['buyer_name'] = $buyer_name;

        return $this;
    }

    /**
     * Gets buyer_county.
     */
    public function getBuyerCounty() : ?string
    {
        return $this->container['buyer_county'];
    }

    /**
     * Sets buyer_county.
     *
     * @param null|string $buyer_county the county of the buyer
     */
    public function setBuyerCounty(?string $buyer_county) : self
    {
        $this->container['buyer_county'] = $buyer_county;

        return $this;
    }

    /**
     * Gets buyer_tax_info.
     */
    public function getBuyerTaxInfo() : ?BuyerTaxInfo
    {
        return $this->container['buyer_tax_info'];
    }

    /**
     * Sets buyer_tax_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\BuyerTaxInfo $buyer_tax_info buyer_tax_info
     */
    public function setBuyerTaxInfo(?BuyerTaxInfo $buyer_tax_info) : self
    {
        $this->container['buyer_tax_info'] = $buyer_tax_info;

        return $this;
    }

    /**
     * Gets marketplace_tax_info.
     */
    public function getMarketplaceTaxInfo() : ?MarketplaceTaxInfo
    {
        return $this->container['marketplace_tax_info'];
    }

    /**
     * Sets marketplace_tax_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\MarketplaceTaxInfo $marketplace_tax_info marketplace_tax_info
     */
    public function setMarketplaceTaxInfo(?MarketplaceTaxInfo $marketplace_tax_info) : self
    {
        $this->container['marketplace_tax_info'] = $marketplace_tax_info;

        return $this;
    }

    /**
     * Gets seller_display_name.
     */
    public function getSellerDisplayName() : ?string
    {
        return $this->container['seller_display_name'];
    }

    /**
     * Sets seller_display_name.
     *
     * @param null|string $seller_display_name the seller’s friendly name registered in the marketplace
     */
    public function setSellerDisplayName(?string $seller_display_name) : self
    {
        $this->container['seller_display_name'] = $seller_display_name;

        return $this;
    }

    /**
     * Gets shipment_items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\ShipmentItem[]
     */
    public function getShipmentItems() : ?array
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShipmentInvoicing\ShipmentItem[] $shipment_items a list of shipment items
     */
    public function setShipmentItems(?array $shipment_items) : self
    {
        $this->container['shipment_items'] = $shipment_items;

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
