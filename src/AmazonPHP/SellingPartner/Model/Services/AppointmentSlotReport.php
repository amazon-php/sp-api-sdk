<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

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
class AppointmentSlotReport implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const SCHEDULING_TYPE_REAL_TIME_SCHEDULING = 'REAL_TIME_SCHEDULING';

    public const SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING = 'NON_REAL_TIME_SCHEDULING';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AppointmentSlotReport';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'scheduling_type' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'appointment_slots' => '\AmazonPHP\SellingPartner\Model\Services\AppointmentSlot[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'scheduling_type' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'appointment_slots' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'scheduling_type' => 'schedulingType',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'appointment_slots' => 'appointmentSlots',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'scheduling_type' => 'setSchedulingType',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'appointment_slots' => 'setAppointmentSlots',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'scheduling_type' => 'getSchedulingType',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'appointment_slots' => 'getAppointmentSlots',
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
        $this->container['scheduling_type'] = $data['scheduling_type'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['appointment_slots'] = $data['appointment_slots'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getSchedulingTypeAllowableValues() : array
    {
        return [
            self::SCHEDULING_TYPE_REAL_TIME_SCHEDULING,
            self::SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getSchedulingTypeAllowableValues();

        if (null !== $this->container['scheduling_type'] && !\in_array($this->container['scheduling_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'scheduling_type', must be one of '%s'",
                    $this->container['scheduling_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets scheduling_type.
     *
     * @return null|string
     */
    public function getSchedulingType() : ?string
    {
        return $this->container['scheduling_type'];
    }

    /**
     * Sets scheduling_type.
     *
     * @param null|string $scheduling_type defines the type of slots
     *
     * @return self
     */
    public function setSchedulingType(?string $scheduling_type) : self
    {
        $this->container['scheduling_type'] = $scheduling_type;

        return $this;
    }

    /**
     * Gets start_time.
     *
     * @return null|\DateTime
     */
    public function getStartTime() : ?\DateTime
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time.
     *
     * @param null|\DateTime $start_time start Time from which the appointment slots are generated in ISO 8601 format
     *
     * @return self
     */
    public function setStartTime(?\DateTime $start_time) : self
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time.
     *
     * @return null|\DateTime
     */
    public function getEndTime() : ?\DateTime
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time.
     *
     * @param null|\DateTime $end_time end Time up to which the appointment slots are generated in ISO 8601 format
     *
     * @return self
     */
    public function setEndTime(?\DateTime $end_time) : self
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets appointment_slots.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\AppointmentSlot[]
     */
    public function getAppointmentSlots() : ?array
    {
        return $this->container['appointment_slots'];
    }

    /**
     * Sets appointment_slots.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AppointmentSlot[] $appointment_slots a list of time windows along with associated capacity in which the service can be performed
     *
     * @return self
     */
    public function setAppointmentSlots(?array $appointment_slots) : self
    {
        $this->container['appointment_slots'] = $appointment_slots;

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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
