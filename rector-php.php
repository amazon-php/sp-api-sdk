<?php

declare(strict_types=1);

use AmazonPHP\Rector\ClassMethod\FixArgumentDefaultValuesNotMatchingTypeRector;
use AmazonPHP\Rector\ClassMethod\SetNullableFunctionReturnTypeRector;
use AmazonPHP\Rector\ValueObject\NullableReturnTypeDeclaration;
use AmazonPHP\SellingPartner\Model\CatalogItem\Item as CatalogItem;
use AmazonPHP\SellingPartner\Model\CatalogItem\ItemSearchResults;
use AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\InboundShipmentInfo;
use AmazonPHP\SellingPartner\Model\ListingsItems\Item as ListingsItem;
use AmazonPHP\SellingPartner\Model\ListingsItems\ItemProcurement;
use AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest;
use AmazonPHP\SellingPartner\Model\Messaging\GetSchemaResponse;
use AmazonPHP\SellingPartner\Model\Orders\Address;
use AmazonPHP\SellingPartner\Model\ProductPricing\GetOffersResult;
use AmazonPHP\SellingPartner\Model\Uploads\UploadDestination;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\StringType;
use PHPStan\Type\UnionType;
use Rector\Caching\ValueObject\Storage\MemoryCacheStorage;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessParamTagRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveUselessReturnTagRector;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration;
use Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration;

return static function (RectorConfig $config): void {

    $config->parallel(seconds: 1200);

    $config->autoloadPaths([
        __DIR__ ,
    ]);
    $config->paths([
        __DIR__ . '/src/AmazonPHP/SellingPartner/Api',
        __DIR__ . '/src/AmazonPHP/SellingPartner/Model',
    ]);
    $config->cacheClass(MemoryCacheStorage::class);

    $config->rules([
        FixArgumentDefaultValuesNotMatchingTypeRector::class,
        RemoveUselessParamTagRector::class,
        RemoveUselessReturnTagRector::class,
    ]);
    $config->sets([
        SetList::PHP_73,
        SetList::PHP_74,
        SetList::PHP_80,
        SetList::PHP_81,
        SetList::TYPE_DECLARATION,
    ]);

    /**
     * Explanation here: https://github.com/amazon-php/sp-api-sdk/issues/101#issuecomment-1002159988
     */
    $config->ruleWithConfiguration(
        AddParamTypeDeclarationRector::class,
        [
            new AddParamTypeDeclaration(
                CatalogItem::class,
                'setAttributes',
                0,
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())])
            ),
            new AddParamTypeDeclaration(
                ListingsItemPutRequest::class,
                'setAttributes',
                0,
                new ArrayType(new MixedType(), new MixedType())
            ),
            new AddParamTypeDeclaration(
                ListingsItem::class,
                'setAttributes',
                0,
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())])
            ),
            new AddParamTypeDeclaration(
                GetSchemaResponse::class,
                'setPayload',
                0,
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())])
            ),
            new AddParamTypeDeclaration(
                UploadDestination::class,
                'setHeaders',
                0,
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())])
            ),
        ]
    );

    $config->ruleWithConfiguration(
        AddReturnTypeDeclarationRector::class,
        [
            new AddReturnTypeDeclaration(
                GetOffersResult::class,
                'getMarketplaceId',
                new UnionType([new NullType(), new StringType()]),
            ),
            new AddReturnTypeDeclaration(
                CatalogItem::class,
                'getAttributes',
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())]),
            ),
            new AddReturnTypeDeclaration(
                ListingsItemPutRequest::class,
                'getAttributes',
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())]),
            ),
            new AddReturnTypeDeclaration(
                GetSchemaResponse::class,
                'getPayload',
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())]),
            ),
            new AddReturnTypeDeclaration(
                GetSchemaResponse::class,
                'getHeaders',
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())]),
            ),
            // https://github.com/amazon-php/sp-api-sdk/pull/118
            new AddReturnTypeDeclaration(
                Address::class,
                'getName',
                new UnionType([new NullType(), new StringType()]),
            ),
            new AddReturnTypeDeclaration(
                ListingsItem::class,
                'getAttributes',
                new UnionType([new NullType(), new ArrayType(new MixedType(), new MixedType())]),
            ),
        ]
    );

    /**
     * Contrary to Amazon's schema, some of the properties are in fact nullable - this rule will fix that.
     */
    $config->ruleWithConfiguration(
        SetNullableFunctionReturnTypeRector::class,
        [
            /**
             * Fulfillment Inbound API
             */
            new NullableReturnTypeDeclaration(InboundShipmentInfo::class, 'getAreCasesRequired'),
            /**
             * Listings API
             */
            new NullableReturnTypeDeclaration(ItemProcurement::class, 'getCostPrice'),
            /**
             * Catalog Items API
             */
            new NullableReturnTypeDeclaration(ItemSearchResults::class, 'getPagination'),
            new NullableReturnTypeDeclaration(ItemSearchResults::class, 'getRefinements'),
        ]
    );
};
