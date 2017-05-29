# LearnCatalogueIndexSubItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **int** | Catalogue item ID - course or Learning plan ID | 
**item_category** | **int** | Catalogue item category | 
**price_status** | **int** | Options: 1 - free, 2 - paid, NULL - n/a (for Learning plans) | 
**item_type** | **string** | Catalogue item type - Course or Learning plan | 
**item_can_enroll** | **int** | Catalogue item can enroll (0 - Only Admin can subscribe, 1 - Pending Admin Approval OR 2 - Free  ) | 
**item_thumbnail** | **string** | Catalogue item thumbnail | 
**is_new** | **int** | Is new (1 or 0 is returned) - indicates if user has already &amp;quot;played&amp;quot; in this Course or Learning plan. Not available for Generic catalog | 
**item_visibility** | **int** | Catalogue item visibility (0 - Everyone, and show on home page, 1 - Only for logged in users OR 2 - Only users subscribed to the course) | 
**item_name** | **string** | Catalogue item name | 
**item_code** | **string** | Catalogue item code | 
**item_policy** | **int** | Catalogue item policy (0 - Subscriptions are closed, 1 Subscriptions are open OR 2 Subscription is available during the following period) | 
**is_opened** | **int** | Is course opened for subsription: 0 - false, 1 - true, NULL - n/a (for Learning plans) | 
**item_description** | **string** | Catalogue item description | 
**number_of_courses** | **int** | Number of courses (available only for Learning plans, otherwise NULL will be returned) | 
**item_price** | **int** | Catalogue item price (available only if &amp;quot;ecommerce&amp;quot; app is activated, otherwise NULL will be returned) | 
**shopify_product_meaningful_id** | **string** | Shopify product meaningful ID | 
**access_status** | **int** | Options: 1 - enable, 2 - dissable, 3 - expired, NULL - n/a (for Learning plans) | 
**item_language** | **string** | Catalogue item language (available only for Courses, otherwise NULL will be returned) | 
**item_rating** | **int** | Catalogue item rating (available only for Courses, otherwise NULL will be returned). Not available for Generic catalog | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


