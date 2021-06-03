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

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class CatalogItemSDK
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
    }

    /**
     * Operation getCatalogItem.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getCatalogItem(AccessToken $accessToken, string $region, string $marketplace_id, string $asin) : \AmazonPHP\SellingPartner\Model\CatalogItem\GetCatalogItemResponse
    {
        $request = $this->getCatalogItemRequest($accessToken, $region, $marketplace_id, $asin);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null
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
        /** @var \AmazonPHP\SellingPartner\Model\CatalogItem\GetCatalogItemResponse $result */
        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody()->getContents(),
            \AmazonPHP\SellingPartner\Model\CatalogItem\GetCatalogItemResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'getCatalogItem'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getCatalogItemRequest(AccessToken $accessToken, string $region, string $marketplace_id, string $asin) : RequestInterface
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (\is_array($marketplace_id) && \count($marketplace_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getCatalogItem'
            );
        }
        // verify the required parameter 'asin' is set
        if ($asin === null || (\is_array($asin) && \count($asin) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $asin when calling getCatalogItem'
            );
        }

        $resourcePath = '/catalog/v0/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_id)) {
            $marketplace_id = ObjectSerializer::serializeCollection($marketplace_id, '', true);
        }

        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = $marketplace_id;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($asin !== null) {
            $resourcePath = \str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
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
     * Operation listCatalogCategories.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param null|string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param null|string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function listCatalogCategories(AccessToken $accessToken, string $region, string $marketplace_id, string $asin = null, string $seller_sku = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogCategoriesResponse
    {
        $request = $this->listCatalogCategoriesRequest($accessToken, $region, $marketplace_id, $asin, $seller_sku);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null
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
        /** @var \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogCategoriesResponse $result */
        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody()->getContents(),
            \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogCategoriesResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'listCatalogCategories'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for the item. (required)
     * @param null|string $asin The Amazon Standard Identification Number (ASIN) of the item. (optional)
     * @param null|string $seller_sku Used to identify items in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listCatalogCategoriesRequest(AccessToken $accessToken, string $region, string $marketplace_id, string $asin = null, string $seller_sku = null) : RequestInterface
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (\is_array($marketplace_id) && \count($marketplace_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling listCatalogCategories'
            );
        }

        $resourcePath = '/catalog/v0/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_id)) {
            $marketplace_id = ObjectSerializer::serializeCollection($marketplace_id, '', true);
        }

        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = $marketplace_id;
        }
        // query params
        if (\is_array($asin)) {
            $asin = ObjectSerializer::serializeCollection($asin, '', true);
        }

        if ($asin !== null) {
            $queryParams['ASIN'] = $asin;
        }
        // query params
        if (\is_array($seller_sku)) {
            $seller_sku = ObjectSerializer::serializeCollection($seller_sku, '', true);
        }

        if ($seller_sku !== null) {
            $queryParams['SellerSKU'] = $seller_sku;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
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
     * Operation listCatalogItems.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param null|string $query Keyword(s) to use to search for items in the catalog. Example: &#39;harry potter books&#39;. (optional)
     * @param null|string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param null|string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (optional)
     * @param null|string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param null|string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param null|string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param null|string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function listCatalogItems(AccessToken $accessToken, string $region, string $marketplace_id, string $query = null, string $query_context_id = null, string $seller_sku = null, string $upc = null, string $ean = null, string $isbn = null, string $jan = null) : \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogItemsResponse
    {
        $request = $this->listCatalogItemsRequest($accessToken, $region, $marketplace_id, $query, $query_context_id, $seller_sku, $upc, $ean, $isbn, $jan);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null
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
        /** @var \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogItemsResponse $result */
        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody()->getContents(),
            \AmazonPHP\SellingPartner\Model\CatalogItem\ListCatalogItemsResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'listCatalogItems'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which items are returned. (required)
     * @param null|string $query Keyword(s) to use to search for items in the catalog. Example: &#39;harry potter books&#39;. (optional)
     * @param null|string $query_context_id An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items. (optional)
     * @param null|string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (optional)
     * @param null|string $upc A 12-digit bar code used for retail packaging. (optional)
     * @param null|string $ean A European article number that uniquely identifies the catalog item, manufacturer, and its attributes. (optional)
     * @param null|string $isbn The unique commercial book identifier used to identify books internationally. (optional)
     * @param null|string $jan A Japanese article number that uniquely identifies the product, manufacturer, and its attributes. (optional)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listCatalogItemsRequest(AccessToken $accessToken, string $region, string $marketplace_id, string $query = null, string $query_context_id = null, string $seller_sku = null, string $upc = null, string $ean = null, string $isbn = null, string $jan = null) : RequestInterface
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (\is_array($marketplace_id) && \count($marketplace_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling listCatalogItems'
            );
        }

        $resourcePath = '/catalog/v0/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($marketplace_id)) {
            $marketplace_id = ObjectSerializer::serializeCollection($marketplace_id, '', true);
        }

        if ($marketplace_id !== null) {
            $queryParams['MarketplaceId'] = $marketplace_id;
        }
        // query params
        if (\is_array($query)) {
            $query = ObjectSerializer::serializeCollection($query, '', true);
        }

        if ($query !== null) {
            $queryParams['Query'] = $query;
        }
        // query params
        if (\is_array($query_context_id)) {
            $query_context_id = ObjectSerializer::serializeCollection($query_context_id, '', true);
        }

        if ($query_context_id !== null) {
            $queryParams['QueryContextId'] = $query_context_id;
        }
        // query params
        if (\is_array($seller_sku)) {
            $seller_sku = ObjectSerializer::serializeCollection($seller_sku, '', true);
        }

        if ($seller_sku !== null) {
            $queryParams['SellerSKU'] = $seller_sku;
        }
        // query params
        if (\is_array($upc)) {
            $upc = ObjectSerializer::serializeCollection($upc, '', true);
        }

        if ($upc !== null) {
            $queryParams['UPC'] = $upc;
        }
        // query params
        if (\is_array($ean)) {
            $ean = ObjectSerializer::serializeCollection($ean, '', true);
        }

        if ($ean !== null) {
            $queryParams['EAN'] = $ean;
        }
        // query params
        if (\is_array($isbn)) {
            $isbn = ObjectSerializer::serializeCollection($isbn, '', true);
        }

        if ($isbn !== null) {
            $queryParams['ISBN'] = $isbn;
        }
        // query params
        if (\is_array($jan)) {
            $jan = ObjectSerializer::serializeCollection($jan, '', true);
        }

        if ($jan !== null) {
            $queryParams['JAN'] = $jan;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
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
}
