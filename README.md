# Amazon Selling Partner API - PHP SDK

This repository is not an official Amazon PHP library for their SP API.

![social-preview](https://repository-images.githubusercontent.com/372302167/e16f602b-c263-48ee-a36a-a06177d1fa68)

## We Stand Against Terror

<table>
  <thead>
    <tr>
      <td align="center"><a href="https://www.standwithukraine.how/" target="_blank">Stand With Ukraine</a></td>
      <td align="center"><a href="https://www.standwithus.com/">Stand With Us</a></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="center"><img width="256" height="186" alt="Flag of Ukraine" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/256px-Flag_of_Ukraine.svg.png"></td>
      <td align="center"><img width="256" height="186" alt="Flag of Israel" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_Israel.svg/256px-Flag_of_Israel.svg.png"></td>
    </tr>
  </tbody>
</table>

> On Feb. 24, 2022, Russia declared an unprovoked war on Ukraine and launched a full-scale invasion. Russia is currently bombing peaceful Ukrainian cities, including schools and hospitals and attacking civilians who are fleeing conflict zones.

> On Oct. 7, 2023, the national holiday of Simchat Torah, Hamas terrorists initiated an attack on Israel in the early hours, targeting civilians. They unleashed violence that resulted in at least 1,400 casualties and abducted at least 200 individuals, not limited to Israelis.

### Why next library?

The main goal of this SDK is to provide SDK's for the Amazon SP API in a way that would let
the application to pass Amazon audit.

Amazon audit might happen to systems that must access API endpoints with PII.

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
composer require amazon-php/sp-api-sdk
```

This library is not in a stable stage yet, please use with caution.

### Releases

| branch                                                   | maintained |
|----------------------------------------------------------| ---------- |
| [1.x](https://github.com/amazon-php/sp-api-sdk/tree/1.x) | 🚫         |
| [2.x](https://github.com/amazon-php/sp-api-sdk/tree/2.x) | 🚫         |
| [3.x](https://github.com/amazon-php/sp-api-sdk/tree/3.x) | 🚫         |
| [4.x](https://github.com/amazon-php/sp-api-sdk/tree/4.x) | 🚫         |
| [5.x](https://github.com/amazon-php/sp-api-sdk/tree/5.x) | 🚫         |
| [6.x](https://github.com/amazon-php/sp-api-sdk/tree/6.x) | ✅         |

Version <s> [1.x](https://github.com/amazon-php/sp-api-sdk/tree/1.x) </s> is deprecated becuase of the attempt to
make a little more sense of what Amazon is doing with using "tags" in their Open API specification.
This attempt failed and in order to keep Backward Compatibility promise, changes in the class names had to be
introduced in [2.x](https://github.com/amazon-php/sp-api-sdk/tree/2.x).
Version 1.0 is not going to be updated anymore, please migrate to version 2.0 that will stay consistent with [Amazon Models](https://github.com/amzn/selling-partner-api-models)
Branch [3.x](https://github.com/amazon-php/sp-api-sdk/tree/3.x) comes with BC breaks introduced by Amazon in
[Catalog Item](https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2020-12-01.json) models.
Until old model won't go away, branches 2.x and 3.x should be maintained in parallel.

[4.x](https://github.com/amazon-php/sp-api-sdk/tree/4.x) comes with BC breaks in following Amazon api models:

- Listings
- Reports
- Vendor
  - Direct Fulfillment Shipping
  - Direct Fulfillment Orders
  - Direct Fulfillment Transactions

[5.x](https://github.com/amazon-php/sp-api-sdk/tree/5.x) moves to Catalog Item API version 2022-04-01 which is replacing
version 2020-12-01.
Additionally, uuid used to generate correlation identifiers was replaced with IdGenerator interface that by
default is using php internal uniqid(). This change allowed us to drop one additional dependency.
Some minor adjustments were made in the template files for models/api.

[6.x](https://github.com/amazon-php/sp-api-sdk/tree/6.x) comes with changes to the Fulfillment Inbound API as well as other additions and removals.
- Additions
  - Fulfillment Inbound API v2024-03-20
    - This is a major change. The ```v2024-03-20``` version takes the place of the ```V0``` version in namespace whereas the ```V0``` version SDK is now ```FulfillmentInboundV0SDK``` and the ```V0``` models are within the ```Model\FulfillmentInboundV0``` directory.
  - Amazon Warehousing and Distribution API v2024-05-09
  - Application Management API v2023-11-30
- Removals
  - Authorization API
  - FBA Small and Light API
    - You can retrieve the new fees for affected products by using the Product Fees API and/or the relevant FBA and Referral Fee reports.

### Available SDKs

[SellingPartnerSDK](/src/AmazonPHP/SellingPartner/SellingPartnerSDK.php) - Facade for all SDK's

- [APlusSDK](/src/AmazonPHP/SellingPartner/Api/AplusContentApi/APlusSDK.php)
- [ApplicationManagement](/src/AmazonPHP/SellingPartner/Api/ApplicationsApi/ApplicationManagementSDK.php)
- [CatalogItemSDK](/src/AmazonPHP/SellingPartner/Api/CatalogApi/CatalogItemSDK.php)
- [FBAInboundSDK](/src/AmazonPHP/SellingPartner/Api/FbaInboundApi/FBAInboundSDK.php)
- [FBAInventorySDK](/src/AmazonPHP/SellingPartner/Api/FbaInventoryApi/FBAInventorySDK.php)
- [FulfillmentInboundV0SDK](/src/AmazonPHP/SellingPartner/Api/FbaInboundApi/FulfillmentInboundV0SDK.php)
- [FulfillmentInboundSDK](/src/AmazonPHP/SellingPartner/Api/FbaInboundApi/FulfillmentInboundSDK.php)
- [FeedsSDK](/src/AmazonPHP/SellingPartner/Api/FeedsApi/FeedsSDK.php)
- [FinancesSDK](/src/AmazonPHP/SellingPartner/Api/DefaultApi/FinancesSDK.php)
- [FulfillmentOutboundSDK](/src/AmazonPHP/SellingPartner/Api/FbaOutboundApi/FulfillmentOutboundSDK.php)
- [ListingsItemsSDK](/src/AmazonPHP/SellingPartner/Api/ListingsApi/ListingsItemsSDK.php)
- [MessagingSDK](/src/AmazonPHP/SellingPartner/Api/MessagingApi/MessagingSDK.php)
- [NotificationsSDK](/src/AmazonPHP/SellingPartner/Api/NotificationsApi/NotificationsSDK.php)
- [OrdersSDK](/src/AmazonPHP/SellingPartner/Api/OrdersV0Api/OrdersSDK.php)
- [Shipment/OrdersSDK](/src/AmazonPHP/SellingPartner/Api/ShipmentApi/OrdersSDK.php)
- [ProductFeesSDK](/src/AmazonPHP/SellingPartner/Api/FeesApi/ProductFeesSDK.php)
- [ProductPricingSDK](/src/AmazonPHP/SellingPartner/Api/ProductPricingApi/ProductPricingSDK.php)
- [ProductTypesDefinitionsSDK](/src/AmazonPHP/SellingPartner/Api/DefinitionsApi/ProductTypesDefinitionsSDK.php)
- [ReportsSDK](/src/AmazonPHP/SellingPartner/Api/ReportsApi/ReportsSDK.php)
- [SalesSDK](/src/AmazonPHP/SellingPartner/Api/SalesApi/SalesSDK.php)
- [SellersSDK](/src/AmazonPHP/SellingPartner/Api/SellersApi/SellersSDK.php)
- [ServicesSDK](/src/AmazonPHP/SellingPartner/Api/ServiceApi/ServicesSDK.php)
- [ShipmentInvoicingSDK](/src/AmazonPHP/SellingPartner/Api/ShipmentInvoiceApi/ShipmentInvoicingSDK.php)
- [ShippingSDK](/src/AmazonPHP/SellingPartner/Api/ShippingApi/ShippingSDK.php)
- [SolicitationsSDK](/src/AmazonPHP/SellingPartner/Api/SolicitationsApi/SolicitationsSDK.php)
- [TokensSDK](/src/AmazonPHP/SellingPartner/Api/TokensApi/TokensSDK.php)
- [UploadsSDK](/src/AmazonPHP/SellingPartner/Api/UploadsApi/UploadsSDK.php)
- [WarehousingAndDistributionSDK](/src/AmazonPHP/SellingPartner/Api/AwdApi/WarehousingAndDistributionSDK.php)
- VendorSDK
  - [VendorInvoicesSDK](/src/AmazonPHP/SellingPartner/Api/VendorPaymentsApi/VendorInvoicesSDK.php)
  - [VendorOrdersSDK](/src/AmazonPHP/SellingPartner/Api/VendorOrdersApi/VendorOrdersSDK.php)
  - [VendorShipmentsSDK](/src/AmazonPHP/SellingPartner/Api/VendorShippingApi/VendorShipmentsSDK.php)
  - [VendorTransactionStatusSDK](/src/AmazonPHP/SellingPartner/Api/VendorTransactionApi/VendorTransactionStatusSDK.php)
  - [VendorDirectFulfillmentInventorySDK](/src/AmazonPHP/SellingPartner/Api/UpdateInventoryApi/VendorDirectFulfillmentInventorySDK.php)
  - [VendorDirectFulfillmentTransactionsSDK](/src/AmazonPHP/SellingPartner/Api/VendorTransactionApi/VendorDirectFulfillmentTransactionsSDK.php)
  - [VendorDirectFulfillmentShippingSDK](/src/AmazonPHP/SellingPartner/Api/VendorShippingLabelsApi/VendorDirectFulfillmentShippingSDK.php)
  - [VendorDirectFulfillmentOrdersSDK](/src/AmazonPHP/SellingPartner/Api/VendorOrdersApi/VendorDirectFulfillmentOrdersSDK.php)
  - [VendorDirectFulfillmentPaymentsSDK](/src/AmazonPHP/SellingPartner/Api/VendorInvoiceApi/VendorDirectFulfillmentPaymentsSDK.php)

### Authorization

In order to start using SP API you need to first register as a Developer and create application.
Whole process is described in [Amazon Official Guides](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md).

Amazon recommends to use Role IAM when creating application however this requires and additional
API request in order to obtain access token. It's easier to use User IAM and just make sure that the user
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

```php
<?php

use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpFactory;
use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Log\NullLogger;

$factory = new Psr17Factory();
$client = new Curl($factory);

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($factory, $factory),
    $config = Configuration::forIAMUser(
        'lwaClientId',
        'lwaClientIdSecret',
        'awsAccessKey',
        'awsSecretKey'
    ),
    new NullLogger()
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');
```

#### IAM Role

```php
<?php

use AmazonPHP\SellingPartner\OAuth;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\STSClient;
use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Log\NullLogger;

$factory = new Psr17Factory();
$client = new Curl($factory);

$sts = new STSClient(
    $client,
    $requestFactory = $factory,
    $streamFactory = $factory
);

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($requestFactory, $streamFactory),
    $config = Configuration::forIAMRole(
        'lwaClientID',
        'lwaClientIdSecret',
        $sts->assumeRole(
            'awsAccessKey',
            'awsSecretKey',
            'arn:aws:iam::.........'
        )
    ),
    new NullLogger()
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');
```

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
        $asin = 'B07W13KJZC',
        $marketplaceId = [Marketplace::US()->id()]
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
'x-amz-security-token',
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

### Sandbox

Sandbox mode can be turned on using configuration:

```php
$configuration->setSandbox();
```

Some APIs endpoints are covered in functional tests.
To run tests that are using sandbox mode, you need to create `.env` file and populate it with your credentials:

```
cp .env.dist .env
```

Then you can enter `composer test:functional` te execute sandbox test suite.
