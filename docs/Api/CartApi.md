# OpenAPI\Client\CartApi

All URIs are relative to https://api.api2cart.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cartBridge()**](CartApi.md#cartBridge) | **GET** /cart.bridge.json | cart.bridge |
| [**cartCatalogPriceRulesCount()**](CartApi.md#cartCatalogPriceRulesCount) | **GET** /cart.catalog_price_rules.count.json | cart.catalog_price_rules.count |
| [**cartCatalogPriceRulesList()**](CartApi.md#cartCatalogPriceRulesList) | **GET** /cart.catalog_price_rules.list.json | cart.catalog_price_rules.list |
| [**cartClearCache()**](CartApi.md#cartClearCache) | **POST** /cart.clear_cache.json | cart.clear_cache |
| [**cartConfig()**](CartApi.md#cartConfig) | **GET** /cart.config.json | cart.config |
| [**cartConfigUpdate()**](CartApi.md#cartConfigUpdate) | **PUT** /cart.config.update.json | cart.config.update |
| [**cartCouponAdd()**](CartApi.md#cartCouponAdd) | **POST** /cart.coupon.add.json | cart.coupon.add |
| [**cartCouponConditionAdd()**](CartApi.md#cartCouponConditionAdd) | **POST** /cart.coupon.condition.add.json | cart.coupon.condition.add |
| [**cartCouponCount()**](CartApi.md#cartCouponCount) | **GET** /cart.coupon.count.json | cart.coupon.count |
| [**cartCouponDelete()**](CartApi.md#cartCouponDelete) | **DELETE** /cart.coupon.delete.json | cart.coupon.delete |
| [**cartCouponList()**](CartApi.md#cartCouponList) | **GET** /cart.coupon.list.json | cart.coupon.list |
| [**cartCreate()**](CartApi.md#cartCreate) | **POST** /cart.create.json | cart.create |
| [**cartDelete()**](CartApi.md#cartDelete) | **DELETE** /cart.delete.json | cart.delete |
| [**cartDisconnect()**](CartApi.md#cartDisconnect) | **GET** /cart.disconnect.json | cart.disconnect |
| [**cartGiftcardAdd()**](CartApi.md#cartGiftcardAdd) | **POST** /cart.giftcard.add.json | cart.giftcard.add |
| [**cartGiftcardCount()**](CartApi.md#cartGiftcardCount) | **GET** /cart.giftcard.count.json | cart.giftcard.count |
| [**cartGiftcardDelete()**](CartApi.md#cartGiftcardDelete) | **DELETE** /cart.giftcard.delete.json | cart.giftcard.delete |
| [**cartGiftcardList()**](CartApi.md#cartGiftcardList) | **GET** /cart.giftcard.list.json | cart.giftcard.list |
| [**cartInfo()**](CartApi.md#cartInfo) | **GET** /cart.info.json | cart.info |
| [**cartList()**](CartApi.md#cartList) | **GET** /cart.list.json | cart.list |
| [**cartMetaDataList()**](CartApi.md#cartMetaDataList) | **GET** /cart.meta_data.list.json | cart.meta_data.list |
| [**cartMetaDataSet()**](CartApi.md#cartMetaDataSet) | **POST** /cart.meta_data.set.json | cart.meta_data.set |
| [**cartMetaDataUnset()**](CartApi.md#cartMetaDataUnset) | **DELETE** /cart.meta_data.unset.json | cart.meta_data.unset |
| [**cartMethods()**](CartApi.md#cartMethods) | **GET** /cart.methods.json | cart.methods |
| [**cartPluginList()**](CartApi.md#cartPluginList) | **GET** /cart.plugin.list.json | cart.plugin.list |
| [**cartScriptAdd()**](CartApi.md#cartScriptAdd) | **POST** /cart.script.add.json | cart.script.add |
| [**cartScriptDelete()**](CartApi.md#cartScriptDelete) | **DELETE** /cart.script.delete.json | cart.script.delete |
| [**cartScriptList()**](CartApi.md#cartScriptList) | **GET** /cart.script.list.json | cart.script.list |
| [**cartShippingZonesList()**](CartApi.md#cartShippingZonesList) | **GET** /cart.shipping_zones.list.json | cart.shipping_zones.list |
| [**cartValidate()**](CartApi.md#cartValidate) | **GET** /cart.validate.json | cart.validate |


## `cartBridge()`

```php
cartBridge(): \OpenAPI\Client\Model\CartBridge200Response
```

cart.bridge

Get bridge key and store key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cartBridge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartBridge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CartBridge200Response**](../Model/CartBridge200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCatalogPriceRulesCount()`

```php
cartCatalogPriceRulesCount(): \OpenAPI\Client\Model\CartCatalogPriceRulesCount200Response
```

cart.catalog_price_rules.count

Get count of cart catalog price rules discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cartCatalogPriceRulesCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCatalogPriceRulesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CartCatalogPriceRulesCount200Response**](../Model/CartCatalogPriceRulesCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCatalogPriceRulesList()`

```php
cartCatalogPriceRulesList($page_cursor, $start, $count, $ids, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartCatalogPriceRulesList
```

cart.catalog_price_rules.list

Get cart catalog price rules discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$ids = 24,25; // string | Retrieves  catalog_price_rules by ids
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {result{catalog_price_rules_count,catalog_price_rules{id,type,name,avail,usage_count,actions,conditions}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartCatalogPriceRulesList($page_cursor, $start, $count, $ids, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCatalogPriceRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **ids** | **string**| Retrieves  catalog_price_rules by ids | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,description&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartCatalogPriceRulesList**](../Model/ModelResponseCartCatalogPriceRulesList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartClearCache()`

```php
cartClearCache($cache_type): \OpenAPI\Client\Model\CartClearCache200Response
```

cart.clear_cache

Clear cache on store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_type = storage_cache; // string | Defines which cache should be cleared.

try {
    $result = $apiInstance->cartClearCache($cache_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartClearCache: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cache_type** | **string**| Defines which cache should be cleared. | |

### Return type

[**\OpenAPI\Client\Model\CartClearCache200Response**](../Model/CartClearCache200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartConfig()`

```php
cartConfig($params, $exclude): \OpenAPI\Client\Model\CartConfig200Response
```

cart.config

Get list of cart configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = store_name,store_url,db_prefix; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = store_name,store_url,db_prefix; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartConfig($params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;store_name,store_url,db_prefix&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartConfig200Response**](../Model/CartConfig200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartConfigUpdate()`

```php
cartConfigUpdate($cart_config_update): \OpenAPI\Client\Model\CartConfigUpdate200Response
```

cart.config.update

Use this API method to update custom data in client database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_config_update = new \OpenAPI\Client\Model\CartConfigUpdate(); // \OpenAPI\Client\Model\CartConfigUpdate

try {
    $result = $apiInstance->cartConfigUpdate($cart_config_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartConfigUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_config_update** | [**\OpenAPI\Client\Model\CartConfigUpdate**](../Model/CartConfigUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartConfigUpdate200Response**](../Model/CartConfigUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCouponAdd()`

```php
cartCouponAdd($cart_coupon_add): \OpenAPI\Client\Model\CartCouponAdd200Response
```

cart.coupon.add

Use this method to create a coupon with specified conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_coupon_add = new \OpenAPI\Client\Model\CartCouponAdd(); // \OpenAPI\Client\Model\CartCouponAdd

try {
    $result = $apiInstance->cartCouponAdd($cart_coupon_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCouponAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_coupon_add** | [**\OpenAPI\Client\Model\CartCouponAdd**](../Model/CartCouponAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartCouponAdd200Response**](../Model/CartCouponAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCouponConditionAdd()`

```php
cartCouponConditionAdd($coupon_id, $entity, $key, $operator, $value, $store_id, $target, $include_tax, $include_shipping): \OpenAPI\Client\Model\BasketLiveShippingServiceDelete200Response
```

cart.coupon.condition.add

Use this method to add additional conditions for coupon application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_id = 45845; // string | Coupon Id
$entity = order; // string | Defines condition entity type
$key = subtotal; // string | Defines condition entity attribute key
$operator = ==; // string | Defines condition operator
$value = 2; // string | Defines condition value, can be comma separated according to the operator.
$store_id = 1; // string | Store Id
$target = coupon_action; // string | Defines condition operator
$include_tax = true; // bool | Indicates whether to apply a discount for taxes.
$include_shipping = true; // bool | Indicates whether to apply a discount for shipping.

try {
    $result = $apiInstance->cartCouponConditionAdd($coupon_id, $entity, $key, $operator, $value, $store_id, $target, $include_tax, $include_shipping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCouponConditionAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon_id** | **string**| Coupon Id | |
| **entity** | **string**| Defines condition entity type | |
| **key** | **string**| Defines condition entity attribute key | |
| **operator** | **string**| Defines condition operator | |
| **value** | **string**| Defines condition value, can be comma separated according to the operator. | |
| **store_id** | **string**| Store Id | [optional] |
| **target** | **string**| Defines condition operator | [optional] [default to &#39;coupon_prerequisite&#39;] |
| **include_tax** | **bool**| Indicates whether to apply a discount for taxes. | [optional] [default to false] |
| **include_shipping** | **bool**| Indicates whether to apply a discount for shipping. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\BasketLiveShippingServiceDelete200Response**](../Model/BasketLiveShippingServiceDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCouponCount()`

```php
cartCouponCount($store_id, $date_start_from, $date_start_to, $date_end_from, $date_end_to, $avail): \OpenAPI\Client\Model\CartCouponCount200Response
```

cart.coupon.count

This method allows you to get the number of coupons. On some platforms, you can filter the coupons by the date they were active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id
$date_start_from = 2016-12-29 16:44:30; // string | Filter entity by date_start (greater or equal)
$date_start_to = 2016-12-29 16:44:30; // string | Filter entity by date_start (less or equal)
$date_end_from = 2016-12-29 16:44:30; // string | Filter entity by date_end (greater or equal)
$date_end_to = 2016-12-29 16:44:30; // string | Filter entity by date_end (less or equal)
$avail = false; // bool | Defines category's visibility status

try {
    $result = $apiInstance->cartCouponCount($store_id, $date_start_from, $date_start_to, $date_end_from, $date_end_to, $avail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCouponCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |
| **date_start_from** | **string**| Filter entity by date_start (greater or equal) | [optional] |
| **date_start_to** | **string**| Filter entity by date_start (less or equal) | [optional] |
| **date_end_from** | **string**| Filter entity by date_end (greater or equal) | [optional] |
| **date_end_to** | **string**| Filter entity by date_end (less or equal) | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\CartCouponCount200Response**](../Model/CartCouponCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCouponDelete()`

```php
cartCouponDelete($id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

cart.coupon.delete

Delete coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartCouponDelete($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCouponDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeDelete200Response**](../Model/AttributeDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCouponList()`

```php
cartCouponList($page_cursor, $start, $count, $coupons_ids, $store_id, $date_start_from, $date_start_to, $date_end_from, $date_end_to, $avail, $lang_id, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartCouponList
```

cart.coupon.list

Get cart coupon discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$coupons_ids = 1,2,3; // string | Filter coupons by ids
$store_id = 1; // string | Filter coupons by store id
$date_start_from = 2016-12-29 16:44:30; // string | Filter entity by date_start (greater or equal)
$date_start_to = 2016-12-29 16:44:30; // string | Filter entity by date_start (less or equal)
$date_end_from = 2016-12-29 16:44:30; // string | Filter entity by date_end (greater or equal)
$date_end_to = 2016-12-29 16:44:30; // string | Filter entity by date_end (less or equal)
$avail = false; // bool | Filter coupons by avail status
$lang_id = 3; // string | Language id
$params = id,code,type,amount; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {pagination,result{coupon_count,coupon{id,code,name,conditions,actions{scope,amount,conditions{id,value,sub-conditions}},date_start,avail}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = usage_history,type; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartCouponList($page_cursor, $start, $count, $coupons_ids, $store_id, $date_start_from, $date_start_to, $date_end_from, $date_end_to, $avail, $lang_id, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCouponList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **coupons_ids** | **string**| Filter coupons by ids | [optional] |
| **store_id** | **string**| Filter coupons by store id | [optional] |
| **date_start_from** | **string**| Filter entity by date_start (greater or equal) | [optional] |
| **date_start_to** | **string**| Filter entity by date_start (less or equal) | [optional] |
| **date_end_from** | **string**| Filter entity by date_end (greater or equal) | [optional] |
| **date_end_to** | **string**| Filter entity by date_end (less or equal) | [optional] |
| **avail** | **bool**| Filter coupons by avail status | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,code,name,description&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartCouponList**](../Model/ModelResponseCartCouponList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartCreate()`

```php
cartCreate($cart_create): \OpenAPI\Client\Model\AccountCartAdd200Response
```

cart.create

Add store to the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_create = new \OpenAPI\Client\Model\CartCreate(); // \OpenAPI\Client\Model\CartCreate

try {
    $result = $apiInstance->cartCreate($cart_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cart_create** | [**\OpenAPI\Client\Model\CartCreate**](../Model/CartCreate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountCartAdd200Response**](../Model/AccountCartAdd200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartDelete()`

```php
cartDelete($delete_bridge): \OpenAPI\Client\Model\CartDelete200Response
```

cart.delete

Remove store from API2Cart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_bridge = true; // bool | Identifies if there is a necessity to delete bridge

try {
    $result = $apiInstance->cartDelete($delete_bridge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_bridge** | **bool**| Identifies if there is a necessity to delete bridge | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\CartDelete200Response**](../Model/CartDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartDisconnect()`

```php
cartDisconnect($delete_bridge): \OpenAPI\Client\Model\CartDisconnect200Response
```

cart.disconnect

Disconnect with the store and clear store session data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_bridge = true; // bool | Identifies if there is a necessity to delete bridge

try {
    $result = $apiInstance->cartDisconnect($delete_bridge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartDisconnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delete_bridge** | **bool**| Identifies if there is a necessity to delete bridge | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CartDisconnect200Response**](../Model/CartDisconnect200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartGiftcardAdd()`

```php
cartGiftcardAdd($amount, $code, $owner_email, $recipient_email, $recipient_name, $owner_name): \OpenAPI\Client\Model\CartGiftcardAdd200Response
```

cart.giftcard.add

Use this method to create a gift card for a specified amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = 15.5; // float | Defines the gift card amount value.
$code = GFT1 A4S5 AA11 RD61; // string | Gift card code
$owner_email = jubari@hannsgroup.com; // string | Gift card owner email
$recipient_email = jubari@hannsgroup.com; // string | Gift card recipient email
$recipient_name = John Doe; // string | Gift card recipient name
$owner_name = John Doe; // string | Gift card owner name

try {
    $result = $apiInstance->cartGiftcardAdd($amount, $code, $owner_email, $recipient_email, $recipient_name, $owner_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGiftcardAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **float**| Defines the gift card amount value. | |
| **code** | **string**| Gift card code | [optional] |
| **owner_email** | **string**| Gift card owner email | [optional] |
| **recipient_email** | **string**| Gift card recipient email | [optional] |
| **recipient_name** | **string**| Gift card recipient name | [optional] |
| **owner_name** | **string**| Gift card owner name | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartGiftcardAdd200Response**](../Model/CartGiftcardAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartGiftcardCount()`

```php
cartGiftcardCount($store_id): \OpenAPI\Client\Model\CartGiftcardCount200Response
```

cart.giftcard.count

Get gift cards count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartGiftcardCount($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGiftcardCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartGiftcardCount200Response**](../Model/CartGiftcardCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartGiftcardDelete()`

```php
cartGiftcardDelete($id): \OpenAPI\Client\Model\AttributeDelete200Response
```

cart.giftcard.delete

Delete giftcard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id

try {
    $result = $apiInstance->cartGiftcardDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGiftcardDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |

### Return type

[**\OpenAPI\Client\Model\AttributeDelete200Response**](../Model/AttributeDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartGiftcardList()`

```php
cartGiftcardList($page_cursor, $start, $count, $store_id, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartGiftCardList
```

cart.giftcard.list

Get gift cards list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$store_id = 1; // string | Store Id
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {pagination,result{gift_card{id,code,amount,status}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartGiftcardList($page_cursor, $start, $count, $store_id, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartGiftcardList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **store_id** | **string**| Store Id | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,code,name&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartGiftCardList**](../Model/ModelResponseCartGiftCardList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartInfo()`

```php
cartInfo($params, $response_fields, $exclude, $store_id): \OpenAPI\Client\Model\CartInfo200Response
```

cart.info

This method allows you to get various information about the store, including a list of stores (in the case of a multistore configuration), a list of supported languages, currencies, carriers, warehouses, and many other information. This information contains data that is relatively stable and rarely changes, so API2Cart can cache certain data to reduce the load on the store and speed up the execution of the request. We also recommend that you cache the response of this method on your side to save requests. If you need to clear the cache for a specific store, then use the cart.validate method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = name,url; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {result{name,url,stores_info{store_id,name,currency{id,iso3},store_owner_info}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = name,url; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartInfo($params, $response_fields, $exclude, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;store_name,store_url,db_prefix&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartInfo200Response**](../Model/CartInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartList()`

```php
cartList(): \OpenAPI\Client\Model\CartList200Response
```

cart.list

Get list of supported carts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cartList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CartList200Response**](../Model/CartList200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartMetaDataList()`

```php
cartMetaDataList($entity_id, $entity, $store_id, $lang_id, $key, $count, $page_cursor, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartMetaDataList
```

cart.meta_data.list

Using this method, you can get a list of metadata for various entities (products, options, customers, orders). Usually this is data created by third-party plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1; // string | Entity Id
$entity = order; // string | Entity
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$key = subtotal; // string | Key
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {result{items{key,value}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartMetaDataList($entity_id, $entity, $store_id, $lang_id, $key, $count, $page_cursor, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartMetaDataList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| Entity Id | |
| **entity** | **string**| Entity | [optional] [default to &#39;product&#39;] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **key** | **string**| Key | [optional] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;key,value&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartMetaDataList**](../Model/ModelResponseCartMetaDataList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartMetaDataSet()`

```php
cartMetaDataSet($entity_id, $key, $value, $namespace, $entity, $store_id, $lang_id): \OpenAPI\Client\Model\AttributeAdd200Response
```

cart.meta_data.set

Set meta data for a specific entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1; // string | Entity Id
$key = subtotal; // string | Key
$value = 2; // string | Value
$namespace = order; // string | Metafield namespace
$entity = order; // string | Entity
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id

try {
    $result = $apiInstance->cartMetaDataSet($entity_id, $key, $value, $namespace, $entity, $store_id, $lang_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartMetaDataSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| Entity Id | |
| **key** | **string**| Key | |
| **value** | **string**| Value | |
| **namespace** | **string**| Metafield namespace | |
| **entity** | **string**| Entity | [optional] [default to &#39;product&#39;] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeAdd200Response**](../Model/AttributeAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartMetaDataUnset()`

```php
cartMetaDataUnset($entity_id, $key, $id, $entity, $store_id): \OpenAPI\Client\Model\BasketLiveShippingServiceDelete200Response
```

cart.meta_data.unset

Unset meta data for a specific entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 1; // string | Entity Id
$key = subtotal; // string | Key
$id = 10; // string | Entity id
$entity = order; // string | Entity
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartMetaDataUnset($entity_id, $key, $id, $entity, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartMetaDataUnset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**| Entity Id | |
| **key** | **string**| Key | |
| **id** | **string**| Entity id | |
| **entity** | **string**| Entity | [optional] [default to &#39;product&#39;] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\BasketLiveShippingServiceDelete200Response**](../Model/BasketLiveShippingServiceDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartMethods()`

```php
cartMethods(): \OpenAPI\Client\Model\CartMethods200Response
```

cart.methods

Returns a list of supported API methods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cartMethods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartMethods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CartMethods200Response**](../Model/CartMethods200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartPluginList()`

```php
cartPluginList($store_id, $start, $count): \OpenAPI\Client\Model\CartPluginList200Response
```

cart.plugin.list

Get a list of third-party plugins installed on the store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250

try {
    $result = $apiInstance->cartPluginList($store_id, $start, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartPluginList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\CartPluginList200Response**](../Model/CartPluginList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartScriptAdd()`

```php
cartScriptAdd($name, $description, $html, $src, $load_method, $scope, $events, $store_id): \OpenAPI\Client\Model\CartScriptAdd200Response
```

cart.script.add

Add new script to the storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = jQuery Minimized; // string | The user-friendly script name
$description = The Write Less, Do More, JavaScript Library; // string | The user-friendly description
$html = &#x3C;script&#x3E;alert(&#x27;foo&#x27;)&#x3C;/script&#x3E;; // string | An html string containing exactly one `script` tag.
$src = https://js-aplenty.com/foo.js; // string | The URL of the remote script
$load_method = async; // string | The load method to use for the script
$scope = all; // string | The page or pages on the online store where the script should be included
$events = purchase_event; // string | Event for run scripts
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartScriptAdd($name, $description, $html, $src, $load_method, $scope, $events, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartScriptAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The user-friendly script name | [optional] |
| **description** | **string**| The user-friendly description | [optional] |
| **html** | **string**| An html string containing exactly one &#x60;script&#x60; tag. | [optional] |
| **src** | **string**| The URL of the remote script | [optional] |
| **load_method** | **string**| The load method to use for the script | [optional] |
| **scope** | **string**| The page or pages on the online store where the script should be included | [optional] [default to &#39;storefront&#39;] |
| **events** | **string**| Event for run scripts | [optional] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CartScriptAdd200Response**](../Model/CartScriptAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartScriptDelete()`

```php
cartScriptDelete($id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

cart.script.delete

Remove script from the storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->cartScriptDelete($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartScriptDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeDelete200Response**](../Model/AttributeDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartScriptList()`

```php
cartScriptList($page_cursor, $start, $count, $created_from, $created_to, $modified_from, $modified_to, $script_ids, $store_id, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartScriptList
```

cart.script.list

Get scripts installed to the storefront

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$script_ids = 34023324,34024032; // string | Retrieves only scripts with specific ids
$store_id = 1; // string | Store Id
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {pagination,result{total_count,scripts{id,name,src,created_time{value}}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartScriptList($page_cursor, $start, $count, $created_from, $created_to, $modified_from, $modified_to, $script_ids, $store_id, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartScriptList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **script_ids** | **string**| Retrieves only scripts with specific ids | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,description&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartScriptList**](../Model/ModelResponseCartScriptList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartShippingZonesList()`

```php
cartShippingZonesList($store_id, $start, $count, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseCartShippingZonesList
```

cart.shipping_zones.list

Get list of shipping zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {result{id,name,enabled,countries,shipping_methods{name,rates}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->cartShippingZonesList($store_id, $start, $count, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartShippingZonesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,enabled&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCartShippingZonesList**](../Model/ModelResponseCartShippingZonesList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cartValidate()`

```php
cartValidate($validate_version): \OpenAPI\Client\Model\CartValidate200Response
```

cart.validate

This method clears the cache in API2Cart for a particular store and checks whether the connection to the store is available. Use this method if there have been any changes in the settings on the storе, for example, if a new plugin has been installed or removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: StoreKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-store-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-store-key', 'Bearer');

// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_version = true; // bool | Specify if api2cart should validate cart version

try {
    $result = $apiInstance->cartValidate($validate_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CartApi->cartValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_version** | **bool**| Specify if api2cart should validate cart version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CartValidate200Response**](../Model/CartValidate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
