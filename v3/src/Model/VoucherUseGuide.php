<?php
/**
 * VoucherUseGuide
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
 * VoucherUseGuide Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherUseGuide implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherUseGuide';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'miniAppId' => 'string',
        'miniAppPath' => 'string',
        'miniAppUseGuide' => 'bool',
        'offlineCodeUseGuide' => 'bool',
        'serviceCodes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'miniAppId' => null,
        'miniAppPath' => null,
        'miniAppUseGuide' => null,
        'offlineCodeUseGuide' => null,
        'serviceCodes' => null
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
        'miniAppId' => 'mini_app_id',
        'miniAppPath' => 'mini_app_path',
        'miniAppUseGuide' => 'mini_app_use_guide',
        'offlineCodeUseGuide' => 'offline_code_use_guide',
        'serviceCodes' => 'service_codes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'miniAppId' => 'setMiniAppId',
        'miniAppPath' => 'setMiniAppPath',
        'miniAppUseGuide' => 'setMiniAppUseGuide',
        'offlineCodeUseGuide' => 'setOfflineCodeUseGuide',
        'serviceCodes' => 'setServiceCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'miniAppId' => 'getMiniAppId',
        'miniAppPath' => 'getMiniAppPath',
        'miniAppUseGuide' => 'getMiniAppUseGuide',
        'offlineCodeUseGuide' => 'getOfflineCodeUseGuide',
        'serviceCodes' => 'getServiceCodes'
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
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniAppPath'] = $data['miniAppPath'] ?? null;
        $this->container['miniAppUseGuide'] = $data['miniAppUseGuide'] ?? null;
        $this->container['offlineCodeUseGuide'] = $data['offlineCodeUseGuide'] ?? null;
        $this->container['serviceCodes'] = $data['serviceCodes'] ?? null;
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
     * @param string|null $miniAppId 券可用的小程序appId，卡包详情页可跳转到该appId
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniAppPath
     *
     * @return string|null
     */
    public function getMiniAppPath()
    {
        return $this->container['miniAppPath'];
    }

    /**
     * Sets miniAppPath
     *
     * @param string|null $miniAppPath 指定跳转到mini_app_id时的具体页面路径。
     *
     * @return self
     */
    public function setMiniAppPath($miniAppPath)
    {
        $this->container['miniAppPath'] = $miniAppPath;

        return $this;
    }

    /**
     * Gets miniAppUseGuide
     *
     * @return bool|null
     */
    public function getMiniAppUseGuide()
    {
        return $this->container['miniAppUseGuide'];
    }

    /**
     * Sets miniAppUseGuide
     *
     * @param bool|null $miniAppUseGuide 小程序核销。
     *
     * @return self
     */
    public function setMiniAppUseGuide($miniAppUseGuide)
    {
        $this->container['miniAppUseGuide'] = $miniAppUseGuide;

        return $this;
    }

    /**
     * Gets offlineCodeUseGuide
     *
     * @return bool|null
     */
    public function getOfflineCodeUseGuide()
    {
        return $this->container['offlineCodeUseGuide'];
    }

    /**
     * Sets offlineCodeUseGuide
     *
     * @param bool|null $offlineCodeUseGuide 线下扫码核销。
     *
     * @return self
     */
    public function setOfflineCodeUseGuide($offlineCodeUseGuide)
    {
        $this->container['offlineCodeUseGuide'] = $offlineCodeUseGuide;

        return $this;
    }

    /**
     * Gets serviceCodes
     *
     * @return string[]|null
     */
    public function getServiceCodes()
    {
        return $this->container['serviceCodes'];
    }

    /**
     * Sets serviceCodes
     *
     * @param string[]|null $serviceCodes 小程序服务编码，通过 alipay.open.app.appcontent.function.create(小程序服务创建)接口创建服务后获取。
     *
     * @return self
     */
    public function setServiceCodes($serviceCodes)
    {
        $this->container['serviceCodes'] = $serviceCodes;

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


