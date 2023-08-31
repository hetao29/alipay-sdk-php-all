<?php
/**
 * AlipayOpenPublicMessageCustomSendModel
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
 * AlipayOpenPublicMessageCustomSendModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenPublicMessageCustomSendModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenPublicMessageCustomSendModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'articles' => '\Alipay\OpenAPISDK\Model\Article[]',
        'chat' => 'string',
        'eventType' => 'string',
        'msgType' => 'string',
        'openId' => 'string',
        'text' => '\Alipay\OpenAPISDK\Model\Text',
        'toUserId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'articles' => null,
        'chat' => null,
        'eventType' => null,
        'msgType' => null,
        'openId' => null,
        'text' => null,
        'toUserId' => null
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
        'articles' => 'articles',
        'chat' => 'chat',
        'eventType' => 'event_type',
        'msgType' => 'msg_type',
        'openId' => 'open_id',
        'text' => 'text',
        'toUserId' => 'to_user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'articles' => 'setArticles',
        'chat' => 'setChat',
        'eventType' => 'setEventType',
        'msgType' => 'setMsgType',
        'openId' => 'setOpenId',
        'text' => 'setText',
        'toUserId' => 'setToUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'articles' => 'getArticles',
        'chat' => 'getChat',
        'eventType' => 'getEventType',
        'msgType' => 'getMsgType',
        'openId' => 'getOpenId',
        'text' => 'getText',
        'toUserId' => 'getToUserId'
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
        $this->container['articles'] = $data['articles'] ?? null;
        $this->container['chat'] = $data['chat'] ?? null;
        $this->container['eventType'] = $data['eventType'] ?? null;
        $this->container['msgType'] = $data['msgType'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['toUserId'] = $data['toUserId'] ?? null;
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
     * Gets articles
     *
     * @return \Alipay\OpenAPISDK\Model\Article[]|null
     */
    public function getArticles()
    {
        return $this->container['articles'];
    }

    /**
     * Sets articles
     *
     * @param \Alipay\OpenAPISDK\Model\Article[]|null $articles msg_type为image-text，本参数必填。
     *
     * @return self
     */
    public function setArticles($articles)
    {
        $this->container['articles'] = $articles;

        return $this;
    }

    /**
     * Gets chat
     *
     * @return string|null
     */
    public function getChat()
    {
        return $this->container['chat'];
    }

    /**
     * Sets chat
     *
     * @param string|null $chat 是否为聊天消息。枚举支持： *0：代表非聊天消息，消息显示在生活号主页，默认为 0。 *1：代表是聊天消息，消息显示在咨询反馈列表页。
     *
     * @return self
     */
    public function setChat($chat)
    {
        $this->container['chat'] = $chat;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType 触发消息的事件类型，默认为空。代表商户未改造。如果是follow，代表关注消息。click代表菜单点击，enter_ppchat代表进入事件；请注意事件类型的大小写
     *
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets msgType
     *
     * @return string|null
     */
    public function getMsgType()
    {
        return $this->container['msgType'];
    }

    /**
     * Sets msgType
     *
     * @param string|null $msgType 消息类型。枚举支持： * text：表示文本消息； * image-text：表示图文消息。
     *
     * @return self
     */
    public function setMsgType($msgType)
    {
        $this->container['msgType'] = $msgType;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 支付宝用户的唯一标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets text
     *
     * @return \Alipay\OpenAPISDK\Model\Text|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param \Alipay\OpenAPISDK\Model\Text|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets toUserId
     *
     * @return string|null
     */
    public function getToUserId()
    {
        return $this->container['toUserId'];
    }

    /**
     * Sets toUserId
     *
     * @param string|null $toUserId 消息接收用户的userid
     *
     * @return self
     */
    public function setToUserId($toUserId)
    {
        $this->container['toUserId'] = $toUserId;

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


