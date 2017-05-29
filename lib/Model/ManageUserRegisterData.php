<?php
/**
 * ManageUserRegisterData
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
 * ManageUserRegisterData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserRegisterData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserRegisterData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'confirmation_needed' => 'bool',
        'message' => '\Swagger\Client\Model\ManageUserRegisterMessage[]',
        'success' => 'bool'
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
        'confirmation_needed' => 'confirmation_needed',
        'message' => 'message',
        'success' => 'success'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'confirmation_needed' => 'setConfirmationNeeded',
        'message' => 'setMessage',
        'success' => 'setSuccess'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'confirmation_needed' => 'getConfirmationNeeded',
        'message' => 'getMessage',
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
        $this->container['confirmation_needed'] = isset($data['confirmation_needed']) ? $data['confirmation_needed'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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

        if ($this->container['confirmation_needed'] === null) {
            $invalid_properties[] = "'confirmation_needed' can't be null";
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

        if ($this->container['confirmation_needed'] === null) {
            return false;
        }
        if ($this->container['success'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets confirmation_needed
     * @return bool
     */
    public function getConfirmationNeeded()
    {
        return $this->container['confirmation_needed'];
    }

    /**
     * Sets confirmation_needed
     * @param bool $confirmation_needed Needed to send confirmation email at self-registration
     * @return $this
     */
    public function setConfirmationNeeded($confirmation_needed)
    {
        $this->container['confirmation_needed'] = $confirmation_needed;

        return $this;
    }

    /**
     * Gets message
     * @return \Swagger\Client\Model\ManageUserRegisterMessage[]
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param \Swagger\Client\Model\ManageUserRegisterMessage[] $message Array with errors
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success Success or failure to register user
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


