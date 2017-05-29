# LearnSubscriptionrecordIndexItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | Total number of items returned | 
**code** | **string** | Subscription record code | 
**total_page_count** | **int** | Total number of pages returned | [optional] 
**availability** | **int** | Subscription record availability | 
**start_date** | [**\DateTime**](Date.md) | Subscription record start date | 
**sub_items** | [**\Swagger\Client\Model\LearnSubscriptionrecordIndexSubItems**](LearnSubscriptionrecordIndexSubItems.md) | Array of subscription record items info objects | 
**selection_status** | **int** | Subscription object selection status: 1 - Single, 2 - with children | 
**created_by** | **int** | Subscription record created by user ID | 
**created_on** | **int** | Subscription record creation date | 
**end_date** | [**\DateTime**](Date.md) | Subscription record end date | 
**status** | **int** | Subscription record integer - 1 (active) or 2 (inactive) | 
**users_associated** | **int** | Subscription record count users associated | 
**enrollments_done** | **int** | Subscription record count enrollments done | 
**plan_id** | **int** | Subscription plan ID | 
**renewal_type** | **int** | Subscription renewal type: 1- None, 2 - Manual, 3 - Automatic | 
**record_type** | **int** | Subscription purchase type: 1 - ecommerce, 2 - admin | 
**total_count** | **int** | Total number of Items returned. Returned if get_total_count parameter is 1 | [optional] 
**type** | **int** | Subscription record type (1 - seats or 2 - licences) | 
**cursor** | **string** | Unique ID used to temporarily store search parameters | 
**object_id** | **int** | Subscription object ID | 
**record_name** | **string** | Subscription record name | 
**current_page_size** | **int** | Number of items per page | 
**has_more_data** | **bool** | True if the current page is not the last page | 
**record_id** | **int** | ID of the subscription record | 
**price** | **int** | Subscription record price | 
**notes** | **int** | Subscription record notes | 
**bundle_id** | **int** | Subscription record bundle ID | 
**current_page** | **int** | Page number of the current page | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


