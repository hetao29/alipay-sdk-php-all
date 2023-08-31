<?php
/**
 * SignParams
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
 * SignParams Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SignParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessParams' => '\Alipay\OpenAPISDK\Model\AccessParams',
        'allowHuazhiDegrade' => 'bool',
        'externalAgreementNo' => 'string',
        'externalLogonId' => 'string',
        'periodRuleParams' => '\Alipay\OpenAPISDK\Model\PeriodRuleParams',
        'personalProductCode' => 'string',
        'productCode' => 'string',
        'signNotifyUrl' => 'string',
        'signScene' => 'string',
        'subMerchant' => '\Alipay\OpenAPISDK\Model\SignMerchantParams'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessParams' => null,
        'allowHuazhiDegrade' => null,
        'externalAgreementNo' => null,
        'externalLogonId' => null,
        'periodRuleParams' => null,
        'personalProductCode' => null,
        'productCode' => null,
        'signNotifyUrl' => null,
        'signScene' => null,
        'subMerchant' => null
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
        'accessParams' => 'access_params',
        'allowHuazhiDegrade' => 'allow_huazhi_degrade',
        'externalAgreementNo' => 'external_agreement_no',
        'externalLogonId' => 'external_logon_id',
        'periodRuleParams' => 'period_rule_params',
        'personalProductCode' => 'personal_product_code',
        'productCode' => 'product_code',
        'signNotifyUrl' => 'sign_notify_url',
        'signScene' => 'sign_scene',
        'subMerchant' => 'sub_merchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessParams' => 'setAccessParams',
        'allowHuazhiDegrade' => 'setAllowHuazhiDegrade',
        'externalAgreementNo' => 'setExternalAgreementNo',
        'externalLogonId' => 'setExternalLogonId',
        'periodRuleParams' => 'setPeriodRuleParams',
        'personalProductCode' => 'setPersonalProductCode',
        'productCode' => 'setProductCode',
        'signNotifyUrl' => 'setSignNotifyUrl',
        'signScene' => 'setSignScene',
        'subMerchant' => 'setSubMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessParams' => 'getAccessParams',
        'allowHuazhiDegrade' => 'getAllowHuazhiDegrade',
        'externalAgreementNo' => 'getExternalAgreementNo',
        'externalLogonId' => 'getExternalLogonId',
        'periodRuleParams' => 'getPeriodRuleParams',
        'personalProductCode' => 'getPersonalProductCode',
        'productCode' => 'getProductCode',
        'signNotifyUrl' => 'getSignNotifyUrl',
        'signScene' => 'getSignScene',
        'subMerchant' => 'getSubMerchant'
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
        $this->container['accessParams'] = $data['accessParams'] ?? null;
        $this->container['allowHuazhiDegrade'] = $data['allowHuazhiDegrade'] ?? null;
        $this->container['externalAgreementNo'] = $data['externalAgreementNo'] ?? null;
        $this->container['externalLogonId'] = $data['externalLogonId'] ?? null;
        $this->container['periodRuleParams'] = $data['periodRuleParams'] ?? null;
        $this->container['personalProductCode'] = $data['personalProductCode'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['signNotifyUrl'] = $data['signNotifyUrl'] ?? null;
        $this->container['signScene'] = $data['signScene'] ?? null;
        $this->container['subMerchant'] = $data['subMerchant'] ?? null;
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
     * Gets accessParams
     *
     * @return \Alipay\OpenAPISDK\Model\AccessParams|null
     */
    public function getAccessParams()
    {
        return $this->container['accessParams'];
    }

    /**
     * Sets accessParams
     *
     * @param \Alipay\OpenAPISDK\Model\AccessParams|null $accessParams accessParams
     *
     * @return self
     */
    public function setAccessParams($accessParams)
    {
        $this->container['accessParams'] = $accessParams;

        return $this;
    }

    /**
     * Gets allowHuazhiDegrade
     *
     * @return bool|null
     */
    public function getAllowHuazhiDegrade()
    {
        return $this->container['allowHuazhiDegrade'];
    }

    /**
     * Sets allowHuazhiDegrade
     *
     * @param bool|null $allowHuazhiDegrade 是否允许花芝GO降级成原代扣（即销售方案指定的代扣产品），在花芝GO场景下才会使用该值。取值：true-允许降级，false-不允许降级。默认为true。
     *
     * @return self
     */
    public function setAllowHuazhiDegrade($allowHuazhiDegrade)
    {
        $this->container['allowHuazhiDegrade'] = $allowHuazhiDegrade;

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
     * @param string|null $externalAgreementNo 商户签约号，代扣协议中标示用户的唯一签约号（确保在商户系统中唯一）。 格式规则：支持大写小写字母和数字，最长32位。 商户系统按需传入，如果同一用户在同一产品码、同一签约场景下，签订了多份代扣协议，那么需要指定并传入该值。
     *
     * @return self
     */
    public function setExternalAgreementNo($externalAgreementNo)
    {
        $this->container['externalAgreementNo'] = $externalAgreementNo;

        return $this;
    }

    /**
     * Gets externalLogonId
     *
     * @return string|null
     */
    public function getExternalLogonId()
    {
        return $this->container['externalLogonId'];
    }

    /**
     * Sets externalLogonId
     *
     * @param string|null $externalLogonId 用户在商户网站的登录账号，用于在签约页面展示，如果为空，则不展示
     *
     * @return self
     */
    public function setExternalLogonId($externalLogonId)
    {
        $this->container['externalLogonId'] = $externalLogonId;

        return $this;
    }

    /**
     * Gets periodRuleParams
     *
     * @return \Alipay\OpenAPISDK\Model\PeriodRuleParams|null
     */
    public function getPeriodRuleParams()
    {
        return $this->container['periodRuleParams'];
    }

    /**
     * Sets periodRuleParams
     *
     * @param \Alipay\OpenAPISDK\Model\PeriodRuleParams|null $periodRuleParams periodRuleParams
     *
     * @return self
     */
    public function setPeriodRuleParams($periodRuleParams)
    {
        $this->container['periodRuleParams'] = $periodRuleParams;

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
     * @param string|null $personalProductCode 个人签约产品码，商户和支付宝签约时确定。
     *
     * @return self
     */
    public function setPersonalProductCode($personalProductCode)
    {
        $this->container['personalProductCode'] = $personalProductCode;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 商家和支付宝签约的产品码。 商家扣款产品传入固定值：GENERAL_WITHHOLDING
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets signNotifyUrl
     *
     * @return string|null
     */
    public function getSignNotifyUrl()
    {
        return $this->container['signNotifyUrl'];
    }

    /**
     * Sets signNotifyUrl
     *
     * @param string|null $signNotifyUrl 签约成功后商户用于接收异步通知的地址。如果不传入，签约与支付的异步通知都会发到外层notify_url参数传入的地址；如果外层也未传入，签约与支付的异步通知都会发到商户appid配置的网关地址。
     *
     * @return self
     */
    public function setSignNotifyUrl($signNotifyUrl)
    {
        $this->container['signNotifyUrl'] = $signNotifyUrl;

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
     * @param string|null $signScene 协议签约场景，商户和支付宝签约时确定，商户可咨询技术支持。
     *
     * @return self
     */
    public function setSignScene($signScene)
    {
        $this->container['signScene'] = $signScene;

        return $this;
    }

    /**
     * Gets subMerchant
     *
     * @return \Alipay\OpenAPISDK\Model\SignMerchantParams|null
     */
    public function getSubMerchant()
    {
        return $this->container['subMerchant'];
    }

    /**
     * Sets subMerchant
     *
     * @param \Alipay\OpenAPISDK\Model\SignMerchantParams|null $subMerchant subMerchant
     *
     * @return self
     */
    public function setSubMerchant($subMerchant)
    {
        $this->container['subMerchant'] = $subMerchant;

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


