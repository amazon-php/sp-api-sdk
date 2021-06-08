<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Client\ClientInterface;

final class OAuth
{
    private ClientInterface $client;

    private HttpFactory $requestFactory;

    private Configuration $configuration;

    public function __construct(
        ClientInterface $client,
        HttpFactory $requestFactory,
        Configuration $configuration
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->configuration = $configuration;
    }

    public function exchangeRefreshToken(string $refreshToken) : AccessToken
    {
        $request = $this->requestFactory->createRequest('POST', 'https://api.amazon.com/auth/o2/token')
            ->withBody(
                $this->requestFactory->createStreamFromString(
                    \json_encode(
                        [
                            'grant_type' => 'refresh_token',
                            'refresh_token' => $refreshToken,
                            'client_id' => $this->configuration->lwaClientID(),
                            'client_secret' => $this->configuration->lwaClientSecret(),
                        ],
                        JSON_THROW_ON_ERROR
                    )
                )
            )
            ->withHeader('Accept', ['application/json'])
            ->withHeader('Content-Type', ['application/json']);

        $response = $this->client->sendRequest($request);

        return AccessToken::fromJSON((string) $response->getBody(), 'refresh_token');
    }

    public function exchangeLwaCode(string $lwaCode) : AccessToken
    {
        $request = $this->requestFactory->createRequest('POST', 'https://api.amazon.com/auth/o2/token')
            ->withBody(
                $this->requestFactory->createStreamFromString(
                    \json_encode(
                        [
                            'grant_type' => 'authorization_code',
                            'code' => $lwaCode,
                            'client_id' => $this->configuration->lwaClientID(),
                            'client_secret' => $this->configuration->lwaClientSecret(),
                        ],
                        JSON_THROW_ON_ERROR
                    )
                )
            )
            ->withHeader('Accept', ['application/json'])
            ->withHeader('Content-Type', ['application/json']);

        $response = $this->client->sendRequest($request);

        return AccessToken::fromJSON((string) $response->getBody(), 'authorization_code');
    }

    public function clientCredentials(string $scope) : AccessToken
    {
        $request = $this->requestFactory->createRequest('POST', 'https://api.amazon.com/auth/o2/token')
            ->withBody(
                $this->requestFactory->createStreamFromString(
                    \json_encode(
                        [
                            'grant_type' => 'client_credentials',
                            'scope' => $scope,
                            'client_id' => $this->configuration->lwaClientID(),
                            'client_secret' => $this->configuration->lwaClientSecret(),
                        ],
                        JSON_THROW_ON_ERROR
                    )
                )
            )
            ->withHeader('Accept', ['application/json'])
            ->withHeader('Content-Type', ['application/json']);

        $response = $this->client->sendRequest($request);

        return AccessToken::fromJSON((string) $response->getBody(), 'client_credentials');
    }
}
