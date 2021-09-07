<?php
/**
 * AuPayRateTemplateModel
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
 * AuPayRateTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuPayRateTemplateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuPayRateTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'super_threshold_amount' => 'double',
        'maximum_quarterly_super_contributions_base' => 'double',
        'id' => 'int',
        'name' => 'string',
        'primary_pay_category_id' => 'int',
        'pay_categories' => '\Swagger\Client\Model\PayRateTemplatePayCategoryExportModel[]',
        'external_id' => 'string',
        'source' => 'string',
        'reapply_to_linked_employees' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'super_threshold_amount' => 'double',
        'maximum_quarterly_super_contributions_base' => 'double',
        'id' => 'int32',
        'name' => null,
        'primary_pay_category_id' => 'int32',
        'pay_categories' => null,
        'external_id' => null,
        'source' => null,
        'reapply_to_linked_employees' => null
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
        'super_threshold_amount' => 'superThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'maximumQuarterlySuperContributionsBase',
        'id' => 'id',
        'name' => 'name',
        'primary_pay_category_id' => 'primaryPayCategoryId',
        'pay_categories' => 'payCategories',
        'external_id' => 'externalId',
        'source' => 'source',
        'reapply_to_linked_employees' => 'reapplyToLinkedEmployees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_threshold_amount' => 'setSuperThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'setMaximumQuarterlySuperContributionsBase',
        'id' => 'setId',
        'name' => 'setName',
        'primary_pay_category_id' => 'setPrimaryPayCategoryId',
        'pay_categories' => 'setPayCategories',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'reapply_to_linked_employees' => 'setReapplyToLinkedEmployees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_threshold_amount' => 'getSuperThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'getMaximumQuarterlySuperContributionsBase',
        'id' => 'getId',
        'name' => 'getName',
        'primary_pay_category_id' => 'getPrimaryPayCategoryId',
        'pay_categories' => 'getPayCategories',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'reapply_to_linked_employees' => 'getReapplyToLinkedEmployees'
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
        $this->container['super_threshold_amount'] = isset($data['super_threshold_amount']) ? $data['super_threshold_amount'] : null;
        $this->container['maximum_quarterly_super_contributions_base'] = isset($data['maximum_quarterly_super_contributions_base']) ? $data['maximum_quarterly_super_contributions_base'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['primary_pay_category_id'] = isset($data['primary_pay_category_id']) ? $data['primary_pay_category_id'] : null;
        $this->container['pay_categories'] = isset($data['pay_categories']) ? $data['pay_categories'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['reapply_to_linked_employees'] = isset($data['reapply_to_linked_employees']) ? $data['reapply_to_linked_employees'] : null;
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
     * Gets super_threshold_amount
     *
     * @return double
     */
    public function getSuperThresholdAmount()
    {
        return $this->container['super_threshold_amount'];
    }

    /**
     * Sets super_threshold_amount
     *
     * @param double $super_threshold_amount 
     *
     * @return $this
     */
    public function setSuperThresholdAmount($super_threshold_amount)
    {
        $this->container['super_threshold_amount'] = $super_threshold_amount;

        return $this;
    }

    /**
     * Gets maximum_quarterly_super_contributions_base
     *
     * @return double
     */
    public function getMaximumQuarterlySuperContributionsBase()
    {
        return $this->container['maximum_quarterly_super_contributions_base'];
    }

    /**
     * Sets maximum_quarterly_super_contributions_base
     *
     * @param double $maximum_quarterly_super_contributions_base 
     *
     * @return $this
     */
    public function setMaximumQuarterlySuperContributionsBase($maximum_quarterly_super_contributions_base)
    {
        $this->container['maximum_quarterly_super_contributions_base'] = $maximum_quarterly_super_contributions_base;

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
     * Gets primary_pay_category_id
     *
     * @return int
     */
    public function getPrimaryPayCategoryId()
    {
        return $this->container['primary_pay_category_id'];
    }

    /**
     * Sets primary_pay_category_id
     *
     * @param int $primary_pay_category_id 
     *
     * @return $this
     */
    public function setPrimaryPayCategoryId($primary_pay_category_id)
    {
        $this->container['primary_pay_category_id'] = $primary_pay_category_id;

        return $this;
    }

    /**
     * Gets pay_categories
     *
     * @return \Swagger\Client\Model\PayRateTemplatePayCategoryExportModel[]
     */
    public function getPayCategories()
    {
        return $this->container['pay_categories'];
    }

    /**
     * Sets pay_categories
     *
     * @param \Swagger\Client\Model\PayRateTemplatePayCategoryExportModel[] $pay_categories 
     *
     * @return $this
     */
    public function setPayCategories($pay_categories)
    {
        $this->container['pay_categories'] = $pay_categories;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id 
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source 
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets reapply_to_linked_employees
     *
     * @return bool
     */
    public function getReapplyToLinkedEmployees()
    {
        return $this->container['reapply_to_linked_employees'];
    }

    /**
     * Sets reapply_to_linked_employees
     *
     * @param bool $reapply_to_linked_employees 
     *
     * @return $this
     */
    public function setReapplyToLinkedEmployees($reapply_to_linked_employees)
    {
        $this->container['reapply_to_linked_employees'] = $reapply_to_linked_employees;

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


