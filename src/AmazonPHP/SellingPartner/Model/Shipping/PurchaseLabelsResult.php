<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Shipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Shipping
*
* Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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
class PurchaseLabelsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PurchaseLabelsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipment_id' => 'string',
        'client_reference_id' => 'string',
        'accepted_rate' => '\AmazonPHP\SellingPartner\Model\Shipping\AcceptedRate',
        'label_results' => '\AmazonPHP\SellingPartner\Model\Shipping\LabelResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipment_id' => null,
        'client_reference_id' => null,
        'accepted_rate' => null,
        'label_results' => null
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
        'shipment_id' => 'shipmentId',
        'client_reference_id' => 'clientReferenceId',
        'accepted_rate' => 'acceptedRate',
        'label_results' => 'labelResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipment_id' => 'setShipmentId',
        'client_reference_id' => 'setClientReferenceId',
        'accepted_rate' => 'setAcceptedRate',
        'label_results' => 'setLabelResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipment_id' => 'getShipmentId',
        'client_reference_id' => 'getClientReferenceId',
        'accepted_rate' => 'getAcceptedRate',
        'label_results' => 'getLabelResults'
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
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['client_reference_id'] = $data['client_reference_id'] ?? null;
        $this->container['accepted_rate'] = $data['accepted_rate'] ?? null;
        $this->container['label_results'] = $data['label_results'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if (!is_null($this->container['client_reference_id']) && (mb_strlen($this->container['client_reference_id']) > 40)) {
            throw new AssertionException("invalid value for 'client_reference_id', the character length must be smaller than or equal to 40.");
        }

        if ($this->container['accepted_rate'] === null) {
            throw new AssertionException("'accepted_rate' can't be null");
        }

            $this->container['accepted_rate']->validate();

        if ($this->container['label_results'] === null) {
            throw new AssertionException("'label_results' can't be null");
        }

    }


    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id The unique shipment identifier.
     *
     * @return self
     */
    public function setShipmentId($shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets client_reference_id
     *
     * @return string|null
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     *
     * @param string|null $client_reference_id Client reference id.
     *
     * @return self
     */
    public function setClientReferenceId($client_reference_id) : self
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets accepted_rate
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\AcceptedRate
     */
    public function getAcceptedRate()
    {
        return $this->container['accepted_rate'];
    }

    /**
     * Sets accepted_rate
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\AcceptedRate $accepted_rate accepted_rate
     *
     * @return self
     */
    public function setAcceptedRate($accepted_rate) : self
    {
        $this->container['accepted_rate'] = $accepted_rate;

        return $this;
    }

    /**
     * Gets label_results
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\LabelResult[]
     */
    public function getLabelResults()
    {
        return $this->container['label_results'];
    }

    /**
     * Sets label_results
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\LabelResult[] $label_results A list of label results
     *
     * @return self
     */
    public function setLabelResults($label_results) : self
    {
        $this->container['label_results'] = $label_results;

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

