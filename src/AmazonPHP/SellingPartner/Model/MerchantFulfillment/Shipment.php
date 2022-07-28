<?php
/**
 * Shipment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
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
        'last_updated_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
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
        'last_updated_date' => 'date-time'
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
        'last_updated_date' => 'LastUpdatedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
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
        'last_updated_date' => 'setLastUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        'last_updated_date' => 'getLastUpdatedDate'
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
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ($this->container['amazon_order_id'] === null) {
            throw new AssertionException("'amazon_order_id' can't be null");
        }

        if (!is_null($this->container['seller_order_id']) && (mb_strlen($this->container['seller_order_id']) > 64)) {
            throw new AssertionException("invalid value for 'seller_order_id', the character length must be smaller than or equal to 64.");
        }

        if ($this->container['item_list'] === null) {
            throw new AssertionException("'item_list' can't be null");
        }

        if ($this->container['ship_from_address'] === null) {
            throw new AssertionException("'ship_from_address' can't be null");
        }

            $this->container['ship_from_address']->validate();

        if ($this->container['ship_to_address'] === null) {
            throw new AssertionException("'ship_to_address' can't be null");
        }

            $this->container['ship_to_address']->validate();

        if ($this->container['package_dimensions'] === null) {
            throw new AssertionException("'package_dimensions' can't be null");
        }

            $this->container['package_dimensions']->validate();

        if ($this->container['weight'] === null) {
            throw new AssertionException("'weight' can't be null");
        }

            $this->container['weight']->validate();

        if ($this->container['insurance'] === null) {
            throw new AssertionException("'insurance' can't be null");
        }

            $this->container['insurance']->validate();

        if ($this->container['shipping_service'] === null) {
            throw new AssertionException("'shipping_service' can't be null");
        }

            $this->container['shipping_service']->validate();

        if ($this->container['label'] === null) {
            throw new AssertionException("'label' can't be null");
        }

            $this->container['label']->validate();

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['created_date'] === null) {
            throw new AssertionException("'created_date' can't be null");
        }

    }


    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id An Amazon-defined shipment identifier.
     *
     * @return self
     */
    public function setShipmentId($shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined order identifier.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id) : self
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets item_list
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[]
     */
    public function getItemList()
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item[] $item_list The list of items to be included in a shipment.
     *
     * @return self
     */
    public function setItemList($item_list) : self
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets ship_from_address
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address $ship_from_address ship_from_address
     *
     * @return self
     */
    public function setShipFromAddress($ship_from_address) : self
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets ship_to_address
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address $ship_to_address ship_to_address
     *
     * @return self
     */
    public function setShipToAddress($ship_to_address) : self
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets package_dimensions
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions $package_dimensions package_dimensions
     *
     * @return self
     */
    public function setPackageDimensions($package_dimensions) : self
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight) : self
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance) : self
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets shipping_service
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService
     */
    public function getShippingService()
    {
        return $this->container['shipping_service'];
    }

    /**
     * Sets shipping_service
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService $shipping_service shipping_service
     *
     * @return self
     */
    public function setShippingService($shipping_service) : self
    {
        $this->container['shipping_service'] = $shipping_service;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Label
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Label $label label
     *
     * @return self
     */
    public function setLabel($label) : self
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentStatus $status status
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id The shipment tracking identifier provided by the carrier.
     *
     * @return self
     */
    public function setTrackingId($tracking_id) : self
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date) : self
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_updated_date
     *
     * @return \DateTime|null
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date
     *
     * @param \DateTime|null $last_updated_date last_updated_date
     *
     * @return self
     */
    public function setLastUpdatedDate($last_updated_date) : self
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param integer $offset Offset
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
