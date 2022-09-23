<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\STSClient\Credentials;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class STSClient
{
    public function __construct(private readonly ClientInterface $client, private readonly RequestFactoryInterface $requestFactory, private readonly StreamFactoryInterface $streamFactory)
    {
    }

    /**
     * @throws ApiException
     * @throws ClientExceptionInterface
     * @throws \JsonException
     */
    public function assumeRole(string $key, string $secret, string $roleARN) : Credentials
    {
        $action = 'AssumeRole';

        $request = $this->requestFactory->createRequest('POST', 'https://sts.amazonaws.com/')
            ->withBody(
                $this->streamFactory->createStream(
                    'Action=' . $action
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
            HttpSignatureHeaders::raw($key, $secret, Regions::NORTH_AMERICA, $request)
        );

        $statusCode = $response->getStatusCode();
        $responseBody = (string) $response->getBody();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error calling the Amazon STS API %s Action (%s)',
                    $statusCode,
                    $action,
                    $response->getReasonPhrase()
                ),
                $statusCode,
                $response->getHeaders(),
                $responseBody
            );
        }

        return Credentials::fromJSON($responseBody);
    }
}
