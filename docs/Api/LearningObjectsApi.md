# Swagger\Client\LearningObjectsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learningObjectsSkillv1coursesloIdskills**](LearningObjectsApi.md#learningObjectsSkillv1coursesloIdskills) | **GET** /skill/v1/courses/{lo_id}/skills | Retrieves the list of Skills, that are assigned to given learning object
[**learningObjectsSkillv1losloIdprograms**](LearningObjectsApi.md#learningObjectsSkillv1losloIdprograms) | **POST** /skill/v1/los/{lo_id}/programs | Assign a Learning Object to a Program
[**learningObjectsSkillv1losloIdprograms_0**](LearningObjectsApi.md#learningObjectsSkillv1losloIdprograms_0) | **DELETE** /skill/v1/los/{lo_id}/programs | Unassigns a Learning Object from a Program
[**learningObjectsSkillv1losloIdskills**](LearningObjectsApi.md#learningObjectsSkillv1losloIdskills) | **POST** /skill/v1/los/{lo_id}/skills | Assign Skill to a Learning Organization
[**learningObjectsSkillv1losloIdskills_0**](LearningObjectsApi.md#learningObjectsSkillv1losloIdskills_0) | **DELETE** /skill/v1/los/{lo_id}/skills | De-assigns an existing skill(s) from given learning object


# **learningObjectsSkillv1coursesloIdskills**
> \Swagger\Client\Model\SkillLearningobjectsListSkillsResponse learningObjectsSkillv1coursesloIdskills($lo_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills, that are assigned to given learning object

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningObjectsApi();
$lo_id = 56; // int | Learning Object id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->learningObjectsSkillv1coursesloIdskills($lo_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningObjectsApi->learningObjectsSkillv1coursesloIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lo_id** | **int**| Learning Object id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningobjectsListSkillsResponse**](../Model/SkillLearningobjectsListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningObjectsSkillv1losloIdprograms**
> \Swagger\Client\Model\SkillLearningobjectsAssignProgramsResponse learningObjectsSkillv1losloIdprograms($lo_id, $body)

Assign a Learning Object to a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningObjectsApi();
$lo_id = 56; // int | learning object id
$body = new \Swagger\Client\Model\SkillLearningobjectsAssignProgramsSchema(); // \Swagger\Client\Model\SkillLearningobjectsAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->learningObjectsSkillv1losloIdprograms($lo_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningObjectsApi->learningObjectsSkillv1losloIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lo_id** | **int**| learning object id |
 **body** | [**\Swagger\Client\Model\SkillLearningobjectsAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillLearningobjectsAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningobjectsAssignProgramsResponse**](../Model/SkillLearningobjectsAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningObjectsSkillv1losloIdprograms_0**
> \Swagger\Client\Model\SkillLearningobjectsUnassignProgramsResponse learningObjectsSkillv1losloIdprograms_0($lo_id, $body)

Unassigns a Learning Object from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningObjectsApi();
$lo_id = 56; // int | learning object id
$body = new \Swagger\Client\Model\SkillLearningobjectsUnassignProgramsSchema(); // \Swagger\Client\Model\SkillLearningobjectsUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->learningObjectsSkillv1losloIdprograms_0($lo_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningObjectsApi->learningObjectsSkillv1losloIdprograms_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lo_id** | **int**| learning object id |
 **body** | [**\Swagger\Client\Model\SkillLearningobjectsUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillLearningobjectsUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningobjectsUnassignProgramsResponse**](../Model/SkillLearningobjectsUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningObjectsSkillv1losloIdskills**
> \Swagger\Client\Model\SkillLearningobjectsCreateResponse learningObjectsSkillv1losloIdskills($lo_id, $body)

Assign Skill to a Learning Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningObjectsApi();
$lo_id = 56; // int | Learning organization id
$body = new \Swagger\Client\Model\SkillLearningobjectsCreateSchema(); // \Swagger\Client\Model\SkillLearningobjectsCreateSchema | Raw Body

try {
    $result = $api_instance->learningObjectsSkillv1losloIdskills($lo_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningObjectsApi->learningObjectsSkillv1losloIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lo_id** | **int**| Learning organization id |
 **body** | [**\Swagger\Client\Model\SkillLearningobjectsCreateSchema**](../Model/\Swagger\Client\Model\SkillLearningobjectsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningobjectsCreateResponse**](../Model/SkillLearningobjectsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningObjectsSkillv1losloIdskills_0**
> \Swagger\Client\Model\SkillLearningobjectsDeleteSkillsResponse learningObjectsSkillv1losloIdskills_0($lo_id, $body)

De-assigns an existing skill(s) from given learning object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningObjectsApi();
$lo_id = 56; // int | ID of a learning object to delete
$body = new \Swagger\Client\Model\SkillLearningobjectsDeleteSkillsSchema(); // \Swagger\Client\Model\SkillLearningobjectsDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->learningObjectsSkillv1losloIdskills_0($lo_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningObjectsApi->learningObjectsSkillv1losloIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lo_id** | **int**| ID of a learning object to delete |
 **body** | [**\Swagger\Client\Model\SkillLearningobjectsDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillLearningobjectsDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningobjectsDeleteSkillsResponse**](../Model/SkillLearningobjectsDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

