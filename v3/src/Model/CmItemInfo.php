<?php
/**
 * CmItemInfo
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
 * CmItemInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CmItemInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CmItemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\ItemExtInfo[]',
        'frontCategoryIdList' => 'string[]',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'itemId' => 'string',
        'materialList' => '\Alipay\OpenAPISDK\Model\MaterialInfo[]',
        'name' => 'string',
        'propertyList' => '\Alipay\OpenAPISDK\Model\ItemPropertyInfo[]',
        'skuList' => '\Alipay\OpenAPISDK\Model\CmItemSkuInfo[]',
        'standardCategoryId' => 'string',
        'status' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'extInfo' => null,
        'frontCategoryIdList' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'itemId' => null,
        'materialList' => null,
        'name' => null,
        'propertyList' => null,
        'skuList' => null,
        'standardCategoryId' => null,
        'status' => null,
        'targetId' => null,
        'targetType' => null,
        'type' => null
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
        'description' => 'description',
        'extInfo' => 'ext_info',
        'frontCategoryIdList' => 'front_category_id_list',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'itemId' => 'item_id',
        'materialList' => 'material_list',
        'name' => 'name',
        'propertyList' => 'property_list',
        'skuList' => 'sku_list',
        'standardCategoryId' => 'standard_category_id',
        'status' => 'status',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'extInfo' => 'setExtInfo',
        'frontCategoryIdList' => 'setFrontCategoryIdList',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'itemId' => 'setItemId',
        'materialList' => 'setMaterialList',
        'name' => 'setName',
        'propertyList' => 'setPropertyList',
        'skuList' => 'setSkuList',
        'standardCategoryId' => 'setStandardCategoryId',
        'status' => 'setStatus',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'extInfo' => 'getExtInfo',
        'frontCategoryIdList' => 'getFrontCategoryIdList',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'itemId' => 'getItemId',
        'materialList' => 'getMaterialList',
        'name' => 'getName',
        'propertyList' => 'getPropertyList',
        'skuList' => 'getSkuList',
        'standardCategoryId' => 'getStandardCategoryId',
        'status' => 'getStatus',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
        'type' => 'getType'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['frontCategoryIdList'] = $data['frontCategoryIdList'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['itemId'] = $data['itemId'] ?? null;
        $this->container['materialList'] = $data['materialList'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['propertyList'] = $data['propertyList'] ?? null;
        $this->container['skuList'] = $data['skuList'] ?? null;
        $this->container['standardCategoryId'] = $data['standardCategoryId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 商品描述
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ItemExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ItemExtInfo[]|null $extInfo 商品扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets frontCategoryIdList
     *
     * @return string[]|null
     */
    public function getFrontCategoryIdList()
    {
        return $this->container['frontCategoryIdList'];
    }

    /**
     * Sets frontCategoryIdList
     *
     * @param string[]|null $frontCategoryIdList 商品所属前台类目ID列表
     *
     * @return self
     */
    public function setFrontCategoryIdList($frontCategoryIdList)
    {
        $this->container['frontCategoryIdList'] = $frontCategoryIdList;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 商品创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 商品更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId 商品ID
     *
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets materialList
     *
     * @return \Alipay\OpenAPISDK\Model\MaterialInfo[]|null
     */
    public function getMaterialList()
    {
        return $this->container['materialList'];
    }

    /**
     * Sets materialList
     *
     * @param \Alipay\OpenAPISDK\Model\MaterialInfo[]|null $materialList 商品素材列表
     *
     * @return self
     */
    public function setMaterialList($materialList)
    {
        $this->container['materialList'] = $materialList;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 商品名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets propertyList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemPropertyInfo[]|null
     */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
     * Sets propertyList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemPropertyInfo[]|null $propertyList 商品属性列表
     *
     * @return self
     */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;

        return $this;
    }

    /**
     * Gets skuList
     *
     * @return \Alipay\OpenAPISDK\Model\CmItemSkuInfo[]|null
     */
    public function getSkuList()
    {
        return $this->container['skuList'];
    }

    /**
     * Sets skuList
     *
     * @param \Alipay\OpenAPISDK\Model\CmItemSkuInfo[]|null $skuList 商品SKU列表
     *
     * @return self
     */
    public function setSkuList($skuList)
    {
        $this->container['skuList'] = $skuList;

        return $this;
    }

    /**
     * Gets standardCategoryId
     *
     * @return string|null
     */
    public function getStandardCategoryId()
    {
        return $this->container['standardCategoryId'];
    }

    /**
     * Sets standardCategoryId
     *
     * @param string|null $standardCategoryId 商品所属标准类目ID（具体值请参见产品文档）
     *
     * @return self
     */
    public function setStandardCategoryId($standardCategoryId)
    {
        $this->container['standardCategoryId'] = $standardCategoryId;

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
     * @param string|null $status 商品状态：  EFFECT（有效）、INVALID（无效）
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 商品归属主体ID  例：商品归属主体类型为店铺，则商品归属主体ID为店铺ID；归属主体为小程序，则归属主体ID为小程序ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 商品归属主体类型:  5（店铺）  8（小程序）
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 商品类型：  STANDARD_GOODS（标品）、NON_STANDARD_GOODS（非标品）
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


