<?php
/**
 * ActionIVR
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */

/**
 * WildJar API
 *
 * The WildJar API allows you to programmatically access call data, create and manage accounts,  create and configure services, enable features and integrations, and send SMS.
 *
 * The version of the document: 1.0.0
 * Contact: support@wildjar.com
 * Generated automatically
 */

/**
 * NOTE: This class is auto generated .
  * Do not edit the class manually.
 */

namespace WildJar\ApiClient\Model;

use \ArrayAccess;
use \WildJar\ApiClient\ObjectSerializer;

/**
 * ActionIVR Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class ActionIVR implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionIVR';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'mixed',
        'account' => 'mixed',
        'name' => 'mixed',
        'next_action' => 'mixed',
        'next_action_id' => 'mixed',
        'notify' => 'mixed',
        'group_id' => 'mixed',
        'timeout' => 'float',
        'digit_timeout' => 'float',
        'finish_on_key' => 'string',
        'digits' => 'float',
        'retries' => 'float',
        'message' => 'string',
        'invalid_text' => 'string',
        'invalid_play' => 'string',
        'invalid_action' => 'string',
        'invalid_action_id' => 'float',
        'whisper' => 'string',
        'force_caller' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'account' => null,
        'name' => null,
        'next_action' => null,
        'next_action_id' => null,
        'notify' => null,
        'group_id' => null,
        'timeout' => null,
        'digit_timeout' => null,
        'finish_on_key' => null,
        'digits' => null,
        'retries' => null,
        'message' => null,
        'invalid_text' => null,
        'invalid_play' => null,
        'invalid_action' => null,
        'invalid_action_id' => null,
        'whisper' => null,
        'force_caller' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'account' => true,
        'name' => true,
        'next_action' => true,
        'next_action_id' => true,
        'notify' => true,
        'group_id' => true,
        'timeout' => false,
        'digit_timeout' => false,
        'finish_on_key' => false,
        'digits' => false,
        'retries' => false,
        'message' => false,
        'invalid_text' => false,
        'invalid_play' => false,
        'invalid_action' => false,
        'invalid_action_id' => false,
        'whisper' => false,
        'force_caller' => false
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
        'account' => 'account',
        'name' => 'name',
        'next_action' => 'nextAction',
        'next_action_id' => 'nextActionId',
        'notify' => 'notify',
        'group_id' => 'groupId',
        'timeout' => 'timeout',
        'digit_timeout' => 'digitTimeout',
        'finish_on_key' => 'finishOnKey',
        'digits' => 'digits',
        'retries' => 'retries',
        'message' => 'message',
        'invalid_text' => 'invalidText',
        'invalid_play' => 'invalidPlay',
        'invalid_action' => 'invalidAction',
        'invalid_action_id' => 'invalidActionId',
        'whisper' => 'whisper',
        'force_caller' => 'forceCaller'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account' => 'setAccount',
        'name' => 'setName',
        'next_action' => 'setNextAction',
        'next_action_id' => 'setNextActionId',
        'notify' => 'setNotify',
        'group_id' => 'setGroupId',
        'timeout' => 'setTimeout',
        'digit_timeout' => 'setDigitTimeout',
        'finish_on_key' => 'setFinishOnKey',
        'digits' => 'setDigits',
        'retries' => 'setRetries',
        'message' => 'setMessage',
        'invalid_text' => 'setInvalidText',
        'invalid_play' => 'setInvalidPlay',
        'invalid_action' => 'setInvalidAction',
        'invalid_action_id' => 'setInvalidActionId',
        'whisper' => 'setWhisper',
        'force_caller' => 'setForceCaller'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account' => 'getAccount',
        'name' => 'getName',
        'next_action' => 'getNextAction',
        'next_action_id' => 'getNextActionId',
        'notify' => 'getNotify',
        'group_id' => 'getGroupId',
        'timeout' => 'getTimeout',
        'digit_timeout' => 'getDigitTimeout',
        'finish_on_key' => 'getFinishOnKey',
        'digits' => 'getDigits',
        'retries' => 'getRetries',
        'message' => 'getMessage',
        'invalid_text' => 'getInvalidText',
        'invalid_play' => 'getInvalidPlay',
        'invalid_action' => 'getInvalidAction',
        'invalid_action_id' => 'getInvalidActionId',
        'whisper' => 'getWhisper',
        'force_caller' => 'getForceCaller'
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

    public const NEXT_ACTION_BRANCH = 'branch';
    public const NEXT_ACTION_HANGUP = 'hangup';
    public const NEXT_ACTION_IVR = 'ivr';
    public const NEXT_ACTION_LOCATIONS = 'locations';
    public const NEXT_ACTION_ROBIN = 'robin';
    public const NEXT_ACTION_TAG = 'tag';
    public const NEXT_ACTION_TIME = 'time';
    public const NEXT_ACTION_TRANSFER = 'transfer';
    public const NEXT_ACTION_VOICEMAIL = 'voicemail';
    public const NOTIFY_ALWAYS = 'always';
    public const NOTIFY_MISSED = 'missed';
    public const NOTIFY_NO = 'no';
    public const INVALID_ACTION_BRANCH = 'branch';
    public const INVALID_ACTION_HANGUP = 'hangup';
    public const INVALID_ACTION_IVR = 'ivr';
    public const INVALID_ACTION_LOCATIONS = 'locations';
    public const INVALID_ACTION_ROBIN = 'robin';
    public const INVALID_ACTION_TAG = 'tag';
    public const INVALID_ACTION_TIME = 'time';
    public const INVALID_ACTION_TRANSFER = 'transfer';
    public const INVALID_ACTION_VOICEMAIL = 'voicemail';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNextActionAllowableValues()
    {
        return [
            self::NEXT_ACTION_BRANCH,
            self::NEXT_ACTION_HANGUP,
            self::NEXT_ACTION_IVR,
            self::NEXT_ACTION_LOCATIONS,
            self::NEXT_ACTION_ROBIN,
            self::NEXT_ACTION_TAG,
            self::NEXT_ACTION_TIME,
            self::NEXT_ACTION_TRANSFER,
            self::NEXT_ACTION_VOICEMAIL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotifyAllowableValues()
    {
        return [
            self::NOTIFY_ALWAYS,
            self::NOTIFY_MISSED,
            self::NOTIFY_NO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvalidActionAllowableValues()
    {
        return [
            self::INVALID_ACTION_BRANCH,
            self::INVALID_ACTION_HANGUP,
            self::INVALID_ACTION_IVR,
            self::INVALID_ACTION_LOCATIONS,
            self::INVALID_ACTION_ROBIN,
            self::INVALID_ACTION_TAG,
            self::INVALID_ACTION_TIME,
            self::INVALID_ACTION_TRANSFER,
            self::INVALID_ACTION_VOICEMAIL,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('next_action', $data ?? [], null);
        $this->setIfExists('next_action_id', $data ?? [], null);
        $this->setIfExists('notify', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], 5);
        $this->setIfExists('digit_timeout', $data ?? [], 3);
        $this->setIfExists('finish_on_key', $data ?? [], '#');
        $this->setIfExists('digits', $data ?? [], 1);
        $this->setIfExists('retries', $data ?? [], 1);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('invalid_text', $data ?? [], '');
        $this->setIfExists('invalid_play', $data ?? [], null);
        $this->setIfExists('invalid_action', $data ?? [], 'hangup');
        $this->setIfExists('invalid_action_id', $data ?? [], 0);
        $this->setIfExists('whisper', $data ?? [], null);
        $this->setIfExists('force_caller', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getNextActionAllowableValues();
        if (!is_null($this->container['next_action']) && !in_array($this->container['next_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'next_action', must be one of '%s'",
                $this->container['next_action'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNotifyAllowableValues();
        if (!is_null($this->container['notify']) && !in_array($this->container['notify'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'notify', must be one of '%s'",
                $this->container['notify'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['finish_on_key']) && (mb_strlen($this->container['finish_on_key']) > 1)) {
            $invalidProperties[] = "invalid value for 'finish_on_key', the character length must be smaller than or equal to 1.";
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if (!is_null($this->container['invalid_text']) && (mb_strlen($this->container['invalid_text']) > 100)) {
            $invalidProperties[] = "invalid value for 'invalid_text', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['invalid_play']) && (mb_strlen($this->container['invalid_play']) > 100)) {
            $invalidProperties[] = "invalid value for 'invalid_play', the character length must be smaller than or equal to 100.";
        }

        $allowedValues = $this->getInvalidActionAllowableValues();
        if (!is_null($this->container['invalid_action']) && !in_array($this->container['invalid_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'invalid_action', must be one of '%s'",
                $this->container['invalid_action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['whisper']) && (mb_strlen($this->container['whisper']) > 100)) {
            $invalidProperties[] = "invalid value for 'whisper', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['force_caller']) && (mb_strlen($this->container['force_caller']) > 30)) {
            $invalidProperties[] = "invalid value for 'force_caller', the character length must be smaller than or equal to 30.";
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
     * Gets id
     *
     * @return mixed|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param mixed|null $id The action ID.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account
     *
     * @return mixed|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param mixed|null $account The account ID.
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            array_push($this->openAPINullablesSetToNull, 'account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets name
     *
     * @return mixed|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed|null $name Friendly name of the call flow action. Used to easily identify an action in the call flow.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ActionIVR., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets next_action
     *
     * @return mixed|null
     */
    public function getNextAction()
    {
        return $this->container['next_action'];
    }

    /**
     * Sets next_action
     *
     * @param mixed|null $next_action Next action type to route to in the call flow.
     *
     * @return self
     */
    public function setNextAction($next_action)
    {
        if (is_null($next_action)) {
            array_push($this->openAPINullablesSetToNull, 'next_action');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_action', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getNextActionAllowableValues();
        if (!is_null($next_action) && !in_array($next_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'next_action', must be one of '%s'",
                    $next_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['next_action'] = $next_action;

        return $this;
    }

    /**
     * Gets next_action_id
     *
     * @return mixed|null
     */
    public function getNextActionId()
    {
        return $this->container['next_action_id'];
    }

    /**
     * Sets next_action_id
     *
     * @param mixed|null $next_action_id Next action ID to route to in the call flow.
     *
     * @return self
     */
    public function setNextActionId($next_action_id)
    {
        if (is_null($next_action_id)) {
            array_push($this->openAPINullablesSetToNull, 'next_action_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_action_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_action_id'] = $next_action_id;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return mixed|null
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param mixed|null $notify When notifications are sent to email or SMS contacts:   * `always` - Notify for all call types (email only).   * `missed` - Notify for missed call types only.   * `no` - No not send call notifications by email or SMS. **Note**: Requires a voicemail action to be the next action in the call flow.
     *
     * @return self
     */
    public function setNotify($notify)
    {
        if (is_null($notify)) {
            array_push($this->openAPINullablesSetToNull, 'notify');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notify', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getNotifyAllowableValues();
        if (!is_null($notify) && !in_array($notify, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'notify', must be one of '%s'",
                    $notify,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notify'] = $notify;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return mixed|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param mixed|null $group_id The contact group ID the notifications will be sent to.
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        if (is_null($group_id)) {
            array_push($this->openAPINullablesSetToNull, 'group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return float|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param float|null $timeout The number of seconds, if no IVR selection is made, before it is sent to the next action.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets digit_timeout
     *
     * @return float|null
     */
    public function getDigitTimeout()
    {
        return $this->container['digit_timeout'];
    }

    /**
     * Sets digit_timeout
     *
     * @param float|null $digit_timeout The number of seconds to listen for a digit before sending the user to the next action.
     *
     * @return self
     */
    public function setDigitTimeout($digit_timeout)
    {
        if (is_null($digit_timeout)) {
            throw new \InvalidArgumentException('non-nullable digit_timeout cannot be null');
        }
        $this->container['digit_timeout'] = $digit_timeout;

        return $this;
    }

    /**
     * Gets finish_on_key
     *
     * @return string|null
     */
    public function getFinishOnKey()
    {
        return $this->container['finish_on_key'];
    }

    /**
     * Sets finish_on_key
     *
     * @param string|null $finish_on_key The digit which indicates the input is finished. Standard behaviour and default is to use the hash key (\"#\").
     *
     * @return self
     */
    public function setFinishOnKey($finish_on_key)
    {
        if (is_null($finish_on_key)) {
            throw new \InvalidArgumentException('non-nullable finish_on_key cannot be null');
        }
        if ((mb_strlen($finish_on_key) > 1)) {
            throw new \InvalidArgumentException('invalid length for $finish_on_key when calling ActionIVR., must be smaller than or equal to 1.');
        }

        $this->container['finish_on_key'] = $finish_on_key;

        return $this;
    }

    /**
     * Gets digits
     *
     * @return float|null
     */
    public function getDigits()
    {
        return $this->container['digits'];
    }

    /**
     * Sets digits
     *
     * @param float|null $digits The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey.
     *
     * @return self
     */
    public function setDigits($digits)
    {
        if (is_null($digits)) {
            throw new \InvalidArgumentException('non-nullable digits cannot be null');
        }
        $this->container['digits'] = $digits;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return float|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param float|null $retries The number of attempts allowed before the IVR message is replayed.
     *
     * @return self
     */
    public function setRetries($retries)
    {
        if (is_null($retries)) {
            throw new \InvalidArgumentException('non-nullable retries cannot be null');
        }
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets invalid_text
     *
     * @return string|null
     */
    public function getInvalidText()
    {
        return $this->container['invalid_text'];
    }

    /**
     * Sets invalid_text
     *
     * @param string|null $invalid_text The message to be read to the caller using Text-to-Speech (TTS) after an invalid input. Only populate if **not** using a recording MP3 in invalidPlay.
     *
     * @return self
     */
    public function setInvalidText($invalid_text)
    {
        if (is_null($invalid_text)) {
            throw new \InvalidArgumentException('non-nullable invalid_text cannot be null');
        }
        if ((mb_strlen($invalid_text) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invalid_text when calling ActionIVR., must be smaller than or equal to 100.');
        }

        $this->container['invalid_text'] = $invalid_text;

        return $this;
    }

    /**
     * Gets invalid_play
     *
     * @return string|null
     */
    public function getInvalidPlay()
    {
        return $this->container['invalid_play'];
    }

    /**
     * Sets invalid_play
     *
     * @param string|null $invalid_play The URI to an MP3 file to play after an invalid input. Only populate if **not** using TTS in invalidText.
     *
     * @return self
     */
    public function setInvalidPlay($invalid_play)
    {
        if (is_null($invalid_play)) {
            throw new \InvalidArgumentException('non-nullable invalid_play cannot be null');
        }
        if ((mb_strlen($invalid_play) > 100)) {
            throw new \InvalidArgumentException('invalid length for $invalid_play when calling ActionIVR., must be smaller than or equal to 100.');
        }

        $this->container['invalid_play'] = $invalid_play;

        return $this;
    }

    /**
     * Gets invalid_action
     *
     * @return string|null
     */
    public function getInvalidAction()
    {
        return $this->container['invalid_action'];
    }

    /**
     * Sets invalid_action
     *
     * @param string|null $invalid_action The action type to route to in the call flow if an invalid option is entered.
     *
     * @return self
     */
    public function setInvalidAction($invalid_action)
    {
        if (is_null($invalid_action)) {
            throw new \InvalidArgumentException('non-nullable invalid_action cannot be null');
        }
        $allowedValues = $this->getInvalidActionAllowableValues();
        if (!in_array($invalid_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'invalid_action', must be one of '%s'",
                    $invalid_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invalid_action'] = $invalid_action;

        return $this;
    }

    /**
     * Gets invalid_action_id
     *
     * @return float|null
     */
    public function getInvalidActionId()
    {
        return $this->container['invalid_action_id'];
    }

    /**
     * Sets invalid_action_id
     *
     * @param float|null $invalid_action_id The action ID to route to in the call flow if an invalid option is entered.
     *
     * @return self
     */
    public function setInvalidActionId($invalid_action_id)
    {
        if (is_null($invalid_action_id)) {
            throw new \InvalidArgumentException('non-nullable invalid_action_id cannot be null');
        }
        $this->container['invalid_action_id'] = $invalid_action_id;

        return $this;
    }

    /**
     * Gets whisper
     *
     * @return string|null
     */
    public function getWhisper()
    {
        return $this->container['whisper'];
    }

    /**
     * Sets whisper
     *
     * @param string|null $whisper The whisper message to be played to the answering party. Can be a Text to speech or URI to an MP3 file.
     *
     * @return self
     */
    public function setWhisper($whisper)
    {
        if (is_null($whisper)) {
            throw new \InvalidArgumentException('non-nullable whisper cannot be null');
        }
        if ((mb_strlen($whisper) > 100)) {
            throw new \InvalidArgumentException('invalid length for $whisper when calling ActionIVR., must be smaller than or equal to 100.');
        }

        $this->container['whisper'] = $whisper;

        return $this;
    }

    /**
     * Gets force_caller
     *
     * @return string|null
     */
    public function getForceCaller()
    {
        return $this->container['force_caller'];
    }

    /**
     * Sets force_caller
     *
     * @param string|null $force_caller The phone number to force as the caller ID when calling the target (must be a WildJar geo or mobile number).
     *
     * @return self
     */
    public function setForceCaller($force_caller)
    {
        if (is_null($force_caller)) {
            throw new \InvalidArgumentException('non-nullable force_caller cannot be null');
        }
        if ((mb_strlen($force_caller) > 30)) {
            throw new \InvalidArgumentException('invalid length for $force_caller when calling ActionIVR., must be smaller than or equal to 30.');
        }

        $this->container['force_caller'] = $force_caller;

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


