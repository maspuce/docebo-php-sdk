# Swagger\Client\JobApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**jobManagev1job**](JobApi.md#jobManagev1job) | **GET** /manage/v1/job | Returns a paginated array of job descriptors matching the specified filters.
[**jobManagev1job_0**](JobApi.md#jobManagev1job_0) | **POST** /manage/v1/job | Pushes a new background job for immediate handling and execution.
[**jobManagev1jobhash**](JobApi.md#jobManagev1jobhash) | **GET** /manage/v1/job/{hash} | Returns the descriptor of the requested job.
[**jobManagev1jobhash_0**](JobApi.md#jobManagev1jobhash_0) | **PUT** /manage/v1/job/{hash} | Updates a subset of information of a given job.
[**jobManagev1jobhash_1**](JobApi.md#jobManagev1jobhash_1) | **DELETE** /manage/v1/job/{hash} | Deletes the passed job. This operation is only possible if the job is in the \&quot;aborted\&quot; or \&quot;completed\&quot; state.


# **jobManagev1job**
> \Swagger\Client\Model\ManageJobViewJobsResponse jobManagev1job($id_author, $status, $page, $page_size)

Returns a paginated array of job descriptors matching the specified filters.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\JobApi();
$id_author = 56; // int | A user ID used to filter returned job records. If not provided, the API will only return jobs belonging to the logged in user.
$status = "status_example"; // string | A status identifier user to filter jobs. Possible values: &quot;queued&quot;, &quot;running&quot;, &quot;aborted&quot;, &quot;completed&quot;.
$page = 56; // int | Determines the page number [job_descriptor pagination] and limits the amount of results to that of the corresponding page.
$page_size = 56; // int | Maximum number of results per page, default will be the system setting for elements per page

try {
    $result = $api_instance->jobManagev1job($id_author, $status, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobManagev1job: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_author** | **int**| A user ID used to filter returned job records. If not provided, the API will only return jobs belonging to the logged in user. | [optional]
 **status** | **string**| A status identifier user to filter jobs. Possible values: &amp;quot;queued&amp;quot;, &amp;quot;running&amp;quot;, &amp;quot;aborted&amp;quot;, &amp;quot;completed&amp;quot;. | [optional]
 **page** | **int**| Determines the page number [job_descriptor pagination] and limits the amount of results to that of the corresponding page. | [optional]
 **page_size** | **int**| Maximum number of results per page, default will be the system setting for elements per page | [optional]

### Return type

[**\Swagger\Client\Model\ManageJobViewJobsResponse**](../Model/ManageJobViewJobsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobManagev1job_0**
> \Swagger\Client\Model\ManageJobCreateJobResponse jobManagev1job_0($body)

Pushes a new background job for immediate handling and execution.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\JobApi();
$body = new \Swagger\Client\Model\ManageJobCreateJobSchema(); // \Swagger\Client\Model\ManageJobCreateJobSchema | Raw Body

try {
    $result = $api_instance->jobManagev1job_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobManagev1job_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageJobCreateJobSchema**](../Model/\Swagger\Client\Model\ManageJobCreateJobSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageJobCreateJobResponse**](../Model/ManageJobCreateJobResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobManagev1jobhash**
> \Swagger\Client\Model\ManageJobViewJobResponse jobManagev1jobhash($hash)

Returns the descriptor of the requested job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\JobApi();
$hash = "hash_example"; // string | Hash of the background job.

try {
    $result = $api_instance->jobManagev1jobhash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobManagev1jobhash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Hash of the background job. |

### Return type

[**\Swagger\Client\Model\ManageJobViewJobResponse**](../Model/ManageJobViewJobResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobManagev1jobhash_0**
> \Swagger\Client\Model\ManageJobUpdateJobResponse jobManagev1jobhash_0($hash, $body)

Updates a subset of information of a given job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\JobApi();
$hash = "hash_example"; // string | Hash of the background job.
$body = new \Swagger\Client\Model\ManageJobUpdateJobSchema(); // \Swagger\Client\Model\ManageJobUpdateJobSchema | Raw Body

try {
    $result = $api_instance->jobManagev1jobhash_0($hash, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobManagev1jobhash_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Hash of the background job. |
 **body** | [**\Swagger\Client\Model\ManageJobUpdateJobSchema**](../Model/\Swagger\Client\Model\ManageJobUpdateJobSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageJobUpdateJobResponse**](../Model/ManageJobUpdateJobResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobManagev1jobhash_1**
> \Swagger\Client\Model\ManageJobDeleteJobResponse jobManagev1jobhash_1($hash)

Deletes the passed job. This operation is only possible if the job is in the \"aborted\" or \"completed\" state.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\JobApi();
$hash = "hash_example"; // string | Hash of the background job.

try {
    $result = $api_instance->jobManagev1jobhash_1($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobManagev1jobhash_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Hash of the background job. |

### Return type

[**\Swagger\Client\Model\ManageJobDeleteJobResponse**](../Model/ManageJobDeleteJobResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

