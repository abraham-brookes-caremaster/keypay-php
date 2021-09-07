<?php
/**
 * TimeAndAttendanceBreakModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: AU
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TimeAndAttendanceBreakModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeAndAttendanceBreakModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeAndAttendanceBreakModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_time_utc' => '\DateTime',
        'start_time_local' => '\DateTime',
        'end_time_utc' => '\DateTime',
        'end_time_local' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_time_utc' => 'date-time',
        'start_time_local' => 'date-time',
        'end_time_utc' => 'date-time',
        'end_time_local' => 'date-time'
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
        'start_time_utc' => 'startTimeUtc',
        'start_time_local' => 'startTimeLocal',
        'end_time_utc' => 'endTimeUtc',
        'end_time_local' => 'endTimeLocal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_time_utc' => 'setStartTimeUtc',
        'start_time_local' => 'setStartTimeLocal',
        'end_time_utc' => 'setEndTimeUtc',
        'end_time_local' => 'setEndTimeLocal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_time_utc' => 'getStartTimeUtc',
        'start_time_local' => 'getStartTimeLocal',
        'end_time_utc' => 'getEndTimeUtc',
        'end_time_local' => 'getEndTimeLocal'
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
        $this->container['start_time_utc'] = isset($data['start_time_utc']) ? $data['start_time_utc'] : null;
        $this->container['start_time_local'] = isset($data['start_time_local']) ? $data['start_time_local'] : null;
        $this->container['end_time_utc'] = isset($data['end_time_utc']) ? $data['end_time_utc'] : null;
        $this->container['end_time_local'] = isset($data['end_time_local']) ? $data['end_time_local'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets start_time_utc
     *
     * @return \DateTime
     */
    public function getStartTimeUtc()
    {
        return $this->container['start_time_utc'];
    }

    /**
     * Sets start_time_utc
     *
     * @param \DateTime $start_time_utc 
     *
     * @return $this
     */
    public function setStartTimeUtc($start_time_utc)
    {
        $this->container['start_time_utc'] = $start_time_utc;

        return $this;
    }

    /**
     * Gets start_time_local
     *
     * @return \DateTime
     */
    public function getStartTimeLocal()
    {
        return $this->container['start_time_local'];
    }

    /**
     * Sets start_time_local
     *
     * @param \DateTime $start_time_local 
     *
     * @return $this
     */
    public function setStartTimeLocal($start_time_local)
    {
        $this->container['start_time_local'] = $start_time_local;

        return $this;
    }

    /**
     * Gets end_time_utc
     *
     * @return \DateTime
     */
    public function getEndTimeUtc()
    {
        return $this->container['end_time_utc'];
    }

    /**
     * Sets end_time_utc
     *
     * @param \DateTime $end_time_utc 
     *
     * @return $this
     */
    public function setEndTimeUtc($end_time_utc)
    {
        $this->container['end_time_utc'] = $end_time_utc;

        return $this;
    }

    /**
     * Gets end_time_local
     *
     * @return \DateTime
     */
    public function getEndTimeLocal()
    {
        return $this->container['end_time_local'];
    }

    /**
     * Sets end_time_local
     *
     * @param \DateTime $end_time_local 
     *
     * @return $this
     */
    public function setEndTimeLocal($end_time_local)
    {
        $this->container['end_time_local'] = $end_time_local;

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


