# ManageUserfieldCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invisible_to_user** | **int** | User field is visible for users - 0 or not visible - 1. Default - 0 | [optional] 
**type** | **string** | User field type. Options: date, dropdown, textfield, textarea, etc | 
**translations** | [**\Swagger\Client\Model\ManageUserfieldCreateTranslations**](ManageUserfieldCreateTranslations.md) | Array of translations, the system default language translation is mandatory | 
**mandatory** | **int** | Mandatory - 1 or Not mandatory - 0. Default - 0 | [optional] 
**dropdown_options** | [**\Swagger\Client\Model\ManageUserfieldCreateDropdownOptions[]**](ManageUserfieldCreateDropdownOptions.md) | Array of dropdown options. If type of user field is dropdown, this parameter becomes required | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


