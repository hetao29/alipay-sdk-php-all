<?php
/**
 * AlipayMarketingCardMessageNotifyModel
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
 * AlipayMarketingCardMessageNotifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingCardMessageNotifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingCardMessageNotifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notifyInfo' => 'string',
        'notifyNo' => 'string',
        'notifyType' => 'string',
        'occurTime' => 'string',
        'targetCardNo' => 'string',
        'targetCardNoType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'notifyInfo' => null,
        'notifyNo' => null,
        'notifyType' => null,
        'occurTime' => null,
        'targetCardNo' => null,
        'targetCardNoType' => null
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
        'notifyInfo' => 'notify_info',
        'notifyNo' => 'notify_no',
        'notifyType' => 'notify_type',
        'occurTime' => 'occur_time',
        'targetCardNo' => 'target_card_no',
        'targetCardNoType' => 'target_card_no_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notifyInfo' => 'setNotifyInfo',
        'notifyNo' => 'setNotifyNo',
        'notifyType' => 'setNotifyType',
        'occurTime' => 'setOccurTime',
        'targetCardNo' => 'setTargetCardNo',
        'targetCardNoType' => 'setTargetCardNoType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notifyInfo' => 'getNotifyInfo',
        'notifyNo' => 'getNotifyNo',
        'notifyType' => 'getNotifyType',
        'occurTime' => 'getOccurTime',
        'targetCardNo' => 'getTargetCardNo',
        'targetCardNoType' => 'getTargetCardNoType'
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
        $this->container['notifyInfo'] = $data['notifyInfo'] ?? null;
        $this->container['notifyNo'] = $data['notifyNo'] ?? null;
        $this->container['notifyType'] = $data['notifyType'] ?? null;
        $this->container['occurTime'] = $data['occurTime'] ?? null;
        $this->container['targetCardNo'] = $data['targetCardNo'] ?? null;
        $this->container['targetCardNoType'] = $data['targetCardNoType'] ?? null;
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
     * Gets notifyInfo
     *
     * @return string|null
     */
    public function getNotifyInfo()
    {
        return $this->container['notifyInfo'];
    }

    /**
     * Sets notifyInfo
     *
     * @param string|null $notifyInfo 消息通知详情，包含消息通知需要的信息，map 格式存储。 积分过期提醒： <br>expired_point 过期积分值 <br>expired_time 过期时间
     *
     * @return self
     */
    public function setNotifyInfo($notifyInfo)
    {
        $this->container['notifyInfo'] = $notifyInfo;

        return $this;
    }

    /**
     * Gets notifyNo
     *
     * @return string|null
     */
    public function getNotifyNo()
    {
        return $this->container['notifyNo'];
    }

    /**
     * Sets notifyNo
     *
     * @param string|null $notifyNo 消息通知幂等标识，业务流水号
     *
     * @return self
     */
    public function setNotifyNo($notifyNo)
    {
        $this->container['notifyNo'] = $notifyNo;

        return $this;
    }

    /**
     * Gets notifyType
     *
     * @return string|null
     */
    public function getNotifyType()
    {
        return $this->container['notifyType'];
    }

    /**
     * Sets notifyType
     *
     * @param string|null $notifyType 消息通知类型, <br>POINT_REMIND 积分过期提醒
     *
     * @return self
     */
    public function setNotifyType($notifyType)
    {
        $this->container['notifyType'] = $notifyType;

        return $this;
    }

    /**
     * Gets occurTime
     *
     * @return string|null
     */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
     * Sets occurTime
     *
     * @param string|null $occurTime 标识业务发生时间，时间格式为\"yyyy-MM-dd HH:mm:ss\"。
     *
     * @return self
     */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;

        return $this;
    }

    /**
     * Gets targetCardNo
     *
     * @return string|null
     */
    public function getTargetCardNo()
    {
        return $this->container['targetCardNo'];
    }

    /**
     * Sets targetCardNo
     *
     * @param string|null $targetCardNo 支付宝业务卡号，即通过 alipay.marketing.card.open 接口开卡后获取的 card_info.biz_card_no 值。
     *
     * @return self
     */
    public function setTargetCardNo($targetCardNo)
    {
        $this->container['targetCardNo'] = $targetCardNo;

        return $this;
    }

    /**
     * Gets targetCardNoType
     *
     * @return string|null
     */
    public function getTargetCardNoType()
    {
        return $this->container['targetCardNoType'];
    }

    /**
     * Sets targetCardNoType
     *
     * @param string|null $targetCardNoType 卡号ID类型
     *
     * @return self
     */
    public function setTargetCardNoType($targetCardNoType)
    {
        $this->container['targetCardNoType'] = $targetCardNoType;

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


