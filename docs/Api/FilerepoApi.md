# Swagger\Client\FilerepoApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filerepoLearnv1filerepocreateNewFolder**](FilerepoApi.md#filerepoLearnv1filerepocreateNewFolder) | **POST** /learn/v1/filerepo/createNewFolder | Create New Folder API
[**filerepoLearnv1filerepodownloadCourseFile**](FilerepoApi.md#filerepoLearnv1filerepodownloadCourseFile) | **GET** /learn/v1/filerepo/downloadCourseFile | Download Course action
[**filerepoLearnv1filerepogetCourseFile**](FilerepoApi.md#filerepoLearnv1filerepogetCourseFile) | **GET** /learn/v1/filerepo/getCourseFile | Get Course File information action
[**filerepoLearnv1filerepogetCourseFiles**](FilerepoApi.md#filerepoLearnv1filerepogetCourseFiles) | **GET** /learn/v1/filerepo/getCourseFiles | Get Course Files information action
[**filerepoLearnv1filerepogetCourseFilesTree**](FilerepoApi.md#filerepoLearnv1filerepogetCourseFilesTree) | **GET** /learn/v1/filerepo/getCourseFilesTree | Get Course Files Tree information action
[**filerepoLearnv1filerepogetCourseFoldersTree**](FilerepoApi.md#filerepoLearnv1filerepogetCourseFoldersTree) | **GET** /learn/v1/filerepo/getCourseFoldersTree | Get Course Folders Tree information action
[**filerepoLearnv1filerepogetFileSessions**](FilerepoApi.md#filerepoLearnv1filerepogetFileSessions) | **GET** /learn/v1/filerepo/getFileSessions | get the sessions that are selected for a certain file.
[**filerepoLearnv1filerepogetSessions**](FilerepoApi.md#filerepoLearnv1filerepogetSessions) | **POST** /learn/v1/filerepo/getSessions | get the sessions of the course related to the repo area.
[**filerepoLearnv1filerepolinkByURL**](FilerepoApi.md#filerepoLearnv1filerepolinkByURL) | **POST** /learn/v1/filerepo/linkByURL | link a file by url to the repo area.
[**filerepoLearnv1filerepouploadNewFile**](FilerepoApi.md#filerepoLearnv1filerepouploadNewFile) | **POST** /learn/v1/filerepo/uploadNewFile | upload new file to the repo area


# **filerepoLearnv1filerepocreateNewFolder**
> \Swagger\Client\Model\LearnFilerepoCreateNewFolderResponse filerepoLearnv1filerepocreateNewFolder($body)

Create New Folder API



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$body = new \Swagger\Client\Model\LearnFilerepoCreateNewFolderSchema(); // \Swagger\Client\Model\LearnFilerepoCreateNewFolderSchema | Raw Body

try {
    $result = $api_instance->filerepoLearnv1filerepocreateNewFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepocreateNewFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnFilerepoCreateNewFolderSchema**](../Model/\Swagger\Client\Model\LearnFilerepoCreateNewFolderSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnFilerepoCreateNewFolderResponse**](../Model/LearnFilerepoCreateNewFolderResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepodownloadCourseFile**
> \Swagger\Client\Model\LearnFilerepoDownloadCourseFileResponse filerepoLearnv1filerepodownloadCourseFile($file_id, $course_id)

Download Course action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$file_id = 56; // int | The id of the file to be downloaded
$course_id = 56; // int | The id of the Course

try {
    $result = $api_instance->filerepoLearnv1filerepodownloadCourseFile($file_id, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepodownloadCourseFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| The id of the file to be downloaded |
 **course_id** | **int**| The id of the Course |

### Return type

[**\Swagger\Client\Model\LearnFilerepoDownloadCourseFileResponse**](../Model/LearnFilerepoDownloadCourseFileResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetCourseFile**
> \Swagger\Client\Model\LearnFilerepoGetCourseFileResponse filerepoLearnv1filerepogetCourseFile($file_id, $course_id)

Get Course File information action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$file_id = 56; // int | The id of the file to be downloaded
$course_id = 56; // int | The id of the Course

try {
    $result = $api_instance->filerepoLearnv1filerepogetCourseFile($file_id, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetCourseFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| The id of the file to be downloaded |
 **course_id** | **int**| The id of the Course |

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetCourseFileResponse**](../Model/LearnFilerepoGetCourseFileResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetCourseFiles**
> \Swagger\Client\Model\LearnFilerepoGetCourseFilesResponse filerepoLearnv1filerepogetCourseFiles($user_id, $course_id)

Get Course Files information action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$user_id = 56; // int | The id of the user who wants to get the list of files
$course_id = 56; // int | The id of the Course

try {
    $result = $api_instance->filerepoLearnv1filerepogetCourseFiles($user_id, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetCourseFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user who wants to get the list of files |
 **course_id** | **int**| The id of the Course |

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetCourseFilesResponse**](../Model/LearnFilerepoGetCourseFilesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetCourseFilesTree**
> \Swagger\Client\Model\LearnFilerepoGetCourseFilesTreeResponse filerepoLearnv1filerepogetCourseFilesTree($user_id, $course_id)

Get Course Files Tree information action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$user_id = 56; // int | The id of the user who wants to get the list of files
$course_id = 56; // int | The id of the Course

try {
    $result = $api_instance->filerepoLearnv1filerepogetCourseFilesTree($user_id, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetCourseFilesTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user who wants to get the list of files |
 **course_id** | **int**| The id of the Course |

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetCourseFilesTreeResponse**](../Model/LearnFilerepoGetCourseFilesTreeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetCourseFoldersTree**
> \Swagger\Client\Model\LearnFilerepoGetCourseFoldersTreeResponse filerepoLearnv1filerepogetCourseFoldersTree($user_id, $course_id)

Get Course Folders Tree information action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$user_id = 56; // int | The id of the user who wants to get the list of files
$course_id = 56; // int | The id of the Course

try {
    $result = $api_instance->filerepoLearnv1filerepogetCourseFoldersTree($user_id, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetCourseFoldersTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The id of the user who wants to get the list of files |
 **course_id** | **int**| The id of the Course |

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetCourseFoldersTreeResponse**](../Model/LearnFilerepoGetCourseFoldersTreeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetFileSessions**
> \Swagger\Client\Model\LearnFilerepoGetFileSessionsResponse filerepoLearnv1filerepogetFileSessions($file_id)

get the sessions that are selected for a certain file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$file_id = 56; // int | The id of the file.

try {
    $result = $api_instance->filerepoLearnv1filerepogetFileSessions($file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetFileSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| The id of the file. |

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetFileSessionsResponse**](../Model/LearnFilerepoGetFileSessionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepogetSessions**
> \Swagger\Client\Model\LearnFilerepoGetSessionsResponse filerepoLearnv1filerepogetSessions($body)

get the sessions of the course related to the repo area.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$body = new \Swagger\Client\Model\LearnFilerepoGetSessionsSchema(); // \Swagger\Client\Model\LearnFilerepoGetSessionsSchema | Raw Body

try {
    $result = $api_instance->filerepoLearnv1filerepogetSessions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepogetSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnFilerepoGetSessionsSchema**](../Model/\Swagger\Client\Model\LearnFilerepoGetSessionsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnFilerepoGetSessionsResponse**](../Model/LearnFilerepoGetSessionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepolinkByURL**
> \Swagger\Client\Model\LearnFilerepoLinkByURLResponse filerepoLearnv1filerepolinkByURL($body)

link a file by url to the repo area.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$body = new \Swagger\Client\Model\LearnFilerepoLinkByURLSchema(); // \Swagger\Client\Model\LearnFilerepoLinkByURLSchema | Raw Body

try {
    $result = $api_instance->filerepoLearnv1filerepolinkByURL($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepolinkByURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnFilerepoLinkByURLSchema**](../Model/\Swagger\Client\Model\LearnFilerepoLinkByURLSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnFilerepoLinkByURLResponse**](../Model/LearnFilerepoLinkByURLResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filerepoLearnv1filerepouploadNewFile**
> \Swagger\Client\Model\LearnFilerepoUploadNewFileResponse filerepoLearnv1filerepouploadNewFile($body)

upload new file to the repo area



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\FilerepoApi();
$body = new \Swagger\Client\Model\LearnFilerepoUploadNewFileSchema(); // \Swagger\Client\Model\LearnFilerepoUploadNewFileSchema | Raw Body

try {
    $result = $api_instance->filerepoLearnv1filerepouploadNewFile($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilerepoApi->filerepoLearnv1filerepouploadNewFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnFilerepoUploadNewFileSchema**](../Model/\Swagger\Client\Model\LearnFilerepoUploadNewFileSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnFilerepoUploadNewFileResponse**](../Model/LearnFilerepoUploadNewFileResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

