# # ShippingMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**active** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**availability_rule_id** | **string** |  |
**media_id** | **string** |  | [optional]
**delivery_time_id** | **string** |  |
**tax_type** | **string** |  |
**tax_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**tracking_url** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**delivery_time** | [**\OpenAPI\Client\Model\DeliveryTime**](DeliveryTime.md) |  | [optional]
**availability_rule** | [**\OpenAPI\Client\Model\Rule**](Rule.md) |  | [optional]
**prices** | [**\OpenAPI\Client\Model\ShippingMethodPrice**](ShippingMethodPrice.md) |  | [optional]
**media** | [**\OpenAPI\Client\Model\Media**](Media.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag**](Tag.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\Client\Model\OrderDelivery**](OrderDelivery.md) |  | [optional]
**sales_channels** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**tax** | [**\OpenAPI\Client\Model\Tax**](Tax.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
