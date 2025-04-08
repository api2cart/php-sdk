# OpenAPI\Client\MarketplaceApi

All URIs are relative to https://api.api2cart.com/v1.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceProductFind()**](MarketplaceApi.md#marketplaceProductFind) | **GET** /marketplace.product.find.json | marketplace.product.find |


## `marketplaceProductFind()`

```php
marketplaceProductFind($store_id, $count, $page_cursor, $categories_ids, $keyword, $asin, $ean, $gtin, $upc, $mpn, $isbn, $params, $exclude, $response_fields): \OpenAPI\Client\Model\ModelResponseMarketplaceProductFind
```

marketplace.product.find

Search product in global catalog.

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


$apiInstance = new OpenAPI\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = 1; // string | Store Id
$count = 20; // int | This parameter sets the entity amount that has to be retrieved. Max allowed count=250
$page_cursor = ; // string | Used to retrieve entities via cursor-based pagination (it can't be used with any other filtering parameter)
$categories_ids = 23,56; // string | Defines product add that is specified by comma-separated categories id
$keyword = T-shirt; // string | Defines search keyword
$asin = 97703178470; // string | Amazon Standard Identification Number.
$ean = 5901234123457; // string | European Article Number. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products.
$gtin = 12345678912345; // string | Global Trade Item Number. An GTIN is an identifier for trade items.
$upc = 9770317847001; // string | Universal Product Code. A UPC (UPC-A) is a commonly used identifer for many different products.
$mpn = 9770317847001; // string | Manufacturer Part Number. A MPN is an identifier of a particular part design or material used.
$isbn = 9783161484100; // string | International Standard Book Number. An ISBN is a unique identifier for books.
$params = id,model,price,images; // string | Set this parameter in order to choose which entity fields you want to retrieve
$exclude = false; // string | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter `params` equal force_all
$response_fields = {result}; // string | Set this parameter in order to choose which entity fields you want to retrieve

try {
    $result = $apiInstance->marketplaceProductFind($store_id, $count, $page_cursor, $categories_ids, $keyword, $asin, $ean, $gtin, $upc, $mpn, $isbn, $params, $exclude, $response_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->marketplaceProductFind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_id** | **string**| Store Id | [optional] |
| **count** | **int**| This parameter sets the entity amount that has to be retrieved. Max allowed count&#x3D;250 | [optional] [default to 10] |
| **page_cursor** | **string**| Used to retrieve entities via cursor-based pagination (it can&#39;t be used with any other filtering parameter) | [optional] |
| **categories_ids** | **string**| Defines product add that is specified by comma-separated categories id | [optional] |
| **keyword** | **string**| Defines search keyword | [optional] |
| **asin** | **string**| Amazon Standard Identification Number. | [optional] |
| **ean** | **string**| European Article Number. An EAN is a unique 8 or 13-digit identifier that many industries (such as book publishers) use to identify products. | [optional] |
| **gtin** | **string**| Global Trade Item Number. An GTIN is an identifier for trade items. | [optional] |
| **upc** | **string**| Universal Product Code. A UPC (UPC-A) is a commonly used identifer for many different products. | [optional] |
| **mpn** | **string**| Manufacturer Part Number. A MPN is an identifier of a particular part design or material used. | [optional] |
| **isbn** | **string**| International Standard Book Number. An ISBN is a unique identifier for books. | [optional] |
| **params** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to &#39;force_all&#39;] |
| **exclude** | **string**| Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional] |
| **response_fields** | **string**| Set this parameter in order to choose which entity fields you want to retrieve | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModelResponseMarketplaceProductFind**](../Model/ModelResponseMarketplaceProductFind.md)

### Authorization

[StoreKeyAuth](../../README.md#StoreKeyAuth), [ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
