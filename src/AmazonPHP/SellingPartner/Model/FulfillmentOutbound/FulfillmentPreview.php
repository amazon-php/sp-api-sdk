<?php
/**
 * FulfillmentPreview
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class FulfillmentPreview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentPreview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipping_speed_category' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory',
        'scheduled_delivery_info' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ScheduledDeliveryInfo',
        'is_fulfillable' => 'bool',
        'is_cod_capable' => 'bool',
        'estimated_shipping_weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight',
        'estimated_fees' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[]',
        'fulfillment_preview_shipments' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[]',
        'unfulfillable_preview_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[]',
        'order_unfulfillable_reasons' => 'string[]',
        'marketplace_id' => 'string',
        'feature_constraints' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipping_speed_category' => null,
        'scheduled_delivery_info' => null,
        'is_fulfillable' => null,
        'is_cod_capable' => null,
        'estimated_shipping_weight' => null,
        'estimated_fees' => null,
        'fulfillment_preview_shipments' => null,
        'unfulfillable_preview_items' => null,
        'order_unfulfillable_reasons' => null,
        'marketplace_id' => null,
        'feature_constraints' => null
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
        'shipping_speed_category' => 'shippingSpeedCategory',
        'scheduled_delivery_info' => 'scheduledDeliveryInfo',
        'is_fulfillable' => 'isFulfillable',
        'is_cod_capable' => 'isCODCapable',
        'estimated_shipping_weight' => 'estimatedShippingWeight',
        'estimated_fees' => 'estimatedFees',
        'fulfillment_preview_shipments' => 'fulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'unfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'orderUnfulfillableReasons',
        'marketplace_id' => 'marketplaceId',
        'feature_constraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
        'is_fulfillable' => 'setIsFulfillable',
        'is_cod_capable' => 'setIsCodCapable',
        'estimated_shipping_weight' => 'setEstimatedShippingWeight',
        'estimated_fees' => 'setEstimatedFees',
        'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
        'marketplace_id' => 'setMarketplaceId',
        'feature_constraints' => 'setFeatureConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
        'is_fulfillable' => 'getIsFulfillable',
        'is_cod_capable' => 'getIsCodCapable',
        'estimated_shipping_weight' => 'getEstimatedShippingWeight',
        'estimated_fees' => 'getEstimatedFees',
        'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
        'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
        'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
        'marketplace_id' => 'getMarketplaceId',
        'feature_constraints' => 'getFeatureConstraints'
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
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['scheduled_delivery_info'] = $data['scheduled_delivery_info'] ?? null;
        $this->container['is_fulfillable'] = $data['is_fulfillable'] ?? null;
        $this->container['is_cod_capable'] = $data['is_cod_capable'] ?? null;
        $this->container['estimated_shipping_weight'] = $data['estimated_shipping_weight'] ?? null;
        $this->container['estimated_fees'] = $data['estimated_fees'] ?? null;
        $this->container['fulfillment_preview_shipments'] = $data['fulfillment_preview_shipments'] ?? null;
        $this->container['unfulfillable_preview_items'] = $data['unfulfillable_preview_items'] ?? null;
        $this->container['order_unfulfillable_reasons'] = $data['order_unfulfillable_reasons'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['shipping_speed_category'] === null) {
            throw new AssertionException("'shipping_speed_category' can't be null");
        }

            if ($this->container['scheduled_delivery_info'] !== null) {
            $this->container['scheduled_delivery_info']->validate();
            }

        if ($this->container['is_fulfillable'] === null) {
            throw new AssertionException("'is_fulfillable' can't be null");
        }

        if ($this->container['is_cod_capable'] === null) {
            throw new AssertionException("'is_cod_capable' can't be null");
        }

            if ($this->container['estimated_shipping_weight'] !== null) {
            $this->container['estimated_shipping_weight']->validate();
            }

        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

    }


    /**
     * Gets shipping_speed_category
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return self
     */
    public function setShippingSpeedCategory($shipping_speed_category) : self
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets scheduled_delivery_info
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ScheduledDeliveryInfo|null
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->container['scheduled_delivery_info'];
    }

    /**
     * Sets scheduled_delivery_info
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ScheduledDeliveryInfo|null $scheduled_delivery_info scheduled_delivery_info
     *
     * @return self
     */
    public function setScheduledDeliveryInfo($scheduled_delivery_info) : self
    {
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    /**
     * Gets is_fulfillable
     *
     * @return bool
     */
    public function getIsFulfillable()
    {
        return $this->container['is_fulfillable'];
    }

    /**
     * Sets is_fulfillable
     *
     * @param bool $is_fulfillable When true, this fulfillment order preview is fulfillable.
     *
     * @return self
     */
    public function setIsFulfillable($is_fulfillable) : self
    {
        $this->container['is_fulfillable'] = $is_fulfillable;

        return $this;
    }

    /**
     * Gets is_cod_capable
     *
     * @return bool
     */
    public function getIsCodCapable()
    {
        return $this->container['is_cod_capable'];
    }

    /**
     * Sets is_cod_capable
     *
     * @param bool $is_cod_capable When true, this fulfillment order preview is for COD (Cash On Delivery).
     *
     * @return self
     */
    public function setIsCodCapable($is_cod_capable) : self
    {
        $this->container['is_cod_capable'] = $is_cod_capable;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight|null
     */
    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Weight|null $estimated_shipping_weight estimated_shipping_weight
     *
     * @return self
     */
    public function setEstimatedShippingWeight($estimated_shipping_weight) : self
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets estimated_fees
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[]|null
     */
    public function getEstimatedFees()
    {
        return $this->container['estimated_fees'];
    }

    /**
     * Sets estimated_fees
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Fee[]|null $estimated_fees An array of fee type and cost pairs.
     *
     * @return self
     */
    public function setEstimatedFees($estimated_fees) : self
    {
        $this->container['estimated_fees'] = $estimated_fees;

        return $this;
    }

    /**
     * Gets fulfillment_preview_shipments
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[]|null
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->container['fulfillment_preview_shipments'];
    }

    /**
     * Sets fulfillment_preview_shipments
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewShipment[]|null $fulfillment_preview_shipments An array of fulfillment preview shipment information.
     *
     * @return self
     */
    public function setFulfillmentPreviewShipments($fulfillment_preview_shipments) : self
    {
        $this->container['fulfillment_preview_shipments'] = $fulfillment_preview_shipments;

        return $this;
    }

    /**
     * Gets unfulfillable_preview_items
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[]|null
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->container['unfulfillable_preview_items'];
    }

    /**
     * Sets unfulfillable_preview_items
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\UnfulfillablePreviewItem[]|null $unfulfillable_preview_items An array of unfulfillable preview item information.
     *
     * @return self
     */
    public function setUnfulfillablePreviewItems($unfulfillable_preview_items) : self
    {
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    /**
     * Gets order_unfulfillable_reasons
     *
     * @return string[]|null
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    /**
     * Sets order_unfulfillable_reasons
     *
     * @param string[]|null $order_unfulfillable_reasons order_unfulfillable_reasons
     *
     * @return self
     */
    public function setOrderUnfulfillableReasons($order_unfulfillable_reasons) : self
    {
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The marketplace the fulfillment order is placed against.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets feature_constraints
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]|null $feature_constraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($feature_constraints) : self
    {
        $this->container['feature_constraints'] = $feature_constraints;

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
