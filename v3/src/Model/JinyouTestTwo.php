<?php
/**
 * JinyouTestTwo
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
 * JinyouTestTwo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JinyouTestTwo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JinyouTestTwo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        't1Openid' => 'string',
        't1Y' => 'string',
        't2F' => '\Alipay\OpenAPISDK\Model\JinyouTestOne',
        't3N' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        't1Openid' => null,
        't1Y' => null,
        't2F' => null,
        't3N' => null
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
        't1Openid' => 't_1_openid',
        't1Y' => 't_1_y',
        't2F' => 't_2_f',
        't3N' => 't_3_n'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        't1Openid' => 'setT1Openid',
        't1Y' => 'setT1Y',
        't2F' => 'setT2F',
        't3N' => 'setT3N'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        't1Openid' => 'getT1Openid',
        't1Y' => 'getT1Y',
        't2F' => 'getT2F',
        't3N' => 'getT3N'
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
        $this->container['t1Openid'] = $data['t1Openid'] ?? null;
        $this->container['t1Y'] = $data['t1Y'] ?? null;
        $this->container['t2F'] = $data['t2F'] ?? null;
        $this->container['t3N'] = $data['t3N'] ?? null;
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
     * Gets t1Openid
     *
     * @return string|null
     */
    public function getT1Openid()
    {
        return $this->container['t1Openid'];
    }

    /**
     * Sets t1Openid
     *
     * @param string|null $t1Openid 1
     *
     * @return self
     */
    public function setT1Openid($t1Openid)
    {
        $this->container['t1Openid'] = $t1Openid;

        return $this;
    }

    /**
     * Gets t1Y
     *
     * @return string|null
     */
    public function getT1Y()
    {
        return $this->container['t1Y'];
    }

    /**
     * Sets t1Y
     *
     * @param string|null $t1Y 1
     *
     * @return self
     */
    public function setT1Y($t1Y)
    {
        $this->container['t1Y'] = $t1Y;

        return $this;
    }

    /**
     * Gets t2F
     *
     * @return \Alipay\OpenAPISDK\Model\JinyouTestOne|null
     */
    public function getT2F()
    {
        return $this->container['t2F'];
    }

    /**
     * Sets t2F
     *
     * @param \Alipay\OpenAPISDK\Model\JinyouTestOne|null $t2F t2F
     *
     * @return self
     */
    public function setT2F($t2F)
    {
        $this->container['t2F'] = $t2F;

        return $this;
    }

    /**
     * Gets t3N
     *
     * @return string|null
     */
    public function getT3N()
    {
        return $this->container['t3N'];
    }

    /**
     * Sets t3N
     *
     * @param string|null $t3N 1
     *
     * @return self
     */
    public function setT3N($t3N)
    {
        $this->container['t3N'] = $t3N;

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


