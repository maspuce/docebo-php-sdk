<?php
/**
 * LearnCourseWidgetsWidgets
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
 * LearnCourseWidgetsWidgets Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCourseWidgetsWidgets implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCourseWidgetsWidgets';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'columns_span' => 'int',
        'title' => 'string',
        'params' => 'string',
        'position' => 'int',
        'content_type' => 'string',
        'display_type' => 'string',
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
        'columns_span' => 'columns_span',
        'title' => 'title',
        'params' => 'params',
        'position' => 'position',
        'content_type' => 'content_type',
        'display_type' => 'display_type',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'columns_span' => 'setColumnsSpan',
        'title' => 'setTitle',
        'params' => 'setParams',
        'position' => 'setPosition',
        'content_type' => 'setContentType',
        'display_type' => 'setDisplayType',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'columns_span' => 'getColumnsSpan',
        'title' => 'getTitle',
        'params' => 'getParams',
        'position' => 'getPosition',
        'content_type' => 'getContentType',
        'display_type' => 'getDisplayType',
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
        $this->container['columns_span'] = isset($data['columns_span']) ? $data['columns_span'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['display_type'] = isset($data['display_type']) ? $data['display_type'] : null;
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

        if ($this->container['columns_span'] === null) {
            $invalid_properties[] = "'columns_span' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['params'] === null) {
            $invalid_properties[] = "'params' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalid_properties[] = "'position' can't be null";
        }
        if ($this->container['content_type'] === null) {
            $invalid_properties[] = "'content_type' can't be null";
        }
        if ($this->container['display_type'] === null) {
            $invalid_properties[] = "'display_type' can't be null";
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

        if ($this->container['columns_span'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['params'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['content_type'] === null) {
            return false;
        }
        if ($this->container['display_type'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets columns_span
     * @return int
     */
    public function getColumnsSpan()
    {
        return $this->container['columns_span'];
    }

    /**
     * Sets columns_span
     * @param int $columns_span Widget width in columns
     * @return $this
     */
    public function setColumnsSpan($columns_span)
    {
        $this->container['columns_span'] = $columns_span;

        return $this;
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
     * @param string $title The title of the widget
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets params
     * @return string
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     * @param string $params set of parameter for the widget to load (defined at widget creation time)
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position Widget sort id
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type The widget type: &quot;coursedesc&quot; | &quot;comments&quot; | &quot;coursedocs&quot; | &quot;forum&quot; | &quot;myinstructor&quot; | &quot;lpnavigation&quot; | &quot;videoconf&quot;
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets display_type
     * @return string
     */
    public function getDisplayType()
    {
        return $this->container['display_type'];
    }

    /**
     * Sets display_type
     * @param string $display_type The display mode of the widget: &quot;admin&quot; | &quot;learner&quot;
     * @return $this
     */
    public function setDisplayType($display_type)
    {
        $this->container['display_type'] = $display_type;

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
     * @param int $id The unique identifier of the widget
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


