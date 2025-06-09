<?php
/**
 * Call
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
 * Call Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class Call implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Call';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'uuid' => 'string',
        'status' => 'string',
        'caller' => 'string',
        'first_time_caller' => 'string',
        'duration' => 'float',
        'talk_time' => 'float',
        'target' => 'string',
        'audio' => 'string',
        'audio_id' => 'string',
        'direction' => 'string',
        'account' => 'string',
        'account_name' => 'string',
        'tracking_number' => 'string',
        'tracking_name' => 'string',
        'tracking_source' => 'string',
        'tags' => 'string[]',
        'dtmf' => 'float',
        'dtm_fname' => 'string',
        'location' => 'string',
        'country' => 'string',
        'network' => 'string',
        'state' => 'string',
        'area' => 'string',
        'timestamp' => 'string',
        'date_start_gmt' => '\DateTime',
        'date_stop_gmt' => '\DateTime',
        'user_timezone' => 'string',
        'date_start_user' => '\DateTime',
        'date_stop_user' => '\DateTime',
        'local_timezone' => 'string',
        'date_start_local' => '\DateTime',
        'date_stop_local' => '\DateTime',
        'score' => 'float',
        'notes' => 'string',
        'tag' => '\WildJar\ApiClient\Model\CallTag',
        'web' => '\WildJar\ApiClient\Model\CallWeb',
        'ivr' => '\WildJar\ApiClient\Model\CallIVR',
        'intelligence' => 'float'
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
        'uuid' => 'uuid',
        'status' => null,
        'caller' => null,
        'first_time_caller' => null,
        'duration' => null,
        'talk_time' => null,
        'target' => null,
        'audio' => 'uri',
        'audio_id' => 'uuid',
        'direction' => null,
        'account' => null,
        'account_name' => null,
        'tracking_number' => null,
        'tracking_name' => null,
        'tracking_source' => null,
        'tags' => 'uuid',
        'dtmf' => null,
        'dtm_fname' => null,
        'location' => null,
        'country' => null,
        'network' => null,
        'state' => null,
        'area' => null,
        'timestamp' => 'time',
        'date_start_gmt' => 'date-time',
        'date_stop_gmt' => 'date-time',
        'user_timezone' => null,
        'date_start_user' => 'date-time',
        'date_stop_user' => 'date-time',
        'local_timezone' => null,
        'date_start_local' => 'date-time',
        'date_stop_local' => 'date-time',
        'score' => null,
        'notes' => null,
        'tag' => null,
        'web' => null,
        'ivr' => null,
        'intelligence' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'uuid' => false,
        'status' => false,
        'caller' => false,
        'first_time_caller' => false,
        'duration' => false,
        'talk_time' => true,
        'target' => false,
        'audio' => false,
        'audio_id' => false,
        'direction' => false,
        'account' => false,
        'account_name' => false,
        'tracking_number' => false,
        'tracking_name' => false,
        'tracking_source' => false,
        'tags' => true,
        'dtmf' => true,
        'dtm_fname' => true,
        'location' => false,
        'country' => false,
        'network' => false,
        'state' => false,
        'area' => false,
        'timestamp' => false,
        'date_start_gmt' => false,
        'date_stop_gmt' => false,
        'user_timezone' => false,
        'date_start_user' => false,
        'date_stop_user' => false,
        'local_timezone' => false,
        'date_start_local' => false,
        'date_stop_local' => false,
        'score' => true,
        'notes' => true,
        'tag' => false,
        'web' => false,
        'ivr' => false,
        'intelligence' => true
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
        'uuid' => 'uuid',
        'status' => 'status',
        'caller' => 'caller',
        'first_time_caller' => 'firstTimeCaller',
        'duration' => 'duration',
        'talk_time' => 'talkTime',
        'target' => 'target',
        'audio' => 'audio',
        'audio_id' => 'audioId',
        'direction' => 'direction',
        'account' => 'account',
        'account_name' => 'accountName',
        'tracking_number' => 'trackingNumber',
        'tracking_name' => 'trackingName',
        'tracking_source' => 'trackingSource',
        'tags' => 'tags',
        'dtmf' => 'DTMF',
        'dtm_fname' => 'DTMFname',
        'location' => 'location',
        'country' => 'country',
        'network' => 'network',
        'state' => 'state',
        'area' => 'area',
        'timestamp' => 'timestamp',
        'date_start_gmt' => 'dateStartGMT',
        'date_stop_gmt' => 'dateStopGMT',
        'user_timezone' => 'userTimezone',
        'date_start_user' => 'dateStartUser',
        'date_stop_user' => 'dateStopUser',
        'local_timezone' => 'localTimezone',
        'date_start_local' => 'dateStartLocal',
        'date_stop_local' => 'dateStopLocal',
        'score' => 'score',
        'notes' => 'notes',
        'tag' => 'tag',
        'web' => 'web',
        'ivr' => 'IVR',
        'intelligence' => 'intelligence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'status' => 'setStatus',
        'caller' => 'setCaller',
        'first_time_caller' => 'setFirstTimeCaller',
        'duration' => 'setDuration',
        'talk_time' => 'setTalkTime',
        'target' => 'setTarget',
        'audio' => 'setAudio',
        'audio_id' => 'setAudioId',
        'direction' => 'setDirection',
        'account' => 'setAccount',
        'account_name' => 'setAccountName',
        'tracking_number' => 'setTrackingNumber',
        'tracking_name' => 'setTrackingName',
        'tracking_source' => 'setTrackingSource',
        'tags' => 'setTags',
        'dtmf' => 'setDtmf',
        'dtm_fname' => 'setDtmFname',
        'location' => 'setLocation',
        'country' => 'setCountry',
        'network' => 'setNetwork',
        'state' => 'setState',
        'area' => 'setArea',
        'timestamp' => 'setTimestamp',
        'date_start_gmt' => 'setDateStartGmt',
        'date_stop_gmt' => 'setDateStopGmt',
        'user_timezone' => 'setUserTimezone',
        'date_start_user' => 'setDateStartUser',
        'date_stop_user' => 'setDateStopUser',
        'local_timezone' => 'setLocalTimezone',
        'date_start_local' => 'setDateStartLocal',
        'date_stop_local' => 'setDateStopLocal',
        'score' => 'setScore',
        'notes' => 'setNotes',
        'tag' => 'setTag',
        'web' => 'setWeb',
        'ivr' => 'setIvr',
        'intelligence' => 'setIntelligence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'status' => 'getStatus',
        'caller' => 'getCaller',
        'first_time_caller' => 'getFirstTimeCaller',
        'duration' => 'getDuration',
        'talk_time' => 'getTalkTime',
        'target' => 'getTarget',
        'audio' => 'getAudio',
        'audio_id' => 'getAudioId',
        'direction' => 'getDirection',
        'account' => 'getAccount',
        'account_name' => 'getAccountName',
        'tracking_number' => 'getTrackingNumber',
        'tracking_name' => 'getTrackingName',
        'tracking_source' => 'getTrackingSource',
        'tags' => 'getTags',
        'dtmf' => 'getDtmf',
        'dtm_fname' => 'getDtmFname',
        'location' => 'getLocation',
        'country' => 'getCountry',
        'network' => 'getNetwork',
        'state' => 'getState',
        'area' => 'getArea',
        'timestamp' => 'getTimestamp',
        'date_start_gmt' => 'getDateStartGmt',
        'date_stop_gmt' => 'getDateStopGmt',
        'user_timezone' => 'getUserTimezone',
        'date_start_user' => 'getDateStartUser',
        'date_stop_user' => 'getDateStopUser',
        'local_timezone' => 'getLocalTimezone',
        'date_start_local' => 'getDateStartLocal',
        'date_stop_local' => 'getDateStopLocal',
        'score' => 'getScore',
        'notes' => 'getNotes',
        'tag' => 'getTag',
        'web' => 'getWeb',
        'ivr' => 'getIvr',
        'intelligence' => 'getIntelligence'
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

    public const STATUS_ANSWERED = 'answered';
    public const STATUS_ABANDONED = 'abandoned';
    public const STATUS_MISSED = 'missed';
    public const FIRST_TIME_CALLER_YES = 'yes';
    public const FIRST_TIME_CALLER_NO = 'no';
    public const DIRECTION_INBOUND = 'inbound';
    public const DIRECTION_OUTBOUND = 'outbound';
    public const NETWORK_GEO = 'geo';
    public const NETWORK_MOBILE = 'mobile';
    public const NETWORK_GEO_O_RMOBILE = 'geoORmobile';
    public const SCORE_NUMBER_1 = 1;
    public const SCORE_NUMBER_2 = 2;
    public const SCORE_NUMBER_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ANSWERED,
            self::STATUS_ABANDONED,
            self::STATUS_MISSED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFirstTimeCallerAllowableValues()
    {
        return [
            self::FIRST_TIME_CALLER_YES,
            self::FIRST_TIME_CALLER_NO,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK_GEO,
            self::NETWORK_MOBILE,
            self::NETWORK_GEO_O_RMOBILE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScoreAllowableValues()
    {
        return [
            self::SCORE_NUMBER_1,
            self::SCORE_NUMBER_2,
            self::SCORE_NUMBER_3,
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
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('caller', $data ?? [], null);
        $this->setIfExists('first_time_caller', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('talk_time', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('audio', $data ?? [], null);
        $this->setIfExists('audio_id', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('tracking_name', $data ?? [], null);
        $this->setIfExists('tracking_source', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('dtmf', $data ?? [], null);
        $this->setIfExists('dtm_fname', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('date_start_gmt', $data ?? [], null);
        $this->setIfExists('date_stop_gmt', $data ?? [], null);
        $this->setIfExists('user_timezone', $data ?? [], null);
        $this->setIfExists('date_start_user', $data ?? [], null);
        $this->setIfExists('date_stop_user', $data ?? [], null);
        $this->setIfExists('local_timezone', $data ?? [], null);
        $this->setIfExists('date_start_local', $data ?? [], null);
        $this->setIfExists('date_stop_local', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('web', $data ?? [], null);
        $this->setIfExists('ivr', $data ?? [], null);
        $this->setIfExists('intelligence', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFirstTimeCallerAllowableValues();
        if (!is_null($this->container['first_time_caller']) && !in_array($this->container['first_time_caller'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'first_time_caller', must be one of '%s'",
                $this->container['first_time_caller'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['audio_id']) && (mb_strlen($this->container['audio_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'audio_id', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'network', must be one of '%s'",
                $this->container['network'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['user_timezone']) && (mb_strlen($this->container['user_timezone']) > 50)) {
            $invalidProperties[] = "invalid value for 'user_timezone', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['local_timezone']) && (mb_strlen($this->container['local_timezone']) > 50)) {
            $invalidProperties[] = "invalid value for 'local_timezone', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getScoreAllowableValues();
        if (!is_null($this->container['score']) && !in_array($this->container['score'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'score', must be one of '%s'",
                $this->container['score'],
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
     * @param float|null $id The Call ID of this call
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
     * @param string|null $uuid The Call UUID
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        if ((mb_strlen($uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling Call., must be smaller than or equal to 50.');
        }

        $this->container['uuid'] = $uuid;

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
     * @param string|null $status The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
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
     * Gets caller
     *
     * @return string|null
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     *
     * @param string|null $caller The caller's phone number in E164 format or \"anonymous\", if the number was withheld or private.
     *
     * @return self
     */
    public function setCaller($caller)
    {
        if (is_null($caller)) {
            throw new \InvalidArgumentException('non-nullable caller cannot be null');
        }
        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets first_time_caller
     *
     * @return string|null
     */
    public function getFirstTimeCaller()
    {
        return $this->container['first_time_caller'];
    }

    /**
     * Sets first_time_caller
     *
     * @param string|null $first_time_caller Whether this is the first time caller or not.
     *
     * @return self
     */
    public function setFirstTimeCaller($first_time_caller)
    {
        if (is_null($first_time_caller)) {
            throw new \InvalidArgumentException('non-nullable first_time_caller cannot be null');
        }
        $allowedValues = $this->getFirstTimeCallerAllowableValues();
        if (!in_array($first_time_caller, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'first_time_caller', must be one of '%s'",
                    $first_time_caller,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['first_time_caller'] = $first_time_caller;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float|null $duration The total duration of the call in seconds, including ringing time and recorded voice announcements.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets talk_time
     *
     * @return float|null
     */
    public function getTalkTime()
    {
        return $this->container['talk_time'];
    }

    /**
     * Sets talk_time
     *
     * @param float|null $talk_time The talk time of the call in seconds. If the call is abandoned or missed, the talk time will be null.
     *
     * @return self
     */
    public function setTalkTime($talk_time)
    {
        if (is_null($talk_time)) {
            array_push($this->openAPINullablesSetToNull, 'talk_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('talk_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['talk_time'] = $talk_time;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target The phone number where this call was answered in E164 format.
     *
     * @return self
     */
    public function setTarget($target)
    {
        if (is_null($target)) {
            throw new \InvalidArgumentException('non-nullable target cannot be null');
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets audio
     *
     * @return string|null
     */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
     * Sets audio
     *
     * @param string|null $audio The recording of the call, if enabled.
     *
     * @return self
     */
    public function setAudio($audio)
    {
        if (is_null($audio)) {
            throw new \InvalidArgumentException('non-nullable audio cannot be null');
        }
        $this->container['audio'] = $audio;

        return $this;
    }

    /**
     * Gets audio_id
     *
     * @return string|null
     */
    public function getAudioId()
    {
        return $this->container['audio_id'];
    }

    /**
     * Sets audio_id
     *
     * @param string|null $audio_id The UUID of the call recording, if enabled.
     *
     * @return self
     */
    public function setAudioId($audio_id)
    {
        if (is_null($audio_id)) {
            throw new \InvalidArgumentException('non-nullable audio_id cannot be null');
        }
        if ((mb_strlen($audio_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $audio_id when calling Call., must be smaller than or equal to 50.');
        }

        $this->container['audio_id'] = $audio_id;

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
     * @param string|null $direction Whether the call was inbound or outbound.
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
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account The account number the call is in
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
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The account name the call is in
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string|null $tracking_number The tracking number the call was received on in E164 format.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_name
     *
     * @return string|null
     */
    public function getTrackingName()
    {
        return $this->container['tracking_name'];
    }

    /**
     * Sets tracking_name
     *
     * @param string|null $tracking_name Unique name to identify the tracking number
     *
     * @return self
     */
    public function setTrackingName($tracking_name)
    {
        if (is_null($tracking_name)) {
            throw new \InvalidArgumentException('non-nullable tracking_name cannot be null');
        }
        $this->container['tracking_name'] = $tracking_name;

        return $this;
    }

    /**
     * Gets tracking_source
     *
     * @return string|null
     */
    public function getTrackingSource()
    {
        return $this->container['tracking_source'];
    }

    /**
     * Sets tracking_source
     *
     * @param string|null $tracking_source Grouped source name to identify the call source
     *
     * @return self
     */
    public function setTrackingSource($tracking_source)
    {
        if (is_null($tracking_source)) {
            throw new \InvalidArgumentException('non-nullable tracking_source cannot be null');
        }
        $this->container['tracking_source'] = $tracking_source;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets dtmf
     *
     * @return float|null
     */
    public function getDtmf()
    {
        return $this->container['dtmf'];
    }

    /**
     * Sets dtmf
     *
     * @param float|null $dtmf Smart Tag Lead Scorer digit(s) entered by the caller
     *
     * @return self
     */
    public function setDtmf($dtmf)
    {
        if (is_null($dtmf)) {
            array_push($this->openAPINullablesSetToNull, 'dtmf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dtmf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dtmf'] = $dtmf;

        return $this;
    }

    /**
     * Gets dtm_fname
     *
     * @return string|null
     */
    public function getDtmFname()
    {
        return $this->container['dtm_fname'];
    }

    /**
     * Sets dtm_fname
     *
     * @param string|null $dtm_fname Smart tag name for the corresponding Lead Scorer digit.
     *
     * @return self
     */
    public function setDtmFname($dtm_fname)
    {
        if (is_null($dtm_fname)) {
            array_push($this->openAPINullablesSetToNull, 'dtm_fname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dtm_fname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dtm_fname'] = $dtm_fname;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location The caller's location. For geo callers, this is the caller's phone exchange. For mobile callers, this is \"Mobile\".
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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
     * Gets network
     *
     * @return string|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string|null $network The caller's network type.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $allowedValues = $this->getNetworkAllowableValues();
        if (!in_array($network, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'network', must be one of '%s'",
                    $network,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state the caller is calling from. If the country is not divided by states, the 2 character country code is used.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets area
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string|null $area The caller's area. For geo callers, the broad call charging area. For mobiles in Australia calling a 1300 or 1800 number, the region the mobile is calling from.
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        $this->container['area'] = $area;

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
     * @param string|null $timestamp The call timestamp in milliseconds.
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
     * Gets date_start_gmt
     *
     * @return \DateTime|null
     */
    public function getDateStartGmt()
    {
        return $this->container['date_start_gmt'];
    }

    /**
     * Sets date_start_gmt
     *
     * @param \DateTime|null $date_start_gmt The call start date and time in GMT in ISO format.
     *
     * @return self
     */
    public function setDateStartGmt($date_start_gmt)
    {
        if (is_null($date_start_gmt)) {
            throw new \InvalidArgumentException('non-nullable date_start_gmt cannot be null');
        }
        $this->container['date_start_gmt'] = $date_start_gmt;

        return $this;
    }

    /**
     * Gets date_stop_gmt
     *
     * @return \DateTime|null
     */
    public function getDateStopGmt()
    {
        return $this->container['date_stop_gmt'];
    }

    /**
     * Sets date_stop_gmt
     *
     * @param \DateTime|null $date_stop_gmt The call end date and time in GMT in ISO format.
     *
     * @return self
     */
    public function setDateStopGmt($date_stop_gmt)
    {
        if (is_null($date_stop_gmt)) {
            throw new \InvalidArgumentException('non-nullable date_stop_gmt cannot be null');
        }
        $this->container['date_stop_gmt'] = $date_stop_gmt;

        return $this;
    }

    /**
     * Gets user_timezone
     *
     * @return string|null
     */
    public function getUserTimezone()
    {
        return $this->container['user_timezone'];
    }

    /**
     * Sets user_timezone
     *
     * @param string|null $user_timezone Timezone of the current user.
     *
     * @return self
     */
    public function setUserTimezone($user_timezone)
    {
        if (is_null($user_timezone)) {
            throw new \InvalidArgumentException('non-nullable user_timezone cannot be null');
        }
        if ((mb_strlen($user_timezone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $user_timezone when calling Call., must be smaller than or equal to 50.');
        }

        $this->container['user_timezone'] = $user_timezone;

        return $this;
    }

    /**
     * Gets date_start_user
     *
     * @return \DateTime|null
     */
    public function getDateStartUser()
    {
        return $this->container['date_start_user'];
    }

    /**
     * Sets date_start_user
     *
     * @param \DateTime|null $date_start_user The call start date and time in the user's timezone in ISO format.
     *
     * @return self
     */
    public function setDateStartUser($date_start_user)
    {
        if (is_null($date_start_user)) {
            throw new \InvalidArgumentException('non-nullable date_start_user cannot be null');
        }
        $this->container['date_start_user'] = $date_start_user;

        return $this;
    }

    /**
     * Gets date_stop_user
     *
     * @return \DateTime|null
     */
    public function getDateStopUser()
    {
        return $this->container['date_stop_user'];
    }

    /**
     * Sets date_stop_user
     *
     * @param \DateTime|null $date_stop_user The call end date and time in the user's timezone in ISO format.
     *
     * @return self
     */
    public function setDateStopUser($date_stop_user)
    {
        if (is_null($date_stop_user)) {
            throw new \InvalidArgumentException('non-nullable date_stop_user cannot be null');
        }
        $this->container['date_stop_user'] = $date_stop_user;

        return $this;
    }

    /**
     * Gets local_timezone
     *
     * @return string|null
     */
    public function getLocalTimezone()
    {
        return $this->container['local_timezone'];
    }

    /**
     * Sets local_timezone
     *
     * @param string|null $local_timezone Local timezone of the account.
     *
     * @return self
     */
    public function setLocalTimezone($local_timezone)
    {
        if (is_null($local_timezone)) {
            throw new \InvalidArgumentException('non-nullable local_timezone cannot be null');
        }
        if ((mb_strlen($local_timezone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $local_timezone when calling Call., must be smaller than or equal to 50.');
        }

        $this->container['local_timezone'] = $local_timezone;

        return $this;
    }

    /**
     * Gets date_start_local
     *
     * @return \DateTime|null
     */
    public function getDateStartLocal()
    {
        return $this->container['date_start_local'];
    }

    /**
     * Sets date_start_local
     *
     * @param \DateTime|null $date_start_local The call start date and time in the local timezone of the account in ISO format.
     *
     * @return self
     */
    public function setDateStartLocal($date_start_local)
    {
        if (is_null($date_start_local)) {
            throw new \InvalidArgumentException('non-nullable date_start_local cannot be null');
        }
        $this->container['date_start_local'] = $date_start_local;

        return $this;
    }

    /**
     * Gets date_stop_local
     *
     * @return \DateTime|null
     */
    public function getDateStopLocal()
    {
        return $this->container['date_stop_local'];
    }

    /**
     * Sets date_stop_local
     *
     * @param \DateTime|null $date_stop_local The call end date and time in the local timezone of the account in ISO format.
     *
     * @return self
     */
    public function setDateStopLocal($date_stop_local)
    {
        if (is_null($date_stop_local)) {
            throw new \InvalidArgumentException('non-nullable date_stop_local cannot be null');
        }
        $this->container['date_stop_local'] = $date_stop_local;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float|null $score The score given to the call by a user or automatically as part of a Smart Tag:   * `1` - Poor   * `2` - Average   * `3` - Good
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            array_push($this->openAPINullablesSetToNull, 'score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getScoreAllowableValues();
        if (!is_null($score) && !in_array($score, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'score', must be one of '%s'",
                    $score,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes added to the call by a user.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            array_push($this->openAPINullablesSetToNull, 'notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return \WildJar\ApiClient\Model\CallTag|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \WildJar\ApiClient\Model\CallTag|null $tag tag
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (is_null($tag)) {
            throw new \InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets web
     *
     * @return \WildJar\ApiClient\Model\CallWeb|null
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param \WildJar\ApiClient\Model\CallWeb|null $web web
     *
     * @return self
     */
    public function setWeb($web)
    {
        if (is_null($web)) {
            throw new \InvalidArgumentException('non-nullable web cannot be null');
        }
        $this->container['web'] = $web;

        return $this;
    }

    /**
     * Gets ivr
     *
     * @return \WildJar\ApiClient\Model\CallIVR|null
     */
    public function getIvr()
    {
        return $this->container['ivr'];
    }

    /**
     * Sets ivr
     *
     * @param \WildJar\ApiClient\Model\CallIVR|null $ivr ivr
     *
     * @return self
     */
    public function setIvr($ivr)
    {
        if (is_null($ivr)) {
            throw new \InvalidArgumentException('non-nullable ivr cannot be null');
        }
        $this->container['ivr'] = $ivr;

        return $this;
    }

    /**
     * Gets intelligence
     *
     * @return float|null
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param float|null $intelligence The presence of a transcript for this call. If present, returns a \"1\". If not present, returns null.
     *
     * @return self
     */
    public function setIntelligence($intelligence)
    {
        if (is_null($intelligence)) {
            array_push($this->openAPINullablesSetToNull, 'intelligence');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intelligence', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intelligence'] = $intelligence;

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


