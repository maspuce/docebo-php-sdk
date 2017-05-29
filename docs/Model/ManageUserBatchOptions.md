# ManageUserBatchOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change_user_password** | **bool** | If set to true, all newly created users will need to update their password when first logging in | 
**auto_assign_branch_to_pu** | **bool** | If set to true, when creating a new poweruser, he&#39;ll be automatically assigned to the branch he&#39;s added to (reflects branch_name, branch_code, branch_name_path and branch_code_path settings) | 
**update_user_info** | **bool** | If set to true, if a listed user already exists, his details will be updated, if set to false, an error will be logged for each existing user | 
**destination_branch** | **string** | Refers to the internal ID for a branch used as a fallback when no other branch settings have been set | 
**ignore_password_change_for_existing_users** | **bool** | If set to true, all updated users will need to updates their password when logging in next time (only has any effect when update_existing_users is true as well | 
**branch_option** | **string** | Can be &amp;quot;autocreate&amp;quot; or &amp;quot;existing&amp;quot;. When &amp;quot;existing&amp;quot; is selected, an error will be thrown when not a unique branch can be identified. When &amp;quot;autocreate&amp;quot; is selected and &amp;quot;branch_name_path&amp;quot; and &amp;quot;branch_code_path&amp;quot; are used, a new branch will be created | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


