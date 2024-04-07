<?php

namespace AmazonPHP\SellingPartner\Api\FeedsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
* Selling Partner API for Feeds
*
* The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
*
* The version of the OpenAPI document: 2021-06-30
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
*/
interface FeedsSDKInterface
{
    public const API_NAME = 'Feeds';

    public const OPERATION_CANCELFEED = 'cancelFeed';

    public const OPERATION_CANCELFEED_PATH = '/feeds/2021-06-30/feeds/{feedId}';
    public const OPERATION_CREATEFEED = 'createFeed';

    public const OPERATION_CREATEFEED_PATH = '/feeds/2021-06-30/feeds';
    public const OPERATION_CREATEFEEDDOCUMENT = 'createFeedDocument';

    public const OPERATION_CREATEFEEDDOCUMENT_PATH = '/feeds/2021-06-30/documents';
    public const OPERATION_GETFEED = 'getFeed';

    public const OPERATION_GETFEED_PATH = '/feeds/2021-06-30/feeds/{feedId}';
    public const OPERATION_GETFEEDDOCUMENT = 'getFeedDocument';

    public const OPERATION_GETFEEDDOCUMENT_PATH = '/feeds/2021-06-30/documents/{feedDocumentId}';
    public const OPERATION_GETFEEDS = 'getFeeds';

    public const OPERATION_GETFEEDS_PATH = '/feeds/2021-06-30/feeds';

    /**
    * Operation cancelFeed
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $feed_id  The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return null
    */
    public function cancelFeed(AccessToken $accessToken, string $region, $feed_id);
    /**
    * Operation createFeed
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\Feeds\CreateFeedSpecification $body  body (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\Feeds\CreateFeedResponse
    */
    public function createFeed(AccessToken $accessToken, string $region, $body);
    /**
    * Operation createFeedDocument
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\Feeds\CreateFeedDocumentSpecification $body  body (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\Feeds\CreateFeedDocumentResponse
    */
    public function createFeedDocument(AccessToken $accessToken, string $region, $body);
    /**
    * Operation getFeed
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $feed_id  The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\Feeds\Feed
    */
    public function getFeed(AccessToken $accessToken, string $region, $feed_id);
    /**
    * Operation getFeedDocument
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $feed_document_id  The identifier of the feed document. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\Feeds\FeedDocument
    */
    public function getFeedDocument(AccessToken $accessToken, string $region, $feed_document_id);
    /**
    * Operation getFeeds
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string[]|null $feed_types  A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
    * @param string[]|null $marketplace_ids  A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
    * @param int $page_size  The maximum number of feeds to return in a single call. (optional, default to 10)
    * @param string[]|null $processing_statuses  A list of processing statuses used to filter feeds. (optional)
    * @param \DateTimeInterface|null $created_since  The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
    * @param \DateTimeInterface|null $created_until  The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
    * @param string|null $next_token  A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\Feeds\GetFeedsResponse
    */
    public function getFeeds(AccessToken $accessToken, string $region, $feed_types = null, $marketplace_ids = null, $page_size = 10, $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null);
}
