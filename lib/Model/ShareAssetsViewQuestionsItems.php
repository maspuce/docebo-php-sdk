<?php
/**
 * ShareAssetsViewQuestionsItems
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
 * ShareAssetsViewQuestionsItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareAssetsViewQuestionsItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareAssetsViewQuestionsItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'owner' => '\Swagger\Client\Model\ShareAssetsViewQuestionsOwner',
        'metadata' => '\Swagger\Client\Model\ShareAssetsViewQuestionsMetadata',
        'tags' => '\Swagger\Client\Model\ShareAssetsViewQuestionsTags[]',
        'created_at' => 'string',
        'views' => 'int',
        'total' => '\Swagger\Client\Model\ShareAssetsViewQuestionsTotal',
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
        'owner' => 'owner',
        'metadata' => 'metadata',
        'tags' => 'tags',
        'created_at' => 'created_at',
        'views' => 'views',
        'total' => 'total',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'owner' => 'setOwner',
        'metadata' => 'setMetadata',
        'tags' => 'setTags',
        'created_at' => 'setCreatedAt',
        'views' => 'setViews',
        'total' => 'setTotal',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'owner' => 'getOwner',
        'metadata' => 'getMetadata',
        'tags' => 'getTags',
        'created_at' => 'getCreatedAt',
        'views' => 'getViews',
        'total' => 'getTotal',
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
        if ($this->container['owner'] === null) {
            $invalid_properties[] = "'owner' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalid_properties[] = "'metadata' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalid_properties[] = "'tags' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['views'] === null) {
            $invalid_properties[] = "'views' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalid_properties[] = "'total' can't be null";
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
        if ($this->container['owner'] === null) {
            return false;
        }
        if ($this->container['metadata'] === null) {
            return false;
        }
        if ($this->container['tags'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['views'] === null) {
            return false;
        }
        if ($this->container['total'] === null) {
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
     * @param string $title Question text
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets owner
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsOwner $owner Return owner of question object
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets metadata
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsMetadata $metadata Question metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets tags
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsTags[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsTags[] $tags Array of question tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Question date of creation
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets views
     * @return int
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     * @param int $views Question views
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets total
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsTotal
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsTotal $total Question total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param int $id ID of the question
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


