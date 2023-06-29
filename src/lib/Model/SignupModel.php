<?php
/**
 * SignupModel
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
 * SignupModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SignupModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignupModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_id' => 'int',
        'business_name' => 'string',
        'date_created' => '\DateTime',
        'billing_plan' => 'string',
        'realm_id' => 'string',
        'external_id' => 'string',
        'email_addresses' => 'string',
        'user_ids' => 'string',
        'number_of_complete_employees' => 'int',
        'number_of_incomplete_employees' => 'int',
        'date_last_pay_run_finalised' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_id' => 'int32',
        'business_name' => null,
        'date_created' => 'date-time',
        'billing_plan' => null,
        'realm_id' => null,
        'external_id' => null,
        'email_addresses' => null,
        'user_ids' => null,
        'number_of_complete_employees' => 'int32',
        'number_of_incomplete_employees' => 'int32',
        'date_last_pay_run_finalised' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_id' => false,
		'business_name' => false,
		'date_created' => false,
		'billing_plan' => false,
		'realm_id' => false,
		'external_id' => false,
		'email_addresses' => false,
		'user_ids' => false,
		'number_of_complete_employees' => false,
		'number_of_incomplete_employees' => false,
		'date_last_pay_run_finalised' => false
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
        'business_id' => 'businessId',
        'business_name' => 'businessName',
        'date_created' => 'dateCreated',
        'billing_plan' => 'billingPlan',
        'realm_id' => 'realmId',
        'external_id' => 'externalId',
        'email_addresses' => 'emailAddresses',
        'user_ids' => 'userIds',
        'number_of_complete_employees' => 'numberOfCompleteEmployees',
        'number_of_incomplete_employees' => 'numberOfIncompleteEmployees',
        'date_last_pay_run_finalised' => 'dateLastPayRunFinalised'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_id' => 'setBusinessId',
        'business_name' => 'setBusinessName',
        'date_created' => 'setDateCreated',
        'billing_plan' => 'setBillingPlan',
        'realm_id' => 'setRealmId',
        'external_id' => 'setExternalId',
        'email_addresses' => 'setEmailAddresses',
        'user_ids' => 'setUserIds',
        'number_of_complete_employees' => 'setNumberOfCompleteEmployees',
        'number_of_incomplete_employees' => 'setNumberOfIncompleteEmployees',
        'date_last_pay_run_finalised' => 'setDateLastPayRunFinalised'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_id' => 'getBusinessId',
        'business_name' => 'getBusinessName',
        'date_created' => 'getDateCreated',
        'billing_plan' => 'getBillingPlan',
        'realm_id' => 'getRealmId',
        'external_id' => 'getExternalId',
        'email_addresses' => 'getEmailAddresses',
        'user_ids' => 'getUserIds',
        'number_of_complete_employees' => 'getNumberOfCompleteEmployees',
        'number_of_incomplete_employees' => 'getNumberOfIncompleteEmployees',
        'date_last_pay_run_finalised' => 'getDateLastPayRunFinalised'
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
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('business_name', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('billing_plan', $data ?? [], null);
        $this->setIfExists('realm_id', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('email_addresses', $data ?? [], null);
        $this->setIfExists('user_ids', $data ?? [], null);
        $this->setIfExists('number_of_complete_employees', $data ?? [], null);
        $this->setIfExists('number_of_incomplete_employees', $data ?? [], null);
        $this->setIfExists('date_last_pay_run_finalised', $data ?? [], null);
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
     * Gets business_id
     *
     * @return int|null
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param int|null $business_id 
     *
     * @return self
     */
    public function setBusinessId($business_id)
    {
        if (is_null($business_id)) {
            throw new \InvalidArgumentException('non-nullable business_id cannot be null');
        }
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name 
     *
     * @return self
     */
    public function setBusinessName($business_name)
    {
        if (is_null($business_name)) {
            throw new \InvalidArgumentException('non-nullable business_name cannot be null');
        }
        $this->container['business_name'] = $business_name;

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
     * Gets billing_plan
     *
     * @return string|null
     */
    public function getBillingPlan()
    {
        return $this->container['billing_plan'];
    }

    /**
     * Sets billing_plan
     *
     * @param string|null $billing_plan 
     *
     * @return self
     */
    public function setBillingPlan($billing_plan)
    {
        if (is_null($billing_plan)) {
            throw new \InvalidArgumentException('non-nullable billing_plan cannot be null');
        }
        $this->container['billing_plan'] = $billing_plan;

        return $this;
    }

    /**
     * Gets realm_id
     *
     * @return string|null
     */
    public function getRealmId()
    {
        return $this->container['realm_id'];
    }

    /**
     * Sets realm_id
     *
     * @param string|null $realm_id 
     *
     * @return self
     */
    public function setRealmId($realm_id)
    {
        if (is_null($realm_id)) {
            throw new \InvalidArgumentException('non-nullable realm_id cannot be null');
        }
        $this->container['realm_id'] = $realm_id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id 
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return string|null
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param string|null $email_addresses 
     *
     * @return self
     */
    public function setEmailAddresses($email_addresses)
    {
        if (is_null($email_addresses)) {
            throw new \InvalidArgumentException('non-nullable email_addresses cannot be null');
        }
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string|null
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string|null $user_ids 
     *
     * @return self
     */
    public function setUserIds($user_ids)
    {
        if (is_null($user_ids)) {
            throw new \InvalidArgumentException('non-nullable user_ids cannot be null');
        }
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets number_of_complete_employees
     *
     * @return int|null
     */
    public function getNumberOfCompleteEmployees()
    {
        return $this->container['number_of_complete_employees'];
    }

    /**
     * Sets number_of_complete_employees
     *
     * @param int|null $number_of_complete_employees 
     *
     * @return self
     */
    public function setNumberOfCompleteEmployees($number_of_complete_employees)
    {
        if (is_null($number_of_complete_employees)) {
            throw new \InvalidArgumentException('non-nullable number_of_complete_employees cannot be null');
        }
        $this->container['number_of_complete_employees'] = $number_of_complete_employees;

        return $this;
    }

    /**
     * Gets number_of_incomplete_employees
     *
     * @return int|null
     */
    public function getNumberOfIncompleteEmployees()
    {
        return $this->container['number_of_incomplete_employees'];
    }

    /**
     * Sets number_of_incomplete_employees
     *
     * @param int|null $number_of_incomplete_employees 
     *
     * @return self
     */
    public function setNumberOfIncompleteEmployees($number_of_incomplete_employees)
    {
        if (is_null($number_of_incomplete_employees)) {
            throw new \InvalidArgumentException('non-nullable number_of_incomplete_employees cannot be null');
        }
        $this->container['number_of_incomplete_employees'] = $number_of_incomplete_employees;

        return $this;
    }

    /**
     * Gets date_last_pay_run_finalised
     *
     * @return \DateTime|null
     */
    public function getDateLastPayRunFinalised()
    {
        return $this->container['date_last_pay_run_finalised'];
    }

    /**
     * Sets date_last_pay_run_finalised
     *
     * @param \DateTime|null $date_last_pay_run_finalised 
     *
     * @return self
     */
    public function setDateLastPayRunFinalised($date_last_pay_run_finalised)
    {
        if (is_null($date_last_pay_run_finalised)) {
            throw new \InvalidArgumentException('non-nullable date_last_pay_run_finalised cannot be null');
        }
        $this->container['date_last_pay_run_finalised'] = $date_last_pay_run_finalised;

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


