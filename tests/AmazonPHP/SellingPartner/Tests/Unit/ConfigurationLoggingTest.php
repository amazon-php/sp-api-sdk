<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Configuration\LoggerConfiguration;
use PHPUnit\Framework\TestCase;

final class ConfigurationLoggingTest extends TestCase
{
    private array $headers;

    private array $apis;

    private ?LoggerConfiguration $loggerConfiguration;

    private ?Configuration $configuration;

    protected function setUp() : void
    {
        $this->headers = [
            'x-test-header-0',
            'x-test-header-1',
            'x-test-header-2',
        ];

        $this->apis = [
            'TestApi0' => [
                'TestApiOperation0',
                'TestApiOperation1',
                'TestApiOperation2',
            ],
            'TestApi1' => [
                'TestApiOperation0',
                'TestApiOperation1',
                'TestApiOperation2',
            ],
            'TestApi2' => [
                'TestApiOperation0',
                'TestApiOperation1',
                'TestApiOperation2',
            ],
        ];

        $this->loggerConfiguration = new LoggerConfiguration();

        $this->configuration = new Configuration(
            'lwaClientID',
            'lwaClientSecret',
            'accessKey',
            'secretKey',
            null,
            null,
            $this->loggerConfiguration
        );
    }

    protected function tearDown() : void
    {
        $this->headers = [];
        $this->apis = [];
        $this->configuration = null;
        $this->loggerConfiguration = null;
    }

    public function test_can_set_skip_logging() : void
    {
        $this->addSkippedHeaders();

        foreach ($this->headers as $header) {
            $this->assertContains($header, $this->configuration->loggingSkipHeaders());
        }

        $this->assertNotContains('NotSkippedHeader', $this->configuration->loggingSkipHeaders());
    }

    public function test_can_remove_skipped_headers() : void
    {
        $this->addSkippedHeaders();

        $this->configuration->loggingRemoveSkippedHeader($this->headers[0]);
        $this->configuration->loggingRemoveSkippedHeader($this->headers[1]);

        $this->assertNotContains($this->headers[0], $this->configuration->loggingSkipHeaders());
        $this->assertNotContains($this->headers[1], $this->configuration->loggingSkipHeaders());

        $this->assertContains($this->headers[2], $this->configuration->loggingSkipHeaders());
    }

    public function test_can_skip_api_logging() : void
    {
        $this->addSkippedApis();

        foreach (array_keys($this->apis) as $api) {
            $this->assertFalse($this->configuration->loggingEnabled($api));
        }

        $this->assertTrue($this->configuration->loggingEnabled('NotSkippedAPI'));
    }

    public function test_can_enable_api_logging() : void
    {
        $this->addSkippedApis();

        $apis = array_keys($this->apis);

        $this->configuration->setEnableLogging($apis[0]);

        $this->assertTrue($this->configuration->loggingEnabled($apis[0]));
        $this->assertFalse($this->configuration->loggingEnabled($apis[1]));
        $this->assertFalse($this->configuration->loggingEnabled($apis[2]));
    }

    public function test_can_enable_api_logging_with_operations() : void
    {
        $this->addSkippedApiOperations();

        $apiToEnable = array_keys($this->apis)[0];

        $this->configuration->setEnableLogging($apiToEnable);

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                if ($api === $apiToEnable) {
                    $this->assertTrue($this->configuration->loggingEnabled($api, $apiOperation));

                    continue;
                }

                $this->assertFalse($this->configuration->loggingEnabled($api, $apiOperation));
            }
        }
    }

    public function test_can_skip_api_logging_operation() : void
    {
        $this->addSkippedApiOperations();

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                $this->assertFalse($this->configuration->loggingEnabled($api, $apiOperation));
            }
        }

        foreach (\array_keys($this->apis) as $api) {
            $this->assertTrue($this->configuration->loggingEnabled($api, 'NotSkippedOperation'));
        }
    }

    public function test_can_enable_api_logging_operation() : void
    {
        $this->addSkippedApiOperations();

        $apiToEnable = array_keys($this->apis)[0];
        $apiOperationToEnable = $this->apis[$apiToEnable][1];

        $this->configuration->setEnableLogging($apiToEnable, $apiOperationToEnable);

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                if ($api === $apiToEnable && $apiOperation === $apiOperationToEnable) {
                    $this->asserttrue($this->configuration->loggingEnabled($api, $apiOperation));

                    continue;
                }

                $this->assertFalse($this->configuration->loggingEnabled($api, $apiOperation));
            }
        }
    }

    private function addSkippedHeaders(): void
    {
        foreach ($this->headers as $header) {
            $this->configuration->loggingAddSkippedHeader($header);
        }
    }

    private function addSkippedApis(): void
    {
        foreach (array_keys($this->apis) as $api) {
            $this->configuration->setSkipLogging($api);
        }
    }

    private function addSkippedApiOperations(): void
    {
        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                $this->configuration->setSkipLogging($api, $apiOperation);
            }
        }
    }
}
