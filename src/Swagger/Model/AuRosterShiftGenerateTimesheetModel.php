<?php
/**
 * AuRosterShiftGenerateTimesheetModel
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
 * AuRosterShiftGenerateTimesheetModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuRosterShiftGenerateTimesheetModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuRosterShiftGenerateTimesheetModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'classification_id' => 'int',
        'classification_name' => 'string',
        'description' => 'string',
        'is_different' => 'bool',
        'fully_qualified_location_name' => 'string',
        'id' => 'int',
        'token' => 'string',
        'qualifications' => '\Swagger\Client\Model\QualificationModel[]',
        'breaks' => '\Swagger\Client\Model\RosterShiftBreakApiModel[]',
        'employee_id' => 'int',
        'employee_name' => 'string',
        'location_id' => 'int',
        'location_name' => 'string',
        'work_type_id' => 'int',
        'work_type_name' => 'string',
        'role' => '\Swagger\Client\Model\RosterShiftRole',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'notes' => 'string',
        'published' => 'bool',
        'accepted' => 'bool',
        'pending_swap' => '\Swagger\Client\Model\RosterShiftSwapModel',
        'date_published' => '\DateTime',
        'biddable' => 'bool',
        'shift_swap_cutoff_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'classification_id' => 'int32',
        'classification_name' => null,
        'description' => null,
        'is_different' => null,
        'fully_qualified_location_name' => null,
        'id' => 'int32',
        'token' => null,
        'qualifications' => null,
        'breaks' => null,
        'employee_id' => 'int32',
        'employee_name' => null,
        'location_id' => 'int32',
        'location_name' => null,
        'work_type_id' => 'int32',
        'work_type_name' => null,
        'role' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'notes' => null,
        'published' => null,
        'accepted' => null,
        'pending_swap' => null,
        'date_published' => 'date-time',
        'biddable' => null,
        'shift_swap_cutoff_time' => 'date-time'
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
        'classification_id' => 'classificationId',
        'classification_name' => 'classificationName',
        'description' => 'description',
        'is_different' => 'isDifferent',
        'fully_qualified_location_name' => 'fullyQualifiedLocationName',
        'id' => 'id',
        'token' => 'token',
        'qualifications' => 'qualifications',
        'breaks' => 'breaks',
        'employee_id' => 'employeeId',
        'employee_name' => 'employeeName',
        'location_id' => 'locationId',
        'location_name' => 'locationName',
        'work_type_id' => 'workTypeId',
        'work_type_name' => 'workTypeName',
        'role' => 'role',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'notes' => 'notes',
        'published' => 'published',
        'accepted' => 'accepted',
        'pending_swap' => 'pendingSwap',
        'date_published' => 'datePublished',
        'biddable' => 'biddable',
        'shift_swap_cutoff_time' => 'shiftSwapCutoffTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification_id' => 'setClassificationId',
        'classification_name' => 'setClassificationName',
        'description' => 'setDescription',
        'is_different' => 'setIsDifferent',
        'fully_qualified_location_name' => 'setFullyQualifiedLocationName',
        'id' => 'setId',
        'token' => 'setToken',
        'qualifications' => 'setQualifications',
        'breaks' => 'setBreaks',
        'employee_id' => 'setEmployeeId',
        'employee_name' => 'setEmployeeName',
        'location_id' => 'setLocationId',
        'location_name' => 'setLocationName',
        'work_type_id' => 'setWorkTypeId',
        'work_type_name' => 'setWorkTypeName',
        'role' => 'setRole',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'notes' => 'setNotes',
        'published' => 'setPublished',
        'accepted' => 'setAccepted',
        'pending_swap' => 'setPendingSwap',
        'date_published' => 'setDatePublished',
        'biddable' => 'setBiddable',
        'shift_swap_cutoff_time' => 'setShiftSwapCutoffTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification_id' => 'getClassificationId',
        'classification_name' => 'getClassificationName',
        'description' => 'getDescription',
        'is_different' => 'getIsDifferent',
        'fully_qualified_location_name' => 'getFullyQualifiedLocationName',
        'id' => 'getId',
        'token' => 'getToken',
        'qualifications' => 'getQualifications',
        'breaks' => 'getBreaks',
        'employee_id' => 'getEmployeeId',
        'employee_name' => 'getEmployeeName',
        'location_id' => 'getLocationId',
        'location_name' => 'getLocationName',
        'work_type_id' => 'getWorkTypeId',
        'work_type_name' => 'getWorkTypeName',
        'role' => 'getRole',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'notes' => 'getNotes',
        'published' => 'getPublished',
        'accepted' => 'getAccepted',
        'pending_swap' => 'getPendingSwap',
        'date_published' => 'getDatePublished',
        'biddable' => 'getBiddable',
        'shift_swap_cutoff_time' => 'getShiftSwapCutoffTime'
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
        $this->container['classification_id'] = isset($data['classification_id']) ? $data['classification_id'] : null;
        $this->container['classification_name'] = isset($data['classification_name']) ? $data['classification_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_different'] = isset($data['is_different']) ? $data['is_different'] : null;
        $this->container['fully_qualified_location_name'] = isset($data['fully_qualified_location_name']) ? $data['fully_qualified_location_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['qualifications'] = isset($data['qualifications']) ? $data['qualifications'] : null;
        $this->container['breaks'] = isset($data['breaks']) ? $data['breaks'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employee_name'] = isset($data['employee_name']) ? $data['employee_name'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_name'] = isset($data['location_name']) ? $data['location_name'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['work_type_name'] = isset($data['work_type_name']) ? $data['work_type_name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['pending_swap'] = isset($data['pending_swap']) ? $data['pending_swap'] : null;
        $this->container['date_published'] = isset($data['date_published']) ? $data['date_published'] : null;
        $this->container['biddable'] = isset($data['biddable']) ? $data['biddable'] : null;
        $this->container['shift_swap_cutoff_time'] = isset($data['shift_swap_cutoff_time']) ? $data['shift_swap_cutoff_time'] : null;
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
     * Gets classification_id
     *
     * @return int
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param int $classification_id 
     *
     * @return $this
     */
    public function setClassificationId($classification_id)
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Gets classification_name
     *
     * @return string
     */
    public function getClassificationName()
    {
        return $this->container['classification_name'];
    }

    /**
     * Sets classification_name
     *
     * @param string $classification_name 
     *
     * @return $this
     */
    public function setClassificationName($classification_name)
    {
        $this->container['classification_name'] = $classification_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_different
     *
     * @return bool
     */
    public function getIsDifferent()
    {
        return $this->container['is_different'];
    }

    /**
     * Sets is_different
     *
     * @param bool $is_different 
     *
     * @return $this
     */
    public function setIsDifferent($is_different)
    {
        $this->container['is_different'] = $is_different;

        return $this;
    }

    /**
     * Gets fully_qualified_location_name
     *
     * @return string
     */
    public function getFullyQualifiedLocationName()
    {
        return $this->container['fully_qualified_location_name'];
    }

    /**
     * Sets fully_qualified_location_name
     *
     * @param string $fully_qualified_location_name 
     *
     * @return $this
     */
    public function setFullyQualifiedLocationName($fully_qualified_location_name)
    {
        $this->container['fully_qualified_location_name'] = $fully_qualified_location_name;

        return $this;
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token 
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets qualifications
     *
     * @return \Swagger\Client\Model\QualificationModel[]
     */
    public function getQualifications()
    {
        return $this->container['qualifications'];
    }

    /**
     * Sets qualifications
     *
     * @param \Swagger\Client\Model\QualificationModel[] $qualifications 
     *
     * @return $this
     */
    public function setQualifications($qualifications)
    {
        $this->container['qualifications'] = $qualifications;

        return $this;
    }

    /**
     * Gets breaks
     *
     * @return \Swagger\Client\Model\RosterShiftBreakApiModel[]
     */
    public function getBreaks()
    {
        return $this->container['breaks'];
    }

    /**
     * Sets breaks
     *
     * @param \Swagger\Client\Model\RosterShiftBreakApiModel[] $breaks 
     *
     * @return $this
     */
    public function setBreaks($breaks)
    {
        $this->container['breaks'] = $breaks;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id 
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets employee_name
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string $employee_name 
     *
     * @return $this
     */
    public function setEmployeeName($employee_name)
    {
        $this->container['employee_name'] = $employee_name;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id 
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string $location_name 
     *
     * @return $this
     */
    public function setLocationName($location_name)
    {
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int $work_type_id 
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets work_type_name
     *
     * @return string
     */
    public function getWorkTypeName()
    {
        return $this->container['work_type_name'];
    }

    /**
     * Sets work_type_name
     *
     * @param string $work_type_name 
     *
     * @return $this
     */
    public function setWorkTypeName($work_type_name)
    {
        $this->container['work_type_name'] = $work_type_name;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \Swagger\Client\Model\RosterShiftRole
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \Swagger\Client\Model\RosterShiftRole $role 
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time 
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time 
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes 
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published 
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets accepted
     *
     * @return bool
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     *
     * @param bool $accepted 
     *
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

        return $this;
    }

    /**
     * Gets pending_swap
     *
     * @return \Swagger\Client\Model\RosterShiftSwapModel
     */
    public function getPendingSwap()
    {
        return $this->container['pending_swap'];
    }

    /**
     * Sets pending_swap
     *
     * @param \Swagger\Client\Model\RosterShiftSwapModel $pending_swap 
     *
     * @return $this
     */
    public function setPendingSwap($pending_swap)
    {
        $this->container['pending_swap'] = $pending_swap;

        return $this;
    }

    /**
     * Gets date_published
     *
     * @return \DateTime
     */
    public function getDatePublished()
    {
        return $this->container['date_published'];
    }

    /**
     * Sets date_published
     *
     * @param \DateTime $date_published 
     *
     * @return $this
     */
    public function setDatePublished($date_published)
    {
        $this->container['date_published'] = $date_published;

        return $this;
    }

    /**
     * Gets biddable
     *
     * @return bool
     */
    public function getBiddable()
    {
        return $this->container['biddable'];
    }

    /**
     * Sets biddable
     *
     * @param bool $biddable 
     *
     * @return $this
     */
    public function setBiddable($biddable)
    {
        $this->container['biddable'] = $biddable;

        return $this;
    }

    /**
     * Gets shift_swap_cutoff_time
     *
     * @return \DateTime
     */
    public function getShiftSwapCutoffTime()
    {
        return $this->container['shift_swap_cutoff_time'];
    }

    /**
     * Sets shift_swap_cutoff_time
     *
     * @param \DateTime $shift_swap_cutoff_time 
     *
     * @return $this
     */
    public function setShiftSwapCutoffTime($shift_swap_cutoff_time)
    {
        $this->container['shift_swap_cutoff_time'] = $shift_swap_cutoff_time;

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


