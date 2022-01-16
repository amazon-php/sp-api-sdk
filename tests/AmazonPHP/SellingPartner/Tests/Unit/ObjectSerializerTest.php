<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Unit;

use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelDataInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PartneredSmallParcelPackageInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsRequest;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentType;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\TransportDetailInput;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfWeight;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight;
use AmazonPHP\SellingPartner\ObjectSerializer;
use PHPUnit\Framework\TestCase;

final class ObjectSerializerTest extends TestCase
{
    public function test_serialization_of_object_with_enums(): void
    {
        $object = new PutTransportDetailsRequest([
            'is_partnered' => true,
            'shipment_type' => new ShipmentType(ShipmentType::SP),
            'transport_details' => new TransportDetailInput([
                'partnered_small_parcel_data' => new PartneredSmallParcelDataInput([
                    'carrier_name' => 'UNITED_PARCEL_SERVICE_INC',
                    'package_list' => [
                        new PartneredSmallParcelPackageInput([
                            'dimensions' => new Dimensions([
                                'length' => 18,
                                'width' => 12,
                                'height' => 12,
                                'unit' => new UnitOfMeasurement(UnitOfMeasurement::INCHES)
                            ]),
                            'weight' => new Weight([
                                'value' => 25,
                                'unit' => new UnitOfWeight(UnitOfWeight::POUNDS)
                            ])
                        ])
                    ]
                ])
            ])
        ]);

        $jsonObject = json_encode(ObjectSerializer::sanitizeForSerialization($object));

        $this->assertJsonStringEqualsJsonString(
            <<<JSON
{
  "IsPartnered": true,
  "ShipmentType": "SP",
  "TransportDetails": {
    "PartneredSmallParcelData": {
      "PackageList": [
        {
          "Dimensions": {
            "Length": 18,
            "Width": 12,
            "Height": 12,
            "Unit": "inches"
          },
          "Weight": {
            "Value": 25,
            "Unit": "pounds"
          }
        }
      ],
      "CarrierName": "UNITED_PARCEL_SERVICE_INC"
    }
  }
}
JSON
            ,
            $jsonObject
        );

        $config = Configuration::forIAMUser(
            'clientId',
            'clientSecret',
            'accessKey',
            'secretKey'
        );
        $this->assertEquals(
            $object,
            ObjectSerializer::deserialize($config, $jsonObject, PutTransportDetailsRequest::class)
        );
    }
}