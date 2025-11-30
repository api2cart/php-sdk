# # OrderAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Defines order&#39;s id | [optional]
**order_id** | **string** | Defines the order id if it is supported by the cart | [optional]
**store_id** | **string** | Defines store id where the order should be assigned | [optional]
**channel_id** | **string** | Channel ID | [optional]
**order_status** | **string** | Defines order status. |
**fulfillment_status** | **string** | Create order with fulfillment status | [optional]
**financial_status** | **string** | Create order with financial status | [optional]
**customer_email** | **string** | Defines the customer specified by email for whom order has to be created |
**customer_first_name** | **string** | Specifies customer&#39;s first name | [optional]
**customer_last_name** | **string** | Specifies customer’s last name | [optional]
**customer_phone** | **string** | Specifies customer’s phone | [optional]
**customer_country** | **string** | Specifies customer&#39;s address ISO code or name of country | [optional]
**customer_birthday** | **string** | Specifies customer’s birthday | [optional]
**customer_fax** | **string** | Specifies customer’s fax | [optional]
**is_guest** | **bool** | Indicates whether the customer is a guest customer | [optional] [default to false]
**order_payment_method** | **string** | Defines order payment method.&lt;br/&gt;Setting order_payment_method on Shopify will also change financial_status field value to &#39;paid&#39; | [optional]
**transaction_id** | **string** | Payment transaction id | [optional]
**currency** | **string** | Currency code of order | [optional]
**date** | **string** | Specifies an order creation date in format Y-m-d H:i:s | [optional]
**date_modified** | **string** | Specifies order&#39;s  modification date | [optional]
**date_finished** | **string** | Specifies order&#39;s  finished date | [optional]
**bill_first_name** | **string** | Specifies billing first name |
**bill_last_name** | **string** | Specifies billing last name |
**bill_address_1** | **string** | Specifies first billing address |
**bill_address_2** | **string** | Specifies second billing address | [optional]
**bill_city** | **string** | Specifies billing city |
**bill_postcode** | **string** | Specifies billing postcode |
**bill_state** | **string** | Specifies billing state code |
**bill_country** | **string** | Specifies billing country code |
**bill_company** | **string** | Specifies billing company | [optional]
**bill_phone** | **string** | Specifies billing phone | [optional]
**bill_fax** | **string** | Specifies billing fax | [optional]
**shipp_first_name** | **string** | Specifies shipping first name | [optional]
**shipp_last_name** | **string** | Specifies shipping last name | [optional]
**shipp_address_1** | **string** | Specifies first shipping address | [optional]
**shipp_address_2** | **string** | Specifies second address line of a shipping street address | [optional]
**shipp_city** | **string** | Specifies shipping city | [optional]
**shipp_postcode** | **string** | Specifies shipping postcode | [optional]
**shipp_state** | **string** | Specifies shipping state code | [optional]
**shipp_country** | **string** | Specifies shipping country code | [optional]
**shipp_company** | **string** | Specifies shipping company | [optional]
**shipp_phone** | **string** | Specifies shipping phone | [optional]
**shipp_fax** | **string** | Specifies shipping fax | [optional]
**subtotal_price** | **float** | Total price of all ordered products multiplied by their number, excluding tax, shipping price and discounts | [optional]
**tax_price** | **float** | The value of tax cost for order | [optional] [default to 0]
**total_price** | **float** | Defines order&#39;s total price | [optional]
**total_paid** | **float** | Defines total paid amount for the order | [optional]
**total_weight** | **int** | Defines the sum of all line item weights in grams for the order | [optional]
**prices_inc_tax** | **bool** | Indicates whether prices and subtotal includes tax. | [optional] [default to false]
**shipping_price** | **float** | Specifies order&#39;s shipping price | [optional] [default to 0]
**shipping_tax** | **float** | Specifies order&#39;s shipping price tax | [optional]
**discount** | **float** | Specifies order&#39;s discount | [optional]
**coupon_discount** | **float** | Specifies order&#39;s coupon discount | [optional]
**gift_certificate_discount** | **float** | Discounts for order with gift certificates | [optional]
**order_shipping_method** | **string** | Defines order shipping method | [optional]
**carrier_id** | **string** | Defines tracking carrier id | [optional]
**warehouse_id** | **string** | This parameter is used for selecting a warehouse where you need to set/modify a product quantity. | [optional]
**coupons** | **string[]** | Coupons that will be applied to order | [optional]
**tags** | **string** | Order tags | [optional]
**comment** | **string** | Specifies order comment | [optional]
**admin_comment** | **string** | Specifies admin&#39;s order comment | [optional]
**admin_private_comment** | **string** | Specifies private admin&#39;s order comment | [optional]
**send_notifications** | **bool** | Send notifications to customer after order was created | [optional] [default to false]
**send_admin_notifications** | **bool** | Notify admin when new order was created. | [optional] [default to false]
**external_source** | **string** | Identifying the system used to generate the order | [optional]
**inventory_behaviour** | **string** | The behaviour to use when updating inventory.&lt;hr&gt;&lt;div style&#x3D;\&quot;font-style:normal\&quot;&gt;Values description:&lt;div style&#x3D;\&quot;margin-left: 2%; padding-top: 2%\&quot;&gt;&lt;div style&#x3D;\&quot;font-size:85%\&quot;&gt;&lt;b&gt;bypass&lt;/b&gt; &#x3D; Do not claim inventory &lt;/br&gt;&lt;/br&gt;&lt;b&gt;decrement_ignoring_policy&lt;/b&gt; &#x3D; Ignore the product&#39;s &lt;/br&gt; inventory policy and claim amounts&lt;/br&gt;&lt;/br&gt;&lt;b&gt;decrement_obeying_policy&lt;/b&gt; &#x3D;  Obey the product&#39;s &lt;/br&gt; inventory policy.&lt;/br&gt;&lt;/br&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt; | [optional] [default to 'bypass']
**create_invoice** | **bool** | Defines whether the invoice is created automatically along with the order | [optional] [default to false]
**note_attributes** | [**\OpenAPI\Client\Model\OrderAddNoteAttributesInner[]**](OrderAddNoteAttributesInner.md) | Defines note attributes | [optional]
**clear_cache** | **bool** | Is cache clear required | [optional] [default to true]
**origin** | **string** | The source of the order | [optional]
**fee_price** | **float** | Specifies refund&#39;s fee price | [optional]
**order_item** | [**\OpenAPI\Client\Model\OrderAddOrderItemInner[]**](OrderAddOrderItemInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
