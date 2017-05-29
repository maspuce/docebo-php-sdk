# SkillSkillListItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assigned** | **int** | 1 if skill is assigned to the given role otherwise 0 | [optional] 
**associated_content** | **int** | Associated to this skill content count | 
**active** | **int** | whatever skill is active or not(&#39;active&#39; -&amp;gt; [1], &#39;inactive&#39; -&amp;gt; [0]) | 
**title** | **string** | Skill title in the selected language | 
**roles** | [**\Swagger\Client\Model\SkillSkillListRoles[]**](SkillSkillListRoles.md) | List of roles, that skill is assigned to | 
**skill_id** | **int** | ID of the skill | 
**description** | **string** | Skill description in the selected language | 
**areas** | [**\Swagger\Client\Model\SkillSkillListAreas[]**](SkillSkillListAreas.md) | List of areas, that skill is assigned to | 
**strategic** | **int** | whatever skill is strategic or not(&#39;strategic&#39; -&amp;gt; [1], &#39;not strategic&#39; -&amp;gt; [0]) | 
**actions** | **string[]** | Available actions, that could be performed on the skill | 
**predefined_uid** | **string** | Predefined ID of the skill(if the skill is predefined, otherwise it contains NULL) | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


