<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

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
class ItemSummaryByMarketplace implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemSummaryByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'brand_name' => 'string',
        'browse_node' => 'string',
        'color_name' => 'string',
        'item_name' => 'string',
        'manufacturer' => 'string',
        'model_number' => 'string',
        'size_name' => 'string',
        'style_name' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'marketplace_id' => null,
        'brand_name' => null,
        'browse_node' => null,
        'color_name' => null,
        'item_name' => null,
        'manufacturer' => null,
        'model_number' => null,
        'size_name' => null,
        'style_name' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'brand_name' => 'brandName',
        'browse_node' => 'browseNode',
        'color_name' => 'colorName',
        'item_name' => 'itemName',
        'manufacturer' => 'manufacturer',
        'model_number' => 'modelNumber',
        'size_name' => 'sizeName',
        'style_name' => 'styleName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'brand_name' => 'setBrandName',
        'browse_node' => 'setBrowseNode',
        'color_name' => 'setColorName',
        'item_name' => 'setItemName',
        'manufacturer' => 'setManufacturer',
        'model_number' => 'setModelNumber',
        'size_name' => 'setSizeName',
        'style_name' => 'setStyleName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'brand_name' => 'getBrandName',
        'browse_node' => 'getBrowseNode',
        'color_name' => 'getColorName',
        'item_name' => 'getItemName',
        'manufacturer' => 'getManufacturer',
        'model_number' => 'getModelNumber',
        'size_name' => 'getSizeName',
        'style_name' => 'getStyleName',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['browse_node'] = $data['browse_node'] ?? null;
        $this->container['color_name'] = $data['color_name'] ?? null;
        $this->container['item_name'] = $data['item_name'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['model_number'] = $data['model_number'] ?? null;
        $this->container['size_name'] = $data['size_name'] ?? null;
        $this->container['style_name'] = $data['style_name'] ?? null;
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
        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id amazon marketplace identifier
     *
     * @return self
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets brand_name.
     *
     * @return null|string
     */
    public function getBrandName() : ?string
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name.
     *
     * @param null|string $brand_name name of the brand associated with an Amazon catalog item
     *
     * @return self
     */
    public function setBrandName(?string $brand_name) : self
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets browse_node.
     *
     * @return null|string
     */
    public function getBrowseNode() : ?string
    {
        return $this->container['browse_node'];
    }

    /**
     * Sets browse_node.
     *
     * @param null|string $browse_node identifier of the browse node associated with an Amazon catalog item
     *
     * @return self
     */
    public function setBrowseNode(?string $browse_node) : self
    {
        $this->container['browse_node'] = $browse_node;

        return $this;
    }

    /**
     * Gets color_name.
     *
     * @return null|string
     */
    public function getColorName() : ?string
    {
        return $this->container['color_name'];
    }

    /**
     * Sets color_name.
     *
     * @param null|string $color_name name of the color associated with an Amazon catalog item
     *
     * @return self
     */
    public function setColorName(?string $color_name) : self
    {
        $this->container['color_name'] = $color_name;

        return $this;
    }

    /**
     * Gets item_name.
     *
     * @return null|string
     */
    public function getItemName() : ?string
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name.
     *
     * @param null|string $item_name name, or title, associated with an Amazon catalog item
     *
     * @return self
     */
    public function setItemName(?string $item_name) : self
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets manufacturer.
     *
     * @return null|string
     */
    public function getManufacturer() : ?string
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer.
     *
     * @param null|string $manufacturer name of the manufacturer associated with an Amazon catalog item
     *
     * @return self
     */
    public function setManufacturer(?string $manufacturer) : self
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets model_number.
     *
     * @return null|string
     */
    public function getModelNumber() : ?string
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number.
     *
     * @param null|string $model_number model number associated with an Amazon catalog item
     *
     * @return self
     */
    public function setModelNumber(?string $model_number) : self
    {
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets size_name.
     *
     * @return null|string
     */
    public function getSizeName() : ?string
    {
        return $this->container['size_name'];
    }

    /**
     * Sets size_name.
     *
     * @param null|string $size_name name of the size associated with an Amazon catalog item
     *
     * @return self
     */
    public function setSizeName(?string $size_name) : self
    {
        $this->container['size_name'] = $size_name;

        return $this;
    }

    /**
     * Gets style_name.
     *
     * @return null|string
     */
    public function getStyleName() : ?string
    {
        return $this->container['style_name'];
    }

    /**
     * Sets style_name.
     *
     * @param null|string $style_name name of the style associated with an Amazon catalog item
     *
     * @return self
     */
    public function setStyleName(?string $style_name) : self
    {
        $this->container['style_name'] = $style_name;

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
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
