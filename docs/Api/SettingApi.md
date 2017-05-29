# Swagger\Client\SettingApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingManagev1setting**](SettingApi.md#settingManagev1setting) | **PUT** /manage/v1/setting | View settings.
[**settingManagev1settingsettings**](SettingApi.md#settingManagev1settingsettings) | **GET** /manage/v1/setting/{settings} | View settings.


# **settingManagev1setting**
> \Swagger\Client\Model\ManageSettingUpdateResponse settingManagev1setting($settings)

View settings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SettingApi();
$settings = array("settings_example"); // string[] | Settings which should be updated (key,value)

try {
    $result = $api_instance->settingManagev1setting($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingApi->settingManagev1setting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**string[]**](../Model/string.md)| Settings which should be updated (key,value) |

### Return type

[**\Swagger\Client\Model\ManageSettingUpdateResponse**](../Model/ManageSettingUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingManagev1settingsettings**
> \Swagger\Client\Model\ManageSettingIndexResponse settingManagev1settingsettings($settings)

View settings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SettingApi();
$settings = "settings_example"; // string | Comma separated list of the settings which should be returned

try {
    $result = $api_instance->settingManagev1settingsettings($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingApi->settingManagev1settingsettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | **string**| Comma separated list of the settings which should be returned |

### Return type

[**\Swagger\Client\Model\ManageSettingIndexResponse**](../Model/ManageSettingIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

