<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner APIs for Fulfillment Outbound
*
* The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
*
* The version of the OpenAPI document: 2020-07-01
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PackageTrackingDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PackageTrackingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'package_number' => 'int',
        'tracking_number' => 'string',
        'customer_tracking_link' => 'string',
        'carrier_code' => 'string',
        'carrier_phone_number' => 'string',
        'carrier_url' => 'string',
        'ship_date' => '\DateTimeInterface',
        'estimated_arrival_date' => '\DateTimeInterface',
        'ship_to_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress',
        'current_status' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus',
        'current_status_description' => 'string',
        'signed_for_by' => 'string',
        'additional_location_info' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo',
        'tracking_events' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'package_number' => 'int32',
        'tracking_number' => null,
        'customer_tracking_link' => null,
        'carrier_code' => null,
        'carrier_phone_number' => null,
        'carrier_url' => null,
        'ship_date' => 'date-time',
        'estimated_arrival_date' => 'date-time',
        'ship_to_address' => null,
        'current_status' => null,
        'current_status_description' => null,
        'signed_for_by' => null,
        'additional_location_info' => null,
        'tracking_events' => null
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
        'package_number' => 'packageNumber',
        'tracking_number' => 'trackingNumber',
        'customer_tracking_link' => 'customerTrackingLink',
        'carrier_code' => 'carrierCode',
        'carrier_phone_number' => 'carrierPhoneNumber',
        'carrier_url' => 'carrierURL',
        'ship_date' => 'shipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'ship_to_address' => 'shipToAddress',
        'current_status' => 'currentStatus',
        'current_status_description' => 'currentStatusDescription',
        'signed_for_by' => 'signedForBy',
        'additional_location_info' => 'additionalLocationInfo',
        'tracking_events' => 'trackingEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_number' => 'setPackageNumber',
        'tracking_number' => 'setTrackingNumber',
        'customer_tracking_link' => 'setCustomerTrackingLink',
        'carrier_code' => 'setCarrierCode',
        'carrier_phone_number' => 'setCarrierPhoneNumber',
        'carrier_url' => 'setCarrierUrl',
        'ship_date' => 'setShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'ship_to_address' => 'setShipToAddress',
        'current_status' => 'setCurrentStatus',
        'current_status_description' => 'setCurrentStatusDescription',
        'signed_for_by' => 'setSignedForBy',
        'additional_location_info' => 'setAdditionalLocationInfo',
        'tracking_events' => 'setTrackingEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_number' => 'getPackageNumber',
        'tracking_number' => 'getTrackingNumber',
        'customer_tracking_link' => 'getCustomerTrackingLink',
        'carrier_code' => 'getCarrierCode',
        'carrier_phone_number' => 'getCarrierPhoneNumber',
        'carrier_url' => 'getCarrierUrl',
        'ship_date' => 'getShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'ship_to_address' => 'getShipToAddress',
        'current_status' => 'getCurrentStatus',
        'current_status_description' => 'getCurrentStatusDescription',
        'signed_for_by' => 'getSignedForBy',
        'additional_location_info' => 'getAdditionalLocationInfo',
        'tracking_events' => 'getTrackingEvents'
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
        $this->container['package_number'] = $data['package_number'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['customer_tracking_link'] = $data['customer_tracking_link'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['carrier_phone_number'] = $data['carrier_phone_number'] ?? null;
        $this->container['carrier_url'] = $data['carrier_url'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['ship_to_address'] = $data['ship_to_address'] ?? null;
        $this->container['current_status'] = $data['current_status'] ?? null;
        $this->container['current_status_description'] = $data['current_status_description'] ?? null;
        $this->container['signed_for_by'] = $data['signed_for_by'] ?? null;
        $this->container['additional_location_info'] = $data['additional_location_info'] ?? null;
        $this->container['tracking_events'] = $data['tracking_events'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['package_number'] === null) {
            throw new AssertionException("'package_number' can't be null");
        }

            if ($this->container['ship_to_address'] !== null) {
            $this->container['ship_to_address']->validate();
            }

    }


    /**
     * Gets package_number
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number
     *
     * @param int $package_number The package identifier.
     *
     * @return self
     */
    public function setPackageNumber($package_number) : self
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number for the package.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets customer_tracking_link
     *
     * @return string|null
     */
    public function getCustomerTrackingLink()
    {
        return $this->container['customer_tracking_link'];
    }

    /**
     * Sets customer_tracking_link
     *
     * @param string|null $customer_tracking_link Link on swiship.com that allows customers to track the package.
     *
     * @return self
     */
    public function setCustomerTrackingLink($customer_tracking_link) : self
    {
        $this->container['customer_tracking_link'] = $customer_tracking_link;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string|null $carrier_code The name of the carrier.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code) : self
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_phone_number
     *
     * @return string|null
     */
    public function getCarrierPhoneNumber()
    {
        return $this->container['carrier_phone_number'];
    }

    /**
     * Sets carrier_phone_number
     *
     * @param string|null $carrier_phone_number The phone number of the carrier.
     *
     * @return self
     */
    public function setCarrierPhoneNumber($carrier_phone_number) : self
    {
        $this->container['carrier_phone_number'] = $carrier_phone_number;

        return $this;
    }

    /**
     * Gets carrier_url
     *
     * @return string|null
     */
    public function getCarrierUrl()
    {
        return $this->container['carrier_url'];
    }

    /**
     * Sets carrier_url
     *
     * @param string|null $carrier_url The URL of the carrier's website.
     *
     * @return self
     */
    public function setCarrierUrl($carrier_url) : self
    {
        $this->container['carrier_url'] = $carrier_url;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTimeInterface|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTimeInterface|null $ship_date ship_date
     *
     * @return self
     */
    public function setShipDate($ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date
     *
     * @return \DateTimeInterface|null
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date
     *
     * @param \DateTimeInterface|null $estimated_arrival_date estimated_arrival_date
     *
     * @return self
     */
    public function setEstimatedArrivalDate($estimated_arrival_date) : self
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets ship_to_address
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress|null
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingAddress|null $ship_to_address ship_to_address
     *
     * @return self
     */
    public function setShipToAddress($ship_to_address) : self
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets current_status
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus|null
     */
    public function getCurrentStatus()
    {
        return $this->container['current_status'];
    }

    /**
     * Sets current_status
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CurrentStatus|null $current_status current_status
     *
     * @return self
     */
    public function setCurrentStatus($current_status) : self
    {
        $this->container['current_status'] = $current_status;

        return $this;
    }

    /**
     * Gets current_status_description
     *
     * @return string|null
     */
    public function getCurrentStatusDescription()
    {
        return $this->container['current_status_description'];
    }

    /**
     * Sets current_status_description
     *
     * @param string|null $current_status_description Description corresponding to the `CurrentStatus` value.
     *
     * @return self
     */
    public function setCurrentStatusDescription($current_status_description) : self
    {
        $this->container['current_status_description'] = $current_status_description;

        return $this;
    }

    /**
     * Gets signed_for_by
     *
     * @return string|null
     */
    public function getSignedForBy()
    {
        return $this->container['signed_for_by'];
    }

    /**
     * Sets signed_for_by
     *
     * @param string|null $signed_for_by The name of the person who signed for the package.
     *
     * @return self
     */
    public function setSignedForBy($signed_for_by) : self
    {
        $this->container['signed_for_by'] = $signed_for_by;

        return $this;
    }

    /**
     * Gets additional_location_info
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo|null
     */
    public function getAdditionalLocationInfo()
    {
        return $this->container['additional_location_info'];
    }

    /**
     * Sets additional_location_info
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\AdditionalLocationInfo|null $additional_location_info additional_location_info
     *
     * @return self
     */
    public function setAdditionalLocationInfo($additional_location_info) : self
    {
        $this->container['additional_location_info'] = $additional_location_info;

        return $this;
    }

    /**
     * Gets tracking_events
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[]|null
     */
    public function getTrackingEvents()
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\TrackingEvent[]|null $tracking_events An array of tracking event information.
     *
     * @return self
     */
    public function setTrackingEvents($tracking_events) : self
    {
        $this->container['tracking_events'] = $tracking_events;

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

