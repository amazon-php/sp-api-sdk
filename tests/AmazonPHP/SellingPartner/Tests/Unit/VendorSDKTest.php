<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Api\VendorInvoiceApi\VendorDirectFulfillmentPaymentsSDK;
use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use AmazonPHP\SellingPartner\Api\VendorPaymentsApi\VendorInvoicesSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorDirectFulfillmentShippingSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorShipmentsSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK as VendorDirectFulfillmentShippingLabelsSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorDirectFulfillmentTransactionsSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorTransactionStatusSDK;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\VendorSDK;
use Buzz\Client\Curl;
use Monolog\Logger;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class VendorSDKTest extends TestCase
{
    private ?RequestFactoryInterface $requestFactory;

    private ?StreamFactoryInterface $streamFactory;

    private ?ClientInterface $httpClient;

    private ?Configuration $configuration;

    private ?LoggerInterface $logger;

    private array $sdkMap = [
        'ordersSDK'                          => VendorDirectFulfillmentOrdersSDK::class,
        'invoicesSDK'                        => VendorInvoicesSDK::class,
        'shipmentsSDK'                       => VendorShipmentsSDK::class,
        'transactionStatusSDK'               => VendorTransactionStatusSDK::class,
        'directFulfillmentPaymentsSDK'       => VendorDirectFulfillmentPaymentsSDK::class,
        'vendorDirectFulfillmentOrdersSDK'   => VendorDirectFulfillmentOrdersSDK::class,
        'directFulfillmentOrdersSDK'         => VendorDirectFulfillmentOrdersSDK::class,
        'directFulfillmentShippingSDK'       => VendorDirectFulfillmentShippingSDK::class,
        'directFulfillmentShippingLabelsSDK' => VendorDirectFulfillmentShippingLabelsSDK::class,
        'directFulfillmentTransactionsSDK'   => VendorDirectFulfillmentTransactionsSDK::class,
    ];

    protected function setUp() : void
    {
        $this->requestFactory = new Psr17Factory();
        $this->streamFactory  = new Psr17Factory();
        $this->httpClient     = new Curl($this->requestFactory);
        $this->configuration  = Configuration::forIAMUser('testId', 'testSecret', 'testAccessKey', 'testSecretKey');
        $this->logger         = new Logger('testLogger');
    }

    protected function tearDown() : void
    {
        $this->requestFactory = null;
        $this->streamFactory  = null;
        $this->httpClient     = null;
        $this->configuration  = null;
        $this->logger         = null;
    }

    public function test_initialization_from_constructor() : void
    {
        $this->assertInstanceOf(
            VendorSDK::class,
            new VendorSDK(
                $this->httpClient,
                $this->requestFactory,
                $this->streamFactory,
                $this->configuration,
                $this->logger
            )
        );
    }

    public function test_initialization_from_create_method() : void
    {
        $this->assertInstanceOf(
            VendorSDK::class,
            $this->getVendorSDKByCreate()
        );
    }

    public function test_initialization_of_child_sdks() : void
    {
        $vendorSDK = $this->getVendorSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $this->assertInstanceOf($class, $vendorSDK->{$method}());
        }
    }

    public function test_child_sdks_are_properly_cached() : void
    {
        $vendorSDK = $this->getVendorSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $childSDKOne = $vendorSDK->{$method}();
            $childSDKTwo = $vendorSDK->{$method}();

            $this->assertSame(
                $childSDKOne,
                $childSDKTwo,
                'Failed asserting that two variables reference the same ' . $class . ' object.'
            );
        }
    }

    private function getVendorSDKByCreate() : VendorSDK
    {
        return VendorSDK::create(
            $this->httpClient,
            $this->requestFactory,
            $this->streamFactory,
            $this->configuration,
            $this->logger
        );
    }
}
