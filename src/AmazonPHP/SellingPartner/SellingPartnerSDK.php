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
    /**
     * @var array<class-string>
     */
    private array $instances;

    private readonly HttpFactory $httpFactory;

    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly Configuration $configuration,
        private readonly LoggerInterface $logger
    ) {
        $this->instances = [];

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

    public function oAuth() : object|string
    {
        return $this->instantiateSDK(OAuth::class);
    }

    public function aPlus() : object|string
    {
        return $this->instantiateSDK(APlusSDK::class);
    }

    public function authorization() : object|string
    {
        return $this->instantiateSDK(AuthorizationSDK::class);
    }

    public function catalogItem() : object|string
    {
        return $this->instantiateSDK(CatalogItemSDK::class);
    }

    public function fbaInbound() : object|string
    {
        return $this->instantiateSDK(FBAInboundSDK::class);
    }

    public function fbaInventory() : object|string
    {
        return $this->instantiateSDK(FBAInventorySDK::class);
    }

    public function fbaSmallAndLight() : object|string
    {
        return $this->instantiateSDK(FBASmallAndLightSDK::class);
    }

    public function feeds() : object|string
    {
        return $this->instantiateSDK(FeedsSDK::class);
    }

    public function finances() : object|string
    {
        return $this->instantiateSDK(FinancesSDK::class);
    }

    public function fulfillmentInbound() : object|string
    {
        return $this->instantiateSDK(FulfillmentInboundSDK::class);
    }

    public function fulfillmentOutbound() : object|string
    {
        return $this->instantiateSDK(FulfillmentOutboundSDK::class);
    }

    public function listingsItems() : object|string
    {
        return $this->instantiateSDK(ListingsItemsSDK::class);
    }

    public function merchantFulfillment() : object|string
    {
        return $this->instantiateSDK(MerchantFulfillmentSDK::class);
    }

    public function messaging() : object|string
    {
        return $this->instantiateSDK(MessagingSDK::class);
    }

    public function notifications() : object|string
    {
        return $this->instantiateSDK(NotificationsSDK::class);
    }

    public function orders() : object|string
    {
        return $this->instantiateSDK(OrdersV0Api\OrdersSDK::class);
    }

    public function orderShipment() : object|string
    {
        return $this->instantiateSDK(ShipmentApi\OrdersSDK::class);
    }

    public function productFees() : object|string
    {
        return $this->instantiateSDK(ProductFeesSDK::class);
    }

    public function productPricing() : object|string
    {
        return $this->instantiateSDK(ProductPricingSDK::class);
    }

    public function productTypesDefinitions() : object|string
    {
        return $this->instantiateSDK(ProductTypesDefinitionsSDK::class);
    }

    public function reports() : object|string
    {
        return $this->instantiateSDK(ReportsSDK::class);
    }

    public function sales() : object|string
    {
        return $this->instantiateSDK(SalesSDK::class);
    }

    public function sellers() : object|string
    {
        return $this->instantiateSDK(SellersSDK::class);
    }

    public function services() : object|string
    {
        return $this->instantiateSDK(ServicesSDK::class);
    }

    public function shipmentInvoicing() : object|string
    {
        return $this->instantiateSDK(ShipmentInvoicingSDK::class);
    }

    public function shipping() : object|string
    {
        return $this->instantiateSDK(ShippingSDK::class);
    }

    public function solicitations() : object|string
    {
        return $this->instantiateSDK(SolicitationsSDK::class);
    }

    public function tokens() : object|string
    {
        return $this->instantiateSDK(TokensSDK::class);
    }

    public function uploads() : object|string
    {
        return $this->instantiateSDK(UploadsSDK::class);
    }

    public function vendor() : object|string
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
    private function instantiateSDK(string $sdkClass) : string|object
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
