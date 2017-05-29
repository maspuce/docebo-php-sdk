# LearnCourseSessionsDate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_api_link** | **bool** | If the webinar tool allows to recieve an external link for the webinar recording | 
**timezone** | **string** | Timezone offset of this session&#39;s date | 
**tool** | **string** | (Webinar only) The webinar tool used for this session&#39;s date | [optional] 
**join_in_advance_instructor** | **int** | (Webinar only) A period of time (in minutes) before the starting time when the instructor/teacher can join in advance | [optional] 
**user_status** | **string** | Status of the user inside of this session&#39;s date. For classroom - &amp;quot;attended&amp;quot;, &amp;quot;not_attended&amp;quot;. For webinar - &amp;quot;upcoming&amp;quot;, &amp;quot;not_attended&amp;quot;, &amp;quot;attended&amp;quot;. | 
**id_location** | **int** | (Classroom only) Location identifier of this session&#39;s date | [optional] 
**day** | [**\DateTime**](Date.md) | UTC date of this session&#39;s date | 
**url** | **string** | (Webinar only) Custom URL. Only shown if the tool is &amp;quot;Custom&amp;quot; | [optional] 
**allowed_api_grab** | **bool** | If the webinar tool allows to recieve an external file for the webinar recording | 
**id_classroom** | **int** | (Classroom only) Classroom identifier of this session&#39;s date | [optional] 
**time_begin** | **string** | (Classroom only) Starting hour of this session&#39;s date | [optional] 
**duration** | **int** | (Webinar only) Duration (in minutes) of this session&#39;s date | [optional] 
**start_hour** | **string** | (Webinar only) Starting hour of this session&#39;s date | [optional] 
**description** | **string** | (Webinar only) Description of this session&#39;s date | [optional] 
**join_in_advance_user** | **int** | (Webinar only) A period of time (in minutes) before the starting time when the user can join in advance | [optional] 
**has_recording** | **bool** | (Webinar only) If the webinar has training materials records then has_recording &#x3D; 1 else it is 0 | [optional] 
**time_end** | **string** | (Classroom only) Ending hour of this session&#39;s date | [optional] 
**name** | **string** | Name of this session&#39;s date | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


