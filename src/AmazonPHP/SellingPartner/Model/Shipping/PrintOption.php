<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Shipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Amazon Shipping API
*
* The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
*
* The version of the OpenAPI document: v2
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrintOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PrintOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'supported_dpis' => 'int[]',
        'supported_page_layouts' => 'string[]',
        'supported_file_joining_options' => 'bool[]',
        'supported_document_details' => '\AmazonPHP\SellingPartner\Model\Shipping\SupportedDocumentDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'supported_dpis' => null,
        'supported_page_layouts' => null,
        'supported_file_joining_options' => null,
        'supported_document_details' => null
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
        'supported_dpis' => 'supportedDPIs',
        'supported_page_layouts' => 'supportedPageLayouts',
        'supported_file_joining_options' => 'supportedFileJoiningOptions',
        'supported_document_details' => 'supportedDocumentDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'supported_dpis' => 'setSupportedDpis',
        'supported_page_layouts' => 'setSupportedPageLayouts',
        'supported_file_joining_options' => 'setSupportedFileJoiningOptions',
        'supported_document_details' => 'setSupportedDocumentDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'supported_dpis' => 'getSupportedDpis',
        'supported_page_layouts' => 'getSupportedPageLayouts',
        'supported_file_joining_options' => 'getSupportedFileJoiningOptions',
        'supported_document_details' => 'getSupportedDocumentDetails'
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
        $this->container['supported_dpis'] = $data['supported_dpis'] ?? null;
        $this->container['supported_page_layouts'] = $data['supported_page_layouts'] ?? null;
        $this->container['supported_file_joining_options'] = $data['supported_file_joining_options'] ?? null;
        $this->container['supported_document_details'] = $data['supported_document_details'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['supported_page_layouts'] === null) {
            throw new AssertionException("'supported_page_layouts' can't be null");
        }

        if ($this->container['supported_file_joining_options'] === null) {
            throw new AssertionException("'supported_file_joining_options' can't be null");
        }

        if ($this->container['supported_document_details'] === null) {
            throw new AssertionException("'supported_document_details' can't be null");
        }

    }


    /**
     * Gets supported_dpis
     *
     * @return int[]|null
     */
    public function getSupportedDpis()
    {
        return $this->container['supported_dpis'];
    }

    /**
     * Sets supported_dpis
     *
     * @param int[]|null $supported_dpis A list of the supported DPI options for a document.
     *
     * @return self
     */
    public function setSupportedDpis($supported_dpis) : self
    {
        $this->container['supported_dpis'] = $supported_dpis;

        return $this;
    }

    /**
     * Gets supported_page_layouts
     *
     * @return string[]
     */
    public function getSupportedPageLayouts()
    {
        return $this->container['supported_page_layouts'];
    }

    /**
     * Sets supported_page_layouts
     *
     * @param string[] $supported_page_layouts A list of the supported page layout options for a document.
     *
     * @return self
     */
    public function setSupportedPageLayouts($supported_page_layouts) : self
    {
        $this->container['supported_page_layouts'] = $supported_page_layouts;

        return $this;
    }

    /**
     * Gets supported_file_joining_options
     *
     * @return bool[]
     */
    public function getSupportedFileJoiningOptions()
    {
        return $this->container['supported_file_joining_options'];
    }

    /**
     * Sets supported_file_joining_options
     *
     * @param bool[] $supported_file_joining_options A list of the supported needFileJoining boolean values for a document.
     *
     * @return self
     */
    public function setSupportedFileJoiningOptions($supported_file_joining_options) : self
    {
        $this->container['supported_file_joining_options'] = $supported_file_joining_options;

        return $this;
    }

    /**
     * Gets supported_document_details
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\SupportedDocumentDetail[]
     */
    public function getSupportedDocumentDetails()
    {
        return $this->container['supported_document_details'];
    }

    /**
     * Sets supported_document_details
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\SupportedDocumentDetail[] $supported_document_details A list of the supported documented details.
     *
     * @return self
     */
    public function setSupportedDocumentDetails($supported_document_details) : self
    {
        $this->container['supported_document_details'] = $supported_document_details;

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

