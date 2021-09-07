<?php
/**
 * AuAutoPayConfigurationModel
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
 * AuAutoPayConfigurationModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuAutoPayConfigurationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuAutoPayConfigurationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'paused' => 'bool',
        'initial_pay_period_ending' => '\DateTime',
        'initial_date_paid' => '\DateTime',
        'initial_pay_run_creation_date_time' => '\DateTime',
        'scheduled_end_date' => '\DateTime',
        'next_scheduled_creation_date_time_utc' => '\DateTime',
        'finalise' => 'bool',
        'timesheet_import_option' => 'string',
        'export_journals' => 'bool',
        'lodge_pay_run' => 'bool',
        'publish_pay_slips' => 'string',
        'publish_pay_slips_hour' => 'int',
        'suppress_notifications' => 'bool',
        'users_to_notify' => 'string[]',
        'run_on_specific_day_of_month' => 'bool',
        'adjust_run_date_to_work_day' => 'bool',
        'adjust_date_paid_to_work_day' => 'bool',
        'specific_day_of_month' => 'int',
        'week_of_month' => 'int',
        'day_of_week' => 'int',
        'report_packs_to_run' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'paused' => null,
        'initial_pay_period_ending' => 'date-time',
        'initial_date_paid' => 'date-time',
        'initial_pay_run_creation_date_time' => 'date-time',
        'scheduled_end_date' => 'date-time',
        'next_scheduled_creation_date_time_utc' => 'date-time',
        'finalise' => null,
        'timesheet_import_option' => null,
        'export_journals' => null,
        'lodge_pay_run' => null,
        'publish_pay_slips' => null,
        'publish_pay_slips_hour' => 'int32',
        'suppress_notifications' => null,
        'users_to_notify' => null,
        'run_on_specific_day_of_month' => null,
        'adjust_run_date_to_work_day' => null,
        'adjust_date_paid_to_work_day' => null,
        'specific_day_of_month' => 'int32',
        'week_of_month' => 'int32',
        'day_of_week' => 'int32',
        'report_packs_to_run' => 'int32'
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
        'enabled' => 'enabled',
        'paused' => 'paused',
        'initial_pay_period_ending' => 'initialPayPeriodEnding',
        'initial_date_paid' => 'initialDatePaid',
        'initial_pay_run_creation_date_time' => 'initialPayRunCreationDateTime',
        'scheduled_end_date' => 'scheduledEndDate',
        'next_scheduled_creation_date_time_utc' => 'nextScheduledCreationDateTimeUtc',
        'finalise' => 'finalise',
        'timesheet_import_option' => 'timesheetImportOption',
        'export_journals' => 'exportJournals',
        'lodge_pay_run' => 'lodgePayRun',
        'publish_pay_slips' => 'publishPaySlips',
        'publish_pay_slips_hour' => 'publishPaySlipsHour',
        'suppress_notifications' => 'suppressNotifications',
        'users_to_notify' => 'usersToNotify',
        'run_on_specific_day_of_month' => 'runOnSpecificDayOfMonth',
        'adjust_run_date_to_work_day' => 'adjustRunDateToWorkDay',
        'adjust_date_paid_to_work_day' => 'adjustDatePaidToWorkDay',
        'specific_day_of_month' => 'specificDayOfMonth',
        'week_of_month' => 'weekOfMonth',
        'day_of_week' => 'dayOfWeek',
        'report_packs_to_run' => 'reportPacksToRun'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'paused' => 'setPaused',
        'initial_pay_period_ending' => 'setInitialPayPeriodEnding',
        'initial_date_paid' => 'setInitialDatePaid',
        'initial_pay_run_creation_date_time' => 'setInitialPayRunCreationDateTime',
        'scheduled_end_date' => 'setScheduledEndDate',
        'next_scheduled_creation_date_time_utc' => 'setNextScheduledCreationDateTimeUtc',
        'finalise' => 'setFinalise',
        'timesheet_import_option' => 'setTimesheetImportOption',
        'export_journals' => 'setExportJournals',
        'lodge_pay_run' => 'setLodgePayRun',
        'publish_pay_slips' => 'setPublishPaySlips',
        'publish_pay_slips_hour' => 'setPublishPaySlipsHour',
        'suppress_notifications' => 'setSuppressNotifications',
        'users_to_notify' => 'setUsersToNotify',
        'run_on_specific_day_of_month' => 'setRunOnSpecificDayOfMonth',
        'adjust_run_date_to_work_day' => 'setAdjustRunDateToWorkDay',
        'adjust_date_paid_to_work_day' => 'setAdjustDatePaidToWorkDay',
        'specific_day_of_month' => 'setSpecificDayOfMonth',
        'week_of_month' => 'setWeekOfMonth',
        'day_of_week' => 'setDayOfWeek',
        'report_packs_to_run' => 'setReportPacksToRun'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'paused' => 'getPaused',
        'initial_pay_period_ending' => 'getInitialPayPeriodEnding',
        'initial_date_paid' => 'getInitialDatePaid',
        'initial_pay_run_creation_date_time' => 'getInitialPayRunCreationDateTime',
        'scheduled_end_date' => 'getScheduledEndDate',
        'next_scheduled_creation_date_time_utc' => 'getNextScheduledCreationDateTimeUtc',
        'finalise' => 'getFinalise',
        'timesheet_import_option' => 'getTimesheetImportOption',
        'export_journals' => 'getExportJournals',
        'lodge_pay_run' => 'getLodgePayRun',
        'publish_pay_slips' => 'getPublishPaySlips',
        'publish_pay_slips_hour' => 'getPublishPaySlipsHour',
        'suppress_notifications' => 'getSuppressNotifications',
        'users_to_notify' => 'getUsersToNotify',
        'run_on_specific_day_of_month' => 'getRunOnSpecificDayOfMonth',
        'adjust_run_date_to_work_day' => 'getAdjustRunDateToWorkDay',
        'adjust_date_paid_to_work_day' => 'getAdjustDatePaidToWorkDay',
        'specific_day_of_month' => 'getSpecificDayOfMonth',
        'week_of_month' => 'getWeekOfMonth',
        'day_of_week' => 'getDayOfWeek',
        'report_packs_to_run' => 'getReportPacksToRun'
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

    const TIMESHEET_IMPORT_OPTION_NONE = 'None';
    const TIMESHEET_IMPORT_OPTION_THIS_PAY_PERIOD = 'ThisPayPeriod';
    const TIMESHEET_IMPORT_OPTION_ALL_OUTSTANDING = 'AllOutstanding';
    const PUBLISH_PAY_SLIPS_MANUAL = 'Manual';
    const PUBLISH_PAY_SLIPS_IMMEDIATE = 'Immediate';
    const PUBLISH_PAY_SLIPS_SCHEDULED = 'Scheduled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimesheetImportOptionAllowableValues()
    {
        return [
            self::TIMESHEET_IMPORT_OPTION_NONE,
            self::TIMESHEET_IMPORT_OPTION_THIS_PAY_PERIOD,
            self::TIMESHEET_IMPORT_OPTION_ALL_OUTSTANDING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPublishPaySlipsAllowableValues()
    {
        return [
            self::PUBLISH_PAY_SLIPS_MANUAL,
            self::PUBLISH_PAY_SLIPS_IMMEDIATE,
            self::PUBLISH_PAY_SLIPS_SCHEDULED,
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['paused'] = isset($data['paused']) ? $data['paused'] : null;
        $this->container['initial_pay_period_ending'] = isset($data['initial_pay_period_ending']) ? $data['initial_pay_period_ending'] : null;
        $this->container['initial_date_paid'] = isset($data['initial_date_paid']) ? $data['initial_date_paid'] : null;
        $this->container['initial_pay_run_creation_date_time'] = isset($data['initial_pay_run_creation_date_time']) ? $data['initial_pay_run_creation_date_time'] : null;
        $this->container['scheduled_end_date'] = isset($data['scheduled_end_date']) ? $data['scheduled_end_date'] : null;
        $this->container['next_scheduled_creation_date_time_utc'] = isset($data['next_scheduled_creation_date_time_utc']) ? $data['next_scheduled_creation_date_time_utc'] : null;
        $this->container['finalise'] = isset($data['finalise']) ? $data['finalise'] : null;
        $this->container['timesheet_import_option'] = isset($data['timesheet_import_option']) ? $data['timesheet_import_option'] : null;
        $this->container['export_journals'] = isset($data['export_journals']) ? $data['export_journals'] : null;
        $this->container['lodge_pay_run'] = isset($data['lodge_pay_run']) ? $data['lodge_pay_run'] : null;
        $this->container['publish_pay_slips'] = isset($data['publish_pay_slips']) ? $data['publish_pay_slips'] : null;
        $this->container['publish_pay_slips_hour'] = isset($data['publish_pay_slips_hour']) ? $data['publish_pay_slips_hour'] : null;
        $this->container['suppress_notifications'] = isset($data['suppress_notifications']) ? $data['suppress_notifications'] : null;
        $this->container['users_to_notify'] = isset($data['users_to_notify']) ? $data['users_to_notify'] : null;
        $this->container['run_on_specific_day_of_month'] = isset($data['run_on_specific_day_of_month']) ? $data['run_on_specific_day_of_month'] : null;
        $this->container['adjust_run_date_to_work_day'] = isset($data['adjust_run_date_to_work_day']) ? $data['adjust_run_date_to_work_day'] : null;
        $this->container['adjust_date_paid_to_work_day'] = isset($data['adjust_date_paid_to_work_day']) ? $data['adjust_date_paid_to_work_day'] : null;
        $this->container['specific_day_of_month'] = isset($data['specific_day_of_month']) ? $data['specific_day_of_month'] : null;
        $this->container['week_of_month'] = isset($data['week_of_month']) ? $data['week_of_month'] : null;
        $this->container['day_of_week'] = isset($data['day_of_week']) ? $data['day_of_week'] : null;
        $this->container['report_packs_to_run'] = isset($data['report_packs_to_run']) ? $data['report_packs_to_run'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTimesheetImportOptionAllowableValues();
        if (!is_null($this->container['timesheet_import_option']) && !in_array($this->container['timesheet_import_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'timesheet_import_option', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPublishPaySlipsAllowableValues();
        if (!is_null($this->container['publish_pay_slips']) && !in_array($this->container['publish_pay_slips'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'publish_pay_slips', must be one of '%s'",
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled 
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool $paused 
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets initial_pay_period_ending
     *
     * @return \DateTime
     */
    public function getInitialPayPeriodEnding()
    {
        return $this->container['initial_pay_period_ending'];
    }

    /**
     * Sets initial_pay_period_ending
     *
     * @param \DateTime $initial_pay_period_ending 
     *
     * @return $this
     */
    public function setInitialPayPeriodEnding($initial_pay_period_ending)
    {
        $this->container['initial_pay_period_ending'] = $initial_pay_period_ending;

        return $this;
    }

    /**
     * Gets initial_date_paid
     *
     * @return \DateTime
     */
    public function getInitialDatePaid()
    {
        return $this->container['initial_date_paid'];
    }

    /**
     * Sets initial_date_paid
     *
     * @param \DateTime $initial_date_paid 
     *
     * @return $this
     */
    public function setInitialDatePaid($initial_date_paid)
    {
        $this->container['initial_date_paid'] = $initial_date_paid;

        return $this;
    }

    /**
     * Gets initial_pay_run_creation_date_time
     *
     * @return \DateTime
     */
    public function getInitialPayRunCreationDateTime()
    {
        return $this->container['initial_pay_run_creation_date_time'];
    }

    /**
     * Sets initial_pay_run_creation_date_time
     *
     * @param \DateTime $initial_pay_run_creation_date_time 
     *
     * @return $this
     */
    public function setInitialPayRunCreationDateTime($initial_pay_run_creation_date_time)
    {
        $this->container['initial_pay_run_creation_date_time'] = $initial_pay_run_creation_date_time;

        return $this;
    }

    /**
     * Gets scheduled_end_date
     *
     * @return \DateTime
     */
    public function getScheduledEndDate()
    {
        return $this->container['scheduled_end_date'];
    }

    /**
     * Sets scheduled_end_date
     *
     * @param \DateTime $scheduled_end_date 
     *
     * @return $this
     */
    public function setScheduledEndDate($scheduled_end_date)
    {
        $this->container['scheduled_end_date'] = $scheduled_end_date;

        return $this;
    }

    /**
     * Gets next_scheduled_creation_date_time_utc
     *
     * @return \DateTime
     */
    public function getNextScheduledCreationDateTimeUtc()
    {
        return $this->container['next_scheduled_creation_date_time_utc'];
    }

    /**
     * Sets next_scheduled_creation_date_time_utc
     *
     * @param \DateTime $next_scheduled_creation_date_time_utc 
     *
     * @return $this
     */
    public function setNextScheduledCreationDateTimeUtc($next_scheduled_creation_date_time_utc)
    {
        $this->container['next_scheduled_creation_date_time_utc'] = $next_scheduled_creation_date_time_utc;

        return $this;
    }

    /**
     * Gets finalise
     *
     * @return bool
     */
    public function getFinalise()
    {
        return $this->container['finalise'];
    }

    /**
     * Sets finalise
     *
     * @param bool $finalise 
     *
     * @return $this
     */
    public function setFinalise($finalise)
    {
        $this->container['finalise'] = $finalise;

        return $this;
    }

    /**
     * Gets timesheet_import_option
     *
     * @return string
     */
    public function getTimesheetImportOption()
    {
        return $this->container['timesheet_import_option'];
    }

    /**
     * Sets timesheet_import_option
     *
     * @param string $timesheet_import_option 
     *
     * @return $this
     */
    public function setTimesheetImportOption($timesheet_import_option)
    {
        $allowedValues = $this->getTimesheetImportOptionAllowableValues();
        if (!is_null($timesheet_import_option) && !in_array($timesheet_import_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'timesheet_import_option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['timesheet_import_option'] = $timesheet_import_option;

        return $this;
    }

    /**
     * Gets export_journals
     *
     * @return bool
     */
    public function getExportJournals()
    {
        return $this->container['export_journals'];
    }

    /**
     * Sets export_journals
     *
     * @param bool $export_journals 
     *
     * @return $this
     */
    public function setExportJournals($export_journals)
    {
        $this->container['export_journals'] = $export_journals;

        return $this;
    }

    /**
     * Gets lodge_pay_run
     *
     * @return bool
     */
    public function getLodgePayRun()
    {
        return $this->container['lodge_pay_run'];
    }

    /**
     * Sets lodge_pay_run
     *
     * @param bool $lodge_pay_run 
     *
     * @return $this
     */
    public function setLodgePayRun($lodge_pay_run)
    {
        $this->container['lodge_pay_run'] = $lodge_pay_run;

        return $this;
    }

    /**
     * Gets publish_pay_slips
     *
     * @return string
     */
    public function getPublishPaySlips()
    {
        return $this->container['publish_pay_slips'];
    }

    /**
     * Sets publish_pay_slips
     *
     * @param string $publish_pay_slips 
     *
     * @return $this
     */
    public function setPublishPaySlips($publish_pay_slips)
    {
        $allowedValues = $this->getPublishPaySlipsAllowableValues();
        if (!is_null($publish_pay_slips) && !in_array($publish_pay_slips, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'publish_pay_slips', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['publish_pay_slips'] = $publish_pay_slips;

        return $this;
    }

    /**
     * Gets publish_pay_slips_hour
     *
     * @return int
     */
    public function getPublishPaySlipsHour()
    {
        return $this->container['publish_pay_slips_hour'];
    }

    /**
     * Sets publish_pay_slips_hour
     *
     * @param int $publish_pay_slips_hour 
     *
     * @return $this
     */
    public function setPublishPaySlipsHour($publish_pay_slips_hour)
    {
        $this->container['publish_pay_slips_hour'] = $publish_pay_slips_hour;

        return $this;
    }

    /**
     * Gets suppress_notifications
     *
     * @return bool
     */
    public function getSuppressNotifications()
    {
        return $this->container['suppress_notifications'];
    }

    /**
     * Sets suppress_notifications
     *
     * @param bool $suppress_notifications 
     *
     * @return $this
     */
    public function setSuppressNotifications($suppress_notifications)
    {
        $this->container['suppress_notifications'] = $suppress_notifications;

        return $this;
    }

    /**
     * Gets users_to_notify
     *
     * @return string[]
     */
    public function getUsersToNotify()
    {
        return $this->container['users_to_notify'];
    }

    /**
     * Sets users_to_notify
     *
     * @param string[] $users_to_notify 
     *
     * @return $this
     */
    public function setUsersToNotify($users_to_notify)
    {
        $this->container['users_to_notify'] = $users_to_notify;

        return $this;
    }

    /**
     * Gets run_on_specific_day_of_month
     *
     * @return bool
     */
    public function getRunOnSpecificDayOfMonth()
    {
        return $this->container['run_on_specific_day_of_month'];
    }

    /**
     * Sets run_on_specific_day_of_month
     *
     * @param bool $run_on_specific_day_of_month 
     *
     * @return $this
     */
    public function setRunOnSpecificDayOfMonth($run_on_specific_day_of_month)
    {
        $this->container['run_on_specific_day_of_month'] = $run_on_specific_day_of_month;

        return $this;
    }

    /**
     * Gets adjust_run_date_to_work_day
     *
     * @return bool
     */
    public function getAdjustRunDateToWorkDay()
    {
        return $this->container['adjust_run_date_to_work_day'];
    }

    /**
     * Sets adjust_run_date_to_work_day
     *
     * @param bool $adjust_run_date_to_work_day 
     *
     * @return $this
     */
    public function setAdjustRunDateToWorkDay($adjust_run_date_to_work_day)
    {
        $this->container['adjust_run_date_to_work_day'] = $adjust_run_date_to_work_day;

        return $this;
    }

    /**
     * Gets adjust_date_paid_to_work_day
     *
     * @return bool
     */
    public function getAdjustDatePaidToWorkDay()
    {
        return $this->container['adjust_date_paid_to_work_day'];
    }

    /**
     * Sets adjust_date_paid_to_work_day
     *
     * @param bool $adjust_date_paid_to_work_day 
     *
     * @return $this
     */
    public function setAdjustDatePaidToWorkDay($adjust_date_paid_to_work_day)
    {
        $this->container['adjust_date_paid_to_work_day'] = $adjust_date_paid_to_work_day;

        return $this;
    }

    /**
     * Gets specific_day_of_month
     *
     * @return int
     */
    public function getSpecificDayOfMonth()
    {
        return $this->container['specific_day_of_month'];
    }

    /**
     * Sets specific_day_of_month
     *
     * @param int $specific_day_of_month 
     *
     * @return $this
     */
    public function setSpecificDayOfMonth($specific_day_of_month)
    {
        $this->container['specific_day_of_month'] = $specific_day_of_month;

        return $this;
    }

    /**
     * Gets week_of_month
     *
     * @return int
     */
    public function getWeekOfMonth()
    {
        return $this->container['week_of_month'];
    }

    /**
     * Sets week_of_month
     *
     * @param int $week_of_month 
     *
     * @return $this
     */
    public function setWeekOfMonth($week_of_month)
    {
        $this->container['week_of_month'] = $week_of_month;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param int $day_of_week 
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets report_packs_to_run
     *
     * @return int[]
     */
    public function getReportPacksToRun()
    {
        return $this->container['report_packs_to_run'];
    }

    /**
     * Sets report_packs_to_run
     *
     * @param int[] $report_packs_to_run 
     *
     * @return $this
     */
    public function setReportPacksToRun($report_packs_to_run)
    {
        $this->container['report_packs_to_run'] = $report_packs_to_run;

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


