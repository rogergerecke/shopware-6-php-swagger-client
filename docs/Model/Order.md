# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**auto_increment** | **int** |  | [optional] [readonly]
**order_number** | **string** |  | [optional]
**billing_address_id** | **string** |  |
**billing_address_version_id** | **string** |  | [optional]
**currency_id** | **string** |  |
**language_id** | **string** |  |
**sales_channel_id** | **string** |  |
**order_date_time** | **\DateTime** |  |
**order_date** | **string** |  | [optional] [readonly]
**price** | [**\OpenAPI\Client\Model\OrderPrice**](OrderPrice.md) |  | [optional]
**amount_total** | **float** |  | [optional] [readonly]
**amount_net** | **float** |  | [optional] [readonly]
**position_price** | **float** |  | [optional] [readonly]
**tax_status** | **string** |  | [optional] [readonly]
**shipping_costs** | [**\OpenAPI\Client\Model\OrderShippingCosts**](OrderShippingCosts.md) |  | [optional]
**shipping_total** | **float** |  | [optional] [readonly]
**currency_factor** | **float** |  |
**deep_link_code** | **string** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**customer_comment** | **string** |  | [optional]
**state_id** | **string** |  |
**rule_ids** | **string[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_by_id** | **string** |  | [optional]
**updated_by_id** | **string** |  | [optional]
**item_rounding** | [**\OpenAPI\Client\Model\CurrencyItemRounding**](CurrencyItemRounding.md) |  | [optional]
**total_rounding** | [**\OpenAPI\Client\Model\CurrencyItemRounding**](CurrencyItemRounding.md) |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**state_machine_state** | [**\OpenAPI\Client\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order_customer** | [**\OpenAPI\Client\Model\OrderCustomer**](OrderCustomer.md) |  | [optional]
**currency** | [**\OpenAPI\Client\Model\Currency**](Currency.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional]
**sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**addresses** | [**\OpenAPI\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**billing_address** | [**\OpenAPI\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**deliveries** | [**\OpenAPI\Client\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\OrderLineItem**](OrderLineItem.md) |  | [optional]
**transactions** | [**\OpenAPI\Client\Model\OrderTransaction**](OrderTransaction.md) |  | [optional]
**documents** | [**\OpenAPI\Client\Model\Document**](Document.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag**](Tag.md) |  | [optional]
**created_by** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]
**updated_by** | [**\OpenAPI\Client\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
