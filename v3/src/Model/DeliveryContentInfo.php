<?php
/**
 * DeliveryContentInfo
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
 * DeliveryContentInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryContentInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryContentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deliveryActivityContent' => '\Alipay\OpenAPISDK\Model\DeliveryActivityContentInfo',
        'deliveryAppContent' => '\Alipay\OpenAPISDK\Model\DeliveryMiniAppContentInfo',
        'deliveryContentType' => 'string',
        'deliveryDisplayInfo' => '\Alipay\OpenAPISDK\Model\DeliveryDisplayInfo',
        'deliveryItemContent' => '\Alipay\OpenAPISDK\Model\DeliveryItemContentInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deliveryActivityContent' => null,
        'deliveryAppContent' => null,
        'deliveryContentType' => null,
        'deliveryDisplayInfo' => null,
        'deliveryItemContent' => null
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
        'deliveryActivityContent' => 'delivery_activity_content',
        'deliveryAppContent' => 'delivery_app_content',
        'deliveryContentType' => 'delivery_content_type',
        'deliveryDisplayInfo' => 'delivery_display_info',
        'deliveryItemContent' => 'delivery_item_content'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deliveryActivityContent' => 'setDeliveryActivityContent',
        'deliveryAppContent' => 'setDeliveryAppContent',
        'deliveryContentType' => 'setDeliveryContentType',
        'deliveryDisplayInfo' => 'setDeliveryDisplayInfo',
        'deliveryItemContent' => 'setDeliveryItemContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deliveryActivityContent' => 'getDeliveryActivityContent',
        'deliveryAppContent' => 'getDeliveryAppContent',
        'deliveryContentType' => 'getDeliveryContentType',
        'deliveryDisplayInfo' => 'getDeliveryDisplayInfo',
        'deliveryItemContent' => 'getDeliveryItemContent'
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
        $this->container['deliveryActivityContent'] = $data['deliveryActivityContent'] ?? null;
        $this->container['deliveryAppContent'] = $data['deliveryAppContent'] ?? null;
        $this->container['deliveryContentType'] = $data['deliveryContentType'] ?? null;
        $this->container['deliveryDisplayInfo'] = $data['deliveryDisplayInfo'] ?? null;
        $this->container['deliveryItemContent'] = $data['deliveryItemContent'] ?? null;
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
     * Gets deliveryActivityContent
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryActivityContentInfo|null
     */
    public function getDeliveryActivityContent()
    {
        return $this->container['deliveryActivityContent'];
    }

    /**
     * Sets deliveryActivityContent
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryActivityContentInfo|null $deliveryActivityContent deliveryActivityContent
     *
     * @return self
     */
    public function setDeliveryActivityContent($deliveryActivityContent)
    {
        $this->container['deliveryActivityContent'] = $deliveryActivityContent;

        return $this;
    }

    /**
     * Gets deliveryAppContent
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryMiniAppContentInfo|null
     */
    public function getDeliveryAppContent()
    {
        return $this->container['deliveryAppContent'];
    }

    /**
     * Sets deliveryAppContent
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryMiniAppContentInfo|null $deliveryAppContent deliveryAppContent
     *
     * @return self
     */
    public function setDeliveryAppContent($deliveryAppContent)
    {
        $this->container['deliveryAppContent'] = $deliveryAppContent;

        return $this;
    }

    /**
     * Gets deliveryContentType
     *
     * @return string|null
     */
    public function getDeliveryContentType()
    {
        return $this->container['deliveryContentType'];
    }

    /**
     * Sets deliveryContentType
     *
     * @param string|null $deliveryContentType 运营内容类型。
     *
     * @return self
     */
    public function setDeliveryContentType($deliveryContentType)
    {
        $this->container['deliveryContentType'] = $deliveryContentType;

        return $this;
    }

    /**
     * Gets deliveryDisplayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryDisplayInfo|null
     */
    public function getDeliveryDisplayInfo()
    {
        return $this->container['deliveryDisplayInfo'];
    }

    /**
     * Sets deliveryDisplayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryDisplayInfo|null $deliveryDisplayInfo deliveryDisplayInfo
     *
     * @return self
     */
    public function setDeliveryDisplayInfo($deliveryDisplayInfo)
    {
        $this->container['deliveryDisplayInfo'] = $deliveryDisplayInfo;

        return $this;
    }

    /**
     * Gets deliveryItemContent
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryItemContentInfo|null
     */
    public function getDeliveryItemContent()
    {
        return $this->container['deliveryItemContent'];
    }

    /**
     * Sets deliveryItemContent
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryItemContentInfo|null $deliveryItemContent deliveryItemContent
     *
     * @return self
     */
    public function setDeliveryItemContent($deliveryItemContent)
    {
        $this->container['deliveryItemContent'] = $deliveryItemContent;

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


