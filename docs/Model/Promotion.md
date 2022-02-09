# # Promotion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**active** | **bool** |  |
**valid_from** | **\DateTime** |  | [optional]
**valid_until** | **\DateTime** |  | [optional]
**max_redemptions_global** | **int** |  | [optional]
**max_redemptions_per_customer** | **int** |  | [optional]
**priority** | **int** |  |
**exclusive** | **bool** |  |
**code** | **string** |  | [optional]
**use_codes** | **bool** |  |
**use_individual_codes** | **bool** |  |
**individual_code_pattern** | **string** |  | [optional]
**use_set_groups** | **bool** |  |
**customer_restriction** | **bool** |  | [optional]
**prevent_combination** | **bool** |  |
**order_count** | **int** |  | [optional] [readonly]
**orders_per_customer_count** | **object** |  | [optional] [readonly]
**exclusion_ids** | **string[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**setgroups** | [**\OpenAPI\Client\Model\PromotionSetgroup**](PromotionSetgroup.md) |  | [optional]
**sales_channels** | [**\OpenAPI\Client\Model\PromotionSalesChannel**](PromotionSalesChannel.md) |  | [optional]
**discounts** | [**\OpenAPI\Client\Model\PromotionDiscount**](PromotionDiscount.md) |  | [optional]
**individual_codes** | [**\OpenAPI\Client\Model\PromotionIndividualCode**](PromotionIndividualCode.md) |  | [optional]
**persona_rules** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]
**persona_customers** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**order_rules** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]
**cart_rules** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
