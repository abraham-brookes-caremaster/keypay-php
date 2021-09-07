<?php
/**
 * ManagerExpenseRequestModel
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
 * ManagerExpenseRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManagerExpenseRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ManagerExpenseRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_cancel' => 'bool',
        'can_modify' => 'bool',
        'can_approve' => 'bool',
        'id' => 'int',
        'employee_id' => 'int',
        'employee_name' => 'string',
        'status' => 'string',
        'description' => 'string',
        'line_items' => '\Swagger\Client\Model\ExpenseRequestLineItemModel[]',
        'attachments' => '\Swagger\Client\Model\AttachmentModel[]',
        'status_updated_by_user' => 'string',
        'status_update_notes' => 'string',
        'date_status_updated' => '\DateTime',
        'date_created' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_cancel' => null,
        'can_modify' => null,
        'can_approve' => null,
        'id' => 'int32',
        'employee_id' => 'int32',
        'employee_name' => null,
        'status' => null,
        'description' => null,
        'line_items' => null,
        'attachments' => null,
        'status_updated_by_user' => null,
        'status_update_notes' => null,
        'date_status_updated' => 'date-time',
        'date_created' => 'date-time'
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
        'can_cancel' => 'canCancel',
        'can_modify' => 'canModify',
        'can_approve' => 'canApprove',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'employee_name' => 'employeeName',
        'status' => 'status',
        'description' => 'description',
        'line_items' => 'lineItems',
        'attachments' => 'attachments',
        'status_updated_by_user' => 'statusUpdatedByUser',
        'status_update_notes' => 'statusUpdateNotes',
        'date_status_updated' => 'dateStatusUpdated',
        'date_created' => 'dateCreated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_cancel' => 'setCanCancel',
        'can_modify' => 'setCanModify',
        'can_approve' => 'setCanApprove',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'employee_name' => 'setEmployeeName',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'line_items' => 'setLineItems',
        'attachments' => 'setAttachments',
        'status_updated_by_user' => 'setStatusUpdatedByUser',
        'status_update_notes' => 'setStatusUpdateNotes',
        'date_status_updated' => 'setDateStatusUpdated',
        'date_created' => 'setDateCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_cancel' => 'getCanCancel',
        'can_modify' => 'getCanModify',
        'can_approve' => 'getCanApprove',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'employee_name' => 'getEmployeeName',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'line_items' => 'getLineItems',
        'attachments' => 'getAttachments',
        'status_updated_by_user' => 'getStatusUpdatedByUser',
        'status_update_notes' => 'getStatusUpdateNotes',
        'date_status_updated' => 'getDateStatusUpdated',
        'date_created' => 'getDateCreated'
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
        $this->container['can_cancel'] = isset($data['can_cancel']) ? $data['can_cancel'] : null;
        $this->container['can_modify'] = isset($data['can_modify']) ? $data['can_modify'] : null;
        $this->container['can_approve'] = isset($data['can_approve']) ? $data['can_approve'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employee_name'] = isset($data['employee_name']) ? $data['employee_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['status_updated_by_user'] = isset($data['status_updated_by_user']) ? $data['status_updated_by_user'] : null;
        $this->container['status_update_notes'] = isset($data['status_update_notes']) ? $data['status_update_notes'] : null;
        $this->container['date_status_updated'] = isset($data['date_status_updated']) ? $data['date_status_updated'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
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
     * Gets can_cancel
     *
     * @return bool
     */
    public function getCanCancel()
    {
        return $this->container['can_cancel'];
    }

    /**
     * Sets can_cancel
     *
     * @param bool $can_cancel 
     *
     * @return $this
     */
    public function setCanCancel($can_cancel)
    {
        $this->container['can_cancel'] = $can_cancel;

        return $this;
    }

    /**
     * Gets can_modify
     *
     * @return bool
     */
    public function getCanModify()
    {
        return $this->container['can_modify'];
    }

    /**
     * Sets can_modify
     *
     * @param bool $can_modify 
     *
     * @return $this
     */
    public function setCanModify($can_modify)
    {
        $this->container['can_modify'] = $can_modify;

        return $this;
    }

    /**
     * Gets can_approve
     *
     * @return bool
     */
    public function getCanApprove()
    {
        return $this->container['can_approve'];
    }

    /**
     * Sets can_approve
     *
     * @param bool $can_approve 
     *
     * @return $this
     */
    public function setCanApprove($can_approve)
    {
        $this->container['can_approve'] = $can_approve;

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
     * Gets employee_name
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string $employee_name 
     *
     * @return $this
     */
    public function setEmployeeName($employee_name)
    {
        $this->container['employee_name'] = $employee_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Swagger\Client\Model\ExpenseRequestLineItemModel[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Swagger\Client\Model\ExpenseRequestLineItemModel[] $line_items 
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\AttachmentModel[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\AttachmentModel[] $attachments 
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets status_updated_by_user
     *
     * @return string
     */
    public function getStatusUpdatedByUser()
    {
        return $this->container['status_updated_by_user'];
    }

    /**
     * Sets status_updated_by_user
     *
     * @param string $status_updated_by_user 
     *
     * @return $this
     */
    public function setStatusUpdatedByUser($status_updated_by_user)
    {
        $this->container['status_updated_by_user'] = $status_updated_by_user;

        return $this;
    }

    /**
     * Gets status_update_notes
     *
     * @return string
     */
    public function getStatusUpdateNotes()
    {
        return $this->container['status_update_notes'];
    }

    /**
     * Sets status_update_notes
     *
     * @param string $status_update_notes 
     *
     * @return $this
     */
    public function setStatusUpdateNotes($status_update_notes)
    {
        $this->container['status_update_notes'] = $status_update_notes;

        return $this;
    }

    /**
     * Gets date_status_updated
     *
     * @return \DateTime
     */
    public function getDateStatusUpdated()
    {
        return $this->container['date_status_updated'];
    }

    /**
     * Sets date_status_updated
     *
     * @param \DateTime $date_status_updated 
     *
     * @return $this
     */
    public function setDateStatusUpdated($date_status_updated)
    {
        $this->container['date_status_updated'] = $date_status_updated;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created 
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

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


