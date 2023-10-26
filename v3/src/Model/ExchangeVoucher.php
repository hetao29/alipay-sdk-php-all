<?php
/**
 * ExchangeVoucher
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
 * ExchangeVoucher Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExchangeVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExchangeVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'bizType' => 'string',
        'customerServiceMobile' => 'string',
        'customerServiceUrl' => 'string',
        'floorAmount' => 'string',
        'overdueRefundable' => 'bool',
        'payeePid' => 'string',
        'refundable' => 'bool',
        'saleAmount' => 'string',
        'settleType' => 'string',
        'voucherDetailUrl' => 'string',
        'voucherName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'bizType' => null,
        'customerServiceMobile' => null,
        'customerServiceUrl' => null,
        'floorAmount' => null,
        'overdueRefundable' => null,
        'payeePid' => null,
        'refundable' => null,
        'saleAmount' => null,
        'settleType' => null,
        'voucherDetailUrl' => null,
        'voucherName' => null
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
        'amount' => 'amount',
        'bizType' => 'biz_type',
        'customerServiceMobile' => 'customer_service_mobile',
        'customerServiceUrl' => 'customer_service_url',
        'floorAmount' => 'floor_amount',
        'overdueRefundable' => 'overdue_refundable',
        'payeePid' => 'payee_pid',
        'refundable' => 'refundable',
        'saleAmount' => 'sale_amount',
        'settleType' => 'settle_type',
        'voucherDetailUrl' => 'voucher_detail_url',
        'voucherName' => 'voucher_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bizType' => 'setBizType',
        'customerServiceMobile' => 'setCustomerServiceMobile',
        'customerServiceUrl' => 'setCustomerServiceUrl',
        'floorAmount' => 'setFloorAmount',
        'overdueRefundable' => 'setOverdueRefundable',
        'payeePid' => 'setPayeePid',
        'refundable' => 'setRefundable',
        'saleAmount' => 'setSaleAmount',
        'settleType' => 'setSettleType',
        'voucherDetailUrl' => 'setVoucherDetailUrl',
        'voucherName' => 'setVoucherName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bizType' => 'getBizType',
        'customerServiceMobile' => 'getCustomerServiceMobile',
        'customerServiceUrl' => 'getCustomerServiceUrl',
        'floorAmount' => 'getFloorAmount',
        'overdueRefundable' => 'getOverdueRefundable',
        'payeePid' => 'getPayeePid',
        'refundable' => 'getRefundable',
        'saleAmount' => 'getSaleAmount',
        'settleType' => 'getSettleType',
        'voucherDetailUrl' => 'getVoucherDetailUrl',
        'voucherName' => 'getVoucherName'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['customerServiceMobile'] = $data['customerServiceMobile'] ?? null;
        $this->container['customerServiceUrl'] = $data['customerServiceUrl'] ?? null;
        $this->container['floorAmount'] = $data['floorAmount'] ?? null;
        $this->container['overdueRefundable'] = $data['overdueRefundable'] ?? null;
        $this->container['payeePid'] = $data['payeePid'] ?? null;
        $this->container['refundable'] = $data['refundable'] ?? null;
        $this->container['saleAmount'] = $data['saleAmount'] ?? null;
        $this->container['settleType'] = $data['settleType'] ?? null;
        $this->container['voucherDetailUrl'] = $data['voucherDetailUrl'] ?? null;
        $this->container['voucherName'] = $data['voucherName'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 券的价值
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 兑换券业务类型。  枚举值 团购券：GROUP_BUY_EXCHANGE_VOUCHER 代金券：FIX_EXCHANGE_VOUCHER 注意：兑换券通过<a href=\"https://opendocs.alipay.com/pre-open/repo-00tbta\">大促活动权益报名</a>能力推广至支付宝会场时，本参数必填。
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets customerServiceMobile
     *
     * @return string|null
     */
    public function getCustomerServiceMobile()
    {
        return $this->container['customerServiceMobile'];
    }

    /**
     * Sets customerServiceMobile
     *
     * @param string|null $customerServiceMobile 客服电话
     *
     * @return self
     */
    public function setCustomerServiceMobile($customerServiceMobile)
    {
        $this->container['customerServiceMobile'] = $customerServiceMobile;

        return $this;
    }

    /**
     * Gets customerServiceUrl
     *
     * @return string|null
     */
    public function getCustomerServiceUrl()
    {
        return $this->container['customerServiceUrl'];
    }

    /**
     * Sets customerServiceUrl
     *
     * @param string|null $customerServiceUrl 客服链接
     *
     * @return self
     */
    public function setCustomerServiceUrl($customerServiceUrl)
    {
        $this->container['customerServiceUrl'] = $customerServiceUrl;

        return $this;
    }

    /**
     * Gets floorAmount
     *
     * @return string|null
     */
    public function getFloorAmount()
    {
        return $this->container['floorAmount'];
    }

    /**
     * Sets floorAmount
     *
     * @param string|null $floorAmount 门槛金额。说明：该字段可不填，认为无门槛;
     *
     * @return self
     */
    public function setFloorAmount($floorAmount)
    {
        $this->container['floorAmount'] = $floorAmount;

        return $this;
    }

    /**
     * Gets overdueRefundable
     *
     * @return bool|null
     */
    public function getOverdueRefundable()
    {
        return $this->container['overdueRefundable'];
    }

    /**
     * Sets overdueRefundable
     *
     * @param bool|null $overdueRefundable 是否支持优惠券过期后，自动退款给用户。 不填默认否，枚举值： true：是 false：否
     *
     * @return self
     */
    public function setOverdueRefundable($overdueRefundable)
    {
        $this->container['overdueRefundable'] = $overdueRefundable;

        return $this;
    }

    /**
     * Gets payeePid
     *
     * @return string|null
     */
    public function getPayeePid()
    {
        return $this->container['payeePid'];
    }

    /**
     * Sets payeePid
     *
     * @param string|null $payeePid 收款账号。目前的结算规则是，每核销一笔优惠券，支付宝会打款到该收款账户。
     *
     * @return self
     */
    public function setPayeePid($payeePid)
    {
        $this->container['payeePid'] = $payeePid;

        return $this;
    }

    /**
     * Gets refundable
     *
     * @return bool|null
     */
    public function getRefundable()
    {
        return $this->container['refundable'];
    }

    /**
     * Sets refundable
     *
     * @param bool|null $refundable 购买的优惠券是否允许退款。不填默认否，枚举值： true：是 false：否
     *
     * @return self
     */
    public function setRefundable($refundable)
    {
        $this->container['refundable'] = $refundable;

        return $this;
    }

    /**
     * Gets saleAmount
     *
     * @return string|null
     */
    public function getSaleAmount()
    {
        return $this->container['saleAmount'];
    }

    /**
     * Sets saleAmount
     *
     * @param string|null $saleAmount 用户购买优惠券需要支付的金额
     *
     * @return self
     */
    public function setSaleAmount($saleAmount)
    {
        $this->container['saleAmount'] = $saleAmount;

        return $this;
    }

    /**
     * Gets settleType
     *
     * @return string|null
     */
    public function getSettleType()
    {
        return $this->container['settleType'];
    }

    /**
     * Sets settleType
     *
     * @param string|null $settleType 解决类型。
     *
     * @return self
     */
    public function setSettleType($settleType)
    {
        $this->container['settleType'] = $settleType;

        return $this;
    }

    /**
     * Gets voucherDetailUrl
     *
     * @return string|null
     */
    public function getVoucherDetailUrl()
    {
        return $this->container['voucherDetailUrl'];
    }

    /**
     * Sets voucherDetailUrl
     *
     * @param string|null $voucherDetailUrl 领(购)券详情页链接，从支付宝公域跳转到服务商(商户)自定义领(购)券详情页。
     *
     * @return self
     */
    public function setVoucherDetailUrl($voucherDetailUrl)
    {
        $this->container['voucherDetailUrl'] = $voucherDetailUrl;

        return $this;
    }

    /**
     * Gets voucherName
     *
     * @return string|null
     */
    public function getVoucherName()
    {
        return $this->container['voucherName'];
    }

    /**
     * Sets voucherName
     *
     * @param string|null $voucherName 对消费者展示的券(商品)名称。
     *
     * @return self
     */
    public function setVoucherName($voucherName)
    {
        $this->container['voucherName'] = $voucherName;

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


