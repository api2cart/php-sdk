# OpenAPI\Client\BasketApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**basketInfo()**](BasketApi.md#basketInfo) | **GET** /basket.info.json | basket.info |
| [**basketItemAdd()**](BasketApi.md#basketItemAdd) | **POST** /basket.item.add.json | basket.item.add |
| [**basketLiveShippingServiceCreate()**](BasketApi.md#basketLiveShippingServiceCreate) | **POST** /basket.live_shipping_service.create.json | basket.live_shipping_service.create |
| [**basketLiveShippingServiceDelete()**](BasketApi.md#basketLiveShippingServiceDelete) | **DELETE** /basket.live_shipping_service.delete.json | basket.live_shipping_service.delete |
| [**basketLiveShippingServiceList()**](BasketApi.md#basketLiveShippingServiceList) | **GET** /basket.live_shipping_service.list.json | basket.live_shipping_service.list |


## `basketInfo()`

```php
basketInfo($id, $store_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\BasketInfo200Response
```

basket.info

Retrieve basket information.

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


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->basketInfo($id, $store_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->basketInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **store_id** | **string**| Store Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\BasketInfo200Response**](../Model/BasketInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `basketItemAdd()`

```php
basketItemAdd($customer_id, $product_id, $variant_id, $quantity, $store_id, $idempotency_key): \OpenAPI\Client\Model\BasketItemAdd200Response
```

basket.item.add

Add item to basket

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


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 5; // string | Retrieves orders specified by customer id
$product_id = 10; // string | Defines id of the product which should be added to the basket
$variant_id = 45; // string | Defines product's variants specified by variant id
$quantity = 6; // float | Defines new items quantity
$store_id = 1; // string | Store Id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->basketItemAdd($customer_id, $product_id, $variant_id, $quantity, $store_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->basketItemAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Retrieves orders specified by customer id | |
| **product_id** | **string**| Defines id of the product which should be added to the basket | |
| **variant_id** | **string**| Defines product&#39;s variants specified by variant id | [optional] |
| **quantity** | **float**| Defines new items quantity | [optional] [default to 0] |
| **store_id** | **string**| Store Id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\BasketItemAdd200Response**](../Model/BasketItemAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `basketLiveShippingServiceCreate()`

```php
basketLiveShippingServiceCreate($name, $callback, $store_id, $idempotency_key): \OpenAPI\Client\Model\BasketLiveShippingServiceCreate200Response
```

basket.live_shipping_service.create

Create live shipping rate service.

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


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = BestDelivery; // string | Shipping Service Name
$callback = https://example.com/callback; // string | Callback url that returns shipping rates. It should be able to accept POST requests with json data.
$store_id = 1; // string | Store Id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->basketLiveShippingServiceCreate($name, $callback, $store_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->basketLiveShippingServiceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Shipping Service Name | |
| **callback** | **string**| Callback url that returns shipping rates. It should be able to accept POST requests with json data. | |
| **store_id** | **string**| Store Id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\BasketLiveShippingServiceCreate200Response**](../Model/BasketLiveShippingServiceCreate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `basketLiveShippingServiceDelete()`

```php
basketLiveShippingServiceDelete($id): \OpenAPI\Client\Model\BasketLiveShippingServiceDelete200Response
```

basket.live_shipping_service.delete

Delete live shipping rate service.

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


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 5; // int | Entity id

try {
    $result = $apiInstance->basketLiveShippingServiceDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->basketLiveShippingServiceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Entity id | |

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

## `basketLiveShippingServiceList()`

```php
basketLiveShippingServiceList($start, $count, $store_id): \OpenAPI\Client\Model\BasketLiveShippingServiceList200Response
```

basket.live_shipping_service.list

Retrieve a list of live shipping rate services.

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


$apiInstance = new OpenAPI\Client\Api\BasketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->basketLiveShippingServiceList($start, $count, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasketApi->basketLiveShippingServiceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\BasketLiveShippingServiceList200Response**](../Model/BasketLiveShippingServiceList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
