# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**group_id** | **string** |  |
**default_payment_method_id** | **string** |  |
**sales_channel_id** | **string** |  |
**language_id** | **string** |  |
**last_payment_method_id** | **string** |  | [optional]
**default_billing_address_id** | **string** |  |
**default_shipping_address_id** | **string** |  |
**auto_increment** | **int** |  | [optional] [readonly]
**customer_number** | **string** |  |
**salutation_id** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**company** | **string** |  | [optional]
**email** | **string** |  |
**title** | **string** |  | [optional]
**vat_ids** | **string[]** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**active** | **bool** |  | [optional]
**double_opt_in_registration** | **bool** |  | [optional]
**double_opt_in_email_sent_date** | **\DateTime** |  | [optional]
**double_opt_in_confirm_date** | **\DateTime** |  | [optional]
**hash** | **string** |  | [optional]
**guest** | **bool** |  | [optional]
**first_login** | **\DateTime** |  | [optional]
**last_login** | **\DateTime** |  | [optional]
**newsletter** | **bool** |  | [optional]
**birthday** | **string** |  | [optional]
**last_order_date** | **\DateTime** |  | [optional] [readonly]
**order_count** | **int** |  | [optional] [readonly]
**order_total_amount** | **float** |  | [optional] [readonly]
**custom_fields** | **object** |  | [optional]
**remote_address** | **string** |  | [optional]
**tag_ids** | **string[]** |  | [optional] [readonly]
**requested_group_id** | **string** |  | [optional]
**bound_sales_channel_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**group** | [**\OpenAPI\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**default_payment_method** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**language** | [**\OpenAPI\Client\Model\Language**](Language.md) |  | [optional]
**last_payment_method** | [**\OpenAPI\Client\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**default_billing_address** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**default_shipping_address** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**salutation** | [**\OpenAPI\Client\Model\Salutation**](Salutation.md) |  | [optional]
**addresses** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**order_customers** | [**\OpenAPI\Client\Model\OrderCustomer**](OrderCustomer.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\Tag**](Tag.md) |  | [optional]
**promotions** | [**\OpenAPI\Client\Model\Promotion**](Promotion.md) |  | [optional]
**product_reviews** | [**\OpenAPI\Client\Model\ProductReview**](ProductReview.md) |  | [optional]
**recovery_customer** | [**\OpenAPI\Client\Model\CustomerRecovery**](CustomerRecovery.md) |  | [optional]
**requested_group** | [**\OpenAPI\Client\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**bound_sales_channel** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**wishlists** | [**\OpenAPI\Client\Model\CustomerWishlist**](CustomerWishlist.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
