<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInboundV0;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class UnitOfMeasurement
{
    /**
     * Possible values of this enum.
     */
    final public const INCHES = 'inches';

    final public const CENTIMETERS = 'centimeters';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::INCHES,
            self::CENTIMETERS,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
