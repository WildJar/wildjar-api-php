<?php
/**
 * ActionBranchFull
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
 * ActionBranchFull Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class ActionBranchFull implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionBranchFull';

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
        'location_id' => 'mixed',
        'code' => 'mixed',
        'address' => 'mixed',
        'postcode' => 'mixed',
        'state' => 'mixed',
        'country' => 'mixed',
        'lat' => 'mixed',
        'lon' => 'mixed',
        'auto_routing' => 'mixed',
        'force_account' => 'mixed',
        'action' => 'mixed'
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
        'location_id' => null,
        'code' => null,
        'address' => null,
        'postcode' => null,
        'state' => null,
        'country' => null,
        'lat' => 'float',
        'lon' => 'float',
        'auto_routing' => null,
        'force_account' => null,
        'action' => null
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
        'location_id' => true,
        'code' => true,
        'address' => true,
        'postcode' => true,
        'state' => true,
        'country' => true,
        'lat' => true,
        'lon' => true,
        'auto_routing' => true,
        'force_account' => true,
        'action' => true
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
        'location_id' => 'locationId',
        'code' => 'code',
        'address' => 'address',
        'postcode' => 'postcode',
        'state' => 'state',
        'country' => 'country',
        'lat' => 'lat',
        'lon' => 'lon',
        'auto_routing' => 'autoRouting',
        'force_account' => 'forceAccount',
        'action' => 'action'
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
        'location_id' => 'setLocationId',
        'code' => 'setCode',
        'address' => 'setAddress',
        'postcode' => 'setPostcode',
        'state' => 'setState',
        'country' => 'setCountry',
        'lat' => 'setLat',
        'lon' => 'setLon',
        'auto_routing' => 'setAutoRouting',
        'force_account' => 'setForceAccount',
        'action' => 'setAction'
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
        'location_id' => 'getLocationId',
        'code' => 'getCode',
        'address' => 'getAddress',
        'postcode' => 'getPostcode',
        'state' => 'getState',
        'country' => 'getCountry',
        'lat' => 'getLat',
        'lon' => 'getLon',
        'auto_routing' => 'getAutoRouting',
        'force_account' => 'getForceAccount',
        'action' => 'getAction'
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
    public const AUTO_ROUTING_YES = 'yes';
    public const AUTO_ROUTING_NO = 'no';
    public const ACTION_BRANCH = 'branch';

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
    public function getAutoRoutingAllowableValues()
    {
        return [
            self::AUTO_ROUTING_YES,
            self::AUTO_ROUTING_NO,
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
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('lat', $data ?? [], null);
        $this->setIfExists('lon', $data ?? [], null);
        $this->setIfExists('auto_routing', $data ?? [], null);
        $this->setIfExists('force_account', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
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

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) > 100)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 8)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 20)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        $allowedValues = $this->getAutoRoutingAllowableValues();
        if (!is_null($this->container['auto_routing']) && !in_array($this->container['auto_routing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auto_routing', must be one of '%s'",
                $this->container['auto_routing'],
                implode("', '", $allowedValues)
            );
        }

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
            throw new \InvalidArgumentException('invalid length for $name when calling ActionBranchFull., must be smaller than or equal to 100.');
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
     * Gets location_id
     *
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param mixed $location_id The location action ID the branch belongs to
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            array_push($this->openAPINullablesSetToNull, 'location_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param mixed $code The branch code used to identify this branch in the routing.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($code) && (mb_strlen($code) > 100)) {
            throw new \InvalidArgumentException('invalid length for $code when calling ActionBranchFull., must be smaller than or equal to 100.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets address
     *
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param mixed|null $address The full address of the branch.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return mixed|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param mixed|null $postcode The postcode of the branch.
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            array_push($this->openAPINullablesSetToNull, 'postcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($postcode) && (mb_strlen($postcode) > 8)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling ActionBranchFull., must be smaller than or equal to 8.');
        }

        $this->container['postcode'] = $postcode;

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
     * @param mixed|null $state The state the branch is located in.
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
        if (!is_null($state) && (mb_strlen($state) > 20)) {
            throw new \InvalidArgumentException('invalid length for $state when calling ActionBranchFull., must be smaller than or equal to 20.');
        }

        $this->container['state'] = $state;

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
     * @param mixed|null $country The 2 character country code (ie. AU, GB, NZ, US) the branch is located in. Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information.
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
        if (!is_null($country) && (mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ActionBranchFull., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets lat
     *
     * @return mixed|null
     */
    public function getLat()
    {
        return $this->container['lat'];
    }

    /**
     * Sets lat
     *
     * @param mixed|null $lat The latitude of the branch.
     *
     * @return self
     */
    public function setLat($lat)
    {
        if (is_null($lat)) {
            array_push($this->openAPINullablesSetToNull, 'lat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lat'] = $lat;

        return $this;
    }

    /**
     * Gets lon
     *
     * @return mixed|null
     */
    public function getLon()
    {
        return $this->container['lon'];
    }

    /**
     * Sets lon
     *
     * @param mixed|null $lon The longitude of the branch.
     *
     * @return self
     */
    public function setLon($lon)
    {
        if (is_null($lon)) {
            array_push($this->openAPINullablesSetToNull, 'lon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lon'] = $lon;

        return $this;
    }

    /**
     * Gets auto_routing
     *
     * @return mixed|null
     */
    public function getAutoRouting()
    {
        return $this->container['auto_routing'];
    }

    /**
     * Sets auto_routing
     *
     * @param mixed|null $auto_routing Whether the branch will be included in the automatic routing.
     *
     * @return self
     */
    public function setAutoRouting($auto_routing)
    {
        if (is_null($auto_routing)) {
            array_push($this->openAPINullablesSetToNull, 'auto_routing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_routing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getAutoRoutingAllowableValues();
        if (!is_null($auto_routing) && !in_array($auto_routing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auto_routing', must be one of '%s'",
                    $auto_routing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_routing'] = $auto_routing;

        return $this;
    }

    /**
     * Gets force_account
     *
     * @return mixed|null
     */
    public function getForceAccount()
    {
        return $this->container['force_account'];
    }

    /**
     * Sets force_account
     *
     * @param mixed|null $force_account The account ID where calls to this branch will be stored for reporting purposes. If the value is \"0\", calls will be stored in the account of the location action.
     *
     * @return self
     */
    public function setForceAccount($force_account)
    {
        if (is_null($force_account)) {
            array_push($this->openAPINullablesSetToNull, 'force_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('force_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['force_account'] = $force_account;

        return $this;
    }

    /**
     * Gets action
     *
     * @return mixed|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param mixed|null $action The action type.
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            array_push($this->openAPINullablesSetToNull, 'action');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('action', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
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


