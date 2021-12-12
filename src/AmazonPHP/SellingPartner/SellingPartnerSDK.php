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
    private OAuth $oAuth;

    private APlusSDK $aPlus;

    private AuthorizationSDK $authorization;

    private CatalogItemSDK $catalogItem;

    private FBAInboundSDK $fbaInbound;

    private FBAInventorySDK $fbaInventory;

    private FBASmallAndLightSDK $fbaSmallAndLight;

    private FeedsSDK $feeds;

    private FinancesSDK $finances;

    private FulfillmentInboundSDK $fulfillmentInbound;

    private FulfillmentOutboundSDK $fulfillmentOutbound;

    private ListingsItemsSDK $listingsItems;

    private MessagingSDK $messaging;

    private NotificationsSDK $notifications;

    private OrdersV0Api\OrdersSDK $orders;

    private ShipmentApi\OrdersSDK $ordersShipment;

    private ProductFeesSDK $productFees;

    private ProductPricingSDK $productPricing;

    private ProductTypesDefinitionsSDK $productTypesDefinitions;

    private ReportsSDK $reports;

    private SalesSDK $sales;

    private SellersSDK $sellers;

    private ServicesSDK $services;

    private ShipmentInvoicingSDK $shipmentInvoicing;

    private ShippingSDK $shipping;

    private SolicitationsSDK $solicitations;

    private TokensSDK $tokens;

    private UploadsSDK $uploads;

    public function __construct(
        OAuth $oAuth,
        APlusSDK $aPlus,
        AuthorizationSDK $authorization,
        CatalogItemSDK $catalogItem,
        FBAInboundSDK $fbaInbound,
        FBAInventorySDK $fbaInventory,
        FBASmallAndLightSDK $fbaSmallAndLight,
        FeedsSDK $feeds,
        FinancesSDK $finances,
        FulfillmentInboundSDK $fulfillmentInbound,
        FulfillmentOutboundSDK $fulfillmentOutbound,
        ListingsItemsSDK $listingsItems,
        MessagingSDK $messaging,
        NotificationsSDK $notifications,
        OrdersV0Api\OrdersSDK $orders,
        ShipmentApi\OrdersSDK $ordersShipment,
        ProductFeesSDK $productFees,
        ProductPricingSDK $productPricing,
        ProductTypesDefinitionsSDK $productTypesDefinitions,
        ReportsSDK $reports,
        SalesSDK $sales,
        SellersSDK $sellers,
        ServicesSDK $services,
        ShipmentInvoicingSDK $shipmentInvoicing,
        ShippingSDK $shipping,
        SolicitationsSDK $solicitations,
        TokensSDK $tokens,
        UploadsSDK $uploads
    ) {
        $this->oAuth = $oAuth;
        $this->aPlus = $aPlus;
        $this->authorization = $authorization;
        $this->catalogItem = $catalogItem;
        $this->fbaInbound = $fbaInbound;
        $this->fbaInventory = $fbaInventory;
        $this->fbaSmallAndLight = $fbaSmallAndLight;
        $this->feeds = $feeds;
        $this->finances = $finances;
        $this->fulfillmentInbound = $fulfillmentInbound;
        $this->fulfillmentOutbound = $fulfillmentOutbound;
        $this->listingsItems = $listingsItems;
        $this->messaging = $messaging;
        $this->notifications = $notifications;
        $this->orders = $orders;
        $this->ordersShipment = $ordersShipment;
        $this->productFees = $productFees;
        $this->productPricing = $productPricing;
        $this->productTypesDefinitions = $productTypesDefinitions;
        $this->reports = $reports;
        $this->sales = $sales;
        $this->sellers = $sellers;
        $this->services = $services;
        $this->shipmentInvoicing = $shipmentInvoicing;
        $this->shipping = $shipping;
        $this->solicitations = $solicitations;
        $this->tokens = $tokens;
        $this->uploads = $uploads;
    }

    public static function create(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) : self {
        $httpFactory = new HttpFactory($requestFactory, $streamFactory);

        return new self(
            new OAuth($httpClient, $httpFactory, $configuration, $logger),
            new APlusSDK($httpClient, $httpFactory, $configuration, $logger),
            new AuthorizationSDK($httpClient, $httpFactory, $configuration, $logger),
            new CatalogItemSDK($httpClient, $httpFactory, $configuration, $logger),
            new FBAInboundSDK($httpClient, $httpFactory, $configuration, $logger),
            new FBAInventorySDK($httpClient, $httpFactory, $configuration, $logger),
            new FBASmallAndLightSDK($httpClient, $httpFactory, $configuration, $logger),
            new FeedsSDK($httpClient, $httpFactory, $configuration, $logger),
            new FinancesSDK($httpClient, $httpFactory, $configuration, $logger),
            new FulfillmentInboundSDK($httpClient, $httpFactory, $configuration, $logger),
            new FulfillmentOutboundSDK($httpClient, $httpFactory, $configuration, $logger),
            new ListingsItemsSDK($httpClient, $httpFactory, $configuration, $logger),
            new MessagingSDK($httpClient, $httpFactory, $configuration, $logger),
            new NotificationsSDK($httpClient, $httpFactory, $configuration, $logger),
            new OrdersV0Api\OrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new ShipmentApi\OrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new ProductFeesSDK($httpClient, $httpFactory, $configuration, $logger),
            new ProductPricingSDK($httpClient, $httpFactory, $configuration, $logger),
            new ProductTypesDefinitionsSDK($httpClient, $httpFactory, $configuration, $logger),
            new ReportsSDK($httpClient, $httpFactory, $configuration, $logger),
            new SalesSDK($httpClient, $httpFactory, $configuration, $logger),
            new SellersSDK($httpClient, $httpFactory, $configuration, $logger),
            new ServicesSDK($httpClient, $httpFactory, $configuration, $logger),
            new ShipmentInvoicingSDK($httpClient, $httpFactory, $configuration, $logger),
            new ShippingSDK($httpClient, $httpFactory, $configuration, $logger),
            new SolicitationsSDK($httpClient, $httpFactory, $configuration, $logger),
            new TokensSDK($httpClient, $httpFactory, $configuration, $logger),
            new UploadsSDK($httpClient, $httpFactory, $configuration, $logger),
        );
    }

    public function oAuth() : OAuth
    {
        return $this->oAuth;
    }

    public function aPlus() : APlusSDK
    {
        return $this->aPlus;
    }

    public function authorization() : AuthorizationSDK
    {
        return $this->authorization;
    }

    public function catalogItem() : CatalogItemSDK
    {
        return $this->catalogItem;
    }

    public function fbaInbound() : FBAInboundSDK
    {
        return $this->fbaInbound;
    }

    public function fbaInventory() : FBAInventorySDK
    {
        return $this->fbaInventory;
    }

    public function fbaSmallAndLight() : FBASmallAndLightSDK
    {
        return $this->fbaSmallAndLight;
    }

    public function feeds() : FeedsSDK
    {
        return $this->feeds;
    }

    public function finances() : FinancesSDK
    {
        return $this->finances;
    }

    public function fulfillmentInbound() : FulfillmentInboundSDK
    {
        return $this->fulfillmentInbound;
    }

    public function fulfillmentOutbound() : FulfillmentOutboundSDK
    {
        return $this->fulfillmentOutbound;
    }

    public function listingsItems() : ListingsItemsSDK
    {
        return $this->listingsItems;
    }

    public function messaging() : MessagingSDK
    {
        return $this->messaging;
    }

    public function notifications() : NotificationsSDK
    {
        return $this->notifications;
    }

    public function orders() : OrdersV0Api\OrdersSDK
    {
        return $this->orders;
    }

    public function orderShipment() : ShipmentApi\OrdersSDK
    {
        return $this->ordersShipment;
    }

    public function productFees() : ProductFeesSDK
    {
        return $this->productFees;
    }

    public function productPricing() : ProductPricingSDK
    {
        return $this->productPricing;
    }

    public function productTypesDefinitions() : ProductTypesDefinitionsSDK
    {
        return $this->productTypesDefinitions;
    }

    public function reports() : ReportsSDK
    {
        return $this->reports;
    }

    public function sales() : SalesSDK
    {
        return $this->sales;
    }

    public function sellers() : SellersSDK
    {
        return $this->sellers;
    }

    public function services() : ServicesSDK
    {
        return $this->services;
    }

    public function shipmentInvoicing() : ShipmentInvoicingSDK
    {
        return $this->shipmentInvoicing;
    }

    public function shipping() : ShippingSDK
    {
        return $this->shipping;
    }

    public function solicitations() : SolicitationsSDK
    {
        return $this->solicitations;
    }

    public function tokens() : TokensSDK
    {
        return $this->tokens;
    }

    public function uploads() : UploadsSDK
    {
        return $this->uploads;
    }
}
