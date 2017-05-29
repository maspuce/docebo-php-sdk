# ManageSiteBootstrapCatalogSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_https** | **bool** | Whether or not to force usage of HTTPs | 
**user_settings** | [**\Swagger\Client\Model\ManageSiteBootstrapUserSettings**](ManageSiteBootstrapUserSettings.md) |  | [optional] 
**catalog_external** | **bool** | Show/hide catalogue for authenticated users | [optional] 
**ua_mobile** | [**\Swagger\Client\Model\ManageSiteBootstrapUaMobile[]**](ManageSiteBootstrapUaMobile.md) | A comma An array of browser user agents that are considered as &amp;quot;mobile&amp;quot; | 
**access_token** | **string** | An oauth2 access token generated in case the user is logged in | [optional] 
**catalog_type** | **string** |  | [optional] 
**in_maintenance_mode** | **bool** | If the LMS is in maintenance mode | 
**setup_redirect** | **string** | If the LMS installation was not finished this is the URL to be used to redirect the user | [optional] 
**ws_settings** | [**\Swagger\Client\Model\ManageSiteBootstrapWsSettings**](ManageSiteBootstrapWsSettings.md) |  | 
**show_course_details_dedicated_page** | [**\Swagger\Client\Model\ManageSiteBootstrapShowCourseDetailsDedicatedPage**](ManageSiteBootstrapShowCourseDetailsDedicatedPage.md) |  | [optional] 
**sso_providers** | [**\Swagger\Client\Model\ManageSiteBootstrapSsoProviders**](ManageSiteBootstrapSsoProviders.md) | It contains the array of SSO providers to display as buttons | [optional] 
**billing** | [**\Swagger\Client\Model\ManageSiteBootstrapBilling**](ManageSiteBootstrapBilling.md) | Set of flags related to the LMS billing | [optional] 
**on_catalogue_empty** | **bool** |  | [optional] 
**footer** | [**\Swagger\Client\Model\ManageSiteBootstrapFooter**](ManageSiteBootstrapFooter.md) | Main elements of the footer | [optional] 
**header** | [**\Swagger\Client\Model\ManageSiteBootstrapHeaderL2**](ManageSiteBootstrapHeaderL2.md) |  | [optional] 
**is_logged_in** | **bool** | whether the user is logged | [optional] 
**catalog_use_categories_tree** | **bool** |  | 
**setup_finished** | **bool** | If the LMS has been installed fully | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


