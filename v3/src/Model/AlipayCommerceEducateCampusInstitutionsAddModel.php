<?php
/**
 * AlipayCommerceEducateCampusInstitutionsAddModel
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
 * AlipayCommerceEducateCampusInstitutionsAddModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceEducateCampusInstitutionsAddModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceEducateCampusInstitutionsAddModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardPictUrl' => 'string',
        'cityCode' => 'string',
        'instName' => 'string',
        'instStdCode' => 'string',
        'learningStage' => 'string',
        'provinceCode' => 'string',
        'schoolProperty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardPictUrl' => null,
        'cityCode' => null,
        'instName' => null,
        'instStdCode' => null,
        'learningStage' => null,
        'provinceCode' => null,
        'schoolProperty' => null
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
        'cardPictUrl' => 'card_pict_url',
        'cityCode' => 'city_code',
        'instName' => 'inst_name',
        'instStdCode' => 'inst_std_code',
        'learningStage' => 'learning_stage',
        'provinceCode' => 'province_code',
        'schoolProperty' => 'school_property'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardPictUrl' => 'setCardPictUrl',
        'cityCode' => 'setCityCode',
        'instName' => 'setInstName',
        'instStdCode' => 'setInstStdCode',
        'learningStage' => 'setLearningStage',
        'provinceCode' => 'setProvinceCode',
        'schoolProperty' => 'setSchoolProperty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardPictUrl' => 'getCardPictUrl',
        'cityCode' => 'getCityCode',
        'instName' => 'getInstName',
        'instStdCode' => 'getInstStdCode',
        'learningStage' => 'getLearningStage',
        'provinceCode' => 'getProvinceCode',
        'schoolProperty' => 'getSchoolProperty'
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
        $this->container['cardPictUrl'] = $data['cardPictUrl'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['instName'] = $data['instName'] ?? null;
        $this->container['instStdCode'] = $data['instStdCode'] ?? null;
        $this->container['learningStage'] = $data['learningStage'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
        $this->container['schoolProperty'] = $data['schoolProperty'] ?? null;
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
     * Gets cardPictUrl
     *
     * @return string|null
     */
    public function getCardPictUrl()
    {
        return $this->container['cardPictUrl'];
    }

    /**
     * Sets cardPictUrl
     *
     * @param string|null $cardPictUrl 事业单位法人证书或办学许可证的图片。入驻学校时，如果流入人工审核，会根据此图片进行辅助验证。
     *
     * @return self
     */
    public function setCardPictUrl($cardPictUrl)
    {
        $this->container['cardPictUrl'] = $cardPictUrl;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 市
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets instName
     *
     * @return string|null
     */
    public function getInstName()
    {
        return $this->container['instName'];
    }

    /**
     * Sets instName
     *
     * @param string|null $instName 入驻的学校名称，必须是完整的学校全称
     *
     * @return self
     */
    public function setInstName($instName)
    {
        $this->container['instName'] = $instName;

        return $this;
    }

    /**
     * Gets instStdCode
     *
     * @return string|null
     */
    public function getInstStdCode()
    {
        return $this->container['instStdCode'];
    }

    /**
     * Sets instStdCode
     *
     * @param string|null $instStdCode 学校外标，使用统一社会信用编码
     *
     * @return self
     */
    public function setInstStdCode($instStdCode)
    {
        $this->container['instStdCode'] = $instStdCode;

        return $this;
    }

    /**
     * Gets learningStage
     *
     * @return string|null
     */
    public function getLearningStage()
    {
        return $this->container['learningStage'];
    }

    /**
     * Sets learningStage
     *
     * @param string|null $learningStage 办学阶段。 枚举值如下： KINDERGARTEN（幼儿园） PRIMARY_SCHOOL（小学）  MIDDLE_SCHOOL（初中）  HIGH_SCHOOL（高中） SECONDARY_VOCATIONAL_SCHOOL（中职中专）  注意：如果学校兼有多种属性，可以连写用英文逗号拆分，如：MIDDLE_SCHOOL,HIGH_SCHOOL 代表兼有初中部和高中部；
     *
     * @return self
     */
    public function setLearningStage($learningStage)
    {
        $this->container['learningStage'] = $learningStage;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

        return $this;
    }

    /**
     * Gets schoolProperty
     *
     * @return string|null
     */
    public function getSchoolProperty()
    {
        return $this->container['schoolProperty'];
    }

    /**
     * Sets schoolProperty
     *
     * @param string|null $schoolProperty 学校性质.枚举值如下：  1：公立  2：民办
     *
     * @return self
     */
    public function setSchoolProperty($schoolProperty)
    {
        $this->container['schoolProperty'] = $schoolProperty;

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


