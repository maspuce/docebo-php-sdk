<?php
/**
 * ManageThemeViewTheme
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
 * ManageThemeViewTheme Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageThemeViewTheme implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageThemeViewTheme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'image' => 'string',
        'description' => 'string',
        'builtin' => 'bool',
        'slug_name' => 'string',
        'date_created' => '\DateTime',
        'author_id' => 'int',
        'status' => 'string',
        'sets' => '\Swagger\Client\Model\ManageThemeViewSets[]',
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
        'code' => 'code',
        'image' => 'image',
        'description' => 'description',
        'builtin' => 'builtin',
        'slug_name' => 'slug_name',
        'date_created' => 'date_created',
        'author_id' => 'author_id',
        'status' => 'status',
        'sets' => 'sets',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'image' => 'setImage',
        'description' => 'setDescription',
        'builtin' => 'setBuiltin',
        'slug_name' => 'setSlugName',
        'date_created' => 'setDateCreated',
        'author_id' => 'setAuthorId',
        'status' => 'setStatus',
        'sets' => 'setSets',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'image' => 'getImage',
        'description' => 'getDescription',
        'builtin' => 'getBuiltin',
        'slug_name' => 'getSlugName',
        'date_created' => 'getDateCreated',
        'author_id' => 'getAuthorId',
        'status' => 'getStatus',
        'sets' => 'getSets',
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

    const STATUS_AVAILABLE = 'available';
    const STATUS_ACTIVE = 'active';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_ACTIVE,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['builtin'] = isset($data['builtin']) ? $data['builtin'] : null;
        $this->container['slug_name'] = isset($data['slug_name']) ? $data['slug_name'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['author_id'] = isset($data['author_id']) ? $data['author_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sets'] = isset($data['sets']) ? $data['sets'] : null;
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

        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalid_properties[] = "'image' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['builtin'] === null) {
            $invalid_properties[] = "'builtin' can't be null";
        }
        if ($this->container['slug_name'] === null) {
            $invalid_properties[] = "'slug_name' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalid_properties[] = "'date_created' can't be null";
        }
        if ($this->container['author_id'] === null) {
            $invalid_properties[] = "'author_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["available", "active"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'available', 'active'.";
        }

        if ($this->container['sets'] === null) {
            $invalid_properties[] = "'sets' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['image'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['builtin'] === null) {
            return false;
        }
        if ($this->container['slug_name'] === null) {
            return false;
        }
        if ($this->container['date_created'] === null) {
            return false;
        }
        if ($this->container['author_id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["available", "active"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['sets'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Text identifier of the theme
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image Filename of the theme thumbnail image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * @param string $description Text description of the theme
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets builtin
     * @return bool
     */
    public function getBuiltin()
    {
        return $this->container['builtin'];
    }

    /**
     * Sets builtin
     * @param bool $builtin Indicates whether or not the theme is built-in
     * @return $this
     */
    public function setBuiltin($builtin)
    {
        $this->container['builtin'] = $builtin;

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
     * @param string $slug_name Name of the theme without special characters
     * @return $this
     */
    public function setSlugName($slug_name)
    {
        $this->container['slug_name'] = $slug_name;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created Date of the theme creation
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets author_id
     * @return int
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     * @param int $author_id Identifier of the user who created that theme. Zero if the theme is built-in
     * @return $this
     */
    public function setAuthorId($author_id)
    {
        $this->container['author_id'] = $author_id;

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
     * @param string $status Status of the theme for the current calling context
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('available', 'active');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'available', 'active'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sets
     * @return \Swagger\Client\Model\ManageThemeViewSets[]
     */
    public function getSets()
    {
        return $this->container['sets'];
    }

    /**
     * Sets sets
     * @param \Swagger\Client\Model\ManageThemeViewSets[] $sets Configuration sets used in this theme
     * @return $this
     */
    public function setSets($sets)
    {
        $this->container['sets'] = $sets;

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
     * @param string $name Display name of the theme
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


