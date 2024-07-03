<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class BoxContentInformationSource
{
    /**
     * Possible values of this enum.
     */
    final public const BOX_CONTENT_PROVIDED = 'BOX_CONTENT_PROVIDED';

    final public const MANUAL_PROCESS = 'MANUAL_PROCESS';

    final public const BARCODE_2_D = 'BARCODE_2D';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::BOX_CONTENT_PROVIDED,
            self::MANUAL_PROCESS,
            self::BARCODE_2_D,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
