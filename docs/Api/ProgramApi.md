# Swagger\Client\ProgramApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**programSkillv1programdevelopmentProgramId**](ProgramApi.md#programSkillv1programdevelopmentProgramId) | **GET** /skill/v1/program/{development_program_id} | Returns the details of a development program
[**programSkillv1programdevelopmentProgramIditem**](ProgramApi.md#programSkillv1programdevelopmentProgramIditem) | **GET** /skill/v1/program/{development_program_id}/{item} | Returns the assigned items to a development program
[**programSkillv1programdevelopmentProgramIdroles**](ProgramApi.md#programSkillv1programdevelopmentProgramIdroles) | **GET** /skill/v1/program/{development_program_id}/roles | Returns the assigned roles to a development program
[**programSkillv1programdevelopmentProgramIdusers**](ProgramApi.md#programSkillv1programdevelopmentProgramIdusers) | **GET** /skill/v1/program/{development_program_id}/users | Returns the assigned users to a development program
[**programSkillv1programs**](ProgramApi.md#programSkillv1programs) | **GET** /skill/v1/programs | Retrieves all development programs, filtered on input parameters
[**programSkillv1programs_0**](ProgramApi.md#programSkillv1programs_0) | **POST** /skill/v1/programs | Creates a new Development Program
[**programSkillv1programs_1**](ProgramApi.md#programSkillv1programs_1) | **DELETE** /skill/v1/programs | Deletes one or many Development programs
[**programSkillv1programsdevelopmentProgramId**](ProgramApi.md#programSkillv1programsdevelopmentProgramId) | **PUT** /skill/v1/programs/{development_program_id} | Update a Development Program
[**programSkillv1programsdevelopmentProgramId_0**](ProgramApi.md#programSkillv1programsdevelopmentProgramId_0) | **DELETE** /skill/v1/programs/{development_program_id} | Deletes one Development program
[**programSkillv1programsdevelopmentProgramIdusers**](ProgramApi.md#programSkillv1programsdevelopmentProgramIdusers) | **POST** /skill/v1/programs/{development_program_id}/users | Assign users to a development program
[**programSkillv1programsdevelopmentProgramIdusers_0**](ProgramApi.md#programSkillv1programsdevelopmentProgramIdusers_0) | **DELETE** /skill/v1/programs/{development_program_id}/users | Unassign users from a development program


# **programSkillv1programdevelopmentProgramId**
> \Swagger\Client\Model\SkillProgramViewResponse programSkillv1programdevelopmentProgramId($development_program_id, $lang)

Returns the details of a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language

try {
    $result = $api_instance->programSkillv1programdevelopmentProgramId($development_program_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programdevelopmentProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramViewResponse**](../Model/SkillProgramViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programdevelopmentProgramIditem**
> \Swagger\Client\Model\SkillProgramViewItemsResponse programSkillv1programdevelopmentProgramIditem($development_program_id, $item, $lang, $page, $page_size, $get_total_count)

Returns the assigned items to a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program
$item = "item_example"; // string | Type of the item. Possible values courses|plans|assets|plans|playlists|channels|los
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->programSkillv1programdevelopmentProgramIditem($development_program_id, $item, $lang, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programdevelopmentProgramIditem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |
 **item** | **string**| Type of the item. Possible values courses|plans|assets|plans|playlists|channels|los |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramViewItemsResponse**](../Model/SkillProgramViewItemsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programdevelopmentProgramIdroles**
> \Swagger\Client\Model\SkillProgramViewRolesResponse programSkillv1programdevelopmentProgramIdroles($development_program_id, $lang, $page, $page_size, $get_total_count)

Returns the assigned roles to a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->programSkillv1programdevelopmentProgramIdroles($development_program_id, $lang, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programdevelopmentProgramIdroles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramViewRolesResponse**](../Model/SkillProgramViewRolesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programdevelopmentProgramIdusers**
> \Swagger\Client\Model\SkillProgramViewUsersResponse programSkillv1programdevelopmentProgramIdusers($development_program_id, $lang, $page, $page_size, $get_total_count)

Returns the assigned users to a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program
$lang = "lang_example"; // string | Language code. Language used to process input parameters and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->programSkillv1programdevelopmentProgramIdusers($development_program_id, $lang, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programdevelopmentProgramIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |
 **lang** | **string**| Language code. Language used to process input parameters and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramViewUsersResponse**](../Model/SkillProgramViewUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programs**
> \Swagger\Client\Model\SkillProgramListResponse programSkillv1programs($role_id, $planning_period, $user_id, $status, $page, $page_size, $lang, $get_total_count)

Retrieves all development programs, filtered on input parameters

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$role_id = 56; // int | Search role in the development program.
$planning_period = 56; // int | Search the planning period in the development program.
$user_id = 56; // int | Search the user in the development program.
$status = 56; // int | Search the development program by status. Possible values 0-Inactive; 1-Active;
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->programSkillv1programs($role_id, $planning_period, $user_id, $status, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Search role in the development program. | [optional]
 **planning_period** | **int**| Search the planning period in the development program. | [optional]
 **user_id** | **int**| Search the user in the development program. | [optional]
 **status** | **int**| Search the development program by status. Possible values 0-Inactive; 1-Active; | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramListResponse**](../Model/SkillProgramListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programs_0**
> \Swagger\Client\Model\SkillProgramCreateResponse programSkillv1programs_0($body)

Creates a new Development Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$body = new \Swagger\Client\Model\SkillProgramCreateSchema(); // \Swagger\Client\Model\SkillProgramCreateSchema | Raw Body

try {
    $result = $api_instance->programSkillv1programs_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programs_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillProgramCreateSchema**](../Model/\Swagger\Client\Model\SkillProgramCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramCreateResponse**](../Model/SkillProgramCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programs_1**
> \Swagger\Client\Model\SkillProgramDeleteResponse programSkillv1programs_1($body)

Deletes one or many Development programs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$body = new \Swagger\Client\Model\SkillProgramDeleteSchema(); // \Swagger\Client\Model\SkillProgramDeleteSchema | Raw Body

try {
    $result = $api_instance->programSkillv1programs_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programs_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillProgramDeleteSchema**](../Model/\Swagger\Client\Model\SkillProgramDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramDeleteResponse**](../Model/SkillProgramDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programsdevelopmentProgramId**
> \Swagger\Client\Model\SkillProgramUpdateResponse programSkillv1programsdevelopmentProgramId($body)

Update a Development Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$body = new \Swagger\Client\Model\SkillProgramUpdateSchema(); // \Swagger\Client\Model\SkillProgramUpdateSchema | Raw Body

try {
    $result = $api_instance->programSkillv1programsdevelopmentProgramId($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programsdevelopmentProgramId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillProgramUpdateSchema**](../Model/\Swagger\Client\Model\SkillProgramUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillProgramUpdateResponse**](../Model/SkillProgramUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programsdevelopmentProgramId_0**
> \Swagger\Client\Model\SkillProgramDeleteOneResponse programSkillv1programsdevelopmentProgramId_0($development_program_id)

Deletes one Development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program

try {
    $result = $api_instance->programSkillv1programsdevelopmentProgramId_0($development_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programsdevelopmentProgramId_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |

### Return type

[**\Swagger\Client\Model\SkillProgramDeleteOneResponse**](../Model/SkillProgramDeleteOneResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programsdevelopmentProgramIdusers**
> \Swagger\Client\Model\SkillProgramAssignUsersResponse programSkillv1programsdevelopmentProgramIdusers($development_program_id)

Assign users to a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program

try {
    $result = $api_instance->programSkillv1programsdevelopmentProgramIdusers($development_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programsdevelopmentProgramIdusers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |

### Return type

[**\Swagger\Client\Model\SkillProgramAssignUsersResponse**](../Model/SkillProgramAssignUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **programSkillv1programsdevelopmentProgramIdusers_0**
> \Swagger\Client\Model\SkillProgramUnassignUsersResponse programSkillv1programsdevelopmentProgramIdusers_0($development_program_id)

Unassign users from a development program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProgramApi();
$development_program_id = 56; // int | ID of the program

try {
    $result = $api_instance->programSkillv1programsdevelopmentProgramIdusers_0($development_program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->programSkillv1programsdevelopmentProgramIdusers_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **development_program_id** | **int**| ID of the program |

### Return type

[**\Swagger\Client\Model\SkillProgramUnassignUsersResponse**](../Model/SkillProgramUnassignUsersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

