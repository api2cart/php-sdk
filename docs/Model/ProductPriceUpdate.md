# # ProductPriceUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | Defines the product where the price has to be updated | [optional]
**group_prices** | [**\OpenAPI\Client\Model\ProductPriceUpdateGroupPricesInner[]**](ProductPriceUpdateGroupPricesInner.md) | Defines product&#39;s group prices | [optional]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
