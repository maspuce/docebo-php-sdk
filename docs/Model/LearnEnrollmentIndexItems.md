# LearnEnrollmentIndexItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The internal code name of the course or learning plan. | [optional] 
**duration** | **int** | The duration of the course or learning plan in seconds | 
**lang_code** | **string** | . The short language version, e.g. &amp;quot;en&amp;quot;. Only present for courses and not for learning plans. | [optional] 
**enroll_end_date** | [**\DateTime**](Date.md) | The expiration time of the enrollment of the user inside the course or learning plan. | [optional] 
**id** | **int** | The internal ID of the learning plan or course | 
**courses_count** | **int** | The number of courses inside the learning plan. Only present if the enrollment is for learning plan. | [optional] 
**score** | **float** | The user&#39;s score inside the course. Only valid for course enrollments. | [optional] 
**course_complete_date** | [**\DateTime**](Date.md) | Date when the user has completed the course or learning plan | [optional] 
**status** | **string** | The user&#39;s status inside the course or learning plan. | [optional] 
**level** | **string** | User&#39;s enrollment level. Possible values: learner, tutor, instructor, coach. Only available for Courses. | [optional] 
**rating** | **double** | Rating of the EI, if applicable | 
**name** | **string** | Course or Learning Plan name | 
**image_url** | **string** | The thumbnail URL for the course | [optional] 
**slug_name** | **string** | Course or Learning Plan slug | 
**user_id** | **int** | The user ID for which this enrollment is related | 
**type** | **string** | . Possible values: elearning, webinar, classroom, learning_plan | 
**url** | **string** | URL to access the course or learning plan | 
**soft_deadline** | **bool** | If type is elearning. Settings for the end possible date to enroll. | [optional] 
**can_enter** | **bool** | Whether or not the current user can enter the course | 
**is_new** | **bool** | Is the EI new for the given user; currently indicating if the user has any progress in the EI | 
**description** | **string** | Course or Learning Plan description | [optional] 
**enroll_begin_date** | [**\DateTime**](Date.md) | The beginning time of the enrollment of the user inside the course or learning plan. | [optional] 
**total_time** | **int** | Total time spent by the user in the course or learning plan | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


