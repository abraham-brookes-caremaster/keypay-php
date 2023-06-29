<?php
/**
 * LeaveAllowanceTemplateModel
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
 * LeaveAllowanceTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LeaveAllowanceTemplateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveAllowanceTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'leave_categories' => '\OpenAPI\Client\Model\LeaveAllowanceTemplateLeaveCategoryModel[]',
        'external_id' => 'string',
        'source' => 'string',
        'leave_loading_calculated_from_pay_category_id' => 'int',
        'leave_accrual_start_date_type' => 'string',
        'leave_year_start' => '\DateTime'
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
        'name' => null,
        'leave_categories' => null,
        'external_id' => null,
        'source' => null,
        'leave_loading_calculated_from_pay_category_id' => 'int32',
        'leave_accrual_start_date_type' => null,
        'leave_year_start' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'leave_categories' => false,
		'external_id' => false,
		'source' => false,
		'leave_loading_calculated_from_pay_category_id' => false,
		'leave_accrual_start_date_type' => false,
		'leave_year_start' => false
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
        'name' => 'name',
        'leave_categories' => 'leaveCategories',
        'external_id' => 'externalId',
        'source' => 'source',
        'leave_loading_calculated_from_pay_category_id' => 'leaveLoadingCalculatedFromPayCategoryId',
        'leave_accrual_start_date_type' => 'leaveAccrualStartDateType',
        'leave_year_start' => 'leaveYearStart'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'leave_categories' => 'setLeaveCategories',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'leave_loading_calculated_from_pay_category_id' => 'setLeaveLoadingCalculatedFromPayCategoryId',
        'leave_accrual_start_date_type' => 'setLeaveAccrualStartDateType',
        'leave_year_start' => 'setLeaveYearStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'leave_categories' => 'getLeaveCategories',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'leave_loading_calculated_from_pay_category_id' => 'getLeaveLoadingCalculatedFromPayCategoryId',
        'leave_accrual_start_date_type' => 'getLeaveAccrualStartDateType',
        'leave_year_start' => 'getLeaveYearStart'
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

    public const SOURCE_NONE = 'None';
    public const SOURCE_SAASU = 'Saasu';
    public const SOURCE_XERO = 'Xero';
    public const SOURCE_MYOB = 'MYOB';
    public const SOURCE_DEPUTY = 'Deputy';
    public const SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    public const SOURCE_CLICK_SUPER = 'ClickSuper';
    public const SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    public const SOURCE_FILE_IMPORT = 'FileImport';
    public const SOURCE_FILE_EXPORT = 'FileExport';
    public const SOURCE_QUICK_BOOKS = 'QuickBooks';
    public const SOURCE_HARMONY = 'Harmony';
    public const SOURCE_AWARD_STORE = 'AwardStore';
    public const SOURCE_ATTACHE = 'Attache';
    public const SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    public const SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    public const SOURCE_API = 'API';
    public const SOURCE_MICRO_POWER = 'MicroPower';
    public const SOURCE_ROSTER_LIVE = 'RosterLive';
    public const SOURCE_NET_SUITE = 'NetSuite';
    public const SOURCE_KOUNTA = 'Kounta';
    public const SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    public const SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    public const SOURCE_JONAS_PREMIER = 'JonasPremier';
    public const SOURCE_WAGE_EASY = 'WageEasy';
    public const SOURCE_MAESTRANO = 'Maestrano';
    public const SOURCE_WORK_ZONE = 'WorkZone';
    public const SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    public const SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    public const SOURCE_ONBOARDING = 'Onboarding';
    public const SOURCE_ADMIN = 'Admin';
    public const SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    public const SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    public const SOURCE_SAGE50 = 'Sage50';
    public const SOURCE_PENSION_SYNC = 'PensionSync';
    public const SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    public const SOURCE_PRONTO_XI = 'ProntoXI';
    public const SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    public const SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    public const SOURCE_BEAM = 'Beam';
    public const SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    public const SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    public const SOURCE_WIISE = 'Wiise';
    public const SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    public const SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    public const SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    public const SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    public const SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    public const SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    public const SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    public const SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    public const SOURCE_O_AUTH = 'OAuth';
    public const SOURCE_FRESH_BOOKS = 'FreshBooks';
    public const SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    public const SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    public const SOURCE_TELLEROO = 'Telleroo';
    public const SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    public const SOURCE_BUSINESS_CENTRAL = 'BusinessCentral';
    public const SOURCE_PAYTRON = 'Paytron';
    public const SOURCE_ACCESS_FINANCIALS = 'AccessFinancials';
    public const SOURCE_COMMA = 'Comma';
    public const SOURCE_ZOHO = 'Zoho';
    public const SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER = 'FlatFileEmployeeImporter';
    public const SOURCE_TWINFIELD = 'Twinfield';
    public const SOURCE_SAGE_ACCOUNTING = 'SageAccounting';
    public const SOURCE_SQUARE = 'Square';
    public const SOURCE_QUICKFILE = 'Quickfile';
    public const SOURCE_TIDE = 'Tide';
    public const SOURCE_TIDE_SSO = 'TideSso';
    public const SOURCE_FREE_AGENT = 'FreeAgent';
    public const SOURCE_AKAHU = 'Akahu';
    public const SOURCE_INSTA_PAY = 'InstaPay';
    public const SOURCE_ZEPTO = 'Zepto';
    public const SOURCE_SLACK = 'Slack';
    public const SOURCE_CAXTON = 'Caxton';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_EMPLOYEE_START_DATE = 'EmployeeStartDate';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_SPECIFIED_DATE = 'SpecifiedDate';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_CALENDAR_YEAR = 'CalendarYear';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_ROLLING_YEAR12_MONTH = 'RollingYear12Month';
    public const LEAVE_ACCRUAL_START_DATE_TYPE_ROLLING_YEAR24_MONTH = 'RollingYear24Month';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_NONE,
            self::SOURCE_SAASU,
            self::SOURCE_XERO,
            self::SOURCE_MYOB,
            self::SOURCE_DEPUTY,
            self::SOURCE_EMPLOYEE_TIME_PUNCH,
            self::SOURCE_CLICK_SUPER,
            self::SOURCE_INTEGRATED_TIMESHEETS,
            self::SOURCE_FILE_IMPORT,
            self::SOURCE_FILE_EXPORT,
            self::SOURCE_QUICK_BOOKS,
            self::SOURCE_HARMONY,
            self::SOURCE_AWARD_STORE,
            self::SOURCE_ATTACHE,
            self::SOURCE_INTEGRATED_ROSTERING,
            self::SOURCE_RECKON_ACCOUNTS,
            self::SOURCE_API,
            self::SOURCE_MICRO_POWER,
            self::SOURCE_ROSTER_LIVE,
            self::SOURCE_NET_SUITE,
            self::SOURCE_KOUNTA,
            self::SOURCE_TIME_AND_ATTENDANCE_KIOSK,
            self::SOURCE_DETAILED_FILE_EXPORT,
            self::SOURCE_JONAS_PREMIER,
            self::SOURCE_WAGE_EASY,
            self::SOURCE_MAESTRANO,
            self::SOURCE_WORK_ZONE,
            self::SOURCE_EMPLOYEE_PORTAL,
            self::SOURCE_ROSTER_TEMPLATE,
            self::SOURCE_ONBOARDING,
            self::SOURCE_ADMIN,
            self::SOURCE_WORK_ZONE_CLOCK_ON_OFF,
            self::SOURCE_NET_SUITE_ONE_WORLD,
            self::SOURCE_SAGE50,
            self::SOURCE_PENSION_SYNC,
            self::SOURCE_FINANCIALS_OFFICE,
            self::SOURCE_PRONTO_XI,
            self::SOURCE_PAY_RUN_DEFAULT,
            self::SOURCE_STANDARD_WORK_DAY,
            self::SOURCE_BEAM,
            self::SOURCE_PAY_RUN_AUTOMATION,
            self::SOURCE_BUREAU_DASHBOARD,
            self::SOURCE_WIISE,
            self::SOURCE_QBO_MIGRATION_TOOL,
            self::SOURCE_ABRIDGED_FILE_IMPORT,
            self::SOURCE_QBO_FORCED_MIGRATION,
            self::SOURCE_HMRC_DPS_UPDATE,
            self::SOURCE_HMRC_DPS_STUDENT_LOAN,
            self::SOURCE_HMRC_DPS_POST_GRAD_LOAN,
            self::SOURCE_SAGE50_FILE_IMPORTER,
            self::SOURCE_FPS_FILE_IMPORTER,
            self::SOURCE_O_AUTH,
            self::SOURCE_FRESH_BOOKS,
            self::SOURCE_STAR_FILE_IMPORTER,
            self::SOURCE_ACTIVE_CAMPAIGN,
            self::SOURCE_SUMMARY_AND_DETAILS_EXPORT,
            self::SOURCE_TELLEROO,
            self::SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD,
            self::SOURCE_BUSINESS_CENTRAL,
            self::SOURCE_PAYTRON,
            self::SOURCE_ACCESS_FINANCIALS,
            self::SOURCE_COMMA,
            self::SOURCE_ZOHO,
            self::SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER,
            self::SOURCE_TWINFIELD,
            self::SOURCE_SAGE_ACCOUNTING,
            self::SOURCE_SQUARE,
            self::SOURCE_QUICKFILE,
            self::SOURCE_TIDE,
            self::SOURCE_TIDE_SSO,
            self::SOURCE_FREE_AGENT,
            self::SOURCE_AKAHU,
            self::SOURCE_INSTA_PAY,
            self::SOURCE_ZEPTO,
            self::SOURCE_SLACK,
            self::SOURCE_CAXTON,
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
            self::LEAVE_ACCRUAL_START_DATE_TYPE_ROLLING_YEAR12_MONTH,
            self::LEAVE_ACCRUAL_START_DATE_TYPE_ROLLING_YEAR24_MONTH,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('leave_categories', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('leave_loading_calculated_from_pay_category_id', $data ?? [], null);
        $this->setIfExists('leave_accrual_start_date_type', $data ?? [], null);
        $this->setIfExists('leave_year_start', $data ?? [], null);
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

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
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
     * Gets leave_categories
     *
     * @return \OpenAPI\Client\Model\LeaveAllowanceTemplateLeaveCategoryModel[]|null
     */
    public function getLeaveCategories()
    {
        return $this->container['leave_categories'];
    }

    /**
     * Sets leave_categories
     *
     * @param \OpenAPI\Client\Model\LeaveAllowanceTemplateLeaveCategoryModel[]|null $leave_categories 
     *
     * @return self
     */
    public function setLeaveCategories($leave_categories)
    {
        if (is_null($leave_categories)) {
            throw new \InvalidArgumentException('non-nullable leave_categories cannot be null');
        }
        $this->container['leave_categories'] = $leave_categories;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id 
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $allowedValues = $this->getSourceAllowableValues();
        if (!in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets leave_loading_calculated_from_pay_category_id
     *
     * @return int|null
     */
    public function getLeaveLoadingCalculatedFromPayCategoryId()
    {
        return $this->container['leave_loading_calculated_from_pay_category_id'];
    }

    /**
     * Sets leave_loading_calculated_from_pay_category_id
     *
     * @param int|null $leave_loading_calculated_from_pay_category_id 
     *
     * @return self
     */
    public function setLeaveLoadingCalculatedFromPayCategoryId($leave_loading_calculated_from_pay_category_id)
    {
        if (is_null($leave_loading_calculated_from_pay_category_id)) {
            throw new \InvalidArgumentException('non-nullable leave_loading_calculated_from_pay_category_id cannot be null');
        }
        $this->container['leave_loading_calculated_from_pay_category_id'] = $leave_loading_calculated_from_pay_category_id;

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
     * Gets leave_year_start
     *
     * @return \DateTime|null
     */
    public function getLeaveYearStart()
    {
        return $this->container['leave_year_start'];
    }

    /**
     * Sets leave_year_start
     *
     * @param \DateTime|null $leave_year_start 
     *
     * @return self
     */
    public function setLeaveYearStart($leave_year_start)
    {
        if (is_null($leave_year_start)) {
            throw new \InvalidArgumentException('non-nullable leave_year_start cannot be null');
        }
        $this->container['leave_year_start'] = $leave_year_start;

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


