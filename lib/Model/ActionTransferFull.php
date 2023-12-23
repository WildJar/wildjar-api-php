<?php
/**
 * ActionTransferFull
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Wildjar
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

namespace Wildjar\Model;

use \ArrayAccess;
use \Wildjar\ObjectSerializer;

/**
 * ActionTransferFull Class Doc Comment
 *
 * @category Class
 * @package  Wildjar
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class ActionTransferFull implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionTransferFull';

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
        'target' => 'mixed',
        'timeout' => 'mixed',
        'record' => 'mixed',
        'recording' => 'mixed',
        'whisper' => 'mixed',
        'force_caller' => 'mixed',
        'notify' => 'mixed',
        'group_id' => 'mixed',
        'action' => 'string'
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
        'target' => null,
        'timeout' => null,
        'record' => null,
        'recording' => null,
        'whisper' => null,
        'force_caller' => null,
        'notify' => null,
        'group_id' => null,
        'action' => null
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
        'target' => true,
        'timeout' => true,
        'record' => true,
        'recording' => true,
        'whisper' => true,
        'force_caller' => true,
        'notify' => true,
        'group_id' => true,
        'action' => false
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
        'target' => 'target',
        'timeout' => 'timeout',
        'record' => 'record',
        'recording' => 'recording',
        'whisper' => 'whisper',
        'force_caller' => 'forceCaller',
        'notify' => 'notify',
        'group_id' => 'groupId',
        'action' => 'action'
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
        'target' => 'setTarget',
        'timeout' => 'setTimeout',
        'record' => 'setRecord',
        'recording' => 'setRecording',
        'whisper' => 'setWhisper',
        'force_caller' => 'setForceCaller',
        'notify' => 'setNotify',
        'group_id' => 'setGroupId',
        'action' => 'setAction'
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
        'target' => 'getTarget',
        'timeout' => 'getTimeout',
        'record' => 'getRecord',
        'recording' => 'getRecording',
        'whisper' => 'getWhisper',
        'force_caller' => 'getForceCaller',
        'notify' => 'getNotify',
        'group_id' => 'getGroupId',
        'action' => 'getAction'
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
    public const RECORD_YES = 'yes';
    public const RECORD_NO = 'no';
    public const NOTIFY_ALWAYS = 'always';
    public const NOTIFY_MISSED = 'missed';
    public const NOTIFY_NO = 'no';
    public const ACTION_TRANSFER = 'transfer';

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
    public function getRecordAllowableValues()
    {
        return [
            self::RECORD_YES,
            self::RECORD_NO,
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
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_TRANSFER,
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
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
        $this->setIfExists('record', $data ?? [], null);
        $this->setIfExists('recording', $data ?? [], null);
        $this->setIfExists('whisper', $data ?? [], null);
        $this->setIfExists('force_caller', $data ?? [], null);
        $this->setIfExists('notify', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
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

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ((mb_strlen($this->container['target']) > 30)) {
            $invalidProperties[] = "invalid value for 'target', the character length must be smaller than or equal to 30.";
        }

        $allowedValues = $this->getRecordAllowableValues();
        if (!is_null($this->container['record']) && !in_array($this->container['record'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'record', must be one of '%s'",
                $this->container['record'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['recording']) && (mb_strlen($this->container['recording']) > 100)) {
            $invalidProperties[] = "invalid value for 'recording', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['whisper']) && (mb_strlen($this->container['whisper']) > 100)) {
            $invalidProperties[] = "invalid value for 'whisper', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['force_caller']) && (mb_strlen($this->container['force_caller']) > 30)) {
            $invalidProperties[] = "invalid value for 'force_caller', the character length must be smaller than or equal to 30.";
        }

        $allowedValues = $this->getNotifyAllowableValues();
        if (!is_null($this->container['notify']) && !in_array($this->container['notify'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'notify', must be one of '%s'",
                $this->container['notify'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling ActionTransferFull., must be smaller than or equal to 100.');
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
     * Gets target
     *
     * @return mixed
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param mixed $target The phone number to route the call to in E164 format.
     *
     * @return self
     */
    public function setTarget($target)
    {
        if (is_null($target)) {
            array_push($this->openAPINullablesSetToNull, 'target');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($target) && (mb_strlen($target) > 30)) {
            throw new \InvalidArgumentException('invalid length for $target when calling ActionTransferFull., must be smaller than or equal to 30.');
        }

        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return mixed|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param mixed|null $timeout The number of seconds, if a call is not answered, before it is sent to the next action. If the value is 0, a platform wide error-prevention rule of 25 seconds will be applied to the transfer.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            array_push($this->openAPINullablesSetToNull, 'timeout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timeout', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets record
     *
     * @return mixed|null
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param mixed|null $record Whether the call will be recorded or not.
     *
     * @return self
     */
    public function setRecord($record)
    {
        if (is_null($record)) {
            array_push($this->openAPINullablesSetToNull, 'record');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('record', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRecordAllowableValues();
        if (!is_null($record) && !in_array($record, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'record', must be one of '%s'",
                    $record,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets recording
     *
     * @return mixed|null
     */
    public function getRecording()
    {
        return $this->container['recording'];
    }

    /**
     * Sets recording
     *
     * @param mixed|null $recording The call recording preamble to be played on recorded calls. Can be a Text to speech or URI to an MP3 file.
     *
     * @return self
     */
    public function setRecording($recording)
    {
        if (is_null($recording)) {
            array_push($this->openAPINullablesSetToNull, 'recording');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recording', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($recording) && (mb_strlen($recording) > 100)) {
            throw new \InvalidArgumentException('invalid length for $recording when calling ActionTransferFull., must be smaller than or equal to 100.');
        }

        $this->container['recording'] = $recording;

        return $this;
    }

    /**
     * Gets whisper
     *
     * @return mixed|null
     */
    public function getWhisper()
    {
        return $this->container['whisper'];
    }

    /**
     * Sets whisper
     *
     * @param mixed|null $whisper The whisper message to be played to the answering party. Can be a Text to speech or URI to an MP3 file.
     *
     * @return self
     */
    public function setWhisper($whisper)
    {
        if (is_null($whisper)) {
            array_push($this->openAPINullablesSetToNull, 'whisper');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('whisper', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($whisper) && (mb_strlen($whisper) > 100)) {
            throw new \InvalidArgumentException('invalid length for $whisper when calling ActionTransferFull., must be smaller than or equal to 100.');
        }

        $this->container['whisper'] = $whisper;

        return $this;
    }

    /**
     * Gets force_caller
     *
     * @return mixed|null
     */
    public function getForceCaller()
    {
        return $this->container['force_caller'];
    }

    /**
     * Sets force_caller
     *
     * @param mixed|null $force_caller The phone number to force as the caller ID when calling the target (must be a WildJar geo or mobile number).
     *
     * @return self
     */
    public function setForceCaller($force_caller)
    {
        if (is_null($force_caller)) {
            array_push($this->openAPINullablesSetToNull, 'force_caller');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('force_caller', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($force_caller) && (mb_strlen($force_caller) > 30)) {
            throw new \InvalidArgumentException('invalid length for $force_caller when calling ActionTransferFull., must be smaller than or equal to 30.');
        }

        $this->container['force_caller'] = $force_caller;

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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action The action type.
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

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


