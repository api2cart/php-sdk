<?php
/**
 * Currency
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API2Cart OpenAPI
 *
 * API2Cart
 *
 * The version of the OpenAPI document: 1.1
 * Contact: contact@api2cart.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Currency implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'iso3' => 'string',
        'symbol_left' => 'string',
        'symbol_right' => 'string',
        'rate' => 'float',
        'avail' => 'bool',
        'default' => 'bool',
        'additional_fields' => 'object',
        'custom_fields' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'iso3' => null,
        'symbol_left' => null,
        'symbol_right' => null,
        'rate' => null,
        'avail' => null,
        'default' => null,
        'additional_fields' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'iso3' => false,
        'symbol_left' => false,
        'symbol_right' => false,
        'rate' => false,
        'avail' => false,
        'default' => false,
        'additional_fields' => false,
        'custom_fields' => false
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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
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
        'id' => 'id',
        'name' => 'name',
        'iso3' => 'iso3',
        'symbol_left' => 'symbol_left',
        'symbol_right' => 'symbol_right',
        'rate' => 'rate',
        'avail' => 'avail',
        'default' => 'default',
        'additional_fields' => 'additional_fields',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'iso3' => 'setIso3',
        'symbol_left' => 'setSymbolLeft',
        'symbol_right' => 'setSymbolRight',
        'rate' => 'setRate',
        'avail' => 'setAvail',
        'default' => 'setDefault',
        'additional_fields' => 'setAdditionalFields',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'iso3' => 'getIso3',
        'symbol_left' => 'getSymbolLeft',
        'symbol_right' => 'getSymbolRight',
        'rate' => 'getRate',
        'avail' => 'getAvail',
        'default' => 'getDefault',
        'additional_fields' => 'getAdditionalFields',
        'custom_fields' => 'getCustomFields'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('iso3', $data ?? [], null);
        $this->setIfExists('symbol_left', $data ?? [], null);
        $this->setIfExists('symbol_right', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('avail', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('additional_fields', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
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
        $invalidProperties = [];

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
            throw new \InvalidArgumentException('non-nullable id cannot be null');
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
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets iso3
     *
     * @return string|null
     */
    public function getIso3()
    {
        return $this->container['iso3'];
    }

    /**
     * Sets iso3
     *
     * @param string|null $iso3 iso3
     *
     * @return self
     */
    public function setIso3($iso3)
    {
        if (is_null($iso3)) {
            throw new \InvalidArgumentException('non-nullable iso3 cannot be null');
        }
        $this->container['iso3'] = $iso3;

        return $this;
    }

    /**
     * Gets symbol_left
     *
     * @return string|null
     */
    public function getSymbolLeft()
    {
        return $this->container['symbol_left'];
    }

    /**
     * Sets symbol_left
     *
     * @param string|null $symbol_left symbol_left
     *
     * @return self
     */
    public function setSymbolLeft($symbol_left)
    {
        if (is_null($symbol_left)) {
            throw new \InvalidArgumentException('non-nullable symbol_left cannot be null');
        }
        $this->container['symbol_left'] = $symbol_left;

        return $this;
    }

    /**
     * Gets symbol_right
     *
     * @return string|null
     */
    public function getSymbolRight()
    {
        return $this->container['symbol_right'];
    }

    /**
     * Sets symbol_right
     *
     * @param string|null $symbol_right symbol_right
     *
     * @return self
     */
    public function setSymbolRight($symbol_right)
    {
        if (is_null($symbol_right)) {
            throw new \InvalidArgumentException('non-nullable symbol_right cannot be null');
        }
        $this->container['symbol_right'] = $symbol_right;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets avail
     *
     * @return bool|null
     */
    public function getAvail()
    {
        return $this->container['avail'];
    }

    /**
     * Sets avail
     *
     * @param bool|null $avail avail
     *
     * @return self
     */
    public function setAvail($avail)
    {
        if (is_null($avail)) {
            throw new \InvalidArgumentException('non-nullable avail cannot be null');
        }
        $this->container['avail'] = $avail;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets additional_fields
     *
     * @return object|null
     */
    public function getAdditionalFields()
    {
        return $this->container['additional_fields'];
    }

    /**
     * Sets additional_fields
     *
     * @param object|null $additional_fields additional_fields
     *
     * @return self
     */
    public function setAdditionalFields($additional_fields)
    {
        if (is_null($additional_fields)) {
            throw new \InvalidArgumentException('non-nullable additional_fields cannot be null');
        }
        $this->container['additional_fields'] = $additional_fields;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

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


