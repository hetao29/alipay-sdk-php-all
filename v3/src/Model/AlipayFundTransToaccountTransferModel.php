<?php
/**
 * AlipayFundTransToaccountTransferModel
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
 * AlipayFundTransToaccountTransferModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundTransToaccountTransferModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundTransToaccountTransferModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'extParam' => 'string',
        'outBizNo' => 'string',
        'payeeAccount' => 'string',
        'payeeRealName' => 'string',
        'payeeType' => 'string',
        'payerRealName' => 'string',
        'payerShowName' => 'string',
        'remark' => 'string'
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
        'extParam' => null,
        'outBizNo' => null,
        'payeeAccount' => null,
        'payeeRealName' => null,
        'payeeType' => null,
        'payerRealName' => null,
        'payerShowName' => null,
        'remark' => null
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
        'extParam' => 'ext_param',
        'outBizNo' => 'out_biz_no',
        'payeeAccount' => 'payee_account',
        'payeeRealName' => 'payee_real_name',
        'payeeType' => 'payee_type',
        'payerRealName' => 'payer_real_name',
        'payerShowName' => 'payer_show_name',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'extParam' => 'setExtParam',
        'outBizNo' => 'setOutBizNo',
        'payeeAccount' => 'setPayeeAccount',
        'payeeRealName' => 'setPayeeRealName',
        'payeeType' => 'setPayeeType',
        'payerRealName' => 'setPayerRealName',
        'payerShowName' => 'setPayerShowName',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'extParam' => 'getExtParam',
        'outBizNo' => 'getOutBizNo',
        'payeeAccount' => 'getPayeeAccount',
        'payeeRealName' => 'getPayeeRealName',
        'payeeType' => 'getPayeeType',
        'payerRealName' => 'getPayerRealName',
        'payerShowName' => 'getPayerShowName',
        'remark' => 'getRemark'
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
        $this->container['extParam'] = $data['extParam'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['payeeAccount'] = $data['payeeAccount'] ?? null;
        $this->container['payeeRealName'] = $data['payeeRealName'] ?? null;
        $this->container['payeeType'] = $data['payeeType'] ?? null;
        $this->container['payerRealName'] = $data['payerRealName'] ?? null;
        $this->container['payerShowName'] = $data['payerShowName'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
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
     * @param string|null $amount 转账金额，单位：元。  只支持2位小数，小数点前最大支持13位，金额必须大于等于0.1元。   最大转账金额以实际签约的限额为准。
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets extParam
     *
     * @return string|null
     */
    public function getExtParam()
    {
        return $this->container['extParam'];
    }

    /**
     * Sets extParam
     *
     * @param string|null $extParam 扩展参数，json字符串格式，目前仅支持的key=order_title，表示收款方的转账账单标题，value可以根据自己的业务定制。
     *
     * @return self
     */
    public function setExtParam($extParam)
    {
        $this->container['extParam'] = $extParam;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 商户转账唯一订单号。发起转账来源方定义的转账单据ID，用于将转账回执通知给来源方。  不同来源方给出的ID可以重复，同一个来源方必须保证其ID的唯一性。  只支持半角英文、数字，及“-”、“_”。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets payeeAccount
     *
     * @return string|null
     */
    public function getPayeeAccount()
    {
        return $this->container['payeeAccount'];
    }

    /**
     * Sets payeeAccount
     *
     * @param string|null $payeeAccount 收款方账户。与payee_type配合使用。付款方和收款方不能是同一个账户。
     *
     * @return self
     */
    public function setPayeeAccount($payeeAccount)
    {
        $this->container['payeeAccount'] = $payeeAccount;

        return $this;
    }

    /**
     * Gets payeeRealName
     *
     * @return string|null
     */
    public function getPayeeRealName()
    {
        return $this->container['payeeRealName'];
    }

    /**
     * Sets payeeRealName
     *
     * @param string|null $payeeRealName 收款方真实姓名（最长支持100个英文/50个汉字）。  如果本参数不为空，则会校验该账户在支付宝登记的实名是否与收款方真实姓名一致。
     *
     * @return self
     */
    public function setPayeeRealName($payeeRealName)
    {
        $this->container['payeeRealName'] = $payeeRealName;

        return $this;
    }

    /**
     * Gets payeeType
     *
     * @return string|null
     */
    public function getPayeeType()
    {
        return $this->container['payeeType'];
    }

    /**
     * Sets payeeType
     *
     * @param string|null $payeeType 收款方账户类型。可取值： 1、ALIPAY_USERID：支付宝账号对应的支付宝唯一用户号。以2088开头的16位纯数字组成。 2、ALIPAY_LOGONID：支付宝登录号，支持邮箱和手机号格式。 2、ALIPAY_OPENID：支付宝openid
     *
     * @return self
     */
    public function setPayeeType($payeeType)
    {
        $this->container['payeeType'] = $payeeType;

        return $this;
    }

    /**
     * Gets payerRealName
     *
     * @return string|null
     */
    public function getPayerRealName()
    {
        return $this->container['payerRealName'];
    }

    /**
     * Sets payerRealName
     *
     * @param string|null $payerRealName 付款方真实姓名（最长支持100个英文/50个汉字）。  如果本参数不为空，则会校验该账户在支付宝登记的实名是否与付款方真实姓名一致。
     *
     * @return self
     */
    public function setPayerRealName($payerRealName)
    {
        $this->container['payerRealName'] = $payerRealName;

        return $this;
    }

    /**
     * Gets payerShowName
     *
     * @return string|null
     */
    public function getPayerShowName()
    {
        return $this->container['payerShowName'];
    }

    /**
     * Sets payerShowName
     *
     * @param string|null $payerShowName 付款方姓名（最长支持100个英文/50个汉字）。显示在收款方的账单详情页。如果该字段不传，则默认显示付款方的支付宝认证姓名或单位名称。
     *
     * @return self
     */
    public function setPayerShowName($payerShowName)
    {
        $this->container['payerShowName'] = $payerShowName;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 转账备注（支持200个英文/100个汉字）。  当付款方为企业账户，且转账金额达到（大于等于）50000元，remark不能为空。收款方可见，会展示在收款用户的收支详情中。
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


