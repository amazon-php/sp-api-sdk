<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Contact;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\CurrencyCode;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentHeader;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentInfo;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentItem;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentRequest;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\IntendedBoxContentsSource;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelPrepPreference;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredLtlDataInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredSmallParcelDataInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\NonPartneredSmallParcelPackageInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Pallet;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredLtlDataInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelDataInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepDetails;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepInstruction;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepOwner;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsRequest;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\SellerFreightClass;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentStatus;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportStatus;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfWeight;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight;

final class FulfillmentInboundApiTest extends SandboxTestCase
{
    public function test_sandbox_get_shipments() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentInbound()->getShipments(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'SHIPMENT',
            'ATVPDKIKX0DER'
        );

        $this->assertCount(1, $response->getPayload()->getShipmentData());
        $this->assertContainsOnlyInstancesOf(InboundShipmentInfo::class, $response->getPayload()->getShipmentData());
    }

    public function test_sandbox_get_transport_details() : void
    {
        $this->markTestSkipped("In sandbox unit of measure is 'IN' but enum is expecting 'inches' or 'centimeters'.");

        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentInbound()->getTransportDetails(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'shipmentId1',
        );

        $this->assertEquals("FBA15DJCPTRK", $response->getPayload()->getTransportContent()->getTransportHeader()->getShipmentId());
    }

    public function test_sandbox_put_transport_details() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentInbound()->putTransportDetails(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            'shipmentId1',
            new PutTransportDetailsRequest([
                'is_partnered' => true,
                'shipment_type' => new ShipmentType(ShipmentType::SP),
                'transport_details' => new TransportDetailInput([
                    'partnered_small_parcel_data' => new PartneredSmallParcelDataInput([
                        'package_list' => [
                            new PartneredSmallParcelPackageInput([
                                'dimensions' => new Dimensions([
                                    'length' => 11,
                                    'width' => 11,
                                    'height' => 11,
                                    'unit' => new UnitOfMeasurement(UnitOfMeasurement::INCHES),
                                ]),
                                'weight' => new Weight([
                                    'value' => 11,
                                    'unit' => new UnitOfWeight(UnitOfWeight::POUNDS),
                                ]),
                            ])
                        ],
                        'carrier_name' => 'string',
                    ]),
                    'non_partnered_small_parcel_data' => new NonPartneredSmallParcelDataInput([
                        'carrier_name' => 'USPS',
                        'package_list' => [
                            new NonPartneredSmallParcelPackageInput(['tracking_id' => 'werwrwerwrwrer']),
                        ]
                    ]),
                    'partnered_ltl_data' => new PartneredLtlDataInput([
                        'contact' => new Contact([
                            'name' => 'Test1',
                            'phone' => '234-343-3434',
                            'email' => 'abc@test.com',
                            'fax' => '234-343-3434',
                        ]),
                        'box_count' => 1,
                        'seller_freight_class' => new SellerFreightClass(SellerFreightClass::_50),
                        'freight_ready_date' => new \DateTime('2020-03-27'),
                        'pallet_list' => [
                            new Pallet([
                                'dimensions' => new Dimensions([
                                    'length' => 13,
                                    'width' => 13,
                                    'height' => 13,
                                    'unit' => new UnitOfMeasurement(UnitOfMeasurement::INCHES),
                                ]),
                                'weight' => new Weight([
                                    'value' => 13,
                                    'unit' => new UnitOfWeight(UnitOfWeight::POUNDS),
                                ]),
                                'is_stacked' => true,
                            ]),
                        ],
                        'total_weight' => new Weight([
                            'value' => 13,
                            'unit' => new UnitOfWeight(UnitOfWeight::POUNDS),
                        ]),
                        'seller_declared_value' => new Amount([
                            'value' => 20,
                            'currency_code' => new CurrencyCode(CurrencyCode::USD),
                        ]),
                    ]),
                    'non_partnered_ltl_data' => new NonPartneredLtlDataInput([
                        'carrier_name' => 'USPS',
                        'pro_number' => '3746274',
                    ]),
                ]),
            ])
        );

        $this->assertEquals(TransportStatus::WORKING, $response->getPayload()->getTransportResult()->getTransportStatus()->toString());
    }

    public function test_sandbox_create_inbound_shipment() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->fulfillmentInbound()->createInboundShipment(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            '345453',
            new InboundShipmentRequest([
                'inbound_shipment_header' => new InboundShipmentHeader([
                    'shipment_name' => '43545345',
                    'ship_from_address' => new Address([
                        'name' => '35435345',
                        'address_line1' => '123 any st',
                        'district_or_county' => 'Washtenaw',
                        'city' => 'Ann Arbor',
                        'state_or_province_code' => 'Test',
                        'country_code' => 'US',
                        'postal_code' => '48103',
                    ]),
                    'destination_fulfillment_center_id' => 'AEB2',
                    'are_cases_required' => true,
                    'shipment_status' => new ShipmentStatus(ShipmentStatus::WORKING),
                    'label_prep_preference' => new LabelPrepPreference(LabelPrepPreference::SELLER_LABEL),
                    'intended_box_contents_source' => new IntendedBoxContentsSource(IntendedBoxContentsSource::NONE),
                ]),
                'inbound_shipment_items' => [
                    new InboundShipmentItem([
                        'shipment_id' => '345453',
                        'seller_sku' => '34534545',
                        'fulfillment_network_sku' => '435435435',
                        'quantity_shipped' => 0,
                        'quantity_received' => 0,
                        'quantity_in_case' => 0,
                        'release_date' => new \DateTime('2020-04-23'),
                        'prep_details_list' => [
                            new PrepDetails([
                                'prep_instruction' => new PrepInstruction(PrepInstruction::POLYBAGGING),
                                'prep_owner' => new PrepOwner(PrepOwner::AMAZON),
                            ])
                        ],
                    ])
                ],
                'marketplace_id' => 'MarketplaceId',
            ])
        );

        $this->assertEquals('ShipmentId', $response->getPayload()->getShipmentId());
    }
}
