# LearnCourseCompactListData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Course Code | 
**slug_name** | **string** | Slugified course name | 
**enrollment_info** | [**\Swagger\Client\Model\LearnCourseCompactListEnrollmentInfo[]**](LearnCourseCompactListEnrollmentInfo.md) | Enrollment information is added here, if any | 
**id_course** | **int** | ID of the course | 
**more_course_fields** | [**\Swagger\Client\Model\LearnCourseCompactListMoreCourseFields[]**](LearnCourseCompactListMoreCourseFields.md) | Add these course fields to the result (directly refering database table colmns) | [optional] 
**selling** | **bool** | If course is for sale (ecommerce) | 
**can_enter** | [**\Swagger\Client\Model\LearnCourseCompactListCanEnter[]**](LearnCourseCompactListCanEnter.md) | Information about if the user Can Enter the course | 
**more_enrollment_fields** | [**\Swagger\Client\Model\LearnCourseCompactListMoreEnrollmentFields[]**](LearnCourseCompactListMoreEnrollmentFields.md) | Add these enrollment fields to &amp;quot;enrollment_info&amp;quot;, if any (directly refering database table colmns) | [optional] 
**course_type** | **string** | Course type, possible values: elearning, classroom, webinar | 
**description** | **string** | Course description | 
**enrolled** | **bool** | If the given user (if provided) is enrolled to this course | 
**name** | **string** | Course name | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


