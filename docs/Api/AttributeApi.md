# OpenAPI\Client\AttributeApi

All URIs are relative to https://api.api2cart.local.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attributeAdd()**](AttributeApi.md#attributeAdd) | **POST** /attribute.add.json | attribute.add |
| [**attributeAssignGroup()**](AttributeApi.md#attributeAssignGroup) | **POST** /attribute.assign.group.json | attribute.assign.group |
| [**attributeAssignSet()**](AttributeApi.md#attributeAssignSet) | **POST** /attribute.assign.set.json | attribute.assign.set |
| [**attributeAttributesetList()**](AttributeApi.md#attributeAttributesetList) | **GET** /attribute.attributeset.list.json | attribute.attributeset.list |
| [**attributeCount()**](AttributeApi.md#attributeCount) | **GET** /attribute.count.json | attribute.count |
| [**attributeDelete()**](AttributeApi.md#attributeDelete) | **DELETE** /attribute.delete.json | attribute.delete |
| [**attributeGroupList()**](AttributeApi.md#attributeGroupList) | **GET** /attribute.group.list.json | attribute.group.list |
| [**attributeInfo()**](AttributeApi.md#attributeInfo) | **GET** /attribute.info.json | attribute.info |
| [**attributeList()**](AttributeApi.md#attributeList) | **GET** /attribute.list.json | attribute.list |
| [**attributeTypeList()**](AttributeApi.md#attributeTypeList) | **GET** /attribute.type.list.json | attribute.type.list |
| [**attributeUnassignGroup()**](AttributeApi.md#attributeUnassignGroup) | **POST** /attribute.unassign.group.json | attribute.unassign.group |
| [**attributeUnassignSet()**](AttributeApi.md#attributeUnassignSet) | **POST** /attribute.unassign.set.json | attribute.unassign.set |
| [**attributeUpdate()**](AttributeApi.md#attributeUpdate) | **PUT** /attribute.update.json | attribute.update |
| [**attributeValueAdd()**](AttributeApi.md#attributeValueAdd) | **POST** /attribute.value.add.json | attribute.value.add |
| [**attributeValueDelete()**](AttributeApi.md#attributeValueDelete) | **DELETE** /attribute.value.delete.json | attribute.value.delete |
| [**attributeValueUpdate()**](AttributeApi.md#attributeValueUpdate) | **PUT** /attribute.value.update.json | attribute.value.update |


## `attributeAdd()`

```php
attributeAdd($type, $name, $code, $store_id, $lang_id, $visible, $required, $position, $attribute_group_id, $is_global, $is_searchable, $is_filterable, $is_comparable, $is_html_allowed_on_front, $is_filterable_in_search, $is_configurable, $is_visible_in_advanced_search, $is_used_for_promo_rules, $used_in_product_listing, $used_for_sort_by, $apply_to): \OpenAPI\Client\Model\AttributeAdd200Response
```

attribute.add

Add new attribute

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = text; // string | Defines attribute's type
$name = Specification; // string | Defines attributes's name
$code = code; // string | Entity code
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$visible = true; // bool | Set visibility status
$required = true; // bool | Defines if the option is required
$position = 5; // int | Attribute`s position
$attribute_group_id = 202; // string | Filter by attribute_group_id
$is_global = Global; // string | Attribute saving scope
$is_searchable = false; // bool | Use attribute in Quick Search
$is_filterable = No; // string | Use In Layered Navigation
$is_comparable = true; // bool | Comparable on Front-end
$is_html_allowed_on_front = true; // bool | Allow HTML Tags on Frontend
$is_filterable_in_search = true; // bool | Use In Search Results Layered Navigation
$is_configurable = true; // bool | Use To Create Configurable Product
$is_visible_in_advanced_search = true; // bool | Use in Advanced Search
$is_used_for_promo_rules = true; // bool | Use for Promo Rule Conditions
$used_in_product_listing = true; // bool | Used in Product Listing
$used_for_sort_by = true; // bool | Used for Sorting in Product Listing
$apply_to = Global; // string | Types of products which can have this attribute

try {
    $result = $apiInstance->attributeAdd($type, $name, $code, $store_id, $lang_id, $visible, $required, $position, $attribute_group_id, $is_global, $is_searchable, $is_filterable, $is_comparable, $is_html_allowed_on_front, $is_filterable_in_search, $is_configurable, $is_visible_in_advanced_search, $is_used_for_promo_rules, $used_in_product_listing, $used_for_sort_by, $apply_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Defines attribute&#39;s type | |
| **name** | **string**| Defines attributes&#39;s name | |
| **code** | **string**| Entity code | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **visible** | **bool**| Set visibility status | [optional] [default to false] |
| **required** | **bool**| Defines if the option is required | [optional] [default to false] |
| **position** | **int**| Attribute&#x60;s position | [optional] [default to 0] |
| **attribute_group_id** | **string**| Filter by attribute_group_id | [optional] |
| **is_global** | **string**| Attribute saving scope | [optional] [default to &#39;Store&#39;] |
| **is_searchable** | **bool**| Use attribute in Quick Search | [optional] [default to false] |
| **is_filterable** | **string**| Use In Layered Navigation | [optional] [default to &#39;No&#39;] |
| **is_comparable** | **bool**| Comparable on Front-end | [optional] [default to false] |
| **is_html_allowed_on_front** | **bool**| Allow HTML Tags on Frontend | [optional] [default to false] |
| **is_filterable_in_search** | **bool**| Use In Search Results Layered Navigation | [optional] [default to false] |
| **is_configurable** | **bool**| Use To Create Configurable Product | [optional] [default to false] |
| **is_visible_in_advanced_search** | **bool**| Use in Advanced Search | [optional] [default to false] |
| **is_used_for_promo_rules** | **bool**| Use for Promo Rule Conditions | [optional] [default to false] |
| **used_in_product_listing** | **bool**| Used in Product Listing | [optional] [default to false] |
| **used_for_sort_by** | **bool**| Used for Sorting in Product Listing | [optional] [default to false] |
| **apply_to** | **string**| Types of products which can have this attribute | [optional] [default to &#39;all_types&#39;] |

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

## `attributeAssignGroup()`

```php
attributeAssignGroup($id, $group_id, $attribute_set_id): \OpenAPI\Client\Model\AttributeAssignGroup200Response
```

attribute.assign.group

Assign attribute to the group

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$group_id = 3; // string | Attribute group_id
$attribute_set_id = 4; // string | Attribute set id

try {
    $result = $apiInstance->attributeAssignGroup($id, $group_id, $attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeAssignGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **group_id** | **string**| Attribute group_id | |
| **attribute_set_id** | **string**| Attribute set id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeAssignGroup200Response**](../Model/AttributeAssignGroup200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeAssignSet()`

```php
attributeAssignSet($id, $attribute_set_id, $group_id): \OpenAPI\Client\Model\AttributeAssignGroup200Response
```

attribute.assign.set

Assign attribute to the attribute set

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$attribute_set_id = 4; // string | Attribute set id
$group_id = 3; // string | Attribute group_id

try {
    $result = $apiInstance->attributeAssignSet($id, $attribute_set_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeAssignSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **attribute_set_id** | **string**| Attribute set id | |
| **group_id** | **string**| Attribute group_id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeAssignGroup200Response**](../Model/AttributeAssignGroup200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeAttributesetList()`

```php
attributeAttributesetList($start, $count, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseAttributeAttributesetList
```

attribute.attributeset.list

Get attribute_set list

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->attributeAttributesetList($start, $count, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeAttributesetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseAttributeAttributesetList**](../Model/ModelResponseAttributeAttributesetList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeCount()`

```php
attributeCount($type, $attribute_set_id, $store_id, $lang_id, $visible, $required, $system): \OpenAPI\Client\Model\AttributeCount200Response
```

attribute.count

Get attributes count

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = text; // string | Defines attribute's type
$attribute_set_id = 4; // string | Filter items by attribute set id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$visible = true; // bool | Filter items by visibility status
$required = true; // bool | Defines if the option is required
$system = false; // bool | True if attribute is system

try {
    $result = $apiInstance->attributeCount($type, $attribute_set_id, $store_id, $lang_id, $visible, $required, $system);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Defines attribute&#39;s type | [optional] |
| **attribute_set_id** | **string**| Filter items by attribute set id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **visible** | **bool**| Filter items by visibility status | [optional] |
| **required** | **bool**| Defines if the option is required | [optional] |
| **system** | **bool**| True if attribute is system | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeCount200Response**](../Model/AttributeCount200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeDelete()`

```php
attributeDelete($id, $store_id): \OpenAPI\Client\Model\AttributeDelete200Response
```

attribute.delete

Delete attribute from store

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->attributeDelete($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeDelete: ', $e->getMessage(), PHP_EOL;
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

## `attributeGroupList()`

```php
attributeGroupList($start, $count, $attribute_set_id, $lang_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseAttributeGroupList
```

attribute.group.list

Get attribute group list

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$attribute_set_id = 4; // string | Attribute set id
$lang_id = 3; // string | Language id
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->attributeGroupList($start, $count, $attribute_set_id, $lang_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeGroupList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **attribute_set_id** | **string**| Attribute set id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseAttributeGroupList**](../Model/ModelResponseAttributeGroupList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeInfo()`

```php
attributeInfo($id, $attribute_set_id, $store_id, $lang_id, $response_fields, $params, $exclude): \OpenAPI\Client\Model\AttributeInfo200Response
```

attribute.info

Get information about a specific global attribute by its ID.

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$attribute_set_id = 4; // string | Attribute set id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = force_all; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->attributeInfo($id, $attribute_set_id, $store_id, $lang_id, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **attribute_set_id** | **string**| Attribute set id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeInfo200Response**](../Model/AttributeInfo200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeList()`

```php
attributeList($start, $count, $attribute_ids, $attribute_set_id, $store_id, $lang_id, $type, $visible, $required, $system, $response_fields, $params, $exclude): \OpenAPI\Client\Model\ModelResponseAttributeList
```

attribute.list

Get a list of global attributes.

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start = 0; // int | This parameter sets the number from which you want to get entities
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$attribute_ids = 1,2,3; // string | Filter attributes by ids
$attribute_set_id = 4; // string | Filter items by attribute set id
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Retrieves attributes on specified language id
$type = text; // string | Defines attribute's type
$visible = true; // bool | Filter items by visibility status
$required = true; // bool | Defines if the option is required
$system = false; // bool | True if attribute is system
$response_fields = {return_code,return_message,pagination,result}; // string | Set this parameter in order to choose which entity fields you want to retrieve
$params = id,name; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = id,name; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all

try {
    $result = $apiInstance->attributeList($start, $count, $attribute_ids, $attribute_set_id, $store_id, $lang_id, $type, $visible, $required, $system, $response_fields, $params, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start** | **int**| This parameter sets the number from which you want to get entities | [optional] [default to 0] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **attribute_ids** | **string**| Filter attributes by ids | [optional] |
| **attribute_set_id** | **string**| Filter items by attribute set id | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Retrieves attributes on specified language id | [optional] |
| **type** | **string**| Defines attribute&#39;s type | [optional] |
| **visible** | **bool**| Filter items by visibility status | [optional] |
| **required** | **bool**| Defines if the option is required | [optional] |
| **system** | **bool**| True if attribute is system | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;id,name,code,type&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseAttributeList**](../Model/ModelResponseAttributeList.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeTypeList()`

```php
attributeTypeList(): \OpenAPI\Client\Model\AttributeTypeList200Response
```

attribute.type.list

Get list of supported attributes types

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->attributeTypeList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeTypeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AttributeTypeList200Response**](../Model/AttributeTypeList200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeUnassignGroup()`

```php
attributeUnassignGroup($id, $group_id): \OpenAPI\Client\Model\AttributeUnassignGroup200Response
```

attribute.unassign.group

Unassign attribute from group

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$group_id = 3; // string | Customer group_id

try {
    $result = $apiInstance->attributeUnassignGroup($id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeUnassignGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **group_id** | **string**| Customer group_id | |

### Return type

[**\OpenAPI\Client\Model\AttributeUnassignGroup200Response**](../Model/AttributeUnassignGroup200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeUnassignSet()`

```php
attributeUnassignSet($id, $attribute_set_id): \OpenAPI\Client\Model\AttributeUnassignGroup200Response
```

attribute.unassign.set

Unassign attribute from attribute set

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$attribute_set_id = 4; // string | Attribute set id

try {
    $result = $apiInstance->attributeUnassignSet($id, $attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeUnassignSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **attribute_set_id** | **string**| Attribute set id | |

### Return type

[**\OpenAPI\Client\Model\AttributeUnassignGroup200Response**](../Model/AttributeUnassignGroup200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeUpdate()`

```php
attributeUpdate($id, $name, $store_id, $lang_id): \OpenAPI\Client\Model\AttributeUpdate200Response
```

attribute.update

Update attribute data

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$name = Test name; // string | Defines new attributes's name
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id

try {
    $result = $apiInstance->attributeUpdate($id, $name, $store_id, $lang_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **name** | **string**| Defines new attributes&#39;s name | |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeUpdate200Response**](../Model/AttributeUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attributeValueAdd()`

```php
attributeValueAdd($attribute_id, $name, $code, $description, $store_id, $lang_id): \OpenAPI\Client\Model\AttributeAdd200Response
```

attribute.value.add

Add new value to attribute.

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 156; // string | Attribute Id
$name = Test name; // string | Defines attribute value's name
$code = code; // string | Entity code
$description = Test value; // string | Defines attribute value's description
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id

try {
    $result = $apiInstance->attributeValueAdd($attribute_id, $name, $code, $description, $store_id, $lang_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeValueAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_id** | **string**| Attribute Id | |
| **name** | **string**| Defines attribute value&#39;s name | |
| **code** | **string**| Entity code | [optional] |
| **description** | **string**| Defines attribute value&#39;s description | [optional] |
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

## `attributeValueDelete()`

```php
attributeValueDelete($id, $attribute_id, $store_id): \OpenAPI\Client\Model\AttributeValueDelete200Response
```

attribute.value.delete

Delete attribute value.

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Entity id
$attribute_id = 156; // string | Attribute Id
$store_id = 1; // string | Store Id

try {
    $result = $apiInstance->attributeValueDelete($id, $attribute_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeValueDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Entity id | |
| **attribute_id** | **string**| Attribute Id | |
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

## `attributeValueUpdate()`

```php
attributeValueUpdate($id, $attribute_id, $name, $description, $code, $store_id, $lang_id): \OpenAPI\Client\Model\AttributeUpdate200Response
```

attribute.value.update

Update attribute value.

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


$apiInstance = new OpenAPI\Client\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 10; // string | Defines attribute value's id
$attribute_id = 156; // string | Attribute Id
$name = Test name; // string | Defines attribute value's name
$description = Test value; // string | Defines new attribute value's description
$code = code; // string | Entity code
$store_id = 1; // string | Store Id
$lang_id = 3; // string | Language id

try {
    $result = $apiInstance->attributeValueUpdate($id, $attribute_id, $name, $description, $code, $store_id, $lang_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->attributeValueUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Defines attribute value&#39;s id | |
| **attribute_id** | **string**| Attribute Id | |
| **name** | **string**| Defines attribute value&#39;s name | [optional] |
| **description** | **string**| Defines new attribute value&#39;s description | [optional] |
| **code** | **string**| Entity code | [optional] |
| **store_id** | **string**| Store Id | [optional] |
| **lang_id** | **string**| Language id | [optional] |

### Return type

[**\OpenAPI\Client\Model\AttributeUpdate200Response**](../Model/AttributeUpdate200Response.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
