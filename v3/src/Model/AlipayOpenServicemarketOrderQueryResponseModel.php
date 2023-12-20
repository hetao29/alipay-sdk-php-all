<?php
/**
 * AlipayOpenServicemarketOrderQueryResponseModel
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
 * AlipayOpenServicemarketOrderQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenServicemarketOrderQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenServicemarketOrderQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'autoUpgrade' => 'bool',
        'commodityId' => 'string',
        'currentPage' => 'int',
        'orderItems' => '\Alipay\OpenAPISDK\Model\OrderItem[]',
        'specifications' => 'string',
        'status' => 'string',
        'totalSize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'autoUpgrade' => null,
        'commodityId' => null,
        'currentPage' => null,
        'orderItems' => null,
        'specifications' => null,
        'status' => null,
        'totalSize' => null
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
        'autoUpgrade' => 'auto_upgrade',
        'commodityId' => 'commodity_id',
        'currentPage' => 'current_page',
        'orderItems' => 'order_items',
        'specifications' => 'specifications',
        'status' => 'status',
        'totalSize' => 'total_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autoUpgrade' => 'setAutoUpgrade',
        'commodityId' => 'setCommodityId',
        'currentPage' => 'setCurrentPage',
        'orderItems' => 'setOrderItems',
        'specifications' => 'setSpecifications',
        'status' => 'setStatus',
        'totalSize' => 'setTotalSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autoUpgrade' => 'getAutoUpgrade',
        'commodityId' => 'getCommodityId',
        'currentPage' => 'getCurrentPage',
        'orderItems' => 'getOrderItems',
        'specifications' => 'getSpecifications',
        'status' => 'getStatus',
        'totalSize' => 'getTotalSize'
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
        $this->container['autoUpgrade'] = $data['autoUpgrade'] ?? null;
        $this->container['commodityId'] = $data['commodityId'] ?? null;
        $this->container['currentPage'] = $data['currentPage'] ?? null;
        $this->container['orderItems'] = $data['orderItems'] ?? null;
        $this->container['specifications'] = $data['specifications'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['totalSize'] = $data['totalSize'] ?? null;
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
     * Gets autoUpgrade
     *
     * @return bool|null
     */
    public function getAutoUpgrade()
    {
        return $this->container['autoUpgrade'];
    }

    /**
     * Sets autoUpgrade
     *
     * @param bool|null $autoUpgrade true：开启；false：关闭；需要同步校验commodity_id，如果没有查询到订购信息的话，忽略该字段返回值
     *
     * @return self
     */
    public function setAutoUpgrade($autoUpgrade)
    {
        $this->container['autoUpgrade'] = $autoUpgrade;

        return $this;
    }

    /**
     * Gets commodityId
     *
     * @return string|null
     */
    public function getCommodityId()
    {
        return $this->container['commodityId'];
    }

    /**
     * Sets commodityId
     *
     * @param string|null $commodityId 订购服务商品ID
     *
     * @return self
     */
    public function setCommodityId($commodityId)
    {
        $this->container['commodityId'] = $commodityId;

        return $this;
    }

    /**
     * Gets currentPage
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
     * Sets currentPage
     *
     * @param int|null $currentPage 当前查询页（本接口支持最多查询100条记录）
     *
     * @return self
     */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * Gets orderItems
     *
     * @return \Alipay\OpenAPISDK\Model\OrderItem[]|null
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \Alipay\OpenAPISDK\Model\OrderItem[]|null $orderItems 订单明细列表
     *
     * @return self
     */
    public function setOrderItems($orderItems)
    {
        $this->container['orderItems'] = $orderItems;

        return $this;
    }

    /**
     * Gets specifications
     *
     * @return string|null
     */
    public function getSpecifications()
    {
        return $this->container['specifications'];
    }

    /**
     * Sets specifications
     *
     * @param string|null $specifications 用于区分同一个服务的不同版本
     *
     * @return self
     */
    public function setSpecifications($specifications)
    {
        $this->container['specifications'] = $specifications;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status MERCHANT_ORDED（待服务商接单）
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totalSize
     *
     * @return int|null
     */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
     * Sets totalSize
     *
     * @param int|null $totalSize 总记录数
     *
     * @return self
     */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;

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


