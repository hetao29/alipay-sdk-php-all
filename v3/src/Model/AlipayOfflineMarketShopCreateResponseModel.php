<?php
/**
 * AlipayOfflineMarketShopCreateResponseModel
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
 * AlipayOfflineMarketShopCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketShopCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketShopCreateResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyId' => 'string',
        'auditDesc' => 'string',
        'auditStatus' => 'string',
        'isOnline' => 'string',
        'isShow' => 'string',
        'rate' => 'string',
        'resultCode' => 'string',
        'shopId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyId' => null,
        'auditDesc' => null,
        'auditStatus' => null,
        'isOnline' => null,
        'isShow' => null,
        'rate' => null,
        'resultCode' => null,
        'shopId' => null
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
        'applyId' => 'apply_id',
        'auditDesc' => 'audit_desc',
        'auditStatus' => 'audit_status',
        'isOnline' => 'is_online',
        'isShow' => 'is_show',
        'rate' => 'rate',
        'resultCode' => 'result_code',
        'shopId' => 'shop_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyId' => 'setApplyId',
        'auditDesc' => 'setAuditDesc',
        'auditStatus' => 'setAuditStatus',
        'isOnline' => 'setIsOnline',
        'isShow' => 'setIsShow',
        'rate' => 'setRate',
        'resultCode' => 'setResultCode',
        'shopId' => 'setShopId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyId' => 'getApplyId',
        'auditDesc' => 'getAuditDesc',
        'auditStatus' => 'getAuditStatus',
        'isOnline' => 'getIsOnline',
        'isShow' => 'getIsShow',
        'rate' => 'getRate',
        'resultCode' => 'getResultCode',
        'shopId' => 'getShopId'
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
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['auditDesc'] = $data['auditDesc'] ?? null;
        $this->container['auditStatus'] = $data['auditStatus'] ?? null;
        $this->container['isOnline'] = $data['isOnline'] ?? null;
        $this->container['isShow'] = $data['isShow'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
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
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 开店请求受理成功后返回的支付宝流水ID，根据此ID调用接口  alipay.offline.market.applyorder.batchquery，能够获取当前开店请求审核状态、驳回原因等信息。
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets auditDesc
     *
     * @return string|null
     */
    public function getAuditDesc()
    {
        return $this->container['auditDesc'];
    }

    /**
     * Sets auditDesc
     *
     * @param string|null $auditDesc 废弃字段。
     *
     * @return self
     */
    public function setAuditDesc($auditDesc)
    {
        $this->container['auditDesc'] = $auditDesc;

        return $this;
    }

    /**
     * Gets auditStatus
     *
     * @return string|null
     */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
     * Sets auditStatus
     *
     * @param string|null $auditStatus 同步请求如果支付宝受理成功，将返回AUDITING状态。
     *
     * @return self
     */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;

        return $this;
    }

    /**
     * Gets isOnline
     *
     * @return string|null
     */
    public function getIsOnline()
    {
        return $this->container['isOnline'];
    }

    /**
     * Sets isOnline
     *
     * @param string|null $isOnline 废弃字段，T表示上架,F表示未上架。
     *
     * @return self
     */
    public function setIsOnline($isOnline)
    {
        $this->container['isOnline'] = $isOnline;

        return $this;
    }

    /**
     * Gets isShow
     *
     * @return string|null
     */
    public function getIsShow()
    {
        return $this->container['isShow'];
    }

    /**
     * Sets isShow
     *
     * @param string|null $isShow 废弃字段，T表示显示，F表示隐藏。
     *
     * @return self
     */
    public function setIsShow($isShow)
    {
        $this->container['isShow'] = $isShow;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate 门店费率值，指定的ISV可用。创建门店时，为符合情况的门店，进行费率单独设置。若费率不符合门店类目的设置，则会创建门店失败。
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode 开店请求结果码：  WAIT_MERCHANT_CONFIRM：等待商户确认  当开店需要商户确认时返回此结果码，商户需要登录到商家中心e.alipay.com进行开店确认。例如，ISV帮商户开店时，出现需要改签口碑当面付主体，接口同步返回此错误码，并且支付宝发送短信告知商户登录商家中心进行改签确认，确认后进入到后续审核流程。
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 废弃字段，支付宝门店ID。
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

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


