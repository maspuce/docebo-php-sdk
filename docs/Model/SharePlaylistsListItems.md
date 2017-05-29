# SharePlaylistsListItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Total number of items returned | 
**thumbnail** | [**\Swagger\Client\Model\SharePlaylistsListThumbnail**](SharePlaylistsListThumbnail.md) | Return thumbnail of Playlist object | 
**title** | **string** | Playlist title | 
**total_page_count** | **int** | Total number of pages returned | [optional] 
**cursor** | **string** | Unique ID used to temporarily store search parameters | 
**date_created** | **string** | Playlist date of creation | 
**kind** | [**\Swagger\Client\Model\SharePlaylistsListKind**](SharePlaylistsListKind.md) | Return type of Playlist object | 
**id** | **int** | ID of the playlist | 
**owner** | [**\Swagger\Client\Model\SharePlaylistsListOwner**](SharePlaylistsListOwner.md) | Return owner of Playlist object | 
**has_more_data** | **bool** | True if the current page is not the last page | 
**current_page_size** | **int** | Number of items per page | 
**current_page** | **int** | Page number of the current page | 
**info** | [**\Swagger\Client\Model\SharePlaylistsListInfo**](SharePlaylistsListInfo.md) | Return Playlist information object | 
**description** | **string** | Playlist description | 
**total_count** | **int** | Total number of Items returned. Returned if get_total_count parameter is 1 | [optional] 
**files** | [**\Swagger\Client\Model\SharePlaylistsListFiles**](SharePlaylistsListFiles.md) | Return file object | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


