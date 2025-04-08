# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**basket_id** | **string** |  | [optional]
**channel_id** | **string** |  | [optional]
**customer** | [**\OpenAPI\Client\Model\BaseCustomer**](BaseCustomer.md) |  | [optional]
**create_at** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**shipping_address** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**billing_address** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**payment_method** | [**\OpenAPI\Client\Model\OrderPaymentMethod**](OrderPaymentMethod.md) |  | [optional]
**shipping_method** | [**\OpenAPI\Client\Model\OrderShippingMethod**](OrderShippingMethod.md) |  | [optional]
**shipping_methods** | [**\OpenAPI\Client\Model\OrderShippingMethod[]**](OrderShippingMethod.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\OrderStatus**](OrderStatus.md) |  | [optional]
**totals** | [**\OpenAPI\Client\Model\OrderTotals**](OrderTotals.md) |  | [optional]
**total** | [**\OpenAPI\Client\Model\OrderTotal**](OrderTotal.md) |  | [optional]
**discounts** | [**\OpenAPI\Client\Model\OrderTotalsNewDiscount[]**](OrderTotalsNewDiscount.md) |  | [optional]
**order_products** | [**\OpenAPI\Client\Model\OrderItem[]**](OrderItem.md) |  | [optional]
**bundles** | [**\OpenAPI\Client\Model\OrderItem[]**](OrderItem.md) |  | [optional]
**modified_at** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**finished_time** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**comment** | **string** |  | [optional]
**store_id** | **string** |  | [optional]
**warehouses_ids** | **string[]** |  | [optional]
**refunds** | [**\OpenAPI\Client\Model\OrderRefund[]**](OrderRefund.md) |  | [optional]
**gift_message** | **string** |  | [optional]
**order_details_url** | **string** |  | [optional]
**additional_fields** | **object** |  | [optional]
**custom_fields** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
