# ManageJobCreateJobSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chunk_size** | **int** | The maximum size of the chunk that the endpoint accepts. If not provided, it defaults to 100 | [optional] 
**endpoint** | **string** | The endpoint of the batch API that will process each chunk of records and return errors &amp;amp; output (e.g. &amp;quot;/manage/v1/user/batch&amp;quot;) | 
**type** | **string** | The type of data source | 
**notify_email** | **string** | Notifications will be sent to this email, if it&#39;s empty they will be sent to the user that created the background job | [optional] 
**data_source** | [**\Swagger\Client\Model\ManageJobCreateJobDataSource**](ManageJobCreateJobDataSource.md) | An object containing data source configuration params specific of the data_source type. For type &#x3D; &amp;quot;importer&amp;quot;, it will contain the importer preset used to trigger the import job; for type &#x3D; &amp;quot;api&amp;quot;, it contains an array of records to be cached and processed. | 
**notify** | **bool** | Whether the job executor should send an email to the author when the job is completed state. Default: true | [optional] 
**method** | **string** | The HTTP method to use when calling the &amp;quot;endpoint&amp;quot; | 
**name** | **string** | Job title (e.g. &amp;quot;Importing users from CSV&amp;quot;) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


