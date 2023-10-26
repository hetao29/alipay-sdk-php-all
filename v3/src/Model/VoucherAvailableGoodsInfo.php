<?php
/**
 * VoucherAvailableGoodsInfo
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
 * VoucherAvailableGoodsInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherAvailableGoodsInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherAvailableGoodsInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availableGoodsSkuIds' => 'string[]',
        'excludeGoodsSkuIds' => 'string[]',
        'goodsDescription' => 'string',
        'goodsDetail' => 'string',
        'goodsDetailImages' => 'string[]',
        'goodsDetailRichDescription' => 'string',
        'goodsName' => 'string',
        'originAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availableGoodsSkuIds' => null,
        'excludeGoodsSkuIds' => null,
        'goodsDescription' => null,
        'goodsDetail' => null,
        'goodsDetailImages' => null,
        'goodsDetailRichDescription' => null,
        'goodsName' => null,
        'originAmount' => null
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
        'availableGoodsSkuIds' => 'available_goods_sku_ids',
        'excludeGoodsSkuIds' => 'exclude_goods_sku_ids',
        'goodsDescription' => 'goods_description',
        'goodsDetail' => 'goods_detail',
        'goodsDetailImages' => 'goods_detail_images',
        'goodsDetailRichDescription' => 'goods_detail_rich_description',
        'goodsName' => 'goods_name',
        'originAmount' => 'origin_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availableGoodsSkuIds' => 'setAvailableGoodsSkuIds',
        'excludeGoodsSkuIds' => 'setExcludeGoodsSkuIds',
        'goodsDescription' => 'setGoodsDescription',
        'goodsDetail' => 'setGoodsDetail',
        'goodsDetailImages' => 'setGoodsDetailImages',
        'goodsDetailRichDescription' => 'setGoodsDetailRichDescription',
        'goodsName' => 'setGoodsName',
        'originAmount' => 'setOriginAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availableGoodsSkuIds' => 'getAvailableGoodsSkuIds',
        'excludeGoodsSkuIds' => 'getExcludeGoodsSkuIds',
        'goodsDescription' => 'getGoodsDescription',
        'goodsDetail' => 'getGoodsDetail',
        'goodsDetailImages' => 'getGoodsDetailImages',
        'goodsDetailRichDescription' => 'getGoodsDetailRichDescription',
        'goodsName' => 'getGoodsName',
        'originAmount' => 'getOriginAmount'
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
        $this->container['availableGoodsSkuIds'] = $data['availableGoodsSkuIds'] ?? null;
        $this->container['excludeGoodsSkuIds'] = $data['excludeGoodsSkuIds'] ?? null;
        $this->container['goodsDescription'] = $data['goodsDescription'] ?? null;
        $this->container['goodsDetail'] = $data['goodsDetail'] ?? null;
        $this->container['goodsDetailImages'] = $data['goodsDetailImages'] ?? null;
        $this->container['goodsDetailRichDescription'] = $data['goodsDetailRichDescription'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
        $this->container['originAmount'] = $data['originAmount'] ?? null;
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
     * Gets availableGoodsSkuIds
     *
     * @return string[]|null
     */
    public function getAvailableGoodsSkuIds()
    {
        return $this->container['availableGoodsSkuIds'];
    }

    /**
     * Sets availableGoodsSkuIds
     *
     * @param string[]|null $availableGoodsSkuIds 可优惠商品编码，商家自定义商品编码。当用户支付时，交易中的商品编码和支付券配置的商品编码有任一匹配时，可以使用优惠券。
     *
     * @return self
     */
    public function setAvailableGoodsSkuIds($availableGoodsSkuIds)
    {
        $this->container['availableGoodsSkuIds'] = $availableGoodsSkuIds;

        return $this;
    }

    /**
     * Gets excludeGoodsSkuIds
     *
     * @return string[]|null
     */
    public function getExcludeGoodsSkuIds()
    {
        return $this->container['excludeGoodsSkuIds'];
    }

    /**
     * Sets excludeGoodsSkuIds
     *
     * @param string[]|null $excludeGoodsSkuIds 不可核销商品编码，商家自定义商品编码。当用户支付时，交易中的商品编码和支付券配置的商品编码有任一匹配时，不可以使用优惠券。
     *
     * @return self
     */
    public function setExcludeGoodsSkuIds($excludeGoodsSkuIds)
    {
        $this->container['excludeGoodsSkuIds'] = $excludeGoodsSkuIds;

        return $this;
    }

    /**
     * Gets goodsDescription
     *
     * @return string|null
     */
    public function getGoodsDescription()
    {
        return $this->container['goodsDescription'];
    }

    /**
     * Sets goodsDescription
     *
     * @param string|null $goodsDescription 商品描述信息。 用于券面展示，向用户介绍商品
     *
     * @return self
     */
    public function setGoodsDescription($goodsDescription)
    {
        $this->container['goodsDescription'] = $goodsDescription;

        return $this;
    }

    /**
     * Gets goodsDetail
     *
     * @return string|null
     */
    public function getGoodsDetail()
    {
        return $this->container['goodsDetail'];
    }

    /**
     * Sets goodsDetail
     *
     * @param string|null $goodsDetail 商品详情，会展示在特定渠道(如服务市场团购业务插件的套餐明细)。
     *
     * @return self
     */
    public function setGoodsDetail($goodsDetail)
    {
        $this->container['goodsDetail'] = $goodsDetail;

        return $this;
    }

    /**
     * Gets goodsDetailImages
     *
     * @return string[]|null
     */
    public function getGoodsDetailImages()
    {
        return $this->container['goodsDetailImages'];
    }

    /**
     * Sets goodsDetailImages
     *
     * @param string[]|null $goodsDetailImages 商品详情图片列表，会展示在特定渠道(如服务市场团购业务插件的头图)
     *
     * @return self
     */
    public function setGoodsDetailImages($goodsDetailImages)
    {
        $this->container['goodsDetailImages'] = $goodsDetailImages;

        return $this;
    }

    /**
     * Gets goodsDetailRichDescription
     *
     * @return string|null
     */
    public function getGoodsDetailRichDescription()
    {
        return $this->container['goodsDetailRichDescription'];
    }

    /**
     * Sets goodsDetailRichDescription
     *
     * @param string|null $goodsDetailRichDescription 商品详情富文本描述
     *
     * @return self
     */
    public function setGoodsDetailRichDescription($goodsDetailRichDescription)
    {
        $this->container['goodsDetailRichDescription'] = $goodsDetailRichDescription;

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
     * @param string|null $goodsName 商品名称。
     *
     * @return self
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

        return $this;
    }

    /**
     * Gets originAmount
     *
     * @return string|null
     */
    public function getOriginAmount()
    {
        return $this->container['originAmount'];
    }

    /**
     * Sets originAmount
     *
     * @param string|null $originAmount 原价。说明：该字段可不填，填入商品名称goods_name则必填;
     *
     * @return self
     */
    public function setOriginAmount($originAmount)
    {
        $this->container['originAmount'] = $originAmount;

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


