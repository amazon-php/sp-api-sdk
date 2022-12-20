<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * @method static CA()
 * @method static US()
 * @method static MX()
 * @method static BR()
 * @method static ES()
 * @method static GB()
 * @method static FR()
 * @method static BE()
 * @method static NL()
 * @method static DE()
 * @method static IT()
 * @method static SE()
 * @method static PL()
 * @method static EG()
 * @method static TR()
 * @method static SA()
 * @method static AE()
 * @method static IN()
 * @method static SG()
 * @method static AU()
 * @method static JP()
 */
final class Marketplace
{
    private static array $countryMap = [
        'CA' => [
            'name'   => 'Canada',
            'id'     => 'A2EUQ1WTGCTBG2',
            'region' => Regions::NORTH_AMERICA,
            'url'    => 'https://sellercentral.amazon.ca',
        ],
        'US' => [
            'name'   => 'United States of America',
            'id'     => 'ATVPDKIKX0DER',
            'region' => Regions::NORTH_AMERICA,
            'url'    => 'https://sellercentral.amazon.com',
        ],
        'MX' => [
            'name'   => 'Mexico',
            'id'     => 'A1AM78C64UM0Y8',
            'region' => Regions::NORTH_AMERICA,
            'url'    => 'https://sellercentral.amazon.com.mx',
        ],
        'BR' => [
            'name'   => 'Brazil',
            'id'     => 'A2Q3Y263D00KWC',
            'region' => Regions::NORTH_AMERICA,
            'url'    => 'https://sellercentral.amazon.com.br',
        ],
        'ES' => [
            'name'   => 'Spain',
            'id'     => 'A1RKKUPIHCS9HS',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral-europe.amazon.com',
        ],
        'GB' => [
            'name'   => 'United Kingdom',
            'id'     => 'A1F83G8C2ARO7P',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral-europe.amazon.com',
        ],
        'FR' => [
            'name'   => 'France',
            'id'     => 'A13V1IB3VIYZZH',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral-europe.amazon.com',
        ],
        'BE' => [
            'name'   => 'Belgium',
            'id'     => 'AMEN7PMS3EDWL',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.com.be',
        ],
        'NL' => [
            'name'   => 'Netherlands',
            'id'     => 'A1805IZSGTT6HS',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.nl',
        ],
        'DE' => [
            'name'   => 'Germany',
            'id'     => 'A1PA6795UKMFR9',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral-europe.amazon.com',
        ],
        'IT' => [
            'name'   => 'Italy',
            'id'     => 'APJ6JRA9NG5V4',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral-europe.amazon.com',
        ],
        'SE' => [
            'name'   => 'Sweden',
            'id'     => 'A2NODRKZP88ZB9',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.se',
        ],
        'PL' => [
            'name'   => 'Poland',
            'id'     => 'A1C3SOZRARQ6R3',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.pl',
        ],
        'EG' => [
            'name'   => 'Egypt',
            'id'     => 'ARBP9OOSHTCHU',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.eg',
        ],
        'TR' => [
            'name'   => 'Turkey',
            'id'     => 'A33AVAJ2PDY3EV',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.com.tr',
        ],
        'SA' => [
            'name'   => 'Saudi Arabia',
            'id'     => 'A17E79C6D8DWNP',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.sa',
        ],
        'AE' => [
            'name'   => 'United Arab Emirates',
            'id'     => 'A2VIGQ35RCS4UG',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.ae',
        ],
        'IN' => [
            'name'   => 'India',
            'id'     => 'A21TJRUUN4KGV',
            'region' => Regions::EUROPE,
            'url'    => 'https://sellercentral.amazon.in',
        ],
        'SG' => [
            'name'   => 'Singapore',
            'id'     => 'A19VAU5U5O7RUS',
            'region' => Regions::FAR_EAST,
            'url'    => 'https://sellercentral.amazon.sg',
        ],
        'AU' => [
            'name'   => 'Australia',
            'id'     => 'A39IBJ37TRP1C6',
            'region' => Regions::FAR_EAST,
            'url'    => 'https://sellercentral.amazon.com.au',
        ],
        'JP' => [
            'name'   => 'Japan',
            'id'     => 'A1VC38T7YXB528',
            'region' => Regions::FAR_EAST,
            'url'    => 'https://sellercentral.amazon.co.jp',
        ],
    ];

    private string $name;

    private string $id;

    private string $countryCode;

    private string $region;

    private string $sellerCentralUrl;

    private function __construct(string $name, string $id, string $countryCode, string $region, string $sellerCentralUrl)
    {
        $this->name = $name;
        $this->id = $id;
        $this->countryCode = $countryCode;
        $this->region = $region;
        $this->sellerCentralUrl = $sellerCentralUrl;
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function fromCountry(string $countryCode) : self
    {
        $countryCode = \strtoupper($countryCode);

        try {
            return self::$countryCode();
        } catch (\BadMethodCallException $e) {
            throw new InvalidArgumentException("Unexpected country code {$countryCode}");
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function fromId(string $marketplaceId) : self
    {
        foreach (self::$countryMap as $countryCode => $item) {
            if (\strtoupper($marketplaceId) === $item['id']) {
                return new self($item['name'], $item['id'], $countryCode, $item['region'], $item['url']);
            }
        }

        throw new InvalidArgumentException("Unexpected marketplace id {$marketplaceId}");
    }

    /**
     * @return array<self>
     */
    public static function all() : array
    {
        $marketplaces = [];

        foreach (self::$countryMap as $countryCode => $item) {
            $marketplaces[] = new self($item['name'], $item['id'], $countryCode, $item['region'], $item['url']);
        }

        return $marketplaces;
    }

    public static function __callStatic(string $country, array $parameters)
    {
        if (!\array_key_exists($country, self::$countryMap)) {
            throw new \BadMethodCallException('Call to undefined method ' . self::class . '::' . $country . '()');
        }

        $map = self::$countryMap[$country];

        return new self($map['name'], $map['id'], $country, $map['region'], $map['url']);
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
        return $this->sellerCentralUrl;
    }
}
