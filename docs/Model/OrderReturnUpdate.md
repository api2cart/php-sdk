# # OrderReturnUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_id** | **string** | Return ID |
**order_id** | **string** | Defines the order id | [optional]
**store_id** | **string** | Store Id | [optional]
**item_restock** | **bool** | Boolean, whether or not to add the line items back to the store inventory. | [optional] [default to false]
**return_status_id** | **string** | Defines return request status | [optional]
**staff_note** | **string** | Specifies staff note | [optional]
**comment** | **string** | Specifies return comment | [optional]
**send_notifications** | **bool** | Send notifications to customer after order was created | [optional] [default to false]
**reject_reason** | **string** | Defines return reject reason | [optional]
**return_action** | **string** | Defines return request action | [optional]
**return_reason** | **string** | Defines return request reason | [optional]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]
**order_products** | [**\OpenAPI\Client\Model\OrderReturnUpdateOrderProductsInner[]**](OrderReturnUpdateOrderProductsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
