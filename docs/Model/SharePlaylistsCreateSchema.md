# SharePlaylistsCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channels** | **int[]** | Array with channel Ids. If asset is private - channels are not required | 
**title** | **string** | Playlist title. Default - null | [optional] 
**id_asset** | **int** | Id of the asset | 
**is_private** | **int** | If is private - 1, otherwise public 0. Default: 0 | [optional] 
**description** | **string** | Playlist description. Default - null | [optional] 
**id_source** | **int** | Playlist source. Options: 1 - Web App, 2 - Android App, 3 - IOS App. Default - 1 | [optional] 
**tags** | **int[]** | Array with tag Ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


