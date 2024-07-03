<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Box;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxDetails;
use AmazonPHP\SellingPartner\Model\FulfillmentInbound\UnitOfMeasurement;
use AmazonPHP\SellingPartner\Model\FulfillmentOutbound\EventCode;
use AmazonPHP\SellingPartner\Model\MerchantFulfillment\ShippingServiceOptions;
use AmazonPHP\SellingPartner\ObjectSerializer;
use PHPUnit\Framework\TestCase;

final class ObjectSerializerTest extends TestCase
{
    public function test_serialization_of_object_with_enums(): void
    {
        $object = new Box([
            'package_id' => 'test_package_id',
            'dimensions' => new Dimensions([
                'height' => 12,
                'length' => 18,
                'unit_of_measurement' => new UnitOfMeasurement(UnitOfMeasurement::IN),
                'width' => 12,
            ]),
        ]);

        $jsonObject = json_encode(ObjectSerializer::sanitizeForSerialization($object));

        $this->assertJsonStringEqualsJsonString(
            <<<JSON
{
  "packageId": "test_package_id",
  "dimensions": {
     "height": 12,
     "length": 18,
     "unitOfMeasurement": "IN",
     "width": 12
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
            ObjectSerializer::deserialize($config, $jsonObject, Box::class)
        );
    }

    public function test_serialization_of_date_time_objects(): void
    {
        $this->assertEquals(
            '2022-07-19',
            ObjectSerializer::sanitizeForSerialization(new \DateTime('2022-07-19 10:15:35'), null, 'date')
        );

        $this->assertEquals(
            '2022-07-19T10:15:35.000Z',
            ObjectSerializer::sanitizeForSerialization(new \DateTime('2022-07-19 10:15:35'))
        );

        $this->assertEquals(
            '2022-07-19T17:15:35.000Z',
            ObjectSerializer::sanitizeForSerialization(new \DateTime('2022-07-19 10:15:35', new \DateTimeZone('America/Los_Angeles')))
        );

        $this->assertEquals(
            '2022-07-19T17:15:35.000Z',
            ObjectSerializer::toString(new \DateTime('2022-07-19 10:15:35', new \DateTimeZone('America/Los_Angeles')))
        );

        $this->assertEquals(
            '2022-07-19T10:15:35.351Z',
            ObjectSerializer::toString(new \DateTime('2022-07-19 10:15:35.351', new \DateTimeZone('UTC')))
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

    public function test_serialization_of_enum_with_not_defined_value(): void
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
    public function test_deserialize_various_types($data, string $class, $expectedValue): void
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

        yield ['test', "mixed", 'test'];
        yield [5, "mixed", 5];
        yield [new \stdClass(), "mixed", new \stdClass()];
        yield [true, "mixed", true];
        yield [["value" => "test"], "mixed", ["value" => "test"]];

        yield [null, "void", null];
        yield ["test", "void", null];
        yield [20, "void", null];
    }

    public function test_deserialize_valid_collection(): void
    {
        $object = ObjectSerializer::deserialize(
            Configuration::forIAMUser('clientId', 'clientSecret', 'accessKey', 'secretKey'),
            '{"taxRates": [{"cessRate": 0.05,"gstRate": 0.05,"taxType": "TOTAL_TAX"}]}',
            TaxDetails::class
        );

        $this->assertInstanceOf(TaxDetails::class, $object);
        $this->assertCount(1, $object->getTaxRates());
    }
}