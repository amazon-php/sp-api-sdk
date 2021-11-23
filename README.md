# Amazon Selling Partner API - PHP SDK

This repository is not an official Amazon PHP library for their SP API. 

![social-preview](https://repository-images.githubusercontent.com/372302167/e16f602b-c263-48ee-a36a-a06177d1fa68)


### Why next library? 

There are already few php sp api SDKs available for [PHP](https://packagist.org/?query=sp%20api%20)
however most of them comes with many issues of auto generated code. 

- hardcoded dependencies like `guzzlehttp/guzzle` or `aws/aws-sdk-php` 
- legacy code base (7.2)
- no logger
- SDK's are oriented around single seller which is not suitable for bigger systems
- missing or lacking support for `client_credentials` grant type
- not all API covered
- no extensions 

This library goal is to resolve all above mentioned issues. 

### Installations

```
composer install amazon-php/sp-api-sdk^1.0
```

This library is not in a stable stage yet, please use with caution.

### Available SDKs

[SellingPartnerSDK](/src/AmazonPHP/SellingPartner/SellingPartnerSDK.php) - Facade for all SDK's
* [APlusSDK](/src/AmazonPHP/SellingPartner/Api/APlusSDK.php)
* [AuthorizationSDK](/src/AmazonPHP/SellingPartner/Api/AuthorizationSDK.php)
* [CatalogItemSDK](/src/AmazonPHP/SellingPartner/Api/CatalogItemSDK.php)
* [FBAInboundSDK](/src/AmazonPHP/SellingPartner/Api/FBAInboundSDK.php)
* [FBAInventorySDK](/src/AmazonPHP/SellingPartner/Api/FBAInventorySDK.php)
* [FBASmallAndLightSDK](/src/AmazonPHP/SellingPartner/Api/FBASmallAndLightSDK.php)
* [FeedsSDK](/src/AmazonPHP/SellingPartner/Api/FeedsSDK.php)
* [FinancesSDK](/src/AmazonPHP/SellingPartner/Api/FinancesSDK.php)
* [FulfillmentOutboundSDK](/src/AmazonPHP/SellingPartner/Api/FulfillmentOutboundSDK.php)
* [ListingsItemsSDK](/src/AmazonPHP/SellingPartner/Api/ListingsItemsSDK.php)
* [MessagingSDK](/src/AmazonPHP/SellingPartner/Api/MessagingSDK.php)
* [NotificationsSDK](/src/AmazonPHP/SellingPartner/Api/NotificationsSDK.php)
* [OrdersSDK](/src/AmazonPHP/SellingPartner/Api/OrdersSDK.php)
* [ProductFeesSDK](/src/AmazonPHP/SellingPartner/Api/ProductFeesSDK.php)
* [ProductPricingSDK](/src/AmazonPHP/SellingPartner/Api/ProductPricingSDK.php)
* [ProductTypesDefinitionsSDK](/src/AmazonPHP/SellingPartner/Api/ProductTypesDefinitionsSDK.php)
* [ReportsSDK](/src/AmazonPHP/SellingPartner/Api/ReportsSDK.php)
* [SalesSDK](/src/AmazonPHP/SellingPartner/Api/SalesSDK.php)
* [SellersSDK](/src/AmazonPHP/SellingPartner/Api/SellersSDK.php)
* [ServicesSDK](/src/AmazonPHP/SellingPartner/Api/ServicesSDK.php)
* [ShipmentInvoicingSDK](/src/AmazonPHP/SellingPartner/Api/ShipmentInvoicingSDK.php)
* [ShippingSDK](/src/AmazonPHP/SellingPartner/Api/ShippingSDK.php)
* [SolicitationsSDK](/src/AmazonPHP/SellingPartner/Api/SolicitationsSDK.php)
* [TokensSDK](/src/AmazonPHP/SellingPartner/Api/TokensSDK.php)
* [UploadsSDK](/src/AmazonPHP/SellingPartner/Api/UploadsSDK.php)

### Authorization

In order to start using SP API you need to first register as a Developer and create application.
Whole process is described in [Amazon Official Guides](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md).

Normally amazon recommends to use Role IAM when creating application however this requires and additional
API call when obtaining refresh token. It's easier to use User IAM and just make sure that the user 
has following Inline Policy 

```
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": "execute-api:Invoke",
            "Resource": "arn:aws:execute-api:*:*:*"
        }
    ]
}
```

#### IAM User 

Example of changing refresh token into access token. 

```
<?php

use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpFactory;

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($factory, $factory),
    $config = Configuration::forIAMUser(
        'lwaClientId',
        'lwaClientIdSecret',
        'awsAccessKey',
        'awsSecretKey'
    )
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');
```

#### IAM Role 

@TODO 

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

use AmazonPHP\SellingPartner\Marketplace;
use AmazonPHP\SellingPartner\Regions;
use AmazonPHP\SellingPartner\SellingPartnerSDK;
use Buzz\Client\Curl;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Configuration;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Nyholm\Psr7\Factory\Psr17Factory;

require_once __DIR__ . '/vendor/autoload.php';

$factory = new Psr17Factory();
$client = new Curl($factory);

$configuration = Configuration::forIAMUser(
    'lwaClientId',
    'lwaClientIdSecret',
    'awsAccessKey',
    'awsSecretKey'
);

$logger = new Logger('name');
$logger->pushHandler(new StreamHandler(__DIR__ . '/sp-api-php.log', Logger::DEBUG));

$sdk = SellingPartnerSDK::create($client, $factory, $factory, $configuration, $logger);

$accessToken = $sdk->oAuth()->exchangeRefreshToken('seller_oauth_refresh_token');

try {
    $item = $sdk->catalogItem()->getCatalogItem(
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
