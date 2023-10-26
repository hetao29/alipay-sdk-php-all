<?php
/**
 * AlipayEbppInvoiceDetailOutputQueryResponseModel
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
 * AlipayEbppInvoiceDetailOutputQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceDetailOutputQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceDetailOutputQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'antiFakeCode' => 'string',
        'exTaxAmount' => 'string',
        'expenseStatus' => 'string',
        'hasRisk' => 'bool',
        'hasUploadPdf' => 'string',
        'invoiceAmount' => 'string',
        'invoiceCode' => 'string',
        'invoiceDate' => 'string',
        'invoiceImgUrl' => 'string',
        'invoiceItemContentList' => '\Alipay\OpenAPISDK\Model\InvoiceItemContent[]',
        'invoiceNo' => 'string',
        'invoiceStatus' => 'string',
        'invoiceType' => 'string',
        'payeeAddress' => 'string',
        'payeeBankAccount' => 'string',
        'payeeBankName' => 'string',
        'payeePhone' => 'string',
        'payeeRegisterName' => 'string',
        'payeeTaxNo' => 'string',
        'payerAddress' => 'string',
        'payerBankAccount' => 'string',
        'payerBankName' => 'string',
        'payerName' => 'string',
        'payerPhone' => 'string',
        'payerTaxNo' => 'string',
        'sumTaxAmount' => 'string',
        'taxType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'antiFakeCode' => null,
        'exTaxAmount' => null,
        'expenseStatus' => null,
        'hasRisk' => null,
        'hasUploadPdf' => null,
        'invoiceAmount' => null,
        'invoiceCode' => null,
        'invoiceDate' => null,
        'invoiceImgUrl' => null,
        'invoiceItemContentList' => null,
        'invoiceNo' => null,
        'invoiceStatus' => null,
        'invoiceType' => null,
        'payeeAddress' => null,
        'payeeBankAccount' => null,
        'payeeBankName' => null,
        'payeePhone' => null,
        'payeeRegisterName' => null,
        'payeeTaxNo' => null,
        'payerAddress' => null,
        'payerBankAccount' => null,
        'payerBankName' => null,
        'payerName' => null,
        'payerPhone' => null,
        'payerTaxNo' => null,
        'sumTaxAmount' => null,
        'taxType' => null
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
        'antiFakeCode' => 'anti_fake_code',
        'exTaxAmount' => 'ex_tax_amount',
        'expenseStatus' => 'expense_status',
        'hasRisk' => 'has_risk',
        'hasUploadPdf' => 'has_upload_pdf',
        'invoiceAmount' => 'invoice_amount',
        'invoiceCode' => 'invoice_code',
        'invoiceDate' => 'invoice_date',
        'invoiceImgUrl' => 'invoice_img_url',
        'invoiceItemContentList' => 'invoice_item_content_list',
        'invoiceNo' => 'invoice_no',
        'invoiceStatus' => 'invoice_status',
        'invoiceType' => 'invoice_type',
        'payeeAddress' => 'payee_address',
        'payeeBankAccount' => 'payee_bank_account',
        'payeeBankName' => 'payee_bank_name',
        'payeePhone' => 'payee_phone',
        'payeeRegisterName' => 'payee_register_name',
        'payeeTaxNo' => 'payee_tax_no',
        'payerAddress' => 'payer_address',
        'payerBankAccount' => 'payer_bank_account',
        'payerBankName' => 'payer_bank_name',
        'payerName' => 'payer_name',
        'payerPhone' => 'payer_phone',
        'payerTaxNo' => 'payer_tax_no',
        'sumTaxAmount' => 'sum_tax_amount',
        'taxType' => 'tax_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antiFakeCode' => 'setAntiFakeCode',
        'exTaxAmount' => 'setExTaxAmount',
        'expenseStatus' => 'setExpenseStatus',
        'hasRisk' => 'setHasRisk',
        'hasUploadPdf' => 'setHasUploadPdf',
        'invoiceAmount' => 'setInvoiceAmount',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceImgUrl' => 'setInvoiceImgUrl',
        'invoiceItemContentList' => 'setInvoiceItemContentList',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceStatus' => 'setInvoiceStatus',
        'invoiceType' => 'setInvoiceType',
        'payeeAddress' => 'setPayeeAddress',
        'payeeBankAccount' => 'setPayeeBankAccount',
        'payeeBankName' => 'setPayeeBankName',
        'payeePhone' => 'setPayeePhone',
        'payeeRegisterName' => 'setPayeeRegisterName',
        'payeeTaxNo' => 'setPayeeTaxNo',
        'payerAddress' => 'setPayerAddress',
        'payerBankAccount' => 'setPayerBankAccount',
        'payerBankName' => 'setPayerBankName',
        'payerName' => 'setPayerName',
        'payerPhone' => 'setPayerPhone',
        'payerTaxNo' => 'setPayerTaxNo',
        'sumTaxAmount' => 'setSumTaxAmount',
        'taxType' => 'setTaxType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antiFakeCode' => 'getAntiFakeCode',
        'exTaxAmount' => 'getExTaxAmount',
        'expenseStatus' => 'getExpenseStatus',
        'hasRisk' => 'getHasRisk',
        'hasUploadPdf' => 'getHasUploadPdf',
        'invoiceAmount' => 'getInvoiceAmount',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceImgUrl' => 'getInvoiceImgUrl',
        'invoiceItemContentList' => 'getInvoiceItemContentList',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceStatus' => 'getInvoiceStatus',
        'invoiceType' => 'getInvoiceType',
        'payeeAddress' => 'getPayeeAddress',
        'payeeBankAccount' => 'getPayeeBankAccount',
        'payeeBankName' => 'getPayeeBankName',
        'payeePhone' => 'getPayeePhone',
        'payeeRegisterName' => 'getPayeeRegisterName',
        'payeeTaxNo' => 'getPayeeTaxNo',
        'payerAddress' => 'getPayerAddress',
        'payerBankAccount' => 'getPayerBankAccount',
        'payerBankName' => 'getPayerBankName',
        'payerName' => 'getPayerName',
        'payerPhone' => 'getPayerPhone',
        'payerTaxNo' => 'getPayerTaxNo',
        'sumTaxAmount' => 'getSumTaxAmount',
        'taxType' => 'getTaxType'
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
        $this->container['antiFakeCode'] = $data['antiFakeCode'] ?? null;
        $this->container['exTaxAmount'] = $data['exTaxAmount'] ?? null;
        $this->container['expenseStatus'] = $data['expenseStatus'] ?? null;
        $this->container['hasRisk'] = $data['hasRisk'] ?? null;
        $this->container['hasUploadPdf'] = $data['hasUploadPdf'] ?? null;
        $this->container['invoiceAmount'] = $data['invoiceAmount'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceImgUrl'] = $data['invoiceImgUrl'] ?? null;
        $this->container['invoiceItemContentList'] = $data['invoiceItemContentList'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceStatus'] = $data['invoiceStatus'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['payeeAddress'] = $data['payeeAddress'] ?? null;
        $this->container['payeeBankAccount'] = $data['payeeBankAccount'] ?? null;
        $this->container['payeeBankName'] = $data['payeeBankName'] ?? null;
        $this->container['payeePhone'] = $data['payeePhone'] ?? null;
        $this->container['payeeRegisterName'] = $data['payeeRegisterName'] ?? null;
        $this->container['payeeTaxNo'] = $data['payeeTaxNo'] ?? null;
        $this->container['payerAddress'] = $data['payerAddress'] ?? null;
        $this->container['payerBankAccount'] = $data['payerBankAccount'] ?? null;
        $this->container['payerBankName'] = $data['payerBankName'] ?? null;
        $this->container['payerName'] = $data['payerName'] ?? null;
        $this->container['payerPhone'] = $data['payerPhone'] ?? null;
        $this->container['payerTaxNo'] = $data['payerTaxNo'] ?? null;
        $this->container['sumTaxAmount'] = $data['sumTaxAmount'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
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
     * Gets antiFakeCode
     *
     * @return string|null
     */
    public function getAntiFakeCode()
    {
        return $this->container['antiFakeCode'];
    }

    /**
     * Sets antiFakeCode
     *
     * @param string|null $antiFakeCode 防伪码，发票校验码
     *
     * @return self
     */
    public function setAntiFakeCode($antiFakeCode)
    {
        $this->container['antiFakeCode'] = $antiFakeCode;

        return $this;
    }

    /**
     * Gets exTaxAmount
     *
     * @return string|null
     */
    public function getExTaxAmount()
    {
        return $this->container['exTaxAmount'];
    }

    /**
     * Sets exTaxAmount
     *
     * @param string|null $exTaxAmount 不含税金额（废弃）
     *
     * @return self
     */
    public function setExTaxAmount($exTaxAmount)
    {
        $this->container['exTaxAmount'] = $exTaxAmount;

        return $this;
    }

    /**
     * Gets expenseStatus
     *
     * @return string|null
     */
    public function getExpenseStatus()
    {
        return $this->container['expenseStatus'];
    }

    /**
     * Sets expenseStatus
     *
     * @param string|null $expenseStatus 发票报销状态  取值范围：  WAIT_EXPENSE－未报销  EXPENSE_PROCESSING－报销中  EXPENSE_FINISHED－已报销
     *
     * @return self
     */
    public function setExpenseStatus($expenseStatus)
    {
        $this->container['expenseStatus'] = $expenseStatus;

        return $this;
    }

    /**
     * Gets hasRisk
     *
     * @return bool|null
     */
    public function getHasRisk()
    {
        return $this->container['hasRisk'];
    }

    /**
     * Sets hasRisk
     *
     * @param bool|null $hasRisk 该发票可能存在异常，请核实后使用  true:无异常  false:存在异常
     *
     * @return self
     */
    public function setHasRisk($hasRisk)
    {
        $this->container['hasRisk'] = $hasRisk;

        return $this;
    }

    /**
     * Gets hasUploadPdf
     *
     * @return string|null
     */
    public function getHasUploadPdf()
    {
        return $this->container['hasUploadPdf'];
    }

    /**
     * Sets hasUploadPdf
     *
     * @param string|null $hasUploadPdf 是否已上传发票pdf文件  false－未上传  true－已上传
     *
     * @return self
     */
    public function setHasUploadPdf($hasUploadPdf)
    {
        $this->container['hasUploadPdf'] = $hasUploadPdf;

        return $this;
    }

    /**
     * Gets invoiceAmount
     *
     * @return string|null
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoiceAmount'];
    }

    /**
     * Sets invoiceAmount
     *
     * @param string|null $invoiceAmount 发票金额（价税合计金额）
     *
     * @return self
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->container['invoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码 （全电票为空）
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

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
     * @param string|null $invoiceDate 开票日期
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceImgUrl
     *
     * @return string|null
     */
    public function getInvoiceImgUrl()
    {
        return $this->container['invoiceImgUrl'];
    }

    /**
     * Sets invoiceImgUrl
     *
     * @param string|null $invoiceImgUrl 发票缩略图地址
     *
     * @return self
     */
    public function setInvoiceImgUrl($invoiceImgUrl)
    {
        $this->container['invoiceImgUrl'] = $invoiceImgUrl;

        return $this;
    }

    /**
     * Gets invoiceItemContentList
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceItemContent[]|null
     */
    public function getInvoiceItemContentList()
    {
        return $this->container['invoiceItemContentList'];
    }

    /**
     * Sets invoiceItemContentList
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceItemContent[]|null $invoiceItemContentList 发票内容项
     *
     * @return self
     */
    public function setInvoiceItemContentList($invoiceItemContentList)
    {
        $this->container['invoiceItemContentList'] = $invoiceItemContentList;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceStatus
     *
     * @return string|null
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoiceStatus'];
    }

    /**
     * Sets invoiceStatus
     *
     * @param string|null $invoiceStatus 发票状态  SUCCEED－成功  EXPIRED－已失效  TRANSFERRED－已转交
     *
     * @return self
     */
    public function setInvoiceStatus($invoiceStatus)
    {
        $this->container['invoiceStatus'] = $invoiceStatus;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 发票类型  值有两种情况：blue－蓝票 red－红票
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets payeeAddress
     *
     * @return string|null
     */
    public function getPayeeAddress()
    {
        return $this->container['payeeAddress'];
    }

    /**
     * Sets payeeAddress
     *
     * @param string|null $payeeAddress 销售方地址
     *
     * @return self
     */
    public function setPayeeAddress($payeeAddress)
    {
        $this->container['payeeAddress'] = $payeeAddress;

        return $this;
    }

    /**
     * Gets payeeBankAccount
     *
     * @return string|null
     */
    public function getPayeeBankAccount()
    {
        return $this->container['payeeBankAccount'];
    }

    /**
     * Sets payeeBankAccount
     *
     * @param string|null $payeeBankAccount 销售方开户银行账号
     *
     * @return self
     */
    public function setPayeeBankAccount($payeeBankAccount)
    {
        $this->container['payeeBankAccount'] = $payeeBankAccount;

        return $this;
    }

    /**
     * Gets payeeBankName
     *
     * @return string|null
     */
    public function getPayeeBankName()
    {
        return $this->container['payeeBankName'];
    }

    /**
     * Sets payeeBankName
     *
     * @param string|null $payeeBankName 销售方开户银行名称
     *
     * @return self
     */
    public function setPayeeBankName($payeeBankName)
    {
        $this->container['payeeBankName'] = $payeeBankName;

        return $this;
    }

    /**
     * Gets payeePhone
     *
     * @return string|null
     */
    public function getPayeePhone()
    {
        return $this->container['payeePhone'];
    }

    /**
     * Sets payeePhone
     *
     * @param string|null $payeePhone 销售方电话
     *
     * @return self
     */
    public function setPayeePhone($payeePhone)
    {
        $this->container['payeePhone'] = $payeePhone;

        return $this;
    }

    /**
     * Gets payeeRegisterName
     *
     * @return string|null
     */
    public function getPayeeRegisterName()
    {
        return $this->container['payeeRegisterName'];
    }

    /**
     * Sets payeeRegisterName
     *
     * @param string|null $payeeRegisterName 销售方名称
     *
     * @return self
     */
    public function setPayeeRegisterName($payeeRegisterName)
    {
        $this->container['payeeRegisterName'] = $payeeRegisterName;

        return $this;
    }

    /**
     * Gets payeeTaxNo
     *
     * @return string|null
     */
    public function getPayeeTaxNo()
    {
        return $this->container['payeeTaxNo'];
    }

    /**
     * Sets payeeTaxNo
     *
     * @param string|null $payeeTaxNo 销售方税号
     *
     * @return self
     */
    public function setPayeeTaxNo($payeeTaxNo)
    {
        $this->container['payeeTaxNo'] = $payeeTaxNo;

        return $this;
    }

    /**
     * Gets payerAddress
     *
     * @return string|null
     */
    public function getPayerAddress()
    {
        return $this->container['payerAddress'];
    }

    /**
     * Sets payerAddress
     *
     * @param string|null $payerAddress 购买方地址
     *
     * @return self
     */
    public function setPayerAddress($payerAddress)
    {
        $this->container['payerAddress'] = $payerAddress;

        return $this;
    }

    /**
     * Gets payerBankAccount
     *
     * @return string|null
     */
    public function getPayerBankAccount()
    {
        return $this->container['payerBankAccount'];
    }

    /**
     * Sets payerBankAccount
     *
     * @param string|null $payerBankAccount 购买方开户银行账号
     *
     * @return self
     */
    public function setPayerBankAccount($payerBankAccount)
    {
        $this->container['payerBankAccount'] = $payerBankAccount;

        return $this;
    }

    /**
     * Gets payerBankName
     *
     * @return string|null
     */
    public function getPayerBankName()
    {
        return $this->container['payerBankName'];
    }

    /**
     * Sets payerBankName
     *
     * @param string|null $payerBankName 购买方开户银行名称
     *
     * @return self
     */
    public function setPayerBankName($payerBankName)
    {
        $this->container['payerBankName'] = $payerBankName;

        return $this;
    }

    /**
     * Gets payerName
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payerName'];
    }

    /**
     * Sets payerName
     *
     * @param string|null $payerName 购买方名称
     *
     * @return self
     */
    public function setPayerName($payerName)
    {
        $this->container['payerName'] = $payerName;

        return $this;
    }

    /**
     * Gets payerPhone
     *
     * @return string|null
     */
    public function getPayerPhone()
    {
        return $this->container['payerPhone'];
    }

    /**
     * Sets payerPhone
     *
     * @param string|null $payerPhone 购买方电话
     *
     * @return self
     */
    public function setPayerPhone($payerPhone)
    {
        $this->container['payerPhone'] = $payerPhone;

        return $this;
    }

    /**
     * Gets payerTaxNo
     *
     * @return string|null
     */
    public function getPayerTaxNo()
    {
        return $this->container['payerTaxNo'];
    }

    /**
     * Sets payerTaxNo
     *
     * @param string|null $payerTaxNo 购买方税号
     *
     * @return self
     */
    public function setPayerTaxNo($payerTaxNo)
    {
        $this->container['payerTaxNo'] = $payerTaxNo;

        return $this;
    }

    /**
     * Gets sumTaxAmount
     *
     * @return string|null
     */
    public function getSumTaxAmount()
    {
        return $this->container['sumTaxAmount'];
    }

    /**
     * Sets sumTaxAmount
     *
     * @param string|null $sumTaxAmount 合计税额（废弃）
     *
     * @return self
     */
    public function setSumTaxAmount($sumTaxAmount)
    {
        $this->container['sumTaxAmount'] = $sumTaxAmount;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param string|null $taxType 票种 PLAIN：增值税电子普通发票 SPECIAL：增值税专用发票 ALL_ELECTRONIC_GENERAL：电子发票（普通发票） ALL_ELECTRONIC_SPECIAL：电子发票（增值税专用发票） PLAIN_INVOICE:增值税普通发票 PAPER_INVOICE:增值税普通发票（卷式） SALSE_INVOICE:机动车销售统一发票
     *
     * @return self
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

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


