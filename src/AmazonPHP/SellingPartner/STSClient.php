<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\STSClient\Credentials;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class STSClient
{
    private ClientInterface $client;

    private RequestFactoryInterface $requestFactory;

    private StreamFactoryInterface $streamFactory;

    public function __construct(
        ClientInterface $client,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory
    ) {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
    }

    public function assumeRole(string $key, string $secret, string $roleARN) : Credentials
    {
        $request = $this->requestFactory->createRequest('POST', 'https://sts.amazonaws.com/')
            ->withBody(
                $this->streamFactory->createStream(
                    'Action=AssumeRole'
                    . '&DurationSeconds=3600'
                    . '&RoleArn=' . $roleARN
                    . '&RoleSessionName=' . 'sp-api-php-' . \time()
                    . '&Version=2011-06-15',
                )
            )
            ->withHeader('Accept', ['application/json'])
            ->withHeader('Content-Type', ['application/x-www-form-urlencoded']);

        // us-east-1 is the only region that works for STS
        $response = $this->client->sendRequest(
            HttpSignatureHeaders::raw($key, $secret, 'us-east-1', $request)
        );

        return Credentials::fromJSON((string) $response->getBody());
    }
}
