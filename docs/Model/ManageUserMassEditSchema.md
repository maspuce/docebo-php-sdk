# ManageUserMassEditSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manager** | **int** | The ID of the manager of the user | [optional] 
**timezone** | **string** | Timezone | [optional] 
**email_status** | **int** | Email status - 0-unverified, 1-verified | [optional] 
**password** | **string** |  | 
**additional_fields** | [**\Swagger\Client\Model\ManageUserMassEditAdditionalFields[]**](ManageUserMassEditAdditionalFields.md) | [array, required] Success or failure | [optional] 
**user_ids** | [**\Swagger\Client\Model\ManageUserMassEditUserIds[]**](ManageUserMassEditUserIds.md) | Array of user IDs | 
**expiration** | [**\DateTime**](Date.md) | Expiration date | [optional] 
**role** | **int** | The company user role ID | [optional] 
**language** | **string** | If one is not provided, use the platform default language | [optional] 
**date_format** | **string** | Date format - en, it, bg ... | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


