<?php
/**
 * ExportReportTaskVM
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ExportReportTaskVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExportReportTaskVM extends TransformTaskBaseVM
{
    public const DISCRIMINATOR = 't';

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
        't' => 'string'
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
        't' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'export_parameters' => true,
        'format' => false,
        'pages_count' => false,
        't' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'export_parameters' => 'exportParameters',
        'format' => 'format',
        'pages_count' => 'pagesCount',
        't' => '$t'
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
        't' => 'setT'
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
        't' => 'getT'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('export_parameters', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('pages_count', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['t'] = static::$openAPIModelName;
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
        $invalidProperties = parent::listInvalidProperties();

        if (!is_null($this->container['pages_count']) && ($this->container['pages_count'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'pages_count', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['pages_count']) && ($this->container['pages_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'pages_count', must be bigger than or equal to 0.";
        }

        if ($this->container['t'] === null) {
            $invalidProperties[] = "'t' can't be null";
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
        if (is_null($export_parameters)) {
            array_push($this->openAPINullablesSetToNull, 'export_parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('export_parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


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
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
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
        if (is_null($pages_count)) {
            throw new \InvalidArgumentException('non-nullable pages_count cannot be null');
        }

        if (($pages_count > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $pages_count when calling ExportReportTaskVM., must be smaller than or equal to 2147483647.');
        }
        if (($pages_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $pages_count when calling ExportReportTaskVM., must be bigger than or equal to 0.');
        }

        $this->container['pages_count'] = $pages_count;

        return $this;
    }

    /**
     * Gets t
     *
     * @return string
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param string $t t
     *
     * @return self
     */
    public function setT($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

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


