<?php
/**
 * LearnLpViewSettings
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
 * LearnLpViewSettings Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LearnLpViewSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LearnLpViewSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'days_of_validity' => 'int',
        'certificate' => '\Swagger\Client\Model\LearnLpViewCertificate[]',
        'show_in_catalog' => 'bool',
        'enable_catchup' => 'bool'
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
        'days_of_validity' => 'days_of_validity',
        'certificate' => 'certificate',
        'show_in_catalog' => 'show_in_catalog',
        'enable_catchup' => 'enable_catchup'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'days_of_validity' => 'setDaysOfValidity',
        'certificate' => 'setCertificate',
        'show_in_catalog' => 'setShowInCatalog',
        'enable_catchup' => 'setEnableCatchup'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'days_of_validity' => 'getDaysOfValidity',
        'certificate' => 'getCertificate',
        'show_in_catalog' => 'getShowInCatalog',
        'enable_catchup' => 'getEnableCatchup'
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
        $this->container['days_of_validity'] = isset($data['days_of_validity']) ? $data['days_of_validity'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['show_in_catalog'] = isset($data['show_in_catalog']) ? $data['show_in_catalog'] : null;
        $this->container['enable_catchup'] = isset($data['enable_catchup']) ? $data['enable_catchup'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['days_of_validity'] === null) {
            $invalid_properties[] = "'days_of_validity' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalid_properties[] = "'certificate' can't be null";
        }
        if ($this->container['show_in_catalog'] === null) {
            $invalid_properties[] = "'show_in_catalog' can't be null";
        }
        if ($this->container['enable_catchup'] === null) {
            $invalid_properties[] = "'enable_catchup' can't be null";
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

        if ($this->container['days_of_validity'] === null) {
            return false;
        }
        if ($this->container['certificate'] === null) {
            return false;
        }
        if ($this->container['show_in_catalog'] === null) {
            return false;
        }
        if ($this->container['enable_catchup'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets days_of_validity
     * @return int
     */
    public function getDaysOfValidity()
    {
        return $this->container['days_of_validity'];
    }

    /**
     * Sets days_of_validity
     * @param int $days_of_validity The number of days the learning plan is valid
     * @return $this
     */
    public function setDaysOfValidity($days_of_validity)
    {
        $this->container['days_of_validity'] = $days_of_validity;

        return $this;
    }

    /**
     * Gets certificate
     * @return \Swagger\Client\Model\LearnLpViewCertificate[]
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     * @param \Swagger\Client\Model\LearnLpViewCertificate[] $certificate Array of certificate IDs that are assigned to this learning plan
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets show_in_catalog
     * @return bool
     */
    public function getShowInCatalog()
    {
        return $this->container['show_in_catalog'];
    }

    /**
     * Sets show_in_catalog
     * @param bool $show_in_catalog Whether or not to show the learning plan in the catalog
     * @return $this
     */
    public function setShowInCatalog($show_in_catalog)
    {
        $this->container['show_in_catalog'] = $show_in_catalog;

        return $this;
    }

    /**
     * Gets enable_catchup
     * @return bool
     */
    public function getEnableCatchup()
    {
        return $this->container['enable_catchup'];
    }

    /**
     * Sets enable_catchup
     * @param bool $enable_catchup Whether or not the learning plan has the &quot;Ctahcup courses&quot; functionality enabled
     * @return $this
     */
    public function setEnableCatchup($enable_catchup)
    {
        $this->container['enable_catchup'] = $enable_catchup;

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


