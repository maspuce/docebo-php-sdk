<?php
/**
 * SharePublishPublishData
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
 * SharePublishPublishData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SharePublishPublishData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SharePublishPublishData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'publish' => '\Swagger\Client\Model\SharePublishPublishPublish',
        'edit' => '\Swagger\Client\Model\SharePublishPublishEdit',
        'publishing_rights' => 'bool',
        'published' => 'bool'
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
        'publish' => 'publish',
        'edit' => 'edit',
        'publishing_rights' => 'publishing_rights',
        'published' => 'published'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'publish' => 'setPublish',
        'edit' => 'setEdit',
        'publishing_rights' => 'setPublishingRights',
        'published' => 'setPublished'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'publish' => 'getPublish',
        'edit' => 'getEdit',
        'publishing_rights' => 'getPublishingRights',
        'published' => 'getPublished'
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
        $this->container['publish'] = isset($data['publish']) ? $data['publish'] : null;
        $this->container['edit'] = isset($data['edit']) ? $data['edit'] : null;
        $this->container['publishing_rights'] = isset($data['publishing_rights']) ? $data['publishing_rights'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['publish'] === null) {
            $invalid_properties[] = "'publish' can't be null";
        }
        if ($this->container['edit'] === null) {
            $invalid_properties[] = "'edit' can't be null";
        }
        if ($this->container['publishing_rights'] === null) {
            $invalid_properties[] = "'publishing_rights' can't be null";
        }
        if ($this->container['published'] === null) {
            $invalid_properties[] = "'published' can't be null";
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

        if ($this->container['publish'] === null) {
            return false;
        }
        if ($this->container['edit'] === null) {
            return false;
        }
        if ($this->container['publishing_rights'] === null) {
            return false;
        }
        if ($this->container['published'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets publish
     * @return \Swagger\Client\Model\SharePublishPublishPublish
     */
    public function getPublish()
    {
        return $this->container['publish'];
    }

    /**
     * Sets publish
     * @param \Swagger\Client\Model\SharePublishPublishPublish $publish 
     * @return $this
     */
    public function setPublish($publish)
    {
        $this->container['publish'] = $publish;

        return $this;
    }

    /**
     * Gets edit
     * @return \Swagger\Client\Model\SharePublishPublishEdit
     */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
     * Sets edit
     * @param \Swagger\Client\Model\SharePublishPublishEdit $edit 
     * @return $this
     */
    public function setEdit($edit)
    {
        $this->container['edit'] = $edit;

        return $this;
    }

    /**
     * Gets publishing_rights
     * @return bool
     */
    public function getPublishingRights()
    {
        return $this->container['publishing_rights'];
    }

    /**
     * Sets publishing_rights
     * @param bool $publishing_rights If the current user has rights to publish
     * @return $this
     */
    public function setPublishingRights($publishing_rights)
    {
        $this->container['publishing_rights'] = $publishing_rights;

        return $this;
    }

    /**
     * Gets published
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     * @param bool $published If the asset is published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

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


