# Swagger\Client\DevobjectApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**devobjectSkillv1devobjects**](DevobjectApi.md#devobjectSkillv1devobjects) | **GET** /skill/v1/devobjects | Retrieves the list of Development Objects, filtered on input parameters
[**devobjectSkillv1devobjects_0**](DevobjectApi.md#devobjectSkillv1devobjects_0) | **POST** /skill/v1/devobjects | Creates a new Development Object
[**devobjectSkillv1devobjects_1**](DevobjectApi.md#devobjectSkillv1devobjects_1) | **DELETE** /skill/v1/devobjects | Deletes one or many Development Objects
[**devobjectSkillv1devobjectsobjectId**](DevobjectApi.md#devobjectSkillv1devobjectsobjectId) | **GET** /skill/v1/devobjects/{object_id} | Returns the details of a Development Object
[**devobjectSkillv1devobjectsobjectId_0**](DevobjectApi.md#devobjectSkillv1devobjectsobjectId_0) | **PUT** /skill/v1/devobjects/{object_id} | Updates a Development Object
[**devobjectSkillv1devobjectsobjectId_1**](DevobjectApi.md#devobjectSkillv1devobjectsobjectId_1) | **DELETE** /skill/v1/devobjects/{object_id} | Deletes one or many Development Objects
[**devobjectSkillv1devobjectsobjectIdskills**](DevobjectApi.md#devobjectSkillv1devobjectsobjectIdskills) | **GET** /skill/v1/devobjects/{object_id}/skills | Retrieves the list of Skills that are assigned to a Development Object
[**devobjectSkillv1devobjectsobjectIdskills_0**](DevobjectApi.md#devobjectSkillv1devobjectsobjectIdskills_0) | **POST** /skill/v1/devobjects/{object_id}/skills | Assigns Skill(s) to a Development Pbject
[**devobjectSkillv1devobjectsobjectIdskills_1**](DevobjectApi.md#devobjectSkillv1devobjectsobjectIdskills_1) | **DELETE** /skill/v1/devobjects/{object_id}/skills | Unassigns a skill(s) from a Development Object


# **devobjectSkillv1devobjects**
> \Swagger\Client\Model\SkillDevobjectListResponse devobjectSkillv1devobjects($name, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rec_user, $act_user, $role_id, $type, $start_date, $end_date, $completed)

Retrieves the list of Development Objects, filtered on input parameters

All filter parameters are optional. If filter parameters are provided operation is OR between role_title and role_description and AND among other parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$name = "name_example"; // string | Search text in the development object name. Default empty
$description = "description_example"; // string | Search text in the development object description. Default empty
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$rec_user = 56; // int | User id of the user receiving the development activity
$act_user = 56; // int | user id of the user performing the development activity (mandatory is the name of the coach, the mentor or temporary manager in case of job rotation)
$role_id = array(56); // int[] | Filter by role_id
$type = "type_example"; // string | Filter returned by type - Mentoring(M), Coaching(C) or Job Rotatio(J)
$start_date = "start_date_example"; // string | Start date of the development object
$end_date = "end_date_example"; // string | End date of the development object
$completed = 56; // int | Filter returned by completed status. By default it is ignored

try {
    $result = $api_instance->devobjectSkillv1devobjects($name, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $rec_user, $act_user, $role_id, $type, $start_date, $end_date, $completed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Search text in the development object name. Default empty | [optional]
 **description** | **string**| Search text in the development object description. Default empty | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **rec_user** | **int**| User id of the user receiving the development activity | [optional]
 **act_user** | **int**| user id of the user performing the development activity (mandatory is the name of the coach, the mentor or temporary manager in case of job rotation) | [optional]
 **role_id** | [**int[]**](../Model/int.md)| Filter by role_id | [optional]
 **type** | **string**| Filter returned by type - Mentoring(M), Coaching(C) or Job Rotatio(J) | [optional]
 **start_date** | **string**| Start date of the development object | [optional]
 **end_date** | **string**| End date of the development object | [optional]
 **completed** | **int**| Filter returned by completed status. By default it is ignored | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectListResponse**](../Model/SkillDevobjectListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjects_0**
> \Swagger\Client\Model\SkillDevobjectCreateResponse devobjectSkillv1devobjects_0($body)

Creates a new Development Object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$body = new \Swagger\Client\Model\SkillDevobjectCreateSchema(); // \Swagger\Client\Model\SkillDevobjectCreateSchema | Raw Body

try {
    $result = $api_instance->devobjectSkillv1devobjects_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjects_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillDevobjectCreateSchema**](../Model/\Swagger\Client\Model\SkillDevobjectCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectCreateResponse**](../Model/SkillDevobjectCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjects_1**
> \Swagger\Client\Model\SkillDevobjectDeleteMultipleResponse devobjectSkillv1devobjects_1($body)

Deletes one or many Development Objects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$body = new \Swagger\Client\Model\SkillDevobjectDeleteMultipleSchema(); // \Swagger\Client\Model\SkillDevobjectDeleteMultipleSchema | Raw Body

try {
    $result = $api_instance->devobjectSkillv1devobjects_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjects_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillDevobjectDeleteMultipleSchema**](../Model/\Swagger\Client\Model\SkillDevobjectDeleteMultipleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectDeleteMultipleResponse**](../Model/SkillDevobjectDeleteMultipleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectId**
> \Swagger\Client\Model\SkillDevobjectViewResponse devobjectSkillv1devobjectsobjectId($object_id, $lang)

Returns the details of a Development Object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | ID of the development object
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectId($object_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| ID of the development object |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectViewResponse**](../Model/SkillDevobjectViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectId_0**
> \Swagger\Client\Model\SkillDevobjectUpdateResponse devobjectSkillv1devobjectsobjectId_0($object_id, $body)

Updates a Development Object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | ID of the development object
$body = new \Swagger\Client\Model\SkillDevobjectUpdateSchema(); // \Swagger\Client\Model\SkillDevobjectUpdateSchema | Raw Body

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectId_0($object_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| ID of the development object |
 **body** | [**\Swagger\Client\Model\SkillDevobjectUpdateSchema**](../Model/\Swagger\Client\Model\SkillDevobjectUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectUpdateResponse**](../Model/SkillDevobjectUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectId_1**
> \Swagger\Client\Model\SkillDevobjectDeleteResponse devobjectSkillv1devobjectsobjectId_1($object_id)

Deletes one or many Development Objects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | ID of the development object to be deleted

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectId_1($object_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectId_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| ID of the development object to be deleted |

### Return type

[**\Swagger\Client\Model\SkillDevobjectDeleteResponse**](../Model/SkillDevobjectDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectIdskills**
> \Swagger\Client\Model\SkillDevobjectListSkillsResponse devobjectSkillv1devobjectsobjectIdskills($object_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills that are assigned to a Development Object

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | Development object id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectIdskills($object_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| Development object id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectListSkillsResponse**](../Model/SkillDevobjectListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectIdskills_0**
> \Swagger\Client\Model\SkillDevobjectAssignSkillsResponse devobjectSkillv1devobjectsobjectIdskills_0($object_id, $body)

Assigns Skill(s) to a Development Pbject



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | Development object id
$body = new \Swagger\Client\Model\SkillDevobjectAssignSkillsSchema(); // \Swagger\Client\Model\SkillDevobjectAssignSkillsSchema | Raw Body

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectIdskills_0($object_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| Development object id |
 **body** | [**\Swagger\Client\Model\SkillDevobjectAssignSkillsSchema**](../Model/\Swagger\Client\Model\SkillDevobjectAssignSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectAssignSkillsResponse**](../Model/SkillDevobjectAssignSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devobjectSkillv1devobjectsobjectIdskills_1**
> \Swagger\Client\Model\SkillDevobjectUnassignSkillsResponse devobjectSkillv1devobjectsobjectIdskills_1($object_id, $body)

Unassigns a skill(s) from a Development Object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\DevobjectApi();
$object_id = 56; // int | ID of a development object to unassign
$body = new \Swagger\Client\Model\SkillDevobjectUnassignSkillsSchema(); // \Swagger\Client\Model\SkillDevobjectUnassignSkillsSchema | Raw Body

try {
    $result = $api_instance->devobjectSkillv1devobjectsobjectIdskills_1($object_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevobjectApi->devobjectSkillv1devobjectsobjectIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_id** | **int**| ID of a development object to unassign |
 **body** | [**\Swagger\Client\Model\SkillDevobjectUnassignSkillsSchema**](../Model/\Swagger\Client\Model\SkillDevobjectUnassignSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillDevobjectUnassignSkillsResponse**](../Model/SkillDevobjectUnassignSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

