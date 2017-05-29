# Swagger\Client\QuestionApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**questionSharev1commentsidQuestion**](QuestionApi.md#questionSharev1commentsidQuestion) | **DELETE** /share/v1/comments/{id_question} | Delete question
[**questionSharev1questions**](QuestionApi.md#questionSharev1questions) | **GET** /share/v1/questions | List Questions
[**questionSharev1questions_0**](QuestionApi.md#questionSharev1questions_0) | **POST** /share/v1/questions | Creates a new question
[**questionSharev1questionsidQuestion**](QuestionApi.md#questionSharev1questionsidQuestion) | **GET** /share/v1/questions/{id_question} | Return a complete thread for question
[**questionSharev1questionsidQuestion_0**](QuestionApi.md#questionSharev1questionsidQuestion_0) | **PUT** /share/v1/questions/{id_question} | Update question
[**questionSharev1questionsidQuestionanswer**](QuestionApi.md#questionSharev1questionsidQuestionanswer) | **POST** /share/v1/questions/{id_question}/answer | Create answer
[**questionSharev1questionsidQuestionfollow**](QuestionApi.md#questionSharev1questionsidQuestionfollow) | **POST** /share/v1/questions/{id_question}/follow | Follows a question
[**questionSharev1questionsidQuestionfollow_0**](QuestionApi.md#questionSharev1questionsidQuestionfollow_0) | **DELETE** /share/v1/questions/{id_question}/follow | Unfollows a question
[**questionSharev1questionslast**](QuestionApi.md#questionSharev1questionslast) | **GET** /share/v1/questions/last | Last visit questions
[**questionSharev1questionstopChannels**](QuestionApi.md#questionSharev1questionstopChannels) | **GET** /share/v1/questions/top_channels | Top 10 channels
[**questionSharev1questionstopExperts**](QuestionApi.md#questionSharev1questionstopExperts) | **GET** /share/v1/questions/top_experts | Top 10 Q&amp;A expert


# **questionSharev1commentsidQuestion**
> \Swagger\Client\Model\ShareQuestionDeleteResponse questionSharev1commentsidQuestion($id_question)

Delete question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$id_question = 56; // int | ID of the question

try {
    $result = $api_instance->questionSharev1commentsidQuestion($id_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1commentsidQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_question** | **int**| ID of the question |

### Return type

[**\Swagger\Client\Model\ShareQuestionDeleteResponse**](../Model/ShareQuestionDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questions**
> \Swagger\Client\Model\ShareQuestionListResponse questionSharev1questions($search_text, $sort_by, $sort_by_direction, $page, $page_size, $lang, $get_total_count, $id_asset, $show, $type, $channel_id, $type_question)

List Questions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$search_text = "search_text_example"; // string | Search text in the question title. Default empty string
$sort_by = "sort_by_example"; // string | Sort by this field, default value - id. Options: title, date, id
$sort_by_direction = "sort_by_direction_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$id_asset = 56; // int | Filter returned questions by asset
$show = "show_example"; // string | Filter returned questions by this options: &quot;new&quot; - New Questions, &quot;best&quot; - New Best Answers, &quot;open&quot; - Open questions, &quot;my_questions&quot; - My Questions, &quot;my_answers&quot; - My Answers, &quot;follow&quot; - Followed questions. Default - all
$type = array(56); // int[] | Filter returned questions by type. Options: [0] - direct questions, [1] - linked to an asset/course. Default - both
$channel_id = 56; // int | Filter returned questions by channel. Default: All channels
$type_question = 56; // int | Filter returned comments or questions or both by type. Options: 1 - questions, 2 - comment, 3 - both. Default - 1

try {
    $result = $api_instance->questionSharev1questions($search_text, $sort_by, $sort_by_direction, $page, $page_size, $lang, $get_total_count, $id_asset, $show, $type, $channel_id, $type_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text in the question title. Default empty string | [optional]
 **sort_by** | **string**| Sort by this field, default value - id. Options: title, date, id | [optional]
 **sort_by_direction** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **id_asset** | **int**| Filter returned questions by asset | [optional]
 **show** | **string**| Filter returned questions by this options: &amp;quot;new&amp;quot; - New Questions, &amp;quot;best&amp;quot; - New Best Answers, &amp;quot;open&amp;quot; - Open questions, &amp;quot;my_questions&amp;quot; - My Questions, &amp;quot;my_answers&amp;quot; - My Answers, &amp;quot;follow&amp;quot; - Followed questions. Default - all | [optional]
 **type** | [**int[]**](../Model/int.md)| Filter returned questions by type. Options: [0] - direct questions, [1] - linked to an asset/course. Default - both | [optional]
 **channel_id** | **int**| Filter returned questions by channel. Default: All channels | [optional]
 **type_question** | **int**| Filter returned comments or questions or both by type. Options: 1 - questions, 2 - comment, 3 - both. Default - 1 | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionListResponse**](../Model/ShareQuestionListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questions_0**
> \Swagger\Client\Model\ShareQuestionCreateResponse questionSharev1questions_0($body)

Creates a new question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$body = new \Swagger\Client\Model\ShareQuestionCreateSchema(); // \Swagger\Client\Model\ShareQuestionCreateSchema | Raw Body

try {
    $result = $api_instance->questionSharev1questions_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questions_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShareQuestionCreateSchema**](../Model/\Swagger\Client\Model\ShareQuestionCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionCreateResponse**](../Model/ShareQuestionCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionsidQuestion**
> \Swagger\Client\Model\ShareQuestionViewResponse questionSharev1questionsidQuestion($id_question)

Return a complete thread for question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$id_question = 56; // int | Required ID of question to fetch

try {
    $result = $api_instance->questionSharev1questionsidQuestion($id_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionsidQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_question** | **int**| Required ID of question to fetch |

### Return type

[**\Swagger\Client\Model\ShareQuestionViewResponse**](../Model/ShareQuestionViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionsidQuestion_0**
> \Swagger\Client\Model\ShareQuestionUpdateResponse questionSharev1questionsidQuestion_0($id_question, $body)

Update question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$id_question = 56; // int | ID of the question
$body = new \Swagger\Client\Model\ShareQuestionUpdateSchema(); // \Swagger\Client\Model\ShareQuestionUpdateSchema | Raw Body

try {
    $result = $api_instance->questionSharev1questionsidQuestion_0($id_question, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionsidQuestion_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_question** | **int**| ID of the question |
 **body** | [**\Swagger\Client\Model\ShareQuestionUpdateSchema**](../Model/\Swagger\Client\Model\ShareQuestionUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionUpdateResponse**](../Model/ShareQuestionUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionsidQuestionanswer**
> \Swagger\Client\Model\ShareQuestionCreateAnswerResponse questionSharev1questionsidQuestionanswer($id_question, $body)

Create answer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$id_question = 56; // int | ID of the question
$body = new \Swagger\Client\Model\ShareQuestionCreateAnswerSchema(); // \Swagger\Client\Model\ShareQuestionCreateAnswerSchema | Raw Body

try {
    $result = $api_instance->questionSharev1questionsidQuestionanswer($id_question, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionsidQuestionanswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_question** | **int**| ID of the question |
 **body** | [**\Swagger\Client\Model\ShareQuestionCreateAnswerSchema**](../Model/\Swagger\Client\Model\ShareQuestionCreateAnswerSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionCreateAnswerResponse**](../Model/ShareQuestionCreateAnswerResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionsidQuestionfollow**
> \Swagger\Client\Model\ShareQuestionFollowResponse questionSharev1questionsidQuestionfollow()

Follows a question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();

try {
    $result = $api_instance->questionSharev1questionsidQuestionfollow();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionsidQuestionfollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ShareQuestionFollowResponse**](../Model/ShareQuestionFollowResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionsidQuestionfollow_0**
> \Swagger\Client\Model\ShareQuestionUnfollowResponse questionSharev1questionsidQuestionfollow_0()

Unfollows a question



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();

try {
    $result = $api_instance->questionSharev1questionsidQuestionfollow_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionsidQuestionfollow_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ShareQuestionUnfollowResponse**](../Model/ShareQuestionUnfollowResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionslast**
> \Swagger\Client\Model\ShareQuestionLastVisitResponse questionSharev1questionslast()

Last visit questions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();

try {
    $result = $api_instance->questionSharev1questionslast();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionslast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ShareQuestionLastVisitResponse**](../Model/ShareQuestionLastVisitResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionstopChannels**
> \Swagger\Client\Model\ShareQuestionTopChannelsResponse questionSharev1questionstopChannels($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Top 10 channels



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - total. Options: id, total
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->questionSharev1questionstopChannels($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionstopChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - total. Options: id, total | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionTopChannelsResponse**](../Model/ShareQuestionTopChannelsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **questionSharev1questionstopExperts**
> \Swagger\Client\Model\ShareQuestionTopExpertsResponse questionSharev1questionstopExperts($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Top 10 Q&A expert



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\QuestionApi();
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - best_answers. Options: best_answers, questions
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->questionSharev1questionstopExperts($sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionApi->questionSharev1questionstopExperts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_attr** | **string**| Sort by this field, default value - best_answers. Options: best_answers, questions | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareQuestionTopExpertsResponse**](../Model/ShareQuestionTopExpertsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

