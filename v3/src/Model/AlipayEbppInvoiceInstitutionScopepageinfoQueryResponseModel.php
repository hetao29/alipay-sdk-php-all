<?php
/**
 * AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel
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
 * AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceInstitutionScopepageinfoQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adapterType' => 'string',
        'onwerOpenIdList' => 'string[]',
        'ownerIdList' => 'string[]',
        'pageNum' => 'int',
        'pageSize' => 'int',
        'totalPageCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adapterType' => null,
        'onwerOpenIdList' => null,
        'ownerIdList' => null,
        'pageNum' => null,
        'pageSize' => null,
        'totalPageCount' => null
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
        'adapterType' => 'adapter_type',
        'onwerOpenIdList' => 'onwer_open_id_list',
        'ownerIdList' => 'owner_id_list',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'totalPageCount' => 'total_page_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adapterType' => 'setAdapterType',
        'onwerOpenIdList' => 'setOnwerOpenIdList',
        'ownerIdList' => 'setOwnerIdList',
        'pageNum' => 'setPageNum',
        'pageSize' => 'setPageSize',
        'totalPageCount' => 'setTotalPageCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adapterType' => 'getAdapterType',
        'onwerOpenIdList' => 'getOnwerOpenIdList',
        'ownerIdList' => 'getOwnerIdList',
        'pageNum' => 'getPageNum',
        'pageSize' => 'getPageSize',
        'totalPageCount' => 'getTotalPageCount'
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
        $this->container['adapterType'] = $data['adapterType'] ?? null;
        $this->container['onwerOpenIdList'] = $data['onwerOpenIdList'] ?? null;
        $this->container['ownerIdList'] = $data['ownerIdList'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['totalPageCount'] = $data['totalPageCount'] ?? null;
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
     * Gets adapterType
     *
     * @return string|null
     */
    public function getAdapterType()
    {
        return $this->container['adapterType'];
    }

    /**
     * Sets adapterType
     *
     * @param string|null $adapterType 制度适用范围类型
     *
     * @return self
     */
    public function setAdapterType($adapterType)
    {
        $this->container['adapterType'] = $adapterType;

        return $this;
    }

    /**
     * Gets onwerOpenIdList
     *
     * @return string[]|null
     */
    public function getOnwerOpenIdList()
    {
        return $this->container['onwerOpenIdList'];
    }

    /**
     * Sets onwerOpenIdList
     *
     * @param string[]|null $onwerOpenIdList 适配开放id列表
     *
     * @return self
     */
    public function setOnwerOpenIdList($onwerOpenIdList)
    {
        $this->container['onwerOpenIdList'] = $onwerOpenIdList;

        return $this;
    }

    /**
     * Gets ownerIdList
     *
     * @return string[]|null
     */
    public function getOwnerIdList()
    {
        return $this->container['ownerIdList'];
    }

    /**
     * Sets ownerIdList
     *
     * @param string[]|null $ownerIdList 适配id列表
     *
     * @return self
     */
    public function setOwnerIdList($ownerIdList)
    {
        $this->container['ownerIdList'] = $ownerIdList;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 页码
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 页大小
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets totalPageCount
     *
     * @return int|null
     */
    public function getTotalPageCount()
    {
        return $this->container['totalPageCount'];
    }

    /**
     * Sets totalPageCount
     *
     * @param int|null $totalPageCount 总页数
     *
     * @return self
     */
    public function setTotalPageCount($totalPageCount)
    {
        $this->container['totalPageCount'] = $totalPageCount;

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


