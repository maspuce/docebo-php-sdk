# Swagger\Client\EnrollmentfieldApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enrollmentfieldManagev1enrollmentFields**](EnrollmentfieldApi.md#enrollmentfieldManagev1enrollmentFields) | **GET** /manage/v1/enrollment_fields | Retrieves the list of Enrollment fields, filtered on input parameters
[**enrollmentfieldManagev1enrollmentFields_0**](EnrollmentfieldApi.md#enrollmentfieldManagev1enrollmentFields_0) | **POST** /manage/v1/enrollment_fields | Create enrollment field
[**enrollmentfieldManagev1enrollmentFields_1**](EnrollmentfieldApi.md#enrollmentfieldManagev1enrollmentFields_1) | **DELETE** /manage/v1/enrollment_fields | Deletes more then one enrolment fields
[**enrollmentfieldManagev1enrollmentFieldsfieldId**](EnrollmentfieldApi.md#enrollmentfieldManagev1enrollmentFieldsfieldId) | **PUT** /manage/v1/enrollment_fields/{field_id} | Update enrollment fields for selected courses
[**enrollmentfieldManagev1enrollmentFieldsfieldId_0**](EnrollmentfieldApi.md#enrollmentfieldManagev1enrollmentFieldsfieldId_0) | **DELETE** /manage/v1/enrollment_fields/{field_id} | Deletes one enrolment field


# **enrollmentfieldManagev1enrollmentFields**
> \Swagger\Client\Model\ManageEnrollmentfieldListResponse enrollmentfieldManagev1enrollmentFields($enrollment_field_title, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $course)

Retrieves the list of Enrollment fields, filtered on input parameters

All filter parameters are optional. If filter parameters are provided operation is OR for enrollment_field_title and AND among other parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentfieldApi();
$enrollment_field_title = array("enrollment_field_title_example"); // string[] | Search text in the enrollment field title. Default empty array. OR is performed among multiple array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$course = 56; // int | Filter enrollment fields by course

try {
    $result = $api_instance->enrollmentfieldManagev1enrollmentFields($enrollment_field_title, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentfieldApi->enrollmentfieldManagev1enrollmentFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enrollment_field_title** | [**string[]**](../Model/string.md)| Search text in the enrollment field title. Default empty array. OR is performed among multiple array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **course** | **int**| Filter enrollment fields by course | [optional]

### Return type

[**\Swagger\Client\Model\ManageEnrollmentfieldListResponse**](../Model/ManageEnrollmentfieldListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentfieldManagev1enrollmentFields_0**
> \Swagger\Client\Model\ManageEnrollmentfieldCreateResponse enrollmentfieldManagev1enrollmentFields_0($body)

Create enrollment field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentfieldApi();
$body = new \Swagger\Client\Model\ManageEnrollmentfieldCreateSchema(); // \Swagger\Client\Model\ManageEnrollmentfieldCreateSchema | Raw Body

try {
    $result = $api_instance->enrollmentfieldManagev1enrollmentFields_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentfieldApi->enrollmentfieldManagev1enrollmentFields_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageEnrollmentfieldCreateSchema**](../Model/\Swagger\Client\Model\ManageEnrollmentfieldCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageEnrollmentfieldCreateResponse**](../Model/ManageEnrollmentfieldCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentfieldManagev1enrollmentFields_1**
> \Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteResponse enrollmentfieldManagev1enrollmentFields_1($body)

Deletes more then one enrolment fields



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentfieldApi();
$body = new \Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteSchema(); // \Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteSchema | Raw Body

try {
    $result = $api_instance->enrollmentfieldManagev1enrollmentFields_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentfieldApi->enrollmentfieldManagev1enrollmentFields_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteSchema**](../Model/\Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageEnrollmentfieldMultipleDeleteResponse**](../Model/ManageEnrollmentfieldMultipleDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentfieldManagev1enrollmentFieldsfieldId**
> \Swagger\Client\Model\ManageEnrollmentfieldUpdateResponse enrollmentfieldManagev1enrollmentFieldsfieldId($field_id, $body)

Update enrollment fields for selected courses



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentfieldApi();
$field_id = 56; // int | Id of selected field.
$body = new \Swagger\Client\Model\ManageEnrollmentfieldUpdateSchema(); // \Swagger\Client\Model\ManageEnrollmentfieldUpdateSchema | Raw Body

try {
    $result = $api_instance->enrollmentfieldManagev1enrollmentFieldsfieldId($field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentfieldApi->enrollmentfieldManagev1enrollmentFieldsfieldId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Id of selected field. |
 **body** | [**\Swagger\Client\Model\ManageEnrollmentfieldUpdateSchema**](../Model/\Swagger\Client\Model\ManageEnrollmentfieldUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageEnrollmentfieldUpdateResponse**](../Model/ManageEnrollmentfieldUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollmentfieldManagev1enrollmentFieldsfieldId_0**
> \Swagger\Client\Model\ManageEnrollmentfieldDeleteResponse enrollmentfieldManagev1enrollmentFieldsfieldId_0($field_id)

Deletes one enrolment field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EnrollmentfieldApi();
$field_id = 56; // int | Id of selected field.

try {
    $result = $api_instance->enrollmentfieldManagev1enrollmentFieldsfieldId_0($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnrollmentfieldApi->enrollmentfieldManagev1enrollmentFieldsfieldId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Id of selected field. |

### Return type

[**\Swagger\Client\Model\ManageEnrollmentfieldDeleteResponse**](../Model/ManageEnrollmentfieldDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

