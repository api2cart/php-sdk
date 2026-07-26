# OpenAPI\Client\AnalyticsApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyticsCustomerReport()**](AnalyticsApi.md#analyticsCustomerReport) | **GET** /analytics.customer_report.json | analytics.customer_report |
| [**analyticsProductReport()**](AnalyticsApi.md#analyticsProductReport) | **GET** /analytics.product_report.json | analytics.product_report |
| [**analyticsReport()**](AnalyticsApi.md#analyticsReport) | **GET** /analytics.report.json | analytics.report |


## `analyticsCustomerReport()`

```php
analyticsCustomerReport($date_from, $date_to, $count, $currency_id, $store_id, $customer_type, $email, $sort_by, $sort_direction, $page_cursor, $response_fields): \OpenAPI\Client\Model\ResponseAnalyticsCustomerReportResult
```

analytics.customer_report

Get customer-level analytics for a store over a given period.

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


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 2026-01-01; // string | Start date for the analytics period (Y-m-d or Y-m-d H:i:s)
$date_to = 2026-01-31; // string | End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date.
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$currency_id = usd; // string | Currency Id
$store_id = 1; // string | Store Id
$customer_type = registered; // string | Filter analytics customers by customer type
$email = mail@example.com; // string | Filter analytics customers by email
$sort_by = total_spend; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$response_fields = {result}; // string | Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields.

try {
    $result = $apiInstance->analyticsCustomerReport($date_from, $date_to, $count, $currency_id, $store_id, $customer_type, $email, $sort_by, $sort_direction, $page_cursor, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsCustomerReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Start date for the analytics period (Y-m-d or Y-m-d H:i:s) | [optional] |
| **date_to** | **string**| End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date. | [optional] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **currency_id** | **string**| Currency Id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **customer_type** | **string**| Filter analytics customers by customer type | [optional] |
| **email** | **string**| Filter analytics customers by email | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;total_spend&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;desc&#39;] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **response_fields** | **string**| Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseAnalyticsCustomerReportResult**](../Model/ResponseAnalyticsCustomerReportResult.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyticsProductReport()`

```php
analyticsProductReport($date_from, $date_to, $count, $product_ids, $currency_id, $store_id, $categories_ids, $sort_by, $sort_direction, $page_cursor, $response_fields): \OpenAPI\Client\Model\ResponseAnalyticsProductReportResult
```

analytics.product_report

Get product-level analytics for a store over a given period.

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


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 2026-01-01; // string | Start date for the analytics period (Y-m-d or Y-m-d H:i:s)
$date_to = 2026-01-31; // string | End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date.
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$product_ids = 4,5; // string | Filter analytics by product ids
$currency_id = usd; // string | Currency Id
$store_id = 1; // string | Store Id
$categories_ids = 23,56; // string | Defines product add that is specified by comma-separated categories id
$sort_by = items_sold; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$response_fields = {result}; // string | Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields.

try {
    $result = $apiInstance->analyticsProductReport($date_from, $date_to, $count, $product_ids, $currency_id, $store_id, $categories_ids, $sort_by, $sort_direction, $page_cursor, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsProductReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Start date for the analytics period (Y-m-d or Y-m-d H:i:s) | [optional] |
| **date_to** | **string**| End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date. | [optional] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **product_ids** | **string**| Filter analytics by product ids | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **categories_ids** | **string**| Defines product add that is specified by comma-separated categories id | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;items_sold&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;desc&#39;] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **response_fields** | **string**| Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseAnalyticsProductReportResult**](../Model/ResponseAnalyticsProductReportResult.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analyticsReport()`

```php
analyticsReport($date_from, $date_to, $interval, $order_status, $financial_status, $currency_id, $store_id, $sort_by, $sort_direction, $response_fields): \OpenAPI\Client\Model\ResponseAnalyticsReportResult
```

analytics.report

Get analytics report with totals and optional interval breakdown for a store over a given period.

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


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = 2026-01-01; // string | Start date for the analytics period (Y-m-d or Y-m-d H:i:s)
$date_to = 2026-01-31; // string | End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date.
$interval = day; // string | Interval for analytics report breakdown
$order_status = Completed; // string | Retrieves orders specified by order status
$financial_status = paid; // string | Retrieves orders specified by financial status
$currency_id = usd; // string | Currency Id
$store_id = 1; // string | Store Id
$sort_by = date; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$response_fields = {result}; // string | Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields.

try {
    $result = $apiInstance->analyticsReport($date_from, $date_to, $interval, $order_status, $financial_status, $currency_id, $store_id, $sort_by, $sort_direction, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->analyticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_from** | **string**| Start date for the analytics period (Y-m-d or Y-m-d H:i:s) | |
| **date_to** | **string**| End date for the analytics period (Y-m-d or Y-m-d H:i:s). Defaults to the current date. | [optional] |
| **interval** | **string**| Interval for analytics report breakdown | [optional] |
| **order_status** | **string**| Retrieves orders specified by order status | [optional] |
| **financial_status** | **string**| Retrieves orders specified by financial status | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;date&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **response_fields** | **string**| Set this parameter to choose which entity fields to retrieve. Use comma-separated field names in curly braces, nested to match the response structure, e.g. {result{product{id,name}}}. The wildcard * returns every field at a level: {*} gives the whole response, {result{product{*}}} all product fields. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseAnalyticsReportResult**](../Model/ResponseAnalyticsReportResult.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
