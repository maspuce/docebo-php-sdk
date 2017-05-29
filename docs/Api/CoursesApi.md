# Swagger\Client\CoursesApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coursesSkillv1coursescourseIdprograms**](CoursesApi.md#coursesSkillv1coursescourseIdprograms) | **POST** /skill/v1/courses/{course_id}/programs | Assigns a Course to a Program
[**coursesSkillv1coursescourseIdprograms_0**](CoursesApi.md#coursesSkillv1coursescourseIdprograms_0) | **DELETE** /skill/v1/courses/{course_id}/programs | Unassigns a Course from a Program
[**coursesSkillv1coursescourseIdskills**](CoursesApi.md#coursesSkillv1coursescourseIdskills) | **GET** /skill/v1/courses/{course_id}/skills | Retrieves the list of Skills that are assigned to a course
[**coursesSkillv1coursescourseIdskills_0**](CoursesApi.md#coursesSkillv1coursescourseIdskills_0) | **POST** /skill/v1/courses/{course_id}/skills | Assign Skill(s) to a Course
[**coursesSkillv1coursescourseIdskills_1**](CoursesApi.md#coursesSkillv1coursescourseIdskills_1) | **DELETE** /skill/v1/courses/{course_id}/skills | Unassigns a Skill(s) from a course


# **coursesSkillv1coursescourseIdprograms**
> \Swagger\Client\Model\SkillCoursesAssignProgramsResponse coursesSkillv1coursescourseIdprograms($body)

Assigns a Course to a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursesApi();
$body = new \Swagger\Client\Model\SkillCoursesAssignProgramsSchema(); // \Swagger\Client\Model\SkillCoursesAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->coursesSkillv1coursescourseIdprograms($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesSkillv1coursescourseIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillCoursesAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillCoursesAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillCoursesAssignProgramsResponse**](../Model/SkillCoursesAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesSkillv1coursescourseIdprograms_0**
> \Swagger\Client\Model\SkillCoursesUnassignProgramsResponse coursesSkillv1coursescourseIdprograms_0($course_id, $body)

Unassigns a Course from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursesApi();
$course_id = 56; // int | course id
$body = new \Swagger\Client\Model\SkillCoursesUnassignProgramsSchema(); // \Swagger\Client\Model\SkillCoursesUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->coursesSkillv1coursescourseIdprograms_0($course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesSkillv1coursescourseIdprograms_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| course id |
 **body** | [**\Swagger\Client\Model\SkillCoursesUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillCoursesUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillCoursesUnassignProgramsResponse**](../Model/SkillCoursesUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesSkillv1coursescourseIdskills**
> \Swagger\Client\Model\SkillCoursesListSkillsResponse coursesSkillv1coursescourseIdskills($course_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills that are assigned to a course

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursesApi();
$course_id = 56; // int | Course id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id, description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->coursesSkillv1coursescourseIdskills($course_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesSkillv1coursescourseIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| Course id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id, description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillCoursesListSkillsResponse**](../Model/SkillCoursesListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesSkillv1coursescourseIdskills_0**
> \Swagger\Client\Model\SkillCoursesCreateResponse coursesSkillv1coursescourseIdskills_0($course_id, $body)

Assign Skill(s) to a Course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursesApi();
$course_id = 56; // int | Course id
$body = new \Swagger\Client\Model\SkillCoursesCreateSchema(); // \Swagger\Client\Model\SkillCoursesCreateSchema | Raw Body

try {
    $result = $api_instance->coursesSkillv1coursescourseIdskills_0($course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesSkillv1coursescourseIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| Course id |
 **body** | [**\Swagger\Client\Model\SkillCoursesCreateSchema**](../Model/\Swagger\Client\Model\SkillCoursesCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillCoursesCreateResponse**](../Model/SkillCoursesCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesSkillv1coursescourseIdskills_1**
> \Swagger\Client\Model\SkillCoursesDeleteSkillsResponse coursesSkillv1coursescourseIdskills_1($course_id, $body)

Unassigns a Skill(s) from a course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursesApi();
$course_id = 56; // int | ID of an course to delete
$body = new \Swagger\Client\Model\SkillCoursesDeleteSkillsSchema(); // \Swagger\Client\Model\SkillCoursesDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->coursesSkillv1coursescourseIdskills_1($course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->coursesSkillv1coursescourseIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| ID of an course to delete |
 **body** | [**\Swagger\Client\Model\SkillCoursesDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillCoursesDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillCoursesDeleteSkillsResponse**](../Model/SkillCoursesDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

