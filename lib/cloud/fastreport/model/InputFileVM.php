<?php
/**
 * InputFileVM
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
 * InputFileVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InputFileVM implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InputFileVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity_id' => 'string',
        'file_name' => 'string',
        'type' => '\OpenAPI\Client\cloud\fastreport\model\FileKind'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entity_id' => null,
        'file_name' => null,
        'type' => null
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
        'entity_id' => 'entityId',
        'file_name' => 'fileName',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity_id' => 'setEntityId',
        'file_name' => 'setFileName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity_id' => 'getEntityId',
        'file_name' => 'getFileName',
        'type' => 'getType'
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
        $this->container['entity_id'] = $data['entity_id'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['entity_id']) && !preg_match("/^[A-Fa-f0-9]{24}$/", $this->container['entity_id'])) {
            $invalidProperties[] = "invalid value for 'entity_id', must be conform to the pattern /^[A-Fa-f0-9]{24}$/.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) > 250)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
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
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id entity_id
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {

        if (!is_null($entity_id) && (!preg_match("/^[A-Fa-f0-9]{24}$/", $entity_id))) {
            throw new \InvalidArgumentException("invalid value for $entity_id when calling InputFileVM., must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }

        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (!is_null($file_name) && (mb_strlen($file_name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling InputFileVM., must be smaller than or equal to 250.');
        }
        if (!is_null($file_name) && (mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling InputFileVM., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\FileKind|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\FileKind|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


