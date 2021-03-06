<?php
/**
 * DataSourcePermissionDataSourceCreateDataSourceGetDataSourceUpdateDataSourceDeleteDataSourceExecuteDataSourceAdministratePermissions
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
 * DataSourcePermissionDataSourceCreateDataSourceGetDataSourceUpdateDataSourceDeleteDataSourceExecuteDataSourceAdministratePermissions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataSourcePermissionDataSourceCreateDataSourceGetDataSourceUpdateDataSourceDeleteDataSourceExecuteDataSourceAdministratePermissions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataSourcePermissionDataSourceCreateDataSourceGetDataSourceUpdateDataSourceDeleteDataSourceExecuteDataSourceAdministratePermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'owner_id' => 'string',
        'owner' => '\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission',
        'groups' => 'array<string,\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission>',
        'other' => '\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission',
        'anon' => '\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission'
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
        'owner' => null,
        'groups' => null,
        'other' => null,
        'anon' => null
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
        'owner' => 'owner',
        'groups' => 'groups',
        'other' => 'other',
        'anon' => 'anon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'owner' => 'setOwner',
        'groups' => 'setGroups',
        'other' => 'setOther',
        'anon' => 'setAnon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'owner' => 'getOwner',
        'groups' => 'getGroups',
        'other' => 'getOther',
        'anon' => 'getAnon'
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
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['other'] = $data['other'] ?? null;
        $this->container['anon'] = $data['anon'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['owner_id']) && !preg_match("/(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/", $this->container['owner_id'])) {
            $invalidProperties[] = "invalid value for 'owner_id', must be conform to the pattern /(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/.";
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
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {

        if (!is_null($owner_id) && (!preg_match("/(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/", $owner_id))) {
            throw new \InvalidArgumentException("invalid value for $owner_id when calling DataSourcePermissionDataSourceCreateDataSourceGetDataSourceUpdateDataSourceDeleteDataSourceExecuteDataSourceAdministratePermissions., must conform to the pattern /(^[0-9a-f]{24}$|^([0-9a-f]{8}([-][0-9a-f]{4}){3}[-][0-9a-f]{12})$)/.");
        }

        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return array<string,\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission>|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param array<string,\OpenAPI\Client\cloud\fastreport\model\DataSourcePermission>|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {


        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets other
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null
     */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
     * Sets other
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null $other other
     *
     * @return self
     */
    public function setOther($other)
    {
        $this->container['other'] = $other;

        return $this;
    }

    /**
     * Gets anon
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null
     */
    public function getAnon()
    {
        return $this->container['anon'];
    }

    /**
     * Sets anon
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\DataSourcePermission|null $anon anon
     *
     * @return self
     */
    public function setAnon($anon)
    {
        $this->container['anon'] = $anon;

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


