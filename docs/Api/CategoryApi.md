# OpenAPI\Client\CategoryApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoryAdd()**](CategoryApi.md#categoryAdd) | **POST** /category.add.json | category.add |
| [**categoryAddBatch()**](CategoryApi.md#categoryAddBatch) | **POST** /category.add.batch.json | category.add.batch |
| [**categoryAssign()**](CategoryApi.md#categoryAssign) | **POST** /category.assign.json | category.assign |
| [**categoryCount()**](CategoryApi.md#categoryCount) | **GET** /category.count.json | category.count |
| [**categoryDelete()**](CategoryApi.md#categoryDelete) | **DELETE** /category.delete.json | category.delete |
| [**categoryDeleteBatch()**](CategoryApi.md#categoryDeleteBatch) | **POST** /category.delete.batch.json | category.delete.batch |
| [**categoryFind()**](CategoryApi.md#categoryFind) | **GET** /category.find.json | category.find |
| [**categoryImageAdd()**](CategoryApi.md#categoryImageAdd) | **POST** /category.image.add.json | category.image.add |
| [**categoryImageDelete()**](CategoryApi.md#categoryImageDelete) | **DELETE** /category.image.delete.json | category.image.delete |
| [**categoryInfo()**](CategoryApi.md#categoryInfo) | **GET** /category.info.json | category.info |
| [**categoryList()**](CategoryApi.md#categoryList) | **GET** /category.list.json | category.list |
| [**categoryUnassign()**](CategoryApi.md#categoryUnassign) | **POST** /category.unassign.json | category.unassign |
| [**categoryUpdate()**](CategoryApi.md#categoryUpdate) | **PUT** /category.update.json | category.update |


## `categoryAdd()`

```php
categoryAdd($name, $description, $short_description, $parent_id, $avail, $created_time, $modified_time, $sort_order, $meta_title, $meta_description, $meta_keywords, $seo_url, $store_id, $stores_ids, $lang_id, $idempotency_key): \OpenAPI\Client\Model\CategoryAdd200Response
```

category.add

Add new category in store

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = Shoes; // string | Defines category's name that has to be added
$description = Test category; // string | Defines category's description
$short_description = Short description. This is very short description; // string | Defines short description
$parent_id = 6; // string | Adds categories specified by parent id
$avail = false; // bool | Defines category's visibility status
$created_time = 2014-01-30 15:58:41; // string | Entity's date creation
$modified_time = 2014-07-30 15:58:41; // string | Entity's date modification
$sort_order = 2; // int | Sort number in the list
$meta_title = category,test; // string | Defines unique meta title for each entity
$meta_description = category,test; // string | Defines unique meta description of a entity
$meta_keywords = category,test; // string | Defines unique meta keywords for each entity
$seo_url = category,test; // string | Defines unique category's URL for SEO
$store_id = 1; // string | Store Id
$stores_ids = 1,2; // string | Create category in the stores that is specified by comma-separated stores' id
$lang_id = 3; // string | Language id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->categoryAdd($name, $description, $short_description, $parent_id, $avail, $created_time, $modified_time, $sort_order, $meta_title, $meta_description, $meta_keywords, $seo_url, $store_id, $stores_ids, $lang_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Defines category&#39;s name that has to be added | |
| **description** | **string**| Defines category&#39;s description | [optional] |
| **short_description** | **string**| Defines short description | [optional] |
| **parent_id** | **string**| Adds categories specified by parent id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |
| **created_time** | **string**| Entity&#39;s date creation | [optional] |
| **modified_time** | **string**| Entity&#39;s date modification | [optional] |
| **sort_order** | **int**| Sort number in the list | [optional] [default to 0] |
| **meta_title** | **string**| Defines unique meta title for each entity | [optional] |
| **meta_description** | **string**| Defines unique meta description of a entity | [optional] |
| **meta_keywords** | **string**| Defines unique meta keywords for each entity | [optional] |
| **seo_url** | **string**| Defines unique category&#39;s URL for SEO | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **stores_ids** | **string**| Create category in the stores that is specified by comma-separated stores&#39; id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryAdd200Response**](../Model/CategoryAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryAddBatch()`

```php
categoryAddBatch($category_add_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

category.add.batch

Add new categories to the store.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_add_batch = new \OpenAPI\Client\Model\CategoryAddBatch(); // \OpenAPI\Client\Model\CategoryAddBatch

try {
    $result = $apiInstance->categoryAddBatch($category_add_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryAddBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_add_batch** | [**\OpenAPI\Client\Model\CategoryAddBatch**](../Model/CategoryAddBatch.md)|  | |

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

## `categoryAssign()`

```php
categoryAssign($category_id, $product_id, $store_id, $idempotency_key): \OpenAPI\Client\Model\CategoryAssign200Response
```

category.assign

Assign category to product

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6; // string | Defines category assign, specified by category id
$product_id = 10; // string | Defines category assign to the product, specified by product id
$store_id = 1; // string | Store Id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->categoryAssign($category_id, $product_id, $store_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Defines category assign, specified by category id | |
| **product_id** | **string**| Defines category assign to the product, specified by product id | |
| **store_id** | **string**| Store Id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryAssign200Response**](../Model/CategoryAssign200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryCount()`

```php
categoryCount($parent_id, $store_id, $lang_id, $avail, $created_from, $created_to, $modified_from, $modified_to, $product_type, $find_value, $find_where, $report_request_id, $disable_report_cache): \OpenAPI\Client\Model\CategoryCount200Response
```

category.count

Count categories in store.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 6; // string | Counts categories specified by parent id
$store_id = 1; // string | Counts category specified by store id
$lang_id = 3; // string | Counts category specified by language id
$avail = false; // bool | Defines category's visibility status
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$product_type = BICYCLE; // string | A categorization for the product
$find_value = Demo category 1; // string | Entity search that is specified by some value
$find_where = email; // string | Counts categories that are searched specified by field
$report_request_id = 105245017661; // string | Report request id
$disable_report_cache = false; // bool | Disable report cache for current request

try {
    $result = $apiInstance->categoryCount($parent_id, $store_id, $lang_id, $avail, $created_from, $created_to, $modified_from, $modified_to, $product_type, $find_value, $find_where, $report_request_id, $disable_report_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_id** | **string**| Counts categories specified by parent id | [optional] |
| **store_id** | **string**| Counts category specified by store id | [optional] |
| **lang_id** | **string**| Counts category specified by language id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **product_type** | **string**| A categorization for the product | [optional] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Counts categories that are searched specified by field | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CategoryCount200Response**](../Model/CategoryCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryDelete()`

```php
categoryDelete($id, $store_id): \OpenAPI\Client\Model\CategoryDelete200Response
```

category.delete

Delete category in store

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Defines category removal, specified by category id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->categoryDelete($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Defines category removal, specified by category id | |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryDelete200Response**](../Model/CategoryDelete200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryDeleteBatch()`

```php
categoryDeleteBatch($category_delete_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

category.delete.batch

Delete categories from the store.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_delete_batch = new \OpenAPI\Client\Model\CategoryDeleteBatch(); // \OpenAPI\Client\Model\CategoryDeleteBatch

try {
    $result = $apiInstance->categoryDeleteBatch($category_delete_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryDeleteBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_delete_batch** | [**\OpenAPI\Client\Model\CategoryDeleteBatch**](../Model/CategoryDeleteBatch.md)|  | |

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

## `categoryFind()`

```php
categoryFind($find_value, $find_where, $find_params, $store_id, $lang_id): \OpenAPI\Client\Model\CategoryFind200Response
```

category.find

Search category in store. \"Laptop\" is specified here by default.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_value = Demo category 1; // string | Entity search that is specified by some value
$find_where = name; // string | Entity search that is specified by the comma-separated unique fields
$find_params = regex; // string | Entity search that is specified by comma-separated parameters
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id

try {
    $result = $apiInstance->categoryFind($find_value, $find_where, $find_params, $store_id, $lang_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_value** | **string**| Entity search that is specified by some value | |
| **find_where** | **string**| Entity search that is specified by the comma-separated unique fields | [optional] [default to &#39;name&#39;] |
| **find_params** | **string**| Entity search that is specified by comma-separated parameters | [optional] [default to &#39;whole_words&#39;] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryFind200Response**](../Model/CategoryFind200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryImageAdd()`

```php
categoryImageAdd($category_id, $image_name, $url, $type, $store_id, $label, $mime, $position, $idempotency_key): \OpenAPI\Client\Model\CategoryImageAdd200Response
```

category.image.add

Add image to category

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6; // string | Defines category id where the image should be added
$image_name = bag-gray.png; // string | Defines image's name
$url = http://docs.api2cart.com/img/logo.png; // string | Defines URL of the image that has to be added
$type = base; // string | Defines image's types that are specified by comma-separated list
$store_id = 1; // string | Store Id
$label = This cool image; // string | Defines alternative text that has to be attached to the picture
$mime = image/jpeg; // string | Mime type of image http://en.wikipedia.org/wiki/Internet_media_type.
$position = 5; // int | Defines image’s position in the list
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->categoryImageAdd($category_id, $image_name, $url, $type, $store_id, $label, $mime, $position, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryImageAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Defines category id where the image should be added | |
| **image_name** | **string**| Defines image&#39;s name | |
| **url** | **string**| Defines URL of the image that has to be added | |
| **type** | **string**| Defines image&#39;s types that are specified by comma-separated list | |
| **store_id** | **string**| Store Id | [optional] |
| **label** | **string**| Defines alternative text that has to be attached to the picture | [optional] |
| **mime** | **string**| Mime type of image http://en.wikipedia.org/wiki/Internet_media_type. | [optional] |
| **position** | **int**| Defines image’s position in the list | [optional] [default to 0] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryImageAdd200Response**](../Model/CategoryImageAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryImageDelete()`

```php
categoryImageDelete($category_id, $image_id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

category.image.delete

Delete image

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6; // string | Defines category id where the image should be deleted
$image_id = 82950b84f468edff480680f99cedbe0d; // string | Define image id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->categoryImageDelete($category_id, $image_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryImageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Defines category id where the image should be deleted | |
| **image_id** | **string**| Define image id | |
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

## `categoryInfo()`

```php
categoryInfo($id, $store_id, $lang_id, $schema_type, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version): \OpenAPI\Client\Model\CategoryInfo200Response
```

category.info

Get category info about category ID*** or specify other category ID.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Retrieves category's info specified by category id
$store_id = 1; // string | Retrieves category info  specified by store id
$lang_id = 3; // string | Retrieves category info  specified by language id
$schema_type = LISTING; // string | The name of the requirements set for the provided schema.
$response_fields = {result{id,name,parent_id,modified_at{value},images}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,parent_id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,parent_id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$report_request_id = 105245017661; // string | Report request id
$disable_report_cache = false; // bool | Disable report cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->categoryInfo($id, $store_id, $lang_id, $schema_type, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Retrieves category&#39;s info specified by category id | |
| **store_id** | **string**| Retrieves category info  specified by store id | [optional] |
| **lang_id** | **string**| Retrieves category info  specified by language id | [optional] |
| **schema_type** | **string**| The name of the requirements set for the provided schema. | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,parent_id,name,description&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CategoryInfo200Response**](../Model/CategoryInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryList()`

```php
categoryList($start, $count, $page_cursor, $store_id, $lang_id, $parent_id, $avail, $product_type, $created_from, $created_to, $modified_from, $modified_to, $find_value, $find_where, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $disable_cache, $use_latest_api_version): \OpenAPI\Client\Model\ModelResponseCategoryList
```

category.list

Get list of categories from store.

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$store_id = 1; // string | Retrieves categories specified by store id
$lang_id = 3; // string | Retrieves categorys specified by language id
$parent_id = 6; // string | Retrieves categories specified by parent id
$avail = false; // bool | Defines category's visibility status
$product_type = BICYCLE; // string | A categorization for the product
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$find_value = Demo category 1; // string | Entity search that is specified by some value
$find_where = name; // string | Category search that is specified by field
$response_fields = {result{categories_count,category{id,parent_id,modified_at{value},images}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,parent_id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,parent_id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$report_request_id = 105245017661; // string | Report request id
$disable_report_cache = false; // bool | Disable report cache for current request
$disable_cache = false; // bool | Disable cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->categoryList($start, $count, $page_cursor, $store_id, $lang_id, $parent_id, $avail, $product_type, $created_from, $created_to, $modified_from, $modified_to, $find_value, $find_where, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $disable_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **store_id** | **string**| Retrieves categories specified by store id | [optional] |
| **lang_id** | **string**| Retrieves categorys specified by language id | [optional] |
| **parent_id** | **string**| Retrieves categories specified by parent id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] [default to true] |
| **product_type** | **string**| A categorization for the product | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Category search that is specified by field | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,parent_id,name,description&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **disable_cache** | **bool**| Disable cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseCategoryList**](../Model/ModelResponseCategoryList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryUnassign()`

```php
categoryUnassign($category_id, $product_id, $store_id, $idempotency_key): \OpenAPI\Client\Model\CategoryAssign200Response
```

category.unassign

Unassign category to product

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 6; // string | Defines category unassign, specified by category id
$product_id = 10; // string | Defines category unassign to the product, specified by product id
$store_id = 1; // string | Store Id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->categoryUnassign($category_id, $product_id, $store_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUnassign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **string**| Defines category unassign, specified by category id | |
| **product_id** | **string**| Defines category unassign to the product, specified by product id | |
| **store_id** | **string**| Store Id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryAssign200Response**](../Model/CategoryAssign200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryUpdate()`

```php
categoryUpdate($id, $name, $description, $short_description, $parent_id, $avail, $sort_order, $modified_time, $meta_title, $meta_description, $meta_keywords, $seo_url, $store_id, $stores_ids, $lang_id, $idempotency_key): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

category.update

Update category in store

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


$apiInstance = new OpenAPI\Client\Api\CategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Defines category update specified by category id
$name = NEW Shoes; // string | Defines new category’s name
$description = New test category; // string | Defines new category's description
$short_description = Short description. This is very short description; // string | Defines short description
$parent_id = 6; // string | Defines new parent category id
$avail = false; // bool | Defines category's visibility status
$sort_order = 2; // int | Sort number in the list
$modified_time = 2014-07-30 15:58:41; // string | Entity's date modification
$meta_title = category,test; // string | Defines unique meta title for each entity
$meta_description = category,test; // string | Defines unique meta description of a entity
$meta_keywords = category,test; // string | Defines unique meta keywords for each entity
$seo_url = category,test; // string | Defines unique category's URL for SEO
$store_id = 1; // string | Store Id
$stores_ids = 1,2; // string | Update category in the stores that is specified by comma-separated stores' id
$lang_id = 3; // string | Language id
$idempotency_key = 098f6bcd4621d373cade4e832627b4f6; // string | A unique identifier associated with a specific request. Repeated requests with the same <strong>idempotency_key</strong> return a cached response without re-executing the business logic. <strong>Please note that the cache lifetime is 15 minutes.</strong>

try {
    $result = $apiInstance->categoryUpdate($id, $name, $description, $short_description, $parent_id, $avail, $sort_order, $modified_time, $meta_title, $meta_description, $meta_keywords, $seo_url, $store_id, $stores_ids, $lang_id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryApi->categoryUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Defines category update specified by category id | |
| **name** | **string**| Defines new category’s name | [optional] |
| **description** | **string**| Defines new category&#39;s description | [optional] |
| **short_description** | **string**| Defines short description | [optional] |
| **parent_id** | **string**| Defines new parent category id | [optional] |
| **avail** | **bool**| Defines category&#39;s visibility status | [optional] |
| **sort_order** | **int**| Sort number in the list | [optional] |
| **modified_time** | **string**| Entity&#39;s date modification | [optional] |
| **meta_title** | **string**| Defines unique meta title for each entity | [optional] |
| **meta_description** | **string**| Defines unique meta description of a entity | [optional] |
| **meta_keywords** | **string**| Defines unique meta keywords for each entity | [optional] |
| **seo_url** | **string**| Defines unique category&#39;s URL for SEO | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **stores_ids** | **string**| Update category in the stores that is specified by comma-separated stores&#39; id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **idempotency_key** | **string**| A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional] |

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
