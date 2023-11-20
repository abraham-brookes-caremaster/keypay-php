<?php
/**
 * AuBusinessLeaveSettingsModel
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
 * AuBusinessLeaveSettingsModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuBusinessLeaveSettingsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuBusinessLeaveSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'leave_calculation_method' => 'string',
        'require_notes_for_leave_requests' => 'bool',
        'leave_year_should_start_on' => '\DateTime',
        'leave_accrual_start_date_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'leave_calculation_method' => null,
        'require_notes_for_leave_requests' => null,
        'leave_year_should_start_on' => 'date-time',
        'leave_accrual_start_date_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'leave_calculation_method' => false,
		'require_notes_for_leave_requests' => false,
		'leave_year_should_start_on' => false,
		'leave_accrual_start_date_type' => false
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
        'leave_calculation_method' => 'leaveCalculationMethod',
        'require_notes_for_leave_requests' => 'requireNotesForLeaveRequests',
        'leave_year_should_start_on' => 'leaveYearShouldStartOn',
        'leave_accrual_start_date_type' => 'leaveAccrualStartDateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_calculation_method' => 'setLeaveCalculationMethod',
        'require_notes_for_leave_requests' => 'setRequireNotesForLeaveRequests',
        'leave_year_should_start_on' => 'setLeaveYearShouldStartOn',
        'leave_accrual_start_date_type' => 'setLeaveAccrualStartDateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_calculation_method' => 'getLeaveCalculationMethod',
        'require_notes_for_leave_requests' => 'getRequireNotesForLeaveRequests',
        'leave_year_should_start_on' => 'getLeaveYearShouldStartOn',
        'leave_accrual_start_date_type' => 'getLeaveAccrualStartDateType'
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

    public const LEAVE_CALCULATION_METHOD_FULL_YEAR365 = 'FullYear365';
    public const LEAVE_CALCULATION_METHOD_WORKDAYS261 = 'Workdays261';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_EMPLOYEE_START_DATE = 'EmployeeStartDate';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_SPECIFIED_DATE = 'SpecifiedDate';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_CALENDAR_YEAR = 'CalendarYear';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveCalculationMethodAllowableValues()
    {
        return [
            self::LEAVE_CALCULATION_METHOD_FULL_YEAR365,
            self::LEAVE_CALCULATION_METHOD_WORKDAYS261,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveAccrualStartDateTypeAllowableValues()
    {
        return [
            self::LEAVE_ACCRUAL_START_DATE_TYPE_EMPLOYEE_START_DATE,
            self::LEAVE_ACCRUAL_START_DATE_TYPE_SPECIFIED_DATE,
            self::LEAVE_ACCRUAL_START_DATE_TYPE_CALENDAR_YEAR,
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
        $this->setIfExists('leave_calculation_method', $data ?? [], null);
        $this->setIfExists('require_notes_for_leave_requests', $data ?? [], null);
        $this->setIfExists('leave_year_should_start_on', $data ?? [], null);
        $this->setIfExists('leave_accrual_start_date_type', $data ?? [], null);
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

        $allowedValues = $this->getLeaveCalculationMethodAllowableValues();
        if (!is_null($this->container['leave_calculation_method']) && !in_array($this->container['leave_calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'leave_calculation_method', must be one of '%s'",
                $this->container['leave_calculation_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveAccrualStartDateTypeAllowableValues();
        if (!is_null($this->container['leave_accrual_start_date_type']) && !in_array($this->container['leave_accrual_start_date_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'leave_accrual_start_date_type', must be one of '%s'",
                $this->container['leave_accrual_start_date_type'],
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
     * Gets leave_calculation_method
     *
     * @return string|null
     */
    public function getLeaveCalculationMethod()
    {
        return $this->container['leave_calculation_method'];
    }

    /**
     * Sets leave_calculation_method
     *
     * @param string|null $leave_calculation_method 
     *
     * @return self
     */
    public function setLeaveCalculationMethod($leave_calculation_method)
    {
        if (is_null($leave_calculation_method)) {
            throw new \InvalidArgumentException('non-nullable leave_calculation_method cannot be null');
        }
        $allowedValues = $this->getLeaveCalculationMethodAllowableValues();
        if (!in_array($leave_calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'leave_calculation_method', must be one of '%s'",
                    $leave_calculation_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_calculation_method'] = $leave_calculation_method;

        return $this;
    }

    /**
     * Gets require_notes_for_leave_requests
     *
     * @return bool|null
     */
    public function getRequireNotesForLeaveRequests()
    {
        return $this->container['require_notes_for_leave_requests'];
    }

    /**
     * Sets require_notes_for_leave_requests
     *
     * @param bool|null $require_notes_for_leave_requests 
     *
     * @return self
     */
    public function setRequireNotesForLeaveRequests($require_notes_for_leave_requests)
    {
        if (is_null($require_notes_for_leave_requests)) {
            throw new \InvalidArgumentException('non-nullable require_notes_for_leave_requests cannot be null');
        }
        $this->container['require_notes_for_leave_requests'] = $require_notes_for_leave_requests;

        return $this;
    }

    /**
     * Gets leave_year_should_start_on
     *
     * @return \DateTime|null
     */
    public function getLeaveYearShouldStartOn()
    {
        return $this->container['leave_year_should_start_on'];
    }

    /**
     * Sets leave_year_should_start_on
     *
     * @param \DateTime|null $leave_year_should_start_on 
     *
     * @return self
     */
    public function setLeaveYearShouldStartOn($leave_year_should_start_on)
    {
        if (is_null($leave_year_should_start_on)) {
            throw new \InvalidArgumentException('non-nullable leave_year_should_start_on cannot be null');
        }
        $this->container['leave_year_should_start_on'] = $leave_year_should_start_on;

        return $this;
    }

    /**
     * Gets leave_accrual_start_date_type
     *
     * @return string|null
     */
    public function getLeaveAccrualStartDateType()
    {
        return $this->container['leave_accrual_start_date_type'];
    }

    /**
     * Sets leave_accrual_start_date_type
     *
     * @param string|null $leave_accrual_start_date_type 
     *
     * @return self
     */
    public function setLeaveAccrualStartDateType($leave_accrual_start_date_type)
    {
        if (is_null($leave_accrual_start_date_type)) {
            throw new \InvalidArgumentException('non-nullable leave_accrual_start_date_type cannot be null');
        }
        $allowedValues = $this->getLeaveAccrualStartDateTypeAllowableValues();
        if (!in_array($leave_accrual_start_date_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'leave_accrual_start_date_type', must be one of '%s'",
                    $leave_accrual_start_date_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_accrual_start_date_type'] = $leave_accrual_start_date_type;

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


