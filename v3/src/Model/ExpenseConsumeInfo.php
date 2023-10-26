<?php
/**
 * ExpenseConsumeInfo
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
 * ExpenseConsumeInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseConsumeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseConsumeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'actualAccountNumber' => 'string',
        'batchId' => 'string',
        'billNo' => 'string',
        'billType' => 'string',
        'categoryName' => 'string',
        'consumeAmount' => 'string',
        'consumeDate' => 'string',
        'consumeTitle' => 'string',
        'employeeId' => 'string',
        'employeeOpenId' => 'string',
        'merchantId' => 'string',
        'mshopId' => 'string',
        'openModel' => 'string',
        'originalVoucherId' => 'string',
        'outBizNo' => 'string',
        'pPayAmount' => 'string',
        'payeeName' => 'string',
        'projectId' => 'string',
        'projiectId' => 'string',
        'refundAmount' => 'string',
        'refundStatus' => 'string',
        'standardId' => 'string',
        'storeId' => 'string',
        'summaryId' => 'string',
        'tpSign' => 'string',
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
        'accountId' => null,
        'actualAccountNumber' => null,
        'batchId' => null,
        'billNo' => null,
        'billType' => null,
        'categoryName' => null,
        'consumeAmount' => null,
        'consumeDate' => null,
        'consumeTitle' => null,
        'employeeId' => null,
        'employeeOpenId' => null,
        'merchantId' => null,
        'mshopId' => null,
        'openModel' => null,
        'originalVoucherId' => null,
        'outBizNo' => null,
        'pPayAmount' => null,
        'payeeName' => null,
        'projectId' => null,
        'projiectId' => null,
        'refundAmount' => null,
        'refundStatus' => null,
        'standardId' => null,
        'storeId' => null,
        'summaryId' => null,
        'tpSign' => null,
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
        'accountId' => 'account_id',
        'actualAccountNumber' => 'actual_account_number',
        'batchId' => 'batch_id',
        'billNo' => 'bill_no',
        'billType' => 'bill_type',
        'categoryName' => 'category_name',
        'consumeAmount' => 'consume_amount',
        'consumeDate' => 'consume_date',
        'consumeTitle' => 'consume_title',
        'employeeId' => 'employee_id',
        'employeeOpenId' => 'employee_open_id',
        'merchantId' => 'merchant_id',
        'mshopId' => 'mshop_id',
        'openModel' => 'open_model',
        'originalVoucherId' => 'original_voucher_id',
        'outBizNo' => 'out_biz_no',
        'pPayAmount' => 'p_pay_amount',
        'payeeName' => 'payee_name',
        'projectId' => 'project_id',
        'projiectId' => 'projiect_id',
        'refundAmount' => 'refund_amount',
        'refundStatus' => 'refund_status',
        'standardId' => 'standard_id',
        'storeId' => 'store_id',
        'summaryId' => 'summary_id',
        'tpSign' => 'tp_sign',
        'voucherId' => 'voucher_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'actualAccountNumber' => 'setActualAccountNumber',
        'batchId' => 'setBatchId',
        'billNo' => 'setBillNo',
        'billType' => 'setBillType',
        'categoryName' => 'setCategoryName',
        'consumeAmount' => 'setConsumeAmount',
        'consumeDate' => 'setConsumeDate',
        'consumeTitle' => 'setConsumeTitle',
        'employeeId' => 'setEmployeeId',
        'employeeOpenId' => 'setEmployeeOpenId',
        'merchantId' => 'setMerchantId',
        'mshopId' => 'setMshopId',
        'openModel' => 'setOpenModel',
        'originalVoucherId' => 'setOriginalVoucherId',
        'outBizNo' => 'setOutBizNo',
        'pPayAmount' => 'setPPayAmount',
        'payeeName' => 'setPayeeName',
        'projectId' => 'setProjectId',
        'projiectId' => 'setProjiectId',
        'refundAmount' => 'setRefundAmount',
        'refundStatus' => 'setRefundStatus',
        'standardId' => 'setStandardId',
        'storeId' => 'setStoreId',
        'summaryId' => 'setSummaryId',
        'tpSign' => 'setTpSign',
        'voucherId' => 'setVoucherId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'actualAccountNumber' => 'getActualAccountNumber',
        'batchId' => 'getBatchId',
        'billNo' => 'getBillNo',
        'billType' => 'getBillType',
        'categoryName' => 'getCategoryName',
        'consumeAmount' => 'getConsumeAmount',
        'consumeDate' => 'getConsumeDate',
        'consumeTitle' => 'getConsumeTitle',
        'employeeId' => 'getEmployeeId',
        'employeeOpenId' => 'getEmployeeOpenId',
        'merchantId' => 'getMerchantId',
        'mshopId' => 'getMshopId',
        'openModel' => 'getOpenModel',
        'originalVoucherId' => 'getOriginalVoucherId',
        'outBizNo' => 'getOutBizNo',
        'pPayAmount' => 'getPPayAmount',
        'payeeName' => 'getPayeeName',
        'projectId' => 'getProjectId',
        'projiectId' => 'getProjiectId',
        'refundAmount' => 'getRefundAmount',
        'refundStatus' => 'getRefundStatus',
        'standardId' => 'getStandardId',
        'storeId' => 'getStoreId',
        'summaryId' => 'getSummaryId',
        'tpSign' => 'getTpSign',
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['actualAccountNumber'] = $data['actualAccountNumber'] ?? null;
        $this->container['batchId'] = $data['batchId'] ?? null;
        $this->container['billNo'] = $data['billNo'] ?? null;
        $this->container['billType'] = $data['billType'] ?? null;
        $this->container['categoryName'] = $data['categoryName'] ?? null;
        $this->container['consumeAmount'] = $data['consumeAmount'] ?? null;
        $this->container['consumeDate'] = $data['consumeDate'] ?? null;
        $this->container['consumeTitle'] = $data['consumeTitle'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeOpenId'] = $data['employeeOpenId'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['mshopId'] = $data['mshopId'] ?? null;
        $this->container['openModel'] = $data['openModel'] ?? null;
        $this->container['originalVoucherId'] = $data['originalVoucherId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['pPayAmount'] = $data['pPayAmount'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
        $this->container['projectId'] = $data['projectId'] ?? null;
        $this->container['projiectId'] = $data['projiectId'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['refundStatus'] = $data['refundStatus'] ?? null;
        $this->container['standardId'] = $data['standardId'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['summaryId'] = $data['summaryId'] ?? null;
        $this->container['tpSign'] = $data['tpSign'] ?? null;
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
     * @param string|null $accountId 企业ID
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets actualAccountNumber
     *
     * @return string|null
     */
    public function getActualAccountNumber()
    {
        return $this->container['actualAccountNumber'];
    }

    /**
     * Sets actualAccountNumber
     *
     * @param string|null $actualAccountNumber 实际出资企业支付宝账号
     *
     * @return self
     */
    public function setActualAccountNumber($actualAccountNumber)
    {
        $this->container['actualAccountNumber'] = $actualAccountNumber;

        return $this;
    }

    /**
     * Gets batchId
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
     * Sets batchId
     *
     * @param string|null $batchId 汇总批次ID(废弃)
     *
     * @return self
     */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;

        return $this;
    }

    /**
     * Gets billNo
     *
     * @return string|null
     */
    public function getBillNo()
    {
        return $this->container['billNo'];
    }

    /**
     * Sets billNo
     *
     * @param string|null $billNo 支付流水号
     *
     * @return self
     */
    public function setBillNo($billNo)
    {
        $this->container['billNo'] = $billNo;

        return $this;
    }

    /**
     * Gets billType
     *
     * @return string|null
     */
    public function getBillType()
    {
        return $this->container['billType'];
    }

    /**
     * Sets billType
     *
     * @param string|null $billType 账单类型（CONSUME-消费账单、REFUND-退款、TRANSFER-转账）
     *
     * @return self
     */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName 账单行业分类（交通出行，餐饮美食，商业服务，日用百货等等）
     *
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets consumeAmount
     *
     * @return string|null
     */
    public function getConsumeAmount()
    {
        return $this->container['consumeAmount'];
    }

    /**
     * Sets consumeAmount
     *
     * @param string|null $consumeAmount 账单金额（单位：元）
     *
     * @return self
     */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;

        return $this;
    }

    /**
     * Gets consumeDate
     *
     * @return string|null
     */
    public function getConsumeDate()
    {
        return $this->container['consumeDate'];
    }

    /**
     * Sets consumeDate
     *
     * @param string|null $consumeDate 交易日期
     *
     * @return self
     */
    public function setConsumeDate($consumeDate)
    {
        $this->container['consumeDate'] = $consumeDate;

        return $this;
    }

    /**
     * Gets consumeTitle
     *
     * @return string|null
     */
    public function getConsumeTitle()
    {
        return $this->container['consumeTitle'];
    }

    /**
     * Sets consumeTitle
     *
     * @param string|null $consumeTitle 账单展示标题
     *
     * @return self
     */
    public function setConsumeTitle($consumeTitle)
    {
        $this->container['consumeTitle'] = $consumeTitle;

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
     * @param string|null $employeeId 所属员工支付宝uid
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
     * @param string|null $employeeOpenId 所属员工支付宝uid
     *
     * @return self
     */
    public function setEmployeeOpenId($employeeOpenId)
    {
        $this->container['employeeOpenId'] = $employeeOpenId;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId 商户id
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets mshopId
     *
     * @return string|null
     */
    public function getMshopId()
    {
        return $this->container['mshopId'];
    }

    /**
     * Sets mshopId
     *
     * @param string|null $mshopId 门店id
     *
     * @return self
     */
    public function setMshopId($mshopId)
    {
        $this->container['mshopId'] = $mshopId;

        return $this;
    }

    /**
     * Gets openModel
     *
     * @return string|null
     */
    public function getOpenModel()
    {
        return $this->container['openModel'];
    }

    /**
     * Sets openModel
     *
     * @param string|null $openModel 开票模式（汇总开：ENTERPRISE_AUTO_BATCH）
     *
     * @return self
     */
    public function setOpenModel($openModel)
    {
        $this->container['openModel'] = $openModel;

        return $this;
    }

    /**
     * Gets originalVoucherId
     *
     * @return string|null
     */
    public function getOriginalVoucherId()
    {
        return $this->container['originalVoucherId'];
    }

    /**
     * Sets originalVoucherId
     *
     * @param string|null $originalVoucherId 退款交易关联正交易单号(对应正交易的bill_no)
     *
     * @return self
     */
    public function setOriginalVoucherId($originalVoucherId)
    {
        $this->container['originalVoucherId'] = $originalVoucherId;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部流水号
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets pPayAmount
     *
     * @return string|null
     */
    public function getPPayAmount()
    {
        return $this->container['pPayAmount'];
    }

    /**
     * Sets pPayAmount
     *
     * @param string|null $pPayAmount 企业支付金额（单位：元）
     *
     * @return self
     */
    public function setPPayAmount($pPayAmount)
    {
        $this->container['pPayAmount'] = $pPayAmount;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName 商家名称
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param string|null $projectId 费控规则中的项目ID
     *
     * @return self
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets projiectId
     *
     * @return string|null
     */
    public function getProjiectId()
    {
        return $this->container['projiectId'];
    }

    /**
     * Sets projiectId
     *
     * @param string|null $projiectId 支付使用的项目号（成本中心）此字段废弃
     *
     * @return self
     */
    public function setProjiectId($projiectId)
    {
        $this->container['projiectId'] = $projiectId;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 消费账单的退款金额（元）
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets refundStatus
     *
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->container['refundStatus'];
    }

    /**
     * Sets refundStatus
     *
     * @param string|null $refundStatus 消费账单的退款状态
     *
     * @return self
     */
    public function setRefundStatus($refundStatus)
    {
        $this->container['refundStatus'] = $refundStatus;

        return $this;
    }

    /**
     * Gets standardId
     *
     * @return string|null
     */
    public function getStandardId()
    {
        return $this->container['standardId'];
    }

    /**
     * Sets standardId
     *
     * @param string|null $standardId 费控规则ID
     *
     * @return self
     */
    public function setStandardId($standardId)
    {
        $this->container['standardId'] = $standardId;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 外部门店id
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets summaryId
     *
     * @return string|null
     */
    public function getSummaryId()
    {
        return $this->container['summaryId'];
    }

    /**
     * Sets summaryId
     *
     * @param string|null $summaryId 批次id
     *
     * @return self
     */
    public function setSummaryId($summaryId)
    {
        $this->container['summaryId'] = $summaryId;

        return $this;
    }

    /**
     * Gets tpSign
     *
     * @return string|null
     */
    public function getTpSign()
    {
        return $this->container['tpSign'];
    }

    /**
     * Sets tpSign
     *
     * @param string|null $tpSign 出资类型： PERSONAL:个人垫付 ENTERPRISE:企业垫资 TP:三方合作伙伴垫资 ACCOUNTING:记账
     *
     * @return self
     */
    public function setTpSign($tpSign)
    {
        $this->container['tpSign'] = $tpSign;

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


