<?php

declare(strict_types=1);

use AmazonPHP\SellingPartner\Api\VendorOrdersApi\VendorDirectFulfillmentOrdersSDK;
use AmazonPHP\SellingPartner\Model\CatalogItem\Item;
use AmazonPHP\SellingPartner\Model\ListingsItems\ListingsItemPutRequest;
use AmazonPHP\SellingPartner\Model\Messaging\GetSchemaResponse;
use AmazonPHP\SellingPartner\Model\Uploads\UploadDestination;
use PHPStan\Type\ArrayType;
use PHPStan\Type\BooleanType;
use PHPStan\Type\MixedType;
use PHPStan\Type\NullType;
use PHPStan\Type\UnionType;
use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeDeclarationRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddReturnTypeDeclarationRector;
use Rector\TypeDeclaration\ValueObject\AddParamTypeDeclaration;
use Rector\TypeDeclaration\ValueObject\AddReturnTypeDeclaration;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\SymfonyPhpConfig\ValueObjectInliner;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $services = $containerConfigurator->services();

    $parameters->set(Option::AUTOLOAD_PATHS, [
        __DIR__ ,
    ]);

    // paths to refactor; solid alternative to CLI arguments
    $parameters->set(Option::PATHS, [
        __DIR__ . '/src',
    ]);

    $parameters->set(Option::SKIP, [
        // single file
        __DIR__ . '/src/AmazonPHP/SellingPartner/Marketplace.php',
        __DIR__ . '/src/AmazonPHP/SellingPartner/AccessToken.php',
    ]);

    $services->set(\AmazonPHP\Rector\ClassMethod\FixArgumentDefaultValuesNotMatchingTypeRector::class);

    // Define what rule sets will be applied
    $containerConfigurator->import(SetList::DEAD_CODE);
    $containerConfigurator->import(SetList::PHP_73);
    $containerConfigurator->import(SetList::PHP_74);
    $containerConfigurator->import(SetList::TYPE_DECLARATION);

    /**
     * Explanation here: https://github.com/amazon-php/sp-api-sdk/issues/101#issuecomment-1002159988
     */
    $services->set(AddParamTypeDeclarationRector::class)
        ->call('configure', [[
            AddParamTypeDeclarationRector::PARAMETER_TYPEHINTS => ValueObjectInliner::inline([
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
            ])
        ]]);

    $services->set(AddReturnTypeDeclarationRector::class)
        ->call('configure', [[
            AddReturnTypeDeclarationRector::METHOD_RETURN_TYPES => ValueObjectInliner::inline([
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
            ])
        ]]);
};
