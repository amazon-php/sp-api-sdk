<?php declare(strict_types=1);
/**
 * Shipment.
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
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class Shipment implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Shipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'shipment_id' => 'string',
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
        'item_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[]',
        'ship_from_address' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address',
        'ship_to_address' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address',
        'package_dimensions' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions',
        'weight' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight',
        'insurance' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount',
        'shipping_service' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService',
        'label' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Label',
        'status' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentStatus',
        'tracking_id' => 'string',
        'created_date' => '\DateTime',
        'last_updated_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'shipment_id' => null,
        'amazon_order_id' => null,
        'seller_order_id' => null,
        'item_list' => null,
        'ship_from_address' => null,
        'ship_to_address' => null,
        'package_dimensions' => null,
        'weight' => null,
        'insurance' => null,
        'shipping_service' => null,
        'label' => null,
        'status' => null,
        'tracking_id' => null,
        'created_date' => 'date-time',
        'last_updated_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipment_id' => 'ShipmentId',
        'amazon_order_id' => 'AmazonOrderId',
        'seller_order_id' => 'SellerOrderId',
        'item_list' => 'ItemList',
        'ship_from_address' => 'ShipFromAddress',
        'ship_to_address' => 'ShipToAddress',
        'package_dimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'insurance' => 'Insurance',
        'shipping_service' => 'ShippingService',
        'label' => 'Label',
        'status' => 'Status',
        'tracking_id' => 'TrackingId',
        'created_date' => 'CreatedDate',
        'last_updated_date' => 'LastUpdatedDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_id' => 'setShipmentId',
        'amazon_order_id' => 'setAmazonOrderId',
        'seller_order_id' => 'setSellerOrderId',
        'item_list' => 'setItemList',
        'ship_from_address' => 'setShipFromAddress',
        'ship_to_address' => 'setShipToAddress',
        'package_dimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'insurance' => 'setInsurance',
        'shipping_service' => 'setShippingService',
        'label' => 'setLabel',
        'status' => 'setStatus',
        'tracking_id' => 'setTrackingId',
        'created_date' => 'setCreatedDate',
        'last_updated_date' => 'setLastUpdatedDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_id' => 'getShipmentId',
        'amazon_order_id' => 'getAmazonOrderId',
        'seller_order_id' => 'getSellerOrderId',
        'item_list' => 'getItemList',
        'ship_from_address' => 'getShipFromAddress',
        'ship_to_address' => 'getShipToAddress',
        'package_dimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'insurance' => 'getInsurance',
        'shipping_service' => 'getShippingService',
        'label' => 'getLabel',
        'status' => 'getStatus',
        'tracking_id' => 'getTrackingId',
        'created_date' => 'getCreatedDate',
        'last_updated_date' => 'getLastUpdatedDate',
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
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['item_list'] = $data['item_list'] ?? null;
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['ship_to_address'] = $data['ship_to_address'] ?? null;
        $this->container['package_dimensions'] = $data['package_dimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['insurance'] = $data['insurance'] ?? null;
        $this->container['shipping_service'] = $data['shipping_service'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['last_updated_date'] = $data['last_updated_date'] ?? null;
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
        $invalidProperties = [];

        if ($this->container['shipment_id'] === null) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }

        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }

        if (null !== $this->container['seller_order_id'] && (\mb_strlen($this->container['seller_order_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'seller_order_id', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['item_list'] === null) {
            $invalidProperties[] = "'item_list' can't be null";
        }

        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }

        if ($this->container['ship_to_address'] === null) {
            $invalidProperties[] = "'ship_to_address' can't be null";
        }

        if ($this->container['package_dimensions'] === null) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }

        if ($this->container['insurance'] === null) {
            $invalidProperties[] = "'insurance' can't be null";
        }

        if ($this->container['shipping_service'] === null) {
            $invalidProperties[] = "'shipping_service' can't be null";
        }

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }

        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
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
     * Gets shipment_id.
     */
    public function getShipmentId() : string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id an Amazon-defined shipment identifier
     */
    public function setShipmentId(string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     */
    public function getAmazonOrderId() : string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined order identifier, in 3-7-7 format
     */
    public function setAmazonOrderId(string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id.
     */
    public function getSellerOrderId() : ?string
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param null|string $seller_order_id a seller-defined order identifier
     */
    public function setSellerOrderId(?string $seller_order_id) : self
    {
        if (null !== $seller_order_id && (\mb_strlen($seller_order_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $seller_order_id when calling Shipment., must be smaller than or equal to 64.');
        }

        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets item_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[]
     */
    public function getItemList() : array
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[] $item_list the list of items to be included in a shipment
     */
    public function setItemList(array $item_list) : self
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets ship_from_address.
     */
    public function getShipFromAddress() : Address
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address $ship_from_address ship_from_address
     */
    public function setShipFromAddress(Address $ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets ship_to_address.
     */
    public function getShipToAddress() : Address
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address $ship_to_address ship_to_address
     */
    public function setShipToAddress(Address $ship_to_address) : self
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets package_dimensions.
     */
    public function getPackageDimensions() : PackageDimensions
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions $package_dimensions package_dimensions
     */
    public function setPackageDimensions(PackageDimensions $package_dimensions) : self
    {
        $this->container['package_dimensions'] = $package_dimensions;

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
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight $weight weight
     */
    public function setWeight(Weight $weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets insurance.
     */
    public function getInsurance() : CurrencyAmount
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount $insurance insurance
     */
    public function setInsurance(CurrencyAmount $insurance) : self
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets shipping_service.
     */
    public function getShippingService() : ShippingService
    {
        return $this->container['shipping_service'];
    }

    /**
     * Sets shipping_service.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService $shipping_service shipping_service
     */
    public function setShippingService(ShippingService $shipping_service) : self
    {
        $this->container['shipping_service'] = $shipping_service;

        return $this;
    }

    /**
     * Gets label.
     */
    public function getLabel() : Label
    {
        return $this->container['label'];
    }

    /**
     * Sets label.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Label $label label
     */
    public function setLabel(Label $label) : self
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : ShipmentStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentStatus $status status
     */
    public function setStatus(ShipmentStatus $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_id.
     */
    public function getTrackingId() : ?string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param null|string $tracking_id the shipment tracking identifier provided by the carrier
     */
    public function setTrackingId(?string $tracking_id) : self
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets created_date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getCreatedDate() : \DateTimeInterface
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date.
     *
     * @param \DateTime $created_date created_date
     */
    public function setCreatedDate(\DateTimeInterface $created_date) : self
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_updated_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getLastUpdatedDate() : ?\DateTimeInterface
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date.
     *
     * @param \DateTime|\DateTimeImmutable $last_updated_date last_updated_date
     */
    public function setLastUpdatedDate(\DateTimeInterface $last_updated_date) : self
    {
        $this->container['last_updated_date'] = $last_updated_date;

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
