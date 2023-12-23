<?php
/**
 * ActionLocations
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
 * ActionLocations Class Doc Comment
 *
 * @category Class
 * @package  Wildjar
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class ActionLocations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionLocations';

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
        'geo_location' => 'string',
        'mobile_location' => 'string',
        'postcode_prompt' => 'string',
        'iv_rmessage' => 'string',
        'iv_rdigits' => 'float',
        'iv_rattempts' => 'float'
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
        'geo_location' => null,
        'mobile_location' => null,
        'postcode_prompt' => null,
        'iv_rmessage' => null,
        'iv_rdigits' => null,
        'iv_rattempts' => null
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
        'geo_location' => false,
        'mobile_location' => false,
        'postcode_prompt' => false,
        'iv_rmessage' => false,
        'iv_rdigits' => false,
        'iv_rattempts' => false
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
        'geo_location' => 'geoLocation',
        'mobile_location' => 'mobileLocation',
        'postcode_prompt' => 'postcodePrompt',
        'iv_rmessage' => 'IVRmessage',
        'iv_rdigits' => 'IVRdigits',
        'iv_rattempts' => 'IVRattempts'
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
        'geo_location' => 'setGeoLocation',
        'mobile_location' => 'setMobileLocation',
        'postcode_prompt' => 'setPostcodePrompt',
        'iv_rmessage' => 'setIvRmessage',
        'iv_rdigits' => 'setIvRdigits',
        'iv_rattempts' => 'setIvRattempts'
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
        'geo_location' => 'getGeoLocation',
        'mobile_location' => 'getMobileLocation',
        'postcode_prompt' => 'getPostcodePrompt',
        'iv_rmessage' => 'getIvRmessage',
        'iv_rdigits' => 'getIvRdigits',
        'iv_rattempts' => 'getIvRattempts'
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
    public const GEO_LOCATION_YES = 'yes';
    public const GEO_LOCATION_NO = 'no';
    public const MOBILE_LOCATION_YES = 'yes';
    public const MOBILE_LOCATION_NO = 'no';
    public const POSTCODE_PROMPT_YES = 'yes';
    public const POSTCODE_PROMPT_NO = 'no';

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
    public function getGeoLocationAllowableValues()
    {
        return [
            self::GEO_LOCATION_YES,
            self::GEO_LOCATION_NO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMobileLocationAllowableValues()
    {
        return [
            self::MOBILE_LOCATION_YES,
            self::MOBILE_LOCATION_NO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostcodePromptAllowableValues()
    {
        return [
            self::POSTCODE_PROMPT_YES,
            self::POSTCODE_PROMPT_NO,
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
        $this->setIfExists('geo_location', $data ?? [], 'yes');
        $this->setIfExists('mobile_location', $data ?? [], 'yes');
        $this->setIfExists('postcode_prompt', $data ?? [], 'no');
        $this->setIfExists('iv_rmessage', $data ?? [], null);
        $this->setIfExists('iv_rdigits', $data ?? [], 4);
        $this->setIfExists('iv_rattempts', $data ?? [], 2);
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

        $allowedValues = $this->getGeoLocationAllowableValues();
        if (!is_null($this->container['geo_location']) && !in_array($this->container['geo_location'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'geo_location', must be one of '%s'",
                $this->container['geo_location'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMobileLocationAllowableValues();
        if (!is_null($this->container['mobile_location']) && !in_array($this->container['mobile_location'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mobile_location', must be one of '%s'",
                $this->container['mobile_location'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPostcodePromptAllowableValues();
        if (!is_null($this->container['postcode_prompt']) && !in_array($this->container['postcode_prompt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'postcode_prompt', must be one of '%s'",
                $this->container['postcode_prompt'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling ActionLocations., must be smaller than or equal to 100.');
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
     * Gets geo_location
     *
     * @return string|null
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param string|null $geo_location Whether the call will be automatically routed based on a landline caller's exchange.
     *
     * @return self
     */
    public function setGeoLocation($geo_location)
    {
        if (is_null($geo_location)) {
            throw new \InvalidArgumentException('non-nullable geo_location cannot be null');
        }
        $allowedValues = $this->getGeoLocationAllowableValues();
        if (!in_array($geo_location, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'geo_location', must be one of '%s'",
                    $geo_location,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets mobile_location
     *
     * @return string|null
     */
    public function getMobileLocation()
    {
        return $this->container['mobile_location'];
    }

    /**
     * Sets mobile_location
     *
     * @param string|null $mobile_location Whether the call will be automatically routed based on a mobile caller's MoLI location (13, 1300 and 1800 tracking numbers only).
     *
     * @return self
     */
    public function setMobileLocation($mobile_location)
    {
        if (is_null($mobile_location)) {
            throw new \InvalidArgumentException('non-nullable mobile_location cannot be null');
        }
        $allowedValues = $this->getMobileLocationAllowableValues();
        if (!in_array($mobile_location, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mobile_location', must be one of '%s'",
                    $mobile_location,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mobile_location'] = $mobile_location;

        return $this;
    }

    /**
     * Gets postcode_prompt
     *
     * @return string|null
     */
    public function getPostcodePrompt()
    {
        return $this->container['postcode_prompt'];
    }

    /**
     * Sets postcode_prompt
     *
     * @param string|null $postcode_prompt Whether the caller will be prompted to enter a postcode before being routed to the nearest branch.
     *
     * @return self
     */
    public function setPostcodePrompt($postcode_prompt)
    {
        if (is_null($postcode_prompt)) {
            throw new \InvalidArgumentException('non-nullable postcode_prompt cannot be null');
        }
        $allowedValues = $this->getPostcodePromptAllowableValues();
        if (!in_array($postcode_prompt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'postcode_prompt', must be one of '%s'",
                    $postcode_prompt,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['postcode_prompt'] = $postcode_prompt;

        return $this;
    }

    /**
     * Gets iv_rmessage
     *
     * @return string|null
     */
    public function getIvRmessage()
    {
        return $this->container['iv_rmessage'];
    }

    /**
     * Sets iv_rmessage
     *
     * @param string|null $iv_rmessage The message to be played to the caller on the IVR menu. Can be Text to speech or a URI to an MP3 file.
     *
     * @return self
     */
    public function setIvRmessage($iv_rmessage)
    {
        if (is_null($iv_rmessage)) {
            throw new \InvalidArgumentException('non-nullable iv_rmessage cannot be null');
        }
        $this->container['iv_rmessage'] = $iv_rmessage;

        return $this;
    }

    /**
     * Gets iv_rdigits
     *
     * @return float|null
     */
    public function getIvRdigits()
    {
        return $this->container['iv_rdigits'];
    }

    /**
     * Sets iv_rdigits
     *
     * @param float|null $iv_rdigits The number of digits required for input to be valid and routed to that option. If fewer digits are requierd for an option, it can be overridden by pressing the digit set in finishOnKey.
     *
     * @return self
     */
    public function setIvRdigits($iv_rdigits)
    {
        if (is_null($iv_rdigits)) {
            throw new \InvalidArgumentException('non-nullable iv_rdigits cannot be null');
        }
        $this->container['iv_rdigits'] = $iv_rdigits;

        return $this;
    }

    /**
     * Gets iv_rattempts
     *
     * @return float|null
     */
    public function getIvRattempts()
    {
        return $this->container['iv_rattempts'];
    }

    /**
     * Sets iv_rattempts
     *
     * @param float|null $iv_rattempts The number of attempts allowed before the IVR message is replayed.
     *
     * @return self
     */
    public function setIvRattempts($iv_rattempts)
    {
        if (is_null($iv_rattempts)) {
            throw new \InvalidArgumentException('non-nullable iv_rattempts cannot be null');
        }
        $this->container['iv_rattempts'] = $iv_rattempts;

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


