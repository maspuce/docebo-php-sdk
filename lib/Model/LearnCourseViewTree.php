<?php
/**
 * LearnCourseViewTree
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
 * LearnCourseViewTree Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCourseViewTree implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCourseViewTree';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'short_description' => 'string',
        'thumbnail' => 'string',
        'status' => 'string',
        'slug_name' => 'string',
        'is_folder' => 'bool',
        'type' => 'string',
        'id' => 'string',
        'can_enter' => 'bool',
        'duration' => 'int',
        'level' => 'int',
        'description' => 'string',
        'children' => '\Swagger\Client\Model\LearnCourseViewChildren[]',
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
        'short_description' => 'short_description',
        'thumbnail' => 'thumbnail',
        'status' => 'status',
        'slug_name' => 'slug_name',
        'is_folder' => 'is_folder',
        'type' => 'type',
        'id' => 'id',
        'can_enter' => 'can_enter',
        'duration' => 'duration',
        'level' => 'level',
        'description' => 'description',
        'children' => 'children',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'short_description' => 'setShortDescription',
        'thumbnail' => 'setThumbnail',
        'status' => 'setStatus',
        'slug_name' => 'setSlugName',
        'is_folder' => 'setIsFolder',
        'type' => 'setType',
        'id' => 'setId',
        'can_enter' => 'setCanEnter',
        'duration' => 'setDuration',
        'level' => 'setLevel',
        'description' => 'setDescription',
        'children' => 'setChildren',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'short_description' => 'getShortDescription',
        'thumbnail' => 'getThumbnail',
        'status' => 'getStatus',
        'slug_name' => 'getSlugName',
        'is_folder' => 'getIsFolder',
        'type' => 'getType',
        'id' => 'getId',
        'can_enter' => 'getCanEnter',
        'duration' => 'getDuration',
        'level' => 'getLevel',
        'description' => 'getDescription',
        'children' => 'getChildren',
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

    const STATUS_LOCKED = 'locked';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';
    const STATUS_NOT_STARTED = 'not_started';
    const STATUS_AB_INITIO = 'ab-initio';
    const STATUS_LOCKED_MAXATTEMPTS = 'locked_maxattempts';
    const STATUS_INCOMPLETE = 'incomplete';
    const STATUS_IN_PROGRESS = 'in_progress';
    const TYPE_SCORMORG = 'scormorg';
    const TYPE_TEST = 'test';
    const TYPE_POLL = 'poll';
    const TYPE_ITEM = 'item';
    const TYPE_VIDEO = 'video';
    const TYPE_HTMLPAGE = 'htmlpage';
    const TYPE_TINCAN = 'tincan';
    const TYPE_FILE = 'file';
    const TYPE_AUTHORING = 'authoring';
    const TYPE_DELIVERABLE = 'deliverable';
    const TYPE_AICC = 'aicc';
    const TYPE_ELUCIDAT = 'elucidat';
    const TYPE_CENTRALREPO = 'centralrepo';
    const TYPE_LECTORA = 'lectora';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LOCKED,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_NOT_STARTED,
            self::STATUS_AB_INITIO,
            self::STATUS_LOCKED_MAXATTEMPTS,
            self::STATUS_INCOMPLETE,
            self::STATUS_IN_PROGRESS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SCORMORG,
            self::TYPE_TEST,
            self::TYPE_POLL,
            self::TYPE_ITEM,
            self::TYPE_VIDEO,
            self::TYPE_HTMLPAGE,
            self::TYPE_TINCAN,
            self::TYPE_FILE,
            self::TYPE_AUTHORING,
            self::TYPE_DELIVERABLE,
            self::TYPE_AICC,
            self::TYPE_ELUCIDAT,
            self::TYPE_CENTRALREPO,
            self::TYPE_LECTORA,
        ];
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
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['slug_name'] = isset($data['slug_name']) ? $data['slug_name'] : null;
        $this->container['is_folder'] = isset($data['is_folder']) ? $data['is_folder'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['can_enter'] = isset($data['can_enter']) ? $data['can_enter'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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

        if ($this->container['short_description'] === null) {
            $invalid_properties[] = "'short_description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["locked", "completed", "failed", "not_started", "ab-initio", "locked_maxattempts", "incomplete", "in_progress"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'locked', 'completed', 'failed', 'not_started', 'ab-initio', 'locked_maxattempts', 'incomplete', 'in_progress'.";
        }

        if ($this->container['slug_name'] === null) {
            $invalid_properties[] = "'slug_name' can't be null";
        }
        if ($this->container['is_folder'] === null) {
            $invalid_properties[] = "'is_folder' can't be null";
        }
        $allowed_values = ["scormorg", "test", "poll", "item", "video", "htmlpage", "tincan", "file", "authoring", "deliverable", "aicc", "elucidat", "centralrepo", "lectora"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'scormorg', 'test', 'poll', 'item', 'video', 'htmlpage', 'tincan', 'file', 'authoring', 'deliverable', 'aicc', 'elucidat', 'centralrepo', 'lectora'.";
        }

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['can_enter'] === null) {
            $invalid_properties[] = "'can_enter' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalid_properties[] = "'level' can't be null";
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

        if ($this->container['short_description'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["locked", "completed", "failed", "not_started", "ab-initio", "locked_maxattempts", "incomplete", "in_progress"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['slug_name'] === null) {
            return false;
        }
        if ($this->container['is_folder'] === null) {
            return false;
        }
        $allowed_values = ["scormorg", "test", "poll", "item", "video", "htmlpage", "tincan", "file", "authoring", "deliverable", "aicc", "elucidat", "centralrepo", "lectora"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['can_enter'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['level'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     * @param string $short_description Learning Object short description. Not present for folders
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail Learning object thumbnail URL. Not present for folders
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The current status of the user for this chapter. Not present for folders
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('locked', 'completed', 'failed', 'not_started', 'ab-initio', 'locked_maxattempts', 'incomplete', 'in_progress');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'locked', 'completed', 'failed', 'not_started', 'ab-initio', 'locked_maxattempts', 'incomplete', 'in_progress'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets slug_name
     * @return string
     */
    public function getSlugName()
    {
        return $this->container['slug_name'];
    }

    /**
     * Sets slug_name
     * @param string $slug_name Learning object or folder slug name
     * @return $this
     */
    public function setSlugName($slug_name)
    {
        $this->container['slug_name'] = $slug_name;

        return $this;
    }

    /**
     * Gets is_folder
     * @return bool
     */
    public function getIsFolder()
    {
        return $this->container['is_folder'];
    }

    /**
     * Sets is_folder
     * @param bool $is_folder Whatever or not the current item is folder or Learning Object
     * @return $this
     */
    public function setIsFolder($is_folder)
    {
        $this->container['is_folder'] = $is_folder;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type . The type of the learning object. Not present for folders
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('scormorg', 'test', 'poll', 'item', 'video', 'htmlpage', 'tincan', 'file', 'authoring', 'deliverable', 'aicc', 'elucidat', 'centralrepo', 'lectora');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'scormorg', 'test', 'poll', 'item', 'video', 'htmlpage', 'tincan', 'file', 'authoring', 'deliverable', 'aicc', 'elucidat', 'centralrepo', 'lectora'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The internal ID of the folder or LO
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets can_enter
     * @return bool
     */
    public function getCanEnter()
    {
        return $this->container['can_enter'];
    }

    /**
     * Sets can_enter
     * @param bool $can_enter Returns true or false based on that if the user can_enter in the current course or not, this property is available only when the user is logged in.
     * @return $this
     */
    public function setCanEnter($can_enter)
    {
        $this->container['can_enter'] = $can_enter;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Learning object duration. Not present for folders
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level The level of the LO in the tree stricture.
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

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
     * @param string $description Learning object description. Not present for folders
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets children
     * @return \Swagger\Client\Model\LearnCourseViewChildren[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Swagger\Client\Model\LearnCourseViewChildren[] $children The child subfolders and learning objects of this folder, infinite levels deep, following the same structure
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
     * @param string $name Learning object or folder name
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


