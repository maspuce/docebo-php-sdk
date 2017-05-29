# Swagger\Client\SubscriptionSeatAssociationApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionSeatAssociationLearnv1subSeatAssociation**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociation) | **GET** /learn/v1/sub_seat_association | Retrieves all subscription seat associations, filtered on input parameters
[**subscriptionSeatAssociationLearnv1subSeatAssociation_0**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociation_0) | **POST** /learn/v1/sub_seat_association | Creates a new subscription seat association
[**subscriptionSeatAssociationLearnv1subSeatAssociation_1**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociation_1) | **DELETE** /learn/v1/sub_seat_association | Deletes one or more subscription seat associations
[**subscriptionSeatAssociationLearnv1subSeatAssociationbatch**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociationbatch) | **POST** /learn/v1/sub_seat_association/batch | Batch import for subscription seat association
[**subscriptionSeatAssociationLearnv1subSeatAssociationmultiple**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociationmultiple) | **POST** /learn/v1/sub_seat_association/multiple | Creates a new subscription seat association
[**subscriptionSeatAssociationLearnv1subSeatAssociationseatId**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociationseatId) | **GET** /learn/v1/sub_seat_association/{seat_id} | View a subscription seat association
[**subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0) | **PUT** /learn/v1/sub_seat_association/{seat_id} | Update a subscription seat association
[**subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId**](SubscriptionSeatAssociationApi.md#subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId) | **GET** /learn/v1/sub_seat_association/user/{user_id} | Retrieves all subscription seat associations, filtered on input parameters


# **subscriptionSeatAssociationLearnv1subSeatAssociation**
> \Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse subscriptionSeatAssociationLearnv1subSeatAssociation($record_id, $record_name, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $seat_status)

Retrieves all subscription seat associations, filtered on input parameters

All filter parameters are optional. If record_name is searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$record_id = 56; // int | Filter returned seats by subscription record
$record_name = array("record_name_example"); // string[] | Search text in the record name. Default empty array. OR is performed across array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: date, status, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$seat_status = 56; // int | Can get the following values: 1: &quot;in_use&quot;, 2: &quot;expired&quot;, 3: &quot;cancelled&quot;. Default value-&gt; all

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociation($record_id, $record_name, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $seat_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Filter returned seats by subscription record | [optional]
 **record_name** | [**string[]**](../Model/string.md)| Search text in the record name. Default empty array. OR is performed across array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: date, status, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **seat_status** | **int**| Can get the following values: 1: &amp;quot;in_use&amp;quot;, 2: &amp;quot;expired&amp;quot;, 3: &amp;quot;cancelled&amp;quot;. Default value-&amp;gt; all | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationIndexResponse**](../Model/LearnSubscriptionseatassociationIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociation_0**
> \Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse subscriptionSeatAssociationLearnv1subSeatAssociation_0($body)

Creates a new subscription seat association



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$body = new \Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema(); // \Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema | Raw Body

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociation_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociation_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionseatassociationCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationCreateResponse**](../Model/LearnSubscriptionseatassociationCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociation_1**
> \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse subscriptionSeatAssociationLearnv1subSeatAssociation_1($body)

Deletes one or more subscription seat associations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$body = new \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema(); // \Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema | Raw Body

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociation_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociation_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationDeleteResponse**](../Model/LearnSubscriptionseatassociationDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociationbatch**
> \Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse subscriptionSeatAssociationLearnv1subSeatAssociationbatch($body)

Batch import for subscription seat association



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$body = new \Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociationbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociationbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionseatassociationBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationBatchResponse**](../Model/LearnSubscriptionseatassociationBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociationmultiple**
> \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse subscriptionSeatAssociationLearnv1subSeatAssociationmultiple($body)

Creates a new subscription seat association



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$body = new \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema(); // \Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema | Raw Body

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociationmultiple($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociationmultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationCreateMultipleResponse**](../Model/LearnSubscriptionseatassociationCreateMultipleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociationseatId**
> \Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse subscriptionSeatAssociationLearnv1subSeatAssociationseatId($seat_id)

View a subscription seat association



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$seat_id = 56; // int | ID of the seat association

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociationseatId($seat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociationseatId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seat_id** | **int**| ID of the seat association |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationViewResponse**](../Model/LearnSubscriptionseatassociationViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0**
> \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0($seat_id, $body)

Update a subscription seat association



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$seat_id = 56; // int | ID of the seat association
$body = new \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema(); // \Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema | Raw Body

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0($seat_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociationseatId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seat_id** | **int**| ID of the seat association |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationUpdateResponse**](../Model/LearnSubscriptionseatassociationUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId**
> \Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId($user_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Retrieves all subscription seat associations, filtered on input parameters

All filter parameters are optional. If record_name is searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionSeatAssociationApi();
$user_id = 56; // int | User ID
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: date, status, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId($user_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionSeatAssociationApi->subscriptionSeatAssociationLearnv1subSeatAssociationuseruserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: date, status, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionseatassociationListSeatsByUserResponse**](../Model/LearnSubscriptionseatassociationListSeatsByUserResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

