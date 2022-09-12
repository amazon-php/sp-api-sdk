<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaInboundApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for FBA Inbound Eligibilty.
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface FBAInboundSDKInterface
{
    public const API_NAME = 'FBAInbound';

    public const OPERATION_GETITEMELIGIBILITYPREVIEW = 'getItemEligibilityPreview';

    public const OPERATION_GETITEMELIGIBILITYPREVIEW_PATH = '/fba/inbound/v1/eligibility/itemPreview';

    /**
     * Operation getItemEligibilityPreview.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param string $program The program that you want to check eligibility against. (required)
     * @param null|string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview(AccessToken $accessToken, string $region, string $asin, string $program, ?array $marketplace_ids = null) : \AmazonPHP\SellingPartner\Model\FBAInbound\GetItemEligibilityPreviewResponse;
}
