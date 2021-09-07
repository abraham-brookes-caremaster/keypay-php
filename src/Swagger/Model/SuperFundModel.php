<?php
/**
 * SuperFundModel
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
 * SuperFundModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuperFundModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SuperFundModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'employee_id' => 'int',
        'name' => 'string',
        'member_number' => 'string',
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'super_product' => '\Swagger\Client\Model\SuperProductModel',
        'allocate_balance' => 'bool',
        'can_be_deleted' => 'bool',
        'is_employer_nominated_fund' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'employee_id' => 'int32',
        'name' => null,
        'member_number' => null,
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'super_product' => null,
        'allocate_balance' => null,
        'can_be_deleted' => null,
        'is_employer_nominated_fund' => null
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
        'id' => 'id',
        'employee_id' => 'employeeId',
        'name' => 'name',
        'member_number' => 'memberNumber',
        'allocated_percentage' => 'allocatedPercentage',
        'fixed_amount' => 'fixedAmount',
        'super_product' => 'superProduct',
        'allocate_balance' => 'allocateBalance',
        'can_be_deleted' => 'canBeDeleted',
        'is_employer_nominated_fund' => 'isEmployerNominatedFund'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'name' => 'setName',
        'member_number' => 'setMemberNumber',
        'allocated_percentage' => 'setAllocatedPercentage',
        'fixed_amount' => 'setFixedAmount',
        'super_product' => 'setSuperProduct',
        'allocate_balance' => 'setAllocateBalance',
        'can_be_deleted' => 'setCanBeDeleted',
        'is_employer_nominated_fund' => 'setIsEmployerNominatedFund'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'name' => 'getName',
        'member_number' => 'getMemberNumber',
        'allocated_percentage' => 'getAllocatedPercentage',
        'fixed_amount' => 'getFixedAmount',
        'super_product' => 'getSuperProduct',
        'allocate_balance' => 'getAllocateBalance',
        'can_be_deleted' => 'getCanBeDeleted',
        'is_employer_nominated_fund' => 'getIsEmployerNominatedFund'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['member_number'] = isset($data['member_number']) ? $data['member_number'] : null;
        $this->container['allocated_percentage'] = isset($data['allocated_percentage']) ? $data['allocated_percentage'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['super_product'] = isset($data['super_product']) ? $data['super_product'] : null;
        $this->container['allocate_balance'] = isset($data['allocate_balance']) ? $data['allocate_balance'] : null;
        $this->container['can_be_deleted'] = isset($data['can_be_deleted']) ? $data['can_be_deleted'] : null;
        $this->container['is_employer_nominated_fund'] = isset($data['is_employer_nominated_fund']) ? $data['is_employer_nominated_fund'] : null;
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
     * Gets member_number
     *
     * @return string
     */
    public function getMemberNumber()
    {
        return $this->container['member_number'];
    }

    /**
     * Sets member_number
     *
     * @param string $member_number 
     *
     * @return $this
     */
    public function setMemberNumber($member_number)
    {
        $this->container['member_number'] = $member_number;

        return $this;
    }

    /**
     * Gets allocated_percentage
     *
     * @return double
     */
    public function getAllocatedPercentage()
    {
        return $this->container['allocated_percentage'];
    }

    /**
     * Sets allocated_percentage
     *
     * @param double $allocated_percentage 
     *
     * @return $this
     */
    public function setAllocatedPercentage($allocated_percentage)
    {
        $this->container['allocated_percentage'] = $allocated_percentage;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return double
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param double $fixed_amount 
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {
        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets super_product
     *
     * @return \Swagger\Client\Model\SuperProductModel
     */
    public function getSuperProduct()
    {
        return $this->container['super_product'];
    }

    /**
     * Sets super_product
     *
     * @param \Swagger\Client\Model\SuperProductModel $super_product 
     *
     * @return $this
     */
    public function setSuperProduct($super_product)
    {
        $this->container['super_product'] = $super_product;

        return $this;
    }

    /**
     * Gets allocate_balance
     *
     * @return bool
     */
    public function getAllocateBalance()
    {
        return $this->container['allocate_balance'];
    }

    /**
     * Sets allocate_balance
     *
     * @param bool $allocate_balance 
     *
     * @return $this
     */
    public function setAllocateBalance($allocate_balance)
    {
        $this->container['allocate_balance'] = $allocate_balance;

        return $this;
    }

    /**
     * Gets can_be_deleted
     *
     * @return bool
     */
    public function getCanBeDeleted()
    {
        return $this->container['can_be_deleted'];
    }

    /**
     * Sets can_be_deleted
     *
     * @param bool $can_be_deleted 
     *
     * @return $this
     */
    public function setCanBeDeleted($can_be_deleted)
    {
        $this->container['can_be_deleted'] = $can_be_deleted;

        return $this;
    }

    /**
     * Gets is_employer_nominated_fund
     *
     * @return bool
     */
    public function getIsEmployerNominatedFund()
    {
        return $this->container['is_employer_nominated_fund'];
    }

    /**
     * Sets is_employer_nominated_fund
     *
     * @param bool $is_employer_nominated_fund 
     *
     * @return $this
     */
    public function setIsEmployerNominatedFund($is_employer_nominated_fund)
    {
        $this->container['is_employer_nominated_fund'] = $is_employer_nominated_fund;

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


