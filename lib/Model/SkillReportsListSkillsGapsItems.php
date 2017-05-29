<?php
/**
 * SkillReportsListSkillsGapsItems
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
 * SkillReportsListSkillsGapsItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillReportsListSkillsGapsItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillReportsListSkillsGapsItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gaps' => 'int',
        'skill_name' => 'string',
        'skill_id' => 'int',
        'skill_description' => 'string',
        'status' => 'string'
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
        'gaps' => 'gaps',
        'skill_name' => 'skill_name',
        'skill_id' => 'skill_id',
        'skill_description' => 'skill_description',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'gaps' => 'setGaps',
        'skill_name' => 'setSkillName',
        'skill_id' => 'setSkillId',
        'skill_description' => 'setSkillDescription',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'gaps' => 'getGaps',
        'skill_name' => 'getSkillName',
        'skill_id' => 'getSkillId',
        'skill_description' => 'getSkillDescription',
        'status' => 'getStatus'
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
        $this->container['gaps'] = isset($data['gaps']) ? $data['gaps'] : null;
        $this->container['skill_name'] = isset($data['skill_name']) ? $data['skill_name'] : null;
        $this->container['skill_id'] = isset($data['skill_id']) ? $data['skill_id'] : null;
        $this->container['skill_description'] = isset($data['skill_description']) ? $data['skill_description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['gaps'] === null) {
            $invalid_properties[] = "'gaps' can't be null";
        }
        if ($this->container['skill_name'] === null) {
            $invalid_properties[] = "'skill_name' can't be null";
        }
        if ($this->container['skill_id'] === null) {
            $invalid_properties[] = "'skill_id' can't be null";
        }
        if ($this->container['skill_description'] === null) {
            $invalid_properties[] = "'skill_description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
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

        if ($this->container['gaps'] === null) {
            return false;
        }
        if ($this->container['skill_name'] === null) {
            return false;
        }
        if ($this->container['skill_id'] === null) {
            return false;
        }
        if ($this->container['skill_description'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets gaps
     * @return int
     */
    public function getGaps()
    {
        return $this->container['gaps'];
    }

    /**
     * Sets gaps
     * @param int $gaps The skill average gap
     * @return $this
     */
    public function setGaps($gaps)
    {
        $this->container['gaps'] = $gaps;

        return $this;
    }

    /**
     * Gets skill_name
     * @return string
     */
    public function getSkillName()
    {
        return $this->container['skill_name'];
    }

    /**
     * Sets skill_name
     * @param string $skill_name Translated skill name
     * @return $this
     */
    public function setSkillName($skill_name)
    {
        $this->container['skill_name'] = $skill_name;

        return $this;
    }

    /**
     * Gets skill_id
     * @return int
     */
    public function getSkillId()
    {
        return $this->container['skill_id'];
    }

    /**
     * Sets skill_id
     * @param int $skill_id The skill ID
     * @return $this
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

        return $this;
    }

    /**
     * Gets skill_description
     * @return string
     */
    public function getSkillDescription()
    {
        return $this->container['skill_description'];
    }

    /**
     * Sets skill_description
     * @param string $skill_description Translated skill description
     * @return $this
     */
    public function setSkillDescription($skill_description)
    {
        $this->container['skill_description'] = $skill_description;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The skill status based on gaps. Low &lt; 10 Medium &gt; 20 Hight
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

