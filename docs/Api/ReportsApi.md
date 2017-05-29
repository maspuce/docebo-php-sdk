# Swagger\Client\ReportsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsSkillv1reportsbench**](ReportsApi.md#reportsSkillv1reportsbench) | **GET** /skill/v1/reports/bench | Retrieves the list of \&quot;Bench candidates\&quot; for a Role
[**reportsSkillv1reportsbenchcount**](ReportsApi.md#reportsSkillv1reportsbenchcount) | **GET** /skill/v1/reports/bench/count | Calculates the \&quot;Bench Strength\&quot; for a Role
[**reportsSkillv1reportsbranchesbranchId**](ReportsApi.md#reportsSkillv1reportsbranchesbranchId) | **GET** /skill/v1/reports/branches/{branch_id} | Calculates the Knowledge Gaps for the user of a Branch
[**reportsSkillv1reportsbranchesbranchIdskillsskillId**](ReportsApi.md#reportsSkillv1reportsbranchesbranchIdskillsskillId) | **GET** /skill/v1/reports/branches/{branch_id}/skills/{skill_id} | Retrieves the list of users with a knowledge gap for a Skill in a Branch
[**reportsSkillv1reportsbranchesroles**](ReportsApi.md#reportsSkillv1reportsbranchesroles) | **GET** /skill/v1/reports/branches/roles | Retrieves the Roles of one or more Branches
[**reportsSkillv1reportsbranchesrolesroleId**](ReportsApi.md#reportsSkillv1reportsbranchesrolesroleId) | **GET** /skill/v1/reports/branches/roles/{role_id} | Retrieves the List of Users of a Role by Branch(-es)
[**reportsSkillv1reportscalibration**](ReportsApi.md#reportsSkillv1reportscalibration) | **GET** /skill/v1/reports/calibration | List of managers calibration
[**reportsSkillv1reportscalibrationid**](ReportsApi.md#reportsSkillv1reportscalibrationid) | **POST** /skill/v1/reports/calibration/{id} | Calibrate Manager Requests
[**reportsSkillv1reportscalibrationidskills**](ReportsApi.md#reportsSkillv1reportscalibrationidskills) | **GET** /skill/v1/reports/calibration/{id}/skills | List of Skills In Managers Calibration
[**reportsSkillv1reportscalibrationidskillsid2**](ReportsApi.md#reportsSkillv1reportscalibrationidskillsid2) | **GET** /skill/v1/reports/calibration/{id}/skills/{id2} | View latest evaluation comparison (Skill)
[**reportsSkillv1reportscalibrationidusers**](ReportsApi.md#reportsSkillv1reportscalibrationidusers) | **GET** /skill/v1/reports/calibration/{id}/users | List of Users In Managers Calibration
[**reportsSkillv1reportscalibrationidusersid2**](ReportsApi.md#reportsSkillv1reportscalibrationidusersid2) | **GET** /skill/v1/reports/calibration/{id}/users/{id2} | View latest evaluation comparison (User)
[**reportsSkillv1reportsjoharimanagersmanagerId**](ReportsApi.md#reportsSkillv1reportsjoharimanagersmanagerId) | **GET** /skill/v1/reports/johari/managers/{manager_id} | Calculates the Calibration Matrix for all of the Subordinates of a Manager
[**reportsSkillv1reportsjoharimanagersmanagerIdcellscellId**](ReportsApi.md#reportsSkillv1reportsjoharimanagersmanagerIdcellscellId) | **GET** /skill/v1/reports/johari/managers/{manager_id}/cells/{cell_id} | Retrieves the list of Skills in one cell of the Calibration Matrix Manager report
[**reportsSkillv1reportsjohariusersuserId**](ReportsApi.md#reportsSkillv1reportsjohariusersuserId) | **GET** /skill/v1/reports/johari/users/{user_id} | Calculates the Calibration Matrix of an User
[**reportsSkillv1reportsroleidskills**](ReportsApi.md#reportsSkillv1reportsroleidskills) | **GET** /skill/v1/reports/role/{id}/skills | Retrieves all Roles from all roles who should have the given skill
[**reportsSkillv1reportsroleidusers**](ReportsApi.md#reportsSkillv1reportsroleidusers) | **GET** /skill/v1/reports/role/{id}/users | Retrieves Report for all Users in a role
[**reportsSkillv1reportsrolesroleId**](ReportsApi.md#reportsSkillv1reportsrolesroleId) | **GET** /skill/v1/reports/roles/{role_id} | Calculates the Knowledge Gaps for a Role
[**reportsSkillv1reportsrolesroleIdskillsskillId**](ReportsApi.md#reportsSkillv1reportsrolesroleIdskillsskillId) | **GET** /skill/v1/reports/roles/{role_id}/skills/{skill_id} | Retrieves the list of Users with a knowledge gap for a Skill
[**reportsSkillv1reportsskillidbranches**](ReportsApi.md#reportsSkillv1reportsskillidbranches) | **GET** /skill/v1/reports/skill/{id}/branches | Retrieves gaps by branches for the given skill
[**reportsSkillv1reportsskillidroles**](ReportsApi.md#reportsSkillv1reportsskillidroles) | **GET** /skill/v1/reports/skill/{id}/roles | Retrieves all Roles from all roles who should have the given skill
[**reportsSkillv1reportsskillidusers**](ReportsApi.md#reportsSkillv1reportsskillidusers) | **GET** /skill/v1/reports/skill/{id}/users | Retrieves all Users from all roles who should have the given skill
[**reportsSkillv1reportsskillsgaps**](ReportsApi.md#reportsSkillv1reportsskillsgaps) | **GET** /skill/v1/reports/skills/gaps | Retrieves all Roles from all roles who should have the given skill
[**reportsSkillv1reportsskillsidgaps**](ReportsApi.md#reportsSkillv1reportsskillsidgaps) | **GET** /skill/v1/reports/skills/{id}/gaps | Retrieves all Users from all roles who should have the given skill


# **reportsSkillv1reportsbench**
> \Swagger\Client\Model\SkillReportsRoleBenchStrengthDetailResponse reportsSkillv1reportsbench($role_id, $branch_ids, $include_descendant, $consider_evaluation, $max, $min, $threshold_days, $detail_type)

Retrieves the list of \"Bench candidates\" for a Role

list of employees that have a percentage of a knowledge level for the necessary skills of a role between the min and the max

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$role_id = 56; // int | The role where has to be calculated the bench strength
$branch_ids = array(56); // int[] | Employees members of what branches perform the search
$include_descendant = 56; // int | Should be included the descendants of the branches. Default - 0
$consider_evaluation = "consider_evaluation_example"; // string | Options: S, M, both_and, both_or, default=M
$max = 56; // int | The max percentage of role's skills known, default 100
$min = 56; // int | The min percentage of role's skills known, default 100
$threshold_days = 56; // int | Use only evaluations more recent than number of days for the calculation (default= all)
$detail_type = "detail_type_example"; // string | Options: &quot;bench_strength&quot;, &quot;manager_missing&quot;,  Default: bench_strength

try {
    $result = $api_instance->reportsSkillv1reportsbench($role_id, $branch_ids, $include_descendant, $consider_evaluation, $max, $min, $threshold_days, $detail_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbench: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| The role where has to be calculated the bench strength |
 **branch_ids** | [**int[]**](../Model/int.md)| Employees members of what branches perform the search | [optional]
 **include_descendant** | **int**| Should be included the descendants of the branches. Default - 0 | [optional]
 **consider_evaluation** | **string**| Options: S, M, both_and, both_or, default&#x3D;M | [optional]
 **max** | **int**| The max percentage of role&#39;s skills known, default 100 | [optional]
 **min** | **int**| The min percentage of role&#39;s skills known, default 100 | [optional]
 **threshold_days** | **int**| Use only evaluations more recent than number of days for the calculation (default&#x3D; all) | [optional]
 **detail_type** | **string**| Options: &amp;quot;bench_strength&amp;quot;, &amp;quot;manager_missing&amp;quot;,  Default: bench_strength | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsRoleBenchStrengthDetailResponse**](../Model/SkillReportsRoleBenchStrengthDetailResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsbenchcount**
> \Swagger\Client\Model\SkillReportsRoleBenchStrengthResponse reportsSkillv1reportsbenchcount($role_id, $branch_ids, $include_descendant, $consider_evaluation, $max, $min, $threshold_days)

Calculates the \"Bench Strength\" for a Role

Returns the number of employees that have knowledge of the skills of a role but are not members of this role (used to find the people that can be reassigned to a role). The imput parameters defined for this list are the min and max percentage of skills necessary for a certain role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$role_id = 56; // int | The role where has to be calculated the bench strength
$branch_ids = array(56); // int[] | Employees members of what branches perform the search
$include_descendant = 56; // int | Should be included the descendants of the branches. Default - 0
$consider_evaluation = "consider_evaluation_example"; // string | Options: S, M, both_and, both_or, default=M
$max = 56; // int | The max percentage of role's skills known, default 100
$min = 56; // int | The min percentage of role's skills known, default 100
$threshold_days = 56; // int | Use only evaluations more recent than number of days for the calculation (default= all)

try {
    $result = $api_instance->reportsSkillv1reportsbenchcount($role_id, $branch_ids, $include_descendant, $consider_evaluation, $max, $min, $threshold_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbenchcount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| The role where has to be calculated the bench strength |
 **branch_ids** | [**int[]**](../Model/int.md)| Employees members of what branches perform the search | [optional]
 **include_descendant** | **int**| Should be included the descendants of the branches. Default - 0 | [optional]
 **consider_evaluation** | **string**| Options: S, M, both_and, both_or, default&#x3D;M | [optional]
 **max** | **int**| The max percentage of role&#39;s skills known, default 100 | [optional]
 **min** | **int**| The min percentage of role&#39;s skills known, default 100 | [optional]
 **threshold_days** | **int**| Use only evaluations more recent than number of days for the calculation (default&#x3D; all) | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsRoleBenchStrengthResponse**](../Model/SkillReportsRoleBenchStrengthResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsbranchesbranchId**
> \Swagger\Client\Model\SkillReportsBranchReportResponse reportsSkillv1reportsbranchesbranchId($branch_id, $include_descendant, $lang, $threshold_days)

Calculates the Knowledge Gaps for the user of a Branch

Returns, for a branch, for each skill of the user's role how many branch have received a  evaluation of not sufficient knowledge (both self and manager evaluation results are provided). Is returned also a list of the skills that are missing manager or user evaluation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$branch_id = 56; // int | ID of a branch
$include_descendant = 56; // int | Options 0 or 1. To include or not descendant branches. Default - 0
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$threshold_days = 56; // int | Find only request more recent than number of days, default - search for all

try {
    $result = $api_instance->reportsSkillv1reportsbranchesbranchId($branch_id, $include_descendant, $lang, $threshold_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbranchesbranchId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| ID of a branch |
 **include_descendant** | **int**| Options 0 or 1. To include or not descendant branches. Default - 0 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **threshold_days** | **int**| Find only request more recent than number of days, default - search for all | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsBranchReportResponse**](../Model/SkillReportsBranchReportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsbranchesbranchIdskillsskillId**
> \Swagger\Client\Model\SkillReportsBranchReportDetailViewResponse reportsSkillv1reportsbranchesbranchIdskillsskillId($branch_id, $skill_id, $type, $user_ids)

Retrieves the list of users with a knowledge gap for a Skill in a Branch

This web service can return both missing evaluations or gaps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$branch_id = 56; // int | Numeric ID of a branch
$skill_id = 56; // int | Numeric ID of a skill
$type = "type_example"; // string | Search type, returns only: 'sm' (missing self evaluation), 'sg' (self gaps), 'mm' (missing manager evaluation) or 'mg' (manager gaps)
$user_ids = array(56); // int[] | Array with user ids

try {
    $result = $api_instance->reportsSkillv1reportsbranchesbranchIdskillsskillId($branch_id, $skill_id, $type, $user_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbranchesbranchIdskillsskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| Numeric ID of a branch |
 **skill_id** | **int**| Numeric ID of a skill |
 **type** | **string**| Search type, returns only: &#39;sm&#39; (missing self evaluation), &#39;sg&#39; (self gaps), &#39;mm&#39; (missing manager evaluation) or &#39;mg&#39; (manager gaps) |
 **user_ids** | [**int[]**](../Model/int.md)| Array with user ids |

### Return type

[**\Swagger\Client\Model\SkillReportsBranchReportDetailViewResponse**](../Model/SkillReportsBranchReportDetailViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsbranchesroles**
> \Swagger\Client\Model\SkillReportsBranchesRolesReportResponse reportsSkillv1reportsbranchesroles($branch_id, $lang)

Retrieves the Roles of one or more Branches

Get the list of roles assigned to the users of the branches. This web service doesn't return what roles are assigned to a branch for the power user configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$branch_id = array(56); // int[] | required ID of branch to fetch
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->reportsSkillv1reportsbranchesroles($branch_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbranchesroles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | [**int[]**](../Model/int.md)| required ID of branch to fetch |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsBranchesRolesReportResponse**](../Model/SkillReportsBranchesRolesReportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsbranchesrolesroleId**
> \Swagger\Client\Model\SkillReportsBranchesRoleDetailsReportResponse reportsSkillv1reportsbranchesrolesroleId($role_id, $branch_id)

Retrieves the List of Users of a Role by Branch(-es)

Get the list of users that have a specific role inside a specific branch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$role_id = 56; // int | role_id to search
$branch_id = array(56); // int[] | required ID of branch(-es) to fetch

try {
    $result = $api_instance->reportsSkillv1reportsbranchesrolesroleId($role_id, $branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsbranchesrolesroleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| role_id to search |
 **branch_id** | [**int[]**](../Model/int.md)| required ID of branch(-es) to fetch |

### Return type

[**\Swagger\Client\Model\SkillReportsBranchesRoleDetailsReportResponse**](../Model/SkillReportsBranchesRoleDetailsReportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibration**
> \Swagger\Client\Model\SkillReportsListCalibrationResponse reportsSkillv1reportscalibration($mmi_threshold, $role_id, $skill_id, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text, $misalignment)

List of managers calibration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$mmi_threshold = 56; // int | If the MMI calculated for a manager is =&gt; this value will be returned the status &quot;To Calibrate&quot;; Default: 4
$role_id = 56; // int | in case the role is passed should be returned only the list of managers that have subordinates in the selected role
$skill_id = 56; // int | Returns only the roles that have this skill
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - role_id, role_name, manager_id, manager_name, manager_email. Options: manager_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default - LMS default(i.e. 10)
$filters = "filters_example"; // string | URL encoded filter - role_name('contains' or 'not_contains'), manager_name('contains' or 'not_contains')
$search_text = "search_text_example"; // string | Search by text given(a text to search in manager_name)
$misalignment = "misalignment_example"; // string | Show only misalignment. Options: 0(show all), 1(show only misaligned). Default: 0

try {
    $result = $api_instance->reportsSkillv1reportscalibration($mmi_threshold, $role_id, $skill_id, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text, $misalignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mmi_threshold** | **int**| If the MMI calculated for a manager is &#x3D;&amp;gt; this value will be returned the status &amp;quot;To Calibrate&amp;quot;; Default: 4 | [optional]
 **role_id** | **int**| in case the role is passed should be returned only the list of managers that have subordinates in the selected role | [optional]
 **skill_id** | **int**| Returns only the roles that have this skill | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - role_id, role_name, manager_id, manager_name, manager_email. Options: manager_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default - LMS default(i.e. 10) | [optional]
 **filters** | **string**| URL encoded filter - role_name(&#39;contains&#39; or &#39;not_contains&#39;), manager_name(&#39;contains&#39; or &#39;not_contains&#39;) | [optional]
 **search_text** | **string**| Search by text given(a text to search in manager_name) | [optional]
 **misalignment** | **string**| Show only misalignment. Options: 0(show all), 1(show only misaligned). Default: 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListCalibrationResponse**](../Model/SkillReportsListCalibrationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibrationid**
> \Swagger\Client\Model\SkillReportsCalibrateManagerResponse reportsSkillv1reportscalibrationid($id)

Calibrate Manager Requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Id of the evaluating manager

try {
    $result = $api_instance->reportsSkillv1reportscalibrationid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibrationid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the evaluating manager |

### Return type

[**\Swagger\Client\Model\SkillReportsCalibrateManagerResponse**](../Model/SkillReportsCalibrateManagerResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibrationidskills**
> \Swagger\Client\Model\SkillReportsListCalibrationSkillsResponse reportsSkillv1reportscalibrationidskills($id, $mmi_low, $mmi_high, $status, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text)

List of Skills In Managers Calibration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Manager id
$mmi_low = 56; // int | Skills with MMI below this value are aligned; Default: 0.5
$mmi_high = 56; // int | Skills with MMI above this value are (strong) disaligned; Default: 2
$status = "status_example"; // string | Available statuses to do filtering - 'no-data' , 'disaligned', 'slighty-disaliged' or 'aligned'; Default: no status set(returns all statuses at once)
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - username. Options: username
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default - LMS default(i.e. 10)
$filters = "filters_example"; // string | URL encoded filter
$search_text = "search_text_example"; // string | Search by text given(a text to search in skill name)

try {
    $result = $api_instance->reportsSkillv1reportscalibrationidskills($id, $mmi_low, $mmi_high, $status, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibrationidskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Manager id |
 **mmi_low** | **int**| Skills with MMI below this value are aligned; Default: 0.5 | [optional]
 **mmi_high** | **int**| Skills with MMI above this value are (strong) disaligned; Default: 2 | [optional]
 **status** | **string**| Available statuses to do filtering - &#39;no-data&#39; , &#39;disaligned&#39;, &#39;slighty-disaliged&#39; or &#39;aligned&#39;; Default: no status set(returns all statuses at once) | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - username. Options: username | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default - LMS default(i.e. 10) | [optional]
 **filters** | **string**| URL encoded filter | [optional]
 **search_text** | **string**| Search by text given(a text to search in skill name) | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListCalibrationSkillsResponse**](../Model/SkillReportsListCalibrationSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibrationidskillsid2**
> \Swagger\Client\Model\SkillReportsViewCalibrationSkillResponse reportsSkillv1reportscalibrationidskillsid2($id, $id2, $critical, $ignore_no_data, $search_text)

View latest evaluation comparison (Skill)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Id of the evaluating manager
$id2 = 56; // int | Id of the evaluated skill
$critical = 56; // int | Show only critical skills data. Default - 0 (show all)
$ignore_no_data = 56; // int | Show only users with data. Default - 0 (show all).
$search_text = 56; // int | Search by text

try {
    $result = $api_instance->reportsSkillv1reportscalibrationidskillsid2($id, $id2, $critical, $ignore_no_data, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibrationidskillsid2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the evaluating manager |
 **id2** | **int**| Id of the evaluated skill |
 **critical** | **int**| Show only critical skills data. Default - 0 (show all) | [optional]
 **ignore_no_data** | **int**| Show only users with data. Default - 0 (show all). | [optional]
 **search_text** | **int**| Search by text | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsViewCalibrationSkillResponse**](../Model/SkillReportsViewCalibrationSkillResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibrationidusers**
> \Swagger\Client\Model\SkillReportsListCalibrationUsersResponse reportsSkillv1reportscalibrationidusers($id, $mmi_low, $mmi_high, $status, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text)

List of Users In Managers Calibration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Manager id
$mmi_low = 56; // int | Users with MMI below this value are aligned; Default: 0.5
$mmi_high = 56; // int | Users with MMI above this value are (strong) disaligned; Default: 2
$status = "status_example"; // string | Available statuses to do filtering - 'no-data' , 'disaligned', 'slighty-disaliged' or 'aligned'; Default: no status set(returns all statuses at once)
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - username. Options: username
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default - LMS default(i.e. 10)
$filters = "filters_example"; // string | URL encoded filter -
$search_text = "search_text_example"; // string | Search by text given(a text to search in names, email, role)

try {
    $result = $api_instance->reportsSkillv1reportscalibrationidusers($id, $mmi_low, $mmi_high, $status, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibrationidusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Manager id |
 **mmi_low** | **int**| Users with MMI below this value are aligned; Default: 0.5 | [optional]
 **mmi_high** | **int**| Users with MMI above this value are (strong) disaligned; Default: 2 | [optional]
 **status** | **string**| Available statuses to do filtering - &#39;no-data&#39; , &#39;disaligned&#39;, &#39;slighty-disaliged&#39; or &#39;aligned&#39;; Default: no status set(returns all statuses at once) | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - username. Options: username | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default - LMS default(i.e. 10) | [optional]
 **filters** | **string**| URL encoded filter - | [optional]
 **search_text** | **string**| Search by text given(a text to search in names, email, role) | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListCalibrationUsersResponse**](../Model/SkillReportsListCalibrationUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportscalibrationidusersid2**
> \Swagger\Client\Model\SkillReportsViewCalibrationUserResponse reportsSkillv1reportscalibrationidusersid2($id, $id2, $critical, $ignore_no_data, $search_text)

View latest evaluation comparison (User)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Id of the evaluating manager
$id2 = 56; // int | Id of the evaluated user
$critical = 56; // int | Show only critical skills data. Default - 0 (show all)
$ignore_no_data = 56; // int | Show only skills with data. Default - 0 (show all).
$search_text = 56; // int | Search by text in skill title and description

try {
    $result = $api_instance->reportsSkillv1reportscalibrationidusersid2($id, $id2, $critical, $ignore_no_data, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportscalibrationidusersid2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the evaluating manager |
 **id2** | **int**| Id of the evaluated user |
 **critical** | **int**| Show only critical skills data. Default - 0 (show all) | [optional]
 **ignore_no_data** | **int**| Show only skills with data. Default - 0 (show all). | [optional]
 **search_text** | **int**| Search by text in skill title and description | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsViewCalibrationUserResponse**](../Model/SkillReportsViewCalibrationUserResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsjoharimanagersmanagerId**
> \Swagger\Client\Model\SkillReportsJohariManagerResponse reportsSkillv1reportsjoharimanagersmanagerId($manager_id, $wr, $wy)

Calculates the Calibration Matrix for all of the Subordinates of a Manager

The report is calculated for all of the skills that were evaluated by the manager. If the correspondent user self-evaluation is missing the skill, the missing user ID is returned. Calibration Matrix is a report used to compare the self-evaluation against the manager-evaluation. The output is the count of skills evaluations that fall in each cell Matrix. Cell description (M=Manager, S=Self)  (E=Expert, K=Know, Sufficient Knowledge, D=Don't Know, Insufficient Knowledge) 0: M:N, S:E, 1: M:K,S:E 2: M:E,S:E 3: M:N,S:K 4: M:K,S:K 5: M:E,S:K  6: M:D,S:D 7: M:K,S:D   8: M:E,S:D . Items are in cells 0 and 8 when there are strong misalignment between the Manager and the User; Info is placed in cells 1, 3, 7 and 5 when there is a minor misaligment. The Manager Misaligment Index (MMI) is also calculated; this value increases according to the misalignment of the manager view with the user view. Weight values can be changed to tune the calculation sensibility on specific requirements, default values are suggested for non specific scenarios.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$manager_id = 56; // int | ID of the manager
$wr = 56; // int | Number (weight of strong misalignment cells in the calculation), default =2
$wy = 56; // int | Number (weight of medium misalignment cells in the calculation), default =0.25

try {
    $result = $api_instance->reportsSkillv1reportsjoharimanagersmanagerId($manager_id, $wr, $wy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsjoharimanagersmanagerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| ID of the manager |
 **wr** | **int**| Number (weight of strong misalignment cells in the calculation), default &#x3D;2 | [optional]
 **wy** | **int**| Number (weight of medium misalignment cells in the calculation), default &#x3D;0.25 | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsJohariManagerResponse**](../Model/SkillReportsJohariManagerResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsjoharimanagersmanagerIdcellscellId**
> \Swagger\Client\Model\SkillReportsJohariManagerDetailedResponse reportsSkillv1reportsjoharimanagersmanagerIdcellscellId($manager_id, $cell_id, $wr, $wy)

Retrieves the list of Skills in one cell of the Calibration Matrix Manager report



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$manager_id = 56; // int | ID of the manager
$cell_id = 56; // int | Select the cell - 0, 1 ... 8
$wr = 56; // int | Number (weight of strong misalignment cells in the calculation), default =2
$wy = 56; // int | Number (weight of medium misalignment cells in the calculation), default =0.25

try {
    $result = $api_instance->reportsSkillv1reportsjoharimanagersmanagerIdcellscellId($manager_id, $cell_id, $wr, $wy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsjoharimanagersmanagerIdcellscellId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| ID of the manager |
 **cell_id** | **int**| Select the cell - 0, 1 ... 8 |
 **wr** | **int**| Number (weight of strong misalignment cells in the calculation), default &#x3D;2 | [optional]
 **wy** | **int**| Number (weight of medium misalignment cells in the calculation), default &#x3D;0.25 | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsJohariManagerDetailedResponse**](../Model/SkillReportsJohariManagerDetailedResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsjohariusersuserId**
> \Swagger\Client\Model\SkillReportsJohariEmployeeResponse reportsSkillv1reportsjohariusersuserId($user_id, $role_id, $wr, $wy)

Calculates the Calibration Matrix of an User

In case that a role is not passed, the user's current role is used. Calibration Matrix is a report used to compare the self evaluation against the manager evaluation. The output is the list of skills contained in each cell of the matrix. Cells description (M=Manager, S=Self) (E=Expert, K=Know, Sufficient Knowledge, D=Don't Know, Insufficient Knowledge) 0: M:N, S:E, 1: M:K,S:E 2: M:E,S:E 3: M:N,S:K 4: M:K,S:K 5: M:E,S:K  6: M:D,S:D 7: M:K,S:D   8: M:E,S:D . Items are in cells 0 and 8 when there are strong misaligments between the Manager and the User; items are in cells 1, 3, 7 and 5 when there is a minor misalignment. In the output, a list of missing evaluations is also provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$user_id = 56; // int | ID of the user
$role_id = 56; // int | ID of the requested role
$wr = 56; // int | Number (weight of strong misalignment cells in the calculation), default =2
$wy = 56; // int | Number (weight of medium misalignment cells in the calculation), default =0.25

try {
    $result = $api_instance->reportsSkillv1reportsjohariusersuserId($user_id, $role_id, $wr, $wy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsjohariusersuserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |
 **role_id** | **int**| ID of the requested role | [optional]
 **wr** | **int**| Number (weight of strong misalignment cells in the calculation), default &#x3D;2 | [optional]
 **wy** | **int**| Number (weight of medium misalignment cells in the calculation), default &#x3D;0.25 | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsJohariEmployeeResponse**](../Model/SkillReportsJohariEmployeeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsroleidskills**
> \Swagger\Client\Model\SkillReportsListRoleSkillsResponse reportsSkillv1reportsroleidskills($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves all Roles from all roles who should have the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - gap_users. Options: skill_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->reportsSkillv1reportsroleidskills($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsroleidskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - gap_users. Options: skill_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListRoleSkillsResponse**](../Model/SkillReportsListRoleSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsroleidusers**
> \Swagger\Client\Model\SkillReportsListRoleUsersResponse reportsSkillv1reportsroleidusers($id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $user_rating, $skill_id)

Retrieves Report for all Users in a role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Role ID for the report
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - user_id. Options: username, login_name, first_name, last_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$user_rating = "user_rating_example"; // string | Filter users. Options: gap, aligned, expert
$skill_id = 56; // int | Filter users with the given skill ID

try {
    $result = $api_instance->reportsSkillv1reportsroleidusers($id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $user_rating, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsroleidusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Role ID for the report |
 **sort_attr** | **string**| Sort by this field, default value - user_id. Options: username, login_name, first_name, last_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **user_rating** | **string**| Filter users. Options: gap, aligned, expert | [optional]
 **skill_id** | **int**| Filter users with the given skill ID | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListRoleUsersResponse**](../Model/SkillReportsListRoleUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsrolesroleId**
> \Swagger\Client\Model\SkillReportsRoleReportResponse reportsSkillv1reportsrolesroleId($role_id, $threshold_days, $lang)

Calculates the Knowledge Gaps for a Role

For a single role, returns each skill of the role, how many users are in that role, and members that have received a &quot;don't know&quot; evaluation (both self and manager evaluation results are provided). A list of the skills that are missing from the manager or employee evaluation is also provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$role_id = 56; // int | Required ID of role to fetch
$threshold_days = 56; // int | Use only evaluations more recent than number of days for the calculation (default= all)
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->reportsSkillv1reportsrolesroleId($role_id, $threshold_days, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsrolesroleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Required ID of role to fetch |
 **threshold_days** | **int**| Use only evaluations more recent than number of days for the calculation (default&#x3D; all) | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsRoleReportResponse**](../Model/SkillReportsRoleReportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsrolesroleIdskillsskillId**
> \Swagger\Client\Model\SkillReportsRoleReportDetailViewResponse reportsSkillv1reportsrolesroleIdskillsskillId($role_id, $skill_id, $detail_type, $threshold_days, $lang)

Retrieves the list of Users with a knowledge gap for a Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$role_id = 56; // int | Required ID of role to fetch
$skill_id = 56; // int | Required ID of skill to fetch
$detail_type = "detail_type_example"; // string | Options: &quot;self_missing&quot;, &quot;manager_missing&quot;, &quot;link_self&quot;, &quot;link_manager&quot;
$threshold_days = 56; // int | Use only evaluations more recent than number of days for the calculation (default= all)
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->reportsSkillv1reportsrolesroleIdskillsskillId($role_id, $skill_id, $detail_type, $threshold_days, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsrolesroleIdskillsskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Required ID of role to fetch |
 **skill_id** | **int**| Required ID of skill to fetch |
 **detail_type** | **string**| Options: &amp;quot;self_missing&amp;quot;, &amp;quot;manager_missing&amp;quot;, &amp;quot;link_self&amp;quot;, &amp;quot;link_manager&amp;quot; |
 **threshold_days** | **int**| Use only evaluations more recent than number of days for the calculation (default&#x3D; all) | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsRoleReportDetailViewResponse**](../Model/SkillReportsRoleReportDetailViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsskillidbranches**
> \Swagger\Client\Model\SkillReportsListSkillBranchesResponse reportsSkillv1reportsskillidbranches($sort_attr, $sort_dir, $page, $page_size, $lang)

Retrieves gaps by branches for the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - rating. Options: user_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->reportsSkillv1reportsskillidbranches($sort_attr, $sort_dir, $page, $page_size, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsskillidbranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - rating. Options: user_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListSkillBranchesResponse**](../Model/SkillReportsListSkillBranchesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsskillidroles**
> \Swagger\Client\Model\SkillReportsListSkillRolesResponse reportsSkillv1reportsskillidroles($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $branch_id, $selection_status, $role_id)

Retrieves all Roles from all roles who should have the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - gap_users. Options: role_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$branch_id = 56; // int | The ID of a branch
$selection_status = 56; // int | The status to get children. 1 - no children, 2 - with children. Default = 1
$role_id = 56; // int | To filter result by Role ID

try {
    $result = $api_instance->reportsSkillv1reportsskillidroles($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $branch_id, $selection_status, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsskillidroles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - gap_users. Options: role_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **branch_id** | **int**| The ID of a branch | [optional]
 **selection_status** | **int**| The status to get children. 1 - no children, 2 - with children. Default &#x3D; 1 | [optional]
 **role_id** | **int**| To filter result by Role ID | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListSkillRolesResponse**](../Model/SkillReportsListSkillRolesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsskillidusers**
> \Swagger\Client\Model\SkillReportsListSkillUsersResponse reportsSkillv1reportsskillidusers($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $user_rating, $role_id)

Retrieves all Users from all roles who should have the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - rating. Options: user_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$user_rating = "user_rating_example"; // string | Filter users. Options: gap, aligned, expert
$role_id = 56; // int | Filter users with this role

try {
    $result = $api_instance->reportsSkillv1reportsskillidusers($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $user_rating, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsskillidusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - rating. Options: user_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **user_rating** | **string**| Filter users. Options: gap, aligned, expert | [optional]
 **role_id** | **int**| Filter users with this role | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListSkillUsersResponse**](../Model/SkillReportsListSkillUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsskillsgaps**
> \Swagger\Client\Model\SkillReportsListSkillsGapsResponse reportsSkillv1reportsskillsgaps($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rating, $skill_title, $role_id, $filters)

Retrieves all Roles from all roles who should have the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - rating. Options: user_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$rating = "rating_example"; // string | to filter skill list based on their ratings. Options: low, medium, high
$skill_title = "skill_title_example"; // string | to filter skill list based on skill name
$role_id = 56; // int | to filter skill list based on role id
$filters = "filters_example"; // string | URL encoded filter by: role_name('contains', 'not contains')

try {
    $result = $api_instance->reportsSkillv1reportsskillsgaps($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rating, $skill_title, $role_id, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsskillsgaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - rating. Options: user_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **rating** | **string**| to filter skill list based on their ratings. Options: low, medium, high | [optional]
 **skill_title** | **string**| to filter skill list based on skill name | [optional]
 **role_id** | **int**| to filter skill list based on role id | [optional]
 **filters** | **string**| URL encoded filter by: role_name(&#39;contains&#39;, &#39;not contains&#39;) | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListSkillsGapsResponse**](../Model/SkillReportsListSkillsGapsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSkillv1reportsskillsidgaps**
> \Swagger\Client\Model\SkillReportsListUsersGapsResponse reportsSkillv1reportsskillsidgaps($id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rating, $filters, $username, $role_id)

Retrieves all Users from all roles who should have the given skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ReportsApi();
$id = 56; // int | Skill ID
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - username. Options: username, role_name, user_status
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default from system settings, max 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$rating = "rating_example"; // string | to filter skill list based on their ratings. Options: gap, aligned, expert, not evaluated
$filters = "filters_example"; // string | URL encoded filter. This rewrites rating parameter.
$username = "username_example"; // string | to filter by username
$role_id = 56; // int | to filter skill list based on role

try {
    $result = $api_instance->reportsSkillv1reportsskillsidgaps($id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rating, $filters, $username, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsSkillv1reportsskillsidgaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Skill ID |
 **sort_attr** | **string**| Sort by this field, default value - username. Options: username, role_name, user_status | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default from system settings, max 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **rating** | **string**| to filter skill list based on their ratings. Options: gap, aligned, expert, not evaluated | [optional]
 **filters** | **string**| URL encoded filter. This rewrites rating parameter. | [optional]
 **username** | **string**| to filter by username | [optional]
 **role_id** | **int**| to filter skill list based on role | [optional]

### Return type

[**\Swagger\Client\Model\SkillReportsListUsersGapsResponse**](../Model/SkillReportsListUsersGapsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

