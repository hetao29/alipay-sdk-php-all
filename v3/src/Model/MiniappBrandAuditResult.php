<?php
/**
 * MiniappBrandAuditResult
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
 * MiniappBrandAuditResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MiniappBrandAuditResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MiniappBrandAuditResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandId' => 'string',
        'brandName' => 'string',
        'brandStatus' => 'string',
        'hasBrand' => 'string',
        'invalidReason' => 'string',
        'rejectReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brandId' => null,
        'brandName' => null,
        'brandStatus' => null,
        'hasBrand' => null,
        'invalidReason' => null,
        'rejectReason' => null
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
        'brandId' => 'brand_id',
        'brandName' => 'brand_name',
        'brandStatus' => 'brand_status',
        'hasBrand' => 'has_brand',
        'invalidReason' => 'invalid_reason',
        'rejectReason' => 'reject_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandId' => 'setBrandId',
        'brandName' => 'setBrandName',
        'brandStatus' => 'setBrandStatus',
        'hasBrand' => 'setHasBrand',
        'invalidReason' => 'setInvalidReason',
        'rejectReason' => 'setRejectReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandId' => 'getBrandId',
        'brandName' => 'getBrandName',
        'brandStatus' => 'getBrandStatus',
        'hasBrand' => 'getHasBrand',
        'invalidReason' => 'getInvalidReason',
        'rejectReason' => 'getRejectReason'
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
        $this->container['brandId'] = $data['brandId'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['brandStatus'] = $data['brandStatus'] ?? null;
        $this->container['hasBrand'] = $data['hasBrand'] ?? null;
        $this->container['invalidReason'] = $data['invalidReason'] ?? null;
        $this->container['rejectReason'] = $data['rejectReason'] ?? null;
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
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId 小程序提交品牌认证时的品牌id
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 小程序提交品牌认证时的品牌名称
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets brandStatus
     *
     * @return string|null
     */
    public function getBrandStatus()
    {
        return $this->container['brandStatus'];
    }

    /**
     * Sets brandStatus
     *
     * @param string|null $brandStatus 小程序提交品牌认证后的认证状态
     *
     * @return self
     */
    public function setBrandStatus($brandStatus)
    {
        $this->container['brandStatus'] = $brandStatus;

        return $this;
    }

    /**
     * Gets hasBrand
     *
     * @return string|null
     */
    public function getHasBrand()
    {
        return $this->container['hasBrand'];
    }

    /**
     * Sets hasBrand
     *
     * @param string|null $hasBrand 小程序提交品牌认证是否认证成功
     *
     * @return self
     */
    public function setHasBrand($hasBrand)
    {
        $this->container['hasBrand'] = $hasBrand;

        return $this;
    }

    /**
     * Gets invalidReason
     *
     * @return string|null
     */
    public function getInvalidReason()
    {
        return $this->container['invalidReason'];
    }

    /**
     * Sets invalidReason
     *
     * @param string|null $invalidReason 失效原因
     *
     * @return self
     */
    public function setInvalidReason($invalidReason)
    {
        $this->container['invalidReason'] = $invalidReason;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|null
     */
    public function getRejectReason()
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|null $rejectReason 驳回原因
     *
     * @return self
     */
    public function setRejectReason($rejectReason)
    {
        $this->container['rejectReason'] = $rejectReason;

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


