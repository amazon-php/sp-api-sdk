<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

final class Configuration
{
    private string $lwaClientID;

    private string $lwaClientSecret;

    private string $accessKey;

    private string $secretKey;

    private string $userAgent;

    private string $tmpFolderPath;

    private function __construct(string $lwaClientID, string $lwaClientSecret, string $accessKey, string $secretKey)
    {
        $this->lwaClientID = $lwaClientID;
        $this->lwaClientSecret = $lwaClientSecret;
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#include-a-user-agent-header-in-all-requests
        $this->userAgent = 'Library amazon-php/sp-api-php (language=PHP ' . \phpversion() . '; Platform=' . \php_uname('s') . ' ' . \php_uname('r') . ' ' . \php_uname('m') . ')';
        $this->tmpFolderPath = \sys_get_temp_dir();
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

        return 'https://' . $this->apiHost($awsRegion);
    }

    public function apiHost(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return 'sellingpartnerapi-eu.amazon.com';
            case Regions::FAR_EAST:
                return 'sellingpartnerapi-fe.amazon.com';
            case Regions::NORTH_AMERICA:
                return 'sellingpartnerapi-na.amazon.com';

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
}
