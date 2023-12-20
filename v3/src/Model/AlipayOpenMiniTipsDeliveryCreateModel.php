<?php
/**
 * AlipayOpenMiniTipsDeliveryCreateModel
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
 * AlipayOpenMiniTipsDeliveryCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniTipsDeliveryCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniTipsDeliveryCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deliveryContent' => 'string',
        'deliveryName' => 'string',
        'endTime' => 'string',
        'matchType' => 'string',
        'matchUrl' => 'string',
        'startTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deliveryContent' => null,
        'deliveryName' => null,
        'endTime' => null,
        'matchType' => null,
        'matchUrl' => null,
        'startTime' => null
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
        'deliveryContent' => 'delivery_content',
        'deliveryName' => 'delivery_name',
        'endTime' => 'end_time',
        'matchType' => 'match_type',
        'matchUrl' => 'match_url',
        'startTime' => 'start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deliveryContent' => 'setDeliveryContent',
        'deliveryName' => 'setDeliveryName',
        'endTime' => 'setEndTime',
        'matchType' => 'setMatchType',
        'matchUrl' => 'setMatchUrl',
        'startTime' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deliveryContent' => 'getDeliveryContent',
        'deliveryName' => 'getDeliveryName',
        'endTime' => 'getEndTime',
        'matchType' => 'getMatchType',
        'matchUrl' => 'getMatchUrl',
        'startTime' => 'getStartTime'
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
        $this->container['deliveryContent'] = $data['deliveryContent'] ?? null;
        $this->container['deliveryName'] = $data['deliveryName'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['matchType'] = $data['matchType'] ?? null;
        $this->container['matchUrl'] = $data['matchUrl'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
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
     * Gets deliveryContent
     *
     * @return string|null
     */
    public function getDeliveryContent()
    {
        return $this->container['deliveryContent'];
    }

    /**
     * Sets deliveryContent
     *
     * @param string|null $deliveryContent 收藏引导文案内容，不得超过14个字
     *
     * @return self
     */
    public function setDeliveryContent($deliveryContent)
    {
        $this->container['deliveryContent'] = $deliveryContent;

        return $this;
    }

    /**
     * Gets deliveryName
     *
     * @return string|null
     */
    public function getDeliveryName()
    {
        return $this->container['deliveryName'];
    }

    /**
     * Sets deliveryName
     *
     * @param string|null $deliveryName 收藏引导活动名称
     *
     * @return self
     */
    public function setDeliveryName($deliveryName)
    {
        $this->container['deliveryName'] = $deliveryName;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets matchType
     *
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
     * Sets matchType
     *
     * @param string|null $matchType 匹配类型
     *
     * @return self
     */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;

        return $this;
    }

    /**
     * Gets matchUrl
     *
     * @return string|null
     */
    public function getMatchUrl()
    {
        return $this->container['matchUrl'];
    }

    /**
     * Sets matchUrl
     *
     * @param string|null $matchUrl 目标页面地址，当匹配类型为TARGETURL时，投放文案仅在当前页面生效
     *
     * @return self
     */
    public function setMatchUrl($matchUrl)
    {
        $this->container['matchUrl'] = $matchUrl;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 活动开始时间
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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


