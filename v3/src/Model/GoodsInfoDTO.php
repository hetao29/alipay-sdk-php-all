<?php
/**
 * GoodsInfoDTO
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
 * The version of the OpenAPI document: 2023-08-31
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
 * GoodsInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GoodsInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GoodsInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'goodsAmount' => 'string',
        'goodsCount' => 'string',
        'goodsId' => 'string',
        'goodsName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'goodsAmount' => null,
        'goodsCount' => null,
        'goodsId' => null,
        'goodsName' => null
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
        'goodsAmount' => 'goods_amount',
        'goodsCount' => 'goods_count',
        'goodsId' => 'goods_id',
        'goodsName' => 'goods_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'goodsAmount' => 'setGoodsAmount',
        'goodsCount' => 'setGoodsCount',
        'goodsId' => 'setGoodsId',
        'goodsName' => 'setGoodsName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'goodsAmount' => 'getGoodsAmount',
        'goodsCount' => 'getGoodsCount',
        'goodsId' => 'getGoodsId',
        'goodsName' => 'getGoodsName'
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
        $this->container['goodsAmount'] = $data['goodsAmount'] ?? null;
        $this->container['goodsCount'] = $data['goodsCount'] ?? null;
        $this->container['goodsId'] = $data['goodsId'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
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
     * Gets goodsAmount
     *
     * @return string|null
     */
    public function getGoodsAmount()
    {
        return $this->container['goodsAmount'];
    }

    /**
     * Sets goodsAmount
     *
     * @param string|null $goodsAmount 商品金额
     *
     * @return self
     */
    public function setGoodsAmount($goodsAmount)
    {
        $this->container['goodsAmount'] = $goodsAmount;

        return $this;
    }

    /**
     * Gets goodsCount
     *
     * @return string|null
     */
    public function getGoodsCount()
    {
        return $this->container['goodsCount'];
    }

    /**
     * Sets goodsCount
     *
     * @param string|null $goodsCount 商品购买数量
     *
     * @return self
     */
    public function setGoodsCount($goodsCount)
    {
        $this->container['goodsCount'] = $goodsCount;

        return $this;
    }

    /**
     * Gets goodsId
     *
     * @return string|null
     */
    public function getGoodsId()
    {
        return $this->container['goodsId'];
    }

    /**
     * Sets goodsId
     *
     * @param string|null $goodsId 商品标准69码
     *
     * @return self
     */
    public function setGoodsId($goodsId)
    {
        $this->container['goodsId'] = $goodsId;

        return $this;
    }

    /**
     * Gets goodsName
     *
     * @return string|null
     */
    public function getGoodsName()
    {
        return $this->container['goodsName'];
    }

    /**
     * Sets goodsName
     *
     * @param string|null $goodsName 商品名称
     *
     * @return self
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

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


