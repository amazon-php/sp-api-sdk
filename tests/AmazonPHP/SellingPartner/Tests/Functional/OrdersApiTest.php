<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Orders\Order;

final class OrdersApiTest extends SandboxTestCase
{
    public function test_sandbox_get_order() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->orders()->getOrder(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'TEST_CASE_200',
        );

        $this->assertEquals('902-1845936-5435065', $response->getPayload()->getAmazonOrderId());
        $this->assertEquals('Unshipped', $response->getPayload()->getOrderStatus());
    }

    public function test_sandbox_get_orders() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->orders()->getOrders(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            [$marketplace->id()],
            'TEST_CASE_200',
        );

        $this->assertCount(2, $response->getPayload()->getOrders());
        $this->assertContainsOnlyInstancesOf(Order::class, $response->getPayload()->getOrders());
    }

    public function test_sandbox_get_order_address() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->orders()->getOrderAddress(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'TEST_CASE_200',
        );

        $this->assertEquals('902-1845936-5435065', $response->getPayload()->getAmazonOrderId());
        $this->assertEquals('MFNIntegrationTestMerchant', $response->getPayload()->getShippingAddress()->getName());
    }
}
