<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Tokens;

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
class RestrictedResource implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const METHOD_GET = 'GET';

    public const METHOD_PUT = 'PUT';

    public const METHOD_POST = 'POST';

    public const METHOD_DELETE = 'DELETE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RestrictedResource';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'method' => 'string',
        'path' => 'string',
        'data_elements' => 'string[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'method' => null,
        'path' => null,
        'data_elements' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'method' => 'method',
        'path' => 'path',
        'data_elements' => 'dataElements',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'method' => 'setMethod',
        'path' => 'setPath',
        'data_elements' => 'setDataElements',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'method' => 'getMethod',
        'path' => 'getPath',
        'data_elements' => 'getDataElements',
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
        $this->container['method'] = $data['method'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['data_elements'] = $data['data_elements'] ?? null;
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
    public function getMethodAllowableValues() : array
    {
        return [
            self::METHOD_GET,
            self::METHOD_PUT,
            self::METHOD_POST,
            self::METHOD_DELETE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['method'] === null) {
            throw new AssertionException("'method' can't be null");
        }

        $allowedValues = $this->getMethodAllowableValues();

        if (null !== $this->container['method'] && !\in_array($this->container['method'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'method', must be one of '%s'",
                    $this->container['method'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['path'] === null) {
            throw new AssertionException("'path' can't be null");
        }
    }

    /**
     * Gets method.
     */
    public function getMethod() : string
    {
        return $this->container['method'];
    }

    /**
     * Sets method.
     *
     * @param string $method the HTTP method in the restricted resource
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets path.
     */
    public function getPath() : string
    {
        return $this->container['path'];
    }

    /**
     * Sets path.
     *
     * @param string $path The path in the restricted resource. Here are some path examples: - ```/orders/v0/orders```. For getting an RDT for the getOrders operation of the Orders API. For bulk orders. - ```/orders/v0/orders/123-1234567-1234567```. For getting an RDT for the getOrder operation of the Orders API. For a specific order. - ```/orders/v0/orders/123-1234567-1234567/orderItems```. For getting an RDT for the getOrderItems operation of the Orders API. For the order items in a specific order. - ```/mfn/v0/shipments/FBA1234ABC5D```. For getting an RDT for the getShipment operation of the Shipping API. For a specific shipment. - ```/mfn/v0/shipments/{shipmentId}```. For getting an RDT for the getShipment operation of the Shipping API. For any of a selling partner's shipments that you specify when you call the getShipment operation.
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets data_elements.
     *
     * @return null|string[]
     */
    public function getDataElements() : ?array
    {
        return $this->container['data_elements'];
    }

    /**
     * Sets data_elements.
     *
     * @param null|string[] $data_elements Indicates the type of Personally Identifiable Information requested. This parameter is required only when getting an RDT for use with the getOrder, getOrders, or getOrderItems operation of the Orders API. For more information, see the [Tokens API Use Case Guide](doc:tokens-api-use-case-guide). Possible values include: - **buyerInfo**. On the order level this includes general identifying information about the buyer and tax-related information. On the order item level this includes gift wrap information and custom order information, if available. - **shippingAddress**. This includes information for fulfilling orders. - **buyerTaxInformation**. This includes information for issuing tax invoices.
     *
     * @return self
     */
    public function setDataElements(?array $data_elements) : self
    {
        $this->container['data_elements'] = $data_elements;

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
