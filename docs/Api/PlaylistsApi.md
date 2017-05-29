# Swagger\Client\PlaylistsApi

All URIs are relative to *https://false*

Method | HTTP request | Description
------------- | ------------- | -------------
[**playlistsSharev1assetsidPlaylistasset**](PlaylistsApi.md#playlistsSharev1assetsidPlaylistasset) | **PUT** /share/v1/assets/{id_playlist}/asset | Assign asset to playlist
[**playlistsSharev1assetsidPlaylistasset_0**](PlaylistsApi.md#playlistsSharev1assetsidPlaylistasset_0) | **DELETE** /share/v1/assets/{id_playlist}/asset | Remove asset from playlist
[**playlistsSharev1playlists**](PlaylistsApi.md#playlistsSharev1playlists) | **GET** /share/v1/playlists | Retrieves all playlists for user, filtered on input parameters
[**playlistsSharev1playlists_0**](PlaylistsApi.md#playlistsSharev1playlists_0) | **POST** /share/v1/playlists | Creates a new playlist
[**playlistsSharev1playlistsidPlaylist**](PlaylistsApi.md#playlistsSharev1playlistsidPlaylist) | **PUT** /share/v1/playlists/{id_playlist} | Update playlist
[**playlistsSharev1playlistsidPlaylist_0**](PlaylistsApi.md#playlistsSharev1playlistsidPlaylist_0) | **DELETE** /share/v1/playlists/{id_playlist} | Deletes one playlist
[**playlistsSharev1playlistsidPlaylistassets**](PlaylistsApi.md#playlistsSharev1playlistsidPlaylistassets) | **GET** /share/v1/playlists/{id_playlist}/assets | Retrieves all assets for playlist
[**playlistsSharev1playlistsidPlaylistorder**](PlaylistsApi.md#playlistsSharev1playlistsidPlaylistorder) | **PUT** /share/v1/playlists/{id_playlist}/order | Order assets in playlist
[**playlistsSkillv1playlistsplaylistIdprograms**](PlaylistsApi.md#playlistsSkillv1playlistsplaylistIdprograms) | **POST** /skill/v1/playlists/{playlist_id]}/programs | Assign programs to a playlist.
[**playlistsSkillv1playlistsplaylistIdprograms_0**](PlaylistsApi.md#playlistsSkillv1playlistsplaylistIdprograms_0) | **DELETE** /skill/v1/playlists/{playlist_id}/programs | Unassigns an playlist from a Program
[**playlistsSkillv1playlistsplaylistIdskills**](PlaylistsApi.md#playlistsSkillv1playlistsplaylistIdskills) | **GET** /skill/v1/playlists/{playlist_id}/skills | Retrieves the list of Skills, that are assigned to given playlist
[**playlistsSkillv1playlistsplaylistIdskills_0**](PlaylistsApi.md#playlistsSkillv1playlistsplaylistIdskills_0) | **POST** /skill/v1/playlists/{playlist_id}/skills | Assign skill to a Playlist.
[**playlistsSkillv1playlistsplaylistIdskills_1**](PlaylistsApi.md#playlistsSkillv1playlistsplaylistIdskills_1) | **DELETE** /skill/v1/playlists/{playlist_id}/skills | De-assigns an existing skill(s) from given playlist


# **playlistsSharev1assetsidPlaylistasset**
> \Swagger\Client\Model\SharePlaylistsAssignAssetResponse playlistsSharev1assetsidPlaylistasset($id_playlist, $body)

Assign asset to playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of the playlist
$body = new \Swagger\Client\Model\SharePlaylistsAssignAssetSchema(); // \Swagger\Client\Model\SharePlaylistsAssignAssetSchema | Raw Body

try {
    $result = $api_instance->playlistsSharev1assetsidPlaylistasset($id_playlist, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1assetsidPlaylistasset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of the playlist |
 **body** | [**\Swagger\Client\Model\SharePlaylistsAssignAssetSchema**](../Model/\Swagger\Client\Model\SharePlaylistsAssignAssetSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsAssignAssetResponse**](../Model/SharePlaylistsAssignAssetResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1assetsidPlaylistasset_0**
> \Swagger\Client\Model\SharePlaylistsRemoveAssetResponse playlistsSharev1assetsidPlaylistasset_0($id_playlist, $body)

Remove asset from playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of the playlist
$body = new \Swagger\Client\Model\SharePlaylistsRemoveAssetSchema(); // \Swagger\Client\Model\SharePlaylistsRemoveAssetSchema | Raw Body

try {
    $result = $api_instance->playlistsSharev1assetsidPlaylistasset_0($id_playlist, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1assetsidPlaylistasset_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of the playlist |
 **body** | [**\Swagger\Client\Model\SharePlaylistsRemoveAssetSchema**](../Model/\Swagger\Client\Model\SharePlaylistsRemoveAssetSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsRemoveAssetResponse**](../Model/SharePlaylistsRemoveAssetResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlists**
> \Swagger\Client\Model\SharePlaylistsListResponse playlistsSharev1playlists($search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $id_asset, $ignore_private, $exclude_predefined, $ignore_blank_playlists)

Retrieves all playlists for user, filtered on input parameters

All filter parameters are optional. If filter parameters are provided, then operation &quot;AND&quot; is performed across the parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$search_text = "search_text_example"; // string | Search text in the asset title and description. Default empty string
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - id. Options: id, title, date
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$id_asset = 56; // int | Filter returned playlists by asset
$ignore_private = 56; // int | Filter returned playlists by is_private. Options 1 - ignore private, 0 - include private. Default: 1
$exclude_predefined = 56; // int | Filter returned playlists by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0
$ignore_blank_playlists = 56; // int | Filter returned not empty playlists. Options 1 - only not empty playlists, 0 - include empty playlists. Default: 1

try {
    $result = $api_instance->playlistsSharev1playlists($search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $id_asset, $ignore_private, $exclude_predefined, $ignore_blank_playlists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlists: ', $e->getMessage(), PHP_EOL;
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
 **id_asset** | **int**| Filter returned playlists by asset | [optional]
 **ignore_private** | **int**| Filter returned playlists by is_private. Options 1 - ignore private, 0 - include private. Default: 1 | [optional]
 **exclude_predefined** | **int**| Filter returned playlists by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0 | [optional]
 **ignore_blank_playlists** | **int**| Filter returned not empty playlists. Options 1 - only not empty playlists, 0 - include empty playlists. Default: 1 | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsListResponse**](../Model/SharePlaylistsListResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlists_0**
> \Swagger\Client\Model\SharePlaylistsCreateResponse playlistsSharev1playlists_0($body)

Creates a new playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$body = new \Swagger\Client\Model\SharePlaylistsCreateSchema(); // \Swagger\Client\Model\SharePlaylistsCreateSchema | Raw Body

try {
    $result = $api_instance->playlistsSharev1playlists_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlists_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SharePlaylistsCreateSchema**](../Model/\Swagger\Client\Model\SharePlaylistsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsCreateResponse**](../Model/SharePlaylistsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlistsidPlaylist**
> \Swagger\Client\Model\SharePlaylistsUpdateResponse playlistsSharev1playlistsidPlaylist($id_playlist, $body)

Update playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of playlist to fetch
$body = new \Swagger\Client\Model\SharePlaylistsUpdateSchema(); // \Swagger\Client\Model\SharePlaylistsUpdateSchema | Raw Body

try {
    $result = $api_instance->playlistsSharev1playlistsidPlaylist($id_playlist, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlistsidPlaylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of playlist to fetch |
 **body** | [**\Swagger\Client\Model\SharePlaylistsUpdateSchema**](../Model/\Swagger\Client\Model\SharePlaylistsUpdateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsUpdateResponse**](../Model/SharePlaylistsUpdateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlistsidPlaylist_0**
> \Swagger\Client\Model\SharePlaylistsDeleteResponse playlistsSharev1playlistsidPlaylist_0($id_playlist)

Deletes one playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of playlist to fetch

try {
    $result = $api_instance->playlistsSharev1playlistsidPlaylist_0($id_playlist);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlistsidPlaylist_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of playlist to fetch |

### Return type

[**\Swagger\Client\Model\SharePlaylistsDeleteResponse**](../Model/SharePlaylistsDeleteResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlistsidPlaylistassets**
> \Swagger\Client\Model\SharePlaylistsListAssetsResponse playlistsSharev1playlistsidPlaylistassets($id_playlist, $search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $not_in_playlist, $ignore_private, $exclude_predefined)

Retrieves all assets for playlist

All filter parameters are optional. If filter parameters are provided, then operation &quot;AND&quot; is performed across the parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of the playlist
$search_text = "search_text_example"; // string | Search text in the asset title and description. Default empty string
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - ordering. Options: id, title, date, ordering
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = Ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0
$not_in_playlist = 56; // int | Show assets in playlist or assets not in playlist (if provided id_playlist). Options: 0 - in playlist, 1 - not in playlist. Default: 0
$ignore_private = 56; // int | Filter returned assets by is_private. Options 1 - ignore private, 0 - include private. Default: 1
$exclude_predefined = 56; // int | Filter returned assets by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0

try {
    $result = $api_instance->playlistsSharev1playlistsidPlaylistassets($id_playlist, $search_text, $sort_attr, $sort_dir, $page, $page_size, $get_total_count, $not_in_playlist, $ignore_private, $exclude_predefined);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlistsidPlaylistassets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of the playlist |
 **search_text** | **string**| Search text in the asset title and description. Default empty string | [optional]
 **sort_attr** | **string**| Sort by this field, default value - ordering. Options: id, title, date, ordering | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; Ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]
 **not_in_playlist** | **int**| Show assets in playlist or assets not in playlist (if provided id_playlist). Options: 0 - in playlist, 1 - not in playlist. Default: 0 | [optional]
 **ignore_private** | **int**| Filter returned assets by is_private. Options 1 - ignore private, 0 - include private. Default: 1 | [optional]
 **exclude_predefined** | **int**| Filter returned assets by is predefined. Options 1 - exclude predefined, 0 - include predefined. Default: 0 | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsListAssetsResponse**](../Model/SharePlaylistsListAssetsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSharev1playlistsidPlaylistorder**
> \Swagger\Client\Model\SharePlaylistsOrderAssetsResponse playlistsSharev1playlistsidPlaylistorder($id_playlist, $body)

Order assets in playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$id_playlist = 56; // int | ID of playlist to fetch
$body = new \Swagger\Client\Model\SharePlaylistsOrderAssetsSchema(); // \Swagger\Client\Model\SharePlaylistsOrderAssetsSchema | Raw Body

try {
    $result = $api_instance->playlistsSharev1playlistsidPlaylistorder($id_playlist, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSharev1playlistsidPlaylistorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_playlist** | **int**| ID of playlist to fetch |
 **body** | [**\Swagger\Client\Model\SharePlaylistsOrderAssetsSchema**](../Model/\Swagger\Client\Model\SharePlaylistsOrderAssetsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SharePlaylistsOrderAssetsResponse**](../Model/SharePlaylistsOrderAssetsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSkillv1playlistsplaylistIdprograms**
> \Swagger\Client\Model\SkillPlaylistsAssignProgramsResponse playlistsSkillv1playlistsplaylistIdprograms($playlist_id, $body)

Assign programs to a playlist.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | playlist id
$body = new \Swagger\Client\Model\SkillPlaylistsAssignProgramsSchema(); // \Swagger\Client\Model\SkillPlaylistsAssignProgramsSchema | Raw Body

try {
    $result = $api_instance->playlistsSkillv1playlistsplaylistIdprograms($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSkillv1playlistsplaylistIdprograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| playlist id |
 **body** | [**\Swagger\Client\Model\SkillPlaylistsAssignProgramsSchema**](../Model/\Swagger\Client\Model\SkillPlaylistsAssignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlaylistsAssignProgramsResponse**](../Model/SkillPlaylistsAssignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSkillv1playlistsplaylistIdprograms_0**
> \Swagger\Client\Model\SkillPlaylistsUnassignProgramsResponse playlistsSkillv1playlistsplaylistIdprograms_0($playlist_id, $body)

Unassigns an playlist from a Program



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | playlist id
$body = new \Swagger\Client\Model\SkillPlaylistsUnassignProgramsSchema(); // \Swagger\Client\Model\SkillPlaylistsUnassignProgramsSchema | Raw Body

try {
    $result = $api_instance->playlistsSkillv1playlistsplaylistIdprograms_0($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSkillv1playlistsplaylistIdprograms_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| playlist id |
 **body** | [**\Swagger\Client\Model\SkillPlaylistsUnassignProgramsSchema**](../Model/\Swagger\Client\Model\SkillPlaylistsUnassignProgramsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlaylistsUnassignProgramsResponse**](../Model/SkillPlaylistsUnassignProgramsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSkillv1playlistsplaylistIdskills**
> \Swagger\Client\Model\SkillPlaylistsListSkillsResponse playlistsSkillv1playlistsplaylistIdskills($playlist_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count)

Retrieves the list of Skills, that are assigned to given playlist

All filter parameters are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | Playlist id
$sort_attr = "sort_attr_example"; // string | Sort by this field, default value - title. Options: title, id
$sort_dir = "sort_dir_example"; // string | Sorting Direction: asc = ascending, desc = descending, default - desc
$page = 56; // int | Page to return, default 1
$page_size = 56; // int | Maximum number of results per page, default 200
$lang = "lang_example"; // string | Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language
$get_total_count = 56; // int | If 1 the count of found items will be returned. Options: 0, 1 default 0

try {
    $result = $api_instance->playlistsSkillv1playlistsplaylistIdskills($playlist_id, $sort_attr, $sort_dir, $page, $page_size, $lang, $get_total_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSkillv1playlistsplaylistIdskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| Playlist id |
 **sort_attr** | **string**| Sort by this field, default value - title. Options: title, id | [optional]
 **sort_dir** | **string**| Sorting Direction: asc &#x3D; ascending, desc &#x3D; descending, default - desc | [optional]
 **page** | **int**| Page to return, default 1 | [optional]
 **page_size** | **int**| Maximum number of results per page, default 200 | [optional]
 **lang** | **string**| Language code. Language used to process input parameters, sort data, and provide the output. Default - Platform default language | [optional]
 **get_total_count** | **int**| If 1 the count of found items will be returned. Options: 0, 1 default 0 | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlaylistsListSkillsResponse**](../Model/SkillPlaylistsListSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSkillv1playlistsplaylistIdskills_0**
> \Swagger\Client\Model\SkillPlaylistsCreateResponse playlistsSkillv1playlistsplaylistIdskills_0($playlist_id, $body)

Assign skill to a Playlist.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | Playlist id
$body = new \Swagger\Client\Model\SkillPlaylistsCreateSchema(); // \Swagger\Client\Model\SkillPlaylistsCreateSchema | Raw Body

try {
    $result = $api_instance->playlistsSkillv1playlistsplaylistIdskills_0($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSkillv1playlistsplaylistIdskills_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| Playlist id |
 **body** | [**\Swagger\Client\Model\SkillPlaylistsCreateSchema**](../Model/\Swagger\Client\Model\SkillPlaylistsCreateSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlaylistsCreateResponse**](../Model/SkillPlaylistsCreateResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistsSkillv1playlistsplaylistIdskills_1**
> \Swagger\Client\Model\SkillPlaylistsDeleteSkillsResponse playlistsSkillv1playlistsplaylistIdskills_1($playlist_id, $body)

De-assigns an existing skill(s) from given playlist



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: docebo_oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PlaylistsApi();
$playlist_id = 56; // int | ID of a playlist to delete
$body = new \Swagger\Client\Model\SkillPlaylistsDeleteSkillsSchema(); // \Swagger\Client\Model\SkillPlaylistsDeleteSkillsSchema | Raw Body

try {
    $result = $api_instance->playlistsSkillv1playlistsplaylistIdskills_1($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->playlistsSkillv1playlistsplaylistIdskills_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| ID of a playlist to delete |
 **body** | [**\Swagger\Client\Model\SkillPlaylistsDeleteSkillsSchema**](../Model/\Swagger\Client\Model\SkillPlaylistsDeleteSkillsSchema.md)| Raw Body | [optional]

### Return type

[**\Swagger\Client\Model\SkillPlaylistsDeleteSkillsResponse**](../Model/SkillPlaylistsDeleteSkillsResponse.md)

### Authorization

[docebo_oauth](../../README.md#docebo_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

