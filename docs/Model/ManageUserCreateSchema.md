# ManageUserCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manager** | **int** | The ID of the manager of the user | [optional] 
**timezone** | **string** | Timezone | [optional] 
**password** | **string** |  | 
**lastname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**privacy** | **string** | Required ONLY if checked &amp;quot;Privacy policy MUST be accepted&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**expiration** | [**\DateTime**](Date.md) | Expiration date | [optional] 
**language** | **string** | Selected language (browser code) | [optional] 
**select_orgchart** | [**\Swagger\Client\Model\ManageUserCreateSelectOrgchart[]**](ManageUserCreateSelectOrgchart.md) | Array of branch Ids with the selected state | [optional] 
**date_format** | **string** | Date format - en, it, bg ... | [optional] 
**valid** | **int** | Is user active. Options: 0 - not active, 1 - active. Default: 1 (active) | [optional] 
**email_status** | **int** | Email status - 0-unverified, 1-verified | [optional] 
**email** | **string** | User&#39;s email. If the user calling the API is a super admin, the email is optional. In all other cases it&#39;s required. | [optional] 
**employees** | [**\Swagger\Client\Model\ManageUserCreateEmployees[]**](ManageUserCreateEmployees.md) | Array of employees IDs | [optional] 
**level** | **int** | User level | [optional] 
**userid** | **string** | the Username to register | 
**role** | **int** | The company user role ID | [optional] 
**firstname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**force_change** | **int** | Force change password (0 or 1) | [optional] 
**additional_fields** | [**\Swagger\Client\Model\ManageUserCreateAdditionalFields[]**](ManageUserCreateAdditionalFields.md) | [array, required] Success or failure | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


