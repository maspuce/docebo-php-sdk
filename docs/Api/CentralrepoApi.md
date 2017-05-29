# Swagger\Client\CentralrepoApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**centralrepoManagev1centralrepogetCategories**](CentralrepoApi.md#centralrepoManagev1centralrepogetCategories) | **GET** /manage/v1/centralrepo/get_categories | Create user
[**centralrepoManagev1centralrepogetImportedObjects**](CentralrepoApi.md#centralrepoManagev1centralrepogetImportedObjects) | **GET** /manage/v1/centralrepo/get_imported_objects | Get a list of already imported objects for a specific CSP or all CSP&#39;s.


# **centralrepoManagev1centralrepogetCategories**
> \Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse centralrepoManagev1centralrepogetCategories($node_id)

Create user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CentralrepoApi();
$node_id = 56; // int | ID of the currently selected category, if not set, the root is selected

try {
    $result = $api_instance->centralrepoManagev1centralrepogetCategories($node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentralrepoApi->centralrepoManagev1centralrepogetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **int**| ID of the currently selected category, if not set, the root is selected | [optional]

### Return type

[**\Swagger\Client\Model\ManageCentralrepoGetCategoriesResponse**](../Model/ManageCentralrepoGetCategoriesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **centralrepoManagev1centralrepogetImportedObjects**
> \Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse centralrepoManagev1centralrepogetImportedObjects($provider_id)

Get a list of already imported objects for a specific CSP or all CSP's.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CentralrepoApi();
$provider_id = 56; // int | Internal ID for the desired CSP. If left blank, all objects linked to a CSP will be returned

try {
    $result = $api_instance->centralrepoManagev1centralrepogetImportedObjects($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CentralrepoApi->centralrepoManagev1centralrepogetImportedObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_id** | **int**| Internal ID for the desired CSP. If left blank, all objects linked to a CSP will be returned | [optional]

### Return type

[**\Swagger\Client\Model\ManageCentralrepoGetImportedObjectsResponse**](../Model/ManageCentralrepoGetImportedObjectsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

