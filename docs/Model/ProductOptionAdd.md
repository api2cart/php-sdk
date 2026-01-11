# # ProductOptionAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Defines option&#39;s name |
**type** | **string** | Defines option&#39;s type that has to be added |
**product_id** | **string** | Defines product id where the option should be added | [optional]
**default_option_value** | **string** | Defines default option value that has to be added | [optional]
**option_values** | **string** | Defines option values that has to be added | [optional]
**description** | **string** | Defines option&#39;s description | [optional]
**avail** | **bool** | Defines whether the option is available | [optional] [default to true]
**sort_order** | **int** | Sort number in the list | [optional] [default to 0]
**required** | **bool** | Defines if the option is required | [optional] [default to false]
**values** | [**\OpenAPI\Client\Model\ProductOptionAddValuesInner[]**](ProductOptionAddValuesInner.md) | An array of option values.&lt;/b&gt; | [optional]
**clear_cache** | **bool** | Is cache clear required | [optional] [default to true]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
