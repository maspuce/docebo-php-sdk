<?php
/**
 * ManageOrgchartAssignUsersResponse
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
 * ManageOrgchartAssignUsersResponse Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageOrgchartAssignUsersResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageOrgchartAssignUsersResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'already_assigned_users' => 'int[]',
        'users_not_exist' => 'int[]',
        'errors' => 'int[]',
        'success' => 'int[]'
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
        'already_assigned_users' => 'already_assigned_users',
        'users_not_exist' => 'users_not_exist',
        'errors' => 'errors',
        'success' => 'success'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'already_assigned_users' => 'setAlreadyAssignedUsers',
        'users_not_exist' => 'setUsersNotExist',
        'errors' => 'setErrors',
        'success' => 'setSuccess'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'already_assigned_users' => 'getAlreadyAssignedUsers',
        'users_not_exist' => 'getUsersNotExist',
        'errors' => 'getErrors',
        'success' => 'getSuccess'
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
        $this->container['already_assigned_users'] = isset($data['already_assigned_users']) ? $data['already_assigned_users'] : null;
        $this->container['users_not_exist'] = isset($data['users_not_exist']) ? $data['users_not_exist'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['already_assigned_users'] === null) {
            $invalid_properties[] = "'already_assigned_users' can't be null";
        }
        if ($this->container['users_not_exist'] === null) {
            $invalid_properties[] = "'users_not_exist' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalid_properties[] = "'errors' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalid_properties[] = "'success' can't be null";
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

        if ($this->container['already_assigned_users'] === null) {
            return false;
        }
        if ($this->container['users_not_exist'] === null) {
            return false;
        }
        if ($this->container['errors'] === null) {
            return false;
        }
        if ($this->container['success'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets already_assigned_users
     * @return int[]
     */
    public function getAlreadyAssignedUsers()
    {
        return $this->container['already_assigned_users'];
    }

    /**
     * Sets already_assigned_users
     * @param int[] $already_assigned_users Array of users ids who already assigned
     * @return $this
     */
    public function setAlreadyAssignedUsers($already_assigned_users)
    {
        $this->container['already_assigned_users'] = $already_assigned_users;

        return $this;
    }

    /**
     * Gets users_not_exist
     * @return int[]
     */
    public function getUsersNotExist()
    {
        return $this->container['users_not_exist'];
    }

    /**
     * Sets users_not_exist
     * @param int[] $users_not_exist Array of users ids who not exist
     * @return $this
     */
    public function setUsersNotExist($users_not_exist)
    {
        $this->container['users_not_exist'] = $users_not_exist;

        return $this;
    }

    /**
     * Gets errors
     * @return int[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param int[] $errors Array of users ids fail assign
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets success
     * @return int[]
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param int[] $success Array of users ids successfully assigned
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

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


