<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

final class AccessToken
{
    private string $token;

    private string $type;

    private int $expiresIn;

    public function __construct(string $token, string $type, int $expiresIn)
    {
        $this->token = $token;
        $this->type = $type;
        $this->expiresIn = $expiresIn;
    }

    public static function fromJSON(string $tokenString) : self
    {
        $data = \json_decode($tokenString, true, 512, JSON_THROW_ON_ERROR);

        return new self(
            $data['access_token'],
            $data['token_type'],
            $data['expires_in'],
        );
    }

    public function token() : string
    {
        return $this->token;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function expiresIn() : int
    {
        return $this->expiresIn;
    }
}
