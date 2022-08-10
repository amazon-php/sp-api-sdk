<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\SellersApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface SellersSDKInterface
{
    public const API_NAME = 'Sellers';

    public const OPERATION_GETMARKETPLACEPARTICIPATIONS = 'getMarketplaceParticipations';

    public const OPERATION_GETMARKETPLACEPARTICIPATIONS_PATH = '/sellers/v1/marketplaceParticipations';

    /**
     * Operation getMarketplaceParticipations.
     *
     * @param AccessToken $accessToken
     * @param string $region
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Sellers\GetMarketplaceParticipationsResponse
     */
    public function getMarketplaceParticipations(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region);

    /**
     * Create request for operation 'getMarketplaceParticipations'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getMarketplaceParticipationsRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region) : \Psr\Http\Message\RequestInterface;
}
