<?php
/**
 * AlipayOpenMiniInnerversionLastQueryResponseModel
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
 * AlipayOpenMiniInnerversionLastQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionLastQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionLastQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appDesc' => 'string',
        'appName' => 'string',
        'appVersion' => 'string',
        'bundleId' => 'string',
        'categoryIds' => 'string',
        'englishName' => 'string',
        'logoUrl' => 'string',
        'miniAppId' => 'string',
        'servicePhone' => 'string',
        'slogan' => 'string',
        'status' => 'string',
        'subApplicationType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appDesc' => null,
        'appName' => null,
        'appVersion' => null,
        'bundleId' => null,
        'categoryIds' => null,
        'englishName' => null,
        'logoUrl' => null,
        'miniAppId' => null,
        'servicePhone' => null,
        'slogan' => null,
        'status' => null,
        'subApplicationType' => null
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
        'appDesc' => 'app_desc',
        'appName' => 'app_name',
        'appVersion' => 'app_version',
        'bundleId' => 'bundle_id',
        'categoryIds' => 'category_ids',
        'englishName' => 'english_name',
        'logoUrl' => 'logo_url',
        'miniAppId' => 'mini_app_id',
        'servicePhone' => 'service_phone',
        'slogan' => 'slogan',
        'status' => 'status',
        'subApplicationType' => 'sub_application_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appDesc' => 'setAppDesc',
        'appName' => 'setAppName',
        'appVersion' => 'setAppVersion',
        'bundleId' => 'setBundleId',
        'categoryIds' => 'setCategoryIds',
        'englishName' => 'setEnglishName',
        'logoUrl' => 'setLogoUrl',
        'miniAppId' => 'setMiniAppId',
        'servicePhone' => 'setServicePhone',
        'slogan' => 'setSlogan',
        'status' => 'setStatus',
        'subApplicationType' => 'setSubApplicationType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appDesc' => 'getAppDesc',
        'appName' => 'getAppName',
        'appVersion' => 'getAppVersion',
        'bundleId' => 'getBundleId',
        'categoryIds' => 'getCategoryIds',
        'englishName' => 'getEnglishName',
        'logoUrl' => 'getLogoUrl',
        'miniAppId' => 'getMiniAppId',
        'servicePhone' => 'getServicePhone',
        'slogan' => 'getSlogan',
        'status' => 'getStatus',
        'subApplicationType' => 'getSubApplicationType'
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
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['categoryIds'] = $data['categoryIds'] ?? null;
        $this->container['englishName'] = $data['englishName'] ?? null;
        $this->container['logoUrl'] = $data['logoUrl'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
        $this->container['slogan'] = $data['slogan'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subApplicationType'] = $data['subApplicationType'] ?? null;
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
     * Gets appDesc
     *
     * @return string|null
     */
    public function getAppDesc()
    {
        return $this->container['appDesc'];
    }

    /**
     * Sets appDesc
     *
     * @param string|null $appDesc 小程序应用描述
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
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
     * @param string|null $appName 小程序的名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 版本号
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 端信息
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets categoryIds
     *
     * @return string|null
     */
    public function getCategoryIds()
    {
        return $this->container['categoryIds'];
    }

    /**
     * Sets categoryIds
     *
     * @param string|null $categoryIds 小程序所属类目
     *
     * @return self
     */
    public function setCategoryIds($categoryIds)
    {
        $this->container['categoryIds'] = $categoryIds;

        return $this;
    }

    /**
     * Gets englishName
     *
     * @return string|null
     */
    public function getEnglishName()
    {
        return $this->container['englishName'];
    }

    /**
     * Sets englishName
     *
     * @param string|null $englishName 小程序英文名称
     *
     * @return self
     */
    public function setEnglishName($englishName)
    {
        $this->container['englishName'] = $englishName;

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
     * @param string|null $logoUrl 小程序应用logo图标
     *
     * @return self
     */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets servicePhone
     *
     * @return string|null
     */
    public function getServicePhone()
    {
        return $this->container['servicePhone'];
    }

    /**
     * Sets servicePhone
     *
     * @param string|null $servicePhone 小程序客服电话
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

        return $this;
    }

    /**
     * Gets slogan
     *
     * @return string|null
     */
    public function getSlogan()
    {
        return $this->container['slogan'];
    }

    /**
     * Sets slogan
     *
     * @param string|null $slogan 小程序应用简介，一句话描述小程序功能
     *
     * @return self
     */
    public function setSlogan($slogan)
    {
        $this->container['slogan'] = $slogan;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 版本状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subApplicationType
     *
     * @return string|null
     */
    public function getSubApplicationType()
    {
        return $this->container['subApplicationType'];
    }

    /**
     * Sets subApplicationType
     *
     * @param string|null $subApplicationType 小程序子类型，自研、模板类型
     *
     * @return self
     */
    public function setSubApplicationType($subApplicationType)
    {
        $this->container['subApplicationType'] = $subApplicationType;

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


