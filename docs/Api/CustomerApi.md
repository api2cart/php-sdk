# OpenAPI\Client\CustomerApi

All URIs are relative to https://api.api2cart.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customerAdd()**](CustomerApi.md#customerAdd) | **POST** /customer.add.json | customer.add |
| [**customerAddressAdd()**](CustomerApi.md#customerAddressAdd) | **POST** /customer.address.add.json | customer.address.add |
| [**customerAttributeList()**](CustomerApi.md#customerAttributeList) | **GET** /customer.attribute.list.json | customer.attribute.list |
| [**customerCount()**](CustomerApi.md#customerCount) | **GET** /customer.count.json | customer.count |
| [**customerDelete()**](CustomerApi.md#customerDelete) | **DELETE** /customer.delete.json | customer.delete |
| [**customerFind()**](CustomerApi.md#customerFind) | **GET** /customer.find.json | customer.find |
| [**customerGroupAdd()**](CustomerApi.md#customerGroupAdd) | **POST** /customer.group.add.json | customer.group.add |
| [**customerGroupList()**](CustomerApi.md#customerGroupList) | **GET** /customer.group.list.json | customer.group.list |
| [**customerInfo()**](CustomerApi.md#customerInfo) | **GET** /customer.info.json | customer.info |
| [**customerList()**](CustomerApi.md#customerList) | **GET** /customer.list.json | customer.list |
| [**customerUpdate()**](CustomerApi.md#customerUpdate) | **PUT** /customer.update.json | customer.update |
| [**customerWishlistList()**](CustomerApi.md#customerWishlistList) | **GET** /customer.wishlist.list.json | customer.wishlist.list |


## `customerAdd()`

```php
customerAdd($customer_add): \OpenAPI\Client\Model\CustomerAdd200Response
```

customer.add

Add customer into store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_add = new \OpenAPI\Client\Model\CustomerAdd(); // \OpenAPI\Client\Model\CustomerAdd

try {
    $result = $apiInstance->customerAdd($customer_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_add** | [**\OpenAPI\Client\Model\CustomerAdd**](../Model/CustomerAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomerAdd200Response**](../Model/CustomerAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAddressAdd()`

```php
customerAddressAdd($customer_address_add): \OpenAPI\Client\Model\AttributeAdd200Response
```

customer.address.add

Add customer address.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_address_add = new \OpenAPI\Client\Model\CustomerAddressAdd(); // \OpenAPI\Client\Model\CustomerAddressAdd

try {
    $result = $apiInstance->customerAddressAdd($customer_address_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAddressAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_address_add** | [**\OpenAPI\Client\Model\CustomerAddressAdd**](../Model/CustomerAddressAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AttributeAdd200Response**](../Model/AttributeAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAttributeList()`

```php
customerAttributeList($customer_id, $count, $page_cursor, $store_id, $lang_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseCustomerAttributeList
```

customer.attribute.list

Get attributes for specific customer

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 5; // string | Retrieves orders specified by customer id
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->customerAttributeList($customer_id, $count, $page_cursor, $store_id, $lang_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerAttributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Retrieves orders specified by customer id | |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCustomerAttributeList**](../Model/ModelResponseCustomerAttributeList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCount()`

```php
customerCount($ids, $since_id, $customer_list_id, $group_id, $store_id, $avail, $include_guests, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to): \OpenAPI\Client\Model\CustomerCount200Response
```

customer.count

Get number of customers from store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = 24,25; // string | Counts customers specified by ids
$since_id = 56; // string | Retrieve entities starting from the specified id.
$customer_list_id = exampleListId; // string | The numeric ID of the customer list in Demandware.
$group_id = 3; // string | Customer group_id
$store_id = 1; // string | Counts customer specified by store id
$avail = false; // bool | Defines category's visibility status
$include_guests = true; // bool | Indicates whether to include guest customers in the total count.
$find_value = mail@gmail.com; // string | Entity search that is specified by some value
$find_where = email; // string | Counts customers that are searched specified by field
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date

try {
    $result = $apiInstance->customerCount($ids, $since_id, $customer_list_id, $group_id, $store_id, $avail, $include_guests, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**| Counts customers specified by ids | [optional] |
| **since_id** | **string**| Retrieve entities starting from the specified id. | [optional] |
| **customer_list_id** | **string**| The numeric ID of the customer list in Demandware. | [optional] |
| **group_id** | **string**| Customer group_id | [optional] |
| **store_id** | **string**| Counts customer specified by store id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |
| **include_guests** | **bool**| Indicates whether to include guest customers in the total count. | [optional] [default to false] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Counts customers that are searched specified by field | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerCount200Response**](../Model/CustomerCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerDelete()`

```php
customerDelete($id): \OpenAPI\Client\Model\CustomerDelete200Response
```

customer.delete

Delete customer from store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Identifies customer specified by the id

try {
    $result = $apiInstance->customerDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifies customer specified by the id | |

### Return type

[**\OpenAPI\Client\Model\CustomerDelete200Response**](../Model/CustomerDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerFind()`

```php
customerFind($find_value, $find_where, $find_params, $store_id, $include_guests): \OpenAPI\Client\Model\CustomerFind200Response
```

customer.find

Find customers in store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_value = mail@gmail.com; // string | Entity search that is specified by some value
$find_where = email; // string | Entity search that is specified by the comma-separated unique fields
$find_params = regex; // string | Entity search that is specified by comma-separated parameters
$store_id = 1; // string | Store Id
$include_guests = true; // bool | Indicates whether to search among guest customers when looking up a customer.

try {
    $result = $apiInstance->customerFind($find_value, $find_where, $find_params, $store_id, $include_guests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_value** | **string**| Entity search that is specified by some value | |
| **find_where** | **string**| Entity search that is specified by the comma-separated unique fields | [optional] [default to &#39;email&#39;] |
| **find_params** | **string**| Entity search that is specified by comma-separated parameters | [optional] [default to &#39;whole_words&#39;] |
| **store_id** | **string**| Store Id | [optional] |
| **include_guests** | **bool**| Indicates whether to search among guest customers when looking up a customer. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CustomerFind200Response**](../Model/CustomerFind200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGroupAdd()`

```php
customerGroupAdd($name, $store_id, $stores_ids): \OpenAPI\Client\Model\CustomerGroupAdd200Response
```

customer.group.add

Create customer group.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = new_group; // string | Customer group name
$store_id = 1; // string | Store Id
$stores_ids = 1,2; // string | Assign customer group to the stores that is specified by comma-separated stores' id

try {
    $result = $apiInstance->customerGroupAdd($name, $store_id, $stores_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGroupAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Customer group name | |
| **store_id** | **string**| Store Id | [optional] |
| **stores_ids** | **string**| Assign customer group to the stores that is specified by comma-separated stores&#39; id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerGroupAdd200Response**](../Model/CustomerGroupAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerGroupList()`

```php
customerGroupList($start, $count, $page_cursor, $group_ids, $store_id, $lang_id, $response_fields, $params, $exclude, $disable_cache): \OpenAPI\Client\Model\ModelResponseCustomerGroupList
```

customer.group.list

Get list of customers groups.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$group_ids = 1,2,3; // string | Groups that will be assigned to a customer
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$disable_cache = false; // bool | Disable cache for current request

try {
    $result = $apiInstance->customerGroupList($start, $count, $page_cursor, $group_ids, $store_id, $lang_id, $response_fields, $params, $exclude, $disable_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerGroupList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **group_ids** | **string**| Groups that will be assigned to a customer | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,additional_fields&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **disable_cache** | **bool**| Disable cache for current request | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCustomerGroupList**](../Model/ModelResponseCustomerGroupList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerInfo()`

```php
customerInfo($id, $store_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\CustomerInfo200Response
```

customer.info

Get customers' details from store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Retrieves customer's info specified by customer id
$store_id = 1; // string | Retrieves customer info specified by store id
$response_fields = {result{id,parent_id,sku,upc,images,combination}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,email; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,email; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->customerInfo($id, $store_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Retrieves customer&#39;s info specified by customer id | |
| **store_id** | **string**| Retrieves customer info specified by store id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,email,first_name,last_name&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerInfo200Response**](../Model/CustomerInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerList()`

```php
customerList($start, $count, $page_cursor, $ids, $since_id, $customer_list_id, $group_id, $store_id, $avail, $include_guests, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to, $sort_by, $sort_direction, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseCustomerList
```

customer.list

Get list of customers from store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$ids = 24,25; // string | Retrieves customers specified by ids
$since_id = 56; // string | Retrieve entities starting from the specified id.
$customer_list_id = exampleListId; // string | The numeric ID of the customer list in Demandware.
$group_id = 3; // string | Customer group_id
$store_id = 1; // string | Retrieves customers specified by store id
$avail = false; // bool | Defines category's visibility status
$include_guests = true; // bool | Indicates whether to include guest customers in the list results.
$find_value = mail@gmail.com; // string | Entity search that is specified by some value
$find_where = email; // string | Customer search that is specified by field
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$sort_by = value_id; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$response_fields = {result{customer}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,email; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,email; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->customerList($start, $count, $page_cursor, $ids, $since_id, $customer_list_id, $group_id, $store_id, $avail, $include_guests, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to, $sort_by, $sort_direction, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **ids** | **string**| Retrieves customers specified by ids | [optional] |
| **since_id** | **string**| Retrieve entities starting from the specified id. | [optional] |
| **customer_list_id** | **string**| The numeric ID of the customer list in Demandware. | [optional] |
| **group_id** | **string**| Customer group_id | [optional] |
| **store_id** | **string**| Retrieves customers specified by store id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |
| **include_guests** | **bool**| Indicates whether to include guest customers in the list results. | [optional] [default to false] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Customer search that is specified by field | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;created_time&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,email,first_name,last_name&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCustomerList**](../Model/ModelResponseCustomerList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdate()`

```php
customerUpdate($customer_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

customer.update

Update information of customer in store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_update = new \OpenAPI\Client\Model\CustomerUpdate(); // \OpenAPI\Client\Model\CustomerUpdate

try {
    $result = $apiInstance->customerUpdate($customer_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_update** | [**\OpenAPI\Client\Model\CustomerUpdate**](../Model/CustomerUpdate.md)|  | |

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

## `customerWishlistList()`

```php
customerWishlistList($customer_id, $start, $count, $page_cursor, $id, $store_id, $response_fields): \OpenAPI\Client\Model\ModelResponseCustomerWishlistList
```

customer.wishlist.list

Get a Wish List of customer from the store.

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


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 5; // string | Retrieves orders specified by customer id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve

try {
    $result = $apiInstance->customerWishlistList($customer_id, $start, $count, $page_cursor, $id, $store_id, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerWishlistList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Retrieves orders specified by customer id | |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **id** | **string**| Entity id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;{return_code,return_message,pagination,result}&#39;] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCustomerWishlistList**](../Model/ModelResponseCustomerWishlistList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
