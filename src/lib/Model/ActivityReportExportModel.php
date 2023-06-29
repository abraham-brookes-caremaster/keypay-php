<?php
/**
 * ActivityReportExportModel
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
 * ActivityReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ActivityReportExportModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'int',
        'location_id' => 'int',
        'location' => 'string',
        'first_name' => 'string',
        'surname' => 'string',
        'total_hours' => 'float',
        'gross_earnings' => 'float',
        'taxable_earnings' => 'float',
        'payg_withholding' => 'float',
        'super_contributions' => 'float',
        'employer_contributions' => 'float',
        'net_earnings' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => 'int32',
        'location_id' => 'int32',
        'location' => null,
        'first_name' => null,
        'surname' => null,
        'total_hours' => 'double',
        'gross_earnings' => 'double',
        'taxable_earnings' => 'double',
        'payg_withholding' => 'double',
        'super_contributions' => 'double',
        'employer_contributions' => 'double',
        'net_earnings' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_id' => false,
		'location_id' => false,
		'location' => false,
		'first_name' => false,
		'surname' => false,
		'total_hours' => false,
		'gross_earnings' => false,
		'taxable_earnings' => false,
		'payg_withholding' => false,
		'super_contributions' => false,
		'employer_contributions' => false,
		'net_earnings' => false
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
        'employee_id' => 'employeeId',
        'location_id' => 'locationId',
        'location' => 'location',
        'first_name' => 'firstName',
        'surname' => 'surname',
        'total_hours' => 'totalHours',
        'gross_earnings' => 'grossEarnings',
        'taxable_earnings' => 'taxableEarnings',
        'payg_withholding' => 'paygWithholding',
        'super_contributions' => 'superContributions',
        'employer_contributions' => 'employerContributions',
        'net_earnings' => 'netEarnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'location_id' => 'setLocationId',
        'location' => 'setLocation',
        'first_name' => 'setFirstName',
        'surname' => 'setSurname',
        'total_hours' => 'setTotalHours',
        'gross_earnings' => 'setGrossEarnings',
        'taxable_earnings' => 'setTaxableEarnings',
        'payg_withholding' => 'setPaygWithholding',
        'super_contributions' => 'setSuperContributions',
        'employer_contributions' => 'setEmployerContributions',
        'net_earnings' => 'setNetEarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'location_id' => 'getLocationId',
        'location' => 'getLocation',
        'first_name' => 'getFirstName',
        'surname' => 'getSurname',
        'total_hours' => 'getTotalHours',
        'gross_earnings' => 'getGrossEarnings',
        'taxable_earnings' => 'getTaxableEarnings',
        'payg_withholding' => 'getPaygWithholding',
        'super_contributions' => 'getSuperContributions',
        'employer_contributions' => 'getEmployerContributions',
        'net_earnings' => 'getNetEarnings'
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
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('total_hours', $data ?? [], null);
        $this->setIfExists('gross_earnings', $data ?? [], null);
        $this->setIfExists('taxable_earnings', $data ?? [], null);
        $this->setIfExists('payg_withholding', $data ?? [], null);
        $this->setIfExists('super_contributions', $data ?? [], null);
        $this->setIfExists('employer_contributions', $data ?? [], null);
        $this->setIfExists('net_earnings', $data ?? [], null);
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
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id 
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location 
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname 
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets total_hours
     *
     * @return float|null
     */
    public function getTotalHours()
    {
        return $this->container['total_hours'];
    }

    /**
     * Sets total_hours
     *
     * @param float|null $total_hours 
     *
     * @return self
     */
    public function setTotalHours($total_hours)
    {
        if (is_null($total_hours)) {
            throw new \InvalidArgumentException('non-nullable total_hours cannot be null');
        }
        $this->container['total_hours'] = $total_hours;

        return $this;
    }

    /**
     * Gets gross_earnings
     *
     * @return float|null
     */
    public function getGrossEarnings()
    {
        return $this->container['gross_earnings'];
    }

    /**
     * Sets gross_earnings
     *
     * @param float|null $gross_earnings 
     *
     * @return self
     */
    public function setGrossEarnings($gross_earnings)
    {
        if (is_null($gross_earnings)) {
            throw new \InvalidArgumentException('non-nullable gross_earnings cannot be null');
        }
        $this->container['gross_earnings'] = $gross_earnings;

        return $this;
    }

    /**
     * Gets taxable_earnings
     *
     * @return float|null
     */
    public function getTaxableEarnings()
    {
        return $this->container['taxable_earnings'];
    }

    /**
     * Sets taxable_earnings
     *
     * @param float|null $taxable_earnings 
     *
     * @return self
     */
    public function setTaxableEarnings($taxable_earnings)
    {
        if (is_null($taxable_earnings)) {
            throw new \InvalidArgumentException('non-nullable taxable_earnings cannot be null');
        }
        $this->container['taxable_earnings'] = $taxable_earnings;

        return $this;
    }

    /**
     * Gets payg_withholding
     *
     * @return float|null
     */
    public function getPaygWithholding()
    {
        return $this->container['payg_withholding'];
    }

    /**
     * Sets payg_withholding
     *
     * @param float|null $payg_withholding 
     *
     * @return self
     */
    public function setPaygWithholding($payg_withholding)
    {
        if (is_null($payg_withholding)) {
            throw new \InvalidArgumentException('non-nullable payg_withholding cannot be null');
        }
        $this->container['payg_withholding'] = $payg_withholding;

        return $this;
    }

    /**
     * Gets super_contributions
     *
     * @return float|null
     */
    public function getSuperContributions()
    {
        return $this->container['super_contributions'];
    }

    /**
     * Sets super_contributions
     *
     * @param float|null $super_contributions 
     *
     * @return self
     */
    public function setSuperContributions($super_contributions)
    {
        if (is_null($super_contributions)) {
            throw new \InvalidArgumentException('non-nullable super_contributions cannot be null');
        }
        $this->container['super_contributions'] = $super_contributions;

        return $this;
    }

    /**
     * Gets employer_contributions
     *
     * @return float|null
     */
    public function getEmployerContributions()
    {
        return $this->container['employer_contributions'];
    }

    /**
     * Sets employer_contributions
     *
     * @param float|null $employer_contributions 
     *
     * @return self
     */
    public function setEmployerContributions($employer_contributions)
    {
        if (is_null($employer_contributions)) {
            throw new \InvalidArgumentException('non-nullable employer_contributions cannot be null');
        }
        $this->container['employer_contributions'] = $employer_contributions;

        return $this;
    }

    /**
     * Gets net_earnings
     *
     * @return float|null
     */
    public function getNetEarnings()
    {
        return $this->container['net_earnings'];
    }

    /**
     * Sets net_earnings
     *
     * @param float|null $net_earnings 
     *
     * @return self
     */
    public function setNetEarnings($net_earnings)
    {
        if (is_null($net_earnings)) {
            throw new \InvalidArgumentException('non-nullable net_earnings cannot be null');
        }
        $this->container['net_earnings'] = $net_earnings;

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


