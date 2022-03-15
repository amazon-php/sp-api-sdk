<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDK;
use AmazonPHP\SellingPartner\Api\AuthorizationApi\AuthorizationSDK;
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
use AmazonPHP\SellingPartner\Api\SmallAndLightApi\FBASmallAndLightSDK;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDK;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDK;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDK;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class SellingPartnerSDK
{
    private array $sdkCache;

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
        $this->sdkCache = [];

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

    public function oAuth() : OAuth
    {
        return $this->getSellingPartnerSDKFromCache(OAuth::class);
    }

    public function aPlus() : APlusSDK
    {
        return $this->getSellingPartnerSDKFromCache(APlusSDK::class);
    }

    public function authorization() : AuthorizationSDK
    {
        return $this->getSellingPartnerSDKFromCache(AuthorizationSDK::class);
    }

    public function catalogItem() : CatalogItemSDK
    {
        return $this->getSellingPartnerSDKFromCache(CatalogItemSDK::class);
    }

    public function fbaInbound() : FBAInboundSDK
    {
        return $this->getSellingPartnerSDKFromCache(FBAInboundSDK::class);
    }

    public function fbaInventory() : FBAInventorySDK
    {
        return $this->getSellingPartnerSDKFromCache(FBAInventorySDK::class);
    }

    public function fbaSmallAndLight() : FBASmallAndLightSDK
    {
        return $this->getSellingPartnerSDKFromCache(FBASmallAndLightSDK::class);
    }

    public function feeds() : FeedsSDK
    {
        return $this->getSellingPartnerSDKFromCache(FeedsSDK::class);
    }

    public function finances() : FinancesSDK
    {
        return $this->getSellingPartnerSDKFromCache(FinancesSDK::class);
    }

    public function fulfillmentInbound() : FulfillmentInboundSDK
    {
        return $this->getSellingPartnerSDKFromCache(FulfillmentInboundSDK::class);
    }

    public function fulfillmentOutbound() : FulfillmentOutboundSDK
    {
        return $this->getSellingPartnerSDKFromCache(FulfillmentOutboundSDK::class);
    }

    public function listingsItems() : ListingsItemsSDK
    {
        return $this->getSellingPartnerSDKFromCache(ListingsItemsSDK::class);
    }

    public function merchantFulfillment() : MerchantFulfillmentSDK
    {
        return $this->getSellingPartnerSDKFromCache(MerchantFulfillmentSDK::class);
    }

    public function messaging() : MessagingSDK
    {
        return $this->getSellingPartnerSDKFromCache(MessagingSDK::class);
    }

    public function notifications() : NotificationsSDK
    {
        return $this->getSellingPartnerSDKFromCache(NotificationsSDK::class);
    }

    public function orders() : OrdersV0Api\OrdersSDK
    {
        return $this->getSellingPartnerSDKFromCache(OrdersV0Api\OrdersSDK::class);
    }

    public function orderShipment() : ShipmentApi\OrdersSDK
    {
        return $this->getSellingPartnerSDKFromCache(ShipmentApi\OrdersSDK::class);
    }

    public function productFees() : ProductFeesSDK
    {
        return $this->getSellingPartnerSDKFromCache(ProductFeesSDK::class);
    }

    public function productPricing() : ProductPricingSDK
    {
        return $this->getSellingPartnerSDKFromCache(ProductPricingSDK::class);
    }

    public function productTypesDefinitions() : ProductTypesDefinitionsSDK
    {
        return $this->getSellingPartnerSDKFromCache(ProductTypesDefinitionsSDK::class);
    }

    public function reports() : ReportsSDK
    {
        return $this->getSellingPartnerSDKFromCache(ReportsSDK::class);
    }

    public function sales() : SalesSDK
    {
        return $this->getSellingPartnerSDKFromCache(SalesSDK::class);
    }

    public function sellers() : SellersSDK
    {
        return $this->getSellingPartnerSDKFromCache(SellersSDK::class);
    }

    public function services() : ServicesSDK
    {
        return $this->getSellingPartnerSDKFromCache(ServicesSDK::class);
    }

    public function shipmentInvoicing() : ShipmentInvoicingSDK
    {
        return $this->getSellingPartnerSDKFromCache(ShipmentInvoicingSDK::class);
    }

    public function shipping() : ShippingSDK
    {
        return $this->getSellingPartnerSDKFromCache(ShippingSDK::class);
    }

    public function solicitations() : SolicitationsSDK
    {
        return $this->getSellingPartnerSDKFromCache(SolicitationsSDK::class);
    }

    public function tokens() : TokensSDK
    {
        return $this->getSellingPartnerSDKFromCache(TokensSDK::class);
    }

    public function uploads() : UploadsSDK
    {
        return $this->getSellingPartnerSDKFromCache(UploadsSDK::class);
    }

    public function vendor() : VendorSDK
    {
        return $this->getSellingPartnerSDKFromCache(VendorSDK::class);
    }

    private function getSellingPartnerSDKFromCache(string $sdkClass)
    {
        if (isset($this->sdkCache[$sdkClass])) {
            return $this->sdkCache[$sdkClass];
        }

        $this->sdkCache[$sdkClass] = ($sdkClass === VendorSDK::class)
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

        return $this->sdkCache[$sdkClass];
    }
}
