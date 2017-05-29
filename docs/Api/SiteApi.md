# Swagger\Client\SiteApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**siteManagev1sitebootstrap**](SiteApi.md#siteManagev1sitebootstrap) | **GET** /manage/v1/site/bootstrap | Returns base information: default platform language, active languages, active plugins, color scheme and etc.
[**siteManagev1sitehelpdesk**](SiteApi.md#siteManagev1sitehelpdesk) | **POST** /manage/v1/site/helpdesk | Send Request to the sales or help team in the ERP
[**siteManagev1sitethemethemeCode**](SiteApi.md#siteManagev1sitethemethemeCode) | **PUT** /manage/v1/site/theme/{theme_code} | Apply a theme by theme code
[**siteManagev1sitetranslate**](SiteApi.md#siteManagev1sitetranslate) | **POST** /manage/v1/site/translate | Translates the passed array of phrases in all available languages
[**siteManagev1sitetranslations**](SiteApi.md#siteManagev1sitetranslations) | **GET** /manage/v1/site/translations | Get translation


# **siteManagev1sitebootstrap**
> \Swagger\Client\Model\ManageSiteBootstrapResponse siteManagev1sitebootstrap($theme)

Returns base information: default platform language, active languages, active plugins, color scheme and etc.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SiteApi();
$theme = "theme_example"; // string | The theme code to preview. If passed, the returned branding_elements will be loaded based on this value, rather than the active theme

try {
    $result = $api_instance->siteManagev1sitebootstrap($theme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteManagev1sitebootstrap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme** | **string**| The theme code to preview. If passed, the returned branding_elements will be loaded based on this value, rather than the active theme | [optional]

### Return type

[**\Swagger\Client\Model\ManageSiteBootstrapResponse**](../Model/ManageSiteBootstrapResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteManagev1sitehelpdesk**
> \Swagger\Client\Model\ManageSiteHelpDeskResponse siteManagev1sitehelpdesk($body)

Send Request to the sales or help team in the ERP



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SiteApi();
$body = new \Swagger\Client\Model\ManageSiteHelpDeskSchema(); // \Swagger\Client\Model\ManageSiteHelpDeskSchema | Raw Body

try {
    $result = $api_instance->siteManagev1sitehelpdesk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteManagev1sitehelpdesk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageSiteHelpDeskSchema**](../Model/\Swagger\Client\Model\ManageSiteHelpDeskSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageSiteHelpDeskResponse**](../Model/ManageSiteHelpDeskResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteManagev1sitethemethemeCode**
> \Swagger\Client\Model\ManageSiteThemeResponse siteManagev1sitethemethemeCode($theme_code)

Apply a theme by theme code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SiteApi();
$theme_code = "theme_code_example"; // string | Identification code of the theme.

try {
    $result = $api_instance->siteManagev1sitethemethemeCode($theme_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteManagev1sitethemethemeCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **theme_code** | **string**| Identification code of the theme. |

### Return type

[**\Swagger\Client\Model\ManageSiteThemeResponse**](../Model/ManageSiteThemeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteManagev1sitetranslate**
> \Swagger\Client\Model\ManageSiteTranslateResponse siteManagev1sitetranslate($body)

Translates the passed array of phrases in all available languages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SiteApi();
$body = new \Swagger\Client\Model\ManageSiteTranslateSchema(); // \Swagger\Client\Model\ManageSiteTranslateSchema | Raw Body

try {
    $result = $api_instance->siteManagev1sitetranslate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteManagev1sitetranslate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageSiteTranslateSchema**](../Model/\Swagger\Client\Model\ManageSiteTranslateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageSiteTranslateResponse**](../Model/ManageSiteTranslateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **siteManagev1sitetranslations**
> \Swagger\Client\Model\ManageSiteTranslationsResponse siteManagev1sitetranslations($lang_code)

Get translation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SiteApi();
$lang_code = "lang_code_example"; // string | Language code

try {
    $result = $api_instance->siteManagev1sitetranslations($lang_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->siteManagev1sitetranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang_code** | **string**| Language code |

### Return type

[**\Swagger\Client\Model\ManageSiteTranslationsResponse**](../Model/ManageSiteTranslationsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

