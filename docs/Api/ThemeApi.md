# Swagger\Client\ThemeApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**themeManagev1theme**](ThemeApi.md#themeManagev1theme) | **GET** /manage/v1/theme | View all themes
[**themeManagev1themethemeCode**](ThemeApi.md#themeManagev1themethemeCode) | **GET** /manage/v1/theme/{theme_code} | View a theme by theme code
[**themeManagev1themethemeCode_0**](ThemeApi.md#themeManagev1themethemeCode_0) | **PUT** /manage/v1/theme/{theme_code} | Update a theme by theme code
[**themeManagev1themethemeCode_1**](ThemeApi.md#themeManagev1themethemeCode_1) | **DELETE** /manage/v1/theme/{theme_code} | Delete a theme
[**themeManagev1themethemeCodevariantidMultidomain**](ThemeApi.md#themeManagev1themethemeCodevariantidMultidomain) | **PUT** /manage/v1/theme/{theme_code}/variant/{id_multidomain} | Update or create a theme variant by theme code and multidomain id


# **themeManagev1theme**
> \Swagger\Client\Model\ManageThemeIndexResponse themeManagev1theme()

View all themes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ThemeApi();

try {
    $result = $api_instance->themeManagev1theme();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeManagev1theme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ManageThemeIndexResponse**](../Model/ManageThemeIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **themeManagev1themethemeCode**
> \Swagger\Client\Model\ManageThemeViewResponse themeManagev1themethemeCode($theme_code)

View a theme by theme code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ThemeApi();
$theme_code = "theme_code_example"; // string | Identification code of the theme.

try {
    $result = $api_instance->themeManagev1themethemeCode($theme_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeManagev1themethemeCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_code** | **string**| Identification code of the theme. |

### Return type

[**\Swagger\Client\Model\ManageThemeViewResponse**](../Model/ManageThemeViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **themeManagev1themethemeCode_0**
> \Swagger\Client\Model\ManageThemeUpdateResponse themeManagev1themethemeCode_0($theme_code, $body)

Update a theme by theme code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ThemeApi();
$theme_code = "theme_code_example"; // string | Identification code of the theme.
$body = new \Swagger\Client\Model\ManageThemeUpdateSchema(); // \Swagger\Client\Model\ManageThemeUpdateSchema | Raw Body

try {
    $result = $api_instance->themeManagev1themethemeCode_0($theme_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeManagev1themethemeCode_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_code** | **string**| Identification code of the theme. |
 **body** | [**\Swagger\Client\Model\ManageThemeUpdateSchema**](../Model/\Swagger\Client\Model\ManageThemeUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageThemeUpdateResponse**](../Model/ManageThemeUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **themeManagev1themethemeCode_1**
> \Swagger\Client\Model\ManageThemeDeleteResponse themeManagev1themethemeCode_1($theme_code)

Delete a theme



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ThemeApi();
$theme_code = "theme_code_example"; // string | Identification code of the theme.

try {
    $result = $api_instance->themeManagev1themethemeCode_1($theme_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeManagev1themethemeCode_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_code** | **string**| Identification code of the theme. |

### Return type

[**\Swagger\Client\Model\ManageThemeDeleteResponse**](../Model/ManageThemeDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **themeManagev1themethemeCodevariantidMultidomain**
> \Swagger\Client\Model\ManageThemeUpdateVariantResponse themeManagev1themethemeCodevariantidMultidomain($theme_code, $id_multidomain, $body)

Update or create a theme variant by theme code and multidomain id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ThemeApi();
$theme_code = "theme_code_example"; // string | Identification code of the theme.
$id_multidomain = 56; // int | Identification number of the multidomain.
$body = new \Swagger\Client\Model\ManageThemeUpdateVariantSchema(); // \Swagger\Client\Model\ManageThemeUpdateVariantSchema | Raw Body

try {
    $result = $api_instance->themeManagev1themethemeCodevariantidMultidomain($theme_code, $id_multidomain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemeApi->themeManagev1themethemeCodevariantidMultidomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_code** | **string**| Identification code of the theme. |
 **id_multidomain** | **int**| Identification number of the multidomain. |
 **body** | [**\Swagger\Client\Model\ManageThemeUpdateVariantSchema**](../Model/\Swagger\Client\Model\ManageThemeUpdateVariantSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageThemeUpdateVariantResponse**](../Model/ManageThemeUpdateVariantResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

