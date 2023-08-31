<?php
/**
 * AlipayMarketingMaterialCreateModel
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
 * AlipayMarketingMaterialCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingMaterialCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingMaterialCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'materialFields' => '\Alipay\OpenAPISDK\Model\MaterialField[]',
        'materialName' => 'string',
        'materialSpecId' => 'string',
        'outBizNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'materialFields' => null,
        'materialName' => null,
        'materialSpecId' => null,
        'outBizNo' => null
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
        'materialFields' => 'material_fields',
        'materialName' => 'material_name',
        'materialSpecId' => 'material_spec_id',
        'outBizNo' => 'out_biz_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'materialFields' => 'setMaterialFields',
        'materialName' => 'setMaterialName',
        'materialSpecId' => 'setMaterialSpecId',
        'outBizNo' => 'setOutBizNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'materialFields' => 'getMaterialFields',
        'materialName' => 'getMaterialName',
        'materialSpecId' => 'getMaterialSpecId',
        'outBizNo' => 'getOutBizNo'
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
        $this->container['materialFields'] = $data['materialFields'] ?? null;
        $this->container['materialName'] = $data['materialName'] ?? null;
        $this->container['materialSpecId'] = $data['materialSpecId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
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
     * Gets materialFields
     *
     * @return \Alipay\OpenAPISDK\Model\MaterialField[]|null
     */
    public function getMaterialFields()
    {
        return $this->container['materialFields'];
    }

    /**
     * Sets materialFields
     *
     * @param \Alipay\OpenAPISDK\Model\MaterialField[]|null $materialFields 素材字段列表，素材提报的具体内容，包含三种类型：图片、文本、链接。图片类型，则根据“图片资源上传接口（https://opendocs.alipay.com/pre-open/02bhlj）”中返回的resource_id字段值进行素材字段的设值。文本或链接类型，则按照实际需要设值即可，需满足具体的规范要求。规范要求详情请参见产品文档。
     *
     * @return self
     */
    public function setMaterialFields($materialFields)
    {
        $this->container['materialFields'] = $materialFields;

        return $this;
    }

    /**
     * Gets materialName
     *
     * @return string|null
     */
    public function getMaterialName()
    {
        return $this->container['materialName'];
    }

    /**
     * Sets materialName
     *
     * @param string|null $materialName 素材名称，接入方自行生成，建议命名时遵循一定的规律以方便管理。
     *
     * @return self
     */
    public function setMaterialName($materialName)
    {
        $this->container['materialName'] = $materialName;

        return $this;
    }

    /**
     * Gets materialSpecId
     *
     * @return string|null
     */
    public function getMaterialSpecId()
    {
        return $this->container['materialSpecId'];
    }

    /**
     * Sets materialSpecId
     *
     * @param string|null $materialSpecId 素材规范ID，用于标识具体场景下的素材规范，根据具体的使用场景获取对应的素材规范ID。
     *
     * @return self
     */
    public function setMaterialSpecId($materialSpecId)
    {
        $this->container['materialSpecId'] = $materialSpecId;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部业务单号，用作幂等控制，相同单号会返回上一次的结果，接入方需保证单号唯一。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

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


