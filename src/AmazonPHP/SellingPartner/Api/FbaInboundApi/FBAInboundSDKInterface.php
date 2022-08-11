<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaInboundApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface FBAInboundSDKInterface
{
    public const API_NAME = 'FBAInbound';

    public const OPERATION_GETITEMELIGIBILITYPREVIEW = 'getItemEligibilityPreview';

    public const OPERATION_GETITEMELIGIBILITYPREVIEW_PATH = '/fba/inbound/v1/eligibility/itemPreview';

    /**
     * Operation getItemEligibilityPreview.
     *
     * @param \AmazonPHP\SellingPartner\AccessToken $accessToken
     * @param string $region
     * @param string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param string $program The program that you want to check eligibility against. (required)
     * @param string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $asin, string $program, array $marketplace_ids = null);

    /**
     * Create request for operation 'getItemEligibilityPreview'.
     *
     * @param \AmazonPHP\SellingPartner\AccessToken $accessToken
     * @param string $region
     * @param string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param string $program The program that you want to check eligibility against. (required)
     * @param string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getItemEligibilityPreviewRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $asin, string $program, array $marketplace_ids = null) : \Psr\Http\Message\RequestInterface;
}
