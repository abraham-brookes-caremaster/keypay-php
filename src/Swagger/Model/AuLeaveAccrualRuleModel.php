<?php
/**
 * AuLeaveAccrualRuleModel
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
 * AuLeaveAccrualRuleModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuLeaveAccrualRuleModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuLeaveAccrualRuleModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leave_year_offset_amount' => 'int',
        'id' => 'int',
        'cap_type' => 'string',
        'unit_cap' => 'double',
        'carry_over_behaviour' => 'string',
        'carry_over_amount' => 'double',
        'accrue_in_advance' => 'bool',
        'accrual_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leave_year_offset_amount' => 'int32',
        'id' => 'int32',
        'cap_type' => null,
        'unit_cap' => 'double',
        'carry_over_behaviour' => null,
        'carry_over_amount' => 'double',
        'accrue_in_advance' => null,
        'accrual_type' => null
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
        'leave_year_offset_amount' => 'leaveYearOffsetAmount',
        'id' => 'id',
        'cap_type' => 'capType',
        'unit_cap' => 'unitCap',
        'carry_over_behaviour' => 'carryOverBehaviour',
        'carry_over_amount' => 'carryOverAmount',
        'accrue_in_advance' => 'accrueInAdvance',
        'accrual_type' => 'accrualType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_year_offset_amount' => 'setLeaveYearOffsetAmount',
        'id' => 'setId',
        'cap_type' => 'setCapType',
        'unit_cap' => 'setUnitCap',
        'carry_over_behaviour' => 'setCarryOverBehaviour',
        'carry_over_amount' => 'setCarryOverAmount',
        'accrue_in_advance' => 'setAccrueInAdvance',
        'accrual_type' => 'setAccrualType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_year_offset_amount' => 'getLeaveYearOffsetAmount',
        'id' => 'getId',
        'cap_type' => 'getCapType',
        'unit_cap' => 'getUnitCap',
        'carry_over_behaviour' => 'getCarryOverBehaviour',
        'carry_over_amount' => 'getCarryOverAmount',
        'accrue_in_advance' => 'getAccrueInAdvance',
        'accrual_type' => 'getAccrualType'
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

    const CAP_TYPE_NOT_LIMITED = 'NotLimited';
    const CAP_TYPE_LIMITED = 'Limited';
    const CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT = 'CarryEntireAmount';
    const CARRY_OVER_BEHAVIOUR_CARRY_HOURS = 'CarryHours';
    const ACCRUAL_TYPE_ONGOING = 'Ongoing';
    const ACCRUAL_TYPE_YEARLY = 'Yearly';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapTypeAllowableValues()
    {
        return [
            self::CAP_TYPE_NOT_LIMITED,
            self::CAP_TYPE_LIMITED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarryOverBehaviourAllowableValues()
    {
        return [
            self::CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT,
            self::CARRY_OVER_BEHAVIOUR_CARRY_HOURS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccrualTypeAllowableValues()
    {
        return [
            self::ACCRUAL_TYPE_ONGOING,
            self::ACCRUAL_TYPE_YEARLY,
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
        $this->container['leave_year_offset_amount'] = isset($data['leave_year_offset_amount']) ? $data['leave_year_offset_amount'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cap_type'] = isset($data['cap_type']) ? $data['cap_type'] : null;
        $this->container['unit_cap'] = isset($data['unit_cap']) ? $data['unit_cap'] : null;
        $this->container['carry_over_behaviour'] = isset($data['carry_over_behaviour']) ? $data['carry_over_behaviour'] : null;
        $this->container['carry_over_amount'] = isset($data['carry_over_amount']) ? $data['carry_over_amount'] : null;
        $this->container['accrue_in_advance'] = isset($data['accrue_in_advance']) ? $data['accrue_in_advance'] : null;
        $this->container['accrual_type'] = isset($data['accrual_type']) ? $data['accrual_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCapTypeAllowableValues();
        if (!is_null($this->container['cap_type']) && !in_array($this->container['cap_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cap_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCarryOverBehaviourAllowableValues();
        if (!is_null($this->container['carry_over_behaviour']) && !in_array($this->container['carry_over_behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'carry_over_behaviour', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccrualTypeAllowableValues();
        if (!is_null($this->container['accrual_type']) && !in_array($this->container['accrual_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accrual_type', must be one of '%s'",
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
     * Gets leave_year_offset_amount
     *
     * @return int
     */
    public function getLeaveYearOffsetAmount()
    {
        return $this->container['leave_year_offset_amount'];
    }

    /**
     * Sets leave_year_offset_amount
     *
     * @param int $leave_year_offset_amount 
     *
     * @return $this
     */
    public function setLeaveYearOffsetAmount($leave_year_offset_amount)
    {
        $this->container['leave_year_offset_amount'] = $leave_year_offset_amount;

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
     * Gets cap_type
     *
     * @return string
     */
    public function getCapType()
    {
        return $this->container['cap_type'];
    }

    /**
     * Sets cap_type
     *
     * @param string $cap_type 
     *
     * @return $this
     */
    public function setCapType($cap_type)
    {
        $allowedValues = $this->getCapTypeAllowableValues();
        if (!is_null($cap_type) && !in_array($cap_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cap_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cap_type'] = $cap_type;

        return $this;
    }

    /**
     * Gets unit_cap
     *
     * @return double
     */
    public function getUnitCap()
    {
        return $this->container['unit_cap'];
    }

    /**
     * Sets unit_cap
     *
     * @param double $unit_cap 
     *
     * @return $this
     */
    public function setUnitCap($unit_cap)
    {
        $this->container['unit_cap'] = $unit_cap;

        return $this;
    }

    /**
     * Gets carry_over_behaviour
     *
     * @return string
     */
    public function getCarryOverBehaviour()
    {
        return $this->container['carry_over_behaviour'];
    }

    /**
     * Sets carry_over_behaviour
     *
     * @param string $carry_over_behaviour 
     *
     * @return $this
     */
    public function setCarryOverBehaviour($carry_over_behaviour)
    {
        $allowedValues = $this->getCarryOverBehaviourAllowableValues();
        if (!is_null($carry_over_behaviour) && !in_array($carry_over_behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'carry_over_behaviour', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carry_over_behaviour'] = $carry_over_behaviour;

        return $this;
    }

    /**
     * Gets carry_over_amount
     *
     * @return double
     */
    public function getCarryOverAmount()
    {
        return $this->container['carry_over_amount'];
    }

    /**
     * Sets carry_over_amount
     *
     * @param double $carry_over_amount 
     *
     * @return $this
     */
    public function setCarryOverAmount($carry_over_amount)
    {
        $this->container['carry_over_amount'] = $carry_over_amount;

        return $this;
    }

    /**
     * Gets accrue_in_advance
     *
     * @return bool
     */
    public function getAccrueInAdvance()
    {
        return $this->container['accrue_in_advance'];
    }

    /**
     * Sets accrue_in_advance
     *
     * @param bool $accrue_in_advance 
     *
     * @return $this
     */
    public function setAccrueInAdvance($accrue_in_advance)
    {
        $this->container['accrue_in_advance'] = $accrue_in_advance;

        return $this;
    }

    /**
     * Gets accrual_type
     *
     * @return string
     */
    public function getAccrualType()
    {
        return $this->container['accrual_type'];
    }

    /**
     * Sets accrual_type
     *
     * @param string $accrual_type 
     *
     * @return $this
     */
    public function setAccrualType($accrual_type)
    {
        $allowedValues = $this->getAccrualTypeAllowableValues();
        if (!is_null($accrual_type) && !in_array($accrual_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accrual_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accrual_type'] = $accrual_type;

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


