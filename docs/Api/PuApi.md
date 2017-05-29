# Swagger\Client\PuApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**puLearnv1pu**](PuApi.md#puLearnv1pu) | **POST** /learn/v1/pu | Promotion of regular user to power user
[**puLearnv1puassignCatalogs**](PuApi.md#puLearnv1puassignCatalogs) | **POST** /learn/v1/pu/assign_catalogs | Assign catalogs to power user
[**puLearnv1puassignCategories**](PuApi.md#puLearnv1puassignCategories) | **POST** /learn/v1/pu/assign_categories | Assign course categories to power user
[**puLearnv1puassignCourses**](PuApi.md#puLearnv1puassignCourses) | **POST** /learn/v1/pu/assign_courses | Assign courses to power user
[**puLearnv1puassignLocations**](PuApi.md#puLearnv1puassignLocations) | **POST** /learn/v1/pu/assign_locations | Assign locations to power user
[**puLearnv1puassignOrgcharts**](PuApi.md#puLearnv1puassignOrgcharts) | **POST** /learn/v1/pu/assign_orgcharts | Assign orgcharts to a Power User
[**puLearnv1puassignUsers**](PuApi.md#puLearnv1puassignUsers) | **POST** /learn/v1/pu/assign_users | Assign users to power user
[**puLearnv1puid**](PuApi.md#puLearnv1puid) | **DELETE** /learn/v1/pu/{id} | Demoting a PU to user level


# **puLearnv1pu**
> \Swagger\Client\Model\LearnPuCreateResponse puLearnv1pu($body)

Promotion of regular user to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuCreateSchema(); // \Swagger\Client\Model\LearnPuCreateSchema | Raw Body

try {
    $result = $api_instance->puLearnv1pu($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1pu: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuCreateSchema**](../Model/\Swagger\Client\Model\LearnPuCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuCreateResponse**](../Model/LearnPuCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignCatalogs**
> \Swagger\Client\Model\LearnPuAssignCatalogsResponse puLearnv1puassignCatalogs($body)

Assign catalogs to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignCatalogsSchema(); // \Swagger\Client\Model\LearnPuAssignCatalogsSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignCatalogs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignCatalogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignCatalogsSchema**](../Model/\Swagger\Client\Model\LearnPuAssignCatalogsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignCatalogsResponse**](../Model/LearnPuAssignCatalogsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignCategories**
> \Swagger\Client\Model\LearnPuAssignCategoriesResponse puLearnv1puassignCategories($body)

Assign course categories to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignCategoriesSchema(); // \Swagger\Client\Model\LearnPuAssignCategoriesSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignCategories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignCategoriesSchema**](../Model/\Swagger\Client\Model\LearnPuAssignCategoriesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignCategoriesResponse**](../Model/LearnPuAssignCategoriesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignCourses**
> \Swagger\Client\Model\LearnPuAssignCoursesResponse puLearnv1puassignCourses($body)

Assign courses to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignCoursesSchema(); // \Swagger\Client\Model\LearnPuAssignCoursesSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignCourses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignCoursesSchema**](../Model/\Swagger\Client\Model\LearnPuAssignCoursesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignCoursesResponse**](../Model/LearnPuAssignCoursesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignLocations**
> \Swagger\Client\Model\LearnPuAssignLocationsResponse puLearnv1puassignLocations($body)

Assign locations to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignLocationsSchema(); // \Swagger\Client\Model\LearnPuAssignLocationsSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignLocationsSchema**](../Model/\Swagger\Client\Model\LearnPuAssignLocationsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignLocationsResponse**](../Model/LearnPuAssignLocationsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignOrgcharts**
> \Swagger\Client\Model\LearnPuAssignOrgchartsResponse puLearnv1puassignOrgcharts($body)

Assign orgcharts to a Power User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignOrgchartsSchema(); // \Swagger\Client\Model\LearnPuAssignOrgchartsSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignOrgcharts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignOrgcharts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignOrgchartsSchema**](../Model/\Swagger\Client\Model\LearnPuAssignOrgchartsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignOrgchartsResponse**](../Model/LearnPuAssignOrgchartsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puassignUsers**
> \Swagger\Client\Model\LearnPuAssignUsersResponse puLearnv1puassignUsers($body)

Assign users to power user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuAssignUsersSchema(); // \Swagger\Client\Model\LearnPuAssignUsersSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puassignUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puassignUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuAssignUsersSchema**](../Model/\Swagger\Client\Model\LearnPuAssignUsersSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuAssignUsersResponse**](../Model/LearnPuAssignUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **puLearnv1puid**
> \Swagger\Client\Model\LearnPuDeleteResponse puLearnv1puid($body)

Demoting a PU to user level



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PuApi();
$body = new \Swagger\Client\Model\LearnPuDeleteSchema(); // \Swagger\Client\Model\LearnPuDeleteSchema | Raw Body

try {
    $result = $api_instance->puLearnv1puid($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PuApi->puLearnv1puid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnPuDeleteSchema**](../Model/\Swagger\Client\Model\LearnPuDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnPuDeleteResponse**](../Model/LearnPuDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

