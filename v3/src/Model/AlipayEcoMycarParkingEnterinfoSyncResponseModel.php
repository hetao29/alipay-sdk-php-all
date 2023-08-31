<?php
/**
 * AlipayEcoMycarParkingEnterinfoSyncResponseModel
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
 * AlipayEcoMycarParkingEnterinfoSyncResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingEnterinfoSyncResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingEnterinfoSyncResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementScene' => 'string',
        'agreementStatus' => 'string',
        'carStatus' => 'string',
        'currentTime' => 'string',
        'serialNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementScene' => null,
        'agreementStatus' => null,
        'carStatus' => null,
        'currentTime' => null,
        'serialNo' => null
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
        'agreementScene' => 'agreement_scene',
        'agreementStatus' => 'agreement_status',
        'carStatus' => 'car_status',
        'currentTime' => 'current_time',
        'serialNo' => 'serial_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementScene' => 'setAgreementScene',
        'agreementStatus' => 'setAgreementStatus',
        'carStatus' => 'setCarStatus',
        'currentTime' => 'setCurrentTime',
        'serialNo' => 'setSerialNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementScene' => 'getAgreementScene',
        'agreementStatus' => 'getAgreementStatus',
        'carStatus' => 'getCarStatus',
        'currentTime' => 'getCurrentTime',
        'serialNo' => 'getSerialNo'
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
        $this->container['agreementScene'] = $data['agreementScene'] ?? null;
        $this->container['agreementStatus'] = $data['agreementStatus'] ?? null;
        $this->container['carStatus'] = $data['carStatus'] ?? null;
        $this->container['currentTime'] = $data['currentTime'] ?? null;
        $this->container['serialNo'] = $data['serialNo'] ?? null;
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
     * Gets agreementScene
     *
     * @return string|null
     */
    public function getAgreementScene()
    {
        return $this->container['agreementScene'];
    }

    /**
     * Sets agreementScene
     *
     * @param string|null $agreementScene 用户签约的代扣场景字符集，多个英文逗号分割，当车场为ORC识别车牌的场景，返回值包含PLATE_PAY时，表示代扣协议可用。 当车场为ETC设备识别车牌，返回值包含ETC_PAY时表示协议可用。当用户未签约任何代扣场景时返回NO_AGREEMENT_SCENE
     *
     * @return self
     */
    public function setAgreementScene($agreementScene)
    {
        $this->container['agreementScene'] = $agreementScene;

        return $this;
    }

    /**
     * Gets agreementStatus
     *
     * @return string|null
     */
    public function getAgreementStatus()
    {
        return $this->container['agreementStatus'];
    }

    /**
     * Sets agreementStatus
     *
     * @param string|null $agreementStatus 该字段已废弃,请使用agreement_scene字段
     *
     * @return self
     */
    public function setAgreementStatus($agreementStatus)
    {
        $this->container['agreementStatus'] = $agreementStatus;

        return $this;
    }

    /**
     * Gets carStatus
     *
     * @return string|null
     */
    public function getCarStatus()
    {
        return $this->container['carStatus'];
    }

    /**
     * Sets carStatus
     *
     * @param string|null $carStatus 当前车辆在支付宝侧的信息，是否可以使用无感支付，可选返回项为： NORMAL：正常缴费用户 NON-SENSE-PAY：可无感支付用户
     *
     * @return self
     */
    public function setCarStatus($carStatus)
    {
        $this->container['carStatus'] = $carStatus;

        return $this;
    }

    /**
     * Gets currentTime
     *
     * @return string|null
     */
    public function getCurrentTime()
    {
        return $this->container['currentTime'];
    }

    /**
     * Sets currentTime
     *
     * @param string|null $currentTime 当前时间戳(查询签约状态和是否支持无感支付仅代表当前时间点查询结果，不作为最后代扣结果，应在发起代扣前再次查询)
     *
     * @return self
     */
    public function setCurrentTime($currentTime)
    {
        $this->container['currentTime'] = $currentTime;

        return $this;
    }

    /**
     * Gets serialNo
     *
     * @return string|null
     */
    public function getSerialNo()
    {
        return $this->container['serialNo'];
    }

    /**
     * Sets serialNo
     *
     * @param string|null $serialNo 支付宝业务流水号，用于记录车辆从驶入到驶出的全流程
     *
     * @return self
     */
    public function setSerialNo($serialNo)
    {
        $this->container['serialNo'] = $serialNo;

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


