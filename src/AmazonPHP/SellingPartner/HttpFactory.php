<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

final class HttpFactory
{
    public function __construct(private readonly RequestFactoryInterface $requestFactory, private readonly StreamFactoryInterface $streamFactory)
    {
    }

    public function createRequest(string $method, string $url) : RequestInterface
    {
        return $this->requestFactory->createRequest($method, $url);
    }

    public function createStreamFromString(string $content) : StreamInterface
    {
        return $this->streamFactory->createStream($content);
    }
}
