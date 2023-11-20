<?php
/**
 * ShiftLiabilityModel
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
 * ShiftLiabilityModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShiftLiabilityModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShiftLiabilityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'liability_category_name' => 'string',
        'liability_category_id' => 'int',
        'include_in_shift_cost' => 'bool',
        'amount' => 'float',
        'option' => 'string',
        'cost' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'liability_category_name' => null,
        'liability_category_id' => 'int32',
        'include_in_shift_cost' => null,
        'amount' => 'double',
        'option' => null,
        'cost' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'liability_category_name' => false,
		'liability_category_id' => false,
		'include_in_shift_cost' => false,
		'amount' => false,
		'option' => false,
		'cost' => false
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
        'liability_category_name' => 'liabilityCategoryName',
        'liability_category_id' => 'liabilityCategoryId',
        'include_in_shift_cost' => 'includeInShiftCost',
        'amount' => 'amount',
        'option' => 'option',
        'cost' => 'cost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'liability_category_name' => 'setLiabilityCategoryName',
        'liability_category_id' => 'setLiabilityCategoryId',
        'include_in_shift_cost' => 'setIncludeInShiftCost',
        'amount' => 'setAmount',
        'option' => 'setOption',
        'cost' => 'setCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'liability_category_name' => 'getLiabilityCategoryName',
        'liability_category_id' => 'getLiabilityCategoryId',
        'include_in_shift_cost' => 'getIncludeInShiftCost',
        'amount' => 'getAmount',
        'option' => 'getOption',
        'cost' => 'getCost'
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

    public const OPTION_FIXED = 'Fixed';
    public const OPTION_PER_HOUR_WORKED = 'PerHourWorked';
    public const OPTION_PERCENTAGE_OF_SHIFT_COST = 'PercentageOfShiftCost';
    public const OPTION_PER_SHIFT_UNIT = 'PerShiftUnit';
    public const OPTION_PER_DAY = 'PerDay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionAllowableValues()
    {
        return [
            self::OPTION_FIXED,
            self::OPTION_PER_HOUR_WORKED,
            self::OPTION_PERCENTAGE_OF_SHIFT_COST,
            self::OPTION_PER_SHIFT_UNIT,
            self::OPTION_PER_DAY,
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
        $this->setIfExists('liability_category_name', $data ?? [], null);
        $this->setIfExists('liability_category_id', $data ?? [], null);
        $this->setIfExists('include_in_shift_cost', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('option', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
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

        $allowedValues = $this->getOptionAllowableValues();
        if (!is_null($this->container['option']) && !in_array($this->container['option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option', must be one of '%s'",
                $this->container['option'],
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
     * Gets liability_category_name
     *
     * @return string|null
     */
    public function getLiabilityCategoryName()
    {
        return $this->container['liability_category_name'];
    }

    /**
     * Sets liability_category_name
     *
     * @param string|null $liability_category_name 
     *
     * @return self
     */
    public function setLiabilityCategoryName($liability_category_name)
    {
        if (is_null($liability_category_name)) {
            throw new \InvalidArgumentException('non-nullable liability_category_name cannot be null');
        }
        $this->container['liability_category_name'] = $liability_category_name;

        return $this;
    }

    /**
     * Gets liability_category_id
     *
     * @return int|null
     */
    public function getLiabilityCategoryId()
    {
        return $this->container['liability_category_id'];
    }

    /**
     * Sets liability_category_id
     *
     * @param int|null $liability_category_id 
     *
     * @return self
     */
    public function setLiabilityCategoryId($liability_category_id)
    {
        if (is_null($liability_category_id)) {
            throw new \InvalidArgumentException('non-nullable liability_category_id cannot be null');
        }
        $this->container['liability_category_id'] = $liability_category_id;

        return $this;
    }

    /**
     * Gets include_in_shift_cost
     *
     * @return bool|null
     */
    public function getIncludeInShiftCost()
    {
        return $this->container['include_in_shift_cost'];
    }

    /**
     * Sets include_in_shift_cost
     *
     * @param bool|null $include_in_shift_cost 
     *
     * @return self
     */
    public function setIncludeInShiftCost($include_in_shift_cost)
    {
        if (is_null($include_in_shift_cost)) {
            throw new \InvalidArgumentException('non-nullable include_in_shift_cost cannot be null');
        }
        $this->container['include_in_shift_cost'] = $include_in_shift_cost;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount 
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets option
     *
     * @return string|null
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string|null $option 
     *
     * @return self
     */
    public function setOption($option)
    {
        if (is_null($option)) {
            throw new \InvalidArgumentException('non-nullable option cannot be null');
        }
        $allowedValues = $this->getOptionAllowableValues();
        if (!in_array($option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option', must be one of '%s'",
                    $option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost 
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

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


