<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Configuration;

use Psr\Log\LogLevel;

final class LoggerConfiguration
{
    private string $defaultLogLevel;

    /**
     * @var array<string, array<string, string>>
     */
    private array $customLogLevels;

    /**
     * @var array<string>
     */
    private array $skippedAPIs;

    /**
     * @var array<string, array<string>>
     */
    private array $skippedAPIOperations;

    /**
     * @var array<string>
     */
    private array $skipHttpHeaders;

    public function __construct(string $defaultLogLevel = LogLevel::DEBUG)
    {
        $this->defaultLogLevel = $defaultLogLevel;
        $this->customLogLevels = [];
        $this->skippedAPIs = [];
        $this->skippedAPIOperations = [];
        $this->skipHttpHeaders = [
            'authorization',
            'x-amz-access-token',
            'proxy-authorization',
            'www-authenticate',
            'proxy-authenticate',
        ];
    }

    public function setDefaultLogLevel(string $logLevel) : self
    {
        $this->defaultLogLevel = $logLevel;

        return $this;
    }

    public function setLogLevel(string $api, string $operation, string $logLevel) : self
    {
        if (!isset($this->customLogLevels[$api])) {
            $this->customLogLevels[$api] = [];
        }

        if (!\in_array($operation, $this->customLogLevels[$api], true)) {
            $this->customLogLevels[$api][$operation] = $logLevel;
        }

        return $this;
    }

    public function logLevel(string $api, string $operation) : string
    {
        if (isset($this->customLogLevels[$api][$operation])) {
            return $this->customLogLevels[$api][$operation];
        }

        return $this->defaultLogLevel;
    }

    public function skipAPI(string $api) : self
    {
        if (!\in_array($api, $this->skippedAPIs, true)) {
            $this->skippedAPIs[] = $api;
        }

        return $this;
    }

    public function skipAPIOperation(string $api, string $operation) : self
    {
        if (!\in_array($api, $this->skippedAPIOperations, true)) {
            $this->skippedAPIOperations[$api] = [];
        }

        if (!\in_array($operation, $this->skippedAPIOperations[$api], true)) {
            $this->skippedAPIOperations[$api][] = $operation;
        }

        return $this;
    }

    public function isSkipped(string $api, string $operation) : bool
    {
        if (\in_array($api, $this->skippedAPIs, true)) {
            return true;
        }

        if (isset($this->skippedAPIOperations[$api][$operation])) {
            return true;
        }

        return false;
    }

    public function addSkippedHeader(string $headerName) : self
    {
        if (!\in_array(\strtolower($headerName), $this->skipHttpHeaders, true)) {
            $this->skipHttpHeaders[] = \strtolower($headerName);
        }

        return $this;
    }

    /**
     * @return string[]
     */
    public function skipHeaders() : array
    {
        return $this->skipHttpHeaders;
    }
}
