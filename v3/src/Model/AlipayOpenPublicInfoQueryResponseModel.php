<?php
/**
 * AlipayOpenPublicInfoQueryResponseModel
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
 * AlipayOpenPublicInfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicInfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicInfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appName' => 'string',
        'auditDesc' => 'string',
        'auditStatus' => 'string',
        'auditStatusList' => '\Alipay\OpenAPISDK\Model\PublicAuditStatus[]',
        'backgroundUrl' => 'string',
        'introduction' => 'string',
        'isOnline' => 'string',
        'isRelease' => 'string',
        'logoUrl' => 'string',
        'mccCodeDesc' => 'string',
        'publicGreeting' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appName' => null,
        'auditDesc' => null,
        'auditStatus' => null,
        'auditStatusList' => null,
        'backgroundUrl' => null,
        'introduction' => null,
        'isOnline' => null,
        'isRelease' => null,
        'logoUrl' => null,
        'mccCodeDesc' => null,
        'publicGreeting' => null
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
        'appName' => 'app_name',
        'auditDesc' => 'audit_desc',
        'auditStatus' => 'audit_status',
        'auditStatusList' => 'audit_status_list',
        'backgroundUrl' => 'background_url',
        'introduction' => 'introduction',
        'isOnline' => 'is_online',
        'isRelease' => 'is_release',
        'logoUrl' => 'logo_url',
        'mccCodeDesc' => 'mcc_code_desc',
        'publicGreeting' => 'public_greeting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appName' => 'setAppName',
        'auditDesc' => 'setAuditDesc',
        'auditStatus' => 'setAuditStatus',
        'auditStatusList' => 'setAuditStatusList',
        'backgroundUrl' => 'setBackgroundUrl',
        'introduction' => 'setIntroduction',
        'isOnline' => 'setIsOnline',
        'isRelease' => 'setIsRelease',
        'logoUrl' => 'setLogoUrl',
        'mccCodeDesc' => 'setMccCodeDesc',
        'publicGreeting' => 'setPublicGreeting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appName' => 'getAppName',
        'auditDesc' => 'getAuditDesc',
        'auditStatus' => 'getAuditStatus',
        'auditStatusList' => 'getAuditStatusList',
        'backgroundUrl' => 'getBackgroundUrl',
        'introduction' => 'getIntroduction',
        'isOnline' => 'getIsOnline',
        'isRelease' => 'getIsRelease',
        'logoUrl' => 'getLogoUrl',
        'mccCodeDesc' => 'getMccCodeDesc',
        'publicGreeting' => 'getPublicGreeting'
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
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['auditDesc'] = $data['auditDesc'] ?? null;
        $this->container['auditStatus'] = $data['auditStatus'] ?? null;
        $this->container['auditStatusList'] = $data['auditStatusList'] ?? null;
        $this->container['backgroundUrl'] = $data['backgroundUrl'] ?? null;
        $this->container['introduction'] = $data['introduction'] ?? null;
        $this->container['isOnline'] = $data['isOnline'] ?? null;
        $this->container['isRelease'] = $data['isRelease'] ?? null;
        $this->container['logoUrl'] = $data['logoUrl'] ?? null;
        $this->container['mccCodeDesc'] = $data['mccCodeDesc'] ?? null;
        $this->container['publicGreeting'] = $data['publicGreeting'] ?? null;
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
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 生活号名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets auditDesc
     *
     * @return string|null
     */
    public function getAuditDesc()
    {
        return $this->container['auditDesc'];
    }

    /**
     * Sets auditDesc
     *
     * @param string|null $auditDesc 最新审核状态描述，如果审核驳回则有相关的驳回理由
     *
     * @return self
     */
    public function setAuditDesc($auditDesc)
    {
        $this->container['auditDesc'] = $auditDesc;

        return $this;
    }

    /**
     * Gets auditStatus
     *
     * @return string|null
     */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
     * Sets auditStatus
     *
     * @param string|null $auditStatus 最新审核状态，对于系统商而言，只有四个状态，AUDITING：审核中，AUDIT_FAILED：审核驳回，AUDIT_SUCCESS：审核通过，AUDIT_NORMAL：无审核状态（当前没有处于审核过程的工单）
     *
     * @return self
     */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;

        return $this;
    }

    /**
     * Gets auditStatusList
     *
     * @return \Alipay\OpenAPISDK\Model\PublicAuditStatus[]|null
     */
    public function getAuditStatusList()
    {
        return $this->container['auditStatusList'];
    }

    /**
     * Sets auditStatusList
     *
     * @param \Alipay\OpenAPISDK\Model\PublicAuditStatus[]|null $auditStatusList 审核状态表，目前支持名称、头像、名称与头像、简介审核状态
     *
     * @return self
     */
    public function setAuditStatusList($auditStatusList)
    {
        $this->container['auditStatusList'] = $auditStatusList;

        return $this;
    }

    /**
     * Gets backgroundUrl
     *
     * @return string|null
     */
    public function getBackgroundUrl()
    {
        return $this->container['backgroundUrl'];
    }

    /**
     * Sets backgroundUrl
     *
     * @param string|null $backgroundUrl 背景图片地址
     *
     * @return self
     */
    public function setBackgroundUrl($backgroundUrl)
    {
        $this->container['backgroundUrl'] = $backgroundUrl;

        return $this;
    }

    /**
     * Gets introduction
     *
     * @return string|null
     */
    public function getIntroduction()
    {
        return $this->container['introduction'];
    }

    /**
     * Sets introduction
     *
     * @param string|null $introduction 生活号简介
     *
     * @return self
     */
    public function setIntroduction($introduction)
    {
        $this->container['introduction'] = $introduction;

        return $this;
    }

    /**
     * Gets isOnline
     *
     * @return string|null
     */
    public function getIsOnline()
    {
        return $this->container['isOnline'];
    }

    /**
     * Sets isOnline
     *
     * @param string|null $isOnline 生活号是否上线，T表示上线，F表示未上线
     *
     * @return self
     */
    public function setIsOnline($isOnline)
    {
        $this->container['isOnline'] = $isOnline;

        return $this;
    }

    /**
     * Gets isRelease
     *
     * @return string|null
     */
    public function getIsRelease()
    {
        return $this->container['isRelease'];
    }

    /**
     * Sets isRelease
     *
     * @param string|null $isRelease 生活号是否上架，T表示上架，上架即可在支付宝客户端被搜索到，F表示未上架
     *
     * @return self
     */
    public function setIsRelease($isRelease)
    {
        $this->container['isRelease'] = $isRelease;

        return $this;
    }

    /**
     * Gets logoUrl
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
     * Sets logoUrl
     *
     * @param string|null $logoUrl 生活号头像地址
     *
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;

        return $this;
    }

    /**
     * Gets mccCodeDesc
     *
     * @return string|null
     */
    public function getMccCodeDesc()
    {
        return $this->container['mccCodeDesc'];
    }

    /**
     * Sets mccCodeDesc
     *
     * @param string|null $mccCodeDesc 商家经营类目，详情参见 <a href=\"https://opendocs.alipay.com/open/01n22g\">商家经营类目</a>
     *
     * @return self
     */
    public function setMccCodeDesc($mccCodeDesc)
    {
        $this->container['mccCodeDesc'] = $mccCodeDesc;

        return $this;
    }

    /**
     * Gets publicGreeting
     *
     * @return string|null
     */
    public function getPublicGreeting()
    {
        return $this->container['publicGreeting'];
    }

    /**
     * Sets publicGreeting
     *
     * @param string|null $publicGreeting 欢迎语
     *
     * @return self
     */
    public function setPublicGreeting($publicGreeting)
    {
        $this->container['publicGreeting'] = $publicGreeting;

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


