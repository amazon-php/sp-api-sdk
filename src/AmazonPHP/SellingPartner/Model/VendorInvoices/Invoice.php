<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Retail Procurement Payments
*
* The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
*
* The version of the OpenAPI document: v1
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'invoice_type' => 'string',
        'id' => 'string',
        'reference_number' => 'string',
        'date' => '\DateTimeInterface',
        'remit_to_party' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'ship_to_party' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'bill_to_party' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'payment_terms' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\PaymentTerms',
        'invoice_total' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]',
        'additional_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[]',
        'charge_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]',
        'allowance_details' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]',
        'items' => '\AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'invoice_type' => null,
        'id' => null,
        'reference_number' => null,
        'date' => 'date-time',
        'remit_to_party' => null,
        'ship_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'payment_terms' => null,
        'invoice_total' => null,
        'tax_details' => null,
        'additional_details' => null,
        'charge_details' => null,
        'allowance_details' => null,
        'items' => null
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
        'invoice_type' => 'invoiceType',
        'id' => 'id',
        'reference_number' => 'referenceNumber',
        'date' => 'date',
        'remit_to_party' => 'remitToParty',
        'ship_to_party' => 'shipToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'payment_terms' => 'paymentTerms',
        'invoice_total' => 'invoiceTotal',
        'tax_details' => 'taxDetails',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'invoice_type' => 'setInvoiceType',
        'id' => 'setId',
        'reference_number' => 'setReferenceNumber',
        'date' => 'setDate',
        'remit_to_party' => 'setRemitToParty',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'payment_terms' => 'setPaymentTerms',
        'invoice_total' => 'setInvoiceTotal',
        'tax_details' => 'setTaxDetails',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'invoice_type' => 'getInvoiceType',
        'id' => 'getId',
        'reference_number' => 'getReferenceNumber',
        'date' => 'getDate',
        'remit_to_party' => 'getRemitToParty',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'payment_terms' => 'getPaymentTerms',
        'invoice_total' => 'getInvoiceTotal',
        'tax_details' => 'getTaxDetails',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails',
        'items' => 'getItems'
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

    const INVOICE_TYPE_INVOICE = 'Invoice';
    const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues() : array
    {
        return [
            self::INVOICE_TYPE_INVOICE,
            self::INVOICE_TYPE_CREDIT_NOTE,
        ];
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
        $this->container['invoice_type'] = $data['invoice_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['remit_to_party'] = $data['remit_to_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['payment_terms'] = $data['payment_terms'] ?? null;
        $this->container['invoice_total'] = $data['invoice_total'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['allowance_details'] = $data['allowance_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['invoice_type'] === null) {
            throw new AssertionException("'invoice_type' can't be null");
        }

        $allowedValues = $this->getInvoiceTypeAllowableValues();
        if (!is_null($this->container['invoice_type']) && !in_array($this->container['invoice_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'invoice_type', must be one of '%s'",
                    $this->container['invoice_type'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['id'] === null) {
            throw new AssertionException("'id' can't be null");
        }

        if ($this->container['date'] === null) {
            throw new AssertionException("'date' can't be null");
        }

        if ($this->container['remit_to_party'] === null) {
            throw new AssertionException("'remit_to_party' can't be null");
        }

            $this->container['remit_to_party']->validate();

            if ($this->container['ship_to_party'] !== null) {
            $this->container['ship_to_party']->validate();
            }

            if ($this->container['ship_from_party'] !== null) {
            $this->container['ship_from_party']->validate();
            }

            if ($this->container['bill_to_party'] !== null) {
            $this->container['bill_to_party']->validate();
            }

            if ($this->container['payment_terms'] !== null) {
            $this->container['payment_terms']->validate();
            }

        if ($this->container['invoice_total'] === null) {
            throw new AssertionException("'invoice_total' can't be null");
        }

            $this->container['invoice_total']->validate();

    }


    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type Identifies the type of invoice.
     *
     * @return self
     */
    public function setInvoiceType($invoice_type) : self
    {
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number An additional unique reference number used for regulatory or other purposes.
     *
     * @return self
     */
    public function setReferenceNumber($reference_number) : self
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTimeInterface $date Defines a date and time according to ISO8601.
     *
     * @return self
     */
    public function setDate($date) : self
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets remit_to_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification $remit_to_party remit_to_party
     *
     * @return self
     */
    public function setRemitToParty($remit_to_party) : self
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_to_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification|null $bill_to_party bill_to_party
     *
     * @return self
     */
    public function setBillToParty($bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets payment_terms
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\PaymentTerms|null
     */
    public function getPaymentTerms()
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\PaymentTerms|null $payment_terms payment_terms
     *
     * @return self
     */
    public function setPaymentTerms($payment_terms) : self
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\Money $invoice_total invoice_total
     *
     * @return self
     */
    public function setInvoiceTotal($invoice_total) : self
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]|null $tax_details Total tax amount details for all line items.
     *
     * @return self
     */
    public function setTaxDetails($tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets additional_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[]|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[]|null $additional_details Additional details provided by the selling party, for tax related or other purposes.
     *
     * @return self
     */
    public function setAdditionalDetails($additional_details) : self
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets charge_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]|null $charge_details Total charge amount details for all line items.
     *
     * @return self
     */
    public function setChargeDetails($charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]|null
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]|null $allowance_details Total allowance amount details for all line items.
     *
     * @return self
     */
    public function setAllowanceDetails($allowance_details) : self
    {
        $this->container['allowance_details'] = $allowance_details;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[]|null $items The list of invoice items.
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->container['items'] = $items;

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

