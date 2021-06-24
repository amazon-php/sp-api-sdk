<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class SellingPartnerSDK
{
    private OAuth $oAuth;

    private Api\APlusSDK $aPlus;

    private Api\AuthorizationSDK $authorization;

    private Api\CatalogItemSDK $catalogItem;

    private Api\FBAInboundSDK $fbaInbound;

    private Api\FBAInventorySDK $fbaInventory;

    private Api\FBASmallAndLightSDK $fbaSmallAndLight;

    private Api\FeedsSDK $feeds;

    private Api\FinancesSDK $finances;

    private Api\FulfillmentOutboundSDK $fulfillmentOutbound;

    private Api\ListingsItemsSDK $listingsItems;

    private Api\MessagingSDK $messaging;

    private Api\NotificationsSDK $notifications;

    private Api\OrdersSDK $orders;

    private Api\ProductFeesSDK $productFees;

    private Api\ProductPricingSDK $productPricing;

    private Api\ProductTypesDefinitionsSDK $productTypesDefinitions;

    private Api\ReportsSDK $reports;

    private Api\SalesSDK $sales;

    private Api\SellersSDK $sellers;

    private Api\ServicesSDK $services;

    private Api\ShipmentInvoicingSDK $shipmentInvoicing;

    private Api\ShippingSDK $shipping;

    private Api\SolicitationsSDK $solicitations;

    private Api\TokensSDK $tokens;

    private Api\UploadsSDK $uploads;

    public function __construct(
        OAuth $oAuth,
        Api\APlusSDK $aPlus,
        Api\AuthorizationSDK $authorization,
        Api\CatalogItemSDK $catalogItem,
        Api\FBAInboundSDK $fbaInbound,
        Api\FBAInventorySDK $fbaInventory,
        Api\FBASmallAndLightSDK $fbaSmallAndLight,
        Api\FeedsSDK $feeds,
        Api\FinancesSDK $finances,
        Api\FulfillmentOutboundSDK $fulfillmentOutbound,
        Api\ListingsItemsSDK $listingsItems,
        Api\MessagingSDK $messaging,
        Api\NotificationsSDK $notifications,
        Api\OrdersSDK $orders,
        Api\ProductFeesSDK $productFees,
        Api\ProductPricingSDK $productPricing,
        Api\ProductTypesDefinitionsSDK $productTypesDefinitions,
        Api\ReportsSDK $reports,
        Api\SalesSDK $sales,
        Api\SellersSDK $sellers,
        Api\ServicesSDK $services,
        Api\ShipmentInvoicingSDK $shipmentInvoicing,
        Api\ShippingSDK $shipping,
        Api\SolicitationsSDK $solicitations,
        Api\TokensSDK $tokens,
        Api\UploadsSDK $uploads
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
        $this->fulfillmentOutbound = $fulfillmentOutbound;
        $this->listingsItems = $listingsItems;
        $this->messaging = $messaging;
        $this->notifications = $notifications;
        $this->orders = $orders;
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
            new Api\APlusSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\AuthorizationSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\CatalogItemSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FBAInboundSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FBAInventorySDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FBASmallAndLightSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FeedsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FinancesSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\FulfillmentOutboundSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ListingsItemsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\MessagingSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\NotificationsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\OrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ProductFeesSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ProductPricingSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ProductTypesDefinitionsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ReportsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\SalesSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\SellersSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ServicesSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ShipmentInvoicingSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\ShippingSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\SolicitationsSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\TokensSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\UploadsSDK($httpClient, $httpFactory, $configuration, $logger),
        );
    }

    public function oAuth() : OAuth
    {
        return $this->oAuth;
    }

    public function aPlus() : Api\APlusSDK
    {
        return $this->aPlus;
    }

    public function authorization() : Api\AuthorizationSDK
    {
        return $this->authorization;
    }

    public function catalogItem() : Api\CatalogItemSDK
    {
        return $this->catalogItem;
    }

    public function fbaInbound() : Api\FBAInboundSDK
    {
        return $this->fbaInbound;
    }

    public function fbaInventory() : Api\FBAInventorySDK
    {
        return $this->fbaInventory;
    }

    public function fbaSmallAndLight() : Api\FBASmallAndLightSDK
    {
        return $this->fbaSmallAndLight;
    }

    public function feeds() : Api\FeedsSDK
    {
        return $this->feeds;
    }

    public function finances() : Api\FinancesSDK
    {
        return $this->finances;
    }

    public function fulfillmentOutbound() : Api\FulfillmentOutboundSDK
    {
        return $this->fulfillmentOutbound;
    }

    public function listingsItems() : Api\ListingsItemsSDK
    {
        return $this->listingsItems;
    }

    public function messaging() : Api\MessagingSDK
    {
        return $this->messaging;
    }

    public function notifications() : Api\NotificationsSDK
    {
        return $this->notifications;
    }

    public function orders() : Api\OrdersSDK
    {
        return $this->orders;
    }

    public function productFees() : Api\ProductFeesSDK
    {
        return $this->productFees;
    }

    public function productPricing() : Api\ProductPricingSDK
    {
        return $this->productPricing;
    }

    public function productTypesDefinitions() : Api\ProductTypesDefinitionsSDK
    {
        return $this->productTypesDefinitions;
    }

    public function reports() : Api\ReportsSDK
    {
        return $this->reports;
    }

    public function sales() : Api\SalesSDK
    {
        return $this->sales;
    }

    public function sellers() : Api\SellersSDK
    {
        return $this->sellers;
    }

    public function services() : Api\ServicesSDK
    {
        return $this->services;
    }

    public function shipmentInvoicing() : Api\ShipmentInvoicingSDK
    {
        return $this->shipmentInvoicing;
    }

    public function shipping() : Api\ShippingSDK
    {
        return $this->shipping;
    }

    public function solicitations() : Api\SolicitationsSDK
    {
        return $this->solicitations;
    }

    public function tokens() : Api\TokensSDK
    {
        return $this->tokens;
    }

    public function uploads() : Api\UploadsSDK
    {
        return $this->uploads;
    }
}
