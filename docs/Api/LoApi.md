# Swagger\Client\LoApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loLearnv1loid**](LoApi.md#loLearnv1loid) | **GET** /learn/v1/lo/{id} | Returns information for a single learning object
[**loLearnv1loidLoplay**](LoApi.md#loLearnv1loidLoplay) | **GET** /learn/v1/lo/{id_lo}/play | Play single LO or scorm|tincan chapter
[**loLearnv1loidtrack**](LoApi.md#loLearnv1loidtrack) | **POST** /learn/v1/lo/{id}/track | Track single LO


# **loLearnv1loid**
> \Swagger\Client\Model\LearnLoViewResponse loLearnv1loid($id)

Returns information for a single learning object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LoApi();
$id = 56; // int | The learning object ID

try {
    $result = $api_instance->loLearnv1loid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoApi->loLearnv1loid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The learning object ID |

### Return type

[**\Swagger\Client\Model\LearnLoViewResponse**](../Model/LearnLoViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loLearnv1loidLoplay**
> \Swagger\Client\Model\LearnLoPlayResponse loLearnv1loidLoplay($id_lo, $device)

Play single LO or scorm|tincan chapter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LoApi();
$id_lo = "id_lo_example"; // string | ID if the LO or combination if ID LO and SCO/TIN CAN item (id_lo:id_chapter)
$device = "device_example"; // string | Device target e.g. tablet, desktop, smartphone

try {
    $result = $api_instance->loLearnv1loidLoplay($id_lo, $device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoApi->loLearnv1loidLoplay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_lo** | **string**| ID if the LO or combination if ID LO and SCO/TIN CAN item (id_lo:id_chapter) |
 **device** | **string**| Device target e.g. tablet, desktop, smartphone | [optional]

### Return type

[**\Swagger\Client\Model\LearnLoPlayResponse**](../Model/LearnLoPlayResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loLearnv1loidtrack**
> \Swagger\Client\Model\LearnLoTrackResponse loLearnv1loidtrack($id)

Track single LO



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LoApi();
$id = "id_example"; // string | The ID of the learning object or SCO chapter

try {
    $result = $api_instance->loLearnv1loidtrack($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoApi->loLearnv1loidtrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the learning object or SCO chapter |

### Return type

[**\Swagger\Client\Model\LearnLoTrackResponse**](../Model/LearnLoTrackResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

