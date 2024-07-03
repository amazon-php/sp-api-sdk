<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDK;
use AmazonPHP\SellingPartner\Api\AwdApi\WarehousingAndDistributionSDK;
use AmazonPHP\SellingPartner\Api\CatalogApi\CatalogItemSDK;
use AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDK;
use AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDK;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDK;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDK;
use AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDK;
use AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDK;
use AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDK;
use AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDK;
use AmazonPHP\SellingPartner\Api\ListingsApi\ListingsItemsSDK;
use AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDK;
use AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDK;
use AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDK;
use AmazonPHP\SellingPartner\Api\OrdersV0Api;
use AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDK;
use AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDK;
use AmazonPHP\SellingPartner\Api\SalesApi\SalesSDK;
use AmazonPHP\SellingPartner\Api\SellersApi\SellersSDK;
use AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDK;
use AmazonPHP\SellingPartner\Api\ShipmentApi;
use AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDK;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDK;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDK;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDK;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDK;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\SellingPartnerSDK;
use AmazonPHP\SellingPartner\VendorSDK;
use Buzz\Client\Curl;
use Monolog\Logger;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class SellingPartnerSDKTest extends TestCase
{
    private ?RequestFactoryInterface $requestFactory;

    private ?StreamFactoryInterface $streamFactory;

    private ?ClientInterface $httpClient;

    private ?Configuration $configuration;

    private ?LoggerInterface $logger;

    private array $sdkMap = [
        'oAuth'                   => OAuth::class,
        'aPlus'                   => APlusSDK::class,
        'catalogItem'             => CatalogItemSDK::class,
        'fbaInbound'              => FBAInboundSDK::class,
        'fbaInventory'            => FBAInventorySDK::class,
        'feeds'                   => FeedsSDK::class,
        'finances'                => FinancesSDK::class,
        'fulfillmentInbound'      => FulfillmentInboundSDK::class,
        'fulfillmentOutbound'     => FulfillmentOutboundSDK::class,
        'listingsItems'           => ListingsItemsSDK::class,
        'merchantFulfillment'     => MerchantFulfillmentSDK::class,
        'messaging'               => MessagingSDK::class,
        'notifications'           => NotificationsSDK::class,
        'orders'                  => OrdersV0Api\OrdersSDK::class,
        'orderShipment'           => ShipmentApi\OrdersSDK::class,
        'productFees'             => ProductFeesSDK::class,
        'productPricing'          => ProductPricingSDK::class,
        'productTypesDefinitions' => ProductTypesDefinitionsSDK::class,
        'reports'                 => ReportsSDK::class,
        'sales'                   => SalesSDK::class,
        'sellers'                 => SellersSDK::class,
        'services'                => ServicesSDK::class,
        'shipmentInvoicing'       => ShipmentInvoicingSDK::class,
        'shipping'                => ShippingSDK::class,
        'solicitations'           => SolicitationsSDK::class,
        'tokens'                  => TokensSDK::class,
        'uploads'                 => UploadsSDK::class,
        'warehousingDistribution' => WarehousingAndDistributionSDK::class,
        'vendor'                  => VendorSDK::class,
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
            SellingPartnerSDK::class,
            new SellingPartnerSDK(
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
            SellingPartnerSDK::class,
            $this->getSellingPartnerSDKByCreate()
        );
    }

    public function test_initialization_of_child_sdks() : void
    {
        $sellingPartnerSDK = $this->getSellingPartnerSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $this->assertInstanceOf($class, $sellingPartnerSDK->{$method}());
        }
    }

    public function test_child_sdks_are_properly_cached() : void
    {
        $sellingPartnerSDK = $this->getSellingPartnerSDKByCreate();

        foreach ($this->sdkMap as $method => $class) {
            $childSDKOne = $sellingPartnerSDK->{$method}();
            $childSDKTwo = $sellingPartnerSDK->{$method}();

            $this->assertSame(
                $childSDKOne,
                $childSDKTwo,
                'Failed asserting that two variables reference the same ' . $class . ' object.'
            );
        }
    }

    private function getSellingPartnerSDKByCreate() : SellingPartnerSDK
    {
        return SellingPartnerSDK::create(
            $this->httpClient,
            $this->requestFactory,
            $this->streamFactory,
            $this->configuration,
            $this->logger
        );
    }
}
