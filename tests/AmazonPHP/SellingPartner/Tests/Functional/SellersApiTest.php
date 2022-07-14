<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Sellers\MarketplaceParticipation;

final class SellersApiTest extends SandboxTestCase
{
    public function test_sandbox_get_marketplace_participations() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->sellers()->getMarketplaceParticipations(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region()
        );

        $this->assertCount(1, $response->getPayload());
        $this->assertContainsOnlyInstancesOf(MarketplaceParticipation::class, $response->getPayload());
    }
}
