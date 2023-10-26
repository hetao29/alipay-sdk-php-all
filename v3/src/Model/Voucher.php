<?php
/**
 * Voucher
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
 * Voucher Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Voucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Voucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowSplit' => 'bool',
        'availableAmount' => 'string',
        'brandName' => 'string',
        'clauseTerms' => '\Alipay\OpenAPISDK\Model\ClauseTerm[]',
        'delayInfo' => '\Alipay\OpenAPISDK\Model\DelayInfo',
        'desc' => 'string',
        'descDetailList' => '\Alipay\OpenAPISDK\Model\VoucherDescDetail[]',
        'displayConfig' => '\Alipay\OpenAPISDK\Model\DisplayConfig',
        'donateFlag' => 'string',
        'effectType' => 'string',
        'endTime' => 'string',
        'extInfo' => 'string',
        'itemInfo' => '\Alipay\OpenAPISDK\Model\ItemInfo',
        'logo' => 'string',
        'maxAmount' => 'string',
        'multiUseMode' => 'string',
        'name' => 'string',
        'rate' => 'string',
        'relativeTime' => 'string',
        'roundingRule' => 'string',
        'startTime' => 'string',
        'type' => 'string',
        'useInstructions' => 'string[]',
        'useRule' => '\Alipay\OpenAPISDK\Model\UseRule',
        'validateType' => 'string',
        'verifyMode' => 'string',
        'voucherImg' => 'string',
        'voucherNote' => 'string',
        'worthValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowSplit' => null,
        'availableAmount' => null,
        'brandName' => null,
        'clauseTerms' => null,
        'delayInfo' => null,
        'desc' => null,
        'descDetailList' => null,
        'displayConfig' => null,
        'donateFlag' => null,
        'effectType' => null,
        'endTime' => null,
        'extInfo' => null,
        'itemInfo' => null,
        'logo' => null,
        'maxAmount' => null,
        'multiUseMode' => null,
        'name' => null,
        'rate' => null,
        'relativeTime' => null,
        'roundingRule' => null,
        'startTime' => null,
        'type' => null,
        'useInstructions' => null,
        'useRule' => null,
        'validateType' => null,
        'verifyMode' => null,
        'voucherImg' => null,
        'voucherNote' => null,
        'worthValue' => null
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
        'allowSplit' => 'allow_split',
        'availableAmount' => 'available_amount',
        'brandName' => 'brand_name',
        'clauseTerms' => 'clause_terms',
        'delayInfo' => 'delay_info',
        'desc' => 'desc',
        'descDetailList' => 'desc_detail_list',
        'displayConfig' => 'display_config',
        'donateFlag' => 'donate_flag',
        'effectType' => 'effect_type',
        'endTime' => 'end_time',
        'extInfo' => 'ext_info',
        'itemInfo' => 'item_info',
        'logo' => 'logo',
        'maxAmount' => 'max_amount',
        'multiUseMode' => 'multi_use_mode',
        'name' => 'name',
        'rate' => 'rate',
        'relativeTime' => 'relative_time',
        'roundingRule' => 'rounding_rule',
        'startTime' => 'start_time',
        'type' => 'type',
        'useInstructions' => 'use_instructions',
        'useRule' => 'use_rule',
        'validateType' => 'validate_type',
        'verifyMode' => 'verify_mode',
        'voucherImg' => 'voucher_img',
        'voucherNote' => 'voucher_note',
        'worthValue' => 'worth_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowSplit' => 'setAllowSplit',
        'availableAmount' => 'setAvailableAmount',
        'brandName' => 'setBrandName',
        'clauseTerms' => 'setClauseTerms',
        'delayInfo' => 'setDelayInfo',
        'desc' => 'setDesc',
        'descDetailList' => 'setDescDetailList',
        'displayConfig' => 'setDisplayConfig',
        'donateFlag' => 'setDonateFlag',
        'effectType' => 'setEffectType',
        'endTime' => 'setEndTime',
        'extInfo' => 'setExtInfo',
        'itemInfo' => 'setItemInfo',
        'logo' => 'setLogo',
        'maxAmount' => 'setMaxAmount',
        'multiUseMode' => 'setMultiUseMode',
        'name' => 'setName',
        'rate' => 'setRate',
        'relativeTime' => 'setRelativeTime',
        'roundingRule' => 'setRoundingRule',
        'startTime' => 'setStartTime',
        'type' => 'setType',
        'useInstructions' => 'setUseInstructions',
        'useRule' => 'setUseRule',
        'validateType' => 'setValidateType',
        'verifyMode' => 'setVerifyMode',
        'voucherImg' => 'setVoucherImg',
        'voucherNote' => 'setVoucherNote',
        'worthValue' => 'setWorthValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowSplit' => 'getAllowSplit',
        'availableAmount' => 'getAvailableAmount',
        'brandName' => 'getBrandName',
        'clauseTerms' => 'getClauseTerms',
        'delayInfo' => 'getDelayInfo',
        'desc' => 'getDesc',
        'descDetailList' => 'getDescDetailList',
        'displayConfig' => 'getDisplayConfig',
        'donateFlag' => 'getDonateFlag',
        'effectType' => 'getEffectType',
        'endTime' => 'getEndTime',
        'extInfo' => 'getExtInfo',
        'itemInfo' => 'getItemInfo',
        'logo' => 'getLogo',
        'maxAmount' => 'getMaxAmount',
        'multiUseMode' => 'getMultiUseMode',
        'name' => 'getName',
        'rate' => 'getRate',
        'relativeTime' => 'getRelativeTime',
        'roundingRule' => 'getRoundingRule',
        'startTime' => 'getStartTime',
        'type' => 'getType',
        'useInstructions' => 'getUseInstructions',
        'useRule' => 'getUseRule',
        'validateType' => 'getValidateType',
        'verifyMode' => 'getVerifyMode',
        'voucherImg' => 'getVoucherImg',
        'voucherNote' => 'getVoucherNote',
        'worthValue' => 'getWorthValue'
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
        $this->container['allowSplit'] = $data['allowSplit'] ?? null;
        $this->container['availableAmount'] = $data['availableAmount'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['clauseTerms'] = $data['clauseTerms'] ?? null;
        $this->container['delayInfo'] = $data['delayInfo'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['descDetailList'] = $data['descDetailList'] ?? null;
        $this->container['displayConfig'] = $data['displayConfig'] ?? null;
        $this->container['donateFlag'] = $data['donateFlag'] ?? null;
        $this->container['effectType'] = $data['effectType'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['itemInfo'] = $data['itemInfo'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['maxAmount'] = $data['maxAmount'] ?? null;
        $this->container['multiUseMode'] = $data['multiUseMode'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['relativeTime'] = $data['relativeTime'] ?? null;
        $this->container['roundingRule'] = $data['roundingRule'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['useInstructions'] = $data['useInstructions'] ?? null;
        $this->container['useRule'] = $data['useRule'] ?? null;
        $this->container['validateType'] = $data['validateType'] ?? null;
        $this->container['verifyMode'] = $data['verifyMode'] ?? null;
        $this->container['voucherImg'] = $data['voucherImg'] ?? null;
        $this->container['voucherNote'] = $data['voucherNote'] ?? null;
        $this->container['worthValue'] = $data['worthValue'] ?? null;
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
     * Gets allowSplit
     *
     * @return bool|null
     */
    public function getAllowSplit()
    {
        return $this->container['allowSplit'];
    }

    /**
     * Sets allowSplit
     *
     * @param bool|null $allowSplit 是否允许拆分，券在核销的时候是否允许券的面额拆分使用。(仅限渠道类型为ISV企业福利：ISV_ENTERPRISE_BENIFIT的场景使用)
     *
     * @return self
     */
    public function setAllowSplit($allowSplit)
    {
        $this->container['allowSplit'] = $allowSplit;

        return $this;
    }

    /**
     * Gets availableAmount
     *
     * @return string|null
     */
    public function getAvailableAmount()
    {
        return $this->container['availableAmount'];
    }

    /**
     * Sets availableAmount
     *
     * @param string|null $availableAmount 券剩余面额，单位元  券详情查询接口返回，可拆分券中的券详情展示用
     *
     * @return self
     */
    public function setAvailableAmount($availableAmount)
    {
        $this->container['availableAmount'] = $availableAmount;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 券副标题
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets clauseTerms
     *
     * @return \Alipay\OpenAPISDK\Model\ClauseTerm[]|null
     */
    public function getClauseTerms()
    {
        return $this->container['clauseTerms'];
    }

    /**
     * Sets clauseTerms
     *
     * @param \Alipay\OpenAPISDK\Model\ClauseTerm[]|null $clauseTerms 券的说明条款
     *
     * @return self
     */
    public function setClauseTerms($clauseTerms)
    {
        $this->container['clauseTerms'] = $clauseTerms;

        return $this;
    }

    /**
     * Gets delayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DelayInfo|null
     */
    public function getDelayInfo()
    {
        return $this->container['delayInfo'];
    }

    /**
     * Sets delayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DelayInfo|null $delayInfo delayInfo
     *
     * @return self
     */
    public function setDelayInfo($delayInfo)
    {
        $this->container['delayInfo'] = $delayInfo;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 券详细说明  最多包含500个字符
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets descDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDescDetail[]|null
     */
    public function getDescDetailList()
    {
        return $this->container['descDetailList'];
    }

    /**
     * Sets descDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDescDetail[]|null $descDetailList 券使用说明描述列表
     *
     * @return self
     */
    public function setDescDetailList($descDetailList)
    {
        $this->container['descDetailList'] = $descDetailList;

        return $this;
    }

    /**
     * Gets displayConfig
     *
     * @return \Alipay\OpenAPISDK\Model\DisplayConfig|null
     */
    public function getDisplayConfig()
    {
        return $this->container['displayConfig'];
    }

    /**
     * Sets displayConfig
     *
     * @param \Alipay\OpenAPISDK\Model\DisplayConfig|null $displayConfig displayConfig
     *
     * @return self
     */
    public function setDisplayConfig($displayConfig)
    {
        $this->container['displayConfig'] = $displayConfig;

        return $this;
    }

    /**
     * Gets donateFlag
     *
     * @return string|null
     */
    public function getDonateFlag()
    {
        return $this->container['donateFlag'];
    }

    /**
     * Sets donateFlag
     *
     * @param string|null $donateFlag 券是否可转赠，默认为可转赠
     *
     * @return self
     */
    public function setDonateFlag($donateFlag)
    {
        $this->container['donateFlag'] = $donateFlag;

        return $this;
    }

    /**
     * Gets effectType
     *
     * @return string|null
     */
    public function getEffectType()
    {
        return $this->container['effectType'];
    }

    /**
     * Sets effectType
     *
     * @param string|null $effectType 券生效的方式，目前支持以下方式  立即生效：IMMEDIATELY  延迟生效：DELAY  仅在券有效期类型为相对有效期时生效
     *
     * @return self
     */
    public function setEffectType($effectType)
    {
        $this->container['effectType'] = $effectType;

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
     * @param string|null $endTime 券有效期的结束时间  仅在券有效期类型为绝对有效期时生效  必须晚于活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 券的扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets itemInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ItemInfo|null
     */
    public function getItemInfo()
    {
        return $this->container['itemInfo'];
    }

    /**
     * Sets itemInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ItemInfo|null $itemInfo itemInfo
     *
     * @return self
     */
    public function setItemInfo($itemInfo)
    {
        $this->container['itemInfo'] = $itemInfo;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo 券LOGO文件ID，调用图片上传接口alipay.offline.material.image.upload获得
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets maxAmount
     *
     * @return string|null
     */
    public function getMaxAmount()
    {
        return $this->container['maxAmount'];
    }

    /**
     * Sets maxAmount
     *
     * @param string|null $maxAmount 最高优惠金额，单位元  指用券最高可以优惠的金额  必须为合法金额类型字符串仅当券类型为折扣券（RATE），每满减券（PER_FULL_CUT）有效
     *
     * @return self
     */
    public function setMaxAmount($maxAmount)
    {
        $this->container['maxAmount'] = $maxAmount;

        return $this;
    }

    /**
     * Gets multiUseMode
     *
     * @return string|null
     */
    public function getMultiUseMode()
    {
        return $this->container['multiUseMode'];
    }

    /**
     * Sets multiUseMode
     *
     * @param string|null $multiUseMode 券叠加的属性，  仅全场券可设置该选项；  NO_MULTI:不可与其他全场券和单品券叠加;  MULTI_USE_WITH_SINGLE:  该全场优惠和单品优惠的叠加  ；MULTI_USE_WITH_OTHE  RS:该全场优惠和其他所有优惠都可以叠加
     *
     * @return self
     */
    public function setMultiUseMode($multiUseMode)
    {
        $this->container['multiUseMode'] = $multiUseMode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate 折扣率  仅当券类型为折扣券时有效  有效折扣率取值范围0.11-0.99  仅允许保留小数点后两位
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets relativeTime
     *
     * @return string|null
     */
    public function getRelativeTime()
    {
        return $this->container['relativeTime'];
    }

    /**
     * Sets relativeTime
     *
     * @param string|null $relativeTime 券相对有效期，单位天  仅在券有效期类型为相对有效期时生效  如，设5表示领券领取后5日内有效
     *
     * @return self
     */
    public function setRelativeTime($relativeTime)
    {
        $this->container['relativeTime'] = $relativeTime;

        return $this;
    }

    /**
     * Gets roundingRule
     *
     * @return string|null
     */
    public function getRoundingRule()
    {
        return $this->container['roundingRule'];
    }

    /**
     * Sets roundingRule
     *
     * @param string|null $roundingRule 券核销时，抹零方式，目前支持： NOT_AUTO_ROUNDING:不自动抹零 AUTO_ROUNDING_YUAN:自动抹零到元 AUTO_ROUNDING_JIAO:自动抹零到角 ROUNDING_UP_YUAN:四舍五入到元 ROUNDING_UP_JIAO:四舍五入到角
     *
     * @return self
     */
    public function setRoundingRule($roundingRule)
    {
        $this->container['roundingRule'] = $roundingRule;

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
     * @param string|null $startTime 券有效期的开始时间  仅在券有效期类型为绝对有效期时生效
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 券类型，目前支持以下类型：  EXCHANGE：兑换券；  MONEY：代金券；  REDUCETO：减至券；  RATE：折扣券；  PER_FULL_CUT：每满减券
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets useInstructions
     *
     * @return string[]|null
     */
    public function getUseInstructions()
    {
        return $this->container['useInstructions'];
    }

    /**
     * Sets useInstructions
     *
     * @param string[]|null $useInstructions 券的使用说明  使用须知最多6条，且每条最多100字
     *
     * @return self
     */
    public function setUseInstructions($useInstructions)
    {
        $this->container['useInstructions'] = $useInstructions;

        return $this;
    }

    /**
     * Gets useRule
     *
     * @return \Alipay\OpenAPISDK\Model\UseRule|null
     */
    public function getUseRule()
    {
        return $this->container['useRule'];
    }

    /**
     * Sets useRule
     *
     * @param \Alipay\OpenAPISDK\Model\UseRule|null $useRule useRule
     *
     * @return self
     */
    public function setUseRule($useRule)
    {
        $this->container['useRule'] = $useRule;

        return $this;
    }

    /**
     * Gets validateType
     *
     * @return string|null
     */
    public function getValidateType()
    {
        return $this->container['validateType'];
    }

    /**
     * Sets validateType
     *
     * @param string|null $validateType 券有效期类型，目前支持以下类型：  RELATIVE：相对有效期  FIXED：绝对有效期
     *
     * @return self
     */
    public function setValidateType($validateType)
    {
        $this->container['validateType'] = $validateType;

        return $this;
    }

    /**
     * Gets verifyMode
     *
     * @return string|null
     */
    public function getVerifyMode()
    {
        return $this->container['verifyMode'];
    }

    /**
     * Sets verifyMode
     *
     * @param string|null $verifyMode 该字段仅在兑换券条件下(即券类型为EXCHANGE)，用于设置兑换券的核销方式  USER_CLICK:用户自己点击券上的按钮核销  MERCHANT_SCAN：商户通过APP扫码核销  其他情况下此字段为空
     *
     * @return self
     */
    public function setVerifyMode($verifyMode)
    {
        $this->container['verifyMode'] = $verifyMode;

        return $this;
    }

    /**
     * Gets voucherImg
     *
     * @return string|null
     */
    public function getVoucherImg()
    {
        return $this->container['voucherImg'];
    }

    /**
     * Sets voucherImg
     *
     * @param string|null $voucherImg 券图片文件ID,调用上传图片接口alipay.offline.material.image.upload获得
     *
     * @return self
     */
    public function setVoucherImg($voucherImg)
    {
        $this->container['voucherImg'] = $voucherImg;

        return $this;
    }

    /**
     * Gets voucherNote
     *
     * @return string|null
     */
    public function getVoucherNote()
    {
        return $this->container['voucherNote'];
    }

    /**
     * Sets voucherNote
     *
     * @param string|null $voucherNote 券的备注    用于收银系统识别指定券使用；如备注中传入“123”，券发出后核销时将在当面付接口将该值传回，供收银系统识别
     *
     * @return self
     */
    public function setVoucherNote($voucherNote)
    {
        $this->container['voucherNote'] = $voucherNote;

        return $this;
    }

    /**
     * Gets worthValue
     *
     * @return string|null
     */
    public function getWorthValue()
    {
        return $this->container['worthValue'];
    }

    /**
     * Sets worthValue
     *
     * @param string|null $worthValue 券面额，单位元必须为合法金额类型字符串券类型为代金券（MONEY）、减至券（REDUCETO）、每满减券（PER_FULL_CUT）时必填  如：  代金券：10元代金券中的10为券面额；  每满减券：毎满100减10元，其中的10为券面额；  减至券：单品原价100，现价10元，其中10为券面额，单品减至券的券面额必须低于单品原价
     *
     * @return self
     */
    public function setWorthValue($worthValue)
    {
        $this->container['worthValue'] = $worthValue;

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


