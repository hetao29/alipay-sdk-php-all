<?php
/**
 * InteligentUseRule
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
 * InteligentUseRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteligentUseRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteligentUseRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inteligentForbiddenTime' => '\Alipay\OpenAPISDK\Model\InteligentForbiddenTime',
        'inteligentUseTimes' => '\Alipay\OpenAPISDK\Model\InteligentUseTime[]',
        'limitRule' => 'string',
        'minConsume' => 'string',
        'minConsumeCondition' => '\Alipay\OpenAPISDK\Model\InteligentDataCondition',
        'payRedirectUrl' => 'string',
        'suitShops' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'inteligentForbiddenTime' => null,
        'inteligentUseTimes' => null,
        'limitRule' => null,
        'minConsume' => null,
        'minConsumeCondition' => null,
        'payRedirectUrl' => null,
        'suitShops' => null
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
        'inteligentForbiddenTime' => 'inteligent_forbidden_time',
        'inteligentUseTimes' => 'inteligent_use_times',
        'limitRule' => 'limit_rule',
        'minConsume' => 'min_consume',
        'minConsumeCondition' => 'min_consume_condition',
        'payRedirectUrl' => 'pay_redirect_url',
        'suitShops' => 'suit_shops'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inteligentForbiddenTime' => 'setInteligentForbiddenTime',
        'inteligentUseTimes' => 'setInteligentUseTimes',
        'limitRule' => 'setLimitRule',
        'minConsume' => 'setMinConsume',
        'minConsumeCondition' => 'setMinConsumeCondition',
        'payRedirectUrl' => 'setPayRedirectUrl',
        'suitShops' => 'setSuitShops'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inteligentForbiddenTime' => 'getInteligentForbiddenTime',
        'inteligentUseTimes' => 'getInteligentUseTimes',
        'limitRule' => 'getLimitRule',
        'minConsume' => 'getMinConsume',
        'minConsumeCondition' => 'getMinConsumeCondition',
        'payRedirectUrl' => 'getPayRedirectUrl',
        'suitShops' => 'getSuitShops'
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
        $this->container['inteligentForbiddenTime'] = $data['inteligentForbiddenTime'] ?? null;
        $this->container['inteligentUseTimes'] = $data['inteligentUseTimes'] ?? null;
        $this->container['limitRule'] = $data['limitRule'] ?? null;
        $this->container['minConsume'] = $data['minConsume'] ?? null;
        $this->container['minConsumeCondition'] = $data['minConsumeCondition'] ?? null;
        $this->container['payRedirectUrl'] = $data['payRedirectUrl'] ?? null;
        $this->container['suitShops'] = $data['suitShops'] ?? null;
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
     * Gets inteligentForbiddenTime
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentForbiddenTime|null
     */
    public function getInteligentForbiddenTime()
    {
        return $this->container['inteligentForbiddenTime'];
    }

    /**
     * Sets inteligentForbiddenTime
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentForbiddenTime|null $inteligentForbiddenTime inteligentForbiddenTime
     *
     * @return self
     */
    public function setInteligentForbiddenTime($inteligentForbiddenTime)
    {
        $this->container['inteligentForbiddenTime'] = $inteligentForbiddenTime;

        return $this;
    }

    /**
     * Gets inteligentUseTimes
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentUseTime[]|null
     */
    public function getInteligentUseTimes()
    {
        return $this->container['inteligentUseTimes'];
    }

    /**
     * Sets inteligentUseTimes
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentUseTime[]|null $inteligentUseTimes 券可用时间段
     *
     * @return self
     */
    public function setInteligentUseTimes($inteligentUseTimes)
    {
        $this->container['inteligentUseTimes'] = $inteligentUseTimes;

        return $this;
    }

    /**
     * Gets limitRule
     *
     * @return string|null
     */
    public function getLimitRule()
    {
        return $this->container['limitRule'];
    }

    /**
     * Sets limitRule
     *
     * @param string|null $limitRule 优惠券的使用支付渠道限制规  则，  不受支付渠道限制  :USE_NO_LIMIT;  仅限口碑储值卡支付时可用  :USE_ON_CURRENT_PAY_C  HANNEL;  口碑储值卡支付时不可用  :NOT_ALLOWED_USE;  【备注】支付渠道限制不允许修改
     *
     * @return self
     */
    public function setLimitRule($limitRule)
    {
        $this->container['limitRule'] = $limitRule;

        return $this;
    }

    /**
     * Gets minConsume
     *
     * @return string|null
     */
    public function getMinConsume()
    {
        return $this->container['minConsume'];
    }

    /**
     * Sets minConsume
     *
     * @param string|null $minConsume 券核销的最低消费门槛，单位元
     *
     * @return self
     */
    public function setMinConsume($minConsume)
    {
        $this->container['minConsume'] = $minConsume;

        return $this;
    }

    /**
     * Gets minConsumeCondition
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentDataCondition|null
     */
    public function getMinConsumeCondition()
    {
        return $this->container['minConsumeCondition'];
    }

    /**
     * Sets minConsumeCondition
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentDataCondition|null $minConsumeCondition minConsumeCondition
     *
     * @return self
     */
    public function setMinConsumeCondition($minConsumeCondition)
    {
        $this->container['minConsumeCondition'] = $minConsumeCondition;

        return $this;
    }

    /**
     * Gets payRedirectUrl
     *
     * @return string|null
     */
    public function getPayRedirectUrl()
    {
        return $this->container['payRedirectUrl'];
    }

    /**
     * Sets payRedirectUrl
     *
     * @param string|null $payRedirectUrl 券买单跳转链接
     *
     * @return self
     */
    public function setPayRedirectUrl($payRedirectUrl)
    {
        $this->container['payRedirectUrl'] = $payRedirectUrl;

        return $this;
    }

    /**
     * Gets suitShops
     *
     * @return string[]|null
     */
    public function getSuitShops()
    {
        return $this->container['suitShops'];
    }

    /**
     * Sets suitShops
     *
     * @param string[]|null $suitShops 券适用门店列表  仅品牌商发起的招商活动可为空  直发奖类型活动必须与活动适用门店一致  最多支持10w家门店
     *
     * @return self
     */
    public function setSuitShops($suitShops)
    {
        $this->container['suitShops'] = $suitShops;

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


