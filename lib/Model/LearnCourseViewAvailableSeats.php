<?php
/**
 * LearnCourseViewAvailableSeats
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
 * LearnCourseViewAvailableSeats Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCourseViewAvailableSeats implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCourseViewAvailableSeats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'social_settings' => '\Swagger\Client\Model\LearnCourseViewSocialSettings',
        'tree' => '\Swagger\Client\Model\LearnCourseViewTree[]',
        'allow_overbooking' => 'int',
        'sessions' => '\Swagger\Client\Model\LearnCourseViewSessions[]'
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
        'social_settings' => 'social_settings',
        'tree' => 'tree',
        'allow_overbooking' => 'allow_overbooking',
        'sessions' => 'sessions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'social_settings' => 'setSocialSettings',
        'tree' => 'setTree',
        'allow_overbooking' => 'setAllowOverbooking',
        'sessions' => 'setSessions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'social_settings' => 'getSocialSettings',
        'tree' => 'getTree',
        'allow_overbooking' => 'getAllowOverbooking',
        'sessions' => 'getSessions'
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
        $this->container['social_settings'] = isset($data['social_settings']) ? $data['social_settings'] : null;
        $this->container['tree'] = isset($data['tree']) ? $data['tree'] : null;
        $this->container['allow_overbooking'] = isset($data['allow_overbooking']) ? $data['allow_overbooking'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['tree'] === null) {
            $invalid_properties[] = "'tree' can't be null";
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

        if ($this->container['tree'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets social_settings
     * @return \Swagger\Client\Model\LearnCourseViewSocialSettings
     */
    public function getSocialSettings()
    {
        return $this->container['social_settings'];
    }

    /**
     * Sets social_settings
     * @param \Swagger\Client\Model\LearnCourseViewSocialSettings $social_settings An optional object containing settings for sharing courses on social networks
     * @return $this
     */
    public function setSocialSettings($social_settings)
    {
        $this->container['social_settings'] = $social_settings;

        return $this;
    }

    /**
     * Gets tree
     * @return \Swagger\Client\Model\LearnCourseViewTree[]
     */
    public function getTree()
    {
        return $this->container['tree'];
    }

    /**
     * Sets tree
     * @param \Swagger\Client\Model\LearnCourseViewTree[] $tree Array of learning objects, folders and their children inside the course, in a tree like structure
     * @return $this
     */
    public function setTree($tree)
    {
        $this->container['tree'] = $tree;

        return $this;
    }

    /**
     * Gets allow_overbooking
     * @return int
     */
    public function getAllowOverbooking()
    {
        return $this->container['allow_overbooking'];
    }

    /**
     * Sets allow_overbooking
     * @param int $allow_overbooking Flag, which points, if the course overbooking is allowed or not. Possible values 1 and 0
     * @return $this
     */
    public function setAllowOverbooking($allow_overbooking)
    {
        $this->container['allow_overbooking'] = $allow_overbooking;

        return $this;
    }

    /**
     * Gets sessions
     * @return \Swagger\Client\Model\LearnCourseViewSessions[]
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     * @param \Swagger\Client\Model\LearnCourseViewSessions[] $sessions An array with session objects
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

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


