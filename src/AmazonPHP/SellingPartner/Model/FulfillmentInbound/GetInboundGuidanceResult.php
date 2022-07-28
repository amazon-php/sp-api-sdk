<?php
/**
 * GetInboundGuidanceResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class GetInboundGuidanceResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetInboundGuidanceResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku_inbound_guidance_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[]',
        'invalid_sku_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]',
        'asin_inbound_guidance_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[]',
        'invalid_asin_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku_inbound_guidance_list' => null,
        'invalid_sku_list' => null,
        'asin_inbound_guidance_list' => null,
        'invalid_asin_list' => null
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
        'sku_inbound_guidance_list' => 'SKUInboundGuidanceList',
        'invalid_sku_list' => 'InvalidSKUList',
        'asin_inbound_guidance_list' => 'ASINInboundGuidanceList',
        'invalid_asin_list' => 'InvalidASINList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku_inbound_guidance_list' => 'setSkuInboundGuidanceList',
        'invalid_sku_list' => 'setInvalidSkuList',
        'asin_inbound_guidance_list' => 'setAsinInboundGuidanceList',
        'invalid_asin_list' => 'setInvalidAsinList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku_inbound_guidance_list' => 'getSkuInboundGuidanceList',
        'invalid_sku_list' => 'getInvalidSkuList',
        'asin_inbound_guidance_list' => 'getAsinInboundGuidanceList',
        'invalid_asin_list' => 'getInvalidAsinList'
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
        $this->container['sku_inbound_guidance_list'] = $data['sku_inbound_guidance_list'] ?? null;
        $this->container['invalid_sku_list'] = $data['invalid_sku_list'] ?? null;
        $this->container['asin_inbound_guidance_list'] = $data['asin_inbound_guidance_list'] ?? null;
        $this->container['invalid_asin_list'] = $data['invalid_asin_list'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }


    /**
     * Gets sku_inbound_guidance_list
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[]|null
     */
    public function getSkuInboundGuidanceList()
    {
        return $this->container['sku_inbound_guidance_list'];
    }

    /**
     * Sets sku_inbound_guidance_list
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SKUInboundGuidance[]|null $sku_inbound_guidance_list A list of SKU inbound guidance information.
     *
     * @return self
     */
    public function setSkuInboundGuidanceList($sku_inbound_guidance_list) : self
    {
        $this->container['sku_inbound_guidance_list'] = $sku_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_sku_list
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]|null
     */
    public function getInvalidSkuList()
    {
        return $this->container['invalid_sku_list'];
    }

    /**
     * Sets invalid_sku_list
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidSKU[]|null $invalid_sku_list A list of invalid SKU values and the reason they are invalid.
     *
     * @return self
     */
    public function setInvalidSkuList($invalid_sku_list) : self
    {
        $this->container['invalid_sku_list'] = $invalid_sku_list;

        return $this;
    }

    /**
     * Gets asin_inbound_guidance_list
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[]|null
     */
    public function getAsinInboundGuidanceList()
    {
        return $this->container['asin_inbound_guidance_list'];
    }

    /**
     * Sets asin_inbound_guidance_list
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ASINInboundGuidance[]|null $asin_inbound_guidance_list A list of ASINs and their associated inbound guidance.
     *
     * @return self
     */
    public function setAsinInboundGuidanceList($asin_inbound_guidance_list) : self
    {
        $this->container['asin_inbound_guidance_list'] = $asin_inbound_guidance_list;

        return $this;
    }

    /**
     * Gets invalid_asin_list
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]|null
     */
    public function getInvalidAsinList()
    {
        return $this->container['invalid_asin_list'];
    }

    /**
     * Sets invalid_asin_list
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InvalidASIN[]|null $invalid_asin_list A list of invalid ASIN values and the reasons they are invalid.
     *
     * @return self
     */
    public function setInvalidAsinList($invalid_asin_list) : self
    {
        $this->container['invalid_asin_list'] = $invalid_asin_list;

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
