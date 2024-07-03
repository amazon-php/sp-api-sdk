<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PackingOption implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PackingOption';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'discounts' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[]',
        'expiration' => '\DateTimeInterface',
        'fees' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[]',
        'packing_groups' => 'string[]',
        'packing_option_id' => 'string',
        'status' => 'string',
        'supported_shipping_configurations' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShippingConfiguration[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'discounts' => null,
        'expiration' => 'date-time',
        'fees' => null,
        'packing_groups' => null,
        'packing_option_id' => null,
        'status' => null,
        'supported_shipping_configurations' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'discounts' => 'discounts',
        'expiration' => 'expiration',
        'fees' => 'fees',
        'packing_groups' => 'packingGroups',
        'packing_option_id' => 'packingOptionId',
        'status' => 'status',
        'supported_shipping_configurations' => 'supportedShippingConfigurations',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'discounts' => 'setDiscounts',
        'expiration' => 'setExpiration',
        'fees' => 'setFees',
        'packing_groups' => 'setPackingGroups',
        'packing_option_id' => 'setPackingOptionId',
        'status' => 'setStatus',
        'supported_shipping_configurations' => 'setSupportedShippingConfigurations',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'discounts' => 'getDiscounts',
        'expiration' => 'getExpiration',
        'fees' => 'getFees',
        'packing_groups' => 'getPackingGroups',
        'packing_option_id' => 'getPackingOptionId',
        'status' => 'getStatus',
        'supported_shipping_configurations' => 'getSupportedShippingConfigurations',
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
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['fees'] = $data['fees'] ?? null;
        $this->container['packing_groups'] = $data['packing_groups'] ?? null;
        $this->container['packing_option_id'] = $data['packing_option_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['supported_shipping_configurations'] = $data['supported_shipping_configurations'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
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
        if ($this->container['discounts'] === null) {
            throw new AssertionException("'discounts' can't be null");
        }

        if ($this->container['fees'] === null) {
            throw new AssertionException("'fees' can't be null");
        }

        if ($this->container['packing_groups'] === null) {
            throw new AssertionException("'packing_groups' can't be null");
        }

        if ($this->container['packing_option_id'] === null) {
            throw new AssertionException("'packing_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['packing_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'packing_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['packing_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'packing_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['packing_option_id'])) {
            throw new AssertionException("invalid value for 'packing_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ((\mb_strlen((string) $this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['supported_shipping_configurations'] === null) {
            throw new AssertionException("'supported_shipping_configurations' can't be null");
        }
    }

    /**
     * Gets discounts.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[]
     */
    public function getDiscounts() : array
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[] $discounts discount for the offered option
     */
    public function setDiscounts(array $discounts) : self
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets expiration.
     */
    public function getExpiration() : ?\DateTimeInterface
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration.
     *
     * @param null|\DateTimeInterface $expiration The timestamp at which this packing option becomes no longer valid. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function setExpiration(?\DateTimeInterface $expiration) : self
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets fees.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[]
     */
    public function getFees() : array
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Incentive[] $fees fee for the offered option
     */
    public function setFees(array $fees) : self
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets packing_groups.
     *
     * @return string[]
     */
    public function getPackingGroups() : array
    {
        return $this->container['packing_groups'];
    }

    /**
     * Sets packing_groups.
     *
     * @param string[] $packing_groups packing group IDs
     */
    public function setPackingGroups(array $packing_groups) : self
    {
        $this->container['packing_groups'] = $packing_groups;

        return $this;
    }

    /**
     * Gets packing_option_id.
     */
    public function getPackingOptionId() : string
    {
        return $this->container['packing_option_id'];
    }

    /**
     * Sets packing_option_id.
     *
     * @param string $packing_option_id identifier of a packing option
     */
    public function setPackingOptionId(string $packing_option_id) : self
    {
        $this->container['packing_option_id'] = $packing_option_id;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status The status of the packing option. Can be: `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets supported_shipping_configurations.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShippingConfiguration[]
     */
    public function getSupportedShippingConfigurations() : array
    {
        return $this->container['supported_shipping_configurations'];
    }

    /**
     * Sets supported_shipping_configurations.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShippingConfiguration[] $supported_shipping_configurations list of supported shipping modes
     */
    public function setSupportedShippingConfigurations(array $supported_shipping_configurations) : self
    {
        $this->container['supported_shipping_configurations'] = $supported_shipping_configurations;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
