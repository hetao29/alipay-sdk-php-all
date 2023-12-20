<?php
/**
 * WaybillInvoiceIstd
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
 * WaybillInvoiceIstd Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WaybillInvoiceIstd implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaybillInvoiceIstd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reason' => 'string',
        'shopNo' => 'string',
        'waybillAmount' => 'string',
        'waybillInvoiceStatus' => 'int',
        'waybillNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reason' => null,
        'shopNo' => null,
        'waybillAmount' => null,
        'waybillInvoiceStatus' => null,
        'waybillNo' => null
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
        'reason' => 'reason',
        'shopNo' => 'shop_no',
        'waybillAmount' => 'waybill_amount',
        'waybillInvoiceStatus' => 'waybill_invoice_status',
        'waybillNo' => 'waybill_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'shopNo' => 'setShopNo',
        'waybillAmount' => 'setWaybillAmount',
        'waybillInvoiceStatus' => 'setWaybillInvoiceStatus',
        'waybillNo' => 'setWaybillNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'shopNo' => 'getShopNo',
        'waybillAmount' => 'getWaybillAmount',
        'waybillInvoiceStatus' => 'getWaybillInvoiceStatus',
        'waybillNo' => 'getWaybillNo'
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
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['shopNo'] = $data['shopNo'] ?? null;
        $this->container['waybillAmount'] = $data['waybillAmount'] ?? null;
        $this->container['waybillInvoiceStatus'] = $data['waybillInvoiceStatus'] ?? null;
        $this->container['waybillNo'] = $data['waybillNo'] ?? null;
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
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason 失败原因，需要传单个配送单的驳回原因
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets shopNo
     *
     * @return string|null
     */
    public function getShopNo()
    {
        return $this->container['shopNo'];
    }

    /**
     * Sets shopNo
     *
     * @param string|null $shopNo 商家门店编号
     *
     * @return self
     */
    public function setShopNo($shopNo)
    {
        $this->container['shopNo'] = $shopNo;

        return $this;
    }

    /**
     * Gets waybillAmount
     *
     * @return string|null
     */
    public function getWaybillAmount()
    {
        return $this->container['waybillAmount'];
    }

    /**
     * Sets waybillAmount
     *
     * @param string|null $waybillAmount 即时配送运单金额，waybill_invoce_status为1的情况下不能为空
     *
     * @return self
     */
    public function setWaybillAmount($waybillAmount)
    {
        $this->container['waybillAmount'] = $waybillAmount;

        return $this;
    }

    /**
     * Gets waybillInvoiceStatus
     *
     * @return int|null
     */
    public function getWaybillInvoiceStatus()
    {
        return $this->container['waybillInvoiceStatus'];
    }

    /**
     * Sets waybillInvoiceStatus
     *
     * @param int|null $waybillInvoiceStatus 明细的运单开票状态，1：开票成功 2：不可开票 3：可开票；整体开票状态为0的情况下，无开票明细；整体开票状态为1，明细开票状态全部是1；整体开票状态为2，明细开票状态为2或者3
     *
     * @return self
     */
    public function setWaybillInvoiceStatus($waybillInvoiceStatus)
    {
        $this->container['waybillInvoiceStatus'] = $waybillInvoiceStatus;

        return $this;
    }

    /**
     * Gets waybillNo
     *
     * @return string|null
     */
    public function getWaybillNo()
    {
        return $this->container['waybillNo'];
    }

    /**
     * Sets waybillNo
     *
     * @param string|null $waybillNo 即时配送运单编号
     *
     * @return self
     */
    public function setWaybillNo($waybillNo)
    {
        $this->container['waybillNo'] = $waybillNo;

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


