<?php
/**
 * LearnEnrollmentIndexItems
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
 * LearnEnrollmentIndexItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnEnrollmentIndexItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnEnrollmentIndexItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'duration' => 'int',
        'lang_code' => 'string',
        'enroll_end_date' => '\DateTime',
        'id' => 'int',
        'courses_count' => 'int',
        'score' => 'float',
        'course_complete_date' => '\DateTime',
        'status' => 'string',
        'level' => 'string',
        'rating' => 'double',
        'name' => 'string',
        'image_url' => 'string',
        'slug_name' => 'string',
        'user_id' => 'int',
        'type' => 'string',
        'url' => 'string',
        'soft_deadline' => 'bool',
        'can_enter' => 'bool',
        'is_new' => 'bool',
        'description' => 'string',
        'enroll_begin_date' => '\DateTime',
        'total_time' => 'int'
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
        'duration' => 'duration',
        'lang_code' => 'lang_code',
        'enroll_end_date' => 'enroll_end_date',
        'id' => 'id',
        'courses_count' => 'courses_count',
        'score' => 'score',
        'course_complete_date' => 'course_complete_date',
        'status' => 'status',
        'level' => 'level',
        'rating' => 'rating',
        'name' => 'name',
        'image_url' => 'image_url',
        'slug_name' => 'slug_name',
        'user_id' => 'user_id',
        'type' => 'type',
        'url' => 'url',
        'soft_deadline' => 'soft_deadline',
        'can_enter' => 'can_enter',
        'is_new' => 'is_new',
        'description' => 'description',
        'enroll_begin_date' => 'enroll_begin_date',
        'total_time' => 'total_time'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'duration' => 'setDuration',
        'lang_code' => 'setLangCode',
        'enroll_end_date' => 'setEnrollEndDate',
        'id' => 'setId',
        'courses_count' => 'setCoursesCount',
        'score' => 'setScore',
        'course_complete_date' => 'setCourseCompleteDate',
        'status' => 'setStatus',
        'level' => 'setLevel',
        'rating' => 'setRating',
        'name' => 'setName',
        'image_url' => 'setImageUrl',
        'slug_name' => 'setSlugName',
        'user_id' => 'setUserId',
        'type' => 'setType',
        'url' => 'setUrl',
        'soft_deadline' => 'setSoftDeadline',
        'can_enter' => 'setCanEnter',
        'is_new' => 'setIsNew',
        'description' => 'setDescription',
        'enroll_begin_date' => 'setEnrollBeginDate',
        'total_time' => 'setTotalTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'duration' => 'getDuration',
        'lang_code' => 'getLangCode',
        'enroll_end_date' => 'getEnrollEndDate',
        'id' => 'getId',
        'courses_count' => 'getCoursesCount',
        'score' => 'getScore',
        'course_complete_date' => 'getCourseCompleteDate',
        'status' => 'getStatus',
        'level' => 'getLevel',
        'rating' => 'getRating',
        'name' => 'getName',
        'image_url' => 'getImageUrl',
        'slug_name' => 'getSlugName',
        'user_id' => 'getUserId',
        'type' => 'getType',
        'url' => 'getUrl',
        'soft_deadline' => 'getSoftDeadline',
        'can_enter' => 'getCanEnter',
        'is_new' => 'getIsNew',
        'description' => 'getDescription',
        'enroll_begin_date' => 'getEnrollBeginDate',
        'total_time' => 'getTotalTime'
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

    const STATUS_ENROLLED = 'enrolled';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';
    const STATUS_SUBSCRIPTION_TO_CONFIRM = 'subscription_to_confirm';
    const STATUS_WAITING = 'waiting';
    const STATUS_SUSPENDED = 'suspended';
    const STATUS_OVERBOOKING = 'overbooking';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENROLLED,
            self::STATUS_IN_PROGRESS,
            self::STATUS_COMPLETED,
            self::STATUS_SUBSCRIPTION_TO_CONFIRM,
            self::STATUS_WAITING,
            self::STATUS_SUSPENDED,
            self::STATUS_OVERBOOKING,
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['enroll_end_date'] = isset($data['enroll_end_date']) ? $data['enroll_end_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['courses_count'] = isset($data['courses_count']) ? $data['courses_count'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['course_complete_date'] = isset($data['course_complete_date']) ? $data['course_complete_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['slug_name'] = isset($data['slug_name']) ? $data['slug_name'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['soft_deadline'] = isset($data['soft_deadline']) ? $data['soft_deadline'] : null;
        $this->container['can_enter'] = isset($data['can_enter']) ? $data['can_enter'] : null;
        $this->container['is_new'] = isset($data['is_new']) ? $data['is_new'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enroll_begin_date'] = isset($data['enroll_begin_date']) ? $data['enroll_begin_date'] : null;
        $this->container['total_time'] = isset($data['total_time']) ? $data['total_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        $allowed_values = ["enrolled", "in_progress", "completed", "subscription_to_confirm", "waiting", "suspended", "overbooking"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'enrolled', 'in_progress', 'completed', 'subscription_to_confirm', 'waiting', 'suspended', 'overbooking'.";
        }

        if ($this->container['rating'] === null) {
            $invalid_properties[] = "'rating' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['slug_name'] === null) {
            $invalid_properties[] = "'slug_name' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['can_enter'] === null) {
            $invalid_properties[] = "'can_enter' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalid_properties[] = "'is_new' can't be null";
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

        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        $allowed_values = ["enrolled", "in_progress", "completed", "subscription_to_confirm", "waiting", "suspended", "overbooking"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['rating'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['slug_name'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['can_enter'] === null) {
            return false;
        }
        if ($this->container['is_new'] === null) {
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
     * @param string $code The internal code name of the course or learning plan.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param int $duration The duration of the course or learning plan in seconds
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets lang_code
     * @return string
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     * @param string $lang_code . The short language version, e.g. &quot;en&quot;. Only present for courses and not for learning plans.
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        $this->container['lang_code'] = $lang_code;

        return $this;
    }

    /**
     * Gets enroll_end_date
     * @return \DateTime
     */
    public function getEnrollEndDate()
    {
        return $this->container['enroll_end_date'];
    }

    /**
     * Sets enroll_end_date
     * @param \DateTime $enroll_end_date The expiration time of the enrollment of the user inside the course or learning plan.
     * @return $this
     */
    public function setEnrollEndDate($enroll_end_date)
    {
        $this->container['enroll_end_date'] = $enroll_end_date;

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
     * @param int $id The internal ID of the learning plan or course
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets courses_count
     * @return int
     */
    public function getCoursesCount()
    {
        return $this->container['courses_count'];
    }

    /**
     * Sets courses_count
     * @param int $courses_count The number of courses inside the learning plan. Only present if the enrollment is for learning plan.
     * @return $this
     */
    public function setCoursesCount($courses_count)
    {
        $this->container['courses_count'] = $courses_count;

        return $this;
    }

    /**
     * Gets score
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param float $score The user's score inside the course. Only valid for course enrollments.
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets course_complete_date
     * @return \DateTime
     */
    public function getCourseCompleteDate()
    {
        return $this->container['course_complete_date'];
    }

    /**
     * Sets course_complete_date
     * @param \DateTime $course_complete_date Date when the user has completed the course or learning plan
     * @return $this
     */
    public function setCourseCompleteDate($course_complete_date)
    {
        $this->container['course_complete_date'] = $course_complete_date;

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
     * @param string $status The user's status inside the course or learning plan.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('enrolled', 'in_progress', 'completed', 'subscription_to_confirm', 'waiting', 'suspended', 'overbooking');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'enrolled', 'in_progress', 'completed', 'subscription_to_confirm', 'waiting', 'suspended', 'overbooking'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets level
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param string $level User's enrollment level. Possible values: learner, tutor, instructor, coach. Only available for Courses.
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets rating
     * @return double
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     * @param double $rating Rating of the EI, if applicable
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

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
     * @param string $name Course or Learning Plan name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url The thumbnail URL for the course
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
     * @param string $slug_name Course or Learning Plan slug
     * @return $this
     */
    public function setSlugName($slug_name)
    {
        $this->container['slug_name'] = $slug_name;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The user ID for which this enrollment is related
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $type . Possible values: elearning, webinar, classroom, learning_plan
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url URL to access the course or learning plan
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets soft_deadline
     * @return bool
     */
    public function getSoftDeadline()
    {
        return $this->container['soft_deadline'];
    }

    /**
     * Sets soft_deadline
     * @param bool $soft_deadline If type is elearning. Settings for the end possible date to enroll.
     * @return $this
     */
    public function setSoftDeadline($soft_deadline)
    {
        $this->container['soft_deadline'] = $soft_deadline;

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
     * @param bool $can_enter Whether or not the current user can enter the course
     * @return $this
     */
    public function setCanEnter($can_enter)
    {
        $this->container['can_enter'] = $can_enter;

        return $this;
    }

    /**
     * Gets is_new
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     * @param bool $is_new Is the EI new for the given user; currently indicating if the user has any progress in the EI
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->container['is_new'] = $is_new;

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
     * @param string $description Course or Learning Plan description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enroll_begin_date
     * @return \DateTime
     */
    public function getEnrollBeginDate()
    {
        return $this->container['enroll_begin_date'];
    }

    /**
     * Sets enroll_begin_date
     * @param \DateTime $enroll_begin_date The beginning time of the enrollment of the user inside the course or learning plan.
     * @return $this
     */
    public function setEnrollBeginDate($enroll_begin_date)
    {
        $this->container['enroll_begin_date'] = $enroll_begin_date;

        return $this;
    }

    /**
     * Gets total_time
     * @return int
     */
    public function getTotalTime()
    {
        return $this->container['total_time'];
    }

    /**
     * Sets total_time
     * @param int $total_time Total time spent by the user in the course or learning plan
     * @return $this
     */
    public function setTotalTime($total_time)
    {
        $this->container['total_time'] = $total_time;

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

