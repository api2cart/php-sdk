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
**order_products** | [**\OpenAPI\Client\Model\OrderReturnUpdateOrderProductsInner[]**](OrderReturnUpdateOrderProductsInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
