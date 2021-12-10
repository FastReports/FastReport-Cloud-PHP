<?php
/**
 * CreateDataSourceAdminVM
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FastReport Cloud
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CreateDataSourceAdminVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateDataSourceAdminVM implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDataSourceAdminVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'name' => 'string',
        'connection_string' => 'string',
        'subscription_id' => 'string',
        'connection_type' => '\OpenAPI\Client\cloud\fastreport\model\DataSourceConnectionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'name' => null,
        'connection_string' => null,
        'subscription_id' => null,
        'connection_type' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'owner_id' => 'ownerId',
        'name' => 'name',
        'connection_string' => 'connectionString',
        'subscription_id' => 'subscriptionId',
        'connection_type' => 'connectionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'name' => 'setName',
        'connection_string' => 'setConnectionString',
        'subscription_id' => 'setSubscriptionId',
        'connection_type' => 'setConnectionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'name' => 'getName',
        'connection_string' => 'getConnectionString',
        'subscription_id' => 'getSubscriptionId',
        'connection_type' => 'getConnectionType'
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
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['connection_string'] = $data['connection_string'] ?? null;
        $this->container['subscription_id'] = $data['subscription_id'] ?? null;
        $this->container['connection_type'] = $data['connection_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if (!preg_match("/(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/", $this->container['owner_id'])) {
            $invalidProperties[] = "invalid value for 'owner_id', must be conform to the pattern /(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['connection_string'] === null) {
            $invalidProperties[] = "'connection_string' can't be null";
        }
        if ((mb_strlen($this->container['connection_string']) > 5000)) {
            $invalidProperties[] = "invalid value for 'connection_string', the character length must be smaller than or equal to 5000.";
        }

        if ((mb_strlen($this->container['connection_string']) < 0)) {
            $invalidProperties[] = "invalid value for 'connection_string', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if (!preg_match("/^[A-Fa-f0-9]{24}$/", $this->container['subscription_id'])) {
            $invalidProperties[] = "invalid value for 'subscription_id', must be conform to the pattern /^[A-Fa-f0-9]{24}$/.";
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
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {

        if ((!preg_match("/(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/", $owner_id))) {
            throw new \InvalidArgumentException("invalid value for $owner_id when calling CreateDataSourceAdminVM., must conform to the pattern /(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/.");
        }

        $this->container['owner_id'] = $owner_id;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateDataSourceAdminVM., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateDataSourceAdminVM., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets connection_string
     *
     * @return string
     */
    public function getConnectionString()
    {
        return $this->container['connection_string'];
    }

    /**
     * Sets connection_string
     *
     * @param string $connection_string connection_string
     *
     * @return self
     */
    public function setConnectionString($connection_string)
    {
        if ((mb_strlen($connection_string) > 5000)) {
            throw new \InvalidArgumentException('invalid length for $connection_string when calling CreateDataSourceAdminVM., must be smaller than or equal to 5000.');
        }
        if ((mb_strlen($connection_string) < 0)) {
            throw new \InvalidArgumentException('invalid length for $connection_string when calling CreateDataSourceAdminVM., must be bigger than or equal to 0.');
        }

        $this->container['connection_string'] = $connection_string;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {

        if ((!preg_match("/^[A-Fa-f0-9]{24}$/", $subscription_id))) {
            throw new \InvalidArgumentException("invalid value for $subscription_id when calling CreateDataSourceAdminVM., must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }

        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets connection_type
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\DataSourceConnectionType|null
     */
    public function getConnectionType()
    {
        return $this->container['connection_type'];
    }

    /**
     * Sets connection_type
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\DataSourceConnectionType|null $connection_type connection_type
     *
     * @return self
     */
    public function setConnectionType($connection_type)
    {
        $this->container['connection_type'] = $connection_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

