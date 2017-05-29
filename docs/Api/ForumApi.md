# Swagger\Client\ForumApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forumLearnv1forumgetForumData**](ForumApi.md#forumLearnv1forumgetForumData) | **GET** /learn/v1/forum/getForumData | Forum Data action


# **forumLearnv1forumgetForumData**
> \Swagger\Client\Model\LearnForumGetForumDataResponse forumLearnv1forumgetForumData($course_id, $course_session_id)

Forum Data action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ForumApi();
$course_id = 56; // int | the id of the course
$course_session_id = 56; // int | the id of the session in the course

try {
    $result = $api_instance->forumLearnv1forumgetForumData($course_id, $course_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumLearnv1forumgetForumData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| the id of the course |
 **course_session_id** | **int**| the id of the session in the course | [optional]

### Return type

[**\Swagger\Client\Model\LearnForumGetForumDataResponse**](../Model/LearnForumGetForumDataResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

