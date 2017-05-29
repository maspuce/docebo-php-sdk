# Swagger\Client\RatingtablesApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ratingtablesSkillv1ratingtables**](RatingtablesApi.md#ratingtablesSkillv1ratingtables) | **GET** /skill/v1/ratingtables | Retrieves the list of Rating Scales, filtered on input parameters
[**ratingtablesSkillv1ratingtables_0**](RatingtablesApi.md#ratingtablesSkillv1ratingtables_0) | **POST** /skill/v1/ratingtables | Creates a new Rating Scale
[**ratingtablesSkillv1ratingtables_1**](RatingtablesApi.md#ratingtablesSkillv1ratingtables_1) | **DELETE** /skill/v1/ratingtables | Deletes a rating scale
[**ratingtablesSkillv1ratingtablesconfig**](RatingtablesApi.md#ratingtablesSkillv1ratingtablesconfig) | **PUT** /skill/v1/ratingtables/config | Updates the min and max thresholds by given rating scale type(target)
[**ratingtablesSkillv1ratingtablesid**](RatingtablesApi.md#ratingtablesSkillv1ratingtablesid) | **GET** /skill/v1/ratingtables/{id} | Returns the details of a Rating Scale
[**ratingtablesSkillv1ratingtablesid_0**](RatingtablesApi.md#ratingtablesSkillv1ratingtablesid_0) | **PUT** /skill/v1/ratingtables/{id} | Updates a Rating Scale
[**ratingtablesSkillv1ratingtablesid_1**](RatingtablesApi.md#ratingtablesSkillv1ratingtablesid_1) | **DELETE** /skill/v1/ratingtables/{id} | Deletes a rating scale


# **ratingtablesSkillv1ratingtables**
> \Swagger\Client\Model\SkillRatingtablesListResponse ratingtablesSkillv1ratingtables($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $scale_id, $filters, $search_text, $active, $paginated)

Retrieves the list of Rating Scales, filtered on input parameters

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id, rating_points, usage
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$scale_id = array(56); // int[] | Filter returned by scale id
$filters = "filters_example"; // string | URL encoded filter by:
$search_text = "search_text_example"; // string | Search by text given(a text to search in title or description)
$active = 56; // int | Active(1) or inactive status(0)
$paginated = 56; // int | Possible values 0 or 1. Default - 1. If is 0 all scales returned.

try {
    $result = $api_instance->ratingtablesSkillv1ratingtables($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $scale_id, $filters, $search_text, $active, $paginated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id, rating_points, usage | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **scale_id** | [**int[]**](../Model/int.md)| Filter returned by scale id | [optional]
 **filters** | **string**| URL encoded filter by: | [optional]
 **search_text** | **string**| Search by text given(a text to search in title or description) | [optional]
 **active** | **int**| Active(1) or inactive status(0) | [optional]
 **paginated** | **int**| Possible values 0 or 1. Default - 1. If is 0 all scales returned. | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesListResponse**](../Model/SkillRatingtablesListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtables_0**
> \Swagger\Client\Model\SkillRatingtablesCreateResponse ratingtablesSkillv1ratingtables_0($body)

Creates a new Rating Scale



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$body = new \Swagger\Client\Model\SkillRatingtablesCreateSchema(); // \Swagger\Client\Model\SkillRatingtablesCreateSchema | Raw Body

try {
    $result = $api_instance->ratingtablesSkillv1ratingtables_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtables_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillRatingtablesCreateSchema**](../Model/\Swagger\Client\Model\SkillRatingtablesCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesCreateResponse**](../Model/SkillRatingtablesCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtables_1**
> \Swagger\Client\Model\SkillRatingtablesDeleteMultiResponse ratingtablesSkillv1ratingtables_1($body)

Deletes a rating scale



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$body = new \Swagger\Client\Model\SkillRatingtablesDeleteMultiSchema(); // \Swagger\Client\Model\SkillRatingtablesDeleteMultiSchema | Raw Body

try {
    $result = $api_instance->ratingtablesSkillv1ratingtables_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtables_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillRatingtablesDeleteMultiSchema**](../Model/\Swagger\Client\Model\SkillRatingtablesDeleteMultiSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesDeleteMultiResponse**](../Model/SkillRatingtablesDeleteMultiResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtablesconfig**
> \Swagger\Client\Model\SkillRatingtablesSaveConfigResponse ratingtablesSkillv1ratingtablesconfig($body)

Updates the min and max thresholds by given rating scale type(target)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$body = new \Swagger\Client\Model\SkillRatingtablesSaveConfigSchema(); // \Swagger\Client\Model\SkillRatingtablesSaveConfigSchema | Raw Body

try {
    $result = $api_instance->ratingtablesSkillv1ratingtablesconfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtablesconfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillRatingtablesSaveConfigSchema**](../Model/\Swagger\Client\Model\SkillRatingtablesSaveConfigSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesSaveConfigResponse**](../Model/SkillRatingtablesSaveConfigResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtablesid**
> \Swagger\Client\Model\SkillRatingtablesViewResponse ratingtablesSkillv1ratingtablesid($id, $lang)

Returns the details of a Rating Scale



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$id = 56; // int | ID of the rating scale to view
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->ratingtablesSkillv1ratingtablesid($id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtablesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the rating scale to view |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesViewResponse**](../Model/SkillRatingtablesViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtablesid_0**
> \Swagger\Client\Model\SkillRatingtablesUpdateResponse ratingtablesSkillv1ratingtablesid_0($id, $body)

Updates a Rating Scale

The assigned branch is only used for access management, users of the branch are not automatically assigned to the role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$id = 56; // int | ID of the rating scale to update
$body = new \Swagger\Client\Model\SkillRatingtablesUpdateSchema(); // \Swagger\Client\Model\SkillRatingtablesUpdateSchema | Raw Body

try {
    $result = $api_instance->ratingtablesSkillv1ratingtablesid_0($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtablesid_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the rating scale to update |
 **body** | [**\Swagger\Client\Model\SkillRatingtablesUpdateSchema**](../Model/\Swagger\Client\Model\SkillRatingtablesUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillRatingtablesUpdateResponse**](../Model/SkillRatingtablesUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratingtablesSkillv1ratingtablesid_1**
> \Swagger\Client\Model\SkillRatingtablesDeleteResponse ratingtablesSkillv1ratingtablesid_1($id)

Deletes a rating scale



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RatingtablesApi();
$id = 56; // int | ID of the rating scale to delete

try {
    $result = $api_instance->ratingtablesSkillv1ratingtablesid_1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingtablesApi->ratingtablesSkillv1ratingtablesid_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the rating scale to delete |

### Return type

[**\Swagger\Client\Model\SkillRatingtablesDeleteResponse**](../Model/SkillRatingtablesDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

