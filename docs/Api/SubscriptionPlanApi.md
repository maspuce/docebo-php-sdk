# Swagger\Client\SubscriptionPlanApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionPlanLearnv1subPlan**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlan) | **GET** /learn/v1/sub_plan | Retrieves all subscription plans, filtered on input parameters
[**subscriptionPlanLearnv1subPlan_0**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlan_0) | **POST** /learn/v1/sub_plan | Creates a new Subscription plan
[**subscriptionPlanLearnv1subPlanbatch**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlanbatch) | **POST** /learn/v1/sub_plan/batch | Batch import for subscription bundles visibility
[**subscriptionPlanLearnv1subPlanplanId**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlanplanId) | **GET** /learn/v1/sub_plan/{plan_id} | View a Subscription plan
[**subscriptionPlanLearnv1subPlanplanId_0**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlanplanId_0) | **PUT** /learn/v1/sub_plan/{plan_id} | Update a Subscription plan
[**subscriptionPlanLearnv1subPlanplanId_1**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlanplanId_1) | **DELETE** /learn/v1/sub_plan/{plan_id} | Deletes one subscription plan
[**subscriptionPlanLearnv1subPlanpurchase**](SubscriptionPlanApi.md#subscriptionPlanLearnv1subPlanpurchase) | **POST** /learn/v1/sub_plan/purchase | Purchasing subscription plan


# **subscriptionPlanLearnv1subPlan**
> \Swagger\Client\Model\LearnSubscriptionplanIndexResponse subscriptionPlanLearnv1subPlan($bundle_id, $code, $subscription_title, $subscription_description, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count)

Retrieves all subscription plans, filtered on input parameters

All filter parameters are optional. If both subscription_title and subscription_description are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$bundle_id = 56; // int | Filter returned plans by subscription bundle
$code = "code_example"; // string | Filter returned plans by code
$subscription_title = array("subscription_title_example"); // string[] | Search text in the subscription plan title. Default empty array. OR is performed across array items
$subscription_description = array("subscription_description_example"); // string[] | Search text in the subscription bundle description. Default empty array. OR is performed across array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: type, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlan($bundle_id, $code, $subscription_title, $subscription_description, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Filter returned plans by subscription bundle | [optional]
 **code** | **string**| Filter returned plans by code | [optional]
 **subscription_title** | [**string[]**](../Model/string.md)| Search text in the subscription plan title. Default empty array. OR is performed across array items | [optional]
 **subscription_description** | [**string[]**](../Model/string.md)| Search text in the subscription bundle description. Default empty array. OR is performed across array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: type, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanIndexResponse**](../Model/LearnSubscriptionplanIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlan_0**
> \Swagger\Client\Model\LearnSubscriptionplanCreateResponse subscriptionPlanLearnv1subPlan_0($body)

Creates a new Subscription plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$body = new \Swagger\Client\Model\LearnSubscriptionplanCreateSchema(); // \Swagger\Client\Model\LearnSubscriptionplanCreateSchema | Raw Body

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlan_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlan_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionplanCreateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionplanCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanCreateResponse**](../Model/LearnSubscriptionplanCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlanbatch**
> \Swagger\Client\Model\LearnSubscriptionplanBatchResponse subscriptionPlanLearnv1subPlanbatch($body)

Batch import for subscription bundles visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$body = new \Swagger\Client\Model\LearnSubscriptionplanBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionplanBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlanbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlanbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionplanBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionplanBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanBatchResponse**](../Model/LearnSubscriptionplanBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlanplanId**
> \Swagger\Client\Model\LearnSubscriptionplanViewResponse subscriptionPlanLearnv1subPlanplanId($plan_id)

View a Subscription plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$plan_id = 56; // int | ID of subscription plan to fetch

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlanplanId($plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlanplanId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| ID of subscription plan to fetch |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanViewResponse**](../Model/LearnSubscriptionplanViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlanplanId_0**
> \Swagger\Client\Model\LearnSubscriptionplanUpdateResponse subscriptionPlanLearnv1subPlanplanId_0($plan_id, $body)

Update a Subscription plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$plan_id = 56; // int | ID of subscription plan to update
$body = new \Swagger\Client\Model\LearnSubscriptionplanUpdateSchema(); // \Swagger\Client\Model\LearnSubscriptionplanUpdateSchema | Raw Body

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlanplanId_0($plan_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlanplanId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| ID of subscription plan to update |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionplanUpdateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionplanUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanUpdateResponse**](../Model/LearnSubscriptionplanUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlanplanId_1**
> \Swagger\Client\Model\LearnSubscriptionplanDeleteResponse subscriptionPlanLearnv1subPlanplanId_1($plan_id)

Deletes one subscription plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();
$plan_id = 56; // int | ID of subscription plan to fetch

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlanplanId_1($plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlanplanId_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_id** | **int**| ID of subscription plan to fetch |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanDeleteResponse**](../Model/LearnSubscriptionplanDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionPlanLearnv1subPlanpurchase**
> \Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse subscriptionPlanLearnv1subPlanpurchase()

Purchasing subscription plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionPlanApi();

try {
    $result = $api_instance->subscriptionPlanLearnv1subPlanpurchase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlanApi->subscriptionPlanLearnv1subPlanpurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LearnSubscriptionplanPurchaseResponse**](../Model/LearnSubscriptionplanPurchaseResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

