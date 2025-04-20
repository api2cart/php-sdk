# OpenAPIClient-php

API2Cart


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_cart_add = new \OpenAPI\Client\Model\AccountCartAdd(); // \OpenAPI\Client\Model\AccountCartAdd

try {
    $result = $apiInstance->accountCartAdd($account_cart_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCartAdd: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.api2cart.com/v1.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**accountCartAdd**](docs/Api/AccountApi.md#accountcartadd) | **POST** /account.cart.add.json | account.cart.add
*AccountApi* | [**accountCartList**](docs/Api/AccountApi.md#accountcartlist) | **GET** /account.cart.list.json | account.cart.list
*AccountApi* | [**accountConfigUpdate**](docs/Api/AccountApi.md#accountconfigupdate) | **PUT** /account.config.update.json | account.config.update
*AccountApi* | [**accountFailedWebhooks**](docs/Api/AccountApi.md#accountfailedwebhooks) | **GET** /account.failed_webhooks.json | account.failed_webhooks
*AccountApi* | [**accountSupportedPlatforms**](docs/Api/AccountApi.md#accountsupportedplatforms) | **GET** /account.supported_platforms.json | account.supported_platforms
*AttributeApi* | [**attributeAdd**](docs/Api/AttributeApi.md#attributeadd) | **POST** /attribute.add.json | attribute.add
*AttributeApi* | [**attributeAssignGroup**](docs/Api/AttributeApi.md#attributeassigngroup) | **POST** /attribute.assign.group.json | attribute.assign.group
*AttributeApi* | [**attributeAssignSet**](docs/Api/AttributeApi.md#attributeassignset) | **POST** /attribute.assign.set.json | attribute.assign.set
*AttributeApi* | [**attributeAttributesetList**](docs/Api/AttributeApi.md#attributeattributesetlist) | **GET** /attribute.attributeset.list.json | attribute.attributeset.list
*AttributeApi* | [**attributeCount**](docs/Api/AttributeApi.md#attributecount) | **GET** /attribute.count.json | attribute.count
*AttributeApi* | [**attributeDelete**](docs/Api/AttributeApi.md#attributedelete) | **DELETE** /attribute.delete.json | attribute.delete
*AttributeApi* | [**attributeGroupList**](docs/Api/AttributeApi.md#attributegrouplist) | **GET** /attribute.group.list.json | attribute.group.list
*AttributeApi* | [**attributeInfo**](docs/Api/AttributeApi.md#attributeinfo) | **GET** /attribute.info.json | attribute.info
*AttributeApi* | [**attributeList**](docs/Api/AttributeApi.md#attributelist) | **GET** /attribute.list.json | attribute.list
*AttributeApi* | [**attributeTypeList**](docs/Api/AttributeApi.md#attributetypelist) | **GET** /attribute.type.list.json | attribute.type.list
*AttributeApi* | [**attributeUnassignGroup**](docs/Api/AttributeApi.md#attributeunassigngroup) | **POST** /attribute.unassign.group.json | attribute.unassign.group
*AttributeApi* | [**attributeUnassignSet**](docs/Api/AttributeApi.md#attributeunassignset) | **POST** /attribute.unassign.set.json | attribute.unassign.set
*AttributeApi* | [**attributeUpdate**](docs/Api/AttributeApi.md#attributeupdate) | **PUT** /attribute.update.json | attribute.update
*AttributeApi* | [**attributeValueAdd**](docs/Api/AttributeApi.md#attributevalueadd) | **POST** /attribute.value.add.json | attribute.value.add
*AttributeApi* | [**attributeValueDelete**](docs/Api/AttributeApi.md#attributevaluedelete) | **DELETE** /attribute.value.delete.json | attribute.value.delete
*AttributeApi* | [**attributeValueUpdate**](docs/Api/AttributeApi.md#attributevalueupdate) | **PUT** /attribute.value.update.json | attribute.value.update
*BasketApi* | [**basketInfo**](docs/Api/BasketApi.md#basketinfo) | **GET** /basket.info.json | basket.info
*BasketApi* | [**basketItemAdd**](docs/Api/BasketApi.md#basketitemadd) | **POST** /basket.item.add.json | basket.item.add
*BasketApi* | [**basketLiveShippingServiceCreate**](docs/Api/BasketApi.md#basketliveshippingservicecreate) | **POST** /basket.live_shipping_service.create.json | basket.live_shipping_service.create
*BasketApi* | [**basketLiveShippingServiceDelete**](docs/Api/BasketApi.md#basketliveshippingservicedelete) | **DELETE** /basket.live_shipping_service.delete.json | basket.live_shipping_service.delete
*BasketApi* | [**basketLiveShippingServiceList**](docs/Api/BasketApi.md#basketliveshippingservicelist) | **GET** /basket.live_shipping_service.list.json | basket.live_shipping_service.list
*BatchApi* | [**batchJobList**](docs/Api/BatchApi.md#batchjoblist) | **GET** /batch.job.list.json | batch.job.list
*BatchApi* | [**batchJobResult**](docs/Api/BatchApi.md#batchjobresult) | **GET** /batch.job.result.json | batch.job.result
*BridgeApi* | [**bridgeDelete**](docs/Api/BridgeApi.md#bridgedelete) | **POST** /bridge.delete.json | bridge.delete
*BridgeApi* | [**bridgeDownload**](docs/Api/BridgeApi.md#bridgedownload) | **GET** /bridge.download.file | bridge.download
*BridgeApi* | [**bridgeUpdate**](docs/Api/BridgeApi.md#bridgeupdate) | **POST** /bridge.update.json | bridge.update
*CartApi* | [**cartBridge**](docs/Api/CartApi.md#cartbridge) | **GET** /cart.bridge.json | cart.bridge
*CartApi* | [**cartCatalogPriceRulesCount**](docs/Api/CartApi.md#cartcatalogpricerulescount) | **GET** /cart.catalog_price_rules.count.json | cart.catalog_price_rules.count
*CartApi* | [**cartCatalogPriceRulesList**](docs/Api/CartApi.md#cartcatalogpriceruleslist) | **GET** /cart.catalog_price_rules.list.json | cart.catalog_price_rules.list
*CartApi* | [**cartClearCache**](docs/Api/CartApi.md#cartclearcache) | **POST** /cart.clear_cache.json | cart.clear_cache
*CartApi* | [**cartConfig**](docs/Api/CartApi.md#cartconfig) | **GET** /cart.config.json | cart.config
*CartApi* | [**cartConfigUpdate**](docs/Api/CartApi.md#cartconfigupdate) | **PUT** /cart.config.update.json | cart.config.update
*CartApi* | [**cartCouponAdd**](docs/Api/CartApi.md#cartcouponadd) | **POST** /cart.coupon.add.json | cart.coupon.add
*CartApi* | [**cartCouponConditionAdd**](docs/Api/CartApi.md#cartcouponconditionadd) | **POST** /cart.coupon.condition.add.json | cart.coupon.condition.add
*CartApi* | [**cartCouponCount**](docs/Api/CartApi.md#cartcouponcount) | **GET** /cart.coupon.count.json | cart.coupon.count
*CartApi* | [**cartCouponDelete**](docs/Api/CartApi.md#cartcoupondelete) | **DELETE** /cart.coupon.delete.json | cart.coupon.delete
*CartApi* | [**cartCouponList**](docs/Api/CartApi.md#cartcouponlist) | **GET** /cart.coupon.list.json | cart.coupon.list
*CartApi* | [**cartCreate**](docs/Api/CartApi.md#cartcreate) | **POST** /cart.create.json | cart.create
*CartApi* | [**cartDelete**](docs/Api/CartApi.md#cartdelete) | **DELETE** /cart.delete.json | cart.delete
*CartApi* | [**cartDisconnect**](docs/Api/CartApi.md#cartdisconnect) | **GET** /cart.disconnect.json | cart.disconnect
*CartApi* | [**cartGiftcardAdd**](docs/Api/CartApi.md#cartgiftcardadd) | **POST** /cart.giftcard.add.json | cart.giftcard.add
*CartApi* | [**cartGiftcardCount**](docs/Api/CartApi.md#cartgiftcardcount) | **GET** /cart.giftcard.count.json | cart.giftcard.count
*CartApi* | [**cartGiftcardDelete**](docs/Api/CartApi.md#cartgiftcarddelete) | **DELETE** /cart.giftcard.delete.json | cart.giftcard.delete
*CartApi* | [**cartGiftcardList**](docs/Api/CartApi.md#cartgiftcardlist) | **GET** /cart.giftcard.list.json | cart.giftcard.list
*CartApi* | [**cartInfo**](docs/Api/CartApi.md#cartinfo) | **GET** /cart.info.json | cart.info
*CartApi* | [**cartList**](docs/Api/CartApi.md#cartlist) | **GET** /cart.list.json | cart.list
*CartApi* | [**cartMetaDataList**](docs/Api/CartApi.md#cartmetadatalist) | **GET** /cart.meta_data.list.json | cart.meta_data.list
*CartApi* | [**cartMetaDataSet**](docs/Api/CartApi.md#cartmetadataset) | **POST** /cart.meta_data.set.json | cart.meta_data.set
*CartApi* | [**cartMetaDataUnset**](docs/Api/CartApi.md#cartmetadataunset) | **DELETE** /cart.meta_data.unset.json | cart.meta_data.unset
*CartApi* | [**cartMethods**](docs/Api/CartApi.md#cartmethods) | **GET** /cart.methods.json | cart.methods
*CartApi* | [**cartPluginList**](docs/Api/CartApi.md#cartpluginlist) | **GET** /cart.plugin.list.json | cart.plugin.list
*CartApi* | [**cartScriptAdd**](docs/Api/CartApi.md#cartscriptadd) | **POST** /cart.script.add.json | cart.script.add
*CartApi* | [**cartScriptDelete**](docs/Api/CartApi.md#cartscriptdelete) | **DELETE** /cart.script.delete.json | cart.script.delete
*CartApi* | [**cartScriptList**](docs/Api/CartApi.md#cartscriptlist) | **GET** /cart.script.list.json | cart.script.list
*CartApi* | [**cartShippingZonesList**](docs/Api/CartApi.md#cartshippingzoneslist) | **GET** /cart.shipping_zones.list.json | cart.shipping_zones.list
*CartApi* | [**cartValidate**](docs/Api/CartApi.md#cartvalidate) | **GET** /cart.validate.json | cart.validate
*CategoryApi* | [**categoryAdd**](docs/Api/CategoryApi.md#categoryadd) | **POST** /category.add.json | category.add
*CategoryApi* | [**categoryAddBatch**](docs/Api/CategoryApi.md#categoryaddbatch) | **POST** /category.add.batch.json | category.add.batch
*CategoryApi* | [**categoryAssign**](docs/Api/CategoryApi.md#categoryassign) | **POST** /category.assign.json | category.assign
*CategoryApi* | [**categoryCount**](docs/Api/CategoryApi.md#categorycount) | **GET** /category.count.json | category.count
*CategoryApi* | [**categoryDelete**](docs/Api/CategoryApi.md#categorydelete) | **DELETE** /category.delete.json | category.delete
*CategoryApi* | [**categoryFind**](docs/Api/CategoryApi.md#categoryfind) | **GET** /category.find.json | category.find
*CategoryApi* | [**categoryImageAdd**](docs/Api/CategoryApi.md#categoryimageadd) | **POST** /category.image.add.json | category.image.add
*CategoryApi* | [**categoryImageDelete**](docs/Api/CategoryApi.md#categoryimagedelete) | **DELETE** /category.image.delete.json | category.image.delete
*CategoryApi* | [**categoryInfo**](docs/Api/CategoryApi.md#categoryinfo) | **GET** /category.info.json | category.info
*CategoryApi* | [**categoryList**](docs/Api/CategoryApi.md#categorylist) | **GET** /category.list.json | category.list
*CategoryApi* | [**categoryUnassign**](docs/Api/CategoryApi.md#categoryunassign) | **POST** /category.unassign.json | category.unassign
*CategoryApi* | [**categoryUpdate**](docs/Api/CategoryApi.md#categoryupdate) | **PUT** /category.update.json | category.update
*CustomerApi* | [**customerAdd**](docs/Api/CustomerApi.md#customeradd) | **POST** /customer.add.json | customer.add
*CustomerApi* | [**customerAddressAdd**](docs/Api/CustomerApi.md#customeraddressadd) | **POST** /customer.address.add.json | customer.address.add
*CustomerApi* | [**customerAttributeList**](docs/Api/CustomerApi.md#customerattributelist) | **GET** /customer.attribute.list.json | customer.attribute.list
*CustomerApi* | [**customerCount**](docs/Api/CustomerApi.md#customercount) | **GET** /customer.count.json | customer.count
*CustomerApi* | [**customerDelete**](docs/Api/CustomerApi.md#customerdelete) | **DELETE** /customer.delete.json | customer.delete
*CustomerApi* | [**customerFind**](docs/Api/CustomerApi.md#customerfind) | **GET** /customer.find.json | customer.find
*CustomerApi* | [**customerGroupAdd**](docs/Api/CustomerApi.md#customergroupadd) | **POST** /customer.group.add.json | customer.group.add
*CustomerApi* | [**customerGroupList**](docs/Api/CustomerApi.md#customergrouplist) | **GET** /customer.group.list.json | customer.group.list
*CustomerApi* | [**customerInfo**](docs/Api/CustomerApi.md#customerinfo) | **GET** /customer.info.json | customer.info
*CustomerApi* | [**customerList**](docs/Api/CustomerApi.md#customerlist) | **GET** /customer.list.json | customer.list
*CustomerApi* | [**customerUpdate**](docs/Api/CustomerApi.md#customerupdate) | **PUT** /customer.update.json | customer.update
*CustomerApi* | [**customerWishlistList**](docs/Api/CustomerApi.md#customerwishlistlist) | **GET** /customer.wishlist.list.json | customer.wishlist.list
*MarketplaceApi* | [**marketplaceProductFind**](docs/Api/MarketplaceApi.md#marketplaceproductfind) | **GET** /marketplace.product.find.json | marketplace.product.find
*OrderApi* | [**orderAbandonedList**](docs/Api/OrderApi.md#orderabandonedlist) | **GET** /order.abandoned.list.json | order.abandoned.list
*OrderApi* | [**orderAdd**](docs/Api/OrderApi.md#orderadd) | **POST** /order.add.json | order.add
*OrderApi* | [**orderCount**](docs/Api/OrderApi.md#ordercount) | **GET** /order.count.json | order.count
*OrderApi* | [**orderFinancialStatusList**](docs/Api/OrderApi.md#orderfinancialstatuslist) | **GET** /order.financial_status.list.json | order.financial_status.list
*OrderApi* | [**orderFind**](docs/Api/OrderApi.md#orderfind) | **GET** /order.find.json | order.find
*OrderApi* | [**orderFulfillmentStatusList**](docs/Api/OrderApi.md#orderfulfillmentstatuslist) | **GET** /order.fulfillment_status.list.json | order.fulfillment_status.list
*OrderApi* | [**orderInfo**](docs/Api/OrderApi.md#orderinfo) | **GET** /order.info.json | order.info
*OrderApi* | [**orderList**](docs/Api/OrderApi.md#orderlist) | **GET** /order.list.json | order.list
*OrderApi* | [**orderPreestimateShippingList**](docs/Api/OrderApi.md#orderpreestimateshippinglist) | **POST** /order.preestimate_shipping.list.json | order.preestimate_shipping.list
*OrderApi* | [**orderRefundAdd**](docs/Api/OrderApi.md#orderrefundadd) | **POST** /order.refund.add.json | order.refund.add
*OrderApi* | [**orderReturnAdd**](docs/Api/OrderApi.md#orderreturnadd) | **POST** /order.return.add.json | order.return.add
*OrderApi* | [**orderReturnDelete**](docs/Api/OrderApi.md#orderreturndelete) | **DELETE** /order.return.delete.json | order.return.delete
*OrderApi* | [**orderReturnUpdate**](docs/Api/OrderApi.md#orderreturnupdate) | **PUT** /order.return.update.json | order.return.update
*OrderApi* | [**orderShipmentAdd**](docs/Api/OrderApi.md#ordershipmentadd) | **POST** /order.shipment.add.json | order.shipment.add
*OrderApi* | [**orderShipmentAddBatch**](docs/Api/OrderApi.md#ordershipmentaddbatch) | **POST** /order.shipment.add.batch.json | order.shipment.add.batch
*OrderApi* | [**orderShipmentDelete**](docs/Api/OrderApi.md#ordershipmentdelete) | **DELETE** /order.shipment.delete.json | order.shipment.delete
*OrderApi* | [**orderShipmentInfo**](docs/Api/OrderApi.md#ordershipmentinfo) | **GET** /order.shipment.info.json | order.shipment.info
*OrderApi* | [**orderShipmentList**](docs/Api/OrderApi.md#ordershipmentlist) | **GET** /order.shipment.list.json | order.shipment.list
*OrderApi* | [**orderShipmentTrackingAdd**](docs/Api/OrderApi.md#ordershipmenttrackingadd) | **POST** /order.shipment.tracking.add.json | order.shipment.tracking.add
*OrderApi* | [**orderShipmentUpdate**](docs/Api/OrderApi.md#ordershipmentupdate) | **PUT** /order.shipment.update.json | order.shipment.update
*OrderApi* | [**orderStatusList**](docs/Api/OrderApi.md#orderstatuslist) | **GET** /order.status.list.json | order.status.list
*OrderApi* | [**orderTransactionList**](docs/Api/OrderApi.md#ordertransactionlist) | **GET** /order.transaction.list.json | order.transaction.list
*OrderApi* | [**orderUpdate**](docs/Api/OrderApi.md#orderupdate) | **PUT** /order.update.json | order.update
*ProductApi* | [**productAdd**](docs/Api/ProductApi.md#productadd) | **POST** /product.add.json | product.add
*ProductApi* | [**productAddBatch**](docs/Api/ProductApi.md#productaddbatch) | **POST** /product.add.batch.json | product.add.batch
*ProductApi* | [**productAttributeList**](docs/Api/ProductApi.md#productattributelist) | **GET** /product.attribute.list.json | product.attribute.list
*ProductApi* | [**productAttributeValueSet**](docs/Api/ProductApi.md#productattributevalueset) | **POST** /product.attribute.value.set.json | product.attribute.value.set
*ProductApi* | [**productAttributeValueUnset**](docs/Api/ProductApi.md#productattributevalueunset) | **POST** /product.attribute.value.unset.json | product.attribute.value.unset
*ProductApi* | [**productBrandList**](docs/Api/ProductApi.md#productbrandlist) | **GET** /product.brand.list.json | product.brand.list
*ProductApi* | [**productChildItemFind**](docs/Api/ProductApi.md#productchilditemfind) | **GET** /product.child_item.find.json | product.child_item.find
*ProductApi* | [**productChildItemInfo**](docs/Api/ProductApi.md#productchilditeminfo) | **GET** /product.child_item.info.json | product.child_item.info
*ProductApi* | [**productChildItemList**](docs/Api/ProductApi.md#productchilditemlist) | **GET** /product.child_item.list.json | product.child_item.list
*ProductApi* | [**productCount**](docs/Api/ProductApi.md#productcount) | **GET** /product.count.json | product.count
*ProductApi* | [**productCurrencyAdd**](docs/Api/ProductApi.md#productcurrencyadd) | **POST** /product.currency.add.json | product.currency.add
*ProductApi* | [**productCurrencyList**](docs/Api/ProductApi.md#productcurrencylist) | **GET** /product.currency.list.json | product.currency.list
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **DELETE** /product.delete.json | product.delete
*ProductApi* | [**productDeleteBatch**](docs/Api/ProductApi.md#productdeletebatch) | **POST** /product.delete.batch.json | product.delete.batch
*ProductApi* | [**productFields**](docs/Api/ProductApi.md#productfields) | **GET** /product.fields.json | product.fields
*ProductApi* | [**productFind**](docs/Api/ProductApi.md#productfind) | **GET** /product.find.json | product.find
*ProductApi* | [**productImageAdd**](docs/Api/ProductApi.md#productimageadd) | **POST** /product.image.add.json | product.image.add
*ProductApi* | [**productImageDelete**](docs/Api/ProductApi.md#productimagedelete) | **DELETE** /product.image.delete.json | product.image.delete
*ProductApi* | [**productImageUpdate**](docs/Api/ProductApi.md#productimageupdate) | **PUT** /product.image.update.json | product.image.update
*ProductApi* | [**productInfo**](docs/Api/ProductApi.md#productinfo) | **GET** /product.info.json | product.info
*ProductApi* | [**productList**](docs/Api/ProductApi.md#productlist) | **GET** /product.list.json | product.list
*ProductApi* | [**productManufacturerAdd**](docs/Api/ProductApi.md#productmanufactureradd) | **POST** /product.manufacturer.add.json | product.manufacturer.add
*ProductApi* | [**productOptionAdd**](docs/Api/ProductApi.md#productoptionadd) | **POST** /product.option.add.json | product.option.add
*ProductApi* | [**productOptionAssign**](docs/Api/ProductApi.md#productoptionassign) | **POST** /product.option.assign.json | product.option.assign
*ProductApi* | [**productOptionDelete**](docs/Api/ProductApi.md#productoptiondelete) | **DELETE** /product.option.delete.json | product.option.delete
*ProductApi* | [**productOptionList**](docs/Api/ProductApi.md#productoptionlist) | **GET** /product.option.list.json | product.option.list
*ProductApi* | [**productOptionValueAdd**](docs/Api/ProductApi.md#productoptionvalueadd) | **POST** /product.option.value.add.json | product.option.value.add
*ProductApi* | [**productOptionValueAssign**](docs/Api/ProductApi.md#productoptionvalueassign) | **POST** /product.option.value.assign.json | product.option.value.assign
*ProductApi* | [**productOptionValueDelete**](docs/Api/ProductApi.md#productoptionvaluedelete) | **DELETE** /product.option.value.delete.json | product.option.value.delete
*ProductApi* | [**productOptionValueUpdate**](docs/Api/ProductApi.md#productoptionvalueupdate) | **PUT** /product.option.value.update.json | product.option.value.update
*ProductApi* | [**productPriceAdd**](docs/Api/ProductApi.md#productpriceadd) | **POST** /product.price.add.json | product.price.add
*ProductApi* | [**productPriceDelete**](docs/Api/ProductApi.md#productpricedelete) | **DELETE** /product.price.delete.json | product.price.delete
*ProductApi* | [**productPriceUpdate**](docs/Api/ProductApi.md#productpriceupdate) | **PUT** /product.price.update.json | product.price.update
*ProductApi* | [**productReviewList**](docs/Api/ProductApi.md#productreviewlist) | **GET** /product.review.list.json | product.review.list
*ProductApi* | [**productStoreAssign**](docs/Api/ProductApi.md#productstoreassign) | **POST** /product.store.assign.json | product.store.assign
*ProductApi* | [**productTaxAdd**](docs/Api/ProductApi.md#producttaxadd) | **POST** /product.tax.add.json | product.tax.add
*ProductApi* | [**productUpdate**](docs/Api/ProductApi.md#productupdate) | **PUT** /product.update.json | product.update
*ProductApi* | [**productUpdateBatch**](docs/Api/ProductApi.md#productupdatebatch) | **POST** /product.update.batch.json | product.update.batch
*ProductApi* | [**productVariantAdd**](docs/Api/ProductApi.md#productvariantadd) | **POST** /product.variant.add.json | product.variant.add
*ProductApi* | [**productVariantAddBatch**](docs/Api/ProductApi.md#productvariantaddbatch) | **POST** /product.variant.add.batch.json | product.variant.add.batch
*ProductApi* | [**productVariantCount**](docs/Api/ProductApi.md#productvariantcount) | **GET** /product.variant.count.json | product.variant.count
*ProductApi* | [**productVariantDelete**](docs/Api/ProductApi.md#productvariantdelete) | **DELETE** /product.variant.delete.json | product.variant.delete
*ProductApi* | [**productVariantDeleteBatch**](docs/Api/ProductApi.md#productvariantdeletebatch) | **POST** /product.variant.delete.batch.json | product.variant.delete.batch
*ProductApi* | [**productVariantImageAdd**](docs/Api/ProductApi.md#productvariantimageadd) | **POST** /product.variant.image.add.json | product.variant.image.add
*ProductApi* | [**productVariantImageDelete**](docs/Api/ProductApi.md#productvariantimagedelete) | **DELETE** /product.variant.image.delete.json | product.variant.image.delete
*ProductApi* | [**productVariantInfo**](docs/Api/ProductApi.md#productvariantinfo) | **GET** /product.variant.info.json | product.variant.info
*ProductApi* | [**productVariantList**](docs/Api/ProductApi.md#productvariantlist) | **GET** /product.variant.list.json | product.variant.list
*ProductApi* | [**productVariantPriceAdd**](docs/Api/ProductApi.md#productvariantpriceadd) | **POST** /product.variant.price.add.json | product.variant.price.add
*ProductApi* | [**productVariantPriceDelete**](docs/Api/ProductApi.md#productvariantpricedelete) | **DELETE** /product.variant.price.delete.json | product.variant.price.delete
*ProductApi* | [**productVariantPriceUpdate**](docs/Api/ProductApi.md#productvariantpriceupdate) | **PUT** /product.variant.price.update.json | product.variant.price.update
*ProductApi* | [**productVariantUpdate**](docs/Api/ProductApi.md#productvariantupdate) | **PUT** /product.variant.update.json | product.variant.update
*ProductApi* | [**productVariantUpdateBatch**](docs/Api/ProductApi.md#productvariantupdatebatch) | **POST** /product.variant.update.batch.json | product.variant.update.batch
*ReturnApi* | [**returnActionList**](docs/Api/ReturnApi.md#returnactionlist) | **GET** /return.action.list.json | return.action.list
*ReturnApi* | [**returnCount**](docs/Api/ReturnApi.md#returncount) | **GET** /return.count.json | return.count
*ReturnApi* | [**returnInfo**](docs/Api/ReturnApi.md#returninfo) | **GET** /return.info.json | return.info
*ReturnApi* | [**returnList**](docs/Api/ReturnApi.md#returnlist) | **GET** /return.list.json | return.list
*ReturnApi* | [**returnReasonList**](docs/Api/ReturnApi.md#returnreasonlist) | **GET** /return.reason.list.json | return.reason.list
*ReturnApi* | [**returnStatusList**](docs/Api/ReturnApi.md#returnstatuslist) | **GET** /return.status.list.json | return.status.list
*SubscriberApi* | [**subscriberList**](docs/Api/SubscriberApi.md#subscriberlist) | **GET** /subscriber.list.json | subscriber.list
*TaxApi* | [**taxClassInfo**](docs/Api/TaxApi.md#taxclassinfo) | **GET** /tax.class.info.json | tax.class.info
*TaxApi* | [**taxClassList**](docs/Api/TaxApi.md#taxclasslist) | **GET** /tax.class.list.json | tax.class.list
*WebhookApi* | [**webhookCount**](docs/Api/WebhookApi.md#webhookcount) | **GET** /webhook.count.json | webhook.count
*WebhookApi* | [**webhookCreate**](docs/Api/WebhookApi.md#webhookcreate) | **POST** /webhook.create.json | webhook.create
*WebhookApi* | [**webhookDelete**](docs/Api/WebhookApi.md#webhookdelete) | **DELETE** /webhook.delete.json | webhook.delete
*WebhookApi* | [**webhookEvents**](docs/Api/WebhookApi.md#webhookevents) | **GET** /webhook.events.json | webhook.events
*WebhookApi* | [**webhookList**](docs/Api/WebhookApi.md#webhooklist) | **GET** /webhook.list.json | webhook.list
*WebhookApi* | [**webhookUpdate**](docs/Api/WebhookApi.md#webhookupdate) | **PUT** /webhook.update.json | webhook.update

## Models

- [A2CDateTime](docs/Model/A2CDateTime.md)
- [AccountCartAdd](docs/Model/AccountCartAdd.md)
- [AccountCartAdd200Response](docs/Model/AccountCartAdd200Response.md)
- [AccountCartAdd200ResponseResult](docs/Model/AccountCartAdd200ResponseResult.md)
- [AccountCartAddHybrisWebsitesInner](docs/Model/AccountCartAddHybrisWebsitesInner.md)
- [AccountCartList200Response](docs/Model/AccountCartList200Response.md)
- [AccountCartList200ResponseResult](docs/Model/AccountCartList200ResponseResult.md)
- [AccountCartList200ResponseResultCartsInner](docs/Model/AccountCartList200ResponseResultCartsInner.md)
- [AccountConfigUpdate200Response](docs/Model/AccountConfigUpdate200Response.md)
- [AccountConfigUpdate200ResponseResult](docs/Model/AccountConfigUpdate200ResponseResult.md)
- [AccountFailedWebhooks200Response](docs/Model/AccountFailedWebhooks200Response.md)
- [AccountFailedWebhooks200ResponseResult](docs/Model/AccountFailedWebhooks200ResponseResult.md)
- [AccountFailedWebhooks200ResponseResultWebhookInner](docs/Model/AccountFailedWebhooks200ResponseResultWebhookInner.md)
- [AccountSupportedPlatforms200Response](docs/Model/AccountSupportedPlatforms200Response.md)
- [AccountSupportedPlatforms200ResponseResult](docs/Model/AccountSupportedPlatforms200ResponseResult.md)
- [AccountSupportedPlatforms200ResponseResultSupportedPlatformsInner](docs/Model/AccountSupportedPlatforms200ResponseResultSupportedPlatformsInner.md)
- [AccountSupportedPlatforms200ResponseResultSupportedPlatformsInnerParams](docs/Model/AccountSupportedPlatforms200ResponseResultSupportedPlatformsInnerParams.md)
- [AccountSupportedPlatforms200ResponseResultSupportedPlatformsInnerParamsRequiredInnerInner](docs/Model/AccountSupportedPlatforms200ResponseResultSupportedPlatformsInnerParamsRequiredInnerInner.md)
- [AttributeAdd200Response](docs/Model/AttributeAdd200Response.md)
- [AttributeAdd200ResponseResult](docs/Model/AttributeAdd200ResponseResult.md)
- [AttributeAssignGroup200Response](docs/Model/AttributeAssignGroup200Response.md)
- [AttributeAssignGroup200ResponseResult](docs/Model/AttributeAssignGroup200ResponseResult.md)
- [AttributeCount200Response](docs/Model/AttributeCount200Response.md)
- [AttributeCount200ResponseResult](docs/Model/AttributeCount200ResponseResult.md)
- [AttributeDelete200Response](docs/Model/AttributeDelete200Response.md)
- [AttributeDelete200ResponseResult](docs/Model/AttributeDelete200ResponseResult.md)
- [AttributeInfo200Response](docs/Model/AttributeInfo200Response.md)
- [AttributeTypeList200Response](docs/Model/AttributeTypeList200Response.md)
- [AttributeTypeList200ResponseResult](docs/Model/AttributeTypeList200ResponseResult.md)
- [AttributeUnassignGroup200Response](docs/Model/AttributeUnassignGroup200Response.md)
- [AttributeUnassignGroup200ResponseResult](docs/Model/AttributeUnassignGroup200ResponseResult.md)
- [AttributeUpdate200Response](docs/Model/AttributeUpdate200Response.md)
- [AttributeUpdate200ResponseResult](docs/Model/AttributeUpdate200ResponseResult.md)
- [AttributeValueDelete200Response](docs/Model/AttributeValueDelete200Response.md)
- [AttributeValueDelete200ResponseResult](docs/Model/AttributeValueDelete200ResponseResult.md)
- [BaseCustomer](docs/Model/BaseCustomer.md)
- [Basket](docs/Model/Basket.md)
- [BasketInfo200Response](docs/Model/BasketInfo200Response.md)
- [BasketItem](docs/Model/BasketItem.md)
- [BasketItemAdd200Response](docs/Model/BasketItemAdd200Response.md)
- [BasketItemAdd200ResponseResult](docs/Model/BasketItemAdd200ResponseResult.md)
- [BasketItemOption](docs/Model/BasketItemOption.md)
- [BasketLiveShippingService](docs/Model/BasketLiveShippingService.md)
- [BasketLiveShippingServiceCreate200Response](docs/Model/BasketLiveShippingServiceCreate200Response.md)
- [BasketLiveShippingServiceCreate200ResponseResult](docs/Model/BasketLiveShippingServiceCreate200ResponseResult.md)
- [BasketLiveShippingServiceDelete200Response](docs/Model/BasketLiveShippingServiceDelete200Response.md)
- [BasketLiveShippingServiceDelete200ResponseResult](docs/Model/BasketLiveShippingServiceDelete200ResponseResult.md)
- [BasketLiveShippingServiceList200Response](docs/Model/BasketLiveShippingServiceList200Response.md)
- [BasketLiveShippingServiceList200ResponseResult](docs/Model/BasketLiveShippingServiceList200ResponseResult.md)
- [BatchJob](docs/Model/BatchJob.md)
- [BatchJobResult](docs/Model/BatchJobResult.md)
- [BatchJobResultItem](docs/Model/BatchJobResultItem.md)
- [Brand](docs/Model/Brand.md)
- [Carrier](docs/Model/Carrier.md)
- [Cart](docs/Model/Cart.md)
- [CartBridge200Response](docs/Model/CartBridge200Response.md)
- [CartBridge200ResponseResult](docs/Model/CartBridge200ResponseResult.md)
- [CartCatalogPriceRulesCount200Response](docs/Model/CartCatalogPriceRulesCount200Response.md)
- [CartCatalogPriceRulesCount200ResponseResult](docs/Model/CartCatalogPriceRulesCount200ResponseResult.md)
- [CartChannel](docs/Model/CartChannel.md)
- [CartClearCache200Response](docs/Model/CartClearCache200Response.md)
- [CartClearCache200ResponseResult](docs/Model/CartClearCache200ResponseResult.md)
- [CartConfig200Response](docs/Model/CartConfig200Response.md)
- [CartConfig200ResponseResult](docs/Model/CartConfig200ResponseResult.md)
- [CartConfigUpdate](docs/Model/CartConfigUpdate.md)
- [CartConfigUpdate200Response](docs/Model/CartConfigUpdate200Response.md)
- [CartCouponAdd](docs/Model/CartCouponAdd.md)
- [CartCouponAdd200Response](docs/Model/CartCouponAdd200Response.md)
- [CartCouponAdd200ResponseResult](docs/Model/CartCouponAdd200ResponseResult.md)
- [CartCouponCount200Response](docs/Model/CartCouponCount200Response.md)
- [CartCouponCount200ResponseResult](docs/Model/CartCouponCount200ResponseResult.md)
- [CartCreate](docs/Model/CartCreate.md)
- [CartDelete200Response](docs/Model/CartDelete200Response.md)
- [CartDelete200ResponseResult](docs/Model/CartDelete200ResponseResult.md)
- [CartDisconnect200Response](docs/Model/CartDisconnect200Response.md)
- [CartDisconnect200ResponseResult](docs/Model/CartDisconnect200ResponseResult.md)
- [CartGiftcardAdd200Response](docs/Model/CartGiftcardAdd200Response.md)
- [CartGiftcardAdd200ResponseResult](docs/Model/CartGiftcardAdd200ResponseResult.md)
- [CartGiftcardCount200Response](docs/Model/CartGiftcardCount200Response.md)
- [CartGiftcardCount200ResponseResult](docs/Model/CartGiftcardCount200ResponseResult.md)
- [CartInfo200Response](docs/Model/CartInfo200Response.md)
- [CartList200Response](docs/Model/CartList200Response.md)
- [CartList200ResponseResult](docs/Model/CartList200ResponseResult.md)
- [CartList200ResponseResultSupportedCartsInner](docs/Model/CartList200ResponseResultSupportedCartsInner.md)
- [CartMetaData](docs/Model/CartMetaData.md)
- [CartMethods200Response](docs/Model/CartMethods200Response.md)
- [CartMethods200ResponseResult](docs/Model/CartMethods200ResponseResult.md)
- [CartPluginList200Response](docs/Model/CartPluginList200Response.md)
- [CartPluginList200ResponseResult](docs/Model/CartPluginList200ResponseResult.md)
- [CartScriptAdd200Response](docs/Model/CartScriptAdd200Response.md)
- [CartScriptAdd200ResponseResult](docs/Model/CartScriptAdd200ResponseResult.md)
- [CartShippingMethod](docs/Model/CartShippingMethod.md)
- [CartShippingMethodRate](docs/Model/CartShippingMethodRate.md)
- [CartShippingZone](docs/Model/CartShippingZone.md)
- [CartShippingZone2](docs/Model/CartShippingZone2.md)
- [CartStoreInfo](docs/Model/CartStoreInfo.md)
- [CartValidate200Response](docs/Model/CartValidate200Response.md)
- [CartValidate200ResponseResult](docs/Model/CartValidate200ResponseResult.md)
- [CartWarehouse](docs/Model/CartWarehouse.md)
- [CatalogPriceRule](docs/Model/CatalogPriceRule.md)
- [CatalogPriceRuleAction](docs/Model/CatalogPriceRuleAction.md)
- [Category](docs/Model/Category.md)
- [CategoryAdd200Response](docs/Model/CategoryAdd200Response.md)
- [CategoryAdd200ResponseResult](docs/Model/CategoryAdd200ResponseResult.md)
- [CategoryAddBatch](docs/Model/CategoryAddBatch.md)
- [CategoryAddBatch200Response](docs/Model/CategoryAddBatch200Response.md)
- [CategoryAddBatch200ResponseResult](docs/Model/CategoryAddBatch200ResponseResult.md)
- [CategoryAddBatchPayloadInner](docs/Model/CategoryAddBatchPayloadInner.md)
- [CategoryAddBatchPayloadInnerImagesInner](docs/Model/CategoryAddBatchPayloadInnerImagesInner.md)
- [CategoryCount200Response](docs/Model/CategoryCount200Response.md)
- [CategoryCount200ResponseResult](docs/Model/CategoryCount200ResponseResult.md)
- [CategoryDelete200Response](docs/Model/CategoryDelete200Response.md)
- [CategoryDelete200ResponseResult](docs/Model/CategoryDelete200ResponseResult.md)
- [CategoryFind200Response](docs/Model/CategoryFind200Response.md)
- [CategoryFind200ResponseResult](docs/Model/CategoryFind200ResponseResult.md)
- [CategoryFind200ResponseResultCategoryInner](docs/Model/CategoryFind200ResponseResultCategoryInner.md)
- [CategoryImageAdd200Response](docs/Model/CategoryImageAdd200Response.md)
- [CategoryImageAdd200ResponseResult](docs/Model/CategoryImageAdd200ResponseResult.md)
- [CategoryInfo200Response](docs/Model/CategoryInfo200Response.md)
- [Child](docs/Model/Child.md)
- [Country](docs/Model/Country.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponAction](docs/Model/CouponAction.md)
- [CouponCode](docs/Model/CouponCode.md)
- [CouponCondition](docs/Model/CouponCondition.md)
- [CouponHistory](docs/Model/CouponHistory.md)
- [Currency](docs/Model/Currency.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAdd](docs/Model/CustomerAdd.md)
- [CustomerAdd200Response](docs/Model/CustomerAdd200Response.md)
- [CustomerAdd200ResponseResult](docs/Model/CustomerAdd200ResponseResult.md)
- [CustomerAddAddressInner](docs/Model/CustomerAddAddressInner.md)
- [CustomerAddConsentsInner](docs/Model/CustomerAddConsentsInner.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerAddressAdd](docs/Model/CustomerAddressAdd.md)
- [CustomerAttribute](docs/Model/CustomerAttribute.md)
- [CustomerAttributeValue](docs/Model/CustomerAttributeValue.md)
- [CustomerConsent](docs/Model/CustomerConsent.md)
- [CustomerCount200Response](docs/Model/CustomerCount200Response.md)
- [CustomerCount200ResponseResult](docs/Model/CustomerCount200ResponseResult.md)
- [CustomerDelete200Response](docs/Model/CustomerDelete200Response.md)
- [CustomerDelete200ResponseResult](docs/Model/CustomerDelete200ResponseResult.md)
- [CustomerFind200Response](docs/Model/CustomerFind200Response.md)
- [CustomerFind200ResponseResult](docs/Model/CustomerFind200ResponseResult.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerGroupAdd200Response](docs/Model/CustomerGroupAdd200Response.md)
- [CustomerGroupAdd200ResponseResult](docs/Model/CustomerGroupAdd200ResponseResult.md)
- [CustomerInfo200Response](docs/Model/CustomerInfo200Response.md)
- [CustomerUpdate](docs/Model/CustomerUpdate.md)
- [CustomerUpdateAddressInner](docs/Model/CustomerUpdateAddressInner.md)
- [CustomerWishList](docs/Model/CustomerWishList.md)
- [CustomerWishListItem](docs/Model/CustomerWishListItem.md)
- [Discount](docs/Model/Discount.md)
- [GiftCard](docs/Model/GiftCard.md)
- [Image](docs/Model/Image.md)
- [Info](docs/Model/Info.md)
- [Language](docs/Model/Language.md)
- [MarketplaceProduct](docs/Model/MarketplaceProduct.md)
- [Media](docs/Model/Media.md)
- [ModelResponseAttributeAttributesetList](docs/Model/ModelResponseAttributeAttributesetList.md)
- [ModelResponseAttributeGroupList](docs/Model/ModelResponseAttributeGroupList.md)
- [ModelResponseAttributeList](docs/Model/ModelResponseAttributeList.md)
- [ModelResponseBatchJobList](docs/Model/ModelResponseBatchJobList.md)
- [ModelResponseCartCatalogPriceRulesList](docs/Model/ModelResponseCartCatalogPriceRulesList.md)
- [ModelResponseCartCouponList](docs/Model/ModelResponseCartCouponList.md)
- [ModelResponseCartGiftCardList](docs/Model/ModelResponseCartGiftCardList.md)
- [ModelResponseCartMetaDataList](docs/Model/ModelResponseCartMetaDataList.md)
- [ModelResponseCartScriptList](docs/Model/ModelResponseCartScriptList.md)
- [ModelResponseCartShippingZonesList](docs/Model/ModelResponseCartShippingZonesList.md)
- [ModelResponseCategoryList](docs/Model/ModelResponseCategoryList.md)
- [ModelResponseCustomerAttributeList](docs/Model/ModelResponseCustomerAttributeList.md)
- [ModelResponseCustomerGroupList](docs/Model/ModelResponseCustomerGroupList.md)
- [ModelResponseCustomerList](docs/Model/ModelResponseCustomerList.md)
- [ModelResponseCustomerWishlistList](docs/Model/ModelResponseCustomerWishlistList.md)
- [ModelResponseMarketplaceProductFind](docs/Model/ModelResponseMarketplaceProductFind.md)
- [ModelResponseOrderAbandonedList](docs/Model/ModelResponseOrderAbandonedList.md)
- [ModelResponseOrderList](docs/Model/ModelResponseOrderList.md)
- [ModelResponseOrderPreestimateShippingList](docs/Model/ModelResponseOrderPreestimateShippingList.md)
- [ModelResponseOrderShipmentList](docs/Model/ModelResponseOrderShipmentList.md)
- [ModelResponseOrderStatusList](docs/Model/ModelResponseOrderStatusList.md)
- [ModelResponseOrderTransactionList](docs/Model/ModelResponseOrderTransactionList.md)
- [ModelResponseProductAttributeList](docs/Model/ModelResponseProductAttributeList.md)
- [ModelResponseProductBrandList](docs/Model/ModelResponseProductBrandList.md)
- [ModelResponseProductChildItemList](docs/Model/ModelResponseProductChildItemList.md)
- [ModelResponseProductCurrencyList](docs/Model/ModelResponseProductCurrencyList.md)
- [ModelResponseProductList](docs/Model/ModelResponseProductList.md)
- [ModelResponseProductOptionList](docs/Model/ModelResponseProductOptionList.md)
- [ModelResponseProductReviewList](docs/Model/ModelResponseProductReviewList.md)
- [ModelResponseReturnList](docs/Model/ModelResponseReturnList.md)
- [ModelResponseSubscriberList](docs/Model/ModelResponseSubscriberList.md)
- [ModelResponseTaxClassInfo](docs/Model/ModelResponseTaxClassInfo.md)
- [ModelResponseTaxClassList](docs/Model/ModelResponseTaxClassList.md)
- [ModelReturn](docs/Model/ModelReturn.md)
- [Order](docs/Model/Order.md)
- [OrderAbandoned](docs/Model/OrderAbandoned.md)
- [OrderAdd](docs/Model/OrderAdd.md)
- [OrderAdd200Response](docs/Model/OrderAdd200Response.md)
- [OrderAdd200ResponseResult](docs/Model/OrderAdd200ResponseResult.md)
- [OrderAddNoteAttributesInner](docs/Model/OrderAddNoteAttributesInner.md)
- [OrderAddOrderItemInner](docs/Model/OrderAddOrderItemInner.md)
- [OrderAddOrderItemInnerOrderItemOptionInner](docs/Model/OrderAddOrderItemInnerOrderItemOptionInner.md)
- [OrderAddOrderItemInnerOrderItemPropertyInner](docs/Model/OrderAddOrderItemInnerOrderItemPropertyInner.md)
- [OrderCount200Response](docs/Model/OrderCount200Response.md)
- [OrderCount200ResponseResult](docs/Model/OrderCount200ResponseResult.md)
- [OrderFinancialStatusList200Response](docs/Model/OrderFinancialStatusList200Response.md)
- [OrderFinancialStatusList200ResponseResult](docs/Model/OrderFinancialStatusList200ResponseResult.md)
- [OrderFinancialStatusList200ResponseResultOrderFinancialStatusesInner](docs/Model/OrderFinancialStatusList200ResponseResultOrderFinancialStatusesInner.md)
- [OrderFind200Response](docs/Model/OrderFind200Response.md)
- [OrderFind200ResponseResult](docs/Model/OrderFind200ResponseResult.md)
- [OrderFulfillmentStatusList200Response](docs/Model/OrderFulfillmentStatusList200Response.md)
- [OrderFulfillmentStatusList200ResponseResult](docs/Model/OrderFulfillmentStatusList200ResponseResult.md)
- [OrderInfo200Response](docs/Model/OrderInfo200Response.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemOption](docs/Model/OrderItemOption.md)
- [OrderPaymentMethod](docs/Model/OrderPaymentMethod.md)
- [OrderPreestimateShipping](docs/Model/OrderPreestimateShipping.md)
- [OrderPreestimateShippingList](docs/Model/OrderPreestimateShippingList.md)
- [OrderPreestimateShippingListOrderItemInner](docs/Model/OrderPreestimateShippingListOrderItemInner.md)
- [OrderPreestimateShippingListOrderItemInnerOrderItemOptionInner](docs/Model/OrderPreestimateShippingListOrderItemInnerOrderItemOptionInner.md)
- [OrderRefund](docs/Model/OrderRefund.md)
- [OrderRefundAdd](docs/Model/OrderRefundAdd.md)
- [OrderRefundAdd200Response](docs/Model/OrderRefundAdd200Response.md)
- [OrderRefundAdd200ResponseResult](docs/Model/OrderRefundAdd200ResponseResult.md)
- [OrderRefundAddItemsInner](docs/Model/OrderRefundAddItemsInner.md)
- [OrderReturnAdd](docs/Model/OrderReturnAdd.md)
- [OrderReturnAdd200Response](docs/Model/OrderReturnAdd200Response.md)
- [OrderReturnAdd200ResponseResult](docs/Model/OrderReturnAdd200ResponseResult.md)
- [OrderReturnAddOrderProductsInner](docs/Model/OrderReturnAddOrderProductsInner.md)
- [OrderReturnUpdate](docs/Model/OrderReturnUpdate.md)
- [OrderReturnUpdateOrderProductsInner](docs/Model/OrderReturnUpdateOrderProductsInner.md)
- [OrderShipmentAdd](docs/Model/OrderShipmentAdd.md)
- [OrderShipmentAdd200Response](docs/Model/OrderShipmentAdd200Response.md)
- [OrderShipmentAdd200ResponseResult](docs/Model/OrderShipmentAdd200ResponseResult.md)
- [OrderShipmentAddBatch](docs/Model/OrderShipmentAddBatch.md)
- [OrderShipmentAddBatchPayloadInner](docs/Model/OrderShipmentAddBatchPayloadInner.md)
- [OrderShipmentAddBatchPayloadInnerItemsInner](docs/Model/OrderShipmentAddBatchPayloadInnerItemsInner.md)
- [OrderShipmentAddItemsInner](docs/Model/OrderShipmentAddItemsInner.md)
- [OrderShipmentAddTrackingNumbersInner](docs/Model/OrderShipmentAddTrackingNumbersInner.md)
- [OrderShipmentDelete200Response](docs/Model/OrderShipmentDelete200Response.md)
- [OrderShipmentDelete200ResponseResult](docs/Model/OrderShipmentDelete200ResponseResult.md)
- [OrderShipmentInfo200Response](docs/Model/OrderShipmentInfo200Response.md)
- [OrderShipmentTrackingAdd](docs/Model/OrderShipmentTrackingAdd.md)
- [OrderShipmentTrackingAdd200Response](docs/Model/OrderShipmentTrackingAdd200Response.md)
- [OrderShipmentTrackingAdd200ResponseResult](docs/Model/OrderShipmentTrackingAdd200ResponseResult.md)
- [OrderShipmentUpdate](docs/Model/OrderShipmentUpdate.md)
- [OrderShippingMethod](docs/Model/OrderShippingMethod.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OrderStatusHistoryItem](docs/Model/OrderStatusHistoryItem.md)
- [OrderStatusRefund](docs/Model/OrderStatusRefund.md)
- [OrderStatusRefundItem](docs/Model/OrderStatusRefundItem.md)
- [OrderTotal](docs/Model/OrderTotal.md)
- [OrderTotals](docs/Model/OrderTotals.md)
- [OrderTotalsNewDiscount](docs/Model/OrderTotalsNewDiscount.md)
- [OrderTransaction](docs/Model/OrderTransaction.md)
- [Pagination](docs/Model/Pagination.md)
- [Plugin](docs/Model/Plugin.md)
- [PluginList](docs/Model/PluginList.md)
- [Product](docs/Model/Product.md)
- [ProductAdd](docs/Model/ProductAdd.md)
- [ProductAdd200Response](docs/Model/ProductAdd200Response.md)
- [ProductAdd200ResponseResult](docs/Model/ProductAdd200ResponseResult.md)
- [ProductAddBatch](docs/Model/ProductAddBatch.md)
- [ProductAddBatchPayloadInner](docs/Model/ProductAddBatchPayloadInner.md)
- [ProductAddBatchPayloadInnerAdvancedPricesInner](docs/Model/ProductAddBatchPayloadInnerAdvancedPricesInner.md)
- [ProductAddBatchPayloadInnerImagesInner](docs/Model/ProductAddBatchPayloadInnerImagesInner.md)
- [ProductAddBestOffer](docs/Model/ProductAddBestOffer.md)
- [ProductAddCertificationsInner](docs/Model/ProductAddCertificationsInner.md)
- [ProductAddCertificationsInnerFilesInner](docs/Model/ProductAddCertificationsInnerFilesInner.md)
- [ProductAddCertificationsInnerImagesInner](docs/Model/ProductAddCertificationsInnerImagesInner.md)
- [ProductAddFilesInner](docs/Model/ProductAddFilesInner.md)
- [ProductAddGroupPricesInner](docs/Model/ProductAddGroupPricesInner.md)
- [ProductAddLogisticInfoInner](docs/Model/ProductAddLogisticInfoInner.md)
- [ProductAddManufacturerInfo](docs/Model/ProductAddManufacturerInfo.md)
- [ProductAddPackageDetails](docs/Model/ProductAddPackageDetails.md)
- [ProductAddSalesTax](docs/Model/ProductAddSalesTax.md)
- [ProductAddSellerProfiles](docs/Model/ProductAddSellerProfiles.md)
- [ProductAddShippingDetailsInner](docs/Model/ProductAddShippingDetailsInner.md)
- [ProductAddSizeChart](docs/Model/ProductAddSizeChart.md)
- [ProductAddSpecificsInner](docs/Model/ProductAddSpecificsInner.md)
- [ProductAddSpecificsInnerBookingDetails](docs/Model/ProductAddSpecificsInnerBookingDetails.md)
- [ProductAddSpecificsInnerBookingDetailsAvailabilitiesInner](docs/Model/ProductAddSpecificsInnerBookingDetailsAvailabilitiesInner.md)
- [ProductAddSpecificsInnerBookingDetailsAvailabilitiesInnerTimesInner](docs/Model/ProductAddSpecificsInnerBookingDetailsAvailabilitiesInnerTimesInner.md)
- [ProductAddSpecificsInnerBookingDetailsOverridesInner](docs/Model/ProductAddSpecificsInnerBookingDetailsOverridesInner.md)
- [ProductAddSpecificsInnerFoodDetails](docs/Model/ProductAddSpecificsInnerFoodDetails.md)
- [ProductAddSpecificsInnerGroupProductsDetailsInner](docs/Model/ProductAddSpecificsInnerGroupProductsDetailsInner.md)
- [ProductAddTierPricesInner](docs/Model/ProductAddTierPricesInner.md)
- [ProductAdvancedPrice](docs/Model/ProductAdvancedPrice.md)
- [ProductAttribute](docs/Model/ProductAttribute.md)
- [ProductAttributeValueSet200Response](docs/Model/ProductAttributeValueSet200Response.md)
- [ProductAttributeValueSet200ResponseResult](docs/Model/ProductAttributeValueSet200ResponseResult.md)
- [ProductAttributeValueUnset200Response](docs/Model/ProductAttributeValueUnset200Response.md)
- [ProductAttributeValueUnset200ResponseResult](docs/Model/ProductAttributeValueUnset200ResponseResult.md)
- [ProductChildItemCombination](docs/Model/ProductChildItemCombination.md)
- [ProductChildItemFind200Response](docs/Model/ProductChildItemFind200Response.md)
- [ProductChildItemFind200ResponseResult](docs/Model/ProductChildItemFind200ResponseResult.md)
- [ProductChildItemInfo200Response](docs/Model/ProductChildItemInfo200Response.md)
- [ProductCount200Response](docs/Model/ProductCount200Response.md)
- [ProductCount200ResponseResult](docs/Model/ProductCount200ResponseResult.md)
- [ProductCurrencyAdd200Response](docs/Model/ProductCurrencyAdd200Response.md)
- [ProductCurrencyAdd200ResponseResult](docs/Model/ProductCurrencyAdd200ResponseResult.md)
- [ProductDeleteBatch](docs/Model/ProductDeleteBatch.md)
- [ProductDeleteBatchPayloadInner](docs/Model/ProductDeleteBatchPayloadInner.md)
- [ProductFind200Response](docs/Model/ProductFind200Response.md)
- [ProductFind200ResponseResult](docs/Model/ProductFind200ResponseResult.md)
- [ProductFind200ResponseResultProductInner](docs/Model/ProductFind200ResponseResultProductInner.md)
- [ProductGroupItem](docs/Model/ProductGroupItem.md)
- [ProductGroupPrice](docs/Model/ProductGroupPrice.md)
- [ProductImageAdd](docs/Model/ProductImageAdd.md)
- [ProductImageAdd200Response](docs/Model/ProductImageAdd200Response.md)
- [ProductImageAdd200ResponseResult](docs/Model/ProductImageAdd200ResponseResult.md)
- [ProductImageUpdate200Response](docs/Model/ProductImageUpdate200Response.md)
- [ProductImageUpdate200ResponseResult](docs/Model/ProductImageUpdate200ResponseResult.md)
- [ProductInfo200Response](docs/Model/ProductInfo200Response.md)
- [ProductInventory](docs/Model/ProductInventory.md)
- [ProductManufacturerAdd200Response](docs/Model/ProductManufacturerAdd200Response.md)
- [ProductManufacturerAdd200ResponseResult](docs/Model/ProductManufacturerAdd200ResponseResult.md)
- [ProductOption](docs/Model/ProductOption.md)
- [ProductOptionAdd](docs/Model/ProductOptionAdd.md)
- [ProductOptionAdd200Response](docs/Model/ProductOptionAdd200Response.md)
- [ProductOptionAdd200ResponseResult](docs/Model/ProductOptionAdd200ResponseResult.md)
- [ProductOptionAddValuesInner](docs/Model/ProductOptionAddValuesInner.md)
- [ProductOptionAssign200Response](docs/Model/ProductOptionAssign200Response.md)
- [ProductOptionAssign200ResponseResult](docs/Model/ProductOptionAssign200ResponseResult.md)
- [ProductOptionItem](docs/Model/ProductOptionItem.md)
- [ProductOptionValueAdd200Response](docs/Model/ProductOptionValueAdd200Response.md)
- [ProductOptionValueAdd200ResponseResult](docs/Model/ProductOptionValueAdd200ResponseResult.md)
- [ProductOptionValueAssign200Response](docs/Model/ProductOptionValueAssign200Response.md)
- [ProductOptionValueAssign200ResponseResult](docs/Model/ProductOptionValueAssign200ResponseResult.md)
- [ProductPriceAdd](docs/Model/ProductPriceAdd.md)
- [ProductPriceUpdate](docs/Model/ProductPriceUpdate.md)
- [ProductPriceUpdateGroupPricesInner](docs/Model/ProductPriceUpdateGroupPricesInner.md)
- [ProductReview](docs/Model/ProductReview.md)
- [ProductReviewRating](docs/Model/ProductReviewRating.md)
- [ProductTaxAdd](docs/Model/ProductTaxAdd.md)
- [ProductTaxAdd200Response](docs/Model/ProductTaxAdd200Response.md)
- [ProductTaxAdd200ResponseResult](docs/Model/ProductTaxAdd200ResponseResult.md)
- [ProductTaxAddTaxRatesInner](docs/Model/ProductTaxAddTaxRatesInner.md)
- [ProductTierPrice](docs/Model/ProductTierPrice.md)
- [ProductUpdate](docs/Model/ProductUpdate.md)
- [ProductUpdateBatch](docs/Model/ProductUpdateBatch.md)
- [ProductUpdateBatchPayloadInner](docs/Model/ProductUpdateBatchPayloadInner.md)
- [ProductUpdateBatchPayloadInnerAdvancedPricesInner](docs/Model/ProductUpdateBatchPayloadInnerAdvancedPricesInner.md)
- [ProductUpdateBatchPayloadInnerImagesInner](docs/Model/ProductUpdateBatchPayloadInnerImagesInner.md)
- [ProductVariantAdd](docs/Model/ProductVariantAdd.md)
- [ProductVariantAdd200Response](docs/Model/ProductVariantAdd200Response.md)
- [ProductVariantAdd200ResponseResult](docs/Model/ProductVariantAdd200ResponseResult.md)
- [ProductVariantAddAttributesInner](docs/Model/ProductVariantAddAttributesInner.md)
- [ProductVariantAddBatch](docs/Model/ProductVariantAddBatch.md)
- [ProductVariantAddBatchPayloadInner](docs/Model/ProductVariantAddBatchPayloadInner.md)
- [ProductVariantAddBatchPayloadInnerCombinationInner](docs/Model/ProductVariantAddBatchPayloadInnerCombinationInner.md)
- [ProductVariantCount200Response](docs/Model/ProductVariantCount200Response.md)
- [ProductVariantCount200ResponseResult](docs/Model/ProductVariantCount200ResponseResult.md)
- [ProductVariantDeleteBatch](docs/Model/ProductVariantDeleteBatch.md)
- [ProductVariantDeleteBatchPayloadInner](docs/Model/ProductVariantDeleteBatchPayloadInner.md)
- [ProductVariantImageAdd](docs/Model/ProductVariantImageAdd.md)
- [ProductVariantImageAdd200Response](docs/Model/ProductVariantImageAdd200Response.md)
- [ProductVariantImageAdd200ResponseResult](docs/Model/ProductVariantImageAdd200ResponseResult.md)
- [ProductVariantList200Response](docs/Model/ProductVariantList200Response.md)
- [ProductVariantList200ResponseResult](docs/Model/ProductVariantList200ResponseResult.md)
- [ProductVariantPriceAdd](docs/Model/ProductVariantPriceAdd.md)
- [ProductVariantPriceUpdate](docs/Model/ProductVariantPriceUpdate.md)
- [ProductVariantUpdate](docs/Model/ProductVariantUpdate.md)
- [ProductVariantUpdateBatch](docs/Model/ProductVariantUpdateBatch.md)
- [ProductVariantUpdateBatchPayloadInner](docs/Model/ProductVariantUpdateBatchPayloadInner.md)
- [ProductVariantUpdateOptionsInner](docs/Model/ProductVariantUpdateOptionsInner.md)
- [ResponseAttributeAttributesetListResult](docs/Model/ResponseAttributeAttributesetListResult.md)
- [ResponseAttributeGroupListResult](docs/Model/ResponseAttributeGroupListResult.md)
- [ResponseAttributeListResult](docs/Model/ResponseAttributeListResult.md)
- [ResponseBatchJobListResult](docs/Model/ResponseBatchJobListResult.md)
- [ResponseBatchJobResult](docs/Model/ResponseBatchJobResult.md)
- [ResponseCartCatalogPriceRulesListResult](docs/Model/ResponseCartCatalogPriceRulesListResult.md)
- [ResponseCartCouponListResult](docs/Model/ResponseCartCouponListResult.md)
- [ResponseCartGiftcardListResult](docs/Model/ResponseCartGiftcardListResult.md)
- [ResponseCartMetaDataListResult](docs/Model/ResponseCartMetaDataListResult.md)
- [ResponseCartScriptListResult](docs/Model/ResponseCartScriptListResult.md)
- [ResponseCartShippingZonesListResult](docs/Model/ResponseCartShippingZonesListResult.md)
- [ResponseCategoryListResult](docs/Model/ResponseCategoryListResult.md)
- [ResponseCustomerAttributeListResult](docs/Model/ResponseCustomerAttributeListResult.md)
- [ResponseCustomerGroupListResult](docs/Model/ResponseCustomerGroupListResult.md)
- [ResponseCustomerListResult](docs/Model/ResponseCustomerListResult.md)
- [ResponseCustomerWishlistListResult](docs/Model/ResponseCustomerWishlistListResult.md)
- [ResponseMarketplaceProductFindResult](docs/Model/ResponseMarketplaceProductFindResult.md)
- [ResponseOrderAbandonedListResult](docs/Model/ResponseOrderAbandonedListResult.md)
- [ResponseOrderListResult](docs/Model/ResponseOrderListResult.md)
- [ResponseOrderPreestimateShippingListResult](docs/Model/ResponseOrderPreestimateShippingListResult.md)
- [ResponseOrderShipmentListResult](docs/Model/ResponseOrderShipmentListResult.md)
- [ResponseOrderStatusListResult](docs/Model/ResponseOrderStatusListResult.md)
- [ResponseOrderTransactionListResult](docs/Model/ResponseOrderTransactionListResult.md)
- [ResponseProductAttributeListResult](docs/Model/ResponseProductAttributeListResult.md)
- [ResponseProductBrandListResult](docs/Model/ResponseProductBrandListResult.md)
- [ResponseProductChildItemListResult](docs/Model/ResponseProductChildItemListResult.md)
- [ResponseProductCurrencyListResult](docs/Model/ResponseProductCurrencyListResult.md)
- [ResponseProductListResult](docs/Model/ResponseProductListResult.md)
- [ResponseProductOptionListResult](docs/Model/ResponseProductOptionListResult.md)
- [ResponseProductReviewListResult](docs/Model/ResponseProductReviewListResult.md)
- [ResponseReturnListResult](docs/Model/ResponseReturnListResult.md)
- [ResponseSubscriberListResult](docs/Model/ResponseSubscriberListResult.md)
- [ResponseTaxClassInfoResult](docs/Model/ResponseTaxClassInfoResult.md)
- [ResponseTaxClassListResult](docs/Model/ResponseTaxClassListResult.md)
- [ReturnAction](docs/Model/ReturnAction.md)
- [ReturnActionList200Response](docs/Model/ReturnActionList200Response.md)
- [ReturnActionList200ResponseResult](docs/Model/ReturnActionList200ResponseResult.md)
- [ReturnCount200Response](docs/Model/ReturnCount200Response.md)
- [ReturnCount200ResponseResult](docs/Model/ReturnCount200ResponseResult.md)
- [ReturnInfo200Response](docs/Model/ReturnInfo200Response.md)
- [ReturnOrderProduct](docs/Model/ReturnOrderProduct.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnReasonList200Response](docs/Model/ReturnReasonList200Response.md)
- [ReturnReasonList200ResponseResult](docs/Model/ReturnReasonList200ResponseResult.md)
- [ReturnStatus](docs/Model/ReturnStatus.md)
- [ReturnStatusList200Response](docs/Model/ReturnStatusList200Response.md)
- [ReturnStatusList200ResponseResult](docs/Model/ReturnStatusList200ResponseResult.md)
- [Script](docs/Model/Script.md)
- [Shipment](docs/Model/Shipment.md)
- [ShipmentItem](docs/Model/ShipmentItem.md)
- [ShipmentTrackingNumber](docs/Model/ShipmentTrackingNumber.md)
- [SpecialPrice](docs/Model/SpecialPrice.md)
- [State](docs/Model/State.md)
- [Status](docs/Model/Status.md)
- [StoreAttribute](docs/Model/StoreAttribute.md)
- [StoreAttributeAttributeSet](docs/Model/StoreAttributeAttributeSet.md)
- [StoreAttributeGroup](docs/Model/StoreAttributeGroup.md)
- [Subscriber](docs/Model/Subscriber.md)
- [TaxClass](docs/Model/TaxClass.md)
- [TaxClassCountries](docs/Model/TaxClassCountries.md)
- [TaxClassRate](docs/Model/TaxClassRate.md)
- [TaxClassStates](docs/Model/TaxClassStates.md)
- [TaxClassZipCodes](docs/Model/TaxClassZipCodes.md)
- [TaxClassZipCodesRange](docs/Model/TaxClassZipCodesRange.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookCount200Response](docs/Model/WebhookCount200Response.md)
- [WebhookCount200ResponseResult](docs/Model/WebhookCount200ResponseResult.md)
- [WebhookEvents200Response](docs/Model/WebhookEvents200Response.md)
- [WebhookEvents200ResponseResult](docs/Model/WebhookEvents200ResponseResult.md)
- [WebhookEvents200ResponseResultEventsInner](docs/Model/WebhookEvents200ResponseResultEventsInner.md)
- [WebhookList200Response](docs/Model/WebhookList200Response.md)
- [WebhookList200ResponseResult](docs/Model/WebhookList200ResponseResult.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


### StoreKeyAuth

- **Type**: API key
- **API key parameter name**: x-store-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contact@api2cart.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
