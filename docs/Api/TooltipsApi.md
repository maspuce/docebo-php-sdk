# Swagger\Client\TooltipsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tooltipsSharev1assetidAssettooltips**](TooltipsApi.md#tooltipsSharev1assetidAssettooltips) | **GET** /share/v1/asset/{id_asset}/tooltips | View Asset assigned tags


# **tooltipsSharev1assetidAssettooltips**
> \Swagger\Client\Model\ShareTooltipsViewResponse tooltipsSharev1assetidAssettooltips($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

View Asset assigned tags

All filter parameters are optional. If filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TooltipsApi();
$id_asset = 56; // int | ID of the asset
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, code, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->tooltipsSharev1assetidAssettooltips($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TooltipsApi->tooltipsSharev1assetidAssettooltips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, code, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareTooltipsViewResponse**](../Model/ShareTooltipsViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

