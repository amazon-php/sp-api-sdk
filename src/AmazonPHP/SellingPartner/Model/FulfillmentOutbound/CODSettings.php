<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

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
class CODSettings implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CODSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'is_cod_required' => 'bool',
        'cod_charge' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'cod_charge_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'shipping_charge' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
        'shipping_charge_tax' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'is_cod_required' => null,
        'cod_charge' => null,
        'cod_charge_tax' => null,
        'shipping_charge' => null,
        'shipping_charge_tax' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'is_cod_required' => 'isCodRequired',
        'cod_charge' => 'codCharge',
        'cod_charge_tax' => 'codChargeTax',
        'shipping_charge' => 'shippingCharge',
        'shipping_charge_tax' => 'shippingChargeTax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'is_cod_required' => 'setIsCodRequired',
        'cod_charge' => 'setCodCharge',
        'cod_charge_tax' => 'setCodChargeTax',
        'shipping_charge' => 'setShippingCharge',
        'shipping_charge_tax' => 'setShippingChargeTax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'is_cod_required' => 'getIsCodRequired',
        'cod_charge' => 'getCodCharge',
        'cod_charge_tax' => 'getCodChargeTax',
        'shipping_charge' => 'getShippingCharge',
        'shipping_charge_tax' => 'getShippingChargeTax',
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
        $this->container['is_cod_required'] = $data['is_cod_required'] ?? null;
        $this->container['cod_charge'] = $data['cod_charge'] ?? null;
        $this->container['cod_charge_tax'] = $data['cod_charge_tax'] ?? null;
        $this->container['shipping_charge'] = $data['shipping_charge'] ?? null;
        $this->container['shipping_charge_tax'] = $data['shipping_charge_tax'] ?? null;
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
        if ($this->container['is_cod_required'] === null) {
            throw new AssertionException("'is_cod_required' can't be null");
        }

        if ($this->container['cod_charge'] !== null) {
            $this->container['cod_charge']->validate();
        }

        if ($this->container['cod_charge_tax'] !== null) {
            $this->container['cod_charge_tax']->validate();
        }

        if ($this->container['shipping_charge'] !== null) {
            $this->container['shipping_charge']->validate();
        }

        if ($this->container['shipping_charge_tax'] !== null) {
            $this->container['shipping_charge_tax']->validate();
        }
    }

    /**
     * Gets is_cod_required.
     */
    public function getIsCodRequired() : bool
    {
        return $this->container['is_cod_required'];
    }

    /**
     * Sets is_cod_required.
     *
     * @param bool $is_cod_required when true, this fulfillment order requires a COD (Cash On Delivery) payment
     *
     * @return self
     */
    public function setIsCodRequired(bool $is_cod_required) : self
    {
        $this->container['is_cod_required'] = $is_cod_required;

        return $this;
    }

    /**
     * Gets cod_charge.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getCodCharge() : ?Money
    {
        return $this->container['cod_charge'];
    }

    /**
     * Sets cod_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $cod_charge cod_charge
     *
     * @return self
     */
    public function setCodCharge(?Money $cod_charge) : self
    {
        $this->container['cod_charge'] = $cod_charge;

        return $this;
    }

    /**
     * Gets cod_charge_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getCodChargeTax() : ?Money
    {
        return $this->container['cod_charge_tax'];
    }

    /**
     * Sets cod_charge_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $cod_charge_tax cod_charge_tax
     *
     * @return self
     */
    public function setCodChargeTax(?Money $cod_charge_tax) : self
    {
        $this->container['cod_charge_tax'] = $cod_charge_tax;

        return $this;
    }

    /**
     * Gets shipping_charge.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getShippingCharge() : ?Money
    {
        return $this->container['shipping_charge'];
    }

    /**
     * Sets shipping_charge.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $shipping_charge shipping_charge
     *
     * @return self
     */
    public function setShippingCharge(?Money $shipping_charge) : self
    {
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    /**
     * Gets shipping_charge_tax.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money
     */
    public function getShippingChargeTax() : ?Money
    {
        return $this->container['shipping_charge_tax'];
    }

    /**
     * Sets shipping_charge_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money $shipping_charge_tax shipping_charge_tax
     *
     * @return self
     */
    public function setShippingChargeTax(?Money $shipping_charge_tax) : self
    {
        $this->container['shipping_charge_tax'] = $shipping_charge_tax;

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
