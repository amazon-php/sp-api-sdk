<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class Extensions
{
    /**
     * @var Extension[]
     */
    private array $extensions;

    public function __construct(Extension ...$extensions)
    {
        $this->extensions = $extensions;
    }

    public function register(Extension $extension) : void
    {
        $this->extensions[] = $extension;
    }

    public function preRequest(string $api, string $operation, RequestInterface $request) : void
    {
        foreach ($this->extensions as $extension) {
            $extension->preRequest($api, $operation, $request);
        }
    }

    public function postRequest(string $api, string $operation, RequestInterface $request, ResponseInterface $response) : void
    {
        foreach ($this->extensions as $extension) {
            $extension->postRequest($api, $operation, $request, $response);
        }
    }
}
