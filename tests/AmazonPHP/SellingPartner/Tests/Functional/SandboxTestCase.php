<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\SellingPartnerSDK;
use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;
use Psr\Log\Test\TestLogger;

abstract class SandboxTestCase extends TestCase
{
    protected ?SellingPartnerSDK $sellingPartnerSDK;

    protected ?string $sellerRefreshToken;

    protected function setUp() : void
    {
        if (!\getenv('SP_ACCESS_KEY')) {
            $this->markTestSkipped(".env file doesn't exists or env vars are not populated.");
        }

        $configuration = Configuration::forIAMUser(
            \getenv('SP_LWA_CLIENT_ID'),
            \getenv('SP_LWA_CLIENT_SECRET'),
            \getenv('SP_ACCESS_KEY'),
            \getenv('SP_SECRET_KEY'),
        );

        $configuration->setSandbox();

        $this->sellingPartnerSDK = new SellingPartnerSDK(
            new Curl(new Psr17Factory()),
            new Psr17Factory(),
            new Psr17Factory(),
            $configuration,
            new TestLogger()
        );

        $this->sellerRefreshToken = \getenv('SP_SELLER_REFRESH_TOKEN');
    }

    protected function tearDown() : void
    {
        $this->sellingPartnerSDK = null;
        $this->sellerRefreshToken = null;
    }
}
