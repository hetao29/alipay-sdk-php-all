<?php
/**
 * AlipayOpenMiniInnerappCreateModel
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
 * AlipayOpenMiniInnerappCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerappCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerappCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appCategoryIds' => 'string',
        'appDesc' => 'string',
        'appEnglishName' => 'string',
        'appLogo' => 'string',
        'appName' => 'string',
        'appOrigin' => 'string',
        'appSlogan' => 'string',
        'appSubType' => 'string',
        'appType' => 'string',
        'isvAppId' => 'string',
        'miniAppId' => 'string',
        'miniCategoryIds' => 'string',
        'pid' => 'string',
        'serviceEmail' => 'string',
        'servicePhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appCategoryIds' => null,
        'appDesc' => null,
        'appEnglishName' => null,
        'appLogo' => null,
        'appName' => null,
        'appOrigin' => null,
        'appSlogan' => null,
        'appSubType' => null,
        'appType' => null,
        'isvAppId' => null,
        'miniAppId' => null,
        'miniCategoryIds' => null,
        'pid' => null,
        'serviceEmail' => null,
        'servicePhone' => null
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
        'appCategoryIds' => 'app_category_ids',
        'appDesc' => 'app_desc',
        'appEnglishName' => 'app_english_name',
        'appLogo' => 'app_logo',
        'appName' => 'app_name',
        'appOrigin' => 'app_origin',
        'appSlogan' => 'app_slogan',
        'appSubType' => 'app_sub_type',
        'appType' => 'app_type',
        'isvAppId' => 'isv_app_id',
        'miniAppId' => 'mini_app_id',
        'miniCategoryIds' => 'mini_category_ids',
        'pid' => 'pid',
        'serviceEmail' => 'service_email',
        'servicePhone' => 'service_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appCategoryIds' => 'setAppCategoryIds',
        'appDesc' => 'setAppDesc',
        'appEnglishName' => 'setAppEnglishName',
        'appLogo' => 'setAppLogo',
        'appName' => 'setAppName',
        'appOrigin' => 'setAppOrigin',
        'appSlogan' => 'setAppSlogan',
        'appSubType' => 'setAppSubType',
        'appType' => 'setAppType',
        'isvAppId' => 'setIsvAppId',
        'miniAppId' => 'setMiniAppId',
        'miniCategoryIds' => 'setMiniCategoryIds',
        'pid' => 'setPid',
        'serviceEmail' => 'setServiceEmail',
        'servicePhone' => 'setServicePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appCategoryIds' => 'getAppCategoryIds',
        'appDesc' => 'getAppDesc',
        'appEnglishName' => 'getAppEnglishName',
        'appLogo' => 'getAppLogo',
        'appName' => 'getAppName',
        'appOrigin' => 'getAppOrigin',
        'appSlogan' => 'getAppSlogan',
        'appSubType' => 'getAppSubType',
        'appType' => 'getAppType',
        'isvAppId' => 'getIsvAppId',
        'miniAppId' => 'getMiniAppId',
        'miniCategoryIds' => 'getMiniCategoryIds',
        'pid' => 'getPid',
        'serviceEmail' => 'getServiceEmail',
        'servicePhone' => 'getServicePhone'
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
        $this->container['appCategoryIds'] = $data['appCategoryIds'] ?? null;
        $this->container['appDesc'] = $data['appDesc'] ?? null;
        $this->container['appEnglishName'] = $data['appEnglishName'] ?? null;
        $this->container['appLogo'] = $data['appLogo'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['appSlogan'] = $data['appSlogan'] ?? null;
        $this->container['appSubType'] = $data['appSubType'] ?? null;
        $this->container['appType'] = $data['appType'] ?? null;
        $this->container['isvAppId'] = $data['isvAppId'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['miniCategoryIds'] = $data['miniCategoryIds'] ?? null;
        $this->container['pid'] = $data['pid'] ?? null;
        $this->container['serviceEmail'] = $data['serviceEmail'] ?? null;
        $this->container['servicePhone'] = $data['servicePhone'] ?? null;
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
     * Gets appCategoryIds
     *
     * @return string|null
     */
    public function getAppCategoryIds()
    {
        return $this->container['appCategoryIds'];
    }

    /**
     * Sets appCategoryIds
     *
     * @param string|null $appCategoryIds 小程序类目，二级类目与三级类目下划线隔开，最多可以选择3个类目，类目之间以;隔开
     *
     * @return self
     */
    public function setAppCategoryIds($appCategoryIds)
    {
        $this->container['appCategoryIds'] = $appCategoryIds;

        return $this;
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
     * @param string|null $appDesc 小程序描述，20-200个字符
     *
     * @return self
     */
    public function setAppDesc($appDesc)
    {
        $this->container['appDesc'] = $appDesc;

        return $this;
    }

    /**
     * Gets appEnglishName
     *
     * @return string|null
     */
    public function getAppEnglishName()
    {
        return $this->container['appEnglishName'];
    }

    /**
     * Sets appEnglishName
     *
     * @param string|null $appEnglishName 小程序英文名称，插件不填
     *
     * @return self
     */
    public function setAppEnglishName($appEnglishName)
    {
        $this->container['appEnglishName'] = $appEnglishName;

        return $this;
    }

    /**
     * Gets appLogo
     *
     * @return string|null
     */
    public function getAppLogo()
    {
        return $this->container['appLogo'];
    }

    /**
     * Sets appLogo
     *
     * @param string|null $appLogo 小程序logo
     *
     * @return self
     */
    public function setAppLogo($appLogo)
    {
        $this->container['appLogo'] = $appLogo;

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
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 来源的业务方,接入文档中申请的业务来源
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

        return $this;
    }

    /**
     * Gets appSlogan
     *
     * @return string|null
     */
    public function getAppSlogan()
    {
        return $this->container['appSlogan'];
    }

    /**
     * Sets appSlogan
     *
     * @param string|null $appSlogan 小程序简介，在搜索透出,插件不需要填
     *
     * @return self
     */
    public function setAppSlogan($appSlogan)
    {
        $this->container['appSlogan'] = $appSlogan;

        return $this;
    }

    /**
     * Gets appSubType
     *
     * @return string|null
     */
    public function getAppSubType()
    {
        return $this->container['appSubType'];
    }

    /**
     * Sets appSubType
     *
     * @param string|null $appSubType 应用子类型
     *
     * @return self
     */
    public function setAppSubType($appSubType)
    {
        $this->container['appSubType'] = $appSubType;

        return $this;
    }

    /**
     * Gets appType
     *
     * @return string|null
     */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
     * Sets appType
     *
     * @param string|null $appType 应用类型
     *
     * @return self
     */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;

        return $this;
    }

    /**
     * Gets isvAppId
     *
     * @return string|null
     */
    public function getIsvAppId()
    {
        return $this->container['isvAppId'];
    }

    /**
     * Sets isvAppId
     *
     * @param string|null $isvAppId 三方应用ID，仅在创建模板小程序时需要传入
     *
     * @return self
     */
    public function setIsvAppId($isvAppId)
    {
        $this->container['isvAppId'] = $isvAppId;

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
     * @param string|null $miniAppId 小程序ID，仅特殊场景使用，普通业务方无需关注该参数
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets miniCategoryIds
     *
     * @return string|null
     */
    public function getMiniCategoryIds()
    {
        return $this->container['miniCategoryIds'];
    }

    /**
     * Sets miniCategoryIds
     *
     * @param string|null $miniCategoryIds 新小程序前台类目，格式为 第一个一级类目_第一个二级类目;第二个一级类目_第二个二级类目_第二个三级类目，详细类目可以通过 https://docs.open.alipay.com/api_49/alipay.open.mini.category.query接口查询mini_category_list。使用后不再读取app_category_ids值，老前台类目将废弃
     *
     * @return self
     */
    public function setMiniCategoryIds($miniCategoryIds)
    {
        $this->container['miniCategoryIds'] = $miniCategoryIds;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string|null
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string|null $pid 创建的小程序所属的PID
     *
     * @return self
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets serviceEmail
     *
     * @return string|null
     */
    public function getServiceEmail()
    {
        return $this->container['serviceEmail'];
    }

    /**
     * Sets serviceEmail
     *
     * @param string|null $serviceEmail 邮箱，与客服电话二选一
     *
     * @return self
     */
    public function setServiceEmail($serviceEmail)
    {
        $this->container['serviceEmail'] = $serviceEmail;

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
     * @param string|null $servicePhone 客服电话，插件不需要
     *
     * @return self
     */
    public function setServicePhone($servicePhone)
    {
        $this->container['servicePhone'] = $servicePhone;

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


