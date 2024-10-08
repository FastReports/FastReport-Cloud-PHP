<?php
/**
 * UpdateUserVM
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
 * UpdateUserVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateUserVM extends CloudBaseVM
{
    public const DISCRIMINATOR = 't';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateUserVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_permission' => '\OpenAPI\Client\cloud\fastreport\model\AdminPermission',
        'email' => 'string',
        'groups' => 'string[]',
        'is_admin' => 'bool',
        'name' => 'string',
        'password' => 'string',
        'provider' => 'string',
        'subscriptions' => 'string[]',
        'username' => 'string',
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
        'admin_permission' => null,
        'email' => 'email',
        'groups' => null,
        'is_admin' => null,
        'name' => null,
        'password' => null,
        'provider' => null,
        'subscriptions' => null,
        'username' => null,
        't' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'admin_permission' => false,
        'email' => true,
        'groups' => true,
        'is_admin' => true,
        'name' => true,
        'password' => true,
        'provider' => true,
        'subscriptions' => true,
        'username' => true,
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
        'admin_permission' => 'adminPermission',
        'email' => 'email',
        'groups' => 'groups',
        'is_admin' => 'isAdmin',
        'name' => 'name',
        'password' => 'password',
        'provider' => 'provider',
        'subscriptions' => 'subscriptions',
        'username' => 'username',
        't' => '$t'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_permission' => 'setAdminPermission',
        'email' => 'setEmail',
        'groups' => 'setGroups',
        'is_admin' => 'setIsAdmin',
        'name' => 'setName',
        'password' => 'setPassword',
        'provider' => 'setProvider',
        'subscriptions' => 'setSubscriptions',
        'username' => 'setUsername',
        't' => 'setT'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_permission' => 'getAdminPermission',
        'email' => 'getEmail',
        'groups' => 'getGroups',
        'is_admin' => 'getIsAdmin',
        'name' => 'getName',
        'password' => 'getPassword',
        'provider' => 'getProvider',
        'subscriptions' => 'getSubscriptions',
        'username' => 'getUsername',
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

        $this->setIfExists('admin_permission', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('is_admin', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('subscriptions', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 250)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['groups']) && (count($this->container['groups']) > 100)) {
            $invalidProperties[] = "invalid value for 'groups', number of items must be less than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 50)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 0)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 50)) {
            $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 0)) {
            $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['subscriptions']) && (count($this->container['subscriptions']) > 100)) {
            $invalidProperties[] = "invalid value for 'subscriptions', number of items must be less than or equal to 100.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 50)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 0)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 0.";
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
     * Gets admin_permission
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\AdminPermission|null
     */
    public function getAdminPermission()
    {
        return $this->container['admin_permission'];
    }

    /**
     * Sets admin_permission
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\AdminPermission|null $admin_permission admin_permission
     *
     * @return self
     */
    public function setAdminPermission($admin_permission)
    {
        if (is_null($admin_permission)) {
            throw new \InvalidArgumentException('non-nullable admin_permission cannot be null');
        }
        $this->container['admin_permission'] = $admin_permission;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && (mb_strlen($email) > 250)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UpdateUserVM., must be smaller than or equal to 250.');
        }
        if (!is_null($email) && (mb_strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling UpdateUserVM., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        if (is_null($groups)) {
            array_push($this->openAPINullablesSetToNull, 'groups');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('groups', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($groups) && (count($groups) > 100)) {
            throw new \InvalidArgumentException('invalid value for $groups when calling UpdateUserVM., number of items must be less than or equal to 100.');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets is_admin
     *
     * @return bool|null
     */
    public function getIsAdmin()
    {
        return $this->container['is_admin'];
    }

    /**
     * Sets is_admin
     *
     * @param bool|null $is_admin is_admin
     *
     * @return self
     */
    public function setIsAdmin($is_admin)
    {
        if (is_null($is_admin)) {
            array_push($this->openAPINullablesSetToNull, 'is_admin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_admin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_admin'] = $is_admin;

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
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateUserVM., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateUserVM., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            array_push($this->openAPINullablesSetToNull, 'password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($password) && (mb_strlen($password) > 50)) {
            throw new \InvalidArgumentException('invalid length for $password when calling UpdateUserVM., must be smaller than or equal to 50.');
        }
        if (!is_null($password) && (mb_strlen($password) < 0)) {
            throw new \InvalidArgumentException('invalid length for $password when calling UpdateUserVM., must be bigger than or equal to 0.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            array_push($this->openAPINullablesSetToNull, 'provider');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($provider) && (mb_strlen($provider) > 50)) {
            throw new \InvalidArgumentException('invalid length for $provider when calling UpdateUserVM., must be smaller than or equal to 50.');
        }
        if (!is_null($provider) && (mb_strlen($provider) < 0)) {
            throw new \InvalidArgumentException('invalid length for $provider when calling UpdateUserVM., must be bigger than or equal to 0.');
        }

        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return string[]|null
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param string[]|null $subscriptions subscriptions
     *
     * @return self
     */
    public function setSubscriptions($subscriptions)
    {
        if (is_null($subscriptions)) {
            array_push($this->openAPINullablesSetToNull, 'subscriptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subscriptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($subscriptions) && (count($subscriptions) > 100)) {
            throw new \InvalidArgumentException('invalid value for $subscriptions when calling UpdateUserVM., number of items must be less than or equal to 100.');
        }
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            array_push($this->openAPINullablesSetToNull, 'username');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('username', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($username) && (mb_strlen($username) > 50)) {
            throw new \InvalidArgumentException('invalid length for $username when calling UpdateUserVM., must be smaller than or equal to 50.');
        }
        if (!is_null($username) && (mb_strlen($username) < 0)) {
            throw new \InvalidArgumentException('invalid length for $username when calling UpdateUserVM., must be bigger than or equal to 0.');
        }

        $this->container['username'] = $username;

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


