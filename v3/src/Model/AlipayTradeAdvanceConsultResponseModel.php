<?php
/**
 * AlipayTradeAdvanceConsultResponseModel
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
 * AlipayTradeAdvanceConsultResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeAdvanceConsultResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeAdvanceConsultResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'referResult' => 'bool',
        'resultCode' => 'string',
        'resultMessage' => 'string',
        'riskLevel' => 'string',
        'userRiskPrediction' => '\Alipay\OpenAPISDK\Model\UserRiskPrediction',
        'waitRepaymentAmount' => 'string',
        'waitRepaymentOrderCount' => 'int',
        'waitRepaymentOrderInfos' => '\Alipay\OpenAPISDK\Model\WaitRepaymentOrderInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'referResult' => null,
        'resultCode' => null,
        'resultMessage' => null,
        'riskLevel' => null,
        'userRiskPrediction' => null,
        'waitRepaymentAmount' => null,
        'waitRepaymentOrderCount' => null,
        'waitRepaymentOrderInfos' => null
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
        'referResult' => 'refer_result',
        'resultCode' => 'result_code',
        'resultMessage' => 'result_message',
        'riskLevel' => 'risk_level',
        'userRiskPrediction' => 'user_risk_prediction',
        'waitRepaymentAmount' => 'wait_repayment_amount',
        'waitRepaymentOrderCount' => 'wait_repayment_order_count',
        'waitRepaymentOrderInfos' => 'wait_repayment_order_infos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referResult' => 'setReferResult',
        'resultCode' => 'setResultCode',
        'resultMessage' => 'setResultMessage',
        'riskLevel' => 'setRiskLevel',
        'userRiskPrediction' => 'setUserRiskPrediction',
        'waitRepaymentAmount' => 'setWaitRepaymentAmount',
        'waitRepaymentOrderCount' => 'setWaitRepaymentOrderCount',
        'waitRepaymentOrderInfos' => 'setWaitRepaymentOrderInfos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referResult' => 'getReferResult',
        'resultCode' => 'getResultCode',
        'resultMessage' => 'getResultMessage',
        'riskLevel' => 'getRiskLevel',
        'userRiskPrediction' => 'getUserRiskPrediction',
        'waitRepaymentAmount' => 'getWaitRepaymentAmount',
        'waitRepaymentOrderCount' => 'getWaitRepaymentOrderCount',
        'waitRepaymentOrderInfos' => 'getWaitRepaymentOrderInfos'
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
        $this->container['referResult'] = $data['referResult'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['resultMessage'] = $data['resultMessage'] ?? null;
        $this->container['riskLevel'] = $data['riskLevel'] ?? null;
        $this->container['userRiskPrediction'] = $data['userRiskPrediction'] ?? null;
        $this->container['waitRepaymentAmount'] = $data['waitRepaymentAmount'] ?? null;
        $this->container['waitRepaymentOrderCount'] = $data['waitRepaymentOrderCount'] ?? null;
        $this->container['waitRepaymentOrderInfos'] = $data['waitRepaymentOrderInfos'] ?? null;
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
     * Gets referResult
     *
     * @return bool|null
     */
    public function getReferResult()
    {
        return $this->container['referResult'];
    }

    /**
     * Sets referResult
     *
     * @param bool|null $referResult true 代表当前时间点，用户允许垫资 false 代表当前时间，用户不允许垫资
     *
     * @return self
     */
    public function setReferResult($referResult)
    {
        $this->container['referResult'] = $referResult;

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
     * @param string|null $resultCode 用户被注销
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets resultMessage
     *
     * @return string|null
     */
    public function getResultMessage()
    {
        return $this->container['resultMessage'];
    }

    /**
     * Sets resultMessage
     *
     * @param string|null $resultMessage 返回用户不准入原因
     *
     * @return self
     */
    public function setResultMessage($resultMessage)
    {
        $this->container['resultMessage'] = $resultMessage;

        return $this;
    }

    /**
     * Gets riskLevel
     *
     * @return string|null
     */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
     * Sets riskLevel
     *
     * @param string|null $riskLevel 订单风险评估等级，在单笔订单风险预评估时返回。当基础风险校验通过时，可通过该值获取业务风险评估等级。取值：2-高风险；1-低风险。
     *
     * @return self
     */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;

        return $this;
    }

    /**
     * Gets userRiskPrediction
     *
     * @return \Alipay\OpenAPISDK\Model\UserRiskPrediction|null
     */
    public function getUserRiskPrediction()
    {
        return $this->container['userRiskPrediction'];
    }

    /**
     * Sets userRiskPrediction
     *
     * @param \Alipay\OpenAPISDK\Model\UserRiskPrediction|null $userRiskPrediction userRiskPrediction
     *
     * @return self
     */
    public function setUserRiskPrediction($userRiskPrediction)
    {
        $this->container['userRiskPrediction'] = $userRiskPrediction;

        return $this;
    }

    /**
     * Gets waitRepaymentAmount
     *
     * @return string|null
     */
    public function getWaitRepaymentAmount()
    {
        return $this->container['waitRepaymentAmount'];
    }

    /**
     * Sets waitRepaymentAmount
     *
     * @param string|null $waitRepaymentAmount 用户剩余的总待还金额，无论当前用户是否允许垫资，都会返回该属性。
     *
     * @return self
     */
    public function setWaitRepaymentAmount($waitRepaymentAmount)
    {
        $this->container['waitRepaymentAmount'] = $waitRepaymentAmount;

        return $this;
    }

    /**
     * Gets waitRepaymentOrderCount
     *
     * @return int|null
     */
    public function getWaitRepaymentOrderCount()
    {
        return $this->container['waitRepaymentOrderCount'];
    }

    /**
     * Sets waitRepaymentOrderCount
     *
     * @param int|null $waitRepaymentOrderCount 用户总的未还的垫资笔数，无论用户是否允许垫资，都会返回该属性
     *
     * @return self
     */
    public function setWaitRepaymentOrderCount($waitRepaymentOrderCount)
    {
        $this->container['waitRepaymentOrderCount'] = $waitRepaymentOrderCount;

        return $this;
    }

    /**
     * Gets waitRepaymentOrderInfos
     *
     * @return \Alipay\OpenAPISDK\Model\WaitRepaymentOrderInfo[]|null
     */
    public function getWaitRepaymentOrderInfos()
    {
        return $this->container['waitRepaymentOrderInfos'];
    }

    /**
     * Sets waitRepaymentOrderInfos
     *
     * @param \Alipay\OpenAPISDK\Model\WaitRepaymentOrderInfo[]|null $waitRepaymentOrderInfos 待还订单列表，无论用户当前状态是否允许垫资，都会返回当前用户在商户下的待还订单信息
     *
     * @return self
     */
    public function setWaitRepaymentOrderInfos($waitRepaymentOrderInfos)
    {
        $this->container['waitRepaymentOrderInfos'] = $waitRepaymentOrderInfos;

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


