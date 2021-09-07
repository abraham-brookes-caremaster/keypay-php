<?php
/**
 * AuInitialEarningsModel
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
 * AuInitialEarningsModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuInitialEarningsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuInitialEarningsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_category_type' => 'string',
        'pay_category_id' => 'int',
        'is_standard_pay_category' => 'bool',
        'name' => 'string',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_category_type' => null,
        'pay_category_id' => 'int32',
        'is_standard_pay_category' => null,
        'name' => null,
        'amount' => 'double'
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
        'pay_category_type' => 'payCategoryType',
        'pay_category_id' => 'payCategoryId',
        'is_standard_pay_category' => 'isStandardPayCategory',
        'name' => 'name',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_category_type' => 'setPayCategoryType',
        'pay_category_id' => 'setPayCategoryId',
        'is_standard_pay_category' => 'setIsStandardPayCategory',
        'name' => 'setName',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_category_type' => 'getPayCategoryType',
        'pay_category_id' => 'getPayCategoryId',
        'is_standard_pay_category' => 'getIsStandardPayCategory',
        'name' => 'getName',
        'amount' => 'getAmount'
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

    const PAY_CATEGORY_TYPE_STANDARD = 'Standard';
    const PAY_CATEGORY_TYPE_LEAVE_LOADING = 'LeaveLoading';
    const PAY_CATEGORY_TYPE_GENUINE_REDUNDANCY_LEAVE_PAYMENT = 'GenuineRedundancyLeavePayment';
    const PAY_CATEGORY_TYPE_OPENING_BALANCE_ALLOWANCES = 'OpeningBalanceAllowances';
    const PAY_CATEGORY_TYPE_ETP_TYPE_R_TAXABLE = 'EtpTypeRTaxable';
    const PAY_CATEGORY_TYPE_ETP_TYPE_R_TAX_FREE = 'EtpTypeRTaxFree';
    const PAY_CATEGORY_TYPE_ETP_TYPE_O_TAXABLE = 'EtpTypeOTaxable';
    const PAY_CATEGORY_TYPE_ETP_TYPE_O_TAX_FREE = 'EtpTypeOTaxFree';
    const PAY_CATEGORY_TYPE_ETP_LUMP_SUM_D = 'EtpLumpSumD';
    const PAY_CATEGORY_TYPE_METHOD_B2_ADDITIONAL_PAYMENTS_OPENING_BALANCE = 'MethodB2AdditionalPaymentsOpeningBalance';
    const PAY_CATEGORY_TYPE_GENUINE_REDUNDANCY_LEAVE_LOADING = 'GenuineRedundancyLeaveLoading';
    const PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_O_TAXABLE = 'EtpSuperableTypeOTaxable';
    const PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_O_TAX_FREE = 'EtpSuperableTypeOTaxFree';
    const PAY_CATEGORY_TYPE_ETP_TYPE_O_UNUSED_LEAVE_PAYMENT = 'EtpTypeOUnusedLeavePayment';
    const PAY_CATEGORY_TYPE_ETP_TYPE_S_TAXABLE = 'EtpTypeSTaxable';
    const PAY_CATEGORY_TYPE_ETP_TYPE_S_TAX_FREE = 'EtpTypeSTaxFree';
    const PAY_CATEGORY_TYPE_ETP_TYPE_P_TAXABLE = 'EtpTypePTaxable';
    const PAY_CATEGORY_TYPE_ETP_TYPE_P_TAX_FREE = 'EtpTypePTaxFree';
    const PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_P_TAXABLE = 'EtpSuperableTypePTaxable';
    const PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_P_TAX_FREE = 'EtpSuperableTypePTaxFree';
    const PAY_CATEGORY_TYPE_ETP_TYPE_P_UNUSED_LEAVE_PAYMENT = 'EtpTypePUnusedLeavePayment';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayCategoryTypeAllowableValues()
    {
        return [
            self::PAY_CATEGORY_TYPE_STANDARD,
            self::PAY_CATEGORY_TYPE_LEAVE_LOADING,
            self::PAY_CATEGORY_TYPE_GENUINE_REDUNDANCY_LEAVE_PAYMENT,
            self::PAY_CATEGORY_TYPE_OPENING_BALANCE_ALLOWANCES,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_R_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_R_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_O_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_O_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_LUMP_SUM_D,
            self::PAY_CATEGORY_TYPE_METHOD_B2_ADDITIONAL_PAYMENTS_OPENING_BALANCE,
            self::PAY_CATEGORY_TYPE_GENUINE_REDUNDANCY_LEAVE_LOADING,
            self::PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_O_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_O_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_O_UNUSED_LEAVE_PAYMENT,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_S_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_S_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_P_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_P_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_P_TAXABLE,
            self::PAY_CATEGORY_TYPE_ETP_SUPERABLE_TYPE_P_TAX_FREE,
            self::PAY_CATEGORY_TYPE_ETP_TYPE_P_UNUSED_LEAVE_PAYMENT,
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
        $this->container['pay_category_type'] = isset($data['pay_category_type']) ? $data['pay_category_type'] : null;
        $this->container['pay_category_id'] = isset($data['pay_category_id']) ? $data['pay_category_id'] : null;
        $this->container['is_standard_pay_category'] = isset($data['is_standard_pay_category']) ? $data['is_standard_pay_category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayCategoryTypeAllowableValues();
        if (!is_null($this->container['pay_category_type']) && !in_array($this->container['pay_category_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pay_category_type', must be one of '%s'",
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
     * Gets pay_category_type
     *
     * @return string
     */
    public function getPayCategoryType()
    {
        return $this->container['pay_category_type'];
    }

    /**
     * Sets pay_category_type
     *
     * @param string $pay_category_type 
     *
     * @return $this
     */
    public function setPayCategoryType($pay_category_type)
    {
        $allowedValues = $this->getPayCategoryTypeAllowableValues();
        if (!is_null($pay_category_type) && !in_array($pay_category_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pay_category_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pay_category_type'] = $pay_category_type;

        return $this;
    }

    /**
     * Gets pay_category_id
     *
     * @return int
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int $pay_category_id 
     *
     * @return $this
     */
    public function setPayCategoryId($pay_category_id)
    {
        $this->container['pay_category_id'] = $pay_category_id;

        return $this;
    }

    /**
     * Gets is_standard_pay_category
     *
     * @return bool
     */
    public function getIsStandardPayCategory()
    {
        return $this->container['is_standard_pay_category'];
    }

    /**
     * Sets is_standard_pay_category
     *
     * @param bool $is_standard_pay_category 
     *
     * @return $this
     */
    public function setIsStandardPayCategory($is_standard_pay_category)
    {
        $this->container['is_standard_pay_category'] = $is_standard_pay_category;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount 
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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


