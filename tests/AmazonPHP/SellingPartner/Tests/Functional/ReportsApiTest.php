<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Reports\CreateReportScheduleSpecification;
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

    public function test_sandbox_create_report_schedule() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->reports()->createReportSchedule(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new CreateReportScheduleSpecification([
                'report_type' => 'FEE_DISCOUNTS_REPORT',
                'marketplace_ids' => ['A1PA6795UKMFR9', 'ATVPDKIKX0DER'],
                'period' => 'PT5M',
                'next_report_creation_time' => new \DateTime('2019-12-10T20:11:24.000Z'),
            ])
        );

        $this->assertEquals("ID323", $response->getReportScheduleId());
    }
}
