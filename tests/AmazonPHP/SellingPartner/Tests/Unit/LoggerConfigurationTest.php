<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\Configuration\LoggerConfiguration;
use PHPUnit\Framework\TestCase;

final class LoggerConfigurationTest extends TestCase
{
    private array $headers;

    private array $apis;

    private ?LoggerConfiguration $loggerConfiguration;

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
    }

    protected function tearDown() : void
    {
        $this->headers = [];
        $this->apis = [];
        $this->loggerConfiguration = null;
    }

    public function test_can_skip_headers() : void
    {
        $this->addSkippedHeaders();

        foreach ($this->headers as $header) {
            $this->assertContains($header, $this->loggerConfiguration->skipHeaders());
        }

        $this->assertNotContains('NotSkippedHeader', $this->loggerConfiguration->skipHeaders());
    }

    public function test_can_remove_skipped_headers() : void
    {
        $this->addSkippedHeaders();

        $this->loggerConfiguration->removeSkippedHeader($this->headers[0]);
        $this->loggerConfiguration->removeSkippedHeader($this->headers[1]);

        $this->assertNotContains($this->headers[0], $this->loggerConfiguration->skipHeaders());
        $this->assertNotContains($this->headers[1], $this->loggerConfiguration->skipHeaders());

        $this->assertContains($this->headers[2], $this->loggerConfiguration->skipHeaders());
    }

    public function test_can_skip_api_logging() : void
    {
        $this->addSkippedApis();

        foreach (array_keys($this->apis) as $api) {
            $this->assertTrue($this->loggerConfiguration->isSkipped($api));
        }

        $this->assertFalse($this->loggerConfiguration->isSkipped('NotSkippedAPI'));
    }

    public function test_can_enable_api_logging() : void
    {
        $this->addSkippedApis();

        $apis = array_keys($this->apis);

        $this->loggerConfiguration->enableAPI($apis[0]);

        $this->assertFalse($this->loggerConfiguration->isSkipped($apis[0]));
        $this->assertTrue($this->loggerConfiguration->isSkipped($apis[1]));
        $this->assertTrue($this->loggerConfiguration->isSkipped($apis[2]));
    }

    public function test_can_enable_api_logging_with_operations() : void
    {
        $this->addSkippedApiOperations();

        $apiToEnable = array_keys($this->apis)[0];

        $this->loggerConfiguration->enableAPI($apiToEnable);

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                if ($api === $apiToEnable) {
                    $this->assertFalse($this->loggerConfiguration->isSkipped($api, $apiOperation));

                    continue;
                }

                $this->assertTrue($this->loggerConfiguration->isSkipped($api, $apiOperation));
            }
        }
    }

    public function test_can_skip_api_logging_operation() : void
    {
        $this->addSkippedApiOperations();

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                $this->assertTrue($this->loggerConfiguration->isSkipped($api, $apiOperation));
            }
        }

        foreach (\array_keys($this->apis) as $api) {
            $this->assertFalse($this->loggerConfiguration->isSkipped($api, 'NotSkippedOperation'));
        }
    }

    public function test_can_enable_api_logging_operation() : void
    {
        $this->addSkippedApiOperations();

        $apiToEnable = array_keys($this->apis)[0];
        $apiOperationToEnable = $this->apis[$apiToEnable][1];

        $this->loggerConfiguration->enableAPIOperation($apiToEnable, $apiOperationToEnable);

        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                if ($api === $apiToEnable && $apiOperation === $apiOperationToEnable) {
                    $this->assertFalse($this->loggerConfiguration->isSkipped($api, $apiOperation));

                    continue;
                }

                $this->assertTrue($this->loggerConfiguration->isSkipped($api, $apiOperation));
            }
        }
    }

    private function addSkippedHeaders(): void
    {
        foreach ($this->headers as $header) {
            $this->loggerConfiguration->addSkippedHeader($header);
        }
    }

    private function addSkippedApis(): void
    {
        foreach (array_keys($this->apis) as $api) {
            $this->loggerConfiguration->skipAPI($api);
        }
    }

    private function addSkippedApiOperations(): void
    {
        foreach ($this->apis as $api => $apiOperations) {
            foreach ($apiOperations as $apiOperation) {
                $this->loggerConfiguration->skipAPIOperation($api, $apiOperation);
            }
        }
    }
}
