# ManageUserIndexItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_validation_status** | **int** | Email validation status of an user. It is available only for NOT pending users | [optional] 
**confirmed** | **string** | Is user confirmed. It is available only for pending users | [optional] 
**last_access_date** | [**\DateTime**](Date.md) | Last access date of the user. It is available only for NOT pending users | [optional] 
**actions** | [**\Swagger\Client\Model\ManageUserIndexActions[]**](ManageUserIndexActions.md) | List of actions: edit|delete | [optional] 
**email** | **string** | Email of the user | 
**avatar** | **string** | Avatar of the user | 
**manager_last_name** | **string** | Manager last name. It is available only for NOT pending users | [optional] 
**expiration_date** | [**\DateTime**](Date.md) | Expiration date of an user. It is available only for NOT pending users | [optional] 
**role_id** | **int** | Role ID. It is available only for NOT pending users | [optional] 
**status** | **int** | User status. Options: 0 - suspended OR 1 - unsuspended. It is available only for NOT pending users | [optional] 
**level** | **int** | Level of an user. It is available only for NOT pending users | [optional] 
**manager_first_name** | **string** | Manager first name. It is available only for NOT pending users | [optional] 
**request_on** | [**\DateTime**](Date.md) | Date of user request. It is available only for pending users | [optional] 
**create_by_admin** | [**\DateTime**](Date.md) | Created by admin. Options: 0 - false, 1 - true. It is available only for pending users | [optional] 
**user_id** | **int** | The ID of the user | 
**last_name** | **string** | Last name of the user | 
**field_1111** | **string** | Aditional field value. In field_1111, &amp;quot;1111&amp;quot; is field ID. There are multiple additional fields created using this pattern | 
**username** | **string** | Username of the user | 
**firs_tname** | **string** | First name of the user | 
**role_title** | **string** | Role title. It is available only for NOT pending users | [optional] 
**language** | **string** | User UI language | 
**creation_date** | [**\DateTime**](Date.md) | Creation date of the user. It is available only for NOT pending users | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


