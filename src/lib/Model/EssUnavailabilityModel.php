<?php
/**
 * EssUnavailabilityModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Australia
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: AU
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EssUnavailabilityModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EssUnavailabilityModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EssUnavailabilityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'end_date' => '\DateTime',
        'reason' => 'string',
        'recurring' => 'bool',
        'recurring_day' => 'string',
        'recurring_days' => 'string',
        'recurring_days_csv' => 'string',
        'is_all_day' => 'bool',
        'view_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'end_date' => 'date-time',
        'reason' => null,
        'recurring' => null,
        'recurring_day' => null,
        'recurring_days' => null,
        'recurring_days_csv' => null,
        'is_all_day' => null,
        'view_only' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'from_date' => false,
		'to_date' => false,
		'end_date' => false,
		'reason' => false,
		'recurring' => false,
		'recurring_day' => false,
		'recurring_days' => false,
		'recurring_days_csv' => false,
		'is_all_day' => false,
		'view_only' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'recurring_days' => 'recurringDays',
        'recurring_days_csv' => 'recurringDaysCsv',
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
        'recurring_days' => 'setRecurringDays',
        'recurring_days_csv' => 'setRecurringDaysCsv',
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
        'recurring_days' => 'getRecurringDays',
        'recurring_days_csv' => 'getRecurringDaysCsv',
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
        return self::$openAPIModelName;
    }

    public const RECURRING_DAY_SUNDAY = 'Sunday';
    public const RECURRING_DAY_MONDAY = 'Monday';
    public const RECURRING_DAY_TUESDAY = 'Tuesday';
    public const RECURRING_DAY_WEDNESDAY = 'Wednesday';
    public const RECURRING_DAY_THURSDAY = 'Thursday';
    public const RECURRING_DAY_FRIDAY = 'Friday';
    public const RECURRING_DAY_SATURDAY = 'Saturday';
    public const RECURRING_DAYS_SUNDAY = 'Sunday';
    public const RECURRING_DAYS_MONDAY = 'Monday';
    public const RECURRING_DAYS_TUESDAY = 'Tuesday';
    public const RECURRING_DAYS_WEDNESDAY = 'Wednesday';
    public const RECURRING_DAYS_THURSDAY = 'Thursday';
    public const RECURRING_DAYS_FRIDAY = 'Friday';
    public const RECURRING_DAYS_SATURDAY = 'Saturday';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurringDaysAllowableValues()
    {
        return [
            self::RECURRING_DAYS_SUNDAY,
            self::RECURRING_DAYS_MONDAY,
            self::RECURRING_DAYS_TUESDAY,
            self::RECURRING_DAYS_WEDNESDAY,
            self::RECURRING_DAYS_THURSDAY,
            self::RECURRING_DAYS_FRIDAY,
            self::RECURRING_DAYS_SATURDAY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('recurring', $data ?? [], null);
        $this->setIfExists('recurring_day', $data ?? [], null);
        $this->setIfExists('recurring_days', $data ?? [], null);
        $this->setIfExists('recurring_days_csv', $data ?? [], null);
        $this->setIfExists('is_all_day', $data ?? [], null);
        $this->setIfExists('view_only', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
                "invalid value '%s' for 'recurring_day', must be one of '%s'",
                $this->container['recurring_day'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRecurringDaysAllowableValues();
        if (!is_null($this->container['recurring_days']) && !in_array($this->container['recurring_days'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recurring_days', must be one of '%s'",
                $this->container['recurring_days'],
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date 
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime|null $to_date 
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date 
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason 
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool|null
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool|null $recurring 
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        if (is_null($recurring)) {
            throw new \InvalidArgumentException('non-nullable recurring cannot be null');
        }
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets recurring_day
     *
     * @return string|null
     */
    public function getRecurringDay()
    {
        return $this->container['recurring_day'];
    }

    /**
     * Sets recurring_day
     *
     * @param string|null $recurring_day 
     *
     * @return self
     */
    public function setRecurringDay($recurring_day)
    {
        if (is_null($recurring_day)) {
            throw new \InvalidArgumentException('non-nullable recurring_day cannot be null');
        }
        $allowedValues = $this->getRecurringDayAllowableValues();
        if (!in_array($recurring_day, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recurring_day', must be one of '%s'",
                    $recurring_day,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurring_day'] = $recurring_day;

        return $this;
    }

    /**
     * Gets recurring_days
     *
     * @return string|null
     */
    public function getRecurringDays()
    {
        return $this->container['recurring_days'];
    }

    /**
     * Sets recurring_days
     *
     * @param string|null $recurring_days 
     *
     * @return self
     */
    public function setRecurringDays($recurring_days)
    {
        if (is_null($recurring_days)) {
            throw new \InvalidArgumentException('non-nullable recurring_days cannot be null');
        }
        $allowedValues = $this->getRecurringDaysAllowableValues();
        if (!in_array($recurring_days, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recurring_days', must be one of '%s'",
                    $recurring_days,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurring_days'] = $recurring_days;

        return $this;
    }

    /**
     * Gets recurring_days_csv
     *
     * @return string|null
     */
    public function getRecurringDaysCsv()
    {
        return $this->container['recurring_days_csv'];
    }

    /**
     * Sets recurring_days_csv
     *
     * @param string|null $recurring_days_csv 
     *
     * @return self
     */
    public function setRecurringDaysCsv($recurring_days_csv)
    {
        if (is_null($recurring_days_csv)) {
            throw new \InvalidArgumentException('non-nullable recurring_days_csv cannot be null');
        }
        $this->container['recurring_days_csv'] = $recurring_days_csv;

        return $this;
    }

    /**
     * Gets is_all_day
     *
     * @return bool|null
     */
    public function getIsAllDay()
    {
        return $this->container['is_all_day'];
    }

    /**
     * Sets is_all_day
     *
     * @param bool|null $is_all_day 
     *
     * @return self
     */
    public function setIsAllDay($is_all_day)
    {
        if (is_null($is_all_day)) {
            throw new \InvalidArgumentException('non-nullable is_all_day cannot be null');
        }
        $this->container['is_all_day'] = $is_all_day;

        return $this;
    }

    /**
     * Gets view_only
     *
     * @return bool|null
     */
    public function getViewOnly()
    {
        return $this->container['view_only'];
    }

    /**
     * Sets view_only
     *
     * @param bool|null $view_only 
     *
     * @return self
     */
    public function setViewOnly($view_only)
    {
        if (is_null($view_only)) {
            throw new \InvalidArgumentException('non-nullable view_only cannot be null');
        }
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


