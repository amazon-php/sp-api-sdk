<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\WarehousingAndDistribution;

/**
 * The Selling Partner API for AWD.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD).
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ShipmentSortableField
{
    /**
     * Possible values of this enum.
     */
    final public const UPDATED_AT = 'UPDATED_AT';

    final public const CREATED_AT = 'CREATED_AT';

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
            self::UPDATED_AT,
            self::CREATED_AT,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}