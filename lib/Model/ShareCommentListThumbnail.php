<?php
/**
 * ShareCommentListThumbnail
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
 * ShareCommentListThumbnail Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareCommentListThumbnail implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareCommentListThumbnail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carousel' => 'string',
        'video' => 'string',
        'original' => 'string',
        'small' => 'string'
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
        'carousel' => 'carousel',
        'video' => 'video',
        'original' => 'original',
        'small' => 'small'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'carousel' => 'setCarousel',
        'video' => 'setVideo',
        'original' => 'setOriginal',
        'small' => 'setSmall'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'carousel' => 'getCarousel',
        'video' => 'getVideo',
        'original' => 'getOriginal',
        'small' => 'getSmall'
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
        $this->container['carousel'] = isset($data['carousel']) ? $data['carousel'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['small'] = isset($data['small']) ? $data['small'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['carousel'] === null) {
            $invalid_properties[] = "'carousel' can't be null";
        }
        if ($this->container['video'] === null) {
            $invalid_properties[] = "'video' can't be null";
        }
        if ($this->container['original'] === null) {
            $invalid_properties[] = "'original' can't be null";
        }
        if ($this->container['small'] === null) {
            $invalid_properties[] = "'small' can't be null";
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

        if ($this->container['carousel'] === null) {
            return false;
        }
        if ($this->container['video'] === null) {
            return false;
        }
        if ($this->container['original'] === null) {
            return false;
        }
        if ($this->container['small'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets carousel
     * @return string
     */
    public function getCarousel()
    {
        return $this->container['carousel'];
    }

    /**
     * Sets carousel
     * @param string $carousel Carousel of asset
     * @return $this
     */
    public function setCarousel($carousel)
    {
        $this->container['carousel'] = $carousel;

        return $this;
    }

    /**
     * Gets video
     * @return string
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     * @param string $video Video thumbnail of asset
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets original
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     * @param string $original Original thumbnail of asset
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets small
     * @return string
     */
    public function getSmall()
    {
        return $this->container['small'];
    }

    /**
     * Sets small
     * @param string $small Small thumbnail of asset
     * @return $this
     */
    public function setSmall($small)
    {
        $this->container['small'] = $small;

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


