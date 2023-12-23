<?php
/**
 * DetailedCallAllOfWeb
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
 * DetailedCallAllOfWeb Class Doc Comment
 *
 * @category Class
 * @package  Wildjar
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class DetailedCallAllOfWeb implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DetailedCall_allOf_web';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'page' => 'string',
        'campaign' => 'string',
        'keyword' => 'string',
        'content' => 'string',
        'device' => 'string',
        'landing' => 'string',
        'user' => 'string',
        'session' => 'string',
        'referrer' => 'string',
        'ip' => 'string',
        'gclid' => 'string',
        'msclkid' => 'string',
        'fbclid' => 'string',
        'seg_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'page' => 'uri',
        'campaign' => null,
        'keyword' => null,
        'content' => null,
        'device' => null,
        'landing' => 'uri',
        'user' => null,
        'session' => null,
        'referrer' => 'uri',
        'ip' => 'ipv4',
        'gclid' => null,
        'msclkid' => null,
        'fbclid' => null,
        'seg_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page' => false,
        'campaign' => true,
        'keyword' => true,
        'content' => true,
        'device' => true,
        'landing' => false,
        'user' => false,
        'session' => false,
        'referrer' => true,
        'ip' => false,
        'gclid' => false,
        'msclkid' => false,
        'fbclid' => false,
        'seg_id' => false
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
        'page' => 'page',
        'campaign' => 'campaign',
        'keyword' => 'keyword',
        'content' => 'content',
        'device' => 'device',
        'landing' => 'landing',
        'user' => 'user',
        'session' => 'session',
        'referrer' => 'referrer',
        'ip' => 'ip',
        'gclid' => 'gclid',
        'msclkid' => 'msclkid',
        'fbclid' => 'fbclid',
        'seg_id' => 'segId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page' => 'setPage',
        'campaign' => 'setCampaign',
        'keyword' => 'setKeyword',
        'content' => 'setContent',
        'device' => 'setDevice',
        'landing' => 'setLanding',
        'user' => 'setUser',
        'session' => 'setSession',
        'referrer' => 'setReferrer',
        'ip' => 'setIp',
        'gclid' => 'setGclid',
        'msclkid' => 'setMsclkid',
        'fbclid' => 'setFbclid',
        'seg_id' => 'setSegId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page' => 'getPage',
        'campaign' => 'getCampaign',
        'keyword' => 'getKeyword',
        'content' => 'getContent',
        'device' => 'getDevice',
        'landing' => 'getLanding',
        'user' => 'getUser',
        'session' => 'getSession',
        'referrer' => 'getReferrer',
        'ip' => 'getIp',
        'gclid' => 'getGclid',
        'msclkid' => 'getMsclkid',
        'fbclid' => 'getFbclid',
        'seg_id' => 'getSegId'
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

    public const DEVICE_DESKTOP = 'desktop';
    public const DEVICE_MOBILE = 'mobile';
    public const DEVICE_TABLET = 'tablet';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceAllowableValues()
    {
        return [
            self::DEVICE_DESKTOP,
            self::DEVICE_MOBILE,
            self::DEVICE_TABLET,
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
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('keyword', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('landing', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
        $this->setIfExists('referrer', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('gclid', $data ?? [], null);
        $this->setIfExists('msclkid', $data ?? [], null);
        $this->setIfExists('fbclid', $data ?? [], null);
        $this->setIfExists('seg_id', $data ?? [], null);
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

        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($this->container['device']) && !in_array($this->container['device'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'device', must be one of '%s'",
                $this->container['device'],
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
     * Gets page
     *
     * @return string|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string|null $page The web page the call was made from. Also called conversion page.
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return string|null
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string|null $campaign The UTM campaign name attributed to the caller.
     *
     * @return self
     */
    public function setCampaign($campaign)
    {
        if (is_null($campaign)) {
            array_push($this->openAPINullablesSetToNull, 'campaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string|null $keyword The keyword attributed to the caller in the ValueTrack or UTM Term parameter.
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        if (is_null($keyword)) {
            array_push($this->openAPINullablesSetToNull, 'keyword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('keyword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content The UTM content parameter attributed to the caller.
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            array_push($this->openAPINullablesSetToNull, 'content');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device The type of device the site was visited on before a call was made.
     *
     * @return self
     */
    public function setDevice($device)
    {
        if (is_null($device)) {
            array_push($this->openAPINullablesSetToNull, 'device');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('device', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($device) && !in_array($device, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'device', must be one of '%s'",
                    $device,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets landing
     *
     * @return string|null
     */
    public function getLanding()
    {
        return $this->container['landing'];
    }

    /**
     * Sets landing
     *
     * @param string|null $landing The web page the caller landed on first. Also called landing page.
     *
     * @return self
     */
    public function setLanding($landing)
    {
        if (is_null($landing)) {
            throw new \InvalidArgumentException('non-nullable landing cannot be null');
        }
        $this->container['landing'] = $landing;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user The user portion of the Google Client ID (X in XXXXXXXX.YYYYYYYY).
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string|null $session The session portion of the Google Client ID (Y in XXXXXXXX.YYYYYYYY).
     *
     * @return self
     */
    public function setSession($session)
    {
        if (is_null($session)) {
            throw new \InvalidArgumentException('non-nullable session cannot be null');
        }
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string|null $referrer The referring website before the call was made.
     *
     * @return self
     */
    public function setReferrer($referrer)
    {
        if (is_null($referrer)) {
            array_push($this->openAPINullablesSetToNull, 'referrer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referrer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip The IP address of the visitor.
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (is_null($ip)) {
            throw new \InvalidArgumentException('non-nullable ip cannot be null');
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets gclid
     *
     * @return string|null
     */
    public function getGclid()
    {
        return $this->container['gclid'];
    }

    /**
     * Sets gclid
     *
     * @param string|null $gclid The Google Click ID (GCLID) attributed to a paid visitor from Google Ads.
     *
     * @return self
     */
    public function setGclid($gclid)
    {
        if (is_null($gclid)) {
            throw new \InvalidArgumentException('non-nullable gclid cannot be null');
        }
        $this->container['gclid'] = $gclid;

        return $this;
    }

    /**
     * Gets msclkid
     *
     * @return string|null
     */
    public function getMsclkid()
    {
        return $this->container['msclkid'];
    }

    /**
     * Sets msclkid
     *
     * @param string|null $msclkid The Microsoft Ads Click ID (MSCLKID) attributed to a paid visitor from Microsoft Ads.
     *
     * @return self
     */
    public function setMsclkid($msclkid)
    {
        if (is_null($msclkid)) {
            throw new \InvalidArgumentException('non-nullable msclkid cannot be null');
        }
        $this->container['msclkid'] = $msclkid;

        return $this;
    }

    /**
     * Gets fbclid
     *
     * @return string|null
     */
    public function getFbclid()
    {
        return $this->container['fbclid'];
    }

    /**
     * Sets fbclid
     *
     * @param string|null $fbclid The Facebook Click ID (FBLID) attributed to a paid visitor from Facebook Ads.
     *
     * @return self
     */
    public function setFbclid($fbclid)
    {
        if (is_null($fbclid)) {
            throw new \InvalidArgumentException('non-nullable fbclid cannot be null');
        }
        $this->container['fbclid'] = $fbclid;

        return $this;
    }

    /**
     * Gets seg_id
     *
     * @return string|null
     */
    public function getSegId()
    {
        return $this->container['seg_id'];
    }

    /**
     * Sets seg_id
     *
     * @param string|null $seg_id The Segment ID if the website is running Segment as a CDP.
     *
     * @return self
     */
    public function setSegId($seg_id)
    {
        if (is_null($seg_id)) {
            throw new \InvalidArgumentException('non-nullable seg_id cannot be null');
        }
        $this->container['seg_id'] = $seg_id;

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


