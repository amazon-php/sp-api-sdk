docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/aplus-content-api-model/aplusContent_2020-11-01.json \
    -c /sp-api/config/generator-aplus.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/authorization-api-model/authorization.json \
    -c /sp-api/config/generator-authorization.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItemsV0.json \
    -c /sp-api/config/generator-catalog-item.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inbound-eligibility-api-model/fbaInbound.json \
    -c /sp-api/config/generator-fba-inbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inventory-api-model/fbaInventory.json \
    -c /sp-api/config/generator-fba-inventory.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-small-and-light-api-model/fbaSmallandLight.json \
    -c /sp-api/config/generator-fba-small-and-light.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/feeds-api-model/feeds_2021-06-30.json \
    -c /sp-api/config/generator-feeds.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/finances-api-model/financesV0.json \
    -c /sp-api/config/generator-finances.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-inbound-api-model/fulfillmentInboundV0.json \
    -c /sp-api/config/generator-fulfillment-inbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-outbound-api-model/fulfillmentOutbound_2020-07-01.json \
    -c /sp-api/config/generator-fulfillment-outbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-items-api-model/listingsItems_2020-09-01.json \
    -c /sp-api/config/generator-listings-items.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/merchant-fulfillment-api-model/merchantFulfillmentV0.json \
    -c /sp-api/config/generator-merchant-fulfillment.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --skip-validate-spec

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/messaging-api-model/messaging.json \
    -c /sp-api/config/generator-messaging.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/notifications-api-model/notifications.json \
    -c /sp-api/config/generator-notifications.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/orders-api-model/ordersV0.json \
    -c /sp-api/config/generator-orders.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-fees-api-model/productFeesV0.json \
    -c /sp-api/config/generator-product-fees.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-pricing-api-model/productPricingV0.json \
    -c /sp-api/config/generator-product-pricing.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-type-definitions-api-model/definitionsProductTypes_2020-09-01.json \
    -c /sp-api/config/generator-product-types-definitions.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/reports-api-model/reports_2020-09-04.json \
    -c /sp-api/config/generator-reports.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sales-api-model/sales.json \
    -c /sp-api/config/generator-sales.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sellers-api-model/sellers.json \
    -c /sp-api/config/generator-sellers.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/services-api-model/services.json \
    -c /sp-api/config/generator-services.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipment-invoicing-api-model/shipmentInvoicingV0.json \
    -c /sp-api/config/generator-shipment-invoicing.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shipping.json \
    -c /sp-api/config/generator-shipping.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --skip-validate-spec

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/solicitations-api-model/solicitations.json \
    -c /sp-api/config/generator-solicitations.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/tokens-api-model/tokens_2021-03-01.json \
    -c /sp-api/config/generator-tokens.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api

docker run --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/uploads-api-model/uploads_2020-11-01.json \
    -c /sp-api/config/generator-uploads.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api