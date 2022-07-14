<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\ProductPricing\Price;

final class ProductPricingApiTest extends SandboxTestCase
{
    public function test_sandbox_get_competitive_pricing() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->productPricing()->getCompetitivePricing(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'ATVPDKIKX0DER',
            'Asin'
        );

        $this->assertCount(2, $response->getPayload());
        $this->assertContainsOnlyInstancesOf(Price::class, $response->getPayload());
    }

    public function test_sandbox_get_pricing() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->productPricing()->getPricing(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'ATVPDKIKX0DER',
            'Asin'
        );

        $this->assertCount(2, $response->getPayload());
        $this->assertContainsOnlyInstancesOf(Price::class, $response->getPayload());
    }
}
