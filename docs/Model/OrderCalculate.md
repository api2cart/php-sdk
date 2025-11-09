# # OrderCalculate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_email** | **string** | Defines the customer specified by email for whom the order needs to be calculated |
**currency_id** | **string** | Currency Id | [optional]
**store_id** | **string** | Store Id | [optional]
**coupons** | **string[]** | Coupons that will be applied to order. If the order isn&#39;t eligible for any given discount code or there is no discount with such a code it will be skipped during calculation | [optional]
**rounding_precision** | **int** | &lt;p&gt;Specifies the rounding precision for fractional numeric values (such as prices, taxes, and weights).&lt;/p&gt; &lt;p&gt;Supported values range from &lt;b&gt;1&lt;/b&gt; to &lt;b&gt;6&lt;/b&gt;.&lt;/p&gt; &lt;p&gt;The default rounding precision may vary depending on the platform. You can retrieve the default value using the &lt;strong&gt;cart.info&lt;/strong&gt; method in the &lt;code&gt;default_rounding_precision&lt;/code&gt; field. &lt;/p&gt;&lt;p&gt;Values are rounded to the nearest number at the specified precision. Fractions of .5 or higher are rounded up, while fractions lower than .5 are rounded down.&lt;/p&gt; | [optional]
**shipp_first_name** | **string** | Specifies shipping first name |
**shipp_last_name** | **string** | Specifies shipping last name |
**shipp_address_1** | **string** | Specifies first shipping address |
**shipp_address_2** | **string** | Specifies second address line of a shipping street address | [optional]
**shipp_city** | **string** | Specifies shipping city |
**shipp_postcode** | **string** | Specifies shipping postcode |
**shipp_state** | **string** | Specifies shipping state code | [optional]
**shipp_country** | **string** | Specifies shipping country code |
**shipp_company** | **string** | Specifies shipping company | [optional]
**shipp_phone** | **string** | Specifies shipping phone | [optional]
**bill_first_name** | **string** | Specifies billing first name | [optional]
**bill_last_name** | **string** | Specifies billing last name | [optional]
**bill_address_1** | **string** | Specifies first billing address | [optional]
**bill_address_2** | **string** | Specifies second billing address | [optional]
**bill_city** | **string** | Specifies billing city | [optional]
**bill_postcode** | **string** | Specifies billing postcode | [optional]
**bill_state** | **string** | Specifies billing state code | [optional]
**bill_country** | **string** | Specifies billing country code | [optional]
**bill_company** | **string** | Specifies billing company | [optional]
**bill_phone** | **string** | Specifies billing phone | [optional]
**response_fields** | **string** | Set this parameter in order to choose which entity fields you want to retrieve | [optional]
**order_item** | [**\OpenAPI\Client\Model\OrderCalculateOrderItemInner[]**](OrderCalculateOrderItemInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
