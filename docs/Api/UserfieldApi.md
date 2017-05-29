# Swagger\Client\UserfieldApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userfieldManagev1userFields**](UserfieldApi.md#userfieldManagev1userFields) | **GET** /manage/v1/user_fields | Retrieves the list of user additional fields, filtered on input parameters
[**userfieldManagev1userFields_0**](UserfieldApi.md#userfieldManagev1userFields_0) | **POST** /manage/v1/user_fields | Create user field
[**userfieldManagev1userFieldsfieldId**](UserfieldApi.md#userfieldManagev1userFieldsfieldId) | **GET** /manage/v1/user_fields/{field_id} | Get User addtional filds info
[**userfieldManagev1userFieldsfieldId_0**](UserfieldApi.md#userfieldManagev1userFieldsfieldId_0) | **PUT** /manage/v1/user_fields/{field_id} | Update user fields
[**userfieldManagev1userFieldsfieldId_1**](UserfieldApi.md#userfieldManagev1userFieldsfieldId_1) | **DELETE** /manage/v1/user_fields/{field_id} | Deletes one user field


# **userfieldManagev1userFields**
> \Swagger\Client\Model\ManageUserfieldIndexResponse userfieldManagev1userFields($branch_ids, $branch_codes, $user_id, $as_array, $skip_all, $search_text, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of user additional fields, filtered on input parameters

All filter parameters are optional. If filter parameters are provided operation is OR for user_field_title and AND among other parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserfieldApi();
$branch_ids = array("branch_ids_example"); // string[] | Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &quot;branch_codes&quot; parameter
$branch_codes = array("branch_codes_example"); // string[] | Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &quot;branch_ids&quot; parameter
$user_id = 56; // int | Filter user additional fields by user ID. If  it is passed and branch_ids is not not passed, the branches of requested user will be taken.
$as_array = 56; // int | If it is not passed the responce will be simplified paginated list. If it is passed the responce will contains fully filled list (drop down with options, filled countries, etc.)
$skip_all = 56; // int | Set this parameter to 1 in cases when the condition is to return empty array if the requested branch has no visibility set, instead of an array with all fields.
$search_text = array("search_text_example"); // string[] | Search text in the user field title. Default empty array. OR is performed among multiple array items
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->userfieldManagev1userFields($branch_ids, $branch_codes, $user_id, $as_array, $skip_all, $search_text, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserfieldApi->userfieldManagev1userFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **branch_ids** | [**string[]**](../Model/string.md)| Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_codes&amp;quot; parameter | [optional]
 **branch_codes** | [**string[]**](../Model/string.md)| Filter user additional fields by branch - it applies field visibility by branch. Will be merged with the &amp;quot;branch_ids&amp;quot; parameter | [optional]
 **user_id** | **int**| Filter user additional fields by user ID. If  it is passed and branch_ids is not not passed, the branches of requested user will be taken. | [optional]
 **as_array** | **int**| If it is not passed the responce will be simplified paginated list. If it is passed the responce will contains fully filled list (drop down with options, filled countries, etc.) | [optional]
 **skip_all** | **int**| Set this parameter to 1 in cases when the condition is to return empty array if the requested branch has no visibility set, instead of an array with all fields. | [optional]
 **search_text** | [**string[]**](../Model/string.md)| Search text in the user field title. Default empty array. OR is performed among multiple array items | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserfieldIndexResponse**](../Model/ManageUserfieldIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userfieldManagev1userFields_0**
> \Swagger\Client\Model\ManageUserfieldCreateResponse userfieldManagev1userFields_0($body)

Create user field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserfieldApi();
$body = new \Swagger\Client\Model\ManageUserfieldCreateSchema(); // \Swagger\Client\Model\ManageUserfieldCreateSchema | Raw Body

try {
    $result = $api_instance->userfieldManagev1userFields_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserfieldApi->userfieldManagev1userFields_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ManageUserfieldCreateSchema**](../Model/\Swagger\Client\Model\ManageUserfieldCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserfieldCreateResponse**](../Model/ManageUserfieldCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userfieldManagev1userFieldsfieldId**
> \Swagger\Client\Model\ManageUserfieldViewResponse userfieldManagev1userFieldsfieldId($field_id)

Get User addtional filds info



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserfieldApi();
$field_id = 56; // int | Id of selected field.

try {
    $result = $api_instance->userfieldManagev1userFieldsfieldId($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserfieldApi->userfieldManagev1userFieldsfieldId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Id of selected field. |

### Return type

[**\Swagger\Client\Model\ManageUserfieldViewResponse**](../Model/ManageUserfieldViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userfieldManagev1userFieldsfieldId_0**
> \Swagger\Client\Model\ManageUserfieldUpdateResponse userfieldManagev1userFieldsfieldId_0($field_id, $body)

Update user fields



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserfieldApi();
$field_id = 56; // int | Id of selected field.
$body = new \Swagger\Client\Model\ManageUserfieldUpdateSchema(); // \Swagger\Client\Model\ManageUserfieldUpdateSchema | Raw Body

try {
    $result = $api_instance->userfieldManagev1userFieldsfieldId_0($field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserfieldApi->userfieldManagev1userFieldsfieldId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Id of selected field. |
 **body** | [**\Swagger\Client\Model\ManageUserfieldUpdateSchema**](../Model/\Swagger\Client\Model\ManageUserfieldUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ManageUserfieldUpdateResponse**](../Model/ManageUserfieldUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userfieldManagev1userFieldsfieldId_1**
> \Swagger\Client\Model\ManageUserfieldDeleteResponse userfieldManagev1userFieldsfieldId_1($field_id)

Deletes one user field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UserfieldApi();
$field_id = 56; // int | Id of selected field.

try {
    $result = $api_instance->userfieldManagev1userFieldsfieldId_1($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserfieldApi->userfieldManagev1userFieldsfieldId_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Id of selected field. |

### Return type

[**\Swagger\Client\Model\ManageUserfieldDeleteResponse**](../Model/ManageUserfieldDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

