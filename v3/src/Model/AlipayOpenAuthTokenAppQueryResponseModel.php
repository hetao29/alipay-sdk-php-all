<?php
/**
 * AlipayOpenAuthTokenAppQueryResponseModel
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
 * AlipayOpenAuthTokenAppQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAuthTokenAppQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenAuthTokenAppQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authAppId' => 'string',
        'authEnd' => 'string',
        'authMethods' => 'string[]',
        'authStart' => 'string',
        'expiresIn' => 'int',
        'isByAppAuth' => 'bool',
        'status' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authAppId' => null,
        'authEnd' => null,
        'authMethods' => null,
        'authStart' => null,
        'expiresIn' => null,
        'isByAppAuth' => null,
        'status' => null,
        'userId' => null
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
        'authAppId' => 'auth_app_id',
        'authEnd' => 'auth_end',
        'authMethods' => 'auth_methods',
        'authStart' => 'auth_start',
        'expiresIn' => 'expires_in',
        'isByAppAuth' => 'is_by_app_auth',
        'status' => 'status',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authAppId' => 'setAuthAppId',
        'authEnd' => 'setAuthEnd',
        'authMethods' => 'setAuthMethods',
        'authStart' => 'setAuthStart',
        'expiresIn' => 'setExpiresIn',
        'isByAppAuth' => 'setIsByAppAuth',
        'status' => 'setStatus',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authAppId' => 'getAuthAppId',
        'authEnd' => 'getAuthEnd',
        'authMethods' => 'getAuthMethods',
        'authStart' => 'getAuthStart',
        'expiresIn' => 'getExpiresIn',
        'isByAppAuth' => 'getIsByAppAuth',
        'status' => 'getStatus',
        'userId' => 'getUserId'
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
        $this->container['authAppId'] = $data['authAppId'] ?? null;
        $this->container['authEnd'] = $data['authEnd'] ?? null;
        $this->container['authMethods'] = $data['authMethods'] ?? null;
        $this->container['authStart'] = $data['authStart'] ?? null;
        $this->container['expiresIn'] = $data['expiresIn'] ?? null;
        $this->container['isByAppAuth'] = $data['isByAppAuth'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets authAppId
     *
     * @return string|null
     */
    public function getAuthAppId()
    {
        return $this->container['authAppId'];
    }

    /**
     * Sets authAppId
     *
     * @param string|null $authAppId 授权商户的appid
     *
     * @return self
     */
    public function setAuthAppId($authAppId)
    {
        $this->container['authAppId'] = $authAppId;

        return $this;
    }

    /**
     * Gets authEnd
     *
     * @return string|null
     */
    public function getAuthEnd()
    {
        return $this->container['authEnd'];
    }

    /**
     * Sets authEnd
     *
     * @param string|null $authEnd 授权失效时间
     *
     * @return self
     */
    public function setAuthEnd($authEnd)
    {
        $this->container['authEnd'] = $authEnd;

        return $this;
    }

    /**
     * Gets authMethods
     *
     * @return string[]|null
     */
    public function getAuthMethods()
    {
        return $this->container['authMethods'];
    }

    /**
     * Sets authMethods
     *
     * @param string[]|null $authMethods 当前app_auth_token的授权接口列表
     *
     * @return self
     */
    public function setAuthMethods($authMethods)
    {
        $this->container['authMethods'] = $authMethods;

        return $this;
    }

    /**
     * Gets authStart
     *
     * @return string|null
     */
    public function getAuthStart()
    {
        return $this->container['authStart'];
    }

    /**
     * Sets authStart
     *
     * @param string|null $authStart 授权生效时间
     *
     * @return self
     */
    public function setAuthStart($authStart)
    {
        $this->container['authStart'] = $authStart;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn 应用授权令牌失效时间，单位到秒
     *
     * @return self
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets isByAppAuth
     *
     * @return bool|null
     */
    public function getIsByAppAuth()
    {
        return $this->container['isByAppAuth'];
    }

    /**
     * Sets isByAppAuth
     *
     * @param bool|null $isByAppAuth 当商家选择全权委托授权时值为true，未选择时为false。
     *
     * @return self
     */
    public function setIsByAppAuth($isByAppAuth)
    {
        $this->container['isByAppAuth'] = $isByAppAuth;

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
     * @param string|null $status valid：有效状态；invalid：无效状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 授权商户的user_id
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


