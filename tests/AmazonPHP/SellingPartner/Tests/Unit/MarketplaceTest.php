<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\Marketplace;
use PHPUnit\Framework\TestCase;

final class MarketplaceTest extends TestCase
{
    private array $countries;
    private array $marketplaceIds;

    protected function setUp() : void
    {
        $this->countries = $this->getMarketplaceCountries();
        $this->marketplaceIds = $this->getMarketplaceIds();
    }

    protected function tearDown() : void
    {
        $this->countries = [];
        $this->marketplaceIds = [];
    }

    public function test_initialization_from_static_methods() : void
    {
        foreach ($this->countries as $country) {
            $this->assertInstanceOf(Marketplace::class, Marketplace::$country());
        }

        $this->expectException(\BadMethodCallException::class);
        Marketplace::XX();
    }

    public function test_initialization_from_country_code() : void
    {
        foreach ($this->countries as $country) {
            $this->assertInstanceOf(Marketplace::class, Marketplace::fromCountry($country));
        }

        $this->expectException(InvalidArgumentException::class);
        Marketplace::fromCountry('XX');
    }

    public function test_initialization_from_id() : void
    {
        foreach ($this->marketplaceIds as $marketplaceId) {
            $this->assertInstanceOf(Marketplace::class, Marketplace::fromId($marketplaceId));
        }

        $this->expectException(InvalidArgumentException::class);
        Marketplace::fromId('XX');
    }

    public function test_all_method_returns_correct_marketplaces() : void
    {
        $all = Marketplace::all();

        $this->assertIsArray($all);
        $this->assertCount(\count($this->countries), $all);

        foreach ($all as $marketplace) {
            $this->assertInstanceOf(Marketplace::class, $marketplace);
        }
    }

    private function getMarketplaceCountries() : array
    {
        $class = new \ReflectionClass(Marketplace::class);

        return \array_keys($class->getStaticPropertyValue('countryMap'));
    }

    private function getMarketplaceIds() : array
    {
        $class = new \ReflectionClass(Marketplace::class);

        return \array_column($class->getStaticPropertyValue('countryMap'), 'id');
    }
}
