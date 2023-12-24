<?php
/**
 * ActionTimeFullAllOfTimesInner
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
 * ActionTimeFullAllOfTimesInner Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class ActionTimeFullAllOfTimesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionTimeFull_allOf_times_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'priority' => 'float',
        'option' => 'string',
        'from_time' => 'string',
        'to_time' => 'string',
        'action' => 'string',
        'action_id' => 'float'
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
        'priority' => null,
        'option' => null,
        'from_time' => null,
        'to_time' => null,
        'action' => null,
        'action_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'priority' => false,
        'option' => false,
        'from_time' => false,
        'to_time' => false,
        'action' => false,
        'action_id' => false
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
        'priority' => 'priority',
        'option' => 'option',
        'from_time' => 'fromTime',
        'to_time' => 'toTime',
        'action' => 'action',
        'action_id' => 'actionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'priority' => 'setPriority',
        'option' => 'setOption',
        'from_time' => 'setFromTime',
        'to_time' => 'setToTime',
        'action' => 'setAction',
        'action_id' => 'setActionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'priority' => 'getPriority',
        'option' => 'getOption',
        'from_time' => 'getFromTime',
        'to_time' => 'getToTime',
        'action' => 'getAction',
        'action_id' => 'getActionId'
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

    public const OPTION_STAR = '*';
    public const OPTION__00 = '00';
    public const OPTION_MON = 'Mon';
    public const OPTION_TUE = 'Tue';
    public const OPTION_WED = 'Wed';
    public const OPTION_THU = 'Thu';
    public const OPTION_FRI = 'Fri';
    public const OPTION_SAT = 'Sat';
    public const OPTION_SUN = 'Sun';
    public const ACTION_BRANCH = 'branch';
    public const ACTION_HANGUP = 'hangup';
    public const ACTION_IVR = 'ivr';
    public const ACTION_LOCATIONS = 'locations';
    public const ACTION_ROBIN = 'robin';
    public const ACTION_TAG = 'tag';
    public const ACTION_TIME = 'time';
    public const ACTION_TRANSFER = 'transfer';
    public const ACTION_VOICEMAIL = 'voicemail';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionAllowableValues()
    {
        return [
            self::OPTION_STAR,
            self::OPTION__00,
            self::OPTION_MON,
            self::OPTION_TUE,
            self::OPTION_WED,
            self::OPTION_THU,
            self::OPTION_FRI,
            self::OPTION_SAT,
            self::OPTION_SUN,
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
            self::ACTION_BRANCH,
            self::ACTION_HANGUP,
            self::ACTION_IVR,
            self::ACTION_LOCATIONS,
            self::ACTION_ROBIN,
            self::ACTION_TAG,
            self::ACTION_TIME,
            self::ACTION_TRANSFER,
            self::ACTION_VOICEMAIL,
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
        $this->setIfExists('priority', $data ?? [], 0);
        $this->setIfExists('option', $data ?? [], null);
        $this->setIfExists('from_time', $data ?? [], null);
        $this->setIfExists('to_time', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('action_id', $data ?? [], null);
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

        if ($this->container['option'] === null) {
            $invalidProperties[] = "'option' can't be null";
        }
        $allowedValues = $this->getOptionAllowableValues();
        if (!is_null($this->container['option']) && !in_array($this->container['option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option', must be one of '%s'",
                $this->container['option'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['option']) > 20)) {
            $invalidProperties[] = "invalid value for 'option', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['from_time'] === null) {
            $invalidProperties[] = "'from_time' can't be null";
        }
        if ((mb_strlen($this->container['from_time']) > 5)) {
            $invalidProperties[] = "invalid value for 'from_time', the character length must be smaller than or equal to 5.";
        }

        if ($this->container['to_time'] === null) {
            $invalidProperties[] = "'to_time' can't be null";
        }
        if ((mb_strlen($this->container['to_time']) > 5)) {
            $invalidProperties[] = "invalid value for 'to_time', the character length must be smaller than or equal to 5.";
        }

        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['action_id'] === null) {
            $invalidProperties[] = "'action_id' can't be null";
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
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id The ID number for the time switch rule.
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
     * Gets priority
     *
     * @return float|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float|null $priority The priority this rule will have if it overlaps with another rule. 0 indicates the lowest priority.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string $option The day(s) that this time switch rule will be applied. Only one option can be applied per rule. Multiple rules can be used when different routing is needed on non-consecutive days (ie. Monday, Wednesday, Friday).   * `*` - Everyday   * `00` - Monday to Friday   * `Mon` - Monday only   * `Tue` - Tuesday only   * `Wed` - Wednesday only   * `Thu` - Thursday only   * `Fri` - Friday only   * `Sat` - Saturday only   * `Sun` - Sunday only
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
        if ((mb_strlen($option) > 20)) {
            throw new \InvalidArgumentException('invalid length for $option when calling ActionTimeFullAllOfTimesInner., must be smaller than or equal to 20.');
        }

        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets from_time
     *
     * @return string
     */
    public function getFromTime()
    {
        return $this->container['from_time'];
    }

    /**
     * Sets from_time
     *
     * @param string $from_time The time the time switch rule will be appled from, use 24 hour (HHMM) format.
     *
     * @return self
     */
    public function setFromTime($from_time)
    {
        if (is_null($from_time)) {
            throw new \InvalidArgumentException('non-nullable from_time cannot be null');
        }
        if ((mb_strlen($from_time) > 5)) {
            throw new \InvalidArgumentException('invalid length for $from_time when calling ActionTimeFullAllOfTimesInner., must be smaller than or equal to 5.');
        }

        $this->container['from_time'] = $from_time;

        return $this;
    }

    /**
     * Gets to_time
     *
     * @return string
     */
    public function getToTime()
    {
        return $this->container['to_time'];
    }

    /**
     * Sets to_time
     *
     * @param string $to_time The time the time switch rule will be appled until, use 24 hour (HHMM) format.
     *
     * @return self
     */
    public function setToTime($to_time)
    {
        if (is_null($to_time)) {
            throw new \InvalidArgumentException('non-nullable to_time cannot be null');
        }
        if ((mb_strlen($to_time) > 5)) {
            throw new \InvalidArgumentException('invalid length for $to_time when calling ActionTimeFullAllOfTimesInner., must be smaller than or equal to 5.');
        }

        $this->container['to_time'] = $to_time;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action The action type to route to in the call flow for this menu option.
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
     * Gets action_id
     *
     * @return float
     */
    public function getActionId()
    {
        return $this->container['action_id'];
    }

    /**
     * Sets action_id
     *
     * @param float $action_id The action ID to route to in the call flow for this menu option.
     *
     * @return self
     */
    public function setActionId($action_id)
    {
        if (is_null($action_id)) {
            throw new \InvalidArgumentException('non-nullable action_id cannot be null');
        }
        $this->container['action_id'] = $action_id;

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


