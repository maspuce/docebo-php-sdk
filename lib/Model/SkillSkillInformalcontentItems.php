<?php
/**
 * SkillSkillInformalcontentItems
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
 * SkillSkillInformalcontentItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillSkillInformalcontentItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillSkillInformalcontentItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'count' => 'int',
        'thumbnail' => '\Swagger\Client\Model\SkillSkillInformalcontentThumbnail',
        'title' => 'string',
        'total_page_count' => 'int',
        'cursor' => 'string',
        'date_created' => 'string',
        'kind' => '\Swagger\Client\Model\SkillSkillInformalcontentKind',
        'id' => 'int',
        'owner' => '\Swagger\Client\Model\SkillSkillInformalcontentOwner',
        'has_more_data' => 'bool',
        'current_page_size' => 'int',
        'current_page' => 'int',
        'info' => '\Swagger\Client\Model\SkillSkillInformalcontentInfo',
        'description' => 'string',
        'total_count' => 'int',
        'files' => '\Swagger\Client\Model\SkillSkillInformalcontentFiles'
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
        'thumbnail' => 'thumbnail',
        'title' => 'title',
        'total_page_count' => 'total_page_count',
        'cursor' => 'cursor',
        'date_created' => 'date_created',
        'kind' => 'kind',
        'id' => 'id',
        'owner' => 'owner',
        'has_more_data' => 'has_more_data',
        'current_page_size' => 'current_page_size',
        'current_page' => 'current_page',
        'info' => 'info',
        'description' => 'description',
        'total_count' => 'total_count',
        'files' => 'files'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'thumbnail' => 'setThumbnail',
        'title' => 'setTitle',
        'total_page_count' => 'setTotalPageCount',
        'cursor' => 'setCursor',
        'date_created' => 'setDateCreated',
        'kind' => 'setKind',
        'id' => 'setId',
        'owner' => 'setOwner',
        'has_more_data' => 'setHasMoreData',
        'current_page_size' => 'setCurrentPageSize',
        'current_page' => 'setCurrentPage',
        'info' => 'setInfo',
        'description' => 'setDescription',
        'total_count' => 'setTotalCount',
        'files' => 'setFiles'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'thumbnail' => 'getThumbnail',
        'title' => 'getTitle',
        'total_page_count' => 'getTotalPageCount',
        'cursor' => 'getCursor',
        'date_created' => 'getDateCreated',
        'kind' => 'getKind',
        'id' => 'getId',
        'owner' => 'getOwner',
        'has_more_data' => 'getHasMoreData',
        'current_page_size' => 'getCurrentPageSize',
        'current_page' => 'getCurrentPage',
        'info' => 'getInfo',
        'description' => 'getDescription',
        'total_count' => 'getTotalCount',
        'files' => 'getFiles'
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
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['total_page_count'] = isset($data['total_page_count']) ? $data['total_page_count'] : null;
        $this->container['cursor'] = isset($data['cursor']) ? $data['cursor'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['has_more_data'] = isset($data['has_more_data']) ? $data['has_more_data'] : null;
        $this->container['current_page_size'] = isset($data['current_page_size']) ? $data['current_page_size'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
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
        if ($this->container['thumbnail'] === null) {
            $invalid_properties[] = "'thumbnail' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['cursor'] === null) {
            $invalid_properties[] = "'cursor' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalid_properties[] = "'date_created' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalid_properties[] = "'kind' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalid_properties[] = "'owner' can't be null";
        }
        if ($this->container['has_more_data'] === null) {
            $invalid_properties[] = "'has_more_data' can't be null";
        }
        if ($this->container['current_page_size'] === null) {
            $invalid_properties[] = "'current_page_size' can't be null";
        }
        if ($this->container['current_page'] === null) {
            $invalid_properties[] = "'current_page' can't be null";
        }
        if ($this->container['info'] === null) {
            $invalid_properties[] = "'info' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['files'] === null) {
            $invalid_properties[] = "'files' can't be null";
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
        if ($this->container['thumbnail'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['cursor'] === null) {
            return false;
        }
        if ($this->container['date_created'] === null) {
            return false;
        }
        if ($this->container['kind'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['owner'] === null) {
            return false;
        }
        if ($this->container['has_more_data'] === null) {
            return false;
        }
        if ($this->container['current_page_size'] === null) {
            return false;
        }
        if ($this->container['current_page'] === null) {
            return false;
        }
        if ($this->container['info'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['files'] === null) {
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
     * Gets thumbnail
     * @return \Swagger\Client\Model\SkillSkillInformalcontentThumbnail
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param \Swagger\Client\Model\SkillSkillInformalcontentThumbnail $thumbnail Return thumbnail of asset object
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

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
     * @param string $title Asset title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created Asset date of creation
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets kind
     * @return \Swagger\Client\Model\SkillSkillInformalcontentKind
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param \Swagger\Client\Model\SkillSkillInformalcontentKind $kind Return type of asset object
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

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
     * @param int $id ID of the asset
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner
     * @return \Swagger\Client\Model\SkillSkillInformalcontentOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param \Swagger\Client\Model\SkillSkillInformalcontentOwner $owner Return owner of asset object
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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
     * Gets info
     * @return \Swagger\Client\Model\SkillSkillInformalcontentInfo
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param \Swagger\Client\Model\SkillSkillInformalcontentInfo $info Return asset information object
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

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
     * @param string $description Asset description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets files
     * @return \Swagger\Client\Model\SkillSkillInformalcontentFiles
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \Swagger\Client\Model\SkillSkillInformalcontentFiles $files Return file object
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

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


