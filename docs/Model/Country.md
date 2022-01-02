# # Country

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**iso** | **string** |  | [optional]
**position** | **int** |  | [optional]
**tax_free** | **bool** |  | [optional]
**active** | **bool** |  | [optional]
**shipping_available** | **bool** |  | [optional]
**iso3** | **string** |  | [optional]
**display_state_in_registration** | **bool** |  | [optional]
**force_state_in_registration** | **bool** |  | [optional]
**company_tax_free** | **bool** |  | [optional]
**check_vat_id_pattern** | **bool** |  | [optional]
**vat_id_required** | **bool** |  | [optional]
**vat_id_pattern** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**customer_tax** | [**\OpenAPI\Client\Model\CountryCustomerTax**](CountryCustomerTax.md) |  | [optional]
**company_tax** | [**\OpenAPI\Client\Model\CountryCustomerTax**](CountryCustomerTax.md) |  | [optional]
**created_at** | **\DateTime** |  | [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**states** | [**\OpenAPI\Client\Model\CountryState**](CountryState.md) |  | [optional]
**customer_addresses** | [**\OpenAPI\Client\Model\CustomerAddress**](CustomerAddress.md) |  | [optional]
**order_addresses** | [**\OpenAPI\Client\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**sales_channels** | [**\OpenAPI\Client\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**tax_rules** | [**\OpenAPI\Client\Model\TaxRule**](TaxRule.md) |  | [optional]
**currency_country_roundings** | [**\OpenAPI\Client\Model\CurrencyCountryRounding**](CurrencyCountryRounding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
