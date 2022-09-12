<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Configuration;

use Psr\Log\LogLevel;

final class LoggerConfiguration
{
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

    public function __construct(private string $defaultLogLevel = LogLevel::DEBUG)
    {
        $this->customLogLevels = [];
        $this->skippedAPIs = [];
        $this->skippedAPIOperations = [];
        $this->skipHttpHeaders = [
            'authorization',
            'x-amz-access-token',
            'x-amz-security-token',
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

    public function enableAPI(string $api) : self
    {
        $apiKey = \array_search($api, $this->skippedAPIs, true);

        if ($apiKey !== false) {
            unset($this->skippedAPIs[$apiKey]);
        }

        unset($this->skippedAPIOperations[$api]);

        return $this;
    }

    public function skipAPIOperation(string $api, string $operation) : self
    {
        $this->skippedAPIOperations[$api] ??= [];

        if (!\in_array($operation, $this->skippedAPIOperations[$api], true)) {
            $this->skippedAPIOperations[$api][] = $operation;
        }

        return $this;
    }

    public function enableAPIOperation(string $api, string $operation) : self
    {
        if (!isset($this->skippedAPIOperations[$api])) {
            return $this;
        }

        $operationKey = \array_search($operation, $this->skippedAPIOperations[$api], true);

        if ($operationKey !== false) {
            unset($this->skippedAPIOperations[$api][$operationKey]);
        }

        if ($this->skippedAPIOperations[$api] === []) {
            unset($this->skippedAPIOperations[$api]);
        }

        return $this;
    }

    public function isSkipped(string $api, string $operation = null) : bool
    {
        if (\in_array($api, $this->skippedAPIs, true)) {
            return true;
        }

        return \in_array($operation, $this->skippedAPIOperations[$api] ?? [], true);
    }

    public function addSkippedHeader(string $headerName) : self
    {
        if (!\in_array(\strtolower($headerName), $this->skipHttpHeaders, true)) {
            $this->skipHttpHeaders[] = \strtolower($headerName);
        }

        return $this;
    }

    public function removeSkippedHeader(string $headerName) : self
    {
        $headerKey = \array_search(\strtolower($headerName), $this->skipHttpHeaders, true);

        if ($headerKey !== false) {
            unset($this->skipHttpHeaders[$headerKey]);
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
