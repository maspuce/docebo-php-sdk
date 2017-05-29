# SkillDevobjectUpdateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hr_comment** | **string** | Comment by HR | [optional] 
**act_user** | **int** | user id of the user performing the development activity (mandatory is the name of the coach, the mentor or temporary manager in case of job rotation) | 
**role_id** | **int** | Role (required only if Job rotation): Role for the job rotation !!! | [optional] 
**completed** | **int** | whatever it is completed(1) or not(0) | [optional] 
**user_comment** | **string** | Comment by user receiving the development activity | [optional] 
**type** | **string** | Mentoring, Coaching or Job Rotation (M|C|J) | 
**start_date** | [**\DateTime**](Date.md) | Start date of the development object | [optional] 
**rec_user** | **int** | User id of the user receiving the development activity | 
**act_comment** | **string** | Comment by user performing the development activity | [optional] 
**translations** | [**\Swagger\Client\Model\SkillDevobjectUpdateTranslations**](SkillDevobjectUpdateTranslations.md) | Array of translations,  the system default language translation is mandatory | 
**end_date** | [**\DateTime**](Date.md) | End date of the development object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


