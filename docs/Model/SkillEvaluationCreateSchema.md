# SkillEvaluationCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**draft** | **int** | Is this evaluation completed or draft -&amp;gt; 1 &#x3D; Draft, 0 &#x3D; Completed | 
**role_id** | **int** | For what role the employee was rated. Default - current role of employee | [optional] 
**evaluation_type** | **string** | Type of evaluation, options S,M (Self, Manager) | 
**rating_date** | [**\DateTime**](Date.md) | Date when the rating was confirmed (if draft &#x3D; true -&amp;gt; default &#x3D; null; if draft &#x3D; false -&amp;gt; default &#x3D; current date). Date format - yyyy-MM-dd HH:mm:ss | [optional] 
**rater_id** | **int** | User ID of the rater | 
**request_id** | **int** | The evaluation request id( if there is an evaluation request) | 
**ratings** | [**\Swagger\Client\Model\SkillEvaluationCreateRatings**](SkillEvaluationCreateRatings.md) | Array of items skill-rating | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


