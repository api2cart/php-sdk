# # OrderShipmentEventAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | Defines the shipment to which the tracking event will be added |
**order_id** | **string** | Defines the order to which the shipment belongs | [optional]
**status** | **string** | Defines the tracking event status (e.g. in_transit, delivered, out_for_delivery) |
**store_id** | **string** | Store Id | [optional]
**address_1** | **string** | Specifies the street address of the event location | [optional]
**city** | **string** | Specifies city | [optional]
**country** | **string** | Specifies ISO code or name of country | [optional]
**state** | **string** | Specifies ISO code or name of state | [optional]
**postcode** | **string** | Specifies postcode | [optional]
**message** | **string** | Defines a message associated with the tracking event. | [optional]
**latitude** | **float** | Latitude coordinate of the event location. | [optional]
**longitude** | **float** | Longitude coordinate of the event location. | [optional]
**created_at** | **string** | Defines the date of entity creation | [optional]
**estimated_delivery_at** | **string** | Estimated delivery date and time in ISO 8601 format. | [optional]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
