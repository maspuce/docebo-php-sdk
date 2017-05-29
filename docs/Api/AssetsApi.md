# Swagger\Client\AssetsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetsSharev1assets**](AssetsApi.md#assetsSharev1assets) | **GET** /share/v1/assets | Retrieves all assets for user, filtered on input parameters
[**assetsSharev1assets_0**](AssetsApi.md#assetsSharev1assets_0) | **POST** /share/v1/assets | Creates a new asset
[**assetsSharev1assetsassetIdrating**](AssetsApi.md#assetsSharev1assetsassetIdrating) | **GET** /share/v1/assets/{asset_id}/rating | View Asset Rating
[**assetsSharev1assetsassetIdrating_0**](AssetsApi.md#assetsSharev1assetsassetIdrating_0) | **PUT** /share/v1/assets/{asset_id}/rating | Update Asset Rating
[**assetsSharev1assetsidAsset**](AssetsApi.md#assetsSharev1assetsidAsset) | **GET** /share/v1/assets/{id_asset} | Asset View
[**assetsSharev1assetsidAsset_0**](AssetsApi.md#assetsSharev1assetsidAsset_0) | **PUT** /share/v1/assets/{id_asset} | Update asset
[**assetsSharev1assetsidAsset_1**](AssetsApi.md#assetsSharev1assetsidAsset_1) | **DELETE** /share/v1/assets/{id_asset} | Delete asset
[**assetsSharev1assetsidAssetchannels**](AssetsApi.md#assetsSharev1assetsidAssetchannels) | **GET** /share/v1/assets/{id_asset}/channels | View Asset assigned Channels
[**assetsSharev1assetsidAssetchannels_0**](AssetsApi.md#assetsSharev1assetsidAssetchannels_0) | **PUT** /share/v1/assets/{id_asset}/channels | Assign channels to asset
[**assetsSharev1assetsidAssetcomments**](AssetsApi.md#assetsSharev1assetsidAssetcomments) | **GET** /share/v1/assets/{id_asset}/comments | View Asset Comments
[**assetsSharev1assetsidAssetdetails**](AssetsApi.md#assetsSharev1assetsidAssetdetails) | **GET** /share/v1/assets/{id_asset}/details | Asset Details
[**assetsSharev1assetsidAssetplayer**](AssetsApi.md#assetsSharev1assetsidAssetplayer) | **GET** /share/v1/assets/{id_asset}/player | Retrieves config for the player
[**assetsSharev1assetsidAssetplaylists**](AssetsApi.md#assetsSharev1assetsidAssetplaylists) | **PUT** /share/v1/assets/{id_asset}/playlists | Assign playlists to asset
[**assetsSharev1assetsidAssetquestions**](AssetsApi.md#assetsSharev1assetsidAssetquestions) | **GET** /share/v1/assets/{id_asset}/questions | View Asset Questions
[**assetsSharev1assetsidAssetspendTime**](AssetsApi.md#assetsSharev1assetsidAssetspendTime) | **GET** /share/v1/assets/{id_asset}/spend_time | View spent time for specific asset
[**assetsSharev1assetsidAssetspendTime_0**](AssetsApi.md#assetsSharev1assetsidAssetspendTime_0) | **PUT** /share/v1/assets/{id_asset}/spend_time | Spent time over the asset
[**assetsSharev1assetsidAssettags**](AssetsApi.md#assetsSharev1assetsidAssettags) | **GET** /share/v1/assets/{id_asset}/tags | View Asset assigned tags
[**assetsSharev1assetsidAssettags_0**](AssetsApi.md#assetsSharev1assetsidAssettags_0) | **PUT** /share/v1/assets/{id_asset}/tags | Assign tags to asset
[**assetsSharev1assetsidAssettooltips**](AssetsApi.md#assetsSharev1assetsidAssettooltips) | **GET** /share/v1/assets/{id_asset}/tooltips | View Asset assigned tooltips
[**assetsSharev1assetsidAssettrack**](AssetsApi.md#assetsSharev1assetsidAssettrack) | **PUT** /share/v1/assets/{id_asset}/track | Track asset as viewed
[**assetsSharev1assetsidAssetuploadfinish**](AssetsApi.md#assetsSharev1assetsidAssetuploadfinish) | **PUT** /share/v1/assets/{id_asset}/upload/finish | Finish Upload Asset
[**assetsSharev1assetsidAssetuploadsns**](AssetsApi.md#assetsSharev1assetsidAssetuploadsns) | **PUT** /share/v1/assets/{id_asset}/upload/sns | Upload SNS Asset
[**assetsSharev1assetsidAssetuploadstart**](AssetsApi.md#assetsSharev1assetsidAssetuploadstart) | **PUT** /share/v1/assets/{id_asset}/upload/start | Start Upload Asset
[**assetsSharev1assetsupload**](AssetsApi.md#assetsSharev1assetsupload) | **POST** /share/v1/assets/upload | Upload asset
[**assetsSkillv1assetsassetIdprograms**](AssetsApi.md#assetsSkillv1assetsassetIdprograms) | **POST** /skill/v1/assets/{asset_id}/programs | Assigns a Coach&amp;Share Asset to a Program
[**assetsSkillv1assetsassetIdprograms_0**](AssetsApi.md#assetsSkillv1assetsassetIdprograms_0) | **DELETE** /skill/v1/assets/{asset_id}/programs | Unassigns an Asset from a Program
[**assetsSkillv1assetsassetIdskills**](AssetsApi.md#assetsSkillv1assetsassetIdskills) | **GET** /skill/v1/assets/{asset_id}/skills | Retrieves the list of Skills, that are assigned to a Coach&amp;Share Asset
[**assetsSkillv1assetsassetIdskills_0**](AssetsApi.md#assetsSkillv1assetsassetIdskills_0) | **POST** /skill/v1/assets/{asset_id}/skills | Assigns Skill(s) to a Coach&amp;Share Asset
[**assetsSkillv1assetsassetIdskills_1**](AssetsApi.md#assetsSkillv1assetsassetIdskills_1) | **DELETE** /skill/v1/assets/{asset_id}/skills | Unassigns an existing skill(s) from a Coach&amp;Share asset


# **assetsSharev1assets**
> \Swagger\Client\Model\ShareAssetsListResponse assetsSharev1assets($search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $ignore_private, $exclude_predefined)

Retrieves all assets for user, filtered on input parameters

All filter parameters are optional. If filter parameters are provided, then operation &quot;AND&quot; is performed across the parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$search_text = "search_text_example"; // string | Search text in the asset title and description. Default empty string
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, title, date
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$ignore_private = 56; // int | Filter returned assets by is_private. Options 1 - ignore private, 0 - include private. Default: 1
$exclude_predefined = 56; // int | Filter returned assets by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0

try {
    $result = $api_instance->assetsSharev1assets($search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $ignore_private, $exclude_predefined);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_text** | **string**| Search text in the asset title and description. Default empty string | [optional]
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, title, date | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **ignore_private** | **int**| Filter returned assets by is_private. Options 1 - ignore private, 0 - include private. Default: 1 | [optional]
 **exclude_predefined** | **int**| Filter returned assets by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsListResponse**](../Model/ShareAssetsListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assets_0**
> \Swagger\Client\Model\ShareAssetsCreateResponse assetsSharev1assets_0($body)

Creates a new asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$body = new \Swagger\Client\Model\ShareAssetsCreateSchema(); // \Swagger\Client\Model\ShareAssetsCreateSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assets_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assets_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShareAssetsCreateSchema**](../Model/\Swagger\Client\Model\ShareAssetsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsCreateResponse**](../Model/ShareAssetsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsassetIdrating**
> \Swagger\Client\Model\ShareAssetsViewRatingL2Response assetsSharev1assetsassetIdrating($asset_id)

View Asset Rating



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | Required ID of asset to fetch

try {
    $result = $api_instance->assetsSharev1assetsassetIdrating($asset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsassetIdrating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| Required ID of asset to fetch |

### Return type

[**\Swagger\Client\Model\ShareAssetsViewRatingL2Response**](../Model/ShareAssetsViewRatingL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsassetIdrating_0**
> \Swagger\Client\Model\ShareAssetsUpdateRatingResponse assetsSharev1assetsassetIdrating_0($asset_id, $body)

Update Asset Rating



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | Required ID of asset to fetch
$body = new \Swagger\Client\Model\ShareAssetsUpdateRatingSchema(); // \Swagger\Client\Model\ShareAssetsUpdateRatingSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsassetIdrating_0($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsassetIdrating_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| Required ID of asset to fetch |
 **body** | [**\Swagger\Client\Model\ShareAssetsUpdateRatingSchema**](../Model/\Swagger\Client\Model\ShareAssetsUpdateRatingSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsUpdateRatingResponse**](../Model/ShareAssetsUpdateRatingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAsset**
> \Swagger\Client\Model\ShareAssetsViewResponse assetsSharev1assetsidAsset($id_asset, $id_playlist)

Asset View



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset ID
$id_playlist = 56; // int | ID of the playlist for getting details of it. NOTE: asset must be assigned to this playlist

try {
    $result = $api_instance->assetsSharev1assetsidAsset($id_asset, $id_playlist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset ID |
 **id_playlist** | **int**| ID of the playlist for getting details of it. NOTE: asset must be assigned to this playlist | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewResponse**](../Model/ShareAssetsViewResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAsset_0**
> \Swagger\Client\Model\ShareAssetsUpdateResponse assetsSharev1assetsidAsset_0($id_asset, $body)

Update asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset
$body = new \Swagger\Client\Model\ShareAssetsUpdateSchema(); // \Swagger\Client\Model\ShareAssetsUpdateSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAsset_0($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAsset_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **body** | [**\Swagger\Client\Model\ShareAssetsUpdateSchema**](../Model/\Swagger\Client\Model\ShareAssetsUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsUpdateResponse**](../Model/ShareAssetsUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAsset_1**
> \Swagger\Client\Model\ShareAssetsDeleteResponse assetsSharev1assetsidAsset_1($id_asset)

Delete asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset id

try {
    $result = $api_instance->assetsSharev1assetsidAsset_1($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAsset_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset id |

### Return type

[**\Swagger\Client\Model\ShareAssetsDeleteResponse**](../Model/ShareAssetsDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetchannels**
> \Swagger\Client\Model\ShareAssetsViewChannelsL2Response assetsSharev1assetsidAssetchannels($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

View Asset assigned Channels

All filter parameters are optional. If filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, code, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSharev1assetsidAssetchannels($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetchannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, code, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewChannelsL2Response**](../Model/ShareAssetsViewChannelsL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetchannels_0**
> \Swagger\Client\Model\ShareAssetsAssignChannelsResponse assetsSharev1assetsidAssetchannels_0($id_asset, $body)

Assign channels to asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of asset to fetch
$body = new \Swagger\Client\Model\ShareAssetsAssignChannelsSchema(); // \Swagger\Client\Model\ShareAssetsAssignChannelsSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAssetchannels_0($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetchannels_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of asset to fetch |
 **body** | [**\Swagger\Client\Model\ShareAssetsAssignChannelsSchema**](../Model/\Swagger\Client\Model\ShareAssetsAssignChannelsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsAssignChannelsResponse**](../Model/ShareAssetsAssignChannelsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetcomments**
> \Swagger\Client\Model\ShareAssetsViewCommentsResponse assetsSharev1assetsidAssetcomments($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

View Asset Comments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Required ID of asset to fetch
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: title, date, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSharev1assetsidAssetcomments($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetcomments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Required ID of asset to fetch |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: title, date, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewCommentsResponse**](../Model/ShareAssetsViewCommentsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetdetails**
> \Swagger\Client\Model\ShareAssetsAssetDetailsResponse assetsSharev1assetsidAssetdetails($id_asset)

Asset Details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset id/details

try {
    $result = $api_instance->assetsSharev1assetsidAssetdetails($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetdetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset id/details |

### Return type

[**\Swagger\Client\Model\ShareAssetsAssetDetailsResponse**](../Model/ShareAssetsAssetDetailsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetplayer**
> \Swagger\Client\Model\ShareAssetsPlayerConfigResponse assetsSharev1assetsidAssetplayer($id_asset)

Retrieves config for the player



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset ID

try {
    $result = $api_instance->assetsSharev1assetsidAssetplayer($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetplayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset ID |

### Return type

[**\Swagger\Client\Model\ShareAssetsPlayerConfigResponse**](../Model/ShareAssetsPlayerConfigResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetplaylists**
> \Swagger\Client\Model\ShareAssetsAssignPlaylistsResponse assetsSharev1assetsidAssetplaylists($id_asset, $body)

Assign playlists to asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset id
$body = new \Swagger\Client\Model\ShareAssetsAssignPlaylistsSchema(); // \Swagger\Client\Model\ShareAssetsAssignPlaylistsSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAssetplaylists($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetplaylists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset id |
 **body** | [**\Swagger\Client\Model\ShareAssetsAssignPlaylistsSchema**](../Model/\Swagger\Client\Model\ShareAssetsAssignPlaylistsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsAssignPlaylistsResponse**](../Model/ShareAssetsAssignPlaylistsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetquestions**
> \Swagger\Client\Model\ShareAssetsViewQuestionsResponse assetsSharev1assetsidAssetquestions($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

View Asset Questions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Required ID of asset to fetch
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: title, date, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSharev1assetsidAssetquestions($id_asset, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetquestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Required ID of asset to fetch |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: title, date, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewQuestionsResponse**](../Model/ShareAssetsViewQuestionsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetspendTime**
> \Swagger\Client\Model\ShareAssetsViewSpentTimeL2Response assetsSharev1assetsidAssetspendTime($id_asset, $time, $id_user)

View spent time for specific asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset id
$time = 56; // int | Time in seconds - specifies the spent time in an asset
$id_user = 56; // int | ID of the user

try {
    $result = $api_instance->assetsSharev1assetsidAssetspendTime($id_asset, $time, $id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetspendTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset id |
 **time** | **int**| Time in seconds - specifies the spent time in an asset |
 **id_user** | **int**| ID of the user |

### Return type

[**\Swagger\Client\Model\ShareAssetsViewSpentTimeL2Response**](../Model/ShareAssetsViewSpentTimeL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetspendTime_0**
> \Swagger\Client\Model\ShareAssetsSpentTimeResponse assetsSharev1assetsidAssetspendTime_0($id_asset, $body)

Spent time over the asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Asset id
$body = new \Swagger\Client\Model\ShareAssetsSpentTimeSchema(); // \Swagger\Client\Model\ShareAssetsSpentTimeSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAssetspendTime_0($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetspendTime_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Asset id |
 **body** | [**\Swagger\Client\Model\ShareAssetsSpentTimeSchema**](../Model/\Swagger\Client\Model\ShareAssetsSpentTimeSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsSpentTimeResponse**](../Model/ShareAssetsSpentTimeResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssettags**
> \Swagger\Client\Model\ShareAssetsViewTagsL2Response assetsSharev1assetsidAssettags($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

View Asset assigned tags

All filter parameters are optional. If filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, name
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSharev1assetsidAssettags($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssettags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: id, name | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewTagsL2Response**](../Model/ShareAssetsViewTagsL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssettags_0**
> \Swagger\Client\Model\ShareAssetsAssignTagsResponse assetsSharev1assetsidAssettags_0($id_asset, $body)

Assign tags to asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of asset to fetch
$body = new \Swagger\Client\Model\ShareAssetsAssignTagsSchema(); // \Swagger\Client\Model\ShareAssetsAssignTagsSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAssettags_0($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssettags_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of asset to fetch |
 **body** | [**\Swagger\Client\Model\ShareAssetsAssignTagsSchema**](../Model/\Swagger\Client\Model\ShareAssetsAssignTagsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsAssignTagsResponse**](../Model/ShareAssetsAssignTagsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssettooltips**
> \Swagger\Client\Model\ShareAssetsViewTooltipsL2Response assetsSharev1assetsidAssettooltips($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count)

View Asset assigned tooltips

All filter parameters are optional. If filter parameters are provided, then an &quot;AND&quot; is performed across the other parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: name, code, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200, if value is -1 -&gt; all items are displayed
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSharev1assetsidAssettooltips($id_asset, $sort_attr, $sort_dir, $page, $page_size, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssettooltips: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **sort_attr** | **string**| Sort by this field, default value - id. Options: name, code, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200, if value is -1 -&amp;gt; all items are displayed | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsViewTooltipsL2Response**](../Model/ShareAssetsViewTooltipsL2Response.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssettrack**
> \Swagger\Client\Model\ShareAssetsUpdateTrackingResponse assetsSharev1assetsidAssettrack($id_asset)

Track asset as viewed



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | Required ID of asset to fetch

try {
    $result = $api_instance->assetsSharev1assetsidAssettrack($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssettrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| Required ID of asset to fetch |

### Return type

[**\Swagger\Client\Model\ShareAssetsUpdateTrackingResponse**](../Model/ShareAssetsUpdateTrackingResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetuploadfinish**
> \Swagger\Client\Model\ShareAssetsFinishUploadResponse assetsSharev1assetsidAssetuploadfinish($id_asset)

Finish Upload Asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset

try {
    $result = $api_instance->assetsSharev1assetsidAssetuploadfinish($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetuploadfinish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |

### Return type

[**\Swagger\Client\Model\ShareAssetsFinishUploadResponse**](../Model/ShareAssetsFinishUploadResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetuploadsns**
> \Swagger\Client\Model\ShareAssetsUploadSnsResponse assetsSharev1assetsidAssetuploadsns($id_asset, $body)

Upload SNS Asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset
$body = new \Swagger\Client\Model\ShareAssetsUploadSnsSchema(); // \Swagger\Client\Model\ShareAssetsUploadSnsSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsidAssetuploadsns($id_asset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetuploadsns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |
 **body** | [**\Swagger\Client\Model\ShareAssetsUploadSnsSchema**](../Model/\Swagger\Client\Model\ShareAssetsUploadSnsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsUploadSnsResponse**](../Model/ShareAssetsUploadSnsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsidAssetuploadstart**
> \Swagger\Client\Model\ShareAssetsStartUploadResponse assetsSharev1assetsidAssetuploadstart($id_asset)

Start Upload Asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$id_asset = 56; // int | ID of the asset

try {
    $result = $api_instance->assetsSharev1assetsidAssetuploadstart($id_asset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsidAssetuploadstart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_asset** | **int**| ID of the asset |

### Return type

[**\Swagger\Client\Model\ShareAssetsStartUploadResponse**](../Model/ShareAssetsStartUploadResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSharev1assetsupload**
> \Swagger\Client\Model\ShareAssetsUploadResponse assetsSharev1assetsupload($body)

Upload asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$body = new \Swagger\Client\Model\ShareAssetsUploadSchema(); // \Swagger\Client\Model\ShareAssetsUploadSchema | Raw Body

try {
    $result = $api_instance->assetsSharev1assetsupload($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSharev1assetsupload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShareAssetsUploadSchema**](../Model/\Swagger\Client\Model\ShareAssetsUploadSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\ShareAssetsUploadResponse**](../Model/ShareAssetsUploadResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSkillv1assetsassetIdprograms**
> \Swagger\Client\Model\SkillAssetsAssignProgramsResponse assetsSkillv1assetsassetIdprograms($asset_id, $body)

Assigns a Coach&Share Asset to a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | asset id
$body = new \Swagger\Client\Model\SkillAssetsAssignProgramsSchema(); // \Swagger\Client\Model\SkillAssetsAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->assetsSkillv1assetsassetIdprograms($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSkillv1assetsassetIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| asset id |
 **body** | [**\Swagger\Client\Model\SkillAssetsAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillAssetsAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAssetsAssignProgramsResponse**](../Model/SkillAssetsAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSkillv1assetsassetIdprograms_0**
> \Swagger\Client\Model\SkillAssetsUnassignProgramsResponse assetsSkillv1assetsassetIdprograms_0($asset_id, $body)

Unassigns an Asset from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | asset id
$body = new \Swagger\Client\Model\SkillAssetsUnassignProgramsSchema(); // \Swagger\Client\Model\SkillAssetsUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->assetsSkillv1assetsassetIdprograms_0($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSkillv1assetsassetIdprograms_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| asset id |
 **body** | [**\Swagger\Client\Model\SkillAssetsUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillAssetsUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAssetsUnassignProgramsResponse**](../Model/SkillAssetsUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSkillv1assetsassetIdskills**
> \Swagger\Client\Model\SkillAssetsListSkillsResponse assetsSkillv1assetsassetIdskills($asset_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills, that are assigned to a Coach&Share Asset

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | Asset id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->assetsSkillv1assetsassetIdskills($asset_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSkillv1assetsassetIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| Asset id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillAssetsListSkillsResponse**](../Model/SkillAssetsListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSkillv1assetsassetIdskills_0**
> \Swagger\Client\Model\SkillAssetsCreateResponse assetsSkillv1assetsassetIdskills_0($asset_id, $body)

Assigns Skill(s) to a Coach&Share Asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | Asset id
$body = new \Swagger\Client\Model\SkillAssetsCreateSchema(); // \Swagger\Client\Model\SkillAssetsCreateSchema | Raw Body

try {
    $result = $api_instance->assetsSkillv1assetsassetIdskills_0($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSkillv1assetsassetIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| Asset id |
 **body** | [**\Swagger\Client\Model\SkillAssetsCreateSchema**](../Model/\Swagger\Client\Model\SkillAssetsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAssetsCreateResponse**](../Model/SkillAssetsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsSkillv1assetsassetIdskills_1**
> \Swagger\Client\Model\SkillAssetsDeleteSkillsResponse assetsSkillv1assetsassetIdskills_1($asset_id, $body)

Unassigns an existing skill(s) from a Coach&Share asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\AssetsApi();
$asset_id = 56; // int | ID of an asset to delete
$body = new \Swagger\Client\Model\SkillAssetsDeleteSkillsSchema(); // \Swagger\Client\Model\SkillAssetsDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->assetsSkillv1assetsassetIdskills_1($asset_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->assetsSkillv1assetsassetIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **int**| ID of an asset to delete |
 **body** | [**\Swagger\Client\Model\SkillAssetsDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillAssetsDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillAssetsDeleteSkillsResponse**](../Model/SkillAssetsDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

