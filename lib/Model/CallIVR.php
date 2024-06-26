<?php
/**
 * CallIVR
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
 * CallIVR Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class CallIVR implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Call_IVR';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'option' => 'string',
        'action' => 'string',
        'action_id' => 'string',
        'name' => 'string',
        'branch_code' => 'string',
        'branch_name' => 'string',
        'remote_code' => 'string',
        'history' => 'string'
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
        'option' => null,
        'action' => null,
        'action_id' => null,
        'name' => null,
        'branch_code' => null,
        'branch_name' => null,
        'remote_code' => null,
        'history' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'option' => false,
        'action' => false,
        'action_id' => false,
        'name' => false,
        'branch_code' => false,
        'branch_name' => false,
        'remote_code' => true,
        'history' => false
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
        'option' => 'option',
        'action' => 'action',
        'action_id' => 'actionId',
        'name' => 'name',
        'branch_code' => 'branchCode',
        'branch_name' => 'branchName',
        'remote_code' => 'remoteCode',
        'history' => 'history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'option' => 'setOption',
        'action' => 'setAction',
        'action_id' => 'setActionId',
        'name' => 'setName',
        'branch_code' => 'setBranchCode',
        'branch_name' => 'setBranchName',
        'remote_code' => 'setRemoteCode',
        'history' => 'setHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'option' => 'getOption',
        'action' => 'getAction',
        'action_id' => 'getActionId',
        'name' => 'getName',
        'branch_code' => 'getBranchCode',
        'branch_name' => 'getBranchName',
        'remote_code' => 'getRemoteCode',
        'history' => 'getHistory'
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
        $this->setIfExists('option', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('action_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('branch_code', $data ?? [], null);
        $this->setIfExists('branch_name', $data ?? [], null);
        $this->setIfExists('remote_code', $data ?? [], null);
        $this->setIfExists('history', $data ?? [], null);
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
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id The ID of the IVR option.
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
     * @param string|null $option The IVR digit the caller entered and was routed to.
     *
     * @return self
     */
    public function setOption($option)
    {
        if (is_null($option)) {
            throw new \InvalidArgumentException('non-nullable option cannot be null');
        }
        $this->container['option'] = $option;

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
     * @param string|null $action Call flow action type this number routes to
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
     * @return string|null
     */
    public function getActionId()
    {
        return $this->container['action_id'];
    }

    /**
     * Sets action_id
     *
     * @param string|null $action_id Action ID of the call flow action
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The IVR option name the caller was routed to.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string|null
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string|null $branch_code **Location routing only**: The branch code the call was answered at.
     *
     * @return self
     */
    public function setBranchCode($branch_code)
    {
        if (is_null($branch_code)) {
            throw new \InvalidArgumentException('non-nullable branch_code cannot be null');
        }
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets branch_name
     *
     * @return string|null
     */
    public function getBranchName()
    {
        return $this->container['branch_name'];
    }

    /**
     * Sets branch_name
     *
     * @param string|null $branch_name **Location routing only**: The branch name the call was answered at.
     *
     * @return self
     */
    public function setBranchName($branch_name)
    {
        if (is_null($branch_name)) {
            throw new \InvalidArgumentException('non-nullable branch_name cannot be null');
        }
        $this->container['branch_name'] = $branch_name;

        return $this;
    }

    /**
     * Gets remote_code
     *
     * @return string|null
     */
    public function getRemoteCode()
    {
        return $this->container['remote_code'];
    }

    /**
     * Sets remote_code
     *
     * @param string|null $remote_code An optional option code used for integrations into a 3rd party platform.
     *
     * @return self
     */
    public function setRemoteCode($remote_code)
    {
        if (is_null($remote_code)) {
            array_push($this->openAPINullablesSetToNull, 'remote_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remote_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remote_code'] = $remote_code;

        return $this;
    }

    /**
     * Gets history
     *
     * @return string|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param string|null $history The full history of all IVR digits pressed on the call, including multiple IVR menu levels.
     *
     * @return self
     */
    public function setHistory($history)
    {
        if (is_null($history)) {
            throw new \InvalidArgumentException('non-nullable history cannot be null');
        }
        $this->container['history'] = $history;

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


