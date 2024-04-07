<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Orders;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Orders
*
* The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  _Note:_ The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemBuyerInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemBuyerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'buyer_customized_info' => '\AmazonPHP\SellingPartner\Model\Orders\BuyerCustomizedInfoDetail',
        'gift_wrap_price' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'gift_wrap_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'gift_message_text' => 'string',
        'gift_wrap_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'buyer_customized_info' => null,
        'gift_wrap_price' => null,
        'gift_wrap_tax' => null,
        'gift_message_text' => null,
        'gift_wrap_level' => null
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
        'buyer_customized_info' => 'BuyerCustomizedInfo',
        'gift_wrap_price' => 'GiftWrapPrice',
        'gift_wrap_tax' => 'GiftWrapTax',
        'gift_message_text' => 'GiftMessageText',
        'gift_wrap_level' => 'GiftWrapLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'buyer_customized_info' => 'setBuyerCustomizedInfo',
        'gift_wrap_price' => 'setGiftWrapPrice',
        'gift_wrap_tax' => 'setGiftWrapTax',
        'gift_message_text' => 'setGiftMessageText',
        'gift_wrap_level' => 'setGiftWrapLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'buyer_customized_info' => 'getBuyerCustomizedInfo',
        'gift_wrap_price' => 'getGiftWrapPrice',
        'gift_wrap_tax' => 'getGiftWrapTax',
        'gift_message_text' => 'getGiftMessageText',
        'gift_wrap_level' => 'getGiftWrapLevel'
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
        $this->container['buyer_customized_info'] = $data['buyer_customized_info'] ?? null;
        $this->container['gift_wrap_price'] = $data['gift_wrap_price'] ?? null;
        $this->container['gift_wrap_tax'] = $data['gift_wrap_tax'] ?? null;
        $this->container['gift_message_text'] = $data['gift_message_text'] ?? null;
        $this->container['gift_wrap_level'] = $data['gift_wrap_level'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['buyer_customized_info'] !== null) {
            $this->container['buyer_customized_info']->validate();
            }

            if ($this->container['gift_wrap_price'] !== null) {
            $this->container['gift_wrap_price']->validate();
            }

            if ($this->container['gift_wrap_tax'] !== null) {
            $this->container['gift_wrap_tax']->validate();
            }

    }


    /**
     * Gets buyer_customized_info
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\BuyerCustomizedInfoDetail|null
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->container['buyer_customized_info'];
    }

    /**
     * Sets buyer_customized_info
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\BuyerCustomizedInfoDetail|null $buyer_customized_info buyer_customized_info
     *
     * @return self
     */
    public function setBuyerCustomizedInfo($buyer_customized_info) : self
    {
        $this->container['buyer_customized_info'] = $buyer_customized_info;

        return $this;
    }

    /**
     * Gets gift_wrap_price
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\Money|null
     */
    public function getGiftWrapPrice()
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\Money|null $gift_wrap_price gift_wrap_price
     *
     * @return self
     */
    public function setGiftWrapPrice($gift_wrap_price) : self
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets gift_wrap_tax
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\Money|null
     */
    public function getGiftWrapTax()
    {
        return $this->container['gift_wrap_tax'];
    }

    /**
     * Sets gift_wrap_tax
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\Money|null $gift_wrap_tax gift_wrap_tax
     *
     * @return self
     */
    public function setGiftWrapTax($gift_wrap_tax) : self
    {
        $this->container['gift_wrap_tax'] = $gift_wrap_tax;

        return $this;
    }

    /**
     * Gets gift_message_text
     *
     * @return string|null
     */
    public function getGiftMessageText()
    {
        return $this->container['gift_message_text'];
    }

    /**
     * Sets gift_message_text
     *
     * @param string|null $gift_message_text A gift message provided by the buyer.
     *
     * @return self
     */
    public function setGiftMessageText($gift_message_text) : self
    {
        $this->container['gift_message_text'] = $gift_message_text;

        return $this;
    }

    /**
     * Gets gift_wrap_level
     *
     * @return string|null
     */
    public function getGiftWrapLevel()
    {
        return $this->container['gift_wrap_level'];
    }

    /**
     * Sets gift_wrap_level
     *
     * @param string|null $gift_wrap_level The gift wrap level specified by the buyer.
     *
     * @return self
     */
    public function setGiftWrapLevel($gift_wrap_level) : self
    {
        $this->container['gift_wrap_level'] = $gift_wrap_level;

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

