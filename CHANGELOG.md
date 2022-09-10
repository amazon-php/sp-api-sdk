## [4.0.11] - 2022-09-10

### Added
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Rector rule for changing return type tu nullable** - [@owsiakl](https://github.com/owsiakl)
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Ignoring `UnitOfMeasurement`, `PrepInstruction` and `SellerFreightClass` response enum validation** - [@owsiakl](https://github.com/owsiakl)
- [#241](https://github.com/amazon-php/sp-api-sdk/pull/241) - **Add Fulfillment Inbound `ShipmentStatus` to broken model definitions.** - [@jasonhebert](https://github.com/jasonhebert)

### Changed
- [#244](https://github.com/amazon-php/sp-api-sdk/pull/244) - **Regenerated models** - [@owsiakl](https://github.com/owsiakl)
- [#240](https://github.com/amazon-php/sp-api-sdk/pull/240) - **Update mustache template for model classes - added ReturnTypeWillChange attribute to prevent deprecation errors on PHP 8.1** - [@Stevad](https://github.com/Stevad)
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Regenerated models** - [@owsiakl](https://github.com/owsiakl)
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Changed return type of some methods in Fulfillment Inbound API to nullable** - [@owsiakl](https://github.com/owsiakl)
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Changed return type of `getCostPrice` method in Listings API to nullable** - [@owsiakl](https://github.com/owsiakl)
- [#238](https://github.com/amazon-php/sp-api-sdk/pull/238) - **Changed return type of `getAttributes` method in Listings API from object to array** - [@owsiakl](https://github.com/owsiakl)

### Fixed
- [#244](https://github.com/amazon-php/sp-api-sdk/pull/244) - **Fixed nullable return types in fulfillment inbound models** - [@owsiakl](https://github.com/owsiakl)

## [4.0.10] - 2022-08-11

### Fixed
- [#229](https://github.com/amazon-php/sp-api-sdk/pull/229) - **Fixed missing return types in interfaces** - [@norberttech](https://github.com/norberttech)

### Removed
- [#229](https://github.com/amazon-php/sp-api-sdk/pull/229) - **request methods from SDK interfaces** - [@norberttech](https://github.com/norberttech)

## [4.0.9] - 2022-08-11

### Added
- [#228](https://github.com/amazon-php/sp-api-sdk/pull/228) - **Added auto generated SDK interfaces** - [@norberttech](https://github.com/norberttech)
- [#228](https://github.com/amazon-php/sp-api-sdk/pull/228) - **More descriptive SDK class/interface comment** - [@norberttech](https://github.com/norberttech)
- [#228](https://github.com/amazon-php/sp-api-sdk/pull/228) - **\DateTimeInterface primitve to code generator** - [@norberttech](https://github.com/norberttech)

### Changed
- [#228](https://github.com/amazon-php/sp-api-sdk/pull/228) - **date,Date,DateTime generator types mapping from \DateTime into \DateTimeInterface** - [@norberttech](https://github.com/norberttech)
- [#226](https://github.com/amazon-php/sp-api-sdk/pull/226) - **Doc fix** - [@belguinan](https://github.com/belguinan)

### Fixed
- [#228](https://github.com/amazon-php/sp-api-sdk/pull/228) - **property type hints when null is default value** - [@norberttech](https://github.com/norberttech)

## [4.0.8] - 2022-07-28

### Added
- [#219](https://github.com/amazon-php/sp-api-sdk/pull/219) - **Added possibility to create marketplace object by marketplace id** - [@owsiakl](https://github.com/owsiakl)

### Changed
- [#218](https://github.com/amazon-php/sp-api-sdk/pull/218) - **Changed date time format during deserialization to zulu** - [@owsiakl](https://github.com/owsiakl)

### Updated
- [e22b9f](https://github.com/amazon-php/sp-api-sdk/commit/e22b9f1d87d2d380cf81375c617279053f1d264e) - **amazon models** - [@norberttech](https://github.com/norberttech)

## [4.0.7] - 2022-07-18

### Added
- [#214](https://github.com/amazon-php/sp-api-sdk/pull/214) - **Added new `validate` method to the models** - [@owsiakl](https://github.com/owsiakl)
- [#213](https://github.com/amazon-php/sp-api-sdk/pull/213) - **Added sandboxed functional tests & readme** - [@owsiakl](https://github.com/owsiakl)
- [#212](https://github.com/amazon-php/sp-api-sdk/pull/212) - **Possibility to send request against sandbox - dynamic/static** - [@norberttech](https://github.com/norberttech)

### Changed
- [#215](https://github.com/amazon-php/sp-api-sdk/pull/215) - **Disabled validation for FileType enum from Merchant Fulfillment API** - [@owsiakl](https://github.com/owsiakl)
- [#209](https://github.com/amazon-php/sp-api-sdk/pull/209) - **Disabled validation for enums in fulfillment outbound api** - [@owsiakl](https://github.com/owsiakl)

### Fixed
- [#216](https://github.com/amazon-php/sp-api-sdk/pull/216) - **Fixed env vars name to match parameter names described in documentation** - [@owsiakl](https://github.com/owsiakl)
- [#211](https://github.com/amazon-php/sp-api-sdk/pull/211) - **Fixed casting simple value types** - [@owsiakl](https://github.com/owsiakl)

### Removed
- [#214](https://github.com/amazon-php/sp-api-sdk/pull/214) - **Removed constraints from all models setters methods** - [@owsiakl](https://github.com/owsiakl)
- [#214](https://github.com/amazon-php/sp-api-sdk/pull/214) - **Removed model `listInvalidProperties` method** - [@owsiakl](https://github.com/owsiakl)
- [#214](https://github.com/amazon-php/sp-api-sdk/pull/214) - **Removed model `valid` method** - [@owsiakl](https://github.com/owsiakl)

## [4.0.6] - 2022-06-23

### Fixed
- [2f04b7](https://github.com/amazon-php/sp-api-sdk/commit/2f04b75ab1f1833f8d2d995c4cad20a4851f3438) - **static method definition** - [@norberttech](https://github.com/norberttech)
- [#196](https://github.com/amazon-php/sp-api-sdk/pull/196) - **Disable validation of enum values for incomplete model definitions in the sanitizeForSerialization function.** - [@Tetsuya-Takiguchi](https://github.com/Tetsuya-Takiguchi)
- [#196](https://github.com/amazon-php/sp-api-sdk/pull/196) - **Disable enum value validation for incomplete model definitions in the deserialize function.** - [@Tetsuya-Takiguchi](https://github.com/Tetsuya-Takiguchi)
- [#194](https://github.com/amazon-php/sp-api-sdk/pull/194) - **Fixed comparison of broken model enum classes** - [@norberttech](https://github.com/norberttech)
- [bd30ce](https://github.com/amazon-php/sp-api-sdk/commit/bd30ce940adab6fd1e3c7bdbd857ade2338c8326) - **readme code examples** - [@norberttech](https://github.com/norberttech)
- [#192](https://github.com/amazon-php/sp-api-sdk/pull/192) - **Disable validation of enum values for incomplete model definitions** - [@norberttech](https://github.com/norberttech)

## [4.0.5] - 2022-06-21

### Changed
- [#188](https://github.com/amazon-php/sp-api-sdk/pull/188) - **SDK return type deserialization** - [@norberttech](https://github.com/norberttech)

### Fixed
- [#190](https://github.com/amazon-php/sp-api-sdk/pull/190) - **attributes type in listing item endpoint** - [@norberttech](https://github.com/norberttech)
- [#188](https://github.com/amazon-php/sp-api-sdk/pull/188) - **request parameters serialization** - [@norberttech](https://github.com/norberttech)
- [#188](https://github.com/amazon-php/sp-api-sdk/pull/188) - **Product Fees generation** - [@norberttech](https://github.com/norberttech)

## [4.0.4] - 2022-06-09

### Added
- [#183](https://github.com/amazon-php/sp-api-sdk/pull/183) - **Add new methods and operations to the Configuration and LoggerConfiguration classes to re-enable logging of API's and/or operations that were previously skipped.** - [@jasonhebert](https://github.com/jasonhebert)

### Fixed
- [#183](https://github.com/amazon-php/sp-api-sdk/pull/183) - **Fixed logic errors in existing LoggerConfiguration methods preventing proper handling of skip logging functionality.** - [@jasonhebert](https://github.com/jasonhebert)

## [4.0.3] - 2022-06-03

### Added
- [#176](https://github.com/amazon-php/sp-api-sdk/pull/176) - **Added Configuration getter to SellingPartnerSDK.** - [@jasonhebert](https://github.com/jasonhebert)
- [#176](https://github.com/amazon-php/sp-api-sdk/pull/176) - **Added method to update IAM Role Credentials on Configuration class.** - [@jasonhebert](https://github.com/jasonhebert)

### Fixed
- [#179](https://github.com/amazon-php/sp-api-sdk/pull/179) - **HttpSignatureHeaders::forConfig will convert header names to lowercase when calculating the signature to avoid mismatched signatures when sending to Amazon and match behaviour of HttpSignatureHeaders::raw.** - [@raing3](https://github.com/raing3)

## [4.0.2] - 2022-05-25

### Fixed
- [#171](https://github.com/amazon-php/sp-api-sdk/pull/171) - **The code example calling getCatalogItems in the README file passed incorrect parameters to the method.** - [@jasonhebert](https://github.com/jasonhebert)

## [4.0.1] - 2022-05-16

### Added
- [#169](https://github.com/amazon-php/sp-api-sdk/pull/169) - **Throw an ApiException if the AssumeRole action response returns other than a 200 level response.** - [@jasonhebert](https://github.com/jasonhebert)

## [4.0.0] - 2022-04-14

### Changed
- [950977](https://github.com/amazon-php/sp-api-sdk/commit/950977064f0d6f777ac7d21109b2e08add2b93cc) - **Switch github actions to branch 4.x** - [@norberttech](https://github.com/norberttech)

### Updated
- [7df7a2](https://github.com/amazon-php/sp-api-sdk/commit/7df7a20e85d14270d609ef9dacbc4ef68ef43548) - **amazon models references, replaced deprecated SDK versions with recent ones** - [@norberttech](https://github.com/norberttech)

### Removed
- [812091](https://github.com/amazon-php/sp-api-sdk/commit/81209133b463f98d3116860c479fde9f0247b3ca) - **deprecated config** - [@norberttech](https://github.com/norberttech)

## [3.0.10] - 2022-03-28

### Fixed
- [#158](https://github.com/amazon-php/sp-api-sdk/pull/158) - **Fixed empty string value for LabelFormat enum property** - [@owsiakl](https://github.com/owsiakl)

## [3.0.9] - 2022-03-16

### Changed
- [#151](https://github.com/amazon-php/sp-api-sdk/pull/151) - **`SellingPartnerSDK` and `VendorSDK` facade classes now cache child SDK instances** - [@jasonhebert](https://github.com/jasonhebert)
- [#151](https://github.com/amazon-php/sp-api-sdk/pull/151) - **`SellingPartnerSDK` and `VendorSDK` facade class constructor signatures have been changed. Suggested to use static `create` method for instantiation.** - [@jasonhebert](https://github.com/jasonhebert)

## [3.0.7] - 2022-03-09

### Changed
- [#128](https://github.com/amazon-php/sp-api-sdk/pull/128) - **Refactor Marketplace class to remove redundancies and simplify update process.** - [@jasonhebert](https://github.com/jasonhebert)

### Fixed
- [#128](https://github.com/amazon-php/sp-api-sdk/pull/128) - **Corrected namespace on ObjectSerializerTest class.** - [@jasonhebert](https://github.com/jasonhebert)
- [#128](https://github.com/amazon-php/sp-api-sdk/pull/128) - **Added the missing properties for the Egypt country data and marketplace to the Marketplace class.** - [@jasonhebert](https://github.com/jasonhebert)
- [#125](https://github.com/amazon-php/sp-api-sdk/pull/125) - **Fixed "The lock file is not up to date with the latest changes in composer.json" warning.** - [@jasonhebert](https://github.com/jasonhebert)
- [fb10f5](https://github.com/amazon-php/sp-api-sdk/commit/fb10f57ad9b87bc34c394ab99090f3c582a04c24) - **PHP versions scope** - [@norberttech](https://github.com/norberttech)

## [3.0.6] - 2022-01-16

### Fixed
- [#122](https://github.com/amazon-php/sp-api-sdk/pull/122) - **enum parameters serialization** - [@norberttech](https://github.com/norberttech)

## [3.0.5] - 2022-01-13

### Fixed
- [#119](https://github.com/amazon-php/sp-api-sdk/pull/119) - **Address::name model return type through rector** - [@norberttech](https://github.com/norberttech)

## [3.0.4] - 2022-01-07

### Changed
- [92cbb7](https://github.com/amazon-php/sp-api-sdk/commit/92cbb76dc822680e0d03cbd1c58a5b8cbf36a2b5) - **custom workflows into aeon-php reusable workflows** - [@norberttech](https://github.com/norberttech)

### Fixed
- [d24fec](https://github.com/amazon-php/sp-api-sdk/commit/d24fecc87507478142cc6b8434d46048290e46ac) - **changelog update branch** - [@norberttech](https://github.com/norberttech)
- [#112](https://github.com/amazon-php/sp-api-sdk/pull/112) - **typo in rector rule** - [@staabm](https://github.com/staabm)

## [3.0.2] - 2022-01-04

### Added
- [#110](https://github.com/amazon-php/sp-api-sdk/pull/110) - **Added SDK that covers deprecated CatalogItem API endpoints** - [@norberttech](https://github.com/norberttech)

### Updated
- [a837d9](https://github.com/amazon-php/sp-api-sdk/commit/a837d903376d7a9a49ef4e7ca8344b31ba97536f) - **README.md** - [@norberttech](https://github.com/norberttech)

## [3.0.1] - 2021-12-28

### Fixed
- [#106](https://github.com/amazon-php/sp-api-sdk/pull/106) - **?object to ?array types in parameters and method returns** - [@norberttech](https://github.com/norberttech)

### Updated
- [46b399](https://github.com/amazon-php/sp-api-sdk/commit/46b399efec70a1dbe6acd93bcce86b09f49285c8) - **github workflows after base branch switch** - [@norberttech](https://github.com/norberttech)

## [3.0.0] - 2021-12-28

### Updated
- [f68ba3](https://github.com/amazon-php/sp-api-sdk/commit/f68ba3a8a059e5d34936c5150b700dbe8bc6aa0d) - **catalog-item api models** - [@norberttech](https://github.com/norberttech)

## [2.1.1] - 2021-12-28

### Added
- [#105](https://github.com/amazon-php/sp-api-sdk/pull/105) - **added missing sensitive header** - [@norberttech](https://github.com/norberttech)

### Fixed
- [#107](https://github.com/amazon-php/sp-api-sdk/pull/107) - **?object to ?array param and return type** - [@norberttech](https://github.com/norberttech)

### Removed
- [#105](https://github.com/amazon-php/sp-api-sdk/pull/105) - **Removed redundant json file** - [@norberttech](https://github.com/norberttech)

## [2.1.0] - 2021-12-27

### Added
- [#104](https://github.com/amazon-php/sp-api-sdk/pull/104) - **IAM Role authorization** - [@norberttech](https://github.com/norberttech)
- [#103](https://github.com/amazon-php/sp-api-sdk/pull/103) - **vendor api sdks** - [@norberttech](https://github.com/norberttech)

### Fixed
- [#104](https://github.com/amazon-php/sp-api-sdk/pull/104) - **Enums deserialization** - [@norberttech](https://github.com/norberttech)
- [#104](https://github.com/amazon-php/sp-api-sdk/pull/104) - **vendors API default values of parameters** - [@norberttech](https://github.com/norberttech)

## [2.0.0] - 2021-12-12

### Changed
- [53306d](https://github.com/amazon-php/sp-api-sdk/commit/53306d59ec8deae7ff54c3d15973a50e30e0028d) - **Do not rename auto generated SDK's** - [@norberttech](https://github.com/norberttech)

### Updated
- [c9b107](https://github.com/amazon-php/sp-api-sdk/commit/c9b10751ab2fac214a74a6e6fd5781ee35047f89) - **README.md** - [@norberttech](https://github.com/norberttech)

## [1.0.5] - 2021-12-09

### Added
- [#95](https://github.com/amazon-php/sp-api-sdk/pull/95) - **php 8.1 to composer.json** - [@norberttech](https://github.com/norberttech)

### Changed
- [#85](https://github.com/amazon-php/sp-api-sdk/pull/85) - **Update readme for clarity** - [@georanma](https://github.com/georanma)
- [#92](https://github.com/amazon-php/sp-api-sdk/pull/92) - **Updated SDK Models, mostly code docs but also additional units of measurement** - [@norberttech](https://github.com/norberttech)

### Updated
- [3a9f7f](https://github.com/amazon-php/sp-api-sdk/commit/3a9f7fe2d7bfa876b23a0bd66e1c64bfd35072e6) - **cs fxer to the latest version** - [@norberttech](https://github.com/norberttech)

## [1.0.4] - 2021-10-15

### Added
- [#82](https://github.com/amazon-php/sp-api-sdk/pull/82) - **FulfillmentInboundSDK to SellingPartnerSDK** - [@owsiakl](https://github.com/owsiakl)

### Fixed
- [#82](https://github.com/amazon-php/sp-api-sdk/pull/82) - **Headers sanitization** - [@owsiakl](https://github.com/owsiakl)

## [1.0.3] - 2021-09-20

### Changed
- [#70](https://github.com/amazon-php/sp-api-sdk/pull/70) - **Updated models 2021-09-20** - [@norberttech](https://github.com/norberttech)
- [#69](https://github.com/amazon-php/sp-api-sdk/pull/69) - **Updated models 2021-09-16** - [@norberttech](https://github.com/norberttech)

### Updated
- [a2caf2](https://github.com/amazon-php/sp-api-sdk/commit/a2caf27dfacff29699ffc647b897bee7b0c09b42) - **README.md** - [@norberttech](https://github.com/norberttech)

## [1.0.2] - 2021-09-10

### Changed
- [#64](https://github.com/amazon-php/sp-api-sdk/pull/64) - **Updated models according to the open api specification** - [@norberttech](https://github.com/norberttech)

### Fixed
- [#63](https://github.com/amazon-php/sp-api-sdk/pull/63) - **Changed ApiException response headers argument to nullable** - [@owsiakl](https://github.com/owsiakl)

## [1.0.1] - 2021-08-31

### Changed
- [#60](https://github.com/amazon-php/sp-api-sdk/pull/60) - **Updated models** - [@norberttech](https://github.com/norberttech)

### Updated
- [f9c829](https://github.com/amazon-php/sp-api-sdk/commit/f9c8294244f03906535e16ef9beb5d452d2d6244) - **README.md** - [@norberttech](https://github.com/norberttech)

## [1.0.0] - 2021-08-17

### Added
- [#47](https://github.com/amazon-php/sp-api-sdk/pull/47) - **Updated models according to the last SP API changes** - [@norberttech](https://github.com/norberttech)
- [#26](https://github.com/amazon-php/sp-api-sdk/pull/26) - **MerchantFulfillment SDK** - [@norberttech](https://github.com/norberttech)
- [#23](https://github.com/amazon-php/sp-api-sdk/pull/23) - **operations paths in API constatns** - [@norberttech](https://github.com/norberttech)
- [#23](https://github.com/amazon-php/sp-api-sdk/pull/23) - **region URLs** - [@norberttech](https://github.com/norberttech)
- [#21](https://github.com/amazon-php/sp-api-sdk/pull/21) - **Logger to OAuth API SDK** - [@norberttech](https://github.com/norberttech)
- [4e177f](https://github.com/amazon-php/sp-api-sdk/commit/4e177f06f1c770dd177c960b2fa2c21daa1fc6c7) - **phpstorm meta and skipp Marketplace in rector config** - [@norberttech](https://github.com/norberttech)
- [004e10](https://github.com/amazon-php/sp-api-sdk/commit/004e10d98bb73c94738e958d1a1f919a353a10a3) - **github workflows to auto update models** - [@norberttech](https://github.com/norberttech)
- [#13](https://github.com/amazon-php/sp-api-sdk/pull/13) - **Marketplace URL to Marketplace object** - [@norberttech](https://github.com/norberttech)
- [#13](https://github.com/amazon-php/sp-api-sdk/pull/13) - **Marketplace from country code constructor** - [@norberttech](https://github.com/norberttech)
- [#11](https://github.com/amazon-php/sp-api-sdk/pull/11) - **OAuth::exchangeLwaCode(string $code) : AccessToken - method to exchange auth code for access token** - [@norberttech](https://github.com/norberttech)
- [#10](https://github.com/amazon-php/sp-api-sdk/pull/10) - **SellingPartnerSDK Facade to simplify building whole SDK** - [@norberttech](https://github.com/norberttech)
- [93b5b9](https://github.com/amazon-php/sp-api-sdk/commit/93b5b99ee00fe343b34bad9ca5d9805182cc3fd6) - **remaining SP seller APIs** - [@norberttech](https://github.com/norberttech)
- [#6](https://github.com/amazon-php/sp-api-sdk/pull/6) - **custom extensions system** - [@norberttech](https://github.com/norberttech)
- [#4](https://github.com/amazon-php/sp-api-sdk/pull/4) - **PSR logger to all SDK's** - [@norberttech](https://github.com/norberttech)
- [#4](https://github.com/amazon-php/sp-api-sdk/pull/4) - **Logger configuration** - [@norberttech](https://github.com/norberttech)
- [#3](https://github.com/amazon-php/sp-api-sdk/pull/3) - **OAuth client credentials authorization** - [@norberttech](https://github.com/norberttech)
- [511f14](https://github.com/amazon-php/sp-api-sdk/commit/511f14005a004ccb1dca0e77c0cf1e846b90ee89) - **rector rules, cs fixer and composer scripts** - [@norberttech](https://github.com/norberttech)
- [31b435](https://github.com/amazon-php/sp-api-sdk/commit/31b43531dba8e0924a3a0c68f2fa38b208a66e07) - **tools and CS fixes** - [@norberttech](https://github.com/norberttech)

### Changed
- [#53](https://github.com/amazon-php/sp-api-sdk/pull/53) - **regenerated API models from specs** - [@norberttech](https://github.com/norberttech)
- [3067aa](https://github.com/amazon-php/sp-api-sdk/commit/3067aa4582d4b504494d5d22902bbf0ab63f5141) - **Improved SDKs generation by removing psalm-refactor** - [@norberttech](https://github.com/norberttech)
- [f6aa70](https://github.com/amazon-php/sp-api-sdk/commit/f6aa7027d0353f19b43aa0dc82e42a2694e83a18) - **Disabled rector diffs and progress bar** - [@norberttech](https://github.com/norberttech)
- [#35](https://github.com/amazon-php/sp-api-sdk/pull/35) - **Updated Order Model** - [@norberttech](https://github.com/norberttech)
- [1c0add](https://github.com/amazon-php/sp-api-sdk/commit/1c0add601e7d61c7ad7b41e767203a31cdcbb4f1) - **Use sudo to generate models** - [@norberttech](https://github.com/norberttech)
- [e2cb48](https://github.com/amazon-php/sp-api-sdk/commit/e2cb48a26bc7dc2e8301e6db9efdf075490ff902) - **Initial commit** - [@norberttech](https://github.com/norberttech)

### Fixed
- [#35](https://github.com/amazon-php/sp-api-sdk/pull/35) - **shipment invoice models path** - [@norberttech](https://github.com/norberttech)
- [#29](https://github.com/amazon-php/sp-api-sdk/pull/29) - **fixed contnet-type token to be lowercase everywhere** - [@norberttech](https://github.com/norberttech)
- [#26](https://github.com/amazon-php/sp-api-sdk/pull/26) - **Wrong HttpMethods** - [@norberttech](https://github.com/norberttech)
- [#23](https://github.com/amazon-php/sp-api-sdk/pull/23) - **jsonSerialize method at Models** - [@norberttech](https://github.com/norberttech)
- [#21](https://github.com/amazon-php/sp-api-sdk/pull/21) - **Building Access Token for client credentials grant type** - [@norberttech](https://github.com/norberttech)
- [6221ef](https://github.com/amazon-php/sp-api-sdk/commit/6221ef447047de14273cb4a4d23c7d7110db3678) - **coding standard** - [@norberttech](https://github.com/norberttech)
- [#14](https://github.com/amazon-php/sp-api-sdk/pull/14) - **ShippingSDK generator configuration** - [@norberttech](https://github.com/norberttech)
- [#3](https://github.com/amazon-php/sp-api-sdk/pull/3) - **signing HTTP requests** - [@norberttech](https://github.com/norberttech)
- [#3](https://github.com/amazon-php/sp-api-sdk/pull/3) - **deserialization of error messages** - [@norberttech](https://github.com/norberttech)
- [ce2f6f](https://github.com/amazon-php/sp-api-sdk/commit/ce2f6f86400e29c6e3b27e03f621cb43dfc95db5) - **SDK namespaces** - [@norberttech](https://github.com/norberttech)

### Updated
- [60faad](https://github.com/amazon-php/sp-api-sdk/commit/60faad8e9a37f4269359aea24a0b4245a831ef6b) - **github workflow name and disabled schedule** - [@norberttech](https://github.com/norberttech)
- [26aba3](https://github.com/amazon-php/sp-api-sdk/commit/26aba3017bcfca3ca6be9bed06165fbeb191998d) - **SDK to latest open api schema** - [@norberttech](https://github.com/norberttech)
- [c51271](https://github.com/amazon-php/sp-api-sdk/commit/c51271af3c5e6be6b8de759ac4a6abb02d8b0bc0) - **README** - [@norberttech](https://github.com/norberttech)

### Removed
- [21a1ed](https://github.com/amazon-php/sp-api-sdk/commit/21a1ed4ee692213a7b85bdd9ce0fa1fcdb3b3246) - **sudo from composer generate** - [@norberttech](https://github.com/norberttech)
- [#4](https://github.com/amazon-php/sp-api-sdk/pull/4) - **httpInfo operation methods that are replaced by logger** - [@norberttech](https://github.com/norberttech)

Generated by [Automation](https://github.com/aeon-php/automation)