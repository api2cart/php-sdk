# # CustomerUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity id | [optional]
**group_id** | **string** | Customer group_id | [optional]
**group_ids** | **string** | Groups that will be assigned to a customer | [optional]
**group** | **string** | Defines the group where the customer | [optional]
**email** | **string** | Defines customer&#39;s email | [optional]
**phone** | **string** | Defines customer&#39;s phone number | [optional]
**first_name** | **string** | Defines customer&#39;s first name | [optional]
**last_name** | **string** | Defines customer&#39;s last name | [optional]
**birth_day** | **string** | Defines customer&#39;s birthday | [optional]
**news_letter_subscription** | **bool** | Defines whether the newsletter subscription is available for the user | [optional]
**consents** | [**\OpenAPI\Client\Model\CustomerAddConsentsInner[]**](CustomerAddConsentsInner.md) | Defines consents to notifications | [optional]
**tags** | **string** | Customer tags | [optional]
**gender** | **string** | Defines customer&#39;s gender | [optional]
**note** | **string** | The customer note. | [optional]
**status** | **string** | Defines customer&#39;s status | [optional]
**password** | **string** | Defines customer&#39;s unique password | [optional]
**currency_id** | **string** | Currency Id | [optional]
**company** | **string** | Defines customer&#39;s company | [optional]
**country** | **string** | Specifies ISO code or name of country | [optional]
**fax** | **string** | Defines customer&#39;s fax | [optional]
**tax_id** | **string** | Add Tax Id | [optional]
**is_tax_exempt** | **bool** | Marks a customer as tax-exempt (B2B/wholesale). | [optional]
**vendor_id** | **string** | Updates vendor id of the customer | [optional]
**store_id** | **string** | Store Id | [optional]
**idempotency_key** | **string** | A unique identifier associated with a specific request. Repeated requests with the same &lt;strong&gt;idempotency_key&lt;/strong&gt; return a cached response without re-executing the business logic. &lt;strong&gt;Please note that the cache lifetime is 15 minutes.&lt;/strong&gt; | [optional]
**address** | [**\OpenAPI\Client\Model\CustomerUpdateAddressInner[]**](CustomerUpdateAddressInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
