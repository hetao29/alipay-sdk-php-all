<?php
/**
 * AlipayBossFncInvoiceBatchqueryModel
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
 * AlipayBossFncInvoiceBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayBossFncInvoiceBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayBossFncInvoiceBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyOrderId' => 'string',
        'buyerInvoiceTitle' => 'string',
        'buyerIpid' => 'string',
        'buyerIpids' => 'string[]',
        'buyerIproleId' => 'string',
        'buyerIproleIds' => 'string[]',
        'instId' => 'string',
        'invoiceChannel' => 'string',
        'invoiceCode' => 'string',
        'invoiceCreateDateBegin' => 'string',
        'invoiceCreateDateEnd' => 'string',
        'invoiceIds' => 'string[]',
        'invoiceMaterial' => 'string',
        'invoiceNo' => 'string',
        'invoiceOpenDateBegin' => 'string',
        'invoiceOpenDateEnd' => 'string',
        'invoiceStatus' => 'string[]',
        'invoiceTypes' => 'string[]',
        'isOnline' => 'string',
        'isRed' => 'string',
        'mailStatus' => 'string[]',
        'monthlyBillNo' => 'string',
        'pageNo' => 'int',
        'pageSize' => 'int',
        'trackingNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyOrderId' => null,
        'buyerInvoiceTitle' => null,
        'buyerIpid' => null,
        'buyerIpids' => null,
        'buyerIproleId' => null,
        'buyerIproleIds' => null,
        'instId' => null,
        'invoiceChannel' => null,
        'invoiceCode' => null,
        'invoiceCreateDateBegin' => null,
        'invoiceCreateDateEnd' => null,
        'invoiceIds' => null,
        'invoiceMaterial' => null,
        'invoiceNo' => null,
        'invoiceOpenDateBegin' => null,
        'invoiceOpenDateEnd' => null,
        'invoiceStatus' => null,
        'invoiceTypes' => null,
        'isOnline' => null,
        'isRed' => null,
        'mailStatus' => null,
        'monthlyBillNo' => null,
        'pageNo' => null,
        'pageSize' => null,
        'trackingNo' => null
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
        'applyOrderId' => 'apply_order_id',
        'buyerInvoiceTitle' => 'buyer_invoice_title',
        'buyerIpid' => 'buyer_ipid',
        'buyerIpids' => 'buyer_ipids',
        'buyerIproleId' => 'buyer_iprole_id',
        'buyerIproleIds' => 'buyer_iprole_ids',
        'instId' => 'inst_id',
        'invoiceChannel' => 'invoice_channel',
        'invoiceCode' => 'invoice_code',
        'invoiceCreateDateBegin' => 'invoice_create_date_begin',
        'invoiceCreateDateEnd' => 'invoice_create_date_end',
        'invoiceIds' => 'invoice_ids',
        'invoiceMaterial' => 'invoice_material',
        'invoiceNo' => 'invoice_no',
        'invoiceOpenDateBegin' => 'invoice_open_date_begin',
        'invoiceOpenDateEnd' => 'invoice_open_date_end',
        'invoiceStatus' => 'invoice_status',
        'invoiceTypes' => 'invoice_types',
        'isOnline' => 'is_online',
        'isRed' => 'is_red',
        'mailStatus' => 'mail_status',
        'monthlyBillNo' => 'monthly_bill_no',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'trackingNo' => 'tracking_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyOrderId' => 'setApplyOrderId',
        'buyerInvoiceTitle' => 'setBuyerInvoiceTitle',
        'buyerIpid' => 'setBuyerIpid',
        'buyerIpids' => 'setBuyerIpids',
        'buyerIproleId' => 'setBuyerIproleId',
        'buyerIproleIds' => 'setBuyerIproleIds',
        'instId' => 'setInstId',
        'invoiceChannel' => 'setInvoiceChannel',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceCreateDateBegin' => 'setInvoiceCreateDateBegin',
        'invoiceCreateDateEnd' => 'setInvoiceCreateDateEnd',
        'invoiceIds' => 'setInvoiceIds',
        'invoiceMaterial' => 'setInvoiceMaterial',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceOpenDateBegin' => 'setInvoiceOpenDateBegin',
        'invoiceOpenDateEnd' => 'setInvoiceOpenDateEnd',
        'invoiceStatus' => 'setInvoiceStatus',
        'invoiceTypes' => 'setInvoiceTypes',
        'isOnline' => 'setIsOnline',
        'isRed' => 'setIsRed',
        'mailStatus' => 'setMailStatus',
        'monthlyBillNo' => 'setMonthlyBillNo',
        'pageNo' => 'setPageNo',
        'pageSize' => 'setPageSize',
        'trackingNo' => 'setTrackingNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyOrderId' => 'getApplyOrderId',
        'buyerInvoiceTitle' => 'getBuyerInvoiceTitle',
        'buyerIpid' => 'getBuyerIpid',
        'buyerIpids' => 'getBuyerIpids',
        'buyerIproleId' => 'getBuyerIproleId',
        'buyerIproleIds' => 'getBuyerIproleIds',
        'instId' => 'getInstId',
        'invoiceChannel' => 'getInvoiceChannel',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceCreateDateBegin' => 'getInvoiceCreateDateBegin',
        'invoiceCreateDateEnd' => 'getInvoiceCreateDateEnd',
        'invoiceIds' => 'getInvoiceIds',
        'invoiceMaterial' => 'getInvoiceMaterial',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceOpenDateBegin' => 'getInvoiceOpenDateBegin',
        'invoiceOpenDateEnd' => 'getInvoiceOpenDateEnd',
        'invoiceStatus' => 'getInvoiceStatus',
        'invoiceTypes' => 'getInvoiceTypes',
        'isOnline' => 'getIsOnline',
        'isRed' => 'getIsRed',
        'mailStatus' => 'getMailStatus',
        'monthlyBillNo' => 'getMonthlyBillNo',
        'pageNo' => 'getPageNo',
        'pageSize' => 'getPageSize',
        'trackingNo' => 'getTrackingNo'
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
        $this->container['applyOrderId'] = $data['applyOrderId'] ?? null;
        $this->container['buyerInvoiceTitle'] = $data['buyerInvoiceTitle'] ?? null;
        $this->container['buyerIpid'] = $data['buyerIpid'] ?? null;
        $this->container['buyerIpids'] = $data['buyerIpids'] ?? null;
        $this->container['buyerIproleId'] = $data['buyerIproleId'] ?? null;
        $this->container['buyerIproleIds'] = $data['buyerIproleIds'] ?? null;
        $this->container['instId'] = $data['instId'] ?? null;
        $this->container['invoiceChannel'] = $data['invoiceChannel'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceCreateDateBegin'] = $data['invoiceCreateDateBegin'] ?? null;
        $this->container['invoiceCreateDateEnd'] = $data['invoiceCreateDateEnd'] ?? null;
        $this->container['invoiceIds'] = $data['invoiceIds'] ?? null;
        $this->container['invoiceMaterial'] = $data['invoiceMaterial'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceOpenDateBegin'] = $data['invoiceOpenDateBegin'] ?? null;
        $this->container['invoiceOpenDateEnd'] = $data['invoiceOpenDateEnd'] ?? null;
        $this->container['invoiceStatus'] = $data['invoiceStatus'] ?? null;
        $this->container['invoiceTypes'] = $data['invoiceTypes'] ?? null;
        $this->container['isOnline'] = $data['isOnline'] ?? null;
        $this->container['isRed'] = $data['isRed'] ?? null;
        $this->container['mailStatus'] = $data['mailStatus'] ?? null;
        $this->container['monthlyBillNo'] = $data['monthlyBillNo'] ?? null;
        $this->container['pageNo'] = $data['pageNo'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['trackingNo'] = $data['trackingNo'] ?? null;
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
     * Gets applyOrderId
     *
     * @return string|null
     */
    public function getApplyOrderId()
    {
        return $this->container['applyOrderId'];
    }

    /**
     * Sets applyOrderId
     *
     * @param string|null $applyOrderId 开票申请ID，唯一标识开票申请表的ID
     *
     * @return self
     */
    public function setApplyOrderId($applyOrderId)
    {
        $this->container['applyOrderId'] = $applyOrderId;

        return $this;
    }

    /**
     * Gets buyerInvoiceTitle
     *
     * @return string|null
     */
    public function getBuyerInvoiceTitle()
    {
        return $this->container['buyerInvoiceTitle'];
    }

    /**
     * Sets buyerInvoiceTitle
     *
     * @param string|null $buyerInvoiceTitle 买方发票抬头，用于打印在发票上
     *
     * @return self
     */
    public function setBuyerInvoiceTitle($buyerInvoiceTitle)
    {
        $this->container['buyerInvoiceTitle'] = $buyerInvoiceTitle;

        return $this;
    }

    /**
     * Gets buyerIpid
     *
     * @return string|null
     */
    public function getBuyerIpid()
    {
        return $this->container['buyerIpid'];
    }

    /**
     * Sets buyerIpid
     *
     * @param string|null $buyerIpid 对应发票商户的ipId，在主站标示mid，在其他环境标示ip_id。
     *
     * @return self
     */
    public function setBuyerIpid($buyerIpid)
    {
        $this->container['buyerIpid'] = $buyerIpid;

        return $this;
    }

    /**
     * Gets buyerIpids
     *
     * @return string[]|null
     */
    public function getBuyerIpids()
    {
        return $this->container['buyerIpids'];
    }

    /**
     * Sets buyerIpids
     *
     * @param string[]|null $buyerIpids 购方商户ID集合
     *
     * @return self
     */
    public function setBuyerIpids($buyerIpids)
    {
        $this->container['buyerIpids'] = $buyerIpids;

        return $this;
    }

    /**
     * Gets buyerIproleId
     *
     * @return string|null
     */
    public function getBuyerIproleId()
    {
        return $this->container['buyerIproleId'];
    }

    /**
     * Sets buyerIproleId
     *
     * @param string|null $buyerIproleId 商户结算的ipRoleId，表示商户的结算对象，在主站表示pid。
     *
     * @return self
     */
    public function setBuyerIproleId($buyerIproleId)
    {
        $this->container['buyerIproleId'] = $buyerIproleId;

        return $this;
    }

    /**
     * Gets buyerIproleIds
     *
     * @return string[]|null
     */
    public function getBuyerIproleIds()
    {
        return $this->container['buyerIproleIds'];
    }

    /**
     * Sets buyerIproleIds
     *
     * @param string[]|null $buyerIproleIds 购方PID集合
     *
     * @return self
     */
    public function setBuyerIproleIds($buyerIproleIds)
    {
        $this->container['buyerIproleIds'] = $buyerIproleIds;

        return $this;
    }

    /**
     * Gets instId
     *
     * @return string|null
     */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
     * Sets instId
     *
     * @param string|null $instId 对应发票所在OU的id，用于标示该发票所述的OU。
     *
     * @return self
     */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;

        return $this;
    }

    /**
     * Gets invoiceChannel
     *
     * @return string|null
     */
    public function getInvoiceChannel()
    {
        return $this->container['invoiceChannel'];
    }

    /**
     * Sets invoiceChannel
     *
     * @param string|null $invoiceChannel 开票渠道 01 线上;02 线下
     *
     * @return self
     */
    public function setInvoiceChannel($invoiceChannel)
    {
        $this->container['invoiceChannel'] = $invoiceChannel;

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
     * @param string|null $invoiceCode 发票代码，税务部门给予发票的编码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceCreateDateBegin
     *
     * @return string|null
     */
    public function getInvoiceCreateDateBegin()
    {
        return $this->container['invoiceCreateDateBegin'];
    }

    /**
     * Sets invoiceCreateDateBegin
     *
     * @param string|null $invoiceCreateDateBegin 发票创建日期【起始日期，格式yyyyMMdd】
     *
     * @return self
     */
    public function setInvoiceCreateDateBegin($invoiceCreateDateBegin)
    {
        $this->container['invoiceCreateDateBegin'] = $invoiceCreateDateBegin;

        return $this;
    }

    /**
     * Gets invoiceCreateDateEnd
     *
     * @return string|null
     */
    public function getInvoiceCreateDateEnd()
    {
        return $this->container['invoiceCreateDateEnd'];
    }

    /**
     * Sets invoiceCreateDateEnd
     *
     * @param string|null $invoiceCreateDateEnd 发票创建日期【结束日期，格式yyyyMMdd】
     *
     * @return self
     */
    public function setInvoiceCreateDateEnd($invoiceCreateDateEnd)
    {
        $this->container['invoiceCreateDateEnd'] = $invoiceCreateDateEnd;

        return $this;
    }

    /**
     * Gets invoiceIds
     *
     * @return string[]|null
     */
    public function getInvoiceIds()
    {
        return $this->container['invoiceIds'];
    }

    /**
     * Sets invoiceIds
     *
     * @param string[]|null $invoiceIds 发票ID集合，发票ID，唯一标示一张发票的ID
     *
     * @return self
     */
    public function setInvoiceIds($invoiceIds)
    {
        $this->container['invoiceIds'] = $invoiceIds;

        return $this;
    }

    /**
     * Gets invoiceMaterial
     *
     * @return string|null
     */
    public function getInvoiceMaterial()
    {
        return $this->container['invoiceMaterial'];
    }

    /**
     * Sets invoiceMaterial
     *
     * @param string|null $invoiceMaterial 开票介质 01电子 02纸质
     *
     * @return self
     */
    public function setInvoiceMaterial($invoiceMaterial)
    {
        $this->container['invoiceMaterial'] = $invoiceMaterial;

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
     * @param string|null $invoiceNo 发票号码，税务部门给予发票的编码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceOpenDateBegin
     *
     * @return string|null
     */
    public function getInvoiceOpenDateBegin()
    {
        return $this->container['invoiceOpenDateBegin'];
    }

    /**
     * Sets invoiceOpenDateBegin
     *
     * @param string|null $invoiceOpenDateBegin 发票开票日期【起始日期，格式yyyyMMdd】
     *
     * @return self
     */
    public function setInvoiceOpenDateBegin($invoiceOpenDateBegin)
    {
        $this->container['invoiceOpenDateBegin'] = $invoiceOpenDateBegin;

        return $this;
    }

    /**
     * Gets invoiceOpenDateEnd
     *
     * @return string|null
     */
    public function getInvoiceOpenDateEnd()
    {
        return $this->container['invoiceOpenDateEnd'];
    }

    /**
     * Sets invoiceOpenDateEnd
     *
     * @param string|null $invoiceOpenDateEnd 发票开票日期【结束日期，格式yyyyMMdd】
     *
     * @return self
     */
    public function setInvoiceOpenDateEnd($invoiceOpenDateEnd)
    {
        $this->container['invoiceOpenDateEnd'] = $invoiceOpenDateEnd;

        return $this;
    }

    /**
     * Gets invoiceStatus
     *
     * @return string[]|null
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoiceStatus'];
    }

    /**
     * Sets invoiceStatus
     *
     * @param string[]|null $invoiceStatus 发票状态：用于标示发票当前的状态，状态类型以及相关含义：01 待开票;02 开票中;03 已开票;04 作废中;05 已作废;06 红冲中;07 已红冲;08 部分红冲;09 无效
     *
     * @return self
     */
    public function setInvoiceStatus($invoiceStatus)
    {
        $this->container['invoiceStatus'] = $invoiceStatus;

        return $this;
    }

    /**
     * Gets invoiceTypes
     *
     * @return string[]|null
     */
    public function getInvoiceTypes()
    {
        return $this->container['invoiceTypes'];
    }

    /**
     * Sets invoiceTypes
     *
     * @param string[]|null $invoiceTypes 发票类型,01专票 02普票 03营业税发票 04国际形式发票 05其它发票
     *
     * @return self
     */
    public function setInvoiceTypes($invoiceTypes)
    {
        $this->container['invoiceTypes'] = $invoiceTypes;

        return $this;
    }

    /**
     * Gets isOnline
     *
     * @return string|null
     */
    public function getIsOnline()
    {
        return $this->container['isOnline'];
    }

    /**
     * Sets isOnline
     *
     * @param string|null $isOnline 是否能在线开票 Y能 N不能
     *
     * @return self
     */
    public function setIsOnline($isOnline)
    {
        $this->container['isOnline'] = $isOnline;

        return $this;
    }

    /**
     * Gets isRed
     *
     * @return string|null
     */
    public function getIsRed()
    {
        return $this->container['isRed'];
    }

    /**
     * Sets isRed
     *
     * @param string|null $isRed 是否红字 Y红字 N蓝字
     *
     * @return self
     */
    public function setIsRed($isRed)
    {
        $this->container['isRed'] = $isRed;

        return $this;
    }

    /**
     * Gets mailStatus
     *
     * @return string[]|null
     */
    public function getMailStatus()
    {
        return $this->container['mailStatus'];
    }

    /**
     * Sets mailStatus
     *
     * @param string[]|null $mailStatus 邮寄状态 01 待邮寄;02 已邮寄;03 退回中;04 已退回
     *
     * @return self
     */
    public function setMailStatus($mailStatus)
    {
        $this->container['mailStatus'] = $mailStatus;

        return $this;
    }

    /**
     * Gets monthlyBillNo
     *
     * @return string|null
     */
    public function getMonthlyBillNo()
    {
        return $this->container['monthlyBillNo'];
    }

    /**
     * Sets monthlyBillNo
     *
     * @param string|null $monthlyBillNo 月账单号
     *
     * @return self
     */
    public function setMonthlyBillNo($monthlyBillNo)
    {
        $this->container['monthlyBillNo'] = $monthlyBillNo;

        return $this;
    }

    /**
     * Gets pageNo
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
     * Sets pageNo
     *
     * @param int|null $pageNo 起始页，分页时必须提供
     *
     * @return self
     */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 每页显示数，分页时必须提供
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets trackingNo
     *
     * @return string|null
     */
    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    /**
     * Sets trackingNo
     *
     * @param string|null $trackingNo 快递单号
     *
     * @return self
     */
    public function setTrackingNo($trackingNo)
    {
        $this->container['trackingNo'] = $trackingNo;

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


