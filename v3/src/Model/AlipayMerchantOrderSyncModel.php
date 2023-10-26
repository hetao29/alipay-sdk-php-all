<?php
/**
 * AlipayMerchantOrderSyncModel
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
 * AlipayMerchantOrderSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantOrderSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMerchantOrderSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'buyerId' => 'string',
        'buyerInfo' => '\Alipay\OpenAPISDK\Model\UserInfomation',
        'buyerOpenId' => 'string',
        'categoryId' => 'string',
        'discountAmount' => 'string',
        'discountInfoList' => '\Alipay\OpenAPISDK\Model\DiscountInfoData[]',
        'extInfo' => '\Alipay\OpenAPISDK\Model\OrderExtInfo[]',
        'itemOrderList' => '\Alipay\OpenAPISDK\Model\ItemOrderInfo[]',
        'journeyOrderList' => '\Alipay\OpenAPISDK\Model\OrderJourneyInfo[]',
        'logisticsInfoList' => '\Alipay\OpenAPISDK\Model\OrderLogisticsInformationRequest[]',
        'orderAuthCode' => 'string',
        'orderCreateTime' => 'string',
        'orderModifiedTime' => 'string',
        'orderPayTime' => 'string',
        'orderType' => 'string',
        'outBizNo' => 'string',
        'partnerId' => 'string',
        'payAmount' => 'string',
        'payTimeoutExpress' => 'string',
        'recordId' => 'string',
        'sellerId' => 'string',
        'sendMsg' => 'string',
        'serviceCode' => 'string',
        'shopInfo' => '\Alipay\OpenAPISDK\Model\OrderShopInfo',
        'sourceApp' => 'string',
        'syncContent' => 'string',
        'ticketInfo' => '\Alipay\OpenAPISDK\Model\TicketInfo',
        'ticketOrderList' => '\Alipay\OpenAPISDK\Model\TicketOrderInfo[]',
        'tradeNo' => 'string',
        'tradeType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'buyerId' => null,
        'buyerInfo' => null,
        'buyerOpenId' => null,
        'categoryId' => null,
        'discountAmount' => null,
        'discountInfoList' => null,
        'extInfo' => null,
        'itemOrderList' => null,
        'journeyOrderList' => null,
        'logisticsInfoList' => null,
        'orderAuthCode' => null,
        'orderCreateTime' => null,
        'orderModifiedTime' => null,
        'orderPayTime' => null,
        'orderType' => null,
        'outBizNo' => null,
        'partnerId' => null,
        'payAmount' => null,
        'payTimeoutExpress' => null,
        'recordId' => null,
        'sellerId' => null,
        'sendMsg' => null,
        'serviceCode' => null,
        'shopInfo' => null,
        'sourceApp' => null,
        'syncContent' => null,
        'ticketInfo' => null,
        'ticketOrderList' => null,
        'tradeNo' => null,
        'tradeType' => null
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
        'amount' => 'amount',
        'buyerId' => 'buyer_id',
        'buyerInfo' => 'buyer_info',
        'buyerOpenId' => 'buyer_open_id',
        'categoryId' => 'category_id',
        'discountAmount' => 'discount_amount',
        'discountInfoList' => 'discount_info_list',
        'extInfo' => 'ext_info',
        'itemOrderList' => 'item_order_list',
        'journeyOrderList' => 'journey_order_list',
        'logisticsInfoList' => 'logistics_info_list',
        'orderAuthCode' => 'order_auth_code',
        'orderCreateTime' => 'order_create_time',
        'orderModifiedTime' => 'order_modified_time',
        'orderPayTime' => 'order_pay_time',
        'orderType' => 'order_type',
        'outBizNo' => 'out_biz_no',
        'partnerId' => 'partner_id',
        'payAmount' => 'pay_amount',
        'payTimeoutExpress' => 'pay_timeout_express',
        'recordId' => 'record_id',
        'sellerId' => 'seller_id',
        'sendMsg' => 'send_msg',
        'serviceCode' => 'service_code',
        'shopInfo' => 'shop_info',
        'sourceApp' => 'source_app',
        'syncContent' => 'sync_content',
        'ticketInfo' => 'ticket_info',
        'ticketOrderList' => 'ticket_order_list',
        'tradeNo' => 'trade_no',
        'tradeType' => 'trade_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'buyerId' => 'setBuyerId',
        'buyerInfo' => 'setBuyerInfo',
        'buyerOpenId' => 'setBuyerOpenId',
        'categoryId' => 'setCategoryId',
        'discountAmount' => 'setDiscountAmount',
        'discountInfoList' => 'setDiscountInfoList',
        'extInfo' => 'setExtInfo',
        'itemOrderList' => 'setItemOrderList',
        'journeyOrderList' => 'setJourneyOrderList',
        'logisticsInfoList' => 'setLogisticsInfoList',
        'orderAuthCode' => 'setOrderAuthCode',
        'orderCreateTime' => 'setOrderCreateTime',
        'orderModifiedTime' => 'setOrderModifiedTime',
        'orderPayTime' => 'setOrderPayTime',
        'orderType' => 'setOrderType',
        'outBizNo' => 'setOutBizNo',
        'partnerId' => 'setPartnerId',
        'payAmount' => 'setPayAmount',
        'payTimeoutExpress' => 'setPayTimeoutExpress',
        'recordId' => 'setRecordId',
        'sellerId' => 'setSellerId',
        'sendMsg' => 'setSendMsg',
        'serviceCode' => 'setServiceCode',
        'shopInfo' => 'setShopInfo',
        'sourceApp' => 'setSourceApp',
        'syncContent' => 'setSyncContent',
        'ticketInfo' => 'setTicketInfo',
        'ticketOrderList' => 'setTicketOrderList',
        'tradeNo' => 'setTradeNo',
        'tradeType' => 'setTradeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'buyerId' => 'getBuyerId',
        'buyerInfo' => 'getBuyerInfo',
        'buyerOpenId' => 'getBuyerOpenId',
        'categoryId' => 'getCategoryId',
        'discountAmount' => 'getDiscountAmount',
        'discountInfoList' => 'getDiscountInfoList',
        'extInfo' => 'getExtInfo',
        'itemOrderList' => 'getItemOrderList',
        'journeyOrderList' => 'getJourneyOrderList',
        'logisticsInfoList' => 'getLogisticsInfoList',
        'orderAuthCode' => 'getOrderAuthCode',
        'orderCreateTime' => 'getOrderCreateTime',
        'orderModifiedTime' => 'getOrderModifiedTime',
        'orderPayTime' => 'getOrderPayTime',
        'orderType' => 'getOrderType',
        'outBizNo' => 'getOutBizNo',
        'partnerId' => 'getPartnerId',
        'payAmount' => 'getPayAmount',
        'payTimeoutExpress' => 'getPayTimeoutExpress',
        'recordId' => 'getRecordId',
        'sellerId' => 'getSellerId',
        'sendMsg' => 'getSendMsg',
        'serviceCode' => 'getServiceCode',
        'shopInfo' => 'getShopInfo',
        'sourceApp' => 'getSourceApp',
        'syncContent' => 'getSyncContent',
        'ticketInfo' => 'getTicketInfo',
        'ticketOrderList' => 'getTicketOrderList',
        'tradeNo' => 'getTradeNo',
        'tradeType' => 'getTradeType'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['buyerId'] = $data['buyerId'] ?? null;
        $this->container['buyerInfo'] = $data['buyerInfo'] ?? null;
        $this->container['buyerOpenId'] = $data['buyerOpenId'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['discountAmount'] = $data['discountAmount'] ?? null;
        $this->container['discountInfoList'] = $data['discountInfoList'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['itemOrderList'] = $data['itemOrderList'] ?? null;
        $this->container['journeyOrderList'] = $data['journeyOrderList'] ?? null;
        $this->container['logisticsInfoList'] = $data['logisticsInfoList'] ?? null;
        $this->container['orderAuthCode'] = $data['orderAuthCode'] ?? null;
        $this->container['orderCreateTime'] = $data['orderCreateTime'] ?? null;
        $this->container['orderModifiedTime'] = $data['orderModifiedTime'] ?? null;
        $this->container['orderPayTime'] = $data['orderPayTime'] ?? null;
        $this->container['orderType'] = $data['orderType'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['payTimeoutExpress'] = $data['payTimeoutExpress'] ?? null;
        $this->container['recordId'] = $data['recordId'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['sendMsg'] = $data['sendMsg'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
        $this->container['shopInfo'] = $data['shopInfo'] ?? null;
        $this->container['sourceApp'] = $data['sourceApp'] ?? null;
        $this->container['syncContent'] = $data['syncContent'] ?? null;
        $this->container['ticketInfo'] = $data['ticketInfo'] ?? null;
        $this->container['ticketOrderList'] = $data['ticketOrderList'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['tradeType'] = $data['tradeType'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 订单金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets buyerId
     *
     * @return string|null
     */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
     * Sets buyerId
     *
     * @param string|null $buyerId 买家userId
     *
     * @return self
     */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;

        return $this;
    }

    /**
     * Gets buyerInfo
     *
     * @return \Alipay\OpenAPISDK\Model\UserInfomation|null
     */
    public function getBuyerInfo()
    {
        return $this->container['buyerInfo'];
    }

    /**
     * Sets buyerInfo
     *
     * @param \Alipay\OpenAPISDK\Model\UserInfomation|null $buyerInfo buyerInfo
     *
     * @return self
     */
    public function setBuyerInfo($buyerInfo)
    {
        $this->container['buyerInfo'] = $buyerInfo;

        return $this;
    }

    /**
     * Gets buyerOpenId
     *
     * @return string|null
     */
    public function getBuyerOpenId()
    {
        return $this->container['buyerOpenId'];
    }

    /**
     * Sets buyerOpenId
     *
     * @param string|null $buyerOpenId 用户open_id
     *
     * @return self
     */
    public function setBuyerOpenId($buyerOpenId)
    {
        $this->container['buyerOpenId'] = $buyerOpenId;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId 标准服务类目
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param string|null $discountAmount 优惠金额
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\DiscountInfoData[]|null
     */
    public function getDiscountInfoList()
    {
        return $this->container['discountInfoList'];
    }

    /**
     * Sets discountInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\DiscountInfoData[]|null $discountInfoList 订单优惠信息
     *
     * @return self
     */
    public function setDiscountInfoList($discountInfoList)
    {
        $this->container['discountInfoList'] = $discountInfoList;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null $extInfo 扩展信息，请参见 <a href=\"https://opendocs.alipay.com/mini/introduce/ordercenter\">小程序订单中心</a>
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets itemOrderList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemOrderInfo[]|null
     */
    public function getItemOrderList()
    {
        return $this->container['itemOrderList'];
    }

    /**
     * Sets itemOrderList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemOrderInfo[]|null $itemOrderList 商品信息列表
     *
     * @return self
     */
    public function setItemOrderList($itemOrderList)
    {
        $this->container['itemOrderList'] = $itemOrderList;

        return $this;
    }

    /**
     * Gets journeyOrderList
     *
     * @return \Alipay\OpenAPISDK\Model\OrderJourneyInfo[]|null
     */
    public function getJourneyOrderList()
    {
        return $this->container['journeyOrderList'];
    }

    /**
     * Sets journeyOrderList
     *
     * @param \Alipay\OpenAPISDK\Model\OrderJourneyInfo[]|null $journeyOrderList 行程信息
     *
     * @return self
     */
    public function setJourneyOrderList($journeyOrderList)
    {
        $this->container['journeyOrderList'] = $journeyOrderList;

        return $this;
    }

    /**
     * Gets logisticsInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\OrderLogisticsInformationRequest[]|null
     */
    public function getLogisticsInfoList()
    {
        return $this->container['logisticsInfoList'];
    }

    /**
     * Sets logisticsInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\OrderLogisticsInformationRequest[]|null $logisticsInfoList \"物流信息 列表最多支持物流信息个数，请参考产品文档 注：若该值不为空，且物流信息同步至我的快递，则在查询订单时可返回具体物流信息\"
     *
     * @return self
     */
    public function setLogisticsInfoList($logisticsInfoList)
    {
        $this->container['logisticsInfoList'] = $logisticsInfoList;

        return $this;
    }

    /**
     * Gets orderAuthCode
     *
     * @return string|null
     */
    public function getOrderAuthCode()
    {
        return $this->container['orderAuthCode'];
    }

    /**
     * Sets orderAuthCode
     *
     * @param string|null $orderAuthCode 本字段已废弃，无需填写！
     *
     * @return self
     */
    public function setOrderAuthCode($orderAuthCode)
    {
        $this->container['orderAuthCode'] = $orderAuthCode;

        return $this;
    }

    /**
     * Gets orderCreateTime
     *
     * @return string|null
     */
    public function getOrderCreateTime()
    {
        return $this->container['orderCreateTime'];
    }

    /**
     * Sets orderCreateTime
     *
     * @param string|null $orderCreateTime 订单创建时间
     *
     * @return self
     */
    public function setOrderCreateTime($orderCreateTime)
    {
        $this->container['orderCreateTime'] = $orderCreateTime;

        return $this;
    }

    /**
     * Gets orderModifiedTime
     *
     * @return string|null
     */
    public function getOrderModifiedTime()
    {
        return $this->container['orderModifiedTime'];
    }

    /**
     * Sets orderModifiedTime
     *
     * @param string|null $orderModifiedTime 订单修改时间
     *
     * @return self
     */
    public function setOrderModifiedTime($orderModifiedTime)
    {
        $this->container['orderModifiedTime'] = $orderModifiedTime;

        return $this;
    }

    /**
     * Gets orderPayTime
     *
     * @return string|null
     */
    public function getOrderPayTime()
    {
        return $this->container['orderPayTime'];
    }

    /**
     * Sets orderPayTime
     *
     * @param string|null $orderPayTime 订单支付时间
     *
     * @return self
     */
    public function setOrderPayTime($orderPayTime)
    {
        $this->container['orderPayTime'] = $orderPayTime;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string|null $orderType 订单类型
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

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
     * @param string|null $outBizNo 外部订单号 out_biz_no唯一对应一笔订单，相同的订单需传入相同的out_biz_no
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 交易对应的签约商户userId
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 支付金额，单位为【元】，需要实际支付的金额。SERVICE_ORDER且不涉及金额可不传入该字段，其他场景必传
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets payTimeoutExpress
     *
     * @return string|null
     */
    public function getPayTimeoutExpress()
    {
        return $this->container['payTimeoutExpress'];
    }

    /**
     * Sets payTimeoutExpress
     *
     * @param string|null $payTimeoutExpress 支付超时时间，超过时间支付宝自行关闭订单
     *
     * @return self
     */
    public function setPayTimeoutExpress($payTimeoutExpress)
    {
        $this->container['payTimeoutExpress'] = $payTimeoutExpress;

        return $this;
    }

    /**
     * Gets recordId
     *
     * @return string|null
     */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
     * Sets recordId
     *
     * @param string|null $recordId 商户订单同步记录id
     *
     * @return self
     */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId 卖家userId
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets sendMsg
     *
     * @return string|null
     */
    public function getSendMsg()
    {
        return $this->container['sendMsg'];
    }

    /**
     * Sets sendMsg
     *
     * @param string|null $sendMsg 是否需要小程序订单代理发送模版消息。不传默认不发送
     *
     * @return self
     */
    public function setSendMsg($sendMsg)
    {
        $this->container['sendMsg'] = $sendMsg;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 服务code：传入小程序后台提报的服务id，将订单与服务关联，有利于提高服务曝光机会；入参服务id的类目须与订单类型相符，若不相符将会报错；如订单类型为“外卖”，则入参的服务ID所对应的服务类目也必须得是”外卖“；service_code 通过 alipay.open.app.service.apply，(服务提报申请)接口创建服务后获取。
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets shopInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderShopInfo|null
     */
    public function getShopInfo()
    {
        return $this->container['shopInfo'];
    }

    /**
     * Sets shopInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderShopInfo|null $shopInfo shopInfo
     *
     * @return self
     */
    public function setShopInfo($shopInfo)
    {
        $this->container['shopInfo'] = $shopInfo;

        return $this;
    }

    /**
     * Gets sourceApp
     *
     * @return string|null
     */
    public function getSourceApp()
    {
        return $this->container['sourceApp'];
    }

    /**
     * Sets sourceApp
     *
     * @param string|null $sourceApp 用于区分用户下单的订单来源
     *
     * @return self
     */
    public function setSourceApp($sourceApp)
    {
        $this->container['sourceApp'] = $sourceApp;

        return $this;
    }

    /**
     * Gets syncContent
     *
     * @return string|null
     */
    public function getSyncContent()
    {
        return $this->container['syncContent'];
    }

    /**
     * Sets syncContent
     *
     * @param string|null $syncContent 同步内容
     *
     * @return self
     */
    public function setSyncContent($syncContent)
    {
        $this->container['syncContent'] = $syncContent;

        return $this;
    }

    /**
     * Gets ticketInfo
     *
     * @return \Alipay\OpenAPISDK\Model\TicketInfo|null
     */
    public function getTicketInfo()
    {
        return $this->container['ticketInfo'];
    }

    /**
     * Sets ticketInfo
     *
     * @param \Alipay\OpenAPISDK\Model\TicketInfo|null $ticketInfo ticketInfo
     *
     * @return self
     */
    public function setTicketInfo($ticketInfo)
    {
        $this->container['ticketInfo'] = $ticketInfo;

        return $this;
    }

    /**
     * Gets ticketOrderList
     *
     * @return \Alipay\OpenAPISDK\Model\TicketOrderInfo[]|null
     */
    public function getTicketOrderList()
    {
        return $this->container['ticketOrderList'];
    }

    /**
     * Sets ticketOrderList
     *
     * @param \Alipay\OpenAPISDK\Model\TicketOrderInfo[]|null $ticketOrderList 凭证信息
     *
     * @return self
     */
    public function setTicketOrderList($ticketOrderList)
    {
        $this->container['ticketOrderList'] = $ticketOrderList;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 订单所对应的支付宝交易号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets tradeType
     *
     * @return string|null
     */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
     * Sets tradeType
     *
     * @param string|null $tradeType 交易号类型
     *
     * @return self
     */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;

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


