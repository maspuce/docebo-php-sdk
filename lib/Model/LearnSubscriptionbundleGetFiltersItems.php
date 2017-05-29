<?php
/**
 * LearnSubscriptionbundleGetFiltersItems
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
 * LearnSubscriptionbundleGetFiltersItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnSubscriptionbundleGetFiltersItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnSubscriptionbundleGetFiltersItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_category' => 'int',
        'has_child' => 'int',
        'category_name' => 'string'
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
        'id_category' => 'idCategory',
        'has_child' => 'has_child',
        'category_name' => 'category_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_category' => 'setIdCategory',
        'has_child' => 'setHasChild',
        'category_name' => 'setCategoryName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_category' => 'getIdCategory',
        'has_child' => 'getHasChild',
        'category_name' => 'getCategoryName'
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
        $this->container['id_category'] = isset($data['id_category']) ? $data['id_category'] : null;
        $this->container['has_child'] = isset($data['has_child']) ? $data['has_child'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id_category'] === null) {
            $invalid_properties[] = "'id_category' can't be null";
        }
        if ($this->container['has_child'] === null) {
            $invalid_properties[] = "'has_child' can't be null";
        }
        if ($this->container['category_name'] === null) {
            $invalid_properties[] = "'category_name' can't be null";
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

        if ($this->container['id_category'] === null) {
            return false;
        }
        if ($this->container['has_child'] === null) {
            return false;
        }
        if ($this->container['category_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id_category
     * @return int
     */
    public function getIdCategory()
    {
        return $this->container['id_category'];
    }

    /**
     * Sets id_category
     * @param int $id_category ID of the category
     * @return $this
     */
    public function setIdCategory($id_category)
    {
        $this->container['id_category'] = $id_category;

        return $this;
    }

    /**
     * Gets has_child
     * @return int
     */
    public function getHasChild()
    {
        return $this->container['has_child'];
    }

    /**
     * Sets has_child
     * @param int $has_child If the category has child categories
     * @return $this
     */
    public function setHasChild($has_child)
    {
        $this->container['has_child'] = $has_child;

        return $this;
    }

    /**
     * Gets category_name
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     * @param string $category_name Translated name of the category
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

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


