<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\Exception;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

final class Marketplace
{
    private string $name;

    private string $id;

    private string $countryCode;

    private string $region;

    private function __construct(string $name, string $id, string $countryCode, string $region)
    {
        $this->name = $name;
        $this->id = $id;
        $this->countryCode = $countryCode;
        $this->region = $region;
    }

    public static function fromCountry(string $countryCode) : self
    {
        $countryCode = \strtoupper($countryCode);

        switch ($countryCode) {
            case 'CA':
            case 'US':
            case 'MX':
            case 'BR':
            case 'ES':
            case 'GB':
            case 'FR':
            case 'NL':
            case 'DE':
            case 'IT':
            case 'SE':
            case 'PL':
            case 'TR':
            case 'AE':
            case 'IN':
            case 'SG':
            case 'AU':
            case 'JP':
                return self::$countryCode();
        }

        throw new InvalidArgumentException("Unexpected country code {$countryCode}");
    }

    /**
     * @return array<self>
     */
    public static function all() : array
    {
        return [
            self::CA(),
            self::US(),
            self::MX(),
            self::BR(),
            self::ES(),
            self::GB(),
            self::FR(),
            self::NL(),
            self::DE(),
            self::IT(),
            self::SE(),
            self::PL(),
            self::TR(),
            self::AE(),
            self::IN(),
            self::SG(),
            self::AU(),
            self::JP(),
        ];
    }

    public static function US() : self
    {
        return new self('United States of America', 'ATVPDKIKX0DER', 'US', Regions::NORTH_AMERICA);
    }

    public static function CA() : self
    {
        return new self('Canada', 'A2EUQ1WTGCTBG2', 'CA', Regions::NORTH_AMERICA);
    }

    public static function MX() : self
    {
        return new self('Mexico', 'A1AM78C64UM0Y8', 'MX', Regions::NORTH_AMERICA);
    }

    public static function BR() : self
    {
        return new self('Brazil', 'A2Q3Y263D00KWC', 'BR', Regions::NORTH_AMERICA);
    }

    public static function ES() : self
    {
        return new self('Spain', 'A1RKKUPIHCS9HS', 'ES', Regions::EUROPE);
    }

    public static function GB() : self
    {
        return new self('United Kingdom', 'A1F83G8C2ARO7P', 'GB', Regions::EUROPE);
    }

    public static function FR() : self
    {
        return new self('France', 'A13V1IB3VIYZZH', 'FR', Regions::EUROPE);
    }

    public static function NL() : self
    {
        return new self('Netherlands', 'A1805IZSGTT6HS', 'NL', Regions::EUROPE);
    }

    public static function DE() : self
    {
        return new self('Germany', 'A1PA6795UKMFR9', 'DE', Regions::EUROPE);
    }

    public static function IT() : self
    {
        return new self('Italy', 'APJ6JRA9NG5V4', 'IT', Regions::EUROPE);
    }

    public static function SE() : self
    {
        return new self('Sweden', 'A2NODRKZP88ZB9', 'SE', Regions::EUROPE);
    }

    public static function PL() : self
    {
        return new self('Poland', 'A1C3SOZRARQ6R3', 'PL', Regions::EUROPE);
    }

    public static function EG() : self
    {
        return new self('Egypt', 'ARBP9OOSHTCHU', 'EG', Regions::EUROPE);
    }

    public static function TR() : self
    {
        return new self('Turkey', 'A33AVAJ2PDY3EV', 'TR', Regions::EUROPE);
    }

    public static function AE() : self
    {
        return new self('United Arab Emirates', 'A2VIGQ35RCS4UG', 'AE', Regions::EUROPE);
    }

    public static function IN() : self
    {
        return new self('India', 'A21TJRUUN4KGV', 'IN', Regions::EUROPE);
    }

    public static function SG() : self
    {
        return new self('Singapore', 'A19VAU5U5O7RUS', 'SG', Regions::FAR_EAST);
    }

    public static function AU() : self
    {
        return new self('Australia', 'A39IBJ37TRP1C6', 'AU', Regions::FAR_EAST);
    }

    public static function JP() : self
    {
        return new self('Japan', 'A1VC38T7YXB528', 'JP', Regions::FAR_EAST);
    }

    public function name() : string
    {
        return $this->name;
    }

    public function id() : string
    {
        return $this->id;
    }

    public function countryCode() : string
    {
        return $this->countryCode;
    }

    public function region() : string
    {
        return $this->region;
    }

    public function sellerCentralUrl() : string
    {
        switch ($this->countryCode) {
            case 'CA':
                return 'https://sellercentral.amazon.ca';
            case 'US':
                return 'https://sellercentral.amazon.com';
            case 'MX':
                return 'https://sellercentral.amazon.com.mx';
            case 'BR':
                return 'https://sellercentral.amazon.com.br';
            case 'ES':
            case 'GB':
            case 'FR':
                return 'https://sellercentral-europe.amazon.com';
            case 'NL':
                return 'https://sellercentral.amazon.nl';
            case 'DE':
            case 'IT':
                return 'https://sellercentral-europe.amazon.com';
            case 'SE':
                return 'https://sellercentral.amazon.se';
            case 'PL':
                return 'https://sellercentral.amazon.pl';
            case 'TR':
                return 'https://sellercentral.amazon.com.tr';
            case 'AE':
                return 'https://sellercentral.amazon.ae';
            case 'IN':
                return 'https://sellercentral.amazon.in';
            case 'SG':
                return 'https://sellercentral.amazon.sg';
            case 'AU':
                return 'https://sellercentral.amazon.com.au';
            case 'JP':
                return 'https://sellercentral.amazon.co.jp';
        }

        throw new Exception("Unexpected country code {$this->countryCode}");
    }
}
