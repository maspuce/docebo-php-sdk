<?php
/**
 * SkillRoleAddUserRoleData
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
 * SkillRoleAddUserRoleData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRoleAddUserRoleData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRoleAddUserRoleData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assigned_ids' => 'int[]',
        'errors' => '\Swagger\Client\Model\SkillRoleAddUserRoleErrors[]',
        'assigned_count' => 'int'
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
        'assigned_ids' => 'assigned_ids',
        'errors' => 'errors',
        'assigned_count' => 'assigned_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'assigned_ids' => 'setAssignedIds',
        'errors' => 'setErrors',
        'assigned_count' => 'setAssignedCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'assigned_ids' => 'getAssignedIds',
        'errors' => 'getErrors',
        'assigned_count' => 'getAssignedCount'
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
        $this->container['assigned_ids'] = isset($data['assigned_ids']) ? $data['assigned_ids'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['assigned_count'] = isset($data['assigned_count']) ? $data['assigned_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['assigned_ids'] === null) {
            $invalid_properties[] = "'assigned_ids' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalid_properties[] = "'errors' can't be null";
        }
        if ($this->container['assigned_count'] === null) {
            $invalid_properties[] = "'assigned_count' can't be null";
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

        if ($this->container['assigned_ids'] === null) {
            return false;
        }
        if ($this->container['errors'] === null) {
            return false;
        }
        if ($this->container['assigned_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets assigned_ids
     * @return int[]
     */
    public function getAssignedIds()
    {
        return $this->container['assigned_ids'];
    }

    /**
     * Sets assigned_ids
     * @param int[] $assigned_ids List with successfully assigned items
     * @return $this
     */
    public function setAssignedIds($assigned_ids)
    {
        $this->container['assigned_ids'] = $assigned_ids;

        return $this;
    }

    /**
     * Gets errors
     * @return \Swagger\Client\Model\SkillRoleAddUserRoleErrors[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \Swagger\Client\Model\SkillRoleAddUserRoleErrors[] $errors Errors during process
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets assigned_count
     * @return int
     */
    public function getAssignedCount()
    {
        return $this->container['assigned_count'];
    }

    /**
     * Sets assigned_count
     * @param int $assigned_count Count of successfully assigned users to role
     * @return $this
     */
    public function setAssignedCount($assigned_count)
    {
        $this->container['assigned_count'] = $assigned_count;

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


