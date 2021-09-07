<?php
/**
 * ShiftCostingsResponseModel
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
 * ShiftCostingsResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftCostingsResponseModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftCostingsResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transaction_id' => 'string',
        'transaction_external_id' => 'string',
        'employment_agreement_id' => 'int',
        'employment_agreement_name' => 'string',
        'pay_condition_rule_set_id' => 'int',
        'pay_condition_rule_set_name' => 'string',
        'shifts' => '\Swagger\Client\Model\ShiftCostingsResponseShiftModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transaction_id' => 'uuid',
        'transaction_external_id' => null,
        'employment_agreement_id' => 'int32',
        'employment_agreement_name' => null,
        'pay_condition_rule_set_id' => 'int32',
        'pay_condition_rule_set_name' => null,
        'shifts' => null
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
        'transaction_id' => 'transactionId',
        'transaction_external_id' => 'transactionExternalId',
        'employment_agreement_id' => 'employmentAgreementId',
        'employment_agreement_name' => 'employmentAgreementName',
        'pay_condition_rule_set_id' => 'payConditionRuleSetId',
        'pay_condition_rule_set_name' => 'payConditionRuleSetName',
        'shifts' => 'shifts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_id' => 'setTransactionId',
        'transaction_external_id' => 'setTransactionExternalId',
        'employment_agreement_id' => 'setEmploymentAgreementId',
        'employment_agreement_name' => 'setEmploymentAgreementName',
        'pay_condition_rule_set_id' => 'setPayConditionRuleSetId',
        'pay_condition_rule_set_name' => 'setPayConditionRuleSetName',
        'shifts' => 'setShifts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_id' => 'getTransactionId',
        'transaction_external_id' => 'getTransactionExternalId',
        'employment_agreement_id' => 'getEmploymentAgreementId',
        'employment_agreement_name' => 'getEmploymentAgreementName',
        'pay_condition_rule_set_id' => 'getPayConditionRuleSetId',
        'pay_condition_rule_set_name' => 'getPayConditionRuleSetName',
        'shifts' => 'getShifts'
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
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['transaction_external_id'] = isset($data['transaction_external_id']) ? $data['transaction_external_id'] : null;
        $this->container['employment_agreement_id'] = isset($data['employment_agreement_id']) ? $data['employment_agreement_id'] : null;
        $this->container['employment_agreement_name'] = isset($data['employment_agreement_name']) ? $data['employment_agreement_name'] : null;
        $this->container['pay_condition_rule_set_id'] = isset($data['pay_condition_rule_set_id']) ? $data['pay_condition_rule_set_id'] : null;
        $this->container['pay_condition_rule_set_name'] = isset($data['pay_condition_rule_set_name']) ? $data['pay_condition_rule_set_name'] : null;
        $this->container['shifts'] = isset($data['shifts']) ? $data['shifts'] : null;
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
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id 
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_external_id
     *
     * @return string
     */
    public function getTransactionExternalId()
    {
        return $this->container['transaction_external_id'];
    }

    /**
     * Sets transaction_external_id
     *
     * @param string $transaction_external_id 
     *
     * @return $this
     */
    public function setTransactionExternalId($transaction_external_id)
    {
        $this->container['transaction_external_id'] = $transaction_external_id;

        return $this;
    }

    /**
     * Gets employment_agreement_id
     *
     * @return int
     */
    public function getEmploymentAgreementId()
    {
        return $this->container['employment_agreement_id'];
    }

    /**
     * Sets employment_agreement_id
     *
     * @param int $employment_agreement_id 
     *
     * @return $this
     */
    public function setEmploymentAgreementId($employment_agreement_id)
    {
        $this->container['employment_agreement_id'] = $employment_agreement_id;

        return $this;
    }

    /**
     * Gets employment_agreement_name
     *
     * @return string
     */
    public function getEmploymentAgreementName()
    {
        return $this->container['employment_agreement_name'];
    }

    /**
     * Sets employment_agreement_name
     *
     * @param string $employment_agreement_name 
     *
     * @return $this
     */
    public function setEmploymentAgreementName($employment_agreement_name)
    {
        $this->container['employment_agreement_name'] = $employment_agreement_name;

        return $this;
    }

    /**
     * Gets pay_condition_rule_set_id
     *
     * @return int
     */
    public function getPayConditionRuleSetId()
    {
        return $this->container['pay_condition_rule_set_id'];
    }

    /**
     * Sets pay_condition_rule_set_id
     *
     * @param int $pay_condition_rule_set_id 
     *
     * @return $this
     */
    public function setPayConditionRuleSetId($pay_condition_rule_set_id)
    {
        $this->container['pay_condition_rule_set_id'] = $pay_condition_rule_set_id;

        return $this;
    }

    /**
     * Gets pay_condition_rule_set_name
     *
     * @return string
     */
    public function getPayConditionRuleSetName()
    {
        return $this->container['pay_condition_rule_set_name'];
    }

    /**
     * Sets pay_condition_rule_set_name
     *
     * @param string $pay_condition_rule_set_name 
     *
     * @return $this
     */
    public function setPayConditionRuleSetName($pay_condition_rule_set_name)
    {
        $this->container['pay_condition_rule_set_name'] = $pay_condition_rule_set_name;

        return $this;
    }

    /**
     * Gets shifts
     *
     * @return \Swagger\Client\Model\ShiftCostingsResponseShiftModel[]
     */
    public function getShifts()
    {
        return $this->container['shifts'];
    }

    /**
     * Sets shifts
     *
     * @param \Swagger\Client\Model\ShiftCostingsResponseShiftModel[] $shifts 
     *
     * @return $this
     */
    public function setShifts($shifts)
    {
        $this->container['shifts'] = $shifts;

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


