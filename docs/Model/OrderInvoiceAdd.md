# # OrderInvoiceAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Defines the order the document is uploaded for | [optional]
**shipment_id** | **string** | Defines the shipment of the order the document is for. Required when the order was shipped in several shipments | [optional]
**store_id** | **string** | Defines the store of the order. The store of the order is taken when not specified | [optional]
**number** | **string** | Defines the number of the invoice or credit note as printed on the document |
**document_type** | **string** | Defines whether the document is an invoice or a credit note for a refund or return | [optional] [default to 'invoice']
**transaction_id** | **string** | Defines the refund or return transaction the credit note is issued for. Required when document_type is credit_note | [optional]
**total_price** | **float** | Defines the total amount of the document, VAT included. When specified, it must match the total the store calculated for the order or shipment. For sellers with VAT Calculation Service Option 2 Amazon requires both total_price and tax_price, otherwise it rejects the feed after processing | [optional]
**tax_price** | **float** | Defines the total VAT amount of the document. When specified, it must match the VAT the store calculated for the order or shipment. For sellers with VAT Calculation Service Option 2 Amazon requires both total_price and tax_price, otherwise it rejects the feed after processing | [optional]
**url** | **string** | Defines the public URL of the PDF document. Required if content is not specified | [optional]
**content** | **string** | Defines the PDF document encoded in base64. Required if url is not specified | [optional]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
