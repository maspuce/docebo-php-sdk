# SkillRoleSaveEvaluationConfigSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gl_self_exclude_users** | **int[]** | Array of users ids to exclude(for self evaluation). It could be also a string of comma-separated users ids.  Default - NULL | [optional] 
**gl_self_renew** | **int** | After how many days renew the self evaluation? Default - NULL | [optional] 
**gl_peers_duration** | **int** | How many days are available to perform the peers evaluation. Default - NULL | [optional] 
**gl_self_enable** | **int** | Is self evalaution enabled? Default - 1 | [optional] 
**gl_self_scale** | **int** | Scale, that will be used for self evaluations | [optional] 
**gl_manager_exclude_users** | **int[]** | Array of users ids to exclude(for manager evaluation). It could be also a string of comma-separated users ids.  Default - NULL | [optional] 
**gl_manager_type** | **string** | Manager evaluation type - Informal(I) or Formal(F). Default - &amp;quot;I&amp;quot; | [optional] 
**gl_peers_group** | **string** | How are grouped the Evaluations (monthly(1 MONTH), weekly(1 WEEK), every 6 months(6 MONTHS), yearly(1 YEAR), every quarter(3 MONTHS), every 4 months(4 MONTHS)) | [optional] 
**gl_manager_weight** | **float** | Weight, that will be used for manager evaluations; Value should be between 0 and 10 | [optional] 
**gl_self_group** | **string** | How are grouped the Evaluations (monthly(1 MONTH), weekly(1 WEEK), every 6 months(6 MONTHS), yearly(1 YEAR), every quarter(3 MONTHS), every 4 months(4 MONTHS)) | [optional] 
**gl_self_group_day** | **int** | Self group evaluation number of the day (possible values: weekly - 1 do 7, monthly - 1 do 28, yearly  - 1 do 365) | [optional] 
**gl_manager_group_day** | **int** | Manager group evaluation number of the day (possible values: weekly - 1 do 7, monthly - 1 do 28, yearly  - 1 do 365) | [optional] 
**gl_peers_enable** | **int** | Is peers evalaution enabled? Default - 1 | [optional] 
**gl_manager_renew** | **int** | After how many days renew the manager evaluation? Default - NULL | [optional] 
**gl_peers_soft_due** | **int** | The due date is a soft due date? Default - 0 | [optional] 
**gl_manager_soft_due** | **int** | The due date is a soft due date? Default - 0 | [optional] 
**gl_peer_exclude_users** | **int[]** | Array of users ids to exclude(for peer evaluation). It could be also a string of comma-separated users ids.  Default - NULL | [optional] 
**gl_peers_type** | **string** | Peer evaluation type - Informal(I) or Formal(F). Default - &amp;quot;I&amp;quot; | [optional] 
**gl_self_weight** | **float** | Weight, that will be used for self evaluations; Value should be between 0 and 10 | [optional] 
**gl_peers_renew** | **int** | After how many days renew the peers evaluation? Default - NULL | [optional] 
**gl_role_assign_wait** | **int** | Number of days to wait before evaluating someone if he assigned to a role. Default - NULL | [optional] 
**gl_peers_group_day** | **int** | Peer group evaluation number of the day (possible values: weekly - 1 do 7, monthly - 1 do 28, yearly  - 1 do 365) | [optional] 
**gl_self_soft_due** | **int** | The due date is a soft due date? Default - 0 | [optional] 
**gl_manager_enable** | **int** | Is manager evalaution enabled? Default - 1 | [optional] 
**gl_self_duration** | **int** | How many days are available to perform the self evaluation. Default - NULL | [optional] 
**gl_peer_scale** | **int** | Scale, that will be used for peer evaluations | [optional] 
**gl_show_manager_to_user** | **int** | Is manager assessment will be visible to the user? Options - 1(Yes), 0(No) | [optional] 
**gl_manager_group** | **string** | How are grouped the Evaluations (monthly(1 MONTH), weekly(1 WEEK), every 6 months(6 MONTHS), yearly(1 YEAR), every quarter(3 MONTHS), every 4 months(4 MONTHS)) | [optional] 
**gl_peer_weight** | **float** | Weight, that will be used for peer evaluations; Value should be between 0 and 10 | [optional] 
**gl_manager_scale** | **int** | Scale, that will be used for manager evaluations | [optional] 
**gl_role_change_wait** | **int** | Number of days to wait before evaluating someone if his role is changed. Default - NULL | [optional] 
**gl_manager_duration** | **int** | How many days are available to perform the manager evalaution. Default - NULL | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


