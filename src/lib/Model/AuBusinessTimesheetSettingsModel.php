<?php
/**
 * AuBusinessTimesheetSettingsModel
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
 * AuBusinessTimesheetSettingsModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuBusinessTimesheetSettingsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuBusinessTimesheetSettingsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_to_select_higher_classification' => 'bool',
        'require_start_and_stop_times' => 'bool',
        'require_work_type' => 'bool',
        'can_set_require_work_type_setting' => 'bool',
        'require_location' => 'bool',
        'include_all_timesheet_notes_in_pay_run' => 'bool',
        'timesheet_rejection_notifications' => 'bool',
        'managers_can_create_timesheets_for_employees_that_are_not_enabled' => 'bool',
        'timesheets_enabled' => 'bool',
        'approve_if_matches_roster_shift' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_to_select_higher_classification' => null,
        'require_start_and_stop_times' => null,
        'require_work_type' => null,
        'can_set_require_work_type_setting' => null,
        'require_location' => null,
        'include_all_timesheet_notes_in_pay_run' => null,
        'timesheet_rejection_notifications' => null,
        'managers_can_create_timesheets_for_employees_that_are_not_enabled' => null,
        'timesheets_enabled' => null,
        'approve_if_matches_roster_shift' => null
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
        'allow_to_select_higher_classification' => 'allowToSelectHigherClassification',
        'require_start_and_stop_times' => 'requireStartAndStopTimes',
        'require_work_type' => 'requireWorkType',
        'can_set_require_work_type_setting' => 'canSetRequireWorkTypeSetting',
        'require_location' => 'requireLocation',
        'include_all_timesheet_notes_in_pay_run' => 'includeAllTimesheetNotesInPayRun',
        'timesheet_rejection_notifications' => 'timesheetRejectionNotifications',
        'managers_can_create_timesheets_for_employees_that_are_not_enabled' => 'managersCanCreateTimesheetsForEmployeesThatAreNotEnabled',
        'timesheets_enabled' => 'timesheetsEnabled',
        'approve_if_matches_roster_shift' => 'approveIfMatchesRosterShift'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_to_select_higher_classification' => 'setAllowToSelectHigherClassification',
        'require_start_and_stop_times' => 'setRequireStartAndStopTimes',
        'require_work_type' => 'setRequireWorkType',
        'can_set_require_work_type_setting' => 'setCanSetRequireWorkTypeSetting',
        'require_location' => 'setRequireLocation',
        'include_all_timesheet_notes_in_pay_run' => 'setIncludeAllTimesheetNotesInPayRun',
        'timesheet_rejection_notifications' => 'setTimesheetRejectionNotifications',
        'managers_can_create_timesheets_for_employees_that_are_not_enabled' => 'setManagersCanCreateTimesheetsForEmployeesThatAreNotEnabled',
        'timesheets_enabled' => 'setTimesheetsEnabled',
        'approve_if_matches_roster_shift' => 'setApproveIfMatchesRosterShift'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_to_select_higher_classification' => 'getAllowToSelectHigherClassification',
        'require_start_and_stop_times' => 'getRequireStartAndStopTimes',
        'require_work_type' => 'getRequireWorkType',
        'can_set_require_work_type_setting' => 'getCanSetRequireWorkTypeSetting',
        'require_location' => 'getRequireLocation',
        'include_all_timesheet_notes_in_pay_run' => 'getIncludeAllTimesheetNotesInPayRun',
        'timesheet_rejection_notifications' => 'getTimesheetRejectionNotifications',
        'managers_can_create_timesheets_for_employees_that_are_not_enabled' => 'getManagersCanCreateTimesheetsForEmployeesThatAreNotEnabled',
        'timesheets_enabled' => 'getTimesheetsEnabled',
        'approve_if_matches_roster_shift' => 'getApproveIfMatchesRosterShift'
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
        $this->container['allow_to_select_higher_classification'] = isset($data['allow_to_select_higher_classification']) ? $data['allow_to_select_higher_classification'] : null;
        $this->container['require_start_and_stop_times'] = isset($data['require_start_and_stop_times']) ? $data['require_start_and_stop_times'] : null;
        $this->container['require_work_type'] = isset($data['require_work_type']) ? $data['require_work_type'] : null;
        $this->container['can_set_require_work_type_setting'] = isset($data['can_set_require_work_type_setting']) ? $data['can_set_require_work_type_setting'] : null;
        $this->container['require_location'] = isset($data['require_location']) ? $data['require_location'] : null;
        $this->container['include_all_timesheet_notes_in_pay_run'] = isset($data['include_all_timesheet_notes_in_pay_run']) ? $data['include_all_timesheet_notes_in_pay_run'] : null;
        $this->container['timesheet_rejection_notifications'] = isset($data['timesheet_rejection_notifications']) ? $data['timesheet_rejection_notifications'] : null;
        $this->container['managers_can_create_timesheets_for_employees_that_are_not_enabled'] = isset($data['managers_can_create_timesheets_for_employees_that_are_not_enabled']) ? $data['managers_can_create_timesheets_for_employees_that_are_not_enabled'] : null;
        $this->container['timesheets_enabled'] = isset($data['timesheets_enabled']) ? $data['timesheets_enabled'] : null;
        $this->container['approve_if_matches_roster_shift'] = isset($data['approve_if_matches_roster_shift']) ? $data['approve_if_matches_roster_shift'] : null;
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
     * Gets allow_to_select_higher_classification
     *
     * @return bool
     */
    public function getAllowToSelectHigherClassification()
    {
        return $this->container['allow_to_select_higher_classification'];
    }

    /**
     * Sets allow_to_select_higher_classification
     *
     * @param bool $allow_to_select_higher_classification 
     *
     * @return $this
     */
    public function setAllowToSelectHigherClassification($allow_to_select_higher_classification)
    {
        $this->container['allow_to_select_higher_classification'] = $allow_to_select_higher_classification;

        return $this;
    }

    /**
     * Gets require_start_and_stop_times
     *
     * @return bool
     */
    public function getRequireStartAndStopTimes()
    {
        return $this->container['require_start_and_stop_times'];
    }

    /**
     * Sets require_start_and_stop_times
     *
     * @param bool $require_start_and_stop_times 
     *
     * @return $this
     */
    public function setRequireStartAndStopTimes($require_start_and_stop_times)
    {
        $this->container['require_start_and_stop_times'] = $require_start_and_stop_times;

        return $this;
    }

    /**
     * Gets require_work_type
     *
     * @return bool
     */
    public function getRequireWorkType()
    {
        return $this->container['require_work_type'];
    }

    /**
     * Sets require_work_type
     *
     * @param bool $require_work_type 
     *
     * @return $this
     */
    public function setRequireWorkType($require_work_type)
    {
        $this->container['require_work_type'] = $require_work_type;

        return $this;
    }

    /**
     * Gets can_set_require_work_type_setting
     *
     * @return bool
     */
    public function getCanSetRequireWorkTypeSetting()
    {
        return $this->container['can_set_require_work_type_setting'];
    }

    /**
     * Sets can_set_require_work_type_setting
     *
     * @param bool $can_set_require_work_type_setting 
     *
     * @return $this
     */
    public function setCanSetRequireWorkTypeSetting($can_set_require_work_type_setting)
    {
        $this->container['can_set_require_work_type_setting'] = $can_set_require_work_type_setting;

        return $this;
    }

    /**
     * Gets require_location
     *
     * @return bool
     */
    public function getRequireLocation()
    {
        return $this->container['require_location'];
    }

    /**
     * Sets require_location
     *
     * @param bool $require_location 
     *
     * @return $this
     */
    public function setRequireLocation($require_location)
    {
        $this->container['require_location'] = $require_location;

        return $this;
    }

    /**
     * Gets include_all_timesheet_notes_in_pay_run
     *
     * @return bool
     */
    public function getIncludeAllTimesheetNotesInPayRun()
    {
        return $this->container['include_all_timesheet_notes_in_pay_run'];
    }

    /**
     * Sets include_all_timesheet_notes_in_pay_run
     *
     * @param bool $include_all_timesheet_notes_in_pay_run 
     *
     * @return $this
     */
    public function setIncludeAllTimesheetNotesInPayRun($include_all_timesheet_notes_in_pay_run)
    {
        $this->container['include_all_timesheet_notes_in_pay_run'] = $include_all_timesheet_notes_in_pay_run;

        return $this;
    }

    /**
     * Gets timesheet_rejection_notifications
     *
     * @return bool
     */
    public function getTimesheetRejectionNotifications()
    {
        return $this->container['timesheet_rejection_notifications'];
    }

    /**
     * Sets timesheet_rejection_notifications
     *
     * @param bool $timesheet_rejection_notifications 
     *
     * @return $this
     */
    public function setTimesheetRejectionNotifications($timesheet_rejection_notifications)
    {
        $this->container['timesheet_rejection_notifications'] = $timesheet_rejection_notifications;

        return $this;
    }

    /**
     * Gets managers_can_create_timesheets_for_employees_that_are_not_enabled
     *
     * @return bool
     */
    public function getManagersCanCreateTimesheetsForEmployeesThatAreNotEnabled()
    {
        return $this->container['managers_can_create_timesheets_for_employees_that_are_not_enabled'];
    }

    /**
     * Sets managers_can_create_timesheets_for_employees_that_are_not_enabled
     *
     * @param bool $managers_can_create_timesheets_for_employees_that_are_not_enabled 
     *
     * @return $this
     */
    public function setManagersCanCreateTimesheetsForEmployeesThatAreNotEnabled($managers_can_create_timesheets_for_employees_that_are_not_enabled)
    {
        $this->container['managers_can_create_timesheets_for_employees_that_are_not_enabled'] = $managers_can_create_timesheets_for_employees_that_are_not_enabled;

        return $this;
    }

    /**
     * Gets timesheets_enabled
     *
     * @return bool
     */
    public function getTimesheetsEnabled()
    {
        return $this->container['timesheets_enabled'];
    }

    /**
     * Sets timesheets_enabled
     *
     * @param bool $timesheets_enabled 
     *
     * @return $this
     */
    public function setTimesheetsEnabled($timesheets_enabled)
    {
        $this->container['timesheets_enabled'] = $timesheets_enabled;

        return $this;
    }

    /**
     * Gets approve_if_matches_roster_shift
     *
     * @return bool
     */
    public function getApproveIfMatchesRosterShift()
    {
        return $this->container['approve_if_matches_roster_shift'];
    }

    /**
     * Sets approve_if_matches_roster_shift
     *
     * @param bool $approve_if_matches_roster_shift 
     *
     * @return $this
     */
    public function setApproveIfMatchesRosterShift($approve_if_matches_roster_shift)
    {
        $this->container['approve_if_matches_roster_shift'] = $approve_if_matches_roster_shift;

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


