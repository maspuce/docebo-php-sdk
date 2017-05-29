# LearnCourseViewData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instructors** | [**\Swagger\Client\Model\LearnCourseViewInstructors[]**](LearnCourseViewInstructors.md) | The instructors inside the course | 
**chapter_sequence** | [**\Swagger\Client\Model\LearnCourseViewChapterSequence[]**](LearnCourseViewChapterSequence.md) | Flat, single level, array of LO IDs in the course, in the correct playable order (respecting prerequisites requirements and LO order from the Training Materials management area of the course) | [optional] 
**final_score** | **double** | The final score calculated for the user | [optional] 
**has_overview** | **bool** | Determinate if the course can show the overview page | 
**demo_file** | **string** | Optional demo_file of the course | [optional] 
**background_image** | [**\Swagger\Client\Model\LearnCourseViewBackgroundImage**](LearnCourseViewBackgroundImage.md) | The course background image information | 
**id** | **int** | ID of the course | 
**deadline** | **string** | The maximum date (in MYSQL format UTC) by which this course should be completed. It can be the course deadline or the enrollment one | [optional] 
**status** | **string** | Enrollment status | 
**level** | **string** | The enrollment level of the current user. Possible values &#x3D; &amp;quot;student&amp;quot;, &amp;quot;tutor&amp;quot;, &amp;quot;instructor&amp;quot;, &amp;quot;coach&amp;quot; | [optional] 
**current_rating** | **float** | The current average rating for the course | 
**last_played_object** | **int** | The date when the course was completed | [optional] 
**completion_date** | **string** | The date when the course was completed | [optional] 
**name** | **string** | Course name | 
**available_seats** | [**\Swagger\Client\Model\LearnCourseViewAvailableSeats[]**](LearnCourseViewAvailableSeats.md) | Available seats for the course, if course have session, data is splitted by session id | [optional] 
**thumbnail** | **string** | Thumbnail of the course | [optional] 
**lang_code** | **string** | The language of the course, e.g. &amp;quot;en&amp;quot;, &amp;quot;bg&amp;quot; | 
**slug_name** | **string** | Course slug name | 
**has_autoplay** | **bool** | Whether or not next chapter should be automatically played after the previous is completed | 
**can_rate** | **bool** | If the logged user can rate the course | 
**type** | **string** | Course type, possible values: elearning, classroom, webinar | 
**can_self_unenroll** | **bool** | Whether or not the current user can self-unenroll from the course | 
**on_sale** | **bool** | Whether this course is on sale (through the ecommerce functionality) | 
**deeplink** | **string** | The URL signature part (i.e. hash&#x3D;&amp;lt;signature&amp;gt;) to append to the deeplink for this course/chapter. Only available if course has deeplinking enabled. | [optional] 
**show_toc** | **bool** | Determinate if the course player should display or not the Table of Content (course navigation) | 
**shopify_product_meaningful_id** | **string** | Shopify product meaningful ID | [optional] 
**description** | **string** | Course description | 
**learningplans** | [**\Swagger\Client\Model\LearnCourseViewLearningplans[]**](LearnCourseViewLearningplans.md) | Ids of Learning Plans that the course is part of | [optional] 
**certificate_url** | **string** | The current S3 PDF certificate URL (if any) | 
**permissions** | [**\Swagger\Client\Model\LearnCourseViewPermissions[]**](LearnCourseViewPermissions.md) | An array of permission records for the user in this course | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


