<?php
/**
 * Cart
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
 * Cart Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Cart implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'url' => 'string',
        'version' => 'string',
        'db_prefix' => 'string',
        'stores_info' => '\OpenAPI\Client\Model\CartStoreInfo[]',
        'warehouses' => '\OpenAPI\Client\Model\CartWarehouse[]',
        'shipping_zones' => '\OpenAPI\Client\Model\CartShippingZone[]',
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
        'name' => null,
        'url' => null,
        'version' => null,
        'db_prefix' => null,
        'stores_info' => null,
        'warehouses' => null,
        'shipping_zones' => null,
        'additional_fields' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'url' => false,
        'version' => false,
        'db_prefix' => false,
        'stores_info' => false,
        'warehouses' => false,
        'shipping_zones' => false,
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
        'name' => 'name',
        'url' => 'url',
        'version' => 'version',
        'db_prefix' => 'db_prefix',
        'stores_info' => 'stores_info',
        'warehouses' => 'warehouses',
        'shipping_zones' => 'shipping_zones',
        'additional_fields' => 'additional_fields',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'url' => 'setUrl',
        'version' => 'setVersion',
        'db_prefix' => 'setDbPrefix',
        'stores_info' => 'setStoresInfo',
        'warehouses' => 'setWarehouses',
        'shipping_zones' => 'setShippingZones',
        'additional_fields' => 'setAdditionalFields',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'url' => 'getUrl',
        'version' => 'getVersion',
        'db_prefix' => 'getDbPrefix',
        'stores_info' => 'getStoresInfo',
        'warehouses' => 'getWarehouses',
        'shipping_zones' => 'getShippingZones',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('db_prefix', $data ?? [], null);
        $this->setIfExists('stores_info', $data ?? [], null);
        $this->setIfExists('warehouses', $data ?? [], null);
        $this->setIfExists('shipping_zones', $data ?? [], null);
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets db_prefix
     *
     * @return string|null
     */
    public function getDbPrefix()
    {
        return $this->container['db_prefix'];
    }

    /**
     * Sets db_prefix
     *
     * @param string|null $db_prefix db_prefix
     *
     * @return self
     */
    public function setDbPrefix($db_prefix)
    {
        if (is_null($db_prefix)) {
            throw new \InvalidArgumentException('non-nullable db_prefix cannot be null');
        }
        $this->container['db_prefix'] = $db_prefix;

        return $this;
    }

    /**
     * Gets stores_info
     *
     * @return \OpenAPI\Client\Model\CartStoreInfo[]|null
     */
    public function getStoresInfo()
    {
        return $this->container['stores_info'];
    }

    /**
     * Sets stores_info
     *
     * @param \OpenAPI\Client\Model\CartStoreInfo[]|null $stores_info stores_info
     *
     * @return self
     */
    public function setStoresInfo($stores_info)
    {
        if (is_null($stores_info)) {
            throw new \InvalidArgumentException('non-nullable stores_info cannot be null');
        }
        $this->container['stores_info'] = $stores_info;

        return $this;
    }

    /**
     * Gets warehouses
     *
     * @return \OpenAPI\Client\Model\CartWarehouse[]|null
     */
    public function getWarehouses()
    {
        return $this->container['warehouses'];
    }

    /**
     * Sets warehouses
     *
     * @param \OpenAPI\Client\Model\CartWarehouse[]|null $warehouses warehouses
     *
     * @return self
     */
    public function setWarehouses($warehouses)
    {
        if (is_null($warehouses)) {
            throw new \InvalidArgumentException('non-nullable warehouses cannot be null');
        }
        $this->container['warehouses'] = $warehouses;

        return $this;
    }

    /**
     * Gets shipping_zones
     *
     * @return \OpenAPI\Client\Model\CartShippingZone[]|null
     */
    public function getShippingZones()
    {
        return $this->container['shipping_zones'];
    }

    /**
     * Sets shipping_zones
     *
     * @param \OpenAPI\Client\Model\CartShippingZone[]|null $shipping_zones shipping_zones
     *
     * @return self
     */
    public function setShippingZones($shipping_zones)
    {
        if (is_null($shipping_zones)) {
            throw new \InvalidArgumentException('non-nullable shipping_zones cannot be null');
        }
        $this->container['shipping_zones'] = $shipping_zones;

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


