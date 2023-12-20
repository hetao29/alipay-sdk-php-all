<?php
/**
 * AntMerchantExpandShopModifyModel
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
 * AntMerchantExpandShopModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntMerchantExpandShopModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntMerchantExpandShopModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizCards' => '\Alipay\OpenAPISDK\Model\SettleCardInfo[]',
        'brandId' => 'string',
        'businessAddress' => '\Alipay\OpenAPISDK\Model\AddressInfo',
        'businessTime' => '\Alipay\OpenAPISDK\Model\ShopBusinessTime[]',
        'certImage' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'certType' => 'string',
        'contactInfos' => '\Alipay\OpenAPISDK\Model\ContactInfo',
        'contactMobile' => 'string',
        'contactPhone' => 'string',
        'extInfos' => '\Alipay\OpenAPISDK\Model\ShopExtInfo[]',
        'ipRoleId' => 'string',
        'legalCertNo' => 'string',
        'legalName' => 'string',
        'licenseAuthLetterImage' => 'string',
        'memo' => 'string',
        'outDoorImages' => 'string[]',
        'qualifications' => '\Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]',
        'scene' => 'string',
        'settleAlipayLogonId' => 'string',
        'shopCategory' => 'string',
        'shopId' => 'string',
        'shopName' => 'string',
        'storeId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizCards' => null,
        'brandId' => null,
        'businessAddress' => null,
        'businessTime' => null,
        'certImage' => null,
        'certName' => null,
        'certNo' => null,
        'certType' => null,
        'contactInfos' => null,
        'contactMobile' => null,
        'contactPhone' => null,
        'extInfos' => null,
        'ipRoleId' => null,
        'legalCertNo' => null,
        'legalName' => null,
        'licenseAuthLetterImage' => null,
        'memo' => null,
        'outDoorImages' => null,
        'qualifications' => null,
        'scene' => null,
        'settleAlipayLogonId' => null,
        'shopCategory' => null,
        'shopId' => null,
        'shopName' => null,
        'storeId' => null
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
        'bizCards' => 'biz_cards',
        'brandId' => 'brand_id',
        'businessAddress' => 'business_address',
        'businessTime' => 'business_time',
        'certImage' => 'cert_image',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'contactInfos' => 'contact_infos',
        'contactMobile' => 'contact_mobile',
        'contactPhone' => 'contact_phone',
        'extInfos' => 'ext_infos',
        'ipRoleId' => 'ip_role_id',
        'legalCertNo' => 'legal_cert_no',
        'legalName' => 'legal_name',
        'licenseAuthLetterImage' => 'license_auth_letter_image',
        'memo' => 'memo',
        'outDoorImages' => 'out_door_images',
        'qualifications' => 'qualifications',
        'scene' => 'scene',
        'settleAlipayLogonId' => 'settle_alipay_logon_id',
        'shopCategory' => 'shop_category',
        'shopId' => 'shop_id',
        'shopName' => 'shop_name',
        'storeId' => 'store_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizCards' => 'setBizCards',
        'brandId' => 'setBrandId',
        'businessAddress' => 'setBusinessAddress',
        'businessTime' => 'setBusinessTime',
        'certImage' => 'setCertImage',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'certType' => 'setCertType',
        'contactInfos' => 'setContactInfos',
        'contactMobile' => 'setContactMobile',
        'contactPhone' => 'setContactPhone',
        'extInfos' => 'setExtInfos',
        'ipRoleId' => 'setIpRoleId',
        'legalCertNo' => 'setLegalCertNo',
        'legalName' => 'setLegalName',
        'licenseAuthLetterImage' => 'setLicenseAuthLetterImage',
        'memo' => 'setMemo',
        'outDoorImages' => 'setOutDoorImages',
        'qualifications' => 'setQualifications',
        'scene' => 'setScene',
        'settleAlipayLogonId' => 'setSettleAlipayLogonId',
        'shopCategory' => 'setShopCategory',
        'shopId' => 'setShopId',
        'shopName' => 'setShopName',
        'storeId' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizCards' => 'getBizCards',
        'brandId' => 'getBrandId',
        'businessAddress' => 'getBusinessAddress',
        'businessTime' => 'getBusinessTime',
        'certImage' => 'getCertImage',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'certType' => 'getCertType',
        'contactInfos' => 'getContactInfos',
        'contactMobile' => 'getContactMobile',
        'contactPhone' => 'getContactPhone',
        'extInfos' => 'getExtInfos',
        'ipRoleId' => 'getIpRoleId',
        'legalCertNo' => 'getLegalCertNo',
        'legalName' => 'getLegalName',
        'licenseAuthLetterImage' => 'getLicenseAuthLetterImage',
        'memo' => 'getMemo',
        'outDoorImages' => 'getOutDoorImages',
        'qualifications' => 'getQualifications',
        'scene' => 'getScene',
        'settleAlipayLogonId' => 'getSettleAlipayLogonId',
        'shopCategory' => 'getShopCategory',
        'shopId' => 'getShopId',
        'shopName' => 'getShopName',
        'storeId' => 'getStoreId'
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
        $this->container['bizCards'] = $data['bizCards'] ?? null;
        $this->container['brandId'] = $data['brandId'] ?? null;
        $this->container['businessAddress'] = $data['businessAddress'] ?? null;
        $this->container['businessTime'] = $data['businessTime'] ?? null;
        $this->container['certImage'] = $data['certImage'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['certType'] = $data['certType'] ?? null;
        $this->container['contactInfos'] = $data['contactInfos'] ?? null;
        $this->container['contactMobile'] = $data['contactMobile'] ?? null;
        $this->container['contactPhone'] = $data['contactPhone'] ?? null;
        $this->container['extInfos'] = $data['extInfos'] ?? null;
        $this->container['ipRoleId'] = $data['ipRoleId'] ?? null;
        $this->container['legalCertNo'] = $data['legalCertNo'] ?? null;
        $this->container['legalName'] = $data['legalName'] ?? null;
        $this->container['licenseAuthLetterImage'] = $data['licenseAuthLetterImage'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['outDoorImages'] = $data['outDoorImages'] ?? null;
        $this->container['qualifications'] = $data['qualifications'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['settleAlipayLogonId'] = $data['settleAlipayLogonId'] ?? null;
        $this->container['shopCategory'] = $data['shopCategory'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
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
     * Gets bizCards
     *
     * @return \Alipay\OpenAPISDK\Model\SettleCardInfo[]|null
     */
    public function getBizCards()
    {
        return $this->container['bizCards'];
    }

    /**
     * Sets bizCards
     *
     * @param \Alipay\OpenAPISDK\Model\SettleCardInfo[]|null $bizCards \"门店结算卡信息。本业务当前只允许传入一张结算卡。 说明：本参数仅直付通业务使用，其余业务无需关注。\"
     *
     * @return self
     */
    public function setBizCards($bizCards)
    {
        $this->container['bizCards'] = $bizCards;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId 品牌id。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets businessAddress
     *
     * @return \Alipay\OpenAPISDK\Model\AddressInfo|null
     */
    public function getBusinessAddress()
    {
        return $this->container['businessAddress'];
    }

    /**
     * Sets businessAddress
     *
     * @param \Alipay\OpenAPISDK\Model\AddressInfo|null $businessAddress businessAddress
     *
     * @return self
     */
    public function setBusinessAddress($businessAddress)
    {
        $this->container['businessAddress'] = $businessAddress;

        return $this;
    }

    /**
     * Gets businessTime
     *
     * @return \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null
     */
    public function getBusinessTime()
    {
        return $this->container['businessTime'];
    }

    /**
     * Sets businessTime
     *
     * @param \Alipay\OpenAPISDK\Model\ShopBusinessTime[]|null $businessTime 店铺经营时间。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setBusinessTime($businessTime)
    {
        $this->container['businessTime'] = $businessTime;

        return $this;
    }

    /**
     * Gets certImage
     *
     * @return string|null
     */
    public function getCertImage()
    {
        return $this->container['certImage'];
    }

    /**
     * Sets certImage
     *
     * @param string|null $certImage 营业执照图片KEY
     *
     * @return self
     */
    public function setCertImage($certImage)
    {
        $this->container['certImage'] = $certImage;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName 营业执照名称，填写值为营业执照或统一社会信用代码证上的名称。
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 证件号码。请填写店铺营业执照号。
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets certType
     *
     * @return string|null
     */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
     * Sets certType
     *
     * @param string|null $certType 证件类型
     *
     * @return self
     */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;

        return $this;
    }

    /**
     * Gets contactInfos
     *
     * @return \Alipay\OpenAPISDK\Model\ContactInfo|null
     */
    public function getContactInfos()
    {
        return $this->container['contactInfos'];
    }

    /**
     * Sets contactInfos
     *
     * @param \Alipay\OpenAPISDK\Model\ContactInfo|null $contactInfos contactInfos
     *
     * @return self
     */
    public function setContactInfos($contactInfos)
    {
        $this->container['contactInfos'] = $contactInfos;

        return $this;
    }

    /**
     * Gets contactMobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contactMobile'];
    }

    /**
     * Sets contactMobile
     *
     * @param string|null $contactMobile 店铺联系手机，与店铺联系固话二选一必填
     *
     * @return self
     */
    public function setContactMobile($contactMobile)
    {
        $this->container['contactMobile'] = $contactMobile;

        return $this;
    }

    /**
     * Gets contactPhone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     *
     * @param string|null $contactPhone 店铺的联系固话，和店铺联系手机二选一必填
     *
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets extInfos
     *
     * @return \Alipay\OpenAPISDK\Model\ShopExtInfo[]|null
     */
    public function getExtInfos()
    {
        return $this->container['extInfos'];
    }

    /**
     * Sets extInfos
     *
     * @param \Alipay\OpenAPISDK\Model\ShopExtInfo[]|null $extInfos 扩展信息列表。key值需要向对应行业的bd进行申请。传入本项时，按key进行更新或补充
     *
     * @return self
     */
    public function setExtInfos($extInfos)
    {
        $this->container['extInfos'] = $extInfos;

        return $this;
    }

    /**
     * Gets ipRoleId
     *
     * @return string|null
     */
    public function getIpRoleId()
    {
        return $this->container['ipRoleId'];
    }

    /**
     * Sets ipRoleId
     *
     * @param string|null $ipRoleId 商户角色id，表示将要修改的店属于哪个商户角色，和store_id一起定位待修改的门店。对于直连场景，填写商户pid；对于间连场景（线上、线下、直付通），填写商户smid。本接口中，如果没传shop_id，则本字段与store_id均必填。本信息项不可修改
     *
     * @return self
     */
    public function setIpRoleId($ipRoleId)
    {
        $this->container['ipRoleId'] = $ipRoleId;

        return $this;
    }

    /**
     * Gets legalCertNo
     *
     * @return string|null
     */
    public function getLegalCertNo()
    {
        return $this->container['legalCertNo'];
    }

    /**
     * Sets legalCertNo
     *
     * @param string|null $legalCertNo 法人身份证号。如果要更新，必须和legal_name成对传入
     *
     * @return self
     */
    public function setLegalCertNo($legalCertNo)
    {
        $this->container['legalCertNo'] = $legalCertNo;

        return $this;
    }

    /**
     * Gets legalName
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legalName'];
    }

    /**
     * Sets legalName
     *
     * @param string|null $legalName 法人名称。如果要更新，必须和legal_cert_no成对传入
     *
     * @return self
     */
    public function setLegalName($legalName)
    {
        $this->container['legalName'] = $legalName;

        return $this;
    }

    /**
     * Gets licenseAuthLetterImage
     *
     * @return string|null
     */
    public function getLicenseAuthLetterImage()
    {
        return $this->container['licenseAuthLetterImage'];
    }

    /**
     * Sets licenseAuthLetterImage
     *
     * @param string|null $licenseAuthLetterImage 营业执照授权函。其值为使用ant.merchant.expand.indirect.image.upload上传图片得到的一串oss key。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setLicenseAuthLetterImage($licenseAuthLetterImage)
    {
        $this->container['licenseAuthLetterImage'] = $licenseAuthLetterImage;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets outDoorImages
     *
     * @return string[]|null
     */
    public function getOutDoorImages()
    {
        return $this->container['outDoorImages'];
    }

    /**
     * Sets outDoorImages
     *
     * @param string[]|null $outDoorImages 门头照，其值为使用ant.merchant.expand.indirect.image.upload上传图片得到的一串oss key。若无需更新本信息项，可以不填写。若填写则会整体覆盖原有的门头照列表
     *
     * @return self
     */
    public function setOutDoorImages($outDoorImages)
    {
        $this->container['outDoorImages'] = $outDoorImages;

        return $this;
    }

    /**
     * Gets qualifications
     *
     * @return \Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]|null
     */
    public function getQualifications()
    {
        return $this->container['qualifications'];
    }

    /**
     * Sets qualifications
     *
     * @param \Alipay\OpenAPISDK\Model\IndustryQualificationInfo[]|null $qualifications 行业特殊资质。若无需更新本信息项，可以不填写。填写会按类型进行更新或补充
     *
     * @return self
     */
    public function setQualifications($qualifications)
    {
        $this->container['qualifications'] = $qualifications;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string|null $scene 场景。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets settleAlipayLogonId
     *
     * @return string|null
     */
    public function getSettleAlipayLogonId()
    {
        return $this->container['settleAlipayLogonId'];
    }

    /**
     * Sets settleAlipayLogonId
     *
     * @param string|null $settleAlipayLogonId 结算支付宝账号的登录号。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setSettleAlipayLogonId($settleAlipayLogonId)
    {
        $this->container['settleAlipayLogonId'] = $settleAlipayLogonId;

        return $this;
    }

    /**
     * Gets shopCategory
     *
     * @return string|null
     */
    public function getShopCategory()
    {
        return $this->container['shopCategory'];
    }

    /**
     * Sets shopCategory
     *
     * @param string|null $shopCategory 新版门店类目标准二级类目code。类目标准及与原shop_category映射关系参见表格 https://ur.alipay.com/2qv1f9。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setShopCategory($shopCategory)
    {
        $this->container['shopCategory'] = $shopCategory;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 蚂蚁店铺id，用于查出待修改的门店。填写本参数的话，store_id和ip_role_id可以不填。本信息项不可修改
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 店铺名称。直连开店要保证全局店铺名称+地址唯一，间连开店要保证服务商pid下店铺名称+地址唯一。若无需更新本信息项，可以不填写
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

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
     * @param string|null $storeId 门店编号，表示该门店在该商户角色id(直连pid，间连smid)下，由商户自己定义的外部门店编号。用于查出待修改的门店。本接口中，如果没传shop_id，则本字段与ip_role_id均必填；传入shop_id情况下，以shop_id为准查询门店，并修改本信息项
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

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


