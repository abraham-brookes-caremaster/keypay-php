<?php
/**
 * RosterShiftSwapModel
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
 * RosterShiftSwapModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RosterShiftSwapModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RosterShiftSwapModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'from_employee' => 'string',
        'to_employee' => 'string',
        'from_employee_id' => 'int',
        'to_employee_id' => 'int',
        'date_created' => '\DateTime',
        'note' => 'string',
        'rejected_reason' => 'string',
        'status' => 'int',
        'status_description' => 'string'
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
        'from_employee' => null,
        'to_employee' => null,
        'from_employee_id' => 'int32',
        'to_employee_id' => 'int32',
        'date_created' => 'date-time',
        'note' => null,
        'rejected_reason' => null,
        'status' => 'int32',
        'status_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'from_employee' => false,
		'to_employee' => false,
		'from_employee_id' => false,
		'to_employee_id' => false,
		'date_created' => false,
		'note' => false,
		'rejected_reason' => false,
		'status' => false,
		'status_description' => false
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
        'from_employee' => 'fromEmployee',
        'to_employee' => 'toEmployee',
        'from_employee_id' => 'fromEmployeeId',
        'to_employee_id' => 'toEmployeeId',
        'date_created' => 'dateCreated',
        'note' => 'note',
        'rejected_reason' => 'rejectedReason',
        'status' => 'status',
        'status_description' => 'statusDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'from_employee' => 'setFromEmployee',
        'to_employee' => 'setToEmployee',
        'from_employee_id' => 'setFromEmployeeId',
        'to_employee_id' => 'setToEmployeeId',
        'date_created' => 'setDateCreated',
        'note' => 'setNote',
        'rejected_reason' => 'setRejectedReason',
        'status' => 'setStatus',
        'status_description' => 'setStatusDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'from_employee' => 'getFromEmployee',
        'to_employee' => 'getToEmployee',
        'from_employee_id' => 'getFromEmployeeId',
        'to_employee_id' => 'getToEmployeeId',
        'date_created' => 'getDateCreated',
        'note' => 'getNote',
        'rejected_reason' => 'getRejectedReason',
        'status' => 'getStatus',
        'status_description' => 'getStatusDescription'
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
        $this->setIfExists('from_employee', $data ?? [], null);
        $this->setIfExists('to_employee', $data ?? [], null);
        $this->setIfExists('from_employee_id', $data ?? [], null);
        $this->setIfExists('to_employee_id', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('rejected_reason', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_description', $data ?? [], null);
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
     * Gets from_employee
     *
     * @return string|null
     */
    public function getFromEmployee()
    {
        return $this->container['from_employee'];
    }

    /**
     * Sets from_employee
     *
     * @param string|null $from_employee 
     *
     * @return self
     */
    public function setFromEmployee($from_employee)
    {
        if (is_null($from_employee)) {
            throw new \InvalidArgumentException('non-nullable from_employee cannot be null');
        }
        $this->container['from_employee'] = $from_employee;

        return $this;
    }

    /**
     * Gets to_employee
     *
     * @return string|null
     */
    public function getToEmployee()
    {
        return $this->container['to_employee'];
    }

    /**
     * Sets to_employee
     *
     * @param string|null $to_employee 
     *
     * @return self
     */
    public function setToEmployee($to_employee)
    {
        if (is_null($to_employee)) {
            throw new \InvalidArgumentException('non-nullable to_employee cannot be null');
        }
        $this->container['to_employee'] = $to_employee;

        return $this;
    }

    /**
     * Gets from_employee_id
     *
     * @return int|null
     */
    public function getFromEmployeeId()
    {
        return $this->container['from_employee_id'];
    }

    /**
     * Sets from_employee_id
     *
     * @param int|null $from_employee_id 
     *
     * @return self
     */
    public function setFromEmployeeId($from_employee_id)
    {
        if (is_null($from_employee_id)) {
            throw new \InvalidArgumentException('non-nullable from_employee_id cannot be null');
        }
        $this->container['from_employee_id'] = $from_employee_id;

        return $this;
    }

    /**
     * Gets to_employee_id
     *
     * @return int|null
     */
    public function getToEmployeeId()
    {
        return $this->container['to_employee_id'];
    }

    /**
     * Sets to_employee_id
     *
     * @param int|null $to_employee_id 
     *
     * @return self
     */
    public function setToEmployeeId($to_employee_id)
    {
        if (is_null($to_employee_id)) {
            throw new \InvalidArgumentException('non-nullable to_employee_id cannot be null');
        }
        $this->container['to_employee_id'] = $to_employee_id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created 
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note 
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets rejected_reason
     *
     * @return string|null
     */
    public function getRejectedReason()
    {
        return $this->container['rejected_reason'];
    }

    /**
     * Sets rejected_reason
     *
     * @param string|null $rejected_reason 
     *
     * @return self
     */
    public function setRejectedReason($rejected_reason)
    {
        if (is_null($rejected_reason)) {
            throw new \InvalidArgumentException('non-nullable rejected_reason cannot be null');
        }
        $this->container['rejected_reason'] = $rejected_reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string|null $status_description 
     *
     * @return self
     */
    public function setStatusDescription($status_description)
    {
        if (is_null($status_description)) {
            throw new \InvalidArgumentException('non-nullable status_description cannot be null');
        }
        $this->container['status_description'] = $status_description;

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


