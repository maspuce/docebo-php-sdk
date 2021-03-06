<?php
/**
 * ManageSiteBootstrapCatalogSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ManageSiteBootstrapCatalogSettings Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageSiteBootstrapCatalogSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageSiteBootstrapCatalogSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'use_https' => 'bool',
        'user_settings' => '\Swagger\Client\Model\ManageSiteBootstrapUserSettings',
        'catalog_external' => 'bool',
        'ua_mobile' => '\Swagger\Client\Model\ManageSiteBootstrapUaMobile[]',
        'access_token' => 'string',
        'catalog_type' => 'string',
        'in_maintenance_mode' => 'bool',
        'setup_redirect' => 'string',
        'ws_settings' => '\Swagger\Client\Model\ManageSiteBootstrapWsSettings',
        'show_course_details_dedicated_page' => '\Swagger\Client\Model\ManageSiteBootstrapShowCourseDetailsDedicatedPage',
        'sso_providers' => '\Swagger\Client\Model\ManageSiteBootstrapSsoProviders',
        'billing' => '\Swagger\Client\Model\ManageSiteBootstrapBilling',
        'on_catalogue_empty' => 'bool',
        'footer' => '\Swagger\Client\Model\ManageSiteBootstrapFooter',
        'header' => '\Swagger\Client\Model\ManageSiteBootstrapHeaderL2',
        'is_logged_in' => 'bool',
        'catalog_use_categories_tree' => 'bool',
        'setup_finished' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'use_https' => 'use_https',
        'user_settings' => 'user_settings',
        'catalog_external' => 'catalog_external',
        'ua_mobile' => 'ua_mobile',
        'access_token' => 'access_token',
        'catalog_type' => 'catalog_type',
        'in_maintenance_mode' => 'in_maintenance_mode',
        'setup_redirect' => 'setup_redirect',
        'ws_settings' => 'ws_settings',
        'show_course_details_dedicated_page' => 'show_course_details_dedicated_page',
        'sso_providers' => 'sso_providers',
        'billing' => 'billing',
        'on_catalogue_empty' => 'on_catalogue_empty',
        'footer' => 'footer',
        'header' => 'header',
        'is_logged_in' => 'is_logged_in',
        'catalog_use_categories_tree' => 'catalog_use_categories_tree',
        'setup_finished' => 'setup_finished'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'use_https' => 'setUseHttps',
        'user_settings' => 'setUserSettings',
        'catalog_external' => 'setCatalogExternal',
        'ua_mobile' => 'setUaMobile',
        'access_token' => 'setAccessToken',
        'catalog_type' => 'setCatalogType',
        'in_maintenance_mode' => 'setInMaintenanceMode',
        'setup_redirect' => 'setSetupRedirect',
        'ws_settings' => 'setWsSettings',
        'show_course_details_dedicated_page' => 'setShowCourseDetailsDedicatedPage',
        'sso_providers' => 'setSsoProviders',
        'billing' => 'setBilling',
        'on_catalogue_empty' => 'setOnCatalogueEmpty',
        'footer' => 'setFooter',
        'header' => 'setHeader',
        'is_logged_in' => 'setIsLoggedIn',
        'catalog_use_categories_tree' => 'setCatalogUseCategoriesTree',
        'setup_finished' => 'setSetupFinished'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'use_https' => 'getUseHttps',
        'user_settings' => 'getUserSettings',
        'catalog_external' => 'getCatalogExternal',
        'ua_mobile' => 'getUaMobile',
        'access_token' => 'getAccessToken',
        'catalog_type' => 'getCatalogType',
        'in_maintenance_mode' => 'getInMaintenanceMode',
        'setup_redirect' => 'getSetupRedirect',
        'ws_settings' => 'getWsSettings',
        'show_course_details_dedicated_page' => 'getShowCourseDetailsDedicatedPage',
        'sso_providers' => 'getSsoProviders',
        'billing' => 'getBilling',
        'on_catalogue_empty' => 'getOnCatalogueEmpty',
        'footer' => 'getFooter',
        'header' => 'getHeader',
        'is_logged_in' => 'getIsLoggedIn',
        'catalog_use_categories_tree' => 'getCatalogUseCategoriesTree',
        'setup_finished' => 'getSetupFinished'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['use_https'] = isset($data['use_https']) ? $data['use_https'] : null;
        $this->container['user_settings'] = isset($data['user_settings']) ? $data['user_settings'] : null;
        $this->container['catalog_external'] = isset($data['catalog_external']) ? $data['catalog_external'] : null;
        $this->container['ua_mobile'] = isset($data['ua_mobile']) ? $data['ua_mobile'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['catalog_type'] = isset($data['catalog_type']) ? $data['catalog_type'] : null;
        $this->container['in_maintenance_mode'] = isset($data['in_maintenance_mode']) ? $data['in_maintenance_mode'] : null;
        $this->container['setup_redirect'] = isset($data['setup_redirect']) ? $data['setup_redirect'] : null;
        $this->container['ws_settings'] = isset($data['ws_settings']) ? $data['ws_settings'] : null;
        $this->container['show_course_details_dedicated_page'] = isset($data['show_course_details_dedicated_page']) ? $data['show_course_details_dedicated_page'] : null;
        $this->container['sso_providers'] = isset($data['sso_providers']) ? $data['sso_providers'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['on_catalogue_empty'] = isset($data['on_catalogue_empty']) ? $data['on_catalogue_empty'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['is_logged_in'] = isset($data['is_logged_in']) ? $data['is_logged_in'] : null;
        $this->container['catalog_use_categories_tree'] = isset($data['catalog_use_categories_tree']) ? $data['catalog_use_categories_tree'] : null;
        $this->container['setup_finished'] = isset($data['setup_finished']) ? $data['setup_finished'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['use_https'] === null) {
            $invalid_properties[] = "'use_https' can't be null";
        }
        if ($this->container['ua_mobile'] === null) {
            $invalid_properties[] = "'ua_mobile' can't be null";
        }
        if ($this->container['in_maintenance_mode'] === null) {
            $invalid_properties[] = "'in_maintenance_mode' can't be null";
        }
        if ($this->container['ws_settings'] === null) {
            $invalid_properties[] = "'ws_settings' can't be null";
        }
        if ($this->container['catalog_use_categories_tree'] === null) {
            $invalid_properties[] = "'catalog_use_categories_tree' can't be null";
        }
        if ($this->container['setup_finished'] === null) {
            $invalid_properties[] = "'setup_finished' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['use_https'] === null) {
            return false;
        }
        if ($this->container['ua_mobile'] === null) {
            return false;
        }
        if ($this->container['in_maintenance_mode'] === null) {
            return false;
        }
        if ($this->container['ws_settings'] === null) {
            return false;
        }
        if ($this->container['catalog_use_categories_tree'] === null) {
            return false;
        }
        if ($this->container['setup_finished'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets use_https
     * @return bool
     */
    public function getUseHttps()
    {
        return $this->container['use_https'];
    }

    /**
     * Sets use_https
     * @param bool $use_https Whether or not to force usage of HTTPs
     * @return $this
     */
    public function setUseHttps($use_https)
    {
        $this->container['use_https'] = $use_https;

        return $this;
    }

    /**
     * Gets user_settings
     * @return \Swagger\Client\Model\ManageSiteBootstrapUserSettings
     */
    public function getUserSettings()
    {
        return $this->container['user_settings'];
    }

    /**
     * Sets user_settings
     * @param \Swagger\Client\Model\ManageSiteBootstrapUserSettings $user_settings 
     * @return $this
     */
    public function setUserSettings($user_settings)
    {
        $this->container['user_settings'] = $user_settings;

        return $this;
    }

    /**
     * Gets catalog_external
     * @return bool
     */
    public function getCatalogExternal()
    {
        return $this->container['catalog_external'];
    }

    /**
     * Sets catalog_external
     * @param bool $catalog_external Show/hide catalogue for authenticated users
     * @return $this
     */
    public function setCatalogExternal($catalog_external)
    {
        $this->container['catalog_external'] = $catalog_external;

        return $this;
    }

    /**
     * Gets ua_mobile
     * @return \Swagger\Client\Model\ManageSiteBootstrapUaMobile[]
     */
    public function getUaMobile()
    {
        return $this->container['ua_mobile'];
    }

    /**
     * Sets ua_mobile
     * @param \Swagger\Client\Model\ManageSiteBootstrapUaMobile[] $ua_mobile A comma An array of browser user agents that are considered as &quot;mobile&quot;
     * @return $this
     */
    public function setUaMobile($ua_mobile)
    {
        $this->container['ua_mobile'] = $ua_mobile;

        return $this;
    }

    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     * @param string $access_token An oauth2 access token generated in case the user is logged in
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets catalog_type
     * @return string
     */
    public function getCatalogType()
    {
        return $this->container['catalog_type'];
    }

    /**
     * Sets catalog_type
     * @param string $catalog_type 
     * @return $this
     */
    public function setCatalogType($catalog_type)
    {
        $this->container['catalog_type'] = $catalog_type;

        return $this;
    }

    /**
     * Gets in_maintenance_mode
     * @return bool
     */
    public function getInMaintenanceMode()
    {
        return $this->container['in_maintenance_mode'];
    }

    /**
     * Sets in_maintenance_mode
     * @param bool $in_maintenance_mode If the LMS is in maintenance mode
     * @return $this
     */
    public function setInMaintenanceMode($in_maintenance_mode)
    {
        $this->container['in_maintenance_mode'] = $in_maintenance_mode;

        return $this;
    }

    /**
     * Gets setup_redirect
     * @return string
     */
    public function getSetupRedirect()
    {
        return $this->container['setup_redirect'];
    }

    /**
     * Sets setup_redirect
     * @param string $setup_redirect If the LMS installation was not finished this is the URL to be used to redirect the user
     * @return $this
     */
    public function setSetupRedirect($setup_redirect)
    {
        $this->container['setup_redirect'] = $setup_redirect;

        return $this;
    }

    /**
     * Gets ws_settings
     * @return \Swagger\Client\Model\ManageSiteBootstrapWsSettings
     */
    public function getWsSettings()
    {
        return $this->container['ws_settings'];
    }

    /**
     * Sets ws_settings
     * @param \Swagger\Client\Model\ManageSiteBootstrapWsSettings $ws_settings 
     * @return $this
     */
    public function setWsSettings($ws_settings)
    {
        $this->container['ws_settings'] = $ws_settings;

        return $this;
    }

    /**
     * Gets show_course_details_dedicated_page
     * @return \Swagger\Client\Model\ManageSiteBootstrapShowCourseDetailsDedicatedPage
     */
    public function getShowCourseDetailsDedicatedPage()
    {
        return $this->container['show_course_details_dedicated_page'];
    }

    /**
     * Sets show_course_details_dedicated_page
     * @param \Swagger\Client\Model\ManageSiteBootstrapShowCourseDetailsDedicatedPage $show_course_details_dedicated_page 
     * @return $this
     */
    public function setShowCourseDetailsDedicatedPage($show_course_details_dedicated_page)
    {
        $this->container['show_course_details_dedicated_page'] = $show_course_details_dedicated_page;

        return $this;
    }

    /**
     * Gets sso_providers
     * @return \Swagger\Client\Model\ManageSiteBootstrapSsoProviders
     */
    public function getSsoProviders()
    {
        return $this->container['sso_providers'];
    }

    /**
     * Sets sso_providers
     * @param \Swagger\Client\Model\ManageSiteBootstrapSsoProviders $sso_providers It contains the array of SSO providers to display as buttons
     * @return $this
     */
    public function setSsoProviders($sso_providers)
    {
        $this->container['sso_providers'] = $sso_providers;

        return $this;
    }

    /**
     * Gets billing
     * @return \Swagger\Client\Model\ManageSiteBootstrapBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     * @param \Swagger\Client\Model\ManageSiteBootstrapBilling $billing Set of flags related to the LMS billing
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets on_catalogue_empty
     * @return bool
     */
    public function getOnCatalogueEmpty()
    {
        return $this->container['on_catalogue_empty'];
    }

    /**
     * Sets on_catalogue_empty
     * @param bool $on_catalogue_empty 
     * @return $this
     */
    public function setOnCatalogueEmpty($on_catalogue_empty)
    {
        $this->container['on_catalogue_empty'] = $on_catalogue_empty;

        return $this;
    }

    /**
     * Gets footer
     * @return \Swagger\Client\Model\ManageSiteBootstrapFooter
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     * @param \Swagger\Client\Model\ManageSiteBootstrapFooter $footer Main elements of the footer
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets header
     * @return \Swagger\Client\Model\ManageSiteBootstrapHeaderL2
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param \Swagger\Client\Model\ManageSiteBootstrapHeaderL2 $header 
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets is_logged_in
     * @return bool
     */
    public function getIsLoggedIn()
    {
        return $this->container['is_logged_in'];
    }

    /**
     * Sets is_logged_in
     * @param bool $is_logged_in whether the user is logged
     * @return $this
     */
    public function setIsLoggedIn($is_logged_in)
    {
        $this->container['is_logged_in'] = $is_logged_in;

        return $this;
    }

    /**
     * Gets catalog_use_categories_tree
     * @return bool
     */
    public function getCatalogUseCategoriesTree()
    {
        return $this->container['catalog_use_categories_tree'];
    }

    /**
     * Sets catalog_use_categories_tree
     * @param bool $catalog_use_categories_tree 
     * @return $this
     */
    public function setCatalogUseCategoriesTree($catalog_use_categories_tree)
    {
        $this->container['catalog_use_categories_tree'] = $catalog_use_categories_tree;

        return $this;
    }

    /**
     * Gets setup_finished
     * @return bool
     */
    public function getSetupFinished()
    {
        return $this->container['setup_finished'];
    }

    /**
     * Sets setup_finished
     * @param bool $setup_finished If the LMS has been installed fully
     * @return $this
     */
    public function setSetupFinished($setup_finished)
    {
        $this->container['setup_finished'] = $setup_finished;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


