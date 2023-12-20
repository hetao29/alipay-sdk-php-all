<?php
/**
 * AlipayCommerceIotSdarttoolMessageSendModel
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
 * AlipayCommerceIotSdarttoolMessageSendModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceIotSdarttoolMessageSendModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceIotSdarttoolMessageSendModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'biDa' => 'bool',
        'deviceQueryType' => 'string',
        'immediateMsg' => 'bool',
        'itemId' => 'string',
        'msgContent' => 'string',
        'msgContentType' => 'string',
        'msgExpire' => 'int',
        'msgPriority' => 'int',
        'msgType' => 'string',
        'serviceId' => 'string',
        'sn' => 'string',
        'supplierId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'biDa' => null,
        'deviceQueryType' => null,
        'immediateMsg' => null,
        'itemId' => null,
        'msgContent' => null,
        'msgContentType' => null,
        'msgExpire' => null,
        'msgPriority' => null,
        'msgType' => null,
        'serviceId' => null,
        'sn' => null,
        'supplierId' => null
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
        'biDa' => 'bi_da',
        'deviceQueryType' => 'device_query_type',
        'immediateMsg' => 'immediate_msg',
        'itemId' => 'item_id',
        'msgContent' => 'msg_content',
        'msgContentType' => 'msg_content_type',
        'msgExpire' => 'msg_expire',
        'msgPriority' => 'msg_priority',
        'msgType' => 'msg_type',
        'serviceId' => 'service_id',
        'sn' => 'sn',
        'supplierId' => 'supplier_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'biDa' => 'setBiDa',
        'deviceQueryType' => 'setDeviceQueryType',
        'immediateMsg' => 'setImmediateMsg',
        'itemId' => 'setItemId',
        'msgContent' => 'setMsgContent',
        'msgContentType' => 'setMsgContentType',
        'msgExpire' => 'setMsgExpire',
        'msgPriority' => 'setMsgPriority',
        'msgType' => 'setMsgType',
        'serviceId' => 'setServiceId',
        'sn' => 'setSn',
        'supplierId' => 'setSupplierId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'biDa' => 'getBiDa',
        'deviceQueryType' => 'getDeviceQueryType',
        'immediateMsg' => 'getImmediateMsg',
        'itemId' => 'getItemId',
        'msgContent' => 'getMsgContent',
        'msgContentType' => 'getMsgContentType',
        'msgExpire' => 'getMsgExpire',
        'msgPriority' => 'getMsgPriority',
        'msgType' => 'getMsgType',
        'serviceId' => 'getServiceId',
        'sn' => 'getSn',
        'supplierId' => 'getSupplierId'
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
        $this->container['biDa'] = $data['biDa'] ?? null;
        $this->container['deviceQueryType'] = $data['deviceQueryType'] ?? null;
        $this->container['immediateMsg'] = $data['immediateMsg'] ?? null;
        $this->container['itemId'] = $data['itemId'] ?? null;
        $this->container['msgContent'] = $data['msgContent'] ?? null;
        $this->container['msgContentType'] = $data['msgContentType'] ?? null;
        $this->container['msgExpire'] = $data['msgExpire'] ?? null;
        $this->container['msgPriority'] = $data['msgPriority'] ?? null;
        $this->container['msgType'] = $data['msgType'] ?? null;
        $this->container['serviceId'] = $data['serviceId'] ?? null;
        $this->container['sn'] = $data['sn'] ?? null;
        $this->container['supplierId'] = $data['supplierId'] ?? null;
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
     * Gets biDa
     *
     * @return bool|null
     */
    public function getBiDa()
    {
        return $this->container['biDa'];
    }

    /**
     * Sets biDa
     *
     * @param bool|null $biDa 消息是否必达(immediate_msg为false时此字段设置有效)，消息过期时间顺延3*24h. 建议使用expire_time设置消息过期时间
     *
     * @return self
     */
    public function setBiDa($biDa)
    {
        $this->container['biDa'] = $biDa;

        return $this;
    }

    /**
     * Gets deviceQueryType
     *
     * @return string|null
     */
    public function getDeviceQueryType()
    {
        return $this->container['deviceQueryType'];
    }

    /**
     * Sets deviceQueryType
     *
     * @param string|null $deviceQueryType 设备查询条件类型 ；SUPPLIERID_SN:supplierid+sn ;  ITEMID_SN:itemid + sn; SN:sn
     *
     * @return self
     */
    public function setDeviceQueryType($deviceQueryType)
    {
        $this->container['deviceQueryType'] = $deviceQueryType;

        return $this;
    }

    /**
     * Gets immediateMsg
     *
     * @return bool|null
     */
    public function getImmediateMsg()
    {
        return $this->container['immediateMsg'];
    }

    /**
     * Sets immediateMsg
     *
     * @param bool|null $immediateMsg 是否即时消息; true-校验设备是否在线，false-不校验设备是否在线
     *
     * @return self
     */
    public function setImmediateMsg($immediateMsg)
    {
        $this->container['immediateMsg'] = $immediateMsg;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId 产品ID
     *
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets msgContent
     *
     * @return string|null
     */
    public function getMsgContent()
    {
        return $this->container['msgContent'];
    }

    /**
     * Sets msgContent
     *
     * @param string|null $msgContent 消息内容
     *
     * @return self
     */
    public function setMsgContent($msgContent)
    {
        $this->container['msgContent'] = $msgContent;

        return $this;
    }

    /**
     * Gets msgContentType
     *
     * @return string|null
     */
    public function getMsgContentType()
    {
        return $this->container['msgContentType'];
    }

    /**
     * Sets msgContentType
     *
     * @param string|null $msgContentType 消息内容格式
     *
     * @return self
     */
    public function setMsgContentType($msgContentType)
    {
        $this->container['msgContentType'] = $msgContentType;

        return $this;
    }

    /**
     * Gets msgExpire
     *
     * @return int|null
     */
    public function getMsgExpire()
    {
        return $this->container['msgExpire'];
    }

    /**
     * Sets msgExpire
     *
     * @param int|null $msgExpire 消息过期时间戳(ms)， 默认为当前时间顺延24h有效。当设备在线时消息服务过期之前尝试推送。最大过期时间顺延3*24h
     *
     * @return self
     */
    public function setMsgExpire($msgExpire)
    {
        $this->container['msgExpire'] = $msgExpire;

        return $this;
    }

    /**
     * Gets msgPriority
     *
     * @return int|null
     */
    public function getMsgPriority()
    {
        return $this->container['msgPriority'];
    }

    /**
     * Sets msgPriority
     *
     * @param int|null $msgPriority 消息优先级（immediate_msg为false此字段设置有效）数字越大优先发送。
     *
     * @return self
     */
    public function setMsgPriority($msgPriority)
    {
        $this->container['msgPriority'] = $msgPriority;

        return $this;
    }

    /**
     * Gets msgType
     *
     * @return string|null
     */
    public function getMsgType()
    {
        return $this->container['msgType'];
    }

    /**
     * Sets msgType
     *
     * @param string|null $msgType 消息类型： xpaas_common-小程序消息； ruyi_ordermsg-如意订单消息
     *
     * @return self
     */
    public function setMsgType($msgType)
    {
        $this->container['msgType'] = $msgType;

        return $this;
    }

    /**
     * Gets serviceId
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     *
     * @param string|null $serviceId 服务ID，当小程序消费消息时必传(传入的是小程序ID)
     *
     * @return self
     */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;

        return $this;
    }

    /**
     * Gets sn
     *
     * @return string|null
     */
    public function getSn()
    {
        return $this->container['sn'];
    }

    /**
     * Sets sn
     *
     * @param string|null $sn 设备sn号
     *
     * @return self
     */
    public function setSn($sn)
    {
        $this->container['sn'] = $sn;

        return $this;
    }

    /**
     * Gets supplierId
     *
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->container['supplierId'];
    }

    /**
     * Sets supplierId
     *
     * @param string|null $supplierId 厂商ID
     *
     * @return self
     */
    public function setSupplierId($supplierId)
    {
        $this->container['supplierId'] = $supplierId;

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


