<?php
/**
 * AlipayUserDeliverAddress
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
 * AlipayUserDeliverAddress Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayUserDeliverAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayUserDeliverAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'addressCode' => 'string',
        'defaultDeliverAddress' => 'string',
        'deliverArea' => 'string',
        'deliverCity' => 'string',
        'deliverFullname' => 'string',
        'deliverMobile' => 'string',
        'deliverPhone' => 'string',
        'deliverProvince' => 'string',
        'zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'addressCode' => null,
        'defaultDeliverAddress' => null,
        'deliverArea' => null,
        'deliverCity' => null,
        'deliverFullname' => null,
        'deliverMobile' => null,
        'deliverPhone' => null,
        'deliverProvince' => null,
        'zip' => null
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
        'address' => 'address',
        'addressCode' => 'address_code',
        'defaultDeliverAddress' => 'default_deliver_address',
        'deliverArea' => 'deliver_area',
        'deliverCity' => 'deliver_city',
        'deliverFullname' => 'deliver_fullname',
        'deliverMobile' => 'deliver_mobile',
        'deliverPhone' => 'deliver_phone',
        'deliverProvince' => 'deliver_province',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'addressCode' => 'setAddressCode',
        'defaultDeliverAddress' => 'setDefaultDeliverAddress',
        'deliverArea' => 'setDeliverArea',
        'deliverCity' => 'setDeliverCity',
        'deliverFullname' => 'setDeliverFullname',
        'deliverMobile' => 'setDeliverMobile',
        'deliverPhone' => 'setDeliverPhone',
        'deliverProvince' => 'setDeliverProvince',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'addressCode' => 'getAddressCode',
        'defaultDeliverAddress' => 'getDefaultDeliverAddress',
        'deliverArea' => 'getDeliverArea',
        'deliverCity' => 'getDeliverCity',
        'deliverFullname' => 'getDeliverFullname',
        'deliverMobile' => 'getDeliverMobile',
        'deliverPhone' => 'getDeliverPhone',
        'deliverProvince' => 'getDeliverProvince',
        'zip' => 'getZip'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['addressCode'] = $data['addressCode'] ?? null;
        $this->container['defaultDeliverAddress'] = $data['defaultDeliverAddress'] ?? null;
        $this->container['deliverArea'] = $data['deliverArea'] ?? null;
        $this->container['deliverCity'] = $data['deliverCity'] ?? null;
        $this->container['deliverFullname'] = $data['deliverFullname'] ?? null;
        $this->container['deliverMobile'] = $data['deliverMobile'] ?? null;
        $this->container['deliverPhone'] = $data['deliverPhone'] ?? null;
        $this->container['deliverProvince'] = $data['deliverProvince'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets addressCode
     *
     * @return string|null
     */
    public function getAddressCode()
    {
        return $this->container['addressCode'];
    }

    /**
     * Sets addressCode
     *
     * @param string|null $addressCode 区域编码
     *
     * @return self
     */
    public function setAddressCode($addressCode)
    {
        $this->container['addressCode'] = $addressCode;

        return $this;
    }

    /**
     * Gets defaultDeliverAddress
     *
     * @return string|null
     */
    public function getDefaultDeliverAddress()
    {
        return $this->container['defaultDeliverAddress'];
    }

    /**
     * Sets defaultDeliverAddress
     *
     * @param string|null $defaultDeliverAddress 是否默认收货地址
     *
     * @return self
     */
    public function setDefaultDeliverAddress($defaultDeliverAddress)
    {
        $this->container['defaultDeliverAddress'] = $defaultDeliverAddress;

        return $this;
    }

    /**
     * Gets deliverArea
     *
     * @return string|null
     */
    public function getDeliverArea()
    {
        return $this->container['deliverArea'];
    }

    /**
     * Sets deliverArea
     *
     * @param string|null $deliverArea 区/县
     *
     * @return self
     */
    public function setDeliverArea($deliverArea)
    {
        $this->container['deliverArea'] = $deliverArea;

        return $this;
    }

    /**
     * Gets deliverCity
     *
     * @return string|null
     */
    public function getDeliverCity()
    {
        return $this->container['deliverCity'];
    }

    /**
     * Sets deliverCity
     *
     * @param string|null $deliverCity 市
     *
     * @return self
     */
    public function setDeliverCity($deliverCity)
    {
        $this->container['deliverCity'] = $deliverCity;

        return $this;
    }

    /**
     * Gets deliverFullname
     *
     * @return string|null
     */
    public function getDeliverFullname()
    {
        return $this->container['deliverFullname'];
    }

    /**
     * Sets deliverFullname
     *
     * @param string|null $deliverFullname 收货人全名
     *
     * @return self
     */
    public function setDeliverFullname($deliverFullname)
    {
        $this->container['deliverFullname'] = $deliverFullname;

        return $this;
    }

    /**
     * Gets deliverMobile
     *
     * @return string|null
     */
    public function getDeliverMobile()
    {
        return $this->container['deliverMobile'];
    }

    /**
     * Sets deliverMobile
     *
     * @param string|null $deliverMobile 收货地址的联系人移动电话
     *
     * @return self
     */
    public function setDeliverMobile($deliverMobile)
    {
        $this->container['deliverMobile'] = $deliverMobile;

        return $this;
    }

    /**
     * Gets deliverPhone
     *
     * @return string|null
     */
    public function getDeliverPhone()
    {
        return $this->container['deliverPhone'];
    }

    /**
     * Sets deliverPhone
     *
     * @param string|null $deliverPhone 收货地址的联系人固定电话
     *
     * @return self
     */
    public function setDeliverPhone($deliverPhone)
    {
        $this->container['deliverPhone'] = $deliverPhone;

        return $this;
    }

    /**
     * Gets deliverProvince
     *
     * @return string|null
     */
    public function getDeliverProvince()
    {
        return $this->container['deliverProvince'];
    }

    /**
     * Sets deliverProvince
     *
     * @param string|null $deliverProvince 省
     *
     * @return self
     */
    public function setDeliverProvince($deliverProvince)
    {
        $this->container['deliverProvince'] = $deliverProvince;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip 邮编
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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


