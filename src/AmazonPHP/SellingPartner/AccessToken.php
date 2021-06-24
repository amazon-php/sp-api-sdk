<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

final class AccessToken
{
    private string $accessToken;

    private string $refreshToken;

    private string $type;

    private int $expiresIn;

    private string $grantType;

    public function __construct(string $accessToken, string $refreshToken, string $type, int $expiresIn, string $grantType)
    {
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->type = $type;
        $this->expiresIn = $expiresIn;
        $this->grantType = $grantType;
    }

    public static function fromJSON(string $tokenString, string $grantType) : self
    {
        $data = \json_decode($tokenString, true, 512, JSON_THROW_ON_ERROR);

        return new self(
            $data['access_token'],
            $grantType === 'client_credentials' ? '' : $data['refresh_token'],
            $data['token_type'],
            $data['expires_in'],
            $grantType
        );
    }

    public function token() : string
    {
        return $this->accessToken;
    }

    public function refreshToken() : string
    {
        return $this->refreshToken;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function expiresIn() : int
    {
        return $this->expiresIn;
    }

    public function grantType() : string
    {
        return $this->grantType;
    }
}
