<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDK;
use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDKInterface;
use AmazonPHP\SellingPartner\Api\AuthorizationApi\AuthorizationSDK;
use AmazonPHP\SellingPartner\Api\AuthorizationApi\AuthorizationSDKInterface;
use AmazonPHP\SellingPartner\Api\CatalogApi\CatalogItemSDK;
use AmazonPHP\SellingPartner\Api\CatalogApi\CatalogItemSDKInterface;
use AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDK;
use AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDKInterface;
use AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDK;
use AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDK;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDK;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDK;
use AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDKInterface;
use AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDK;
use AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDKInterface;
use AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDK;
use AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDKInterface;
use AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDK;
use AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDKInterface;
use AmazonPHP\SellingPartner\Api\ListingsApi\ListingsItemsSDK;
use AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDK;
use AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDKInterface;
use AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDK;
use AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDKInterface;
use AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDK;
use AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDKInterface;
use AmazonPHP\SellingPartner\Api\OrdersV0Api;
use AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDK;
use AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDKInterface;
use AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDK;
use AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDKInterface;
use AmazonPHP\SellingPartner\Api\SalesApi\SalesSDK;
use AmazonPHP\SellingPartner\Api\SalesApi\SalesSDKInterface;
use AmazonPHP\SellingPartner\Api\SellersApi\SellersSDK;
use AmazonPHP\SellingPartner\Api\SellersApi\SellersSDKInterface;
use AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDK;
use AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDKInterface;
use AmazonPHP\SellingPartner\Api\ShipmentApi;
use AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDK;
use AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDKInterface;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDK;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDKInterface;
use AmazonPHP\SellingPartner\Api\SmallAndLightApi\FBASmallAndLightSDK;
use AmazonPHP\SellingPartner\Api\SmallAndLightApi\FBASmallAndLightSDKInterface;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDK;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDKInterface;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDK;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDKInterface;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDK;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDKInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class SellingPartnerSDK
{
    /**
     * @var array<class-string>
     */
    private array $instances;

    private ClientInterface $httpClient;

    private RequestFactoryInterface $requestFactory;

    private StreamFactoryInterface $streamFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    private HttpFactory $httpFactory;

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) {
        $this->instances = [];

        $this->httpClient     = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory  = $streamFactory;
        $this->configuration  = $configuration;
        $this->logger         = $logger;

        $this->httpFactory = new HttpFactory($requestFactory, $streamFactory);
    }

    public static function create(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) : self {
        return new self($httpClient, $requestFactory, $streamFactory, $configuration, $logger);
    }

    public function configuration() : Configuration
    {
        return $this->configuration;
    }

    public function oAuth() : OAuth
    {
        return $this->instantiateSDK(OAuth::class);
    }

    public function aPlus() : APlusSDKInterface
    {
        return $this->instantiateSDK(APlusSDK::class);
    }

    public function authorization() : AuthorizationSDKInterface
    {
        return $this->instantiateSDK(AuthorizationSDK::class);
    }

    public function catalogItem() : CatalogItemSDKInterface
    {
        return $this->instantiateSDK(CatalogItemSDK::class);
    }

    public function fbaInbound() : FBAInboundSDKInterface
    {
        return $this->instantiateSDK(FBAInboundSDK::class);
    }

    public function fbaInventory() : FBAInventorySDKInterface
    {
        return $this->instantiateSDK(FBAInventorySDK::class);
    }

    public function fbaSmallAndLight() : FBASmallAndLightSDKInterface
    {
        return $this->instantiateSDK(FBASmallAndLightSDK::class);
    }

    public function feeds() : FeedsSDKInterface
    {
        return $this->instantiateSDK(FeedsSDK::class);
    }

    public function finances() : FinancesSDKInterface
    {
        return $this->instantiateSDK(FinancesSDK::class);
    }

    public function fulfillmentInbound() : FulfillmentInboundSDKInterface
    {
        return $this->instantiateSDK(FulfillmentInboundSDK::class);
    }

    public function fulfillmentOutbound() : FulfillmentOutboundSDKInterface
    {
        return $this->instantiateSDK(FulfillmentOutboundSDK::class);
    }

    public function listingsItems() : ListingsItemsSDK
    {
        return $this->instantiateSDK(ListingsItemsSDK::class);
    }

    public function merchantFulfillment() : MerchantFulfillmentSDKInterface
    {
        return $this->instantiateSDK(MerchantFulfillmentSDK::class);
    }

    public function messaging() : MessagingSDKInterface
    {
        return $this->instantiateSDK(MessagingSDK::class);
    }

    public function notifications() : NotificationsSDKInterface
    {
        return $this->instantiateSDK(NotificationsSDK::class);
    }

    public function orders() : OrdersV0Api\OrdersSDKInterface
    {
        return $this->instantiateSDK(OrdersV0Api\OrdersSDK::class);
    }

    public function orderShipment() : ShipmentApi\OrdersSDKInterface
    {
        return $this->instantiateSDK(ShipmentApi\OrdersSDK::class);
    }

    public function productFees() : ProductFeesSDKInterface
    {
        return $this->instantiateSDK(ProductFeesSDK::class);
    }

    public function productPricing() : ProductPricingSDKInterface
    {
        return $this->instantiateSDK(ProductPricingSDK::class);
    }

    public function productTypesDefinitions() : ProductTypesDefinitionsSDKInterface
    {
        return $this->instantiateSDK(ProductTypesDefinitionsSDK::class);
    }

    public function reports() : ReportsSDKInterface
    {
        return $this->instantiateSDK(ReportsSDK::class);
    }

    public function sales() : SalesSDKInterface
    {
        return $this->instantiateSDK(SalesSDK::class);
    }

    public function sellers() : SellersSDKInterface
    {
        return $this->instantiateSDK(SellersSDK::class);
    }

    public function services() : ServicesSDKInterface
    {
        return $this->instantiateSDK(ServicesSDK::class);
    }

    public function shipmentInvoicing() : ShipmentInvoicingSDKInterface
    {
        return $this->instantiateSDK(ShipmentInvoicingSDK::class);
    }

    public function shipping() : ShippingSDKInterface
    {
        return $this->instantiateSDK(ShippingSDK::class);
    }

    public function solicitations() : SolicitationsSDKInterface
    {
        return $this->instantiateSDK(SolicitationsSDK::class);
    }

    public function tokens() : TokensSDKInterface
    {
        return $this->instantiateSDK(TokensSDK::class);
    }

    public function uploads() : UploadsSDKInterface
    {
        return $this->instantiateSDK(UploadsSDK::class);
    }

    public function vendor() : VendorSDK
    {
        return $this->instantiateSDK(VendorSDK::class);
    }

    /**
     * @template T
     *
     * @param T $sdkClass
     *
     * @return T
     */
    private function instantiateSDK(string $sdkClass) : object
    {
        if (isset($this->instances[$sdkClass])) {
            return $this->instances[$sdkClass];
        }

        $this->instances[$sdkClass] = ($sdkClass === VendorSDK::class)
            ? VendorSDK::create(
                $this->httpClient,
                $this->requestFactory,
                $this->streamFactory,
                $this->configuration,
                $this->logger
            )
            : new $sdkClass(
                $this->httpClient,
                $this->httpFactory,
                $this->configuration,
                $this->logger
            );

        return $this->instances[$sdkClass];
    }
}
