# Swagger\Client\SubscriptionBundleApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionBundleLearnv1subBundle**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundle) | **GET** /learn/v1/sub_bundle | Retrieves all subscription bundles, filtered on input parameters
[**subscriptionBundleLearnv1subBundle_0**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundle_0) | **POST** /learn/v1/sub_bundle | Creates a new subscription bundle
[**subscriptionBundleLearnv1subBundlebatch**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebatch) | **POST** /learn/v1/sub_bundle/batch | Batch import for subscription bundles from CSV
[**subscriptionBundleLearnv1subBundlebundleId**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleId) | **GET** /learn/v1/sub_bundle/{bundle_id} | View a subscription bundle
[**subscriptionBundleLearnv1subBundlebundleId_0**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleId_0) | **PUT** /learn/v1/sub_bundle/{bundle_id} | Update a subscription bundle
[**subscriptionBundleLearnv1subBundlebundleId_1**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleId_1) | **DELETE** /learn/v1/sub_bundle/{bundle_id} | Deletes one subscription bundle
[**subscriptionBundleLearnv1subBundlebundleIdcourses**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIdcourses) | **GET** /learn/v1/sub_bundle/{bundle_id}/courses | Get all courses and learning plans for given Subscription bundle
[**subscriptionBundleLearnv1subBundlebundleIdfilters**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIdfilters) | **GET** /learn/v1/sub_bundle/{bundle_id}/filters | Retrieves all filter options by subscription ID
[**subscriptionBundleLearnv1subBundlebundleIditem**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIditem) | **POST** /learn/v1/sub_bundle/{bundle_id}/item | Creates a new subscription bundle item
[**subscriptionBundleLearnv1subBundlebundleIditem_0**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIditem_0) | **DELETE** /learn/v1/sub_bundle/{bundle_id}/item | Deletes subscription bundle items
[**subscriptionBundleLearnv1subBundlebundleIditemitemId**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIditemitemId) | **DELETE** /learn/v1/sub_bundle/{bundle_id}/item/{item_id} | Deletes subscription bundle item
[**subscriptionBundleLearnv1subBundlebundleIditems**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIditems) | **GET** /learn/v1/sub_bundle/{bundle_id}/items | Get the subscription bundle items
[**subscriptionBundleLearnv1subBundlebundleIdvisibility**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIdvisibility) | **POST** /learn/v1/sub_bundle/{bundle_id}/visibility | Update a subscription bundle visibility
[**subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId) | **DELETE** /learn/v1/sub_bundle/{bundle_id}/visibility/{visibility_id} | Delete a subscription bundle visibility
[**subscriptionBundleLearnv1subBundleitemsbatch**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundleitemsbatch) | **POST** /learn/v1/sub_bundle/items/batch | Batch import for subscription bundles from CSV
[**subscriptionBundleLearnv1subBundlevisibilitybatch**](SubscriptionBundleApi.md#subscriptionBundleLearnv1subBundlevisibilitybatch) | **POST** /learn/v1/sub_bundle/visibility/batch | Batch import for subscription bundles visibility


# **subscriptionBundleLearnv1subBundle**
> \Swagger\Client\Model\LearnSubscriptionbundleIndexResponse subscriptionBundleLearnv1subBundle($subscription_title, $subscription_description, $code, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count, $published)

Retrieves all subscription bundles, filtered on input parameters

All filter parameters are optional. If both subscription_title and subscription_description are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$subscription_title = array("subscription_title_example"); // string[] | Search text in the subscription bundle title. Default empty array. OR is performed across array items
$subscription_description = array("subscription_description_example"); // string[] | Search text in the subscription bundle description. Default empty array. OR is performed across array items
$code = "code_example"; // string | Filter returned bundles by code
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, code, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$published = 56; // int | Filter by published field. Options: 1 - published, 0 - not published. Default - all

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundle($subscription_title, $subscription_description, $code, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count, $published);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_title** | [**string[]**](../Model/string.md)| Search text in the subscription bundle title. Default empty array. OR is performed across array items | [optional]
 **subscription_description** | [**string[]**](../Model/string.md)| Search text in the subscription bundle description. Default empty array. OR is performed across array items | [optional]
 **code** | **string**| Filter returned bundles by code | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, code, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **published** | **int**| Filter by published field. Options: 1 - published, 0 - not published. Default - all | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleIndexResponse**](../Model/LearnSubscriptionbundleIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundle_0**
> \Swagger\Client\Model\LearnSubscriptionbundleCreateResponse subscriptionBundleLearnv1subBundle_0($body)

Creates a new subscription bundle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$body = new \Swagger\Client\Model\LearnSubscriptionbundleCreateSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleCreateSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundle_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundle_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleCreateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleCreateResponse**](../Model/LearnSubscriptionbundleCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebatch**
> \Swagger\Client\Model\LearnSubscriptionbundleBatchResponse subscriptionBundleLearnv1subBundlebatch($body)

Batch import for subscription bundles from CSV



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$body = new \Swagger\Client\Model\LearnSubscriptionbundleBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleBatchResponse**](../Model/LearnSubscriptionbundleBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleId**
> \Swagger\Client\Model\LearnSubscriptionbundleViewResponse subscriptionBundleLearnv1subBundlebundleId($bundle_id, $lang)

View a subscription bundle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle id
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleId($bundle_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle id |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleViewResponse**](../Model/LearnSubscriptionbundleViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleId_0**
> \Swagger\Client\Model\LearnSubscriptionbundleUpdateResponse subscriptionBundleLearnv1subBundlebundleId_0($bundle_id, $body)

Update a subscription bundle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle id
$body = new \Swagger\Client\Model\LearnSubscriptionbundleUpdateSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleUpdateSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleId_0($bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle id |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleUpdateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleUpdateResponse**](../Model/LearnSubscriptionbundleUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleId_1**
> \Swagger\Client\Model\LearnSubscriptionbundleDeleteResponse subscriptionBundleLearnv1subBundlebundleId_1($bundle_id)

Deletes one subscription bundle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | ID of subscription bundle to fetch

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleId_1($bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleId_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| ID of subscription bundle to fetch |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleDeleteResponse**](../Model/LearnSubscriptionbundleDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIdcourses**
> \Swagger\Client\Model\LearnSubscriptionbundleGetCoursesLpsResponse subscriptionBundleLearnv1subBundlebundleIdcourses($bundle_id, $type, $lang_code, $duration_start, $duration_end, $catalog_ids, $search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Get all courses and learning plans for given Subscription bundle



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | ID of the Subscription bundle
$type = array("type_example"); // string[] | Filtering by Type (&quot;classroom&quot;, &quot;elearning&quot;, &quot;mobile&quot;, &quot;webinar&quot;, &quot;learning_plan&quot;)
$lang_code = array("lang_code_example"); // string[] | Filtering by Language (&quot;en&quot;, &quot;bg&quot;, etc.)
$duration_start = 56; // int | Search course with duration equal to or more than given value (n/a for learning plans)
$duration_end = 56; // int | Search course with duration equal to or less than given value (n/a for learning plans)
$catalog_ids = array(56); // int[] | Filter by given Catalog IDs
$search_text = "search_text_example"; // string | Search text in the course/plan name.
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, code, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIdcourses($bundle_id, $type, $lang_code, $duration_start, $duration_end, $catalog_ids, $search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIdcourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| ID of the Subscription bundle |
 **type** | [**string[]**](../Model/string.md)| Filtering by Type (&amp;quot;classroom&amp;quot;, &amp;quot;elearning&amp;quot;, &amp;quot;mobile&amp;quot;, &amp;quot;webinar&amp;quot;, &amp;quot;learning_plan&amp;quot;) | [optional]
 **lang_code** | [**string[]**](../Model/string.md)| Filtering by Language (&amp;quot;en&amp;quot;, &amp;quot;bg&amp;quot;, etc.) | [optional]
 **duration_start** | **int**| Search course with duration equal to or more than given value (n/a for learning plans) | [optional]
 **duration_end** | **int**| Search course with duration equal to or less than given value (n/a for learning plans) | [optional]
 **catalog_ids** | [**int[]**](../Model/int.md)| Filter by given Catalog IDs | [optional]
 **search_text** | **string**| Search text in the course/plan name. | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, code, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleGetCoursesLpsResponse**](../Model/LearnSubscriptionbundleGetCoursesLpsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIdfilters**
> \Swagger\Client\Model\LearnSubscriptionbundleGetFiltersResponse subscriptionBundleLearnv1subBundlebundleIdfilters($bundle_id)

Retrieves all filter options by subscription ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Id of the given bundle.

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIdfilters($bundle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIdfilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Id of the given bundle. |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleGetFiltersResponse**](../Model/LearnSubscriptionbundleGetFiltersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIditem**
> \Swagger\Client\Model\LearnSubscriptionbundleCreateItemResponse subscriptionBundleLearnv1subBundlebundleIditem($bundle_id, $body)

Creates a new subscription bundle item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle ID
$body = new \Swagger\Client\Model\LearnSubscriptionbundleCreateItemSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleCreateItemSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIditem($bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIditem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle ID |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleCreateItemSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleCreateItemSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleCreateItemResponse**](../Model/LearnSubscriptionbundleCreateItemResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIditem_0**
> \Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsResponse subscriptionBundleLearnv1subBundlebundleIditem_0($bundle_id, $body)

Deletes subscription bundle items



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | ID of subscription bundle to fetch
$body = new \Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIditem_0($bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIditem_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| ID of subscription bundle to fetch |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleDeleteItemsResponse**](../Model/LearnSubscriptionbundleDeleteItemsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIditemitemId**
> \Swagger\Client\Model\LearnSubscriptionbundleDeleteItemResponse subscriptionBundleLearnv1subBundlebundleIditemitemId($bundle_id, $item_id)

Deletes subscription bundle item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | ID of subscription bundle to fetch
$item_id = 56; // int | ID of subscription bundle item to fetch

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIditemitemId($bundle_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIditemitemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| ID of subscription bundle to fetch |
 **item_id** | **int**| ID of subscription bundle item to fetch |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleDeleteItemResponse**](../Model/LearnSubscriptionbundleDeleteItemResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIditems**
> \Swagger\Client\Model\LearnSubscriptionbundleItemsResponse subscriptionBundleLearnv1subBundlebundleIditems($bundle_id, $lang)

Get the subscription bundle items



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle id
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIditems($bundle_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIditems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle id |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleItemsResponse**](../Model/LearnSubscriptionbundleItemsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIdvisibility**
> \Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilityResponse subscriptionBundleLearnv1subBundlebundleIdvisibility($bundle_id, $body)

Update a subscription bundle visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle ID
$body = new \Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilitySchema(); // \Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilitySchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIdvisibility($bundle_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIdvisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle ID |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilitySchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilitySchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleUpdateVisibilityResponse**](../Model/LearnSubscriptionbundleUpdateVisibilityResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId**
> \Swagger\Client\Model\LearnSubscriptionbundleDeleteVisibilityResponse subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId($bundle_id, $visibility_id)

Delete a subscription bundle visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$bundle_id = 56; // int | Subscription bundle ID
$visibility_id = 56; // int | Subscription bundle visibility ID

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId($bundle_id, $visibility_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlebundleIdvisibilityvisibilityId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundle_id** | **int**| Subscription bundle ID |
 **visibility_id** | **int**| Subscription bundle visibility ID |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleDeleteVisibilityResponse**](../Model/LearnSubscriptionbundleDeleteVisibilityResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundleitemsbatch**
> \Swagger\Client\Model\LearnSubscriptionbundleItemsBatchResponse subscriptionBundleLearnv1subBundleitemsbatch($body)

Batch import for subscription bundles from CSV



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$body = new \Swagger\Client\Model\LearnSubscriptionbundleItemsBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleItemsBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundleitemsbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundleitemsbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleItemsBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleItemsBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleItemsBatchResponse**](../Model/LearnSubscriptionbundleItemsBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionBundleLearnv1subBundlevisibilitybatch**
> \Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchResponse subscriptionBundleLearnv1subBundlevisibilitybatch($body)

Batch import for subscription bundles visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionBundleApi();
$body = new \Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionBundleLearnv1subBundlevisibilitybatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionBundleApi->subscriptionBundleLearnv1subBundlevisibilitybatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionbundleVisibilityBatchResponse**](../Model/LearnSubscriptionbundleVisibilityBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

