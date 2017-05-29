# Swagger\Client\InviteApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inviteSharev1assetsidAssetinvite**](InviteApi.md#inviteSharev1assetsidAssetinvite) | **POST** /share/v1/assets/{id_asset}/invite | Send invitation


# **inviteSharev1assetsidAssetinvite**
> \Swagger\Client\Model\ShareInviteInviteResponse inviteSharev1assetsidAssetinvite($id_asset, $body)

Send invitation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\InviteApi();
$id_asset = 56; // int | ID of the asset
$body = new \Swagger\Client\Model\ShareInviteInviteSchema(); // \Swagger\Client\Model\ShareInviteInviteSchema | Raw Body

try {
    $result = $api_instance->inviteSharev1assetsidAssetinvite($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->inviteSharev1assetsidAssetinvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **body** | [**\Swagger\Client\Model\ShareInviteInviteSchema**](../Model/\Swagger\Client\Model\ShareInviteInviteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareInviteInviteResponse**](../Model/ShareInviteInviteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

