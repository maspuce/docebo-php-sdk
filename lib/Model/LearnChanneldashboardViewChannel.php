<?php
/**
 * LearnChanneldashboardViewChannel
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
 * LearnChanneldashboardViewChannel Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnChanneldashboardViewChannel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnChanneldashboardViewChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'has_more_data' => 'bool',
        'is_enabled' => 'bool',
        'icon' => '\Swagger\Client\Model\LearnChanneldashboardViewIcon[]',
        'items' => '\Swagger\Client\Model\LearnChanneldashboardViewItems',
        'description' => 'string',
        'created' => 'string',
        'items_count' => 'int',
        'id' => 'int',
        'name' => 'string'
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
        'has_more_data' => 'has_more_data',
        'is_enabled' => 'is_enabled',
        'icon' => 'icon',
        'items' => 'items',
        'description' => 'description',
        'created' => 'created',
        'items_count' => 'items_count',
        'id' => 'id',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'has_more_data' => 'setHasMoreData',
        'is_enabled' => 'setIsEnabled',
        'icon' => 'setIcon',
        'items' => 'setItems',
        'description' => 'setDescription',
        'created' => 'setCreated',
        'items_count' => 'setItemsCount',
        'id' => 'setId',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'has_more_data' => 'getHasMoreData',
        'is_enabled' => 'getIsEnabled',
        'icon' => 'getIcon',
        'items' => 'getItems',
        'description' => 'getDescription',
        'created' => 'getCreated',
        'items_count' => 'getItemsCount',
        'id' => 'getId',
        'name' => 'getName'
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
        $this->container['has_more_data'] = isset($data['has_more_data']) ? $data['has_more_data'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['items_count'] = isset($data['items_count']) ? $data['items_count'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['has_more_data'] === null) {
            $invalid_properties[] = "'has_more_data' can't be null";
        }
        if ($this->container['is_enabled'] === null) {
            $invalid_properties[] = "'is_enabled' can't be null";
        }
        if ($this->container['icon'] === null) {
            $invalid_properties[] = "'icon' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['items_count'] === null) {
            $invalid_properties[] = "'items_count' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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

        if ($this->container['has_more_data'] === null) {
            return false;
        }
        if ($this->container['is_enabled'] === null) {
            return false;
        }
        if ($this->container['icon'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['items_count'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets has_more_data
     * @return bool
     */
    public function getHasMoreData()
    {
        return $this->container['has_more_data'];
    }

    /**
     * Sets has_more_data
     * @param bool $has_more_data True if the current page is not the last page
     * @return $this
     */
    public function setHasMoreData($has_more_data)
    {
        $this->container['has_more_data'] = $has_more_data;

        return $this;
    }

    /**
     * Gets is_enabled
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     * @param bool $is_enabled Channel enabled status
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets icon
     * @return \Swagger\Client\Model\LearnChanneldashboardViewIcon[]
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param \Swagger\Client\Model\LearnChanneldashboardViewIcon[] $icon Channel icon details
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets items
     * @return \Swagger\Client\Model\LearnChanneldashboardViewItems
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\LearnChanneldashboardViewItems $items Array of channel assets
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Channel description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created Channel date created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets items_count
     * @return int
     */
    public function getItemsCount()
    {
        return $this->container['items_count'];
    }

    /**
     * Sets items_count
     * @param int $items_count Total count of channel items
     * @return $this
     */
    public function setItemsCount($items_count)
    {
        $this->container['items_count'] = $items_count;

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
     * @param int $id ID of the channel
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Channel name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


