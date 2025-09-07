# OpenAPI\Client\ProductApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productAdd()**](ProductApi.md#productAdd) | **POST** /product.add.json | product.add |
| [**productAddBatch()**](ProductApi.md#productAddBatch) | **POST** /product.add.batch.json | product.add.batch |
| [**productAttributeList()**](ProductApi.md#productAttributeList) | **GET** /product.attribute.list.json | product.attribute.list |
| [**productAttributeValueSet()**](ProductApi.md#productAttributeValueSet) | **POST** /product.attribute.value.set.json | product.attribute.value.set |
| [**productAttributeValueUnset()**](ProductApi.md#productAttributeValueUnset) | **POST** /product.attribute.value.unset.json | product.attribute.value.unset |
| [**productBrandList()**](ProductApi.md#productBrandList) | **GET** /product.brand.list.json | product.brand.list |
| [**productChildItemFind()**](ProductApi.md#productChildItemFind) | **GET** /product.child_item.find.json | product.child_item.find |
| [**productChildItemInfo()**](ProductApi.md#productChildItemInfo) | **GET** /product.child_item.info.json | product.child_item.info |
| [**productChildItemList()**](ProductApi.md#productChildItemList) | **GET** /product.child_item.list.json | product.child_item.list |
| [**productCount()**](ProductApi.md#productCount) | **GET** /product.count.json | product.count |
| [**productCurrencyAdd()**](ProductApi.md#productCurrencyAdd) | **POST** /product.currency.add.json | product.currency.add |
| [**productCurrencyList()**](ProductApi.md#productCurrencyList) | **GET** /product.currency.list.json | product.currency.list |
| [**productDelete()**](ProductApi.md#productDelete) | **DELETE** /product.delete.json | product.delete |
| [**productDeleteBatch()**](ProductApi.md#productDeleteBatch) | **POST** /product.delete.batch.json | product.delete.batch |
| [**productFind()**](ProductApi.md#productFind) | **GET** /product.find.json | product.find |
| [**productImageAdd()**](ProductApi.md#productImageAdd) | **POST** /product.image.add.json | product.image.add |
| [**productImageDelete()**](ProductApi.md#productImageDelete) | **DELETE** /product.image.delete.json | product.image.delete |
| [**productImageUpdate()**](ProductApi.md#productImageUpdate) | **PUT** /product.image.update.json | product.image.update |
| [**productInfo()**](ProductApi.md#productInfo) | **GET** /product.info.json | product.info |
| [**productList()**](ProductApi.md#productList) | **GET** /product.list.json | product.list |
| [**productManufacturerAdd()**](ProductApi.md#productManufacturerAdd) | **POST** /product.manufacturer.add.json | product.manufacturer.add |
| [**productOptionAdd()**](ProductApi.md#productOptionAdd) | **POST** /product.option.add.json | product.option.add |
| [**productOptionAssign()**](ProductApi.md#productOptionAssign) | **POST** /product.option.assign.json | product.option.assign |
| [**productOptionDelete()**](ProductApi.md#productOptionDelete) | **DELETE** /product.option.delete.json | product.option.delete |
| [**productOptionList()**](ProductApi.md#productOptionList) | **GET** /product.option.list.json | product.option.list |
| [**productOptionValueAdd()**](ProductApi.md#productOptionValueAdd) | **POST** /product.option.value.add.json | product.option.value.add |
| [**productOptionValueAssign()**](ProductApi.md#productOptionValueAssign) | **POST** /product.option.value.assign.json | product.option.value.assign |
| [**productOptionValueDelete()**](ProductApi.md#productOptionValueDelete) | **DELETE** /product.option.value.delete.json | product.option.value.delete |
| [**productOptionValueUpdate()**](ProductApi.md#productOptionValueUpdate) | **PUT** /product.option.value.update.json | product.option.value.update |
| [**productPriceAdd()**](ProductApi.md#productPriceAdd) | **POST** /product.price.add.json | product.price.add |
| [**productPriceDelete()**](ProductApi.md#productPriceDelete) | **DELETE** /product.price.delete.json | product.price.delete |
| [**productPriceUpdate()**](ProductApi.md#productPriceUpdate) | **PUT** /product.price.update.json | product.price.update |
| [**productReviewList()**](ProductApi.md#productReviewList) | **GET** /product.review.list.json | product.review.list |
| [**productStoreAssign()**](ProductApi.md#productStoreAssign) | **POST** /product.store.assign.json | product.store.assign |
| [**productTaxAdd()**](ProductApi.md#productTaxAdd) | **POST** /product.tax.add.json | product.tax.add |
| [**productUpdate()**](ProductApi.md#productUpdate) | **PUT** /product.update.json | product.update |
| [**productUpdateBatch()**](ProductApi.md#productUpdateBatch) | **POST** /product.update.batch.json | product.update.batch |
| [**productVariantAdd()**](ProductApi.md#productVariantAdd) | **POST** /product.variant.add.json | product.variant.add |
| [**productVariantAddBatch()**](ProductApi.md#productVariantAddBatch) | **POST** /product.variant.add.batch.json | product.variant.add.batch |
| [**productVariantDelete()**](ProductApi.md#productVariantDelete) | **DELETE** /product.variant.delete.json | product.variant.delete |
| [**productVariantDeleteBatch()**](ProductApi.md#productVariantDeleteBatch) | **POST** /product.variant.delete.batch.json | product.variant.delete.batch |
| [**productVariantImageAdd()**](ProductApi.md#productVariantImageAdd) | **POST** /product.variant.image.add.json | product.variant.image.add |
| [**productVariantImageDelete()**](ProductApi.md#productVariantImageDelete) | **DELETE** /product.variant.image.delete.json | product.variant.image.delete |
| [**productVariantPriceAdd()**](ProductApi.md#productVariantPriceAdd) | **POST** /product.variant.price.add.json | product.variant.price.add |
| [**productVariantPriceDelete()**](ProductApi.md#productVariantPriceDelete) | **DELETE** /product.variant.price.delete.json | product.variant.price.delete |
| [**productVariantPriceUpdate()**](ProductApi.md#productVariantPriceUpdate) | **PUT** /product.variant.price.update.json | product.variant.price.update |
| [**productVariantUpdate()**](ProductApi.md#productVariantUpdate) | **PUT** /product.variant.update.json | product.variant.update |
| [**productVariantUpdateBatch()**](ProductApi.md#productVariantUpdateBatch) | **POST** /product.variant.update.batch.json | product.variant.update.batch |


## `productAdd()`

```php
productAdd($product_add): \OpenAPI\Client\Model\ProductAdd200Response
```

product.add

Add new product to store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_add = new \OpenAPI\Client\Model\ProductAdd(); // \OpenAPI\Client\Model\ProductAdd

try {
    $result = $apiInstance->productAdd($product_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_add** | [**\OpenAPI\Client\Model\ProductAdd**](../Model/ProductAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductAdd200Response**](../Model/ProductAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAddBatch()`

```php
productAddBatch($product_add_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.add.batch

Add new products to the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_add_batch = new \OpenAPI\Client\Model\ProductAddBatch(); // \OpenAPI\Client\Model\ProductAddBatch

try {
    $result = $apiInstance->productAddBatch($product_add_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAddBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_add_batch** | [**\OpenAPI\Client\Model\ProductAddBatch**](../Model/ProductAddBatch.md)|  | |

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

## `productAttributeList()`

```php
productAttributeList($product_id, $start, $count, $page_cursor, $attribute_id, $variant_id, $attribute_group_id, $lang_id, $store_id, $set_name, $sort_by, $sort_direction, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseProductAttributeList
```

product.attribute.list

Get list of attributes and values.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Retrieves attributes specified by product id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$attribute_id = 156; // string | Retrieves info for specified attribute_id
$variant_id = 45; // string | Defines product's variants specified by variant id
$attribute_group_id = 202; // string | Filter by attribute_group_id
$lang_id = 3; // string | Retrieves attributes specified by language id
$store_id = 1; // string | Retrieves attributes specified by store id
$set_name = Shoes; // string | Retrieves attributes specified by set_name in Magento
$sort_by = value; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$response_fields = {pagination,result{attribute}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = attribute_id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = attribute_id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->productAttributeList($product_id, $start, $count, $page_cursor, $attribute_id, $variant_id, $attribute_group_id, $lang_id, $store_id, $set_name, $sort_by, $sort_direction, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAttributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Retrieves attributes specified by product id | |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **attribute_id** | **string**| Retrieves info for specified attribute_id | [optional] |
| **variant_id** | **string**| Defines product&#39;s variants specified by variant id | [optional] |
| **attribute_group_id** | **string**| Filter by attribute_group_id | [optional] |
| **lang_id** | **string**| Retrieves attributes specified by language id | [optional] |
| **store_id** | **string**| Retrieves attributes specified by store id | [optional] |
| **set_name** | **string**| Retrieves attributes specified by set_name in Magento | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;attribute_id&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;attribute_id,name&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductAttributeList**](../Model/ModelResponseProductAttributeList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeValueSet()`

```php
productAttributeValueSet($product_id, $attribute_id, $attribute_group_id, $attribute_name, $value, $value_id, $lang_id, $store_id): \OpenAPI\Client\Model\ProductAttributeValueSet200Response
```

product.attribute.value.set

Set attribute value to product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the attribute should be added
$attribute_id = 156; // string | Filter by attribute_id
$attribute_group_id = 202; // string | Filter by attribute_group_id
$attribute_name = Color; // string | Define attribute name
$value = Red; // string | Define attribute value
$value_id = 22; // int | Define attribute value id
$lang_id = 3; // string | Language id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productAttributeValueSet($product_id, $attribute_id, $attribute_group_id, $attribute_name, $value, $value_id, $lang_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAttributeValueSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the attribute should be added | |
| **attribute_id** | **string**| Filter by attribute_id | [optional] |
| **attribute_group_id** | **string**| Filter by attribute_group_id | [optional] |
| **attribute_name** | **string**| Define attribute name | [optional] |
| **value** | **string**| Define attribute value | [optional] |
| **value_id** | **int**| Define attribute value id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductAttributeValueSet200Response**](../Model/ProductAttributeValueSet200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeValueUnset()`

```php
productAttributeValueUnset($product_id, $attribute_id, $store_id, $include_default, $reindex, $clear_cache): \OpenAPI\Client\Model\ProductAttributeValueUnset200Response
```

product.attribute.value.unset

Removes attribute value for a product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Product id
$attribute_id = 156; // string | Attribute Id
$store_id = 1; // string | Store Id
$include_default = true; // bool | Boolean, whether or not to unset default value of the attribute, if applicable
$reindex = false; // bool | Is reindex required
$clear_cache = false; // bool | Is cache clear required

try {
    $result = $apiInstance->productAttributeValueUnset($product_id, $attribute_id, $store_id, $include_default, $reindex, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productAttributeValueUnset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product id | |
| **attribute_id** | **string**| Attribute Id | |
| **store_id** | **string**| Store Id | [optional] |
| **include_default** | **bool**| Boolean, whether or not to unset default value of the attribute, if applicable | [optional] [default to false] |
| **reindex** | **bool**| Is reindex required | [optional] [default to true] |
| **clear_cache** | **bool**| Is cache clear required | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\ProductAttributeValueUnset200Response**](../Model/ProductAttributeValueUnset200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBrandList()`

```php
productBrandList($start, $count, $page_cursor, $brand_ids, $category_id, $parent_id, $store_id, $lang_id, $find_where, $find_value, $created_from, $created_to, $modified_from, $modified_to, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseProductBrandList
```

product.brand.list

Get list of brands from your store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$brand_ids = 4,5; // string | Retrieves brands specified by brand ids
$category_id = 6; // string | Retrieves product brands specified by category id
$parent_id = 6; // string | Retrieves brands specified by parent id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$find_where = name; // string | Entity search that is specified by the comma-separated unique fields
$find_value = Phone; // string | Entity search that is specified by some value
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->productBrandList($start, $count, $page_cursor, $brand_ids, $category_id, $parent_id, $store_id, $lang_id, $find_where, $find_value, $created_from, $created_to, $modified_from, $modified_to, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBrandList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **brand_ids** | **string**| Retrieves brands specified by brand ids | [optional] |
| **category_id** | **string**| Retrieves product brands specified by category id | [optional] |
| **parent_id** | **string**| Retrieves brands specified by parent id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **find_where** | **string**| Entity search that is specified by the comma-separated unique fields | [optional] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,short_description,active,url&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductBrandList**](../Model/ModelResponseProductBrandList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productChildItemFind()`

```php
productChildItemFind($find_value, $find_where, $find_params, $store_id): \OpenAPI\Client\Model\ProductChildItemFind200Response
```

product.child_item.find

Search product child item (bundled item or configurable product variant) in store catalog.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_value = bundled-item-123-; // string | Entity search that is specified by some value
$find_where = sku; // string | Entity search that is specified by the comma-separated unique fields
$find_params = regex; // string | Entity search that is specified by comma-separated parameters
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productChildItemFind($find_value, $find_where, $find_params, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productChildItemFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Entity search that is specified by the comma-separated unique fields | [optional] |
| **find_params** | **string**| Entity search that is specified by comma-separated parameters | [optional] [default to &#39;whole_words&#39;] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductChildItemFind200Response**](../Model/ProductChildItemFind200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productChildItemInfo()`

```php
productChildItemInfo($product_id, $id, $store_id, $lang_id, $currency_id, $response_fields, $params, $exclude, $use_latest_api_version): \OpenAPI\Client\Model\ProductChildItemInfo200Response
```

product.child_item.info

Get child for specific product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Filter by parent product id
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$currency_id = usd; // string | Currency Id
$response_fields = {result{id,parent_id,sku,upc,images,combination}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->productChildItemInfo($product_id, $id, $store_id, $lang_id, $currency_id, $response_fields, $params, $exclude, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productChildItemInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Filter by parent product id | |
| **id** | **string**| Entity id | |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProductChildItemInfo200Response**](../Model/ProductChildItemInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productChildItemList()`

```php
productChildItemList($start, $count, $page_cursor, $product_id, $product_ids, $sku, $store_id, $lang_id, $currency_id, $avail_sale, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to, $return_global, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version): \OpenAPI\Client\Model\ModelResponseProductChildItemList
```

product.child_item.list

Get a list of a product's child items, such as variants or bundle components. The total_count field in the response indicates the total number of items in the context of the current filter.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve products child items via cursor-based pagination (it can't be used with any other filtering parameter)
$product_id = 10; // string | Filter by parent product id
$product_ids = 4,5; // string | Filter by parent product ids
$sku = bag_01; // string | Filter by products variant's sku
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$currency_id = usd; // string | Currency Id
$avail_sale = false; // bool | Specifies the set of available/not available products for sale
$find_value = bundled-item-123-; // string | Entity search that is specified by some value
$find_where = sku; // string | Child products search that is specified by field
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$return_global = false; // bool | Determines the type of products to be returned. If set to 'true', only global products will be returned; if set to 'false', only local products will be returned.
$response_fields = {result{children{id,parent_id,sku,upc,images,combination}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$report_request_id = 105245017661; // string | Report request id
$disable_report_cache = false; // bool | Disable report cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->productChildItemList($start, $count, $page_cursor, $product_id, $product_ids, $sku, $store_id, $lang_id, $currency_id, $avail_sale, $find_value, $find_where, $created_from, $created_to, $modified_from, $modified_to, $return_global, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productChildItemList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve products child items via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **product_id** | **string**| Filter by parent product id | [optional] |
| **product_ids** | **string**| Filter by parent product ids | [optional] |
| **sku** | **string**| Filter by products variant&#39;s sku | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **avail_sale** | **bool**| Specifies the set of available/not available products for sale | [optional] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Child products search that is specified by field | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **return_global** | **bool**| Determines the type of products to be returned. If set to &#39;true&#39;, only global products will be returned; if set to &#39;false&#39;, only local products will be returned. | [optional] [default to false] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductChildItemList**](../Model/ModelResponseProductChildItemList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCount()`

```php
productCount($product_ids, $since_id, $categories_ids, $category_id, $store_id, $lang_id, $avail_view, $avail_sale, $created_from, $created_to, $modified_from, $modified_to, $brand_name, $product_attributes, $status, $type, $visible, $find_value, $find_where, $report_request_id, $return_global, $disable_report_cache, $use_latest_api_version): \OpenAPI\Client\Model\ProductCount200Response
```

product.count

Count products in store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_ids = 4,5; // string | Counts products specified by product ids
$since_id = 56; // string | Retrieve entities starting from the specified id.
$categories_ids = 23,56; // string | Defines product add that is specified by comma-separated categories id
$category_id = 6; // string | Counts products specified by category id
$store_id = 1; // string | Counts products specified by store id
$lang_id = 3; // string | Counts products specified by language id
$avail_view = true; // bool | Specifies the set of visible/invisible products
$avail_sale = false; // bool | Specifies the set of available/not available products for sale
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$brand_name = Abidas; // string | Retrieves brands specified by brand name
$product_attributes = product_attributes[0][attribute_id]=132&product_attributes[0][values][0]=custom value 1&product_attributes[0][values][1]=custom value 2; // string[] | Defines product attributes
$status = disabled; // string | Defines product's status
$type = simple; // string | Defines products's type
$visible = everywhere; // string | Filter items by visibility status
$find_value = Phone; // string | Entity search that is specified by some value
$find_where = name; // string | Counts products that are searched specified by field
$report_request_id = 105245017661; // string | Report request id
$return_global = false; // bool | Determines the type of products to be returned. If set to 'true', only global products will be returned; if set to 'false', only local products will be returned.
$disable_report_cache = false; // bool | Disable report cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->productCount($product_ids, $since_id, $categories_ids, $category_id, $store_id, $lang_id, $avail_view, $avail_sale, $created_from, $created_to, $modified_from, $modified_to, $brand_name, $product_attributes, $status, $type, $visible, $find_value, $find_where, $report_request_id, $return_global, $disable_report_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_ids** | **string**| Counts products specified by product ids | [optional] |
| **since_id** | **string**| Retrieve entities starting from the specified id. | [optional] |
| **categories_ids** | **string**| Defines product add that is specified by comma-separated categories id | [optional] |
| **category_id** | **string**| Counts products specified by category id | [optional] |
| **store_id** | **string**| Counts products specified by store id | [optional] |
| **lang_id** | **string**| Counts products specified by language id | [optional] |
| **avail_view** | **bool**| Specifies the set of visible/invisible products | [optional] |
| **avail_sale** | **bool**| Specifies the set of available/not available products for sale | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **brand_name** | **string**| Retrieves brands specified by brand name | [optional] |
| **product_attributes** | [**string[]**](../Model/string.md)| Defines product attributes | [optional] |
| **status** | **string**| Defines product&#39;s status | [optional] |
| **type** | **string**| Defines products&#39;s type | [optional] |
| **visible** | **string**| Filter items by visibility status | [optional] [default to &#39;everywhere&#39;] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Counts products that are searched specified by field | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **return_global** | **bool**| Determines the type of products to be returned. If set to &#39;true&#39;, only global products will be returned; if set to &#39;false&#39;, only local products will be returned. | [optional] [default to false] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProductCount200Response**](../Model/ProductCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCurrencyAdd()`

```php
productCurrencyAdd($iso3, $rate, $name, $avail, $symbol_left, $symbol_right, $default): \OpenAPI\Client\Model\ProductCurrencyAdd200Response
```

product.currency.add

Add currency and/or set default in store

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iso3 = USD; // string | Specifies standardized currency code
$rate = 1; // float | Defines the numerical identifier against to the major currency
$name = US Dollar; // string | Defines currency's name
$avail = false; // bool | Specifies whether the currency is available
$symbol_left = $; // string | Defines the symbol that is located before the currency
$symbol_right = грн; // string | Defines the symbol that is located after the currency
$default = true; // bool | Specifies currency's default meaning

try {
    $result = $apiInstance->productCurrencyAdd($iso3, $rate, $name, $avail, $symbol_left, $symbol_right, $default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCurrencyAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **iso3** | **string**| Specifies standardized currency code | |
| **rate** | **float**| Defines the numerical identifier against to the major currency | |
| **name** | **string**| Defines currency&#39;s name | [optional] |
| **avail** | **bool**| Specifies whether the currency is available | [optional] [default to true] |
| **symbol_left** | **string**| Defines the symbol that is located before the currency | [optional] |
| **symbol_right** | **string**| Defines the symbol that is located after the currency | [optional] |
| **default** | **bool**| Specifies currency&#39;s default meaning | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProductCurrencyAdd200Response**](../Model/ProductCurrencyAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCurrencyList()`

```php
productCurrencyList($start, $count, $page_cursor, $default, $avail, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseProductCurrencyList
```

product.currency.list

Get list of currencies

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$default = true; // bool | Specifies the set of default/not default currencies
$avail = false; // bool | Specifies the set of available/not available currencies
$response_fields = {return_message,pagination,result{currency}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = name,iso3,default,avail; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = name,iso3,default,avail; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->productCurrencyList($start, $count, $page_cursor, $default, $avail, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCurrencyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **default** | **bool**| Specifies the set of default/not default currencies | [optional] |
| **avail** | **bool**| Specifies the set of available/not available currencies | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;name,iso3,default,avail&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductCurrencyList**](../Model/ModelResponseProductCurrencyList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDelete()`

```php
productDelete($id, $store_id): \OpenAPI\Client\Model\CustomerDelete200Response
```

product.delete

Product delete

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Product id that will be removed
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productDelete($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Product id that will be removed | |
| **store_id** | **string**| Store Id | [optional] |

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

## `productDeleteBatch()`

```php
productDeleteBatch($product_delete_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.delete.batch

Remove product from the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_delete_batch = new \OpenAPI\Client\Model\ProductDeleteBatch(); // \OpenAPI\Client\Model\ProductDeleteBatch

try {
    $result = $apiInstance->productDeleteBatch($product_delete_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDeleteBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_delete_batch** | [**\OpenAPI\Client\Model\ProductDeleteBatch**](../Model/ProductDeleteBatch.md)|  | |

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

## `productFind()`

```php
productFind($find_value, $find_where, $find_params, $find_what, $lang_id, $store_id): \OpenAPI\Client\Model\ProductFind200Response
```

product.find

Search product in store catalog. \"Apple\" is specified here by default.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$find_value = Simple; // string | Entity search that is specified by some value
$find_where = name; // string | Entity search that is specified by the comma-separated unique fields
$find_params = regex; // string | Entity search that is specified by comma-separated parameters
$find_what = each; // string | Parameter's value specifies the entity that has to be found
$lang_id = 3; // string | Search products specified by language id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productFind($find_value, $find_where, $find_params, $find_what, $lang_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **find_value** | **string**| Entity search that is specified by some value | |
| **find_where** | **string**| Entity search that is specified by the comma-separated unique fields | [optional] [default to &#39;name&#39;] |
| **find_params** | **string**| Entity search that is specified by comma-separated parameters | [optional] [default to &#39;whole_words&#39;] |
| **find_what** | **string**| Parameter&#39;s value specifies the entity that has to be found | [optional] [default to &#39;product&#39;] |
| **lang_id** | **string**| Search products specified by language id | [optional] |
| **store_id** | **string**| Store Id | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductFind200Response**](../Model/ProductFind200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productImageAdd()`

```php
productImageAdd($product_image_add): \OpenAPI\Client\Model\ProductImageAdd200Response
```

product.image.add

Add image to product

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_image_add = new \OpenAPI\Client\Model\ProductImageAdd(); // \OpenAPI\Client\Model\ProductImageAdd

try {
    $result = $apiInstance->productImageAdd($product_image_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productImageAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_image_add** | [**\OpenAPI\Client\Model\ProductImageAdd**](../Model/ProductImageAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductImageAdd200Response**](../Model/ProductImageAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productImageDelete()`

```php
productImageDelete($product_id, $id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.image.delete

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the image should be deleted
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productImageDelete($product_id, $id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productImageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the image should be deleted | |
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

## `productImageUpdate()`

```php
productImageUpdate($product_id, $id, $variant_ids, $store_id, $lang_id, $image_name, $type, $label, $position, $hidden): \OpenAPI\Client\Model\ProductImageUpdate200Response
```

product.image.update

Update details of image

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the image should be updated
$id = 10; // string | Defines image update specified by image id
$variant_ids = 1,2,3,4,5; // string | Defines product's variants ids
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$image_name = data/product/main/product_69_bag-gray.png; // string | Defines image's name
$type = thumbnail; // string | Defines image's types that are specified by comma-separated list
$label = This cool image; // string | Defines alternative text that has to be attached to the picture
$position = 5; // int | Defines image’s position in the list
$hidden = true; // bool | Define is hide image

try {
    $result = $apiInstance->productImageUpdate($product_id, $id, $variant_ids, $store_id, $lang_id, $image_name, $type, $label, $position, $hidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productImageUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the image should be updated | |
| **id** | **string**| Defines image update specified by image id | |
| **variant_ids** | **string**| Defines product&#39;s variants ids | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **image_name** | **string**| Defines image&#39;s name | [optional] |
| **type** | **string**| Defines image&#39;s types that are specified by comma-separated list | [optional] [default to &#39;additional&#39;] |
| **label** | **string**| Defines alternative text that has to be attached to the picture | [optional] |
| **position** | **int**| Defines image’s position in the list | [optional] |
| **hidden** | **bool**| Define is hide image | [optional] |

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

## `productInfo()`

```php
productInfo($id, $store_id, $lang_id, $currency_id, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version): \OpenAPI\Client\Model\ProductInfo200Response
```

product.info

Get information about a specific product by its ID. In the case of a multistore configuration, use the store_id filter to get a response in the context of a specific store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Retrieves product's info specified by product id
$store_id = 1; // string | Retrieves product info specified by store id
$lang_id = 3; // string | Retrieves product info specified by language id
$currency_id = usd; // string | Currency Id
$response_fields = {result{id,name,price,images}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$report_request_id = 105245017661; // string | Report request id
$disable_report_cache = false; // bool | Disable report cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version

try {
    $result = $apiInstance->productInfo($id, $store_id, $lang_id, $currency_id, $response_fields, $params, $exclude, $report_request_id, $disable_report_cache, $use_latest_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Retrieves product&#39;s info specified by product id | |
| **store_id** | **string**| Retrieves product info specified by store id | [optional] |
| **lang_id** | **string**| Retrieves product info specified by language id | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,description,price,categories_ids&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ProductInfo200Response**](../Model/ProductInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productList()`

```php
productList($start, $count, $page_cursor, $product_ids, $since_id, $categories_ids, $category_id, $store_id, $lang_id, $currency_id, $avail_view, $avail_sale, $created_from, $created_to, $modified_from, $modified_to, $sku, $brand_name, $product_attributes, $status, $type, $visible, $find_value, $find_where, $return_global, $params, $response_fields, $exclude, $sort_by, $sort_direction, $report_request_id, $disable_cache, $disable_report_cache, $use_latest_api_version, $product_type): \OpenAPI\Client\Model\ModelResponseProductList
```

product.list

Get list of products from your store. Returns 10 products by default.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve products via cursor-based pagination (it can't be used with any other filtering parameter)
$product_ids = 4,5; // string | Retrieves products specified by product ids
$since_id = 56; // string | Retrieve entities starting from the specified id.
$categories_ids = 23,56; // string | Retrieves products specified by categories ids
$category_id = 6; // string | Retrieves products specified by category id
$store_id = 1; // string | Retrieves products specified by store id
$lang_id = 3; // string | Retrieves products specified by language id
$currency_id = usd; // string | Currency Id
$avail_view = true; // bool | Specifies the set of visible/invisible products
$avail_sale = false; // bool | Specifies the set of available/not available products for sale
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$modified_from = 2010-07-29 13:45:52; // string | Retrieve entities from their modification date
$modified_to = 2100-08-29 13:45:52; // string | Retrieve entities to their modification date
$sku = bag_01; // string | Filter by product's sku
$brand_name = Abidas; // string | Retrieves brands specified by brand name
$product_attributes = product_attributes[0][attribute_id]=132&product_attributes[0][values][0]=custom value 1&product_attributes[0][values][1]=custom value 2; // string[] | Defines product attributes
$status = disabled; // string | Defines product's status
$type = simple; // string | Defines products's type
$visible = everywhere; // string | Filter items by visibility status
$find_value = Phone; // string | Entity search that is specified by some value
$find_where = name; // string | Product search that is specified by field
$return_global = false; // bool | Determines the type of products to be returned. If set to 'true', only global products will be returned; if set to 'false', only local products will be returned.
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$response_fields = {return_code,pagination,result{product{id,name,price,images}}}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$sort_by = value_id; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$report_request_id = 105245017661; // string | Report request id
$disable_cache = false; // bool | Disable cache for current request
$disable_report_cache = false; // bool | Disable report cache for current request
$use_latest_api_version = true; // bool | Use the latest platform API version
$product_type = BICYCLE; // string | A categorization for the product

try {
    $result = $apiInstance->productList($start, $count, $page_cursor, $product_ids, $since_id, $categories_ids, $category_id, $store_id, $lang_id, $currency_id, $avail_view, $avail_sale, $created_from, $created_to, $modified_from, $modified_to, $sku, $brand_name, $product_attributes, $status, $type, $visible, $find_value, $find_where, $return_global, $params, $response_fields, $exclude, $sort_by, $sort_direction, $report_request_id, $disable_cache, $disable_report_cache, $use_latest_api_version, $product_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve products via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **product_ids** | **string**| Retrieves products specified by product ids | [optional] |
| **since_id** | **string**| Retrieve entities starting from the specified id. | [optional] |
| **categories_ids** | **string**| Retrieves products specified by categories ids | [optional] |
| **category_id** | **string**| Retrieves products specified by category id | [optional] |
| **store_id** | **string**| Retrieves products specified by store id | [optional] |
| **lang_id** | **string**| Retrieves products specified by language id | [optional] |
| **currency_id** | **string**| Currency Id | [optional] |
| **avail_view** | **bool**| Specifies the set of visible/invisible products | [optional] |
| **avail_sale** | **bool**| Specifies the set of available/not available products for sale | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **modified_from** | **string**| Retrieve entities from their modification date | [optional] |
| **modified_to** | **string**| Retrieve entities to their modification date | [optional] |
| **sku** | **string**| Filter by product&#39;s sku | [optional] |
| **brand_name** | **string**| Retrieves brands specified by brand name | [optional] |
| **product_attributes** | [**string[]**](../Model/string.md)| Defines product attributes | [optional] |
| **status** | **string**| Defines product&#39;s status | [optional] |
| **type** | **string**| Defines products&#39;s type | [optional] |
| **visible** | **string**| Filter items by visibility status | [optional] [default to &#39;everywhere&#39;] |
| **find_value** | **string**| Entity search that is specified by some value | [optional] |
| **find_where** | **string**| Product search that is specified by field | [optional] |
| **return_global** | **bool**| Determines the type of products to be returned. If set to &#39;true&#39;, only global products will be returned; if set to &#39;false&#39;, only local products will be returned. | [optional] [default to false] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,description,price,categories_ids&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;id&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **report_request_id** | **string**| Report request id | [optional] |
| **disable_cache** | **bool**| Disable cache for current request | [optional] [default to false] |
| **disable_report_cache** | **bool**| Disable report cache for current request | [optional] [default to false] |
| **use_latest_api_version** | **bool**| Use the latest platform API version | [optional] [default to false] |
| **product_type** | **string**| A categorization for the product | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductList**](../Model/ModelResponseProductList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productManufacturerAdd()`

```php
productManufacturerAdd($product_id, $manufacturer, $store_id, $meta_title, $meta_keywords, $meta_description, $search_keywords, $image_url, $seo_url): \OpenAPI\Client\Model\ProductManufacturerAdd200Response
```

product.manufacturer.add

Add manufacturer to store and assign to product

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines products specified by product id
$manufacturer = Samsung; // string | Defines product’s manufacturer's name
$store_id = 1; // string | Store Id
$meta_title = category,test; // string | Defines unique meta title for each entity
$meta_keywords = category,test; // string | Defines unique meta keywords for each entity
$meta_description = category,test; // string | Defines unique meta description of a entity
$search_keywords = key1,key2,key3; // string | Defines unique search keywords
$image_url = https://docs.api2cart.com/img/logo.png; // string | Image Url
$seo_url = some seo url; // string | Defines unique URL for SEO

try {
    $result = $apiInstance->productManufacturerAdd($product_id, $manufacturer, $store_id, $meta_title, $meta_keywords, $meta_description, $search_keywords, $image_url, $seo_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productManufacturerAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines products specified by product id | |
| **manufacturer** | **string**| Defines product’s manufacturer&#39;s name | |
| **store_id** | **string**| Store Id | [optional] |
| **meta_title** | **string**| Defines unique meta title for each entity | [optional] |
| **meta_keywords** | **string**| Defines unique meta keywords for each entity | [optional] |
| **meta_description** | **string**| Defines unique meta description of a entity | [optional] |
| **search_keywords** | **string**| Defines unique search keywords | [optional] |
| **image_url** | **string**| Image Url | [optional] |
| **seo_url** | **string**| Defines unique URL for SEO | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductManufacturerAdd200Response**](../Model/ProductManufacturerAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionAdd()`

```php
productOptionAdd($product_option_add): \OpenAPI\Client\Model\ProductOptionAdd200Response
```

product.option.add

Add product option from store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_option_add = new \OpenAPI\Client\Model\ProductOptionAdd(); // \OpenAPI\Client\Model\ProductOptionAdd

try {
    $result = $apiInstance->productOptionAdd($product_option_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_option_add** | [**\OpenAPI\Client\Model\ProductOptionAdd**](../Model/ProductOptionAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductOptionAdd200Response**](../Model/ProductOptionAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionAssign()`

```php
productOptionAssign($product_id, $option_id, $required, $sort_order, $option_values, $clear_cache): \OpenAPI\Client\Model\ProductOptionAssign200Response
```

product.option.assign

Assign option from product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the option should be assigned
$option_id = 5; // string | Defines option id which has to be assigned
$required = true; // bool | Defines if the option is required
$sort_order = 2; // int | Sort number in the list
$option_values = green,black,yellow; // string | Defines option values that has to be assigned
$clear_cache = false; // bool | Is cache clear required

try {
    $result = $apiInstance->productOptionAssign($product_id, $option_id, $required, $sort_order, $option_values, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the option should be assigned | |
| **option_id** | **string**| Defines option id which has to be assigned | |
| **required** | **bool**| Defines if the option is required | [optional] [default to false] |
| **sort_order** | **int**| Sort number in the list | [optional] [default to 0] |
| **option_values** | **string**| Defines option values that has to be assigned | [optional] |
| **clear_cache** | **bool**| Is cache clear required | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\ProductOptionAssign200Response**](../Model/ProductOptionAssign200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionDelete()`

```php
productOptionDelete($option_id, $product_id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.option.delete

Product option delete.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 5; // string | Defines option id that should be deleted
$product_id = 10; // string | Defines product id where the option should be deleted
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productOptionDelete($option_id, $product_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **string**| Defines option id that should be deleted | |
| **product_id** | **string**| Defines product id where the option should be deleted | |
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

## `productOptionList()`

```php
productOptionList($start, $count, $product_id, $lang_id, $store_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseProductOptionList
```

product.option.list

Get list of options.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$product_id = 10; // string | Retrieves products' options specified by product id
$lang_id = 3; // string | Language id
$store_id = 1; // string | Store Id
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,name,sort_order; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,name,sort_order; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->productOptionList($start, $count, $product_id, $lang_id, $store_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **product_id** | **string**| Retrieves products&#39; options specified by product id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,description&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductOptionList**](../Model/ModelResponseProductOptionList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionValueAdd()`

```php
productOptionValueAdd($product_id, $option_id, $option_value, $sort_order, $display_value, $is_default, $clear_cache): \OpenAPI\Client\Model\ProductOptionValueAdd200Response
```

product.option.value.add

Add product option item from option.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the option value should be added
$option_id = 5; // string | Defines option id where the value has to be added
$option_value = green; // string | Defines option value that has to be added
$sort_order = 2; // int | Sort number in the list
$display_value = value; // string | Defines the value that will be displayed for the option value
$is_default = true; // bool | Defines as a default
$clear_cache = false; // bool | Is cache clear required

try {
    $result = $apiInstance->productOptionValueAdd($product_id, $option_id, $option_value, $sort_order, $display_value, $is_default, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionValueAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the option value should be added | |
| **option_id** | **string**| Defines option id where the value has to be added | |
| **option_value** | **string**| Defines option value that has to be added | [optional] |
| **sort_order** | **int**| Sort number in the list | [optional] [default to 0] |
| **display_value** | **string**| Defines the value that will be displayed for the option value | [optional] |
| **is_default** | **bool**| Defines as a default | [optional] |
| **clear_cache** | **bool**| Is cache clear required | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\ProductOptionValueAdd200Response**](../Model/ProductOptionValueAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionValueAssign()`

```php
productOptionValueAssign($product_option_id, $option_value_id, $clear_cache): \OpenAPI\Client\Model\ProductOptionValueAssign200Response
```

product.option.value.assign

Assign product option item from product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_option_id = 5; // int | Defines product's option id where the value has to be assigned
$option_value_id = 45; // string | Defines value id that has to be assigned
$clear_cache = false; // bool | Is cache clear required

try {
    $result = $apiInstance->productOptionValueAssign($product_option_id, $option_value_id, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionValueAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_option_id** | **int**| Defines product&#39;s option id where the value has to be assigned | |
| **option_value_id** | **string**| Defines value id that has to be assigned | |
| **clear_cache** | **bool**| Is cache clear required | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\ProductOptionValueAssign200Response**](../Model/ProductOptionValueAssign200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productOptionValueDelete()`

```php
productOptionValueDelete($option_id, $option_value_id, $product_id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.option.value.delete

Product option value delete.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$option_id = 5; // string | Defines option id where the value should be deleted
$option_value_id = 45; // string | Defines option value id that should be deleted
$product_id = 10; // string | Defines product id where the option value should be deleted
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productOptionValueDelete($option_id, $option_value_id, $product_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionValueDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **option_id** | **string**| Defines option id where the value should be deleted | |
| **option_value_id** | **string**| Defines option value id that should be deleted | |
| **product_id** | **string**| Defines product id where the option value should be deleted | |
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

## `productOptionValueUpdate()`

```php
productOptionValueUpdate($product_id, $option_id, $option_value_id, $option_value, $price, $quantity, $display_value, $clear_cache): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.option.value.update

Update product option item from option.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the option value should be updated
$option_id = 5; // string | Defines option id where the value has to be updated
$option_value_id = 45; // string | Defines value id that has to be assigned
$option_value = green; // string | Defines option value that has to be added
$price = 99.9; // float | Defines new product option price
$quantity = 6; // float | Defines new products' options quantity
$display_value = value; // string | Defines the value that will be displayed for the option value
$clear_cache = false; // bool | Is cache clear required

try {
    $result = $apiInstance->productOptionValueUpdate($product_id, $option_id, $option_value_id, $option_value, $price, $quantity, $display_value, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productOptionValueUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the option value should be updated | |
| **option_id** | **string**| Defines option id where the value has to be updated | |
| **option_value_id** | **string**| Defines value id that has to be assigned | |
| **option_value** | **string**| Defines option value that has to be added | [optional] |
| **price** | **float**| Defines new product option price | [optional] |
| **quantity** | **float**| Defines new products&#39; options quantity | [optional] |
| **display_value** | **string**| Defines the value that will be displayed for the option value | [optional] |
| **clear_cache** | **bool**| Is cache clear required | [optional] [default to true] |

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

## `productPriceAdd()`

```php
productPriceAdd($product_price_add): \OpenAPI\Client\Model\CartValidate200Response
```

product.price.add

Add some prices to the product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_price_add = new \OpenAPI\Client\Model\ProductPriceAdd(); // \OpenAPI\Client\Model\ProductPriceAdd

try {
    $result = $apiInstance->productPriceAdd($product_price_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPriceAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_price_add** | [**\OpenAPI\Client\Model\ProductPriceAdd**](../Model/ProductPriceAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartValidate200Response**](../Model/CartValidate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPriceDelete()`

```php
productPriceDelete($product_id, $group_prices, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.price.delete

Delete some prices of the product

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines the product where the price has to be deleted
$group_prices = group_prices=5,8,9; // string | Defines product's group prices
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productPriceDelete($product_id, $group_prices, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPriceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines the product where the price has to be deleted | |
| **group_prices** | **string**| Defines product&#39;s group prices | [optional] |
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

## `productPriceUpdate()`

```php
productPriceUpdate($product_price_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.price.update

Update some prices of the product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_price_update = new \OpenAPI\Client\Model\ProductPriceUpdate(); // \OpenAPI\Client\Model\ProductPriceUpdate

try {
    $result = $apiInstance->productPriceUpdate($product_price_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPriceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_price_update** | [**\OpenAPI\Client\Model\ProductPriceUpdate**](../Model/ProductPriceUpdate.md)|  | |

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

## `productReviewList()`

```php
productReviewList($product_id, $start, $count, $page_cursor, $ids, $store_id, $lang_id, $status, $created_from, $created_to, $customer_id, $sort_by, $sort_direction, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseProductReviewList
```

product.review.list

Get reviews of a specific product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Product id
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$ids = 24,25; // string | Retrieves reviews specified by ids
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$status = disabled; // string | Defines status
$created_from = 2010-07-29 13:45:52; // string | Retrieve entities from their creation date
$created_to = 2100-08-29 13:45:52; // string | Retrieve entities to their creation date
$customer_id = 5; // string | Retrieves orders specified by customer id
$sort_by = value_id; // string | Set field to sort by
$sort_direction = asc; // string | Set sorting direction
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->productReviewList($product_id, $start, $count, $page_cursor, $ids, $store_id, $lang_id, $status, $created_from, $created_to, $customer_id, $sort_by, $sort_direction, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productReviewList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Product id | |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **ids** | **string**| Retrieves reviews specified by ids | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **status** | **string**| Defines status | [optional] |
| **created_from** | **string**| Retrieve entities from their creation date | [optional] |
| **created_to** | **string**| Retrieve entities to their creation date | [optional] |
| **customer_id** | **string**| Retrieves orders specified by customer id | [optional] |
| **sort_by** | **string**| Set field to sort by | [optional] [default to &#39;id&#39;] |
| **sort_direction** | **string**| Set sorting direction | [optional] [default to &#39;asc&#39;] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,customer_id,email,message,status,product_id,nick_name,summary,rating,ratings,status,created_time&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseProductReviewList**](../Model/ModelResponseProductReviewList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productStoreAssign()`

```php
productStoreAssign($product_id, $store_id): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.store.assign

Assign product to store

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines id of the product which should be assigned to a store
$store_id = 1; // string | Defines id of the store product should be assigned to

try {
    $result = $apiInstance->productStoreAssign($product_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productStoreAssign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines id of the product which should be assigned to a store | |
| **store_id** | **string**| Defines id of the store product should be assigned to | |

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

## `productTaxAdd()`

```php
productTaxAdd($product_tax_add): \OpenAPI\Client\Model\ProductTaxAdd200Response
```

product.tax.add

Add tax class and tax rate to store and assign to product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_tax_add = new \OpenAPI\Client\Model\ProductTaxAdd(); // \OpenAPI\Client\Model\ProductTaxAdd

try {
    $result = $apiInstance->productTaxAdd($product_tax_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productTaxAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_tax_add** | [**\OpenAPI\Client\Model\ProductTaxAdd**](../Model/ProductTaxAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductTaxAdd200Response**](../Model/ProductTaxAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productUpdate()`

```php
productUpdate($product_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.update

This method can be used to update certain product data. The list of supported parameters depends on the specific platform. Please transmit only those parameters that are supported by the particular platform. Please note that to update the product quantity, it is recommended to use relative parameters (increase_quantity or reduce_quantity) to avoid unexpected overwrites on heavily loaded stores.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_update = new \OpenAPI\Client\Model\ProductUpdate(); // \OpenAPI\Client\Model\ProductUpdate

try {
    $result = $apiInstance->productUpdate($product_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_update** | [**\OpenAPI\Client\Model\ProductUpdate**](../Model/ProductUpdate.md)|  | |

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

## `productUpdateBatch()`

```php
productUpdateBatch($product_update_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.update.batch

Update products on the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_update_batch = new \OpenAPI\Client\Model\ProductUpdateBatch(); // \OpenAPI\Client\Model\ProductUpdateBatch

try {
    $result = $apiInstance->productUpdateBatch($product_update_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productUpdateBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_update_batch** | [**\OpenAPI\Client\Model\ProductUpdateBatch**](../Model/ProductUpdateBatch.md)|  | |

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

## `productVariantAdd()`

```php
productVariantAdd($product_variant_add): \OpenAPI\Client\Model\ProductVariantAdd200Response
```

product.variant.add

Add variant to product.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_add = new \OpenAPI\Client\Model\ProductVariantAdd(); // \OpenAPI\Client\Model\ProductVariantAdd

try {
    $result = $apiInstance->productVariantAdd($product_variant_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_add** | [**\OpenAPI\Client\Model\ProductVariantAdd**](../Model/ProductVariantAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductVariantAdd200Response**](../Model/ProductVariantAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantAddBatch()`

```php
productVariantAddBatch($product_variant_add_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.variant.add.batch

Add new product variants to the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_add_batch = new \OpenAPI\Client\Model\ProductVariantAddBatch(); // \OpenAPI\Client\Model\ProductVariantAddBatch

try {
    $result = $apiInstance->productVariantAddBatch($product_variant_add_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantAddBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_add_batch** | [**\OpenAPI\Client\Model\ProductVariantAddBatch**](../Model/ProductVariantAddBatch.md)|  | |

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

## `productVariantDelete()`

```php
productVariantDelete($id, $product_id, $store_id): \OpenAPI\Client\Model\AttributeValueDelete200Response
```

product.variant.delete

Delete variant.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Defines variant removal, specified by variant id
$product_id = 10; // string | Defines product's id where the variant has to be deleted
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productVariantDelete($id, $product_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Defines variant removal, specified by variant id | |
| **product_id** | **string**| Defines product&#39;s id where the variant has to be deleted | |
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

## `productVariantDeleteBatch()`

```php
productVariantDeleteBatch($product_variant_delete_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.variant.delete.batch

Remove product variants from the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_delete_batch = new \OpenAPI\Client\Model\ProductVariantDeleteBatch(); // \OpenAPI\Client\Model\ProductVariantDeleteBatch

try {
    $result = $apiInstance->productVariantDeleteBatch($product_variant_delete_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantDeleteBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_delete_batch** | [**\OpenAPI\Client\Model\ProductVariantDeleteBatch**](../Model/ProductVariantDeleteBatch.md)|  | |

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

## `productVariantImageAdd()`

```php
productVariantImageAdd($product_variant_image_add): \OpenAPI\Client\Model\ProductVariantImageAdd200Response
```

product.variant.image.add

Add image to product

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_image_add = new \OpenAPI\Client\Model\ProductVariantImageAdd(); // \OpenAPI\Client\Model\ProductVariantImageAdd

try {
    $result = $apiInstance->productVariantImageAdd($product_variant_image_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantImageAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_image_add** | [**\OpenAPI\Client\Model\ProductVariantImageAdd**](../Model/ProductVariantImageAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProductVariantImageAdd200Response**](../Model/ProductVariantImageAdd200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantImageDelete()`

```php
productVariantImageDelete($product_id, $product_variant_id, $id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.variant.image.delete

Delete  image to product

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 10; // string | Defines product id where the variant image should be deleted
$product_variant_id = 45; // string | Defines product's variants specified by variant id
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productVariantImageDelete($product_id, $product_variant_id, $id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantImageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| Defines product id where the variant image should be deleted | |
| **product_variant_id** | **string**| Defines product&#39;s variants specified by variant id | |
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

## `productVariantPriceAdd()`

```php
productVariantPriceAdd($product_variant_price_add): \OpenAPI\Client\Model\CartValidate200Response
```

product.variant.price.add

Add some prices to the product variant.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_price_add = new \OpenAPI\Client\Model\ProductVariantPriceAdd(); // \OpenAPI\Client\Model\ProductVariantPriceAdd

try {
    $result = $apiInstance->productVariantPriceAdd($product_variant_price_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantPriceAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_price_add** | [**\OpenAPI\Client\Model\ProductVariantPriceAdd**](../Model/ProductVariantPriceAdd.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CartValidate200Response**](../Model/CartValidate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productVariantPriceDelete()`

```php
productVariantPriceDelete($id, $product_id, $group_prices, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

product.variant.price.delete

Delete some prices of the product variant.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Defines the variant where the price has to be deleted
$product_id = 10; // string | Product id
$group_prices = group_prices=6,8,9; // string | Defines variants's group prices
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->productVariantPriceDelete($id, $product_id, $group_prices, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantPriceDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Defines the variant where the price has to be deleted | |
| **product_id** | **string**| Product id | |
| **group_prices** | **string**| Defines variants&#39;s group prices | |
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

## `productVariantPriceUpdate()`

```php
productVariantPriceUpdate($product_variant_price_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.variant.price.update

Update some prices of the product variant.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_price_update = new \OpenAPI\Client\Model\ProductVariantPriceUpdate(); // \OpenAPI\Client\Model\ProductVariantPriceUpdate

try {
    $result = $apiInstance->productVariantPriceUpdate($product_variant_price_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantPriceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_price_update** | [**\OpenAPI\Client\Model\ProductVariantPriceUpdate**](../Model/ProductVariantPriceUpdate.md)|  | |

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

## `productVariantUpdate()`

```php
productVariantUpdate($product_variant_update): \OpenAPI\Client\Model\AccountConfigUpdate200Response
```

product.variant.update

Update variant.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_update = new \OpenAPI\Client\Model\ProductVariantUpdate(); // \OpenAPI\Client\Model\ProductVariantUpdate

try {
    $result = $apiInstance->productVariantUpdate($product_variant_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_update** | [**\OpenAPI\Client\Model\ProductVariantUpdate**](../Model/ProductVariantUpdate.md)|  | |

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

## `productVariantUpdateBatch()`

```php
productVariantUpdateBatch($product_variant_update_batch): \OpenAPI\Client\Model\CategoryAddBatch200Response
```

product.variant.update.batch

Update products variants on the store.

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


$apiInstance = new OpenAPI\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_variant_update_batch = new \OpenAPI\Client\Model\ProductVariantUpdateBatch(); // \OpenAPI\Client\Model\ProductVariantUpdateBatch

try {
    $result = $apiInstance->productVariantUpdateBatch($product_variant_update_batch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productVariantUpdateBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_variant_update_batch** | [**\OpenAPI\Client\Model\ProductVariantUpdateBatch**](../Model/ProductVariantUpdateBatch.md)|  | |

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
