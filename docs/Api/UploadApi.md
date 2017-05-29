# Swagger\Client\UploadApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadManagev1upload**](UploadApi.md#uploadManagev1upload) | **DELETE** /manage/v1/upload | Delete File from Amazon S3
[**uploadManagev1uploadpresignedUrl**](UploadApi.md#uploadManagev1uploadpresignedUrl) | **GET** /manage/v1/upload/presigned_url | Generate Amazon S3 Pre-Signed URL for given File


# **uploadManagev1upload**
> \Swagger\Client\Model\ManageUploadDeleteResponse uploadManagev1upload($body)

Delete File from Amazon S3



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UploadApi();
$body = new \Swagger\Client\Model\ManageUploadDeleteSchema(); // \Swagger\Client\Model\ManageUploadDeleteSchema | Raw Body

try {
    $result = $api_instance->uploadManagev1upload($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadManagev1upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUploadDeleteSchema**](../Model/\Swagger\Client\Model\ManageUploadDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUploadDeleteResponse**](../Model/ManageUploadDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadManagev1uploadpresignedUrl**
> \Swagger\Client\Model\ManageUploadPresignedUrlResponse uploadManagev1uploadpresignedUrl($filename, $mime, $collection, $subfolder, $keep_original_filename)

Generate Amazon S3 Pre-Signed URL for given File



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UploadApi();
$filename = "filename_example"; // string | The name of the File
$mime = "mime_example"; // string | The mimetype of the file being processed
$collection = "collection_example"; // string | collection name
$subfolder = "subfolder_example"; // string | sub-folder to place the file in
$keep_original_filename = true; // bool | whether to keep the given filename instead of generating a random hash

try {
    $result = $api_instance->uploadManagev1uploadpresignedUrl($filename, $mime, $collection, $subfolder, $keep_original_filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadApi->uploadManagev1uploadpresignedUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| The name of the File |
 **mime** | **string**| The mimetype of the file being processed |
 **collection** | **string**| collection name |
 **subfolder** | **string**| sub-folder to place the file in | [optional]
 **keep_original_filename** | **bool**| whether to keep the given filename instead of generating a random hash | [optional]

### Return type

[**\Swagger\Client\Model\ManageUploadPresignedUrlResponse**](../Model/ManageUploadPresignedUrlResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

