# # Rule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**priority** | **int** |  |
**description** | **string** |  | [optional]
**invalid** | **bool** |  | [optional] [readonly]
**custom_fields** | **object** |  | [optional]
**module_types** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**conditions** | [**\OpenAPI\Client\Model\RuleCondition**](RuleCondition.md) |  | [optional]
**product_prices** | [**\OpenAPI\Client\Model\ProductPrice**](ProductPrice.md) |  | [optional]
**shipping_method_prices** | [**\OpenAPI\Client\Model\ShippingMethodPrice**](ShippingMethodPrice.md) |  | [optional]
**shipping_method_price_calculations** | [**\OpenAPI\Client\Model\ShippingMethodPrice**](ShippingMethodPrice.md) |  | [optional]
**shipping_methods** | [**\OpenAPI\Client\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**payment_methods** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**persona_promotions** | [**\OpenAPI\Client\Model\Promotion**](Promotion.md) |  | [optional]
**flow_sequences** | [**\OpenAPI\Client\Model\FlowSequence**](FlowSequence.md) |  | [optional]
**order_promotions** | [**\OpenAPI\Client\Model\Promotion**](Promotion.md) |  | [optional]
**cart_promotions** | [**\OpenAPI\Client\Model\Promotion**](Promotion.md) |  | [optional]
**promotion_discounts** | [**\OpenAPI\Client\Model\PromotionDiscount**](PromotionDiscount.md) |  | [optional]
**promotion_set_groups** | [**\OpenAPI\Client\Model\PromotionSetgroup**](PromotionSetgroup.md) |  | [optional]
**event_actions** | [**\OpenAPI\Client\Model\EventAction**](EventAction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
