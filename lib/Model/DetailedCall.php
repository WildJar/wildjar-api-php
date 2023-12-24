<?php
/**
 * DetailedCall
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
 * DetailedCall Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class DetailedCall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DetailedCall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'mixed',
        'account_name' => 'mixed',
        'area' => 'mixed',
        'audio' => 'mixed',
        'audio_id' => 'mixed',
        'caller' => 'mixed',
        'country' => 'mixed',
        'date_start_gmt' => 'mixed',
        'date_start_local' => 'mixed',
        'date_start_user' => 'mixed',
        'date_stop_gmt' => 'mixed',
        'date_stop_local' => 'mixed',
        'date_stop_user' => 'mixed',
        'direction' => 'mixed',
        'dtmf' => 'mixed',
        'dtm_fname' => 'mixed',
        'duration' => 'mixed',
        'first_time_caller' => 'mixed',
        'id' => 'mixed',
        'intelligence' => 'mixed',
        'ivr' => '\WildJar\ApiClient\Model\CallIVR',
        'local_timezone' => 'mixed',
        'location' => 'mixed',
        'network' => 'mixed',
        'notes' => 'mixed',
        'score' => 'mixed',
        'state' => 'mixed',
        'status' => 'mixed',
        'tag' => '\WildJar\ApiClient\Model\CallTag',
        'tags' => 'mixed',
        'talk_time' => 'mixed',
        'target' => 'mixed',
        'timestamp' => 'mixed',
        'tracking_name' => 'mixed',
        'tracking_number' => 'mixed',
        'tracking_source' => 'mixed',
        'user_timezone' => 'mixed',
        'uuid' => 'mixed',
        'web' => '\WildJar\ApiClient\Model\DetailedCallAllOfWeb'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'account_name' => null,
        'area' => null,
        'audio' => 'uri',
        'audio_id' => 'uuid',
        'caller' => null,
        'country' => null,
        'date_start_gmt' => 'date-time',
        'date_start_local' => 'date-time',
        'date_start_user' => 'date-time',
        'date_stop_gmt' => 'date-time',
        'date_stop_local' => 'date-time',
        'date_stop_user' => 'date-time',
        'direction' => null,
        'dtmf' => null,
        'dtm_fname' => null,
        'duration' => null,
        'first_time_caller' => null,
        'id' => null,
        'intelligence' => null,
        'ivr' => null,
        'local_timezone' => null,
        'location' => null,
        'network' => null,
        'notes' => null,
        'score' => null,
        'state' => null,
        'status' => null,
        'tag' => null,
        'tags' => null,
        'talk_time' => null,
        'target' => null,
        'timestamp' => 'time',
        'tracking_name' => null,
        'tracking_number' => null,
        'tracking_source' => null,
        'user_timezone' => null,
        'uuid' => 'uuid',
        'web' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account' => true,
        'account_name' => true,
        'area' => true,
        'audio' => true,
        'audio_id' => true,
        'caller' => true,
        'country' => true,
        'date_start_gmt' => true,
        'date_start_local' => true,
        'date_start_user' => true,
        'date_stop_gmt' => true,
        'date_stop_local' => true,
        'date_stop_user' => true,
        'direction' => true,
        'dtmf' => true,
        'dtm_fname' => true,
        'duration' => true,
        'first_time_caller' => true,
        'id' => true,
        'intelligence' => true,
        'ivr' => false,
        'local_timezone' => true,
        'location' => true,
        'network' => true,
        'notes' => true,
        'score' => true,
        'state' => true,
        'status' => true,
        'tag' => false,
        'tags' => true,
        'talk_time' => true,
        'target' => true,
        'timestamp' => true,
        'tracking_name' => true,
        'tracking_number' => true,
        'tracking_source' => true,
        'user_timezone' => true,
        'uuid' => true,
        'web' => false
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
        'account' => 'account',
        'account_name' => 'accountName',
        'area' => 'area',
        'audio' => 'audio',
        'audio_id' => 'audioId',
        'caller' => 'caller',
        'country' => 'country',
        'date_start_gmt' => 'dateStartGMT',
        'date_start_local' => 'dateStartLocal',
        'date_start_user' => 'dateStartUser',
        'date_stop_gmt' => 'dateStopGMT',
        'date_stop_local' => 'dateStopLocal',
        'date_stop_user' => 'dateStopUser',
        'direction' => 'direction',
        'dtmf' => 'DTMF',
        'dtm_fname' => 'DTMFname',
        'duration' => 'duration',
        'first_time_caller' => 'firstTimeCaller',
        'id' => 'id',
        'intelligence' => 'intelligence',
        'ivr' => 'IVR',
        'local_timezone' => 'localTimezone',
        'location' => 'location',
        'network' => 'network',
        'notes' => 'notes',
        'score' => 'score',
        'state' => 'state',
        'status' => 'status',
        'tag' => 'tag',
        'tags' => 'tags',
        'talk_time' => 'talkTime',
        'target' => 'target',
        'timestamp' => 'timestamp',
        'tracking_name' => 'trackingName',
        'tracking_number' => 'trackingNumber',
        'tracking_source' => 'trackingSource',
        'user_timezone' => 'userTimezone',
        'uuid' => 'uuid',
        'web' => 'web'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'account_name' => 'setAccountName',
        'area' => 'setArea',
        'audio' => 'setAudio',
        'audio_id' => 'setAudioId',
        'caller' => 'setCaller',
        'country' => 'setCountry',
        'date_start_gmt' => 'setDateStartGmt',
        'date_start_local' => 'setDateStartLocal',
        'date_start_user' => 'setDateStartUser',
        'date_stop_gmt' => 'setDateStopGmt',
        'date_stop_local' => 'setDateStopLocal',
        'date_stop_user' => 'setDateStopUser',
        'direction' => 'setDirection',
        'dtmf' => 'setDtmf',
        'dtm_fname' => 'setDtmFname',
        'duration' => 'setDuration',
        'first_time_caller' => 'setFirstTimeCaller',
        'id' => 'setId',
        'intelligence' => 'setIntelligence',
        'ivr' => 'setIvr',
        'local_timezone' => 'setLocalTimezone',
        'location' => 'setLocation',
        'network' => 'setNetwork',
        'notes' => 'setNotes',
        'score' => 'setScore',
        'state' => 'setState',
        'status' => 'setStatus',
        'tag' => 'setTag',
        'tags' => 'setTags',
        'talk_time' => 'setTalkTime',
        'target' => 'setTarget',
        'timestamp' => 'setTimestamp',
        'tracking_name' => 'setTrackingName',
        'tracking_number' => 'setTrackingNumber',
        'tracking_source' => 'setTrackingSource',
        'user_timezone' => 'setUserTimezone',
        'uuid' => 'setUuid',
        'web' => 'setWeb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'account_name' => 'getAccountName',
        'area' => 'getArea',
        'audio' => 'getAudio',
        'audio_id' => 'getAudioId',
        'caller' => 'getCaller',
        'country' => 'getCountry',
        'date_start_gmt' => 'getDateStartGmt',
        'date_start_local' => 'getDateStartLocal',
        'date_start_user' => 'getDateStartUser',
        'date_stop_gmt' => 'getDateStopGmt',
        'date_stop_local' => 'getDateStopLocal',
        'date_stop_user' => 'getDateStopUser',
        'direction' => 'getDirection',
        'dtmf' => 'getDtmf',
        'dtm_fname' => 'getDtmFname',
        'duration' => 'getDuration',
        'first_time_caller' => 'getFirstTimeCaller',
        'id' => 'getId',
        'intelligence' => 'getIntelligence',
        'ivr' => 'getIvr',
        'local_timezone' => 'getLocalTimezone',
        'location' => 'getLocation',
        'network' => 'getNetwork',
        'notes' => 'getNotes',
        'score' => 'getScore',
        'state' => 'getState',
        'status' => 'getStatus',
        'tag' => 'getTag',
        'tags' => 'getTags',
        'talk_time' => 'getTalkTime',
        'target' => 'getTarget',
        'timestamp' => 'getTimestamp',
        'tracking_name' => 'getTrackingName',
        'tracking_number' => 'getTrackingNumber',
        'tracking_source' => 'getTrackingSource',
        'user_timezone' => 'getUserTimezone',
        'uuid' => 'getUuid',
        'web' => 'getWeb'
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

    public const DIRECTION_INBOUND = 'inbound';
    public const DIRECTION_OUTBOUND = 'outbound';
    public const FIRST_TIME_CALLER_YES = 'yes';
    public const FIRST_TIME_CALLER_NO = 'no';
    public const NETWORK_GEO = 'geo';
    public const NETWORK_MOBILE = 'mobile';
    public const NETWORK_GEO_O_RMOBILE = 'geoORmobile';
    public const SCORE__1 = '1';
    public const SCORE__2 = '2';
    public const SCORE__3 = '3';
    public const STATUS_ANSWERED = 'answered';
    public const STATUS_ABANDONED = 'abandoned';
    public const STATUS_MISSED = 'missed';

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
            self::SCORE__1,
            self::SCORE__2,
            self::SCORE__3,
        ];
    }

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
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('audio', $data ?? [], null);
        $this->setIfExists('audio_id', $data ?? [], null);
        $this->setIfExists('caller', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('date_start_gmt', $data ?? [], null);
        $this->setIfExists('date_start_local', $data ?? [], null);
        $this->setIfExists('date_start_user', $data ?? [], null);
        $this->setIfExists('date_stop_gmt', $data ?? [], null);
        $this->setIfExists('date_stop_local', $data ?? [], null);
        $this->setIfExists('date_stop_user', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('dtmf', $data ?? [], null);
        $this->setIfExists('dtm_fname', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('first_time_caller', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('intelligence', $data ?? [], null);
        $this->setIfExists('ivr', $data ?? [], null);
        $this->setIfExists('local_timezone', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('talk_time', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('tracking_name', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('tracking_source', $data ?? [], null);
        $this->setIfExists('user_timezone', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('web', $data ?? [], null);
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

        $allowedValues = $this->getFirstTimeCallerAllowableValues();
        if (!is_null($this->container['first_time_caller']) && !in_array($this->container['first_time_caller'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'first_time_caller', must be one of '%s'",
                $this->container['first_time_caller'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['local_timezone']) && (mb_strlen($this->container['local_timezone']) > 50)) {
            $invalidProperties[] = "invalid value for 'local_timezone', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'network', must be one of '%s'",
                $this->container['network'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScoreAllowableValues();
        if (!is_null($this->container['score']) && !in_array($this->container['score'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'score', must be one of '%s'",
                $this->container['score'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['user_timezone']) && (mb_strlen($this->container['user_timezone']) > 50)) {
            $invalidProperties[] = "invalid value for 'user_timezone', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 50.";
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
     * @param mixed|null $account The account number the call is in
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
     * Gets account_name
     *
     * @return mixed|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param mixed|null $account_name The account name the call is in
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            array_push($this->openAPINullablesSetToNull, 'account_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets area
     *
     * @return mixed|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param mixed|null $area The caller's area. For geo callers, the broad call charging area. For mobiles in Australia calling a 1300 or 1800 number, the region the mobile is calling from.
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            array_push($this->openAPINullablesSetToNull, 'area');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('area', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets audio
     *
     * @return mixed|null
     */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
     * Sets audio
     *
     * @param mixed|null $audio The recording of the call, if enabled.
     *
     * @return self
     */
    public function setAudio($audio)
    {
        if (is_null($audio)) {
            array_push($this->openAPINullablesSetToNull, 'audio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audio'] = $audio;

        return $this;
    }

    /**
     * Gets audio_id
     *
     * @return mixed|null
     */
    public function getAudioId()
    {
        return $this->container['audio_id'];
    }

    /**
     * Sets audio_id
     *
     * @param mixed|null $audio_id The UUID of the call recording, if enabled.
     *
     * @return self
     */
    public function setAudioId($audio_id)
    {
        if (is_null($audio_id)) {
            array_push($this->openAPINullablesSetToNull, 'audio_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($audio_id) && (mb_strlen($audio_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $audio_id when calling DetailedCall., must be smaller than or equal to 50.');
        }

        $this->container['audio_id'] = $audio_id;

        return $this;
    }

    /**
     * Gets caller
     *
     * @return mixed|null
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     *
     * @param mixed|null $caller The caller's phone number in E164 format or \"anonymous\", if the number was withheld or private.
     *
     * @return self
     */
    public function setCaller($caller)
    {
        if (is_null($caller)) {
            array_push($this->openAPINullablesSetToNull, 'caller');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('caller', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets country
     *
     * @return mixed|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param mixed|null $country 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            array_push($this->openAPINullablesSetToNull, 'country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets date_start_gmt
     *
     * @return mixed|null
     */
    public function getDateStartGmt()
    {
        return $this->container['date_start_gmt'];
    }

    /**
     * Sets date_start_gmt
     *
     * @param mixed|null $date_start_gmt The call start date and time in GMT in ISO format.
     *
     * @return self
     */
    public function setDateStartGmt($date_start_gmt)
    {
        if (is_null($date_start_gmt)) {
            array_push($this->openAPINullablesSetToNull, 'date_start_gmt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_start_gmt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_start_gmt'] = $date_start_gmt;

        return $this;
    }

    /**
     * Gets date_start_local
     *
     * @return mixed|null
     */
    public function getDateStartLocal()
    {
        return $this->container['date_start_local'];
    }

    /**
     * Sets date_start_local
     *
     * @param mixed|null $date_start_local The call start date and time in the local timezone of the account in ISO format.
     *
     * @return self
     */
    public function setDateStartLocal($date_start_local)
    {
        if (is_null($date_start_local)) {
            array_push($this->openAPINullablesSetToNull, 'date_start_local');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_start_local', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_start_local'] = $date_start_local;

        return $this;
    }

    /**
     * Gets date_start_user
     *
     * @return mixed|null
     */
    public function getDateStartUser()
    {
        return $this->container['date_start_user'];
    }

    /**
     * Sets date_start_user
     *
     * @param mixed|null $date_start_user The call start date and time in the user's timezone in ISO format.
     *
     * @return self
     */
    public function setDateStartUser($date_start_user)
    {
        if (is_null($date_start_user)) {
            array_push($this->openAPINullablesSetToNull, 'date_start_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_start_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_start_user'] = $date_start_user;

        return $this;
    }

    /**
     * Gets date_stop_gmt
     *
     * @return mixed|null
     */
    public function getDateStopGmt()
    {
        return $this->container['date_stop_gmt'];
    }

    /**
     * Sets date_stop_gmt
     *
     * @param mixed|null $date_stop_gmt The call end date and time in GMT in ISO format.
     *
     * @return self
     */
    public function setDateStopGmt($date_stop_gmt)
    {
        if (is_null($date_stop_gmt)) {
            array_push($this->openAPINullablesSetToNull, 'date_stop_gmt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_stop_gmt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_stop_gmt'] = $date_stop_gmt;

        return $this;
    }

    /**
     * Gets date_stop_local
     *
     * @return mixed|null
     */
    public function getDateStopLocal()
    {
        return $this->container['date_stop_local'];
    }

    /**
     * Sets date_stop_local
     *
     * @param mixed|null $date_stop_local The call end date and time in the local timezone of the account in ISO format.
     *
     * @return self
     */
    public function setDateStopLocal($date_stop_local)
    {
        if (is_null($date_stop_local)) {
            array_push($this->openAPINullablesSetToNull, 'date_stop_local');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_stop_local', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_stop_local'] = $date_stop_local;

        return $this;
    }

    /**
     * Gets date_stop_user
     *
     * @return mixed|null
     */
    public function getDateStopUser()
    {
        return $this->container['date_stop_user'];
    }

    /**
     * Sets date_stop_user
     *
     * @param mixed|null $date_stop_user The call end date and time in the user's timezone in ISO format.
     *
     * @return self
     */
    public function setDateStopUser($date_stop_user)
    {
        if (is_null($date_stop_user)) {
            array_push($this->openAPINullablesSetToNull, 'date_stop_user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_stop_user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_stop_user'] = $date_stop_user;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return mixed|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param mixed|null $direction Whether the call was inbound or outbound.
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            array_push($this->openAPINullablesSetToNull, 'direction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('direction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
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
     * Gets dtmf
     *
     * @return mixed|null
     */
    public function getDtmf()
    {
        return $this->container['dtmf'];
    }

    /**
     * Sets dtmf
     *
     * @param mixed|null $dtmf Smart Tag Lead Scorer digit(s) entered by the caller
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
     * @return mixed|null
     */
    public function getDtmFname()
    {
        return $this->container['dtm_fname'];
    }

    /**
     * Sets dtm_fname
     *
     * @param mixed|null $dtm_fname Smart tag name for the corresponding Lead Scorer digit.
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
     * Gets duration
     *
     * @return mixed|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param mixed|null $duration The total duration of the call in seconds, including ringing time and recorded voice announcements.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            array_push($this->openAPINullablesSetToNull, 'duration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('duration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets first_time_caller
     *
     * @return mixed|null
     */
    public function getFirstTimeCaller()
    {
        return $this->container['first_time_caller'];
    }

    /**
     * Sets first_time_caller
     *
     * @param mixed|null $first_time_caller Whether this is the first time caller or not.
     *
     * @return self
     */
    public function setFirstTimeCaller($first_time_caller)
    {
        if (is_null($first_time_caller)) {
            array_push($this->openAPINullablesSetToNull, 'first_time_caller');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_time_caller', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getFirstTimeCallerAllowableValues();
        if (!is_null($first_time_caller) && !in_array($first_time_caller, $allowedValues, true)) {
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
     * @param mixed|null $id The Call ID of this call
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
     * Gets intelligence
     *
     * @return mixed|null
     */
    public function getIntelligence()
    {
        return $this->container['intelligence'];
    }

    /**
     * Sets intelligence
     *
     * @param mixed|null $intelligence The presence of a transcript for this call. If present, returns a \"1\". If not present, returns null.
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
     * Gets local_timezone
     *
     * @return mixed|null
     */
    public function getLocalTimezone()
    {
        return $this->container['local_timezone'];
    }

    /**
     * Sets local_timezone
     *
     * @param mixed|null $local_timezone Local timezone of the account.
     *
     * @return self
     */
    public function setLocalTimezone($local_timezone)
    {
        if (is_null($local_timezone)) {
            array_push($this->openAPINullablesSetToNull, 'local_timezone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('local_timezone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($local_timezone) && (mb_strlen($local_timezone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $local_timezone when calling DetailedCall., must be smaller than or equal to 50.');
        }

        $this->container['local_timezone'] = $local_timezone;

        return $this;
    }

    /**
     * Gets location
     *
     * @return mixed|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param mixed|null $location The caller's location. For geo callers, this is the caller's phone exchange. For mobile callers, this is \"Mobile\".
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            array_push($this->openAPINullablesSetToNull, 'location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets network
     *
     * @return mixed|null
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param mixed|null $network The caller's network type.
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            array_push($this->openAPINullablesSetToNull, 'network');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('network', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getNetworkAllowableValues();
        if (!is_null($network) && !in_array($network, $allowedValues, true)) {
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
     * Gets notes
     *
     * @return mixed|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param mixed|null $notes Notes added to the call by a user.
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
     * Gets score
     *
     * @return mixed|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param mixed|null $score The score given to the call by a user or automatically as part of a Smart Tag:   * `1` - Poor   * `2` - Average   * `3` - Good
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
     * Gets state
     *
     * @return mixed|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param mixed|null $state The state the caller is calling from. If the country is not divided by states, the 2 character country code is used.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets status
     *
     * @return mixed|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param mixed|null $status The status of the call:   * `answered` - The call has has been answered (by a person or the answer point phone system).   * `abandoned` - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * `missed` - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets tags
     *
     * @return mixed|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param mixed|null $tags tags
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
     * Gets talk_time
     *
     * @return mixed|null
     */
    public function getTalkTime()
    {
        return $this->container['talk_time'];
    }

    /**
     * Sets talk_time
     *
     * @param mixed|null $talk_time The talk time of the call in seconds. If the call is abandoned or missed, the talk time will be null.
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
     * @return mixed|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param mixed|null $target The phone number where this call was answered in E164 format.
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
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return mixed|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param mixed|null $timestamp The call timestamp in milliseconds.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets tracking_name
     *
     * @return mixed|null
     */
    public function getTrackingName()
    {
        return $this->container['tracking_name'];
    }

    /**
     * Sets tracking_name
     *
     * @param mixed|null $tracking_name Unique name to identify the tracking number
     *
     * @return self
     */
    public function setTrackingName($tracking_name)
    {
        if (is_null($tracking_name)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_name'] = $tracking_name;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return mixed|null
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param mixed|null $tracking_number The tracking number the call was received on in E164 format.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets tracking_source
     *
     * @return mixed|null
     */
    public function getTrackingSource()
    {
        return $this->container['tracking_source'];
    }

    /**
     * Sets tracking_source
     *
     * @param mixed|null $tracking_source Grouped source name to identify the call source
     *
     * @return self
     */
    public function setTrackingSource($tracking_source)
    {
        if (is_null($tracking_source)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_source'] = $tracking_source;

        return $this;
    }

    /**
     * Gets user_timezone
     *
     * @return mixed|null
     */
    public function getUserTimezone()
    {
        return $this->container['user_timezone'];
    }

    /**
     * Sets user_timezone
     *
     * @param mixed|null $user_timezone Timezone of the current user.
     *
     * @return self
     */
    public function setUserTimezone($user_timezone)
    {
        if (is_null($user_timezone)) {
            array_push($this->openAPINullablesSetToNull, 'user_timezone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_timezone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($user_timezone) && (mb_strlen($user_timezone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $user_timezone when calling DetailedCall., must be smaller than or equal to 50.');
        }

        $this->container['user_timezone'] = $user_timezone;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return mixed|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param mixed|null $uuid The Call UUID
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            array_push($this->openAPINullablesSetToNull, 'uuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($uuid) && (mb_strlen($uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling DetailedCall., must be smaller than or equal to 50.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets web
     *
     * @return \WildJar\ApiClient\Model\DetailedCallAllOfWeb|null
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param \WildJar\ApiClient\Model\DetailedCallAllOfWeb|null $web web
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


