<?php
/**
 * ZolozAuthenticationCustomerFtokenQueryResponseModel
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
 * ZolozAuthenticationCustomerFtokenQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZolozAuthenticationCustomerFtokenQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZolozAuthenticationCustomerFtokenQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ageCheckResult' => 'string',
        'authimgBase64' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'faceId' => 'string',
        'openId' => 'string',
        'uid' => 'string',
        'uidTelPairList' => '\Alipay\OpenAPISDK\Model\ZhubUidTelPair[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ageCheckResult' => null,
        'authimgBase64' => null,
        'certName' => null,
        'certNo' => null,
        'faceId' => null,
        'openId' => null,
        'uid' => null,
        'uidTelPairList' => null
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
        'ageCheckResult' => 'age_check_result',
        'authimgBase64' => 'authimg_base_64',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'faceId' => 'face_id',
        'openId' => 'open_id',
        'uid' => 'uid',
        'uidTelPairList' => 'uid_tel_pair_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ageCheckResult' => 'setAgeCheckResult',
        'authimgBase64' => 'setAuthimgBase64',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'faceId' => 'setFaceId',
        'openId' => 'setOpenId',
        'uid' => 'setUid',
        'uidTelPairList' => 'setUidTelPairList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ageCheckResult' => 'getAgeCheckResult',
        'authimgBase64' => 'getAuthimgBase64',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'faceId' => 'getFaceId',
        'openId' => 'getOpenId',
        'uid' => 'getUid',
        'uidTelPairList' => 'getUidTelPairList'
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
        $this->container['ageCheckResult'] = $data['ageCheckResult'] ?? null;
        $this->container['authimgBase64'] = $data['authimgBase64'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['faceId'] = $data['faceId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['uid'] = $data['uid'] ?? null;
        $this->container['uidTelPairList'] = $data['uidTelPairList'] ?? null;
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
     * Gets ageCheckResult
     *
     * @return string|null
     */
    public function getAgeCheckResult()
    {
        return $this->container['ageCheckResult'];
    }

    /**
     * Sets ageCheckResult
     *
     * @param string|null $ageCheckResult 年龄是否在指定范围内，未指定范围则返回空，true/false
     *
     * @return self
     */
    public function setAgeCheckResult($ageCheckResult)
    {
        $this->container['ageCheckResult'] = $ageCheckResult;

        return $this;
    }

    /**
     * Gets authimgBase64
     *
     * @return string|null
     */
    public function getAuthimgBase64()
    {
        return $this->container['authimgBase64'];
    }

    /**
     * Sets authimgBase64
     *
     * @param string|null $authimgBase64 图片base64 encodeString
     *
     * @return self
     */
    public function setAuthimgBase64($authimgBase64)
    {
        $this->container['authimgBase64'] = $authimgBase64;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName 证件姓名
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 身份证号码
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets faceId
     *
     * @return string|null
     */
    public function getFaceId()
    {
        return $this->container['faceId'];
    }

    /**
     * Sets faceId
     *
     * @param string|null $faceId 由ISV定义的对自然人唯一编码，举例可以是身份证号码和姓名的MD5值，或者是其他编码方式，要求脱敏、随机且在ISV可以唯一说明一个自然人
     *
     * @return self
     */
    public function setFaceId($faceId)
    {
        $this->container['faceId'] = $faceId;

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
     * @param string|null $openId 支付宝用户open_id
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid 支付宝uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets uidTelPairList
     *
     * @return \Alipay\OpenAPISDK\Model\ZhubUidTelPair[]|null
     */
    public function getUidTelPairList()
    {
        return $this->container['uidTelPairList'];
    }

    /**
     * Sets uidTelPairList
     *
     * @param \Alipay\OpenAPISDK\Model\ZhubUidTelPair[]|null $uidTelPairList 用户名信息返回的列表
     *
     * @return self
     */
    public function setUidTelPairList($uidTelPairList)
    {
        $this->container['uidTelPairList'] = $uidTelPairList;

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


