<?php
/**
 * EmailTaskVM
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
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\cloud\fastreport\model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EmailTaskVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailTaskVM extends TransportTaskBaseVM
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailTaskVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => 'string',
        'enable_ssl' => 'bool',
        'from' => 'string',
        'is_body_html' => 'bool',
        'port' => 'int',
        'server' => 'string',
        'subject' => 'string',
        'to' => 'string[]',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'body' => null,
        'enable_ssl' => null,
        'from' => 'email',
        'is_body_html' => null,
        'port' => 'int32',
        'server' => null,
        'subject' => null,
        'to' => null,
        'username' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'body' => true,
		'enable_ssl' => false,
		'from' => true,
		'is_body_html' => false,
		'port' => false,
		'server' => true,
		'subject' => true,
		'to' => true,
		'username' => true
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
        'body' => 'body',
        'enable_ssl' => 'enableSsl',
        'from' => 'from',
        'is_body_html' => 'isBodyHtml',
        'port' => 'port',
        'server' => 'server',
        'subject' => 'subject',
        'to' => 'to',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'enable_ssl' => 'setEnableSsl',
        'from' => 'setFrom',
        'is_body_html' => 'setIsBodyHtml',
        'port' => 'setPort',
        'server' => 'setServer',
        'subject' => 'setSubject',
        'to' => 'setTo',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'enable_ssl' => 'getEnableSsl',
        'from' => 'getFrom',
        'is_body_html' => 'getIsBodyHtml',
        'port' => 'getPort',
        'server' => 'getServer',
        'subject' => 'getSubject',
        'to' => 'getTo',
        'username' => 'getUsername'
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

        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('enable_ssl', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('is_body_html', $data ?? [], null);
        $this->setIfExists('port', $data ?? [], null);
        $this->setIfExists('server', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
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

        if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) > 384000)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 384000.";
        }

        if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) < 1)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) > 5000)) {
            $invalidProperties[] = "invalid value for 'server', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['server']) && (mb_strlen($this->container['server']) < 1)) {
            $invalidProperties[] = "invalid value for 'server', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 1000)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 1)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['to']) && (count($this->container['to']) > 200)) {
            $invalidProperties[] = "invalid value for 'to', number of items must be less than or equal to 200.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 100)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
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
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            array_push($this->openAPINullablesSetToNull, 'body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('body', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($body) && (mb_strlen($body) > 384000)) {
            throw new \InvalidArgumentException('invalid length for $body when calling EmailTaskVM., must be smaller than or equal to 384000.');
        }
        if (!is_null($body) && (mb_strlen($body) < 1)) {
            throw new \InvalidArgumentException('invalid length for $body when calling EmailTaskVM., must be bigger than or equal to 1.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets enable_ssl
     *
     * @return bool|null
     */
    public function getEnableSsl()
    {
        return $this->container['enable_ssl'];
    }

    /**
     * Sets enable_ssl
     *
     * @param bool|null $enable_ssl enable_ssl
     *
     * @return self
     */
    public function setEnableSsl($enable_ssl)
    {
        if (is_null($enable_ssl)) {
            throw new \InvalidArgumentException('non-nullable enable_ssl cannot be null');
        }
        $this->container['enable_ssl'] = $enable_ssl;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            array_push($this->openAPINullablesSetToNull, 'from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets is_body_html
     *
     * @return bool|null
     */
    public function getIsBodyHtml()
    {
        return $this->container['is_body_html'];
    }

    /**
     * Sets is_body_html
     *
     * @param bool|null $is_body_html is_body_html
     *
     * @return self
     */
    public function setIsBodyHtml($is_body_html)
    {
        if (is_null($is_body_html)) {
            throw new \InvalidArgumentException('non-nullable is_body_html cannot be null');
        }
        $this->container['is_body_html'] = $is_body_html;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port port
     *
     * @return self
     */
    public function setPort($port)
    {
        if (is_null($port)) {
            throw new \InvalidArgumentException('non-nullable port cannot be null');
        }

        if (($port > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $port when calling EmailTaskVM., must be smaller than or equal to 2147483647.');
        }
        if (($port < 0)) {
            throw new \InvalidArgumentException('invalid value for $port when calling EmailTaskVM., must be bigger than or equal to 0.');
        }

        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets server
     *
     * @return string|null
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param string|null $server server
     *
     * @return self
     */
    public function setServer($server)
    {
        if (is_null($server)) {
            array_push($this->openAPINullablesSetToNull, 'server');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('server', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($server) && (mb_strlen($server) > 5000)) {
            throw new \InvalidArgumentException('invalid length for $server when calling EmailTaskVM., must be smaller than or equal to 5000.');
        }
        if (!is_null($server) && (mb_strlen($server) < 1)) {
            throw new \InvalidArgumentException('invalid length for $server when calling EmailTaskVM., must be bigger than or equal to 1.');
        }

        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($subject) && (mb_strlen($subject) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling EmailTaskVM., must be smaller than or equal to 1000.');
        }
        if (!is_null($subject) && (mb_strlen($subject) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling EmailTaskVM., must be bigger than or equal to 1.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string[]|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            array_push($this->openAPINullablesSetToNull, 'to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($to) && (count($to) > 200)) {
            throw new \InvalidArgumentException('invalid value for $to when calling EmailTaskVM., number of items must be less than or equal to 200.');
        }
        $this->container['to'] = $to;

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
        if (!is_null($username) && (mb_strlen($username) > 100)) {
            throw new \InvalidArgumentException('invalid length for $username when calling EmailTaskVM., must be smaller than or equal to 100.');
        }
        if (!is_null($username) && (mb_strlen($username) < 1)) {
            throw new \InvalidArgumentException('invalid length for $username when calling EmailTaskVM., must be bigger than or equal to 1.');
        }

        $this->container['username'] = $username;

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


