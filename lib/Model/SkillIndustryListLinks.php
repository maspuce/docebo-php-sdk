<?php
/**
 * SkillIndustryListLinks
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
 * SkillIndustryListLinks Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillIndustryListLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillIndustryListLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first' => 'string',
        'last' => 'string',
        'self' => 'int',
        'goto' => 'string'
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
        'first' => 'first',
        'last' => 'last',
        'self' => 'self',
        'goto' => 'goto'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first' => 'setFirst',
        'last' => 'setLast',
        'self' => 'setSelf',
        'goto' => 'setGoto'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first' => 'getFirst',
        'last' => 'getLast',
        'self' => 'getSelf',
        'goto' => 'getGoto'
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
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['goto'] = isset($data['goto']) ? $data['goto'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['first'] === null) {
            $invalid_properties[] = "'first' can't be null";
        }
        if ($this->container['last'] === null) {
            $invalid_properties[] = "'last' can't be null";
        }
        if ($this->container['self'] === null) {
            $invalid_properties[] = "'self' can't be null";
        }
        if ($this->container['goto'] === null) {
            $invalid_properties[] = "'goto' can't be null";
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

        if ($this->container['first'] === null) {
            return false;
        }
        if ($this->container['last'] === null) {
            return false;
        }
        if ($this->container['self'] === null) {
            return false;
        }
        if ($this->container['goto'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets first
     * @return string
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     * @param string $first Link to the first page
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     * @return string
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     * @param string $last Link to the last page
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets self
     * @return int
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     * @param int $self Link to the current page
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets goto
     * @return string
     */
    public function getGoto()
    {
        return $this->container['goto'];
    }

    /**
     * Sets goto
     * @param string $goto Go to a specified page number
     * @return $this
     */
    public function setGoto($goto)
    {
        $this->container['goto'] = $goto;

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


