# OpenAPI\Client\OrderApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderAbandonedList()**](OrderApi.md#orderAbandonedList) | **GET** /order.abandoned.list.json | order.abandoned.list |
| [**orderAdd()**](OrderApi.md#orderAdd) | **POST** /order.add.json | order.add |
| [**orderCount()**](OrderApi.md#orderCount) | **GET** /order.count.json | order.count |
| [**orderFinancialStatusList()**](OrderApi.md#orderFinancialStatusList) | **GET** /order.financial_status.list.json | order.financial_status.list |
| [**orderFulfillmentStatusList()**](OrderApi.md#orderFulfillmentStatusList) | **GET** /order.fulfillment_status.list.json | order.fulfillment_status.list |
| [**orderInfo()**](OrderApi.md#orderInfo) | **GET** /order.info.json | order.info |
| [**orderList()**](OrderApi.md#orderList) | **GET** /order.list.json | order.list |
| [**orderPreestimateShippingList()**](OrderApi.md#orderPreestimateShippingList) | **POST** /order.preestimate_shipping.list.json | order.preestimate_shipping.list |
| [**orderRefundAdd()**](OrderApi.md#orderRefundAdd) | **POST** /order.refund.add.json | order.refund.add |
| [**orderReturnAdd()**](OrderApi.md#orderReturnAdd) | **POST** /order.return.add.json | order.return.add |
| [**orderReturnDelete()**](OrderApi.md#orderReturnDelete) | **DELETE** /order.return.delete.json | order.return.delete |
| [**orderReturnUpdate()**](OrderApi.md#orderReturnUpdate) | **PUT** /order.return.update.json | order.return.update |
| [**orderShipmentAdd()**](OrderApi.md#orderShipmentAdd) | **POST** /order.shipment.add.json | order.shipment.add |
| [**orderShipmentAddBatch()**](OrderApi.md#orderShipmentAddBatch) | **POST** /order.shipment.add.batch.json | order.shipment.add.batch |
| [**orderShipmentDelete()**](OrderApi.md#orderShipmentDelete) | **DELETE** /order.shipment.delete.json | order.shipment.delete |
| [**orderShipmentInfo()**](OrderApi.md#orderShipmentInfo) | **GET** /order.shipment.info.json | order.shipment.info |
| [**orderShipmentList()**](OrderApi.md#orderShipmentList) | **GET** /order.shipment.list.json | order.shipment.list |
| [**orderShipmentTrackingAdd()**](OrderApi.md#orderShipmentTrackingAdd) | **POST** /order.shipment.tracking.add.json | order.shipment.tracking.add |
| [**orderShipmentUpdate()**](OrderApi.md#orderShipmentUpdate) | **PUT** /order.shipment.update.json | order.shipment.update |
| [**orderStatusList()**](OrderApi.md#orderStatusList) | **GET** /order.status.list.json | order.status.list |
| [**orderTransactionList()**](OrderApi.md#orderTransactionList) | **GET** /order.transaction.list.json | order.transaction.list |
| [**orderUpdate()**](OrderApi.md#orderUpdate) | **PUT** /order.update.json | order.update |


## `orderAbandonedList()`

```php
orderAbandonedList($start, $count, $page_cursor, $customer_id, $customer_email, $store_id, $created_from, $created_to, $modified_from, $modified_to, $skip_empty_email, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseOrderAbandonedList
```

order.abandoned.list

Get list of orders that were left by customers before completing the order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$customer_id = 5; // string | Retrieves orders specified by customer id
$customer_email = jubari@hannsgroup.com; // string | Retrieves orders specified by customer email
$store_id = 1; // string | Store Id
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$skip_empty_email = true; // bool | Filter empty emails
$response_fields = {return_code,pagination,result{order{id,customer{email},created_at,totals{total},order_products}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = force_all; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = customer; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->orderAbandonedList($start, $count, $page_cursor, $customer_id, $customer_email, $store_id, $created_from, $created_to, $modified_from, $modified_to, $skip_empty_email, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAbandonedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **customer_id** | **string**| Retrieves orders specified by customer id | [optional] |
| **customer_email** | **string**| Retrieves orders specified by customer email | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **skip_empty_email** | **bool**| Filter empty emails | [optional] [default to false] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;customer,totals,items&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderAbandonedList**](../Model/ModelResponseOrderAbandonedList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAdd()`

```php
orderAdd($order_add): \OpenAPI\Client\Model\OrderAdd200Response
```

order.add

Add a new order to the cart.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_add = new \OpenAPI\Client\Model\OrderAdd(); // \OpenAPI\Client\Model\OrderAdd

try {
    $result = $apiInstance->orderAdd($order_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_add** | [**\OpenAPI\Client\Model\OrderAdd**](../Model/OrderAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderAdd200Response**](../Model/OrderAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCount()`

```php
orderCount($order_ids, $ids, $customer_id, $store_id, $customer_email, $order_status, $order_status_ids, $ebay_order_status, $financial_status, $financial_status_ids, $fulfillment_channel, $fulfillment_status, $shipping_method, $delivery_method, $tags, $ship_node_type, $created_from, $created_to, $modified_from, $modified_to): \OpenAPI\Client\Model\OrderCount200Response
```

order.count

Count orders in store

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_ids = 24,25; // string | Counts orders specified by order ids
$ids = 24,25; // string | Counts orders specified by ids
$customer_id = 5; // string | Counts orders quantity specified by customer id
$store_id = 1; // string | Counts orders quantity specified by store id
$customer_email = jubari@hannsgroup.com; // string | Counts orders quantity specified by customer email
$order_status = Completed; // string | Counts orders quantity specified by order status
$order_status_ids = array('order_status_ids_example'); // string[] | Retrieves orders specified by order statuses
$ebay_order_status = Active; // string | Counts orders quantity specified by order status
$financial_status = paid; // string | Counts orders quantity specified by financial status
$financial_status_ids = array('financial_status_ids_example'); // string[] | Retrieves orders count specified by financial status ids
$fulfillment_channel = local; // string | Retrieves order with a fulfillment channel
$fulfillment_status = fulfilled; // string | Create order with fulfillment status
$shipping_method = flatrate_flatrate; // string | Retrieve entities according to shipping method
$delivery_method = local; // string | Retrieves order with delivery method
$tags = tag1,tag2; // string | Order tags
$ship_node_type = SellerFulfilled; // string | Retrieves order with ship node type
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date

try {
    $result = $apiInstance->orderCount($order_ids, $ids, $customer_id, $store_id, $customer_email, $order_status, $order_status_ids, $ebay_order_status, $financial_status, $financial_status_ids, $fulfillment_channel, $fulfillment_status, $shipping_method, $delivery_method, $tags, $ship_node_type, $created_from, $created_to, $modified_from, $modified_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_ids** | **string**| Counts orders specified by order ids | [optional] |
| **ids** | **string**| Counts orders specified by ids | [optional] |
| **customer_id** | **string**| Counts orders quantity specified by customer id | [optional] |
| **store_id** | **string**| Counts orders quantity specified by store id | [optional] |
| **customer_email** | **string**| Counts orders quantity specified by customer email | [optional] |
| **order_status** | **string**| Counts orders quantity specified by order status | [optional] |
| **order_status_ids** | [**string[]**](../Model/string.md)| Retrieves orders specified by order statuses | [optional] |
| **ebay_order_status** | **string**| Counts orders quantity specified by order status | [optional] |
| **financial_status** | **string**| Counts orders quantity specified by financial status | [optional] |
| **financial_status_ids** | [**string[]**](../Model/string.md)| Retrieves orders count specified by financial status ids | [optional] |
| **fulfillment_channel** | **string**| Retrieves order with a fulfillment channel | [optional] |
| **fulfillment_status** | **string**| Create order with fulfillment status | [optional] |
| **shipping_method** | **string**| Retrieve entities according to shipping method | [optional] |
| **delivery_method** | **string**| Retrieves order with delivery method | [optional] |
| **tags** | **string**| Order tags | [optional] |
| **ship_node_type** | **string**| Retrieves order with ship node type | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderCount200Response**](../Model/OrderCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderFinancialStatusList()`

```php
orderFinancialStatusList(): \OpenAPI\Client\Model\OrderFinancialStatusList200Response
```

order.financial_status.list

Retrieve list of financial statuses

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->orderFinancialStatusList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFinancialStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrderFinancialStatusList200Response**](../Model/OrderFinancialStatusList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderFulfillmentStatusList()`

```php
orderFulfillmentStatusList($action): \OpenAPI\Client\Model\OrderFulfillmentStatusList200Response
```

order.fulfillment_status.list

Retrieve list of fulfillment statuses

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = add; // string | Available statuses for the specified action.

try {
    $result = $apiInstance->orderFulfillmentStatusList($action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderFulfillmentStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| Available statuses for the specified action. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderFulfillmentStatusList200Response**](../Model/OrderFulfillmentStatusList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderInfo()`

```php
orderInfo($id, $order_id, $store_id, $params, $response_fields, $exclude, $enable_cache, $use_latest_api_version): \OpenAPI\Client\Model\OrderInfo200Response
```

order.info

Info about a specific order by ID

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Retrieves order info specified by id
$order_id = 25; // string | Retrieves order’s info specified by order id
$store_id = 1; // string | Defines store id where the order should be found
$params = order_id,totals,status; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {result{order_id,customer,totals,address,items,bundles,status}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = order_id,totals,status; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$enable_cache = true; // bool | If the value is 'true' and order exist in our cache, we will return order.info response from cache
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->orderInfo($id, $order_id, $store_id, $params, $response_fields, $exclude, $enable_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Retrieves order info specified by id | [optional] |
| **order_id** | **string**| Retrieves order’s info specified by order id | [optional] |
| **store_id** | **string**| Defines store id where the order should be found | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;order_id,customer,totals,address,items,bundles,status&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **enable_cache** | **bool**| If the value is &#39;true&#39; and order exist in our cache, we will return order.info response from cache | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\OrderInfo200Response**](../Model/OrderInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderList()`

```php
orderList($start, $count, $page_cursor, $ids, $order_ids, $since_id, $store_id, $customer_id, $customer_email, $basket_id, $currency_id, $phone, $order_status, $order_status_ids, $ebay_order_status, $financial_status, $financial_status_ids, $fulfillment_status, $return_status, $fulfillment_channel, $shipping_method, $skip_order_ids, $is_deleted, $shipping_country_iso3, $delivery_method, $ship_node_type, $created_to, $created_from, $modified_to, $modified_from, $tags, $sort_by, $sort_direction, $params, $response_fields, $exclude, $enable_cache, $use_latest_api_version): \OpenAPI\Client\Model\ModelResponseOrderList
```

order.list

Get list of orders from store.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve orders via cursor-based pagination (it can't be used with any other filtering parameter)
$ids = 24,25; // string | Retrieves orders specified by ids
$order_ids = 24,25; // string | Retrieves orders specified by order ids
$since_id = 56; // string | Retrieve entities starting from the specified id.
$store_id = 1; // string | Store Id
$customer_id = 5; // string | Retrieves orders specified by customer id
$customer_email = jubari@hannsgroup.com; // string | Retrieves orders specified by customer email
$basket_id = 1; // string | Retrieves order’s info specified by basket id.
$currency_id = usd; // string | Currency Id
$phone = 56686868654; // string | Filter orders by customer's phone number
$order_status = Completed; // string | Retrieves orders specified by order status
$order_status_ids = array('order_status_ids_example'); // string[] | Retrieves orders specified by order statuses
$ebay_order_status = Active; // string | Retrieves orders specified by order status
$financial_status = paid; // string | Retrieves orders specified by financial status
$financial_status_ids = array('financial_status_ids_example'); // string[] | Retrieves orders specified by financial status ids
$fulfillment_status = fulfilled; // string | Create order with fulfillment status
$return_status = RETURNED; // string | Retrieves orders specified by return status
$fulfillment_channel = local; // string | Retrieves order with a fulfillment channel
$shipping_method = flatrate_flatrate; // string | Retrieve entities according to shipping method
$skip_order_ids = 24,25; // string | Skipped orders by ids
$is_deleted = true; // bool | Filter deleted orders
$shipping_country_iso3 = DEU; // string | Retrieve entities according to shipping country
$delivery_method = local; // string | Retrieves order with delivery method
$ship_node_type = SellerFulfilled; // string | Retrieves order with ship node type
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$tags = tag1,tag2; // string | Order tags
$sort_by = modified_at; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$params = order_id,totals,status; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {return_code,pagination,result{order{order_id,customer,totals,address,items,bundles,status}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = order_id,totals,status; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$enable_cache = true; // bool | If the value is 'true', we will cache orders for a 15 minutes in order to increase speed and reduce requests throttling for some methods and shoping platforms (for example order.shipment.add)
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->orderList($start, $count, $page_cursor, $ids, $order_ids, $since_id, $store_id, $customer_id, $customer_email, $basket_id, $currency_id, $phone, $order_status, $order_status_ids, $ebay_order_status, $financial_status, $financial_status_ids, $fulfillment_status, $return_status, $fulfillment_channel, $shipping_method, $skip_order_ids, $is_deleted, $shipping_country_iso3, $delivery_method, $ship_node_type, $created_to, $created_from, $modified_to, $modified_from, $tags, $sort_by, $sort_direction, $params, $response_fields, $exclude, $enable_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve orders via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **ids** | **string**| Retrieves orders specified by ids | [optional] |
| **order_ids** | **string**| Retrieves orders specified by order ids | [optional] |
| **since_id** | **string**| Retrieve entities starting from the specified id. | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **customer_id** | **string**| Retrieves orders specified by customer id | [optional] |
| **customer_email** | **string**| Retrieves orders specified by customer email | [optional] |
| **basket_id** | **string**| Retrieves order’s info specified by basket id. | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **phone** | **string**| Filter orders by customer&#39;s phone number | [optional] |
| **order_status** | **string**| Retrieves orders specified by order status | [optional] |
| **order_status_ids** | [**string[]**](../Model/string.md)| Retrieves orders specified by order statuses | [optional] |
| **ebay_order_status** | **string**| Retrieves orders specified by order status | [optional] |
| **financial_status** | **string**| Retrieves orders specified by financial status | [optional] |
| **financial_status_ids** | [**string[]**](../Model/string.md)| Retrieves orders specified by financial status ids | [optional] |
| **fulfillment_status** | **string**| Create order with fulfillment status | [optional] |
| **return_status** | **string**| Retrieves orders specified by return status | [optional] |
| **fulfillment_channel** | **string**| Retrieves order with a fulfillment channel | [optional] |
| **shipping_method** | **string**| Retrieve entities according to shipping method | [optional] |
| **skip_order_ids** | **string**| Skipped orders by ids | [optional] |
| **is_deleted** | **bool**| Filter deleted orders | [optional] |
| **shipping_country_iso3** | **string**| Retrieve entities according to shipping country | [optional] |
| **delivery_method** | **string**| Retrieves order with delivery method | [optional] |
| **ship_node_type** | **string**| Retrieves order with ship node type | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **tags** | **string**| Order tags | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;order_id&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;order_id,customer,totals,address,items,bundles,status&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **enable_cache** | **bool**| If the value is &#39;true&#39;, we will cache orders for a 15 minutes in order to increase speed and reduce requests throttling for some methods and shoping platforms (for example order.shipment.add) | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderList**](../Model/ModelResponseOrderList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderPreestimateShippingList()`

```php
orderPreestimateShippingList($order_preestimate_shipping_list): \OpenAPI\Client\Model\ModelResponseOrderPreestimateShippingList
```

order.preestimate_shipping.list

Retrieve list of order preestimated shipping methods

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_preestimate_shipping_list = new \OpenAPI\Client\Model\OrderPreestimateShippingList(); // \OpenAPI\Client\Model\OrderPreestimateShippingList

try {
    $result = $apiInstance->orderPreestimateShippingList($order_preestimate_shipping_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPreestimateShippingList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_preestimate_shipping_list** | [**\OpenAPI\Client\Model\OrderPreestimateShippingList**](../Model/OrderPreestimateShippingList.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderPreestimateShippingList**](../Model/ModelResponseOrderPreestimateShippingList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderRefundAdd()`

```php
orderRefundAdd($order_refund_add): \OpenAPI\Client\Model\OrderRefundAdd200Response
```

order.refund.add

Add a refund to the order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_refund_add = new \OpenAPI\Client\Model\OrderRefundAdd(); // \OpenAPI\Client\Model\OrderRefundAdd

try {
    $result = $apiInstance->orderRefundAdd($order_refund_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderRefundAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_refund_add** | [**\OpenAPI\Client\Model\OrderRefundAdd**](../Model/OrderRefundAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderRefundAdd200Response**](../Model/OrderRefundAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderReturnAdd()`

```php
orderReturnAdd($order_return_add): \OpenAPI\Client\Model\OrderReturnAdd200Response
```

order.return.add

Create new return request.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_return_add = new \OpenAPI\Client\Model\OrderReturnAdd(); // \OpenAPI\Client\Model\OrderReturnAdd

try {
    $result = $apiInstance->orderReturnAdd($order_return_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReturnAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_return_add** | [**\OpenAPI\Client\Model\OrderReturnAdd**](../Model/OrderReturnAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderReturnAdd200Response**](../Model/OrderReturnAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderReturnDelete()`

```php
orderReturnDelete($return_id, $order_id, $store_id): \OpenAPI\Client\Model\AttributeValueDelete200Response
```

order.return.delete

Delete return.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_id = 200000002; // string | Return ID
$order_id = 25; // string | Defines the order id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->orderReturnDelete($return_id, $order_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReturnDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **return_id** | **string**| Return ID | |
| **order_id** | **string**| Defines the order id | |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeValueDelete200Response**](../Model/AttributeValueDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderReturnUpdate()`

```php
orderReturnUpdate($order_return_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

order.return.update

Update order's shipment information.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_return_update = new \OpenAPI\Client\Model\OrderReturnUpdate(); // \OpenAPI\Client\Model\OrderReturnUpdate

try {
    $result = $apiInstance->orderReturnUpdate($order_return_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderReturnUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_return_update** | [**\OpenAPI\Client\Model\OrderReturnUpdate**](../Model/OrderReturnUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountConfigUpdate200Response**](../Model/AccountConfigUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentAdd()`

```php
orderShipmentAdd($order_shipment_add): \OpenAPI\Client\Model\OrderShipmentAdd200Response
```

order.shipment.add

Add a shipment to the order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_shipment_add = new \OpenAPI\Client\Model\OrderShipmentAdd(); // \OpenAPI\Client\Model\OrderShipmentAdd

try {
    $result = $apiInstance->orderShipmentAdd($order_shipment_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_shipment_add** | [**\OpenAPI\Client\Model\OrderShipmentAdd**](../Model/OrderShipmentAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderShipmentAdd200Response**](../Model/OrderShipmentAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentAddBatch()`

```php
orderShipmentAddBatch($order_shipment_add_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

order.shipment.add.batch

Add a shipments to the orders.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_shipment_add_batch = new \OpenAPI\Client\Model\OrderShipmentAddBatch(); // \OpenAPI\Client\Model\OrderShipmentAddBatch

try {
    $result = $apiInstance->orderShipmentAddBatch($order_shipment_add_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentAddBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_shipment_add_batch** | [**\OpenAPI\Client\Model\OrderShipmentAddBatch**](../Model/OrderShipmentAddBatch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryAddBatch200Response**](../Model/CategoryAddBatch200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentDelete()`

```php
orderShipmentDelete($shipment_id, $order_id, $store_id): \OpenAPI\Client\Model\OrderShipmentDelete200Response
```

order.shipment.delete

Delete order's shipment.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = 200000002; // string | Shipment id indicates the number of delivery
$order_id = 25; // string | Defines the order for which the shipment will be deleted
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->orderShipmentDelete($shipment_id, $order_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_id** | **string**| Shipment id indicates the number of delivery | |
| **order_id** | **string**| Defines the order for which the shipment will be deleted | |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderShipmentDelete200Response**](../Model/OrderShipmentDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentInfo()`

```php
orderShipmentInfo($id, $order_id, $start, $store_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\OrderShipmentInfo200Response
```

order.shipment.info

Get information of shipment.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$order_id = 25; // string | Defines the order id
$start = 0; // int | This parameter sets the number from which you want to get entities
$store_id = 1; // string | Store Id
$response_fields = {result{id,order_id,shipment_provider,tracking_numbers{tracking_number},items{product_id,quantity}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->orderShipmentInfo($id, $order_id, $start, $store_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **order_id** | **string**| Defines the order id | |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **store_id** | **string**| Store Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,order_id,items,tracking_numbers&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderShipmentInfo200Response**](../Model/OrderShipmentInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentList()`

```php
orderShipmentList($order_id, $start, $count, $page_cursor, $store_id, $created_from, $created_to, $modified_from, $modified_to, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseOrderShipmentList
```

order.shipment.list

Get list of shipments per order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 25; // string | Retrieves shipments specified by order id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$store_id = 1; // string | Store Id
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$response_fields = {status_code,pagination,result{shipment{id,order_id,shipment_provider,tracking_numbers{tracking_number},items{product_id,quantity}}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->orderShipmentList($order_id, $start, $count, $page_cursor, $store_id, $created_from, $created_to, $modified_from, $modified_to, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Retrieves shipments specified by order id | |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,order_id,items,tracking_numbers&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderShipmentList**](../Model/ModelResponseOrderShipmentList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentTrackingAdd()`

```php
orderShipmentTrackingAdd($order_shipment_tracking_add): \OpenAPI\Client\Model\OrderShipmentTrackingAdd200Response
```

order.shipment.tracking.add

Add order shipment's tracking info.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_shipment_tracking_add = new \OpenAPI\Client\Model\OrderShipmentTrackingAdd(); // \OpenAPI\Client\Model\OrderShipmentTrackingAdd

try {
    $result = $apiInstance->orderShipmentTrackingAdd($order_shipment_tracking_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentTrackingAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_shipment_tracking_add** | [**\OpenAPI\Client\Model\OrderShipmentTrackingAdd**](../Model/OrderShipmentTrackingAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderShipmentTrackingAdd200Response**](../Model/OrderShipmentTrackingAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderShipmentUpdate()`

```php
orderShipmentUpdate($order_shipment_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

order.shipment.update

Update order's shipment information.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_shipment_update = new \OpenAPI\Client\Model\OrderShipmentUpdate(); // \OpenAPI\Client\Model\OrderShipmentUpdate

try {
    $result = $apiInstance->orderShipmentUpdate($order_shipment_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderShipmentUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_shipment_update** | [**\OpenAPI\Client\Model\OrderShipmentUpdate**](../Model/OrderShipmentUpdate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccountConfigUpdate200Response**](../Model/AccountConfigUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderStatusList()`

```php
orderStatusList($store_id, $action, $response_fields): \OpenAPI\Client\Model\ModelResponseOrderStatusList
```

order.status.list

Retrieve list of statuses

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id
$action = add; // string | Available statuses for the specified action.
$response_fields = {return_code,return_message,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve

try {
    $result = $apiInstance->orderStatusList($store_id, $action, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |
| **action** | **string**| Available statuses for the specified action. | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderStatusList**](../Model/ModelResponseOrderStatusList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderTransactionList()`

```php
orderTransactionList($order_ids, $count, $page_cursor, $store_id, $params, $response_fields, $exclude): \OpenAPI\Client\Model\ModelResponseOrderTransactionList
```

order.transaction.list

Retrieve list of order transaction

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_ids = 24,25; // string | Retrieves order transactions specified by order ids
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$store_id = 1; // string | Store Id
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {return_code,pagination,result{transactions_count,transactions{id,transaction_id,status,description,settlement_amount,gateway,card_brand,card_last_four}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->orderTransactionList($order_ids, $count, $page_cursor, $store_id, $params, $response_fields, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderTransactionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_ids** | **string**| Retrieves order transactions specified by order ids | |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,order_id,amount,description&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseOrderTransactionList**](../Model/ModelResponseOrderTransactionList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderUpdate()`

```php
orderUpdate($order_id, $store_id, $order_status, $financial_status, $fulfillment_status, $cancellation_reason, $order_payment_method, $comment, $admin_comment, $admin_private_comment, $invoice_admin_comment, $date_modified, $date_finished, $send_notifications, $create_invoice, $origin, $tags): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

order.update

Update existing order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 25; // string | Defines the orders specified by order id
$store_id = 1; // string | Defines store id where the order should be found
$order_status = Completed; // string | Defines new order's status
$financial_status = paid; // string | Update order financial status to specified
$fulfillment_status = fulfilled; // string | Create order with fulfillment status
$cancellation_reason = ORDER_UNPAID; // string | Defines the cancellation reason when the order will be canceled
$order_payment_method = PayPal; // string | Defines order payment method.<br/>Setting order_payment_method on Shopify will also change financial_status field value to 'paid'
$comment = This coole order; // string | Specifies order comment
$admin_comment = Test admin comment; // string | Specifies admin's order comment
$admin_private_comment = Test admin private comment; // string | Specifies private admin's order comment
$invoice_admin_comment = Test admin comment; // string | Specifies admin's order invoice comment
$date_modified = 2014-05-05 05:05:00; // string | Specifies order's  modification date
$date_finished = 2014-06-05 05:05:00; // string | Specifies order's  finished date
$send_notifications = true; // bool | Send notifications to customer after order was created
$create_invoice = true; // bool | Determines whether an invoice should be created if it has not already been created
$origin = newsletter; // string | The source of the order
$tags = tag1,tag2; // string | Order tags

try {
    $result = $apiInstance->orderUpdate($order_id, $store_id, $order_status, $financial_status, $fulfillment_status, $cancellation_reason, $order_payment_method, $comment, $admin_comment, $admin_private_comment, $invoice_admin_comment, $date_modified, $date_finished, $send_notifications, $create_invoice, $origin, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| Defines the orders specified by order id | |
| **store_id** | **string**| Defines store id where the order should be found | [optional] |
| **order_status** | **string**| Defines new order&#39;s status | [optional] |
| **financial_status** | **string**| Update order financial status to specified | [optional] |
| **fulfillment_status** | **string**| Create order with fulfillment status | [optional] |
| **cancellation_reason** | **string**| Defines the cancellation reason when the order will be canceled | [optional] |
| **order_payment_method** | **string**| Defines order payment method.&lt;br/&gt;Setting order_payment_method on Shopify will also change financial_status field value to &#39;paid&#39; | [optional] |
| **comment** | **string**| Specifies order comment | [optional] |
| **admin_comment** | **string**| Specifies admin&#39;s order comment | [optional] |
| **admin_private_comment** | **string**| Specifies private admin&#39;s order comment | [optional] |
| **invoice_admin_comment** | **string**| Specifies admin&#39;s order invoice comment | [optional] |
| **date_modified** | **string**| Specifies order&#39;s  modification date | [optional] |
| **date_finished** | **string**| Specifies order&#39;s  finished date | [optional] |
| **send_notifications** | **bool**| Send notifications to customer after order was created | [optional] [default to false] |
| **create_invoice** | **bool**| Determines whether an invoice should be created if it has not already been created | [optional] |
| **origin** | **string**| The source of the order | [optional] |
| **tags** | **string**| Order tags | [optional] |

### Return type

[**\OpenAPI\Client\Model\AccountConfigUpdate200Response**](../Model/AccountConfigUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
