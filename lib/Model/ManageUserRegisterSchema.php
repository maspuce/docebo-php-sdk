<?php
/**
 * ManageUserRegisterSchema
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
 * ManageUserRegisterSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserRegisterSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserRegisterSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'privacy' => 'string',
        'email' => 'string',
        'password' => 'string',
        'lastname' => 'string',
        'user_fields' => '\Swagger\Client\Model\ManageUserRegisterUserFields[]',
        'level' => 'string',
        'userid' => 'string',
        'branch_code' => 'string',
        'firstname' => 'string',
        'language' => 'string'
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
        'privacy' => 'privacy',
        'email' => 'email',
        'password' => 'password',
        'lastname' => 'lastname',
        'user_fields' => 'user_fields',
        'level' => 'level',
        'userid' => 'userid',
        'branch_code' => 'branch_code',
        'firstname' => 'firstname',
        'language' => 'language'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'privacy' => 'setPrivacy',
        'email' => 'setEmail',
        'password' => 'setPassword',
        'lastname' => 'setLastname',
        'user_fields' => 'setUserFields',
        'level' => 'setLevel',
        'userid' => 'setUserid',
        'branch_code' => 'setBranchCode',
        'firstname' => 'setFirstname',
        'language' => 'setLanguage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'privacy' => 'getPrivacy',
        'email' => 'getEmail',
        'password' => 'getPassword',
        'lastname' => 'getLastname',
        'user_fields' => 'getUserFields',
        'level' => 'getLevel',
        'userid' => 'getUserid',
        'branch_code' => 'getBranchCode',
        'firstname' => 'getFirstname',
        'language' => 'getLanguage'
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
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['user_fields'] = isset($data['user_fields']) ? $data['user_fields'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['password'] === null) {
            $invalid_properties[] = "'password' can't be null";
        }
        if ($this->container['user_fields'] === null) {
            $invalid_properties[] = "'user_fields' can't be null";
        }
        if ($this->container['userid'] === null) {
            $invalid_properties[] = "'userid' can't be null";
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

        if ($this->container['password'] === null) {
            return false;
        }
        if ($this->container['user_fields'] === null) {
            return false;
        }
        if ($this->container['userid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets privacy
     * @return string
     */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
     * Sets privacy
     * @param string $privacy Required ONLY if checked &quot;Privacy policy MUST be accepted&quot; in &quot;Advanced Settings&quot;
     * @return $this
     */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;

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
     * @param string $email User's email. If the user calling the API is a super admin, the email is optional. In all other cases it's required.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets lastname
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     * @param string $lastname Required ONLY if checked &quot;First Name and Last Name are required in order to register&quot; in &quot;Advanced Settings&quot;
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets user_fields
     * @return \Swagger\Client\Model\ManageUserRegisterUserFields[]
     */
    public function getUserFields()
    {
        return $this->container['user_fields'];
    }

    /**
     * Sets user_fields
     * @param \Swagger\Client\Model\ManageUserRegisterUserFields[] $user_fields Success or failure
     * @return $this
     */
    public function setUserFields($user_fields)
    {
        $this->container['user_fields'] = $user_fields;

        return $this;
    }

    /**
     * Gets level
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param string $level User level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets userid
     * @return string
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     * @param string $userid the Username to register
     * @return $this
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets branch_code
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     * @param string $branch_code Org chart branch code or &quot;branch-course&quot; code combination (depending on the setting in Advanced settings)
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets firstname
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     * @param string $firstname Required ONLY if checked &quot;First Name and Last Name are required in order to register&quot; in &quot;Advanced Settings&quot;
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

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
     * @param string $language If one is not provided, use the platform default language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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

