# # CustomerAdd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Defines customer&#39;s email |
**first_name** | **string** | Defines customer&#39;s first name |
**last_name** | **string** | Defines customer&#39;s last name |
**password** | **string** | Defines customer&#39;s unique password | [optional]
**group** | **string** | Defines the group where the customer | [optional]
**group_ids** | **string** | Groups that will be assigned to a customer | [optional]
**created_time** | **string** | Entity&#39;s date creation | [optional]
**modified_time** | **string** | Entity&#39;s date modification | [optional]
**login** | **string** | Specifies customer&#39;s login name | [optional]
**last_login** | **string** | Defines customer&#39;s last login time | [optional]
**birth_day** | **string** | Defines customer&#39;s birthday | [optional]
**status** | **string** | Defines customer&#39;s status | [optional] [default to 'enabled']
**news_letter_subscription** | **bool** | Defines whether the newsletter subscription is available for the user | [optional] [default to false]
**consents** | [**\OpenAPI\Client\Model\CustomerAddConsentsInner[]**](CustomerAddConsentsInner.md) | Defines consents to notifications | [optional]
**gender** | **string** | Defines customer&#39;s gender | [optional]
**website** | **string** | Link to customer website | [optional]
**store_id** | **string** | Store Id | [optional]
**fax** | **string** | Defines customer&#39;s fax | [optional]
**company** | **string** | Defines customer&#39;s company | [optional]
**phone** | **string** | Defines customer&#39;s phone number | [optional]
**note** | **string** | The customer note. | [optional]
**country** | **string** | Specifies ISO code or name of country | [optional]
**address** | [**\OpenAPI\Client\Model\CustomerAddAddressInner[]**](CustomerAddAddressInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
