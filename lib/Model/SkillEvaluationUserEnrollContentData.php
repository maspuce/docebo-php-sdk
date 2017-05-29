<?php
/**
 * SkillEvaluationUserEnrollContentData
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
 * SkillEvaluationUserEnrollContentData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillEvaluationUserEnrollContentData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillEvaluationUserEnrollContentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enrolled' => '\Swagger\Client\Model\SkillEvaluationUserEnrollContentEnrolled[]',
        'not_enrolled' => 'int[]'
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
        'enrolled' => 'enrolled',
        'not_enrolled' => 'not_enrolled'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'enrolled' => 'setEnrolled',
        'not_enrolled' => 'setNotEnrolled'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'enrolled' => 'getEnrolled',
        'not_enrolled' => 'getNotEnrolled'
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
        $this->container['enrolled'] = isset($data['enrolled']) ? $data['enrolled'] : null;
        $this->container['not_enrolled'] = isset($data['not_enrolled']) ? $data['not_enrolled'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['enrolled'] === null) {
            $invalid_properties[] = "'enrolled' can't be null";
        }
        if ($this->container['not_enrolled'] === null) {
            $invalid_properties[] = "'not_enrolled' can't be null";
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

        if ($this->container['enrolled'] === null) {
            return false;
        }
        if ($this->container['not_enrolled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets enrolled
     * @return \Swagger\Client\Model\SkillEvaluationUserEnrollContentEnrolled[]
     */
    public function getEnrolled()
    {
        return $this->container['enrolled'];
    }

    /**
     * Sets enrolled
     * @param \Swagger\Client\Model\SkillEvaluationUserEnrollContentEnrolled[] $enrolled Items to which user was enrolled
     * @return $this
     */
    public function setEnrolled($enrolled)
    {
        $this->container['enrolled'] = $enrolled;

        return $this;
    }

    /**
     * Gets not_enrolled
     * @return int[]
     */
    public function getNotEnrolled()
    {
        return $this->container['not_enrolled'];
    }

    /**
     * Sets not_enrolled
     * @param int[] $not_enrolled Items to which user was not enrolled
     * @return $this
     */
    public function setNotEnrolled($not_enrolled)
    {
        $this->container['not_enrolled'] = $not_enrolled;

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


