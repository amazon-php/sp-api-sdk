<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaInboundApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface FulfillmentInboundSDKInterface
{
    public const API_NAME = 'FulfillmentInbound';

    public const OPERATION_CONFIRMPREORDER = 'confirmPreorder';

    public const OPERATION_CONFIRMPREORDER_PATH = '/fba/inbound/v0/shipments/{shipmentId}/preorder/confirm';

    public const OPERATION_CONFIRMTRANSPORT = 'confirmTransport';

    public const OPERATION_CONFIRMTRANSPORT_PATH = '/fba/inbound/v0/shipments/{shipmentId}/transport/confirm';

    public const OPERATION_CREATEINBOUNDSHIPMENT = 'createInboundShipment';

    public const OPERATION_CREATEINBOUNDSHIPMENT_PATH = '/fba/inbound/v0/shipments/{shipmentId}';

    public const OPERATION_CREATEINBOUNDSHIPMENTPLAN = 'createInboundShipmentPlan';

    public const OPERATION_CREATEINBOUNDSHIPMENTPLAN_PATH = '/fba/inbound/v0/plans';

    public const OPERATION_ESTIMATETRANSPORT = 'estimateTransport';

    public const OPERATION_ESTIMATETRANSPORT_PATH = '/fba/inbound/v0/shipments/{shipmentId}/transport/estimate';

    public const OPERATION_GETBILLOFLADING = 'getBillOfLading';

    public const OPERATION_GETBILLOFLADING_PATH = '/fba/inbound/v0/shipments/{shipmentId}/billOfLading';

    public const OPERATION_GETINBOUNDGUIDANCE = 'getInboundGuidance';

    public const OPERATION_GETINBOUNDGUIDANCE_PATH = '/fba/inbound/v0/itemsGuidance';

    public const OPERATION_GETLABELS = 'getLabels';

    public const OPERATION_GETLABELS_PATH = '/fba/inbound/v0/shipments/{shipmentId}/labels';

    public const OPERATION_GETPREORDERINFO = 'getPreorderInfo';

    public const OPERATION_GETPREORDERINFO_PATH = '/fba/inbound/v0/shipments/{shipmentId}/preorder';

    public const OPERATION_GETPREPINSTRUCTIONS = 'getPrepInstructions';

    public const OPERATION_GETPREPINSTRUCTIONS_PATH = '/fba/inbound/v0/prepInstructions';

    public const OPERATION_GETSHIPMENTITEMS = 'getShipmentItems';

    public const OPERATION_GETSHIPMENTITEMS_PATH = '/fba/inbound/v0/shipmentItems';

    public const OPERATION_GETSHIPMENTITEMSBYSHIPMENTID = 'getShipmentItemsByShipmentId';

    public const OPERATION_GETSHIPMENTITEMSBYSHIPMENTID_PATH = '/fba/inbound/v0/shipments/{shipmentId}/items';

    public const OPERATION_GETSHIPMENTS = 'getShipments';

    public const OPERATION_GETSHIPMENTS_PATH = '/fba/inbound/v0/shipments';

    public const OPERATION_GETTRANSPORTDETAILS = 'getTransportDetails';

    public const OPERATION_GETTRANSPORTDETAILS_PATH = '/fba/inbound/v0/shipments/{shipmentId}/transport';

    public const OPERATION_PUTTRANSPORTDETAILS = 'putTransportDetails';

    public const OPERATION_PUTTRANSPORTDETAILS_PATH = '/fba/inbound/v0/shipments/{shipmentId}/transport';

    public const OPERATION_UPDATEINBOUNDSHIPMENT = 'updateInboundShipment';

    public const OPERATION_UPDATEINBOUNDSHIPMENT_PATH = '/fba/inbound/v0/shipments/{shipmentId}';

    public const OPERATION_VOIDTRANSPORT = 'voidTransport';

    public const OPERATION_VOIDTRANSPORT_PATH = '/fba/inbound/v0/shipments/{shipmentId}/transport/void';

    /**
     * Operation confirmPreorder.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param \DateTimeInterface $need_by_date Date that the shipment must arrive at the Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items. Must be in YYYY-MM-DD format. The response to the getPreorderInfo operation returns this value. (required)
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace the shipment is tied to. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function confirmPreorder(AccessToken $accessToken, string $region, string $shipment_id, \DateTimeInterface $need_by_date, string $marketplace_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmPreorderResponse;

    /**
     * Operation confirmTransport.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function confirmTransport(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmTransportResponse;

    /**
     * Operation createInboundShipment.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createInboundShipment(AccessToken $accessToken, string $region, string $shipment_id, \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentRequest $body) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentResponse;

    /**
     * Operation createInboundShipmentPlan.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CreateInboundShipmentPlanRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createInboundShipmentPlan(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CreateInboundShipmentPlanRequest $body) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CreateInboundShipmentPlanResponse;

    /**
     * Operation estimateTransport.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function estimateTransport(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\EstimateTransportResponse;

    /**
     * Operation getBillOfLading.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getBillOfLading(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetBillOfLadingResponse;

    /**
     * Operation getInboundGuidance.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored. (required)
     * @param null|string[] $seller_sku_list A list of SellerSKU values. Used to identify items for which you want inbound guidance for shipment to Amazon&#39;s fulfillment network. Note: SellerSKU is qualified by the SellerId, which is included with every Selling Partner API operation that you submit. If you specify a SellerSKU that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold. (optional)
     * @param null|string[] $asin_list A list of ASIN values. Used to identify items for which you want inbound guidance for shipment to Amazon&#39;s fulfillment network. Note: If you specify a ASIN that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getInboundGuidance(AccessToken $accessToken, string $region, string $marketplace_id, ?array $seller_sku_list = null, ?array $asin_list = null) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetInboundGuidanceResponse;

    /**
     * Operation getLabels.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param string $page_type The page type to use to print the labels. Submitting a PageType value that is not supported in your marketplace returns an error. (required)
     * @param string $label_type The type of labels requested. (required)
     * @param null|int $number_of_packages The number of packages in the shipment. (optional)
     * @param null|string[] $package_labels_to_print A list of identifiers that specify packages for which you want package labels printed.  Must match CartonId values previously passed using the FBA Inbound Shipment Carton Information Feed. If not, the operation returns the IncorrectPackageIdentifier error code. (optional)
     * @param null|int $number_of_pallets The number of pallets in the shipment. This returns four identical labels for each pallet. (optional)
     * @param null|int $page_size The page size for paginating through the total packages&#39; labels. This is a required parameter for Non-Partnered LTL Shipments. Max value:1000. (optional)
     * @param null|int $page_start_index The page start index for paginating through the total packages&#39; labels. This is a required parameter for Non-Partnered LTL Shipments. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getLabels(AccessToken $accessToken, string $region, string $shipment_id, string $page_type, string $label_type, ?int $number_of_packages = null, ?array $package_labels_to_print = null, ?int $number_of_pallets = null, ?int $page_size = null, ?int $page_start_index = null) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetLabelsResponse;

    /**
     * Operation getPreorderInfo.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace the shipment is tied to. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getPreorderInfo(AccessToken $accessToken, string $region, string $shipment_id, string $marketplace_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetPreorderInfoResponse;

    /**
     * Operation getPrepInstructions.
     *
     * @param string $ship_to_country_code The country code of the country to which the items will be shipped. Note that labeling requirements and item preparation instructions can vary by country. (required)
     * @param null|string[] $seller_sku_list A list of SellerSKU values. Used to identify items for which you want labeling requirements and item preparation instructions for shipment to Amazon&#39;s fulfillment network. The SellerSKU is qualified by the Seller ID, which is included with every call to the Seller Partner API.  Note: Include seller SKUs that you have used to list items on Amazon&#39;s retail website. If you include a seller SKU that you have never used to list an item on Amazon&#39;s retail website, the seller SKU is returned in the InvalidSKUList property in the response. (optional)
     * @param null|string[] $asin_list A list of ASIN values. Used to identify items for which you want item preparation instructions to help with item sourcing decisions.  Note: ASINs must be included in the product catalog for at least one of the marketplaces that the seller  participates in. Any ASIN that is not included in the product catalog for at least one of the marketplaces that the seller participates in is returned in the InvalidASINList property in the response. You can find out which marketplaces a seller participates in by calling the getMarketplaceParticipations operation in the Selling Partner API for Sellers. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getPrepInstructions(AccessToken $accessToken, string $region, string $ship_to_country_code, ?array $seller_sku_list = null, ?array $asin_list = null) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetPrepInstructionsResponse;

    /**
     * Operation getShipmentItems.
     *
     * @param string $query_type Indicates whether items are returned using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or using NextToken, which continues returning items specified in a previous request. (required)
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored. (required)
     * @param null|\DateTimeInterface $last_updated_after A date used for selecting inbound shipment items that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller. (optional)
     * @param null|\DateTimeInterface $last_updated_before A date used for selecting inbound shipment items that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller. (optional)
     * @param null|string $next_token A string token returned in the response to your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShipmentItems(AccessToken $accessToken, string $region, string $query_type, string $marketplace_id, ?\DateTimeInterface $last_updated_after = null, ?\DateTimeInterface $last_updated_before = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetShipmentItemsResponse;

    /**
     * Operation getShipmentItemsByShipmentId.
     *
     * @param string $shipment_id A shipment identifier used for selecting items in a specific inbound shipment. (required)
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShipmentItemsByShipmentId(AccessToken $accessToken, string $region, string $shipment_id, string $marketplace_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetShipmentItemsResponse;

    /**
     * Operation getShipments.
     *
     * @param string $query_type Indicates whether shipments are returned using shipment information (by providing the ShipmentStatusList or ShipmentIdList parameters), using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or by using NextToken to continue returning items specified in a previous request. (required)
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace where the product would be stored. (required)
     * @param null|string[] $shipment_status_list A list of ShipmentStatus values. Used to select shipments with a current status that matches the status values that you specify. (optional)
     * @param null|string[] $shipment_id_list A list of shipment IDs used to select the shipments that you want. If both ShipmentStatusList and ShipmentIdList are specified, only shipments that match both parameters are returned. (optional)
     * @param null|\DateTimeInterface $last_updated_after A date used for selecting inbound shipments that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller. (optional)
     * @param null|\DateTimeInterface $last_updated_before A date used for selecting inbound shipments that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller. (optional)
     * @param null|string $next_token A string token returned in the response to your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShipments(AccessToken $accessToken, string $region, string $query_type, string $marketplace_id, ?array $shipment_status_list = null, ?array $shipment_id_list = null, ?\DateTimeInterface $last_updated_after = null, ?\DateTimeInterface $last_updated_before = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetShipmentsResponse;

    /**
     * Operation getTransportDetails.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getTransportDetails(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetTransportDetailsResponse;

    /**
     * Operation putTransportDetails.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function putTransportDetails(AccessToken $accessToken, string $region, string $shipment_id, \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsRequest $body) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PutTransportDetailsResponse;

    /**
     * Operation updateInboundShipment.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function updateInboundShipment(AccessToken $accessToken, string $region, string $shipment_id, \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentRequest $body) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundShipmentResponse;

    /**
     * Operation voidTransport.
     *
     * @param string $shipment_id A shipment identifier originally returned by the createInboundShipmentPlan operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function voidTransport(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\FulfillmentInbound\VoidTransportResponse;
}
