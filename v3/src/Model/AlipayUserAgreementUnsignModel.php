<?php
/**
 * AlipayUserAgreementUnsignModel
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
 * AlipayUserAgreementUnsignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayUserAgreementUnsignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayUserAgreementUnsignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'alipayLogonId' => 'string',
        'alipayOpenId' => 'string',
        'alipayUserId' => 'string',
        'extendParams' => 'string',
        'externalAgreementNo' => 'string',
        'notifyUrl' => 'string',
        'operateType' => 'string',
        'personalProductCode' => 'string',
        'signScene' => 'string',
        'thirdPartyType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementNo' => null,
        'alipayLogonId' => null,
        'alipayOpenId' => null,
        'alipayUserId' => null,
        'extendParams' => null,
        'externalAgreementNo' => null,
        'notifyUrl' => null,
        'operateType' => null,
        'personalProductCode' => null,
        'signScene' => null,
        'thirdPartyType' => null
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
        'agreementNo' => 'agreement_no',
        'alipayLogonId' => 'alipay_logon_id',
        'alipayOpenId' => 'alipay_open_id',
        'alipayUserId' => 'alipay_user_id',
        'extendParams' => 'extend_params',
        'externalAgreementNo' => 'external_agreement_no',
        'notifyUrl' => 'notify_url',
        'operateType' => 'operate_type',
        'personalProductCode' => 'personal_product_code',
        'signScene' => 'sign_scene',
        'thirdPartyType' => 'third_party_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'alipayLogonId' => 'setAlipayLogonId',
        'alipayOpenId' => 'setAlipayOpenId',
        'alipayUserId' => 'setAlipayUserId',
        'extendParams' => 'setExtendParams',
        'externalAgreementNo' => 'setExternalAgreementNo',
        'notifyUrl' => 'setNotifyUrl',
        'operateType' => 'setOperateType',
        'personalProductCode' => 'setPersonalProductCode',
        'signScene' => 'setSignScene',
        'thirdPartyType' => 'setThirdPartyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'alipayLogonId' => 'getAlipayLogonId',
        'alipayOpenId' => 'getAlipayOpenId',
        'alipayUserId' => 'getAlipayUserId',
        'extendParams' => 'getExtendParams',
        'externalAgreementNo' => 'getExternalAgreementNo',
        'notifyUrl' => 'getNotifyUrl',
        'operateType' => 'getOperateType',
        'personalProductCode' => 'getPersonalProductCode',
        'signScene' => 'getSignScene',
        'thirdPartyType' => 'getThirdPartyType'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['alipayLogonId'] = $data['alipayLogonId'] ?? null;
        $this->container['alipayOpenId'] = $data['alipayOpenId'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['externalAgreementNo'] = $data['externalAgreementNo'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['operateType'] = $data['operateType'] ?? null;
        $this->container['personalProductCode'] = $data['personalProductCode'] ?? null;
        $this->container['signScene'] = $data['signScene'] ?? null;
        $this->container['thirdPartyType'] = $data['thirdPartyType'] ?? null;
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
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ），如果传了该参数，其他参数会被忽略 。 本参数与 external_agreement_no 不可同时为空。
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets alipayLogonId
     *
     * @return string|null
     */
    public function getAlipayLogonId()
    {
        return $this->container['alipayLogonId'];
    }

    /**
     * Sets alipayLogonId
     *
     * @param string|null $alipayLogonId 用户的支付宝登录账号，支持邮箱或手机号码格式。本参数与alipay_user_id 不可同时为空，若都填写，则以alipay_user_id 为准。
     *
     * @return self
     */
    public function setAlipayLogonId($alipayLogonId)
    {
        $this->container['alipayLogonId'] = $alipayLogonId;

        return $this;
    }

    /**
     * Gets alipayOpenId
     *
     * @return string|null
     */
    public function getAlipayOpenId()
    {
        return $this->container['alipayOpenId'];
    }

    /**
     * Sets alipayOpenId
     *
     * @param string|null $alipayOpenId 用户的支付宝账号对应的支付宝唯一用户号， 本参数与alipay_logon_id 不可同时为空，若都填写，则以本参数为准，优先级高于alipay_logon_id。
     *
     * @return self
     */
    public function setAlipayOpenId($alipayOpenId)
    {
        $this->container['alipayOpenId'] = $alipayOpenId;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 用户的支付宝账号对应的支付宝唯一用户号，以2088 开头的 16 位纯数字 组成;  本参数与alipay_logon_id 不可同时为空，若都填写，则以本参数为准，优先级高于alipay_logon_id。
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
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
     * @param string|null $extendParams 扩展参数
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets externalAgreementNo
     *
     * @return string|null
     */
    public function getExternalAgreementNo()
    {
        return $this->container['externalAgreementNo'];
    }

    /**
     * Sets externalAgreementNo
     *
     * @param string|null $externalAgreementNo 代扣协议中标示用户的唯一签约号(确保在商户系统中 唯一)。 格式规则:支持大写小写字母和数字，最长 32 位。 注意：若调用 alipay.user.agreement.page.sign(支付宝个人协议页面签约接口) 签约时传入 external_agreement_no 则该值必填且需与签约接口传入值相同。
     *
     * @return self
     */
    public function setExternalAgreementNo($externalAgreementNo)
    {
        $this->container['externalAgreementNo'] = $externalAgreementNo;

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
     * Gets operateType
     *
     * @return string|null
     */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
     * Sets operateType
     *
     * @param string|null $operateType 注意：仅异步解约需传入，其余情况无需传递本参数。
     *
     * @return self
     */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;

        return $this;
    }

    /**
     * Gets personalProductCode
     *
     * @return string|null
     */
    public function getPersonalProductCode()
    {
        return $this->container['personalProductCode'];
    }

    /**
     * Sets personalProductCode
     *
     * @param string|null $personalProductCode 协议产品码，商户和支付宝签约时确定，不同业务场景对应不同的签约产品码。
     *
     * @return self
     */
    public function setPersonalProductCode($personalProductCode)
    {
        $this->container['personalProductCode'] = $personalProductCode;

        return $this;
    }

    /**
     * Gets signScene
     *
     * @return string|null
     */
    public function getSignScene()
    {
        return $this->container['signScene'];
    }

    /**
     * Sets signScene
     *
     * @param string|null $signScene 签约协议场景，该值需要与系统/页面签约接口调用时传入的值保持一 致。如：周期扣款场景，需与调用 alipay.user.agreement.page.sign(支付宝个人协议页面签约接口) 签约时的 sign_scene 相同。 当传入商户签约号 external_agreement_no时，场景不能为空或默认值 DEFAULT|DEFAULT。
     *
     * @return self
     */
    public function setSignScene($signScene)
    {
        $this->container['signScene'] = $signScene;

        return $this;
    }

    /**
     * Gets thirdPartyType
     *
     * @return string|null
     */
    public function getThirdPartyType()
    {
        return $this->container['thirdPartyType'];
    }

    /**
     * Sets thirdPartyType
     *
     * @param string|null $thirdPartyType 签约第三方主体类型。对于三方协议，表示当前用户和哪一类的第三方主体进行签约。
     *
     * @return self
     */
    public function setThirdPartyType($thirdPartyType)
    {
        $this->container['thirdPartyType'] = $thirdPartyType;

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


