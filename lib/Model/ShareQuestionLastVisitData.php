<?php
/**
 * ShareQuestionLastVisitData
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
 * ShareQuestionLastVisitData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareQuestionLastVisitData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareQuestionLastVisitData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'new_questions' => 'int',
        'new_best_answers' => 'int'
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
        'new_questions' => 'new_questions',
        'new_best_answers' => 'new_best_answers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'new_questions' => 'setNewQuestions',
        'new_best_answers' => 'setNewBestAnswers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'new_questions' => 'getNewQuestions',
        'new_best_answers' => 'getNewBestAnswers'
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
        $this->container['new_questions'] = isset($data['new_questions']) ? $data['new_questions'] : null;
        $this->container['new_best_answers'] = isset($data['new_best_answers']) ? $data['new_best_answers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['new_questions'] === null) {
            $invalid_properties[] = "'new_questions' can't be null";
        }
        if ($this->container['new_best_answers'] === null) {
            $invalid_properties[] = "'new_best_answers' can't be null";
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

        if ($this->container['new_questions'] === null) {
            return false;
        }
        if ($this->container['new_best_answers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets new_questions
     * @return int
     */
    public function getNewQuestions()
    {
        return $this->container['new_questions'];
    }

    /**
     * Sets new_questions
     * @param int $new_questions Count of last created questions
     * @return $this
     */
    public function setNewQuestions($new_questions)
    {
        $this->container['new_questions'] = $new_questions;

        return $this;
    }

    /**
     * Gets new_best_answers
     * @return int
     */
    public function getNewBestAnswers()
    {
        return $this->container['new_best_answers'];
    }

    /**
     * Sets new_best_answers
     * @param int $new_best_answers Count of best answers
     * @return $this
     */
    public function setNewBestAnswers($new_best_answers)
    {
        $this->container['new_best_answers'] = $new_best_answers;

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


