# Swagger\Client\GamificationApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gamificationManagev1gamificationsummary**](GamificationApi.md#gamificationManagev1gamificationsummary) | **GET** /manage/v1/gamification/summary | Get Gamification information for the current user


# **gamificationManagev1gamificationsummary**
> \Swagger\Client\Model\ManageGamificationSummaryResponse gamificationManagev1gamificationsummary()

Get Gamification information for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\GamificationApi();

try {
    $result = $api_instance->gamificationManagev1gamificationsummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamificationApi->gamificationManagev1gamificationsummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageGamificationSummaryResponse**](../Model/ManageGamificationSummaryResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

