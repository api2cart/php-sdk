# # OrderShipmentTrackingAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Defines the order id | [optional]
**shipment_id** | **string** | Shipment id indicates the number of delivery |
**carrier_id** | **string** | Defines tracking carrier id | [optional]
**store_id** | **string** | Store Id | [optional]
**tracking_provider** | **string** | Defines name of the company which provides shipment tracking | [optional]
**tracking_number** | **string** | Defines tracking number |
**tracking_link** | **string** | Defines custom tracking link | [optional]
**send_notifications** | **bool** | Send notifications to customer after tracking was created | [optional] [default to false]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
