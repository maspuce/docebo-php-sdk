<?php
/**
 * SkillEvaluationGetManagerEvaluationNotrated
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
 * SkillEvaluationGetManagerEvaluationNotrated Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillEvaluationGetManagerEvaluationNotrated implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillEvaluationGetManagerEvaluationNotrated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rating_id' => 'int',
        'rating_value' => 'int',
        'user_initials' => 'string',
        'user_name' => 'string',
        'user_id' => 'int'
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
        'rating_id' => 'rating_id',
        'rating_value' => 'rating_value',
        'user_initials' => 'user_initials',
        'user_name' => 'user_name',
        'user_id' => 'user_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'rating_id' => 'setRatingId',
        'rating_value' => 'setRatingValue',
        'user_initials' => 'setUserInitials',
        'user_name' => 'setUserName',
        'user_id' => 'setUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'rating_id' => 'getRatingId',
        'rating_value' => 'getRatingValue',
        'user_initials' => 'getUserInitials',
        'user_name' => 'getUserName',
        'user_id' => 'getUserId'
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
        $this->container['rating_id'] = isset($data['rating_id']) ? $data['rating_id'] : null;
        $this->container['rating_value'] = isset($data['rating_value']) ? $data['rating_value'] : null;
        $this->container['user_initials'] = isset($data['user_initials']) ? $data['user_initials'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['rating_id'] === null) {
            $invalid_properties[] = "'rating_id' can't be null";
        }
        if ($this->container['rating_value'] === null) {
            $invalid_properties[] = "'rating_value' can't be null";
        }
        if ($this->container['user_initials'] === null) {
            $invalid_properties[] = "'user_initials' can't be null";
        }
        if ($this->container['user_name'] === null) {
            $invalid_properties[] = "'user_name' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
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

        if ($this->container['rating_id'] === null) {
            return false;
        }
        if ($this->container['rating_value'] === null) {
            return false;
        }
        if ($this->container['user_initials'] === null) {
            return false;
        }
        if ($this->container['user_name'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets rating_id
     * @return int
     */
    public function getRatingId()
    {
        return $this->container['rating_id'];
    }

    /**
     * Sets rating_id
     * @param int $rating_id The assessed rating id
     * @return $this
     */
    public function setRatingId($rating_id)
    {
        $this->container['rating_id'] = $rating_id;

        return $this;
    }

    /**
     * Gets rating_value
     * @return int
     */
    public function getRatingValue()
    {
        return $this->container['rating_value'];
    }

    /**
     * Sets rating_value
     * @param int $rating_value The assessed rating value of the user
     * @return $this
     */
    public function setRatingValue($rating_value)
    {
        $this->container['rating_value'] = $rating_value;

        return $this;
    }

    /**
     * Gets user_initials
     * @return string
     */
    public function getUserInitials()
    {
        return $this->container['user_initials'];
    }

    /**
     * Sets user_initials
     * @param string $user_initials The Initials of the user
     * @return $this
     */
    public function setUserInitials($user_initials)
    {
        $this->container['user_initials'] = $user_initials;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name The names of the user
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The ID of the user
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


