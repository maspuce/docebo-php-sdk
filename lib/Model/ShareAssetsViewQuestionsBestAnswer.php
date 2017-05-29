<?php
/**
 * ShareAssetsViewQuestionsBestAnswer
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
 * ShareAssetsViewQuestionsBestAnswer Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShareAssetsViewQuestionsBestAnswer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShareAssetsViewQuestionsBestAnswer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'answers' => '\Swagger\Client\Model\ShareAssetsViewQuestionsAnswers[]',
        'channels' => '\Swagger\Client\Model\ShareAssetsViewQuestionsChannels',
        'have_best_answer' => 'bool',
        'answer' => '\Swagger\Client\Model\ShareAssetsViewQuestionsAnswer'
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
        'answers' => 'answers',
        'channels' => 'channels',
        'have_best_answer' => 'have_best_answer',
        'answer' => 'answer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'answers' => 'setAnswers',
        'channels' => 'setChannels',
        'have_best_answer' => 'setHaveBestAnswer',
        'answer' => 'setAnswer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'answers' => 'getAnswers',
        'channels' => 'getChannels',
        'have_best_answer' => 'getHaveBestAnswer',
        'answer' => 'getAnswer'
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
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['have_best_answer'] = isset($data['have_best_answer']) ? $data['have_best_answer'] : null;
        $this->container['answer'] = isset($data['answer']) ? $data['answer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['have_best_answer'] === null) {
            $invalid_properties[] = "'have_best_answer' can't be null";
        }
        if ($this->container['answer'] === null) {
            $invalid_properties[] = "'answer' can't be null";
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

        if ($this->container['have_best_answer'] === null) {
            return false;
        }
        if ($this->container['answer'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets answers
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsAnswers[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsAnswers[] $answers Array of question answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets channels
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsChannels
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsChannels $channels Return channel of question object
     * @return $this
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets have_best_answer
     * @return bool
     */
    public function getHaveBestAnswer()
    {
        return $this->container['have_best_answer'];
    }

    /**
     * Sets have_best_answer
     * @param bool $have_best_answer If question have best answer - true, otherwise - false
     * @return $this
     */
    public function setHaveBestAnswer($have_best_answer)
    {
        $this->container['have_best_answer'] = $have_best_answer;

        return $this;
    }

    /**
     * Gets answer
     * @return \Swagger\Client\Model\ShareAssetsViewQuestionsAnswer
     */
    public function getAnswer()
    {
        return $this->container['answer'];
    }

    /**
     * Sets answer
     * @param \Swagger\Client\Model\ShareAssetsViewQuestionsAnswer $answer Best answer object
     * @return $this
     */
    public function setAnswer($answer)
    {
        $this->container['answer'] = $answer;

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


