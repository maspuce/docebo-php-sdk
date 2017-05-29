<?php
/**
 * SkillReportsBranchReportData
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
 * SkillReportsBranchReportData Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SkillReportsBranchReportData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SkillReportsBranchReportData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'skill_title' => 'string',
        'self_missing' => 'int',
        'link_manager' => 'string',
        'link_self' => 'string',
        '_77777' => 'int',
        'manager_missing' => 'int',
        'link_manager_missing' => 'string',
        'manager_gaps' => 'int',
        'self_gaps' => 'int',
        'link_self_missing' => 'string'
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
        'skill_title' => 'skill_title',
        'self_missing' => 'self_missing',
        'link_manager' => 'link_manager',
        'link_self' => 'link_self',
        '_77777' => '77777',
        'manager_missing' => 'manager_missing',
        'link_manager_missing' => 'link_manager_missing',
        'manager_gaps' => 'manager_gaps',
        'self_gaps' => 'self_gaps',
        'link_self_missing' => 'link_self_missing'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'skill_title' => 'setSkillTitle',
        'self_missing' => 'setSelfMissing',
        'link_manager' => 'setLinkManager',
        'link_self' => 'setLinkSelf',
        '_77777' => 'set77777',
        'manager_missing' => 'setManagerMissing',
        'link_manager_missing' => 'setLinkManagerMissing',
        'manager_gaps' => 'setManagerGaps',
        'self_gaps' => 'setSelfGaps',
        'link_self_missing' => 'setLinkSelfMissing'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'skill_title' => 'getSkillTitle',
        'self_missing' => 'getSelfMissing',
        'link_manager' => 'getLinkManager',
        'link_self' => 'getLinkSelf',
        '_77777' => 'get77777',
        'manager_missing' => 'getManagerMissing',
        'link_manager_missing' => 'getLinkManagerMissing',
        'manager_gaps' => 'getManagerGaps',
        'self_gaps' => 'getSelfGaps',
        'link_self_missing' => 'getLinkSelfMissing'
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
        $this->container['skill_title'] = isset($data['skill_title']) ? $data['skill_title'] : null;
        $this->container['self_missing'] = isset($data['self_missing']) ? $data['self_missing'] : null;
        $this->container['link_manager'] = isset($data['link_manager']) ? $data['link_manager'] : null;
        $this->container['link_self'] = isset($data['link_self']) ? $data['link_self'] : null;
        $this->container['_77777'] = isset($data['_77777']) ? $data['_77777'] : null;
        $this->container['manager_missing'] = isset($data['manager_missing']) ? $data['manager_missing'] : null;
        $this->container['link_manager_missing'] = isset($data['link_manager_missing']) ? $data['link_manager_missing'] : null;
        $this->container['manager_gaps'] = isset($data['manager_gaps']) ? $data['manager_gaps'] : null;
        $this->container['self_gaps'] = isset($data['self_gaps']) ? $data['self_gaps'] : null;
        $this->container['link_self_missing'] = isset($data['link_self_missing']) ? $data['link_self_missing'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['skill_title'] === null) {
            $invalid_properties[] = "'skill_title' can't be null";
        }
        if ($this->container['self_missing'] === null) {
            $invalid_properties[] = "'self_missing' can't be null";
        }
        if ($this->container['link_manager'] === null) {
            $invalid_properties[] = "'link_manager' can't be null";
        }
        if ($this->container['link_self'] === null) {
            $invalid_properties[] = "'link_self' can't be null";
        }
        if ($this->container['_77777'] === null) {
            $invalid_properties[] = "'_77777' can't be null";
        }
        if ($this->container['manager_missing'] === null) {
            $invalid_properties[] = "'manager_missing' can't be null";
        }
        if ($this->container['link_manager_missing'] === null) {
            $invalid_properties[] = "'link_manager_missing' can't be null";
        }
        if ($this->container['manager_gaps'] === null) {
            $invalid_properties[] = "'manager_gaps' can't be null";
        }
        if ($this->container['self_gaps'] === null) {
            $invalid_properties[] = "'self_gaps' can't be null";
        }
        if ($this->container['link_self_missing'] === null) {
            $invalid_properties[] = "'link_self_missing' can't be null";
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

        if ($this->container['skill_title'] === null) {
            return false;
        }
        if ($this->container['self_missing'] === null) {
            return false;
        }
        if ($this->container['link_manager'] === null) {
            return false;
        }
        if ($this->container['link_self'] === null) {
            return false;
        }
        if ($this->container['_77777'] === null) {
            return false;
        }
        if ($this->container['manager_missing'] === null) {
            return false;
        }
        if ($this->container['link_manager_missing'] === null) {
            return false;
        }
        if ($this->container['manager_gaps'] === null) {
            return false;
        }
        if ($this->container['self_gaps'] === null) {
            return false;
        }
        if ($this->container['link_self_missing'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets skill_title
     * @return string
     */
    public function getSkillTitle()
    {
        return $this->container['skill_title'];
    }

    /**
     * Sets skill_title
     * @param string $skill_title Skill title in the selected language
     * @return $this
     */
    public function setSkillTitle($skill_title)
    {
        $this->container['skill_title'] = $skill_title;

        return $this;
    }

    /**
     * Gets self_missing
     * @return int
     */
    public function getSelfMissing()
    {
        return $this->container['self_missing'];
    }

    /**
     * Sets self_missing
     * @param int $self_missing How many self evaluations have a value &quot;not evaluated&quot; or missing
     * @return $this
     */
    public function setSelfMissing($self_missing)
    {
        $this->container['self_missing'] = $self_missing;

        return $this;
    }

    /**
     * Gets link_manager
     * @return string
     */
    public function getLinkManager()
    {
        return $this->container['link_manager'];
    }

    /**
     * Sets link_manager
     * @param string $link_manager Link with list of users with a manager evaluation knowledge gap for this skill
     * @return $this
     */
    public function setLinkManager($link_manager)
    {
        $this->container['link_manager'] = $link_manager;

        return $this;
    }

    /**
     * Gets link_self
     * @return string
     */
    public function getLinkSelf()
    {
        return $this->container['link_self'];
    }

    /**
     * Sets link_self
     * @param string $link_self Link with list of users with a self evaluation knowledge gap for this skill
     * @return $this
     */
    public function setLinkSelf($link_self)
    {
        $this->container['link_self'] = $link_self;

        return $this;
    }

    /**
     * Gets _77777
     * @return int
     */
    public function get77777()
    {
        return $this->container['_77777'];
    }

    /**
     * Sets _77777
     * @param int $_77777 The ID of a skill
     * @return $this
     */
    public function set77777($_77777)
    {
        $this->container['_77777'] = $_77777;

        return $this;
    }

    /**
     * Gets manager_missing
     * @return int
     */
    public function getManagerMissing()
    {
        return $this->container['manager_missing'];
    }

    /**
     * Sets manager_missing
     * @param int $manager_missing How many manager evaluations have a value &quot;not evaluated&quot; or missing
     * @return $this
     */
    public function setManagerMissing($manager_missing)
    {
        $this->container['manager_missing'] = $manager_missing;

        return $this;
    }

    /**
     * Gets link_manager_missing
     * @return string
     */
    public function getLinkManagerMissing()
    {
        return $this->container['link_manager_missing'];
    }

    /**
     * Sets link_manager_missing
     * @param string $link_manager_missing Link with list of users that don't have manager evaluation for this skill or evaluation value is &quot;not evaluated&quot;
     * @return $this
     */
    public function setLinkManagerMissing($link_manager_missing)
    {
        $this->container['link_manager_missing'] = $link_manager_missing;

        return $this;
    }

    /**
     * Gets manager_gaps
     * @return int
     */
    public function getManagerGaps()
    {
        return $this->container['manager_gaps'];
    }

    /**
     * Sets manager_gaps
     * @param int $manager_gaps How many manager evaluations have value &quot;not sufficient&quot;
     * @return $this
     */
    public function setManagerGaps($manager_gaps)
    {
        $this->container['manager_gaps'] = $manager_gaps;

        return $this;
    }

    /**
     * Gets self_gaps
     * @return int
     */
    public function getSelfGaps()
    {
        return $this->container['self_gaps'];
    }

    /**
     * Sets self_gaps
     * @param int $self_gaps How many self evaluations have value &quot;not sufficient&quot;
     * @return $this
     */
    public function setSelfGaps($self_gaps)
    {
        $this->container['self_gaps'] = $self_gaps;

        return $this;
    }

    /**
     * Gets link_self_missing
     * @return string
     */
    public function getLinkSelfMissing()
    {
        return $this->container['link_self_missing'];
    }

    /**
     * Sets link_self_missing
     * @param string $link_self_missing Link with list of users that don't have self evaluation for this skill or evaluation value is &quot;not evaluated&quot;
     * @return $this
     */
    public function setLinkSelfMissing($link_self_missing)
    {
        $this->container['link_self_missing'] = $link_self_missing;

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


