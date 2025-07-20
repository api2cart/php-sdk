# OpenAPI\Client\TaxApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**taxClassInfo()**](TaxApi.md#taxClassInfo) | **GET** /tax.class.info.json | tax.class.info |
| [**taxClassList()**](TaxApi.md#taxClassList) | **GET** /tax.class.list.json | tax.class.list |


## `taxClassInfo()`

```php
taxClassInfo($tax_class_id, $store_id, $lang_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseTaxClassInfo
```

tax.class.info

Use this method to get information about a tax class and its rates. It allows you to calculate the tax percentage for a specific customer's address. This information contains relatively static data that rarely changes, so API2Cart may cache certain data to reduce the load on the store and speed up request execution. We also recommend that you cache the response of this method on your side to save requests. If you need to clear the cache for a specific store, use the cart.validate method.

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


$apiInstance = new OpenAPI\Client\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_class_id = 9; // string | Retrieves taxes specified by class id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$response_fields = {result{id,name,tax,tax_rates{id,countries{id,name,states},cities,address,zip_codes{is_range,range,fields}}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = tax_class_id,tax; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = tax_class_id,tax; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->taxClassInfo($tax_class_id, $store_id, $lang_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxClassInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_class_id** | **string**| Retrieves taxes specified by class id | |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;tax_class_id,name,avail&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseTaxClassInfo**](../Model/ModelResponseTaxClassInfo.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxClassList()`

```php
taxClassList($count, $page_cursor, $store_id, $find_value, $find_where, $created_to, $created_from, $modified_to, $modified_from, $response_fields): \OpenAPI\Client\Model\ModelResponseTaxClassList
```

tax.class.list

Get list of tax classes from your store.

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


$apiInstance = new OpenAPI\Client\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$store_id = 1; // string | Store Id
$find_value = tax; // string | Entity search that is specified by some value
$find_where = name; // string | Tax class search that is specified by field
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve

try {
    $result = $apiInstance->taxClassList($count, $page_cursor, $store_id, $find_value, $find_where, $created_to, $created_from, $modified_to, $modified_from, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxClassList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Tax class search that is specified by field | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;{return_code,return_message,pagination,result}&#39;] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseTaxClassList**](../Model/ModelResponseTaxClassList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
