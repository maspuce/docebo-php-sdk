# Swagger\Client\UserApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userManagev1managersmanagerIdusers**](UserApi.md#userManagev1managersmanagerIdusers) | **POST** /manage/v1/managers/{manager_id}/users | Assigns subordinates to an User
[**userManagev1user**](UserApi.md#userManagev1user) | **GET** /manage/v1/user | Returns list of Users
[**userManagev1user_0**](UserApi.md#userManagev1user_0) | **POST** /manage/v1/user | Create user
[**userManagev1useraddToBranch**](UserApi.md#userManagev1useraddToBranch) | **PUT** /manage/v1/user/add_to_branch | Adds users to branches
[**userManagev1userapprove**](UserApi.md#userManagev1userapprove) | **POST** /manage/v1/user/approve | Approve temporary users
[**userManagev1userbatch**](UserApi.md#userManagev1userbatch) | **POST** /manage/v1/user/batch | Batch import users
[**userManagev1userchangeStatus**](UserApi.md#userManagev1userchangeStatus) | **PUT** /manage/v1/user/change_status | Updates an user status
[**userManagev1usercheckUsernameuserid**](UserApi.md#userManagev1usercheckUsernameuserid) | **GET** /manage/v1/user/check_username/{userid} | Check if given username is free
[**userManagev1userconfirmEmail**](UserApi.md#userManagev1userconfirmEmail) | **POST** /manage/v1/user/confirm_email | Registration confirmation email
[**userManagev1userdelete**](UserApi.md#userManagev1userdelete) | **DELETE** /manage/v1/user/delete | Deletes an user
[**userManagev1userexport**](UserApi.md#userManagev1userexport) | **GET** /manage/v1/user/export | Export users
[**userManagev1userid**](UserApi.md#userManagev1userid) | **PUT** /manage/v1/user/{id} | Updates an existing user with the provided account information
[**userManagev1useridUsersettings**](UserApi.md#userManagev1useridUsersettings) | **GET** /manage/v1/user/{id_user}/settings | Get setting information about specific user.
[**userManagev1useridUsersettings_0**](UserApi.md#userManagev1useridUsersettings_0) | **POST** /manage/v1/user/{id_user}/settings | Set setting information about specific user.
[**userManagev1useridresend**](UserApi.md#userManagev1useridresend) | **POST** /manage/v1/user/{id}/resend | Resend registration email to a pending user
[**userManagev1userimporterFields**](UserApi.md#userManagev1userimporterFields) | **GET** /manage/v1/user/importer_fields | Returns list of mappable fields for the data importer
[**userManagev1userkeepAlive**](UserApi.md#userManagev1userkeepAlive) | **GET** /manage/v1/user/keep_alive | Keep user session alive
[**userManagev1userlogin**](UserApi.md#userManagev1userlogin) | **POST** /manage/v1/user/login | Generate access token for user, by provided username and password
[**userManagev1userlogout**](UserApi.md#userManagev1userlogout) | **POST** /manage/v1/user/logout | User logout
[**userManagev1usermanagerIdsubordinates**](UserApi.md#userManagev1usermanagerIdsubordinates) | **GET** /manage/v1/user/{manager_id}/subordinates | Retrieves all the subordinates of a Manager
[**userManagev1usermassEdit**](UserApi.md#userManagev1usermassEdit) | **PUT** /manage/v1/user/mass_edit | Updates an existing users with the provided account information
[**userManagev1usermoveToBranch**](UserApi.md#userManagev1usermoveToBranch) | **PUT** /manage/v1/user/move_to_branch | Move users from given branches to an other ones
[**userManagev1userregister**](UserApi.md#userManagev1userregister) | **POST** /manage/v1/user/register | User registration
[**userManagev1userreject**](UserApi.md#userManagev1userreject) | **DELETE** /manage/v1/user/reject | Reject temporary user
[**userManagev1userremoveFromBranch**](UserApi.md#userManagev1userremoveFromBranch) | **PUT** /manage/v1/user/remove_from_branch | Adds users to branches
[**userManagev1usersession**](UserApi.md#userManagev1usersession) | **GET** /manage/v1/user/session | Get specific information about currently logged user.
[**userManagev1usersuserIdmanagers**](UserApi.md#userManagev1usersuserIdmanagers) | **GET** /manage/v1/users/{user_id}/managers | Returns the manager of an employee
[**userManagev1usertempDetailsidUser**](UserApi.md#userManagev1usertempDetailsidUser) | **GET** /manage/v1/user/temp_details/{id_user} | Get information from temporary user.
[**userManagev1useruserId**](UserApi.md#userManagev1useruserId) | **GET** /manage/v1/user/{user_id} | View an User info
[**userManagev1useruserIdmergeuserId2**](UserApi.md#userManagev1useruserIdmergeuserId2) | **GET** /manage/v1/user/{user_id}/merge/{user_id_2} | Retrieve merge users detailed information included first chunk of enrollments, subscriptions, badges, transactions
[**userManagev1useruserIdmergeuserId2_0**](UserApi.md#userManagev1useruserIdmergeuserId2_0) | **PUT** /manage/v1/user/{user_id}/merge/{user_id_2} | Merge the data from one user to another
[**userManagev1useruserIdmergeuserId2badges**](UserApi.md#userManagev1useruserIdmergeuserId2badges) | **GET** /manage/v1/user/{user_id}/merge/{user_id_2}/badges | List merge users badges
[**userManagev1useruserIdmergeuserId2enrollments**](UserApi.md#userManagev1useruserIdmergeuserId2enrollments) | **GET** /manage/v1/user/{user_id}/merge/{user_id_2}/enrollments | Retrieve all course enrollments for users to merge
[**userManagev1useruserIdmergeuserId2subscriptions**](UserApi.md#userManagev1useruserIdmergeuserId2subscriptions) | **GET** /manage/v1/user/{user_id}/merge/{user_id_2}/subscriptions | Retrieve all subscriptions for users to merge
[**userManagev1useruserIdmergeuserId2transactions**](UserApi.md#userManagev1useruserIdmergeuserId2transactions) | **GET** /manage/v1/user/{user_id}/merge/{user_id_2}/transactions | List merge users transactions
[**userManagev1useruseridpassword**](UserApi.md#userManagev1useruseridpassword) | **POST** /manage/v1/user/{userid}/password | Change user password


# **userManagev1managersmanagerIdusers**
> \Swagger\Client\Model\ManageUserAssignSubordinatesResponse userManagev1managersmanagerIdusers($manager_id, $body)

Assigns subordinates to an User

Manager role will be assigned to the manager_id if is not already a manager.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$manager_id = 56; // int | Id of manager
$body = new \Swagger\Client\Model\ManageUserAssignSubordinatesSchema(); // \Swagger\Client\Model\ManageUserAssignSubordinatesSchema | Raw Body

try {
    $result = $api_instance->userManagev1managersmanagerIdusers($manager_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1managersmanagerIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| Id of manager |
 **body** | [**\Swagger\Client\Model\ManageUserAssignSubordinatesSchema**](../Model/\Swagger\Client\Model\ManageUserAssignSubordinatesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserAssignSubordinatesResponse**](../Model/ManageUserAssignSubordinatesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1user**
> \Swagger\Client\Model\ManageUserIndexResponse userManagev1user($pending, $branch_id, $selection_status, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $search_text, $filters, $exclude, $exclude_power_users_and_super_admins)

Returns list of Users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$pending = 56; // int | Get &quot;pending&quot; users OR all others. Options: 0 - false, 1 - true. Default value: false
$branch_id = 56; // int | Filtering by branch ID
$selection_status = 56; // int | Branches with children or not. Options: 1 - without children, 2 - with children. Default: 1
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$search_text = "search_text_example"; // string | Text to search in first name, last name and username of the users
$filters = "filters_example"; // string | serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} )
$exclude = array(56); // int[] | List of user IDs to exclude from result
$exclude_power_users_and_super_admins = 56; // int | Exclude all power users and super admins from result. Default: disabled

try {
    $result = $api_instance->userManagev1user($pending, $branch_id, $selection_status, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $search_text, $filters, $exclude, $exclude_power_users_and_super_admins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1user: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pending** | **int**| Get &amp;quot;pending&amp;quot; users OR all others. Options: 0 - false, 1 - true. Default value: false | [optional]
 **branch_id** | **int**| Filtering by branch ID | [optional]
 **selection_status** | **int**| Branches with children or not. Options: 1 - without children, 2 - with children. Default: 1 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **search_text** | **string**| Text to search in first name, last name and username of the users | [optional]
 **filters** | **string**| serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} ) | [optional]
 **exclude** | [**int[]**](../Model/int.md)| List of user IDs to exclude from result | [optional]
 **exclude_power_users_and_super_admins** | **int**| Exclude all power users and super admins from result. Default: disabled | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserIndexResponse**](../Model/ManageUserIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1user_0**
> \Swagger\Client\Model\ManageUserCreateResponse userManagev1user_0($body)

Create user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserCreateSchema(); // \Swagger\Client\Model\ManageUserCreateSchema | Raw Body

try {
    $result = $api_instance->userManagev1user_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1user_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserCreateSchema**](../Model/\Swagger\Client\Model\ManageUserCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserCreateResponse**](../Model/ManageUserCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useraddToBranch**
> \Swagger\Client\Model\ManageUserAddToBranchResponse userManagev1useraddToBranch($body)

Adds users to branches



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserAddToBranchSchema(); // \Swagger\Client\Model\ManageUserAddToBranchSchema | Raw Body

try {
    $result = $api_instance->userManagev1useraddToBranch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useraddToBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserAddToBranchSchema**](../Model/\Swagger\Client\Model\ManageUserAddToBranchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserAddToBranchResponse**](../Model/ManageUserAddToBranchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userapprove**
> \Swagger\Client\Model\ManageUserApproveUserResponse userManagev1userapprove($body)

Approve temporary users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserApproveUserSchema(); // \Swagger\Client\Model\ManageUserApproveUserSchema | Raw Body

try {
    $result = $api_instance->userManagev1userapprove($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userapprove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserApproveUserSchema**](../Model/\Swagger\Client\Model\ManageUserApproveUserSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserApproveUserResponse**](../Model/ManageUserApproveUserResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userbatch**
> \Swagger\Client\Model\ManageUserBatchResponse userManagev1userbatch($body)

Batch import users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserBatchSchema(); // \Swagger\Client\Model\ManageUserBatchSchema | Raw Body

try {
    $result = $api_instance->userManagev1userbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserBatchSchema**](../Model/\Swagger\Client\Model\ManageUserBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserBatchResponse**](../Model/ManageUserBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userchangeStatus**
> \Swagger\Client\Model\ManageUserChangeStatusResponse userManagev1userchangeStatus($body)

Updates an user status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserChangeStatusSchema(); // \Swagger\Client\Model\ManageUserChangeStatusSchema | Raw Body

try {
    $result = $api_instance->userManagev1userchangeStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userchangeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserChangeStatusSchema**](../Model/\Swagger\Client\Model\ManageUserChangeStatusSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserChangeStatusResponse**](../Model/ManageUserChangeStatusResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usercheckUsernameuserid**
> \Swagger\Client\Model\ManageUserCheckUsernameResponse userManagev1usercheckUsernameuserid($userid)

Check if given username is free



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$userid = 56; // int | Username

try {
    $result = $api_instance->userManagev1usercheckUsernameuserid($userid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usercheckUsernameuserid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **int**| Username |

### Return type

[**\Swagger\Client\Model\ManageUserCheckUsernameResponse**](../Model/ManageUserCheckUsernameResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userconfirmEmail**
> \Swagger\Client\Model\ManageUserConfirmEmailResponse userManagev1userconfirmEmail($body)

Registration confirmation email



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserConfirmEmailSchema(); // \Swagger\Client\Model\ManageUserConfirmEmailSchema | Raw Body

try {
    $result = $api_instance->userManagev1userconfirmEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userconfirmEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserConfirmEmailSchema**](../Model/\Swagger\Client\Model\ManageUserConfirmEmailSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserConfirmEmailResponse**](../Model/ManageUserConfirmEmailResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userdelete**
> \Swagger\Client\Model\ManageUserDeleteResponse userManagev1userdelete($body)

Deletes an user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserDeleteSchema(); // \Swagger\Client\Model\ManageUserDeleteSchema | Raw Body

try {
    $result = $api_instance->userManagev1userdelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userdelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserDeleteSchema**](../Model/\Swagger\Client\Model\ManageUserDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserDeleteResponse**](../Model/ManageUserDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userexport**
> \Swagger\Client\Model\ManageUserExportResponse userManagev1userexport($user_ids, $additional_field_ids, $user_id, $username, $first_name, $last_name, $email, $creation_date, $expiration_date, $email_validation_status, $last_access_date, $language, $include_header, $export_format, $delimiter)

Export users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_ids = array(56); // int[] | User IDs to be exported
$additional_field_ids = array(56); // int[] | Additional fields IDs to be included in export
$user_id = 56; // int | If user ID must be included in export
$username = 56; // int | If username must be included in export
$first_name = 56; // int | If user first name must be included in export
$last_name = 56; // int | If user last name must be included in export
$email = 56; // int | If user email must be included in export
$creation_date = 56; // int | If user creation date must be included in export
$expiration_date = 56; // int | If user expiration date must be included in export
$email_validation_status = 56; // int | If user expiration date must be included in export
$last_access_date = 56; // int | If user last access date must be included in export
$language = 56; // int | If user last access date must be included in export
$include_header = 56; // int | Include or NOT naming of columns in csv/xls file
$export_format = "export_format_example"; // string | Format of exported file csv/xls file. Options: &quot;csv&quot; or &quot;xls&quot;. Default: &quot;xls&quot;
$delimiter = "delimiter_example"; // string | Delimiter for exported csv file/ Default: &quot;,&quot;

try {
    $result = $api_instance->userManagev1userexport($user_ids, $additional_field_ids, $user_id, $username, $first_name, $last_name, $email, $creation_date, $expiration_date, $email_validation_status, $last_access_date, $language, $include_header, $export_format, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userexport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_ids** | [**int[]**](../Model/int.md)| User IDs to be exported |
 **additional_field_ids** | [**int[]**](../Model/int.md)| Additional fields IDs to be included in export | [optional]
 **user_id** | **int**| If user ID must be included in export | [optional]
 **username** | **int**| If username must be included in export | [optional]
 **first_name** | **int**| If user first name must be included in export | [optional]
 **last_name** | **int**| If user last name must be included in export | [optional]
 **email** | **int**| If user email must be included in export | [optional]
 **creation_date** | **int**| If user creation date must be included in export | [optional]
 **expiration_date** | **int**| If user expiration date must be included in export | [optional]
 **email_validation_status** | **int**| If user expiration date must be included in export | [optional]
 **last_access_date** | **int**| If user last access date must be included in export | [optional]
 **language** | **int**| If user last access date must be included in export | [optional]
 **include_header** | **int**| Include or NOT naming of columns in csv/xls file | [optional]
 **export_format** | **string**| Format of exported file csv/xls file. Options: &amp;quot;csv&amp;quot; or &amp;quot;xls&amp;quot;. Default: &amp;quot;xls&amp;quot; | [optional]
 **delimiter** | **string**| Delimiter for exported csv file/ Default: &amp;quot;,&amp;quot; | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserExportResponse**](../Model/ManageUserExportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userid**
> \Swagger\Client\Model\ManageUserUpdateResponse userManagev1userid($id, $body)

Updates an existing user with the provided account information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 56; // int | Id of selected user.
$body = new \Swagger\Client\Model\ManageUserUpdateSchema(); // \Swagger\Client\Model\ManageUserUpdateSchema | Raw Body

try {
    $result = $api_instance->userManagev1userid($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of selected user. |
 **body** | [**\Swagger\Client\Model\ManageUserUpdateSchema**](../Model/\Swagger\Client\Model\ManageUserUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserUpdateResponse**](../Model/ManageUserUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useridUsersettings**
> \Swagger\Client\Model\ManageUserGetUserSettingsResponse userManagev1useridUsersettings($id_user)

Get setting information about specific user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id_user = 56; // int | ID of user to get settings

try {
    $result = $api_instance->userManagev1useridUsersettings($id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useridUsersettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **int**| ID of user to get settings |

### Return type

[**\Swagger\Client\Model\ManageUserGetUserSettingsResponse**](../Model/ManageUserGetUserSettingsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useridUsersettings_0**
> \Swagger\Client\Model\ManageUserSetUserSettingsResponse userManagev1useridUsersettings_0($id_user, $body)

Set setting information about specific user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id_user = 56; // int | ID of user to save settings
$body = new \Swagger\Client\Model\ManageUserSetUserSettingsSchema(); // \Swagger\Client\Model\ManageUserSetUserSettingsSchema | Raw Body

try {
    $result = $api_instance->userManagev1useridUsersettings_0($id_user, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useridUsersettings_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **int**| ID of user to save settings |
 **body** | [**\Swagger\Client\Model\ManageUserSetUserSettingsSchema**](../Model/\Swagger\Client\Model\ManageUserSetUserSettingsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserSetUserSettingsResponse**](../Model/ManageUserSetUserSettingsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useridresend**
> \Swagger\Client\Model\ManageUserResendResponse userManagev1useridresend($id)

Resend registration email to a pending user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 56; // int | Id of selected user.

try {
    $result = $api_instance->userManagev1useridresend($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useridresend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of selected user. |

### Return type

[**\Swagger\Client\Model\ManageUserResendResponse**](../Model/ManageUserResendResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userimporterFields**
> \Swagger\Client\Model\ManageUserImporterFieldsResponse userManagev1userimporterFields()

Returns list of mappable fields for the data importer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->userManagev1userimporterFields();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userimporterFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageUserImporterFieldsResponse**](../Model/ManageUserImporterFieldsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userkeepAlive**
> \Swagger\Client\Model\ManageUserKeepAliveResponse userManagev1userkeepAlive()

Keep user session alive



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->userManagev1userkeepAlive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userkeepAlive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageUserKeepAliveResponse**](../Model/ManageUserKeepAliveResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userlogin**
> \Swagger\Client\Model\ManageUserLoginResponse userManagev1userlogin($body)

Generate access token for user, by provided username and password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserLoginSchema(); // \Swagger\Client\Model\ManageUserLoginSchema | Raw Body

try {
    $result = $api_instance->userManagev1userlogin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userlogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserLoginSchema**](../Model/\Swagger\Client\Model\ManageUserLoginSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserLoginResponse**](../Model/ManageUserLoginResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userlogout**
> \Swagger\Client\Model\ManageUserLogoutResponse userManagev1userlogout()

User logout



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->userManagev1userlogout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userlogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageUserLogoutResponse**](../Model/ManageUserLogoutResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usermanagerIdsubordinates**
> \Swagger\Client\Model\ManageUserGetSubordinatesResponse userManagev1usermanagerIdsubordinates($manager_id, $hierarchy, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves all the subordinates of a Manager



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$manager_id = 56; // int | ID of manager to get subordinates
$hierarchy = 56; // int | Type of manager (1 for Direct manager, other codes reserved for future improvements). Default - 1
$sort_attr = "sort_attr_example"; // string | Sort by id, username, name, or email of user. Default - id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userManagev1usermanagerIdsubordinates($manager_id, $hierarchy, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usermanagerIdsubordinates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| ID of manager to get subordinates |
 **hierarchy** | **int**| Type of manager (1 for Direct manager, other codes reserved for future improvements). Default - 1 | [optional]
 **sort_attr** | **string**| Sort by id, username, name, or email of user. Default - id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserGetSubordinatesResponse**](../Model/ManageUserGetSubordinatesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usermassEdit**
> \Swagger\Client\Model\ManageUserMassEditResponse userManagev1usermassEdit($body)

Updates an existing users with the provided account information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserMassEditSchema(); // \Swagger\Client\Model\ManageUserMassEditSchema | Raw Body

try {
    $result = $api_instance->userManagev1usermassEdit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usermassEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserMassEditSchema**](../Model/\Swagger\Client\Model\ManageUserMassEditSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserMassEditResponse**](../Model/ManageUserMassEditResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usermoveToBranch**
> \Swagger\Client\Model\ManageUserMoveToBranchResponse userManagev1usermoveToBranch($body)

Move users from given branches to an other ones



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserMoveToBranchSchema(); // \Swagger\Client\Model\ManageUserMoveToBranchSchema | Raw Body

try {
    $result = $api_instance->userManagev1usermoveToBranch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usermoveToBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserMoveToBranchSchema**](../Model/\Swagger\Client\Model\ManageUserMoveToBranchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserMoveToBranchResponse**](../Model/ManageUserMoveToBranchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userregister**
> \Swagger\Client\Model\ManageUserRegisterResponse userManagev1userregister($body)

User registration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserRegisterSchema(); // \Swagger\Client\Model\ManageUserRegisterSchema | Raw Body

try {
    $result = $api_instance->userManagev1userregister($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userregister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserRegisterSchema**](../Model/\Swagger\Client\Model\ManageUserRegisterSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserRegisterResponse**](../Model/ManageUserRegisterResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userreject**
> \Swagger\Client\Model\ManageUserRejectUserResponse userManagev1userreject($body)

Reject temporary user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserRejectUserSchema(); // \Swagger\Client\Model\ManageUserRejectUserSchema | Raw Body

try {
    $result = $api_instance->userManagev1userreject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userreject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserRejectUserSchema**](../Model/\Swagger\Client\Model\ManageUserRejectUserSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserRejectUserResponse**](../Model/ManageUserRejectUserResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1userremoveFromBranch**
> \Swagger\Client\Model\ManageUserRemoveFromBranchResponse userManagev1userremoveFromBranch($body)

Adds users to branches



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$body = new \Swagger\Client\Model\ManageUserRemoveFromBranchSchema(); // \Swagger\Client\Model\ManageUserRemoveFromBranchSchema | Raw Body

try {
    $result = $api_instance->userManagev1userremoveFromBranch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1userremoveFromBranch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserRemoveFromBranchSchema**](../Model/\Swagger\Client\Model\ManageUserRemoveFromBranchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserRemoveFromBranchResponse**](../Model/ManageUserRemoveFromBranchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usersession**
> \Swagger\Client\Model\ManageUserSessionResponse userManagev1usersession()

Get specific information about currently logged user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->userManagev1usersession();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usersession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageUserSessionResponse**](../Model/ManageUserSessionResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usersuserIdmanagers**
> \Swagger\Client\Model\ManageUserGetManagerResponse userManagev1usersuserIdmanagers($hierarchy)

Returns the manager of an employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$hierarchy = 56; // int | Type of manager  (1 for Direct manager, other codes reserved for future improvements), default - 1

try {
    $result = $api_instance->userManagev1usersuserIdmanagers($hierarchy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usersuserIdmanagers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hierarchy** | **int**| Type of manager  (1 for Direct manager, other codes reserved for future improvements), default - 1 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserGetManagerResponse**](../Model/ManageUserGetManagerResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1usertempDetailsidUser**
> \Swagger\Client\Model\ManageUserTempDetailsResponse userManagev1usertempDetailsidUser($id_user)

Get information from temporary user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$id_user = 56; // int | ID of user

try {
    $result = $api_instance->userManagev1usertempDetailsidUser($id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1usertempDetailsidUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **int**| ID of user |

### Return type

[**\Swagger\Client\Model\ManageUserTempDetailsResponse**](../Model/ManageUserTempDetailsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserId**
> \Swagger\Client\Model\ManageUserViewResponse userManagev1useruserId($user_id)

View an User info



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the user

try {
    $result = $api_instance->userManagev1useruserId($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |

### Return type

[**\Swagger\Client\Model\ManageUserViewResponse**](../Model/ManageUserViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2**
> \Swagger\Client\Model\ManageUserDetailsResponse userManagev1useruserIdmergeuserId2($user_id, $user_id_2)

Retrieve merge users detailed information included first chunk of enrollments, subscriptions, badges, transactions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2($user_id, $user_id_2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |

### Return type

[**\Swagger\Client\Model\ManageUserDetailsResponse**](../Model/ManageUserDetailsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2_0**
> \Swagger\Client\Model\ManageUserMergeUsersResponse userManagev1useruserIdmergeuserId2_0($user_id, $user_id_2, $body)

Merge the data from one user to another



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user
$body = new \Swagger\Client\Model\ManageUserMergeUsersSchema(); // \Swagger\Client\Model\ManageUserMergeUsersSchema | Raw Body

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2_0($user_id, $user_id_2, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |
 **body** | [**\Swagger\Client\Model\ManageUserMergeUsersSchema**](../Model/\Swagger\Client\Model\ManageUserMergeUsersSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserMergeUsersResponse**](../Model/ManageUserMergeUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2badges**
> \Swagger\Client\Model\ManageUserListBadgesResponse userManagev1useruserIdmergeuserId2badges($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

List merge users badges



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, badge_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2badges($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2badges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, badge_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserListBadgesResponse**](../Model/ManageUserListBadgesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2enrollments**
> \Swagger\Client\Model\ManageUserListEnrollmentsResponse userManagev1useruserIdmergeuserId2enrollments($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Retrieve all course enrollments for users to merge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, course_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2enrollments($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2enrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, course_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserListEnrollmentsResponse**](../Model/ManageUserListEnrollmentsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2subscriptions**
> \Swagger\Client\Model\ManageUserListSubscriptionsResponse userManagev1useruserIdmergeuserId2subscriptions($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Retrieve all subscriptions for users to merge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, bundle_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2subscriptions($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2subscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, bundle_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserListSubscriptionsResponse**](../Model/ManageUserListSubscriptionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruserIdmergeuserId2transactions**
> \Swagger\Client\Model\ManageUserListTransactionsResponse userManagev1useruserIdmergeuserId2transactions($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

List merge users transactions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$user_id = 56; // int | ID of the source user
$user_id_2 = 56; // int | ID of the destination user
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, date_creation
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userManagev1useruserIdmergeuserId2transactions($user_id, $user_id_2, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruserIdmergeuserId2transactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the source user |
 **user_id_2** | **int**| ID of the destination user |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, date_creation | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserListTransactionsResponse**](../Model/ManageUserListTransactionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userManagev1useruseridpassword**
> \Swagger\Client\Model\ManageUserPasswordResponse userManagev1useruseridpassword($userid, $body)

Change user password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserApi();
$userid = "userid_example"; // string | The id of the user
$body = new \Swagger\Client\Model\ManageUserPasswordSchema(); // \Swagger\Client\Model\ManageUserPasswordSchema | Raw Body

try {
    $result = $api_instance->userManagev1useruseridpassword($userid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userManagev1useruseridpassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userid** | **string**| The id of the user |
 **body** | [**\Swagger\Client\Model\ManageUserPasswordSchema**](../Model/\Swagger\Client\Model\ManageUserPasswordSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserPasswordResponse**](../Model/ManageUserPasswordResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

