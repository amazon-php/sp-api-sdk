<?php
/**
 * OrderItemAcknowledgement
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

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
class OrderItemAcknowledgement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderItemAcknowledgement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'acknowledgement_code' => 'string',
        'acknowledged_quantity' => '\AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity',
        'scheduled_ship_date' => '\DateTime',
        'scheduled_delivery_date' => '\DateTime',
        'rejection_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'acknowledgement_code' => null,
        'acknowledged_quantity' => null,
        'scheduled_ship_date' => 'date-time',
        'scheduled_delivery_date' => 'date-time',
        'rejection_reason' => null
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
        'acknowledgement_code' => 'acknowledgementCode',
        'acknowledged_quantity' => 'acknowledgedQuantity',
        'scheduled_ship_date' => 'scheduledShipDate',
        'scheduled_delivery_date' => 'scheduledDeliveryDate',
        'rejection_reason' => 'rejectionReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'acknowledgement_code' => 'setAcknowledgementCode',
        'acknowledged_quantity' => 'setAcknowledgedQuantity',
        'scheduled_ship_date' => 'setScheduledShipDate',
        'scheduled_delivery_date' => 'setScheduledDeliveryDate',
        'rejection_reason' => 'setRejectionReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'acknowledgement_code' => 'getAcknowledgementCode',
        'acknowledged_quantity' => 'getAcknowledgedQuantity',
        'scheduled_ship_date' => 'getScheduledShipDate',
        'scheduled_delivery_date' => 'getScheduledDeliveryDate',
        'rejection_reason' => 'getRejectionReason'
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

    const ACKNOWLEDGEMENT_CODE_ACCEPTED = 'Accepted';
    const ACKNOWLEDGEMENT_CODE_BACKORDERED = 'Backordered';
    const ACKNOWLEDGEMENT_CODE_REJECTED = 'Rejected';
    const REJECTION_REASON_TEMPORARILY_UNAVAILABLE = 'TemporarilyUnavailable';
    const REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER = 'InvalidProductIdentifier';
    const REJECTION_REASON_OBSOLETE_PRODUCT = 'ObsoleteProduct';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcknowledgementCodeAllowableValues() : array
    {
        return [
            self::ACKNOWLEDGEMENT_CODE_ACCEPTED,
            self::ACKNOWLEDGEMENT_CODE_BACKORDERED,
            self::ACKNOWLEDGEMENT_CODE_REJECTED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRejectionReasonAllowableValues() : array
    {
        return [
            self::REJECTION_REASON_TEMPORARILY_UNAVAILABLE,
            self::REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER,
            self::REJECTION_REASON_OBSOLETE_PRODUCT,
        ];
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
        $this->container['acknowledgement_code'] = $data['acknowledgement_code'] ?? null;
        $this->container['acknowledged_quantity'] = $data['acknowledged_quantity'] ?? null;
        $this->container['scheduled_ship_date'] = $data['scheduled_ship_date'] ?? null;
        $this->container['scheduled_delivery_date'] = $data['scheduled_delivery_date'] ?? null;
        $this->container['rejection_reason'] = $data['rejection_reason'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['acknowledgement_code'] === null) {
            throw new AssertionException("'acknowledgement_code' can't be null");
        }

        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (!is_null($this->container['acknowledgement_code']) && !in_array($this->container['acknowledgement_code'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'acknowledgement_code', must be one of '%s'",
                    $this->container['acknowledgement_code'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['acknowledged_quantity'] === null) {
            throw new AssertionException("'acknowledged_quantity' can't be null");
        }

            $this->container['acknowledged_quantity']->validate();

        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($this->container['rejection_reason']) && !in_array($this->container['rejection_reason'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'rejection_reason', must be one of '%s'",
                    $this->container['rejection_reason'],
                    implode("', '", $allowedValues)
                )
            );
        }

    }


    /**
     * Gets acknowledgement_code
     *
     * @return string
     */
    public function getAcknowledgementCode()
    {
        return $this->container['acknowledgement_code'];
    }

    /**
     * Sets acknowledgement_code
     *
     * @param string $acknowledgement_code This indicates the acknowledgement code.
     *
     * @return self
     */
    public function setAcknowledgementCode($acknowledgement_code) : self
    {
        $this->container['acknowledgement_code'] = $acknowledgement_code;

        return $this;
    }

    /**
     * Gets acknowledged_quantity
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity
     */
    public function getAcknowledgedQuantity()
    {
        return $this->container['acknowledged_quantity'];
    }

    /**
     * Sets acknowledged_quantity
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorOrders\ItemQuantity $acknowledged_quantity acknowledged_quantity
     *
     * @return self
     */
    public function setAcknowledgedQuantity($acknowledged_quantity) : self
    {
        $this->container['acknowledged_quantity'] = $acknowledged_quantity;

        return $this;
    }

    /**
     * Gets scheduled_ship_date
     *
     * @return \DateTime|null
     */
    public function getScheduledShipDate()
    {
        return $this->container['scheduled_ship_date'];
    }

    /**
     * Sets scheduled_ship_date
     *
     * @param \DateTime|null $scheduled_ship_date Estimated ship date per line item. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setScheduledShipDate($scheduled_ship_date) : self
    {
        $this->container['scheduled_ship_date'] = $scheduled_ship_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_date
     *
     * @return \DateTime|null
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduled_delivery_date'];
    }

    /**
     * Sets scheduled_delivery_date
     *
     * @param \DateTime|null $scheduled_delivery_date Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setScheduledDeliveryDate($scheduled_delivery_date) : self
    {
        $this->container['scheduled_delivery_date'] = $scheduled_delivery_date;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return string|null
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param string|null $rejection_reason Indicates the reason for rejection.
     *
     * @return self
     */
    public function setRejectionReason($rejection_reason) : self
    {
        $this->container['rejection_reason'] = $rejection_reason;

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
