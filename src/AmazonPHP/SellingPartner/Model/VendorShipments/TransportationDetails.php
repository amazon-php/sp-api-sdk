<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportationDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const SHIP_MODE_TRUCK_LOAD = 'TruckLoad';

    final public const SHIP_MODE_LESS_THAN_TRUCK_LOAD = 'LessThanTruckLoad';

    final public const SHIP_MODE_SMALL_PARCEL = 'SmallParcel';

    final public const TRANSPORTATION_MODE_ROAD = 'Road';

    final public const TRANSPORTATION_MODE_AIR = 'Air';

    final public const TRANSPORTATION_MODE_OCEAN = 'Ocean';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TransportationDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'ship_mode' => 'string',
        'transportation_mode' => 'string',
        'shipped_date' => '\DateTimeInterface',
        'estimated_delivery_date' => '\DateTimeInterface',
        'shipment_delivery_date' => '\DateTimeInterface',
        'carrier_details' => '\AmazonPHP\SellingPartner\Model\VendorShipments\CarrierDetails',
        'bill_of_lading_number' => 'string',
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
        'ship_mode' => null,
        'transportation_mode' => null,
        'shipped_date' => 'date-time',
        'estimated_delivery_date' => 'date-time',
        'shipment_delivery_date' => 'date-time',
        'carrier_details' => null,
        'bill_of_lading_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ship_mode' => 'shipMode',
        'transportation_mode' => 'transportationMode',
        'shipped_date' => 'shippedDate',
        'estimated_delivery_date' => 'estimatedDeliveryDate',
        'shipment_delivery_date' => 'shipmentDeliveryDate',
        'carrier_details' => 'carrierDetails',
        'bill_of_lading_number' => 'billOfLadingNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ship_mode' => 'setShipMode',
        'transportation_mode' => 'setTransportationMode',
        'shipped_date' => 'setShippedDate',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'shipment_delivery_date' => 'setShipmentDeliveryDate',
        'carrier_details' => 'setCarrierDetails',
        'bill_of_lading_number' => 'setBillOfLadingNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ship_mode' => 'getShipMode',
        'transportation_mode' => 'getTransportationMode',
        'shipped_date' => 'getShippedDate',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'shipment_delivery_date' => 'getShipmentDeliveryDate',
        'carrier_details' => 'getCarrierDetails',
        'bill_of_lading_number' => 'getBillOfLadingNumber',
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
        $this->container['ship_mode'] = $data['ship_mode'] ?? null;
        $this->container['transportation_mode'] = $data['transportation_mode'] ?? null;
        $this->container['shipped_date'] = $data['shipped_date'] ?? null;
        $this->container['estimated_delivery_date'] = $data['estimated_delivery_date'] ?? null;
        $this->container['shipment_delivery_date'] = $data['shipment_delivery_date'] ?? null;
        $this->container['carrier_details'] = $data['carrier_details'] ?? null;
        $this->container['bill_of_lading_number'] = $data['bill_of_lading_number'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getShipModeAllowableValues() : array
    {
        return [
            self::SHIP_MODE_TRUCK_LOAD,
            self::SHIP_MODE_LESS_THAN_TRUCK_LOAD,
            self::SHIP_MODE_SMALL_PARCEL,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getTransportationModeAllowableValues() : array
    {
        return [
            self::TRANSPORTATION_MODE_ROAD,
            self::TRANSPORTATION_MODE_AIR,
            self::TRANSPORTATION_MODE_OCEAN,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getShipModeAllowableValues();

        if (null !== $this->container['ship_mode'] && !\in_array($this->container['ship_mode'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'ship_mode', must be one of '%s'",
                    $this->container['ship_mode'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        $allowedValues = $this->getTransportationModeAllowableValues();

        if (null !== $this->container['transportation_mode'] && !\in_array($this->container['transportation_mode'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'transportation_mode', must be one of '%s'",
                    $this->container['transportation_mode'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['carrier_details'] !== null) {
            $this->container['carrier_details']->validate();
        }
    }

    /**
     * Gets ship_mode.
     */
    public function getShipMode() : ?string
    {
        return $this->container['ship_mode'];
    }

    /**
     * Sets ship_mode.
     *
     * @param null|string $ship_mode the type of shipment
     */
    public function setShipMode(?string $ship_mode) : self
    {
        $this->container['ship_mode'] = $ship_mode;

        return $this;
    }

    /**
     * Gets transportation_mode.
     */
    public function getTransportationMode() : ?string
    {
        return $this->container['transportation_mode'];
    }

    /**
     * Sets transportation_mode.
     *
     * @param null|string $transportation_mode the mode of transportation for this shipment
     */
    public function setTransportationMode(?string $transportation_mode) : self
    {
        $this->container['transportation_mode'] = $transportation_mode;

        return $this;
    }

    /**
     * Gets shipped_date.
     */
    public function getShippedDate() : ?\DateTimeInterface
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date.
     *
     * @param null|\DateTimeInterface $shipped_date Date when shipment is performed by the Vendor to Buyer
     */
    public function setShippedDate(?\DateTimeInterface $shipped_date) : self
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets estimated_delivery_date.
     */
    public function getEstimatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date.
     *
     * @param null|\DateTimeInterface $estimated_delivery_date Estimated Date on which shipment will be delivered from Vendor to Buyer
     */
    public function setEstimatedDeliveryDate(?\DateTimeInterface $estimated_delivery_date) : self
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets shipment_delivery_date.
     */
    public function getShipmentDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['shipment_delivery_date'];
    }

    /**
     * Sets shipment_delivery_date.
     *
     * @param null|\DateTimeInterface $shipment_delivery_date Date on which shipment will be delivered from Vendor to Buyer
     */
    public function setShipmentDeliveryDate(?\DateTimeInterface $shipment_delivery_date) : self
    {
        $this->container['shipment_delivery_date'] = $shipment_delivery_date;

        return $this;
    }

    /**
     * Gets carrier_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\CarrierDetails
     */
    public function getCarrierDetails() : ?CarrierDetails
    {
        return $this->container['carrier_details'];
    }

    /**
     * Sets carrier_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\CarrierDetails $carrier_details carrier_details
     */
    public function setCarrierDetails(?CarrierDetails $carrier_details) : self
    {
        $this->container['carrier_details'] = $carrier_details;

        return $this;
    }

    /**
     * Gets bill_of_lading_number.
     */
    public function getBillOfLadingNumber() : ?string
    {
        return $this->container['bill_of_lading_number'];
    }

    /**
     * Sets bill_of_lading_number.
     *
     * @param null|string $bill_of_lading_number The Bill of Lading (BOL) number is a unique number assigned to each shipment of goods by the vendor or shipper during the creation of the Bill of Lading. This number must be unique for every shipment and cannot be a date/time or single character. The BOL numer is mandatory in Shipment Confirmation message for FTL and LTL shipments, and must match the paper BOL provided with the shipment. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field.
     */
    public function setBillOfLadingNumber(?string $bill_of_lading_number) : self
    {
        $this->container['bill_of_lading_number'] = $bill_of_lading_number;

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
