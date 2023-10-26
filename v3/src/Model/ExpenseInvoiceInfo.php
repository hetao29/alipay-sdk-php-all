<?php
/**
 * ExpenseInvoiceInfo
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
 * ExpenseInvoiceInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseInvoiceInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseInvoiceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employeeId' => 'string',
        'employeeOpenId' => 'string',
        'invoiceOutputInfo' => '\Alipay\OpenAPISDK\Model\InvoiceOutputInfo',
        'ocrNormalScanInfo' => '\Alipay\OpenAPISDK\Model\OcrNormalScanInfo',
        'ocrPlaneScanInfo' => '\Alipay\OpenAPISDK\Model\OcrPlaneScanInfo',
        'ocrTaxiScanInfo' => '\Alipay\OpenAPISDK\Model\OcrTaxiScanInfo',
        'ocrTrainScanInfo' => '\Alipay\OpenAPISDK\Model\OcrTrainScanInfo',
        'voucherFileInfo' => '\Alipay\OpenAPISDK\Model\VoucherFileInfo',
        'voucherId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employeeId' => null,
        'employeeOpenId' => null,
        'invoiceOutputInfo' => null,
        'ocrNormalScanInfo' => null,
        'ocrPlaneScanInfo' => null,
        'ocrTaxiScanInfo' => null,
        'ocrTrainScanInfo' => null,
        'voucherFileInfo' => null,
        'voucherId' => null
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
        'employeeId' => 'employee_id',
        'employeeOpenId' => 'employee_open_id',
        'invoiceOutputInfo' => 'invoice_output_info',
        'ocrNormalScanInfo' => 'ocr_normal_scan_info',
        'ocrPlaneScanInfo' => 'ocr_plane_scan_info',
        'ocrTaxiScanInfo' => 'ocr_taxi_scan_info',
        'ocrTrainScanInfo' => 'ocr_train_scan_info',
        'voucherFileInfo' => 'voucher_file_info',
        'voucherId' => 'voucher_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employeeId' => 'setEmployeeId',
        'employeeOpenId' => 'setEmployeeOpenId',
        'invoiceOutputInfo' => 'setInvoiceOutputInfo',
        'ocrNormalScanInfo' => 'setOcrNormalScanInfo',
        'ocrPlaneScanInfo' => 'setOcrPlaneScanInfo',
        'ocrTaxiScanInfo' => 'setOcrTaxiScanInfo',
        'ocrTrainScanInfo' => 'setOcrTrainScanInfo',
        'voucherFileInfo' => 'setVoucherFileInfo',
        'voucherId' => 'setVoucherId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employeeId' => 'getEmployeeId',
        'employeeOpenId' => 'getEmployeeOpenId',
        'invoiceOutputInfo' => 'getInvoiceOutputInfo',
        'ocrNormalScanInfo' => 'getOcrNormalScanInfo',
        'ocrPlaneScanInfo' => 'getOcrPlaneScanInfo',
        'ocrTaxiScanInfo' => 'getOcrTaxiScanInfo',
        'ocrTrainScanInfo' => 'getOcrTrainScanInfo',
        'voucherFileInfo' => 'getVoucherFileInfo',
        'voucherId' => 'getVoucherId'
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
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeOpenId'] = $data['employeeOpenId'] ?? null;
        $this->container['invoiceOutputInfo'] = $data['invoiceOutputInfo'] ?? null;
        $this->container['ocrNormalScanInfo'] = $data['ocrNormalScanInfo'] ?? null;
        $this->container['ocrPlaneScanInfo'] = $data['ocrPlaneScanInfo'] ?? null;
        $this->container['ocrTaxiScanInfo'] = $data['ocrTaxiScanInfo'] ?? null;
        $this->container['ocrTrainScanInfo'] = $data['ocrTrainScanInfo'] ?? null;
        $this->container['voucherFileInfo'] = $data['voucherFileInfo'] ?? null;
        $this->container['voucherId'] = $data['voucherId'] ?? null;
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
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 员工ID
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets employeeOpenId
     *
     * @return string|null
     */
    public function getEmployeeOpenId()
    {
        return $this->container['employeeOpenId'];
    }

    /**
     * Sets employeeOpenId
     *
     * @param string|null $employeeOpenId 员工ID
     *
     * @return self
     */
    public function setEmployeeOpenId($employeeOpenId)
    {
        $this->container['employeeOpenId'] = $employeeOpenId;

        return $this;
    }

    /**
     * Gets invoiceOutputInfo
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceOutputInfo|null
     */
    public function getInvoiceOutputInfo()
    {
        return $this->container['invoiceOutputInfo'];
    }

    /**
     * Sets invoiceOutputInfo
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceOutputInfo|null $invoiceOutputInfo invoiceOutputInfo
     *
     * @return self
     */
    public function setInvoiceOutputInfo($invoiceOutputInfo)
    {
        $this->container['invoiceOutputInfo'] = $invoiceOutputInfo;

        return $this;
    }

    /**
     * Gets ocrNormalScanInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OcrNormalScanInfo|null
     */
    public function getOcrNormalScanInfo()
    {
        return $this->container['ocrNormalScanInfo'];
    }

    /**
     * Sets ocrNormalScanInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OcrNormalScanInfo|null $ocrNormalScanInfo ocrNormalScanInfo
     *
     * @return self
     */
    public function setOcrNormalScanInfo($ocrNormalScanInfo)
    {
        $this->container['ocrNormalScanInfo'] = $ocrNormalScanInfo;

        return $this;
    }

    /**
     * Gets ocrPlaneScanInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OcrPlaneScanInfo|null
     */
    public function getOcrPlaneScanInfo()
    {
        return $this->container['ocrPlaneScanInfo'];
    }

    /**
     * Sets ocrPlaneScanInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OcrPlaneScanInfo|null $ocrPlaneScanInfo ocrPlaneScanInfo
     *
     * @return self
     */
    public function setOcrPlaneScanInfo($ocrPlaneScanInfo)
    {
        $this->container['ocrPlaneScanInfo'] = $ocrPlaneScanInfo;

        return $this;
    }

    /**
     * Gets ocrTaxiScanInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OcrTaxiScanInfo|null
     */
    public function getOcrTaxiScanInfo()
    {
        return $this->container['ocrTaxiScanInfo'];
    }

    /**
     * Sets ocrTaxiScanInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OcrTaxiScanInfo|null $ocrTaxiScanInfo ocrTaxiScanInfo
     *
     * @return self
     */
    public function setOcrTaxiScanInfo($ocrTaxiScanInfo)
    {
        $this->container['ocrTaxiScanInfo'] = $ocrTaxiScanInfo;

        return $this;
    }

    /**
     * Gets ocrTrainScanInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OcrTrainScanInfo|null
     */
    public function getOcrTrainScanInfo()
    {
        return $this->container['ocrTrainScanInfo'];
    }

    /**
     * Sets ocrTrainScanInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OcrTrainScanInfo|null $ocrTrainScanInfo ocrTrainScanInfo
     *
     * @return self
     */
    public function setOcrTrainScanInfo($ocrTrainScanInfo)
    {
        $this->container['ocrTrainScanInfo'] = $ocrTrainScanInfo;

        return $this;
    }

    /**
     * Gets voucherFileInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherFileInfo|null
     */
    public function getVoucherFileInfo()
    {
        return $this->container['voucherFileInfo'];
    }

    /**
     * Sets voucherFileInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherFileInfo|null $voucherFileInfo voucherFileInfo
     *
     * @return self
     */
    public function setVoucherFileInfo($voucherFileInfo)
    {
        $this->container['voucherFileInfo'] = $voucherFileInfo;

        return $this;
    }

    /**
     * Gets voucherId
     *
     * @return string|null
     */
    public function getVoucherId()
    {
        return $this->container['voucherId'];
    }

    /**
     * Sets voucherId
     *
     * @param string|null $voucherId 凭证ID
     *
     * @return self
     */
    public function setVoucherId($voucherId)
    {
        $this->container['voucherId'] = $voucherId;

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


