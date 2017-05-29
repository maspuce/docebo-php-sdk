<?php
/**
 * ShareQuestionViewTitleL2
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
 * ShareQuestionViewTitleL2 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareQuestionViewTitleL2 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareQuestionViewTitleL2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'read_only' => 'bool',
        'rating' => '\Swagger\Client\Model\ShareQuestionViewRatingL2',
        'owner' => '\Swagger\Client\Model\ShareQuestionViewOwnerL4',
        'created_at' => 'string',
        'is_best' => 'bool'
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
        'read_only' => 'read_only',
        'rating' => 'rating',
        'owner' => 'owner',
        'created_at' => 'created_at',
        'is_best' => 'is_best'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'read_only' => 'setReadOnly',
        'rating' => 'setRating',
        'owner' => 'setOwner',
        'created_at' => 'setCreatedAt',
        'is_best' => 'setIsBest'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'read_only' => 'getReadOnly',
        'rating' => 'getRating',
        'owner' => 'getOwner',
        'created_at' => 'getCreatedAt',
        'is_best' => 'getIsBest'
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
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['is_best'] = isset($data['is_best']) ? $data['is_best'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['read_only'] === null) {
            $invalid_properties[] = "'read_only' can't be null";
        }
        if ($this->container['rating'] === null) {
            $invalid_properties[] = "'rating' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalid_properties[] = "'owner' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['is_best'] === null) {
            $invalid_properties[] = "'is_best' can't be null";
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

        if ($this->container['read_only'] === null) {
            return false;
        }
        if ($this->container['rating'] === null) {
            return false;
        }
        if ($this->container['owner'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['is_best'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets read_only
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     * @param bool $read_only Is read only for this user
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets rating
     * @return \Swagger\Client\Model\ShareQuestionViewRatingL2
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param \Swagger\Client\Model\ShareQuestionViewRatingL2 $rating Last answer rating
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets owner
     * @return \Swagger\Client\Model\ShareQuestionViewOwnerL4
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param \Swagger\Client\Model\ShareQuestionViewOwnerL4 $owner Return owner of last answer object
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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
     * @param string $created_at Answer date of creation
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets is_best
     * @return bool
     */
    public function getIsBest()
    {
        return $this->container['is_best'];
    }

    /**
     * Sets is_best
     * @param bool $is_best Is best answer
     * @return $this
     */
    public function setIsBest($is_best)
    {
        $this->container['is_best'] = $is_best;

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

