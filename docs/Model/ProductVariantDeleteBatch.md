# # ProductVariantDeleteBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clear_cache** | **bool** |  | [optional] [default to false]
**reindex** | **bool** |  | [optional] [default to false]
**payload** | [**\OpenAPI\Client\Model\ProductVariantDeleteBatchPayloadInner[]**](ProductVariantDeleteBatchPayloadInner.md) | Contains an array of product variant deletion requests, each including the product ID and variant ID. The list of properties may vary depending on the specific platform. |
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
