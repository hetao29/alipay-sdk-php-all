<?php
/**
 * AlipayUserAlipaypointBudgetlibQueryResponseModel
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
 * The version of the OpenAPI document: 2023-10-26
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
 * AlipayUserAlipaypointBudgetlibQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayUserAlipaypointBudgetlibQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayUserAlipaypointBudgetlibQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'budgetCode' => 'string',
        'budgetDesc' => 'string',
        'cumulativeAmount' => 'int',
        'enabled' => 'bool',
        'endTime' => 'string',
        'remainAmount' => 'int',
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
        'budgetCode' => null,
        'budgetDesc' => null,
        'cumulativeAmount' => null,
        'enabled' => null,
        'endTime' => null,
        'remainAmount' => null,
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
        'budgetCode' => 'budget_code',
        'budgetDesc' => 'budget_desc',
        'cumulativeAmount' => 'cumulative_amount',
        'enabled' => 'enabled',
        'endTime' => 'end_time',
        'remainAmount' => 'remain_amount',
        'startTime' => 'start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budgetCode' => 'setBudgetCode',
        'budgetDesc' => 'setBudgetDesc',
        'cumulativeAmount' => 'setCumulativeAmount',
        'enabled' => 'setEnabled',
        'endTime' => 'setEndTime',
        'remainAmount' => 'setRemainAmount',
        'startTime' => 'setStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budgetCode' => 'getBudgetCode',
        'budgetDesc' => 'getBudgetDesc',
        'cumulativeAmount' => 'getCumulativeAmount',
        'enabled' => 'getEnabled',
        'endTime' => 'getEndTime',
        'remainAmount' => 'getRemainAmount',
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
        $this->container['budgetCode'] = $data['budgetCode'] ?? null;
        $this->container['budgetDesc'] = $data['budgetDesc'] ?? null;
        $this->container['cumulativeAmount'] = $data['cumulativeAmount'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['remainAmount'] = $data['remainAmount'] ?? null;
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
     * Gets budgetCode
     *
     * @return string|null
     */
    public function getBudgetCode()
    {
        return $this->container['budgetCode'];
    }

    /**
     * Sets budgetCode
     *
     * @param string|null $budgetCode 集分宝预算库编码
     *
     * @return self
     */
    public function setBudgetCode($budgetCode)
    {
        $this->container['budgetCode'] = $budgetCode;

        return $this;
    }

    /**
     * Gets budgetDesc
     *
     * @return string|null
     */
    public function getBudgetDesc()
    {
        return $this->container['budgetDesc'];
    }

    /**
     * Sets budgetDesc
     *
     * @param string|null $budgetDesc 预算库的中文描述
     *
     * @return self
     */
    public function setBudgetDesc($budgetDesc)
    {
        $this->container['budgetDesc'] = $budgetDesc;

        return $this;
    }

    /**
     * Gets cumulativeAmount
     *
     * @return int|null
     */
    public function getCumulativeAmount()
    {
        return $this->container['cumulativeAmount'];
    }

    /**
     * Sets cumulativeAmount
     *
     * @param int|null $cumulativeAmount 预算库累计积分数
     *
     * @return self
     */
    public function setCumulativeAmount($cumulativeAmount)
    {
        $this->container['cumulativeAmount'] = $cumulativeAmount;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled 预算库是否为生效状态标识，true-生效中，false-已失效
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param string|null $endTime 预算库结束时间, yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets remainAmount
     *
     * @return int|null
     */
    public function getRemainAmount()
    {
        return $this->container['remainAmount'];
    }

    /**
     * Sets remainAmount
     *
     * @param int|null $remainAmount 预算库当前剩余积分数
     *
     * @return self
     */
    public function setRemainAmount($remainAmount)
    {
        $this->container['remainAmount'] = $remainAmount;

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
     * @param string|null $startTime 预算库开始时间, yyyy-MM-dd HH:mm:ss
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


