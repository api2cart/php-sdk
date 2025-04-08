# OpenAPI\Client\WebhookApi

All URIs are relative to https://api.api2cart.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhookCount()**](WebhookApi.md#webhookCount) | **GET** /webhook.count.json | webhook.count |
| [**webhookCreate()**](WebhookApi.md#webhookCreate) | **POST** /webhook.create.json | webhook.create |
| [**webhookDelete()**](WebhookApi.md#webhookDelete) | **DELETE** /webhook.delete.json | webhook.delete |
| [**webhookEvents()**](WebhookApi.md#webhookEvents) | **GET** /webhook.events.json | webhook.events |
| [**webhookList()**](WebhookApi.md#webhookList) | **GET** /webhook.list.json | webhook.list |
| [**webhookUpdate()**](WebhookApi.md#webhookUpdate) | **PUT** /webhook.update.json | webhook.update |


## `webhookCount()`

```php
webhookCount($entity, $action, $active): \OpenAPI\Client\Model\WebhookCount200Response
```

webhook.count

Count registered webhooks on the store.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = product; // string | The entity you want to filter webhooks by (e.g. order or product)
$action = add; // string | The action you want to filter webhooks by (e.g. order or product)
$active = true; // bool | The webhook status you want to filter webhooks by

try {
    $result = $apiInstance->webhookCount($entity, $action, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity** | **string**| The entity you want to filter webhooks by (e.g. order or product) | [optional] |
| **action** | **string**| The action you want to filter webhooks by (e.g. order or product) | [optional] |
| **active** | **bool**| The webhook status you want to filter webhooks by | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookCount200Response**](../Model/WebhookCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookCreate()`

```php
webhookCreate($entity, $action, $callback, $label, $fields, $active, $store_id): \OpenAPI\Client\Model\BasketLiveShippingServiceCreate200Response
```

webhook.create

Create webhook on the store and subscribe to it.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity = product; // string | Specify the entity that you want to enable webhooks for (e.g product, order, customer, category)
$action = add; // string | Specify what action (event) will trigger the webhook (e.g add, delete, or update)
$callback = https://example.com/callback; // string | Callback url that returns shipping rates. It should be able to accept POST requests with json data.
$label = Super webhook; // string | The name you give to the webhook
$fields = id, name, description; // string | Fields the webhook should send
$active = true; // bool | Webhook status
$store_id = 1; // string | Defines store id where the webhook should be assigned

try {
    $result = $apiInstance->webhookCreate($entity, $action, $callback, $label, $fields, $active, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity** | **string**| Specify the entity that you want to enable webhooks for (e.g product, order, customer, category) | |
| **action** | **string**| Specify what action (event) will trigger the webhook (e.g add, delete, or update) | |
| **callback** | **string**| Callback url that returns shipping rates. It should be able to accept POST requests with json data. | [optional] |
| **label** | **string**| The name you give to the webhook | [optional] |
| **fields** | **string**| Fields the webhook should send | [optional] [default to &#39;force_all&#39;] |
| **active** | **bool**| Webhook status | [optional] [default to true] |
| **store_id** | **string**| Defines store id where the webhook should be assigned | [optional] |

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

## `webhookDelete()`

```php
webhookDelete($id): \OpenAPI\Client\Model\AttributeDelete200Response
```

webhook.delete

Delete registered webhook on the store.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 25; // string | Webhook id

try {
    $result = $apiInstance->webhookDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook id | |

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

## `webhookEvents()`

```php
webhookEvents(): \OpenAPI\Client\Model\WebhookEvents200Response
```

webhook.events

List all Webhooks that are available on this store.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhookEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\WebhookEvents200Response**](../Model/WebhookEvents200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookList()`

```php
webhookList($params, $start, $count, $entity, $action, $active, $ids): \OpenAPI\Client\Model\WebhookList200Response
```

webhook.list

List registered webhook on the store.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$params = id,entity,callback,fields; // string | Set this parameter in order to choose which entity fields you want to retrieve
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$entity = product; // string | The entity you want to filter webhooks by (e.g. order or product)
$action = add; // string | The action you want to filter webhooks by (e.g. add, update, or delete)
$active = true; // bool | The webhook status you want to filter webhooks by
$ids = 3,14,25; // string | List of сomma-separated webhook ids

try {
    $result = $apiInstance->webhookList($params, $start, $count, $entity, $action, $active, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,entity,action,callback&#39;] |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **entity** | **string**| The entity you want to filter webhooks by (e.g. order or product) | [optional] |
| **action** | **string**| The action you want to filter webhooks by (e.g. add, update, or delete) | [optional] |
| **active** | **bool**| The webhook status you want to filter webhooks by | [optional] |
| **ids** | **string**| List of сomma-separated webhook ids | [optional] |

### Return type

[**\OpenAPI\Client\Model\WebhookList200Response**](../Model/WebhookList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookUpdate()`

```php
webhookUpdate($id, $callback, $label, $fields, $active): \OpenAPI\Client\Model\ProductImageUpdate200Response
```

webhook.update

Update Webhooks parameters.

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


$apiInstance = new OpenAPI\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 25; // string | Webhook id
$callback = https://example.com/callback; // string | Callback url that returns shipping rates. It should be able to accept POST requests with json data.
$label = Super webhook; // string | The name you give to the webhook
$fields = id, name, description; // string | Fields the webhook should send
$active = true; // bool | Webhook status

try {
    $result = $apiInstance->webhookUpdate($id, $callback, $label, $fields, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhookUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webhook id | |
| **callback** | **string**| Callback url that returns shipping rates. It should be able to accept POST requests with json data. | [optional] |
| **label** | **string**| The name you give to the webhook | [optional] |
| **fields** | **string**| Fields the webhook should send | [optional] |
| **active** | **bool**| Webhook status | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductImageUpdate200Response**](../Model/ProductImageUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
