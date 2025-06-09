<?php
/**
 * CurrentUser
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
 * CurrentUser Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class CurrentUser implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrentUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'username' => 'string',
        'email' => 'string',
        'mobile' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'account' => 'float',
        'tz' => 'string',
        'country' => 'string',
        'dash' => '\WildJar\ApiClient\Model\CurrentUserDash',
        'allow' => '\WildJar\ApiClient\Model\CurrentUserAllow',
        'sip' => '\WildJar\ApiClient\Model\CurrentUserSip',
        'sercret2_fa' => '\WildJar\ApiClient\Model\CurrentUserSercret2FA',
        'preferences' => 'object',
        'timestamp' => 'string',
        'md5' => 'string'
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
        'email' => 'email',
        'mobile' => null,
        'first_name' => null,
        'last_name' => null,
        'account' => null,
        'tz' => null,
        'country' => null,
        'dash' => null,
        'allow' => null,
        'sip' => null,
        'sercret2_fa' => null,
        'preferences' => null,
        'timestamp' => 'time',
        'md5' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'username' => false,
        'email' => false,
        'mobile' => false,
        'first_name' => false,
        'last_name' => false,
        'account' => false,
        'tz' => false,
        'country' => false,
        'dash' => false,
        'allow' => false,
        'sip' => false,
        'sercret2_fa' => false,
        'preferences' => false,
        'timestamp' => false,
        'md5' => true
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
        'email' => 'email',
        'mobile' => 'mobile',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'account' => 'account',
        'tz' => 'tz',
        'country' => 'country',
        'dash' => 'dash',
        'allow' => 'allow',
        'sip' => 'sip',
        'sercret2_fa' => 'sercret2FA',
        'preferences' => 'preferences',
        'timestamp' => 'timestamp',
        'md5' => 'md5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'email' => 'setEmail',
        'mobile' => 'setMobile',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'account' => 'setAccount',
        'tz' => 'setTz',
        'country' => 'setCountry',
        'dash' => 'setDash',
        'allow' => 'setAllow',
        'sip' => 'setSip',
        'sercret2_fa' => 'setSercret2Fa',
        'preferences' => 'setPreferences',
        'timestamp' => 'setTimestamp',
        'md5' => 'setMd5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'email' => 'getEmail',
        'mobile' => 'getMobile',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'account' => 'getAccount',
        'tz' => 'getTz',
        'country' => 'getCountry',
        'dash' => 'getDash',
        'allow' => 'getAllow',
        'sip' => 'getSip',
        'sercret2_fa' => 'getSercret2Fa',
        'preferences' => 'getPreferences',
        'timestamp' => 'getTimestamp',
        'md5' => 'getMd5'
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
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('tz', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('dash', $data ?? [], null);
        $this->setIfExists('allow', $data ?? [], null);
        $this->setIfExists('sip', $data ?? [], null);
        $this->setIfExists('sercret2_fa', $data ?? [], null);
        $this->setIfExists('preferences', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('md5', $data ?? [], null);
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

        if (!is_null($this->container['tz']) && (mb_strlen($this->container['tz']) > 50)) {
            $invalidProperties[] = "invalid value for 'tz', the character length must be smaller than or equal to 50.";
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the user.
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
     * @return float|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param float|null $account The account ID.
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
     * Gets tz
     *
     * @return string|null
     */
    public function getTz()
    {
        return $this->container['tz'];
    }

    /**
     * Sets tz
     *
     * @param string|null $tz Local timezone of the user.
     *
     * @return self
     */
    public function setTz($tz)
    {
        if (is_null($tz)) {
            throw new \InvalidArgumentException('non-nullable tz cannot be null');
        }
        if ((mb_strlen($tz) > 50)) {
            throw new \InvalidArgumentException('invalid length for $tz when calling CurrentUser., must be smaller than or equal to 50.');
        }

        $this->container['tz'] = $tz;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets dash
     *
     * @return \WildJar\ApiClient\Model\CurrentUserDash|null
     */
    public function getDash()
    {
        return $this->container['dash'];
    }

    /**
     * Sets dash
     *
     * @param \WildJar\ApiClient\Model\CurrentUserDash|null $dash dash
     *
     * @return self
     */
    public function setDash($dash)
    {
        if (is_null($dash)) {
            throw new \InvalidArgumentException('non-nullable dash cannot be null');
        }
        $this->container['dash'] = $dash;

        return $this;
    }

    /**
     * Gets allow
     *
     * @return \WildJar\ApiClient\Model\CurrentUserAllow|null
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     *
     * @param \WildJar\ApiClient\Model\CurrentUserAllow|null $allow allow
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
     * Gets sip
     *
     * @return \WildJar\ApiClient\Model\CurrentUserSip|null
     */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
     * Sets sip
     *
     * @param \WildJar\ApiClient\Model\CurrentUserSip|null $sip sip
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
     * Gets sercret2_fa
     *
     * @return \WildJar\ApiClient\Model\CurrentUserSercret2FA|null
     */
    public function getSercret2Fa()
    {
        return $this->container['sercret2_fa'];
    }

    /**
     * Sets sercret2_fa
     *
     * @param \WildJar\ApiClient\Model\CurrentUserSercret2FA|null $sercret2_fa sercret2_fa
     *
     * @return self
     */
    public function setSercret2Fa($sercret2_fa)
    {
        if (is_null($sercret2_fa)) {
            throw new \InvalidArgumentException('non-nullable sercret2_fa cannot be null');
        }
        $this->container['sercret2_fa'] = $sercret2_fa;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return object|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param object|null $preferences Preferences
     *
     * @return self
     */
    public function setPreferences($preferences)
    {
        if (is_null($preferences)) {
            throw new \InvalidArgumentException('non-nullable preferences cannot be null');
        }
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp If logged into the WildJar dashboard, the expiry timestamp in milliseconds.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets md5
     *
     * @return string|null
     */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
     * Sets md5
     *
     * @param string|null $md5 An MD5 hash for the user.
     *
     * @return self
     */
    public function setMd5($md5)
    {
        if (is_null($md5)) {
            array_push($this->openAPINullablesSetToNull, 'md5');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('md5', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['md5'] = $md5;

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


