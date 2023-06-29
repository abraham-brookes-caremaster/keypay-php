<?php
/**
 * PayScheduleMetaDataModel
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
 * PayScheduleMetaDataModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayScheduleMetaDataModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayScheduleMetaDataModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pay_run_warnings' => '\OpenAPI\Client\Model\PayRunWarningModel[]',
        'frequencies' => 'string[]',
        'employment_selection_strategies' => 'string[]',
        'timesheet_import_options' => 'string[]',
        'publish_pay_slips_preferences' => 'string[]',
        'report_packs' => '\OpenAPI\Client\Model\ReportPackModel[]',
        'users_to_notify' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pay_run_warnings' => null,
        'frequencies' => null,
        'employment_selection_strategies' => null,
        'timesheet_import_options' => null,
        'publish_pay_slips_preferences' => null,
        'report_packs' => null,
        'users_to_notify' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pay_run_warnings' => false,
		'frequencies' => false,
		'employment_selection_strategies' => false,
		'timesheet_import_options' => false,
		'publish_pay_slips_preferences' => false,
		'report_packs' => false,
		'users_to_notify' => false
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
        'pay_run_warnings' => 'payRunWarnings',
        'frequencies' => 'frequencies',
        'employment_selection_strategies' => 'employmentSelectionStrategies',
        'timesheet_import_options' => 'timesheetImportOptions',
        'publish_pay_slips_preferences' => 'publishPaySlipsPreferences',
        'report_packs' => 'reportPacks',
        'users_to_notify' => 'usersToNotify'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_run_warnings' => 'setPayRunWarnings',
        'frequencies' => 'setFrequencies',
        'employment_selection_strategies' => 'setEmploymentSelectionStrategies',
        'timesheet_import_options' => 'setTimesheetImportOptions',
        'publish_pay_slips_preferences' => 'setPublishPaySlipsPreferences',
        'report_packs' => 'setReportPacks',
        'users_to_notify' => 'setUsersToNotify'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_run_warnings' => 'getPayRunWarnings',
        'frequencies' => 'getFrequencies',
        'employment_selection_strategies' => 'getEmploymentSelectionStrategies',
        'timesheet_import_options' => 'getTimesheetImportOptions',
        'publish_pay_slips_preferences' => 'getPublishPaySlipsPreferences',
        'report_packs' => 'getReportPacks',
        'users_to_notify' => 'getUsersToNotify'
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
        $this->setIfExists('pay_run_warnings', $data ?? [], null);
        $this->setIfExists('frequencies', $data ?? [], null);
        $this->setIfExists('employment_selection_strategies', $data ?? [], null);
        $this->setIfExists('timesheet_import_options', $data ?? [], null);
        $this->setIfExists('publish_pay_slips_preferences', $data ?? [], null);
        $this->setIfExists('report_packs', $data ?? [], null);
        $this->setIfExists('users_to_notify', $data ?? [], null);
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
     * Gets pay_run_warnings
     *
     * @return \OpenAPI\Client\Model\PayRunWarningModel[]|null
     */
    public function getPayRunWarnings()
    {
        return $this->container['pay_run_warnings'];
    }

    /**
     * Sets pay_run_warnings
     *
     * @param \OpenAPI\Client\Model\PayRunWarningModel[]|null $pay_run_warnings 
     *
     * @return self
     */
    public function setPayRunWarnings($pay_run_warnings)
    {
        if (is_null($pay_run_warnings)) {
            throw new \InvalidArgumentException('non-nullable pay_run_warnings cannot be null');
        }
        $this->container['pay_run_warnings'] = $pay_run_warnings;

        return $this;
    }

    /**
     * Gets frequencies
     *
     * @return string[]|null
     */
    public function getFrequencies()
    {
        return $this->container['frequencies'];
    }

    /**
     * Sets frequencies
     *
     * @param string[]|null $frequencies 
     *
     * @return self
     */
    public function setFrequencies($frequencies)
    {
        if (is_null($frequencies)) {
            throw new \InvalidArgumentException('non-nullable frequencies cannot be null');
        }
        $this->container['frequencies'] = $frequencies;

        return $this;
    }

    /**
     * Gets employment_selection_strategies
     *
     * @return string[]|null
     */
    public function getEmploymentSelectionStrategies()
    {
        return $this->container['employment_selection_strategies'];
    }

    /**
     * Sets employment_selection_strategies
     *
     * @param string[]|null $employment_selection_strategies 
     *
     * @return self
     */
    public function setEmploymentSelectionStrategies($employment_selection_strategies)
    {
        if (is_null($employment_selection_strategies)) {
            throw new \InvalidArgumentException('non-nullable employment_selection_strategies cannot be null');
        }
        $this->container['employment_selection_strategies'] = $employment_selection_strategies;

        return $this;
    }

    /**
     * Gets timesheet_import_options
     *
     * @return string[]|null
     */
    public function getTimesheetImportOptions()
    {
        return $this->container['timesheet_import_options'];
    }

    /**
     * Sets timesheet_import_options
     *
     * @param string[]|null $timesheet_import_options 
     *
     * @return self
     */
    public function setTimesheetImportOptions($timesheet_import_options)
    {
        if (is_null($timesheet_import_options)) {
            throw new \InvalidArgumentException('non-nullable timesheet_import_options cannot be null');
        }
        $this->container['timesheet_import_options'] = $timesheet_import_options;

        return $this;
    }

    /**
     * Gets publish_pay_slips_preferences
     *
     * @return string[]|null
     */
    public function getPublishPaySlipsPreferences()
    {
        return $this->container['publish_pay_slips_preferences'];
    }

    /**
     * Sets publish_pay_slips_preferences
     *
     * @param string[]|null $publish_pay_slips_preferences 
     *
     * @return self
     */
    public function setPublishPaySlipsPreferences($publish_pay_slips_preferences)
    {
        if (is_null($publish_pay_slips_preferences)) {
            throw new \InvalidArgumentException('non-nullable publish_pay_slips_preferences cannot be null');
        }
        $this->container['publish_pay_slips_preferences'] = $publish_pay_slips_preferences;

        return $this;
    }

    /**
     * Gets report_packs
     *
     * @return \OpenAPI\Client\Model\ReportPackModel[]|null
     */
    public function getReportPacks()
    {
        return $this->container['report_packs'];
    }

    /**
     * Sets report_packs
     *
     * @param \OpenAPI\Client\Model\ReportPackModel[]|null $report_packs 
     *
     * @return self
     */
    public function setReportPacks($report_packs)
    {
        if (is_null($report_packs)) {
            throw new \InvalidArgumentException('non-nullable report_packs cannot be null');
        }
        $this->container['report_packs'] = $report_packs;

        return $this;
    }

    /**
     * Gets users_to_notify
     *
     * @return string[]|null
     */
    public function getUsersToNotify()
    {
        return $this->container['users_to_notify'];
    }

    /**
     * Sets users_to_notify
     *
     * @param string[]|null $users_to_notify 
     *
     * @return self
     */
    public function setUsersToNotify($users_to_notify)
    {
        if (is_null($users_to_notify)) {
            throw new \InvalidArgumentException('non-nullable users_to_notify cannot be null');
        }
        $this->container['users_to_notify'] = $users_to_notify;

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


