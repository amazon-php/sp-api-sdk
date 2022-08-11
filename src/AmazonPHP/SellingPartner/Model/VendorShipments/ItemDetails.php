<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

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
class ItemDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const HANDLING_CODE_OVERSIZED = 'Oversized';

    public const HANDLING_CODE_FRAGILE = 'Fragile';

    public const HANDLING_CODE_FOOD = 'Food';

    public const HANDLING_CODE_HANDLE_WITH_CARE = 'HandleWithCare';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'purchase_order_number' => 'string',
        'lot_number' => 'string',
        'expiry' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Expiry',
        'maximum_retail_price' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Money',
        'handling_code' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'purchase_order_number' => null,
        'lot_number' => null,
        'expiry' => null,
        'maximum_retail_price' => null,
        'handling_code' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'lot_number' => 'lotNumber',
        'expiry' => 'expiry',
        'maximum_retail_price' => 'maximumRetailPrice',
        'handling_code' => 'handlingCode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'lot_number' => 'setLotNumber',
        'expiry' => 'setExpiry',
        'maximum_retail_price' => 'setMaximumRetailPrice',
        'handling_code' => 'setHandlingCode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'lot_number' => 'getLotNumber',
        'expiry' => 'getExpiry',
        'maximum_retail_price' => 'getMaximumRetailPrice',
        'handling_code' => 'getHandlingCode',
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['lot_number'] = $data['lot_number'] ?? null;
        $this->container['expiry'] = $data['expiry'] ?? null;
        $this->container['maximum_retail_price'] = $data['maximum_retail_price'] ?? null;
        $this->container['handling_code'] = $data['handling_code'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getHandlingCodeAllowableValues() : array
    {
        return [
            self::HANDLING_CODE_OVERSIZED,
            self::HANDLING_CODE_FRAGILE,
            self::HANDLING_CODE_FOOD,
            self::HANDLING_CODE_HANDLE_WITH_CARE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['expiry'] !== null) {
            $this->container['expiry']->validate();
        }

        if ($this->container['maximum_retail_price'] !== null) {
            $this->container['maximum_retail_price']->validate();
        }

        $allowedValues = $this->getHandlingCodeAllowableValues();

        if (null !== $this->container['handling_code'] && !\in_array($this->container['handling_code'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'handling_code', must be one of '%s'",
                    $this->container['handling_code'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets purchase_order_number.
     *
     * @return null|string
     */
    public function getPurchaseOrderNumber() : ?string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param null|string $purchase_order_number The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber(?string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets lot_number.
     *
     * @return null|string
     */
    public function getLotNumber() : ?string
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number.
     *
     * @param null|string $lot_number The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     *
     * @return self
     */
    public function setLotNumber(?string $lot_number) : self
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets expiry.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Expiry
     */
    public function getExpiry() : ?Expiry
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Expiry $expiry expiry
     *
     * @return self
     */
    public function setExpiry(?Expiry $expiry) : self
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets maximum_retail_price.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Money
     */
    public function getMaximumRetailPrice() : ?Money
    {
        return $this->container['maximum_retail_price'];
    }

    /**
     * Sets maximum_retail_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Money $maximum_retail_price maximum_retail_price
     *
     * @return self
     */
    public function setMaximumRetailPrice(?Money $maximum_retail_price) : self
    {
        $this->container['maximum_retail_price'] = $maximum_retail_price;

        return $this;
    }

    /**
     * Gets handling_code.
     *
     * @return null|string
     */
    public function getHandlingCode() : ?string
    {
        return $this->container['handling_code'];
    }

    /**
     * Sets handling_code.
     *
     * @param null|string $handling_code identification of the instructions on how specified item/carton/pallet should be handled
     *
     * @return self
     */
    public function setHandlingCode(?string $handling_code) : self
    {
        $this->container['handling_code'] = $handling_code;

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
