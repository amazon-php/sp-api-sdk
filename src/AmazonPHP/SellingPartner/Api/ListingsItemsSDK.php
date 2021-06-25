<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api;

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
final class ListingsItemsSDK
{
    public const API_NAME = 'ListingsItems';

    public const OPERATION_DELETELISTINGSITEM = 'deleteListingsItem';

    public const OPERATION_DELETELISTINGSITEM_PATH = '/listings/2020-09-01/items/{sellerId}/{sku}';

    public const OPERATION_PATCHLISTINGSITEM = 'patchListingsItem';

    public const OPERATION_PATCHLISTINGSITEM_PATH = '/listings/2020-09-01/items/{sellerId}/{sku}';

    public const OPERATION_PUTLISTINGSITEM = 'putListingsItem';

    public const OPERATION_PUTLISTINGSITEM_PATH = '/listings/2020-09-01/items/{sellerId}/{sku}';

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
     * Operation deleteListingsItem.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function deleteListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null) : \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
    {
        $request = $this->deleteListingsItemRequest($accessToken, $region, $seller_id, $sku, $marketplace_ids, $issue_locale);

        $this->configuration->extensions()->preRequest('ListingsItems', 'deleteListingsItem', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ListingsItems', 'deleteListingsItem')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'deleteListingsItem'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'deleteListingsItem',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ListingsItems', 'deleteListingsItem', $request, $response);

            if ($this->configuration->loggingEnabled('ListingsItems', 'deleteListingsItem')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'deleteListingsItem'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'deleteListingsItem',
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
            \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'deleteListingsItem'.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function deleteListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, string $issue_locale = null) : RequestInterface
    {
        // verify the required parameter 'seller_id' is set
        if ($seller_id === null || (\is_array($seller_id) && \count($seller_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $seller_id when calling deleteListingsItem'
            );
        }
        // verify the required parameter 'sku' is set
        if ($sku === null || (\is_array($sku) && \count($sku) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sku when calling deleteListingsItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling deleteListingsItem'
            );
        }

        $resourcePath = '/listings/2020-09-01/items/{sellerId}/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (\is_array($issue_locale)) {
            $issue_locale = ObjectSerializer::serializeCollection($issue_locale, '', true);
        }

        if ($issue_locale !== null) {
            $queryParams['issueLocale'] = $issue_locale;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($seller_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'sellerId' . '}',
                ObjectSerializer::toPathValue($seller_id),
                $resourcePath
            );
        }
        // path params
        if ($sku !== null) {
            $resourcePath = \str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
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
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation patchListingsItem.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body The request body schema for the patchListingsItem operation. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function patchListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body, string $issue_locale = null) : \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
    {
        $request = $this->patchListingsItemRequest($accessToken, $region, $seller_id, $sku, $marketplace_ids, $body, $issue_locale);

        $this->configuration->extensions()->preRequest('ListingsItems', 'patchListingsItem', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ListingsItems', 'patchListingsItem')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'patchListingsItem'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'patchListingsItem',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ListingsItems', 'patchListingsItem', $request, $response);

            if ($this->configuration->loggingEnabled('ListingsItems', 'patchListingsItem')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'patchListingsItem'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'patchListingsItem',
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
            \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'patchListingsItem'.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body The request body schema for the patchListingsItem operation. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function patchListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPatchRequest $body, string $issue_locale = null) : RequestInterface
    {
        // verify the required parameter 'seller_id' is set
        if ($seller_id === null || (\is_array($seller_id) && \count($seller_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $seller_id when calling patchListingsItem'
            );
        }
        // verify the required parameter 'sku' is set
        if ($sku === null || (\is_array($sku) && \count($sku) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sku when calling patchListingsItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling patchListingsItem'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling patchListingsItem'
            );
        }

        $resourcePath = '/listings/2020-09-01/items/{sellerId}/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (\is_array($issue_locale)) {
            $issue_locale = ObjectSerializer::serializeCollection($issue_locale, '', true);
        }

        if ($issue_locale !== null) {
            $queryParams['issueLocale'] = $issue_locale;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($seller_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'sellerId' . '}',
                ObjectSerializer::toPathValue($seller_id),
                $resourcePath
            );
        }
        // path params
        if ($sku !== null) {
            $resourcePath = \str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
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
        if (isset($body)) {
            if ($headers['Content-Type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
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
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation putListingsItem.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body The request body schema for the putListingsItem operation. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function putListingsItem(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body, string $issue_locale = null) : \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse
    {
        $request = $this->putListingsItemRequest($accessToken, $region, $seller_id, $sku, $marketplace_ids, $body, $issue_locale);

        $this->configuration->extensions()->preRequest('ListingsItems', 'putListingsItem', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ListingsItems', 'putListingsItem')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'putListingsItem'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'putListingsItem',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ListingsItems', 'putListingsItem', $request, $response);

            if ($this->configuration->loggingEnabled('ListingsItems', 'putListingsItem')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ListingsItems', 'putListingsItem'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ListingsItems',
                        'operation' => 'putListingsItem',
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
            \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemSubmissionResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'putListingsItem'.
     *
     * @param string $seller_id A selling partner identifier, such as a merchant account or vendor code. (required)
     * @param string $sku A selling partner provided identifier for an Amazon listing. (required)
     * @param array<array-key, string> $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body The request body schema for the putListingsItem operation. (required)
     * @param null|string $issue_locale A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function putListingsItemRequest(AccessToken $accessToken, string $region, string $seller_id, string $sku, array $marketplace_ids, \AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest $body, string $issue_locale = null) : RequestInterface
    {
        // verify the required parameter 'seller_id' is set
        if ($seller_id === null || (\is_array($seller_id) && \count($seller_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $seller_id when calling putListingsItem'
            );
        }
        // verify the required parameter 'sku' is set
        if ($sku === null || (\is_array($sku) && \count($sku) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sku when calling putListingsItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (\is_array($marketplace_ids) && \count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling putListingsItem'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling putListingsItem'
            );
        }

        $resourcePath = '/listings/2020-09-01/items/{sellerId}/{sku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }

        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if (\is_array($issue_locale)) {
            $issue_locale = ObjectSerializer::serializeCollection($issue_locale, '', true);
        }

        if ($issue_locale !== null) {
            $queryParams['issueLocale'] = $issue_locale;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($seller_id !== null) {
            $resourcePath = \str_replace(
                '{' . 'sellerId' . '}',
                ObjectSerializer::toPathValue($seller_id),
                $resourcePath
            );
        }
        // path params
        if ($sku !== null) {
            $resourcePath = \str_replace(
                '{' . 'sku' . '}',
                ObjectSerializer::toPathValue($sku),
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
        if (isset($body)) {
            if ($headers['Content-Type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
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
            } elseif ($headers['Content-Type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
