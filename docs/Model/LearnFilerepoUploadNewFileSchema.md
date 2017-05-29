# LearnFilerepoUploadNewFileSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**visibility** | **int** | either 1 or -1, a value to express whether the uploaded file is visible to all enrollment levels or not (1 is all, -1 not all) | 
**title** | **string** | The title of the file. | 
**user_id** | **int** | The id of the user currently linking the file. | 
**viewable_by** | **string** | either &#39;LearningCourseFile::VIEWABLE_IN_ANY_SESSION&#39; which means the file is related to all sessions of its course, or &#39;LearningCourseFile::VIEWABLE_IN_SELECTED_SESSIONS_ONLY&#39; to express that the file is only for certain sessions. | 
**file_name** | **string** | The name of the file to be uploaded | 
**original_file_name** | **string** | The original file name of the file to be uploaded. | 
**course_id** | **int** | The id of the course. | 
**parent_id** | **int** | The id of the parent folder to hold the new file. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


