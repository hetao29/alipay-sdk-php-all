<?php
/**
 * AlipayOpenMiniInnerversionUploadResponseModel
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
 * AlipayOpenMiniInnerversionUploadResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionUploadResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionUploadResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buildInfo' => 'string',
        'buildPackageUrl' => 'string',
        'buildStatus' => 'string',
        'buildVersion' => 'string',
        'needRotation' => 'string',
        'newBuildPackageUrl' => 'string',
        'packageId' => 'string',
        'versionCreated' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buildInfo' => null,
        'buildPackageUrl' => null,
        'buildStatus' => null,
        'buildVersion' => null,
        'needRotation' => null,
        'newBuildPackageUrl' => null,
        'packageId' => null,
        'versionCreated' => null
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
        'buildInfo' => 'build_info',
        'buildPackageUrl' => 'build_package_url',
        'buildStatus' => 'build_status',
        'buildVersion' => 'build_version',
        'needRotation' => 'need_rotation',
        'newBuildPackageUrl' => 'new_build_package_url',
        'packageId' => 'package_id',
        'versionCreated' => 'version_created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buildInfo' => 'setBuildInfo',
        'buildPackageUrl' => 'setBuildPackageUrl',
        'buildStatus' => 'setBuildStatus',
        'buildVersion' => 'setBuildVersion',
        'needRotation' => 'setNeedRotation',
        'newBuildPackageUrl' => 'setNewBuildPackageUrl',
        'packageId' => 'setPackageId',
        'versionCreated' => 'setVersionCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buildInfo' => 'getBuildInfo',
        'buildPackageUrl' => 'getBuildPackageUrl',
        'buildStatus' => 'getBuildStatus',
        'buildVersion' => 'getBuildVersion',
        'needRotation' => 'getNeedRotation',
        'newBuildPackageUrl' => 'getNewBuildPackageUrl',
        'packageId' => 'getPackageId',
        'versionCreated' => 'getVersionCreated'
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
        $this->container['buildInfo'] = $data['buildInfo'] ?? null;
        $this->container['buildPackageUrl'] = $data['buildPackageUrl'] ?? null;
        $this->container['buildStatus'] = $data['buildStatus'] ?? null;
        $this->container['buildVersion'] = $data['buildVersion'] ?? null;
        $this->container['needRotation'] = $data['needRotation'] ?? null;
        $this->container['newBuildPackageUrl'] = $data['newBuildPackageUrl'] ?? null;
        $this->container['packageId'] = $data['packageId'] ?? null;
        $this->container['versionCreated'] = $data['versionCreated'] ?? null;
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
     * Gets buildInfo
     *
     * @return string|null
     */
    public function getBuildInfo()
    {
        return $this->container['buildInfo'];
    }

    /**
     * Sets buildInfo
     *
     * @param string|null $buildInfo 构建信息
     *
     * @return self
     */
    public function setBuildInfo($buildInfo)
    {
        $this->container['buildInfo'] = $buildInfo;

        return $this;
    }

    /**
     * Gets buildPackageUrl
     *
     * @return string|null
     */
    public function getBuildPackageUrl()
    {
        return $this->container['buildPackageUrl'];
    }

    /**
     * Sets buildPackageUrl
     *
     * @param string|null $buildPackageUrl 包地址
     *
     * @return self
     */
    public function setBuildPackageUrl($buildPackageUrl)
    {
        $this->container['buildPackageUrl'] = $buildPackageUrl;

        return $this;
    }

    /**
     * Gets buildStatus
     *
     * @return string|null
     */
    public function getBuildStatus()
    {
        return $this->container['buildStatus'];
    }

    /**
     * Sets buildStatus
     *
     * @param string|null $buildStatus 构建状态
     *
     * @return self
     */
    public function setBuildStatus($buildStatus)
    {
        $this->container['buildStatus'] = $buildStatus;

        return $this;
    }

    /**
     * Gets buildVersion
     *
     * @return string|null
     */
    public function getBuildVersion()
    {
        return $this->container['buildVersion'];
    }

    /**
     * Sets buildVersion
     *
     * @param string|null $buildVersion 构建版本
     *
     * @return self
     */
    public function setBuildVersion($buildVersion)
    {
        $this->container['buildVersion'] = $buildVersion;

        return $this;
    }

    /**
     * Gets needRotation
     *
     * @return string|null
     */
    public function getNeedRotation()
    {
        return $this->container['needRotation'];
    }

    /**
     * Sets needRotation
     *
     * @param string|null $needRotation 是否需要轮询
     *
     * @return self
     */
    public function setNeedRotation($needRotation)
    {
        $this->container['needRotation'] = $needRotation;

        return $this;
    }

    /**
     * Gets newBuildPackageUrl
     *
     * @return string|null
     */
    public function getNewBuildPackageUrl()
    {
        return $this->container['newBuildPackageUrl'];
    }

    /**
     * Sets newBuildPackageUrl
     *
     * @param string|null $newBuildPackageUrl appx构建返回值
     *
     * @return self
     */
    public function setNewBuildPackageUrl($newBuildPackageUrl)
    {
        $this->container['newBuildPackageUrl'] = $newBuildPackageUrl;

        return $this;
    }

    /**
     * Gets packageId
     *
     * @return string|null
     */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
     * Sets packageId
     *
     * @param string|null $packageId 包管理包ID
     *
     * @return self
     */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;

        return $this;
    }

    /**
     * Gets versionCreated
     *
     * @return string|null
     */
    public function getVersionCreated()
    {
        return $this->container['versionCreated'];
    }

    /**
     * Sets versionCreated
     *
     * @param string|null $versionCreated 版本创建结果
     *
     * @return self
     */
    public function setVersionCreated($versionCreated)
    {
        $this->container['versionCreated'] = $versionCreated;

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


