# # CartCouponAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | Store Id | [optional]
**code** | **string** | Coupon code |
**name** | **string** | Coupon name | [optional]
**codes** | **string[]** | Entity codes | [optional]
**action_type** | **string** | Coupon discount type |
**action_apply_to** | **string** | Defines where discount should be applied |
**action_scope** | **string** | Specify how discount should be applied. If scope&#x3D;matching_items, then discount will be applied to each of the items that match action conditions. Scope order means that discount will be applied once. |
**action_amount** | **float** | Defines the discount amount value. |
**date_start** | **string** | Date start | [optional] [default to 'now']
**date_end** | **string** | Defines when discount code will be expired. | [optional]
**usage_limit** | **int** | Usage limit for coupon. | [optional]
**usage_limit_per_customer** | **int** | Usage limit per customer. | [optional]
**action_condition_entity** | **string** | Defines entity for action condition. | [optional]
**action_condition_key** | **string** | Defines entity attribute code for action condition. | [optional]
**action_condition_operator** | **string** | Defines condition operator. | [optional]
**action_condition_value** | **string** | Defines condition attribute value/s. Can be comma separated string. | [optional]
**include_tax** | **bool** | Indicates whether to apply a discount for taxes. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
