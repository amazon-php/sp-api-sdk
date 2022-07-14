<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\Address;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceType;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\Item;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\PackageDimensions;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShipmentRequestDetails;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingService;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\UnitOfLength;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\UnitOfWeight;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight;

final class MerchantFulfillmentApiTest extends SandboxTestCase
{
    public function test_sandbox_get_shipment() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->merchantFulfillment()->getShipment(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'abcddcba-00c3-4f6f-a63a-639f76ee9253'
        );

        $this->assertEquals("903-5563053-5647845", $response->getPayload()->getAmazonOrderId());
    }

    public function test_sandbox_create_shipment() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->merchantFulfillment()->createShipment(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new CreateShipmentRequest([
                'shipment_request_details' => new ShipmentRequestDetails([
                    'amazon_order_id' => '903-5563053-5647845',
                    'item_list' => [
                        new Item([
                            'order_item_id' => '52986411826454',
                            'quantity' => 1,
                        ]),
                    ],
                    'ship_from_address' => new Address([
                        'name' => 'John Doe',
                        'address_line1' => '300 Turnbull Ave',
                        'address_line2' => null,
                        'address_line3' => null,
                        'district_or_county' => null,
                        'email' => 'jdoeasdfllkj@yahoo.com',
                        'city' => 'Detroit',
                        'state_or_province_code' => 'MI',
                        'postal_code' => '48123',
                        'country_code' => 'US',
                        'phone' => '7132341234',
                    ]),
                    'package_dimensions' => new PackageDimensions([
                        'length' => 10,
                        'width' => 10,
                        'height' => 10,
                        'unit' => new UnitOfLength(UnitOfLength::INCHES),
                    ]),
                    'weight' => new Weight([
                        'value' => 10,
                        'unit' => new UnitOfWeight(UnitOfWeight::OZ),
                    ]),
                    'shipping_service_options' => new ShippingServiceOptions([
                        'delivery_experience' => new DeliveryExperienceType(DeliveryExperienceType::NO_TRACKING),
                        'carrier_will_pick_up' => false,
                        'carrier_will_pick_up_option' => new CarrierWillPickUpOption(CarrierWillPickUpOption::SHIPPER_WILL_DROP_OFF),
                    ]),
                ]),
                'shipping_service_id' => 'UPS_PTP_2ND_DAY_AIR',
                'shipping_service_offer_id' => 'WHgxtyn6qjGGaCzOCog1azF5HLHje5Pz3Lc2Fmt5eKoZAReW8oJ1SMumuBS8lA/Hjuglhyiu0+KRLvyJxFV0PB9YFMDhygs3VyTL0WGYkGxiuRkmuEvpqldUn9rrkWVodqnR4vx2VtXvtER/Ju6RqYoddJZGy6RS2KLzzhQ2NclN0NYXMZVqpOe5RsRBddXaGuJr7oza3M52+JzChocAHzcurIhCRynpbxfmNLzZMQEbgnpGLzuaoSMzfxg90/NaXFR/Ou01du/uKd5AbfMW/AxAKP9ht6Oi9lDHq6WkGqvjkVLW0/jj/fBgblIwcs+t',
            ])
        );

        $this->assertEquals("be7a0a53-00c3-4f6f-a63a-639f76ee9253", $response->getPayload()->getShipmentId());
    }

    public function test_sandbox_get_eligible_shipment_services() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->merchantFulfillment()->getEligibleShipmentServices(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new GetEligibleShipmentServicesRequest([
                'shipment_request_details' => new ShipmentRequestDetails([
                    'amazon_order_id' => '903-5563053-5647845',
                    'item_list' => [
                        new Item([
                            'order_item_id' => '52986411826454',
                            'quantity' => 1,
                        ]),
                    ],
                    'ship_from_address' => new Address([
                        'name' => 'John Doe',
                        'address_line1' => '300 Turnbull Ave',
                        'address_line2' => null,
                        'address_line3' => null,
                        'district_or_county' => null,
                        'email' => 'jdoeasdfllkj@yahoo.com',
                        'city' => 'Detroit',
                        'state_or_province_code' => 'MI',
                        'postal_code' => '48123',
                        'country_code' => 'US',
                        'phone' => '7132341234',
                    ]),
                    'package_dimensions' => new PackageDimensions([
                        'length' => 10,
                        'width' => 10,
                        'height' => 10,
                        'unit' => new UnitOfLength(UnitOfLength::INCHES),
                    ]),
                    'weight' => new Weight([
                        'value' => 10,
                        'unit' => new UnitOfWeight(UnitOfWeight::OZ),
                    ]),
                    'shipping_service_options' => new ShippingServiceOptions([
                        'delivery_experience' => new DeliveryExperienceType(DeliveryExperienceType::NO_TRACKING),
                        'carrier_will_pick_up' => false,
                        'carrier_will_pick_up_option' => new CarrierWillPickUpOption(CarrierWillPickUpOption::SHIPPER_WILL_DROP_OFF),
                    ]),
                ]),
            ])
        );

        $this->assertCount(2, $response->getPayload()->getShippingServiceList());
        $this->assertContainsOnlyInstancesOf(ShippingService::class, $response->getPayload()->getShippingServiceList());
    }
}
