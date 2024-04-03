<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FBAInbound;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* The Selling Partner API for FBA inbound operations.
*
* The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
*
* The version of the OpenAPI document: 2024-03-20
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransportationOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TransportationOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'appointment_slot' => '\AmazonPHP\SellingPartner\Model\FBAInbound\AppointmentSlot',
        'carrier' => '\AmazonPHP\SellingPartner\Model\FBAInbound\Carrier',
        'inbound_plan_id' => 'string',
        'placement_option_id' => 'string',
        'quote' => '\AmazonPHP\SellingPartner\Model\FBAInbound\Quote',
        'shipment_id' => 'string',
        'shipping_mode' => 'string',
        'shipping_solution' => 'string',
        'transportation_option_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'appointment_slot' => null,
        'carrier' => null,
        'inbound_plan_id' => null,
        'placement_option_id' => null,
        'quote' => null,
        'shipment_id' => null,
        'shipping_mode' => null,
        'shipping_solution' => null,
        'transportation_option_id' => null
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
        'appointment_slot' => 'appointmentSlot',
        'carrier' => 'carrier',
        'inbound_plan_id' => 'inboundPlanId',
        'placement_option_id' => 'placementOptionId',
        'quote' => 'quote',
        'shipment_id' => 'shipmentId',
        'shipping_mode' => 'shippingMode',
        'shipping_solution' => 'shippingSolution',
        'transportation_option_id' => 'transportationOptionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'appointment_slot' => 'setAppointmentSlot',
        'carrier' => 'setCarrier',
        'inbound_plan_id' => 'setInboundPlanId',
        'placement_option_id' => 'setPlacementOptionId',
        'quote' => 'setQuote',
        'shipment_id' => 'setShipmentId',
        'shipping_mode' => 'setShippingMode',
        'shipping_solution' => 'setShippingSolution',
        'transportation_option_id' => 'setTransportationOptionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'appointment_slot' => 'getAppointmentSlot',
        'carrier' => 'getCarrier',
        'inbound_plan_id' => 'getInboundPlanId',
        'placement_option_id' => 'getPlacementOptionId',
        'quote' => 'getQuote',
        'shipment_id' => 'getShipmentId',
        'shipping_mode' => 'getShippingMode',
        'shipping_solution' => 'getShippingSolution',
        'transportation_option_id' => 'getTransportationOptionId'
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
        $this->container['appointment_slot'] = $data['appointment_slot'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['inbound_plan_id'] = $data['inbound_plan_id'] ?? null;
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipping_mode'] = $data['shipping_mode'] ?? null;
        $this->container['shipping_solution'] = $data['shipping_solution'] ?? null;
        $this->container['transportation_option_id'] = $data['transportation_option_id'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['appointment_slot'] !== null) {
            $this->container['appointment_slot']->validate();
            }

        if ($this->container['carrier'] === null) {
            throw new AssertionException("'carrier' can't be null");
        }

            $this->container['carrier']->validate();

        if ($this->container['inbound_plan_id'] === null) {
            throw new AssertionException("'inbound_plan_id' can't be null");
        }

        if ((mb_strlen($this->container['inbound_plan_id']) > 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['inbound_plan_id']) < 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['inbound_plan_id'])) {
            throw new AssertionException("invalid value for 'inbound_plan_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['placement_option_id'] === null) {
            throw new AssertionException("'placement_option_id' can't be null");
        }

        if ((mb_strlen($this->container['placement_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['placement_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['placement_option_id'])) {
            throw new AssertionException("invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

            if ($this->container['quote'] !== null) {
            $this->container['quote']->validate();
            }

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ((mb_strlen($this->container['shipment_id']) > 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['shipment_id']) < 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['shipment_id'])) {
            throw new AssertionException("invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['shipping_mode'] === null) {
            throw new AssertionException("'shipping_mode' can't be null");
        }

        if ((mb_strlen($this->container['shipping_mode']) > 1024)) {
            throw new AssertionException("invalid value for 'shipping_mode', the character length must be smaller than or equal to 1024.");
        }

        if ((mb_strlen($this->container['shipping_mode']) < 1)) {
            throw new AssertionException("invalid value for 'shipping_mode', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['shipping_solution'] === null) {
            throw new AssertionException("'shipping_solution' can't be null");
        }

        if ((mb_strlen($this->container['shipping_solution']) > 1024)) {
            throw new AssertionException("invalid value for 'shipping_solution', the character length must be smaller than or equal to 1024.");
        }

        if ((mb_strlen($this->container['shipping_solution']) < 1)) {
            throw new AssertionException("invalid value for 'shipping_solution', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['transportation_option_id'] === null) {
            throw new AssertionException("'transportation_option_id' can't be null");
        }

        if ((mb_strlen($this->container['transportation_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'transportation_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['transportation_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'transportation_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['transportation_option_id'])) {
            throw new AssertionException("invalid value for 'transportation_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

    }


    /**
     * Gets appointment_slot
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\AppointmentSlot|null
     */
    public function getAppointmentSlot()
    {
        return $this->container['appointment_slot'];
    }

    /**
     * Sets appointment_slot
     *
     * @param \AmazonPHP\SellingPartner\Model\FBAInbound\AppointmentSlot|null $appointment_slot appointment_slot
     *
     * @return self
     */
    public function setAppointmentSlot($appointment_slot) : self
    {
        $this->container['appointment_slot'] = $appointment_slot;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\Carrier
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param \AmazonPHP\SellingPartner\Model\FBAInbound\Carrier $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier) : self
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets inbound_plan_id
     *
     * @return string
     */
    public function getInboundPlanId()
    {
        return $this->container['inbound_plan_id'];
    }

    /**
     * Sets inbound_plan_id
     *
     * @param string $inbound_plan_id Identifier to an inbound plan.
     *
     * @return self
     */
    public function setInboundPlanId($inbound_plan_id) : self
    {
        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }

    /**
     * Gets placement_option_id
     *
     * @return string
     */
    public function getPlacementOptionId()
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id
     *
     * @param string $placement_option_id The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     *
     * @return self
     */
    public function setPlacementOptionId($placement_option_id) : self
    {
        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\Quote|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \AmazonPHP\SellingPartner\Model\FBAInbound\Quote|null $quote quote
     *
     * @return self
     */
    public function setQuote($quote) : self
    {
        $this->container['quote'] = $quote;

        return $this;
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
     * @param string $shipment_id Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     *
     * @return self
     */
    public function setShipmentId($shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipping_mode
     *
     * @return string
     */
    public function getShippingMode()
    {
        return $this->container['shipping_mode'];
    }

    /**
     * Sets shipping_mode
     *
     * @param string $shipping_mode The shipping mode associated with the transportation option. Available modes are ground small parcel, freight less-than-truckload (LTL), freight full-truckload (FTL) palletized, freight FTL non-palletized, ocean less-than-container-load (LCL), ocean full-container load (FCL), air small parcel, and air small parcel express.
     *
     * @return self
     */
    public function setShippingMode($shipping_mode) : self
    {
        $this->container['shipping_mode'] = $shipping_mode;

        return $this;
    }

    /**
     * Gets shipping_solution
     *
     * @return string
     */
    public function getShippingSolution()
    {
        return $this->container['shipping_solution'];
    }

    /**
     * Sets shipping_solution
     *
     * @param string $shipping_solution The shipping solution associated with the transportation option. Available solutions are Amazon-partnered carrier or 'use your own carrier'.
     *
     * @return self
     */
    public function setShippingSolution($shipping_solution) : self
    {
        $this->container['shipping_solution'] = $shipping_solution;

        return $this;
    }

    /**
     * Gets transportation_option_id
     *
     * @return string
     */
    public function getTransportationOptionId()
    {
        return $this->container['transportation_option_id'];
    }

    /**
     * Sets transportation_option_id
     *
     * @param string $transportation_option_id Identifier to a transportation option. A transportation option represent one option for how to send a shipment.
     *
     * @return self
     */
    public function setTransportationOptionId($transportation_option_id) : self
    {
        $this->container['transportation_option_id'] = $transportation_option_id;

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

