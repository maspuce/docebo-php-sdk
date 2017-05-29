# Swagger\Client\OrgchartApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orgchartManagev1orgchart**](OrgchartApi.md#orgchartManagev1orgchart) | **GET** /manage/v1/orgchart | List of branches of given or root level
[**orgchartManagev1orgchart_0**](OrgchartApi.md#orgchartManagev1orgchart_0) | **POST** /manage/v1/orgchart | Create a org chart node.
[**orgchartManagev1orgchartassignUsers**](OrgchartApi.md#orgchartManagev1orgchartassignUsers) | **POST** /manage/v1/orgchart/assign_users | Assigns a collection of user ids to the specified node.
[**orgchartManagev1orgchartbranchId**](OrgchartApi.md#orgchartManagev1orgchartbranchId) | **PUT** /manage/v1/orgchart/{branch_id} | Update selected branch.
[**orgchartManagev1orgchartbranchId_0**](OrgchartApi.md#orgchartManagev1orgchartbranchId_0) | **GET** /manage/v1/orgchart/{branch_id} | Get details of a selected branch.
[**orgchartManagev1orgchartbranchIdfieldVisibility**](OrgchartApi.md#orgchartManagev1orgchartbranchIdfieldVisibility) | **POST** /manage/v1/orgchart/{branch_id}/field_visibility | Assign user fields to branch/group
[**orgchartManagev1orgchartbranchIdusers**](OrgchartApi.md#orgchartManagev1orgchartbranchIdusers) | **GET** /manage/v1/orgchart/{branch_id}/users | Retrieve information about a branch&#39;s users.
[**orgchartManagev1orgchartid**](OrgchartApi.md#orgchartManagev1orgchartid) | **DELETE** /manage/v1/orgchart/{id} | Deletes the branch.
[**orgchartManagev1orgchartidmove**](OrgchartApi.md#orgchartManagev1orgchartidmove) | **POST** /manage/v1/orgchart/{id}/move | Move and org chart under a new parent node.


# **orgchartManagev1orgchart**
> \Swagger\Client\Model\ManageOrgchartIndexResponse orgchartManagev1orgchart($node_id, $lang, $search_text, $preselected, $get_actions)

List of branches of given or root level



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$node_id = 56; // int | ID ot the idOrg of the branch
$lang = "lang_example"; // string | Language for translating name of branches(browser code)
$search_text = "search_text_example"; // string | Search text in the branch title.
$preselected = array("preselected_example"); // string[] | Array of preselected nodes
$get_actions = true; // bool | Identify if the actions should be returned in the response

try {
    $result = $api_instance->orgchartManagev1orgchart($node_id, $lang, $search_text, $preselected, $get_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| ID ot the idOrg of the branch | [optional]
 **lang** | **string**| Language for translating name of branches(browser code) | [optional]
 **search_text** | **string**| Search text in the branch title. | [optional]
 **preselected** | [**string[]**](../Model/string.md)| Array of preselected nodes | [optional]
 **get_actions** | **bool**| Identify if the actions should be returned in the response | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartIndexResponse**](../Model/ManageOrgchartIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchart_0**
> \Swagger\Client\Model\ManageOrgchartCreateResponse orgchartManagev1orgchart_0($body)

Create a org chart node.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$body = new \Swagger\Client\Model\ManageOrgchartCreateSchema(); // \Swagger\Client\Model\ManageOrgchartCreateSchema | Raw Body

try {
    $result = $api_instance->orgchartManagev1orgchart_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchart_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageOrgchartCreateSchema**](../Model/\Swagger\Client\Model\ManageOrgchartCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartCreateResponse**](../Model/ManageOrgchartCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartassignUsers**
> \Swagger\Client\Model\ManageOrgchartAssignUsersResponse orgchartManagev1orgchartassignUsers($body)

Assigns a collection of user ids to the specified node.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$body = new \Swagger\Client\Model\ManageOrgchartAssignUsersSchema(); // \Swagger\Client\Model\ManageOrgchartAssignUsersSchema | Raw Body

try {
    $result = $api_instance->orgchartManagev1orgchartassignUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartassignUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageOrgchartAssignUsersSchema**](../Model/\Swagger\Client\Model\ManageOrgchartAssignUsersSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartAssignUsersResponse**](../Model/ManageOrgchartAssignUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartbranchId**
> \Swagger\Client\Model\ManageOrgchartUpdateResponse orgchartManagev1orgchartbranchId($branch_id, $body)

Update selected branch.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$branch_id = 56; // int | Id of selected branch.
$body = new \Swagger\Client\Model\ManageOrgchartUpdateSchema(); // \Swagger\Client\Model\ManageOrgchartUpdateSchema | Raw Body

try {
    $result = $api_instance->orgchartManagev1orgchartbranchId($branch_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartbranchId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| Id of selected branch. |
 **body** | [**\Swagger\Client\Model\ManageOrgchartUpdateSchema**](../Model/\Swagger\Client\Model\ManageOrgchartUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartUpdateResponse**](../Model/ManageOrgchartUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartbranchId_0**
> \Swagger\Client\Model\ManageOrgchartViewResponse orgchartManagev1orgchartbranchId_0($branch_id)

Get details of a selected branch.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$branch_id = 56; // int | ID of the branch

try {
    $result = $api_instance->orgchartManagev1orgchartbranchId_0($branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartbranchId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| ID of the branch |

### Return type

[**\Swagger\Client\Model\ManageOrgchartViewResponse**](../Model/ManageOrgchartViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartbranchIdfieldVisibility**
> \Swagger\Client\Model\ManageOrgchartAssignFieldResponse orgchartManagev1orgchartbranchIdfieldVisibility($branch_id, $body)

Assign user fields to branch/group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$branch_id = 56; // int | ID of the branch or ID of the group
$body = new \Swagger\Client\Model\ManageOrgchartAssignFieldSchema(); // \Swagger\Client\Model\ManageOrgchartAssignFieldSchema | Raw Body

try {
    $result = $api_instance->orgchartManagev1orgchartbranchIdfieldVisibility($branch_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartbranchIdfieldVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| ID of the branch or ID of the group |
 **body** | [**\Swagger\Client\Model\ManageOrgchartAssignFieldSchema**](../Model/\Swagger\Client\Model\ManageOrgchartAssignFieldSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartAssignFieldResponse**](../Model/ManageOrgchartAssignFieldResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartbranchIdusers**
> \Swagger\Client\Model\ManageOrgchartGetUsersInBranchResponse orgchartManagev1orgchartbranchIdusers($branch_id, $only_first_level, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Retrieve information about a branch's users.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$branch_id = 56; // int | ID of the branch
$only_first_level = 56; // int | If this parameter is not provided then api will get also users in child branches
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->orgchartManagev1orgchartbranchIdusers($branch_id, $only_first_level, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartbranchIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_id** | **int**| ID of the branch |
 **only_first_level** | **int**| If this parameter is not provided then api will get also users in child branches | [optional]
 **sort_attr** | **string**| Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartGetUsersInBranchResponse**](../Model/ManageOrgchartGetUsersInBranchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartid**
> \Swagger\Client\Model\ManageOrgchartDeleteResponse orgchartManagev1orgchartid($id)

Deletes the branch.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$id = 56; // int | ID of the branch to delete

try {
    $result = $api_instance->orgchartManagev1orgchartid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the branch to delete |

### Return type

[**\Swagger\Client\Model\ManageOrgchartDeleteResponse**](../Model/ManageOrgchartDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orgchartManagev1orgchartidmove**
> \Swagger\Client\Model\ManageOrgchartMoveResponse orgchartManagev1orgchartidmove($id, $body)

Move and org chart under a new parent node.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\OrgchartApi();
$id = 56; // int | Id of selected branch.
$body = new \Swagger\Client\Model\ManageOrgchartMoveSchema(); // \Swagger\Client\Model\ManageOrgchartMoveSchema | Raw Body

try {
    $result = $api_instance->orgchartManagev1orgchartidmove($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgchartApi->orgchartManagev1orgchartidmove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of selected branch. |
 **body** | [**\Swagger\Client\Model\ManageOrgchartMoveSchema**](../Model/\Swagger\Client\Model\ManageOrgchartMoveSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageOrgchartMoveResponse**](../Model/ManageOrgchartMoveResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

