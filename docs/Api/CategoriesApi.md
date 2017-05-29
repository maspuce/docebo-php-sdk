# Swagger\Client\CategoriesApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesLearnv1categories**](CategoriesApi.md#categoriesLearnv1categories) | **GET** /learn/v1/categories | Retrieves all categories
[**categoriesLearnv1categoriesid**](CategoriesApi.md#categoriesLearnv1categoriesid) | **GET** /learn/v1/categories/{id} | Retrieves all child categories by ID of parent category


# **categoriesLearnv1categories**
> \Swagger\Client\Model\LearnCategoriesIndexResponse categoriesLearnv1categories($node_id, $search_text, $sort_attr, $sort_dir)

Retrieves all categories

All filter parameters are optional. If catalog_id is present, the categories will be filtered  by the items in that catalogue . If data_provider is set to 1, the result will be returned as data provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CategoriesApi();
$node_id = 56; // int | ID ot the idOrg of the branch
$search_text = "search_text_example"; // string | Search text in the branch title.
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: id, title
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - asc

try {
    $result = $api_instance->categoriesLearnv1categories($node_id, $search_text, $sort_attr, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesLearnv1categories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| ID ot the idOrg of the branch | [optional]
 **search_text** | **string**| Search text in the branch title. | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: id, title | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - asc | [optional]

### Return type

[**\Swagger\Client\Model\LearnCategoriesIndexResponse**](../Model/LearnCategoriesIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesLearnv1categoriesid**
> \Swagger\Client\Model\LearnCategoriesViewChildsResponse categoriesLearnv1categoriesid($id, $data_provider)

Retrieves all child categories by ID of parent category

All filter parameters are optional. If data_provider is set to 1, the result will be returned as data provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CategoriesApi();
$id = 56; // int | Id of the parent category.
$data_provider = 56; // int | Id of the given catalog.

try {
    $result = $api_instance->categoriesLearnv1categoriesid($id, $data_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesLearnv1categoriesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the parent category. |
 **data_provider** | **int**| Id of the given catalog. |

### Return type

[**\Swagger\Client\Model\LearnCategoriesViewChildsResponse**](../Model/LearnCategoriesViewChildsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

