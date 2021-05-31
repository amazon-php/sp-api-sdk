<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

final class Regions
{
    public const EUROPE = 'eu-west-1';

    public const FAR_EAST = 'us-west-2';

    public const NORTH_AMERICA = 'us-east-1';

    public static function isValid(string $region) : bool
    {
        return \in_array($region, [self::EUROPE, self::FAR_EAST, self::NORTH_AMERICA], true);
    }
}
