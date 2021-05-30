# Amazon Selling Partner API - PHP SDK

### Examples

```php
<?php

use AmazonPHP\SellingPartner\Api\CatalogApi\CatalogItemSDK;
use Buzz\Client\Curl;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpFactory;
use Nyholm\Psr7\Factory\Psr17Factory;

require_once __DIR__ . '/vendor/autoload.php';

$factory = new Psr17Factory();
$client = new Curl($factory);

$catalog = new CatalogItemSDK(
    new OAuth(
        $client,
        new HttpFactory($factory, $factory),
        Configuration::forIAMUser(
            'client_id',
            'client_secret',
            'eu-west-1',
            'access_key',
            'secret_key'
        ),
        'seller_refresh_token'
    )
);

try {
    $item = $catalog->getCatalogItem($marketplace_id = 'A1C3SOZRARQ6R3', $asin = 'B07W13KJZC');
    dump($item);
} catch (ApiException $exception) {
    dump($exception->getMessage());
}
```