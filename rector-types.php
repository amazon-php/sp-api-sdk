<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

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

    $config->import(SetList::TYPE_DECLARATION);
    $config->import(SetList::TYPE_DECLARATION_STRICT);
};
