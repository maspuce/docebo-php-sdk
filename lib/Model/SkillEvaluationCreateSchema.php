<?php
/**
 * SkillEvaluationCreateSchema
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
 * SkillEvaluationCreateSchema Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillEvaluationCreateSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillEvaluationCreateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'draft' => 'int',
        'role_id' => 'int',
        'evaluation_type' => 'string',
        'rating_date' => '\DateTime',
        'rater_id' => 'int',
        'request_id' => 'int',
        'ratings' => '\Swagger\Client\Model\SkillEvaluationCreateRatings'
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
        'draft' => 'draft',
        'role_id' => 'role_id',
        'evaluation_type' => 'evaluation_type',
        'rating_date' => 'rating_date',
        'rater_id' => 'rater_id',
        'request_id' => 'request_id',
        'ratings' => 'ratings'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'draft' => 'setDraft',
        'role_id' => 'setRoleId',
        'evaluation_type' => 'setEvaluationType',
        'rating_date' => 'setRatingDate',
        'rater_id' => 'setRaterId',
        'request_id' => 'setRequestId',
        'ratings' => 'setRatings'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'draft' => 'getDraft',
        'role_id' => 'getRoleId',
        'evaluation_type' => 'getEvaluationType',
        'rating_date' => 'getRatingDate',
        'rater_id' => 'getRaterId',
        'request_id' => 'getRequestId',
        'ratings' => 'getRatings'
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
        $this->container['draft'] = isset($data['draft']) ? $data['draft'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['evaluation_type'] = isset($data['evaluation_type']) ? $data['evaluation_type'] : null;
        $this->container['rating_date'] = isset($data['rating_date']) ? $data['rating_date'] : null;
        $this->container['rater_id'] = isset($data['rater_id']) ? $data['rater_id'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['draft'] === null) {
            $invalid_properties[] = "'draft' can't be null";
        }
        if ($this->container['evaluation_type'] === null) {
            $invalid_properties[] = "'evaluation_type' can't be null";
        }
        if ($this->container['rater_id'] === null) {
            $invalid_properties[] = "'rater_id' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalid_properties[] = "'request_id' can't be null";
        }
        if ($this->container['ratings'] === null) {
            $invalid_properties[] = "'ratings' can't be null";
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

        if ($this->container['draft'] === null) {
            return false;
        }
        if ($this->container['evaluation_type'] === null) {
            return false;
        }
        if ($this->container['rater_id'] === null) {
            return false;
        }
        if ($this->container['request_id'] === null) {
            return false;
        }
        if ($this->container['ratings'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets draft
     * @return int
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     * @param int $draft Is this evaluation completed or draft -&gt; 1 = Draft, 0 = Completed
     * @return $this
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets role_id
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param int $role_id For what role the employee was rated. Default - current role of employee
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets evaluation_type
     * @return string
     */
    public function getEvaluationType()
    {
        return $this->container['evaluation_type'];
    }

    /**
     * Sets evaluation_type
     * @param string $evaluation_type Type of evaluation, options S,M (Self, Manager)
     * @return $this
     */
    public function setEvaluationType($evaluation_type)
    {
        $this->container['evaluation_type'] = $evaluation_type;

        return $this;
    }

    /**
     * Gets rating_date
     * @return \DateTime
     */
    public function getRatingDate()
    {
        return $this->container['rating_date'];
    }

    /**
     * Sets rating_date
     * @param \DateTime $rating_date Date when the rating was confirmed (if draft = true -&gt; default = null; if draft = false -&gt; default = current date). Date format - yyyy-MM-dd HH:mm:ss
     * @return $this
     */
    public function setRatingDate($rating_date)
    {
        $this->container['rating_date'] = $rating_date;

        return $this;
    }

    /**
     * Gets rater_id
     * @return int
     */
    public function getRaterId()
    {
        return $this->container['rater_id'];
    }

    /**
     * Sets rater_id
     * @param int $rater_id User ID of the rater
     * @return $this
     */
    public function setRaterId($rater_id)
    {
        $this->container['rater_id'] = $rater_id;

        return $this;
    }

    /**
     * Gets request_id
     * @return int
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     * @param int $request_id The evaluation request id( if there is an evaluation request)
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets ratings
     * @return \Swagger\Client\Model\SkillEvaluationCreateRatings
     */
    public function getRatings()
    {
        return $this->container['ratings'];
    }

    /**
     * Sets ratings
     * @param \Swagger\Client\Model\SkillEvaluationCreateRatings $ratings Array of items skill-rating
     * @return $this
     */
    public function setRatings($ratings)
    {
        $this->container['ratings'] = $ratings;

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


