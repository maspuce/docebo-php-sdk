# SkillRoleReadEvaluationConfigData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gl_self_exclude_users** | **int[]** | Array of users ids to exclude(for self evaluation). | 
**gl_self_renew** | **int** | After how many days renew the self evaluation? Default - NULL | 
**gl_peers_duration** | **int** | How many days are available to perform the peers evaluation. Default - NULL | 
**gl_self_enable** | **int** | Is self evalaution enabled? Default - 1 | 
**gl_self_scale** | **int** | Self evaluation scale id | 
**gl_manager_exclude_users** | **int[]** | Array of users ids to exclude(for manager evaluation). | 
**gl_manager_type** | **string** | Manager evaluation type - Informal(I) or Formal(F). Default - &amp;quot;I&amp;quot; | [optional] 
**gl_peers_group** | **string** | How are grouped the Evaluations (montly, weekly, every 6 months, yearly, every quarter, every 4 months) | [optional] 
**gl_manager_weight** | **float** | Manager evaluation weight | 
**gl_self_group** | **string** | How are grouped the Evaluations (montly, weekly, every 6 months, yearly, every quarter, every 4 months) | [optional] 
**gl_self_group_day** | **int** | Self group evaluation number of the day | [optional] 
**role_id** | **int** | Role ID | 
**grouping_options** | [**\Swagger\Client\Model\SkillRoleReadEvaluationConfigGroupingOptions[]**](SkillRoleReadEvaluationConfigGroupingOptions.md) | Array with predefined options for manager and peer grouping | 
**gl_manager_group_day** | **int** | Manager group evaluation number of the day | [optional] 
**gl_peers_enable** | **int** | Is peers evalaution enabled? Default - 1 | 
**gl_manager_renew** | **int** | After how many days renew the manager evaluation? Default - NULL | 
**gl_peers_type** | **string** | Peer evaluation type - Informal(I) or Formal(F). Default - &amp;quot;I&amp;quot; | [optional] 
**gl_manager_soft_due** | **int** | The due date is a soft due date? Default - 0 | 
**gl_peer_exclude_users** | **int[]** | Array of users ids to exclude(for peer evaluation). | 
**gl_peers_soft_due** | **int** | The due date is a soft due date? Default - 0 | 
**gl_self_weight** | **float** | Self evaluation weight | 
**gl_peers_renew** | **int** | After how many days renew the peers evaluation? Default - NULL | 
**gl_role_assign_wait** | **int** | Number of days to wait before evaluating someone if he assigned to a role. Default - NULL | 
**gl_peers_group_day** | **int** | Peer group evaluation number of the day | [optional] 
**gl_self_soft_due** | **int** | The due date is a soft due date? Default - 0 | 
**gl_manager_enable** | **int** | Is manager evalaution enabled? Default - 1 | 
**gl_self_duration** | **int** | How many days are available to perform the self evaluation. Default - NULL | 
**gl_peer_scale** | **int** | Peer evaluation scale id | 
**gl_show_manager_to_user** | **int** | Show manager assessment to the user | 
**gl_manager_group** | **string** | How are grouped the Evaluations (montly, weekly, every 6 months, yearly, every quarter, every 4 months) | [optional] 
**gl_peer_weight** | **float** | Peer evaluation weight | 
**gl_manager_scale** | **int** | Manager evaluation scale id | 
**gl_role_change_wait** | **int** | Number of days to wait before evaluating someone if his role is changed. Default - NULL | 
**gl_manager_duration** | **int** | How many days are available to perform the manager evalaution. Default - NULL | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


