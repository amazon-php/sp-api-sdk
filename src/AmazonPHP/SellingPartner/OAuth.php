<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Client\ClientInterface;

final class OAuth
{
    private ClientInterface $client;

    private HttpFactory $requestFactory;

    private Configuration $configuration;

    private string $refreshToken;

    private ?AccessToken $accessToken = null;

    public function __construct(
        ClientInterface $client,
        HttpFactory $requestFactory,
        Configuration $configuration,
        string $refreshToken
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->refreshToken = $refreshToken;
    }

    public function accessToken() : AccessToken
    {
        if ($this->accessToken === null) {
            if ($this->refreshToken) {
                $this->accessToken = $this->exchangeRefresh();
            }
        }

        return $this->accessToken;
    }

    public function client(): ClientInterface
    {
        return $this->client;
    }

    public function requestFactory(): HttpFactory
    {
        return $this->requestFactory;
    }

    public function configuration(): Configuration
    {
        return $this->configuration;
    }

    private function exchangeRefresh() : AccessToken
    {
        $request = $this->requestFactory->createRequest('POST', 'https://api.amazon.com/auth/o2/token')
            ->withBody(
                $this->requestFactory->createStreamFromString(
                    \json_encode(
                        [
                            'grant_type' => 'refresh_token',
                            'refresh_token' => $this->refreshToken,
                            'client_id' => $this->configuration->clientId(),
                            'client_secret' => $this->configuration->clientSecret(),
                        ]
                    )
                )
            )
            ->withHeader('Accept', ['application/json'])
            ->withHeader('Content-Type', ['application/json']);

        $response = $this->client->sendRequest($request);

        return AccessToken::fromJSON((string) $response->getBody());
    }
}