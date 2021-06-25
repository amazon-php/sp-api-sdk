<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Configuration\LoggerConfiguration;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

final class Configuration
{
    private string $lwaClientID;

    private string $lwaClientSecret;

    private string $accessKey;

    private string $secretKey;

    private string $userAgent;

    private string $tmpFolderPath;

    private LoggerConfiguration $loggerConfiguration;

    private Extensions $extensions;

    public function __construct(
        string $lwaClientID,
        string $lwaClientSecret,
        string $accessKey,
        string $secretKey,
        Extensions $extensions = null,
        LoggerConfiguration $loggerConfiguration = null
    ) {
        $this->lwaClientID = $lwaClientID;
        $this->lwaClientSecret = $lwaClientSecret;
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#include-a-user-agent-header-in-all-requests
        $this->userAgent = 'Library amazon-php/sp-api-php (language=PHP ' . \phpversion() . '; Platform=' . \php_uname('s') . ' ' . \php_uname('r') . ' ' . \php_uname('m') . ')';
        $this->tmpFolderPath = \sys_get_temp_dir();
        $this->loggerConfiguration = $loggerConfiguration ? $loggerConfiguration : new LoggerConfiguration();
        $this->extensions = $extensions ? $extensions : new Extensions();
    }

    public static function forIAMUser(string $clientId, string $clientSecret, string $accessKey, string $secretKey) : self
    {
        return new self($clientId, $clientSecret, $accessKey, $secretKey);
    }

    public static function forIAMRole(string $clientId, string $clientSecret, string $accessKey, string $secretKey, string $roleARN) : void
    {
        throw new \RuntimeException('IAM Role authentication is not supported yet');
    }

    public function lwaClientID() : string
    {
        return $this->lwaClientID;
    }

    public function lwaClientSecret() : string
    {
        return $this->lwaClientSecret;
    }

    public function apiURL(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return Regions::EUROPE_URL;
            case Regions::FAR_EAST:
                return Regions::FAR_EAST_URL;
            case Regions::NORTH_AMERICA:
                return Regions::NORTH_AMERICA_URL;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function apiHost(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return Regions::EUROPE_HOST;
            case Regions::FAR_EAST:
                return Regions::FAR_EAST_HOST;
            case Regions::NORTH_AMERICA:
                return Regions::NORTH_AMERICA_HOST;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function accessKey() : string
    {
        return $this->accessKey;
    }

    public function secretKey() : string
    {
        return $this->secretKey;
    }

    public function userAgent() : string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * SDK's that are receiving files will use this path to write the file there.
     */
    public function setTmpFolderPath(string $path) : self
    {
        $this->tmpFolderPath = $path;

        return $this;
    }

    public function tmpFolderPath() : string
    {
        return $this->tmpFolderPath;
    }

    public function logLevel(string $api, string $operation) : string
    {
        return $this->loggerConfiguration->logLevel($api, $operation);
    }

    public function setDefaultLogLevel(string $logLevel) : self
    {
        $this->loggerConfiguration->setDefaultLogLevel($logLevel);

        return $this;
    }

    public function setLogLevel(string $api, string $operationMethod, string $logLevel) : self
    {
        $this->loggerConfiguration->setLogLevel($api, $operationMethod, $logLevel);

        return $this;
    }

    public function setSkipLogging(string $api, string $operation = null) : self
    {
        if ($operation !== null) {
            $this->loggerConfiguration->skipAPIOperation($api, $operation);
        } else {
            $this->loggerConfiguration->skipAPI($api);
        }

        return $this;
    }

    public function loggingEnabled(string $api, string $operation) : bool
    {
        return !$this->loggerConfiguration->isSkipped($api, $operation);
    }

    public function loggingAddSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->addSkippedHeader($headerName);

        return $this;
    }

    /**
     * @return string[]
     */
    public function loggingSkipHeaders() : array
    {
        return $this->loggerConfiguration->skipHeaders();
    }

    public function registerExtension(Extension $extension) : void
    {
        $this->extensions->register($extension);
    }

    public function extensions() : Extensions
    {
        return $this->extensions;
    }
}
