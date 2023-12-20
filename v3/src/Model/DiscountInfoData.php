<?php
/**
 * DiscountInfoData
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
 * DiscountInfoData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DiscountInfoData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DiscountInfoData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discountAmount' => 'string',
        'discountName' => 'string',
        'discountPageLink' => 'string',
        'discountQuantity' => 'int',
        'externalDiscountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'discountAmount' => null,
        'discountName' => null,
        'discountPageLink' => null,
        'discountQuantity' => null,
        'externalDiscountId' => null
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
        'discountAmount' => 'discount_amount',
        'discountName' => 'discount_name',
        'discountPageLink' => 'discount_page_link',
        'discountQuantity' => 'discount_quantity',
        'externalDiscountId' => 'external_discount_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discountAmount' => 'setDiscountAmount',
        'discountName' => 'setDiscountName',
        'discountPageLink' => 'setDiscountPageLink',
        'discountQuantity' => 'setDiscountQuantity',
        'externalDiscountId' => 'setExternalDiscountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discountAmount' => 'getDiscountAmount',
        'discountName' => 'getDiscountName',
        'discountPageLink' => 'getDiscountPageLink',
        'discountQuantity' => 'getDiscountQuantity',
        'externalDiscountId' => 'getExternalDiscountId'
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
        $this->container['discountAmount'] = $data['discountAmount'] ?? null;
        $this->container['discountName'] = $data['discountName'] ?? null;
        $this->container['discountPageLink'] = $data['discountPageLink'] ?? null;
        $this->container['discountQuantity'] = $data['discountQuantity'] ?? null;
        $this->container['externalDiscountId'] = $data['externalDiscountId'] ?? null;
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
     * Gets discountAmount
     *
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param string|null $discountAmount 优惠金额
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountName
     *
     * @return string|null
     */
    public function getDiscountName()
    {
        return $this->container['discountName'];
    }

    /**
     * Sets discountName
     *
     * @param string|null $discountName 优惠名称
     *
     * @return self
     */
    public function setDiscountName($discountName)
    {
        $this->container['discountName'] = $discountName;

        return $this;
    }

    /**
     * Gets discountPageLink
     *
     * @return string|null
     */
    public function getDiscountPageLink()
    {
        return $this->container['discountPageLink'];
    }

    /**
     * Sets discountPageLink
     *
     * @param string|null $discountPageLink 优惠跳转链接地址
     *
     * @return self
     */
    public function setDiscountPageLink($discountPageLink)
    {
        $this->container['discountPageLink'] = $discountPageLink;

        return $this;
    }

    /**
     * Gets discountQuantity
     *
     * @return int|null
     */
    public function getDiscountQuantity()
    {
        return $this->container['discountQuantity'];
    }

    /**
     * Sets discountQuantity
     *
     * @param int|null $discountQuantity 优惠数量
     *
     * @return self
     */
    public function setDiscountQuantity($discountQuantity)
    {
        $this->container['discountQuantity'] = $discountQuantity;

        return $this;
    }

    /**
     * Gets externalDiscountId
     *
     * @return string|null
     */
    public function getExternalDiscountId()
    {
        return $this->container['externalDiscountId'];
    }

    /**
     * Sets externalDiscountId
     *
     * @param string|null $externalDiscountId 外部优惠id
     *
     * @return self
     */
    public function setExternalDiscountId($externalDiscountId)
    {
        $this->container['externalDiscountId'] = $externalDiscountId;

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


