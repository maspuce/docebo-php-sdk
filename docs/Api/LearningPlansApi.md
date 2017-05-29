# Swagger\Client\LearningPlansApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learningPlansSkillv1plansPlanIdprograms**](LearningPlansApi.md#learningPlansSkillv1plansPlanIdprograms) | **DELETE** /skill/v1/plans/[plan_id]/programs | Unassigns a plan from a Program
[**learningPlansSkillv1plansplanIdprograms**](LearningPlansApi.md#learningPlansSkillv1plansplanIdprograms) | **POST** /skill/v1/plans/{plan_id}/programs | Assign programs to a learning plan.
[**learningPlansSkillv1plansplanIdskills**](LearningPlansApi.md#learningPlansSkillv1plansplanIdskills) | **GET** /skill/v1/plans/{plan_id}/skills | Retrieves the list of Skills, that are assigned to given plan
[**learningPlansSkillv1plansplanIdskills_0**](LearningPlansApi.md#learningPlansSkillv1plansplanIdskills_0) | **POST** /skill/v1/plans/{plan_id}/skills | Assign skill to a Learning Plan.
[**learningPlansSkillv1plansplanIdskills_1**](LearningPlansApi.md#learningPlansSkillv1plansplanIdskills_1) | **DELETE** /skill/v1/plans/{plan_id}/skills | De-assigns an existing skill(s) from given plan


# **learningPlansSkillv1plansPlanIdprograms**
> \Swagger\Client\Model\SkillLearningplansUnassignProgramsResponse learningPlansSkillv1plansPlanIdprograms($plan_id, $body)

Unassigns a plan from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningPlansApi();
$plan_id = 56; // int | plan id
$body = new \Swagger\Client\Model\SkillLearningplansUnassignProgramsSchema(); // \Swagger\Client\Model\SkillLearningplansUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->learningPlansSkillv1plansPlanIdprograms($plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningPlansApi->learningPlansSkillv1plansPlanIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| plan id |
 **body** | [**\Swagger\Client\Model\SkillLearningplansUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillLearningplansUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningplansUnassignProgramsResponse**](../Model/SkillLearningplansUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningPlansSkillv1plansplanIdprograms**
> \Swagger\Client\Model\SkillLearningplansAssignProgramsResponse learningPlansSkillv1plansplanIdprograms($plan_id, $body)

Assign programs to a learning plan.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningPlansApi();
$plan_id = 56; // int | learning plan id
$body = new \Swagger\Client\Model\SkillLearningplansAssignProgramsSchema(); // \Swagger\Client\Model\SkillLearningplansAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->learningPlansSkillv1plansplanIdprograms($plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningPlansApi->learningPlansSkillv1plansplanIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| learning plan id |
 **body** | [**\Swagger\Client\Model\SkillLearningplansAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillLearningplansAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningplansAssignProgramsResponse**](../Model/SkillLearningplansAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningPlansSkillv1plansplanIdskills**
> \Swagger\Client\Model\SkillLearningplansListSkillsResponse learningPlansSkillv1plansplanIdskills($plan_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills, that are assigned to given plan

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningPlansApi();
$plan_id = 56; // int | plan id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id, description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->learningPlansSkillv1plansplanIdskills($plan_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningPlansApi->learningPlansSkillv1plansplanIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| plan id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id, description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningplansListSkillsResponse**](../Model/SkillLearningplansListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningPlansSkillv1plansplanIdskills_0**
> \Swagger\Client\Model\SkillLearningplansCreateResponse learningPlansSkillv1plansplanIdskills_0($plan_id, $body)

Assign skill to a Learning Plan.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningPlansApi();
$plan_id = 56; // int | Learning plan id
$body = new \Swagger\Client\Model\SkillLearningplansCreateSchema(); // \Swagger\Client\Model\SkillLearningplansCreateSchema | Raw Body

try {
    $result = $api_instance->learningPlansSkillv1plansplanIdskills_0($plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningPlansApi->learningPlansSkillv1plansplanIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| Learning plan id |
 **body** | [**\Swagger\Client\Model\SkillLearningplansCreateSchema**](../Model/\Swagger\Client\Model\SkillLearningplansCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningplansCreateResponse**](../Model/SkillLearningplansCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **learningPlansSkillv1plansplanIdskills_1**
> \Swagger\Client\Model\SkillLearningplansDeleteSkillsResponse learningPlansSkillv1plansplanIdskills_1($plan_id, $body)

De-assigns an existing skill(s) from given plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LearningPlansApi();
$plan_id = 56; // int | ID of a learning plan to delete
$body = new \Swagger\Client\Model\SkillLearningplansDeleteSkillsSchema(); // \Swagger\Client\Model\SkillLearningplansDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->learningPlansSkillv1plansplanIdskills_1($plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LearningPlansApi->learningPlansSkillv1plansplanIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| ID of a learning plan to delete |
 **body** | [**\Swagger\Client\Model\SkillLearningplansDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillLearningplansDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillLearningplansDeleteSkillsResponse**](../Model/SkillLearningplansDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

