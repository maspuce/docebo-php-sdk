# Swagger\Client\CourseApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseLearnv1coursecommentsthreadthreadId**](CourseApi.md#courseLearnv1coursecommentsthreadthreadId) | **PUT** /learn/v1/course/comments/thread/{thread_id} | PUT | DELETE discussions (thread) - course
[**courseLearnv1coursecommentsthreadthreadIdmessage**](CourseApi.md#courseLearnv1coursecommentsthreadthreadIdmessage) | **PUT** /learn/v1/course/comments/thread/{thread_id}/message | PUT REPLY discussions (thread) - course
[**courseLearnv1courseimportCourses**](CourseApi.md#courseLearnv1courseimportCourses) | **POST** /learn/v1/course/importCourses | Batch import courses
[**courseLearnv1courses**](CourseApi.md#courseLearnv1courses) | **GET** /learn/v1/courses | Returns all courses.
[**courseLearnv1courses_0**](CourseApi.md#courseLearnv1courses_0) | **POST** /learn/v1/courses | Create a new Course
[**courseLearnv1courseschart**](CourseApi.md#courseLearnv1courseschart) | **GET** /learn/v1/courses/chart | Get all learning objects by id of course
[**courseLearnv1coursescompactList**](CourseApi.md#courseLearnv1coursescompactList) | **POST** /learn/v1/courses/compact_list | Return a more compact information about list of courses (filtering possible or just ALL courses), taking into account a given user
[**courseLearnv1coursescourseId**](CourseApi.md#courseLearnv1coursescourseId) | **GET** /learn/v1/courses/{course_id} | View a Course
[**courseLearnv1coursescourseIdbyCategory**](CourseApi.md#courseLearnv1coursescourseIdbyCategory) | **GET** /learn/v1/courses/{course_id}/by_category | Returns all courses of the same category.
[**courseLearnv1coursescourseIddeeplink**](CourseApi.md#courseLearnv1coursescourseIddeeplink) | **POST** /learn/v1/courses/{course_id}/deeplink | Deeplinking is enabled in the advanced settings of a course and it allows to share a course with anybody using a signed link
[**courseLearnv1coursescourseIdlos**](CourseApi.md#courseLearnv1coursescourseIdlos) | **GET** /learn/v1/courses/{course_id}/los | Get all learning objects by id of course
[**courseLearnv1coursescourseIdrating**](CourseApi.md#courseLearnv1coursescourseIdrating) | **GET** /learn/v1/courses/{course_id}/rating | View course rating
[**courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd**](CourseApi.md#courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd) | **GET** /learn/v1/courses/{course_id}/session/{id_session}/date/{yyyy-mm-dd} | Joining or starting a webinar session&#39;s date
[**courseLearnv1coursesenrollmentPdf**](CourseApi.md#courseLearnv1coursesenrollmentPdf) | **POST** /learn/v1/courses/enrollmentPdf | Returns all courses.
[**courseLearnv1coursesid**](CourseApi.md#courseLearnv1coursesid) | **PUT** /learn/v1/courses/{id} | Update specific Course
[**courseLearnv1coursesid_0**](CourseApi.md#courseLearnv1coursesid_0) | **DELETE** /learn/v1/courses/{id} | Delete specific Learning course by given ID
[**courseLearnv1coursesidcomments**](CourseApi.md#courseLearnv1coursesidcomments) | **GET** /learn/v1/courses/{id}/comments | Get discussions/posts of a course
[**courseLearnv1coursesidrating**](CourseApi.md#courseLearnv1coursesidrating) | **POST** /learn/v1/courses/{id}/rating | Update course rating
[**courseLearnv1coursesidsessions**](CourseApi.md#courseLearnv1coursesidsessions) | **GET** /learn/v1/courses/{id}/sessions | Get all session that the user is enrolled in or all available if not enrolled by id of course
[**courseLearnv1coursesidwidgets**](CourseApi.md#courseLearnv1coursesidwidgets) | **GET** /learn/v1/courses/{id}/widgets | Get all the widgets that have been set for the specific course
[**courseLearnv1coursesreport**](CourseApi.md#courseLearnv1coursesreport) | **GET** /learn/v1/courses/report | Get all learning objects by id of course
[**courseLearnv1coursessessionidSessiondateyyyyMmDd**](CourseApi.md#courseLearnv1coursessessionidSessiondateyyyyMmDd) | **GET** /learn/v1/courses/session/{id_session}/date/{yyyy-mm-dd} | Get training materials of session


# **courseLearnv1coursecommentsthreadthreadId**
> \Swagger\Client\Model\LearnCourseThreadResponse courseLearnv1coursecommentsthreadthreadId($id, $forum_id)

PUT | DELETE discussions (thread) - course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id = 56; // int | The id of the course
$forum_id = 56; // int | The id of the forum

try {
    $result = $api_instance->courseLearnv1coursecommentsthreadthreadId($id, $forum_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursecommentsthreadthreadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the course |
 **forum_id** | **int**| The id of the forum |

### Return type

[**\Swagger\Client\Model\LearnCourseThreadResponse**](../Model/LearnCourseThreadResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursecommentsthreadthreadIdmessage**
> \Swagger\Client\Model\LearnCourseMessageResponse courseLearnv1coursecommentsthreadthreadIdmessage($thread_id)

PUT REPLY discussions (thread) - course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$thread_id = 56; // int | The id of the thread course

try {
    $result = $api_instance->courseLearnv1coursecommentsthreadthreadIdmessage($thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursecommentsthreadthreadIdmessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **int**| The id of the thread course |

### Return type

[**\Swagger\Client\Model\LearnCourseMessageResponse**](../Model/LearnCourseMessageResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1courseimportCourses**
> \Swagger\Client\Model\LearnCourseImportCoursesResponse courseLearnv1courseimportCourses($body)

Batch import courses



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$body = new \Swagger\Client\Model\LearnCourseImportCoursesSchema(); // \Swagger\Client\Model\LearnCourseImportCoursesSchema | Raw Body

try {
    $result = $api_instance->courseLearnv1courseimportCourses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1courseimportCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCourseImportCoursesSchema**](../Model/\Swagger\Client\Model\LearnCourseImportCoursesSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseImportCoursesResponse**](../Model/LearnCourseImportCoursesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1courses**
> \Swagger\Client\Model\LearnCourseIndexResponse courseLearnv1courses($page, $page_size, $sort_by, $sort_by_direction, $get_total_count)

Returns all courses.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 20
$sort_by = "sort_by_example"; // string | Sorting the result by column name
$sort_by_direction = "sort_by_direction_example"; // string | Sorting direction - can be 'asc' or 'desc', if not provided of is different, the sort_by parameter will be ignored!
$get_total_count = true; // bool | 0 or 1

try {
    $result = $api_instance->courseLearnv1courses($page, $page_size, $sort_by, $sort_by_direction, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1courses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 20 | [optional]
 **sort_by** | **string**| Sorting the result by column name | [optional]
 **sort_by_direction** | **string**| Sorting direction - can be &#39;asc&#39; or &#39;desc&#39;, if not provided of is different, the sort_by parameter will be ignored! | [optional]
 **get_total_count** | **bool**| 0 or 1 | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseIndexResponse**](../Model/LearnCourseIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1courses_0**
> \Swagger\Client\Model\LearnCourseCreateResponse courseLearnv1courses_0($body)

Create a new Course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$body = new \Swagger\Client\Model\LearnCourseCreateSchema(); // \Swagger\Client\Model\LearnCourseCreateSchema | Raw Body

try {
    $result = $api_instance->courseLearnv1courses_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1courses_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCourseCreateSchema**](../Model/\Swagger\Client\Model\LearnCourseCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseCreateResponse**](../Model/LearnCourseCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1courseschart**
> \Swagger\Client\Model\LearnCourseChartResponse courseLearnv1courseschart($timeframe, $start_date, $end_date, $branch_ids, $id_course)

Get all learning objects by id of course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$timeframe = "timeframe_example"; // string | Timeframe type (this_week,this_month,custom) Default : this_year
$start_date = "start_date_example"; // string | Start date which should be used for the filtering
$end_date = "end_date_example"; // string | End date which should be used for the filtering
$branch_ids = array("branch_ids_example"); // string[] | Branches to filter the results by
$id_course = "id_course_example"; // string | Parameter for showing results for a single course

try {
    $result = $api_instance->courseLearnv1courseschart($timeframe, $start_date, $end_date, $branch_ids, $id_course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1courseschart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeframe** | **string**| Timeframe type (this_week,this_month,custom) Default : this_year | [optional]
 **start_date** | **string**| Start date which should be used for the filtering | [optional]
 **end_date** | **string**| End date which should be used for the filtering | [optional]
 **branch_ids** | [**string[]**](../Model/string.md)| Branches to filter the results by | [optional]
 **id_course** | **string**| Parameter for showing results for a single course | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseChartResponse**](../Model/LearnCourseChartResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescompactList**
> \Swagger\Client\Model\LearnCourseCompactListResponse courseLearnv1coursescompactList($course_ids, $enrolled_only, $user_id)

Return a more compact information about list of courses (filtering possible or just ALL courses), taking into account a given user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_ids = array("course_ids_example"); // string[] | Array of course IDs
$enrolled_only = 56; // int | If set to 1, return courses a given user is enrolled into
$user_id = 56; // int | User ID. Current user, if not specified

try {
    $result = $api_instance->courseLearnv1coursescompactList($course_ids, $enrolled_only, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescompactList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_ids** | [**string[]**](../Model/string.md)| Array of course IDs |
 **enrolled_only** | **int**| If set to 1, return courses a given user is enrolled into |
 **user_id** | **int**| User ID. Current user, if not specified |

### Return type

[**\Swagger\Client\Model\LearnCourseCompactListResponse**](../Model/LearnCourseCompactListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseId**
> \Swagger\Client\Model\LearnCourseViewResponse courseLearnv1coursescourseId($course_id)

View a Course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | ID of the course

try {
    $result = $api_instance->courseLearnv1coursescourseId($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| ID of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseViewResponse**](../Model/LearnCourseViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseIdbyCategory**
> \Swagger\Client\Model\LearnCourseByCategoryResponse courseLearnv1coursescourseIdbyCategory($course_id)

Returns all courses of the same category.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | ID of the course

try {
    $result = $api_instance->courseLearnv1coursescourseIdbyCategory($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseIdbyCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| ID of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseByCategoryResponse**](../Model/LearnCourseByCategoryResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseIddeeplink**
> \Swagger\Client\Model\LearnCourseDeeplinkResponse courseLearnv1coursescourseIddeeplink($course_id)

Deeplinking is enabled in the advanced settings of a course and it allows to share a course with anybody using a signed link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | ID of the course

try {
    $result = $api_instance->courseLearnv1coursescourseIddeeplink($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseIddeeplink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| ID of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseDeeplinkResponse**](../Model/LearnCourseDeeplinkResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseIdlos**
> \Swagger\Client\Model\LearnCourseLosResponse courseLearnv1coursescourseIdlos($course_id)

Get all learning objects by id of course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | The id of the course

try {
    $result = $api_instance->courseLearnv1coursescourseIdlos($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseIdlos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| The id of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseLosResponse**](../Model/LearnCourseLosResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseIdrating**
> \Swagger\Client\Model\LearnCourseRatingResponse courseLearnv1coursescourseIdrating($course_id)

View course rating



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | ID of the course

try {
    $result = $api_instance->courseLearnv1coursescourseIdrating($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseIdrating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| ID of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseRatingResponse**](../Model/LearnCourseRatingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd**
> \Swagger\Client\Model\LearnCourseSessionJoinResponse courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd($course_id, $id_session, $dd)

Joining or starting a webinar session's date



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$course_id = 56; // int | The id of the course
$id_session = 56; // int | The id of the webinar session
$dd = "dd_example"; // string | The date of the webinar session

try {
    $result = $api_instance->courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd($course_id, $id_session, $dd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursescourseIdsessionidSessiondateyyyyMmDd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **int**| The id of the course |
 **id_session** | **int**| The id of the webinar session |
 **dd** | **string**| The date of the webinar session |

### Return type

[**\Swagger\Client\Model\LearnCourseSessionJoinResponse**](../Model/LearnCourseSessionJoinResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesenrollmentPdf**
> \Swagger\Client\Model\LearnCourseEnrollmentPdfResponse courseLearnv1coursesenrollmentPdf()

Returns all courses.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();

try {
    $result = $api_instance->courseLearnv1coursesenrollmentPdf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesenrollmentPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LearnCourseEnrollmentPdfResponse**](../Model/LearnCourseEnrollmentPdfResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesid**
> \Swagger\Client\Model\LearnCourseUpdateResponse courseLearnv1coursesid($body)

Update specific Course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$body = new \Swagger\Client\Model\LearnCourseUpdateSchema(); // \Swagger\Client\Model\LearnCourseUpdateSchema | Raw Body

try {
    $result = $api_instance->courseLearnv1coursesid($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCourseUpdateSchema**](../Model/\Swagger\Client\Model\LearnCourseUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseUpdateResponse**](../Model/LearnCourseUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesid_0**
> \Swagger\Client\Model\LearnCourseDeleteResponse courseLearnv1coursesid_0($body)

Delete specific Learning course by given ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$body = new \Swagger\Client\Model\LearnCourseDeleteSchema(); // \Swagger\Client\Model\LearnCourseDeleteSchema | Raw Body

try {
    $result = $api_instance->courseLearnv1coursesid_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesid_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCourseDeleteSchema**](../Model/\Swagger\Client\Model\LearnCourseDeleteSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseDeleteResponse**](../Model/LearnCourseDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesidcomments**
> \Swagger\Client\Model\LearnCourseCommentsResponse courseLearnv1coursesidcomments($id, $forum_id)

Get discussions/posts of a course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id = 56; // int | The id of the course
$forum_id = 56; // int | The id of the forum

try {
    $result = $api_instance->courseLearnv1coursesidcomments($id, $forum_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesidcomments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the course |
 **forum_id** | **int**| The id of the forum |

### Return type

[**\Swagger\Client\Model\LearnCourseCommentsResponse**](../Model/LearnCourseCommentsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesidrating**
> \Swagger\Client\Model\LearnCourseUpdateRatingResponse courseLearnv1coursesidrating($id, $body)

Update course rating



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id = 56; // int | The ID of the course
$body = new \Swagger\Client\Model\LearnCourseUpdateRatingSchema(); // \Swagger\Client\Model\LearnCourseUpdateRatingSchema | Raw Body

try {
    $result = $api_instance->courseLearnv1coursesidrating($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesidrating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the course |
 **body** | [**\Swagger\Client\Model\LearnCourseUpdateRatingSchema**](../Model/\Swagger\Client\Model\LearnCourseUpdateRatingSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseUpdateRatingResponse**](../Model/LearnCourseUpdateRatingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesidsessions**
> \Swagger\Client\Model\LearnCourseSessionsResponse courseLearnv1coursesidsessions($id)

Get all session that the user is enrolled in or all available if not enrolled by id of course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id = 56; // int | The id of the course

try {
    $result = $api_instance->courseLearnv1coursesidsessions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesidsessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseSessionsResponse**](../Model/LearnCourseSessionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesidwidgets**
> \Swagger\Client\Model\LearnCourseWidgetsResponse courseLearnv1coursesidwidgets($id)

Get all the widgets that have been set for the specific course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id = 56; // int | The id of the course

try {
    $result = $api_instance->courseLearnv1coursesidwidgets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesidwidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the course |

### Return type

[**\Swagger\Client\Model\LearnCourseWidgetsResponse**](../Model/LearnCourseWidgetsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursesreport**
> \Swagger\Client\Model\LearnCourseReportResponse courseLearnv1coursesreport($timeframe, $start_date, $end_date, $branch_ids, $id_course, $export)

Get all learning objects by id of course



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$timeframe = "timeframe_example"; // string | Timeframe type (this_week,this_month,custom) Default : this_year
$start_date = "start_date_example"; // string | Start date which should be used for the filtering
$end_date = "end_date_example"; // string | End date which should be used for the filtering
$branch_ids = array("branch_ids_example"); // string[] | Branches to filter the results by
$id_course = "id_course_example"; // string | Parameter for showing results for a single course
$export = 56; // int | Export data to Excel. Options: 1 - true, 0 - false. Default: 0

try {
    $result = $api_instance->courseLearnv1coursesreport($timeframe, $start_date, $end_date, $branch_ids, $id_course, $export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursesreport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeframe** | **string**| Timeframe type (this_week,this_month,custom) Default : this_year | [optional]
 **start_date** | **string**| Start date which should be used for the filtering | [optional]
 **end_date** | **string**| End date which should be used for the filtering | [optional]
 **branch_ids** | [**string[]**](../Model/string.md)| Branches to filter the results by | [optional]
 **id_course** | **string**| Parameter for showing results for a single course | [optional]
 **export** | **int**| Export data to Excel. Options: 1 - true, 0 - false. Default: 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnCourseReportResponse**](../Model/LearnCourseReportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearnv1coursessessionidSessiondateyyyyMmDd**
> \Swagger\Client\Model\LearnCourseWebSessionMaterialsResponse courseLearnv1coursessessionidSessiondateyyyyMmDd($id_session, $date)

Get training materials of session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CourseApi();
$id_session = 56; // int | The id of the webinar session
$date = 56; // int | The date of the webinar session

try {
    $result = $api_instance->courseLearnv1coursessessionidSessiondateyyyyMmDd($id_session, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseLearnv1coursessessionidSessiondateyyyyMmDd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_session** | **int**| The id of the webinar session |
 **date** | **int**| The date of the webinar session |

### Return type

[**\Swagger\Client\Model\LearnCourseWebSessionMaterialsResponse**](../Model/LearnCourseWebSessionMaterialsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

