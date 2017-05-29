<?php
/**
 * LearnSubscriptionplanIndexItems
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
 * LearnSubscriptionplanIndexItems Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnSubscriptionplanIndexItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnSubscriptionplanIndexItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bundle_code' => 'string',
        'code' => 'string',
        'duration' => 'string',
        'availability' => 'int',
        'renewal_type' => 'string',
        'validity_units' => 'int',
        'actions' => 'string[]',
        'bundle_title' => 'string',
        'bundle_type' => 'string',
        'validity_period' => 'int',
        'plan_price' => 'int',
        'bundle_type_id' => 'int',
        'plan_name' => 'string',
        'bundle_id' => 'int',
        'plan_id' => 'int',
        'bundle_description' => 'string'
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
        'bundle_code' => 'bundle_code',
        'code' => 'code',
        'duration' => 'duration',
        'availability' => 'availability',
        'renewal_type' => 'renewal_type',
        'validity_units' => 'validity_units',
        'actions' => 'actions',
        'bundle_title' => 'bundle_title',
        'bundle_type' => 'bundle_type',
        'validity_period' => 'validity_period',
        'plan_price' => 'plan_price',
        'bundle_type_id' => 'bundle_type_id',
        'plan_name' => 'plan_name',
        'bundle_id' => 'bundle_id',
        'plan_id' => 'plan_id',
        'bundle_description' => 'bundle_description'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bundle_code' => 'setBundleCode',
        'code' => 'setCode',
        'duration' => 'setDuration',
        'availability' => 'setAvailability',
        'renewal_type' => 'setRenewalType',
        'validity_units' => 'setValidityUnits',
        'actions' => 'setActions',
        'bundle_title' => 'setBundleTitle',
        'bundle_type' => 'setBundleType',
        'validity_period' => 'setValidityPeriod',
        'plan_price' => 'setPlanPrice',
        'bundle_type_id' => 'setBundleTypeId',
        'plan_name' => 'setPlanName',
        'bundle_id' => 'setBundleId',
        'plan_id' => 'setPlanId',
        'bundle_description' => 'setBundleDescription'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bundle_code' => 'getBundleCode',
        'code' => 'getCode',
        'duration' => 'getDuration',
        'availability' => 'getAvailability',
        'renewal_type' => 'getRenewalType',
        'validity_units' => 'getValidityUnits',
        'actions' => 'getActions',
        'bundle_title' => 'getBundleTitle',
        'bundle_type' => 'getBundleType',
        'validity_period' => 'getValidityPeriod',
        'plan_price' => 'getPlanPrice',
        'bundle_type_id' => 'getBundleTypeId',
        'plan_name' => 'getPlanName',
        'bundle_id' => 'getBundleId',
        'plan_id' => 'getPlanId',
        'bundle_description' => 'getBundleDescription'
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
        $this->container['bundle_code'] = isset($data['bundle_code']) ? $data['bundle_code'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['renewal_type'] = isset($data['renewal_type']) ? $data['renewal_type'] : null;
        $this->container['validity_units'] = isset($data['validity_units']) ? $data['validity_units'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['bundle_title'] = isset($data['bundle_title']) ? $data['bundle_title'] : null;
        $this->container['bundle_type'] = isset($data['bundle_type']) ? $data['bundle_type'] : null;
        $this->container['validity_period'] = isset($data['validity_period']) ? $data['validity_period'] : null;
        $this->container['plan_price'] = isset($data['plan_price']) ? $data['plan_price'] : null;
        $this->container['bundle_type_id'] = isset($data['bundle_type_id']) ? $data['bundle_type_id'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['bundle_id'] = isset($data['bundle_id']) ? $data['bundle_id'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['bundle_description'] = isset($data['bundle_description']) ? $data['bundle_description'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['bundle_code'] === null) {
            $invalid_properties[] = "'bundle_code' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalid_properties[] = "'availability' can't be null";
        }
        if ($this->container['renewal_type'] === null) {
            $invalid_properties[] = "'renewal_type' can't be null";
        }
        if ($this->container['validity_units'] === null) {
            $invalid_properties[] = "'validity_units' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalid_properties[] = "'actions' can't be null";
        }
        if ($this->container['bundle_title'] === null) {
            $invalid_properties[] = "'bundle_title' can't be null";
        }
        if ($this->container['bundle_type'] === null) {
            $invalid_properties[] = "'bundle_type' can't be null";
        }
        if ($this->container['validity_period'] === null) {
            $invalid_properties[] = "'validity_period' can't be null";
        }
        if ($this->container['plan_price'] === null) {
            $invalid_properties[] = "'plan_price' can't be null";
        }
        if ($this->container['bundle_type_id'] === null) {
            $invalid_properties[] = "'bundle_type_id' can't be null";
        }
        if ($this->container['plan_name'] === null) {
            $invalid_properties[] = "'plan_name' can't be null";
        }
        if ($this->container['bundle_id'] === null) {
            $invalid_properties[] = "'bundle_id' can't be null";
        }
        if ($this->container['plan_id'] === null) {
            $invalid_properties[] = "'plan_id' can't be null";
        }
        if ($this->container['bundle_description'] === null) {
            $invalid_properties[] = "'bundle_description' can't be null";
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

        if ($this->container['bundle_code'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['availability'] === null) {
            return false;
        }
        if ($this->container['renewal_type'] === null) {
            return false;
        }
        if ($this->container['validity_units'] === null) {
            return false;
        }
        if ($this->container['actions'] === null) {
            return false;
        }
        if ($this->container['bundle_title'] === null) {
            return false;
        }
        if ($this->container['bundle_type'] === null) {
            return false;
        }
        if ($this->container['validity_period'] === null) {
            return false;
        }
        if ($this->container['plan_price'] === null) {
            return false;
        }
        if ($this->container['bundle_type_id'] === null) {
            return false;
        }
        if ($this->container['plan_name'] === null) {
            return false;
        }
        if ($this->container['bundle_id'] === null) {
            return false;
        }
        if ($this->container['plan_id'] === null) {
            return false;
        }
        if ($this->container['bundle_description'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets bundle_code
     * @return string
     */
    public function getBundleCode()
    {
        return $this->container['bundle_code'];
    }

    /**
     * Sets bundle_code
     * @param string $bundle_code Code of the subscription plan
     * @return $this
     */
    public function setBundleCode($bundle_code)
    {
        $this->container['bundle_code'] = $bundle_code;

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
     * @param string $code Subscription plan code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets duration
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param string $duration Plan duration (e.g. &quot;2 days&quot;)
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * @param int $availability Subscription plan availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets renewal_type
     * @return string
     */
    public function getRenewalType()
    {
        return $this->container['renewal_type'];
    }

    /**
     * Sets renewal_type
     * @param string $renewal_type Subscription plan renewal type
     * @return $this
     */
    public function setRenewalType($renewal_type)
    {
        $this->container['renewal_type'] = $renewal_type;

        return $this;
    }

    /**
     * Gets validity_units
     * @return int
     */
    public function getValidityUnits()
    {
        return $this->container['validity_units'];
    }

    /**
     * Sets validity_units
     * @param int $validity_units Subscription plan validity_units (1 - days, 2 - months, 3 - years)
     * @return $this
     */
    public function setValidityUnits($validity_units)
    {
        $this->container['validity_units'] = $validity_units;

        return $this;
    }

    /**
     * Gets actions
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     * @param string[] $actions Actions that current user can perform (e.g. &quot;delete&quot;, &quot;edit&quot;, etc.)
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets bundle_title
     * @return string
     */
    public function getBundleTitle()
    {
        return $this->container['bundle_title'];
    }

    /**
     * Sets bundle_title
     * @param string $bundle_title Title of the subscription plan bundle
     * @return $this
     */
    public function setBundleTitle($bundle_title)
    {
        $this->container['bundle_title'] = $bundle_title;

        return $this;
    }

    /**
     * Gets bundle_type
     * @return string
     */
    public function getBundleType()
    {
        return $this->container['bundle_type'];
    }

    /**
     * Sets bundle_type
     * @param string $bundle_type Subscription bundle type
     * @return $this
     */
    public function setBundleType($bundle_type)
    {
        $this->container['bundle_type'] = $bundle_type;

        return $this;
    }

    /**
     * Gets validity_period
     * @return int
     */
    public function getValidityPeriod()
    {
        return $this->container['validity_period'];
    }

    /**
     * Sets validity_period
     * @param int $validity_period Subscription plan validity period
     * @return $this
     */
    public function setValidityPeriod($validity_period)
    {
        $this->container['validity_period'] = $validity_period;

        return $this;
    }

    /**
     * Gets plan_price
     * @return int
     */
    public function getPlanPrice()
    {
        return $this->container['plan_price'];
    }

    /**
     * Sets plan_price
     * @param int $plan_price Subscription plan price
     * @return $this
     */
    public function setPlanPrice($plan_price)
    {
        $this->container['plan_price'] = $plan_price;

        return $this;
    }

    /**
     * Gets bundle_type_id
     * @return int
     */
    public function getBundleTypeId()
    {
        return $this->container['bundle_type_id'];
    }

    /**
     * Sets bundle_type_id
     * @param int $bundle_type_id Bundle type (1 - seat, 2 - licences)
     * @return $this
     */
    public function setBundleTypeId($bundle_type_id)
    {
        $this->container['bundle_type_id'] = $bundle_type_id;

        return $this;
    }

    /**
     * Gets plan_name
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     * @param string $plan_name Name of the subscription plan
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

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
     * @param int $bundle_id ID of the subscription plan bundle
     * @return $this
     */
    public function setBundleId($bundle_id)
    {
        $this->container['bundle_id'] = $bundle_id;

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
     * @param int $plan_id ID of the subscription plan
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets bundle_description
     * @return string
     */
    public function getBundleDescription()
    {
        return $this->container['bundle_description'];
    }

    /**
     * Sets bundle_description
     * @param string $bundle_description Description of the subscription plan bundle
     * @return $this
     */
    public function setBundleDescription($bundle_description)
    {
        $this->container['bundle_description'] = $bundle_description;

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

