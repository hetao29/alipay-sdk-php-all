<?php
/**
 * Advert
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-12-20
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * Advert Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Advert implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Advert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advertGroup' => 'string',
        'advertId' => 'string',
        'advertItems' => '\Alipay\OpenAPISDK\Model\AdvertItem[]',
        'groupId' => 'string',
        'mobileClientType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advertGroup' => null,
        'advertId' => null,
        'advertItems' => null,
        'groupId' => null,
        'mobileClientType' => null
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
        'advertGroup' => 'advert_group',
        'advertId' => 'advert_id',
        'advertItems' => 'advert_items',
        'groupId' => 'group_id',
        'mobileClientType' => 'mobile_client_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advertGroup' => 'setAdvertGroup',
        'advertId' => 'setAdvertId',
        'advertItems' => 'setAdvertItems',
        'groupId' => 'setGroupId',
        'mobileClientType' => 'setMobileClientType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advertGroup' => 'getAdvertGroup',
        'advertId' => 'getAdvertId',
        'advertItems' => 'getAdvertItems',
        'groupId' => 'getGroupId',
        'mobileClientType' => 'getMobileClientType'
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
        $this->container['advertGroup'] = $data['advertGroup'] ?? null;
        $this->container['advertId'] = $data['advertId'] ?? null;
        $this->container['advertItems'] = $data['advertItems'] ?? null;
        $this->container['groupId'] = $data['groupId'] ?? null;
        $this->container['mobileClientType'] = $data['mobileClientType'] ?? null;
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
     * Gets advertGroup
     *
     * @return string|null
     */
    public function getAdvertGroup()
    {
        return $this->container['advertGroup'];
    }

    /**
     * Sets advertGroup
     *
     * @param string|null $advertGroup 广告组标识
     *
     * @return self
     */
    public function setAdvertGroup($advertGroup)
    {
        $this->container['advertGroup'] = $advertGroup;

        return $this;
    }

    /**
     * Gets advertId
     *
     * @return string|null
     */
    public function getAdvertId()
    {
        return $this->container['advertId'];
    }

    /**
     * Sets advertId
     *
     * @param string|null $advertId 广告位id
     *
     * @return self
     */
    public function setAdvertId($advertId)
    {
        $this->container['advertId'] = $advertId;

        return $this;
    }

    /**
     * Gets advertItems
     *
     * @return \Alipay\OpenAPISDK\Model\AdvertItem[]|null
     */
    public function getAdvertItems()
    {
        return $this->container['advertItems'];
    }

    /**
     * Sets advertItems
     *
     * @param \Alipay\OpenAPISDK\Model\AdvertItem[]|null $advertItems 广告位轮播内容列表
     *
     * @return self
     */
    public function setAdvertItems($advertItems)
    {
        $this->container['advertItems'] = $advertItems;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 投放人群分组id
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets mobileClientType
     *
     * @return string|null
     */
    public function getMobileClientType()
    {
        return $this->container['mobileClientType'];
    }

    /**
     * Sets mobileClientType
     *
     * @param string|null $mobileClientType 手机客户端类型，iphone、android、wp,空为不区分机型
     *
     * @return self
     */
    public function setMobileClientType($mobileClientType)
    {
        $this->container['mobileClientType'] = $mobileClientType;

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


