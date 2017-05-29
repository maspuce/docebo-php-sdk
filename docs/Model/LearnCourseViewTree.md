# LearnCourseViewTree

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**short_description** | **string** | Learning Object short description. Not present for folders | 
**thumbnail** | **string** | Learning object thumbnail URL. Not present for folders | [optional] 
**status** | **string** | The current status of the user for this chapter. Not present for folders | 
**slug_name** | **string** | Learning object or folder slug name | 
**is_folder** | **bool** | Whatever or not the current item is folder or Learning Object | 
**type** | **string** | . The type of the learning object. Not present for folders | [optional] 
**id** | **string** | The internal ID of the folder or LO | 
**can_enter** | **bool** | Returns true or false based on that if the user can_enter in the current course or not, this property is available only when the user is logged in. | 
**duration** | **int** | Learning object duration. Not present for folders | 
**level** | **int** | The level of the LO in the tree stricture. | 
**description** | **string** | Learning object description. Not present for folders | [optional] 
**children** | [**\Swagger\Client\Model\LearnCourseViewChildren[]**](LearnCourseViewChildren.md) | The child subfolders and learning objects of this folder, infinite levels deep, following the same structure | [optional] 
**name** | **string** | Learning object or folder name | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


