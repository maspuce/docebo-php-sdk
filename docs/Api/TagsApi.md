# Swagger\Client\TagsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagsManagev1tagidTag**](TagsApi.md#tagsManagev1tagidTag) | **DELETE** /manage/v1/tag/{id_tag} | Delete tag
[**tagsManagev1tags**](TagsApi.md#tagsManagev1tags) | **GET** /manage/v1/tags | View all tags
[**tagsManagev1tags_0**](TagsApi.md#tagsManagev1tags_0) | **POST** /manage/v1/tags | Creates a new tag
[**tagsManagev1tagsidTag**](TagsApi.md#tagsManagev1tagsidTag) | **GET** /manage/v1/tags/{id_tag} | View tag


# **tagsManagev1tagidTag**
> \Swagger\Client\Model\ManageTagsDeleteResponse tagsManagev1tagidTag($id_tag)

Delete tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$id_tag = 56; // int | Tag id

try {
    $result = $api_instance->tagsManagev1tagidTag($id_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsManagev1tagidTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tag** | **int**| Tag id |

### Return type

[**\Swagger\Client\Model\ManageTagsDeleteResponse**](../Model/ManageTagsDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsManagev1tags**
> \Swagger\Client\Model\ManageTagsListResponse tagsManagev1tags($sort_attr, $search_tag, $sort_dir, $page, $page_size, $get_total_count)

View all tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, id
$search_tag = "search_tag_example"; // string | Search text in the tag title
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - asc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 10, if value is -1 -&gt; all items are displayed
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->tagsManagev1tags($sort_attr, $search_tag, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsManagev1tags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, id | [optional]
 **search_tag** | **string**| Search text in the tag title | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - asc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 10, if value is -1 -&amp;gt; all items are displayed | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageTagsListResponse**](../Model/ManageTagsListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsManagev1tags_0**
> \Swagger\Client\Model\ManageTagsCreateResponse tagsManagev1tags_0($body)

Creates a new tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$body = new \Swagger\Client\Model\ManageTagsCreateSchema(); // \Swagger\Client\Model\ManageTagsCreateSchema | Raw Body

try {
    $result = $api_instance->tagsManagev1tags_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsManagev1tags_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageTagsCreateSchema**](../Model/\Swagger\Client\Model\ManageTagsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageTagsCreateResponse**](../Model/ManageTagsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagsManagev1tagsidTag**
> \Swagger\Client\Model\ManageTagsViewResponse tagsManagev1tagsidTag($id_tag)

View tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$id_tag = 56; // int | ID of the tag

try {
    $result = $api_instance->tagsManagev1tagsidTag($id_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->tagsManagev1tagsidTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_tag** | **int**| ID of the tag |

### Return type

[**\Swagger\Client\Model\ManageTagsViewResponse**](../Model/ManageTagsViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

