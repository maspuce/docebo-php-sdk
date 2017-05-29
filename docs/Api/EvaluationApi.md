# Swagger\Client\EvaluationApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluationSkillv1evaluationsmanager**](EvaluationApi.md#evaluationSkillv1evaluationsmanager) | **GET** /skill/v1/evaluations/manager | Get the summary list of roles and skills per each role for the manager evaluation
[**evaluationSkillv1evaluationsrequestid**](EvaluationApi.md#evaluationSkillv1evaluationsrequestid) | **DELETE** /skill/v1/evaluations/request/{id} | Exclude users from further role evaluation by type
[**evaluationSkillv1evaluationsrequestsrequestIdskillsskillId**](EvaluationApi.md#evaluationSkillv1evaluationsrequestsrequestIdskillsskillId) | **GET** /skill/v1/evaluations/requests/{request_id}/skills/{skill_id} | Get the list of users to be evaluated for the manager by skill
[**evaluationSkillv1evaluationsrequestsrequestIduser**](EvaluationApi.md#evaluationSkillv1evaluationsrequestsrequestIduser) | **GET** /skill/v1/evaluations/requests/{request_id}/user | Get the list of skill to be evaluated by the user
[**evaluationSkillv1evaluationsstatistics**](EvaluationApi.md#evaluationSkillv1evaluationsstatistics) | **GET** /skill/v1/evaluations/statistics | Retrieves the list of Evaluation Statistics, filtered on input parameters
[**evaluationSkillv1evaluationssubordinates**](EvaluationApi.md#evaluationSkillv1evaluationssubordinates) | **GET** /skill/v1/evaluations/subordinates | Retrieves all requested subordinates of a manager whose requests are completed
[**evaluationSkillv1evaluationsuserrequestid**](EvaluationApi.md#evaluationSkillv1evaluationsuserrequestid) | **GET** /skill/v1/evaluations/user/request/{id} | Retrieves the User Evaluation Details
[**evaluationSkillv1usersevaluation**](EvaluationApi.md#evaluationSkillv1usersevaluation) | **POST** /skill/v1/users/evaluation | Saves Skill Evaluation for users
[**evaluationSkillv1usersevaluation_0**](EvaluationApi.md#evaluationSkillv1usersevaluation_0) | **DELETE** /skill/v1/users/evaluation | Deletes Evaluation(s)
[**evaluationSkillv1usersevaluationrequestId**](EvaluationApi.md#evaluationSkillv1usersevaluationrequestId) | **GET** /skill/v1/users/evaluation/{request_id} | View summary of the user last completed and calibrated assessment
[**evaluationSkillv1usersidcontent**](EvaluationApi.md#evaluationSkillv1usersidcontent) | **POST** /skill/v1/users/{id}/content | Enroll user to formal content(courses and learning plans)
[**evaluationSkillv1usersidgapcontent**](EvaluationApi.md#evaluationSkillv1usersidgapcontent) | **GET** /skill/v1/users/{id}/gap/content | List suggested formal content(courses and learning plans) for user with gap to be enrolled in according to the skills with gaps
[**evaluationSkillv1usersrequests**](EvaluationApi.md#evaluationSkillv1usersrequests) | **GET** /skill/v1/users/requests | Retrieves all user requests and their status by role
[**evaluationSkillv1usersrequests_0**](EvaluationApi.md#evaluationSkillv1usersrequests_0) | **POST** /skill/v1/users/requests | Creates Evaluation Requests and assign users to the request
[**evaluationSkillv1usersrequests_1**](EvaluationApi.md#evaluationSkillv1usersrequests_1) | **DELETE** /skill/v1/users/requests | Delete Evaluation Requests
[**evaluationSkillv1usersroleroleIdexcludetype**](EvaluationApi.md#evaluationSkillv1usersroleroleIdexcludetype) | **POST** /skill/v1/users/role/{role_id}/exclude/{type} | Exclude users from further role evaluation by type
[**evaluationSkillv1userssuggestcontent**](EvaluationApi.md#evaluationSkillv1userssuggestcontent) | **GET** /skill/v1/users/suggest/content | Returns suggested assets content for current employee/user logged
[**evaluationSkillv1usersuserIdevaluation**](EvaluationApi.md#evaluationSkillv1usersuserIdevaluation) | **GET** /skill/v1/users/{user_id}/evaluation | Retrieves the latest Self and Manager Evaluation received by the User
[**evaluationSkillv1usersuserIdevaluation_0**](EvaluationApi.md#evaluationSkillv1usersuserIdevaluation_0) | **POST** /skill/v1/users/{user_id}/evaluation | Creates a new Skill Evaluation for an user
[**evaluationSkillv1usersuserIdevaluationdraft**](EvaluationApi.md#evaluationSkillv1usersuserIdevaluationdraft) | **GET** /skill/v1/users/{user_id}/evaluation/draft | Retrieves the draft Evaluation for an User
[**evaluationSkillv1usersuserIdevaluationskillId**](EvaluationApi.md#evaluationSkillv1usersuserIdevaluationskillId) | **GET** /skill/v1/users/{user_id}/evaluation/{skill_id} | Retrieves the history of Evaluations for one Skill of one User
[**evaluationSkillv1usersuserIdmanagers**](EvaluationApi.md#evaluationSkillv1usersuserIdmanagers) | **GET** /skill/v1/users/{user_id}/managers | Returns the manager of an employee
[**evaluationSkillv1usersuserIdrequestrequestIdreopen**](EvaluationApi.md#evaluationSkillv1usersuserIdrequestrequestIdreopen) | **GET** /skill/v1/users/{user_id}/request/{request_id}/reopen | Reopens a new Skill Evaluation for an user
[**evaluationSkillv1usersuserIdrequests**](EvaluationApi.md#evaluationSkillv1usersuserIdrequests) | **GET** /skill/v1/users/{user_id}/requests | Retrieves user evaluations
[**evaluationSkillv1usersuserIdrequests_0**](EvaluationApi.md#evaluationSkillv1usersuserIdrequests_0) | **POST** /skill/v1/users/{user_id}/requests | Creates Evaluation Requests and assign users to the request
[**evaluationSkillv1usersuserIdrequests_1**](EvaluationApi.md#evaluationSkillv1usersuserIdrequests_1) | **DELETE** /skill/v1/users/{user_id}/requests | Delete User Evaluation Requests
[**evaluationSkillv1usersuserIdrequestsskills**](EvaluationApi.md#evaluationSkillv1usersuserIdrequestsskills) | **GET** /skill/v1/users/{user_id}/requests/skills | Get the list of evaluation to perform grouped by skills
[**evaluationSkillv1usersuserIdroleroleIdexcludetype**](EvaluationApi.md#evaluationSkillv1usersuserIdroleroleIdexcludetype) | **POST** /skill/v1/users/{user_id}/role/{role_id}/exclude/{type} | Exclude an user from further role evaluation by type
[**evaluationSkillv1usersuserIdroles**](EvaluationApi.md#evaluationSkillv1usersuserIdroles) | **GET** /skill/v1/users/{user_id}/roles | Returns the role of a user


# **evaluationSkillv1evaluationsmanager**
> \Swagger\Client\Model\SkillEvaluationGetManagerSummaryResponse evaluationSkillv1evaluationsmanager()

Get the summary list of roles and skills per each role for the manager evaluation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();

try {
    $result = $api_instance->evaluationSkillv1evaluationsmanager();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsmanager: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetManagerSummaryResponse**](../Model/SkillEvaluationGetManagerSummaryResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationsrequestid**
> \Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationResponse evaluationSkillv1evaluationsrequestid($id, $body)

Exclude users from further role evaluation by type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$id = 56; // int | Id of an evaluation request
$body = new \Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationSchema(); // \Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1evaluationsrequestid($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsrequestid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of an evaluation request |
 **body** | [**\Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationSchema**](../Model/\Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationDeleteUsersEvaluationResponse**](../Model/SkillEvaluationDeleteUsersEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationsrequestsrequestIdskillsskillId**
> \Swagger\Client\Model\SkillEvaluationGetManagerEvaluationResponse evaluationSkillv1evaluationsrequestsrequestIdskillsskillId($request_id, $skill_id)

Get the list of users to be evaluated for the manager by skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$request_id = 56; // int | ID of the request to the manager
$skill_id = 56; // int | ID of the skill to be assessed by the manager

try {
    $result = $api_instance->evaluationSkillv1evaluationsrequestsrequestIdskillsskillId($request_id, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsrequestsrequestIdskillsskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **int**| ID of the request to the manager |
 **skill_id** | **int**| ID of the skill to be assessed by the manager |

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetManagerEvaluationResponse**](../Model/SkillEvaluationGetManagerEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationsrequestsrequestIduser**
> \Swagger\Client\Model\SkillEvaluationGetUserEvaluationResponse evaluationSkillv1evaluationsrequestsrequestIduser($request_id, $request_id2)

Get the list of skill to be evaluated by the user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$request_id = 56; // int | ID of the request to the manager
$request_id2 = 56; // int | ID of the request

try {
    $result = $api_instance->evaluationSkillv1evaluationsrequestsrequestIduser($request_id, $request_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsrequestsrequestIduser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **int**| ID of the request to the manager |
 **request_id2** | **int**| ID of the request |

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetUserEvaluationResponse**](../Model/SkillEvaluationGetUserEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationsstatistics**
> \Swagger\Client\Model\SkillEvaluationGetEvaluationRequestsResponse evaluationSkillv1evaluationsstatistics($role_id, $role_title, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $filters, $search_text)

Retrieves the list of Evaluation Statistics, filtered on input parameters

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$role_id = 56; // int | Search by id of a role
$role_title = "role_title_example"; // string | Search text in the role title. Default empty string.
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - role_title. Options: role_title, id, role_description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$filters = "filters_example"; // string | URL encoded filter - role_title('contains' or 'not_contains'), role_description('contains' or 'not_contains')
$search_text = "search_text_example"; // string | Search by text given(a text to search in role_title, role_description)

try {
    $result = $api_instance->evaluationSkillv1evaluationsstatistics($role_id, $role_title, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsstatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Search by id of a role | [optional]
 **role_title** | **string**| Search text in the role title. Default empty string. | [optional]
 **sort_attr** | **string**| Sort by this field, default value - role_title. Options: role_title, id, role_description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **filters** | **string**| URL encoded filter - role_title(&#39;contains&#39; or &#39;not_contains&#39;), role_description(&#39;contains&#39; or &#39;not_contains&#39;) | [optional]
 **search_text** | **string**| Search by text given(a text to search in role_title, role_description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetEvaluationRequestsResponse**](../Model/SkillEvaluationGetEvaluationRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationssubordinates**
> \Swagger\Client\Model\SkillEvaluationListSubordinatesResponse evaluationSkillv1evaluationssubordinates($user_name, $branch_id, $selection_status, $filters, $page, $page_size, $lang, $get_total_count)

Retrieves all requested subordinates of a manager whose requests are completed



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_name = 56; // int | Search list for given user.
$branch_id = 56; // int | Search list for given branch.
$selection_status = 56; // int | Selection status of the given branch.Options - 1(only branch), 2(with children)
$filters = "filters_example"; // string | URL encoded filter - role_name('contains' or 'not_contains')
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->evaluationSkillv1evaluationssubordinates($user_name, $branch_id, $selection_status, $filters, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationssubordinates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **int**| Search list for given user. | [optional]
 **branch_id** | **int**| Search list for given branch. | [optional]
 **selection_status** | **int**| Selection status of the given branch.Options - 1(only branch), 2(with children) | [optional]
 **filters** | **string**| URL encoded filter - role_name(&#39;contains&#39; or &#39;not_contains&#39;) | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationListSubordinatesResponse**](../Model/SkillEvaluationListSubordinatesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1evaluationsuserrequestid**
> \Swagger\Client\Model\SkillEvaluationViewEvaluationResponse evaluationSkillv1evaluationsuserrequestid($id, $user_id, $rater_id)

Retrieves the User Evaluation Details

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$id = 56; // int | Request id
$user_id = 56; // int | The id of the evaluated user
$rater_id = 56; // int | User id of the evaluated user

try {
    $result = $api_instance->evaluationSkillv1evaluationsuserrequestid($id, $user_id, $rater_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1evaluationsuserrequestid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Request id |
 **user_id** | **int**| The id of the evaluated user |
 **rater_id** | **int**| User id of the evaluated user |

### Return type

[**\Swagger\Client\Model\SkillEvaluationViewEvaluationResponse**](../Model/SkillEvaluationViewEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersevaluation**
> \Swagger\Client\Model\SkillEvaluationSaveEvaluationResponse evaluationSkillv1usersevaluation($body)

Saves Skill Evaluation for users

It’s possible to save an evaluation as a draft. Draft evaluations are not used in reports and analysis.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$body = new \Swagger\Client\Model\SkillEvaluationSaveEvaluationSchema(); // \Swagger\Client\Model\SkillEvaluationSaveEvaluationSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersevaluation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersevaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillEvaluationSaveEvaluationSchema**](../Model/\Swagger\Client\Model\SkillEvaluationSaveEvaluationSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationSaveEvaluationResponse**](../Model/SkillEvaluationSaveEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersevaluation_0**
> \Swagger\Client\Model\SkillEvaluationDeleteResponse evaluationSkillv1usersevaluation_0($body)

Deletes Evaluation(s)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$body = new \Swagger\Client\Model\SkillEvaluationDeleteSchema(); // \Swagger\Client\Model\SkillEvaluationDeleteSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersevaluation_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersevaluation_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillEvaluationDeleteSchema**](../Model/\Swagger\Client\Model\SkillEvaluationDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationDeleteResponse**](../Model/SkillEvaluationDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersevaluationrequestId**
> \Swagger\Client\Model\SkillEvaluationEvaluationsSearchResponse evaluationSkillv1usersevaluationrequestId($request_id, $user_id, $lang)

View summary of the user last completed and calibrated assessment

All filter parameters are optional. If skill_ids are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$request_id = 56; // int | ID of the completed request
$user_id = 56; // int | ID of the user to provide data for. If not passed current logged in user is taken.
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->evaluationSkillv1usersevaluationrequestId($request_id, $user_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersevaluationrequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **int**| ID of the completed request |
 **user_id** | **int**| ID of the user to provide data for. If not passed current logged in user is taken. | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationEvaluationsSearchResponse**](../Model/SkillEvaluationEvaluationsSearchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersidcontent**
> \Swagger\Client\Model\SkillEvaluationUserEnrollContentResponse evaluationSkillv1usersidcontent($id, $body)

Enroll user to formal content(courses and learning plans)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$id = 56; // int | User id
$body = new \Swagger\Client\Model\SkillEvaluationUserEnrollContentSchema(); // \Swagger\Client\Model\SkillEvaluationUserEnrollContentSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersidcontent($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersidcontent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User id |
 **body** | [**\Swagger\Client\Model\SkillEvaluationUserEnrollContentSchema**](../Model/\Swagger\Client\Model\SkillEvaluationUserEnrollContentSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationUserEnrollContentResponse**](../Model/SkillEvaluationUserEnrollContentResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersidgapcontent**
> \Swagger\Client\Model\SkillEvaluationUserSuggestContentResponse evaluationSkillv1usersidgapcontent($id, $skill_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $filters, $search_text)

List suggested formal content(courses and learning plans) for user with gap to be enrolled in according to the skills with gaps



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$id = 56; // int | Id of the user
$skill_id = 56; // int | Filter by skill id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$filters = "filters_example"; // string | URL encoded filter by:
$search_text = "search_text_example"; // string | Search by text given(a text to search in name or description)

try {
    $result = $api_instance->evaluationSkillv1usersidgapcontent($id, $skill_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $filters, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersidgapcontent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the user |
 **skill_id** | **int**| Filter by skill id | [optional]
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **filters** | **string**| URL encoded filter by: | [optional]
 **search_text** | **string**| Search by text given(a text to search in name or description) | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationUserSuggestContentResponse**](../Model/SkillEvaluationUserSuggestContentResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersrequests**
> \Swagger\Client\Model\SkillEvaluationListRequestsResponse evaluationSkillv1usersrequests($role_id, $type, $page, $page_size, $lang, $get_total_count)

Retrieves all user requests and their status by role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$role_id = 56; // int | Search requests for given role.
$type = 56; // int | Get requests by given type. Possible values S-self, M-manager and P-peer.
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->evaluationSkillv1usersrequests($role_id, $type, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Search requests for given role. |
 **type** | **int**| Get requests by given type. Possible values S-self, M-manager and P-peer. |
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationListRequestsResponse**](../Model/SkillEvaluationListRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersrequests_0**
> \Swagger\Client\Model\SkillEvaluationInitResponse evaluationSkillv1usersrequests_0($body)

Creates Evaluation Requests and assign users to the request

If type and role not passed, requests for all types will be created and users from all roles will be assigned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$body = new \Swagger\Client\Model\SkillEvaluationInitSchema(); // \Swagger\Client\Model\SkillEvaluationInitSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersrequests_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersrequests_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillEvaluationInitSchema**](../Model/\Swagger\Client\Model\SkillEvaluationInitSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationInitResponse**](../Model/SkillEvaluationInitResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersrequests_1**
> \Swagger\Client\Model\SkillEvaluationDeleteRequestsResponse evaluationSkillv1usersrequests_1($body)

Delete Evaluation Requests

This service deletes only requests which are automatic and in state inprogress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$body = new \Swagger\Client\Model\SkillEvaluationDeleteRequestsSchema(); // \Swagger\Client\Model\SkillEvaluationDeleteRequestsSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersrequests_1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersrequests_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SkillEvaluationDeleteRequestsSchema**](../Model/\Swagger\Client\Model\SkillEvaluationDeleteRequestsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationDeleteRequestsResponse**](../Model/SkillEvaluationDeleteRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersroleroleIdexcludetype**
> \Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationResponse evaluationSkillv1usersroleroleIdexcludetype($role_id, $type, $body)

Exclude users from further role evaluation by type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$role_id = 56; // int | Id of a role
$type = "type_example"; // string | Evaluation type - S(Self), M(Manager) and P(Peer)
$body = new \Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationSchema(); // \Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersroleroleIdexcludetype($role_id, $type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersroleroleIdexcludetype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **int**| Id of a role |
 **type** | **string**| Evaluation type - S(Self), M(Manager) and P(Peer) |
 **body** | [**\Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationSchema**](../Model/\Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationExcludeUsersEvaluationResponse**](../Model/SkillEvaluationExcludeUsersEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1userssuggestcontent**
> \Swagger\Client\Model\SkillEvaluationSuggestContentResponse evaluationSkillv1userssuggestcontent($auto_suggest)

Returns suggested assets content for current employee/user logged



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$auto_suggest = 56; // int | Get only &quot;Auto-suggest&quot;-ed assets(value: 1) or those that are not auto-suggested(value: 0); Default: 1

try {
    $result = $api_instance->evaluationSkillv1userssuggestcontent($auto_suggest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1userssuggestcontent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_suggest** | **int**| Get only &amp;quot;Auto-suggest&amp;quot;-ed assets(value: 1) or those that are not auto-suggested(value: 0); Default: 1 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationSuggestContentResponse**](../Model/SkillEvaluationSuggestContentResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdevaluation**
> \Swagger\Client\Model\SkillEvaluationGetLastEvaluationByEmployeeResponse evaluationSkillv1usersuserIdevaluation($lang)

Retrieves the latest Self and Manager Evaluation received by the User

Draft evaluations are not returned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->evaluationSkillv1usersuserIdevaluation($lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdevaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetLastEvaluationByEmployeeResponse**](../Model/SkillEvaluationGetLastEvaluationByEmployeeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdevaluation_0**
> \Swagger\Client\Model\SkillEvaluationCreateResponse evaluationSkillv1usersuserIdevaluation_0($user_id, $body)

Creates a new Skill Evaluation for an user

It’s possible to save an evaluation as a draft. Draft evaluations are not used in reports and analysis.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | User id of the user
$body = new \Swagger\Client\Model\SkillEvaluationCreateSchema(); // \Swagger\Client\Model\SkillEvaluationCreateSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersuserIdevaluation_0($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdevaluation_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User id of the user |
 **body** | [**\Swagger\Client\Model\SkillEvaluationCreateSchema**](../Model/\Swagger\Client\Model\SkillEvaluationCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationCreateResponse**](../Model/SkillEvaluationCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdevaluationdraft**
> \Swagger\Client\Model\SkillEvaluationGetDraftEvaluationResponse evaluationSkillv1usersuserIdevaluationdraft($user_id, $user_id2, $rater_id, $skill_id, $lang)

Retrieves the draft Evaluation for an User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | User id of the user
$user_id2 = 56; // int | ID of the user that was rated
$rater_id = 56; // int | ID of the rater who rated
$skill_id = array("skill_id_example"); // string[] | The skill to get
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->evaluationSkillv1usersuserIdevaluationdraft($user_id, $user_id2, $rater_id, $skill_id, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdevaluationdraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User id of the user |
 **user_id2** | **int**| ID of the user that was rated |
 **rater_id** | **int**| ID of the rater who rated |
 **skill_id** | [**string[]**](../Model/string.md)| The skill to get | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetDraftEvaluationResponse**](../Model/SkillEvaluationGetDraftEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdevaluationskillId**
> \Swagger\Client\Model\SkillEvaluationGetEvaluationHistoryResponse evaluationSkillv1usersuserIdevaluationskillId($user_id, $skill_id, $user_id2, $evaluation_type, $skill_id2, $lang)

Retrieves the history of Evaluations for one Skill of one User

Draft evaluations are not returned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | User id of the user
$skill_id = 56; // int | Skill id of the user
$user_id2 = 56; // int | ID of the rated user
$evaluation_type = "evaluation_type_example"; // string | Type of evaluation, options S,M (Self, Manager)
$skill_id2 = 56; // int | The skill_id to get history
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language

try {
    $result = $api_instance->evaluationSkillv1usersuserIdevaluationskillId($user_id, $skill_id, $user_id2, $evaluation_type, $skill_id2, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdevaluationskillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User id of the user |
 **skill_id** | **int**| Skill id of the user |
 **user_id2** | **int**| ID of the rated user |
 **evaluation_type** | **string**| Type of evaluation, options S,M (Self, Manager) |
 **skill_id2** | **int**| The skill_id to get history |
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetEvaluationHistoryResponse**](../Model/SkillEvaluationGetEvaluationHistoryResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdmanagers**
> \Swagger\Client\Model\SkillEvaluationGetManagerResponse evaluationSkillv1usersuserIdmanagers($hierarchy)

Returns the manager of an employee



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$hierarchy = 56; // int | Type of manager  (1 for Direct manager, other codes reserved for future improvements), default - 1

try {
    $result = $api_instance->evaluationSkillv1usersuserIdmanagers($hierarchy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdmanagers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hierarchy** | **int**| Type of manager  (1 for Direct manager, other codes reserved for future improvements), default - 1 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetManagerResponse**](../Model/SkillEvaluationGetManagerResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdrequestrequestIdreopen**
> \Swagger\Client\Model\SkillEvaluationReopenUserEvaluationResponse evaluationSkillv1usersuserIdrequestrequestIdreopen($user_id, $request_id)

Reopens a new Skill Evaluation for an user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | User id of the user
$request_id = 56; // int | Id of evaluation request

try {
    $result = $api_instance->evaluationSkillv1usersuserIdrequestrequestIdreopen($user_id, $request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdrequestrequestIdreopen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User id of the user |
 **request_id** | **int**| Id of evaluation request |

### Return type

[**\Swagger\Client\Model\SkillEvaluationReopenUserEvaluationResponse**](../Model/SkillEvaluationReopenUserEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdrequests**
> \Swagger\Client\Model\SkillEvaluationListUserRequestsResponse evaluationSkillv1usersuserIdrequests($user_id, $user_id2, $type, $status, $page, $page_size, $get_total_count)

Retrieves user evaluations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | ID of the user
$user_id2 = 56; // int | ID of the user
$type = 56; // int | Get requests by given type. Possible values S-self, M-manager and P-peer.
$status = 56; // int | Get requests by given status. Possible values 0-Requested, 1-Inprogress and 2-Completed.
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->evaluationSkillv1usersuserIdrequests($user_id, $user_id2, $type, $status, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |
 **user_id2** | **int**| ID of the user |
 **type** | **int**| Get requests by given type. Possible values S-self, M-manager and P-peer. |
 **status** | **int**| Get requests by given status. Possible values 0-Requested, 1-Inprogress and 2-Completed. |
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationListUserRequestsResponse**](../Model/SkillEvaluationListUserRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdrequests_0**
> \Swagger\Client\Model\SkillEvaluationInitUserRequestsResponse evaluationSkillv1usersuserIdrequests_0($user_id, $body)

Creates Evaluation Requests and assign users to the request

If type and role not passed, requests for all types will be created and users from all roles will be assigned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | ID of the user
$body = new \Swagger\Client\Model\SkillEvaluationInitUserRequestsSchema(); // \Swagger\Client\Model\SkillEvaluationInitUserRequestsSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersuserIdrequests_0($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdrequests_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |
 **body** | [**\Swagger\Client\Model\SkillEvaluationInitUserRequestsSchema**](../Model/\Swagger\Client\Model\SkillEvaluationInitUserRequestsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationInitUserRequestsResponse**](../Model/SkillEvaluationInitUserRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdrequests_1**
> \Swagger\Client\Model\SkillEvaluationDeleteUserRequestsResponse evaluationSkillv1usersuserIdrequests_1($user_id, $body)

Delete User Evaluation Requests

This service deletes only requests which are automatic and in state inprogress for a given user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | ID of the user
$body = new \Swagger\Client\Model\SkillEvaluationDeleteUserRequestsSchema(); // \Swagger\Client\Model\SkillEvaluationDeleteUserRequestsSchema | Raw Body

try {
    $result = $api_instance->evaluationSkillv1usersuserIdrequests_1($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdrequests_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |
 **body** | [**\Swagger\Client\Model\SkillEvaluationDeleteUserRequestsSchema**](../Model/\Swagger\Client\Model\SkillEvaluationDeleteUserRequestsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationDeleteUserRequestsResponse**](../Model/SkillEvaluationDeleteUserRequestsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdrequestsskills**
> \Swagger\Client\Model\SkillEvaluationListEvaluationSkillsResponse evaluationSkillv1usersuserIdrequestsskills($user_id, $user_id2, $type, $status, $page, $page_size, $get_total_count)

Get the list of evaluation to perform grouped by skills



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | ID of the user
$user_id2 = 56; // int | ID of the user
$type = 56; // int | Get evaluations by given type. Possible values S-self, M-manager and P-peer.
$status = 56; // int | Get evaluations by given status. Possible values 0-Requested, 1-Inprogress and 2-Completed.
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->evaluationSkillv1usersuserIdrequestsskills($user_id, $user_id2, $type, $status, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdrequestsskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user |
 **user_id2** | **int**| ID of the user |
 **type** | **int**| Get evaluations by given type. Possible values S-self, M-manager and P-peer. |
 **status** | **int**| Get evaluations by given status. Possible values 0-Requested, 1-Inprogress and 2-Completed. |
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillEvaluationListEvaluationSkillsResponse**](../Model/SkillEvaluationListEvaluationSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdroleroleIdexcludetype**
> \Swagger\Client\Model\SkillEvaluationExcludeUserEvaluationResponse evaluationSkillv1usersuserIdroleroleIdexcludetype($user_id, $role_id, $type)

Exclude an user from further role evaluation by type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | User id of the user
$role_id = 56; // int | Id of a role
$type = "type_example"; // string | Evaluation type - S(Self), M(Manager) and P(Peer)

try {
    $result = $api_instance->evaluationSkillv1usersuserIdroleroleIdexcludetype($user_id, $role_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdroleroleIdexcludetype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User id of the user |
 **role_id** | **int**| Id of a role |
 **type** | **string**| Evaluation type - S(Self), M(Manager) and P(Peer) |

### Return type

[**\Swagger\Client\Model\SkillEvaluationExcludeUserEvaluationResponse**](../Model/SkillEvaluationExcludeUserEvaluationResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationSkillv1usersuserIdroles**
> \Swagger\Client\Model\SkillEvaluationGetUserRoleResponse evaluationSkillv1usersuserIdroles($user_id)

Returns the role of a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\EvaluationApi();
$user_id = 56; // int | ID of user to get role

try {
    $result = $api_instance->evaluationSkillv1usersuserIdroles($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationApi->evaluationSkillv1usersuserIdroles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user to get role |

### Return type

[**\Swagger\Client\Model\SkillEvaluationGetUserRoleResponse**](../Model/SkillEvaluationGetUserRoleResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

