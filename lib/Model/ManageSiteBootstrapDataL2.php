<?php
/**
 * ManageSiteBootstrapDataL2
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
 * ManageSiteBootstrapDataL2 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageSiteBootstrapDataL2 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageSiteBootstrapDataL2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_html' => 'bool',
        'iframe_height' => 'int',
        'iframe_url' => 'bool'
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
        'custom_html' => 'custom_html',
        'iframe_height' => 'iframe_height',
        'iframe_url' => 'iframe_url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'custom_html' => 'setCustomHtml',
        'iframe_height' => 'setIframeHeight',
        'iframe_url' => 'setIframeUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'custom_html' => 'getCustomHtml',
        'iframe_height' => 'getIframeHeight',
        'iframe_url' => 'getIframeUrl'
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
        $this->container['custom_html'] = isset($data['custom_html']) ? $data['custom_html'] : null;
        $this->container['iframe_height'] = isset($data['iframe_height']) ? $data['iframe_height'] : null;
        $this->container['iframe_url'] = isset($data['iframe_url']) ? $data['iframe_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets custom_html
     * @return bool
     */
    public function getCustomHtml()
    {
        return $this->container['custom_html'];
    }

    /**
     * Sets custom_html
     * @param bool $custom_html Custom footer html message
     * @return $this
     */
    public function setCustomHtml($custom_html)
    {
        $this->container['custom_html'] = $custom_html;

        return $this;
    }

    /**
     * Gets iframe_height
     * @return int
     */
    public function getIframeHeight()
    {
        return $this->container['iframe_height'];
    }

    /**
     * Sets iframe_height
     * @param int $iframe_height Height in px's for iframe link in the footer /0 if none/
     * @return $this
     */
    public function setIframeHeight($iframe_height)
    {
        $this->container['iframe_height'] = $iframe_height;

        return $this;
    }

    /**
     * Gets iframe_url
     * @return bool
     */
    public function getIframeUrl()
    {
        return $this->container['iframe_url'];
    }

    /**
     * Sets iframe_url
     * @param bool $iframe_url Iframe link
     * @return $this
     */
    public function setIframeUrl($iframe_url)
    {
        $this->container['iframe_url'] = $iframe_url;

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


