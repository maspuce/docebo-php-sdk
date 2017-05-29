# Swagger\Client\RoleApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roleSkillv1roles**](RoleApi.md#roleSkillv1roles) | **GET** /skill/v1/roles | Retrieves the list of Roles, filtered on input parameters
[**roleSkillv1roles_0**](RoleApi.md#roleSkillv1roles_0) | **POST** /skill/v1/roles | Creates a new Role
[**roleSkillv1roles_1**](RoleApi.md#roleSkillv1roles_1) | **DELETE** /skill/v1/roles | Deletes one or more Roles
[**roleSkillv1rolesidconfiguration**](RoleApi.md#roleSkillv1rolesidconfiguration) | **GET** /skill/v1/roles/{id}/configuration | Retrieves the details of a (Role) Evaluation Settings
[**roleSkillv1rolesidconfiguration_0**](RoleApi.md#roleSkillv1rolesidconfiguration_0) | **DELETE** /skill/v1/roles/{id}/configuration | Deletes one or more Roles
[**roleSkillv1rolesidevaluationstype**](RoleApi.md#roleSkillv1rolesidevaluationstype) | **GET** /skill/v1/roles/{id}/evaluations/{type} | Retrieves the list of Evaluation per Role and by given type, filtered on input parameters
[**roleSkillv1rolesrequeststypetype**](RoleApi.md#roleSkillv1rolesrequeststypetype) | **GET** /skill/v1/roles/requests/type/{type} | Count the Evaluation Requests per role, per type, by status
[**roleSkillv1rolesroleId**](RoleApi.md#roleSkillv1rolesroleId) | **GET** /skill/v1/roles/{role_id} | Retrieves the details of a Role
[**roleSkillv1rolesroleId_0**](RoleApi.md#roleSkillv1rolesroleId_0) | **PUT** /skill/v1/roles/{role_id} | Updates the details of a Role
[**roleSkillv1rolesroleIdbranches**](RoleApi.md#roleSkillv1rolesroleIdbranches) | **GET** /skill/v1/roles/{role_id}/branches | List Branches with a specific Role
[**roleSkillv1rolesroleIdbranchesbranchId**](RoleApi.md#roleSkillv1rolesroleIdbranchesbranchId) | **GET** /skill/v1/roles/{role_id}/branches/{branch_id} | Retrieves the list of Users with a specific Role in a specific Branch
[**roleSkillv1rolesroleIdconfiguration**](RoleApi.md#roleSkillv1rolesroleIdconfiguration) | **POST** /skill/v1/roles/{role_id}/configuration | Saves(Creates or Updates) a Role/Global Evaluation Configuration
[**roleSkillv1rolesroleIddelta**](RoleApi.md#roleSkillv1rolesroleIddelta) | **GET** /skill/v1/roles/{role_id}/delta | Retrieves the Skills not assigned to a Role
[**roleSkillv1rolesroleIdskills**](RoleApi.md#roleSkillv1rolesroleIdskills) | **GET** /skill/v1/roles/{role_id}/skills | Returns the list of required Skills of a specific Role
[**roleSkillv1rolesroleIdskills_0**](RoleApi.md#roleSkillv1rolesroleIdskills_0) | **POST** /skill/v1/roles/{role_id}/skills | Adds one or more required Skills to a Role
[**roleSkillv1rolesroleIdskills_1**](RoleApi.md#roleSkillv1rolesroleIdskills_1) | **DELETE** /skill/v1/roles/{role_id}/skills | Removes a required Skill from a Role
[**roleSkillv1rolesroleIdusers**](RoleApi.md#roleSkillv1rolesroleIdusers) | **GET** /skill/v1/roles/{role_id}/users | Lists the Users assigned to a Role
[**roleSkillv1rolesroleIdusers_0**](RoleApi.md#roleSkillv1rolesroleIdusers_0) | **POST** /skill/v1/roles/{role_id}/users | Assigns one or more Users to a Role
[**roleSkillv1rolesroleIdusers_1**](RoleApi.md#roleSkillv1rolesroleIdusers_1) | **DELETE** /skill/v1/roles/{role_id}/users | Removes Users assignation to a Role
[**roleSkillv1rolessimulator**](RoleApi.md#roleSkillv1rolessimulator) | **GET** /skill/v1/roles/simulator | Retrieves Global Evaluation Ratings
[**roleSkillv1rolesusers**](RoleApi.md#roleSkillv1rolesusers) | **GET** /skill/v1/roles/users | Returns list of Users


# **roleSkillv1roles**
> \Swagger\Client\Model\SkillRoleListResponse roleSkillv1roles($role_title, $role_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $role_status, $get_total_count, $role_id, $skill_id, $user_id, $branch_id, $exclude_role, $has_users, $has_not_skill, $filters, $search_text)

Retrieves the list of Roles, filtered on input parameters

All filter parameters are optional. If filter parameters are provided operation is OR between role_title and role_description and AND among other parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_title = array("role_title_example"); // string[] | Search text in the role title. Default empty array. OR is performed among multiple array items
$role_description = array("role_description_example"); // string[] | Search text in the role description. Default empty array. OR is performed among multiple array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - role_title. Options: role_title, id, role_description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$role_status = array(56); // int[] | Options: active roles -&gt; [1], inactive roles-&gt; [0], both-&gt; [0,1]. Default value-&gt;[0,1]
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$role_id = array(56); // int[] | Filter returned roles by role_id
$skill_id = array(56); // int[] | Filter returned roles by skills
$user_id = array(56); // int[] | Filter returned roles by employees
$branch_id = array(56); // int[] | Filter returned roles by branches
$exclude_role = 56; // int | Exclude role by given role id
$has_users = 56; // int | Return only roles with assigned users. Options: only roles with users assigned-&gt; [1], only roles with no users assigned-&gt; [0]
$has_not_skill = array(56); // int[] | Filter returned roles which have not skills assigned
$filters = "filters_example"; // string | URL encoded filter by: role_skills(['=', '!='], 0), role_status(['=', '!='], 0), role_users(['=', '!='], 0), username(user names), skill(name)
$search_text = "search_text_example"; // string | Search by text given(a text to search in title or description)

try {
    $result = $api_instance->roleSkillv1roles($role_title, $role_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $role_status, $get_total_count, $role_id, $skill_id, $user_id, $branch_id, $exclude_role, $has_users, $has_not_skill, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1roles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_title** | [**string[]**](../Model/string.md)| Search text in the role title. Default empty array. OR is performed among multiple array items | [optional]
 **role_description** | [**string[]**](../Model/string.md)| Search text in the role description. Default empty array. OR is performed among multiple array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - role_title. Options: role_title, id, role_description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **role_status** | [**int[]**](../Model/int.md)| Options: active roles -&amp;gt; [1], inactive roles-&amp;gt; [0], both-&amp;gt; [0,1]. Default value-&amp;gt;[0,1] | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **role_id** | [**int[]**](../Model/int.md)| Filter returned roles by role_id | [optional]
 **skill_id** | [**int[]**](../Model/int.md)| Filter returned roles by skills | [optional]
 **user_id** | [**int[]**](../Model/int.md)| Filter returned roles by employees | [optional]
 **branch_id** | [**int[]**](../Model/int.md)| Filter returned roles by branches | [optional]
 **exclude_role** | **int**| Exclude role by given role id | [optional]
 **has_users** | **int**| Return only roles with assigned users. Options: only roles with users assigned-&amp;gt; [1], only roles with no users assigned-&amp;gt; [0] | [optional]
 **has_not_skill** | [**int[]**](../Model/int.md)| Filter returned roles which have not skills assigned | [optional]
 **filters** | **string**| URL encoded filter by: role_skills([&#39;&#x3D;&#39;, &#39;!&#x3D;&#39;], 0), role_status([&#39;&#x3D;&#39;, &#39;!&#x3D;&#39;], 0), role_users([&#39;&#x3D;&#39;, &#39;!&#x3D;&#39;], 0), username(user names), skill(name) | [optional]
 **search_text** | **string**| Search by text given(a text to search in title or description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListResponse**](../Model/SkillRoleListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1roles_0**
> \Swagger\Client\Model\SkillRoleCreateResponse roleSkillv1roles_0($body)

Creates a new Role

The assigned branch is only used for access management, users of the branch are not automatically assigned to the role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$body = new \Swagger\Client\Model\SkillRoleCreateSchema(); // \Swagger\Client\Model\SkillRoleCreateSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1roles_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1roles_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillRoleCreateSchema**](../Model/\Swagger\Client\Model\SkillRoleCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleCreateResponse**](../Model/SkillRoleCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1roles_1**
> \Swagger\Client\Model\SkillRoleDeleteResponse roleSkillv1roles_1($body)

Deletes one or more Roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$body = new \Swagger\Client\Model\SkillRoleDeleteSchema(); // \Swagger\Client\Model\SkillRoleDeleteSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1roles_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1roles_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillRoleDeleteSchema**](../Model/\Swagger\Client\Model\SkillRoleDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleDeleteResponse**](../Model/SkillRoleDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesidconfiguration**
> \Swagger\Client\Model\SkillRoleReadEvaluationConfigResponse roleSkillv1rolesidconfiguration($id)

Retrieves the details of a (Role) Evaluation Settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$id = "id_example"; // string | ID of the role to save the configuration, (value of global_role) in case is passed &quot;global&quot; as id the global configuration is read.

try {
    $result = $api_instance->roleSkillv1rolesidconfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesidconfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the role to save the configuration, (value of global_role) in case is passed &amp;quot;global&amp;quot; as id the global configuration is read. |

### Return type

[**\Swagger\Client\Model\SkillRoleReadEvaluationConfigResponse**](../Model/SkillRoleReadEvaluationConfigResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesidconfiguration_0**
> \Swagger\Client\Model\SkillRoleDeleteEvaluationConfigResponse roleSkillv1rolesidconfiguration_0($id)

Deletes one or more Roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$id = 56; // int | Role id

try {
    $result = $api_instance->roleSkillv1rolesidconfiguration_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesidconfiguration_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Role id |

### Return type

[**\Swagger\Client\Model\SkillRoleDeleteEvaluationConfigResponse**](../Model/SkillRoleDeleteEvaluationConfigResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesidevaluationstype**
> \Swagger\Client\Model\SkillRoleListRoleEvaluationsResponse roleSkillv1rolesidevaluationstype($id, $type, $user_names, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Evaluation per Role and by given type, filtered on input parameters

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$id = 56; // int | ID of the role
$type = "type_example"; // string | Type of the evaluation
$user_names = "user_names_example"; // string | Search text in the role title. Default empty string.
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - role_title. Options: role_title, id, role_description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->roleSkillv1rolesidevaluationstype($id, $type, $user_names, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesidevaluationstype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the role |
 **type** | **string**| Type of the evaluation |
 **user_names** | **string**| Search text in the role title. Default empty string. | [optional]
 **sort_attr** | **string**| Sort by this field, default value - role_title. Options: role_title, id, role_description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListRoleEvaluationsResponse**](../Model/SkillRoleListRoleEvaluationsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesrequeststypetype**
> \Swagger\Client\Model\SkillRoleCountRequestsResponse roleSkillv1rolesrequeststypetype($type, $role_id, $page, $page_size, $lang, $get_total_count)

Count the Evaluation Requests per role, per type, by status

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$type = "type_example"; // string | Filter returned requests by given type. Options: S - self, M - manager and P - peer.
$role_id = 56; // int | Search requests for given role.
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->roleSkillv1rolesrequeststypetype($type, $role_id, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesrequeststypetype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Filter returned requests by given type. Options: S - self, M - manager and P - peer. |
 **role_id** | **int**| Search requests for given role. |
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleCountRequestsResponse**](../Model/SkillRoleCountRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleId**
> \Swagger\Client\Model\SkillRoleViewResponse roleSkillv1rolesroleId($role_id, $lang)

Retrieves the details of a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Required ID of role to fetch
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->roleSkillv1rolesroleId($role_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Required ID of role to fetch |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleViewResponse**](../Model/SkillRoleViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleId_0**
> \Swagger\Client\Model\SkillRoleUpdateResponse roleSkillv1rolesroleId_0($role_id, $body)

Updates the details of a Role

The assigned branch is only used for access management, users member of the branch are not automatically assigned to the role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | ID of the role to update
$body = new \Swagger\Client\Model\SkillRoleUpdateSchema(); // \Swagger\Client\Model\SkillRoleUpdateSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleId_0($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| ID of the role to update |
 **body** | [**\Swagger\Client\Model\SkillRoleUpdateSchema**](../Model/\Swagger\Client\Model\SkillRoleUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleUpdateResponse**](../Model/SkillRoleUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdbranches**
> \Swagger\Client\Model\SkillRoleListBranchesByRolesResponse roleSkillv1rolesroleIdbranches($role_id, $lang)

List Branches with a specific Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Role ID
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->roleSkillv1rolesroleIdbranches($role_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdbranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Role ID |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListBranchesByRolesResponse**](../Model/SkillRoleListBranchesByRolesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdbranchesbranchId**
> \Swagger\Client\Model\SkillRoleListRoleUsersByBranchResponse roleSkillv1rolesroleIdbranchesbranchId($role_id, $branch_id, $page, $page_size, $get_total_count)

Retrieves the list of Users with a specific Role in a specific Branch



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Filter returned users by role_id
$branch_id = 56; // int | Filter returned users by branch_id
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->roleSkillv1rolesroleIdbranchesbranchId($role_id, $branch_id, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdbranchesbranchId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Filter returned users by role_id |
 **branch_id** | **int**| Filter returned users by branch_id |
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListRoleUsersByBranchResponse**](../Model/SkillRoleListRoleUsersByBranchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdconfiguration**
> \Swagger\Client\Model\SkillRoleSaveEvaluationConfigResponse roleSkillv1rolesroleIdconfiguration($role_id, $body)

Saves(Creates or Updates) a Role/Global Evaluation Configuration

The assigned branch is only used for access management, users of the branch are not automatically assigned to the role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = "role_id_example"; // string | Role id or 'global' for global evaluation configuration
$body = new \Swagger\Client\Model\SkillRoleSaveEvaluationConfigSchema(); // \Swagger\Client\Model\SkillRoleSaveEvaluationConfigSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleIdconfiguration($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdconfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Role id or &#39;global&#39; for global evaluation configuration |
 **body** | [**\Swagger\Client\Model\SkillRoleSaveEvaluationConfigSchema**](../Model/\Swagger\Client\Model\SkillRoleSaveEvaluationConfigSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleSaveEvaluationConfigResponse**](../Model/SkillRoleSaveEvaluationConfigResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIddelta**
> \Swagger\Client\Model\SkillRoleListSkillsForRoleResponse roleSkillv1rolesroleIddelta($role_id, $skill_title, $skill_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $skill_status, $get_total_count, $industry_id, $area_id, $search_operator)

Retrieves the Skills not assigned to a Role

Returns all active skills from the catalog which are not strategic and are not already assigned to the requested role. All filter parameters are optional, except role_id. If all filter parameters are provided operation is AND.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Filter returned skills by role
$skill_title = array("skill_title_example"); // string[] | Search text in the skill title. Default empty array. OR is performed across array items
$skill_description = array("skill_description_example"); // string[] | Search text in the skill description. Default empty array. OR is performed across array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - name. Options: name, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$skill_status = array(56); // int[] | Options: active skills -&gt; [1], inactive skills-&gt; [0], both-&gt; [0,1]. Default value-&gt;[0,1]
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$industry_id = 56; // int | Filter returned skills by industry
$area_id = 56; // int | Filter returned skills by area
$search_operator = "search_operator_example"; // string | Options: 'AND' or 'OR'. Default - 'AND'

try {
    $result = $api_instance->roleSkillv1rolesroleIddelta($role_id, $skill_title, $skill_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $skill_status, $get_total_count, $industry_id, $area_id, $search_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIddelta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Filter returned skills by role |
 **skill_title** | [**string[]**](../Model/string.md)| Search text in the skill title. Default empty array. OR is performed across array items | [optional]
 **skill_description** | [**string[]**](../Model/string.md)| Search text in the skill description. Default empty array. OR is performed across array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - name. Options: name, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **skill_status** | [**int[]**](../Model/int.md)| Options: active skills -&amp;gt; [1], inactive skills-&amp;gt; [0], both-&amp;gt; [0,1]. Default value-&amp;gt;[0,1] | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **industry_id** | **int**| Filter returned skills by industry | [optional]
 **area_id** | **int**| Filter returned skills by area | [optional]
 **search_operator** | **string**| Options: &#39;AND&#39; or &#39;OR&#39;. Default - &#39;AND&#39; | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListSkillsForRoleResponse**](../Model/SkillRoleListSkillsForRoleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdskills**
> \Swagger\Client\Model\SkillRoleListRoleSkillsResponse roleSkillv1rolesroleIdskills($role_id, $title, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $active, $assigned, $strategic)

Returns the list of required Skills of a specific Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Filter returned skills by role_id
$title = "title_example"; // string | Skill title in the selected language
$description = "description_example"; // string | Skill description in the selected language
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$active = 56; // int | Options: 1- active, 0 - inactive, null - all.
$assigned = 56; // int | Options: 1 - Return assigned skill to role, 0 - Return not assigned skills to a role. Default - 1
$strategic = 56; // int | Options: 1 - Return company strategic skills, 0 - Return the not company strategic skills. Default - 0

try {
    $result = $api_instance->roleSkillv1rolesroleIdskills($role_id, $title, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $active, $assigned, $strategic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Filter returned skills by role_id |
 **title** | **string**| Skill title in the selected language | [optional]
 **description** | **string**| Skill description in the selected language | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **active** | **int**| Options: 1- active, 0 - inactive, null - all. | [optional]
 **assigned** | **int**| Options: 1 - Return assigned skill to role, 0 - Return not assigned skills to a role. Default - 1 | [optional]
 **strategic** | **int**| Options: 1 - Return company strategic skills, 0 - Return the not company strategic skills. Default - 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListRoleSkillsResponse**](../Model/SkillRoleListRoleSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdskills_0**
> \Swagger\Client\Model\SkillRoleAddRoleSkillResponse roleSkillv1rolesroleIdskills_0($role_id, $body)

Adds one or more required Skills to a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Id of role
$body = new \Swagger\Client\Model\SkillRoleAddRoleSkillSchema(); // \Swagger\Client\Model\SkillRoleAddRoleSkillSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleIdskills_0($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Id of role |
 **body** | [**\Swagger\Client\Model\SkillRoleAddRoleSkillSchema**](../Model/\Swagger\Client\Model\SkillRoleAddRoleSkillSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleAddRoleSkillResponse**](../Model/SkillRoleAddRoleSkillResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdskills_1**
> \Swagger\Client\Model\SkillRoleRemoveRoleSkillResponse roleSkillv1rolesroleIdskills_1($role_id, $body)

Removes a required Skill from a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | ID of role/s to fetch
$body = new \Swagger\Client\Model\SkillRoleRemoveRoleSkillSchema(); // \Swagger\Client\Model\SkillRoleRemoveRoleSkillSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleIdskills_1($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| ID of role/s to fetch |
 **body** | [**\Swagger\Client\Model\SkillRoleRemoveRoleSkillSchema**](../Model/\Swagger\Client\Model\SkillRoleRemoveRoleSkillSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleRemoveRoleSkillResponse**](../Model/SkillRoleRemoveRoleSkillResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdusers**
> \Swagger\Client\Model\SkillRoleListRoleUsersResponse roleSkillv1rolesroleIdusers($role_id, $fullname, $user_ids, $username, $page, $page_size, $get_total_count, $sort_attr, $sort_dir)

Lists the Users assigned to a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | ID role to get users
$fullname = "fullname_example"; // string | User names to filter the listing by
$user_ids = array(56); // int[] | User IDs
$username = "username_example"; // string | Username to filter the listing by
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - fullname. Options: fullname, id, name, surname
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc

try {
    $result = $api_instance->roleSkillv1rolesroleIdusers($role_id, $fullname, $user_ids, $username, $page, $page_size, $get_total_count, $sort_attr, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| ID role to get users |
 **fullname** | **string**| User names to filter the listing by | [optional]
 **user_ids** | [**int[]**](../Model/int.md)| User IDs | [optional]
 **username** | **string**| Username to filter the listing by | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - fullname. Options: fullname, id, name, surname | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListRoleUsersResponse**](../Model/SkillRoleListRoleUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdusers_0**
> \Swagger\Client\Model\SkillRoleAddUserRoleResponse roleSkillv1rolesroleIdusers_0($role_id, $body)

Assigns one or more Users to a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | Role ID
$body = new \Swagger\Client\Model\SkillRoleAddUserRoleSchema(); // \Swagger\Client\Model\SkillRoleAddUserRoleSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleIdusers_0($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdusers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Role ID |
 **body** | [**\Swagger\Client\Model\SkillRoleAddUserRoleSchema**](../Model/\Swagger\Client\Model\SkillRoleAddUserRoleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleAddUserRoleResponse**](../Model/SkillRoleAddUserRoleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesroleIdusers_1**
> \Swagger\Client\Model\SkillRoleRemoveUserRoleResponse roleSkillv1rolesroleIdusers_1($role_id, $body)

Removes Users assignation to a Role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | ID role to remove users
$body = new \Swagger\Client\Model\SkillRoleRemoveUserRoleSchema(); // \Swagger\Client\Model\SkillRoleRemoveUserRoleSchema | Raw Body

try {
    $result = $api_instance->roleSkillv1rolesroleIdusers_1($role_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesroleIdusers_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| ID role to remove users |
 **body** | [**\Swagger\Client\Model\SkillRoleRemoveUserRoleSchema**](../Model/\Swagger\Client\Model\SkillRoleRemoveUserRoleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleRemoveUserRoleResponse**](../Model/SkillRoleRemoveUserRoleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolessimulator**
> \Swagger\Client\Model\SkillRoleListSimulatorResponse roleSkillv1rolessimulator($role_id)

Retrieves Global Evaluation Ratings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$role_id = 56; // int | to get settings for a role

try {
    $result = $api_instance->roleSkillv1rolessimulator($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolessimulator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| to get settings for a role | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListSimulatorResponse**](../Model/SkillRoleListSimulatorResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roleSkillv1rolesusers**
> \Swagger\Client\Model\SkillRoleListUsersResponse roleSkillv1rolesusers($assigned_to_role, $exclude_assigned, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text)

Returns list of Users

To exclude already assigned users, both parameters(assigned_to_role, exclude_assigned) have to be passed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RoleApi();
$assigned_to_role = 56; // int | ID of a role
$exclude_assigned = 56; // int | if equal to 1 excludes current assigned users; default - 0
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - username. Options: username
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default - LMS default(i.e. 10)
$filters = "filters_example"; // string | URL encoded filter
$search_text = "search_text_example"; // string | Search by text given(a text to search in username, firstname, lastname, email)

try {
    $result = $api_instance->roleSkillv1rolesusers($assigned_to_role, $exclude_assigned, $get_total_count, $sort_attr, $sort_dir, $page, $page_size, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleSkillv1rolesusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assigned_to_role** | **int**| ID of a role | [optional]
 **exclude_assigned** | **int**| if equal to 1 excludes current assigned users; default - 0 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **sort_attr** | **string**| Sort by this field, default value - username. Options: username | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default - LMS default(i.e. 10) | [optional]
 **filters** | **string**| URL encoded filter | [optional]
 **search_text** | **string**| Search by text given(a text to search in username, firstname, lastname, email) | [optional]

### Return type

[**\Swagger\Client\Model\SkillRoleListUsersResponse**](../Model/SkillRoleListUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

