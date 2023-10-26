<?php
/**
 * ExchangeVoucherInfo
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
 * ExchangeVoucherInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExchangeVoucherInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExchangeVoucherInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'bizType' => 'string',
        'exchangeGoodsInfo' => '\Alipay\OpenAPISDK\Model\VoucherExchangeGoodsInfo',
        'floorAmount' => 'string',
        'voucherDeductThresholdInfo' => '\Alipay\OpenAPISDK\Model\VoucherDeductThresholdInfo'
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
        'exchangeGoodsInfo' => null,
        'floorAmount' => null,
        'voucherDeductThresholdInfo' => null
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
        'exchangeGoodsInfo' => 'exchange_goods_info',
        'floorAmount' => 'floor_amount',
        'voucherDeductThresholdInfo' => 'voucher_deduct_threshold_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bizType' => 'setBizType',
        'exchangeGoodsInfo' => 'setExchangeGoodsInfo',
        'floorAmount' => 'setFloorAmount',
        'voucherDeductThresholdInfo' => 'setVoucherDeductThresholdInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bizType' => 'getBizType',
        'exchangeGoodsInfo' => 'getExchangeGoodsInfo',
        'floorAmount' => 'getFloorAmount',
        'voucherDeductThresholdInfo' => 'getVoucherDeductThresholdInfo'
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
        $this->container['exchangeGoodsInfo'] = $data['exchangeGoodsInfo'] ?? null;
        $this->container['floorAmount'] = $data['floorAmount'] ?? null;
        $this->container['voucherDeductThresholdInfo'] = $data['voucherDeductThresholdInfo'] ?? null;
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
     * @param string|null $bizType 兑换券业务类型。 注意：兑换券通过大促活动权益报名能力推广至支付宝会场时，本参数必填。
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets exchangeGoodsInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherExchangeGoodsInfo|null
     */
    public function getExchangeGoodsInfo()
    {
        return $this->container['exchangeGoodsInfo'];
    }

    /**
     * Sets exchangeGoodsInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherExchangeGoodsInfo|null $exchangeGoodsInfo exchangeGoodsInfo
     *
     * @return self
     */
    public function setExchangeGoodsInfo($exchangeGoodsInfo)
    {
        $this->container['exchangeGoodsInfo'] = $exchangeGoodsInfo;

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
     * @param string|null $floorAmount 优惠门槛金额，表示只有当订单金额大于等于门槛金额时券才能使用。该字段为空时表示无门槛。  门槛金额的校验由服务商(商户)核销时自行校验，支付宝侧只做展示使用。
     *
     * @return self
     */
    public function setFloorAmount($floorAmount)
    {
        $this->container['floorAmount'] = $floorAmount;

        return $this;
    }

    /**
     * Gets voucherDeductThresholdInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDeductThresholdInfo|null
     */
    public function getVoucherDeductThresholdInfo()
    {
        return $this->container['voucherDeductThresholdInfo'];
    }

    /**
     * Sets voucherDeductThresholdInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDeductThresholdInfo|null $voucherDeductThresholdInfo voucherDeductThresholdInfo
     *
     * @return self
     */
    public function setVoucherDeductThresholdInfo($voucherDeductThresholdInfo)
    {
        $this->container['voucherDeductThresholdInfo'] = $voucherDeductThresholdInfo;

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


