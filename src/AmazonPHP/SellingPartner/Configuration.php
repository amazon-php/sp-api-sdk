<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

final class Configuration
{
    private string $clientId;

    private string $clientSecret;

    private string $region;

    private string $accessKey;

    private string $secretKey;

    private string $userAgent;

    private function __construct(string $clientId, string $clientSecret, string $region, string $accessKey, string $secretKey)
    {
        if (!Regions::isValid($region)) {
            throw new InvalidArgumentException("Invalid region {$region}");
        }

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->region = $region;
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        $this->userAgent = 'norberttech/sp-api-php';
    }

    public static function forIAMUser(string $clientId, string $clientSecret, string $region, string $accessKey, string $secretKey) : self
    {
        return new self($clientId, $clientSecret, $region, $accessKey, $secretKey);
    }

    public static function forIAMRole(string $clientId, string $clientSecret, string $region, string $accessKey, string $secretKey, string $roleARN) : self
    {
        throw new \RuntimeException("IAM Role authentication is not supported yet");
    }

    public function clientId(): string
    {
        return $this->clientId;
    }

    public function clientSecret(): string
    {
        return $this->clientSecret;
    }

    public function region(): string
    {
        return $this->region;
    }

    public function apiURL() : string
    {
        return 'https://' . $this->apiHost();
    }

    public function apiHost() : string
    {
        switch ($this->region) {
            case Regions::EUROPE:
                return 'sellingpartnerapi-eu.amazon.com';
            case Regions::FAR_EAST:
                return 'sellingpartnerapi-fe.amazon.com';
            case Regions::NORTH_AMERICA:
                return 'sellingpartnerapi-na.amazon.com';
            default:
                throw new \RuntimeException("unknown region");
        }
    }

    public function accessKey(): string
    {
        return $this->accessKey;
    }

    public function secretKey(): string
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
}
