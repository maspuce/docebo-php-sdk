# ManageImporterCreatePresetSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Category the preset belongs to | 
**datasource_params** | [**\Swagger\Client\Model\ManageImporterCreatePresetDatasourceParams**](ManageImporterCreatePresetDatasourceParams.md) | A JS object containing type specific parameters for the datasource (eg: &#39;csv_delimiter&#39;, &#39;csv_charset&#39;,...) | [optional] 
**options** | [**\Swagger\Client\Model\ManageImporterCreatePresetOptions**](ManageImporterCreatePresetOptions.md) | A JS object containing type specific import options (eg: &amp;quot;update_users&amp;quot;, &amp;quot;target_branch&amp;quot;,...) | [optional] 
**mapping** | **string[]** | A 0-based array of field identifiers representing the fields mapped to each column (e.g. [&amp;quot;firstname&amp;quot;, &amp;quot;field_1&amp;quot;, &amp;quot;password&amp;quot;...]) | [optional] 
**name** | **string** | User defined name for the preset | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


