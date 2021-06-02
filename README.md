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

$catalog = new CatalogItemSDK(
    $client,
    new HttpFactory($factory, $factory),
    $config
);

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