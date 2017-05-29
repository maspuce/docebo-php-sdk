# ManageJobIndexJobDescriptor

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | The LMS domain from where the job was posted. | 
**date_created** | [**\DateTime**](Date.md) | The MYSQL UTC datetime of when the job was created. | 
**author_name** | **string** | The name of the user that created this job. | 
**log_file** | **string** | The UUID of the job. | 
**last_update** | [**\DateTime**](Date.md) | The MYSQL UTC datetime of when the job was last updated. | 
**hash** | **string** | The UUID of the job. | 
**status** | **string** | The current status of the job. | 
**author_id** | **int** | The user ID who created this job. | 
**percent** | **double** | The completion percentage of the current job. | 
**errors** | **int** | How many errors were raised so far during the process. | 
**notify** | **bool** | If set to true, the system will notify the user by mail when the job is completed. (Default to true) | 
**total** | **int** | The total amount of records calculated for this job. If job type is &amp;quot;importer&amp;quot; the value will be empty. | 
**name** | **string** | The Name of the job. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


