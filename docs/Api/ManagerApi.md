# Swagger\Client\ManagerApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**managerSkillv1managersmanagerIdusers**](ManagerApi.md#managerSkillv1managersmanagerIdusers) | **GET** /skill/v1/managers/{manager_id}/users | Retrieves all the subordinates of a Manager
[**managerSkillv1managersmanagerIdusers_0**](ManagerApi.md#managerSkillv1managersmanagerIdusers_0) | **POST** /skill/v1/managers/{manager_id}/users | Assigns subordinates to an User
[**managerSkillv1managersmanagerIdusers_1**](ManagerApi.md#managerSkillv1managersmanagerIdusers_1) | **DELETE** /skill/v1/managers/{manager_id}/users | Unassigns subordinates from an User


# **managerSkillv1managersmanagerIdusers**
> \Swagger\Client\Model\SkillManagerGetSubordinatesResponse managerSkillv1managersmanagerIdusers($manager_id, $hierarchy, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves all the subordinates of a Manager



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ManagerApi();
$manager_id = 56; // int | ID of manager to get subordinates
$hierarchy = 56; // int | Type of manager (1 for Direct manager, other codes reserved for future improvements). Default - 1
$sort_attr = "sort_attr_example"; // string | Sort by id, username, name, or email of user. Default - id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->managerSkillv1managersmanagerIdusers($manager_id, $hierarchy, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagerApi->managerSkillv1managersmanagerIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| ID of manager to get subordinates |
 **hierarchy** | **int**| Type of manager (1 for Direct manager, other codes reserved for future improvements). Default - 1 | [optional]
 **sort_attr** | **string**| Sort by id, username, name, or email of user. Default - id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillManagerGetSubordinatesResponse**](../Model/SkillManagerGetSubordinatesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **managerSkillv1managersmanagerIdusers_0**
> \Swagger\Client\Model\SkillManagerAssignSubordinatesResponse managerSkillv1managersmanagerIdusers_0($manager_id, $body)

Assigns subordinates to an User

Manager role will be assigned to the manager_id if is not already a manager.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ManagerApi();
$manager_id = 56; // int | Id of manager
$body = new \Swagger\Client\Model\SkillManagerAssignSubordinatesSchema(); // \Swagger\Client\Model\SkillManagerAssignSubordinatesSchema | Raw Body

try {
    $result = $api_instance->managerSkillv1managersmanagerIdusers_0($manager_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagerApi->managerSkillv1managersmanagerIdusers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| Id of manager |
 **body** | [**\Swagger\Client\Model\SkillManagerAssignSubordinatesSchema**](../Model/\Swagger\Client\Model\SkillManagerAssignSubordinatesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillManagerAssignSubordinatesResponse**](../Model/SkillManagerAssignSubordinatesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **managerSkillv1managersmanagerIdusers_1**
> \Swagger\Client\Model\SkillManagerDeleteResponse managerSkillv1managersmanagerIdusers_1($manager_id, $body)

Unassigns subordinates from an User

This web service unassigns an user from the manager (the user will be un-managed following this action) if following this action the manager_id remains without subordinates will lose the  manager role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ManagerApi();
$manager_id = 56; // int | ID of the manager
$body = new \Swagger\Client\Model\SkillManagerDeleteSchema(); // \Swagger\Client\Model\SkillManagerDeleteSchema | Raw Body

try {
    $result = $api_instance->managerSkillv1managersmanagerIdusers_1($manager_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagerApi->managerSkillv1managersmanagerIdusers_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager_id** | **int**| ID of the manager |
 **body** | [**\Swagger\Client\Model\SkillManagerDeleteSchema**](../Model/\Swagger\Client\Model\SkillManagerDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillManagerDeleteResponse**](../Model/SkillManagerDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

