# Swagger\Client\ChannelDashboardApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelDashboardLearnv1channels**](ChannelDashboardApi.md#channelDashboardLearnv1channels) | **GET** /learn/v1/channels | List of Channels assets
[**channelDashboardLearnv1channelschannelIdassets**](ChannelDashboardApi.md#channelDashboardLearnv1channelschannelIdassets) | **GET** /learn/v1/channels/{channel_id}/assets | View channel assets


# **channelDashboardLearnv1channels**
> \Swagger\Client\Model\LearnChanneldashboardListResponse channelDashboardLearnv1channels($from, $count, $items_per_channel)

List of Channels assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelDashboardApi();
$from = 56; // int | Page to return, default 0
$count = 56; // int | Maximum number of results per page, default 10
$items_per_channel = 56; // int | Count of items per channel

try {
    $result = $api_instance->channelDashboardLearnv1channels($from, $count, $items_per_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelDashboardApi->channelDashboardLearnv1channels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Page to return, default 0 | [optional]
 **count** | **int**| Maximum number of results per page, default 10 | [optional]
 **items_per_channel** | **int**| Count of items per channel | [optional]

### Return type

[**\Swagger\Client\Model\LearnChanneldashboardListResponse**](../Model/LearnChanneldashboardListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelDashboardLearnv1channelschannelIdassets**
> \Swagger\Client\Model\LearnChanneldashboardViewResponse channelDashboardLearnv1channelschannelIdassets($channel_id, $from, $count)

View channel assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelDashboardApi();
$channel_id = 56; // int | ID of the channel
$from = 56; // int | Page to return, default 0
$count = 56; // int | Maximum number of results per page, default 10

try {
    $result = $api_instance->channelDashboardLearnv1channelschannelIdassets($channel_id, $from, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelDashboardApi->channelDashboardLearnv1channelschannelIdassets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| ID of the channel |
 **from** | **int**| Page to return, default 0 | [optional]
 **count** | **int**| Maximum number of results per page, default 10 | [optional]

### Return type

[**\Swagger\Client\Model\LearnChanneldashboardViewResponse**](../Model/LearnChanneldashboardViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

