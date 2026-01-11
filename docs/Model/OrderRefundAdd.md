# # OrderRefundAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Defines the order for which the refund will be created. | [optional]
**items** | [**\OpenAPI\Client\Model\OrderRefundAddItemsInner[]**](OrderRefundAddItemsInner.md) | Defines items in the order that will be refunded | [optional]
**total_price** | **float** | Defines order refund amount. | [optional]
**shipping_price** | **float** | Defines refund shipping amount. | [optional]
**fee_price** | **float** | Specifies refund&#39;s fee price | [optional]
**message** | **string** | Refund reason, or some else message which assigned to refund. | [optional]
**item_restock** | **bool** | Boolean, whether or not to add the line items back to the store inventory. | [optional] [default to false]
**send_notifications** | **bool** | Send notifications to customer after refund was created | [optional] [default to false]
**date** | **string** | Specifies an order creation date in format Y-m-d H:i:s | [optional]
**is_online** | **bool** | Indicates whether refund type is online | [optional] [default to false]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
