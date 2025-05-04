# # OrderShipmentAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Defines the order for which the shipment will be created | [optional]
**warehouse_id** | **string** | This parameter is used for selecting a warehouse where you need to set/modify a product quantity. | [optional]
**store_id** | **string** | Store Id | [optional]
**shipment_provider** | **string** | Defines company name that provide tracking of shipment | [optional]
**shipping_method** | **string** | Define shipping method | [optional]
**items** | [**\OpenAPI\Client\Model\OrderShipmentAddItemsInner[]**](OrderShipmentAddItemsInner.md) | Defines items in the order that will be shipped | [optional]
**tracking_numbers** | [**\OpenAPI\Client\Model\OrderShipmentAddTrackingNumbersInner[]**](OrderShipmentAddTrackingNumbersInner.md) | Defines shipment&#39;s tracking numbers that have to be added&lt;/br&gt; How set tracking numbers to appropriate carrier:&lt;ul&gt;&lt;li&gt;tracking_numbers[]&#x3D;a2c.demo1,a2c.demo2 - set default carrier&lt;/li&gt;&lt;li&gt;tracking_numbers[&lt;b&gt;carrier_id&lt;/b&gt;]&#x3D;a2c.demo - set appropriate carrier&lt;/li&gt;&lt;/ul&gt;To get the list of carriers IDs that are available in your store, use the &lt;a href &#x3D; \&quot;https://api2cart.com/docs/#/cart/CartInfo\&quot;&gt;cart.info&lt;/a &gt; method | [optional]
**tracking_link** | **string** | Defines custom tracking link | [optional]
**is_shipped** | **bool** | Defines shipment&#39;s status | [optional] [default to true]
**send_notifications** | **bool** | Send notifications to customer after shipment was created | [optional] [default to false]
**adjust_stock** | **bool** | This parameter is used for adjust stock. | [optional] [default to false]
**enable_cache** | **bool** | If the value is &#39;true&#39; and order exist in our cache, we will use order.info from cache to prepare shipment items. | [optional] [default to false]
**check_process_status** | **bool** | Disable or enable check process status. Please note that the response will be slower due to additional requests to the store. | [optional] [default to false]
**tracking_provider** | **string** | Defines name of the company which provides shipment tracking | [optional]
**use_latest_api_version** | **bool** | Use the latest platform API version | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
