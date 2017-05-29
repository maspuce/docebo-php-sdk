<?php
/**
 * LearnCatalogueCalendarItems
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
 * LearnCatalogueCalendarItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnCatalogueCalendarItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnCatalogueCalendarItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'course_description' => 'string',
        'session_information' => 'string',
        'end' => '\DateTime',
        'session_name' => 'int',
        'location' => 'string',
        'session_id' => 'int',
        'all_day' => 'int',
        'course_code' => 'string',
        'course_category_id' => 'int',
        'course_type' => 'string',
        'course_language' => 'string',
        'can_enroll' => 'int',
        'course_name' => 'string',
        'start' => '\DateTime',
        'course_id' => 'int'
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
        'course_description' => 'course_description',
        'session_information' => 'session_information',
        'end' => 'end',
        'session_name' => 'session_name',
        'location' => 'location',
        'session_id' => 'session_id',
        'all_day' => 'all_day',
        'course_code' => 'course_code',
        'course_category_id' => 'course_category_id',
        'course_type' => 'course_type',
        'course_language' => 'course_language',
        'can_enroll' => 'can_enroll',
        'course_name' => 'course_name',
        'start' => 'start',
        'course_id' => 'course_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'course_description' => 'setCourseDescription',
        'session_information' => 'setSessionInformation',
        'end' => 'setEnd',
        'session_name' => 'setSessionName',
        'location' => 'setLocation',
        'session_id' => 'setSessionId',
        'all_day' => 'setAllDay',
        'course_code' => 'setCourseCode',
        'course_category_id' => 'setCourseCategoryId',
        'course_type' => 'setCourseType',
        'course_language' => 'setCourseLanguage',
        'can_enroll' => 'setCanEnroll',
        'course_name' => 'setCourseName',
        'start' => 'setStart',
        'course_id' => 'setCourseId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'course_description' => 'getCourseDescription',
        'session_information' => 'getSessionInformation',
        'end' => 'getEnd',
        'session_name' => 'getSessionName',
        'location' => 'getLocation',
        'session_id' => 'getSessionId',
        'all_day' => 'getAllDay',
        'course_code' => 'getCourseCode',
        'course_category_id' => 'getCourseCategoryId',
        'course_type' => 'getCourseType',
        'course_language' => 'getCourseLanguage',
        'can_enroll' => 'getCanEnroll',
        'course_name' => 'getCourseName',
        'start' => 'getStart',
        'course_id' => 'getCourseId'
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
        $this->container['course_description'] = isset($data['course_description']) ? $data['course_description'] : null;
        $this->container['session_information'] = isset($data['session_information']) ? $data['session_information'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['session_name'] = isset($data['session_name']) ? $data['session_name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['all_day'] = isset($data['all_day']) ? $data['all_day'] : null;
        $this->container['course_code'] = isset($data['course_code']) ? $data['course_code'] : null;
        $this->container['course_category_id'] = isset($data['course_category_id']) ? $data['course_category_id'] : null;
        $this->container['course_type'] = isset($data['course_type']) ? $data['course_type'] : null;
        $this->container['course_language'] = isset($data['course_language']) ? $data['course_language'] : null;
        $this->container['can_enroll'] = isset($data['can_enroll']) ? $data['can_enroll'] : null;
        $this->container['course_name'] = isset($data['course_name']) ? $data['course_name'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['course_description'] === null) {
            $invalid_properties[] = "'course_description' can't be null";
        }
        if ($this->container['session_information'] === null) {
            $invalid_properties[] = "'session_information' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalid_properties[] = "'end' can't be null";
        }
        if ($this->container['session_name'] === null) {
            $invalid_properties[] = "'session_name' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalid_properties[] = "'location' can't be null";
        }
        if ($this->container['session_id'] === null) {
            $invalid_properties[] = "'session_id' can't be null";
        }
        if ($this->container['all_day'] === null) {
            $invalid_properties[] = "'all_day' can't be null";
        }
        if ($this->container['course_code'] === null) {
            $invalid_properties[] = "'course_code' can't be null";
        }
        if ($this->container['course_category_id'] === null) {
            $invalid_properties[] = "'course_category_id' can't be null";
        }
        if ($this->container['course_type'] === null) {
            $invalid_properties[] = "'course_type' can't be null";
        }
        if ($this->container['course_language'] === null) {
            $invalid_properties[] = "'course_language' can't be null";
        }
        if ($this->container['can_enroll'] === null) {
            $invalid_properties[] = "'can_enroll' can't be null";
        }
        if ($this->container['course_name'] === null) {
            $invalid_properties[] = "'course_name' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalid_properties[] = "'start' can't be null";
        }
        if ($this->container['course_id'] === null) {
            $invalid_properties[] = "'course_id' can't be null";
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

        if ($this->container['course_description'] === null) {
            return false;
        }
        if ($this->container['session_information'] === null) {
            return false;
        }
        if ($this->container['end'] === null) {
            return false;
        }
        if ($this->container['session_name'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['session_id'] === null) {
            return false;
        }
        if ($this->container['all_day'] === null) {
            return false;
        }
        if ($this->container['course_code'] === null) {
            return false;
        }
        if ($this->container['course_category_id'] === null) {
            return false;
        }
        if ($this->container['course_type'] === null) {
            return false;
        }
        if ($this->container['course_language'] === null) {
            return false;
        }
        if ($this->container['can_enroll'] === null) {
            return false;
        }
        if ($this->container['course_name'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['course_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets course_description
     * @return string
     */
    public function getCourseDescription()
    {
        return $this->container['course_description'];
    }

    /**
     * Sets course_description
     * @param string $course_description Course description
     * @return $this
     */
    public function setCourseDescription($course_description)
    {
        $this->container['course_description'] = $course_description;

        return $this;
    }

    /**
     * Gets session_information
     * @return string
     */
    public function getSessionInformation()
    {
        return $this->container['session_information'];
    }

    /**
     * Sets session_information
     * @param string $session_information Session information
     * @return $this
     */
    public function setSessionInformation($session_information)
    {
        $this->container['session_information'] = $session_information;

        return $this;
    }

    /**
     * Gets end
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     * @param \DateTime $end Course end date (exl. &quot;2015-06-30 16:00:00&quot;)
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets session_name
     * @return int
     */
    public function getSessionName()
    {
        return $this->container['session_name'];
    }

    /**
     * Sets session_name
     * @param int $session_name Session name
     * @return $this
     */
    public function setSessionName($session_name)
    {
        $this->container['session_name'] = $session_name;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location Session location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets session_id
     * @return int
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     * @param int $session_id Session ID
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets all_day
     * @return int
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     * @param int $all_day Is it takes all day long. Options: 1 - true, 0 - false
     * @return $this
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets course_code
     * @return string
     */
    public function getCourseCode()
    {
        return $this->container['course_code'];
    }

    /**
     * Sets course_code
     * @param string $course_code Course code
     * @return $this
     */
    public function setCourseCode($course_code)
    {
        $this->container['course_code'] = $course_code;

        return $this;
    }

    /**
     * Gets course_category_id
     * @return int
     */
    public function getCourseCategoryId()
    {
        return $this->container['course_category_id'];
    }

    /**
     * Sets course_category_id
     * @param int $course_category_id Course category ID
     * @return $this
     */
    public function setCourseCategoryId($course_category_id)
    {
        $this->container['course_category_id'] = $course_category_id;

        return $this;
    }

    /**
     * Gets course_type
     * @return string
     */
    public function getCourseType()
    {
        return $this->container['course_type'];
    }

    /**
     * Sets course_type
     * @param string $course_type Course type. Options: &quot;classroom&quot; or &quot;webinar&quot;
     * @return $this
     */
    public function setCourseType($course_type)
    {
        $this->container['course_type'] = $course_type;

        return $this;
    }

    /**
     * Gets course_language
     * @return string
     */
    public function getCourseLanguage()
    {
        return $this->container['course_language'];
    }

    /**
     * Sets course_language
     * @param string $course_language Course language (exl. &quot;english&quot;, &quot;bulgarian&quot;, etc.)
     * @return $this
     */
    public function setCourseLanguage($course_language)
    {
        $this->container['course_language'] = $course_language;

        return $this;
    }

    /**
     * Gets can_enroll
     * @return int
     */
    public function getCanEnroll()
    {
        return $this->container['can_enroll'];
    }

    /**
     * Sets can_enroll
     * @param int $can_enroll Can enroll course. Options: 0 - Only Admin can subscribe, 1 - Pending Admin Approval OR 2 - Free
     * @return $this
     */
    public function setCanEnroll($can_enroll)
    {
        $this->container['can_enroll'] = $can_enroll;

        return $this;
    }

    /**
     * Gets course_name
     * @return string
     */
    public function getCourseName()
    {
        return $this->container['course_name'];
    }

    /**
     * Sets course_name
     * @param string $course_name Course name
     * @return $this
     */
    public function setCourseName($course_name)
    {
        $this->container['course_name'] = $course_name;

        return $this;
    }

    /**
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param \DateTime $start Course start date (exl. &quot;2015-06-30 07:00:00&quot;)
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets course_id
     * @return int
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     * @param int $course_id ID of the course
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

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


