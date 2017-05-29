<?php
/**
 * SkillReportsBranchesRolesReportItems
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
 * SkillReportsBranchesRolesReportItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillReportsBranchesRolesReportItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillReportsBranchesRolesReportItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number_of_users' => 'int',
        'role_id' => 'int',
        'user_list_link' => 'string',
        'role_name' => 'string'
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
        'number_of_users' => 'number_of_users',
        'role_id' => 'role_id',
        'user_list_link' => 'user_list_link',
        'role_name' => 'role_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number_of_users' => 'setNumberOfUsers',
        'role_id' => 'setRoleId',
        'user_list_link' => 'setUserListLink',
        'role_name' => 'setRoleName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number_of_users' => 'getNumberOfUsers',
        'role_id' => 'getRoleId',
        'user_list_link' => 'getUserListLink',
        'role_name' => 'getRoleName'
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
        $this->container['number_of_users'] = isset($data['number_of_users']) ? $data['number_of_users'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['user_list_link'] = isset($data['user_list_link']) ? $data['user_list_link'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['number_of_users'] === null) {
            $invalid_properties[] = "'number_of_users' can't be null";
        }
        if ($this->container['role_id'] === null) {
            $invalid_properties[] = "'role_id' can't be null";
        }
        if ($this->container['user_list_link'] === null) {
            $invalid_properties[] = "'user_list_link' can't be null";
        }
        if ($this->container['role_name'] === null) {
            $invalid_properties[] = "'role_name' can't be null";
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

        if ($this->container['number_of_users'] === null) {
            return false;
        }
        if ($this->container['role_id'] === null) {
            return false;
        }
        if ($this->container['user_list_link'] === null) {
            return false;
        }
        if ($this->container['role_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets number_of_users
     * @return int
     */
    public function getNumberOfUsers()
    {
        return $this->container['number_of_users'];
    }

    /**
     * Sets number_of_users
     * @param int $number_of_users Total number of users
     * @return $this
     */
    public function setNumberOfUsers($number_of_users)
    {
        $this->container['number_of_users'] = $number_of_users;

        return $this;
    }

    /**
     * Gets role_id
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param int $role_id ID of the role
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets user_list_link
     * @return string
     */
    public function getUserListLink()
    {
        return $this->container['user_list_link'];
    }

    /**
     * Sets user_list_link
     * @param string $user_list_link Link to the detailed list of users
     * @return $this
     */
    public function setUserListLink($user_list_link)
    {
        $this->container['user_list_link'] = $user_list_link;

        return $this;
    }

    /**
     * Gets role_name
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     * @param string $role_name Role title in the selected language
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

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


