<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\UploadsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Uploads.
 *
 * The Uploads API lets you upload files that you can programmatically access using other Selling Partner APIs, such as the A+ Content API and the Messaging API.
 *
 * The version of the OpenAPI document: 2020-11-01
 *
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface UploadsSDKInterface
{
    public const API_NAME = 'Uploads';

    public const OPERATION_CREATEUPLOADDESTINATIONFORRESOURCE = 'createUploadDestinationForResource';

    public const OPERATION_CREATEUPLOADDESTINATIONFORRESOURCE_PATH = '/uploads/2020-11-01/uploadDestinations/{resource}';

    /**
     * Operation createUploadDestinationForResource.
     *
     * @param string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the &#x60;{resource}&#x60; would be &#x60;/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure&#x60;, and the entire path would be &#x60;/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure&#x60;. If you are creating an upload destination for an Aplus content document, the &#x60;{resource}&#x60; would be &#x60;aplus/2020-11-01/contentDocuments&#x60; and the path would be &#x60;/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments&#x60;. (required)
     * @param null|string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Uploads\CreateUploadDestinationResponse
     */
    public function createUploadDestinationForResource(AccessToken $accessToken, string $region, array $marketplace_ids, string $content_md5, string $resource, ?string $content_type = null) : \AmazonPHP\SellingPartner\Model\Uploads\CreateUploadDestinationResponse;
}
