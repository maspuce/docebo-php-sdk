# Swagger\Client\ImporterApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importerManagev1importerdownloadCsvSampletype**](ImporterApi.md#importerManagev1importerdownloadCsvSampletype) | **GET** /manage/v1/importer/download_csv_sample/{type} | Get CSV Sample URL
[**importerManagev1importergetCsvSampleData**](ImporterApi.md#importerManagev1importergetCsvSampleData) | **GET** /manage/v1/importer/get_csv_sample_data | Get a preview for the to be imported CSV file.
[**importerManagev1importerpreset**](ImporterApi.md#importerManagev1importerpreset) | **POST** /manage/v1/importer/preset | Create an importer preset
[**importerManagev1importerpresetid**](ImporterApi.md#importerManagev1importerpresetid) | **PUT** /manage/v1/importer/preset/{id} | Update an importer preset
[**importerManagev1importerpresetid_0**](ImporterApi.md#importerManagev1importerpresetid_0) | **DELETE** /manage/v1/importer/preset/{id} | Delete an importer preset
[**importerManagev1importerpresettype**](ImporterApi.md#importerManagev1importerpresettype) | **GET** /manage/v1/importer/preset/{type} | View importer presets for the selected type


# **importerManagev1importerdownloadCsvSampletype**
> \Swagger\Client\Model\ManageImporterDownloadCsvSampleResponse importerManagev1importerdownloadCsvSampletype($type)

Get CSV Sample URL



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$type = "type_example"; // string | Type of the CSV sample

try {
    $result = $api_instance->importerManagev1importerdownloadCsvSampletype($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importerdownloadCsvSampletype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Type of the CSV sample |

### Return type

[**\Swagger\Client\Model\ManageImporterDownloadCsvSampleResponse**](../Model/ManageImporterDownloadCsvSampleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importerManagev1importergetCsvSampleData**
> \Swagger\Client\Model\ManageImporterGetCsvSampleDataResponse importerManagev1importergetCsvSampleData($filename, $charset, $skip_first_row, $delimiter)

Get a preview for the to be imported CSV file.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$filename = "filename_example"; // string | URL linking to the CSV file
$charset = "charset_example"; // string | The used character set for the CSV file. Supported charsets: 'Windows-1252', 'BIG-5' and 'UTF-8'
$skip_first_row = true; // bool | Will the first line contain the column names
$delimiter = "delimiter_example"; // string | The delimiter used to separate the fields in a row. Default is &quot;,&quot;

try {
    $result = $api_instance->importerManagev1importergetCsvSampleData($filename, $charset, $skip_first_row, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importergetCsvSampleData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| URL linking to the CSV file |
 **charset** | **string**| The used character set for the CSV file. Supported charsets: &#39;Windows-1252&#39;, &#39;BIG-5&#39; and &#39;UTF-8&#39; |
 **skip_first_row** | **bool**| Will the first line contain the column names |
 **delimiter** | **string**| The delimiter used to separate the fields in a row. Default is &amp;quot;,&amp;quot; | [optional]

### Return type

[**\Swagger\Client\Model\ManageImporterGetCsvSampleDataResponse**](../Model/ManageImporterGetCsvSampleDataResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importerManagev1importerpreset**
> \Swagger\Client\Model\ManageImporterCreatePresetResponse importerManagev1importerpreset($body)

Create an importer preset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$body = new \Swagger\Client\Model\ManageImporterCreatePresetSchema(); // \Swagger\Client\Model\ManageImporterCreatePresetSchema | Raw Body

try {
    $result = $api_instance->importerManagev1importerpreset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importerpreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageImporterCreatePresetSchema**](../Model/\Swagger\Client\Model\ManageImporterCreatePresetSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageImporterCreatePresetResponse**](../Model/ManageImporterCreatePresetResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importerManagev1importerpresetid**
> \Swagger\Client\Model\ManageImporterUpdatePresetResponse importerManagev1importerpresetid($id, $body)

Update an importer preset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$id = 56; // int | Preset ID
$body = new \Swagger\Client\Model\ManageImporterUpdatePresetSchema(); // \Swagger\Client\Model\ManageImporterUpdatePresetSchema | Raw Body

try {
    $result = $api_instance->importerManagev1importerpresetid($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importerpresetid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Preset ID |
 **body** | [**\Swagger\Client\Model\ManageImporterUpdatePresetSchema**](../Model/\Swagger\Client\Model\ManageImporterUpdatePresetSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageImporterUpdatePresetResponse**](../Model/ManageImporterUpdatePresetResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importerManagev1importerpresetid_0**
> \Swagger\Client\Model\ManageImporterDeletePresetResponse importerManagev1importerpresetid_0($id)

Delete an importer preset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$id = 56; // int | Preset ID

try {
    $result = $api_instance->importerManagev1importerpresetid_0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importerpresetid_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Preset ID |

### Return type

[**\Swagger\Client\Model\ManageImporterDeletePresetResponse**](../Model/ManageImporterDeletePresetResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importerManagev1importerpresettype**
> \Swagger\Client\Model\ManageImporterViewPresetsResponse importerManagev1importerpresettype($type)

View importer presets for the selected type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ImporterApi();
$type = "type_example"; // string | The group name

try {
    $result = $api_instance->importerManagev1importerpresettype($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImporterApi->importerManagev1importerpresettype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The group name |

### Return type

[**\Swagger\Client\Model\ManageImporterViewPresetsResponse**](../Model/ManageImporterViewPresetsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

