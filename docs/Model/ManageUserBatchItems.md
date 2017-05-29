# ManageUserBatchItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timezone** | **string** | Set a user&#39;s timezone, eg: Europe/Rome | [optional] 
**password** | **string** | Set a user&#39;s password | [optional] 
**lastname** | **string** | User&#39;s last name | [optional] 
**profile** | **string** | Will be the profile name for the Power User. Will be ignored if the user level is &amp;quot;user&amp;quot; | [optional] 
**branch_name_path** | **string** | Points to a full branch path, separated by slashes. If any part of the branch does not exist yet, it will be automatically created (eg: branch 1/branch 2/branch 3) | [optional] 
**branch_code_path** | **string** | Points to the codes of a full branch path, separated by slashes. If a part of the branch does not exist yet, it will be automatically created (eg: b01/b02/b03). In order to create a new branch, both name and code are required. They must be composed of the same structure. If something fails, an error will be shown. | [optional] 
**date_format** | **string** | Set a user&#39;s date formatting, eg: yyyy-mm-dd | [optional] 
**branch_name** | **string** | Identify a branch by name. If none or multiple branches are found, an error will be shown | [optional] 
**email** | **string** | Set a user&#39;s e-mail address | [optional] 
**username** | **string** | The unique username for a user | 
**field_xxx** | **string** | Multiple additional fields may be added. Simply replace &amp;quot;xxx&amp;quot; with the right field ID (do not use the &amp;quot;human&amp;quot; additional field name | [optional] 
**level** | **string** | The user&#39;s permissions. This will be either &amp;quot;user&amp;quot; or &amp;quot;poweruser&amp;quot;. If omitted, defaults to &amp;quot;user&amp;quot; | [optional] 
**active** | **bool** | Is a user active (true) or suspended (false) | [optional] 
**branch_code** | **string** | Identify a branch by its code. If not found, an error will be shown | [optional] 
**expiration_date** | **string** | End the validity of a user account to a certain date. Must be in YYYY-MM-DD format: Eg: 2018-12-31 | [optional] 
**firstname** | **string** | User&#39;s first name | [optional] 
**language** | **string** | Set the platform language for the user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


