# Swagger\Client\ErpApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**erpManagev1erpurl**](ErpApi.md#erpManagev1erpurl) | **GET** /manage/v1/erp/url | Generate URL Url by given path and append the params needed for authentication for ERP


# **erpManagev1erpurl**
> \Swagger\Client\Model\ManageErpUrlResponse erpManagev1erpurl($path)

Generate URL Url by given path and append the params needed for authentication for ERP



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ErpApi();
$path = "path_example"; // string | The full path to be appended after ERP domain

try {
    $result = $api_instance->erpManagev1erpurl($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErpApi->erpManagev1erpurl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| The full path to be appended after ERP domain |

### Return type

[**\Swagger\Client\Model\ManageErpUrlResponse**](../Model/ManageErpUrlResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

