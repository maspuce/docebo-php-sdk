<?php
/**
 * ManageUserSessionData
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
 * ManageUserSessionData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserSessionData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserSessionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'catalog_settings' => '\Swagger\Client\Model\ManageUserSessionCatalogSettings',
        'timezone' => 'string',
        'branding' => '\Swagger\Client\Model\ManageUserSessionBranding',
        'lastname' => 'string',
        'dateformat_locale' => 'string',
        'currency_settings' => '\Swagger\Client\Model\ManageUserSessionCurrencySettings',
        'menu_items' => '\Swagger\Client\Model\ManageUserSessionMenuItems[]',
        'id' => 'int',
        'user_level' => 'string',
        'avatar_url' => 'string',
        'email' => 'string',
        'username' => 'string',
        'active_languages' => '\Swagger\Client\Model\ManageUserSessionActiveLanguages[]',
        'admin_menu_items' => '\Swagger\Client\Model\ManageUserSessionAdminMenuItems',
        'firstname' => 'string',
        'language' => 'string'
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
        'catalog_settings' => 'catalog_settings',
        'timezone' => 'timezone',
        'branding' => 'branding',
        'lastname' => 'lastname',
        'dateformat_locale' => 'dateformat_locale',
        'currency_settings' => 'currency_settings',
        'menu_items' => 'menu_items',
        'id' => 'id',
        'user_level' => 'user_level',
        'avatar_url' => 'avatar_url',
        'email' => 'email',
        'username' => 'username',
        'active_languages' => 'active_languages',
        'admin_menu_items' => 'admin_menu_items',
        'firstname' => 'firstname',
        'language' => 'language'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'catalog_settings' => 'setCatalogSettings',
        'timezone' => 'setTimezone',
        'branding' => 'setBranding',
        'lastname' => 'setLastname',
        'dateformat_locale' => 'setDateformatLocale',
        'currency_settings' => 'setCurrencySettings',
        'menu_items' => 'setMenuItems',
        'id' => 'setId',
        'user_level' => 'setUserLevel',
        'avatar_url' => 'setAvatarUrl',
        'email' => 'setEmail',
        'username' => 'setUsername',
        'active_languages' => 'setActiveLanguages',
        'admin_menu_items' => 'setAdminMenuItems',
        'firstname' => 'setFirstname',
        'language' => 'setLanguage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'catalog_settings' => 'getCatalogSettings',
        'timezone' => 'getTimezone',
        'branding' => 'getBranding',
        'lastname' => 'getLastname',
        'dateformat_locale' => 'getDateformatLocale',
        'currency_settings' => 'getCurrencySettings',
        'menu_items' => 'getMenuItems',
        'id' => 'getId',
        'user_level' => 'getUserLevel',
        'avatar_url' => 'getAvatarUrl',
        'email' => 'getEmail',
        'username' => 'getUsername',
        'active_languages' => 'getActiveLanguages',
        'admin_menu_items' => 'getAdminMenuItems',
        'firstname' => 'getFirstname',
        'language' => 'getLanguage'
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
        $this->container['catalog_settings'] = isset($data['catalog_settings']) ? $data['catalog_settings'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['branding'] = isset($data['branding']) ? $data['branding'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['dateformat_locale'] = isset($data['dateformat_locale']) ? $data['dateformat_locale'] : null;
        $this->container['currency_settings'] = isset($data['currency_settings']) ? $data['currency_settings'] : null;
        $this->container['menu_items'] = isset($data['menu_items']) ? $data['menu_items'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user_level'] = isset($data['user_level']) ? $data['user_level'] : null;
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['active_languages'] = isset($data['active_languages']) ? $data['active_languages'] : null;
        $this->container['admin_menu_items'] = isset($data['admin_menu_items']) ? $data['admin_menu_items'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['timezone'] === null) {
            $invalid_properties[] = "'timezone' can't be null";
        }
        if ($this->container['branding'] === null) {
            $invalid_properties[] = "'branding' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalid_properties[] = "'lastname' can't be null";
        }
        if ($this->container['dateformat_locale'] === null) {
            $invalid_properties[] = "'dateformat_locale' can't be null";
        }
        if ($this->container['currency_settings'] === null) {
            $invalid_properties[] = "'currency_settings' can't be null";
        }
        if ($this->container['menu_items'] === null) {
            $invalid_properties[] = "'menu_items' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['user_level'] === null) {
            $invalid_properties[] = "'user_level' can't be null";
        }
        if ($this->container['avatar_url'] === null) {
            $invalid_properties[] = "'avatar_url' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['active_languages'] === null) {
            $invalid_properties[] = "'active_languages' can't be null";
        }
        if ($this->container['firstname'] === null) {
            $invalid_properties[] = "'firstname' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalid_properties[] = "'language' can't be null";
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

        if ($this->container['timezone'] === null) {
            return false;
        }
        if ($this->container['branding'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if ($this->container['dateformat_locale'] === null) {
            return false;
        }
        if ($this->container['currency_settings'] === null) {
            return false;
        }
        if ($this->container['menu_items'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['user_level'] === null) {
            return false;
        }
        if ($this->container['avatar_url'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['active_languages'] === null) {
            return false;
        }
        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['language'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets catalog_settings
     * @return \Swagger\Client\Model\ManageUserSessionCatalogSettings
     */
    public function getCatalogSettings()
    {
        return $this->container['catalog_settings'];
    }

    /**
     * Sets catalog_settings
     * @param \Swagger\Client\Model\ManageUserSessionCatalogSettings $catalog_settings 
     * @return $this
     */
    public function setCatalogSettings($catalog_settings)
    {
        $this->container['catalog_settings'] = $catalog_settings;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone User`s timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets branding
     * @return \Swagger\Client\Model\ManageUserSessionBranding
     */
    public function getBranding()
    {
        return $this->container['branding'];
    }

    /**
     * Sets branding
     * @param \Swagger\Client\Model\ManageUserSessionBranding $branding Branding
     * @return $this
     */
    public function setBranding($branding)
    {
        $this->container['branding'] = $branding;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname User`s last name
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets dateformat_locale
     * @return string
     */
    public function getDateformatLocale()
    {
        return $this->container['dateformat_locale'];
    }

    /**
     * Sets dateformat_locale
     * @param string $dateformat_locale User`s date format (e.g. 'en_us')
     * @return $this
     */
    public function setDateformatLocale($dateformat_locale)
    {
        $this->container['dateformat_locale'] = $dateformat_locale;

        return $this;
    }

    /**
     * Gets currency_settings
     * @return \Swagger\Client\Model\ManageUserSessionCurrencySettings
     */
    public function getCurrencySettings()
    {
        return $this->container['currency_settings'];
    }

    /**
     * Sets currency_settings
     * @param \Swagger\Client\Model\ManageUserSessionCurrencySettings $currency_settings 
     * @return $this
     */
    public function setCurrencySettings($currency_settings)
    {
        $this->container['currency_settings'] = $currency_settings;

        return $this;
    }

    /**
     * Gets menu_items
     * @return \Swagger\Client\Model\ManageUserSessionMenuItems[]
     */
    public function getMenuItems()
    {
        return $this->container['menu_items'];
    }

    /**
     * Sets menu_items
     * @param \Swagger\Client\Model\ManageUserSessionMenuItems[] $menu_items User`s available menu items
     * @return $this
     */
    public function setMenuItems($menu_items)
    {
        $this->container['menu_items'] = $menu_items;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id User's internal ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_level
     * @return string
     */
    public function getUserLevel()
    {
        return $this->container['user_level'];
    }

    /**
     * Sets user_level
     * @param string $user_level User's level (e.g 'user', 'admin', 'super_admin')
     * @return $this
     */
    public function setUserLevel($user_level)
    {
        $this->container['user_level'] = $user_level;

        return $this;
    }

    /**
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url User`s avatar/profile image
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email User`s email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets active_languages
     * @return \Swagger\Client\Model\ManageUserSessionActiveLanguages[]
     */
    public function getActiveLanguages()
    {
        return $this->container['active_languages'];
    }

    /**
     * Sets active_languages
     * @param \Swagger\Client\Model\ManageUserSessionActiveLanguages[] $active_languages Array with active languages
     * @return $this
     */
    public function setActiveLanguages($active_languages)
    {
        $this->container['active_languages'] = $active_languages;

        return $this;
    }

    /**
     * Gets admin_menu_items
     * @return \Swagger\Client\Model\ManageUserSessionAdminMenuItems
     */
    public function getAdminMenuItems()
    {
        return $this->container['admin_menu_items'];
    }

    /**
     * Sets admin_menu_items
     * @param \Swagger\Client\Model\ManageUserSessionAdminMenuItems $admin_menu_items Admin's available admin menu items
     * @return $this
     */
    public function setAdminMenuItems($admin_menu_items)
    {
        $this->container['admin_menu_items'] = $admin_menu_items;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname User`s first name
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language User`s preferred language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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

