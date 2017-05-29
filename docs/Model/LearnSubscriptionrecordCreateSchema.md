# LearnSubscriptionrecordCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Subscription record code | [optional] 
**items** | [**\Swagger\Client\Model\LearnSubscriptionrecordCreateItems**](LearnSubscriptionrecordCreateItems.md) | Array with keys subscription record item id and value item type (options: 1 - course, 2 - catalog, 3 - learning plan) | 
**object_type** | **int** | Subscription record assigned to either branch,group or user (1 - branch, 2 - group , 3 - user) | 
**availability** | **int** | Subscription record availability | [optional] 
**start_date** | [**\DateTime**](Date.md) | Subscription record start date | 
**type** | **int** | Subscription record type (1 - licenses or 2 - seats) | 
**object_id** | **int** | Object ID (user, group or branch ID) | 
**selection_status** | **int** | Subscription record object selection status - 1 - Single, 2 - with children | 
**renewal** | **int** | Subscription record renewal | [optional] 
**record_type** | **int** | Subscription purchase type: 1 - ecommerce, 2 - admin | 
**price** | **int** | Subscription record price. If price is not privided it will be taken from the Subscrioption plan | [optional] 
**status** | **int** | Subscription record status (1 - active or 2 - inactive). Default is &amp;quot;active&amp;quot; | [optional] 
**notes** | **string** | Subscription record notes | [optional] 
**plan_id** | **int** | Subscription plan ID | 
**name** | **string** | Subscription record name - if it is not provided it will be taken from Subscription bundle name | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


