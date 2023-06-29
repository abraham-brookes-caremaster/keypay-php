<?php
/**
 * EmployeeRecurringSuperAdjustmentModel
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
 * EmployeeRecurringSuperAdjustmentModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmployeeRecurringSuperAdjustmentModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeRecurringSuperAdjustmentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contribution_type' => 'string',
        'adjustment_type' => 'string',
        'id' => 'int',
        'employee_id' => 'int',
        'amount' => 'float',
        'expiry_date' => '\DateTime',
        'from_date' => '\DateTime',
        'maximum_amount_paid' => 'float',
        'total_amount_paid' => 'float',
        'is_active' => 'bool',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contribution_type' => null,
        'adjustment_type' => null,
        'id' => 'int32',
        'employee_id' => 'int32',
        'amount' => 'double',
        'expiry_date' => 'date-time',
        'from_date' => 'date-time',
        'maximum_amount_paid' => 'double',
        'total_amount_paid' => 'double',
        'is_active' => null,
        'notes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contribution_type' => false,
		'adjustment_type' => false,
		'id' => false,
		'employee_id' => false,
		'amount' => false,
		'expiry_date' => false,
		'from_date' => false,
		'maximum_amount_paid' => false,
		'total_amount_paid' => false,
		'is_active' => false,
		'notes' => false
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
        'contribution_type' => 'contributionType',
        'adjustment_type' => 'adjustmentType',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'amount' => 'amount',
        'expiry_date' => 'expiryDate',
        'from_date' => 'fromDate',
        'maximum_amount_paid' => 'maximumAmountPaid',
        'total_amount_paid' => 'totalAmountPaid',
        'is_active' => 'isActive',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contribution_type' => 'setContributionType',
        'adjustment_type' => 'setAdjustmentType',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'amount' => 'setAmount',
        'expiry_date' => 'setExpiryDate',
        'from_date' => 'setFromDate',
        'maximum_amount_paid' => 'setMaximumAmountPaid',
        'total_amount_paid' => 'setTotalAmountPaid',
        'is_active' => 'setIsActive',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contribution_type' => 'getContributionType',
        'adjustment_type' => 'getAdjustmentType',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'amount' => 'getAmount',
        'expiry_date' => 'getExpiryDate',
        'from_date' => 'getFromDate',
        'maximum_amount_paid' => 'getMaximumAmountPaid',
        'total_amount_paid' => 'getTotalAmountPaid',
        'is_active' => 'getIsActive',
        'notes' => 'getNotes'
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

    public const CONTRIBUTION_TYPE_SUPER_GUARANTEE = 'SuperGuarantee';
    public const CONTRIBUTION_TYPE_SALARY_SACRIFICE = 'SalarySacrifice';
    public const CONTRIBUTION_TYPE_MEMBER_VOLUNTARY = 'MemberVoluntary';
    public const CONTRIBUTION_TYPE_EMPLOYER_CONTRIBUTION = 'EmployerContribution';
    public const CONTRIBUTION_TYPE_NON_RESC_EMPLOYER_CONTRIBUTION = 'NonRescEmployerContribution';
    public const ADJUSTMENT_TYPE_FIXED = 'Fixed';
    public const ADJUSTMENT_TYPE_PERCENTAGE_GROSS = 'PercentageGross';
    public const ADJUSTMENT_TYPE_PERCENTAGE_OTE = 'PercentageOTE';
    public const ADJUSTMENT_TYPE_PERCENTAGE_TAXABLE_EARNINGS = 'PercentageTaxableEarnings';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContributionTypeAllowableValues()
    {
        return [
            self::CONTRIBUTION_TYPE_SUPER_GUARANTEE,
            self::CONTRIBUTION_TYPE_SALARY_SACRIFICE,
            self::CONTRIBUTION_TYPE_MEMBER_VOLUNTARY,
            self::CONTRIBUTION_TYPE_EMPLOYER_CONTRIBUTION,
            self::CONTRIBUTION_TYPE_NON_RESC_EMPLOYER_CONTRIBUTION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdjustmentTypeAllowableValues()
    {
        return [
            self::ADJUSTMENT_TYPE_FIXED,
            self::ADJUSTMENT_TYPE_PERCENTAGE_GROSS,
            self::ADJUSTMENT_TYPE_PERCENTAGE_OTE,
            self::ADJUSTMENT_TYPE_PERCENTAGE_TAXABLE_EARNINGS,
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
        $this->setIfExists('contribution_type', $data ?? [], null);
        $this->setIfExists('adjustment_type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('maximum_amount_paid', $data ?? [], null);
        $this->setIfExists('total_amount_paid', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
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

        $allowedValues = $this->getContributionTypeAllowableValues();
        if (!is_null($this->container['contribution_type']) && !in_array($this->container['contribution_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contribution_type', must be one of '%s'",
                $this->container['contribution_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdjustmentTypeAllowableValues();
        if (!is_null($this->container['adjustment_type']) && !in_array($this->container['adjustment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'adjustment_type', must be one of '%s'",
                $this->container['adjustment_type'],
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
     * Gets contribution_type
     *
     * @return string|null
     */
    public function getContributionType()
    {
        return $this->container['contribution_type'];
    }

    /**
     * Sets contribution_type
     *
     * @param string|null $contribution_type 
     *
     * @return self
     */
    public function setContributionType($contribution_type)
    {
        if (is_null($contribution_type)) {
            throw new \InvalidArgumentException('non-nullable contribution_type cannot be null');
        }
        $allowedValues = $this->getContributionTypeAllowableValues();
        if (!in_array($contribution_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contribution_type', must be one of '%s'",
                    $contribution_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contribution_type'] = $contribution_type;

        return $this;
    }

    /**
     * Gets adjustment_type
     *
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustment_type'];
    }

    /**
     * Sets adjustment_type
     *
     * @param string|null $adjustment_type 
     *
     * @return self
     */
    public function setAdjustmentType($adjustment_type)
    {
        if (is_null($adjustment_type)) {
            throw new \InvalidArgumentException('non-nullable adjustment_type cannot be null');
        }
        $allowedValues = $this->getAdjustmentTypeAllowableValues();
        if (!in_array($adjustment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'adjustment_type', must be one of '%s'",
                    $adjustment_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adjustment_type'] = $adjustment_type;

        return $this;
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
     * Gets employee_id
     *
     * @return int|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int|null $employee_id 
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

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
     * Gets expiry_date
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime|null $expiry_date 
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date 
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets maximum_amount_paid
     *
     * @return float|null
     */
    public function getMaximumAmountPaid()
    {
        return $this->container['maximum_amount_paid'];
    }

    /**
     * Sets maximum_amount_paid
     *
     * @param float|null $maximum_amount_paid 
     *
     * @return self
     */
    public function setMaximumAmountPaid($maximum_amount_paid)
    {
        if (is_null($maximum_amount_paid)) {
            throw new \InvalidArgumentException('non-nullable maximum_amount_paid cannot be null');
        }
        $this->container['maximum_amount_paid'] = $maximum_amount_paid;

        return $this;
    }

    /**
     * Gets total_amount_paid
     *
     * @return float|null
     */
    public function getTotalAmountPaid()
    {
        return $this->container['total_amount_paid'];
    }

    /**
     * Sets total_amount_paid
     *
     * @param float|null $total_amount_paid 
     *
     * @return self
     */
    public function setTotalAmountPaid($total_amount_paid)
    {
        if (is_null($total_amount_paid)) {
            throw new \InvalidArgumentException('non-nullable total_amount_paid cannot be null');
        }
        $this->container['total_amount_paid'] = $total_amount_paid;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active 
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes 
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

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


