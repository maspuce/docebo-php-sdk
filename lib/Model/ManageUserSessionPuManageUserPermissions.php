<?php
/**
 * ManageUserSessionPuManageUserPermissions
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
 * ManageUserSessionPuManageUserPermissions Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserSessionPuManageUserPermissions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserSessionPuManageUserPermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_update' => 'bool',
        'can_delete' => 'bool',
        'can_create' => 'bool',
        'can_view' => 'bool'
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
        'can_update' => 'can_update',
        'can_delete' => 'can_delete',
        'can_create' => 'can_create',
        'can_view' => 'can_view'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'can_update' => 'setCanUpdate',
        'can_delete' => 'setCanDelete',
        'can_create' => 'setCanCreate',
        'can_view' => 'setCanView'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'can_update' => 'getCanUpdate',
        'can_delete' => 'getCanDelete',
        'can_create' => 'getCanCreate',
        'can_view' => 'getCanView'
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
        $this->container['can_update'] = isset($data['can_update']) ? $data['can_update'] : null;
        $this->container['can_delete'] = isset($data['can_delete']) ? $data['can_delete'] : null;
        $this->container['can_create'] = isset($data['can_create']) ? $data['can_create'] : null;
        $this->container['can_view'] = isset($data['can_view']) ? $data['can_view'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['can_update'] === null) {
            $invalid_properties[] = "'can_update' can't be null";
        }
        if ($this->container['can_delete'] === null) {
            $invalid_properties[] = "'can_delete' can't be null";
        }
        if ($this->container['can_create'] === null) {
            $invalid_properties[] = "'can_create' can't be null";
        }
        if ($this->container['can_view'] === null) {
            $invalid_properties[] = "'can_view' can't be null";
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

        if ($this->container['can_update'] === null) {
            return false;
        }
        if ($this->container['can_delete'] === null) {
            return false;
        }
        if ($this->container['can_create'] === null) {
            return false;
        }
        if ($this->container['can_view'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets can_update
     * @return bool
     */
    public function getCanUpdate()
    {
        return $this->container['can_update'];
    }

    /**
     * Sets can_update
     * @param bool $can_update 
     * @return $this
     */
    public function setCanUpdate($can_update)
    {
        $this->container['can_update'] = $can_update;

        return $this;
    }

    /**
     * Gets can_delete
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->container['can_delete'];
    }

    /**
     * Sets can_delete
     * @param bool $can_delete 
     * @return $this
     */
    public function setCanDelete($can_delete)
    {
        $this->container['can_delete'] = $can_delete;

        return $this;
    }

    /**
     * Gets can_create
     * @return bool
     */
    public function getCanCreate()
    {
        return $this->container['can_create'];
    }

    /**
     * Sets can_create
     * @param bool $can_create 
     * @return $this
     */
    public function setCanCreate($can_create)
    {
        $this->container['can_create'] = $can_create;

        return $this;
    }

    /**
     * Gets can_view
     * @return bool
     */
    public function getCanView()
    {
        return $this->container['can_view'];
    }

    /**
     * Sets can_view
     * @param bool $can_view 
     * @return $this
     */
    public function setCanView($can_view)
    {
        $this->container['can_view'] = $can_view;

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

