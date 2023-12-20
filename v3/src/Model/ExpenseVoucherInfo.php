<?php
/**
 * ExpenseVoucherInfo
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
 * ExpenseVoucherInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseVoucherInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseVoucherInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'consumptionDate' => 'string',
        'employeeId' => 'string',
        'employeeOpenId' => 'string',
        'extension' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'industry' => 'string',
        'isOffSet' => 'string',
        'medium' => 'string',
        'outerSourceId' => 'string',
        'parentType' => 'string',
        'voucherAmount' => 'string',
        'voucherDate' => 'string',
        'voucherId' => 'string',
        'voucherNo' => 'string',
        'voucherState' => 'string',
        'voucherType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'consumptionDate' => null,
        'employeeId' => null,
        'employeeOpenId' => null,
        'extension' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'industry' => null,
        'isOffSet' => null,
        'medium' => null,
        'outerSourceId' => null,
        'parentType' => null,
        'voucherAmount' => null,
        'voucherDate' => null,
        'voucherId' => null,
        'voucherNo' => null,
        'voucherState' => null,
        'voucherType' => null
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
        'accountId' => 'account_id',
        'consumptionDate' => 'consumption_date',
        'employeeId' => 'employee_id',
        'employeeOpenId' => 'employee_open_id',
        'extension' => 'extension',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'industry' => 'industry',
        'isOffSet' => 'is_off_set',
        'medium' => 'medium',
        'outerSourceId' => 'outer_source_id',
        'parentType' => 'parent_type',
        'voucherAmount' => 'voucher_amount',
        'voucherDate' => 'voucher_date',
        'voucherId' => 'voucher_id',
        'voucherNo' => 'voucher_no',
        'voucherState' => 'voucher_state',
        'voucherType' => 'voucher_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'consumptionDate' => 'setConsumptionDate',
        'employeeId' => 'setEmployeeId',
        'employeeOpenId' => 'setEmployeeOpenId',
        'extension' => 'setExtension',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'industry' => 'setIndustry',
        'isOffSet' => 'setIsOffSet',
        'medium' => 'setMedium',
        'outerSourceId' => 'setOuterSourceId',
        'parentType' => 'setParentType',
        'voucherAmount' => 'setVoucherAmount',
        'voucherDate' => 'setVoucherDate',
        'voucherId' => 'setVoucherId',
        'voucherNo' => 'setVoucherNo',
        'voucherState' => 'setVoucherState',
        'voucherType' => 'setVoucherType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'consumptionDate' => 'getConsumptionDate',
        'employeeId' => 'getEmployeeId',
        'employeeOpenId' => 'getEmployeeOpenId',
        'extension' => 'getExtension',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'industry' => 'getIndustry',
        'isOffSet' => 'getIsOffSet',
        'medium' => 'getMedium',
        'outerSourceId' => 'getOuterSourceId',
        'parentType' => 'getParentType',
        'voucherAmount' => 'getVoucherAmount',
        'voucherDate' => 'getVoucherDate',
        'voucherId' => 'getVoucherId',
        'voucherNo' => 'getVoucherNo',
        'voucherState' => 'getVoucherState',
        'voucherType' => 'getVoucherType'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['consumptionDate'] = $data['consumptionDate'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeOpenId'] = $data['employeeOpenId'] ?? null;
        $this->container['extension'] = $data['extension'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['isOffSet'] = $data['isOffSet'] ?? null;
        $this->container['medium'] = $data['medium'] ?? null;
        $this->container['outerSourceId'] = $data['outerSourceId'] ?? null;
        $this->container['parentType'] = $data['parentType'] ?? null;
        $this->container['voucherAmount'] = $data['voucherAmount'] ?? null;
        $this->container['voucherDate'] = $data['voucherDate'] ?? null;
        $this->container['voucherId'] = $data['voucherId'] ?? null;
        $this->container['voucherNo'] = $data['voucherNo'] ?? null;
        $this->container['voucherState'] = $data['voucherState'] ?? null;
        $this->container['voucherType'] = $data['voucherType'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 企业支付宝用户id(对应凭证ownerid)
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets consumptionDate
     *
     * @return string|null
     */
    public function getConsumptionDate()
    {
        return $this->container['consumptionDate'];
    }

    /**
     * Sets consumptionDate
     *
     * @param string|null $consumptionDate 消费时间
     *
     * @return self
     */
    public function setConsumptionDate($consumptionDate)
    {
        $this->container['consumptionDate'] = $consumptionDate;

        return $this;
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
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension 扩展预留
     *
     * @return self
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 数据创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 数据更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry 行业属性值（从支付宝主账单复制）
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets isOffSet
     *
     * @return string|null
     */
    public function getIsOffSet()
    {
        return $this->container['isOffSet'];
    }

    /**
     * Sets isOffSet
     *
     * @param string|null $isOffSet 是否冲抵凭证：0 否（蓝票）；1 是(如:红票)
     *
     * @return self
     */
    public function setIsOffSet($isOffSet)
    {
        $this->container['isOffSet'] = $isOffSet;

        return $this;
    }

    /**
     * Gets medium
     *
     * @return string|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string|null $medium 凭证介质：纸or电子(PAPER,ELECTRON)
     *
     * @return self
     */
    public function setMedium($medium)
    {
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets outerSourceId
     *
     * @return string|null
     */
    public function getOuterSourceId()
    {
        return $this->container['outerSourceId'];
    }

    /**
     * Sets outerSourceId
     *
     * @param string|null $outerSourceId 外部唯一ID（和凭证类型有关，如果发票类型为发票号码+发票编码，如果是账单，则为账单号）
     *
     * @return self
     */
    public function setOuterSourceId($outerSourceId)
    {
        $this->container['outerSourceId'] = $outerSourceId;

        return $this;
    }

    /**
     * Gets parentType
     *
     * @return string|null
     */
    public function getParentType()
    {
        return $this->container['parentType'];
    }

    /**
     * Sets parentType
     *
     * @param string|null $parentType 凭证父类型（INVOICE-发票，TRAVEL-出行凭证，HTL_ORDER-酒店水单，CONSUME-账单，财政票夹）
     *
     * @return self
     */
    public function setParentType($parentType)
    {
        $this->container['parentType'] = $parentType;

        return $this;
    }

    /**
     * Gets voucherAmount
     *
     * @return string|null
     */
    public function getVoucherAmount()
    {
        return $this->container['voucherAmount'];
    }

    /**
     * Sets voucherAmount
     *
     * @param string|null $voucherAmount 交易金额（元）
     *
     * @return self
     */
    public function setVoucherAmount($voucherAmount)
    {
        $this->container['voucherAmount'] = $voucherAmount;

        return $this;
    }

    /**
     * Gets voucherDate
     *
     * @return string|null
     */
    public function getVoucherDate()
    {
        return $this->container['voucherDate'];
    }

    /**
     * Sets voucherDate
     *
     * @param string|null $voucherDate 凭证创建时间
     *
     * @return self
     */
    public function setVoucherDate($voucherDate)
    {
        $this->container['voucherDate'] = $voucherDate;

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
     * Gets voucherNo
     *
     * @return string|null
     */
    public function getVoucherNo()
    {
        return $this->container['voucherNo'];
    }

    /**
     * Sets voucherNo
     *
     * @param string|null $voucherNo 一类凭证，唯一号码，有必须传，没有可不传。 发票、账单必须有 如部分餐饮小票，没有唯一号
     *
     * @return self
     */
    public function setVoucherNo($voucherNo)
    {
        $this->container['voucherNo'] = $voucherNo;

        return $this;
    }

    /**
     * Gets voucherState
     *
     * @return string|null
     */
    public function getVoucherState()
    {
        return $this->container['voucherState'];
    }

    /**
     * Sets voucherState
     *
     * @param string|null $voucherState 凭证状态(0-无效，1 有效)
     *
     * @return self
     */
    public function setVoucherState($voucherState)
    {
        $this->container['voucherState'] = $voucherState;

        return $this;
    }

    /**
     * Gets voucherType
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucherType'];
    }

    /**
     * Sets voucherType
     *
     * @param string|null $voucherType 凭证类型 （FINANCIAL_BILLS-财政电子票 MEDICAL_INVOICE-医疗票据 DONATION_INVOICE-公益捐赠电子票据 SETTLEMENT_INVOICE-往来结算票据 DUES_INVOICE-社会团体会费收据 INVOICE-增值税票 PLAIN-增值税电子普通发票 SPECIAL-增值税专用发票 PLAIN_INVOICE-增值税普通发票 PAPER_INVOICE-增值税普通发票(卷式) CONSUME-账单 ALIPAY_CONSUME-支付宝账单 TRAVEL-出行凭证 TAXI-出租车票 BUS_TICKET-汽车票 TRAIN-火车票 TOLL-过路费 BOARD_PASS-登机牌 HTL_ORDER-酒店水单 MEMO-酒店水单 OTHERS-杂票 FIXED-定额发票 LIST-小票 COMMON_INVOICE-通用发票）
     *
     * @return self
     */
    public function setVoucherType($voucherType)
    {
        $this->container['voucherType'] = $voucherType;

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


