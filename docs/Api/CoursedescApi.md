# Swagger\Client\CoursedescApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coursedescLearnv1coursedescgetCourseDescription**](CoursedescApi.md#coursedescLearnv1coursedescgetCourseDescription) | **GET** /learn/v1/coursedesc/getCourseDescription | Course Description action


# **coursedescLearnv1coursedescgetCourseDescription**
> \Swagger\Client\Model\LearnCoursedescGetCourseDescriptionResponse coursedescLearnv1coursedescgetCourseDescription($course_id, $display_type, $current_session_id)

Course Description action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CoursedescApi();
$course_id = 56; // int | The id of the Course
$display_type = "display_type_example"; // string | The display type for admin or learner
$current_session_id = "current_session_id_example"; // string | The id of the Course session

try {
    $result = $api_instance->coursedescLearnv1coursedescgetCourseDescription($course_id, $display_type, $current_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursedescApi->coursedescLearnv1coursedescgetCourseDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| The id of the Course |
 **display_type** | **string**| The display type for admin or learner |
 **current_session_id** | **string**| The id of the Course session | [optional]

### Return type

[**\Swagger\Client\Model\LearnCoursedescGetCourseDescriptionResponse**](../Model/LearnCoursedescGetCourseDescriptionResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

