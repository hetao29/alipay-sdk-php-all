<?php
/**
 * ConsumerNotifyIstd
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
 * The version of the OpenAPI document: 2023-10-26
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
 * ConsumerNotifyIstd Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConsumerNotifyIstd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumerNotifyIstd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'goodsCount' => 'int',
        'goodsImg' => 'string',
        'goodsName' => 'string',
        'merchantMobile' => 'string',
        'merchantName' => 'string',
        'tinyAppId' => 'string',
        'tinyAppUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'goodsCount' => null,
        'goodsImg' => null,
        'goodsName' => null,
        'merchantMobile' => null,
        'merchantName' => null,
        'tinyAppId' => null,
        'tinyAppUrl' => null
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
        'goodsCount' => 'goods_count',
        'goodsImg' => 'goods_img',
        'goodsName' => 'goods_name',
        'merchantMobile' => 'merchant_mobile',
        'merchantName' => 'merchant_name',
        'tinyAppId' => 'tiny_app_id',
        'tinyAppUrl' => 'tiny_app_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'goodsCount' => 'setGoodsCount',
        'goodsImg' => 'setGoodsImg',
        'goodsName' => 'setGoodsName',
        'merchantMobile' => 'setMerchantMobile',
        'merchantName' => 'setMerchantName',
        'tinyAppId' => 'setTinyAppId',
        'tinyAppUrl' => 'setTinyAppUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'goodsCount' => 'getGoodsCount',
        'goodsImg' => 'getGoodsImg',
        'goodsName' => 'getGoodsName',
        'merchantMobile' => 'getMerchantMobile',
        'merchantName' => 'getMerchantName',
        'tinyAppId' => 'getTinyAppId',
        'tinyAppUrl' => 'getTinyAppUrl'
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
        $this->container['goodsCount'] = $data['goodsCount'] ?? null;
        $this->container['goodsImg'] = $data['goodsImg'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
        $this->container['merchantMobile'] = $data['merchantMobile'] ?? null;
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['tinyAppId'] = $data['tinyAppId'] ?? null;
        $this->container['tinyAppUrl'] = $data['tinyAppUrl'] ?? null;
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
     * Gets goodsCount
     *
     * @return int|null
     */
    public function getGoodsCount()
    {
        return $this->container['goodsCount'];
    }

    /**
     * Sets goodsCount
     *
     * @param int|null $goodsCount 商品数量
     *
     * @return self
     */
    public function setGoodsCount($goodsCount)
    {
        $this->container['goodsCount'] = $goodsCount;

        return $this;
    }

    /**
     * Gets goodsImg
     *
     * @return string|null
     */
    public function getGoodsImg()
    {
        return $this->container['goodsImg'];
    }

    /**
     * Sets goodsImg
     *
     * @param string|null $goodsImg 商品缩略图url，支持格式：bmp、jpg、jpeg、png、gif
     *
     * @return self
     */
    public function setGoodsImg($goodsImg)
    {
        $this->container['goodsImg'] = $goodsImg;

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
     * Gets merchantMobile
     *
     * @return string|null
     */
    public function getMerchantMobile()
    {
        return $this->container['merchantMobile'];
    }

    /**
     * Sets merchantMobile
     *
     * @param string|null $merchantMobile 商家电话
     *
     * @return self
     */
    public function setMerchantMobile($merchantMobile)
    {
        $this->container['merchantMobile'] = $merchantMobile;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 商家名称，tiny_app_id和merchant_name不能同时为空
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets tinyAppId
     *
     * @return string|null
     */
    public function getTinyAppId()
    {
        return $this->container['tinyAppId'];
    }

    /**
     * Sets tinyAppId
     *
     * @param string|null $tinyAppId 商家小程序appid
     *
     * @return self
     */
    public function setTinyAppId($tinyAppId)
    {
        $this->container['tinyAppId'] = $tinyAppId;

        return $this;
    }

    /**
     * Gets tinyAppUrl
     *
     * @return string|null
     */
    public function getTinyAppUrl()
    {
        return $this->container['tinyAppUrl'];
    }

    /**
     * Sets tinyAppUrl
     *
     * @param string|null $tinyAppUrl 商家小程序的路径，建议为订单页面
     *
     * @return self
     */
    public function setTinyAppUrl($tinyAppUrl)
    {
        $this->container['tinyAppUrl'] = $tinyAppUrl;

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


