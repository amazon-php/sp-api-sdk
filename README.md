# Amazon Selling Partner API - PHP SDK

### Why next library? 

There are already few php sp api sdk's available for [PHP](https://packagist.org/?query=sp%20api%20)
however most of them comes with all issues of auto generated code. 

- hardcoded `guzzlehttp/guzzle` or `aws/aws-sdk-php` dependency 
- legacy code base (7.2)
- no logger
- SDK's are oriented around single seller which is not suitable for bigger systems
- missing or lacking support for `client_credentials` grant type
- not all API covered
- no extensions 

This API goal is to resolve all above mentioned issues. 

### Development

99% of code in this library is auto generated from [Amazon Selling Partner API Models](https://github.com/amzn/selling-partner-api-models)
using [OpenAPI Generator](http://github.com/openAPITools/openapi-generator/) tool.
Output is later automatically upgraded by [RectorPHP](http://github.com/rectorphp) to PHP 7.4 version 
and finally coding standards are also automatically unified by [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

Requirements:

- [Docker](https://www.docker.com/)
- [PHP 7.4+](https://www.php.net/)
- [Composer](https://getcomposer.org/)

In oder to regenerate code (for example when API definitions change), execute following code: 

```
composer generate
```

### Examples

```php
<?php

use AmazonPHP\SellingPartner\Api\AuthorizationSDK;
use AmazonPHP\SellingPartner\Api\CatalogItemSDK;
use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Regions;
use Buzz\Client\Curl;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpFactory;
use Nyholm\Psr7\Factory\Psr17Factory;

require_once __DIR__ . '/vendor/autoload.php';

$factory = new Psr17Factory();
$client = new Curl($factory);

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($factory, $factory),
    $config = Configuration::forIAMUser(
        'lwaClientID',
        'lwaClientID',
        'awsAccessKey',
        'awsSecretKey'
    )
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');

$logger = new Logger('name');
$logger->pushHandler(new StreamHandler(__DIR__ . '/sp-api-php.log', Logger::DEBUG));

$catalog = new CatalogItemSDK($client, $httpFactory, $config, $logger);

try {
    $item = $catalog->getCatalogItem(
        $accessToken,
        Regions::NORTH_AMERICA,
        $marketplaceId = Marketplace::US()->id(),
        $asin = 'B07W13KJZC'
    );
    dump($item);
} catch (ApiException $exception) {
    dump($exception->getMessage());
}
```

### Logging

Default log level is set up to DEBUG, but it can be changed in configuration to any other 
level for all operations in all APIs or only for given operation in given API. 

```
$configuration->setDefaultLogLevel(\Psr\Log\LogLevel::INFO);
```

Specific API's or only given operations can be also excluded from logging (for example APIs with PII or sensitive data).

```
$configuration->setLogLevel(CatalogItemSDK::API_NAME, CatalogItemSDK::OPERATION_GETCATALOGITEM, LogLevel::INFO);
$configuration->setSkipLogging(TokensSDK::API_NAME);
$configuration->setSkipLogging(AuthorizationSDK::API_NAME, AuthorizationSDK::OPERATION_GETAUTHORIZATIONCODE);
```

Finally, you can also ignore specific headers when logging http request/response.
By default, configuration is set to ignore following sensitive authorization headers:

```
'authorization',
'x-amz-access-token',
'proxy-authorization',
'www-authenticate',
'proxy-authenticate',
```

you can also add your own ignored headers: 

```
$configuration->loggingAddSkippedHeader('some-sensitive-key');
```

### Extensions

Each SDK allows you to register custom extensions executed before and after sending API requests.

```php
<?php 

$configuration->registerExtension(new class implements \AmazonPHP\SellingPartner\Extension {
    public function preRequest(string $api, string $operation, RequestInterface $request): void
    {
        echo "pre: " . $api . "::" . $operation . " " . $request->getUri() . "\n";
    }

    public function postRequest(string $api, string $operation, RequestInterface $request, ResponseInterface $response): void
    {
        echo "post: " . $api . "::" . $operation . " " . $request->getUri() . " " 
            . $response->getStatusCode() . " rate limit: " . implode(' ', $response->getHeader('x-amzn-RateLimit-Limit')) . "\n";
    }
});
```