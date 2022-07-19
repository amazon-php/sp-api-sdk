<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CODSettings;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderItem;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CreateFulfillmentOrderRequest;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreview;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewItem;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\GetFulfillmentPreviewRequest;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Money;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory;

final class FulfillmentOutboundApiTest extends SandboxTestCase
{
    public function test_sandbox_get_fulfillment_order() : void
    {
        $this->markTestSkipped("In sandbox returned fulfillment order status is 'PROCESSING', but expected one is 'Processing'. Production is working fine.");

        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentOutbound()->getFulfillmentOrder(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'FBATestOrder-1'
        );

        $this->assertEquals("TestOrder-FBAOutbound", $response->getPayload()->getFulfillmentOrder()->getDisplayableOrderId());
    }

    public function test_sandbox_get_package_tracking_details() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentOutbound()->getPackageTrackingDetails(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            212794778
        );

        $this->assertEquals("1Z50V7420354708051", $response->getPayload()->getTrackingNumber());
    }

    public function test_sandbox_get_fulfillment_preview() : void
    {
        $this->markTestSkipped("Sandbox can't accept shipping speed category. Production is working fine.");

        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentOutbound()->getFulfillmentPreview(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new GetFulfillmentPreviewRequest([
                'marketplace_id' => 'ATVPDKIKX0DER',
                'address' => new Address([
                    'name' => 'Amazon',
                    'address_line1' => '1234 Amazon Way',
                    'city' => 'Troy',
                    'state_or_region' => 'MI',
                    'postal_code' => '48084',
                    'country_code' => 'US',
                ]),
                'items' => [
                    new GetFulfillmentPreviewItem([
                        'seller_sku' => 'PSMM-TEST-SKU-Jan-21_19_39_23-0788',
                        'quantity' => 1,
                        'seller_fulfillment_order_item_id' => 'OrderItemID2',
                    ]),
                ],
                'shipping_speed_categories' => [
                    new ShippingSpeedCategory(ShippingSpeedCategory::STANDARD)
                ],
                'feature_constraints' => [
                    new FeatureSettings(['feature_name' => 'BLANK_BOX', 'feature_fulfillment_policy' => 'Required']),
                    new FeatureSettings(['feature_name' => 'BLOCK_AMZL', 'feature_fulfillment_policy' => 'Required']),
                ]
            ])
        );

        $this->assertCount(1, $response->getPayload()->getFulfillmentPreviews());
        $this->assertContainsOnlyInstancesOf(FulfillmentPreview::class, $response->getPayload()->getFulfillmentPreviews());
    }

    public function test_sandbox_create_fulfillment_order() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentOutbound()->createFulfillmentOrder(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new CreateFulfillmentOrderRequest([
                'marketplace_id' => 'ATVPDKIKX0DER',
                'seller_fulfillment_order_id' => 'FBATestOrder-11',
                'displayable_order_id' => 'TestOrder-FBAOutbound',
                'displayable_order_date' => new \DateTime('2020-01-09T19:46:45.809Z'),
                'displayable_order_comment' => 'TestOrder',
                'shipping_speed_category' => new ShippingSpeedCategory(ShippingSpeedCategory::STANDARD),
                'destination_address' => new Address([
                    'name' => 'Amazon',
                    'address_line1' => '1234 Amazon Way',
                    'address_line2' => 'Suite 123',
                    'address_line3' => 'Lane1',
                    'city' => 'Troy',
                    'state_or_region' => 'MI',
                    'postal_code' => '48084',
                    'country_code' => 'US',
                ]),
                'fulfillment_action' => new FulfillmentAction(FulfillmentAction::SHIP),
                'cod_settings' => new CODSettings([
                    'is_cod_required' => false,
                    'cod_charge' => new Money(['value' => '10.00', 'currency_code' => 'USD']),
                    'cod_charge_tax' => new Money(['value' => '2.00', 'currency_code' => 'USD']),
                    'shipping_charge' => new Money(['value' => '5.00', 'currency_code' => 'USD']),
                    'shipping_charge_tax' => new Money(['value' => '3.00', 'currency_code' => 'USD']),
                ]),
                'notification_emails' => ['test1%40amazon.com', 'test2%40amazon.com'],
                'items' => [
                    new CreateFulfillmentOrderItem([
                        'seller_sku' => 'CR-47K6-H6QN',
                        'seller_fulfillment_order_item_id' => 'OrderItemID1',
                        'quantity' => 3,
                    ]),
                    new CreateFulfillmentOrderItem([
                        'seller_sku' => 'PSMM-TEST-SKU-Jan-21_19_59_44-0738',
                        'seller_fulfillment_order_item_id' => 'OrderItemID2',
                        'quantity' => 1,
                    ])
                ],
            ])
        );

        $this->assertNull($response->getErrors());
    }
}
