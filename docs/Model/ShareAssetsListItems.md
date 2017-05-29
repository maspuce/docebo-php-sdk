# ShareAssetsListItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Total number of items returned | 
**thumbnail** | [**\Swagger\Client\Model\ShareAssetsListThumbnail**](ShareAssetsListThumbnail.md) | Return thumbnail of asset object | 
**title** | **string** | Asset title | 
**total_page_count** | **int** | Total number of pages returned | [optional] 
**cursor** | **string** | Unique ID used to temporarily store search parameters | 
**date_created** | **string** | Asset date of creation | 
**kind** | [**\Swagger\Client\Model\ShareAssetsListKind**](ShareAssetsListKind.md) | Return type of asset object | 
**id** | **int** | ID of the asset | 
**owner** | [**\Swagger\Client\Model\ShareAssetsListOwner**](ShareAssetsListOwner.md) | Return owner of asset object | 
**has_more_data** | **bool** | True if the current page is not the last page | 
**current_page_size** | **int** | Number of items per page | 
**current_page** | **int** | Page number of the current page | 
**info** | [**\Swagger\Client\Model\ShareAssetsListInfo**](ShareAssetsListInfo.md) | Return asset information object | 
**description** | **string** | Asset description | 
**total_count** | **int** | Total number of Items returned. Returned if get_total_count parameter is 1 | [optional] 
**files** | [**\Swagger\Client\Model\ShareAssetsListFiles**](ShareAssetsListFiles.md) | Return file object | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


