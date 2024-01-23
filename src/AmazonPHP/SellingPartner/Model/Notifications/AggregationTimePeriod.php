<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Notifications;

/**
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, refer to the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class AggregationTimePeriod
{
    /**
     * Possible values of this enum.
     */
    final public const FIVE_MINUTES = 'FiveMinutes';

    final public const TEN_MINUTES = 'TenMinutes';

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
            self::FIVE_MINUTES,
            self::TEN_MINUTES,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
