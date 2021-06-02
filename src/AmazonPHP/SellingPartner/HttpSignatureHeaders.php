<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Message\RequestInterface;

final class HttpSignatureHeaders
{
    private static array $cache = [];

    public static function forIAMUser(
        Configuration $config,
        AccessToken $accessToken,
        string $region,
        RequestInterface $request
    ) : RequestInterface {
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = \gmdate('Ymd\THis\Z');
        $shortDate = \substr($amzdate, 0, 8);
        $service = 'execute-api';

        // Hashed payload
        $hashedPayload = \hash('sha256', (string) $request->getBody());

        // Check and attach access token to request header.
        $allHeaders = \array_merge(
            [
                'x-amz-access-token' => [$accessToken->token()],
                'x-amz-date' => [$amzdate],
            ],
            $request->getHeaders()
        );

        $canonicalHeadersStr = '';

        $blacklistHeaders = [
            'cache-control',
            'content-type',
            'content-length',
            'expect',
            'max-forwards',
            'pragma',
            'range',
            'te',
            'if-match',
            'if-none-match',
            'if-modified-since',
            'if-unmodified-since',
            'if-range',
            'accept',
            'authorization',
            'proxy-authorization',
            'from',
            'referer',
            'user-agent',
            'x-amzn-trace-id',
            'aws-sdk-invocation-id',
            'aws-sdk-retry',
        ];

        \ksort($allHeaders);
        $canonicalHeaders = [];

        foreach ($allHeaders as $headerName => $headerValue) {
            if (\in_array(\strtolower($headerName), $blacklistHeaders, true)) {
                continue;
            }

            $canonicalHeaders[$headerName] = $headerValue;

            if (\count($headerValue) > 0) {
                \sort($headerValue);
            }

            $canonicalHeadersStr .= $headerName . ':' . \implode(',', $headerValue) . "\n";
        }

        $signedHeadersStr = \implode(';', \array_keys($canonicalHeaders));

        //Prepare credentials scope
        $credentialScope = $shortDate . '/' . $region . '/' . $service . '/aws4_request';

        \parse_str($request->getUri()->getQuery(), $queryElements);
        \ksort($queryElements);

        //prepare canonical request
        $canonicalString = $request->getMethod()
            . "\n" . $request->getUri()->getPath()
            . "\n" . \http_build_query($queryElements)
            . "\n" . $canonicalHeadersStr
            . "\n" . $signedHeadersStr
            . "\n" . $hashedPayload;

        //Prepare the string to sign
        $stringToSign = $algorithm . "\n"
            . $amzdate . "\n"
            . $credentialScope . "\n"
            . \hash('sha256', $canonicalString);

        $k = $shortDate . '_' . $region . '_' . $service . '_' . $config->secretKey();

        if (!isset(self::$cache[$k])) {
            // Clear the cache when it reaches 50 entries
            if (\count(self::$cache) > 50) {
                self::$cache = [];
            }

            $dateKey = \hash_hmac(
                'sha256',
                $shortDate,
                "AWS4{$config->secretKey()}",
                true
            );
            $regionKey = \hash_hmac('sha256', $region, $dateKey, true);
            $serviceKey = \hash_hmac('sha256', $service, $regionKey, true);
            self::$cache[$k] = \hash_hmac(
                'sha256',
                'aws4_request',
                $serviceKey,
                true
            );
        }

        //Compute the signature
        $signature = \hash_hmac('sha256', $stringToSign, self::$cache[$k]);

        //Finalize the authorization structure
        $authorizationHeader = $algorithm . " Credential={$config->accessKey()}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        return $request
            ->withHeader('x-amz-date', $amzdate)
            ->withHeader('x-amz-access-token', $accessToken->token())
            ->withHeader('Authorization', $authorizationHeader);
    }
}
