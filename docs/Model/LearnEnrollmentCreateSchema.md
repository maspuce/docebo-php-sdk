# LearnEnrollmentCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_ids** | **int[]** | The ID of group/s. If is provided subscription_record, providing of user_ids, group_ids or branch_ids is mandatory | [optional] 
**course_ids** | **int[]** | The id of the course/s | 
**branch_ids** | **int[]** | The ID branch/es. If is provided subscription_record, providing of user_ids, group_ids or branch_ids is mandatory | [optional] 
**session_id** | **int** | session of webinar or ILT to be enrolled into. If the field is filled in then the user will be enrolled in the session also for webinar and ILT. | [optional] 
**date_expire_validity** | [**\DateTime**](Date.md) | Expiration date of the enrollment | [optional] 
**enrollment_fields** | [**\Swagger\Client\Model\LearnEnrollmentCreateEnrollmentFields**](LearnEnrollmentCreateEnrollmentFields.md) | Array of additional fields for the enrollment | 
**level** | **int** | Level of enrolled user | 
**subscription_record** | **int** | ID of a subscription record | [optional] 
**date_begin_validity** | [**\DateTime**](Date.md) | Starting date of the enrollment | [optional] 
**user_ids** | **int[]** | The id of enrolled user/s. If is provided subscription_record, providing of user_ids, group_ids or branch_ids is mandatory | 
**notification_ids** | **int[]** | ID of notifications to be triggered | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


