# # ProductTaxAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | Defines products specified by product id | [optional]
**name** | **string** | Defines tax class name where tax has to be added |
**tax_rates** | [**\OpenAPI\Client\Model\ProductTaxAddTaxRatesInner[]**](ProductTaxAddTaxRatesInner.md) | Defines tax rates of specified tax classes |
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
