<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

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
class SellerDealPaymentEvent implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'SellerDealPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTimeInterface',
        'deal_id' => 'string',
        'deal_description' => 'string',
        'event_type' => 'string',
        'fee_type' => 'string',
        'fee_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'posted_date' => 'date-time',
        'deal_id' => null,
        'deal_description' => null,
        'event_type' => null,
        'fee_type' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'total_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'postedDate',
        'deal_id' => 'dealId',
        'deal_description' => 'dealDescription',
        'event_type' => 'eventType',
        'fee_type' => 'feeType',
        'fee_amount' => 'feeAmount',
        'tax_amount' => 'taxAmount',
        'total_amount' => 'totalAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'deal_id' => 'setDealId',
        'deal_description' => 'setDealDescription',
        'event_type' => 'setEventType',
        'fee_type' => 'setFeeType',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'total_amount' => 'setTotalAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'deal_id' => 'getDealId',
        'deal_description' => 'getDealDescription',
        'event_type' => 'getEventType',
        'fee_type' => 'getFeeType',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'total_amount' => 'getTotalAmount',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_description'] = $data['deal_description'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
        if ($this->container['fee_amount'] !== null) {
            $this->container['fee_amount']->validate();
        }

        if ($this->container['tax_amount'] !== null) {
            $this->container['tax_amount']->validate();
        }

        if ($this->container['total_amount'] !== null) {
            $this->container['total_amount']->validate();
        }
    }

    /**
     * Gets posted_date.
     *
     * @return null|\DateTimeInterface
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets deal_id.
     *
     * @return null|string
     */
    public function getDealId() : ?string
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id.
     *
     * @param null|string $deal_id the unique identifier of the deal
     *
     * @return self
     */
    public function setDealId(?string $deal_id) : self
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_description.
     *
     * @return null|string
     */
    public function getDealDescription() : ?string
    {
        return $this->container['deal_description'];
    }

    /**
     * Sets deal_description.
     *
     * @param null|string $deal_description the internal description of the deal
     *
     * @return self
     */
    public function setDealDescription(?string $deal_description) : self
    {
        $this->container['deal_description'] = $deal_description;

        return $this;
    }

    /**
     * Gets event_type.
     *
     * @return null|string
     */
    public function getEventType() : ?string
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type.
     *
     * @param null|string $event_type the type of event: SellerDealComplete
     *
     * @return self
     */
    public function setEventType(?string $event_type) : self
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets fee_type.
     *
     * @return null|string
     */
    public function getFeeType() : ?string
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param null|string $fee_type the type of fee: RunLightningDealFee
     *
     * @return self
     */
    public function setFeeType(?string $fee_type) : self
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getFeeAmount() : ?Currency
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount(?Currency $fee_amount) : self
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxAmount() : ?Currency
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount(?Currency $tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets total_amount.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTotalAmount() : ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount(?Currency $total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

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
