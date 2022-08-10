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
class ImportDetails implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const METHOD_OF_PAYMENT_PAID_BY_BUYER = 'PaidByBuyer';

    public const METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY = 'CollectOnDelivery';

    public const METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER = 'DefinedByBuyerAndSeller';

    public const METHOD_OF_PAYMENT_FOB_PORT_OF_CALL = 'FOBPortOfCall';

    public const METHOD_OF_PAYMENT_PREPAID_BY_SELLER = 'PrepaidBySeller';

    public const METHOD_OF_PAYMENT_PAID_BY_SELLER = 'PaidBySeller';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ImportDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'method_of_payment' => 'string',
        'seal_number' => 'string',
        'route' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Route',
        'import_containers' => 'string',
        'billable_weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'estimated_ship_by_date' => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'method_of_payment' => null,
        'seal_number' => null,
        'route' => null,
        'import_containers' => null,
        'billable_weight' => null,
        'estimated_ship_by_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'method_of_payment' => 'methodOfPayment',
        'seal_number' => 'sealNumber',
        'route' => 'route',
        'import_containers' => 'importContainers',
        'billable_weight' => 'billableWeight',
        'estimated_ship_by_date' => 'estimatedShipByDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'method_of_payment' => 'setMethodOfPayment',
        'seal_number' => 'setSealNumber',
        'route' => 'setRoute',
        'import_containers' => 'setImportContainers',
        'billable_weight' => 'setBillableWeight',
        'estimated_ship_by_date' => 'setEstimatedShipByDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'method_of_payment' => 'getMethodOfPayment',
        'seal_number' => 'getSealNumber',
        'route' => 'getRoute',
        'import_containers' => 'getImportContainers',
        'billable_weight' => 'getBillableWeight',
        'estimated_ship_by_date' => 'getEstimatedShipByDate',
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
        $this->container['method_of_payment'] = $data['method_of_payment'] ?? null;
        $this->container['seal_number'] = $data['seal_number'] ?? null;
        $this->container['route'] = $data['route'] ?? null;
        $this->container['import_containers'] = $data['import_containers'] ?? null;
        $this->container['billable_weight'] = $data['billable_weight'] ?? null;
        $this->container['estimated_ship_by_date'] = $data['estimated_ship_by_date'] ?? null;
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
    public function getMethodOfPaymentAllowableValues() : array
    {
        return [
            self::METHOD_OF_PAYMENT_PAID_BY_BUYER,
            self::METHOD_OF_PAYMENT_COLLECT_ON_DELIVERY,
            self::METHOD_OF_PAYMENT_DEFINED_BY_BUYER_AND_SELLER,
            self::METHOD_OF_PAYMENT_FOB_PORT_OF_CALL,
            self::METHOD_OF_PAYMENT_PREPAID_BY_SELLER,
            self::METHOD_OF_PAYMENT_PAID_BY_SELLER,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getMethodOfPaymentAllowableValues();

        if (null !== $this->container['method_of_payment'] && !\in_array($this->container['method_of_payment'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'method_of_payment', must be one of '%s'",
                    $this->container['method_of_payment'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['route'] !== null) {
            $this->container['route']->validate();
        }

        if (null !== $this->container['import_containers'] && (\mb_strlen($this->container['import_containers']) > 64)) {
            throw new AssertionException("invalid value for 'import_containers', the character length must be smaller than or equal to 64.");
        }

        if ($this->container['billable_weight'] !== null) {
            $this->container['billable_weight']->validate();
        }
    }

    /**
     * Gets method_of_payment.
     *
     * @return null|string
     */
    public function getMethodOfPayment() : ?string
    {
        return $this->container['method_of_payment'];
    }

    /**
     * Sets method_of_payment.
     *
     * @param null|string $method_of_payment This is used for import purchase orders only. If the recipient requests, this field will contain the shipment method of payment.
     *
     * @return self
     */
    public function setMethodOfPayment(?string $method_of_payment) : self
    {
        $this->container['method_of_payment'] = $method_of_payment;

        return $this;
    }

    /**
     * Gets seal_number.
     *
     * @return null|string
     */
    public function getSealNumber() : ?string
    {
        return $this->container['seal_number'];
    }

    /**
     * Sets seal_number.
     *
     * @param null|string $seal_number the container's seal number
     *
     * @return self
     */
    public function setSealNumber(?string $seal_number) : self
    {
        $this->container['seal_number'] = $seal_number;

        return $this;
    }

    /**
     * Gets route.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Route
     */
    public function getRoute() : ?Route
    {
        return $this->container['route'];
    }

    /**
     * Sets route.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Route $route route
     *
     * @return self
     */
    public function setRoute(?Route $route) : self
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets import_containers.
     *
     * @return null|string
     */
    public function getImportContainers() : ?string
    {
        return $this->container['import_containers'];
    }

    /**
     * Sets import_containers.
     *
     * @param null|string $import_containers Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if shipment has multiple containers.
     *
     * @return self
     */
    public function setImportContainers(?string $import_containers) : self
    {
        $this->container['import_containers'] = $import_containers;

        return $this;
    }

    /**
     * Gets billable_weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight
     */
    public function getBillableWeight() : ?Weight
    {
        return $this->container['billable_weight'];
    }

    /**
     * Sets billable_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight $billable_weight billable_weight
     *
     * @return self
     */
    public function setBillableWeight(?Weight $billable_weight) : self
    {
        $this->container['billable_weight'] = $billable_weight;

        return $this;
    }

    /**
     * Gets estimated_ship_by_date.
     *
     * @return null|\DateTime|\DateTimeImmutable
     */
    public function getEstimatedShipByDate() : ?\DateTimeInterface
    {
        return $this->container['estimated_ship_by_date'];
    }

    /**
     * Sets estimated_ship_by_date.
     *
     * @param \DateTime|\DateTimeImmutable $estimated_ship_by_date Date on which the shipment is expected to be shipped. This value should not be in the past and not more than 60 days out in the future.
     *
     * @return self
     */
    public function setEstimatedShipByDate(\DateTimeInterface $estimated_ship_by_date) : self
    {
        $this->container['estimated_ship_by_date'] = $estimated_ship_by_date;

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
