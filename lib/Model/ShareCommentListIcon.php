<?php
/**
 * ShareCommentListIcon
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
 * ShareCommentListIcon Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareCommentListIcon implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareCommentListIcon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'font' => 'string',
        'color' => 'string',
        'background' => 'string'
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
        'font' => 'font',
        'color' => 'color',
        'background' => 'background'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'font' => 'setFont',
        'color' => 'setColor',
        'background' => 'setBackground'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'font' => 'getFont',
        'color' => 'getColor',
        'background' => 'getBackground'
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
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['font'] === null) {
            $invalid_properties[] = "'font' can't be null";
        }
        if ($this->container['color'] === null) {
            $invalid_properties[] = "'color' can't be null";
        }
        if ($this->container['background'] === null) {
            $invalid_properties[] = "'background' can't be null";
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

        if ($this->container['font'] === null) {
            return false;
        }
        if ($this->container['color'] === null) {
            return false;
        }
        if ($this->container['background'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets font
     * @return string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     * @param string $font Playlist owner  ID
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color Playlist owner name
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets background
     * @return string
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     * @param string $background Playlist owner avatar
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

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


