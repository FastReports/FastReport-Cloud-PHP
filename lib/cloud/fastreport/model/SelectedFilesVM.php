<?php
/**
 * SelectedFilesVM
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
 * SelectedFilesVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SelectedFilesVM extends CloudBaseVM
{
    public const DISCRIMINATOR = 't';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SelectedFilesVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_all_selected' => 'bool',
        'folder_id' => 'string',
        'search_pattern' => 'string',
        'use_regex' => 'bool',
        'files' => 'string[]',
        'folders' => 'string[]',
        'path' => 'string',
        'is_bin' => 'bool',
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
        'is_all_selected' => null,
        'folder_id' => null,
        'search_pattern' => null,
        'use_regex' => null,
        'files' => null,
        'folders' => null,
        'path' => null,
        'is_bin' => null,
        't' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_all_selected' => false,
        'folder_id' => true,
        'search_pattern' => true,
        'use_regex' => false,
        'files' => true,
        'folders' => true,
        'path' => true,
        'is_bin' => false,
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
        'is_all_selected' => 'isAllSelected',
        'folder_id' => 'folderId',
        'search_pattern' => 'searchPattern',
        'use_regex' => 'useRegex',
        'files' => 'files',
        'folders' => 'folders',
        'path' => 'path',
        'is_bin' => 'isBin',
        't' => '$t'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_all_selected' => 'setIsAllSelected',
        'folder_id' => 'setFolderId',
        'search_pattern' => 'setSearchPattern',
        'use_regex' => 'setUseRegex',
        'files' => 'setFiles',
        'folders' => 'setFolders',
        'path' => 'setPath',
        'is_bin' => 'setIsBin',
        't' => 'setT'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_all_selected' => 'getIsAllSelected',
        'folder_id' => 'getFolderId',
        'search_pattern' => 'getSearchPattern',
        'use_regex' => 'getUseRegex',
        'files' => 'getFiles',
        'folders' => 'getFolders',
        'path' => 'getPath',
        'is_bin' => 'getIsBin',
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

        $this->setIfExists('is_all_selected', $data ?? [], null);
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('search_pattern', $data ?? [], null);
        $this->setIfExists('use_regex', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
        $this->setIfExists('folders', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('is_bin', $data ?? [], null);
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

        if (!is_null($this->container['folder_id']) && !preg_match("/^[A-Fa-f0-9]{24}$/", $this->container['folder_id'])) {
            $invalidProperties[] = "invalid value for 'folder_id', must be conform to the pattern /^[A-Fa-f0-9]{24}$/.";
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
     * Gets is_all_selected
     *
     * @return bool|null
     */
    public function getIsAllSelected()
    {
        return $this->container['is_all_selected'];
    }

    /**
     * Sets is_all_selected
     *
     * @param bool|null $is_all_selected is_all_selected
     *
     * @return self
     */
    public function setIsAllSelected($is_all_selected)
    {
        if (is_null($is_all_selected)) {
            throw new \InvalidArgumentException('non-nullable is_all_selected cannot be null');
        }
        $this->container['is_all_selected'] = $is_all_selected;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id folder_id
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            array_push($this->openAPINullablesSetToNull, 'folder_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('folder_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($folder_id) && (!preg_match("/^[A-Fa-f0-9]{24}$/", ObjectSerializer::toString($folder_id)))) {
            throw new \InvalidArgumentException("invalid value for \$folder_id when calling SelectedFilesVM., must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }

        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets search_pattern
     *
     * @return string|null
     */
    public function getSearchPattern()
    {
        return $this->container['search_pattern'];
    }

    /**
     * Sets search_pattern
     *
     * @param string|null $search_pattern search_pattern
     *
     * @return self
     */
    public function setSearchPattern($search_pattern)
    {
        if (is_null($search_pattern)) {
            array_push($this->openAPINullablesSetToNull, 'search_pattern');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('search_pattern', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['search_pattern'] = $search_pattern;

        return $this;
    }

    /**
     * Gets use_regex
     *
     * @return bool|null
     */
    public function getUseRegex()
    {
        return $this->container['use_regex'];
    }

    /**
     * Sets use_regex
     *
     * @param bool|null $use_regex use_regex
     *
     * @return self
     */
    public function setUseRegex($use_regex)
    {
        if (is_null($use_regex)) {
            throw new \InvalidArgumentException('non-nullable use_regex cannot be null');
        }
        $this->container['use_regex'] = $use_regex;

        return $this;
    }

    /**
     * Gets files
     *
     * @return string[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param string[]|null $files files
     *
     * @return self
     */
    public function setFiles($files)
    {
        if (is_null($files)) {
            array_push($this->openAPINullablesSetToNull, 'files');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('files', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets folders
     *
     * @return string[]|null
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param string[]|null $folders folders
     *
     * @return self
     */
    public function setFolders($folders)
    {
        if (is_null($folders)) {
            array_push($this->openAPINullablesSetToNull, 'folders');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('folders', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['folders'] = $folders;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            array_push($this->openAPINullablesSetToNull, 'path');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('path', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets is_bin
     *
     * @return bool|null
     */
    public function getIsBin()
    {
        return $this->container['is_bin'];
    }

    /**
     * Sets is_bin
     *
     * @param bool|null $is_bin is_bin
     *
     * @return self
     */
    public function setIsBin($is_bin)
    {
        if (is_null($is_bin)) {
            throw new \InvalidArgumentException('non-nullable is_bin cannot be null');
        }
        $this->container['is_bin'] = $is_bin;

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


