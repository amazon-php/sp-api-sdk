<?php

declare(strict_types=1);

use Rector\Caching\ValueObject\Storage\MemoryCacheStorage;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

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

    $config->sets([
        SetList::PHP_73,
        SetList::PHP_74,
        SetList::PHP_80,
        SetList::PHP_81,
        SetList::TYPE_DECLARATION,
    ]);
};
