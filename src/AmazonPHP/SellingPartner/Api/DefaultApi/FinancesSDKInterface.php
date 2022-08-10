<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\DefaultApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface FinancesSDKInterface
{
    public const API_NAME = 'Finances';

    public const OPERATION_LISTFINANCIALEVENTGROUPS = 'listFinancialEventGroups';

    public const OPERATION_LISTFINANCIALEVENTGROUPS_PATH = '/finances/v0/financialEventGroups';

    public const OPERATION_LISTFINANCIALEVENTS = 'listFinancialEvents';

    public const OPERATION_LISTFINANCIALEVENTS_PATH = '/finances/v0/financialEvents';

    public const OPERATION_LISTFINANCIALEVENTSBYGROUPID = 'listFinancialEventsByGroupId';

    public const OPERATION_LISTFINANCIALEVENTSBYGROUPID_PATH = '/finances/v0/financialEventGroups/{eventGroupId}/financialEvents';

    public const OPERATION_LISTFINANCIALEVENTSBYORDERID = 'listFinancialEventsByOrderId';

    public const OPERATION_LISTFINANCIALEVENTSBYORDERID_PATH = '/finances/v0/orders/{orderId}/financialEvents';

    /**
     * Operation listFinancialEventGroups.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventGroupsResponse
     */
    public function listFinancialEventGroups(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, int $max_results_per_page = 100, \DateTime $financial_event_group_started_before = null, \DateTime $financial_event_group_started_after = null, string $next_token = null);

    /**
     * Create request for operation 'listFinancialEventGroups'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listFinancialEventGroupsRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, int $max_results_per_page = 100, \DateTime $financial_event_group_started_before = null, \DateTime $financial_event_group_started_after = null, string $next_token = null) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation listFinancialEvents.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEvents(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, int $max_results_per_page = 100, \DateTime $posted_after = null, \DateTime $posted_before = null, string $next_token = null);

    /**
     * Create request for operation 'listFinancialEvents'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listFinancialEventsRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, int $max_results_per_page = 100, \DateTime $posted_after = null, \DateTime $posted_before = null, string $next_token = null) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation listFinancialEventsByGroupId.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $event_group_id The identifier of the financial event group to which the events belong. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByGroupId(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $event_group_id, int $max_results_per_page = 100, string $next_token = null);

    /**
     * Create request for operation 'listFinancialEventsByGroupId'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $event_group_id The identifier of the financial event group to which the events belong. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listFinancialEventsByGroupIdRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $event_group_id, int $max_results_per_page = 100, string $next_token = null) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation listFinancialEventsByOrderId.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByOrderId(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $order_id, int $max_results_per_page = 100, string $next_token = null);

    /**
     * Create request for operation 'listFinancialEventsByOrderId'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function listFinancialEventsByOrderIdRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $order_id, int $max_results_per_page = 100, string $next_token = null) : \Psr\Http\Message\RequestInterface;
}
