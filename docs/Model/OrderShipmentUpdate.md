# # OrderShipmentUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | Shipment id indicates the number of delivery |
**order_id** | **string** | Defines the order that will be updated | [optional]
**store_id** | **string** | Store Id | [optional]
**shipment_provider** | **string** | Defines company name that provide tracking of shipment | [optional]
**tracking_numbers** | [**\OpenAPI\Client\Model\OrderShipmentAddTrackingNumbersInner[]**](OrderShipmentAddTrackingNumbersInner.md) | Defines shipment&#39;s tracking numbers that have to be added&lt;/br&gt; How set tracking numbers to appropriate carrier:&lt;ul&gt;&lt;li&gt;tracking_numbers[]&#x3D;a2c.demo1,a2c.demo2 - set default carrier&lt;/li&gt;&lt;li&gt;tracking_numbers[&lt;b&gt;carrier_id&lt;/b&gt;]&#x3D;a2c.demo - set appropriate carrier&lt;/li&gt;&lt;/ul&gt;To get the list of carriers IDs that are available in your store, use the &lt;a href &#x3D; \&quot;https://api2cart.com/docs/#/cart/CartInfo\&quot;&gt;cart.info&lt;/a &gt; method | [optional]
**tracking_link** | **string** | Defines custom tracking link | [optional]
**is_shipped** | **bool** | Defines shipment&#39;s status | [optional] [default to true]
**delivered_at** | **string** | Defines the date of delivery | [optional]
**replace** | **bool** | Allows rewrite tracking numbers | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
