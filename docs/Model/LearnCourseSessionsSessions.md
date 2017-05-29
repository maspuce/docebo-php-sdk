# LearnCourseSessionsSessions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_manage** | **bool** | Can current user manage this session | 
**evaluation_attachment** | [**\Swagger\Client\Model\LearnCourseSessionsEvaluationAttachment**](LearnCourseSessionsEvaluationAttachment.md) | The UTC datetime of when the evaluation was created | [optional] 
**min_dates_for_completion** | **int** | (Webinar only) If webinar settings require completing a minimum number of dates, this param provides such a number | [optional] 
**slug_name** | **string** | The SEO version of the session&#39;s name | 
**begin_time** | **string** | The start time of the earliest date within this session, in the date&#39;s local timezone | [optional] 
**start_date** | [**\DateTime**](Date.md) | The UTC start datetime for the session | 
**evaluation** | [**\Swagger\Client\Model\LearnCourseSessionsEvaluation**](LearnCourseSessionsEvaluation.md) | Session evaluation object | [optional] 
**evaluation_type** | **string** | Evaluation type: 0&#x3D;&amp;gt;manual, 1&#x3D;&amp;gt; online test | 
**begin_timezone** | **string** | The timezone of the earliest available date within the session. E.g. &amp;quot;Europe/Rome&amp;quot; | [optional] 
**dates** | [**\Swagger\Client\Model\LearnCourseSessionsDates[]**](LearnCourseSessionsDates.md) | Array of the session&#39;s dates | 
**id** | **int** | The unique identifier of the session | 
**name** | **string** | The session name | 
**score** | **float** | The score given by the instructor | 
**score_base** | **string** | Evaluation score base | 
**comment** | **string** | Full evaluation message left by the instructor | [optional] 
**end_time** | **string** | The end time of the latest date within this session, in the date&#39;s local timezone | [optional] 
**description** | **string** | The description of the session for webinars or &amp;quot;Other info&amp;quot; for classrooms | [optional] 
**begin_day** | [**\DateTime**](Date.md) | The start date of the earliest date within this session, in the date&#39;s local timezone | [optional] 
**end_timezone** | **string** | The timezone of the latest available date within the session. E.g. &amp;quot;Europe/Rome&amp;quot; | [optional] 
**evaluation_status** | **bool** | The final evaluation status (true &#x3D; passed, false &#x3D; failed) | 
**end_date** | [**\DateTime**](Date.md) | The end date of the latest date within this session, in the date&#39;s local timezone | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


