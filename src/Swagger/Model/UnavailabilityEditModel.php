<?php
/**
 * UnavailabilityEditModel
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
 * UnavailabilityEditModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnavailabilityEditModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnavailabilityEditModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'end_date' => '\DateTime',
        'reason' => 'string',
        'recurring' => 'bool',
        'recurring_day' => 'string',
        'is_all_day' => 'bool',
        'view_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'end_date' => 'date-time',
        'reason' => null,
        'recurring' => null,
        'recurring_day' => null,
        'is_all_day' => null,
        'view_only' => null
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
        'id' => 'id',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'end_date' => 'endDate',
        'reason' => 'reason',
        'recurring' => 'recurring',
        'recurring_day' => 'recurringDay',
        'is_all_day' => 'isAllDay',
        'view_only' => 'viewOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'end_date' => 'setEndDate',
        'reason' => 'setReason',
        'recurring' => 'setRecurring',
        'recurring_day' => 'setRecurringDay',
        'is_all_day' => 'setIsAllDay',
        'view_only' => 'setViewOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'end_date' => 'getEndDate',
        'reason' => 'getReason',
        'recurring' => 'getRecurring',
        'recurring_day' => 'getRecurringDay',
        'is_all_day' => 'getIsAllDay',
        'view_only' => 'getViewOnly'
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

    const RECURRING_DAY_SUNDAY = 'Sunday';
    const RECURRING_DAY_MONDAY = 'Monday';
    const RECURRING_DAY_TUESDAY = 'Tuesday';
    const RECURRING_DAY_WEDNESDAY = 'Wednesday';
    const RECURRING_DAY_THURSDAY = 'Thursday';
    const RECURRING_DAY_FRIDAY = 'Friday';
    const RECURRING_DAY_SATURDAY = 'Saturday';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurringDayAllowableValues()
    {
        return [
            self::RECURRING_DAY_SUNDAY,
            self::RECURRING_DAY_MONDAY,
            self::RECURRING_DAY_TUESDAY,
            self::RECURRING_DAY_WEDNESDAY,
            self::RECURRING_DAY_THURSDAY,
            self::RECURRING_DAY_FRIDAY,
            self::RECURRING_DAY_SATURDAY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
        $this->container['recurring_day'] = isset($data['recurring_day']) ? $data['recurring_day'] : null;
        $this->container['is_all_day'] = isset($data['is_all_day']) ? $data['is_all_day'] : null;
        $this->container['view_only'] = isset($data['view_only']) ? $data['view_only'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecurringDayAllowableValues();
        if (!is_null($this->container['recurring_day']) && !in_array($this->container['recurring_day'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurring_day', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date 
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date 
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date 
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason 
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool $recurring 
     *
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets recurring_day
     *
     * @return string
     */
    public function getRecurringDay()
    {
        return $this->container['recurring_day'];
    }

    /**
     * Sets recurring_day
     *
     * @param string $recurring_day 
     *
     * @return $this
     */
    public function setRecurringDay($recurring_day)
    {
        $allowedValues = $this->getRecurringDayAllowableValues();
        if (!is_null($recurring_day) && !in_array($recurring_day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurring_day', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurring_day'] = $recurring_day;

        return $this;
    }

    /**
     * Gets is_all_day
     *
     * @return bool
     */
    public function getIsAllDay()
    {
        return $this->container['is_all_day'];
    }

    /**
     * Sets is_all_day
     *
     * @param bool $is_all_day 
     *
     * @return $this
     */
    public function setIsAllDay($is_all_day)
    {
        $this->container['is_all_day'] = $is_all_day;

        return $this;
    }

    /**
     * Gets view_only
     *
     * @return bool
     */
    public function getViewOnly()
    {
        return $this->container['view_only'];
    }

    /**
     * Sets view_only
     *
     * @param bool $view_only 
     *
     * @return $this
     */
    public function setViewOnly($view_only)
    {
        $this->container['view_only'] = $view_only;

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


