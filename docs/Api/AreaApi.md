# Swagger\Client\AreaApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**areaSkillv1areas**](AreaApi.md#areaSkillv1areas) | **GET** /skill/v1/areas | Retrieves a list of Areas
[**areaSkillv1areas_0**](AreaApi.md#areaSkillv1areas_0) | **POST** /skill/v1/areas | Creates a new Area for Skills grouping
[**areaSkillv1areas_1**](AreaApi.md#areaSkillv1areas_1) | **DELETE** /skill/v1/areas | Deletes one or more Areas


# **areaSkillv1areas**
> \Swagger\Client\Model\SkillAreaListResponse areaSkillv1areas($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $search_text, $paginated)

Retrieves a list of Areas

All filter parameters are optional. The predefined_UID ID is used for the synchronization with the pre-populated skill sets, and area_id is the unique id used for this scenario.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AreaApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$search_text = "search_text_example"; // string | Search text in the area title. Default - empty
$paginated = 56; // int | Possible values 0 or 1. Default - 1. If is 0 all areas returned.

try {
    $result = $api_instance->areaSkillv1areas($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $search_text, $paginated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaSkillv1areas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **search_text** | **string**| Search text in the area title. Default - empty | [optional]
 **paginated** | **int**| Possible values 0 or 1. Default - 1. If is 0 all areas returned. | [optional]

### Return type

[**\Swagger\Client\Model\SkillAreaListResponse**](../Model/SkillAreaListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **areaSkillv1areas_0**
> \Swagger\Client\Model\SkillAreaCreateResponse areaSkillv1areas_0($body)

Creates a new Area for Skills grouping



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AreaApi();
$body = new \Swagger\Client\Model\SkillAreaCreateSchema(); // \Swagger\Client\Model\SkillAreaCreateSchema | Raw Body

try {
    $result = $api_instance->areaSkillv1areas_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaSkillv1areas_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillAreaCreateSchema**](../Model/\Swagger\Client\Model\SkillAreaCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAreaCreateResponse**](../Model/SkillAreaCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **areaSkillv1areas_1**
> \Swagger\Client\Model\SkillAreaDeleteResponse areaSkillv1areas_1($body)

Deletes one or more Areas



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AreaApi();
$body = new \Swagger\Client\Model\SkillAreaDeleteSchema(); // \Swagger\Client\Model\SkillAreaDeleteSchema | Raw Body

try {
    $result = $api_instance->areaSkillv1areas_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreaApi->areaSkillv1areas_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillAreaDeleteSchema**](../Model/\Swagger\Client\Model\SkillAreaDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAreaDeleteResponse**](../Model/SkillAreaDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

