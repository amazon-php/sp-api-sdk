<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorPaymentsApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface VendorInvoicesSDKInterface
{
    public const API_NAME = 'VendorInvoices';

    public const OPERATION_SUBMITINVOICES = 'submitInvoices';

    public const OPERATION_SUBMITINVOICES_PATH = '/vendor/payments/v1/invoices';

    /**
     * Operation submitInvoices.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesResponse
     */
    public function submitInvoices(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body);

    /**
     * Create request for operation 'submitInvoices'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function submitInvoicesRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorInvoices\SubmitInvoicesRequest $body) : \Psr\Http\Message\RequestInterface;
}
