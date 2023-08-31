<?php
/**
 * RoyaltyDetail
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
 * RoyaltyDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RoyaltyDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RoyaltyDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'detailId' => 'string',
        'errorCode' => 'string',
        'errorDesc' => 'string',
        'executeDt' => 'string',
        'operationType' => 'string',
        'state' => 'string',
        'transIn' => 'string',
        'transInOpenId' => 'string',
        'transInType' => 'string',
        'transOut' => 'string',
        'transOutOpenId' => 'string',
        'transOutType' => 'string'
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
        'detailId' => null,
        'errorCode' => null,
        'errorDesc' => null,
        'executeDt' => null,
        'operationType' => null,
        'state' => null,
        'transIn' => null,
        'transInOpenId' => null,
        'transInType' => null,
        'transOut' => null,
        'transOutOpenId' => null,
        'transOutType' => null
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
        'detailId' => 'detail_id',
        'errorCode' => 'error_code',
        'errorDesc' => 'error_desc',
        'executeDt' => 'execute_dt',
        'operationType' => 'operation_type',
        'state' => 'state',
        'transIn' => 'trans_in',
        'transInOpenId' => 'trans_in_open_id',
        'transInType' => 'trans_in_type',
        'transOut' => 'trans_out',
        'transOutOpenId' => 'trans_out_open_id',
        'transOutType' => 'trans_out_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'detailId' => 'setDetailId',
        'errorCode' => 'setErrorCode',
        'errorDesc' => 'setErrorDesc',
        'executeDt' => 'setExecuteDt',
        'operationType' => 'setOperationType',
        'state' => 'setState',
        'transIn' => 'setTransIn',
        'transInOpenId' => 'setTransInOpenId',
        'transInType' => 'setTransInType',
        'transOut' => 'setTransOut',
        'transOutOpenId' => 'setTransOutOpenId',
        'transOutType' => 'setTransOutType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'detailId' => 'getDetailId',
        'errorCode' => 'getErrorCode',
        'errorDesc' => 'getErrorDesc',
        'executeDt' => 'getExecuteDt',
        'operationType' => 'getOperationType',
        'state' => 'getState',
        'transIn' => 'getTransIn',
        'transInOpenId' => 'getTransInOpenId',
        'transInType' => 'getTransInType',
        'transOut' => 'getTransOut',
        'transOutOpenId' => 'getTransOutOpenId',
        'transOutType' => 'getTransOutType'
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
        $this->container['detailId'] = $data['detailId'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['errorDesc'] = $data['errorDesc'] ?? null;
        $this->container['executeDt'] = $data['executeDt'] ?? null;
        $this->container['operationType'] = $data['operationType'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['transIn'] = $data['transIn'] ?? null;
        $this->container['transInOpenId'] = $data['transInOpenId'] ?? null;
        $this->container['transInType'] = $data['transInType'] ?? null;
        $this->container['transOut'] = $data['transOut'] ?? null;
        $this->container['transOutOpenId'] = $data['transOutOpenId'] ?? null;
        $this->container['transOutType'] = $data['transOutType'] ?? null;
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
     * @param string|null $amount 分账金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets detailId
     *
     * @return string|null
     */
    public function getDetailId()
    {
        return $this->container['detailId'];
    }

    /**
     * Sets detailId
     *
     * @param string|null $detailId 支付宝分账明细单号，每笔分账业务执行的明细单号
     *
     * @return self
     */
    public function setDetailId($detailId)
    {
        $this->container['detailId'] = $detailId;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode 分账失败错误码，只在分账失败时返回
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorDesc
     *
     * @return string|null
     */
    public function getErrorDesc()
    {
        return $this->container['errorDesc'];
    }

    /**
     * Sets errorDesc
     *
     * @param string|null $errorDesc 分账错误描述信息
     *
     * @return self
     */
    public function setErrorDesc($errorDesc)
    {
        $this->container['errorDesc'] = $errorDesc;

        return $this;
    }

    /**
     * Gets executeDt
     *
     * @return string|null
     */
    public function getExecuteDt()
    {
        return $this->container['executeDt'];
    }

    /**
     * Sets executeDt
     *
     * @param string|null $executeDt 分账执行时间
     *
     * @return self
     */
    public function setExecuteDt($executeDt)
    {
        $this->container['executeDt'] = $executeDt;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param string|null $operationType 分账操作类型。有以下几种类型： replenish(补差)、replenish_refund(退补差)、transfer(分账)、transfer_refund(退分账)
     *
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state 分账状态，SUCCESS成功，FAIL失败，PROCESSING处理中
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets transIn
     *
     * @return string|null
     */
    public function getTransIn()
    {
        return $this->container['transIn'];
    }

    /**
     * Sets transIn
     *
     * @param string|null $transIn 分账转入账号，只有在operation_type为replenish_refund(退补差)，transfer(分账)才返回该字段或trans_in_open_id。trans_in_open_id为分账转入方的openId，当trans_in_open_id不为空的时候，请优先使用trans_in_open_id。
     *
     * @return self
     */
    public function setTransIn($transIn)
    {
        $this->container['transIn'] = $transIn;

        return $this;
    }

    /**
     * Gets transInOpenId
     *
     * @return string|null
     */
    public function getTransInOpenId()
    {
        return $this->container['transInOpenId'];
    }

    /**
     * Sets transInOpenId
     *
     * @param string|null $transInOpenId 分账转入方的OpenId，OpenId为用户在该应用下支付宝的唯一用户标识。
     *
     * @return self
     */
    public function setTransInOpenId($transInOpenId)
    {
        $this->container['transInOpenId'] = $transInOpenId;

        return $this;
    }

    /**
     * Gets transInType
     *
     * @return string|null
     */
    public function getTransInType()
    {
        return $this->container['transInType'];
    }

    /**
     * Sets transInType
     *
     * @param string|null $transInType 分账转入账号类型。
     *
     * @return self
     */
    public function setTransInType($transInType)
    {
        $this->container['transInType'] = $transInType;

        return $this;
    }

    /**
     * Gets transOut
     *
     * @return string|null
     */
    public function getTransOut()
    {
        return $this->container['transOut'];
    }

    /**
     * Sets transOut
     *
     * @param string|null $transOut 分账转出账号，只有在operation_type为replenish(补差),transfer_refund(退分账)类型才返回该字段或trans_out_open_id字段。trans_out_open_id字段为分账转出方的openId，当trans_out_open_id 字段不为空时，请优先使用trans_out_open_id。
     *
     * @return self
     */
    public function setTransOut($transOut)
    {
        $this->container['transOut'] = $transOut;

        return $this;
    }

    /**
     * Gets transOutOpenId
     *
     * @return string|null
     */
    public function getTransOutOpenId()
    {
        return $this->container['transOutOpenId'];
    }

    /**
     * Sets transOutOpenId
     *
     * @param string|null $transOutOpenId 分账转出方的OpenId，OpenId为用户在该应用下支付宝内的唯一用户标识。
     *
     * @return self
     */
    public function setTransOutOpenId($transOutOpenId)
    {
        $this->container['transOutOpenId'] = $transOutOpenId;

        return $this;
    }

    /**
     * Gets transOutType
     *
     * @return string|null
     */
    public function getTransOutType()
    {
        return $this->container['transOutType'];
    }

    /**
     * Sets transOutType
     *
     * @param string|null $transOutType 分账转出账号类型
     *
     * @return self
     */
    public function setTransOutType($transOutType)
    {
        $this->container['transOutType'] = $transOutType;

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


