<?php
/**
 * CategoryAddBatchPayloadInner
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
 * CategoryAddBatchPayloadInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategoryAddBatchPayloadInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryAddBatch_payload_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'avail' => 'bool',
        'description' => 'string',
        'meta_title' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string[]',
        'parent_id' => 'string',
        'sort_order' => 'int',
        'seo_url' => 'string',
        'store_id' => 'string',
        'images' => '\OpenAPI\Client\Model\CategoryAddBatchPayloadInnerImagesInner[]',
        'stores_ids' => 'string[]'
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
        'avail' => null,
        'description' => null,
        'meta_title' => null,
        'meta_description' => null,
        'meta_keywords' => null,
        'parent_id' => null,
        'sort_order' => null,
        'seo_url' => null,
        'store_id' => null,
        'images' => null,
        'stores_ids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'avail' => false,
        'description' => false,
        'meta_title' => false,
        'meta_description' => false,
        'meta_keywords' => false,
        'parent_id' => false,
        'sort_order' => false,
        'seo_url' => false,
        'store_id' => false,
        'images' => false,
        'stores_ids' => false
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
        'avail' => 'avail',
        'description' => 'description',
        'meta_title' => 'meta_title',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'parent_id' => 'parent_id',
        'sort_order' => 'sort_order',
        'seo_url' => 'seo_url',
        'store_id' => 'store_id',
        'images' => 'images',
        'stores_ids' => 'stores_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'avail' => 'setAvail',
        'description' => 'setDescription',
        'meta_title' => 'setMetaTitle',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'parent_id' => 'setParentId',
        'sort_order' => 'setSortOrder',
        'seo_url' => 'setSeoUrl',
        'store_id' => 'setStoreId',
        'images' => 'setImages',
        'stores_ids' => 'setStoresIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'avail' => 'getAvail',
        'description' => 'getDescription',
        'meta_title' => 'getMetaTitle',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'parent_id' => 'getParentId',
        'sort_order' => 'getSortOrder',
        'seo_url' => 'getSeoUrl',
        'store_id' => 'getStoreId',
        'images' => 'getImages',
        'stores_ids' => 'getStoresIds'
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
        $this->setIfExists('avail', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('meta_title', $data ?? [], null);
        $this->setIfExists('meta_description', $data ?? [], null);
        $this->setIfExists('meta_keywords', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('seo_url', $data ?? [], null);
        $this->setIfExists('store_id', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('stores_ids', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['meta_keywords']) && (count($this->container['meta_keywords']) < 1)) {
            $invalidProperties[] = "invalid value for 'meta_keywords', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['images']) && (count($this->container['images']) > 1)) {
            $invalidProperties[] = "invalid value for 'images', number of items must be less than or equal to 1.";
        }

        if (!is_null($this->container['stores_ids']) && (count($this->container['stores_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'stores_ids', number of items must be greater than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets meta_title
     *
     * @return string|null
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     *
     * @param string|null $meta_title meta_title
     *
     * @return self
     */
    public function setMetaTitle($meta_title)
    {
        if (is_null($meta_title)) {
            throw new \InvalidArgumentException('non-nullable meta_title cannot be null');
        }
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string|null $meta_description meta_description
     *
     * @return self
     */
    public function setMetaDescription($meta_description)
    {
        if (is_null($meta_description)) {
            throw new \InvalidArgumentException('non-nullable meta_description cannot be null');
        }
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     *
     * @return string[]|null
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     *
     * @param string[]|null $meta_keywords meta_keywords
     *
     * @return self
     */
    public function setMetaKeywords($meta_keywords)
    {
        if (is_null($meta_keywords)) {
            throw new \InvalidArgumentException('non-nullable meta_keywords cannot be null');
        }


        if ((count($meta_keywords) < 1)) {
            throw new \InvalidArgumentException('invalid length for $meta_keywords when calling CategoryAddBatchPayloadInner., number of items must be greater than or equal to 1.');
        }
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int|null $sort_order sort_order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        if (is_null($sort_order)) {
            throw new \InvalidArgumentException('non-nullable sort_order cannot be null');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets seo_url
     *
     * @return string|null
     */
    public function getSeoUrl()
    {
        return $this->container['seo_url'];
    }

    /**
     * Sets seo_url
     *
     * @param string|null $seo_url seo_url
     *
     * @return self
     */
    public function setSeoUrl($seo_url)
    {
        if (is_null($seo_url)) {
            throw new \InvalidArgumentException('non-nullable seo_url cannot be null');
        }
        $this->container['seo_url'] = $seo_url;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string|null $store_id store_id
     *
     * @return self
     */
    public function setStoreId($store_id)
    {
        if (is_null($store_id)) {
            throw new \InvalidArgumentException('non-nullable store_id cannot be null');
        }
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\CategoryAddBatchPayloadInnerImagesInner[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\CategoryAddBatchPayloadInnerImagesInner[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }

        if ((count($images) > 1)) {
            throw new \InvalidArgumentException('invalid value for $images when calling CategoryAddBatchPayloadInner., number of items must be less than or equal to 1.');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets stores_ids
     *
     * @return string[]|null
     */
    public function getStoresIds()
    {
        return $this->container['stores_ids'];
    }

    /**
     * Sets stores_ids
     *
     * @param string[]|null $stores_ids stores_ids
     *
     * @return self
     */
    public function setStoresIds($stores_ids)
    {
        if (is_null($stores_ids)) {
            throw new \InvalidArgumentException('non-nullable stores_ids cannot be null');
        }


        if ((count($stores_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $stores_ids when calling CategoryAddBatchPayloadInner., number of items must be greater than or equal to 1.');
        }
        $this->container['stores_ids'] = $stores_ids;

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


