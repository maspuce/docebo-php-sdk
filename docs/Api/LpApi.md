# Swagger\Client\LpApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lpLearnv1lp**](LpApi.md#lpLearnv1lp) | **GET** /learn/v1/lp | Returns list of Learning Plans
[**lpLearnv1lp_0**](LpApi.md#lpLearnv1lp_0) | **PUT** /learn/v1/lp | Update specific Learning plan
[**lpLearnv1lp_1**](LpApi.md#lpLearnv1lp_1) | **POST** /learn/v1/lp | Create a new Learning plan
[**lpLearnv1lp_2**](LpApi.md#lpLearnv1lp_2) | **DELETE** /learn/v1/lp | Delete specific Learning plan by given ID
[**lpLearnv1lpenroll**](LpApi.md#lpLearnv1lpenroll) | **POST** /learn/v1/lp/enroll | Enroll single user in Learning plan
[**lpLearnv1lpidPlandeeplink**](LpApi.md#lpLearnv1lpidPlandeeplink) | **POST** /learn/v1/lp/{id_plan}/deeplink | Deeplinking is enabled in the advanced settings of a LP and it allows to share a LP with anybody using a signed link
[**lpLearnv1lplpId**](LpApi.md#lpLearnv1lplpId) | **GET** /learn/v1/lp/{lp_id} | View a Learning plan


# **lpLearnv1lp**
> \Swagger\Client\Model\LearnLpIndexResponse lpLearnv1lp($id_user)

Returns list of Learning Plans



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$id_user = 56; // int | Id of specific LMS user to return Learning plans, that he is enrolled in

try {
    $result = $api_instance->lpLearnv1lp($id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **int**| Id of specific LMS user to return Learning plans, that he is enrolled in | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpIndexResponse**](../Model/LearnLpIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lp_0**
> \Swagger\Client\Model\LearnLpUpdateResponse lpLearnv1lp_0($body)

Update specific Learning plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$body = new \Swagger\Client\Model\LearnLpUpdateSchema(); // \Swagger\Client\Model\LearnLpUpdateSchema | Raw Body

try {
    $result = $api_instance->lpLearnv1lp_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lp_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnLpUpdateSchema**](../Model/\Swagger\Client\Model\LearnLpUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpUpdateResponse**](../Model/LearnLpUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lp_1**
> \Swagger\Client\Model\LearnLpCreateResponse lpLearnv1lp_1($body)

Create a new Learning plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$body = new \Swagger\Client\Model\LearnLpCreateSchema(); // \Swagger\Client\Model\LearnLpCreateSchema | Raw Body

try {
    $result = $api_instance->lpLearnv1lp_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lp_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnLpCreateSchema**](../Model/\Swagger\Client\Model\LearnLpCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpCreateResponse**](../Model/LearnLpCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lp_2**
> \Swagger\Client\Model\LearnLpDeleteResponse lpLearnv1lp_2($body)

Delete specific Learning plan by given ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$body = new \Swagger\Client\Model\LearnLpDeleteSchema(); // \Swagger\Client\Model\LearnLpDeleteSchema | Raw Body

try {
    $result = $api_instance->lpLearnv1lp_2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lp_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnLpDeleteSchema**](../Model/\Swagger\Client\Model\LearnLpDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpDeleteResponse**](../Model/LearnLpDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lpenroll**
> \Swagger\Client\Model\LearnLpEnrollResponse lpLearnv1lpenroll($body)

Enroll single user in Learning plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$body = new \Swagger\Client\Model\LearnLpEnrollSchema(); // \Swagger\Client\Model\LearnLpEnrollSchema | Raw Body

try {
    $result = $api_instance->lpLearnv1lpenroll($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lpenroll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnLpEnrollSchema**](../Model/\Swagger\Client\Model\LearnLpEnrollSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpEnrollResponse**](../Model/LearnLpEnrollResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lpidPlandeeplink**
> \Swagger\Client\Model\LearnLpDeeplinkResponse lpLearnv1lpidPlandeeplink($id_plan, $body)

Deeplinking is enabled in the advanced settings of a LP and it allows to share a LP with anybody using a signed link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$id_plan = 56; // int | ID of the Learging plan
$body = new \Swagger\Client\Model\LearnLpDeeplinkSchema(); // \Swagger\Client\Model\LearnLpDeeplinkSchema | Raw Body

try {
    $result = $api_instance->lpLearnv1lpidPlandeeplink($id_plan, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lpidPlandeeplink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_plan** | **int**| ID of the Learging plan |
 **body** | [**\Swagger\Client\Model\LearnLpDeeplinkSchema**](../Model/\Swagger\Client\Model\LearnLpDeeplinkSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnLpDeeplinkResponse**](../Model/LearnLpDeeplinkResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lpLearnv1lplpId**
> \Swagger\Client\Model\LearnLpViewResponse lpLearnv1lplpId($lp_id)

View a Learning plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\LpApi();
$lp_id = 56; // int | ID of the learning plan

try {
    $result = $api_instance->lpLearnv1lplpId($lp_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LpApi->lpLearnv1lplpId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lp_id** | **int**| ID of the learning plan |

### Return type

[**\Swagger\Client\Model\LearnLpViewResponse**](../Model/LearnLpViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

