<?php
/**
 * SkillRoleListSimulatorSelf
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
 * SkillRoleListSimulatorSelf Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRoleListSimulatorSelf implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRoleListSimulatorSelf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rating_value' => 'int',
        'rating_selection' => 'int',
        'rating_name' => 'string'
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
        'rating_value' => 'rating_value',
        'rating_selection' => 'rating_selection',
        'rating_name' => 'rating_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'rating_value' => 'setRatingValue',
        'rating_selection' => 'setRatingSelection',
        'rating_name' => 'setRatingName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'rating_value' => 'getRatingValue',
        'rating_selection' => 'getRatingSelection',
        'rating_name' => 'getRatingName'
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
        $this->container['rating_value'] = isset($data['rating_value']) ? $data['rating_value'] : null;
        $this->container['rating_selection'] = isset($data['rating_selection']) ? $data['rating_selection'] : null;
        $this->container['rating_name'] = isset($data['rating_name']) ? $data['rating_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['rating_value'] === null) {
            $invalid_properties[] = "'rating_value' can't be null";
        }
        if ($this->container['rating_selection'] === null) {
            $invalid_properties[] = "'rating_selection' can't be null";
        }
        if ($this->container['rating_name'] === null) {
            $invalid_properties[] = "'rating_name' can't be null";
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

        if ($this->container['rating_value'] === null) {
            return false;
        }
        if ($this->container['rating_selection'] === null) {
            return false;
        }
        if ($this->container['rating_name'] === null) {
            return false;
        }
        return true;
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
     * @param int $rating_value The value for assessment
     * @return $this
     */
    public function setRatingValue($rating_value)
    {
        $this->container['rating_value'] = $rating_value;

        return $this;
    }

    /**
     * Gets rating_selection
     * @return int
     */
    public function getRatingSelection()
    {
        return $this->container['rating_selection'];
    }

    /**
     * Sets rating_selection
     * @param int $rating_selection Is the rating initially selected. Options 0 OR 1
     * @return $this
     */
    public function setRatingSelection($rating_selection)
    {
        $this->container['rating_selection'] = $rating_selection;

        return $this;
    }

    /**
     * Gets rating_name
     * @return string
     */
    public function getRatingName()
    {
        return $this->container['rating_name'];
    }

    /**
     * Sets rating_name
     * @param string $rating_name The translated name of the rating
     * @return $this
     */
    public function setRatingName($rating_name)
    {
        $this->container['rating_name'] = $rating_name;

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


