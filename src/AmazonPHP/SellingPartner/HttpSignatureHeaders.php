<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Http\Message\RequestInterface;

final class HttpSignatureHeaders
{
    private static array $cache = [];

    public static function forConfig(
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

        if ($config->securityToken()) {
            $allHeaders = \array_merge(
                [
                    'x-amz-security-token' => [$config->securityToken()],
                ],
                $request->getHeaders()
            );
        }

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
            $headerName = \strtolower($headerName);

            if (\in_array($headerName, $blacklistHeaders, true)) {
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

        //prepare canonical request
        $canonicalString = $request->getMethod()
            . "\n" . self::createCanonicalizedPath($request->getUri()->getPath())
            . "\n" . self::build(self::parseUrl($request->getUri()->getQuery()))
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
                (string) "AWS4{$config->secretKey()}",
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
        $signature = \hash_hmac('sha256', $stringToSign, (string) self::$cache[$k]);

        //Finalize the authorization structure
        $authorizationHeader = $algorithm . " Credential={$config->accessKey()}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        if ($config->securityToken()) {
            return $request
                ->withHeader('x-amz-date', $amzdate)
                ->withHeader('x-amz-access-token', $accessToken->token())
                ->withHeader('x-amz-security-token', $config->securityToken())
                ->withHeader('Authorization', $authorizationHeader);
        }

        return $request
            ->withHeader('x-amz-date', $amzdate)
            ->withHeader('x-amz-access-token', $accessToken->token())
            ->withHeader('Authorization', $authorizationHeader);
    }

    public static function raw(
        string $accessKey,
        string $secret,
        string $region,
        RequestInterface $request
    ) : RequestInterface {
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = \gmdate('Ymd\THis\Z');
        $shortDate = \substr($amzdate, 0, 8);
        $service = 'sts';

        // Hashed payload
        $hashedPayload = \hash('sha256', (string) $request->getBody());

        $allHeaders = \array_merge(
            [
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
            $headerName = \strtolower($headerName);

            if (\in_array($headerName, $blacklistHeaders, true)) {
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

        //prepare canonical request
        $canonicalString = $request->getMethod()
            . "\n" . self::createCanonicalizedPath($request->getUri()->getPath())
            . "\n" . self::build(self::parseUrl($request->getUri()->getQuery()))
            . "\n" . $canonicalHeadersStr
            . "\n" . $signedHeadersStr
            . "\n" . $hashedPayload;

        //Prepare the string to sign
        $stringToSign = $algorithm . "\n"
            . $amzdate . "\n"
            . $credentialScope . "\n"
            . \hash('sha256', $canonicalString);

        $k = $shortDate . '_' . $region . '_' . $service . '_' . $secret;

        if (!isset(self::$cache[$k])) {
            // Clear the cache when it reaches 50 entries
            if (\count(self::$cache) > 50) {
                self::$cache = [];
            }

            $dateKey = \hash_hmac('sha256', $shortDate, (string) "AWS4{$secret}", true);
            $regionKey = \hash_hmac('sha256', $region, $dateKey, true);
            $serviceKey = \hash_hmac('sha256', $service, $regionKey, true);
            self::$cache[$k] = \hash_hmac('sha256', 'aws4_request', $serviceKey, true);
        }

        //Compute the signature
        $signature = \hash_hmac('sha256', $stringToSign, (string) self::$cache[$k]);

        //Finalize the authorization structure
        $authorizationHeader = $algorithm . " Credential={$accessKey}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        return $request
            ->withHeader('x-amz-date', $amzdate)
            ->withHeader('Authorization', $authorizationHeader);
    }

    /**
     * Taken from \GuzzleHttp\Psr7\Query.
     */
    public static function parseUrl(string $str, $urlEncoding = true) : array
    {
        $result = [];

        if ($str === '') {
            return $result;
        }

        if ($urlEncoding === true) {
            $decoder = function ($value) {
                return \rawurldecode(\str_replace('+', ' ', (string) $value));
            };
        } elseif ($urlEncoding === PHP_QUERY_RFC3986) {
            $decoder = 'rawurldecode';
        } elseif ($urlEncoding === PHP_QUERY_RFC1738) {
            $decoder = 'urldecode';
        } else {
            $decoder = function ($str) {
                return $str;
            };
        }

        foreach (\explode('&', $str) as $kvp) {
            $parts = \explode('=', $kvp, 2);
            $key = $decoder($parts[0]);
            $value = isset($parts[1]) ? $decoder($parts[1]) : null;

            if (!\array_key_exists($key, $result)) {
                $result[$key] = $value;
            } else {
                if (!\is_array($result[$key])) {
                    $result[$key] = [$result[$key]];
                }
                $result[$key][] = $value;
            }
        }

        \ksort($result);

        return $result;
    }

    /**
     * Taken from \GuzzleHttp\Psr7\Query.
     */
    public static function build(array $params, $encoding = PHP_QUERY_RFC3986) : string
    {
        if (!$params) {
            return '';
        }

        if ($encoding === false) {
            $encoder = function (string $str) : string {
                return $str;
            };
        } elseif ($encoding === PHP_QUERY_RFC3986) {
            $encoder = 'rawurlencode';
        } elseif ($encoding === PHP_QUERY_RFC1738) {
            $encoder = 'urlencode';
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }

        $qs = '';

        foreach ($params as $k => $v) {
            $k = $encoder((string) $k);

            if (!\is_array($v)) {
                $qs .= $k;
                $v = \is_bool($v) ? (int) $v : $v;

                if ($v !== null) {
                    $qs .= '=' . $encoder((string) $v);
                }
                $qs .= '&';
            } else {
                foreach ($v as $vv) {
                    $qs .= $k;
                    $vv = \is_bool($vv) ? (int) $vv : $vv;

                    if ($vv !== null) {
                        $qs .= '=' . $encoder((string) $vv);
                    }
                    $qs .= '&';
                }
            }
        }

        return $qs ? (string) \substr($qs, 0, -1) : '';
    }

    /**
     * Taken from \Aws\Signature\SignatureV4.
     */
    public static function createCanonicalizedPath(string $path) : string
    {
        $doubleEncoded = \rawurlencode(\ltrim($path, '/'));

        return '/' . \str_replace('%2F', '/', $doubleEncoded);
    }
}
