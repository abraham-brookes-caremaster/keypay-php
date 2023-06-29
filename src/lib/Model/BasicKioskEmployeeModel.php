<?php
/**
 * BasicKioskEmployeeModel
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
 * BasicKioskEmployeeModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BasicKioskEmployeeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BasicKioskEmployeeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'int',
        'first_name' => 'string',
        'surname' => 'string',
        'name' => 'string',
        'has_email' => 'bool',
        'profile_image_url' => 'string',
        'mobile_number' => 'string',
        'status' => 'string',
        'long_shift' => 'bool',
        'clock_on_time_utc' => '\DateTime',
        'break_start_time_utc' => '\DateTime',
        'recorded_time_utc' => '\DateTime',
        'current_shift_id' => 'int',
        'employee_group_ids' => 'int[]',
        'employee_start_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => 'int32',
        'first_name' => null,
        'surname' => null,
        'name' => null,
        'has_email' => null,
        'profile_image_url' => null,
        'mobile_number' => null,
        'status' => null,
        'long_shift' => null,
        'clock_on_time_utc' => 'date-time',
        'break_start_time_utc' => 'date-time',
        'recorded_time_utc' => 'date-time',
        'current_shift_id' => 'int32',
        'employee_group_ids' => 'int32',
        'employee_start_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
		'first_name' => false,
		'surname' => false,
		'name' => false,
		'has_email' => false,
		'profile_image_url' => false,
		'mobile_number' => false,
		'status' => false,
		'long_shift' => false,
		'clock_on_time_utc' => false,
		'break_start_time_utc' => false,
		'recorded_time_utc' => false,
		'current_shift_id' => false,
		'employee_group_ids' => false,
		'employee_start_date' => false
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
        'employee_id' => 'employeeId',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'name' => 'name',
        'has_email' => 'hasEmail',
        'profile_image_url' => 'profileImageUrl',
        'mobile_number' => 'mobileNumber',
        'status' => 'status',
        'long_shift' => 'longShift',
        'clock_on_time_utc' => 'clockOnTimeUtc',
        'break_start_time_utc' => 'breakStartTimeUtc',
        'recorded_time_utc' => 'recordedTimeUtc',
        'current_shift_id' => 'currentShiftId',
        'employee_group_ids' => 'employeeGroupIds',
        'employee_start_date' => 'employeeStartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'name' => 'setName',
        'has_email' => 'setHasEmail',
        'profile_image_url' => 'setProfileImageUrl',
        'mobile_number' => 'setMobileNumber',
        'status' => 'setStatus',
        'long_shift' => 'setLongShift',
        'clock_on_time_utc' => 'setClockOnTimeUtc',
        'break_start_time_utc' => 'setBreakStartTimeUtc',
        'recorded_time_utc' => 'setRecordedTimeUtc',
        'current_shift_id' => 'setCurrentShiftId',
        'employee_group_ids' => 'setEmployeeGroupIds',
        'employee_start_date' => 'setEmployeeStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'name' => 'getName',
        'has_email' => 'getHasEmail',
        'profile_image_url' => 'getProfileImageUrl',
        'mobile_number' => 'getMobileNumber',
        'status' => 'getStatus',
        'long_shift' => 'getLongShift',
        'clock_on_time_utc' => 'getClockOnTimeUtc',
        'break_start_time_utc' => 'getBreakStartTimeUtc',
        'recorded_time_utc' => 'getRecordedTimeUtc',
        'current_shift_id' => 'getCurrentShiftId',
        'employee_group_ids' => 'getEmployeeGroupIds',
        'employee_start_date' => 'getEmployeeStartDate'
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

    public const STATUS_NOT_CLOCKED_ON = 'NotClockedOn';
    public const STATUS_CLOCKED_ON = 'ClockedOn';
    public const STATUS_ON_BREAK = 'OnBreak';
    public const STATUS_CLOCKED_OFF = 'ClockedOff';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_CLOCKED_ON,
            self::STATUS_CLOCKED_ON,
            self::STATUS_ON_BREAK,
            self::STATUS_CLOCKED_OFF,
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('has_email', $data ?? [], null);
        $this->setIfExists('profile_image_url', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('long_shift', $data ?? [], null);
        $this->setIfExists('clock_on_time_utc', $data ?? [], null);
        $this->setIfExists('break_start_time_utc', $data ?? [], null);
        $this->setIfExists('recorded_time_utc', $data ?? [], null);
        $this->setIfExists('current_shift_id', $data ?? [], null);
        $this->setIfExists('employee_group_ids', $data ?? [], null);
        $this->setIfExists('employee_start_date', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets employee_id
     *
     * @return int|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int|null $employee_id 
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname 
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_email
     *
     * @return bool|null
     */
    public function getHasEmail()
    {
        return $this->container['has_email'];
    }

    /**
     * Sets has_email
     *
     * @param bool|null $has_email 
     *
     * @return self
     */
    public function setHasEmail($has_email)
    {
        if (is_null($has_email)) {
            throw new \InvalidArgumentException('non-nullable has_email cannot be null');
        }
        $this->container['has_email'] = $has_email;

        return $this;
    }

    /**
     * Gets profile_image_url
     *
     * @return string|null
     */
    public function getProfileImageUrl()
    {
        return $this->container['profile_image_url'];
    }

    /**
     * Sets profile_image_url
     *
     * @param string|null $profile_image_url 
     *
     * @return self
     */
    public function setProfileImageUrl($profile_image_url)
    {
        if (is_null($profile_image_url)) {
            throw new \InvalidArgumentException('non-nullable profile_image_url cannot be null');
        }
        $this->container['profile_image_url'] = $profile_image_url;

        return $this;
    }

    /**
     * Gets mobile_number
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string|null $mobile_number 
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }
        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets long_shift
     *
     * @return bool|null
     */
    public function getLongShift()
    {
        return $this->container['long_shift'];
    }

    /**
     * Sets long_shift
     *
     * @param bool|null $long_shift 
     *
     * @return self
     */
    public function setLongShift($long_shift)
    {
        if (is_null($long_shift)) {
            throw new \InvalidArgumentException('non-nullable long_shift cannot be null');
        }
        $this->container['long_shift'] = $long_shift;

        return $this;
    }

    /**
     * Gets clock_on_time_utc
     *
     * @return \DateTime|null
     */
    public function getClockOnTimeUtc()
    {
        return $this->container['clock_on_time_utc'];
    }

    /**
     * Sets clock_on_time_utc
     *
     * @param \DateTime|null $clock_on_time_utc 
     *
     * @return self
     */
    public function setClockOnTimeUtc($clock_on_time_utc)
    {
        if (is_null($clock_on_time_utc)) {
            throw new \InvalidArgumentException('non-nullable clock_on_time_utc cannot be null');
        }
        $this->container['clock_on_time_utc'] = $clock_on_time_utc;

        return $this;
    }

    /**
     * Gets break_start_time_utc
     *
     * @return \DateTime|null
     */
    public function getBreakStartTimeUtc()
    {
        return $this->container['break_start_time_utc'];
    }

    /**
     * Sets break_start_time_utc
     *
     * @param \DateTime|null $break_start_time_utc 
     *
     * @return self
     */
    public function setBreakStartTimeUtc($break_start_time_utc)
    {
        if (is_null($break_start_time_utc)) {
            throw new \InvalidArgumentException('non-nullable break_start_time_utc cannot be null');
        }
        $this->container['break_start_time_utc'] = $break_start_time_utc;

        return $this;
    }

    /**
     * Gets recorded_time_utc
     *
     * @return \DateTime|null
     */
    public function getRecordedTimeUtc()
    {
        return $this->container['recorded_time_utc'];
    }

    /**
     * Sets recorded_time_utc
     *
     * @param \DateTime|null $recorded_time_utc 
     *
     * @return self
     */
    public function setRecordedTimeUtc($recorded_time_utc)
    {
        if (is_null($recorded_time_utc)) {
            throw new \InvalidArgumentException('non-nullable recorded_time_utc cannot be null');
        }
        $this->container['recorded_time_utc'] = $recorded_time_utc;

        return $this;
    }

    /**
     * Gets current_shift_id
     *
     * @return int|null
     */
    public function getCurrentShiftId()
    {
        return $this->container['current_shift_id'];
    }

    /**
     * Sets current_shift_id
     *
     * @param int|null $current_shift_id 
     *
     * @return self
     */
    public function setCurrentShiftId($current_shift_id)
    {
        if (is_null($current_shift_id)) {
            throw new \InvalidArgumentException('non-nullable current_shift_id cannot be null');
        }
        $this->container['current_shift_id'] = $current_shift_id;

        return $this;
    }

    /**
     * Gets employee_group_ids
     *
     * @return int[]|null
     */
    public function getEmployeeGroupIds()
    {
        return $this->container['employee_group_ids'];
    }

    /**
     * Sets employee_group_ids
     *
     * @param int[]|null $employee_group_ids 
     *
     * @return self
     */
    public function setEmployeeGroupIds($employee_group_ids)
    {
        if (is_null($employee_group_ids)) {
            throw new \InvalidArgumentException('non-nullable employee_group_ids cannot be null');
        }
        $this->container['employee_group_ids'] = $employee_group_ids;

        return $this;
    }

    /**
     * Gets employee_start_date
     *
     * @return \DateTime|null
     */
    public function getEmployeeStartDate()
    {
        return $this->container['employee_start_date'];
    }

    /**
     * Sets employee_start_date
     *
     * @param \DateTime|null $employee_start_date 
     *
     * @return self
     */
    public function setEmployeeStartDate($employee_start_date)
    {
        if (is_null($employee_start_date)) {
            throw new \InvalidArgumentException('non-nullable employee_start_date cannot be null');
        }
        $this->container['employee_start_date'] = $employee_start_date;

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


