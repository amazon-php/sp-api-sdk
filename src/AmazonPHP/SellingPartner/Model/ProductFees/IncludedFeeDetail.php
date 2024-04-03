<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\ProductFees;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Product Fees
*
* The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
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
class IncludedFeeDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'IncludedFeeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fee_type' => 'string',
        'fee_amount' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'fee_promotion' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType',
        'final_fee' => '\AmazonPHP\SellingPartner\Model\ProductFees\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fee_type' => null,
        'fee_amount' => null,
        'fee_promotion' => null,
        'tax_amount' => null,
        'final_fee' => null
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
        'fee_type' => 'FeeType',
        'fee_amount' => 'FeeAmount',
        'fee_promotion' => 'FeePromotion',
        'tax_amount' => 'TaxAmount',
        'final_fee' => 'FinalFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'fee_promotion' => 'setFeePromotion',
        'tax_amount' => 'setTaxAmount',
        'final_fee' => 'setFinalFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'fee_promotion' => 'getFeePromotion',
        'tax_amount' => 'getTaxAmount',
        'final_fee' => 'getFinalFee'
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
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['fee_promotion'] = $data['fee_promotion'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['final_fee'] = $data['final_fee'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['fee_type'] === null) {
            throw new AssertionException("'fee_type' can't be null");
        }

        if ($this->container['fee_amount'] === null) {
            throw new AssertionException("'fee_amount' can't be null");
        }

            $this->container['fee_amount']->validate();

            if ($this->container['fee_promotion'] !== null) {
            $this->container['fee_promotion']->validate();
            }

            if ($this->container['tax_amount'] !== null) {
            $this->container['tax_amount']->validate();
            }

        if ($this->container['final_fee'] === null) {
            throw new AssertionException("'final_fee' can't be null");
        }

            $this->container['final_fee']->validate();

    }


    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type The type of fee charged to a seller.
     *
     * @return self
     */
    public function setFeeType($fee_type) : self
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount) : self
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets fee_promotion
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType|null
     */
    public function getFeePromotion()
    {
        return $this->container['fee_promotion'];
    }

    /**
     * Sets fee_promotion
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType|null $fee_promotion fee_promotion
     *
     * @return self
     */
    public function setFeePromotion($fee_promotion) : self
    {
        $this->container['fee_promotion'] = $fee_promotion;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets final_fee
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType
     */
    public function getFinalFee()
    {
        return $this->container['final_fee'];
    }

    /**
     * Sets final_fee
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductFees\MoneyType $final_fee final_fee
     *
     * @return self
     */
    public function setFinalFee($final_fee) : self
    {
        $this->container['final_fee'] = $final_fee;

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

