# # ProductImageAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Defines image&#39;s types that are specified by comma-separated list |
**image_name** | **string** | Defines image&#39;s name |
**product_id** | **string** | Defines product id where the image should be added | [optional]
**product_variant_id** | **string** | Defines product&#39;s variants specified by variant id | [optional]
**variant_ids** | **string** | Defines product&#39;s variants ids | [optional]
**option_value_ids** | **string** | Defines product&#39;s option values ids | [optional]
**store_id** | **string** | Store Id | [optional]
**lang_id** | **string** | Add product image on specified language id | [optional]
**url** | **string** | Defines URL of the image that has to be added | [optional]
**content** | **string** | Content(body) encoded in base64 of image file | [optional]
**label** | **string** | Defines alternative text that has to be attached to the picture | [optional]
**mime** | **string** | Mime type of image http://en.wikipedia.org/wiki/Internet_media_type. | [optional]
**position** | **int** | Defines image’s position in the list | [optional] [default to 0]
**use_latest_api_version** | **bool** | Use the latest platform API version | [optional] [default to false]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
