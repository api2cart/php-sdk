# # ProductVariantUpdateBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nested_items_update_behaviour** | **string** | Determines how updates to nested items should be handled.&lt;hr&gt;&lt;div style&#x3D;\&quot;font-style:normal\&quot;&gt;  Values description:  &lt;div style&#x3D;\&quot;margin-left: 2%; padding-top: 2%\&quot;&gt;    &lt;div style&#x3D;\&quot;font-size:85%\&quot;&gt;      &lt;b&gt;  replace&lt;/b&gt;: This option indicates that the nested items should be completely replaced with the new data provided. &lt;/br&gt;      &lt;b&gt;  merge&lt;/b&gt;: With this option, updates to nested items are merged with the existing data. &lt;/br&gt;    &lt;/div&gt;  &lt;/div&gt;&lt;/div&gt; | [optional] [default to 'replace']
**clear_cache** | **bool** |  | [optional] [default to false]
**reindex** | **bool** |  | [optional] [default to false]
**payload** | [**\OpenAPI\Client\Model\ProductVariantUpdateBatchPayloadInner[]**](ProductVariantUpdateBatchPayloadInner.md) | Contains an array of product objects. The list of properties may vary depending on the specific platform. |
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
