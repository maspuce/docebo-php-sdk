# Swagger\Client\PlayerApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**playerManagev1playerlicense**](PlayerApi.md#playerManagev1playerlicense) | **GET** /manage/v1/player/license | Get player license key


# **playerManagev1playerlicense**
> \Swagger\Client\Model\ManagePlayerGetLicenseResponse playerManagev1playerlicense()

Get player license key



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlayerApi();

try {
    $result = $api_instance->playerManagev1playerlicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->playerManagev1playerlicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManagePlayerGetLicenseResponse**](../Model/ManagePlayerGetLicenseResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

