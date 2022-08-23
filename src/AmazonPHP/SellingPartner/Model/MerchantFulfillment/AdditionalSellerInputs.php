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
class AdditionalSellerInputs implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'AdditionalSellerInputs';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'additional_input_field_name' => 'string',
        'additional_seller_input' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInput',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'additional_input_field_name' => null,
        'additional_seller_input' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'additional_input_field_name' => 'AdditionalInputFieldName',
        'additional_seller_input' => 'AdditionalSellerInput',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'additional_input_field_name' => 'setAdditionalInputFieldName',
        'additional_seller_input' => 'setAdditionalSellerInput',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'additional_input_field_name' => 'getAdditionalInputFieldName',
        'additional_seller_input' => 'getAdditionalSellerInput',
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
        $this->container['additional_input_field_name'] = $data['additional_input_field_name'] ?? null;
        $this->container['additional_seller_input'] = $data['additional_seller_input'] ?? null;
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
        if ($this->container['additional_input_field_name'] === null) {
            throw new AssertionException("'additional_input_field_name' can't be null");
        }

        if ($this->container['additional_seller_input'] === null) {
            throw new AssertionException("'additional_seller_input' can't be null");
        }

        $this->container['additional_seller_input']->validate();
    }

    /**
     * Gets additional_input_field_name.
     */
    public function getAdditionalInputFieldName() : string
    {
        return $this->container['additional_input_field_name'];
    }

    /**
     * Sets additional_input_field_name.
     *
     * @param string $additional_input_field_name the name of the additional input field
     *
     * @return self
     */
    public function setAdditionalInputFieldName(string $additional_input_field_name) : self
    {
        $this->container['additional_input_field_name'] = $additional_input_field_name;

        return $this;
    }

    /**
     * Gets additional_seller_input.
     */
    public function getAdditionalSellerInput() : AdditionalSellerInput
    {
        return $this->container['additional_seller_input'];
    }

    /**
     * Sets additional_seller_input.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInput $additional_seller_input additional_seller_input
     *
     * @return self
     */
    public function setAdditionalSellerInput(AdditionalSellerInput $additional_seller_input) : self
    {
        $this->container['additional_seller_input'] = $additional_seller_input;

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
