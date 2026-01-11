# # OrderShipmentAddBatch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payload** | [**\OpenAPI\Client\Model\OrderShipmentAddBatchPayloadInner[]**](OrderShipmentAddBatchPayloadInner.md) | Contains an array of order shipment objects. The list of properties may vary depending on the specific platform. |
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
