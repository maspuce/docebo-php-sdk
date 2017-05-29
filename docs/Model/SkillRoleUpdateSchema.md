# SkillRoleUpdateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **int** | If the updated role should be active 1 &#x3D; active 0 &#x3D; inactive. Default - current value | [optional] 
**key_role** | **int** | Is it a key role or not. Options: 1 - key  role; 0 - regular role. Default - 0 | [optional] 
**branches** | **int[]** | List of branch ids(branches where the role will be included). Default - null | [optional] 
**translations** | [**\Swagger\Client\Model\SkillRoleUpdateTranslations**](SkillRoleUpdateTranslations.md) | Array of translations | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


