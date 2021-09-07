<?php
/**
 * AuSingleLocationModel
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
 * AuSingleLocationModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuSingleLocationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuSingleLocationModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nested_locations' => '\Swagger\Client\Model\AuLocationModel[]',
        'id' => 'int',
        'parent_id' => 'int',
        'name' => 'string',
        'external_id' => 'string',
        'source' => 'string',
        'fully_qualified_name' => 'string',
        'is_global' => 'bool',
        'is_rollup_reporting_location' => 'bool',
        'general_ledger_mapping_code' => 'string',
        'default_shift_condition_ids' => 'int[]',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nested_locations' => null,
        'id' => 'int32',
        'parent_id' => 'int32',
        'name' => null,
        'external_id' => null,
        'source' => null,
        'fully_qualified_name' => null,
        'is_global' => null,
        'is_rollup_reporting_location' => null,
        'general_ledger_mapping_code' => null,
        'default_shift_condition_ids' => 'int32',
        'state' => null
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
        'nested_locations' => 'nestedLocations',
        'id' => 'id',
        'parent_id' => 'parentId',
        'name' => 'name',
        'external_id' => 'externalId',
        'source' => 'source',
        'fully_qualified_name' => 'fullyQualifiedName',
        'is_global' => 'isGlobal',
        'is_rollup_reporting_location' => 'isRollupReportingLocation',
        'general_ledger_mapping_code' => 'generalLedgerMappingCode',
        'default_shift_condition_ids' => 'defaultShiftConditionIds',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nested_locations' => 'setNestedLocations',
        'id' => 'setId',
        'parent_id' => 'setParentId',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'fully_qualified_name' => 'setFullyQualifiedName',
        'is_global' => 'setIsGlobal',
        'is_rollup_reporting_location' => 'setIsRollupReportingLocation',
        'general_ledger_mapping_code' => 'setGeneralLedgerMappingCode',
        'default_shift_condition_ids' => 'setDefaultShiftConditionIds',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nested_locations' => 'getNestedLocations',
        'id' => 'getId',
        'parent_id' => 'getParentId',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'fully_qualified_name' => 'getFullyQualifiedName',
        'is_global' => 'getIsGlobal',
        'is_rollup_reporting_location' => 'getIsRollupReportingLocation',
        'general_ledger_mapping_code' => 'getGeneralLedgerMappingCode',
        'default_shift_condition_ids' => 'getDefaultShiftConditionIds',
        'state' => 'getState'
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
        $this->container['nested_locations'] = isset($data['nested_locations']) ? $data['nested_locations'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['fully_qualified_name'] = isset($data['fully_qualified_name']) ? $data['fully_qualified_name'] : null;
        $this->container['is_global'] = isset($data['is_global']) ? $data['is_global'] : null;
        $this->container['is_rollup_reporting_location'] = isset($data['is_rollup_reporting_location']) ? $data['is_rollup_reporting_location'] : null;
        $this->container['general_ledger_mapping_code'] = isset($data['general_ledger_mapping_code']) ? $data['general_ledger_mapping_code'] : null;
        $this->container['default_shift_condition_ids'] = isset($data['default_shift_condition_ids']) ? $data['default_shift_condition_ids'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets nested_locations
     *
     * @return \Swagger\Client\Model\AuLocationModel[]
     */
    public function getNestedLocations()
    {
        return $this->container['nested_locations'];
    }

    /**
     * Sets nested_locations
     *
     * @param \Swagger\Client\Model\AuLocationModel[] $nested_locations 
     *
     * @return $this
     */
    public function setNestedLocations($nested_locations)
    {
        $this->container['nested_locations'] = $nested_locations;

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
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id 
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * Gets fully_qualified_name
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->container['fully_qualified_name'];
    }

    /**
     * Sets fully_qualified_name
     *
     * @param string $fully_qualified_name 
     *
     * @return $this
     */
    public function setFullyQualifiedName($fully_qualified_name)
    {
        $this->container['fully_qualified_name'] = $fully_qualified_name;

        return $this;
    }

    /**
     * Gets is_global
     *
     * @return bool
     */
    public function getIsGlobal()
    {
        return $this->container['is_global'];
    }

    /**
     * Sets is_global
     *
     * @param bool $is_global 
     *
     * @return $this
     */
    public function setIsGlobal($is_global)
    {
        $this->container['is_global'] = $is_global;

        return $this;
    }

    /**
     * Gets is_rollup_reporting_location
     *
     * @return bool
     */
    public function getIsRollupReportingLocation()
    {
        return $this->container['is_rollup_reporting_location'];
    }

    /**
     * Sets is_rollup_reporting_location
     *
     * @param bool $is_rollup_reporting_location 
     *
     * @return $this
     */
    public function setIsRollupReportingLocation($is_rollup_reporting_location)
    {
        $this->container['is_rollup_reporting_location'] = $is_rollup_reporting_location;

        return $this;
    }

    /**
     * Gets general_ledger_mapping_code
     *
     * @return string
     */
    public function getGeneralLedgerMappingCode()
    {
        return $this->container['general_ledger_mapping_code'];
    }

    /**
     * Sets general_ledger_mapping_code
     *
     * @param string $general_ledger_mapping_code 
     *
     * @return $this
     */
    public function setGeneralLedgerMappingCode($general_ledger_mapping_code)
    {
        $this->container['general_ledger_mapping_code'] = $general_ledger_mapping_code;

        return $this;
    }

    /**
     * Gets default_shift_condition_ids
     *
     * @return int[]
     */
    public function getDefaultShiftConditionIds()
    {
        return $this->container['default_shift_condition_ids'];
    }

    /**
     * Sets default_shift_condition_ids
     *
     * @param int[] $default_shift_condition_ids 
     *
     * @return $this
     */
    public function setDefaultShiftConditionIds($default_shift_condition_ids)
    {
        $this->container['default_shift_condition_ids'] = $default_shift_condition_ids;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


