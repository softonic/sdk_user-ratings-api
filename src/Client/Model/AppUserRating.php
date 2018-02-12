<?php
/**
 * AppUserRating
 *
 * PHP version 5
 *
 * @category Class
 * @package  Softonic\UserRatingsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * User ratings API docs
 *
 * To access the API: 1. Register a client with the proper permissions (`user-ratings-api.*`) in the [Softonic OAuth Admin](https://oauth-admin.softonic.com) 1. Retrieve a token for that client with the proper scopes from the [Softonic OAuth API](https://oauth-v2.softonic.com). 1. Copy the token in the input field at the top of the page
 *
 * OpenAPI spec version: 1.17.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Softonic\UserRatingsApiSdk\Client\Model;

use \ArrayAccess;
use \Softonic\UserRatingsApiSdk\ObjectSerializer;

/**
 * AppUserRating Class Doc Comment
 *
 * @category Class
 * @package  Softonic\UserRatingsApiSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AppUserRating implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AppUserRating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locale' => 'string',
        'user_id' => 'string',
        'is_anonymous' => 'bool',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locale' => null,
        'user_id' => null,
        'is_anonymous' => null,
        'value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'locale' => 'locale',
        'user_id' => 'userId',
        'is_anonymous' => 'isAnonymous',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locale' => 'setLocale',
        'user_id' => 'setUserId',
        'is_anonymous' => 'setIsAnonymous',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locale' => 'getLocale',
        'user_id' => 'getUserId',
        'is_anonymous' => 'getIsAnonymous',
        'value' => 'getValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const LOCALE_EN_US = 'en-US';
    const LOCALE_ES_ES = 'es-ES';
    const LOCALE_PT_BR = 'pt-BR';
    const LOCALE_FR_FR = 'fr-FR';
    const LOCALE_IT_IT = 'it-IT';
    const LOCALE_DE_DE = 'de-DE';
    const LOCALE_NL_NL = 'nl-NL';
    const LOCALE_PL_PL = 'pl-PL';
    const LOCALE_JA_JP = 'ja-JP';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocaleAllowableValues()
    {
        return [
            self::LOCALE_EN_US,
            self::LOCALE_ES_ES,
            self::LOCALE_PT_BR,
            self::LOCALE_FR_FR,
            self::LOCALE_IT_IT,
            self::LOCALE_DE_DE,
            self::LOCALE_NL_NL,
            self::LOCALE_PL_PL,
            self::LOCALE_JA_JP,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['is_anonymous'] = isset($data['is_anonymous']) ? $data['is_anonymous'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        $allowedValues = $this->getLocaleAllowableValues();
        if (!in_array($this->container['locale'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'locale', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['is_anonymous'] === null) {
            $invalidProperties[] = "'is_anonymous' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if (($this->container['value'] > 10)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 10.";
        }

        if (($this->container['value'] < 0)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['locale'] === null) {
            return false;
        }
        $allowedValues = $this->getLocaleAllowableValues();
        if (!in_array($this->container['locale'], $allowedValues)) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['is_anonymous'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if ($this->container['value'] > 10) {
            return false;
        }
        if ($this->container['value'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $allowedValues = $this->getLocaleAllowableValues();
        if (!in_array($locale, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'locale', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id ID of the user. IP address for anonymous users
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets is_anonymous
     *
     * @return bool
     */
    public function getIsAnonymous()
    {
        return $this->container['is_anonymous'];
    }

    /**
     * Sets is_anonymous
     *
     * @param bool $is_anonymous User is anonymous
     *
     * @return $this
     */
    public function setIsAnonymous($is_anonymous)
    {
        $this->container['is_anonymous'] = $is_anonymous;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value Rating value
     *
     * @return $this
     */
    public function setValue($value)
    {

        if (($value > 10)) {
            throw new \InvalidArgumentException('invalid value for $value when calling AppUserRating., must be smaller than or equal to 10.');
        }
        if (($value < 0)) {
            throw new \InvalidArgumentException('invalid value for $value when calling AppUserRating., must be bigger than or equal to 0.');
        }

        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


