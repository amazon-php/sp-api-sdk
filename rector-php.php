<?php

declare(strict_types=1);

use AmazonPHP\Rector\ClassMethod\FixArgumentDefaultValuesNotMatchingTypeRector;
use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use AmazonPHP\SellingPartner\Model\CatalogItem\Item;
use AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest;
use AmazonPHP\SellingPartner\Model\Messaging\GetSchemaResponse;
use AmazonPHP\SellingPartner\Model\Orders\Address;
use AmazonPHP\SellingPartner\Model\Uploads\UploadDestination;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\StringType;
use PHPStan\Type\UnionType;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration;
use Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration;

return static function (RectorConfig $config): void {

    $config->autoloadPaths([
        __DIR__ ,
    ]);
    $config->paths([
        __DIR__ . '/src',
    ]);
    $config->skip([
        __DIR__ . '/src/AmazonPHP/SellingPartner/Marketplace.php',
        __DIR__ . '/src/AmazonPHP/SellingPartner/AccessToken.php',
    ]);

    $config->rules([
        FixArgumentDefaultValuesNotMatchingTypeRector::class
    ]);
    $config->sets([
        SetList::PHP_73,
        SetList::PHP_74,
        SetList::TYPE_DECLARATION,
        SetList::TYPE_DECLARATION_STRICT
    ]);

    /**
     * Explanation here: https://github.com/amazon-php/sp-api-sdk/issues/101#issuecomment-1002159988
     */
    $config->ruleWithConfiguration(
        AddParamTypeDeclarationRector::class,
        [
            new AddParamTypeDeclaration(
                Item::class,
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
                \AmazonPHP\SellingPartner\Model\ListingsItems\Item::class,
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
            new AddParamTypeDeclaration(
                VendorDirectFulfillmentOrdersSDK::class,
                'getOrders',
                9,
                new BooleanType()
            ),
        ]
    );

    $config->ruleWithConfiguration(
        AddReturnTypeDeclarationRector::class,
        [
            new AddReturnTypeDeclaration(
                Item::class,
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
        ]
    );
};
