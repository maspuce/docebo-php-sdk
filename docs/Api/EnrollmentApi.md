# Swagger\Client\EnrollmentApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollmentLearnv1enrollmentbatch**](EnrollmentApi.md#enrollmentLearnv1enrollmentbatch) | **POST** /learn/v1/enrollment/batch | Batch import assignments
[**enrollmentLearnv1enrollments**](EnrollmentApi.md#enrollmentLearnv1enrollments) | **GET** /learn/v1/enrollments | Retrieves information for the specified by id user&#39;s enrollments
[**enrollmentLearnv1enrollments_0**](EnrollmentApi.md#enrollmentLearnv1enrollments_0) | **PUT** /learn/v1/enrollments | Update enrollment of users to courses (Multiple update)
[**enrollmentLearnv1enrollments_1**](EnrollmentApi.md#enrollmentLearnv1enrollments_1) | **POST** /learn/v1/enrollments | Enroll user/s in course/s
[**enrollmentLearnv1enrollments_2**](EnrollmentApi.md#enrollmentLearnv1enrollments_2) | **DELETE** /learn/v1/enrollments | Un - Enroll users in course/s
[**enrollmentLearnv1enrollmentscourseIduserId**](EnrollmentApi.md#enrollmentLearnv1enrollmentscourseIduserId) | **PUT** /learn/v1/enrollments/{course_id}/{user_id} | Update enrollment of user to course (Single update)
[**enrollmentLearnv1enrollmentscourseIduserId_0**](EnrollmentApi.md#enrollmentLearnv1enrollmentscourseIduserId_0) | **POST** /learn/v1/enrollments/{course_id}/{user_id} | Enroll user/s in course/s
[**enrollmentLearnv1enrollmentsidCourseidUser**](EnrollmentApi.md#enrollmentLearnv1enrollmentsidCourseidUser) | **GET** /learn/v1/enrollments/{id_course}/{id_user} | View information for enrolled user on current course.
[**enrollmentLearnv1enrollmentsidCourseidUser_0**](EnrollmentApi.md#enrollmentLearnv1enrollmentsidCourseidUser_0) | **DELETE** /learn/v1/enrollments/{id_course}/{id_user} | Un - Enroll user in course


# **enrollmentLearnv1enrollmentbatch**
> \Swagger\Client\Model\LearnEnrollmentBatchImportResponse enrollmentLearnv1enrollmentbatch($body)

Batch import assignments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$body = new \Swagger\Client\Model\LearnEnrollmentBatchImportSchema(); // \Swagger\Client\Model\LearnEnrollmentBatchImportSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollmentbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollmentbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnEnrollmentBatchImportSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentBatchImportSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentBatchImportResponse**](../Model/LearnEnrollmentBatchImportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollments**
> \Swagger\Client\Model\LearnEnrollmentIndexResponse enrollmentLearnv1enrollments($id_user, $status, $type, $deadline, $rating, $channel, $search)

Retrieves information for the specified by id user's enrollments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$id_user = array(56); // int[] | Id of the user to get the entries for, if empty - returns full list
$status = array("status_example"); // string[] | Filtering by status.
$type = array("type_example"); // string[] | Filtering by type, possible values: elearning, classroom, webinar, learning_plan
$deadline = "deadline_example"; // string | Return only enrollments that &quot;expire&quot; between the current time and the provided value.
$rating = 56; // int | Return only enrollments that have minimum this rating
$channel = 56; // int | Filter enrollments that are found inside the given channel (specified by PK)
$search = "search_example"; // string | Filtering results by wildcard match on the passed string

try {
    $result = $api_instance->enrollmentLearnv1enrollments($id_user, $status, $type, $deadline, $rating, $channel, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | [**int[]**](../Model/int.md)| Id of the user to get the entries for, if empty - returns full list | [optional]
 **status** | [**string[]**](../Model/string.md)| Filtering by status. | [optional]
 **type** | [**string[]**](../Model/string.md)| Filtering by type, possible values: elearning, classroom, webinar, learning_plan | [optional]
 **deadline** | **string**| Return only enrollments that &amp;quot;expire&amp;quot; between the current time and the provided value. | [optional]
 **rating** | **int**| Return only enrollments that have minimum this rating | [optional]
 **channel** | **int**| Filter enrollments that are found inside the given channel (specified by PK) | [optional]
 **search** | **string**| Filtering results by wildcard match on the passed string | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentIndexResponse**](../Model/LearnEnrollmentIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollments_0**
> \Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse enrollmentLearnv1enrollments_0($body)

Update enrollment of users to courses (Multiple update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$body = new \Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema(); // \Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollments_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollments_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentUpdateMultipleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentUpdateMultipleResponse**](../Model/LearnEnrollmentUpdateMultipleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollments_1**
> \Swagger\Client\Model\LearnEnrollmentCreateResponse enrollmentLearnv1enrollments_1($body)

Enroll user/s in course/s



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$body = new \Swagger\Client\Model\LearnEnrollmentCreateSchema(); // \Swagger\Client\Model\LearnEnrollmentCreateSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollments_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollments_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnEnrollmentCreateSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentCreateResponse**](../Model/LearnEnrollmentCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollments_2**
> \Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse enrollmentLearnv1enrollments_2($body)

Un - Enroll users in course/s



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$body = new \Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema(); // \Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollments_2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollments_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentMultipleDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentMultipleDeleteResponse**](../Model/LearnEnrollmentMultipleDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollmentscourseIduserId**
> \Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse enrollmentLearnv1enrollmentscourseIduserId($user_id, $course_id, $body)

Update enrollment of user to course (Single update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$user_id = 56; // int | The ID of enrolled user
$course_id = 56; // int | The ID of course
$body = new \Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema(); // \Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollmentscourseIduserId($user_id, $course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollmentscourseIduserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of enrolled user |
 **course_id** | **int**| The ID of course |
 **body** | [**\Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentUpdateSingleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentUpdateSingleResponse**](../Model/LearnEnrollmentUpdateSingleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollmentscourseIduserId_0**
> \Swagger\Client\Model\LearnEnrollmentCreateSingleResponse enrollmentLearnv1enrollmentscourseIduserId_0($user_id, $course_id, $body)

Enroll user/s in course/s



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$user_id = 56; // int | The ID of user
$course_id = 56; // int | The ID of course
$body = new \Swagger\Client\Model\LearnEnrollmentCreateSingleSchema(); // \Swagger\Client\Model\LearnEnrollmentCreateSingleSchema | Raw Body

try {
    $result = $api_instance->enrollmentLearnv1enrollmentscourseIduserId_0($user_id, $course_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollmentscourseIduserId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The ID of user |
 **course_id** | **int**| The ID of course |
 **body** | [**\Swagger\Client\Model\LearnEnrollmentCreateSingleSchema**](../Model/\Swagger\Client\Model\LearnEnrollmentCreateSingleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnEnrollmentCreateSingleResponse**](../Model/LearnEnrollmentCreateSingleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollmentsidCourseidUser**
> \Swagger\Client\Model\LearnEnrollmentViewResponse enrollmentLearnv1enrollmentsidCourseidUser($id_course, $id_user)

View information for enrolled user on current course.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$id_course = 56; // int | ID of the course
$id_user = 56; // int | ID of the user

try {
    $result = $api_instance->enrollmentLearnv1enrollmentsidCourseidUser($id_course, $id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollmentsidCourseidUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_course** | **int**| ID of the course |
 **id_user** | **int**| ID of the user |

### Return type

[**\Swagger\Client\Model\LearnEnrollmentViewResponse**](../Model/LearnEnrollmentViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentLearnv1enrollmentsidCourseidUser_0**
> \Swagger\Client\Model\LearnEnrollmentDeleteResponse enrollmentLearnv1enrollmentsidCourseidUser_0($id_course, $id_user)

Un - Enroll user in course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentApi();
$id_course = 56; // int | The id of the course
$id_user = 56; // int | The id of enrolled user

try {
    $result = $api_instance->enrollmentLearnv1enrollmentsidCourseidUser_0($id_course, $id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentApi->enrollmentLearnv1enrollmentsidCourseidUser_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_course** | **int**| The id of the course |
 **id_user** | **int**| The id of enrolled user |

### Return type

[**\Swagger\Client\Model\LearnEnrollmentDeleteResponse**](../Model/LearnEnrollmentDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

