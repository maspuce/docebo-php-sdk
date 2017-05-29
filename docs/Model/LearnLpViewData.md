# LearnLpViewData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code of the learning plan | 
**settings** | [**\Swagger\Client\Model\LearnLpViewSettings**](LearnLpViewSettings.md) | Object with the settings of the learning plan | 
**total_duration** | **int** | The calculated total duration of the learning plan that is the result of the sum of all course duration times for all courses in the learning plan | [optional] 
**deeplink** | **string** | Only available if LP has deeplinking enabled | 
**enrollment** | [**\Swagger\Client\Model\LearnLpViewEnrollment**](LearnLpViewEnrollment.md) | URL to access the thumbnail image of the learning plan | 
**courses** | [**\Swagger\Client\Model\LearnLpViewCourses[]**](LearnLpViewCourses.md) | An array containing course object that are in this learning plan | 
**id** | **int** | Unique ID of the learning plan | 
**create_date** | **string** | The date when the learning plan was created | 
**last_played_course** | **int** | The last played course by the current user | [optional] 
**image** | **string** | URL to access the thumbnail image of the learning plan | [optional] 
**subscription** | [**\Swagger\Client\Model\LearnLpViewSubscription[]**](LearnLpViewSubscription.md) | Subscription information | 
**ecommerce** | [**\Swagger\Client\Model\LearnLpViewEcommerce**](LearnLpViewEcommerce.md) | Ecommerse data for the learning plan | 
**status** | **string** | Status of the user in the learning plan | 
**shopify_product_meaningful_id** | **string** | Shopify product meaningful ID | [optional] 
**name** | **string** | Name of the learning plan | 
**complete_percent** | **int** | The percentage of the current LP completed by the user | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


