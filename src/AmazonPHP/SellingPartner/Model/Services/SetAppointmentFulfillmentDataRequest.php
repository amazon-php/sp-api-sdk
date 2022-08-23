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
class SetAppointmentFulfillmentDataRequest implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'SetAppointmentFulfillmentDataRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fulfillment_time' => '\AmazonPHP\SellingPartner\Model\Services\FulfillmentTime',
        'appointment_resources' => '\AmazonPHP\SellingPartner\Model\Services\AppointmentResource[]',
        'fulfillment_documents' => '\AmazonPHP\SellingPartner\Model\Services\FulfillmentDocument[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'fulfillment_time' => null,
        'appointment_resources' => null,
        'fulfillment_documents' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillment_time' => 'fulfillmentTime',
        'appointment_resources' => 'appointmentResources',
        'fulfillment_documents' => 'fulfillmentDocuments',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillment_time' => 'setFulfillmentTime',
        'appointment_resources' => 'setAppointmentResources',
        'fulfillment_documents' => 'setFulfillmentDocuments',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillment_time' => 'getFulfillmentTime',
        'appointment_resources' => 'getAppointmentResources',
        'fulfillment_documents' => 'getFulfillmentDocuments',
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
        $this->container['fulfillment_time'] = $data['fulfillment_time'] ?? null;
        $this->container['appointment_resources'] = $data['appointment_resources'] ?? null;
        $this->container['fulfillment_documents'] = $data['fulfillment_documents'] ?? null;
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
        if ($this->container['fulfillment_time'] !== null) {
            $this->container['fulfillment_time']->validate();
        }
    }

    /**
     * Gets fulfillment_time.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\FulfillmentTime
     */
    public function getFulfillmentTime() : ?FulfillmentTime
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\FulfillmentTime $fulfillment_time fulfillment_time
     *
     * @return self
     */
    public function setFulfillmentTime(?FulfillmentTime $fulfillment_time) : self
    {
        $this->container['fulfillment_time'] = $fulfillment_time;

        return $this;
    }

    /**
     * Gets appointment_resources.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\AppointmentResource[]
     */
    public function getAppointmentResources() : ?array
    {
        return $this->container['appointment_resources'];
    }

    /**
     * Sets appointment_resources.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\AppointmentResource[] $appointment_resources list of resources that performs or performed job appointment fulfillment
     *
     * @return self
     */
    public function setAppointmentResources(?array $appointment_resources) : self
    {
        $this->container['appointment_resources'] = $appointment_resources;

        return $this;
    }

    /**
     * Gets fulfillment_documents.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\FulfillmentDocument[]
     */
    public function getFulfillmentDocuments() : ?array
    {
        return $this->container['fulfillment_documents'];
    }

    /**
     * Sets fulfillment_documents.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\FulfillmentDocument[] $fulfillment_documents list of documents captured during service appointment fulfillment
     *
     * @return self
     */
    public function setFulfillmentDocuments(?array $fulfillment_documents) : self
    {
        $this->container['fulfillment_documents'] = $fulfillment_documents;

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
