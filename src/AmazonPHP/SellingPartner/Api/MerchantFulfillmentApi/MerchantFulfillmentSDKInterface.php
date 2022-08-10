<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
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
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CancelShipmentResponse
     */
    public function cancelShipment(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id);

    /**
     * Create request for operation 'cancelShipment'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function cancelShipmentRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation cancelShipmentOld.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CancelShipmentResponse
     */
    public function cancelShipmentOld(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id);

    /**
     * Create request for operation 'cancelShipmentOld'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment to cancel. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function cancelShipmentOldRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation createShipment.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentResponse
     */
    public function createShipment(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body);

    /**
     * Create request for operation 'createShipment'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createShipmentRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CreateShipmentRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getAdditionalSellerInputs.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse
     */
    public function getAdditionalSellerInputs(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body);

    /**
     * Create request for operation 'getAdditionalSellerInputs'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getAdditionalSellerInputsRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getAdditionalSellerInputsOld.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsResponse
     */
    public function getAdditionalSellerInputsOld(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body);

    /**
     * Create request for operation 'getAdditionalSellerInputsOld'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getAdditionalSellerInputsOldRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetAdditionalSellerInputsRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getEligibleShipmentServices.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse
     */
    public function getEligibleShipmentServices(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body);

    /**
     * Create request for operation 'getEligibleShipmentServices'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getEligibleShipmentServicesRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getEligibleShipmentServicesOld.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesResponse
     */
    public function getEligibleShipmentServicesOld(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body);

    /**
     * Create request for operation 'getEligibleShipmentServicesOld'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getEligibleShipmentServicesOldRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetEligibleShipmentServicesRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getShipment.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\GetShipmentResponse
     */
    public function getShipment(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id);

    /**
     * Create request for operation 'getShipment'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id The Amazon-defined shipment identifier for the shipment. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getShipmentRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $shipment_id) : \Psr\Http\Message\RequestInterface;
}
