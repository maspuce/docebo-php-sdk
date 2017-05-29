<?php
/**
 * ManageOrgchartIndexData
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
 * ManageOrgchartIndexData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageOrgchartIndexData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageOrgchartIndexData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'has_more_data' => 'bool',
        'total_page_count' => 'int',
        'items' => '\Swagger\Client\Model\ManageOrgchartIndexItems',
        'cursor' => 'string',
        'total_count' => 'int',
        'current_page_size' => 'int',
        'current_page' => 'int'
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
        'count' => 'count',
        'has_more_data' => 'has_more_data',
        'total_page_count' => 'total_page_count',
        'items' => 'items',
        'cursor' => 'cursor',
        'total_count' => 'total_count',
        'current_page_size' => 'current_page_size',
        'current_page' => 'current_page'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'has_more_data' => 'setHasMoreData',
        'total_page_count' => 'setTotalPageCount',
        'items' => 'setItems',
        'cursor' => 'setCursor',
        'total_count' => 'setTotalCount',
        'current_page_size' => 'setCurrentPageSize',
        'current_page' => 'setCurrentPage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'has_more_data' => 'getHasMoreData',
        'total_page_count' => 'getTotalPageCount',
        'items' => 'getItems',
        'cursor' => 'getCursor',
        'total_count' => 'getTotalCount',
        'current_page_size' => 'getCurrentPageSize',
        'current_page' => 'getCurrentPage'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['has_more_data'] = isset($data['has_more_data']) ? $data['has_more_data'] : null;
        $this->container['total_page_count'] = isset($data['total_page_count']) ? $data['total_page_count'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['cursor'] = isset($data['cursor']) ? $data['cursor'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['current_page_size'] = isset($data['current_page_size']) ? $data['current_page_size'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['count'] === null) {
            $invalid_properties[] = "'count' can't be null";
        }
        if ($this->container['has_more_data'] === null) {
            $invalid_properties[] = "'has_more_data' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['cursor'] === null) {
            $invalid_properties[] = "'cursor' can't be null";
        }
        if ($this->container['current_page_size'] === null) {
            $invalid_properties[] = "'current_page_size' can't be null";
        }
        if ($this->container['current_page'] === null) {
            $invalid_properties[] = "'current_page' can't be null";
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

        if ($this->container['count'] === null) {
            return false;
        }
        if ($this->container['has_more_data'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['cursor'] === null) {
            return false;
        }
        if ($this->container['current_page_size'] === null) {
            return false;
        }
        if ($this->container['current_page'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count Total number of items returned
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
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
     * Gets total_page_count
     * @return int
     */
    public function getTotalPageCount()
    {
        return $this->container['total_page_count'];
    }

    /**
     * Sets total_page_count
     * @param int $total_page_count Total number of pages returned
     * @return $this
     */
    public function setTotalPageCount($total_page_count)
    {
        $this->container['total_page_count'] = $total_page_count;

        return $this;
    }

    /**
     * Gets items
     * @return \Swagger\Client\Model\ManageOrgchartIndexItems
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\ManageOrgchartIndexItems $items Array of subscription records info objects
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets cursor
     * @return string
     */
    public function getCursor()
    {
        return $this->container['cursor'];
    }

    /**
     * Sets cursor
     * @param string $cursor Unique ID used to temporarily store search parameters
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->container['cursor'] = $cursor;

        return $this;
    }

    /**
     * Gets total_count
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     * @param int $total_count Total number of Items returned. Returned if get_total_count parameter is 1
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets current_page_size
     * @return int
     */
    public function getCurrentPageSize()
    {
        return $this->container['current_page_size'];
    }

    /**
     * Sets current_page_size
     * @param int $current_page_size Number of items per page
     * @return $this
     */
    public function setCurrentPageSize($current_page_size)
    {
        $this->container['current_page_size'] = $current_page_size;

        return $this;
    }

    /**
     * Gets current_page
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     * @param int $current_page Page number of the current page
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

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


