<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\ApiException;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;

final class OAuth
{
    private ClientInterface $client;

    private HttpFactory $requestFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(
        ClientInterface $client,
        HttpFactory $requestFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws ApiException
     */
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

        if ($this->configuration->loggingEnabled('OAuth', 'exchangeRefreshToken')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'exchangeRefreshToken'),
                'Amazon Selling Partner API pre request',
                [
                    'api' => 'OAuth',
                    'operation' => 'exchangeRefreshToken',
                    'grant_type' => 'refresh_token',
                    'client_id' => $this->configuration->lwaClientID(),
                ]
            );
        }

        $response = $this->client->sendRequest($request);

        if ($this->configuration->loggingEnabled('OAuth', 'exchangeRefreshToken')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'exchangeRefreshToken'),
                'Amazon Selling Partner API post request',
                [
                    'api' => 'OAuth',
                    'operation' => 'exchangeRefreshToken',
                    'grant_type' => 'refresh_token',
                    'client_id' => $this->configuration->lwaClientID(),
                    'response_body' => $response->getStatusCode() !== 200 ? (string) $response->getBody() : '',
                    'response_status_code' => $response->getStatusCode(),
                ]
            );
        }

        if ($response->getStatusCode() !== 200) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $response->getStatusCode(),
                    (string) $request->getUri()
                ),
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return AccessToken::fromJSON((string) $response->getBody(), 'refresh_token');
    }

    /**
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws ApiException
     */
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

        if ($this->configuration->loggingEnabled('OAuth', 'exchangeLwaCode')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'exchangeLwaCode'),
                'Amazon Selling Partner API pre request',
                [
                    'api' => 'OAuth',
                    'operation' => 'exchangeLwaCode',
                    'grant_type' => 'authorization_code',
                    'client_id' => $this->configuration->lwaClientID(),
                ]
            );
        }

        $response = $this->client->sendRequest($request);

        if ($this->configuration->loggingEnabled('OAuth', 'exchangeLwaCode')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'exchangeLwaCode'),
                'Amazon Selling Partner API post request',
                [
                    'api' => 'OAuth',
                    'operation' => 'exchangeLwaCode',
                    'grant_type' => 'authorization_code',
                    'client_id' => $this->configuration->lwaClientID(),
                    'response_body' => $response->getStatusCode() !== 200 ? (string) $response->getBody() : '',
                    'response_status_code' => $response->getStatusCode(),
                ]
            );
        }

        if ($response->getStatusCode() !== 200) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $response->getStatusCode(),
                    (string) $request->getUri()
                ),
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return AccessToken::fromJSON((string) $response->getBody(), 'authorization_code');
    }

    /**
     * @throws \Psr\Http\Client\ClientExceptionInterface
     * @throws ApiException
     */
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

        if ($this->configuration->loggingEnabled('OAuth', 'clientCredentials')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'clientCredentials'),
                'Amazon Selling Partner API pre request',
                [
                    'api' => 'OAuth',
                    'operation' => 'clientCredentials',
                    'grant_type' => 'client_credentials',
                    'client_id' => $this->configuration->lwaClientID(),
                ]
            );
        }

        $response = $this->client->sendRequest($request);

        if ($this->configuration->loggingEnabled('OAuth', 'clientCredentials')) {
            $this->logger->log(
                $this->configuration->logLevel('OAuth', 'clientCredentials'),
                'Amazon Selling Partner API post request',
                [
                    'api' => 'OAuth',
                    'operation' => 'clientCredentials',
                    'grant_type' => 'client_credentials',
                    'client_id' => $this->configuration->lwaClientID(),
                    'response_body' => $response->getStatusCode() !== 200 ? (string) $response->getBody() : '',
                    'response_status_code' => $response->getStatusCode(),
                ]
            );
        }

        if ($response->getStatusCode() !== 200) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $response->getStatusCode(),
                    (string) $request->getUri()
                ),
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return AccessToken::fromJSON((string) $response->getBody(), 'client_credentials');
    }
}
