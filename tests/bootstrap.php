<?php

declare(strict_types=1);

include __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

if (file_exists(__DIR__ . '/../.env')) {
    (new Dotenv())->usePutenv()->load(__DIR__ . '/../.env');
}
