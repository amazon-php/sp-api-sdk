<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Configuration\LoggerConfiguration;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\IdGenerator\UniqidGenerator;
use AmazonPHP\SellingPartner\STSClient\Credentials;

final class Configuration
{
    private string $userAgent;

    private string $tmpFolderPath;

    private readonly LoggerConfiguration $loggerConfiguration;

    private readonly Extensions $extensions;

    private bool $sandbox = false;

    private IdGenerator $idGenerator;

    public function __construct(
        private readonly string $lwaClientID,
        private readonly string $lwaClientSecret,
        private string $accessKey,
        private string $secretKey,
        private ?string $securityToken = null,
        Extensions $extensions = null,
        LoggerConfiguration $loggerConfiguration = null
    ) {
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#include-a-user-agent-header-in-all-requests
        $this->userAgent = 'Library amazon-php/sp-api-php (language=PHP ' . \phpversion() . '; Platform=' . \php_uname('s') . ' ' . \php_uname('r') . ' ' . \php_uname('m') . ')';
        $this->tmpFolderPath = \sys_get_temp_dir();
        $this->loggerConfiguration = $loggerConfiguration ?: new LoggerConfiguration();
        $this->extensions = $extensions ?: new Extensions();
        $this->idGenerator = new UniqidGenerator();
    }

    public static function forIAMUser(string $clientId, string $clientSecret, string $accessKey, string $secretKey) : self
    {
        return new self($clientId, $clientSecret, $accessKey, $secretKey, null);
    }

    public static function forIAMRole(string $clientId, string $clientSecret, Credentials $credentials) : self
    {
        return new self($clientId, $clientSecret, $credentials->accessKeyId(), $credentials->secretAccessKey(), $credentials->sessionToken());
    }

    public function updateIAMRoleCredentials(Credentials $credentials) : self
    {
        $this->accessKey = $credentials->accessKeyId();
        $this->secretKey = $credentials->secretAccessKey();
        $this->securityToken = $credentials->sessionToken();

        return $this;
    }

    public function lwaClientID() : string
    {
        return $this->lwaClientID;
    }

    public function lwaClientSecret() : string
    {
        return $this->lwaClientSecret;
    }

    public function securityToken() : ?string
    {
        return $this->securityToken;
    }

    public function apiURL(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        return match ($awsRegion) {
            Regions::EUROPE => $this->sandbox ? Regions::EUROPE_SANDBOX_URL : Regions::EUROPE_URL,
            Regions::FAR_EAST => $this->sandbox ? Regions::FAR_EAST_SANDBOX_URL : Regions::FAR_EAST_URL,
            Regions::NORTH_AMERICA => $this->sandbox ? Regions::NORTH_AMERICA_SANDBOX_URL : Regions::NORTH_AMERICA_URL,
            default => throw new \RuntimeException('unknown region'),
        };
    }

    public function apiHost(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        return match ($awsRegion) {
            Regions::EUROPE => $this->sandbox ? Regions::EUROPE_SANDBOX_HOST : Regions::EUROPE_HOST,
            Regions::FAR_EAST => $this->sandbox ? Regions::FAR_EAST_SANDBOX_HOST : Regions::FAR_EAST_HOST,
            Regions::NORTH_AMERICA => $this->sandbox ? Regions::NORTH_AMERICA_SANDBOX_HOST : Regions::NORTH_AMERICA_HOST,
            default => throw new \RuntimeException('Unknown region: ' . $awsRegion),
        };
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

            return $this;
        }

        $this->loggerConfiguration->skipAPI($api);

        return $this;
    }

    public function setEnableLogging(string $api, string $operation = null) : self
    {
        if ($operation !== null) {
            $this->loggerConfiguration->enableAPIOperation($api, $operation);

            return $this;
        }

        $this->loggerConfiguration->enableAPI($api);

        return $this;
    }

    public function loggingEnabled(string $api, string $operation = null) : bool
    {
        return !$this->loggerConfiguration->isSkipped($api, $operation);
    }

    public function loggingAddSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->addSkippedHeader($headerName);

        return $this;
    }

    public function loggingRemoveSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->removeSkippedHeader($headerName);

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

    public function isSandbox() : bool
    {
        return $this->sandbox;
    }

    public function setSandbox() : self
    {
        $this->sandbox = true;

        return $this;
    }

    public function setIdGenerator(IdGenerator $idGenerator) : self
    {
        $this->idGenerator = $idGenerator;

        return $this;
    }

    public function setProduction() : self
    {
        $this->sandbox = false;

        return $this;
    }

    public function idGenerator() : IdGenerator
    {
        return $this->idGenerator;
    }
}
