# LearnSubscriptionrecordUpdateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Subscription record code | [optional] 
**items** | [**\Swagger\Client\Model\LearnSubscriptionrecordUpdateItems**](LearnSubscriptionrecordUpdateItems.md) | Array with keys subscription record item id and value item type (options: 1 - course, 2 - catalog, 3 - learning plan) | 
**object_type** | **int** | Subscription record assigned to either branch,group or user (1 - branch, 2 - group , 3 - user) | [optional] 
**availability** | **int** | Subscription record availability | [optional] 
**start_date** | [**\DateTime**](Date.md) | Subscription record start date | [optional] 
**object_id** | **int** | Subscription record object | [optional] 
**selection_status** | **int** | Subscription record branch selection status - 1 - Single, 2 - with children | 
**record_type** | **int** | Subscription purchase type: 1 - ecommerce, 2 - admin | 
**price** | **int** | Subscription record price | [optional] 
**status** | **int** | Subscription record status - 1 (active) or 2 (inactive) | [optional] 
**subscription_bundle_id** | **string** | Subscription record bundle ID | [optional] 
**notes** | **string** | Subscription record notes | [optional] 
**plan_id** | **int** | Subscription plan ID | [optional] 
**name** | **string** | Subscription record name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


