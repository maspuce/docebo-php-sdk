# SkillProgramUpdateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lang** | **string** | The entired language | [optional] 
**title** | **string** | Develpment program name | 
**planning_period_id** | **int** | A planning period Id related to the program. | [optional] 
**status** | **int** | Status of the program. Values [0|1] 0 &#x3D; Inactive, 1 &#x3D; Active. Default Active. | [optional] 
**development_program_id** | **int** | The Id of the development program to update. | 
**description** | **string** | Development program description | [optional] 
**branch_id** | **int** | If the branch isn&#39;t provided the root branch is set. | [optional] 
**program_type** | **string** | Type of the program. Types [O|D] O&#x3D; Onboarding, D&#x3D;Development.Development is set if not provided. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


