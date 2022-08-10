<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorTransactionApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class VendorDirectFulfillmentTransactionsSDK implements VendorDirectFulfillmentTransactionsSDKInterface
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getTransactionStatus.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $transaction_id Previously returned in the response to the POST request of a specific transaction. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getTransactionStatus(AccessToken $accessToken, string $region, string $transaction_id) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentTransactions\TransactionStatus
    {
        $request = $this->getTransactionStatusRequest($accessToken, $region, $transaction_id);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentTransactions', 'getTransactionStatus', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentTransactions', 'getTransactionStatus')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentTransactions', 'getTransactionStatus'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentTransactions',
                        'operation' => 'getTransactionStatus',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentTransactions', 'getTransactionStatus', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentTransactions', 'getTransactionStatus')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentTransactions', 'getTransactionStatus'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentTransactions',
                        'operation' => 'getTransactionStatus',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentTransactions\TransactionStatus',
            []
        );
    }

    /**
     * Create request for operation 'getTransactionStatus'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $transaction_id Previously returned in the response to the POST request of a specific transaction. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getTransactionStatusRequest(AccessToken $accessToken, string $region, string $transaction_id) : RequestInterface
    {
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null || (\is_array($transaction_id) && \count($transaction_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $transaction_id when calling getTransactionStatus'
            );
        }

        $resourcePath = '/vendor/directFulfillment/transactions/2021-12-28/transactions/{transactionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($transaction_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transaction_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
