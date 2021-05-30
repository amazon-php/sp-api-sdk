<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

final class HttpSignatureHeaders
{
    /**
     * @return array{host: string, user-agent: string, x-amz-access-token: string, x-amz-date: string, Authorization: string}
     */
    public static function forIAMUser(
        Configuration $config,
        string $method,
        ?AccessToken $accessToken,
        $uri = '',
        $queryString = '',
        $data = []
    ): array {
        return self::calculateSignatureForService(
            $config->apiHost(),
            $method,
            $uri,
            $queryString,
            $data,
            'execute-api',
            $config->accessKey(),
            $config->secretKey(),
            $config->region(),
            $accessToken->token(),
            null,
            $config->userAgent()
        );
    }

    /**
     * @source https://github.com/clousale/amazon-sp-api-php
     */
    private static function calculateSignatureForService(
        string $host,
        string $method,
        $uri,
        $queryString,
        $data,
        string $service,
        string $accessKey,
        string $secretKey,
        string $region,
        $accessToken,
        $securityToken,
        $userAgent
    ): array {
        $terminationString = 'aws4_request';
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = gmdate('Ymd\THis\Z');
        $date = substr($amzdate, 0, 8);

        // Prepare payload
        if (is_array($data)) {
            $param = json_encode($data);
            if ('[]' == $param) {
                $requestPayload = '';
            } else {
                $requestPayload = $param;
            }
        } else {
            $requestPayload = $data;
        }

        // Hashed payload
        $hashedPayload = hash('sha256', $requestPayload);

        //Compute Canonical Headers
        $canonicalHeaders = [
            'host' => $host,
            'user-agent' => $userAgent,
        ];

        // Check and attach access token to request header.
        if (!is_null($accessToken)) {
            $canonicalHeaders['x-amz-access-token'] = $accessToken;
        }
        $canonicalHeaders['x-amz-date'] = $amzdate;
        // Check and attach STS token to request header.
        if (!is_null($securityToken)) {
            $canonicalHeaders['x-amz-security-token'] = $securityToken;
        }

        $canonicalHeadersStr = '';
        foreach ($canonicalHeaders as $h => $v) {
            $canonicalHeadersStr .= $h.':'.$v."\n";
        }
        $signedHeadersStr = join(';', array_keys($canonicalHeaders));

        //Prepare credentials scope
        $credentialScope = $date.'/'.$region.'/'.$service.'/'.$terminationString;

        //prepare canonical request
        $canonicalRequest = $method."\n".$uri."\n".$queryString."\n".$canonicalHeadersStr."\n".$signedHeadersStr."\n".$hashedPayload;

        //Prepare the string to sign
        $stringToSign = $algorithm."\n".$amzdate."\n".$credentialScope."\n".hash('sha256', $canonicalRequest);

        //Start signing locker process
        //Reference : https://docs.aws.amazon.com/general/latest/gr/signature-version-4.html
        $kSecret = 'AWS4'.$secretKey;
        $kDate = hash_hmac('sha256', $date, $kSecret, true);
        $kRegion = hash_hmac('sha256', $region, $kDate, true);
        $kService = hash_hmac('sha256', $service, $kRegion, true);
        $kSigning = hash_hmac('sha256', $terminationString, $kService, true);

        //Compute the signature
        $signature = trim(hash_hmac('sha256', $stringToSign, $kSigning));

        //Finalize the authorization structure
        $authorizationHeader = $algorithm." Credential={$accessKey}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        return array_merge($canonicalHeaders, [
            'Authorization' => $authorizationHeader,
        ]);
    }
}
