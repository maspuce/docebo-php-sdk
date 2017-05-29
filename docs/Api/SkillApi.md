# Swagger\Client\SkillApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**skillSkillv1skills**](SkillApi.md#skillSkillv1skills) | **GET** /skill/v1/skills | Retrieves all Skills, filtered on input parameters
[**skillSkillv1skills_0**](SkillApi.md#skillSkillv1skills_0) | **POST** /skill/v1/skills | Creates a new Skill
[**skillSkillv1skills_1**](SkillApi.md#skillSkillv1skills_1) | **DELETE** /skill/v1/skills | Deletes one or more Skills
[**skillSkillv1skillsclone**](SkillApi.md#skillSkillv1skillsclone) | **POST** /skill/v1/skills/clone | Copy skill(-s) from the predefined once
[**skillSkillv1skillscontentcontentId**](SkillApi.md#skillSkillv1skillscontentcontentId) | **PUT** /skill/v1/skills/content/{content_id} | Updates a Development Object
[**skillSkillv1skillsformalcontent**](SkillApi.md#skillSkillv1skillsformalcontent) | **GET** /skill/v1/skills/formalcontent | Get list courses and learning plans
[**skillSkillv1skillsidroles**](SkillApi.md#skillSkillv1skillsidroles) | **GET** /skill/v1/skills/{id}/roles | Retrieves the list of Roles by Skill(id), filtered on input parameters
[**skillSkillv1skillsidroles_0**](SkillApi.md#skillSkillv1skillsidroles_0) | **POST** /skill/v1/skills/{id}/roles | Assigns one or more required Roles to a Skill
[**skillSkillv1skillsidtype**](SkillApi.md#skillSkillv1skillsidtype) | **GET** /skill/v1/skills/{id}/{type} | List skill objects by given skill id and object type
[**skillSkillv1skillsinformalcontent**](SkillApi.md#skillSkillv1skillsinformalcontent) | **GET** /skill/v1/skills/informalcontent | Get list of Coach &amp; Share Assets
[**skillSkillv1skillsskillId**](SkillApi.md#skillSkillv1skillsskillId) | **GET** /skill/v1/skills/{skill_id} | Returns the details of a Skill
[**skillSkillv1skillsskillId_0**](SkillApi.md#skillSkillv1skillsskillId_0) | **PUT** /skill/v1/skills/{skill_id} | Updates the details of a Skill


# **skillSkillv1skills**
> \Swagger\Client\Model\SkillSkillListResponse skillSkillv1skills($skill_title, $skill_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $active, $get_total_count, $industry_id, $area_id, $predefined, $search_operator, $assigned_to_role, $exclude_assigned, $filters)

Retrieves all Skills, filtered on input parameters

All filter parameters are optional. If both Skill_Title and Skill_Description are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$skill_title = array("skill_title_example"); // string[] | Search text in the skill title. Default empty array. OR is performed across array items
$skill_description = array("skill_description_example"); // string[] | Search text in the skill description. Default empty array. OR is performed across array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$active = array(56); // int[] | Options: active skills -&gt; [1], inactive skills-&gt; [0], both-&gt; [0,1]. Default value-&gt;[0,1]
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$industry_id = 56; // int | Filter returned skills by industry
$area_id = 56; // int | Filter returned skills by area
$predefined = 56; // int | Options: list predefined skills -&gt; [1], list not predefined skills-&gt; [0], both-&gt; [2]. Default value-&gt;[2]
$search_operator = "search_operator_example"; // string | Options: 'AND' or 'OR'. Default - 'AND'
$assigned_to_role = 56; // int | ID of a role
$exclude_assigned = 56; // int | Filter to not show assigned skills, required value 1.
$filters = "filters_example"; // string | URL encoded filter by: associated_content('=', '!='), roles_count('=', '!=')

try {
    $result = $api_instance->skillSkillv1skills($skill_title, $skill_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $active, $get_total_count, $industry_id, $area_id, $predefined, $search_operator, $assigned_to_role, $exclude_assigned, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_title** | [**string[]**](../Model/string.md)| Search text in the skill title. Default empty array. OR is performed across array items | [optional]
 **skill_description** | [**string[]**](../Model/string.md)| Search text in the skill description. Default empty array. OR is performed across array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **active** | [**int[]**](../Model/int.md)| Options: active skills -&amp;gt; [1], inactive skills-&amp;gt; [0], both-&amp;gt; [0,1]. Default value-&amp;gt;[0,1] | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **industry_id** | **int**| Filter returned skills by industry | [optional]
 **area_id** | **int**| Filter returned skills by area | [optional]
 **predefined** | **int**| Options: list predefined skills -&amp;gt; [1], list not predefined skills-&amp;gt; [0], both-&amp;gt; [2]. Default value-&amp;gt;[2] | [optional]
 **search_operator** | **string**| Options: &#39;AND&#39; or &#39;OR&#39;. Default - &#39;AND&#39; | [optional]
 **assigned_to_role** | **int**| ID of a role | [optional]
 **exclude_assigned** | **int**| Filter to not show assigned skills, required value 1. | [optional]
 **filters** | **string**| URL encoded filter by: associated_content(&#39;&#x3D;&#39;, &#39;!&#x3D;&#39;), roles_count(&#39;&#x3D;&#39;, &#39;!&#x3D;&#39;) | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillListResponse**](../Model/SkillSkillListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skills_0**
> \Swagger\Client\Model\SkillSkillCreateResponse skillSkillv1skills_0($body)

Creates a new Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$body = new \Swagger\Client\Model\SkillSkillCreateSchema(); // \Swagger\Client\Model\SkillSkillCreateSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skills_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillSkillCreateSchema**](../Model/\Swagger\Client\Model\SkillSkillCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillCreateResponse**](../Model/SkillSkillCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skills_1**
> \Swagger\Client\Model\SkillSkillDeleteResponse skillSkillv1skills_1($body)

Deletes one or more Skills



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$body = new \Swagger\Client\Model\SkillSkillDeleteSchema(); // \Swagger\Client\Model\SkillSkillDeleteSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skills_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillSkillDeleteSchema**](../Model/\Swagger\Client\Model\SkillSkillDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillDeleteResponse**](../Model/SkillSkillDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsclone**
> \Swagger\Client\Model\SkillSkillCloneResponse skillSkillv1skillsclone($body)

Copy skill(-s) from the predefined once



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$body = new \Swagger\Client\Model\SkillSkillCloneSchema(); // \Swagger\Client\Model\SkillSkillCloneSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skillsclone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsclone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillSkillCloneSchema**](../Model/\Swagger\Client\Model\SkillSkillCloneSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillCloneResponse**](../Model/SkillSkillCloneResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillscontentcontentId**
> \Swagger\Client\Model\SkillSkillUpdateStatusResponse skillSkillv1skillscontentcontentId($content_id, $body)

Updates a Development Object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$content_id = 56; // int | ID of the skill object
$body = new \Swagger\Client\Model\SkillSkillUpdateStatusSchema(); // \Swagger\Client\Model\SkillSkillUpdateStatusSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skillscontentcontentId($content_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillscontentcontentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_id** | **int**| ID of the skill object |
 **body** | [**\Swagger\Client\Model\SkillSkillUpdateStatusSchema**](../Model/\Swagger\Client\Model\SkillSkillUpdateStatusSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillUpdateStatusResponse**](../Model/SkillSkillUpdateStatusResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsformalcontent**
> \Swagger\Client\Model\SkillSkillFormalcontentResponse skillSkillv1skillsformalcontent($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $exclude, $search_text)

Get list courses and learning plans

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$exclude = 56; // int | the ID of a skill - return all courses and learning plans which aren't assigned to the given skill
$search_text = "search_text_example"; // string | Search by text given(a text to search in name or description)

try {
    $result = $api_instance->skillSkillv1skillsformalcontent($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $exclude, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsformalcontent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **exclude** | **int**| the ID of a skill - return all courses and learning plans which aren&#39;t assigned to the given skill | [optional]
 **search_text** | **string**| Search by text given(a text to search in name or description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillFormalcontentResponse**](../Model/SkillSkillFormalcontentResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsidroles**
> \Swagger\Client\Model\SkillSkillListRolesL2Response skillSkillv1skillsidroles($id, $role_title, $role_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $role_status, $get_total_count, $role_id, $user_id, $branch_id)

Retrieves the list of Roles by Skill(id), filtered on input parameters

All filter parameters are optional. If filter parameters are provided operation is OR between role_title and role_description and AND among other parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$id = 56; // int | Skill id
$role_title = array("role_title_example"); // string[] | Search text in the role title. Default empty array. OR is performed among multiple array items
$role_description = array("role_description_example"); // string[] | Search text in the role description. Default empty array. OR is performed among multiple array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: role_title, role_id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$role_status = array(56); // int[] | Options: active roles -&gt; [1], inactive roles-&gt; [0], both-&gt; [0,1]. Default value-&gt;[0,1]
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$role_id = array(56); // int[] | Filter returned roles by role_id
$user_id = array(56); // int[] | Filter returned roles by employees
$branch_id = array(56); // int[] | Filter returned roles by branches

try {
    $result = $api_instance->skillSkillv1skillsidroles($id, $role_title, $role_description, $sort_attr, $sort_dir, $page, $page_size, $lang, $role_status, $get_total_count, $role_id, $user_id, $branch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsidroles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Skill id |
 **role_title** | [**string[]**](../Model/string.md)| Search text in the role title. Default empty array. OR is performed among multiple array items | [optional]
 **role_description** | [**string[]**](../Model/string.md)| Search text in the role description. Default empty array. OR is performed among multiple array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: role_title, role_id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **role_status** | [**int[]**](../Model/int.md)| Options: active roles -&amp;gt; [1], inactive roles-&amp;gt; [0], both-&amp;gt; [0,1]. Default value-&amp;gt;[0,1] | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **role_id** | [**int[]**](../Model/int.md)| Filter returned roles by role_id | [optional]
 **user_id** | [**int[]**](../Model/int.md)| Filter returned roles by employees | [optional]
 **branch_id** | [**int[]**](../Model/int.md)| Filter returned roles by branches | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillListRolesL2Response**](../Model/SkillSkillListRolesL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsidroles_0**
> \Swagger\Client\Model\SkillSkillAssignRolesResponse skillSkillv1skillsidroles_0($id, $body)

Assigns one or more required Roles to a Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$id = 56; // int | Id of a skill
$body = new \Swagger\Client\Model\SkillSkillAssignRolesSchema(); // \Swagger\Client\Model\SkillSkillAssignRolesSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skillsidroles_0($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsidroles_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of a skill |
 **body** | [**\Swagger\Client\Model\SkillSkillAssignRolesSchema**](../Model/\Swagger\Client\Model\SkillSkillAssignRolesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillAssignRolesResponse**](../Model/SkillSkillAssignRolesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsidtype**
> \Swagger\Client\Model\SkillSkillListObjectsResponse skillSkillv1skillsidtype($type, $id, $sort_attr, $sort_dir, $page, $page_size, $lang, $name, $get_total_count, $filters, $search_text)

List skill objects by given skill id and object type

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$type = "type_example"; // string | Objects type to get. Options: courses, plans, los, assets, playlists, channels, devobjects, all
$id = 56; // int | Skill id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: name, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$name = "name_example"; // string | If provided filter by name/title
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$filters = "filters_example"; // string | URL encoded filter by: auto_enroll('=', 'Unable to render embedded object: File (='), auto_suggest('=', ') not found.=')
$search_text = "search_text_example"; // string | Search by text given(a text to search in name or description)

try {
    $result = $api_instance->skillSkillv1skillsidtype($type, $id, $sort_attr, $sort_dir, $page, $page_size, $lang, $name, $get_total_count, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsidtype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Objects type to get. Options: courses, plans, los, assets, playlists, channels, devobjects, all |
 **id** | **int**| Skill id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: name, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **name** | **string**| If provided filter by name/title | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **filters** | **string**| URL encoded filter by: auto_enroll(&#39;&#x3D;&#39;, &#39;Unable to render embedded object: File (&#x3D;&#39;), auto_suggest(&#39;&#x3D;&#39;, &#39;) not found.&#x3D;&#39;) | [optional]
 **search_text** | **string**| Search by text given(a text to search in name or description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillListObjectsResponse**](../Model/SkillSkillListObjectsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsinformalcontent**
> \Swagger\Client\Model\SkillSkillInformalcontentResponse skillSkillv1skillsinformalcontent($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $exclude, $search_text)

Get list of Coach & Share Assets

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id, created
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$exclude = 56; // int | the ID of a skill - return all assets which aren't assigned to the given skill
$search_text = "search_text_example"; // string | Search by text given(a text to search in title or description)

try {
    $result = $api_instance->skillSkillv1skillsinformalcontent($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $exclude, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsinformalcontent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id, created | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **exclude** | **int**| the ID of a skill - return all assets which aren&#39;t assigned to the given skill | [optional]
 **search_text** | **string**| Search by text given(a text to search in title or description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillInformalcontentResponse**](../Model/SkillSkillInformalcontentResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsskillId**
> \Swagger\Client\Model\SkillSkillViewResponse skillSkillv1skillsskillId($skill_id, $lang)

Returns the details of a Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$skill_id = 56; // int | ID of the skill
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->skillSkillv1skillsskillId($skill_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **int**| ID of the skill |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillViewResponse**](../Model/SkillSkillViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **skillSkillv1skillsskillId_0**
> \Swagger\Client\Model\SkillSkillUpdateResponse skillSkillv1skillsskillId_0($skill_id, $body)

Updates the details of a Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SkillApi();
$skill_id = 56; // int | ID of the skill to update
$body = new \Swagger\Client\Model\SkillSkillUpdateSchema(); // \Swagger\Client\Model\SkillSkillUpdateSchema | Raw Body

try {
    $result = $api_instance->skillSkillv1skillsskillId_0($skill_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SkillApi->skillSkillv1skillsskillId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **int**| ID of the skill to update |
 **body** | [**\Swagger\Client\Model\SkillSkillUpdateSchema**](../Model/\Swagger\Client\Model\SkillSkillUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillSkillUpdateResponse**](../Model/SkillSkillUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

