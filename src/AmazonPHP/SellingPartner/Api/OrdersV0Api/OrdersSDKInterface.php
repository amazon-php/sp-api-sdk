<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\OrdersV0Api;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  **Note:** The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface OrdersSDKInterface
{
    public const API_NAME = 'Orders';

    public const OPERATION_CONFIRMSHIPMENT = 'confirmShipment';

    public const OPERATION_CONFIRMSHIPMENT_PATH = '/orders/v0/orders/{orderId}/shipmentConfirmation';

    public const OPERATION_GETORDER = 'getOrder';

    public const OPERATION_GETORDER_PATH = '/orders/v0/orders/{orderId}';

    public const OPERATION_GETORDERADDRESS = 'getOrderAddress';

    public const OPERATION_GETORDERADDRESS_PATH = '/orders/v0/orders/{orderId}/address';

    public const OPERATION_GETORDERBUYERINFO = 'getOrderBuyerInfo';

    public const OPERATION_GETORDERBUYERINFO_PATH = '/orders/v0/orders/{orderId}/buyerInfo';

    public const OPERATION_GETORDERITEMS = 'getOrderItems';

    public const OPERATION_GETORDERITEMS_PATH = '/orders/v0/orders/{orderId}/orderItems';

    public const OPERATION_GETORDERITEMSBUYERINFO = 'getOrderItemsBuyerInfo';

    public const OPERATION_GETORDERITEMSBUYERINFO_PATH = '/orders/v0/orders/{orderId}/orderItems/buyerInfo';

    public const OPERATION_GETORDERREGULATEDINFO = 'getOrderRegulatedInfo';

    public const OPERATION_GETORDERREGULATEDINFO_PATH = '/orders/v0/orders/{orderId}/regulatedInfo';

    public const OPERATION_GETORDERS = 'getOrders';

    public const OPERATION_GETORDERS_PATH = '/orders/v0/orders';

    public const OPERATION_UPDATEVERIFICATIONSTATUS = 'updateVerificationStatus';

    public const OPERATION_UPDATEVERIFICATIONSTATUS_PATH = '/orders/v0/orders/{orderId}/regulatedInfo';

    /**
     * Operation confirmShipment.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\ConfirmShipmentRequest $payload The request body of the &#x60;confirmShipment&#x60; operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function confirmShipment(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\ConfirmShipmentRequest $payload);

    /**
     * Operation getOrder.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrder(AccessToken $accessToken, string $region, string $order_id) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderResponse;

    /**
     * Operation getOrderAddress.
     *
     * @param string $order_id An &#x60;orderId&#x60; is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderAddress(AccessToken $accessToken, string $region, string $order_id) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderAddressResponse;

    /**
     * Operation getOrderBuyerInfo.
     *
     * @param string $order_id An &#x60;orderId&#x60; is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderBuyerInfo(AccessToken $accessToken, string $region, string $order_id) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderBuyerInfoResponse;

    /**
     * Operation getOrderItems.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderItems(AccessToken $accessToken, string $region, string $order_id, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderItemsResponse;

    /**
     * Operation getOrderItemsBuyerInfo.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderItemsBuyerInfo(AccessToken $accessToken, string $region, string $order_id, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderItemsBuyerInfoResponse;

    /**
     * Operation getOrderRegulatedInfo.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderRegulatedInfo(AccessToken $accessToken, string $region, string $order_id) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderRegulatedInfoResponse;

    /**
     * Operation getOrders.
     *
     * @param string[] $marketplace_ids A list of &#x60;MarketplaceId&#x60; values. Used to select orders that were placed in the specified marketplaces.  Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of &#x60;MarketplaceId&#x60; values. (required)
     * @param null|string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format.  **Note**: Either the &#x60;CreatedAfter&#x60; parameter or the &#x60;LastUpdatedAfter&#x60; parameter is required. You could specify &#x60;CreatedBefore&#x60; but not provide &#x60;LastUpdatedAfter&#x60; or &#x60;LastUpdatedBefore&#x60; when &#x60;CreatedAfter&#x60; is specified. (optional)
     * @param null|string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format.  **Note**: &#x60;CreatedBefore&#x60; is optional when &#x60;CreatedAfter&#x60; is specified. But if specified, &#x60;CreatedBefore&#x60; should be equal to or after the &#x60;CreatedAfter&#x60; date and at least 2 minutes before the current time. (optional)
     * @param null|string $last_updated_after A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format.  **Note**: &#x60;LastUpdatedBefore&#x60; is optional when &#x60;LastUpdatedAfter&#x60; is specified. But if specified, &#x60;LastUpdatedBefore&#x60; should be equal to or after the &#x60;LastUpdatedAfter&#x60; date and at least 2 minutes before current time. (optional)
     * @param null|string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format.  **Note**: LastUpdatedBefore is optional when LastUpdatedAfter is set. But if specified, LastUpdatedBefore should be equal to or after the LastUpdatedAfter date and at least 2 minutes before current time. (optional)
     * @param null|string[] $order_statuses A list of &#x60;OrderStatus&#x60; values used to filter the results.  **Possible values:** - &#x60;PendingAvailability&#x60; (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.) - &#x60;Pending&#x60; (The order has been placed but payment has not been authorized.) - &#x60;Unshipped&#x60; (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped.) - &#x60;PartiallyShipped&#x60; (One or more, but not all, items in the order have been shipped.) - &#x60;Shipped&#x60; (All items in the order have been shipped.) - &#x60;InvoiceUnconfirmed&#x60; (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.) - &#x60;Canceled&#x60; (The order has been canceled.) - &#x60;Unfulfillable&#x60; (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.) (optional)
     * @param null|string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel.   **Possible values**: &#x60;AFN&#x60; (Fulfillment by Amazon); &#x60;MFN&#x60; (Fulfilled by the seller). (optional)
     * @param null|string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods.  **Possible values**: &#x60;COD&#x60; (Cash on delivery); &#x60;CVS&#x60; (Convenience store payment); &#x60;Other&#x60; (Any payment method other than &#x60;COD&#x60; or &#x60;CVS&#x60;). (optional)
     * @param null|string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param null|string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param null|int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param null|string[] $easy_ship_shipment_statuses A list of &#x60;EasyShipShipmentStatus&#x60; values. Used to select Easy Ship orders with statuses that match the specified values. If &#x60;EasyShipShipmentStatus&#x60; is specified, only Amazon Easy Ship orders are returned.  **Possible values:** - &#x60;PendingSchedule&#x60; (The package is awaiting the schedule for pick-up.) - &#x60;PendingPickUp&#x60; (Amazon has not yet picked up the package from the seller.) - &#x60;PendingDropOff&#x60; (The seller will deliver the package to the carrier.) - &#x60;LabelCanceled&#x60; (The seller canceled the pickup.) - &#x60;PickedUp&#x60; (Amazon has picked up the package from the seller.) - &#x60;DroppedOff&#x60; (The package is delivered to the carrier by the seller.) - &#x60;AtOriginFC&#x60; (The packaged is at the origin fulfillment center.) - &#x60;AtDestinationFC&#x60; (The package is at the destination fulfillment center.) - &#x60;Delivered&#x60; (The package has been delivered.) - &#x60;RejectedByBuyer&#x60; (The package has been rejected by the buyer.) - &#x60;Undeliverable&#x60; (The package cannot be delivered.) - &#x60;ReturningToSeller&#x60; (The package was not delivered and is being returned to the seller.) - &#x60;ReturnedToSeller&#x60; (The package was not delivered and was returned to the seller.) - &#x60;Lost&#x60; (The package is lost.) - &#x60;OutForDelivery&#x60; (The package is out for delivery.) - &#x60;Damaged&#x60; (The package was damaged by the carrier.) (optional)
     * @param null|string[] $electronic_invoice_statuses A list of &#x60;ElectronicInvoiceStatus&#x60; values. Used to select orders with electronic invoice statuses that match the specified values.  **Possible values:** - &#x60;NotRequired&#x60; (Electronic invoice submission is not required for this order.) - &#x60;NotFound&#x60; (The electronic invoice was not submitted for this order.) - &#x60;Processing&#x60; (The electronic invoice is being processed for this order.) - &#x60;Errored&#x60; (The last submitted electronic invoice was rejected for this order.) - &#x60;Accepted&#x60; (The last submitted electronic invoice was submitted and accepted.) (optional)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     * @param null|string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param null|string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param null|bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param null|string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param null|string $earliest_delivery_date_before A date used for selecting orders with a earliest delivery date before (or at) a specified time. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param null|string $earliest_delivery_date_after A date used for selecting orders with a earliest delivery date after (or at) a specified time. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param null|string $latest_delivery_date_before A date used for selecting orders with a latest delivery date before (or at) a specified time. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param null|string $latest_delivery_date_after A date used for selecting orders with a latest delivery date after (or at) a specified time. The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrders(AccessToken $accessToken, string $region, array $marketplace_ids, ?string $created_after = null, ?string $created_before = null, ?string $last_updated_after = null, ?string $last_updated_before = null, ?array $order_statuses = null, ?array $fulfillment_channels = null, ?array $payment_methods = null, ?string $buyer_email = null, ?string $seller_order_id = null, ?int $max_results_per_page = null, ?array $easy_ship_shipment_statuses = null, ?array $electronic_invoice_statuses = null, ?string $next_token = null, ?array $amazon_order_ids = null, ?string $actual_fulfillment_supply_source_id = null, ?bool $is_ispu = null, ?string $store_chain_store_id = null, ?string $earliest_delivery_date_before = null, ?string $earliest_delivery_date_after = null, ?string $latest_delivery_date_before = null, ?string $latest_delivery_date_after = null) : \AmazonPHP\SellingPartner\Model\Orders\GetOrdersResponse;

    /**
     * Operation updateVerificationStatus.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\UpdateVerificationStatusRequest $payload The request body for the &#x60;updateVerificationStatus&#x60; operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function updateVerificationStatus(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\UpdateVerificationStatusRequest $payload);
}
