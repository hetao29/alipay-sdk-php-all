<?php
/**
 * OcrPlaneScanInfo
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
 * OcrPlaneScanInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OcrPlaneScanInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OcrPlaneScanInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destination' => 'string',
        'flightNo' => 'string',
        'invoiceDate' => 'string',
        'origin' => 'string',
        'passenger' => 'string',
        'price' => 'string',
        'remark' => 'string',
        'seatClass' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'destination' => null,
        'flightNo' => null,
        'invoiceDate' => null,
        'origin' => null,
        'passenger' => null,
        'price' => null,
        'remark' => null,
        'seatClass' => null
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
        'destination' => 'destination',
        'flightNo' => 'flight_no',
        'invoiceDate' => 'invoice_date',
        'origin' => 'origin',
        'passenger' => 'passenger',
        'price' => 'price',
        'remark' => 'remark',
        'seatClass' => 'seat_class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination' => 'setDestination',
        'flightNo' => 'setFlightNo',
        'invoiceDate' => 'setInvoiceDate',
        'origin' => 'setOrigin',
        'passenger' => 'setPassenger',
        'price' => 'setPrice',
        'remark' => 'setRemark',
        'seatClass' => 'setSeatClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination' => 'getDestination',
        'flightNo' => 'getFlightNo',
        'invoiceDate' => 'getInvoiceDate',
        'origin' => 'getOrigin',
        'passenger' => 'getPassenger',
        'price' => 'getPrice',
        'remark' => 'getRemark',
        'seatClass' => 'getSeatClass'
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
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['flightNo'] = $data['flightNo'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['origin'] = $data['origin'] ?? null;
        $this->container['passenger'] = $data['passenger'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
        $this->container['seatClass'] = $data['seatClass'] ?? null;
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
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination 目的地
     *
     * @return self
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets flightNo
     *
     * @return string|null
     */
    public function getFlightNo()
    {
        return $this->container['flightNo'];
    }

    /**
     * Sets flightNo
     *
     * @param string|null $flightNo 航班号
     *
     * @return self
     */
    public function setFlightNo($flightNo)
    {
        $this->container['flightNo'] = $flightNo;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 乘机日期
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin 出发地
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets passenger
     *
     * @return string|null
     */
    public function getPassenger()
    {
        return $this->container['passenger'];
    }

    /**
     * Sets passenger
     *
     * @param string|null $passenger 乘客
     *
     * @return self
     */
    public function setPassenger($passenger)
    {
        $this->container['passenger'] = $passenger;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price 金额（元）
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 明细事由
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets seatClass
     *
     * @return string|null
     */
    public function getSeatClass()
    {
        return $this->container['seatClass'];
    }

    /**
     * Sets seatClass
     *
     * @param string|null $seatClass 飞机舱位
     *
     * @return self
     */
    public function setSeatClass($seatClass)
    {
        $this->container['seatClass'] = $seatClass;

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


