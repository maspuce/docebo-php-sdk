# SkillRatingtablesCreateSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **int** | If the created rating scale should be active 1 &#x3D; active 0 &#x3D; inactive. Default - 1 | [optional] 
**low_limit** | **int** | Low limit of the scale | [optional] 
**translations** | [**\Swagger\Client\Model\SkillRatingtablesCreateTranslations**](SkillRatingtablesCreateTranslations.md) | Array of translations, the system default language translation is mandatory | 
**high_limit** | **int** | High limit of the scale | [optional] 
**target** | **string** | Rating scale target - &#39;evaluation&#39;, &#39;kpi&#39;. Default - &#39;evaluation&#39; | [optional] 
**ratings** | [**\Swagger\Client\Model\SkillRatingtablesCreateRatings**](SkillRatingtablesCreateRatings.md) | List with ratings. Rating key(integer) should point to rating weight(value) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


