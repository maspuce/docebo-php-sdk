<?php
/**
 * LearnSubscriptionplanViewSubscriptionRecords
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
 * LearnSubscriptionplanViewSubscriptionRecords Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnSubscriptionplanViewSubscriptionRecords implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnSubscriptionplanViewSubscriptionRecords';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price' => 'int',
        'notes' => 'string',
        'availability' => 'int',
        'start_date' => '\DateTime',
        'type' => 'int',
        'branch_id' => 'int',
        'id' => 'int',
        'record_type' => 'int',
        'created_on' => '\DateTime',
        'end_date' => '\DateTime',
        'status' => 'int',
        'enrollments_done' => 'int',
        'code' => 'string',
        'users_associated' => 'int',
        'created_by' => 'int',
        'plan_id' => 'int',
        'bundle_id' => 'int',
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
        'price' => 'price',
        'notes' => 'notes',
        'availability' => 'availability',
        'start_date' => 'start_date',
        'type' => 'type',
        'branch_id' => 'branch_id',
        'id' => 'id',
        'record_type' => 'record_type',
        'created_on' => 'created_on',
        'end_date' => 'end_date',
        'status' => 'status',
        'enrollments_done' => 'enrollments_done',
        'code' => 'code',
        'users_associated' => 'users_associated',
        'created_by' => 'created_by',
        'plan_id' => 'plan_id',
        'bundle_id' => 'bundle_id',
        'name' => 'name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'notes' => 'setNotes',
        'availability' => 'setAvailability',
        'start_date' => 'setStartDate',
        'type' => 'setType',
        'branch_id' => 'setBranchId',
        'id' => 'setId',
        'record_type' => 'setRecordType',
        'created_on' => 'setCreatedOn',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'enrollments_done' => 'setEnrollmentsDone',
        'code' => 'setCode',
        'users_associated' => 'setUsersAssociated',
        'created_by' => 'setCreatedBy',
        'plan_id' => 'setPlanId',
        'bundle_id' => 'setBundleId',
        'name' => 'setName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'notes' => 'getNotes',
        'availability' => 'getAvailability',
        'start_date' => 'getStartDate',
        'type' => 'getType',
        'branch_id' => 'getBranchId',
        'id' => 'getId',
        'record_type' => 'getRecordType',
        'created_on' => 'getCreatedOn',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
        'enrollments_done' => 'getEnrollmentsDone',
        'code' => 'getCode',
        'users_associated' => 'getUsersAssociated',
        'created_by' => 'getCreatedBy',
        'plan_id' => 'getPlanId',
        'bundle_id' => 'getBundleId',
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['branch_id'] = isset($data['branch_id']) ? $data['branch_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['record_type'] = isset($data['record_type']) ? $data['record_type'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enrollments_done'] = isset($data['enrollments_done']) ? $data['enrollments_done'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['users_associated'] = isset($data['users_associated']) ? $data['users_associated'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['bundle_id'] = isset($data['bundle_id']) ? $data['bundle_id'] : null;
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

        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalid_properties[] = "'notes' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalid_properties[] = "'availability' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['branch_id'] === null) {
            $invalid_properties[] = "'branch_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['record_type'] === null) {
            $invalid_properties[] = "'record_type' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalid_properties[] = "'created_on' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalid_properties[] = "'end_date' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['enrollments_done'] === null) {
            $invalid_properties[] = "'enrollments_done' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['users_associated'] === null) {
            $invalid_properties[] = "'users_associated' can't be null";
        }
        if ($this->container['created_by'] === null) {
            $invalid_properties[] = "'created_by' can't be null";
        }
        if ($this->container['plan_id'] === null) {
            $invalid_properties[] = "'plan_id' can't be null";
        }
        if ($this->container['bundle_id'] === null) {
            $invalid_properties[] = "'bundle_id' can't be null";
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

        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['notes'] === null) {
            return false;
        }
        if ($this->container['availability'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['branch_id'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['record_type'] === null) {
            return false;
        }
        if ($this->container['created_on'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['enrollments_done'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['users_associated'] === null) {
            return false;
        }
        if ($this->container['created_by'] === null) {
            return false;
        }
        if ($this->container['plan_id'] === null) {
            return false;
        }
        if ($this->container['bundle_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price Subscription record price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Subscription record notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets availability
     * @return int
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param int $availability Subscription record availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date Subscription record start date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets type
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param int $type Subscription record type (1 - seats or 2 - licences)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets branch_id
     * @return int
     */
    public function getBranchId()
    {
        return $this->container['branch_id'];
    }

    /**
     * Sets branch_id
     * @param int $branch_id Subscription plan branch ID
     * @return $this
     */
    public function setBranchId($branch_id)
    {
        $this->container['branch_id'] = $branch_id;

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
     * @param int $id Subscription record ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets record_type
     * @return int
     */
    public function getRecordType()
    {
        return $this->container['record_type'];
    }

    /**
     * Sets record_type
     * @param int $record_type Subscription record type (1 for &quot;new&quot; or 2 for &quot;renew&quot;)
     * @return $this
     */
    public function setRecordType($record_type)
    {
        $this->container['record_type'] = $record_type;

        return $this;
    }

    /**
     * Gets created_on
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param \DateTime $created_on Subscription record creation date
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date Subscription record end date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param int $status Subscription record status - 1 (active) or 2 (inactive)
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets enrollments_done
     * @return int
     */
    public function getEnrollmentsDone()
    {
        return $this->container['enrollments_done'];
    }

    /**
     * Sets enrollments_done
     * @param int $enrollments_done Subscription record count enrollments done
     * @return $this
     */
    public function setEnrollmentsDone($enrollments_done)
    {
        $this->container['enrollments_done'] = $enrollments_done;

        return $this;
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
     * @param string $code Subscription record code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets users_associated
     * @return int
     */
    public function getUsersAssociated()
    {
        return $this->container['users_associated'];
    }

    /**
     * Sets users_associated
     * @param int $users_associated Subscription record count users associated
     * @return $this
     */
    public function setUsersAssociated($users_associated)
    {
        $this->container['users_associated'] = $users_associated;

        return $this;
    }

    /**
     * Gets created_by
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param int $created_by Subscription record created by user ID
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets plan_id
     * @return int
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     * @param int $plan_id Subscription plan ID
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets bundle_id
     * @return int
     */
    public function getBundleId()
    {
        return $this->container['bundle_id'];
    }

    /**
     * Sets bundle_id
     * @param int $bundle_id Subscription record bundle ID
     * @return $this
     */
    public function setBundleId($bundle_id)
    {
        $this->container['bundle_id'] = $bundle_id;

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
     * @param string $name Subscription record name
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


