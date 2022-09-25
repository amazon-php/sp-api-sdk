<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
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
class FulfillmentShipment implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const FULFILLMENT_SHIPMENT_STATUS_PENDING = 'PENDING';

    public const FULFILLMENT_SHIPMENT_STATUS_SHIPPED = 'SHIPPED';

    public const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER = 'CANCELLED_BY_FULFILLER';

    public const FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER = 'CANCELLED_BY_SELLER';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FulfillmentShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_shipment_id' => 'string',
        'fulfillment_center_id' => 'string',
        'fulfillment_shipment_status' => 'string',
        'shipping_date' => '\DateTimeInterface',
        'estimated_arrival_date' => '\DateTimeInterface',
        'shipping_notes' => 'string[]',
        'fulfillment_shipment_item' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentItem[]',
        'fulfillment_shipment_package' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentPackage[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'amazon_shipment_id' => null,
        'fulfillment_center_id' => null,
        'fulfillment_shipment_status' => null,
        'shipping_date' => 'date-time',
        'estimated_arrival_date' => 'date-time',
        'shipping_notes' => null,
        'fulfillment_shipment_item' => null,
        'fulfillment_shipment_package' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_shipment_id' => 'amazonShipmentId',
        'fulfillment_center_id' => 'fulfillmentCenterId',
        'fulfillment_shipment_status' => 'fulfillmentShipmentStatus',
        'shipping_date' => 'shippingDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_shipment_item' => 'fulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'fulfillmentShipmentPackage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'fulfillment_center_id' => 'setFulfillmentCenterId',
        'fulfillment_shipment_status' => 'setFulfillmentShipmentStatus',
        'shipping_date' => 'setShippingDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_shipment_item' => 'setFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'setFulfillmentShipmentPackage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'fulfillment_center_id' => 'getFulfillmentCenterId',
        'fulfillment_shipment_status' => 'getFulfillmentShipmentStatus',
        'shipping_date' => 'getShippingDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_shipment_item' => 'getFulfillmentShipmentItem',
        'fulfillment_shipment_package' => 'getFulfillmentShipmentPackage',
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
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
        $this->container['fulfillment_shipment_status'] = $data['fulfillment_shipment_status'] ?? null;
        $this->container['shipping_date'] = $data['shipping_date'] ?? null;
        $this->container['estimated_arrival_date'] = $data['estimated_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_shipment_item'] = $data['fulfillment_shipment_item'] ?? null;
        $this->container['fulfillment_shipment_package'] = $data['fulfillment_shipment_package'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFulfillmentShipmentStatusAllowableValues() : array
    {
        return [
            self::FULFILLMENT_SHIPMENT_STATUS_PENDING,
            self::FULFILLMENT_SHIPMENT_STATUS_SHIPPED,
            self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_FULFILLER,
            self::FULFILLMENT_SHIPMENT_STATUS_CANCELLED_BY_SELLER,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['amazon_shipment_id'] === null) {
            throw new AssertionException("'amazon_shipment_id' can't be null");
        }

        if ($this->container['fulfillment_center_id'] === null) {
            throw new AssertionException("'fulfillment_center_id' can't be null");
        }

        if ($this->container['fulfillment_shipment_status'] === null) {
            throw new AssertionException("'fulfillment_shipment_status' can't be null");
        }

        $allowedValues = $this->getFulfillmentShipmentStatusAllowableValues();

        if (null !== $this->container['fulfillment_shipment_status'] && !\in_array($this->container['fulfillment_shipment_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'fulfillment_shipment_status', must be one of '%s'",
                    $this->container['fulfillment_shipment_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['fulfillment_shipment_item'] === null) {
            throw new AssertionException("'fulfillment_shipment_item' can't be null");
        }
    }

    /**
     * Gets amazon_shipment_id.
     */
    public function getAmazonShipmentId() : string
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id a shipment identifier assigned by Amazon
     */
    public function setAmazonShipmentId(string $amazon_shipment_id) : self
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets fulfillment_center_id.
     */
    public function getFulfillmentCenterId() : string
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id.
     *
     * @param string $fulfillment_center_id an identifier for the fulfillment center that the shipment will be sent from
     */
    public function setFulfillmentCenterId(string $fulfillment_center_id) : self
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_status.
     */
    public function getFulfillmentShipmentStatus() : string
    {
        return $this->container['fulfillment_shipment_status'];
    }

    /**
     * Sets fulfillment_shipment_status.
     *
     * @param string $fulfillment_shipment_status the current status of the shipment
     */
    public function setFulfillmentShipmentStatus(string $fulfillment_shipment_status) : self
    {
        $this->container['fulfillment_shipment_status'] = $fulfillment_shipment_status;

        return $this;
    }

    /**
     * Gets shipping_date.
     */
    public function getShippingDate() : ?\DateTimeInterface
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date.
     *
     * @param null|\DateTimeInterface $shipping_date shipping_date
     */
    public function setShippingDate(?\DateTimeInterface $shipping_date) : self
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     */
    public function getEstimatedArrivalDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param null|\DateTimeInterface $estimated_arrival_date estimated_arrival_date
     */
    public function setEstimatedArrivalDate(?\DateTimeInterface $estimated_arrival_date) : self
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets shipping_notes.
     *
     * @return null|string[]
     */
    public function getShippingNotes() : ?array
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes.
     *
     * @param null|string[] $shipping_notes Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren't available.
     */
    public function setShippingNotes(?array $shipping_notes) : self
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_item.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentItem[]
     */
    public function getFulfillmentShipmentItem() : array
    {
        return $this->container['fulfillment_shipment_item'];
    }

    /**
     * Sets fulfillment_shipment_item.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentItem[] $fulfillment_shipment_item an array of fulfillment shipment item information
     */
    public function setFulfillmentShipmentItem(array $fulfillment_shipment_item) : self
    {
        $this->container['fulfillment_shipment_item'] = $fulfillment_shipment_item;

        return $this;
    }

    /**
     * Gets fulfillment_shipment_package.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentPackage[]
     */
    public function getFulfillmentShipmentPackage() : ?array
    {
        return $this->container['fulfillment_shipment_package'];
    }

    /**
     * Sets fulfillment_shipment_package.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipmentPackage[] $fulfillment_shipment_package an array of fulfillment shipment package information
     */
    public function setFulfillmentShipmentPackage(?array $fulfillment_shipment_package) : self
    {
        $this->container['fulfillment_shipment_package'] = $fulfillment_shipment_package;

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
    public function offsetGet($offset)
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
