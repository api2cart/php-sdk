# # Shipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**order_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**warehouse_id** | **string** |  | [optional]
**shipment_provider** | **string** |  | [optional]
**tracking_numbers** | [**\OpenAPI\Client\Model\ShipmentTrackingNumber[]**](ShipmentTrackingNumber.md) |  | [optional]
**created_at** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**modified_time** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\ShipmentItem[]**](ShipmentItem.md) |  | [optional]
**is_shipped** | **bool** |  | [optional]
**delivered_at** | [**\OpenAPI\Client\Model\A2CDateTime**](A2CDateTime.md) |  | [optional]
**additional_fields** | **object** |  | [optional]
**custom_fields** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
