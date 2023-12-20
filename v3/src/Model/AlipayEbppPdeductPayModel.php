<?php
/**
 * AlipayEbppPdeductPayModel
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
 * AlipayEbppPdeductPayModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppPdeductPayModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppPdeductPayModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentChannel' => 'string',
        'agentCode' => 'string',
        'agreementId' => 'string',
        'billDate' => 'string',
        'billKey' => 'string',
        'extendField' => 'string',
        'fineAmount' => 'string',
        'memo' => 'string',
        'openId' => 'string',
        'outOrderNo' => 'string',
        'payAmount' => 'string',
        'pid' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agentChannel' => null,
        'agentCode' => null,
        'agreementId' => null,
        'billDate' => null,
        'billKey' => null,
        'extendField' => null,
        'fineAmount' => null,
        'memo' => null,
        'openId' => null,
        'outOrderNo' => null,
        'payAmount' => null,
        'pid' => null,
        'userId' => null
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
        'agentChannel' => 'agent_channel',
        'agentCode' => 'agent_code',
        'agreementId' => 'agreement_id',
        'billDate' => 'bill_date',
        'billKey' => 'bill_key',
        'extendField' => 'extend_field',
        'fineAmount' => 'fine_amount',
        'memo' => 'memo',
        'openId' => 'open_id',
        'outOrderNo' => 'out_order_no',
        'payAmount' => 'pay_amount',
        'pid' => 'pid',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentChannel' => 'setAgentChannel',
        'agentCode' => 'setAgentCode',
        'agreementId' => 'setAgreementId',
        'billDate' => 'setBillDate',
        'billKey' => 'setBillKey',
        'extendField' => 'setExtendField',
        'fineAmount' => 'setFineAmount',
        'memo' => 'setMemo',
        'openId' => 'setOpenId',
        'outOrderNo' => 'setOutOrderNo',
        'payAmount' => 'setPayAmount',
        'pid' => 'setPid',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentChannel' => 'getAgentChannel',
        'agentCode' => 'getAgentCode',
        'agreementId' => 'getAgreementId',
        'billDate' => 'getBillDate',
        'billKey' => 'getBillKey',
        'extendField' => 'getExtendField',
        'fineAmount' => 'getFineAmount',
        'memo' => 'getMemo',
        'openId' => 'getOpenId',
        'outOrderNo' => 'getOutOrderNo',
        'payAmount' => 'getPayAmount',
        'pid' => 'getPid',
        'userId' => 'getUserId'
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
        $this->container['agentChannel'] = $data['agentChannel'] ?? null;
        $this->container['agentCode'] = $data['agentCode'] ?? null;
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['billDate'] = $data['billDate'] ?? null;
        $this->container['billKey'] = $data['billKey'] ?? null;
        $this->container['extendField'] = $data['extendField'] ?? null;
        $this->container['fineAmount'] = $data['fineAmount'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets agentChannel
     *
     * @return string|null
     */
    public function getAgentChannel()
    {
        return $this->container['agentChannel'];
    }

    /**
     * Sets agentChannel
     *
     * @param string|null $agentChannel 渠道码，如用户通过机构通过服务窗进来签约则是PUBLICFORM，此值可随意传，只要不空就行
     *
     * @return self
     */
    public function setAgentChannel($agentChannel)
    {
        $this->container['agentChannel'] = $agentChannel;

        return $this;
    }

    /**
     * Gets agentCode
     *
     * @return string|null
     */
    public function getAgentCode()
    {
        return $this->container['agentCode'];
    }

    /**
     * Sets agentCode
     *
     * @param string|null $agentCode 二级渠道码，预留字段
     *
     * @return self
     */
    public function setAgentCode($agentCode)
    {
        $this->container['agentCode'] = $agentCode;

        return $this;
    }

    /**
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 支付宝代扣协议Id
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets billDate
     *
     * @return string|null
     */
    public function getBillDate()
    {
        return $this->container['billDate'];
    }

    /**
     * Sets billDate
     *
     * @param string|null $billDate 账期
     *
     * @return self
     */
    public function setBillDate($billDate)
    {
        $this->container['billDate'] = $billDate;

        return $this;
    }

    /**
     * Gets billKey
     *
     * @return string|null
     */
    public function getBillKey()
    {
        return $this->container['billKey'];
    }

    /**
     * Sets billKey
     *
     * @param string|null $billKey 户号，缴费单位用于标识每一户的唯一性的
     *
     * @return self
     */
    public function setBillKey($billKey)
    {
        $this->container['billKey'] = $billKey;

        return $this;
    }

    /**
     * Gets extendField
     *
     * @return string|null
     */
    public function getExtendField()
    {
        return $this->container['extendField'];
    }

    /**
     * Sets extendField
     *
     * @param string|null $extendField 扩展参数。必须以key value形式定义，  转为json为格式：{\"key1\":\"value1\",\"key2\":\"value2\",  \"key3\":\"value3\",\"key4\":\"value4\"}   后端会直接转换为MAP对象，转换异常会报参数格式错误
     *
     * @return self
     */
    public function setExtendField($extendField)
    {
        $this->container['extendField'] = $extendField;

        return $this;
    }

    /**
     * Gets fineAmount
     *
     * @return string|null
     */
    public function getFineAmount()
    {
        return $this->container['fineAmount'];
    }

    /**
     * Sets fineAmount
     *
     * @param string|null $fineAmount 滞纳金
     *
     * @return self
     */
    public function setFineAmount($fineAmount)
    {
        $this->container['fineAmount'] = $fineAmount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注信息
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 用户UserId在应用AppId下的唯一用户标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商户外部业务流水号
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 扣款金额，支付总金额，包含滞纳金
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 商户PartnerId
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 用户ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


