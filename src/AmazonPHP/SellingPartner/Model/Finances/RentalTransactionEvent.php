<?php
/**
 * RentalTransactionEvent
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
class RentalTransactionEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RentalTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'rental_event_type' => 'string',
        'extension_length' => 'int',
        'posted_date' => '\DateTime',
        'rental_charge_list' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]',
        'rental_fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'marketplace_name' => 'string',
        'rental_initial_value' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'rental_reimbursement' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'rental_tax_withheld_list' => '\AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amazon_order_id' => null,
        'rental_event_type' => null,
        'extension_length' => 'int32',
        'posted_date' => 'date-time',
        'rental_charge_list' => null,
        'rental_fee_list' => null,
        'marketplace_name' => null,
        'rental_initial_value' => null,
        'rental_reimbursement' => null,
        'rental_tax_withheld_list' => null
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
        'amazon_order_id' => 'AmazonOrderId',
        'rental_event_type' => 'RentalEventType',
        'extension_length' => 'ExtensionLength',
        'posted_date' => 'PostedDate',
        'rental_charge_list' => 'RentalChargeList',
        'rental_fee_list' => 'RentalFeeList',
        'marketplace_name' => 'MarketplaceName',
        'rental_initial_value' => 'RentalInitialValue',
        'rental_reimbursement' => 'RentalReimbursement',
        'rental_tax_withheld_list' => 'RentalTaxWithheldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'rental_event_type' => 'setRentalEventType',
        'extension_length' => 'setExtensionLength',
        'posted_date' => 'setPostedDate',
        'rental_charge_list' => 'setRentalChargeList',
        'rental_fee_list' => 'setRentalFeeList',
        'marketplace_name' => 'setMarketplaceName',
        'rental_initial_value' => 'setRentalInitialValue',
        'rental_reimbursement' => 'setRentalReimbursement',
        'rental_tax_withheld_list' => 'setRentalTaxWithheldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'rental_event_type' => 'getRentalEventType',
        'extension_length' => 'getExtensionLength',
        'posted_date' => 'getPostedDate',
        'rental_charge_list' => 'getRentalChargeList',
        'rental_fee_list' => 'getRentalFeeList',
        'marketplace_name' => 'getMarketplaceName',
        'rental_initial_value' => 'getRentalInitialValue',
        'rental_reimbursement' => 'getRentalReimbursement',
        'rental_tax_withheld_list' => 'getRentalTaxWithheldList'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['rental_event_type'] = $data['rental_event_type'] ?? null;
        $this->container['extension_length'] = $data['extension_length'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['rental_charge_list'] = $data['rental_charge_list'] ?? null;
        $this->container['rental_fee_list'] = $data['rental_fee_list'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['rental_initial_value'] = $data['rental_initial_value'] ?? null;
        $this->container['rental_reimbursement'] = $data['rental_reimbursement'] ?? null;
        $this->container['rental_tax_withheld_list'] = $data['rental_tax_withheld_list'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['rental_initial_value'] !== null) {
            $this->container['rental_initial_value']->validate();
            }

            if ($this->container['rental_reimbursement'] !== null) {
            $this->container['rental_reimbursement']->validate();
            }

    }


    /**
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets rental_event_type
     *
     * @return string|null
     */
    public function getRentalEventType()
    {
        return $this->container['rental_event_type'];
    }

    /**
     * Sets rental_event_type
     *
     * @param string|null $rental_event_type The type of rental event.  Possible values:  * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.  * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.  * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.  * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.  * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.  * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.  * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item.
     *
     * @return self
     */
    public function setRentalEventType($rental_event_type) : self
    {
        $this->container['rental_event_type'] = $rental_event_type;

        return $this;
    }

    /**
     * Gets extension_length
     *
     * @return int|null
     */
    public function getExtensionLength()
    {
        return $this->container['extension_length'];
    }

    /**
     * Sets extension_length
     *
     * @param int|null $extension_length The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events.
     *
     * @return self
     */
    public function setExtensionLength($extension_length) : self
    {
        $this->container['extension_length'] = $extension_length;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets rental_charge_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]|null
     */
    public function getRentalChargeList()
    {
        return $this->container['rental_charge_list'];
    }

    /**
     * Sets rental_charge_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\ChargeComponent[]|null $rental_charge_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setRentalChargeList($rental_charge_list) : self
    {
        $this->container['rental_charge_list'] = $rental_charge_list;

        return $this;
    }

    /**
     * Gets rental_fee_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]|null
     */
    public function getRentalFeeList()
    {
        return $this->container['rental_fee_list'];
    }

    /**
     * Sets rental_fee_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]|null $rental_fee_list A list of fee component information.
     *
     * @return self
     */
    public function setRentalFeeList($rental_fee_list) : self
    {
        $this->container['rental_fee_list'] = $rental_fee_list;

        return $this;
    }

    /**
     * Gets marketplace_name
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name
     *
     * @param string|null $marketplace_name The name of the marketplace.
     *
     * @return self
     */
    public function setMarketplaceName($marketplace_name) : self
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets rental_initial_value
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getRentalInitialValue()
    {
        return $this->container['rental_initial_value'];
    }

    /**
     * Sets rental_initial_value
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $rental_initial_value rental_initial_value
     *
     * @return self
     */
    public function setRentalInitialValue($rental_initial_value) : self
    {
        $this->container['rental_initial_value'] = $rental_initial_value;

        return $this;
    }

    /**
     * Gets rental_reimbursement
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getRentalReimbursement()
    {
        return $this->container['rental_reimbursement'];
    }

    /**
     * Sets rental_reimbursement
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $rental_reimbursement rental_reimbursement
     *
     * @return self
     */
    public function setRentalReimbursement($rental_reimbursement) : self
    {
        $this->container['rental_reimbursement'] = $rental_reimbursement;

        return $this;
    }

    /**
     * Gets rental_tax_withheld_list
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]|null
     */
    public function getRentalTaxWithheldList()
    {
        return $this->container['rental_tax_withheld_list'];
    }

    /**
     * Sets rental_tax_withheld_list
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\TaxWithheldComponent[]|null $rental_tax_withheld_list A list of information about taxes withheld.
     *
     * @return self
     */
    public function setRentalTaxWithheldList($rental_tax_withheld_list) : self
    {
        $this->container['rental_tax_withheld_list'] = $rental_tax_withheld_list;

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
