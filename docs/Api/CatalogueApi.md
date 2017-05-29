# Swagger\Client\CatalogueApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogueLearnv1catalog**](CatalogueApi.md#catalogueLearnv1catalog) | **GET** /learn/v1/catalog | Retrieves all catalogues, filtered on input parameters
[**catalogueLearnv1catalogassignmentsbatch**](CatalogueApi.md#catalogueLearnv1catalogassignmentsbatch) | **POST** /learn/v1/catalog/assignments/batch | Batch import catalogue visibility
[**catalogueLearnv1catalogbatch**](CatalogueApi.md#catalogueLearnv1catalogbatch) | **POST** /learn/v1/catalog/batch | Batch import catalogs
[**catalogueLearnv1catalogcalendar**](CatalogueApi.md#catalogueLearnv1catalogcalendar) | **GET** /learn/v1/catalog/calendar | Retrieves courses for Catalog calendar
[**catalogueLearnv1catalogcatalogId**](CatalogueApi.md#catalogueLearnv1catalogcatalogId) | **GET** /learn/v1/catalog/{catalog_id} | View of Catalog (or Generic one if provided ID is \&quot;0\&quot;)
[**catalogueLearnv1catalogfilters**](CatalogueApi.md#catalogueLearnv1catalogfilters) | **GET** /learn/v1/catalog/filters | Retrieves all filter options by catalog ID
[**catalogueLearnv1catalogitemsbatch**](CatalogueApi.md#catalogueLearnv1catalogitemsbatch) | **POST** /learn/v1/catalog/items/batch | Batch import catalogue items
[**catalogueLearnv1catalogwebpages**](CatalogueApi.md#catalogueLearnv1catalogwebpages) | **GET** /learn/v1/catalog/webpages | Retrieves webpages to be displayed as public catalog pages


# **catalogueLearnv1catalog**
> \Swagger\Client\Model\LearnCatalogueIndexResponse catalogueLearnv1catalog($catalogue_name, $catalogue_description, $code, $sort_attr, $sort_dir, $lang_code, $page, $page_size, $get_total_count, $show_item_list, $items_per_catalog, $type, $price, $search_text, $my_catalogs)

Retrieves all catalogues, filtered on input parameters

All filter parameters are optional. If both catalogue_name and catalogue_description are searched, then an OR operation is performed. If other filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$catalogue_name = array("catalogue_name_example"); // string[] | Search text in the catalogue name. Default empty array. OR is performed across array items
$catalogue_description = array("catalogue_description_example"); // string[] | Search text in the catalogue description. Default empty array. OR is performed across array items
$code = "code_example"; // string | Filter returned catalogues by code
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, catalogue_name, catalogue_description
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$lang_code = array("lang_code_example"); // string[] | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$show_item_list = 56; // int | Options: 0 - not show the items list, 1 - show the items list. Default - 0
$items_per_catalog = 56; // int | Number of items to show for each catalog. Default - all
$type = array("type_example"); // string[] | Type (&quot;classroom&quot;, &quot;elearning&quot;, &quot;mobile&quot;, &quot;webinar&quot;, &quot;learning_plan&quot;).Default - all
$price = array(56); // int[] | Price (1 - Free, 2 - Paid). Default - all
$search_text = "search_text_example"; // string | Search text in the course/plan name.
$my_catalogs = 56; // int | Catalogs list type. If = 1 - show catalogs where the user is assigned. If = 0 or null - show catalogs which the user can administrate.

try {
    $result = $api_instance->catalogueLearnv1catalog($catalogue_name, $catalogue_description, $code, $sort_attr, $sort_dir, $lang_code, $page, $page_size, $get_total_count, $show_item_list, $items_per_catalog, $type, $price, $search_text, $my_catalogs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalogue_name** | [**string[]**](../Model/string.md)| Search text in the catalogue name. Default empty array. OR is performed across array items | [optional]
 **catalogue_description** | [**string[]**](../Model/string.md)| Search text in the catalogue description. Default empty array. OR is performed across array items | [optional]
 **code** | **string**| Filter returned catalogues by code | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, catalogue_name, catalogue_description | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **lang_code** | [**string[]**](../Model/string.md)| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **show_item_list** | **int**| Options: 0 - not show the items list, 1 - show the items list. Default - 0 | [optional]
 **items_per_catalog** | **int**| Number of items to show for each catalog. Default - all | [optional]
 **type** | [**string[]**](../Model/string.md)| Type (&amp;quot;classroom&amp;quot;, &amp;quot;elearning&amp;quot;, &amp;quot;mobile&amp;quot;, &amp;quot;webinar&amp;quot;, &amp;quot;learning_plan&amp;quot;).Default - all | [optional]
 **price** | [**int[]**](../Model/int.md)| Price (1 - Free, 2 - Paid). Default - all | [optional]
 **search_text** | **string**| Search text in the course/plan name. | [optional]
 **my_catalogs** | **int**| Catalogs list type. If &#x3D; 1 - show catalogs where the user is assigned. If &#x3D; 0 or null - show catalogs which the user can administrate. | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueIndexResponse**](../Model/LearnCatalogueIndexResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogassignmentsbatch**
> \Swagger\Client\Model\LearnCatalogueBatchVisibilityResponse catalogueLearnv1catalogassignmentsbatch($body)

Batch import catalogue visibility



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$body = new \Swagger\Client\Model\LearnCatalogueBatchVisibilitySchema(); // \Swagger\Client\Model\LearnCatalogueBatchVisibilitySchema | Raw Body

try {
    $result = $api_instance->catalogueLearnv1catalogassignmentsbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogassignmentsbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCatalogueBatchVisibilitySchema**](../Model/\Swagger\Client\Model\LearnCatalogueBatchVisibilitySchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueBatchVisibilityResponse**](../Model/LearnCatalogueBatchVisibilityResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogbatch**
> \Swagger\Client\Model\LearnCatalogueBatchImportResponse catalogueLearnv1catalogbatch($body)

Batch import catalogs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$body = new \Swagger\Client\Model\LearnCatalogueBatchImportSchema(); // \Swagger\Client\Model\LearnCatalogueBatchImportSchema | Raw Body

try {
    $result = $api_instance->catalogueLearnv1catalogbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCatalogueBatchImportSchema**](../Model/\Swagger\Client\Model\LearnCatalogueBatchImportSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueBatchImportResponse**](../Model/LearnCatalogueBatchImportResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogcalendar**
> \Swagger\Client\Model\LearnCatalogueCalendarResponse catalogueLearnv1catalogcalendar($start_date, $end_date, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count)

Retrieves courses for Catalog calendar

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$start_date = "start_date_example"; // string | Filter by start date. Expected format of date is &quot;2015-06-25 03:30:00&quot;
$end_date = "end_date_example"; // string | Filter by end_date. Expected format of date is &quot;2015-06-25 03:30:00&quot;
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - course_id. Options: course_id, course_type, course_code, course_name, course_category, session_id, session_name, date_start, date_end, can_enroll
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->catalogueLearnv1catalogcalendar($start_date, $end_date, $sort_attr, $sort_dir, $lang, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogcalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Filter by start date. Expected format of date is &amp;quot;2015-06-25 03:30:00&amp;quot; | [optional]
 **end_date** | **string**| Filter by end_date. Expected format of date is &amp;quot;2015-06-25 03:30:00&amp;quot; | [optional]
 **sort_attr** | **string**| Sort by this field, default value - course_id. Options: course_id, course_type, course_code, course_name, course_category, session_id, session_name, date_start, date_end, can_enroll | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueCalendarResponse**](../Model/LearnCatalogueCalendarResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogcatalogId**
> \Swagger\Client\Model\LearnCatalogueViewResponse catalogueLearnv1catalogcatalogId($catalog_id, $type, $price, $lang_code, $category_id, $search_text)

View of Catalog (or Generic one if provided ID is \"0\")



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$catalog_id = 56; // int | ID of the catalog
$type = array("type_example"); // string[] | Filtering by Type (&quot;classroom&quot;, &quot;elearning&quot;, &quot;mobile&quot;, &quot;webinar&quot;, &quot;learning_plan&quot;)
$price = array(56); // int[] | Filtering by Price (1 - Free, 2 - Paid)
$lang_code = array("lang_code_example"); // string[] | Filtering by Language
$category_id = 56; // int | Filtering by Category ID
$search_text = "search_text_example"; // string | Search text in the course/plan name.

try {
    $result = $api_instance->catalogueLearnv1catalogcatalogId($catalog_id, $type, $price, $lang_code, $category_id, $search_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogcatalogId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **int**| ID of the catalog |
 **type** | [**string[]**](../Model/string.md)| Filtering by Type (&amp;quot;classroom&amp;quot;, &amp;quot;elearning&amp;quot;, &amp;quot;mobile&amp;quot;, &amp;quot;webinar&amp;quot;, &amp;quot;learning_plan&amp;quot;) | [optional]
 **price** | [**int[]**](../Model/int.md)| Filtering by Price (1 - Free, 2 - Paid) | [optional]
 **lang_code** | [**string[]**](../Model/string.md)| Filtering by Language | [optional]
 **category_id** | **int**| Filtering by Category ID | [optional]
 **search_text** | **string**| Search text in the course/plan name. | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueViewResponse**](../Model/LearnCatalogueViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogfilters**
> \Swagger\Client\Model\LearnCatalogueFiltersResponse catalogueLearnv1catalogfilters($catalog_id)

Retrieves all filter options by catalog ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$catalog_id = 56; // int | Id of the given catalog. Value 0 or empty value returns categories from generic catalog

try {
    $result = $api_instance->catalogueLearnv1catalogfilters($catalog_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogfilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **catalog_id** | **int**| Id of the given catalog. Value 0 or empty value returns categories from generic catalog | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueFiltersResponse**](../Model/LearnCatalogueFiltersResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogitemsbatch**
> \Swagger\Client\Model\LearnCatalogueBatchItemsResponse catalogueLearnv1catalogitemsbatch($body)

Batch import catalogue items



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();
$body = new \Swagger\Client\Model\LearnCatalogueBatchItemsSchema(); // \Swagger\Client\Model\LearnCatalogueBatchItemsSchema | Raw Body

try {
    $result = $api_instance->catalogueLearnv1catalogitemsbatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogitemsbatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LearnCatalogueBatchItemsSchema**](../Model/\Swagger\Client\Model\LearnCatalogueBatchItemsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\LearnCatalogueBatchItemsResponse**](../Model/LearnCatalogueBatchItemsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogueLearnv1catalogwebpages**
> \Swagger\Client\Model\LearnCatalogueWebpagesResponse catalogueLearnv1catalogwebpages()

Retrieves webpages to be displayed as public catalog pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CatalogueApi();

try {
    $result = $api_instance->catalogueLearnv1catalogwebpages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogueApi->catalogueLearnv1catalogwebpages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LearnCatalogueWebpagesResponse**](../Model/LearnCatalogueWebpagesResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

