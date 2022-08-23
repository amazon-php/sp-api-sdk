<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class AvailableCarrierWillPickUpOption implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AvailableCarrierWillPickUpOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carrier_will_pick_up_option' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption',
        'charge' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'carrier_will_pick_up_option' => null,
        'charge' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
        'charge' => 'Charge',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
        'charge' => 'setCharge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
        'charge' => 'getCharge',
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
        $this->container['carrier_will_pick_up_option'] = $data['carrier_will_pick_up_option'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
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
        if ($this->container['carrier_will_pick_up_option'] === null) {
            throw new AssertionException("'carrier_will_pick_up_option' can't be null");
        }

        if ($this->container['charge'] === null) {
            throw new AssertionException("'charge' can't be null");
        }

        $this->container['charge']->validate();
    }

    /**
     * Gets carrier_will_pick_up_option.
     */
    public function getCarrierWillPickUpOption() : CarrierWillPickUpOption
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption $carrier_will_pick_up_option carrier_will_pick_up_option
     *
     * @return self
     */
    public function setCarrierWillPickUpOption(CarrierWillPickUpOption $carrier_will_pick_up_option) : self
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }

    /**
     * Gets charge.
     */
    public function getCharge() : CurrencyAmount
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CurrencyAmount $charge charge
     *
     * @return self
     */
    public function setCharge(CurrencyAmount $charge) : self
    {
        $this->container['charge'] = $charge;

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
