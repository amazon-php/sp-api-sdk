<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Api\VendorInvoiceApi\VendorDirectFulfillmentPaymentsSDK;
use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use AmazonPHP\SellingPartner\Api\VendorPaymentsApi\VendorInvoicesSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorDirectFulfillmentShippingSDK;
use AmazonPHP\SellingPartner\Api\VendorShippingApi\VendorShipmentsSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorDirectFulfillmentTransactionsSDK;
use AmazonPHP\SellingPartner\Api\VendorTransactionApi\VendorTransactionStatusSDK;
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

    private ClientInterface $httpClient;

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

    public function ordersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function invoicesSDK() : VendorInvoicesSDK
    {
        return $this->instantiateSDK(VendorInvoicesSDK::class);
    }

    public function shipmentsSDK() : VendorShipmentsSDK
    {
        return $this->instantiateSDK(VendorShipmentsSDK::class);
    }

    public function transactionStatusSDK() : VendorTransactionStatusSDK
    {
        return $this->instantiateSDK(VendorTransactionStatusSDK::class);
    }

    public function directFulfillmentPaymentsSDK() : VendorDirectFulfillmentPaymentsSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentPaymentsSDK::class);
    }

    public function vendorDirectFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function directFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentOrdersSDK::class);
    }

    public function directFulfillmentShippingSDK() : VendorDirectFulfillmentShippingSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentShippingSDK::class);
    }

    public function directFulfillmentShippingLabelsSDK() : Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK
    {
        return $this->instantiateSDK(Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK::class);
    }

    public function directFulfillmentTransactionsSDK() : VendorDirectFulfillmentTransactionsSDK
    {
        return $this->instantiateSDK(VendorDirectFulfillmentTransactionsSDK::class);
    }

    private function instantiateSDK(string $sdkClass)
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
