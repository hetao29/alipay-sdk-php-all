<?php
/**
 * AlipayTradeRefundApplyModel
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
 * AlipayTradeRefundApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeRefundApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeRefundApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extendParams' => 'string',
        'notifyUrl' => 'string',
        'operatorId' => 'string',
        'outRequestNo' => 'string',
        'outTradeNo' => 'string',
        'refundAmount' => 'string',
        'refundFundDetails' => '\Alipay\OpenAPISDK\Model\OpenApiRefundFundDetailPojo[]',
        'refundReason' => 'string',
        'storeId' => 'string',
        'terminalId' => 'string',
        'tradeNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extendParams' => null,
        'notifyUrl' => null,
        'operatorId' => null,
        'outRequestNo' => null,
        'outTradeNo' => null,
        'refundAmount' => null,
        'refundFundDetails' => null,
        'refundReason' => null,
        'storeId' => null,
        'terminalId' => null,
        'tradeNo' => null
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
        'extendParams' => 'extend_params',
        'notifyUrl' => 'notify_url',
        'operatorId' => 'operator_id',
        'outRequestNo' => 'out_request_no',
        'outTradeNo' => 'out_trade_no',
        'refundAmount' => 'refund_amount',
        'refundFundDetails' => 'refund_fund_details',
        'refundReason' => 'refund_reason',
        'storeId' => 'store_id',
        'terminalId' => 'terminal_id',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extendParams' => 'setExtendParams',
        'notifyUrl' => 'setNotifyUrl',
        'operatorId' => 'setOperatorId',
        'outRequestNo' => 'setOutRequestNo',
        'outTradeNo' => 'setOutTradeNo',
        'refundAmount' => 'setRefundAmount',
        'refundFundDetails' => 'setRefundFundDetails',
        'refundReason' => 'setRefundReason',
        'storeId' => 'setStoreId',
        'terminalId' => 'setTerminalId',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extendParams' => 'getExtendParams',
        'notifyUrl' => 'getNotifyUrl',
        'operatorId' => 'getOperatorId',
        'outRequestNo' => 'getOutRequestNo',
        'outTradeNo' => 'getOutTradeNo',
        'refundAmount' => 'getRefundAmount',
        'refundFundDetails' => 'getRefundFundDetails',
        'refundReason' => 'getRefundReason',
        'storeId' => 'getStoreId',
        'terminalId' => 'getTerminalId',
        'tradeNo' => 'getTradeNo'
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
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['operatorId'] = $data['operatorId'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['refundFundDetails'] = $data['refundFundDetails'] ?? null;
        $this->container['refundReason'] = $data['refundReason'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['terminalId'] = $data['terminalId'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
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
     * Gets extendParams
     *
     * @return string|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param string|null $extendParams 商户传入业务信息，具体值要和支付宝约定，格式为json格式。  医保退款场景下，DESIGNATED_REFUND_ASSET为INNER_ASSET表示只退自费部分，DESIGNATED_REFUND_ASSET为OUTSIDE_ASSET表示只退医保部分，医保部分不支持部分退。退医保资金必需传cancel_bill_no和cancel_serial_no。
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl 通知地址
     *
     * @return self
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets operatorId
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param string|null $operatorId 商户的操作员编号
     *
     * @return self
     */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 标识一次退款请求，同一笔交易多次退款需要保证唯一，如需部分退款，则此参数必传。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 订单支付时传入的商户订单号,不能和 trade_no同时为空
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 需要退款的金额，该金额不能大于订单金额,单位为元，支持两位小数
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets refundFundDetails
     *
     * @return \Alipay\OpenAPISDK\Model\OpenApiRefundFundDetailPojo[]|null
     */
    public function getRefundFundDetails()
    {
        return $this->container['refundFundDetails'];
    }

    /**
     * Sets refundFundDetails
     *
     * @param \Alipay\OpenAPISDK\Model\OpenApiRefundFundDetailPojo[]|null $refundFundDetails 退款资金明细  注：目前只有SETTLE_OFFLINE_GROUP产品的退款支持该字段
     *
     * @return self
     */
    public function setRefundFundDetails($refundFundDetails)
    {
        $this->container['refundFundDetails'] = $refundFundDetails;

        return $this;
    }

    /**
     * Gets refundReason
     *
     * @return string|null
     */
    public function getRefundReason()
    {
        return $this->container['refundReason'];
    }

    /**
     * Sets refundReason
     *
     * @param string|null $refundReason 退款的原因说明
     *
     * @return self
     */
    public function setRefundReason($refundReason)
    {
        $this->container['refundReason'] = $refundReason;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 商户的门店编号
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string|null $terminalId 商户的终端编号
     *
     * @return self
     */
    public function setTerminalId($terminalId)
    {
        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 支付宝交易号，和商户订单号不能同时为空
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

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


