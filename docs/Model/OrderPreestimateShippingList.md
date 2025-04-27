# # OrderPreestimateShippingList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **string** | This parameter is used for selecting a warehouse where you need to set/modify a product quantity. | [optional]
**customer_id** | **string** | Retrieves orders specified by customer id | [optional]
**customer_email** | **string** | Retrieves orders specified by customer email | [optional]
**store_id** | **string** | Store Id | [optional]
**shipp_address_1** | **string** | Specifies first shipping address | [optional]
**shipp_city** | **string** | Specifies shipping city | [optional]
**shipp_postcode** | **string** | Specifies shipping postcode | [optional]
**shipp_state** | **string** | Specifies shipping state code | [optional]
**shipp_country** | **string** | Specifies shipping country code |
**params** | **string** | Set this parameter in order to choose which entity fields you want to retrieve | [optional] [default to 'force_all']
**exclude** | **string** | Set this parameter in order to choose which entity fields you want to ignore. Works only if parameter &#x60;params&#x60; equal force_all | [optional]
**order_item** | [**\OpenAPI\Client\Model\OrderPreestimateShippingListOrderItemInner[]**](OrderPreestimateShippingListOrderItemInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
