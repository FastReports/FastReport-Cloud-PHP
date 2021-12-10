<?php
/**
 * ExportReportTaskVM
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
 * ExportReportTaskVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExportReportTaskVM implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportReportTaskVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'export_parameters' => 'array<string,string>',
        'format' => '\OpenAPI\Client\cloud\fastreport\model\ExportFormat',
        'pages_count' => 'int',
        'name' => 'string',
        'subscription_id' => 'string',
        'type' => '\OpenAPI\Client\cloud\fastreport\model\TaskType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'export_parameters' => null,
        'format' => null,
        'pages_count' => 'int32',
        'name' => null,
        'subscription_id' => null,
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
        'export_parameters' => 'exportParameters',
        'format' => 'format',
        'pages_count' => 'pagesCount',
        'name' => 'name',
        'subscription_id' => 'subscriptionId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'export_parameters' => 'setExportParameters',
        'format' => 'setFormat',
        'pages_count' => 'setPagesCount',
        'name' => 'setName',
        'subscription_id' => 'setSubscriptionId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'export_parameters' => 'getExportParameters',
        'format' => 'getFormat',
        'pages_count' => 'getPagesCount',
        'name' => 'getName',
        'subscription_id' => 'getSubscriptionId',
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
        $this->container['export_parameters'] = $data['export_parameters'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['pages_count'] = $data['pages_count'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['subscription_id'] = $data['subscription_id'] ?? null;
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

        if (!is_null($this->container['pages_count']) && ($this->container['pages_count'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'pages_count', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['pages_count']) && ($this->container['pages_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'pages_count', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['subscription_id']) && !preg_match("/(^$)|(^[A-Fa-f0-9]{24}$)/", $this->container['subscription_id'])) {
            $invalidProperties[] = "invalid value for 'subscription_id', must be conform to the pattern /(^$)|(^[A-Fa-f0-9]{24}$)/.";
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
     * Gets export_parameters
     *
     * @return array<string,string>|null
     */
    public function getExportParameters()
    {
        return $this->container['export_parameters'];
    }

    /**
     * Sets export_parameters
     *
     * @param array<string,string>|null $export_parameters export_parameters
     *
     * @return self
     */
    public function setExportParameters($export_parameters)
    {


        $this->container['export_parameters'] = $export_parameters;

        return $this;
    }

    /**
     * Gets format
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\ExportFormat|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\ExportFormat|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets pages_count
     *
     * @return int|null
     */
    public function getPagesCount()
    {
        return $this->container['pages_count'];
    }

    /**
     * Sets pages_count
     *
     * @param int|null $pages_count pages_count
     *
     * @return self
     */
    public function setPagesCount($pages_count)
    {

        if (!is_null($pages_count) && ($pages_count > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $pages_count when calling ExportReportTaskVM., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($pages_count) && ($pages_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $pages_count when calling ExportReportTaskVM., must be bigger than or equal to 0.');
        }

        $this->container['pages_count'] = $pages_count;

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
            throw new \InvalidArgumentException('invalid length for $name when calling ExportReportTaskVM., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExportReportTaskVM., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string|null $subscription_id subscription_id
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {

        if (!is_null($subscription_id) && (!preg_match("/(^$)|(^[A-Fa-f0-9]{24}$)/", $subscription_id))) {
            throw new \InvalidArgumentException("invalid value for $subscription_id when calling ExportReportTaskVM., must conform to the pattern /(^$)|(^[A-Fa-f0-9]{24}$)/.");
        }

        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\TaskType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\TaskType|null $type type
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


