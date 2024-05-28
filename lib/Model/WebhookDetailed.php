<?php
/**
 * WebhookDetailed
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
 * WebhookDetailed Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookDetailed implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookDetailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'account' => 'float',
        'name' => 'string',
        'template' => 'string',
        'allow' => 'string',
        'apply' => 'string',
        'direction' => 'string',
        'push' => '\WildJar\ApiClient\Model\WebhookDetailedAllOfPush',
        'reply' => '\WildJar\ApiClient\Model\WebhookDetailedAllOfReply',
        'match' => '\WildJar\ApiClient\Model\WebhookDetailedAllOfMatch[]',
        'auth' => 'object',
        'o_auth' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'account' => null,
        'name' => null,
        'template' => null,
        'allow' => null,
        'apply' => null,
        'direction' => null,
        'push' => null,
        'reply' => null,
        'match' => null,
        'auth' => null,
        'o_auth' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => false,
        'account' => false,
        'name' => false,
        'template' => false,
        'allow' => false,
        'apply' => false,
        'direction' => false,
        'push' => false,
        'reply' => false,
        'match' => false,
        'auth' => true,
        'o_auth' => true
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
        'uuid' => 'uuid',
        'account' => 'account',
        'name' => 'name',
        'template' => 'template',
        'allow' => 'allow',
        'apply' => 'apply',
        'direction' => 'direction',
        'push' => 'push',
        'reply' => 'reply',
        'match' => 'match',
        'auth' => 'auth',
        'o_auth' => 'oAuth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'account' => 'setAccount',
        'name' => 'setName',
        'template' => 'setTemplate',
        'allow' => 'setAllow',
        'apply' => 'setApply',
        'direction' => 'setDirection',
        'push' => 'setPush',
        'reply' => 'setReply',
        'match' => 'setMatch',
        'auth' => 'setAuth',
        'o_auth' => 'setOAuth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'account' => 'getAccount',
        'name' => 'getName',
        'template' => 'getTemplate',
        'allow' => 'getAllow',
        'apply' => 'getApply',
        'direction' => 'getDirection',
        'push' => 'getPush',
        'reply' => 'getReply',
        'match' => 'getMatch',
        'auth' => 'getAuth',
        'o_auth' => 'getOAuth'
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

    public const ALLOW_STRICT = 'strict';
    public const ALLOW_ALL = 'all';
    public const ALLOW_ONLY_ACCOUNTS = 'only-accounts';
    public const APPLY_CALL = 'call';
    public const APPLY_SMS = 'sms';
    public const APPLY_ALL = 'all';
    public const DIRECTION_INBOUND = 'inbound';
    public const DIRECTION_OUTBOUND = 'outbound';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowAllowableValues()
    {
        return [
            self::ALLOW_STRICT,
            self::ALLOW_ALL,
            self::ALLOW_ONLY_ACCOUNTS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplyAllowableValues()
    {
        return [
            self::APPLY_CALL,
            self::APPLY_SMS,
            self::APPLY_ALL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
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
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('allow', $data ?? [], null);
        $this->setIfExists('apply', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('push', $data ?? [], null);
        $this->setIfExists('reply', $data ?? [], null);
        $this->setIfExists('match', $data ?? [], null);
        $this->setIfExists('auth', $data ?? [], null);
        $this->setIfExists('o_auth', $data ?? [], null);
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

        if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getAllowAllowableValues();
        if (!is_null($this->container['allow']) && !in_array($this->container['allow'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'allow', must be one of '%s'",
                $this->container['allow'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApplyAllowableValues();
        if (!is_null($this->container['apply']) && !in_array($this->container['apply'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'apply', must be one of '%s'",
                $this->container['apply'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
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
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid The webhook's UUID.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        if ((mb_strlen($uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling WebhookDetailed., must be smaller than or equal to 50.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets account
     *
     * @return float|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param float|null $account The account ID
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

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
     * @param string|null $name A descriptive name for the webhook.
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
     * Gets template
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string|null $template If using a predefined webhook template, the name of the template. If custom, `\"none\"`.
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets allow
     *
     * @return string|null
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     *
     * @param string|null $allow Allow this webhook to process communication to:   * `strict` - Only the configured account.   * `all` - The configured account and all child accounts.   * `only-accounts` - Only child accounts of the configured account.
     *
     * @return self
     */
    public function setAllow($allow)
    {
        if (is_null($allow)) {
            throw new \InvalidArgumentException('non-nullable allow cannot be null');
        }
        $allowedValues = $this->getAllowAllowableValues();
        if (!in_array($allow, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'allow', must be one of '%s'",
                    $allow,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow'] = $allow;

        return $this;
    }

    /**
     * Gets apply
     *
     * @return string|null
     */
    public function getApply()
    {
        return $this->container['apply'];
    }

    /**
     * Sets apply
     *
     * @param string|null $apply Apply the webhook to which communication types:   * `call` - Calls.   * `sms` - SMS messages.   * `all` - All communication types.
     *
     * @return self
     */
    public function setApply($apply)
    {
        if (is_null($apply)) {
            throw new \InvalidArgumentException('non-nullable apply cannot be null');
        }
        $allowedValues = $this->getApplyAllowableValues();
        if (!in_array($apply, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'apply', must be one of '%s'",
                    $apply,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apply'] = $apply;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction The direction of the interaction:   * `inbound`   * `outbound`
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            throw new \InvalidArgumentException('non-nullable direction cannot be null');
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets push
     *
     * @return \WildJar\ApiClient\Model\WebhookDetailedAllOfPush|null
     */
    public function getPush()
    {
        return $this->container['push'];
    }

    /**
     * Sets push
     *
     * @param \WildJar\ApiClient\Model\WebhookDetailedAllOfPush|null $push push
     *
     * @return self
     */
    public function setPush($push)
    {
        if (is_null($push)) {
            throw new \InvalidArgumentException('non-nullable push cannot be null');
        }
        $this->container['push'] = $push;

        return $this;
    }

    /**
     * Gets reply
     *
     * @return \WildJar\ApiClient\Model\WebhookDetailedAllOfReply|null
     */
    public function getReply()
    {
        return $this->container['reply'];
    }

    /**
     * Sets reply
     *
     * @param \WildJar\ApiClient\Model\WebhookDetailedAllOfReply|null $reply reply
     *
     * @return self
     */
    public function setReply($reply)
    {
        if (is_null($reply)) {
            throw new \InvalidArgumentException('non-nullable reply cannot be null');
        }
        $this->container['reply'] = $reply;

        return $this;
    }

    /**
     * Gets match
     *
     * @return \WildJar\ApiClient\Model\WebhookDetailedAllOfMatch[]|null
     */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
     * Sets match
     *
     * @param \WildJar\ApiClient\Model\WebhookDetailedAllOfMatch[]|null $match An array of objects which must match for this webhook to fire.
     *
     * @return self
     */
    public function setMatch($match)
    {
        if (is_null($match)) {
            throw new \InvalidArgumentException('non-nullable match cannot be null');
        }
        $this->container['match'] = $match;

        return $this;
    }

    /**
     * Gets auth
     *
     * @return object|null
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     *
     * @param object|null $auth auth
     *
     * @return self
     */
    public function setAuth($auth)
    {
        if (is_null($auth)) {
            array_push($this->openAPINullablesSetToNull, 'auth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets o_auth
     *
     * @return object|null
     */
    public function getOAuth()
    {
        return $this->container['o_auth'];
    }

    /**
     * Sets o_auth
     *
     * @param object|null $o_auth o_auth
     *
     * @return self
     */
    public function setOAuth($o_auth)
    {
        if (is_null($o_auth)) {
            array_push($this->openAPINullablesSetToNull, 'o_auth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('o_auth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['o_auth'] = $o_auth;

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


