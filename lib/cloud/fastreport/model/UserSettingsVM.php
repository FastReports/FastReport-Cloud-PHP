<?php
/**
 * UserSettingsVM
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
 * UserSettingsVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserSettingsVM implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettingsVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'profile_visibility' => '\OpenAPI\Client\cloud\fastreport\model\ProfileVisibility',
        'default_subscription' => 'string',
        'show_hidden_files_and_folders' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'profile_visibility' => null,
        'default_subscription' => null,
        'show_hidden_files_and_folders' => null
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
        'profile_visibility' => 'profileVisibility',
        'default_subscription' => 'defaultSubscription',
        'show_hidden_files_and_folders' => 'showHiddenFilesAndFolders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile_visibility' => 'setProfileVisibility',
        'default_subscription' => 'setDefaultSubscription',
        'show_hidden_files_and_folders' => 'setShowHiddenFilesAndFolders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile_visibility' => 'getProfileVisibility',
        'default_subscription' => 'getDefaultSubscription',
        'show_hidden_files_and_folders' => 'getShowHiddenFilesAndFolders'
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
        $this->container['profile_visibility'] = $data['profile_visibility'] ?? null;
        $this->container['default_subscription'] = $data['default_subscription'] ?? null;
        $this->container['show_hidden_files_and_folders'] = $data['show_hidden_files_and_folders'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['default_subscription']) && !preg_match("/^[A-Fa-f0-9]{24}$/", $this->container['default_subscription'])) {
            $invalidProperties[] = "invalid value for 'default_subscription', must be conform to the pattern /^[A-Fa-f0-9]{24}$/.";
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
     * Gets profile_visibility
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\ProfileVisibility|null
     */
    public function getProfileVisibility()
    {
        return $this->container['profile_visibility'];
    }

    /**
     * Sets profile_visibility
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\ProfileVisibility|null $profile_visibility profile_visibility
     *
     * @return self
     */
    public function setProfileVisibility($profile_visibility)
    {
        $this->container['profile_visibility'] = $profile_visibility;

        return $this;
    }

    /**
     * Gets default_subscription
     *
     * @return string|null
     */
    public function getDefaultSubscription()
    {
        return $this->container['default_subscription'];
    }

    /**
     * Sets default_subscription
     *
     * @param string|null $default_subscription default_subscription
     *
     * @return self
     */
    public function setDefaultSubscription($default_subscription)
    {

        if (!is_null($default_subscription) && (!preg_match("/^[A-Fa-f0-9]{24}$/", $default_subscription))) {
            throw new \InvalidArgumentException("invalid value for $default_subscription when calling UserSettingsVM., must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }

        $this->container['default_subscription'] = $default_subscription;

        return $this;
    }

    /**
     * Gets show_hidden_files_and_folders
     *
     * @return bool|null
     */
    public function getShowHiddenFilesAndFolders()
    {
        return $this->container['show_hidden_files_and_folders'];
    }

    /**
     * Sets show_hidden_files_and_folders
     *
     * @param bool|null $show_hidden_files_and_folders show_hidden_files_and_folders
     *
     * @return self
     */
    public function setShowHiddenFilesAndFolders($show_hidden_files_and_folders)
    {
        $this->container['show_hidden_files_and_folders'] = $show_hidden_files_and_folders;

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

