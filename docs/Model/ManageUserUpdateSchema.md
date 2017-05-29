# ManageUserUpdateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_validation_status** | **int** | Email status - 0-unverified, 1-verified | [optional] 
**password** | **string** |  | 
**lastname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**timezone** | **string** | Timezone | [optional] 
**expiration** | [**\DateTime**](Date.md) | Expiration date | [optional] 
**force_change** | **int** | Force change password (0 or 1) | [optional] 
**date_format** | **string** | Date format - en, it, bg ... | [optional] 
**role** | **int** | The company user role ID | [optional] 
**email** | **string** | User&#39;s email. If the user calling the API is a super admin, the email is optional. In all other cases it&#39;s required. | [optional] 
**level** | **int** | User level | [optional] 
**userid** | **string** | the Username to register | 
**manager** | **int** | The ID of the manager of the user | [optional] 
**firstname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**language** | **string** | Selected language | [optional] 
**additional_fields** | [**\Swagger\Client\Model\ManageUserUpdateAdditionalFields[]**](ManageUserUpdateAdditionalFields.md) | [array, required] Success or failure | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


