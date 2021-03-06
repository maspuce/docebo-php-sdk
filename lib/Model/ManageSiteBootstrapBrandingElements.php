<?php
/**
 * ManageSiteBootstrapBrandingElements
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
 * ManageSiteBootstrapBrandingElements Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManageSiteBootstrapBrandingElements implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ManageSiteBootstrapBrandingElements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'home_page_descriptions' => '\Swagger\Client\Model\ManageSiteBootstrapHomePageDescriptions[]',
        'colors' => '\Swagger\Client\Model\ManageSiteBootstrapColors',
        'styles' => '\Swagger\Client\Model\ManageSiteBootstrapStyles',
        'header' => '\Swagger\Client\Model\ManageSiteBootstrapHeader',
        'signin' => '\Swagger\Client\Model\ManageSiteBootstrapSignin',
        'white_label' => '\Swagger\Client\Model\ManageSiteBootstrapWhiteLabel',
        'home_page_texts' => '\Swagger\Client\Model\ManageSiteBootstrapHomePageTexts[]'
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
        'home_page_descriptions' => 'home_page_descriptions',
        'colors' => 'colors',
        'styles' => 'styles',
        'header' => 'header',
        'signin' => 'signin',
        'white_label' => 'white_label',
        'home_page_texts' => 'home_page_texts'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'home_page_descriptions' => 'setHomePageDescriptions',
        'colors' => 'setColors',
        'styles' => 'setStyles',
        'header' => 'setHeader',
        'signin' => 'setSignin',
        'white_label' => 'setWhiteLabel',
        'home_page_texts' => 'setHomePageTexts'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'home_page_descriptions' => 'getHomePageDescriptions',
        'colors' => 'getColors',
        'styles' => 'getStyles',
        'header' => 'getHeader',
        'signin' => 'getSignin',
        'white_label' => 'getWhiteLabel',
        'home_page_texts' => 'getHomePageTexts'
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
        $this->container['home_page_descriptions'] = isset($data['home_page_descriptions']) ? $data['home_page_descriptions'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
        $this->container['styles'] = isset($data['styles']) ? $data['styles'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['signin'] = isset($data['signin']) ? $data['signin'] : null;
        $this->container['white_label'] = isset($data['white_label']) ? $data['white_label'] : null;
        $this->container['home_page_texts'] = isset($data['home_page_texts']) ? $data['home_page_texts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['home_page_descriptions'] === null) {
            $invalid_properties[] = "'home_page_descriptions' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalid_properties[] = "'colors' can't be null";
        }
        if ($this->container['styles'] === null) {
            $invalid_properties[] = "'styles' can't be null";
        }
        if ($this->container['header'] === null) {
            $invalid_properties[] = "'header' can't be null";
        }
        if ($this->container['signin'] === null) {
            $invalid_properties[] = "'signin' can't be null";
        }
        if ($this->container['home_page_texts'] === null) {
            $invalid_properties[] = "'home_page_texts' can't be null";
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

        if ($this->container['home_page_descriptions'] === null) {
            return false;
        }
        if ($this->container['colors'] === null) {
            return false;
        }
        if ($this->container['styles'] === null) {
            return false;
        }
        if ($this->container['header'] === null) {
            return false;
        }
        if ($this->container['signin'] === null) {
            return false;
        }
        if ($this->container['home_page_texts'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets home_page_descriptions
     * @return \Swagger\Client\Model\ManageSiteBootstrapHomePageDescriptions[]
     */
    public function getHomePageDescriptions()
    {
        return $this->container['home_page_descriptions'];
    }

    /**
     * Sets home_page_descriptions
     * @param \Swagger\Client\Model\ManageSiteBootstrapHomePageDescriptions[] $home_page_descriptions Custom descriptions for the login form by the language code.
     * @return $this
     */
    public function setHomePageDescriptions($home_page_descriptions)
    {
        $this->container['home_page_descriptions'] = $home_page_descriptions;

        return $this;
    }

    /**
     * Gets colors
     * @return \Swagger\Client\Model\ManageSiteBootstrapColors
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     * @param \Swagger\Client\Model\ManageSiteBootstrapColors $colors Object containing the set of colors for the current theme
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets styles
     * @return \Swagger\Client\Model\ManageSiteBootstrapStyles
     */
    public function getStyles()
    {
        return $this->container['styles'];
    }

    /**
     * Sets styles
     * @param \Swagger\Client\Model\ManageSiteBootstrapStyles $styles Object containing values for the theme &quot;styles&quot; configuration set
     * @return $this
     */
    public function setStyles($styles)
    {
        $this->container['styles'] = $styles;

        return $this;
    }

    /**
     * Gets header
     * @return \Swagger\Client\Model\ManageSiteBootstrapHeader
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param \Swagger\Client\Model\ManageSiteBootstrapHeader $header Object containing values for the theme &quot;header&quot; configuration set
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets signin
     * @return \Swagger\Client\Model\ManageSiteBootstrapSignin
     */
    public function getSignin()
    {
        return $this->container['signin'];
    }

    /**
     * Sets signin
     * @param \Swagger\Client\Model\ManageSiteBootstrapSignin $signin Object containing values for the theme &quot;signin&quot; configuration set
     * @return $this
     */
    public function setSignin($signin)
    {
        $this->container['signin'] = $signin;

        return $this;
    }

    /**
     * Gets white_label
     * @return \Swagger\Client\Model\ManageSiteBootstrapWhiteLabel
     */
    public function getWhiteLabel()
    {
        return $this->container['white_label'];
    }

    /**
     * Sets white_label
     * @param \Swagger\Client\Model\ManageSiteBootstrapWhiteLabel $white_label 
     * @return $this
     */
    public function setWhiteLabel($white_label)
    {
        $this->container['white_label'] = $white_label;

        return $this;
    }

    /**
     * Gets home_page_texts
     * @return \Swagger\Client\Model\ManageSiteBootstrapHomePageTexts[]
     */
    public function getHomePageTexts()
    {
        return $this->container['home_page_texts'];
    }

    /**
     * Sets home_page_texts
     * @param \Swagger\Client\Model\ManageSiteBootstrapHomePageTexts[] $home_page_texts Custom texts for the login form indexed by the language code.
     * @return $this
     */
    public function setHomePageTexts($home_page_texts)
    {
        $this->container['home_page_texts'] = $home_page_texts;

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


