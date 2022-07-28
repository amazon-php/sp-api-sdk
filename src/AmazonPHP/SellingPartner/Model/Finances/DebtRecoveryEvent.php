<?php
/**
 * DebtRecoveryEvent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Finances;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DebtRecoveryEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'debt_recovery_type' => 'string',
        'recovery_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'over_payment_credit' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'debt_recovery_item_list' => '\AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryItem[]',
        'charge_instrument_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeInstrument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'debt_recovery_type' => null,
        'recovery_amount' => null,
        'over_payment_credit' => null,
        'debt_recovery_item_list' => null,
        'charge_instrument_list' => null
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
        'debt_recovery_type' => 'DebtRecoveryType',
        'recovery_amount' => 'RecoveryAmount',
        'over_payment_credit' => 'OverPaymentCredit',
        'debt_recovery_item_list' => 'DebtRecoveryItemList',
        'charge_instrument_list' => 'ChargeInstrumentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'debt_recovery_type' => 'setDebtRecoveryType',
        'recovery_amount' => 'setRecoveryAmount',
        'over_payment_credit' => 'setOverPaymentCredit',
        'debt_recovery_item_list' => 'setDebtRecoveryItemList',
        'charge_instrument_list' => 'setChargeInstrumentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'debt_recovery_type' => 'getDebtRecoveryType',
        'recovery_amount' => 'getRecoveryAmount',
        'over_payment_credit' => 'getOverPaymentCredit',
        'debt_recovery_item_list' => 'getDebtRecoveryItemList',
        'charge_instrument_list' => 'getChargeInstrumentList'
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
        $this->container['debt_recovery_type'] = $data['debt_recovery_type'] ?? null;
        $this->container['recovery_amount'] = $data['recovery_amount'] ?? null;
        $this->container['over_payment_credit'] = $data['over_payment_credit'] ?? null;
        $this->container['debt_recovery_item_list'] = $data['debt_recovery_item_list'] ?? null;
        $this->container['charge_instrument_list'] = $data['charge_instrument_list'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['recovery_amount'] !== null) {
            $this->container['recovery_amount']->validate();
            }

            if ($this->container['over_payment_credit'] !== null) {
            $this->container['over_payment_credit']->validate();
            }

    }


    /**
     * Gets debt_recovery_type
     *
     * @return string|null
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debt_recovery_type'];
    }

    /**
     * Sets debt_recovery_type
     *
     * @param string|null $debt_recovery_type The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment
     *
     * @return self
     */
    public function setDebtRecoveryType($debt_recovery_type) : self
    {
        $this->container['debt_recovery_type'] = $debt_recovery_type;

        return $this;
    }

    /**
     * Gets recovery_amount
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getRecoveryAmount()
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $recovery_amount recovery_amount
     *
     * @return self
     */
    public function setRecoveryAmount($recovery_amount) : self
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets over_payment_credit
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getOverPaymentCredit()
    {
        return $this->container['over_payment_credit'];
    }

    /**
     * Sets over_payment_credit
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $over_payment_credit over_payment_credit
     *
     * @return self
     */
    public function setOverPaymentCredit($over_payment_credit) : self
    {
        $this->container['over_payment_credit'] = $over_payment_credit;

        return $this;
    }

    /**
     * Gets debt_recovery_item_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryItem[]|null
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debt_recovery_item_list'];
    }

    /**
     * Sets debt_recovery_item_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\DebtRecoveryItem[]|null $debt_recovery_item_list A list of debt recovery item information.
     *
     * @return self
     */
    public function setDebtRecoveryItemList($debt_recovery_item_list) : self
    {
        $this->container['debt_recovery_item_list'] = $debt_recovery_item_list;

        return $this;
    }

    /**
     * Gets charge_instrument_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ChargeInstrument[]|null
     */
    public function getChargeInstrumentList()
    {
        return $this->container['charge_instrument_list'];
    }

    /**
     * Sets charge_instrument_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\ChargeInstrument[]|null $charge_instrument_list A list of payment instruments.
     *
     * @return self
     */
    public function setChargeInstrumentList($charge_instrument_list) : self
    {
        $this->container['charge_instrument_list'] = $charge_instrument_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param integer $offset Offset
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
