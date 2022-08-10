<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorOrdersApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface VendorDirectFulfillmentOrdersSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentOrders';

    public const OPERATION_GETORDER = 'getOrder';

    public const OPERATION_GETORDER_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber}';

    public const OPERATION_GETORDERS = 'getOrders';

    public const OPERATION_GETORDERS_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders';

    public const OPERATION_SUBMITACKNOWLEDGEMENT = 'submitAcknowledgement';

    public const OPERATION_SUBMITACKNOWLEDGEMENT_PATH = '/vendor/directFulfillment/orders/2021-12-28/acknowledgements';

    /**
     * Operation getOrder.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Order
     */
    public function getOrder(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $purchase_order_number);

    /**
     * Create request for operation 'getOrder'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getOrderRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $purchase_order_number) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getOrders.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. (optional)
     * @param string $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. (optional)
     * @param int $limit The limit to the number of purchase orders returned. (optional)
     * @param string $sort_order Sort the list in ascending or descending order by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     * @param bool $include_details When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. (optional, default to 'true')
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderList
     */
    public function getOrders(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \DateTime $created_after, \DateTime $created_before, string $ship_from_party_id = null, string $status = null, int $limit = null, string $sort_order = null, string $next_token = null, bool $include_details = 'true');

    /**
     * Create request for operation 'getOrders'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. (optional)
     * @param string $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. (optional)
     * @param int $limit The limit to the number of purchase orders returned. (optional)
     * @param string $sort_order Sort the list in ascending or descending order by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     * @param bool $include_details When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. (optional, default to 'true')
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getOrdersRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \DateTime $created_after, \DateTime $created_before, string $ship_from_party_id = null, string $status = null, int $limit = null, string $sort_order = null, string $next_token = null, bool $include_details = 'true') : \Psr\Http\Message\RequestInterface;

    /**
     * Operation submitAcknowledgement.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TransactionId
     */
    public function submitAcknowledgement(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body);

    /**
     * Create request for operation 'submitAcknowledgement'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function submitAcknowledgementRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body) : \Psr\Http\Message\RequestInterface;
}
