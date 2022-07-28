<?php
/**
 * Summary
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

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
class Summary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'total_offer_count' => 'int',
        'number_of_offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]',
        'lowest_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[]',
        'buy_box_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[]',
        'list_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'competitive_price_threshold' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'suggested_lower_price_plus_shipping' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'sales_rankings' => '\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]',
        'buy_box_eligible_offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]',
        'offers_available_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'total_offer_count' => 'int32',
        'number_of_offers' => null,
        'lowest_prices' => null,
        'buy_box_prices' => null,
        'list_price' => null,
        'competitive_price_threshold' => null,
        'suggested_lower_price_plus_shipping' => null,
        'sales_rankings' => null,
        'buy_box_eligible_offers' => null,
        'offers_available_time' => 'date-time'
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
        'total_offer_count' => 'TotalOfferCount',
        'number_of_offers' => 'NumberOfOffers',
        'lowest_prices' => 'LowestPrices',
        'buy_box_prices' => 'BuyBoxPrices',
        'list_price' => 'ListPrice',
        'competitive_price_threshold' => 'CompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
        'sales_rankings' => 'SalesRankings',
        'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
        'offers_available_time' => 'OffersAvailableTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_offer_count' => 'setTotalOfferCount',
        'number_of_offers' => 'setNumberOfOffers',
        'lowest_prices' => 'setLowestPrices',
        'buy_box_prices' => 'setBuyBoxPrices',
        'list_price' => 'setListPrice',
        'competitive_price_threshold' => 'setCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'setSalesRankings',
        'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
        'offers_available_time' => 'setOffersAvailableTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_offer_count' => 'getTotalOfferCount',
        'number_of_offers' => 'getNumberOfOffers',
        'lowest_prices' => 'getLowestPrices',
        'buy_box_prices' => 'getBuyBoxPrices',
        'list_price' => 'getListPrice',
        'competitive_price_threshold' => 'getCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'getSalesRankings',
        'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
        'offers_available_time' => 'getOffersAvailableTime'
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
        $this->container['total_offer_count'] = $data['total_offer_count'] ?? null;
        $this->container['number_of_offers'] = $data['number_of_offers'] ?? null;
        $this->container['lowest_prices'] = $data['lowest_prices'] ?? null;
        $this->container['buy_box_prices'] = $data['buy_box_prices'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['competitive_price_threshold'] = $data['competitive_price_threshold'] ?? null;
        $this->container['suggested_lower_price_plus_shipping'] = $data['suggested_lower_price_plus_shipping'] ?? null;
        $this->container['sales_rankings'] = $data['sales_rankings'] ?? null;
        $this->container['buy_box_eligible_offers'] = $data['buy_box_eligible_offers'] ?? null;
        $this->container['offers_available_time'] = $data['offers_available_time'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['total_offer_count'] === null) {
            throw new AssertionException("'total_offer_count' can't be null");
        }

            if ($this->container['list_price'] !== null) {
            $this->container['list_price']->validate();
            }

            if ($this->container['competitive_price_threshold'] !== null) {
            $this->container['competitive_price_threshold']->validate();
            }

            if ($this->container['suggested_lower_price_plus_shipping'] !== null) {
            $this->container['suggested_lower_price_plus_shipping']->validate();
            }

    }


    /**
     * Gets total_offer_count
     *
     * @return int
     */
    public function getTotalOfferCount()
    {
        return $this->container['total_offer_count'];
    }

    /**
     * Sets total_offer_count
     *
     * @param int $total_offer_count The number of unique offers contained in NumberOfOffers.
     *
     * @return self
     */
    public function setTotalOfferCount($total_offer_count) : self
    {
        $this->container['total_offer_count'] = $total_offer_count;

        return $this;
    }

    /**
     * Gets number_of_offers
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]|null
     */
    public function getNumberOfOffers()
    {
        return $this->container['number_of_offers'];
    }

    /**
     * Sets number_of_offers
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]|null $number_of_offers number_of_offers
     *
     * @return self
     */
    public function setNumberOfOffers($number_of_offers) : self
    {
        $this->container['number_of_offers'] = $number_of_offers;

        return $this;
    }

    /**
     * Gets lowest_prices
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[]|null
     */
    public function getLowestPrices()
    {
        return $this->container['lowest_prices'];
    }

    /**
     * Sets lowest_prices
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[]|null $lowest_prices lowest_prices
     *
     * @return self
     */
    public function setLowestPrices($lowest_prices) : self
    {
        $this->container['lowest_prices'] = $lowest_prices;

        return $this;
    }

    /**
     * Gets buy_box_prices
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[]|null
     */
    public function getBuyBoxPrices()
    {
        return $this->container['buy_box_prices'];
    }

    /**
     * Sets buy_box_prices
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[]|null $buy_box_prices buy_box_prices
     *
     * @return self
     */
    public function setBuyBoxPrices($buy_box_prices) : self
    {
        $this->container['buy_box_prices'] = $buy_box_prices;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null $list_price list_price
     *
     * @return self
     */
    public function setListPrice($list_price) : self
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets competitive_price_threshold
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null
     */
    public function getCompetitivePriceThreshold()
    {
        return $this->container['competitive_price_threshold'];
    }

    /**
     * Sets competitive_price_threshold
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null $competitive_price_threshold competitive_price_threshold
     *
     * @return self
     */
    public function setCompetitivePriceThreshold($competitive_price_threshold) : self
    {
        $this->container['competitive_price_threshold'] = $competitive_price_threshold;

        return $this;
    }

    /**
     * Gets suggested_lower_price_plus_shipping
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->container['suggested_lower_price_plus_shipping'];
    }

    /**
     * Sets suggested_lower_price_plus_shipping
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null $suggested_lower_price_plus_shipping suggested_lower_price_plus_shipping
     *
     * @return self
     */
    public function setSuggestedLowerPricePlusShipping($suggested_lower_price_plus_shipping) : self
    {
        $this->container['suggested_lower_price_plus_shipping'] = $suggested_lower_price_plus_shipping;

        return $this;
    }

    /**
     * Gets sales_rankings
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]|null
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]|null $sales_rankings A list of sales rank information for the item, by category.
     *
     * @return self
     */
    public function setSalesRankings($sales_rankings) : self
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets buy_box_eligible_offers
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]|null
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->container['buy_box_eligible_offers'];
    }

    /**
     * Sets buy_box_eligible_offers
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]|null $buy_box_eligible_offers buy_box_eligible_offers
     *
     * @return self
     */
    public function setBuyBoxEligibleOffers($buy_box_eligible_offers) : self
    {
        $this->container['buy_box_eligible_offers'] = $buy_box_eligible_offers;

        return $this;
    }

    /**
     * Gets offers_available_time
     *
     * @return \DateTime|null
     */
    public function getOffersAvailableTime()
    {
        return $this->container['offers_available_time'];
    }

    /**
     * Sets offers_available_time
     *
     * @param \DateTime|null $offers_available_time When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
     *
     * @return self
     */
    public function setOffersAvailableTime($offers_available_time) : self
    {
        $this->container['offers_available_time'] = $offers_available_time;

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
