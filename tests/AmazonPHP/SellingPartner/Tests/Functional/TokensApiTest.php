<?php

declare(strict_types=1);

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Functional;

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Model\Tokens\CreateRestrictedDataTokenRequest;
use AmazonPHP\SellingPartner\Model\Tokens\RestrictedResource;

final class TokensApiTest extends SandboxTestCase
{
    public function test_sandbox_create_restricted_data_token() : void
    {
        $marketplace = Marketplace::US();

        $response = $this->sellingPartnerSDK->tokens()->createRestrictedDataToken(
            $this->sellingPartnerSDK->oAuth()->exchangeRefreshToken($this->sellerRefreshToken),
            $marketplace->region(),
            new CreateRestrictedDataTokenRequest([
                'restricted_resources' => [
                    new RestrictedResource([
                        'method' => 'GET',
                        'path' => '/orders/v0/orders/943-12-123434/address',
                        'data_elements' => ['buyerInfo', 'shippingAddress']
                    ]),
                ],
            ])
        );

        $this->assertEquals("Atz.sprdt|AODFNESLjAsAhRmHjNgHpi0U-Dme37rR6CuUpSR", $response->getRestrictedDataToken());
        $this->assertEquals(3600, $response->getExpiresIn());
    }
}
