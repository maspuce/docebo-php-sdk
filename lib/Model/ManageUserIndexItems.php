<?php
/**
 * ManageUserIndexItems
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
 * ManageUserIndexItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserIndexItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserIndexItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_validation_status' => 'int',
        'confirmed' => 'string',
        'last_access_date' => '\DateTime',
        'actions' => '\Swagger\Client\Model\ManageUserIndexActions[]',
        'email' => 'string',
        'avatar' => 'string',
        'manager_last_name' => 'string',
        'expiration_date' => '\DateTime',
        'role_id' => 'int',
        'status' => 'int',
        'level' => 'int',
        'manager_first_name' => 'string',
        'request_on' => '\DateTime',
        'create_by_admin' => '\DateTime',
        'user_id' => 'int',
        'last_name' => 'string',
        'field_1111' => 'string',
        'username' => 'string',
        'firs_tname' => 'string',
        'role_title' => 'string',
        'language' => 'string',
        'creation_date' => '\DateTime'
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
        'email_validation_status' => 'email_validation_status',
        'confirmed' => 'confirmed',
        'last_access_date' => 'last_access_date',
        'actions' => 'actions',
        'email' => 'email',
        'avatar' => 'avatar',
        'manager_last_name' => 'manager_last_name',
        'expiration_date' => 'expiration_date',
        'role_id' => 'role_id',
        'status' => 'status',
        'level' => 'level',
        'manager_first_name' => 'manager_first_name',
        'request_on' => 'request_on',
        'create_by_admin' => 'create_by_admin',
        'user_id' => 'user_id',
        'last_name' => 'last_name',
        'field_1111' => 'field_1111',
        'username' => 'username',
        'firs_tname' => 'firs_tname',
        'role_title' => 'role_title',
        'language' => 'language',
        'creation_date' => 'creation_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email_validation_status' => 'setEmailValidationStatus',
        'confirmed' => 'setConfirmed',
        'last_access_date' => 'setLastAccessDate',
        'actions' => 'setActions',
        'email' => 'setEmail',
        'avatar' => 'setAvatar',
        'manager_last_name' => 'setManagerLastName',
        'expiration_date' => 'setExpirationDate',
        'role_id' => 'setRoleId',
        'status' => 'setStatus',
        'level' => 'setLevel',
        'manager_first_name' => 'setManagerFirstName',
        'request_on' => 'setRequestOn',
        'create_by_admin' => 'setCreateByAdmin',
        'user_id' => 'setUserId',
        'last_name' => 'setLastName',
        'field_1111' => 'setField1111',
        'username' => 'setUsername',
        'firs_tname' => 'setFirsTname',
        'role_title' => 'setRoleTitle',
        'language' => 'setLanguage',
        'creation_date' => 'setCreationDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email_validation_status' => 'getEmailValidationStatus',
        'confirmed' => 'getConfirmed',
        'last_access_date' => 'getLastAccessDate',
        'actions' => 'getActions',
        'email' => 'getEmail',
        'avatar' => 'getAvatar',
        'manager_last_name' => 'getManagerLastName',
        'expiration_date' => 'getExpirationDate',
        'role_id' => 'getRoleId',
        'status' => 'getStatus',
        'level' => 'getLevel',
        'manager_first_name' => 'getManagerFirstName',
        'request_on' => 'getRequestOn',
        'create_by_admin' => 'getCreateByAdmin',
        'user_id' => 'getUserId',
        'last_name' => 'getLastName',
        'field_1111' => 'getField1111',
        'username' => 'getUsername',
        'firs_tname' => 'getFirsTname',
        'role_title' => 'getRoleTitle',
        'language' => 'getLanguage',
        'creation_date' => 'getCreationDate'
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
        $this->container['email_validation_status'] = isset($data['email_validation_status']) ? $data['email_validation_status'] : null;
        $this->container['confirmed'] = isset($data['confirmed']) ? $data['confirmed'] : null;
        $this->container['last_access_date'] = isset($data['last_access_date']) ? $data['last_access_date'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['avatar'] = isset($data['avatar']) ? $data['avatar'] : null;
        $this->container['manager_last_name'] = isset($data['manager_last_name']) ? $data['manager_last_name'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['manager_first_name'] = isset($data['manager_first_name']) ? $data['manager_first_name'] : null;
        $this->container['request_on'] = isset($data['request_on']) ? $data['request_on'] : null;
        $this->container['create_by_admin'] = isset($data['create_by_admin']) ? $data['create_by_admin'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['field_1111'] = isset($data['field_1111']) ? $data['field_1111'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['firs_tname'] = isset($data['firs_tname']) ? $data['firs_tname'] : null;
        $this->container['role_title'] = isset($data['role_title']) ? $data['role_title'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['avatar'] === null) {
            $invalid_properties[] = "'avatar' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        if ($this->container['field_1111'] === null) {
            $invalid_properties[] = "'field_1111' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['firs_tname'] === null) {
            $invalid_properties[] = "'firs_tname' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalid_properties[] = "'language' can't be null";
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

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['avatar'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['field_1111'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['firs_tname'] === null) {
            return false;
        }
        if ($this->container['language'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email_validation_status
     * @return int
     */
    public function getEmailValidationStatus()
    {
        return $this->container['email_validation_status'];
    }

    /**
     * Sets email_validation_status
     * @param int $email_validation_status Email validation status of an user. It is available only for NOT pending users
     * @return $this
     */
    public function setEmailValidationStatus($email_validation_status)
    {
        $this->container['email_validation_status'] = $email_validation_status;

        return $this;
    }

    /**
     * Gets confirmed
     * @return string
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /**
     * Sets confirmed
     * @param string $confirmed Is user confirmed. It is available only for pending users
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->container['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Gets last_access_date
     * @return \DateTime
     */
    public function getLastAccessDate()
    {
        return $this->container['last_access_date'];
    }

    /**
     * Sets last_access_date
     * @param \DateTime $last_access_date Last access date of the user. It is available only for NOT pending users
     * @return $this
     */
    public function setLastAccessDate($last_access_date)
    {
        $this->container['last_access_date'] = $last_access_date;

        return $this;
    }

    /**
     * Gets actions
     * @return \Swagger\Client\Model\ManageUserIndexActions[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param \Swagger\Client\Model\ManageUserIndexActions[] $actions List of actions: edit|delete
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email of the user
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets avatar
     * @return string
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     * @param string $avatar Avatar of the user
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->container['avatar'] = $avatar;

        return $this;
    }

    /**
     * Gets manager_last_name
     * @return string
     */
    public function getManagerLastName()
    {
        return $this->container['manager_last_name'];
    }

    /**
     * Sets manager_last_name
     * @param string $manager_last_name Manager last name. It is available only for NOT pending users
     * @return $this
     */
    public function setManagerLastName($manager_last_name)
    {
        $this->container['manager_last_name'] = $manager_last_name;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param \DateTime $expiration_date Expiration date of an user. It is available only for NOT pending users
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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
     * @param int $role_id Role ID. It is available only for NOT pending users
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status User status. Options: 0 - suspended OR 1 - unsuspended. It is available only for NOT pending users
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level Level of an user. It is available only for NOT pending users
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets manager_first_name
     * @return string
     */
    public function getManagerFirstName()
    {
        return $this->container['manager_first_name'];
    }

    /**
     * Sets manager_first_name
     * @param string $manager_first_name Manager first name. It is available only for NOT pending users
     * @return $this
     */
    public function setManagerFirstName($manager_first_name)
    {
        $this->container['manager_first_name'] = $manager_first_name;

        return $this;
    }

    /**
     * Gets request_on
     * @return \DateTime
     */
    public function getRequestOn()
    {
        return $this->container['request_on'];
    }

    /**
     * Sets request_on
     * @param \DateTime $request_on Date of user request. It is available only for pending users
     * @return $this
     */
    public function setRequestOn($request_on)
    {
        $this->container['request_on'] = $request_on;

        return $this;
    }

    /**
     * Gets create_by_admin
     * @return \DateTime
     */
    public function getCreateByAdmin()
    {
        return $this->container['create_by_admin'];
    }

    /**
     * Sets create_by_admin
     * @param \DateTime $create_by_admin Created by admin. Options: 0 - false, 1 - true. It is available only for pending users
     * @return $this
     */
    public function setCreateByAdmin($create_by_admin)
    {
        $this->container['create_by_admin'] = $create_by_admin;

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
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name of the user
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets field_1111
     * @return string
     */
    public function getField1111()
    {
        return $this->container['field_1111'];
    }

    /**
     * Sets field_1111
     * @param string $field_1111 Aditional field value. In field_1111, &quot;1111&quot; is field ID. There are multiple additional fields created using this pattern
     * @return $this
     */
    public function setField1111($field_1111)
    {
        $this->container['field_1111'] = $field_1111;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username Username of the user
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets firs_tname
     * @return string
     */
    public function getFirsTname()
    {
        return $this->container['firs_tname'];
    }

    /**
     * Sets firs_tname
     * @param string $firs_tname First name of the user
     * @return $this
     */
    public function setFirsTname($firs_tname)
    {
        $this->container['firs_tname'] = $firs_tname;

        return $this;
    }

    /**
     * Gets role_title
     * @return string
     */
    public function getRoleTitle()
    {
        return $this->container['role_title'];
    }

    /**
     * Sets role_title
     * @param string $role_title Role title. It is available only for NOT pending users
     * @return $this
     */
    public function setRoleTitle($role_title)
    {
        $this->container['role_title'] = $role_title;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language User UI language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets creation_date
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     * @param \DateTime $creation_date Creation date of the user. It is available only for NOT pending users
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

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


