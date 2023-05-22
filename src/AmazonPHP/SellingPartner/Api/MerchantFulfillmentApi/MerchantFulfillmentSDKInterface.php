<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface MerchantFulfillmentSDKInterface
{
    public const API_NAME = 'MerchantFulfillment';

    public const OPERATION_CANCELSHIPMENT = 'cancelShipment';

    public const OPERATION_CANCELSHIPMENT_PATH = '/mfn/v0/shipments/{shipmentId}';

    public const OPERATION_CANCELSHIPMENTOLD = 'cancelShipmentOld';

    public const OPERATION_CANCELSHIPMENTOLD_PATH = '/mfn/v0/shipments/{shipmentId}/cancel';

    public const OPERATION_CREATESHIPMENT = 'createShipment';

    public const OPERATION_CREATESHIPMENT_PATH = '/mfn/v0/shipments';

    public const OPERATION_GETADDITIONALSELLERINPUTS = 'getAdditionalSellerInputs';

    public const OPERATION_GETADDITIONALSELLERINPUTS_PATH = '/mfn/v0/additionalSellerInputs';

    public const OPERATION_GETADDITIONALSELLERINPUTSOLD = 'getAdditionalSellerInputsOld';

    public const OPERATION_GETADDITIONALSELLERINPUTSOLD_PATH = '/mfn/v0/sellerInputs';

    public const OPERATION_GETELIGIBLESHIPMENTSERVICES = 'getEligibleShipmentServices';

    public const OPERATION_GETELIGIBLESHIPMENTSERVICES_PATH = '/mfn/v0/eligibleShippingServices';

    public const OPERATION_GETELIGIBLESHIPMENTSERVICESOLD = 'getEligibleShipmentServicesOld';

    public const OPERATION_GETELIGIBLESHIPMENTSERVICESOLD_PATH = '/mfn/v0/eligibleServices';

    public const OPERATION_GETSHIPMENT = 'getShipment';

    public const OPERATION_GETSHIPMENT_PATH = '/mfn/v0/shipments/{shipmentId}';

    /**
     * Operation cancelShipment.
     *
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function cancelShipment(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CancelShipmentResponse;

    /**
     * Operation cancelShipmentOld.
     *
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function cancelShipmentOld(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CancelShipmentResponse;

    /**
     * Operation createShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentResponse;

    /**
     * Operation getAdditionalSellerInputs.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getAdditionalSellerInputs(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse;

    /**
     * Operation getAdditionalSellerInputsOld.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getAdditionalSellerInputsOld(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse;

    /**
     * Operation getEligibleShipmentServices.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getEligibleShipmentServices(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse;

    /**
     * Operation getEligibleShipmentServicesOld.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getEligibleShipmentServicesOld(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse;

    /**
     * Operation getShipment.
     *
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShipment(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetShipmentResponse;
}
