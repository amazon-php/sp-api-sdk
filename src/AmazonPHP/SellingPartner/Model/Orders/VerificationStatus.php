<?php declare(strict_types=1);
/**
 * VerificationStatus.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\Orders;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
class VerificationStatus
{
    /**
     * Possible values of this enum.
     */
    public const PENDING = 'Pending';

    public const APPROVED = 'Approved';

    public const REJECTED = 'Rejected';

    public const EXPIRED = 'Expired';

    public const CANCELLED = 'Cancelled';

    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::PENDING,
            self::APPROVED,
            self::REJECTED,
            self::EXPIRED,
            self::CANCELLED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
