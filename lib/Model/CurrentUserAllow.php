<?php
/**
 * CurrentUserAllow
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
 * CurrentUserAllow Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class CurrentUserAllow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrentUser_allow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reports' => 'bool',
        'conf' => 'string',
        'users' => 'string',
        'billing' => 'string',
        'admin' => 'string',
        'super' => 'string',
        'support' => 'string',
        'system' => 'string',
        'director' => 'string',
        'chat_bot' => 'string',
        'dev_feature' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reports' => null,
        'conf' => null,
        'users' => null,
        'billing' => null,
        'admin' => null,
        'super' => null,
        'support' => null,
        'system' => null,
        'director' => null,
        'chat_bot' => null,
        'dev_feature' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reports' => false,
        'conf' => false,
        'users' => false,
        'billing' => false,
        'admin' => false,
        'super' => false,
        'support' => false,
        'system' => false,
        'director' => false,
        'chat_bot' => false,
        'dev_feature' => false
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
        'reports' => 'reports',
        'conf' => 'conf',
        'users' => 'users',
        'billing' => 'billing',
        'admin' => 'admin',
        'super' => 'super',
        'support' => 'support',
        'system' => 'system',
        'director' => 'director',
        'chat_bot' => 'chatBot',
        'dev_feature' => 'devFeature'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reports' => 'setReports',
        'conf' => 'setConf',
        'users' => 'setUsers',
        'billing' => 'setBilling',
        'admin' => 'setAdmin',
        'super' => 'setSuper',
        'support' => 'setSupport',
        'system' => 'setSystem',
        'director' => 'setDirector',
        'chat_bot' => 'setChatBot',
        'dev_feature' => 'setDevFeature'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reports' => 'getReports',
        'conf' => 'getConf',
        'users' => 'getUsers',
        'billing' => 'getBilling',
        'admin' => 'getAdmin',
        'super' => 'getSuper',
        'support' => 'getSupport',
        'system' => 'getSystem',
        'director' => 'getDirector',
        'chat_bot' => 'getChatBot',
        'dev_feature' => 'getDevFeature'
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
        $this->setIfExists('reports', $data ?? [], null);
        $this->setIfExists('conf', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('billing', $data ?? [], null);
        $this->setIfExists('admin', $data ?? [], null);
        $this->setIfExists('super', $data ?? [], null);
        $this->setIfExists('support', $data ?? [], null);
        $this->setIfExists('system', $data ?? [], null);
        $this->setIfExists('director', $data ?? [], null);
        $this->setIfExists('chat_bot', $data ?? [], null);
        $this->setIfExists('dev_feature', $data ?? [], null);
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
     * Gets reports
     *
     * @return bool|null
     */
    public function getReports()
    {
        return $this->container['reports'];
    }

    /**
     * Sets reports
     *
     * @param bool|null $reports Access to reporting.
     *
     * @return self
     */
    public function setReports($reports)
    {
        if (is_null($reports)) {
            throw new \InvalidArgumentException('non-nullable reports cannot be null');
        }
        $this->container['reports'] = $reports;

        return $this;
    }

    /**
     * Gets conf
     *
     * @return string|null
     */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
     * Sets conf
     *
     * @param string|null $conf Access to configuration.
     *
     * @return self
     */
    public function setConf($conf)
    {
        if (is_null($conf)) {
            throw new \InvalidArgumentException('non-nullable conf cannot be null');
        }
        $this->container['conf'] = $conf;

        return $this;
    }

    /**
     * Gets users
     *
     * @return string|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param string|null $users Access to add users.
     *
     * @return self
     */
    public function setUsers($users)
    {
        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return string|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param string|null $billing Access billing.
     *
     * @return self
     */
    public function setBilling($billing)
    {
        if (is_null($billing)) {
            throw new \InvalidArgumentException('non-nullable billing cannot be null');
        }
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return string|null
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param string|null $admin Access to administer the whole account.
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        if (is_null($admin)) {
            throw new \InvalidArgumentException('non-nullable admin cannot be null');
        }
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets super
     *
     * @return string|null
     */
    public function getSuper()
    {
        return $this->container['super'];
    }

    /**
     * Sets super
     *
     * @param string|null $super Access to prospects and biller codes.
     *
     * @return self
     */
    public function setSuper($super)
    {
        if (is_null($super)) {
            throw new \InvalidArgumentException('non-nullable super cannot be null');
        }
        $this->container['super'] = $super;

        return $this;
    }

    /**
     * Gets support
     *
     * @return string|null
     */
    public function getSupport()
    {
        return $this->container['support'];
    }

    /**
     * Sets support
     *
     * @param string|null $support Support level access.
     *
     * @return self
     */
    public function setSupport($support)
    {
        if (is_null($support)) {
            throw new \InvalidArgumentException('non-nullable support cannot be null');
        }
        $this->container['support'] = $support;

        return $this;
    }

    /**
     * Gets system
     *
     * @return string|null
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param string|null $system WildJar system admin access.
     *
     * @return self
     */
    public function setSystem($system)
    {
        if (is_null($system)) {
            throw new \InvalidArgumentException('non-nullable system cannot be null');
        }
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets director
     *
     * @return string|null
     */
    public function getDirector()
    {
        return $this->container['director'];
    }

    /**
     * Sets director
     *
     * @param string|null $director WildJar director access.
     *
     * @return self
     */
    public function setDirector($director)
    {
        if (is_null($director)) {
            throw new \InvalidArgumentException('non-nullable director cannot be null');
        }
        $this->container['director'] = $director;

        return $this;
    }

    /**
     * Gets chat_bot
     *
     * @return string|null
     */
    public function getChatBot()
    {
        return $this->container['chat_bot'];
    }

    /**
     * Sets chat_bot
     *
     * @param string|null $chat_bot Access to create and manage chatbots.
     *
     * @return self
     */
    public function setChatBot($chat_bot)
    {
        if (is_null($chat_bot)) {
            throw new \InvalidArgumentException('non-nullable chat_bot cannot be null');
        }
        $this->container['chat_bot'] = $chat_bot;

        return $this;
    }

    /**
     * Gets dev_feature
     *
     * @return string|null
     */
    public function getDevFeature()
    {
        return $this->container['dev_feature'];
    }

    /**
     * Sets dev_feature
     *
     * @param string|null $dev_feature Access to features in development.
     *
     * @return self
     */
    public function setDevFeature($dev_feature)
    {
        if (is_null($dev_feature)) {
            throw new \InvalidArgumentException('non-nullable dev_feature cannot be null');
        }
        $this->container['dev_feature'] = $dev_feature;

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


