<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders;

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
class ScheduledDeliveryShipment implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ScheduledDeliveryShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'scheduled_delivery_service_type' => 'string',
        'earliest_nominated_delivery_date' => '\DateTimeInterface',
        'latest_nominated_delivery_date' => '\DateTimeInterface',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'scheduled_delivery_service_type' => null,
        'earliest_nominated_delivery_date' => 'date-time',
        'latest_nominated_delivery_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'scheduled_delivery_service_type' => 'scheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'earliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'latestNominatedDeliveryDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'scheduled_delivery_service_type' => 'setScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'setEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'setLatestNominatedDeliveryDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'scheduled_delivery_service_type' => 'getScheduledDeliveryServiceType',
        'earliest_nominated_delivery_date' => 'getEarliestNominatedDeliveryDate',
        'latest_nominated_delivery_date' => 'getLatestNominatedDeliveryDate',
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
        $this->container['scheduled_delivery_service_type'] = $data['scheduled_delivery_service_type'] ?? null;
        $this->container['earliest_nominated_delivery_date'] = $data['earliest_nominated_delivery_date'] ?? null;
        $this->container['latest_nominated_delivery_date'] = $data['latest_nominated_delivery_date'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
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
     *
     * @return string
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
    }

    /**
     * Gets scheduled_delivery_service_type.
     *
     * @return null|string
     */
    public function getScheduledDeliveryServiceType() : ?string
    {
        return $this->container['scheduled_delivery_service_type'];
    }

    /**
     * Sets scheduled_delivery_service_type.
     *
     * @param null|string $scheduled_delivery_service_type scheduled delivery service type
     *
     * @return self
     */
    public function setScheduledDeliveryServiceType(?string $scheduled_delivery_service_type) : self
    {
        $this->container['scheduled_delivery_service_type'] = $scheduled_delivery_service_type;

        return $this;
    }

    /**
     * Gets earliest_nominated_delivery_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getEarliestNominatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['earliest_nominated_delivery_date'];
    }

    /**
     * Sets earliest_nominated_delivery_date.
     *
     * @param null|\DateTimeInterface $earliest_nominated_delivery_date earliest nominated delivery date for the scheduled delivery
     *
     * @return self
     */
    public function setEarliestNominatedDeliveryDate(?\DateTimeInterface $earliest_nominated_delivery_date) : self
    {
        $this->container['earliest_nominated_delivery_date'] = $earliest_nominated_delivery_date;

        return $this;
    }

    /**
     * Gets latest_nominated_delivery_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getLatestNominatedDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['latest_nominated_delivery_date'];
    }

    /**
     * Sets latest_nominated_delivery_date.
     *
     * @param null|\DateTimeInterface $latest_nominated_delivery_date latest nominated delivery date for the scheduled delivery
     *
     * @return self
     */
    public function setLatestNominatedDeliveryDate(?\DateTimeInterface $latest_nominated_delivery_date) : self
    {
        $this->container['latest_nominated_delivery_date'] = $latest_nominated_delivery_date;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return bool
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
     *
     * @return bool|string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
