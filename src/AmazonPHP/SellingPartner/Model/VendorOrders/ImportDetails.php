<?php
/**
 * ImportDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

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
class ImportDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ImportDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'method_of_payment' => 'string',
        'international_commercial_terms' => 'string',
        'port_of_delivery' => 'string',
        'import_containers' => 'string',
        'shipping_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'method_of_payment' => null,
        'international_commercial_terms' => null,
        'port_of_delivery' => null,
        'import_containers' => null,
        'shipping_instructions' => null
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
        'method_of_payment' => 'methodOfPayment',
        'international_commercial_terms' => 'internationalCommercialTerms',
        'port_of_delivery' => 'portOfDelivery',
        'import_containers' => 'importContainers',
        'shipping_instructions' => 'shippingInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'method_of_payment' => 'setMethodOfPayment',
        'international_commercial_terms' => 'setInternationalCommercialTerms',
        'port_of_delivery' => 'setPortOfDelivery',
        'import_containers' => 'setImportContainers',
        'shipping_instructions' => 'setShippingInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'method_of_payment' => 'getMethodOfPayment',
        'international_commercial_terms' => 'getInternationalCommercialTerms',
        'port_of_delivery' => 'getPortOfDelivery',
        'import_containers' => 'getImportContainers',
        'shipping_instructions' => 'getShippingInstructions'
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

    const METHOD_OF_PAYMENT_PAID_BY_BUYER = 'PaidByBuyer';
    const METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY = 'CollectOnDelivery';
    const METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER = 'DefinedByBuyerAndSeller';
    const METHOD_OF_PAYMENT_FOB_PORT_OF_CALL = 'FOBPortOfCall';
    const METHOD_OF_PAYMENT_PREPAID_BY_SELLER = 'PrepaidBySeller';
    const METHOD_OF_PAYMENT_PAID_BY_SELLER = 'PaidBySeller';
    const INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS = 'ExWorks';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER = 'FreeCarrier';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD = 'FreeOnBoard';
    const INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP = 'FreeAlongSideShip';
    const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO = 'CarriagePaidTo';
    const INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT = 'CostAndFreight';
    const INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO = 'CarriageAndInsurancePaidTo';
    const INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT = 'CostInsuranceAndFreight';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL = 'DeliveredAtTerminal';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE = 'DeliveredAtPlace';
    const INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID = 'DeliverDutyPaid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodOfPaymentAllowableValues() : array
    {
        return [
            self::METHOD_OF_PAYMENT_PAID_BY_BUYER,
            self::METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY,
            self::METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER,
            self::METHOD_OF_PAYMENT_FOB_PORT_OF_CALL,
            self::METHOD_OF_PAYMENT_PREPAID_BY_SELLER,
            self::METHOD_OF_PAYMENT_PAID_BY_SELLER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInternationalCommercialTermsAllowableValues() : array
    {
        return [
            self::INTERNATIONAL_COMMERCIAL_TERMS_EX_WORKS,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_CARRIER,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ON_BOARD,
            self::INTERNATIONAL_COMMERCIAL_TERMS_FREE_ALONG_SIDE_SHIP,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_CARRIAGE_AND_INSURANCE_PAID_TO,
            self::INTERNATIONAL_COMMERCIAL_TERMS_COST_INSURANCE_AND_FREIGHT,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_TERMINAL,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVERED_AT_PLACE,
            self::INTERNATIONAL_COMMERCIAL_TERMS_DELIVER_DUTY_PAID,
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
        $this->container['method_of_payment'] = $data['method_of_payment'] ?? null;
        $this->container['international_commercial_terms'] = $data['international_commercial_terms'] ?? null;
        $this->container['port_of_delivery'] = $data['port_of_delivery'] ?? null;
        $this->container['import_containers'] = $data['import_containers'] ?? null;
        $this->container['shipping_instructions'] = $data['shipping_instructions'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getMethodOfPaymentAllowableValues();
        if (!is_null($this->container['method_of_payment']) && !in_array($this->container['method_of_payment'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'method_of_payment', must be one of '%s'",
                    $this->container['method_of_payment'],
                    implode("', '", $allowedValues)
                )
            );
        }

        $allowedValues = $this->getInternationalCommercialTermsAllowableValues();
        if (!is_null($this->container['international_commercial_terms']) && !in_array($this->container['international_commercial_terms'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'international_commercial_terms', must be one of '%s'",
                    $this->container['international_commercial_terms'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($this->container['port_of_delivery']) && (mb_strlen($this->container['port_of_delivery']) > 64)) {
            throw new AssertionException("invalid value for 'port_of_delivery', the character length must be smaller than or equal to 64.");
        }

        if (!is_null($this->container['import_containers']) && (mb_strlen($this->container['import_containers']) > 64)) {
            throw new AssertionException("invalid value for 'import_containers', the character length must be smaller than or equal to 64.");
        }

    }


    /**
     * Gets method_of_payment
     *
     * @return string|null
     */
    public function getMethodOfPayment()
    {
        return $this->container['method_of_payment'];
    }

    /**
     * Sets method_of_payment
     *
     * @param string|null $method_of_payment If the recipient requests, contains the shipment method of payment. This is for import PO's only.
     *
     * @return self
     */
    public function setMethodOfPayment($method_of_payment) : self
    {
        $this->container['method_of_payment'] = $method_of_payment;

        return $this;
    }

    /**
     * Gets international_commercial_terms
     *
     * @return string|null
     */
    public function getInternationalCommercialTerms()
    {
        return $this->container['international_commercial_terms'];
    }

    /**
     * Sets international_commercial_terms
     *
     * @param string|null $international_commercial_terms Incoterms (International Commercial Terms) are used to divide transaction costs and responsibilities between buyer and seller and reflect state-of-the-art transportation practices. This is for import purchase orders only.
     *
     * @return self
     */
    public function setInternationalCommercialTerms($international_commercial_terms) : self
    {
        $this->container['international_commercial_terms'] = $international_commercial_terms;

        return $this;
    }

    /**
     * Gets port_of_delivery
     *
     * @return string|null
     */
    public function getPortOfDelivery()
    {
        return $this->container['port_of_delivery'];
    }

    /**
     * Sets port_of_delivery
     *
     * @param string|null $port_of_delivery The port where goods on an import purchase order must be delivered by the vendor. This should only be specified when the internationalCommercialTerms is FOB.
     *
     * @return self
     */
    public function setPortOfDelivery($port_of_delivery) : self
    {
        $this->container['port_of_delivery'] = $port_of_delivery;

        return $this;
    }

    /**
     * Gets import_containers
     *
     * @return string|null
     */
    public function getImportContainers()
    {
        return $this->container['import_containers'];
    }

    /**
     * Sets import_containers
     *
     * @param string|null $import_containers Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if the shipment has multiple containers. HC signifies a high-capacity container. Free-text field, limited to 64 characters. The format will be a comma-delimited list containing values of the type: $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the container type is: 40'(40-foot container), 40'HC (40-foot high-capacity container), 45', 45'HC, 30', 30'HC, 20', 20'HC.
     *
     * @return self
     */
    public function setImportContainers($import_containers) : self
    {
        $this->container['import_containers'] = $import_containers;

        return $this;
    }

    /**
     * Gets shipping_instructions
     *
     * @return string|null
     */
    public function getShippingInstructions()
    {
        return $this->container['shipping_instructions'];
    }

    /**
     * Sets shipping_instructions
     *
     * @param string|null $shipping_instructions Special instructions regarding the shipment. This field is for import purchase orders.
     *
     * @return self
     */
    public function setShippingInstructions($shipping_instructions) : self
    {
        $this->container['shipping_instructions'] = $shipping_instructions;

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
