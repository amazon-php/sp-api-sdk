<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Reports\Report;

final class ReportsApiTest extends SandboxTestCase
{
    public function test_sandbox_get_reports() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->reports()->getReports(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            ['FEE_DISCOUNTS_REPORT', 'GET_AFN_INVENTORY_DATA'],
            ['IN_QUEUE', 'IN_PROGRESS']
        );

        $this->assertCount(1, $response->getReports());
        $this->assertContainsOnlyInstancesOf(Report::class, $response->getReports());
    }
}
