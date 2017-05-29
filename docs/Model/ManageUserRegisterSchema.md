# ManageUserRegisterSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**privacy** | **string** | Required ONLY if checked &amp;quot;Privacy policy MUST be accepted&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**email** | **string** | User&#39;s email. If the user calling the API is a super admin, the email is optional. In all other cases it&#39;s required. | [optional] 
**password** | **string** |  | 
**lastname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**user_fields** | [**\Swagger\Client\Model\ManageUserRegisterUserFields[]**](ManageUserRegisterUserFields.md) | Success or failure | 
**level** | **string** | User level | [optional] 
**userid** | **string** | the Username to register | 
**branch_code** | **string** | Org chart branch code or &amp;quot;branch-course&amp;quot; code combination (depending on the setting in Advanced settings) | [optional] 
**firstname** | **string** | Required ONLY if checked &amp;quot;First Name and Last Name are required in order to register&amp;quot; in &amp;quot;Advanced Settings&amp;quot; | [optional] 
**language** | **string** | If one is not provided, use the platform default language | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


