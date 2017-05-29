# ManageEnrollmentfieldCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**translations** | [**\Swagger\Client\Model\ManageEnrollmentfieldCreateTranslations**](ManageEnrollmentfieldCreateTranslations.md) | Array of translations, the system default language translation is mandatory | 
**visible_to_user** | **int** | Enrollment field is visible for users - 1 or not visible - 0. Default - 1 | [optional] 
**type** | **int** | Enrollment field type. Options: 1- date, 2 - dropdown, 3 - free_text, 4 - textarea | 
**dropdown_options** | [**\Swagger\Client\Model\ManageEnrollmentfieldCreateDropdownOptions[]**](ManageEnrollmentfieldCreateDropdownOptions.md) | Array of dropdown options. If type of enrollment field is dropdown, this parameter becomes required | [optional] 
**mandatory** | **int** | Mandatory - 1 or Not mandatory - 0. Default - 1 | [optional] 
**courses** | **int[]** | Create enrollment field for certain courses. Default - all | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


