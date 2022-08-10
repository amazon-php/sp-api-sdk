<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\NotificationsApi;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
interface NotificationsSDKInterface
{
    public const API_NAME = 'Notifications';

    public const OPERATION_CREATEDESTINATION = 'createDestination';

    public const OPERATION_CREATEDESTINATION_PATH = '/notifications/v1/destinations';

    public const OPERATION_CREATESUBSCRIPTION = 'createSubscription';

    public const OPERATION_CREATESUBSCRIPTION_PATH = '/notifications/v1/subscriptions/{notificationType}';

    public const OPERATION_DELETEDESTINATION = 'deleteDestination';

    public const OPERATION_DELETEDESTINATION_PATH = '/notifications/v1/destinations/{destinationId}';

    public const OPERATION_DELETESUBSCRIPTIONBYID = 'deleteSubscriptionById';

    public const OPERATION_DELETESUBSCRIPTIONBYID_PATH = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';

    public const OPERATION_GETDESTINATION = 'getDestination';

    public const OPERATION_GETDESTINATION_PATH = '/notifications/v1/destinations/{destinationId}';

    public const OPERATION_GETDESTINATIONS = 'getDestinations';

    public const OPERATION_GETDESTINATIONS_PATH = '/notifications/v1/destinations';

    public const OPERATION_GETSUBSCRIPTION = 'getSubscription';

    public const OPERATION_GETSUBSCRIPTION_PATH = '/notifications/v1/subscriptions/{notificationType}';

    public const OPERATION_GETSUBSCRIPTIONBYID = 'getSubscriptionById';

    public const OPERATION_GETSUBSCRIPTIONBYID_PATH = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';

    /**
     * Operation createDestination.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationResponse
     */
    public function createDestination(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body);

    /**
     * Create request for operation 'createDestination'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createDestinationRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Notifications\CreateDestinationRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation createSubscription.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionResponse
     */
    public function createSubscription(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $notification_type, \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body);

    /**
     * Create request for operation 'createSubscription'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     * @param \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function createSubscriptionRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $notification_type, \AmazonPHP\SellingPartner\Model\Notifications\CreateSubscriptionRequest $body) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation deleteDestination.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\DeleteDestinationResponse
     */
    public function deleteDestination(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $destination_id);

    /**
     * Create request for operation 'deleteDestination'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function deleteDestinationRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $destination_id) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation deleteSubscriptionById.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\DeleteSubscriptionByIdResponse
     */
    public function deleteSubscriptionById(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $subscription_id, string $notification_type);

    /**
     * Create request for operation 'deleteSubscriptionById'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function deleteSubscriptionByIdRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $subscription_id, string $notification_type) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getDestination.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationResponse
     */
    public function getDestination(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $destination_id);

    /**
     * Create request for operation 'getDestination'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getDestinationRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $destination_id) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getDestinations.
     *
     * @param AccessToken $accessToken
     * @param string $region
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetDestinationsResponse
     */
    public function getDestinations(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region);

    /**
     * Create request for operation 'getDestinations'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getDestinationsRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getSubscription.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionResponse
     */
    public function getSubscription(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $notification_type);

    /**
     * Create request for operation 'getSubscription'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getSubscriptionRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $notification_type) : \Psr\Http\Message\RequestInterface;

    /**
     * Operation getSubscriptionById.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\ApiException on non-2xx response
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Notifications\GetSubscriptionByIdResponse
     */
    public function getSubscriptionById(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $subscription_id, string $notification_type);

    /**
     * Create request for operation 'getSubscriptionById'.
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification.   For more information about notification types, see [the Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getSubscriptionByIdRequest(\AmazonPHP\SellingPartner\AccessToken $accessToken, string $region, string $subscription_id, string $notification_type) : \Psr\Http\Message\RequestInterface;
}
