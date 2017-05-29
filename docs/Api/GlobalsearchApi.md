# Swagger\Client\GlobalsearchApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**globalsearchManagev1globalsearchsearch**](GlobalsearchApi.md#globalsearchManagev1globalsearchsearch) | **GET** /manage/v1/globalsearch/search | Elastic Search


# **globalsearchManagev1globalsearchsearch**
> \Swagger\Client\Model\ManageGlobalsearchSearchResponse globalsearchManagev1globalsearchsearch($criteria, $page_size, $type, $from, $search_type)

Elastic Search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\GlobalsearchApi();
$criteria = "criteria_example"; // string | Text to search
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are returned
$type = "type_example"; // string | What type of assets are searched | EsAgentKnowledgeAsset | EsAgentCourse | EsAgentLo | EsAgentPlan | EsAgentQandA | all
$from = 56; // int | like pagination from which item to display
$search_type = "search_type_example"; // string | Type of the search | suggestions | results

try {
    $result = $api_instance->globalsearchManagev1globalsearchsearch($criteria, $page_size, $type, $from, $search_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalsearchApi->globalsearchManagev1globalsearchsearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | **string**| Text to search | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are returned | [optional]
 **type** | **string**| What type of assets are searched | EsAgentKnowledgeAsset | EsAgentCourse | EsAgentLo | EsAgentPlan | EsAgentQandA | all | [optional]
 **from** | **int**| like pagination from which item to display | [optional]
 **search_type** | **string**| Type of the search | suggestions | results | [optional]

### Return type

[**\Swagger\Client\Model\ManageGlobalsearchSearchResponse**](../Model/ManageGlobalsearchSearchResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

