<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $services = $containerConfigurator->services();

    $parameters->set(Option::PARALLEL, false);
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

    $services->set(\Rector\PSR4\Rector\Namespace_\MultipleClassFileToPsr4ClassesRector::class);
};
