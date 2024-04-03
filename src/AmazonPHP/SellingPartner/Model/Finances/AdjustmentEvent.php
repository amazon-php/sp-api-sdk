<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Finances;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Finances
*
* The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class AdjustmentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AdjustmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'adjustment_type' => 'string',
        'posted_date' => '\DateTimeInterface',
        'adjustment_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'adjustment_item_list' => '\AmazonPHP\SellingPartner\Model\Finances\AdjustmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'adjustment_type' => null,
        'posted_date' => 'date-time',
        'adjustment_amount' => null,
        'adjustment_item_list' => null
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
        'adjustment_type' => 'AdjustmentType',
        'posted_date' => 'PostedDate',
        'adjustment_amount' => 'AdjustmentAmount',
        'adjustment_item_list' => 'AdjustmentItemList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'adjustment_type' => 'setAdjustmentType',
        'posted_date' => 'setPostedDate',
        'adjustment_amount' => 'setAdjustmentAmount',
        'adjustment_item_list' => 'setAdjustmentItemList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'adjustment_type' => 'getAdjustmentType',
        'posted_date' => 'getPostedDate',
        'adjustment_amount' => 'getAdjustmentAmount',
        'adjustment_item_list' => 'getAdjustmentItemList'
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
        $this->container['adjustment_type'] = $data['adjustment_type'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['adjustment_amount'] = $data['adjustment_amount'] ?? null;
        $this->container['adjustment_item_list'] = $data['adjustment_item_list'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['adjustment_amount'] !== null) {
            $this->container['adjustment_amount']->validate();
            }

    }


    /**
     * Gets adjustment_type
     *
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustment_type'];
    }

    /**
     * Sets adjustment_type
     *
     * @param string|null $adjustment_type The type of adjustment.  Possible values:  * FBAInventoryReimbursement - An FBA inventory reimbursement to a seller's account. This occurs if a seller's inventory is damaged.  * ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller's account is held back.  * PostageBilling - The amount paid by a seller for shipping labels.  * PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.  * LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller's account for a package that we lost or damaged.  * CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller's account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.  * ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller's account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.  * SellerRewards - An award credited to a seller's account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace.
     *
     * @return self
     */
    public function setAdjustmentType($adjustment_type) : self
    {
        $this->container['adjustment_type'] = $adjustment_type;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return \DateTimeInterface|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTimeInterface|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets adjustment_amount
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustment_amount'];
    }

    /**
     * Sets adjustment_amount
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $adjustment_amount adjustment_amount
     *
     * @return self
     */
    public function setAdjustmentAmount($adjustment_amount) : self
    {
        $this->container['adjustment_amount'] = $adjustment_amount;

        return $this;
    }

    /**
     * Gets adjustment_item_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\AdjustmentItem[]|null
     */
    public function getAdjustmentItemList()
    {
        return $this->container['adjustment_item_list'];
    }

    /**
     * Sets adjustment_item_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\AdjustmentItem[]|null $adjustment_item_list A list of information about items in an adjustment to the seller's account.
     *
     * @return self
     */
    public function setAdjustmentItemList($adjustment_item_list) : self
    {
        $this->container['adjustment_item_list'] = $adjustment_item_list;

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

