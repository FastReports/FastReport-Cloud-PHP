<?php
/**
 * TaskBaseVM
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
 * TaskBaseVM Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TaskBaseVM extends CloudBaseVM
{
    public const DISCRIMINATOR = 't';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskBaseVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cron_expression' => 'string',
        'starts_on' => '\DateTime',
        'ends' => '\OpenAPI\Client\cloud\fastreport\model\TaskEnd',
        'id' => 'string',
        'name' => 'string',
        'recurrent_run_time' => '\DateTime',
        'recurrent_was_run_time' => '\DateTime',
        'subscription_id' => 'string',
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
        'cron_expression' => null,
        'starts_on' => 'date-time',
        'ends' => null,
        'id' => null,
        'name' => null,
        'recurrent_run_time' => 'date-time',
        'recurrent_was_run_time' => 'date-time',
        'subscription_id' => null,
        't' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cron_expression' => true,
        'starts_on' => true,
        'ends' => false,
        'id' => true,
        'name' => true,
        'recurrent_run_time' => true,
        'recurrent_was_run_time' => true,
        'subscription_id' => true,
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
        'cron_expression' => 'cronExpression',
        'starts_on' => 'startsOn',
        'ends' => 'ends',
        'id' => 'id',
        'name' => 'name',
        'recurrent_run_time' => 'recurrentRunTime',
        'recurrent_was_run_time' => 'recurrentWasRunTime',
        'subscription_id' => 'subscriptionId',
        't' => '$t'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cron_expression' => 'setCronExpression',
        'starts_on' => 'setStartsOn',
        'ends' => 'setEnds',
        'id' => 'setId',
        'name' => 'setName',
        'recurrent_run_time' => 'setRecurrentRunTime',
        'recurrent_was_run_time' => 'setRecurrentWasRunTime',
        'subscription_id' => 'setSubscriptionId',
        't' => 'setT'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cron_expression' => 'getCronExpression',
        'starts_on' => 'getStartsOn',
        'ends' => 'getEnds',
        'id' => 'getId',
        'name' => 'getName',
        'recurrent_run_time' => 'getRecurrentRunTime',
        'recurrent_was_run_time' => 'getRecurrentWasRunTime',
        'subscription_id' => 'getSubscriptionId',
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

        $this->setIfExists('cron_expression', $data ?? [], null);
        $this->setIfExists('starts_on', $data ?? [], null);
        $this->setIfExists('ends', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('recurrent_run_time', $data ?? [], null);
        $this->setIfExists('recurrent_was_run_time', $data ?? [], null);
        $this->setIfExists('subscription_id', $data ?? [], null);
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

        if (!is_null($this->container['id']) && !preg_match("/^[A-Fa-f0-9]{24}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[A-Fa-f0-9]{24}$/.";
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
     * Gets cron_expression
     *
     * @return string|null
     */
    public function getCronExpression()
    {
        return $this->container['cron_expression'];
    }

    /**
     * Sets cron_expression
     *
     * @param string|null $cron_expression cron_expression
     *
     * @return self
     */
    public function setCronExpression($cron_expression)
    {
        if (is_null($cron_expression)) {
            array_push($this->openAPINullablesSetToNull, 'cron_expression');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cron_expression', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cron_expression'] = $cron_expression;

        return $this;
    }

    /**
     * Gets starts_on
     *
     * @return \DateTime|null
     */
    public function getStartsOn()
    {
        return $this->container['starts_on'];
    }

    /**
     * Sets starts_on
     *
     * @param \DateTime|null $starts_on starts_on
     *
     * @return self
     */
    public function setStartsOn($starts_on)
    {
        if (is_null($starts_on)) {
            array_push($this->openAPINullablesSetToNull, 'starts_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('starts_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['starts_on'] = $starts_on;

        return $this;
    }

    /**
     * Gets ends
     *
     * @return \OpenAPI\Client\cloud\fastreport\model\TaskEnd|null
     */
    public function getEnds()
    {
        return $this->container['ends'];
    }

    /**
     * Sets ends
     *
     * @param \OpenAPI\Client\cloud\fastreport\model\TaskEnd|null $ends ends
     *
     * @return self
     */
    public function setEnds($ends)
    {
        if (is_null($ends)) {
            throw new \InvalidArgumentException('non-nullable ends cannot be null');
        }
        $this->container['ends'] = $ends;

        return $this;
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id) && (!preg_match("/^[A-Fa-f0-9]{24}$/", ObjectSerializer::toString($id)))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling TaskBaseVM., must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $name when calling TaskBaseVM., must be smaller than or equal to 50.');
        }
        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TaskBaseVM., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recurrent_run_time
     *
     * @return \DateTime|null
     */
    public function getRecurrentRunTime()
    {
        return $this->container['recurrent_run_time'];
    }

    /**
     * Sets recurrent_run_time
     *
     * @param \DateTime|null $recurrent_run_time recurrent_run_time
     *
     * @return self
     */
    public function setRecurrentRunTime($recurrent_run_time)
    {
        if (is_null($recurrent_run_time)) {
            array_push($this->openAPINullablesSetToNull, 'recurrent_run_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recurrent_run_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recurrent_run_time'] = $recurrent_run_time;

        return $this;
    }

    /**
     * Gets recurrent_was_run_time
     *
     * @return \DateTime|null
     */
    public function getRecurrentWasRunTime()
    {
        return $this->container['recurrent_was_run_time'];
    }

    /**
     * Sets recurrent_was_run_time
     *
     * @param \DateTime|null $recurrent_was_run_time recurrent_was_run_time
     *
     * @return self
     */
    public function setRecurrentWasRunTime($recurrent_was_run_time)
    {
        if (is_null($recurrent_was_run_time)) {
            array_push($this->openAPINullablesSetToNull, 'recurrent_was_run_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recurrent_was_run_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recurrent_was_run_time'] = $recurrent_was_run_time;

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
        if (is_null($subscription_id)) {
            array_push($this->openAPINullablesSetToNull, 'subscription_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subscription_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($subscription_id) && (!preg_match("/(^$)|(^[A-Fa-f0-9]{24}$)/", ObjectSerializer::toString($subscription_id)))) {
            throw new \InvalidArgumentException("invalid value for \$subscription_id when calling TaskBaseVM., must conform to the pattern /(^$)|(^[A-Fa-f0-9]{24}$)/.");
        }

        $this->container['subscription_id'] = $subscription_id;

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


