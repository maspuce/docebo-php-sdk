# Swagger\Client\IndustryApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**industrySkillv1industries**](IndustryApi.md#industrySkillv1industries) | **GET** /skill/v1/industries | Retrieves the list of Industries


# **industrySkillv1industries**
> \Swagger\Client\Model\SkillIndustryListResponse industrySkillv1industries($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $paginated)

Retrieves the list of Industries

Industries are only available for the pre-defined skills. User-defined skills are not industry specific. Rather, they can only be area specific.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\IndustryApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items should be  returned. Options: 0, 1 default 0
$paginated = 56; // int | Possible values 0 or 1. Default - 1. If is 0 all industries are returned.

try {
    $result = $api_instance->industrySkillv1industries($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $paginated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->industrySkillv1industries: ', $e->getMessage(), PHP_EOL;
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
 **get_total_count** | **int**| If 1 the count of found items should be  returned. Options: 0, 1 default 0 | [optional]
 **paginated** | **int**| Possible values 0 or 1. Default - 1. If is 0 all industries are returned. | [optional]

### Return type

[**\Swagger\Client\Model\SkillIndustryListResponse**](../Model/SkillIndustryListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

