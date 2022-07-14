<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

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
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\EventCode;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions;
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

    public function test_deserialize_label_format_enum_with_an_empty_string(): void
    {
        $response = <<<JSON
{
    "DeliveryExperience": "DeliveryConfirmationWithoutSignature",
    "CarrierWillPickUp": false,
    "LabelFormat": ""
}
JSON;

        $object = ObjectSerializer::deserialize(
            Configuration::forIAMUser('clientId', 'clientSecret', 'accessKey', 'secretKey'),
            $response,
            ShippingServiceOptions::class
        );

        $this->assertInstanceOf(ShippingServiceOptions::class, $object);
        $this->assertNull($object->getLabelFormat());
    }

    public function test_serialization_of_enum_with_not_defined_value()
    {
        $object = ObjectSerializer::deserialize(
            Configuration::forIAMUser('clientId', 'clientSecret', 'accessKey', 'secretKey'),
            "EVENT_444",
            \ltrim(EventCode::class, "/")
        );

        $this->assertInstanceOf(EventCode::class, $object);
        $this->assertEquals(
            new EventCode("EVENT_444"),
            $object
        );
    }

    /**
     * @dataProvider data
     *
     * @param mixed $data
     * @param mixed $expectedValue
     */
    public function test_deserialize_various_types($data, string $class, $expectedValue)
    {
        $result = ObjectSerializer::deserialize(
            Configuration::forIAMUser('clientId', 'clientSecret', 'accessKey', 'secretKey'),
            $data,
            $class
        );

        $this->assertEquals($expectedValue, $result);
    }

    public function data() : \Generator
    {
        yield ["2022-07-14", "\DateTime", new \DateTime("2022-07-14")];
        yield ["2022-07-02T16:28:10", "\DateTimeImmutable", new \DateTimeImmutable("2022-07-02T16:28:10")];

        yield [false, "bool", false];
        yield [true, "boolean", true];
        yield ["false", "boolean", false];
        yield ["true", "boolean", true];
        yield ["0", "boolean", false];
        yield ["1", "boolean", true];
        yield [0, "bool", false];
        yield [1, "bool", true];
        yield ["", "bool", false];

        yield ["8.99", "double", 8.99];
        yield [21.84, "double", 21.84];
        yield [5, "double", 5.0];

        yield ["8.99", "float", 8.99];
        yield [21.84, "float", 21.84];
        yield [5, "float", 5.0];

        yield [1, "int", 1];
        yield ["2", "int", 2];
        yield ["5.55", "int", 5];

        yield [1, "integer", 1];
        yield ["2", "integer", 2];
        yield ["5.55", "integer", 5];

        yield ["10", "number", 10];
        yield ["10.99", "number", 10.99];
        yield [18, "number", 18];
        yield [356.88, "number", 356.88];

        yield ["test", "string", "test"];
        yield [123, "string", "123"];
        yield [56.56, "string", "56.56"];
        yield [true, "string", "1"];

        yield [new \stdClass(), "object", []];
        yield [(object) ["value" => "test"], "object", ["value" => "test"]];
    }
}