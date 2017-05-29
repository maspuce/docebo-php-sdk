# Swagger\Client\PlanningApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**planningSkillv1planning**](PlanningApi.md#planningSkillv1planning) | **GET** /skill/v1/planning | Retrieves all planning periods, filtered on input parameters
[**planningSkillv1planning_0**](PlanningApi.md#planningSkillv1planning_0) | **POST** /skill/v1/planning | Creates a new Planning Period
[**planningSkillv1planning_1**](PlanningApi.md#planningSkillv1planning_1) | **DELETE** /skill/v1/planning | Deletes one or many Planning Periods
[**planningSkillv1planningplanningPeriodId**](PlanningApi.md#planningSkillv1planningplanningPeriodId) | **GET** /skill/v1/planning/{planning_period_id} | Returns the details of a Planning period
[**planningSkillv1planningplanningPeriodId_0**](PlanningApi.md#planningSkillv1planningplanningPeriodId_0) | **PUT** /skill/v1/planning/{planning_period_id} | Updates an existing Planning Period


# **planningSkillv1planning**
> \Swagger\Client\Model\SkillPlanningListResponse planningSkillv1planning($title, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $start_date, $end_date, $get_total_count)

Retrieves all planning periods, filtered on input parameters

All filter parameters are optional. If both title and description are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlanningApi();
$title = "title_example"; // string | Search text in the planning period title.
$description = "description_example"; // string | Search text in the planning period description.
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - start_date. Options: title, start_date, end_date
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$start_date = "start_date_example"; // string | Start date of a planning period
$end_date = "end_date_example"; // string | End date of a planning period
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->planningSkillv1planning($title, $description, $sort_attr, $sort_dir, $page, $page_size, $lang, $start_date, $end_date, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanningApi->planningSkillv1planning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Search text in the planning period title. | [optional]
 **description** | **string**| Search text in the planning period description. | [optional]
 **sort_attr** | **string**| Sort by this field, default value - start_date. Options: title, start_date, end_date | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **start_date** | **string**| Start date of a planning period | [optional]
 **end_date** | **string**| End date of a planning period | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlanningListResponse**](../Model/SkillPlanningListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planningSkillv1planning_0**
> \Swagger\Client\Model\SkillPlanningCreateResponse planningSkillv1planning_0($body)

Creates a new Planning Period



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlanningApi();
$body = new \Swagger\Client\Model\SkillPlanningCreateSchema(); // \Swagger\Client\Model\SkillPlanningCreateSchema | Raw Body

try {
    $result = $api_instance->planningSkillv1planning_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanningApi->planningSkillv1planning_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillPlanningCreateSchema**](../Model/\Swagger\Client\Model\SkillPlanningCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlanningCreateResponse**](../Model/SkillPlanningCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planningSkillv1planning_1**
> \Swagger\Client\Model\SkillPlanningDeleteResponse planningSkillv1planning_1($body)

Deletes one or many Planning Periods



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlanningApi();
$body = new \Swagger\Client\Model\SkillPlanningDeleteSchema(); // \Swagger\Client\Model\SkillPlanningDeleteSchema | Raw Body

try {
    $result = $api_instance->planningSkillv1planning_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanningApi->planningSkillv1planning_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillPlanningDeleteSchema**](../Model/\Swagger\Client\Model\SkillPlanningDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlanningDeleteResponse**](../Model/SkillPlanningDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planningSkillv1planningplanningPeriodId**
> \Swagger\Client\Model\SkillPlanningViewResponse planningSkillv1planningplanningPeriodId($planning_period_id, $lang)

Returns the details of a Planning period



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlanningApi();
$planning_period_id = 56; // int | ID of the planning
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language

try {
    $result = $api_instance->planningSkillv1planningplanningPeriodId($planning_period_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanningApi->planningSkillv1planningplanningPeriodId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **planning_period_id** | **int**| ID of the planning |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlanningViewResponse**](../Model/SkillPlanningViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planningSkillv1planningplanningPeriodId_0**
> \Swagger\Client\Model\SkillPlanningUpdateResponse planningSkillv1planningplanningPeriodId_0($body)

Updates an existing Planning Period



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlanningApi();
$body = new \Swagger\Client\Model\SkillPlanningUpdateSchema(); // \Swagger\Client\Model\SkillPlanningUpdateSchema | Raw Body

try {
    $result = $api_instance->planningSkillv1planningplanningPeriodId_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanningApi->planningSkillv1planningplanningPeriodId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillPlanningUpdateSchema**](../Model/\Swagger\Client\Model\SkillPlanningUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlanningUpdateResponse**](../Model/SkillPlanningUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

