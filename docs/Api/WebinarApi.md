# Swagger\Client\WebinarApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webinarLearnv1webinaridSessiondateDayrecording**](WebinarApi.md#webinarLearnv1webinaridSessiondateDayrecording) | **POST** /learn/v1/webinar/{id_session}/{date_day}/recording | Submit a webinar recording for a session date
[**webinarLearnv1webinaridSessiondateDayrecordingStatus**](WebinarApi.md#webinarLearnv1webinaridSessiondateDayrecordingStatus) | **GET** /learn/v1/webinar/{id_session}/{date_day}/recording_status | Check the status of a webinar recording for a session date
[**webinarLearnv1webinaridSessiondateDayrecording_0**](WebinarApi.md#webinarLearnv1webinaridSessiondateDayrecording_0) | **DELETE** /learn/v1/webinar/{id_session}/{date_day}/recording | Submit a webinar recording for a session date


# **webinarLearnv1webinaridSessiondateDayrecording**
> \Swagger\Client\Model\LearnWebinarSubmitRecordingResponse webinarLearnv1webinaridSessiondateDayrecording($id_session, $date_day)

Submit a webinar recording for a session date



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebinarApi();
$id_session = 56; // int | The id of the session
$date_day = "date_day_example"; // string | The day of the session date

try {
    $result = $api_instance->webinarLearnv1webinaridSessiondateDayrecording($id_session, $date_day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarApi->webinarLearnv1webinaridSessiondateDayrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_session** | **int**| The id of the session |
 **date_day** | **string**| The day of the session date |

### Return type

[**\Swagger\Client\Model\LearnWebinarSubmitRecordingResponse**](../Model/LearnWebinarSubmitRecordingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarLearnv1webinaridSessiondateDayrecordingStatus**
> \Swagger\Client\Model\LearnWebinarCheckRecordingResponse webinarLearnv1webinaridSessiondateDayrecordingStatus($id_session, $date_day)

Check the status of a webinar recording for a session date



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebinarApi();
$id_session = 56; // int | The id of the session
$date_day = "date_day_example"; // string | The day of the session date

try {
    $result = $api_instance->webinarLearnv1webinaridSessiondateDayrecordingStatus($id_session, $date_day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarApi->webinarLearnv1webinaridSessiondateDayrecordingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_session** | **int**| The id of the session |
 **date_day** | **string**| The day of the session date |

### Return type

[**\Swagger\Client\Model\LearnWebinarCheckRecordingResponse**](../Model/LearnWebinarCheckRecordingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webinarLearnv1webinaridSessiondateDayrecording_0**
> \Swagger\Client\Model\LearnWebinarDeleteRecordingResponse webinarLearnv1webinaridSessiondateDayrecording_0($id_session, $date_day)

Submit a webinar recording for a session date



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\WebinarApi();
$id_session = 56; // int | The id of the session
$date_day = "date_day_example"; // string | The day of the session date

try {
    $result = $api_instance->webinarLearnv1webinaridSessiondateDayrecording_0($id_session, $date_day);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebinarApi->webinarLearnv1webinaridSessiondateDayrecording_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_session** | **int**| The id of the session |
 **date_day** | **string**| The day of the session date |

### Return type

[**\Swagger\Client\Model\LearnWebinarDeleteRecordingResponse**](../Model/LearnWebinarDeleteRecordingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

