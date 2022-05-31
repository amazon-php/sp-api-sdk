<?php

namespace AmazonPHP\Test\AmazonPHP\SellingPartner\Tests\Unit;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\Regions;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\TestCase;

class HttpSignatureHeadersTest extends TestCase
{
    private ?Configuration $configuration;

    private ?AccessToken $accessToken;

    protected function setUp(): void
    {
        $this->configuration = Configuration::forIAMUser('testId', 'testSecret', 'testAccessKey', 'testSecretKey');
        $this->accessToken   = new AccessToken('testAccessToken', 'testRefreshToken', 'bearer', 3600, 'refresh_token');
    }

    protected function tearDown(): void
    {
        $this->configuration = null;
        $this->accessToken   = null;
    }

    public function test_converts_header_names_to_lowercase(): void
    {
        $request = new Request(
            'GET',
            'https://sellingpartnerapi-fe.amazon.com/sellers/v1/marketplaceParticipations',
            // both guzzlehttp/psr7 and nyholm/psr7 infer the host from the URI as "Host" (capitalized).
            // explicitly specifying uppercase in-case behaviour of the PSR7 library used in the test changes.
            ['Host' => ['sellingpartnerapi-fe.amazon.com']]
        );
        $signedRequest = HttpSignatureHeaders::forConfig(
            $this->configuration,
            $this->accessToken,
            Regions::FAR_EAST,
            $request
        );

        $this->assertMatchesRegularExpression(
            '#^AWS4-HMAC-SHA256 Credential=testAccessKey/20220531/us-west-2/execute-api/aws4_request, ' .
            'SignedHeaders=host;x-amz-access-token;x-amz-date, ' .
            'Signature=[0-9a-f]{64}$#',
            $signedRequest->getHeader('Authorization')[0]
        );
    }
}
