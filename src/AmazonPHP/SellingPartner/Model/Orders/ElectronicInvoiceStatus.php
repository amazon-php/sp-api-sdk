<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Orders;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Orders
*
* The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  _Note:_ The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ElectronicInvoiceStatus
{
    /**
     * Possible values of this enum
     */
    const NOT_REQUIRED = 'NotRequired';

    const NOT_FOUND = 'NotFound';

    const PROCESSING = 'Processing';

    const ERRORED = 'Errored';

    const ACCEPTED = 'Accepted';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_REQUIRED,
            self::NOT_FOUND,
            self::PROCESSING,
            self::ERRORED,
            self::ACCEPTED
        ];
    }

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return $this->value;
    }
}

