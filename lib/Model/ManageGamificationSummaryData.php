<?php
/**
 * ManageGamificationSummaryData
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
 * ManageGamificationSummaryData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageGamificationSummaryData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageGamificationSummaryData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'badges' => 'int',
        'coins' => 'int',
        'points' => 'int',
        'leaderboards' => '\Swagger\Client\Model\ManageGamificationSummaryLeaderboards[]'
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
        'badges' => 'badges',
        'coins' => 'coins',
        'points' => 'points',
        'leaderboards' => 'leaderboards'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'badges' => 'setBadges',
        'coins' => 'setCoins',
        'points' => 'setPoints',
        'leaderboards' => 'setLeaderboards'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'badges' => 'getBadges',
        'coins' => 'getCoins',
        'points' => 'getPoints',
        'leaderboards' => 'getLeaderboards'
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
        $this->container['badges'] = isset($data['badges']) ? $data['badges'] : null;
        $this->container['coins'] = isset($data['coins']) ? $data['coins'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['leaderboards'] = isset($data['leaderboards']) ? $data['leaderboards'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['badges'] === null) {
            $invalid_properties[] = "'badges' can't be null";
        }
        if ($this->container['points'] === null) {
            $invalid_properties[] = "'points' can't be null";
        }
        if ($this->container['leaderboards'] === null) {
            $invalid_properties[] = "'leaderboards' can't be null";
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

        if ($this->container['badges'] === null) {
            return false;
        }
        if ($this->container['points'] === null) {
            return false;
        }
        if ($this->container['leaderboards'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets badges
     * @return int
     */
    public function getBadges()
    {
        return $this->container['badges'];
    }

    /**
     * Sets badges
     * @param int $badges Number of badges assigned to this user
     * @return $this
     */
    public function setBadges($badges)
    {
        $this->container['badges'] = $badges;

        return $this;
    }

    /**
     * Gets coins
     * @return int
     */
    public function getCoins()
    {
        return $this->container['coins'];
    }

    /**
     * Sets coins
     * @param int $coins Coins gained by this user (only populated if reward_show_active = true)
     * @return $this
     */
    public function setCoins($coins)
    {
        $this->container['coins'] = $coins;

        return $this;
    }

    /**
     * Gets points
     * @return int
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     * @param int $points Number of points accumulated by this user
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets leaderboards
     * @return \Swagger\Client\Model\ManageGamificationSummaryLeaderboards[]
     */
    public function getLeaderboards()
    {
        return $this->container['leaderboards'];
    }

    /**
     * Sets leaderboards
     * @param \Swagger\Client\Model\ManageGamificationSummaryLeaderboards[] $leaderboards Array of 0 or more Leaderboard objects representing all leaderboards visible to this user.
     * @return $this
     */
    public function setLeaderboards($leaderboards)
    {
        $this->container['leaderboards'] = $leaderboards;

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


