# Swagger\Client\PublishApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publishSharev1publishidAsset**](PublishApi.md#publishSharev1publishidAsset) | **GET** /share/v1/publish/{id_asset} | View asset or playlist publish status
[**publishSharev1publishidAsset_0**](PublishApi.md#publishSharev1publishidAsset_0) | **PUT** /share/v1/publish/{id_asset} | Publish asset or playlist
[**publishSharev1publishidAsset_1**](PublishApi.md#publishSharev1publishidAsset_1) | **DELETE** /share/v1/publish/{id_asset} | Unpublish asset or playlist


# **publishSharev1publishidAsset**
> \Swagger\Client\Model\SharePublishViewResponse publishSharev1publishidAsset($id)

View asset or playlist publish status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PublishApi();
$id = 56; // int | ID of asset

try {
    $result = $api_instance->publishSharev1publishidAsset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishApi->publishSharev1publishidAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of asset |

### Return type

[**\Swagger\Client\Model\SharePublishViewResponse**](../Model/SharePublishViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishSharev1publishidAsset_0**
> \Swagger\Client\Model\SharePublishPublishResponse publishSharev1publishidAsset_0($id_asset)

Publish asset or playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PublishApi();
$id_asset = 56; // int | ID of asset

try {
    $result = $api_instance->publishSharev1publishidAsset_0($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishApi->publishSharev1publishidAsset_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of asset |

### Return type

[**\Swagger\Client\Model\SharePublishPublishResponse**](../Model/SharePublishPublishResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishSharev1publishidAsset_1**
> \Swagger\Client\Model\SharePublishUnpublishResponse publishSharev1publishidAsset_1($id_asset)

Unpublish asset or playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PublishApi();
$id_asset = 56; // int | ID of asset

try {
    $result = $api_instance->publishSharev1publishidAsset_1($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishApi->publishSharev1publishidAsset_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of asset |

### Return type

[**\Swagger\Client\Model\SharePublishUnpublishResponse**](../Model/SharePublishUnpublishResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

