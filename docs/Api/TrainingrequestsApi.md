# Swagger\Client\TrainingrequestsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trainingrequestsSkillv1requests**](TrainingrequestsApi.md#trainingrequestsSkillv1requests) | **GET** /skill/v1/requests | Returns a summary List the Training Requests filtered by input parameters
[**trainingrequestsSkillv1requests_0**](TrainingrequestsApi.md#trainingrequestsSkillv1requests_0) | **POST** /skill/v1/requests | Creates a new Training Request for an User
[**trainingrequestsSkillv1requestsskillId**](TrainingrequestsApi.md#trainingrequestsSkillv1requestsskillId) | **GET** /skill/v1/requests/{skill_id} | Returns a detailed list of Training Requests filtered by input parameters


# **trainingrequestsSkillv1requests**
> \Swagger\Client\Model\SkillTrainingrequestsListByResponse trainingrequestsSkillv1requests($employee_id, $branch_id, $role_id, $request_type, $skill_id, $threshold_date, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Returns a summary List the Training Requests filtered by input parameters

All filter parameters are optional. OR is performed among different paramenters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TrainingrequestsApi();
$employee_id = array(56); // int[] | Employees IDs - It's required to provide employee_id OR branch_id OR role_id
$branch_id = 56; // int | ID branch - It's required to provide employee_id OR branch_id OR role_id
$role_id = array(56); // int[] | Role ID - It's required to provide employee_id OR branch_id OR role_id
$request_type = "request_type_example"; // string | M|E|H Manager, Employee or HR request (can be multiple, default = search for all)
$skill_id = 56; // int | Skill ID - Used for filter training requests information
$threshold_date = 56; // int | Return requests only from last N days
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->trainingrequestsSkillv1requests($employee_id, $branch_id, $role_id, $request_type, $skill_id, $threshold_date, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingrequestsApi->trainingrequestsSkillv1requests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | [**int[]**](../Model/int.md)| Employees IDs - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **branch_id** | **int**| ID branch - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **role_id** | [**int[]**](../Model/int.md)| Role ID - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **request_type** | **string**| M|E|H Manager, Employee or HR request (can be multiple, default &#x3D; search for all) | [optional]
 **skill_id** | **int**| Skill ID - Used for filter training requests information | [optional]
 **threshold_date** | **int**| Return requests only from last N days | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillTrainingrequestsListByResponse**](../Model/SkillTrainingrequestsListByResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingrequestsSkillv1requests_0**
> \Swagger\Client\Model\SkillTrainingrequestsCreateResponse trainingrequestsSkillv1requests_0($body)

Creates a new Training Request for an User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TrainingrequestsApi();
$body = new \Swagger\Client\Model\SkillTrainingrequestsCreateSchema(); // \Swagger\Client\Model\SkillTrainingrequestsCreateSchema | Raw Body

try {
    $result = $api_instance->trainingrequestsSkillv1requests_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingrequestsApi->trainingrequestsSkillv1requests_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillTrainingrequestsCreateSchema**](../Model/\Swagger\Client\Model\SkillTrainingrequestsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillTrainingrequestsCreateResponse**](../Model/SkillTrainingrequestsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainingrequestsSkillv1requestsskillId**
> \Swagger\Client\Model\SkillTrainingrequestsListByDetailResponse trainingrequestsSkillv1requestsskillId($skill_id, $employee_id, $branch_id, $role_id, $request_type, $threshold_date, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Returns a detailed list of Training Requests filtered by input parameters

Can be filtered by  branch, role, type or skill. All filter parameters are optional. OR is performed among different filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TrainingrequestsApi();
$skill_id = 56; // int | Skill ID - Used for filter training requests information
$employee_id = array(56); // int[] | Employees IDs - It's required to provide employee_id OR branch_id OR role_id
$branch_id = 56; // int | ID branch - It's required to provide employee_id OR branch_id OR role_id
$role_id = array(56); // int[] | Role ID - It's required to provide employee_id OR branch_id OR role_id
$request_type = "request_type_example"; // string | M|E|H Manager, Employee or HR request (can be multiple, default = search for all)
$threshold_date = 56; // int | Return requests only from last N days
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->trainingrequestsSkillv1requestsskillId($skill_id, $employee_id, $branch_id, $role_id, $request_type, $threshold_date, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrainingrequestsApi->trainingrequestsSkillv1requestsskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skill_id** | **int**| Skill ID - Used for filter training requests information |
 **employee_id** | [**int[]**](../Model/int.md)| Employees IDs - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **branch_id** | **int**| ID branch - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **role_id** | [**int[]**](../Model/int.md)| Role ID - It&#39;s required to provide employee_id OR branch_id OR role_id |
 **request_type** | **string**| M|E|H Manager, Employee or HR request (can be multiple, default &#x3D; search for all) | [optional]
 **threshold_date** | **int**| Return requests only from last N days | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillTrainingrequestsListByDetailResponse**](../Model/SkillTrainingrequestsListByDetailResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

