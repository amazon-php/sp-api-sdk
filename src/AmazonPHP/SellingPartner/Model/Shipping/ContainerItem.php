<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

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
class ContainerItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ContainerItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'quantity' => 'float',
        'unit_price' => '\AmazonPHP\SellingPartner\Model\Shipping\Currency',
        'unit_weight' => '\AmazonPHP\SellingPartner\Model\Shipping\Weight',
        'title' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'quantity' => null,
        'unit_price' => null,
        'unit_weight' => null,
        'title' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'unit_weight' => 'unitWeight',
        'title' => 'title',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'unit_weight' => 'setUnitWeight',
        'title' => 'setTitle',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'unit_weight' => 'getUnitWeight',
        'title' => 'getTitle',
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
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['unit_weight'] = $data['unit_weight'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if ($this->container['unit_price'] === null) {
            throw new AssertionException("'unit_price' can't be null");
        }

        $this->container['unit_price']->validate();

        if ($this->container['unit_weight'] === null) {
            throw new AssertionException("'unit_weight' can't be null");
        }

        $this->container['unit_weight']->validate();

        if ($this->container['title'] === null) {
            throw new AssertionException("'title' can't be null");
        }

        if ((\mb_strlen($this->container['title']) > 30)) {
            throw new AssertionException("invalid value for 'title', the character length must be smaller than or equal to 30.");
        }
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : float
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param float $quantity the quantity of the items of this type in the container
     *
     * @return self
     */
    public function setQuantity(float $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price.
     */
    public function getUnitPrice() : Currency
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Currency $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice(Currency $unit_price) : self
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_weight.
     */
    public function getUnitWeight() : Weight
    {
        return $this->container['unit_weight'];
    }

    /**
     * Sets unit_weight.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Weight $unit_weight unit_weight
     *
     * @return self
     */
    public function setUnitWeight(Weight $unit_weight) : self
    {
        $this->container['unit_weight'] = $unit_weight;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title a descriptive title of the item
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->container['title'] = $title;

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
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
