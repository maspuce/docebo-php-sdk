<?php
/**
 * ManageUserListEnrollmentsDestination
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
 * ManageUserListEnrollmentsDestination Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageUserListEnrollmentsDestination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageUserListEnrollmentsDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'selected' => 'bool',
        'status' => 'int',
        'status_label' => 'string',
        'date_complete' => 'string',
        'id' => 'int',
        'score' => 'float'
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
        'selected' => 'selected',
        'status' => 'status',
        'status_label' => 'status_label',
        'date_complete' => 'date_complete',
        'id' => 'id',
        'score' => 'score'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'selected' => 'setSelected',
        'status' => 'setStatus',
        'status_label' => 'setStatusLabel',
        'date_complete' => 'setDateComplete',
        'id' => 'setId',
        'score' => 'setScore'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'selected' => 'getSelected',
        'status' => 'getStatus',
        'status_label' => 'getStatusLabel',
        'date_complete' => 'getDateComplete',
        'id' => 'getId',
        'score' => 'getScore'
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
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_label'] = isset($data['status_label']) ? $data['status_label'] : null;
        $this->container['date_complete'] = isset($data['date_complete']) ? $data['date_complete'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['selected'] === null) {
            $invalid_properties[] = "'selected' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['status_label'] === null) {
            $invalid_properties[] = "'status_label' can't be null";
        }
        if ($this->container['date_complete'] === null) {
            $invalid_properties[] = "'date_complete' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['score'] === null) {
            $invalid_properties[] = "'score' can't be null";
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

        if ($this->container['selected'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['status_label'] === null) {
            return false;
        }
        if ($this->container['date_complete'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['score'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets selected
     * @return bool
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     * @param bool $selected Flag for default state
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

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
     * @param int $status Enrollment status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_label
     * @return string
     */
    public function getStatusLabel()
    {
        return $this->container['status_label'];
    }

    /**
     * Sets status_label
     * @param string $status_label Enrollment status label
     * @return $this
     */
    public function setStatusLabel($status_label)
    {
        $this->container['status_label'] = $status_label;

        return $this;
    }

    /**
     * Gets date_complete
     * @return string
     */
    public function getDateComplete()
    {
        return $this->container['date_complete'];
    }

    /**
     * Sets date_complete
     * @param string $date_complete Course complete date
     * @return $this
     */
    public function setDateComplete($date_complete)
    {
        $this->container['date_complete'] = $date_complete;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the destination user
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets score
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param float $score Enrollment score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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

