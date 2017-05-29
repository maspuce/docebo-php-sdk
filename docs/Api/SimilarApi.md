# Swagger\Client\SimilarApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**similarSharev1similarsidAsset**](SimilarApi.md#similarSharev1similarsidAsset) | **GET** /share/v1/similars/{id_asset} | List Similar Assets


# **similarSharev1similarsidAsset**
> \Swagger\Client\Model\ShareSimilarExtractSimilarAssetsResponse similarSharev1similarsidAsset($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

List Similar Assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SimilarApi();
$id_asset = 56; // int | ID of asset
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - views. Options: id, ordering, views
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->similarSharev1similarsidAsset($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SimilarApi->similarSharev1similarsidAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of asset |
 **sort_attr** | **string**| Sort by this field, default value - views. Options: id, ordering, views | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareSimilarExtractSimilarAssetsResponse**](../Model/ShareSimilarExtractSimilarAssetsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

