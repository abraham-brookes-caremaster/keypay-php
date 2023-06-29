<?php
/**
 * RecoverPasswordModel
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
 * RecoverPasswordModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoverPasswordModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecoverPasswordModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'username' => 'string',
        'message_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'username' => null,
        'message_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'username' => false,
		'message_type' => false
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
        'username' => 'username',
        'message_type' => 'messageType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'message_type' => 'setMessageType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'message_type' => 'getMessageType'
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

    public const MESSAGE_TYPE_NEW_PAY_SLIP_AVAILABLE = 'NewPaySlipAvailable';
    public const MESSAGE_TYPE_NEW_USER = 'NewUser';
    public const MESSAGE_TYPE_RECOVER_PASSWORD = 'RecoverPassword';
    public const MESSAGE_TYPE_EMPLOYEE_ACCESS = 'EmployeeAccess';
    public const MESSAGE_TYPE_BUSINESS_ACCESS = 'BusinessAccess';
    public const MESSAGE_TYPE_CANCEL_ACCOUNT = 'CancelAccount';
    public const MESSAGE_TYPE_INVOICE = 'Invoice';
    public const MESSAGE_TYPE_INVOICE_PAYMENT_SUCCESS_NOTIFICATION = 'InvoicePaymentSuccessNotification';
    public const MESSAGE_TYPE_AUTOMATED_PASSWORD = 'AutomatedPassword';
    public const MESSAGE_TYPE_LEAVE_REQUEST_NOTIFICATION = 'LeaveRequestNotification';
    public const MESSAGE_TYPE_RESTRICTED_ACCESS = 'RestrictedAccess';
    public const MESSAGE_TYPE_RESEND_PAYSLIP = 'ResendPayslip';
    public const MESSAGE_TYPE_PAYMENT_SUMMARY_AVAILABLE = 'PaymentSummaryAvailable';
    public const MESSAGE_TYPE_SUPER_PAYMENTS_UPDATE_RESULTS = 'SuperPaymentsUpdateResults';
    public const MESSAGE_TYPE_INVOICE_PAYMENT_FAILED_NOTIFICATION = 'InvoicePaymentFailedNotification';
    public const MESSAGE_TYPE_NEW_SHIFTS_PUBLISHED = 'NewShiftsPublished';
    public const MESSAGE_TYPE_SHIFTS_UNPUBLISHED = 'ShiftsUnpublished';
    public const MESSAGE_TYPE_SHIFT_DECLINED = 'ShiftDeclined';
    public const MESSAGE_TYPE_KIOSK_ACCESS_GRANTED = 'KioskAccessGranted';
    public const MESSAGE_TYPE_DAILY_NOTIFICATIONS = 'DailyNotifications';
    public const MESSAGE_TYPE_BSB_DATA_IMPORTED = 'BsbDataImported';
    public const MESSAGE_TYPE_INVOICEE_CARD_DETAILS_REMOVED = 'InvoiceeCardDetailsRemoved';
    public const MESSAGE_TYPE_WHITE_LABEL_MANAGER_ACCESS = 'WhiteLabelManagerAccess';
    public const MESSAGE_TYPE_RESELLER_ACCESS = 'ResellerAccess';
    public const MESSAGE_TYPE_DIRECT_DEPOSIT_REMINDER = 'DirectDepositReminder';
    public const MESSAGE_TYPE_EXPENSE_REQUEST_NOTIFICATION = 'ExpenseRequestNotification';
    public const MESSAGE_TYPE_UNAVAILABILITY_NOTIFICATION = 'UnavailabilityNotification';
    public const MESSAGE_TYPE_REPORT_PACK_GENERATED = 'ReportPackGenerated';
    public const MESSAGE_TYPE_REPORT_PACK_ERROR = 'ReportPackError';
    public const MESSAGE_TYPE_SYSTEM_PUBLIC_HOLIDAY_IMPORT = 'SystemPublicHolidayImport';
    public const MESSAGE_TYPE_TIMESHEET_REJECTED = 'TimesheetRejected';
    public const MESSAGE_TYPE_SHIFT_REPUBLISHED = 'ShiftRepublished';
    public const MESSAGE_TYPE_PENDING_SHIFTS_REMINDER = 'PendingShiftsReminder';
    public const MESSAGE_TYPE_EMPLOYEE_SHIFT_ACTION_TIMEOUT = 'EmployeeShiftActionTimeout';
    public const MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING = 'InitiateEmployeeOnboarding';
    public const MESSAGE_TYPE_FOLLOW_UP_EMPLOYEE_ONBOARDING = 'FollowUpEmployeeOnboarding';
    public const MESSAGE_TYPE_COMPLETE_EMPLOYEE_ONBOARDING = 'CompleteEmployeeOnboarding';
    public const MESSAGE_TYPE_NEW_SHIFTS_PRE_ACCEPTED = 'NewShiftsPreAccepted';
    public const MESSAGE_TYPE_PAY_RUN_TASK_NOTIFICATION = 'PayRunTaskNotification';
    public const MESSAGE_TYPE_SHIFT_SWAP_CANCELLED = 'ShiftSwapCancelled';
    public const MESSAGE_TYPE_BULK_SHIFT_SWAPS_CANCELLED = 'BulkShiftSwapsCancelled';
    public const MESSAGE_TYPE_SHIFT_SWAP_AWAITING_APPROVAL = 'ShiftSwapAwaitingApproval';
    public const MESSAGE_TYPE_SHIFT_SWAP_PROPOSED = 'ShiftSwapProposed';
    public const MESSAGE_TYPE_SHIFT_SWAP_ACCEPTED = 'ShiftSwapAccepted';
    public const MESSAGE_TYPE_SHIFT_SWAP_DECLINED = 'ShiftSwapDeclined';
    public const MESSAGE_TYPE_SHIFT_SWAP_REJECTED = 'ShiftSwapRejected';
    public const MESSAGE_TYPE_SHIFT_SWAP_APPROVED = 'ShiftSwapApproved';
    public const MESSAGE_TYPE_P60_AVAILABLE = 'P60Available';
    public const MESSAGE_TYPE_P60_ERROR = 'P60Error';
    public const MESSAGE_TYPE_LEAVING_EMPLOYEE_FORM_NOTIFICATION = 'LeavingEmployeeFormNotification';
    public const MESSAGE_TYPE_AUTO_ENROLMENT_NOTIFICATION = 'AutoEnrolmentNotification';
    public const MESSAGE_TYPE_LODGEMENT_NOTIFICATION = 'LodgementNotification';
    public const MESSAGE_TYPE_TWO_FACTOR_LOGIN = 'TwoFactorLogin';
    public const MESSAGE_TYPE_TWO_FACTOR_CHALLENGE = 'TwoFactorChallenge';
    public const MESSAGE_TYPE_CONFIRM_EMAIL_ADDRESS = 'ConfirmEmailAddress';
    public const MESSAGE_TYPE_CONFIRM_MOBILE_PHONE = 'ConfirmMobilePhone';
    public const MESSAGE_TYPE_DOCUMENT_NOTIFICATION_INITIAL = 'DocumentNotificationInitial';
    public const MESSAGE_TYPE_DOCUMENT_NOTIFICATION_INITIAL_WITH_ACKNOWLEDGEMENT = 'DocumentNotificationInitialWithAcknowledgement';
    public const MESSAGE_TYPE_DOCUMENT_NOTIFICATION_REMINDER = 'DocumentNotificationReminder';
    public const MESSAGE_TYPE_DOCUMENT_ACKNOWLEDGED_NOTIFICATION = 'DocumentAcknowledgedNotification';
    public const MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_ADMIN = 'InitiateEmployeeOnboardingAdmin';
    public const MESSAGE_TYPE_PAY_EVENT_REQUEST_AUTHORITY = 'PayEventRequestAuthority';
    public const MESSAGE_TYPE_PAY_EVENT_APPROVED_OR_REJECTED = 'PayEventApprovedOrRejected';
    public const MESSAGE_TYPE_SHIFT_BID_ACCEPTED = 'ShiftBidAccepted';
    public const MESSAGE_TYPE_EMPLOYEE_DETAILS_UPDATED = 'EmployeeDetailsUpdated';
    public const MESSAGE_TYPE_BANK_ACCOUNT_DETAILS_UPDATED = 'BankAccountDetailsUpdated';
    public const MESSAGE_TYPE_SUPER_DETAILS_UPDATED = 'SuperDetailsUpdated';
    public const MESSAGE_TYPE_MANAGER_SHIFT_ACTION_TIMEOUT = 'ManagerShiftActionTimeout';
    public const MESSAGE_TYPE_SUPER_FUND_NOTIFICATION_NEW_MEMBER = 'SuperFundNotificationNewMember';
    public const MESSAGE_TYPE_SUPER_PAYMENT_DISHONOUR = 'SuperPaymentDishonour';
    public const MESSAGE_TYPE_KIWI_SAVER_DETAILS_UPDATED = 'KiwiSaverDetailsUpdated';
    public const MESSAGE_TYPE_AUTO_ENROLMENT_POSTPONEMENT_NOTIFICATION = 'AutoEnrolmentPostponementNotification';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_CREATION = 'AutomatedPayRunErrorCreation';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_PROCESSING = 'AutomatedPayRunErrorProcessing';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_FINALISATION = 'AutomatedPayRunErrorFinalisation';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_POST_FINALISE = 'AutomatedPayRunErrorPostFinalise';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_SUCCESS_AND_FINALISED = 'AutomatedPayRunSuccessAndFinalised';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_SUCCESS_NOT_FINALISED = 'AutomatedPayRunSuccessNotFinalised';
    public const MESSAGE_TYPE_AUTOMATED_PAY_RUN_CREATION = 'AutomatedPayRunCreation';
    public const MESSAGE_TYPE_PAY_RUN_USAGE_BILLING_FAILURES = 'PayRunUsageBillingFailures';
    public const MESSAGE_TYPE_INCOME_STATEMENT_AVAILABLE = 'IncomeStatementAvailable';
    public const MESSAGE_TYPE_MALICIOUS_FILE_NOTIFICATION_ADMIN = 'MaliciousFileNotificationAdmin';
    public const MESSAGE_TYPE_USER_ACCOUNT_LOCKED = 'UserAccountLocked';
    public const MESSAGE_TYPE_MALICIOUS_FILE_NOTIFICATION_EMPLOYEE = 'MaliciousFileNotificationEmployee';
    public const MESSAGE_TYPE_SUPER_FUND_REFUND_NOTIFICATION = 'SuperFundRefundNotification';
    public const MESSAGE_TYPE_SUPER_BATCH_CANCELLED_NOTIFICATION = 'SuperBatchCancelledNotification';
    public const MESSAGE_TYPE_JOB_KEEPER_EMPLOYEE_NOMINATION = 'JobKeeperEmployeeNomination';
    public const MESSAGE_TYPE_HMRC_PAYMENT_REMINDER = 'HmrcPaymentReminder';
    public const MESSAGE_TYPE_IRAS_FORM_AVAILABLE = 'IrasFormAvailable';
    public const MESSAGE_TYPE_HMRC_PAYMENT_REMINDER_SEND_FAILURE = 'HmrcPaymentReminderSendFailure';
    public const MESSAGE_TYPE_SYNC_CANCELLED_SUPER_BATCHES_FROM_BEAM = 'SyncCancelledSuperBatchesFromBeam';
    public const MESSAGE_TYPE_EA_FORM_INCOME_TAX_AVAILABLE = 'EAFormIncomeTaxAvailable';
    public const MESSAGE_TYPE_PCB2_FORM_AVAILABLE = 'PCB2FormAvailable';
    public const MESSAGE_TYPE_JOB_MAKER_EMPLOYEE_NOMINATION = 'JobMakerEmployeeNomination';
    public const MESSAGE_TYPE_EARNINGS_CERTIFICATE_AVAILABLE = 'EarningsCertificateAvailable';
    public const MESSAGE_TYPE_P11D_AVAILABLE = 'P11dAvailable';
    public const MESSAGE_TYPE_PAY_RUN_APPROVAL_NOTIFICATION = 'PayRunApprovalNotification';
    public const MESSAGE_TYPE_PAY_RUN_APPROVAL_REMINDER = 'PayRunApprovalReminder';
    public const MESSAGE_TYPE_PAY_RUN_STATUS_CHANGED = 'PayRunStatusChanged';
    public const MESSAGE_TYPE_QUALIFICATION_UPDATED_NOTIFICATION = 'QualificationUpdatedNotification';
    public const MESSAGE_TYPE_QUALIFICATION_EXPIRING_NOTIFICATION = 'QualificationExpiringNotification';
    public const MESSAGE_TYPE_QUALIFICATION_EXPIRED_NOTIFICATION = 'QualificationExpiredNotification';
    public const MESSAGE_TYPE_CREDIT_CARD_EXPIRING_REMINDER = 'CreditCardExpiringReminder';
    public const MESSAGE_TYPE_RESEND_PAYMENT_AND_DEDUCTION_STATEMENT = 'ResendPaymentAndDeductionStatement';
    public const MESSAGE_TYPE_EMPLOYEE_SELF_SETUP_REMINDER = 'EmployeeSelfSetupReminder';
    public const MESSAGE_TYPE_EMPLOYEE_ONBOARDING_P45_UPLOADED = 'EmployeeOnboardingP45Uploaded';
    public const MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_WITH_CONTRACT = 'InitiateEmployeeOnboardingWithContract';
    public const MESSAGE_TYPE_SIGNATORY_CONTRACT = 'SignatoryContract';
    public const MESSAGE_TYPE_WORK_ELIGIBILITY_EXPIRING_NOTIFICATION = 'WorkEligibilityExpiringNotification';
    public const MESSAGE_TYPE_WORK_ELIGIBILITY_EXPIRED_NOTIFICATION = 'WorkEligibilityExpiredNotification';
    public const MESSAGE_TYPE_CONTRACT_SIGNED_EMPLOYEE_NOTIFICATION = 'ContractSignedEmployeeNotification';
    public const MESSAGE_TYPE_CONTRACT_SIGNED_EMPLOYER_NOTIFICATION = 'ContractSignedEmployerNotification';
    public const MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_WITH_LOGIN = 'InitiateEmployeeOnboardingWithLogin';
    public const MESSAGE_TYPE_AUTHORISING_SIGNATORY_NOTIFICATION = 'AuthorisingSignatoryNotification';
    public const MESSAGE_TYPE_INTEGRATION_CUSTOM_FEATURE_REQUEST = 'IntegrationCustomFeatureRequest';
    public const MESSAGE_TYPE_EMAIL_ADDRESS_CHANGED = 'EmailAddressChanged';
    public const MESSAGE_TYPE_EMAIL_ADDRESS_CONFIRM_CHANGED = 'EmailAddressConfirmChanged';
    public const MESSAGE_TYPE_RECOVERY_EMAIL_ADDRESS_CHANGED = 'RecoveryEmailAddressChanged';
    public const MESSAGE_TYPE_RECOVERY_EMAIL_ADDRESS_CONFIRM_CHANGED = 'RecoveryEmailAddressConfirmChanged';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageTypeAllowableValues()
    {
        return [
            self::MESSAGE_TYPE_NEW_PAY_SLIP_AVAILABLE,
            self::MESSAGE_TYPE_NEW_USER,
            self::MESSAGE_TYPE_RECOVER_PASSWORD,
            self::MESSAGE_TYPE_EMPLOYEE_ACCESS,
            self::MESSAGE_TYPE_BUSINESS_ACCESS,
            self::MESSAGE_TYPE_CANCEL_ACCOUNT,
            self::MESSAGE_TYPE_INVOICE,
            self::MESSAGE_TYPE_INVOICE_PAYMENT_SUCCESS_NOTIFICATION,
            self::MESSAGE_TYPE_AUTOMATED_PASSWORD,
            self::MESSAGE_TYPE_LEAVE_REQUEST_NOTIFICATION,
            self::MESSAGE_TYPE_RESTRICTED_ACCESS,
            self::MESSAGE_TYPE_RESEND_PAYSLIP,
            self::MESSAGE_TYPE_PAYMENT_SUMMARY_AVAILABLE,
            self::MESSAGE_TYPE_SUPER_PAYMENTS_UPDATE_RESULTS,
            self::MESSAGE_TYPE_INVOICE_PAYMENT_FAILED_NOTIFICATION,
            self::MESSAGE_TYPE_NEW_SHIFTS_PUBLISHED,
            self::MESSAGE_TYPE_SHIFTS_UNPUBLISHED,
            self::MESSAGE_TYPE_SHIFT_DECLINED,
            self::MESSAGE_TYPE_KIOSK_ACCESS_GRANTED,
            self::MESSAGE_TYPE_DAILY_NOTIFICATIONS,
            self::MESSAGE_TYPE_BSB_DATA_IMPORTED,
            self::MESSAGE_TYPE_INVOICEE_CARD_DETAILS_REMOVED,
            self::MESSAGE_TYPE_WHITE_LABEL_MANAGER_ACCESS,
            self::MESSAGE_TYPE_RESELLER_ACCESS,
            self::MESSAGE_TYPE_DIRECT_DEPOSIT_REMINDER,
            self::MESSAGE_TYPE_EXPENSE_REQUEST_NOTIFICATION,
            self::MESSAGE_TYPE_UNAVAILABILITY_NOTIFICATION,
            self::MESSAGE_TYPE_REPORT_PACK_GENERATED,
            self::MESSAGE_TYPE_REPORT_PACK_ERROR,
            self::MESSAGE_TYPE_SYSTEM_PUBLIC_HOLIDAY_IMPORT,
            self::MESSAGE_TYPE_TIMESHEET_REJECTED,
            self::MESSAGE_TYPE_SHIFT_REPUBLISHED,
            self::MESSAGE_TYPE_PENDING_SHIFTS_REMINDER,
            self::MESSAGE_TYPE_EMPLOYEE_SHIFT_ACTION_TIMEOUT,
            self::MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING,
            self::MESSAGE_TYPE_FOLLOW_UP_EMPLOYEE_ONBOARDING,
            self::MESSAGE_TYPE_COMPLETE_EMPLOYEE_ONBOARDING,
            self::MESSAGE_TYPE_NEW_SHIFTS_PRE_ACCEPTED,
            self::MESSAGE_TYPE_PAY_RUN_TASK_NOTIFICATION,
            self::MESSAGE_TYPE_SHIFT_SWAP_CANCELLED,
            self::MESSAGE_TYPE_BULK_SHIFT_SWAPS_CANCELLED,
            self::MESSAGE_TYPE_SHIFT_SWAP_AWAITING_APPROVAL,
            self::MESSAGE_TYPE_SHIFT_SWAP_PROPOSED,
            self::MESSAGE_TYPE_SHIFT_SWAP_ACCEPTED,
            self::MESSAGE_TYPE_SHIFT_SWAP_DECLINED,
            self::MESSAGE_TYPE_SHIFT_SWAP_REJECTED,
            self::MESSAGE_TYPE_SHIFT_SWAP_APPROVED,
            self::MESSAGE_TYPE_P60_AVAILABLE,
            self::MESSAGE_TYPE_P60_ERROR,
            self::MESSAGE_TYPE_LEAVING_EMPLOYEE_FORM_NOTIFICATION,
            self::MESSAGE_TYPE_AUTO_ENROLMENT_NOTIFICATION,
            self::MESSAGE_TYPE_LODGEMENT_NOTIFICATION,
            self::MESSAGE_TYPE_TWO_FACTOR_LOGIN,
            self::MESSAGE_TYPE_TWO_FACTOR_CHALLENGE,
            self::MESSAGE_TYPE_CONFIRM_EMAIL_ADDRESS,
            self::MESSAGE_TYPE_CONFIRM_MOBILE_PHONE,
            self::MESSAGE_TYPE_DOCUMENT_NOTIFICATION_INITIAL,
            self::MESSAGE_TYPE_DOCUMENT_NOTIFICATION_INITIAL_WITH_ACKNOWLEDGEMENT,
            self::MESSAGE_TYPE_DOCUMENT_NOTIFICATION_REMINDER,
            self::MESSAGE_TYPE_DOCUMENT_ACKNOWLEDGED_NOTIFICATION,
            self::MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_ADMIN,
            self::MESSAGE_TYPE_PAY_EVENT_REQUEST_AUTHORITY,
            self::MESSAGE_TYPE_PAY_EVENT_APPROVED_OR_REJECTED,
            self::MESSAGE_TYPE_SHIFT_BID_ACCEPTED,
            self::MESSAGE_TYPE_EMPLOYEE_DETAILS_UPDATED,
            self::MESSAGE_TYPE_BANK_ACCOUNT_DETAILS_UPDATED,
            self::MESSAGE_TYPE_SUPER_DETAILS_UPDATED,
            self::MESSAGE_TYPE_MANAGER_SHIFT_ACTION_TIMEOUT,
            self::MESSAGE_TYPE_SUPER_FUND_NOTIFICATION_NEW_MEMBER,
            self::MESSAGE_TYPE_SUPER_PAYMENT_DISHONOUR,
            self::MESSAGE_TYPE_KIWI_SAVER_DETAILS_UPDATED,
            self::MESSAGE_TYPE_AUTO_ENROLMENT_POSTPONEMENT_NOTIFICATION,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_CREATION,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_PROCESSING,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_FINALISATION,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_ERROR_POST_FINALISE,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_SUCCESS_AND_FINALISED,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_SUCCESS_NOT_FINALISED,
            self::MESSAGE_TYPE_AUTOMATED_PAY_RUN_CREATION,
            self::MESSAGE_TYPE_PAY_RUN_USAGE_BILLING_FAILURES,
            self::MESSAGE_TYPE_INCOME_STATEMENT_AVAILABLE,
            self::MESSAGE_TYPE_MALICIOUS_FILE_NOTIFICATION_ADMIN,
            self::MESSAGE_TYPE_USER_ACCOUNT_LOCKED,
            self::MESSAGE_TYPE_MALICIOUS_FILE_NOTIFICATION_EMPLOYEE,
            self::MESSAGE_TYPE_SUPER_FUND_REFUND_NOTIFICATION,
            self::MESSAGE_TYPE_SUPER_BATCH_CANCELLED_NOTIFICATION,
            self::MESSAGE_TYPE_JOB_KEEPER_EMPLOYEE_NOMINATION,
            self::MESSAGE_TYPE_HMRC_PAYMENT_REMINDER,
            self::MESSAGE_TYPE_IRAS_FORM_AVAILABLE,
            self::MESSAGE_TYPE_HMRC_PAYMENT_REMINDER_SEND_FAILURE,
            self::MESSAGE_TYPE_SYNC_CANCELLED_SUPER_BATCHES_FROM_BEAM,
            self::MESSAGE_TYPE_EA_FORM_INCOME_TAX_AVAILABLE,
            self::MESSAGE_TYPE_PCB2_FORM_AVAILABLE,
            self::MESSAGE_TYPE_JOB_MAKER_EMPLOYEE_NOMINATION,
            self::MESSAGE_TYPE_EARNINGS_CERTIFICATE_AVAILABLE,
            self::MESSAGE_TYPE_P11D_AVAILABLE,
            self::MESSAGE_TYPE_PAY_RUN_APPROVAL_NOTIFICATION,
            self::MESSAGE_TYPE_PAY_RUN_APPROVAL_REMINDER,
            self::MESSAGE_TYPE_PAY_RUN_STATUS_CHANGED,
            self::MESSAGE_TYPE_QUALIFICATION_UPDATED_NOTIFICATION,
            self::MESSAGE_TYPE_QUALIFICATION_EXPIRING_NOTIFICATION,
            self::MESSAGE_TYPE_QUALIFICATION_EXPIRED_NOTIFICATION,
            self::MESSAGE_TYPE_CREDIT_CARD_EXPIRING_REMINDER,
            self::MESSAGE_TYPE_RESEND_PAYMENT_AND_DEDUCTION_STATEMENT,
            self::MESSAGE_TYPE_EMPLOYEE_SELF_SETUP_REMINDER,
            self::MESSAGE_TYPE_EMPLOYEE_ONBOARDING_P45_UPLOADED,
            self::MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_WITH_CONTRACT,
            self::MESSAGE_TYPE_SIGNATORY_CONTRACT,
            self::MESSAGE_TYPE_WORK_ELIGIBILITY_EXPIRING_NOTIFICATION,
            self::MESSAGE_TYPE_WORK_ELIGIBILITY_EXPIRED_NOTIFICATION,
            self::MESSAGE_TYPE_CONTRACT_SIGNED_EMPLOYEE_NOTIFICATION,
            self::MESSAGE_TYPE_CONTRACT_SIGNED_EMPLOYER_NOTIFICATION,
            self::MESSAGE_TYPE_INITIATE_EMPLOYEE_ONBOARDING_WITH_LOGIN,
            self::MESSAGE_TYPE_AUTHORISING_SIGNATORY_NOTIFICATION,
            self::MESSAGE_TYPE_INTEGRATION_CUSTOM_FEATURE_REQUEST,
            self::MESSAGE_TYPE_EMAIL_ADDRESS_CHANGED,
            self::MESSAGE_TYPE_EMAIL_ADDRESS_CONFIRM_CHANGED,
            self::MESSAGE_TYPE_RECOVERY_EMAIL_ADDRESS_CHANGED,
            self::MESSAGE_TYPE_RECOVERY_EMAIL_ADDRESS_CONFIRM_CHANGED,
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
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('message_type', $data ?? [], null);
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

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!is_null($this->container['message_type']) && !in_array($this->container['message_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'message_type', must be one of '%s'",
                $this->container['message_type'],
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Required
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string|null $message_type 
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        if (is_null($message_type)) {
            throw new \InvalidArgumentException('non-nullable message_type cannot be null');
        }
        $allowedValues = $this->getMessageTypeAllowableValues();
        if (!in_array($message_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'message_type', must be one of '%s'",
                    $message_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['message_type'] = $message_type;

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


