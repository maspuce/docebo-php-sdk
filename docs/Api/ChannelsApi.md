# Swagger\Client\ChannelsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsManagev1channelsid**](ChannelsApi.md#channelsManagev1channelsid) | **PUT** /manage/v1/channels/{id} | Update Channel Details
[**channelsSkillv1channelschannelIdprograms**](ChannelsApi.md#channelsSkillv1channelschannelIdprograms) | **POST** /skill/v1/channels/{channel_id}/programs | Assigns a Channel to a Program
[**channelsSkillv1channelschannelIdprograms_0**](ChannelsApi.md#channelsSkillv1channelschannelIdprograms_0) | **DELETE** /skill/v1/channels/{channel_id}/programs | De-assigns a Coach&amp;Share Channel from a Program
[**channelsSkillv1channelschannelIdskills**](ChannelsApi.md#channelsSkillv1channelschannelIdskills) | **GET** /skill/v1/channels/{channel_id}/skills | Retrieves the list of Skills, that are assigned to a Coach&amp;Share Channel
[**channelsSkillv1channelschannelIdskills_0**](ChannelsApi.md#channelsSkillv1channelschannelIdskills_0) | **POST** /skill/v1/channels/{channel_id}/skills | Assigns Skill(s) to a Coach&amp;Share Channel.
[**channelsSkillv1channelschannelIdskills_1**](ChannelsApi.md#channelsSkillv1channelschannelIdskills_1) | **DELETE** /skill/v1/channels/{channel_id}/skills | De-assigns an existing Skill(s) from a Coach&amp;Share Channel


# **channelsManagev1channelsid**
> \Swagger\Client\Model\ManageChannelsUpdateResponse channelsManagev1channelsid($id, $body)

Update Channel Details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$id = 56; // int | ID of the channel
$body = new \Swagger\Client\Model\ManageChannelsUpdateSchema(); // \Swagger\Client\Model\ManageChannelsUpdateSchema | Raw Body

try {
    $result = $api_instance->channelsManagev1channelsid($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsManagev1channelsid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the channel |
 **body** | [**\Swagger\Client\Model\ManageChannelsUpdateSchema**](../Model/\Swagger\Client\Model\ManageChannelsUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageChannelsUpdateResponse**](../Model/ManageChannelsUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSkillv1channelschannelIdprograms**
> \Swagger\Client\Model\SkillChannelsAssignProgramsResponse channelsSkillv1channelschannelIdprograms($channel_id, $body)

Assigns a Channel to a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$channel_id = 56; // int | channel id
$body = new \Swagger\Client\Model\SkillChannelsAssignProgramsSchema(); // \Swagger\Client\Model\SkillChannelsAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->channelsSkillv1channelschannelIdprograms($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSkillv1channelschannelIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| channel id |
 **body** | [**\Swagger\Client\Model\SkillChannelsAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillChannelsAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillChannelsAssignProgramsResponse**](../Model/SkillChannelsAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSkillv1channelschannelIdprograms_0**
> \Swagger\Client\Model\SkillChannelsUnassignProgramsResponse channelsSkillv1channelschannelIdprograms_0($channel_id, $body)

De-assigns a Coach&Share Channel from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$channel_id = 56; // int | channel id
$body = new \Swagger\Client\Model\SkillChannelsUnassignProgramsSchema(); // \Swagger\Client\Model\SkillChannelsUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->channelsSkillv1channelschannelIdprograms_0($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSkillv1channelschannelIdprograms_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| channel id |
 **body** | [**\Swagger\Client\Model\SkillChannelsUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillChannelsUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillChannelsUnassignProgramsResponse**](../Model/SkillChannelsUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSkillv1channelschannelIdskills**
> \Swagger\Client\Model\SkillChannelsListSkillsResponse channelsSkillv1channelschannelIdskills($channel_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills, that are assigned to a Coach&Share Channel

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$channel_id = 56; // int | Channel id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->channelsSkillv1channelschannelIdskills($channel_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSkillv1channelschannelIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| Channel id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillChannelsListSkillsResponse**](../Model/SkillChannelsListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSkillv1channelschannelIdskills_0**
> \Swagger\Client\Model\SkillChannelsCreateResponse channelsSkillv1channelschannelIdskills_0($channel_id, $body)

Assigns Skill(s) to a Coach&Share Channel.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$channel_id = 56; // int | Channel id
$body = new \Swagger\Client\Model\SkillChannelsCreateSchema(); // \Swagger\Client\Model\SkillChannelsCreateSchema | Raw Body

try {
    $result = $api_instance->channelsSkillv1channelschannelIdskills_0($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSkillv1channelschannelIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| Channel id |
 **body** | [**\Swagger\Client\Model\SkillChannelsCreateSchema**](../Model/\Swagger\Client\Model\SkillChannelsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillChannelsCreateResponse**](../Model/SkillChannelsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelsSkillv1channelschannelIdskills_1**
> \Swagger\Client\Model\SkillChannelsDeleteSkillsResponse channelsSkillv1channelschannelIdskills_1($channel_id, $body)

De-assigns an existing Skill(s) from a Coach&Share Channel



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ChannelsApi();
$channel_id = 56; // int | ID of an channel to delete
$body = new \Swagger\Client\Model\SkillChannelsDeleteSkillsSchema(); // \Swagger\Client\Model\SkillChannelsDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->channelsSkillv1channelschannelIdskills_1($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsSkillv1channelschannelIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| ID of an channel to delete |
 **body** | [**\Swagger\Client\Model\SkillChannelsDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillChannelsDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillChannelsDeleteSkillsResponse**](../Model/SkillChannelsDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

