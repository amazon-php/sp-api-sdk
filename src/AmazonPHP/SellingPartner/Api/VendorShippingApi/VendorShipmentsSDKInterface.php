<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorShipmentsSDKInterface
{
    public const API_NAME = 'VendorShipments';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS = 'submitShipmentConfirmations';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS_PATH = '/vendor/shipping/v1/shipmentConfirmations';

    /**
     * Operation submitShipmentConfirmations.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function submitShipmentConfirmations(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsResponse;
}
