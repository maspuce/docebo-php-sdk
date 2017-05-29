<?php
/**
 * SkillRatingtablesListItems
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
 * SkillRatingtablesListItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillRatingtablesListItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillRatingtablesListItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'actions' => 'string[]',
        'status' => 'int',
        'editable' => 'int',
        'usage' => 'string',
        'rating_points' => 'int',
        'id' => 'int'
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
        'title' => 'title',
        'actions' => 'actions',
        'status' => 'status',
        'editable' => 'editable',
        'usage' => 'usage',
        'rating_points' => 'rating_points',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'actions' => 'setActions',
        'status' => 'setStatus',
        'editable' => 'setEditable',
        'usage' => 'setUsage',
        'rating_points' => 'setRatingPoints',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'actions' => 'getActions',
        'status' => 'getStatus',
        'editable' => 'getEditable',
        'usage' => 'getUsage',
        'rating_points' => 'getRatingPoints',
        'id' => 'getId'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['rating_points'] = isset($data['rating_points']) ? $data['rating_points'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalid_properties[] = "'actions' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['editable'] === null) {
            $invalid_properties[] = "'editable' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalid_properties[] = "'usage' can't be null";
        }
        if ($this->container['rating_points'] === null) {
            $invalid_properties[] = "'rating_points' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['actions'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['editable'] === null) {
            return false;
        }
        if ($this->container['usage'] === null) {
            return false;
        }
        if ($this->container['rating_points'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Rating scale title in the selected language
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets actions
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param string[] $actions Available actions, that could be performed on the rating scale
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

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
     * @param int $status Active or inactive status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets editable
     * @return int
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     * @param int $editable Is Rating scale editable - 0(no) or 1(yes)
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets usage
     * @return string
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     * @param string $usage Rating scale target - 'evaluation', 'kpi', etc.
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets rating_points
     * @return int
     */
    public function getRatingPoints()
    {
        return $this->container['rating_points'];
    }

    /**
     * Sets rating_points
     * @param int $rating_points Count of the ratings assigned to the scale
     * @return $this
     */
    public function setRatingPoints($rating_points)
    {
        $this->container['rating_points'] = $rating_points;

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
     * @param int $id ID of the rating scale
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


