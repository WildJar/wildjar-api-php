<?php
/**
 * UserFull
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
 * UserFull Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class UserFull implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserFull';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'username' => 'string',
        'status' => 'string',
        'level' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'account' => 'float',
        'mobile' => 'string',
        'sip' => 'string',
        'allow' => 'mixed[]',
        'portal' => 'string',
        'id' => 'string',
        'block' => 'string',
        'timezone' => 'string',
        'acl' => 'string[]',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'username' => null,
        'status' => null,
        'level' => null,
        'first_name' => null,
        'last_name' => null,
        'account' => null,
        'mobile' => null,
        'sip' => null,
        'allow' => null,
        'portal' => 'uri',
        'id' => null,
        'block' => null,
        'timezone' => null,
        'acl' => null,
        'key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
        'username' => false,
        'status' => false,
        'level' => false,
        'first_name' => false,
        'last_name' => false,
        'account' => false,
        'mobile' => false,
        'sip' => false,
        'allow' => false,
        'portal' => false,
        'id' => true,
        'block' => false,
        'timezone' => false,
        'acl' => false,
        'key' => true
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
        'email' => 'email',
        'username' => 'username',
        'status' => 'status',
        'level' => 'level',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'account' => 'account',
        'mobile' => 'mobile',
        'sip' => 'sip',
        'allow' => 'allow',
        'portal' => 'portal',
        'id' => 'id',
        'block' => 'block',
        'timezone' => 'timezone',
        'acl' => 'acl',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'username' => 'setUsername',
        'status' => 'setStatus',
        'level' => 'setLevel',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'account' => 'setAccount',
        'mobile' => 'setMobile',
        'sip' => 'setSip',
        'allow' => 'setAllow',
        'portal' => 'setPortal',
        'id' => 'setId',
        'block' => 'setBlock',
        'timezone' => 'setTimezone',
        'acl' => 'setAcl',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'username' => 'getUsername',
        'status' => 'getStatus',
        'level' => 'getLevel',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'account' => 'getAccount',
        'mobile' => 'getMobile',
        'sip' => 'getSip',
        'allow' => 'getAllow',
        'portal' => 'getPortal',
        'id' => 'getId',
        'block' => 'getBlock',
        'timezone' => 'getTimezone',
        'acl' => 'getAcl',
        'key' => 'getKey'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INVITED = 'invited';
    public const STATUS_SUSPENDED = 'suspended';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INVITED,
            self::STATUS_SUSPENDED,
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('sip', $data ?? [], null);
        $this->setIfExists('allow', $data ?? [], null);
        $this->setIfExists('portal', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('acl', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
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

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['allow'] === null) {
            $invalidProperties[] = "'allow' can't be null";
        }
        if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 50)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 50.";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address of the user.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     * @deprecated
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username The username of the user.
     *
     * @return self
     * @deprecated
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the user:  * `active` - The user is active  * `invited` - The user has been invited but has not yet accepted the invite.  * `suspended` - The user has been suspended. Suspended users can be reactivated.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string|null $level The access level granted to the user.
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

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
     * @param string|null $first_name The first name of the contact.
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
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name of the contact.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets account
     *
     * @return float
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param float $account The account ID.
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
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile The user's mobile number in E164 format including a leading plus (+).
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        if (is_null($mobile)) {
            throw new \InvalidArgumentException('non-nullable mobile cannot be null');
        }
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets sip
     *
     * @return string|null
     */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
     * Sets sip
     *
     * @param string|null $sip The sip extension allocated to the user for use of the web phone, if enabled.
     *
     * @return self
     */
    public function setSip($sip)
    {
        if (is_null($sip)) {
            throw new \InvalidArgumentException('non-nullable sip cannot be null');
        }
        $this->container['sip'] = $sip;

        return $this;
    }

    /**
     * Gets allow
     *
     * @return mixed[]
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     *
     * @param mixed[] $allow The funcions the user is allowed to access:   * `reports` - This gives the user access to only view the dashboards and data without being able to add more phone numbers and change settings.   * `conf` - Access to change number configuration settings and order numbers.   * `users` - Access to add users to the account and create accounts.   * `admin` - Full administrative access to the account.   * `billing` - Access to view monthly summary, invoices and payments.   * `super` - Access to whitelabel billing, prospects, biller codes and sub-invoicing.
     *
     * @return self
     */
    public function setAllow($allow)
    {
        if (is_null($allow)) {
            throw new \InvalidArgumentException('non-nullable allow cannot be null');
        }
        $this->container['allow'] = $allow;

        return $this;
    }

    /**
     * Gets portal
     *
     * @return string|null
     */
    public function getPortal()
    {
        return $this->container['portal'];
    }

    /**
     * Sets portal
     *
     * @param string|null $portal The URI of the whitelabel portal the invite applies to. If not specified, the whitelabel template of the top level account is applied, if configured. If no whitelabel template is configured, the WildJar branding will be used.
     *
     * @return self
     */
    public function setPortal($portal)
    {
        if (is_null($portal)) {
            throw new \InvalidArgumentException('non-nullable portal cannot be null');
        }
        $this->container['portal'] = $portal;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID of the user.
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
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block INTERNAL. The billing block that the user belongs to.
     *
     * @return self
     */
    public function setBlock($block)
    {
        if (is_null($block)) {
            throw new \InvalidArgumentException('non-nullable block cannot be null');
        }
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Local timezone of the user.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        if ((mb_strlen($timezone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling UserFull., must be smaller than or equal to 50.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets acl
     *
     * @return string[]|null
     */
    public function getAcl()
    {
        return $this->container['acl'];
    }

    /**
     * Sets acl
     *
     * @param string[]|null $acl Additional accounts, outside the user's account hierarchy, that the user is allowed to access.
     *
     * @return self
     */
    public function setAcl($acl)
    {
        if (is_null($acl)) {
            throw new \InvalidArgumentException('non-nullable acl cannot be null');
        }
        $this->container['acl'] = $acl;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key The user's invite code. Only used on users in \"invited\" status, otherwise null.
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            array_push($this->openAPINullablesSetToNull, 'key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['key'] = $key;

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


