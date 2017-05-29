<?php
/**
 * SkillRatingtablesDeleteMultiData
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
 * SkillRatingtablesDeleteMultiData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRatingtablesDeleteMultiData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRatingtablesDelete-multiData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_messages' => 'string[]',
        'not_deleted' => 'int[]',
        'deleted' => 'int[]'
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
        'error_messages' => 'error_messages',
        'not_deleted' => 'not_deleted',
        'deleted' => 'deleted'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'error_messages' => 'setErrorMessages',
        'not_deleted' => 'setNotDeleted',
        'deleted' => 'setDeleted'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'error_messages' => 'getErrorMessages',
        'not_deleted' => 'getNotDeleted',
        'deleted' => 'getDeleted'
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
        $this->container['error_messages'] = isset($data['error_messages']) ? $data['error_messages'] : null;
        $this->container['not_deleted'] = isset($data['not_deleted']) ? $data['not_deleted'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['error_messages'] === null) {
            $invalid_properties[] = "'error_messages' can't be null";
        }
        if ($this->container['not_deleted'] === null) {
            $invalid_properties[] = "'not_deleted' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalid_properties[] = "'deleted' can't be null";
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

        if ($this->container['error_messages'] === null) {
            return false;
        }
        if ($this->container['not_deleted'] === null) {
            return false;
        }
        if ($this->container['deleted'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets error_messages
     * @return string[]
     */
    public function getErrorMessages()
    {
        return $this->container['error_messages'];
    }

    /**
     * Sets error_messages
     * @param string[] $error_messages Errors during process
     * @return $this
     */
    public function setErrorMessages($error_messages)
    {
        $this->container['error_messages'] = $error_messages;

        return $this;
    }

    /**
     * Gets not_deleted
     * @return int[]
     */
    public function getNotDeleted()
    {
        return $this->container['not_deleted'];
    }

    /**
     * Sets not_deleted
     * @param int[] $not_deleted List with not deleted items
     * @return $this
     */
    public function setNotDeleted($not_deleted)
    {
        $this->container['not_deleted'] = $not_deleted;

        return $this;
    }

    /**
     * Gets deleted
     * @return int[]
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     * @param int[] $deleted List with successfully deleted items
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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


