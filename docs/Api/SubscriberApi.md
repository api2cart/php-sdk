# OpenAPI\Client\SubscriberApi

All URIs are relative to https://api.api2cart.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriberList()**](SubscriberApi.md#subscriberList) | **GET** /subscriber.list.json | subscriber.list |


## `subscriberList()`

```php
subscriberList($start, $count, $subscribed, $store_id, $email, $params, $exclude, $created_from, $created_to, $modified_from, $modified_to, $page_cursor, $response_fields): \OpenAPI\Client\Model\ModelResponseSubscriberList
```

subscriber.list

Get subscribers list

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


$apiInstance = new OpenAPI\Client\Api\SubscriberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$subscribed = false; // bool | Filter by subscription status
$store_id = 1; // string | Store Id
$email = mail@example.com; // string | Filter subscribers by email
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve

try {
    $result = $apiInstance->subscriberList($start, $count, $subscribed, $store_id, $email, $params, $exclude, $created_from, $created_to, $modified_from, $modified_to, $page_cursor, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriberApi->subscriberList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **subscribed** | **bool**| Filter by subscription status | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **email** | **string**| Filter subscribers by email | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseSubscriberList**](../Model/ModelResponseSubscriberList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
