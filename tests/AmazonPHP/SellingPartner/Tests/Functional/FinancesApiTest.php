<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Finances\PayWithAmazonEvent;
use AmazonPHP\SellingPartner\Model\Finances\SolutionProviderCreditEvent;

final class FinancesApiTest extends SandboxTestCase
{
    public function test_sandbox_list_financial_events() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->finances()->listFinancialEvents(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            10,
            null,
            null,
            "jehgri34yo7jr9e8f984tr9i4o",
        );

        $this->assertCount(1, $response->getPayload()->getFinancialEvents()->getPayWithAmazonEventList());
        $this->assertContainsOnlyInstancesOf(PayWithAmazonEvent::class, $response->getPayload()->getFinancialEvents()->getPayWithAmazonEventList());

        $this->assertCount(1, $response->getPayload()->getFinancialEvents()->getServiceProviderCreditEventList());
        $this->assertContainsOnlyInstancesOf(SolutionProviderCreditEvent::class, $response->getPayload()->getFinancialEvents()->getServiceProviderCreditEventList());

    }
}
