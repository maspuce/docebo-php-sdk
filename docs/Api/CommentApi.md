# Swagger\Client\CommentApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentSharev1comments**](CommentApi.md#commentSharev1comments) | **GET** /share/v1/comments | List Comments
[**commentSharev1comments_0**](CommentApi.md#commentSharev1comments_0) | **POST** /share/v1/comments | Creates a new comment
[**commentSharev1commentsidComment**](CommentApi.md#commentSharev1commentsidComment) | **GET** /share/v1/comments/{id_comment} | Return a complete thread for comment
[**commentSharev1commentsidComment_0**](CommentApi.md#commentSharev1commentsidComment_0) | **PUT** /share/v1/comments/{id_comment} | Update comment
[**commentSharev1commentsidComment_1**](CommentApi.md#commentSharev1commentsidComment_1) | **DELETE** /share/v1/comments/{id_comment} | Delete comment
[**commentSharev1commentsidCommentanswer**](CommentApi.md#commentSharev1commentsidCommentanswer) | **POST** /share/v1/comments/{id_comment}/answer | Create reply
[**commentSharev1commentsidCommentevaluate**](CommentApi.md#commentSharev1commentsidCommentevaluate) | **PUT** /share/v1/comments/{id_comment}/evaluate | Like comment
[**commentSharev1commentsidCommentevaluate_0**](CommentApi.md#commentSharev1commentsidCommentevaluate_0) | **DELETE** /share/v1/comments/{id_comment}/evaluate | Dislike comment


# **commentSharev1comments**
> \Swagger\Client\Model\ShareCommentListResponse commentSharev1comments($search_text, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $id_asset, $show, $type, $channel_id, $type_question)

List Comments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$search_text = "search_text_example"; // string | Search text in the comment title. Default empty string
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: title, date, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$id_asset = 56; // int | Filter returned Comments by asset
$show = "show_example"; // string | Filter returned comments by this options: &quot;new&quot; - New comments, &quot;best&quot; - New Best replies, &quot;open&quot; - Open Comments, &quot;my_questions&quot; - My Comments, &quot;my_answers&quot; - My Replies. Default - all
$type = array(56); // int[] | Filter returned comments by type. Options: [0] - direct comments, [1] - linked to an asset/course. Default - both
$channel_id = 56; // int | Filter returned comments by channel. Default: All channels
$type_question = 56; // int | Filter returned comments or questions or both by type. Options: 1 - questions, 2 - comment, 3 - both. Default - 2

try {
    $result = $api_instance->commentSharev1comments($search_text, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count, $id_asset, $show, $type, $channel_id, $type_question);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1comments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text in the comment title. Default empty string | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: title, date, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **id_asset** | **int**| Filter returned Comments by asset | [optional]
 **show** | **string**| Filter returned comments by this options: &amp;quot;new&amp;quot; - New comments, &amp;quot;best&amp;quot; - New Best replies, &amp;quot;open&amp;quot; - Open Comments, &amp;quot;my_questions&amp;quot; - My Comments, &amp;quot;my_answers&amp;quot; - My Replies. Default - all | [optional]
 **type** | [**int[]**](../Model/int.md)| Filter returned comments by type. Options: [0] - direct comments, [1] - linked to an asset/course. Default - both | [optional]
 **channel_id** | **int**| Filter returned comments by channel. Default: All channels | [optional]
 **type_question** | **int**| Filter returned comments or questions or both by type. Options: 1 - questions, 2 - comment, 3 - both. Default - 2 | [optional]

### Return type

[**\Swagger\Client\Model\ShareCommentListResponse**](../Model/ShareCommentListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1comments_0**
> \Swagger\Client\Model\ShareCommentCreateResponse commentSharev1comments_0($body)

Creates a new comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$body = new \Swagger\Client\Model\ShareCommentCreateSchema(); // \Swagger\Client\Model\ShareCommentCreateSchema | Raw Body

try {
    $result = $api_instance->commentSharev1comments_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1comments_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShareCommentCreateSchema**](../Model/\Swagger\Client\Model\ShareCommentCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareCommentCreateResponse**](../Model/ShareCommentCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidComment**
> \Swagger\Client\Model\ShareCommentViewResponse commentSharev1commentsidComment($id_comment)

Return a complete thread for comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | Required ID of comment to fetch

try {
    $result = $api_instance->commentSharev1commentsidComment($id_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| Required ID of comment to fetch |

### Return type

[**\Swagger\Client\Model\ShareCommentViewResponse**](../Model/ShareCommentViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidComment_0**
> \Swagger\Client\Model\ShareCommentUpdateResponse commentSharev1commentsidComment_0($id_comment, $body)

Update comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | ID of the comment
$body = new \Swagger\Client\Model\ShareCommentUpdateSchema(); // \Swagger\Client\Model\ShareCommentUpdateSchema | Raw Body

try {
    $result = $api_instance->commentSharev1commentsidComment_0($id_comment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidComment_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| ID of the comment |
 **body** | [**\Swagger\Client\Model\ShareCommentUpdateSchema**](../Model/\Swagger\Client\Model\ShareCommentUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareCommentUpdateResponse**](../Model/ShareCommentUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidComment_1**
> \Swagger\Client\Model\ShareCommentDeleteResponse commentSharev1commentsidComment_1($id_comment)

Delete comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | ID of the comment

try {
    $result = $api_instance->commentSharev1commentsidComment_1($id_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidComment_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| ID of the comment |

### Return type

[**\Swagger\Client\Model\ShareCommentDeleteResponse**](../Model/ShareCommentDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidCommentanswer**
> \Swagger\Client\Model\ShareCommentCreateReplyResponse commentSharev1commentsidCommentanswer($id_comment, $body)

Create reply



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | ID of the comment
$body = new \Swagger\Client\Model\ShareCommentCreateReplySchema(); // \Swagger\Client\Model\ShareCommentCreateReplySchema | Raw Body

try {
    $result = $api_instance->commentSharev1commentsidCommentanswer($id_comment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidCommentanswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| ID of the comment |
 **body** | [**\Swagger\Client\Model\ShareCommentCreateReplySchema**](../Model/\Swagger\Client\Model\ShareCommentCreateReplySchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareCommentCreateReplyResponse**](../Model/ShareCommentCreateReplyResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidCommentevaluate**
> \Swagger\Client\Model\ShareCommentLikeResponse commentSharev1commentsidCommentevaluate($id_comment)

Like comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | ID of the comment

try {
    $result = $api_instance->commentSharev1commentsidCommentevaluate($id_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidCommentevaluate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| ID of the comment |

### Return type

[**\Swagger\Client\Model\ShareCommentLikeResponse**](../Model/ShareCommentLikeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentSharev1commentsidCommentevaluate_0**
> \Swagger\Client\Model\ShareCommentDislikeResponse commentSharev1commentsidCommentevaluate_0($id_comment)

Dislike comment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CommentApi();
$id_comment = 56; // int | ID of the comment

try {
    $result = $api_instance->commentSharev1commentsidCommentevaluate_0($id_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->commentSharev1commentsidCommentevaluate_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_comment** | **int**| ID of the comment |

### Return type

[**\Swagger\Client\Model\ShareCommentDislikeResponse**](../Model/ShareCommentDislikeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

