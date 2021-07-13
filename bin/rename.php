#!/usr/bin/env php
<?php

$srcPath = __DIR__ . '/../src/AmazonPHP/SellingPartner/Api';

$paths = [
    'AmazonPHP\SellingPartner\Api\AplusContentApi' => [$srcPath . '/AplusContentApi/APlusSDK.php'],
    'AmazonPHP\SellingPartner\Api\DefaultApi' => [$srcPath . '/DefaultAPI/FinancesSDK.php'],
    'AmazonPHP\SellingPartner\Api\DefinitionsApi' => [$srcPath . '/DefinitionsAPI/ProductTypesDefinitionsSDK.php'],
    'AmazonPHP\SellingPartner\Api\FbaOutboundApi' => [$srcPath . '/FbaOutboundApi/FulfillmentOutboundSDK.php'],
    'AmazonPHP\SellingPartner\Api\FeedsApi' => [$srcPath . '/FeedsApi/FeedsSDK.php'],
    'AmazonPHP\SellingPartner\Api\FeesApi' => [$srcPath . '/FeesApi/ProductFeesSDK.php'],
    'AmazonPHP\SellingPartner\Api\ListingsApi' => [$srcPath . '/ListingsApi/ListingsItemsSDK.php'],
    'AmazonPHP\SellingPartner\Api\MessagingApi' => [$srcPath . '/MessagingApi/MessagingSDK.php'],
    'AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi' => [$srcPath . '/MerchantFulfillmentApi/MerchantFulfillmentSDK.php'],
    'AmazonPHP\SellingPartner\Api\NotificationsApi' => [$srcPath . '/NotificationsApi/NotificationsSDK.php'],
    'AmazonPHP\SellingPartner\Api\ProductPricingApi' => [$srcPath . '/ProductPricingApi/ProductPricingSDK.php'],
    'AmazonPHP\SellingPartner\Api\SellersApi' => [$srcPath . '/SellersApi/SellersSDK.php'],
    'AmazonPHP\SellingPartner\Api\ServiceApi' => [$srcPath . '/ServiceApi/ServicesSDK.php'],
    'AmazonPHP\SellingPartner\Api\SmallAndLightApi' => [$srcPath . '/SmallAndLightApi/FBASmallAndLightSDK.php'],
    'AmazonPHP\SellingPartner\Api\SolicitationsApi' => [$srcPath . '/SolicitationsApi/SolicitationsSDK.php'],
    'AmazonPHP\SellingPartner\Api\UploadsApi' => [$srcPath . '/UploadsApi/UploadsSDK.php'],
    'AmazonPHP\SellingPartner\Api\AuthorizationApi' => [$srcPath . '/AuthorizationApi/AuthorizationSDK.php'],
    'AmazonPHP\SellingPartner\Api\CatalogApi' => [$srcPath . '/CatalogApi/CatalogItemSDK.php'],
    'AmazonPHP\SellingPartner\Api\FbaInboundApi' => [$srcPath . '/FbaInboundApi/FBAInboundSDK.php', $srcPath . '/FbaInboundApi/FulfillmentInboundSDK.php'],
    'AmazonPHP\SellingPartner\Api\FbaInventoryApi' => [$srcPath . '/FbaInventoryApi/FBAInventorySDK.php'],
    'AmazonPHP\SellingPartner\Api\OrdersV0Api' => [$srcPath . '/OrdersV0Api/OrdersSDK.php'],
    'AmazonPHP\SellingPartner\Api\ReportsApi' => [$srcPath . '/ReportsApi/ReportsSDK.php'],
    'AmazonPHP\SellingPartner\Api\TokensApi' => [$srcPath . '/TokensApi/TokensSDK.php'],
    'AmazonPHP\SellingPartner\Api\SalesApi' => [$srcPath . '/SalesApi/SalesSDK.php'],
    'AmazonPHP\SellingPartner\Api\ShippingApi' => [$srcPath . '/ShippingApi/ShippingSDK.php'],
    'AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi' => [$srcPath . '/ShipmentInvoiceApi/ShipmentInvoicingSDK.php'],
];

foreach ($paths as $oldNamespace => $oldPaths) {
    foreach ($oldPaths as $oldPath) {
        if (!\file_exists($oldPath)) {
            continue;
        }

        $newPath = $srcPath . '/' . \basename($oldPath);
        \rename($oldPath, $newPath);
        echo "Moving {$oldPath} into {$newPath} \n";

        $fileContent = \file_get_contents($newPath);
        $fileContent = \str_replace('namespace ' . $oldNamespace . ';', 'namespace AmazonPHP\SellingPartner\Api;', $fileContent);
        \file_put_contents($newPath, $fileContent);
        echo "Namespace Updated {$newPath} \n";
    }

    $oldPath = \dirname(\current($oldPaths));

    if (file_exists($oldPath)) {
        echo "Removing {$oldPath} \n";
        \rmdir($oldPath);
    }
}