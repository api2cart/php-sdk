# # OrderAddOrderItemInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_item_id** | **string** | Defines orders specified by order item id |
**order_item_name** | **string** | Defines orders specified by order item name |
**order_item_model** | **string** | Defines orders specified by order item model | [optional]
**order_item_price** | **float** | Defines orders specified by order item price |
**order_item_quantity** | **int** | Defines orders specified by order item quantity |
**order_item_weight** | **float** | Defines orders specified by order item weight | [optional]
**order_item_variant_id** | **string** | Ordered product variant. Where x is order item ID | [optional]
**order_item_tax** | **float** | Percentage of tax for product order | [optional] [default to 0]
**order_item_parent** | **int** | Index of the parent grouped/bundle product | [optional]
**order_item_parent_option_name** | **string** | Option name of the parent grouped/bundle product | [optional]
**order_item_allow_refund_items_separately** | **bool** | Indicates whether subitems of the grouped/bundle product can be refunded separately | [optional]
**order_item_allow_ship_items_separately** | **bool** | Indicates whether subitems of the grouped/bundle product can be shipped separately | [optional]
**order_item_price_includes_tax** | **bool** | Defines if item price includes tax | [optional] [default to false]
**order_item_option** | [**\OpenAPI\Client\Model\OrderAddOrderItemInnerOrderItemOptionInner[]**](OrderAddOrderItemInnerOrderItemOptionInner.md) |  | [optional]
**order_item_property** | [**\OpenAPI\Client\Model\OrderAddOrderItemInnerOrderItemPropertyInner[]**](OrderAddOrderItemInnerOrderItemPropertyInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
