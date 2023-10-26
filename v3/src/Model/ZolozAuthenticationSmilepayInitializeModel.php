<?php
/**
 * ZolozAuthenticationSmilepayInitializeModel
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
 * ZolozAuthenticationSmilepayInitializeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZolozAuthenticationSmilepayInitializeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZolozAuthenticationSmilepayInitializeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apdidToken' => 'string',
        'appName' => 'string',
        'appVersion' => 'string',
        'baseVer' => 'string',
        'bioMetaInfo' => 'string',
        'deviceModel' => 'string',
        'deviceType' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\FaceExtParams',
        'machineInfo' => '\Alipay\OpenAPISDK\Model\FaceMachineInfo',
        'merchantInfo' => '\Alipay\OpenAPISDK\Model\FaceMerchantInfo',
        'osVersion' => 'string',
        'remoteLogId' => 'string',
        'zimVer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apdidToken' => null,
        'appName' => null,
        'appVersion' => null,
        'baseVer' => null,
        'bioMetaInfo' => null,
        'deviceModel' => null,
        'deviceType' => null,
        'extInfo' => null,
        'machineInfo' => null,
        'merchantInfo' => null,
        'osVersion' => null,
        'remoteLogId' => null,
        'zimVer' => null
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
        'apdidToken' => 'apdid_token',
        'appName' => 'app_name',
        'appVersion' => 'app_version',
        'baseVer' => 'base_ver',
        'bioMetaInfo' => 'bio_meta_info',
        'deviceModel' => 'device_model',
        'deviceType' => 'device_type',
        'extInfo' => 'ext_info',
        'machineInfo' => 'machine_info',
        'merchantInfo' => 'merchant_info',
        'osVersion' => 'os_version',
        'remoteLogId' => 'remote_log_id',
        'zimVer' => 'zim_ver'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apdidToken' => 'setApdidToken',
        'appName' => 'setAppName',
        'appVersion' => 'setAppVersion',
        'baseVer' => 'setBaseVer',
        'bioMetaInfo' => 'setBioMetaInfo',
        'deviceModel' => 'setDeviceModel',
        'deviceType' => 'setDeviceType',
        'extInfo' => 'setExtInfo',
        'machineInfo' => 'setMachineInfo',
        'merchantInfo' => 'setMerchantInfo',
        'osVersion' => 'setOsVersion',
        'remoteLogId' => 'setRemoteLogId',
        'zimVer' => 'setZimVer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apdidToken' => 'getApdidToken',
        'appName' => 'getAppName',
        'appVersion' => 'getAppVersion',
        'baseVer' => 'getBaseVer',
        'bioMetaInfo' => 'getBioMetaInfo',
        'deviceModel' => 'getDeviceModel',
        'deviceType' => 'getDeviceType',
        'extInfo' => 'getExtInfo',
        'machineInfo' => 'getMachineInfo',
        'merchantInfo' => 'getMerchantInfo',
        'osVersion' => 'getOsVersion',
        'remoteLogId' => 'getRemoteLogId',
        'zimVer' => 'getZimVer'
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
        $this->container['apdidToken'] = $data['apdidToken'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['baseVer'] = $data['baseVer'] ?? null;
        $this->container['bioMetaInfo'] = $data['bioMetaInfo'] ?? null;
        $this->container['deviceModel'] = $data['deviceModel'] ?? null;
        $this->container['deviceType'] = $data['deviceType'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['machineInfo'] = $data['machineInfo'] ?? null;
        $this->container['merchantInfo'] = $data['merchantInfo'] ?? null;
        $this->container['osVersion'] = $data['osVersion'] ?? null;
        $this->container['remoteLogId'] = $data['remoteLogId'] ?? null;
        $this->container['zimVer'] = $data['zimVer'] ?? null;
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
     * Gets apdidToken
     *
     * @return string|null
     */
    public function getApdidToken()
    {
        return $this->container['apdidToken'];
    }

    /**
     * Sets apdidToken
     *
     * @param string|null $apdidToken 设备指纹，用于唯一标识一台设备
     *
     * @return self
     */
    public function setApdidToken($apdidToken)
    {
        $this->container['apdidToken'] = $apdidToken;

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
     * @param string|null $appName 人脸识别应用名称
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
     * @param string|null $appVersion 人脸识别应用版本号
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets baseVer
     *
     * @return string|null
     */
    public function getBaseVer()
    {
        return $this->container['baseVer'];
    }

    /**
     * Sets baseVer
     *
     * @param string|null $baseVer 基础包版本号
     *
     * @return self
     */
    public function setBaseVer($baseVer)
    {
        $this->container['baseVer'] = $baseVer;

        return $this;
    }

    /**
     * Gets bioMetaInfo
     *
     * @return string|null
     */
    public function getBioMetaInfo()
    {
        return $this->container['bioMetaInfo'];
    }

    /**
     * Sets bioMetaInfo
     *
     * @param string|null $bioMetaInfo 生物识别元信息
     *
     * @return self
     */
    public function setBioMetaInfo($bioMetaInfo)
    {
        $this->container['bioMetaInfo'] = $bioMetaInfo;

        return $this;
    }

    /**
     * Gets deviceModel
     *
     * @return string|null
     */
    public function getDeviceModel()
    {
        return $this->container['deviceModel'];
    }

    /**
     * Sets deviceModel
     *
     * @param string|null $deviceModel 设备型号
     *
     * @return self
     */
    public function setDeviceModel($deviceModel)
    {
        $this->container['deviceModel'] = $deviceModel;

        return $this;
    }

    /**
     * Gets deviceType
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
     * Sets deviceType
     *
     * @param string|null $deviceType 设备类型
     *
     * @return self
     */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\FaceExtParams|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\FaceExtParams|null $extInfo extInfo
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets machineInfo
     *
     * @return \Alipay\OpenAPISDK\Model\FaceMachineInfo|null
     */
    public function getMachineInfo()
    {
        return $this->container['machineInfo'];
    }

    /**
     * Sets machineInfo
     *
     * @param \Alipay\OpenAPISDK\Model\FaceMachineInfo|null $machineInfo machineInfo
     *
     * @return self
     */
    public function setMachineInfo($machineInfo)
    {
        $this->container['machineInfo'] = $machineInfo;

        return $this;
    }

    /**
     * Gets merchantInfo
     *
     * @return \Alipay\OpenAPISDK\Model\FaceMerchantInfo|null
     */
    public function getMerchantInfo()
    {
        return $this->container['merchantInfo'];
    }

    /**
     * Sets merchantInfo
     *
     * @param \Alipay\OpenAPISDK\Model\FaceMerchantInfo|null $merchantInfo merchantInfo
     *
     * @return self
     */
    public function setMerchantInfo($merchantInfo)
    {
        $this->container['merchantInfo'] = $merchantInfo;

        return $this;
    }

    /**
     * Gets osVersion
     *
     * @return string|null
     */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
     * Sets osVersion
     *
     * @param string|null $osVersion 操作系统版本号
     *
     * @return self
     */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;

        return $this;
    }

    /**
     * Gets remoteLogId
     *
     * @return string|null
     */
    public function getRemoteLogId()
    {
        return $this->container['remoteLogId'];
    }

    /**
     * Sets remoteLogId
     *
     * @param string|null $remoteLogId 业务ID
     *
     * @return self
     */
    public function setRemoteLogId($remoteLogId)
    {
        $this->container['remoteLogId'] = $remoteLogId;

        return $this;
    }

    /**
     * Gets zimVer
     *
     * @return string|null
     */
    public function getZimVer()
    {
        return $this->container['zimVer'];
    }

    /**
     * Sets zimVer
     *
     * @param string|null $zimVer ZIM版本号
     *
     * @return self
     */
    public function setZimVer($zimVer)
    {
        $this->container['zimVer'] = $zimVer;

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


