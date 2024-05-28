<?php
/**
 * WebConfigurationAllOfConf
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
 * WebConfigurationAllOfConf Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 * @implements \ArrayAccess<string, mixed>
 */
class WebConfigurationAllOfConf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebConfiguration_allOf_conf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account' => 'string',
        'delete' => 'string',
        'utmtag' => 'string',
        'did' => 'string',
        'content' => 'string',
        'content_type' => 'string',
        'content_format' => 'string',
        'medium' => 'string',
        'source' => 'string',
        'campaign' => 'string',
        'keyword' => 'string',
        'priority' => 'string'
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
        'delete' => null,
        'utmtag' => null,
        'did' => null,
        'content' => null,
        'content_type' => null,
        'content_format' => null,
        'medium' => null,
        'source' => null,
        'campaign' => null,
        'keyword' => null,
        'priority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'account' => false,
        'delete' => false,
        'utmtag' => false,
        'did' => false,
        'content' => false,
        'content_type' => false,
        'content_format' => true,
        'medium' => false,
        'source' => false,
        'campaign' => true,
        'keyword' => true,
        'priority' => false
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
        'delete' => 'delete',
        'utmtag' => 'utmtag',
        'did' => 'did',
        'content' => 'content',
        'content_type' => 'contentType',
        'content_format' => 'contentFormat',
        'medium' => 'medium',
        'source' => 'source',
        'campaign' => 'campaign',
        'keyword' => 'keyword',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account' => 'setAccount',
        'delete' => 'setDelete',
        'utmtag' => 'setUtmtag',
        'did' => 'setDid',
        'content' => 'setContent',
        'content_type' => 'setContentType',
        'content_format' => 'setContentFormat',
        'medium' => 'setMedium',
        'source' => 'setSource',
        'campaign' => 'setCampaign',
        'keyword' => 'setKeyword',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account' => 'getAccount',
        'delete' => 'getDelete',
        'utmtag' => 'getUtmtag',
        'did' => 'getDid',
        'content' => 'getContent',
        'content_type' => 'getContentType',
        'content_format' => 'getContentFormat',
        'medium' => 'getMedium',
        'source' => 'getSource',
        'campaign' => 'getCampaign',
        'keyword' => 'getKeyword',
        'priority' => 'getPriority'
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

    public const CONTENT_TYPE_TEXT = 'text';
    public const CONTENT_TYPE_CUSTOM = 'custom';
    public const CONTENT_TYPE_IMAGE = 'image';
    public const CONTENT_TYPE_JS = 'js';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_TEXT,
            self::CONTENT_TYPE_CUSTOM,
            self::CONTENT_TYPE_IMAGE,
            self::CONTENT_TYPE_JS,
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
        $this->setIfExists('delete', $data ?? [], '');
        $this->setIfExists('utmtag', $data ?? [], '');
        $this->setIfExists('did', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('content_format', $data ?? [], null);
        $this->setIfExists('medium', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('keyword', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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

        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'content_type', must be one of '%s'",
                $this->container['content_type'],
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The ID for the DNI configuration criteria. Leave empty when adding a criteria.
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
     * @param string|null $account The account ID.
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
     * Gets delete
     *
     * @return string|null
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param string|null $delete Use the value `\"yes\"` if deleting a DNI criteria. If omitted or an empty string is sent, the criteria is updated.
     *
     * @return self
     */
    public function setDelete($delete)
    {
        if (is_null($delete)) {
            throw new \InvalidArgumentException('non-nullable delete cannot be null');
        }
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets utmtag
     *
     * @return string|null
     */
    public function getUtmtag()
    {
        return $this->container['utmtag'];
    }

    /**
     * Sets utmtag
     *
     * @param string|null $utmtag The UTM tags to configure for this criteria.
     *
     * @return self
     */
    public function setUtmtag($utmtag)
    {
        if (is_null($utmtag)) {
            throw new \InvalidArgumentException('non-nullable utmtag cannot be null');
        }
        $this->container['utmtag'] = $utmtag;

        return $this;
    }

    /**
     * Gets did
     *
     * @return string|null
     */
    public function getDid()
    {
        return $this->container['did'];
    }

    /**
     * Sets did
     *
     * @param string|null $did The tracking number to show on the website for this criteria in E164 format.
     *
     * @return self
     */
    public function setDid($did)
    {
        if (is_null($did)) {
            throw new \InvalidArgumentException('non-nullable did cannot be null');
        }
        $this->container['did'] = $did;

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
     * @param string|null $content The number appearing on the website in E164 format. This is the number which will be swapped out with a tracking number.
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type The content type of the number being swapped on the website:   * `text` - A phone number in the text of the website.   * `custom` - A piece of custom text on the website (ie. \"Click to call now!\").   * `image` - An image containing a phone number.   * `js` - A custom piece of javascript.
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            throw new \InvalidArgumentException('non-nullable content_type cannot be null');
        }
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'content_type', must be one of '%s'",
                    $content_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_format
     *
     * @return string|null
     */
    public function getContentFormat()
    {
        return $this->container['content_format'];
    }

    /**
     * Sets content_format
     *
     * @param string|null $content_format The content of a custom return - for example, if overriding the local number formatting or returning text - or javascript to be run.
     *
     * @return self
     */
    public function setContentFormat($content_format)
    {
        if (is_null($content_format)) {
            array_push($this->openAPINullablesSetToNull, 'content_format');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_format', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['content_format'] = $content_format;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return string|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string|null $medium The visitor's medium to show this number for.
     *
     * @return self
     */
    public function setMedium($medium)
    {
        if (is_null($medium)) {
            throw new \InvalidArgumentException('non-nullable medium cannot be null');
        }
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source The visitor's source to show this number for.
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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
     * @param string|null $campaign The visitor's utm_campaign parameter value to show this number for.
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
     * @param string|null $keyword The visitor's keyword or utm_term parameter value to swap this number for.
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
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority The priority assigned to this criteria. The higher the number, the higher priority if there are multiple rules for a source, medium or campaign.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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


