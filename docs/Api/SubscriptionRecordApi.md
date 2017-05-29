# Swagger\Client\SubscriptionRecordApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionRecordLearnv1subRecord**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecord) | **GET** /learn/v1/sub_record | List Subscription records
[**subscriptionRecordLearnv1subRecord_0**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecord_0) | **POST** /learn/v1/sub_record | Creates a new Subscription record
[**subscriptionRecordLearnv1subRecordbatch**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordbatch) | **POST** /learn/v1/sub_record/batch | Batch import for subscription bundles visibility
[**subscriptionRecordLearnv1subRecorditemsbatch**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecorditemsbatch) | **POST** /learn/v1/sub_record/items/batch | Batch creates a new subscription record item
[**subscriptionRecordLearnv1subRecordrecordId**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordId) | **GET** /learn/v1/sub_record/{record_id} | View a Subscription record
[**subscriptionRecordLearnv1subRecordrecordId_0**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordId_0) | **PUT** /learn/v1/sub_record/{record_id} | Updates a Subscription record
[**subscriptionRecordLearnv1subRecordrecordId_1**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordId_1) | **DELETE** /learn/v1/sub_record/{record_id} | Delete a Subscription record
[**subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers) | **GET** /learn/v1/sub_record/{record_id}/get_associated_users | Returns list of users associated to given record
[**subscriptionRecordLearnv1subRecordrecordIdgetUsers**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIdgetUsers) | **GET** /learn/v1/sub_record/{record_id}/get_users | Retrieves all users by Subscription record ID
[**subscriptionRecordLearnv1subRecordrecordIditem**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIditem) | **POST** /learn/v1/sub_record/{record_id}/item | Creates a new subscription record item
[**subscriptionRecordLearnv1subRecordrecordIditem_0**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIditem_0) | **DELETE** /learn/v1/sub_record/{record_id}/item | Deletes subscription record items
[**subscriptionRecordLearnv1subRecordrecordIditemitemId**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIditemitemId) | **DELETE** /learn/v1/sub_record/{record_id}/item/{item_id} | Deletes subscription record item
[**subscriptionRecordLearnv1subRecordrecordIdrenew**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIdrenew) | **PUT** /learn/v1/sub_record/{record_id}/renew | Renew a new Subscription record
[**subscriptionRecordLearnv1subRecordrecordIdterminate**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIdterminate) | **PUT** /learn/v1/sub_record/{record_id}/terminate | Terminates a Subscription record
[**subscriptionRecordLearnv1subRecordrecordIdunassociateUsers**](SubscriptionRecordApi.md#subscriptionRecordLearnv1subRecordrecordIdunassociateUsers) | **PUT** /learn/v1/sub_record/{record_id}/unassociate_users | Unassociate users from record


# **subscriptionRecordLearnv1subRecord**
> \Swagger\Client\Model\LearnSubscriptionrecordIndexResponse subscriptionRecordLearnv1subRecord($record_id, $record_name, $code, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $filters)

List Subscription records



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | Subscription record ID
$record_name = "record_name_example"; // string | Subscription record name
$code = "code_example"; // string | Subscription record code
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - record_id. Options: record_id or record_name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$filters = "filters_example"; // string | serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} )

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecord($record_id, $record_name, $code, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Subscription record ID | [optional]
 **record_name** | **string**| Subscription record name | [optional]
 **code** | **string**| Subscription record code | [optional]
 **sort_attr** | **string**| Sort by this field, default value - record_id. Options: record_id or record_name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **filters** | **string**| serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} ) | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordIndexResponse**](../Model/LearnSubscriptionrecordIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecord_0**
> \Swagger\Client\Model\LearnSubscriptionrecordCreateResponse subscriptionRecordLearnv1subRecord_0($body)

Creates a new Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$body = new \Swagger\Client\Model\LearnSubscriptionrecordCreateSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordCreateSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecord_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecord_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordCreateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordCreateResponse**](../Model/LearnSubscriptionrecordCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordbatch**
> \Swagger\Client\Model\LearnSubscriptionrecordBatchResponse subscriptionRecordLearnv1subRecordbatch($body)

Batch import for subscription bundles visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$body = new \Swagger\Client\Model\LearnSubscriptionrecordBatchSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordBatchSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordBatchSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordBatchSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordBatchResponse**](../Model/LearnSubscriptionrecordBatchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecorditemsbatch**
> \Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Response subscriptionRecordLearnv1subRecorditemsbatch($body)

Batch creates a new subscription record item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$body = new \Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Schema(); // \Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Schema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecorditemsbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecorditemsbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Schema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Schema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordBatchItemsL2Response**](../Model/LearnSubscriptionrecordBatchItemsL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordId**
> \Swagger\Client\Model\LearnSubscriptionrecordViewResponse subscriptionRecordLearnv1subRecordrecordId($record_id)

View a Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the subscription record

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordId($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the subscription record |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordViewResponse**](../Model/LearnSubscriptionrecordViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordId_0**
> \Swagger\Client\Model\LearnSubscriptionrecordUpdateResponse subscriptionRecordLearnv1subRecordrecordId_0($record_id, $body)

Updates a Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the subscription record
$body = new \Swagger\Client\Model\LearnSubscriptionrecordUpdateSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordUpdateSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordId_0($record_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the subscription record |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordUpdateSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordUpdateResponse**](../Model/LearnSubscriptionrecordUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordId_1**
> \Swagger\Client\Model\LearnSubscriptionrecordDeleteResponse subscriptionRecordLearnv1subRecordrecordId_1($record_id)

Delete a Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the subscription record

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordId_1($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordId_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the subscription record |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordDeleteResponse**](../Model/LearnSubscriptionrecordDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers**
> \Swagger\Client\Model\LearnSubscriptionrecordGetAssociatedUsersResponse subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers($record_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $search_text, $filters)

Returns list of users associated to given record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the record
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$search_text = "search_text_example"; // string | Text to search in first name, last name and username of the users
$filters = "filters_example"; // string | serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} )

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers($record_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $search_text, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIdgetAssociatedUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the record |
 **sort_attr** | **string**| Sort by this field, default value - first_name. Options: username, first_name, status, level, email, last_access_date, expiration_date, language, email_validation_status | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **search_text** | **string**| Text to search in first name, last name and username of the users | [optional]
 **filters** | **string**| serialize object containing list of filters and their options. List of filters - ( code:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, sold_to:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, bundle_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains}, plan_name:{like, contains, not_equal, ends_with, starts_with, is_empty, not_empty, not_start_with, not_end_with, not_contains} ) | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordGetAssociatedUsersResponse**](../Model/LearnSubscriptionrecordGetAssociatedUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIdgetUsers**
> \Swagger\Client\Model\LearnSubscriptionrecordGetUsersResponse subscriptionRecordLearnv1subRecordrecordIdgetUsers($record_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

Retrieves all users by Subscription record ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | Subscription record ID
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - user_name. Options: user_name, first_name, last_name, email
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIdgetUsers($record_id, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIdgetUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Subscription record ID |
 **sort_attr** | **string**| Sort by this field, default value - user_name. Options: user_name, first_name, last_name, email | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordGetUsersResponse**](../Model/LearnSubscriptionrecordGetUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIditem**
> \Swagger\Client\Model\LearnSubscriptionrecordCreateItemResponse subscriptionRecordLearnv1subRecordrecordIditem($record_id, $body)

Creates a new subscription record item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | Subscription record ID
$body = new \Swagger\Client\Model\LearnSubscriptionrecordCreateItemSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordCreateItemSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIditem($record_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIditem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| Subscription record ID |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordCreateItemSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordCreateItemSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordCreateItemResponse**](../Model/LearnSubscriptionrecordCreateItemResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIditem_0**
> \Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsResponse subscriptionRecordLearnv1subRecordrecordIditem_0($record_id, $body)

Deletes subscription record items



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of subscription record to fetch
$body = new \Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIditem_0($record_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIditem_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of subscription record to fetch |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordDeleteItemsResponse**](../Model/LearnSubscriptionrecordDeleteItemsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIditemitemId**
> \Swagger\Client\Model\LearnSubscriptionrecordDeleteItemResponse subscriptionRecordLearnv1subRecordrecordIditemitemId($record_id, $item_id)

Deletes subscription record item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of subscription record to fetch
$item_id = 56; // int | ID of subscription record item to fetch

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIditemitemId($record_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIditemitemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of subscription record to fetch |
 **item_id** | **int**| ID of subscription record item to fetch |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordDeleteItemResponse**](../Model/LearnSubscriptionrecordDeleteItemResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIdrenew**
> \Swagger\Client\Model\LearnSubscriptionrecordRenewResponse subscriptionRecordLearnv1subRecordrecordIdrenew($record_id)

Renew a new Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the subscription record

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIdrenew($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIdrenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the subscription record |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordRenewResponse**](../Model/LearnSubscriptionrecordRenewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIdterminate**
> \Swagger\Client\Model\LearnSubscriptionrecordTerminateResponse subscriptionRecordLearnv1subRecordrecordIdterminate($record_id)

Terminates a Subscription record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the subscription record

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIdterminate($record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIdterminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the subscription record |

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordTerminateResponse**](../Model/LearnSubscriptionrecordTerminateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionRecordLearnv1subRecordrecordIdunassociateUsers**
> \Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersResponse subscriptionRecordLearnv1subRecordrecordIdunassociateUsers($record_id, $body)

Unassociate users from record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\SubscriptionRecordApi();
$record_id = 56; // int | ID of the record
$body = new \Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersSchema(); // \Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersSchema | Raw Body

try {
    $result = $api_instance->subscriptionRecordLearnv1subRecordrecordIdunassociateUsers($record_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionRecordApi->subscriptionRecordLearnv1subRecordrecordIdunassociateUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_id** | **int**| ID of the record |
 **body** | [**\Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersSchema**](../Model/\Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnSubscriptionrecordUnassociateUsersResponse**](../Model/LearnSubscriptionrecordUnassociateUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

