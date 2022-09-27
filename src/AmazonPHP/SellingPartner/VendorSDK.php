<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Api\UpdateInventoryApi\VendorDirectFulfillmentInventorySDK;
use AmazonPHP\SellingPartner\Api\UpdateInventoryApi\VendorDirectFulfillmentInventorySDKInterface;
use AmazonPHP\SellingPartner\Api\VendorInvoiceApi\VendorDirectFulfillmentPaymentsSDK;
use AmazonPHP\SellingPartner\Api\VendorInvoiceApi\VendorDirectFulfillmentPaymentsSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorPaymentsApi\VendorInvoicesSDK;
use AmazonPHP\SellingPartner\Api\VendorPaymentsApi\VendorInvoicesSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorShipmentsSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorShipmentsSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorDirectFulfillmentTransactionsSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorDirectFulfillmentTransactionsSDKInterface;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorTransactionStatusSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorTransactionStatusSDKInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;

final class VendorSDK
{
    /**
     * @var array<class-string>
     */
    private array $instances;

    private readonly HttpFactory $httpFactory;

    public function __construct(
        private readonly ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
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

    public function ordersSDK() : VendorDirectFulfillmentOrdersSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function invoicesSDK() : VendorInvoicesSDKInterface
    {
        return $this->instantiateSDK(VendorInvoicesSDK::class);
    }

    public function shipmentsSDK() : VendorShipmentsSDKInterface
    {
        return $this->instantiateSDK(VendorShipmentsSDK::class);
    }

    public function transactionStatusSDK() : VendorTransactionStatusSDKInterface
    {
        return $this->instantiateSDK(VendorTransactionStatusSDK::class);
    }

    public function directFulfillmentPaymentsSDK() : VendorDirectFulfillmentPaymentsSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentPaymentsSDK::class);
    }

    public function directFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function directFulfillmentShippingSDK() : VendorDirectFulfillmentShippingSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentShippingSDK::class);
    }

    public function directFulfillmentTransactionsSDK() : VendorDirectFulfillmentTransactionsSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentTransactionsSDK::class);
    }

    public function directFulfillmentInventorySDK() : VendorDirectFulfillmentInventorySDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentInventorySDK::class);
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

        $this->instances[$sdkClass] = new $sdkClass(
            $this->httpClient,
            $this->httpFactory,
            $this->configuration,
            $this->logger
        );

        return $this->instances[$sdkClass];
    }
}
