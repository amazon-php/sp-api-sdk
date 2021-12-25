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
    private VendorDirectFulfillmentOrdersSDK $ordersSDK;

    private VendorInvoicesSDK $invoicesSDK;

    private VendorShipmentsSDK $shipmentsSDK;

    private VendorTransactionStatusSDK $transactionStatusSDK;

    private VendorDirectFulfillmentPaymentsSDK $directFulfillmentPaymentsSDK;

    private VendorDirectFulfillmentOrdersSDK $vendorDirectFulfillmentOrdersSDK;

    private VendorDirectFulfillmentOrdersSDK $directFulfillmentOrdersSDK;

    private VendorDirectFulfillmentShippingSDK $directFulfillmentShippingSDK;

    private Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK $directFulfillmentShippingLabelsSDK;

    private VendorDirectFulfillmentTransactionsSDK $directFulfillmentTransactionsSDK;

    public function __construct(
        VendorDirectFulfillmentOrdersSDK $ordersSDK,
        VendorInvoicesSDK $invoicesSDK,
        VendorShipmentsSDK $shipmentsSDK,
        VendorTransactionStatusSDK $transactionStatusSDK,
        VendorDirectFulfillmentPaymentsSDK $directFulfillmentPaymentsSDK,
        VendorDirectFulfillmentOrdersSDK $vendorDirectFulfillmentOrdersSDK,
        VendorDirectFulfillmentOrdersSDK $directFulfillmentOrdersSDK,
        VendorDirectFulfillmentShippingSDK $directFulfillmentShippingSDK,
        Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK $directFulfillmentShippingLabelsSDK,
        VendorDirectFulfillmentTransactionsSDK $directFulfillmentTransactionsSDK
    ) {
        $this->ordersSDK = $ordersSDK;
        $this->invoicesSDK = $invoicesSDK;
        $this->shipmentsSDK = $shipmentsSDK;
        $this->transactionStatusSDK = $transactionStatusSDK;
        $this->directFulfillmentPaymentsSDK = $directFulfillmentPaymentsSDK;
        $this->vendorDirectFulfillmentOrdersSDK = $vendorDirectFulfillmentOrdersSDK;
        $this->directFulfillmentOrdersSDK = $directFulfillmentOrdersSDK;
        $this->directFulfillmentShippingSDK = $directFulfillmentShippingSDK;
        $this->directFulfillmentShippingLabelsSDK = $directFulfillmentShippingLabelsSDK;
        $this->directFulfillmentTransactionsSDK = $directFulfillmentTransactionsSDK;
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
            new VendorDirectFulfillmentOrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorInvoicesSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorShipmentsSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorTransactionStatusSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorDirectFulfillmentPaymentsSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorDirectFulfillmentOrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorDirectFulfillmentOrdersSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorDirectFulfillmentShippingSDK($httpClient, $httpFactory, $configuration, $logger),
            new Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK($httpClient, $httpFactory, $configuration, $logger),
            new VendorDirectFulfillmentTransactionsSDK($httpClient, $httpFactory, $configuration, $logger),
        );
    }

    public function ordersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->ordersSDK;
    }

    public function invoicesSDK() : VendorInvoicesSDK
    {
        return $this->invoicesSDK;
    }

    public function shipmentsSDK() : VendorShipmentsSDK
    {
        return $this->shipmentsSDK;
    }

    public function transactionStatusSDK() : VendorTransactionStatusSDK
    {
        return $this->transactionStatusSDK;
    }

    public function directFulfillmentPaymentsSDK() : VendorDirectFulfillmentPaymentsSDK
    {
        return $this->directFulfillmentPaymentsSDK;
    }

    public function vendorDirectFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->vendorDirectFulfillmentOrdersSDK;
    }

    public function directFulfillmentOrdersSDK() : VendorDirectFulfillmentOrdersSDK
    {
        return $this->directFulfillmentOrdersSDK;
    }

    public function directFulfillmentShippingSDK() : VendorDirectFulfillmentShippingSDK
    {
        return $this->directFulfillmentShippingSDK;
    }

    public function directFulfillmentShippingLabelsSDK() : Api\VendorShippingLabelsApi\VendorDirectFulfillmentShippingSDK
    {
        return $this->directFulfillmentShippingLabelsSDK;
    }

    public function directFulfillmentTransactionsSDK() : VendorDirectFulfillmentTransactionsSDK
    {
        return $this->directFulfillmentTransactionsSDK;
    }
}
