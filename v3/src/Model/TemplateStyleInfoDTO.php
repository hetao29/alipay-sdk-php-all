<?php
/**
 * TemplateStyleInfoDTO
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
 * TemplateStyleInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TemplateStyleInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateStyleInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'backgroundId' => 'string',
        'bannerImgId' => 'string',
        'bannerUrl' => 'string',
        'bgColor' => 'string',
        'brandName' => 'string',
        'cardShowName' => 'string',
        'color' => 'string',
        'columnInfoLayout' => 'string',
        'featureDescriptions' => 'string[]',
        'frontImageEnable' => 'bool',
        'frontTextListEnable' => 'bool',
        'logoId' => 'string',
        'slogan' => 'string',
        'sloganImgId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'backgroundId' => null,
        'bannerImgId' => null,
        'bannerUrl' => null,
        'bgColor' => null,
        'brandName' => null,
        'cardShowName' => null,
        'color' => null,
        'columnInfoLayout' => null,
        'featureDescriptions' => null,
        'frontImageEnable' => null,
        'frontTextListEnable' => null,
        'logoId' => null,
        'slogan' => null,
        'sloganImgId' => null
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
        'backgroundId' => 'background_id',
        'bannerImgId' => 'banner_img_id',
        'bannerUrl' => 'banner_url',
        'bgColor' => 'bg_color',
        'brandName' => 'brand_name',
        'cardShowName' => 'card_show_name',
        'color' => 'color',
        'columnInfoLayout' => 'column_info_layout',
        'featureDescriptions' => 'feature_descriptions',
        'frontImageEnable' => 'front_image_enable',
        'frontTextListEnable' => 'front_text_list_enable',
        'logoId' => 'logo_id',
        'slogan' => 'slogan',
        'sloganImgId' => 'slogan_img_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'backgroundId' => 'setBackgroundId',
        'bannerImgId' => 'setBannerImgId',
        'bannerUrl' => 'setBannerUrl',
        'bgColor' => 'setBgColor',
        'brandName' => 'setBrandName',
        'cardShowName' => 'setCardShowName',
        'color' => 'setColor',
        'columnInfoLayout' => 'setColumnInfoLayout',
        'featureDescriptions' => 'setFeatureDescriptions',
        'frontImageEnable' => 'setFrontImageEnable',
        'frontTextListEnable' => 'setFrontTextListEnable',
        'logoId' => 'setLogoId',
        'slogan' => 'setSlogan',
        'sloganImgId' => 'setSloganImgId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'backgroundId' => 'getBackgroundId',
        'bannerImgId' => 'getBannerImgId',
        'bannerUrl' => 'getBannerUrl',
        'bgColor' => 'getBgColor',
        'brandName' => 'getBrandName',
        'cardShowName' => 'getCardShowName',
        'color' => 'getColor',
        'columnInfoLayout' => 'getColumnInfoLayout',
        'featureDescriptions' => 'getFeatureDescriptions',
        'frontImageEnable' => 'getFrontImageEnable',
        'frontTextListEnable' => 'getFrontTextListEnable',
        'logoId' => 'getLogoId',
        'slogan' => 'getSlogan',
        'sloganImgId' => 'getSloganImgId'
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
        $this->container['backgroundId'] = $data['backgroundId'] ?? null;
        $this->container['bannerImgId'] = $data['bannerImgId'] ?? null;
        $this->container['bannerUrl'] = $data['bannerUrl'] ?? null;
        $this->container['bgColor'] = $data['bgColor'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['cardShowName'] = $data['cardShowName'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['columnInfoLayout'] = $data['columnInfoLayout'] ?? null;
        $this->container['featureDescriptions'] = $data['featureDescriptions'] ?? null;
        $this->container['frontImageEnable'] = $data['frontImageEnable'] ?? null;
        $this->container['frontTextListEnable'] = $data['frontTextListEnable'] ?? null;
        $this->container['logoId'] = $data['logoId'] ?? null;
        $this->container['slogan'] = $data['slogan'] ?? null;
        $this->container['sloganImgId'] = $data['sloganImgId'] ?? null;
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
     * Gets backgroundId
     *
     * @return string|null
     */
    public function getBackgroundId()
    {
        return $this->container['backgroundId'];
    }

    /**
     * Sets backgroundId
     *
     * @param string|null $backgroundId 背景图片Id，通过接口（alipay.offline.material.image.upload）上传图片    图片说明：2M以内，格式：bmp、png、jpeg、jpg、gif；  尺寸不小于1020*643px；  图片不得有圆角，不得拉伸变形
     *
     * @return self
     */
    public function setBackgroundId($backgroundId)
    {
        $this->container['backgroundId'] = $backgroundId;

        return $this;
    }

    /**
     * Gets bannerImgId
     *
     * @return string|null
     */
    public function getBannerImgId()
    {
        return $this->container['bannerImgId'];
    }

    /**
     * Sets bannerImgId
     *
     * @param string|null $bannerImgId banner图片id。 通过接口（alipay.offline.material.image.upload）上传图片。
     *
     * @return self
     */
    public function setBannerImgId($bannerImgId)
    {
        $this->container['bannerImgId'] = $bannerImgId;

        return $this;
    }

    /**
     * Gets bannerUrl
     *
     * @return string|null
     */
    public function getBannerUrl()
    {
        return $this->container['bannerUrl'];
    }

    /**
     * Sets bannerUrl
     *
     * @param string|null $bannerUrl banner跳转地址。
     *
     * @return self
     */
    public function setBannerUrl($bannerUrl)
    {
        $this->container['bannerUrl'] = $bannerUrl;

        return $this;
    }

    /**
     * Gets bgColor
     *
     * @return string|null
     */
    public function getBgColor()
    {
        return $this->container['bgColor'];
    }

    /**
     * Sets bgColor
     *
     * @param string|null $bgColor 字体颜色（非背景色），只影响卡详情中部信息区域字体颜色
     *
     * @return self
     */
    public function setBgColor($bgColor)
    {
        $this->container['bgColor'] = $bgColor;

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
     * @param string|null $brandName 品牌商名称
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets cardShowName
     *
     * @return string|null
     */
    public function getCardShowName()
    {
        return $this->container['cardShowName'];
    }

    /**
     * Sets cardShowName
     *
     * @param string|null $cardShowName 钱包端显示名称
     *
     * @return self
     */
    public function setCardShowName($cardShowName)
    {
        $this->container['cardShowName'] = $cardShowName;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color 注意：此字段已废弃。
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets columnInfoLayout
     *
     * @return string|null
     */
    public function getColumnInfoLayout()
    {
        return $this->container['columnInfoLayout'];
    }

    /**
     * Sets columnInfoLayout
     *
     * @param string|null $columnInfoLayout 如果为空则默认为list。
     *
     * @return self
     */
    public function setColumnInfoLayout($columnInfoLayout)
    {
        $this->container['columnInfoLayout'] = $columnInfoLayout;

        return $this;
    }

    /**
     * Gets featureDescriptions
     *
     * @return string[]|null
     */
    public function getFeatureDescriptions()
    {
        return $this->container['featureDescriptions'];
    }

    /**
     * Sets featureDescriptions
     *
     * @param string[]|null $featureDescriptions 特色信息，用于领卡预览
     *
     * @return self
     */
    public function setFeatureDescriptions($featureDescriptions)
    {
        $this->container['featureDescriptions'] = $featureDescriptions;

        return $this;
    }

    /**
     * Gets frontImageEnable
     *
     * @return bool|null
     */
    public function getFrontImageEnable()
    {
        return $this->container['frontImageEnable'];
    }

    /**
     * Sets frontImageEnable
     *
     * @param bool|null $frontImageEnable 设置是否在卡面展示（个人头像）图片信息，默认不展示；  当前仅用于身份验证信息类型的个人头像图片；  图片id随创建卡/更新卡时传入；  详见会员卡产品文档。
     *
     * @return self
     */
    public function setFrontImageEnable($frontImageEnable)
    {
        $this->container['frontImageEnable'] = $frontImageEnable;

        return $this;
    }

    /**
     * Gets frontTextListEnable
     *
     * @return bool|null
     */
    public function getFrontTextListEnable()
    {
        return $this->container['frontTextListEnable'];
    }

    /**
     * Sets frontTextListEnable
     *
     * @param bool|null $frontTextListEnable 设置是否在卡面展示文案信息，默认不展示；  文案信息分行展示，最多展示4行文案，每行文案分为label和value两部分；  文案实际内容随创建卡/更新卡时传入；  详见会员卡产品说明文档。
     *
     * @return self
     */
    public function setFrontTextListEnable($frontTextListEnable)
    {
        $this->container['frontTextListEnable'] = $frontTextListEnable;

        return $this;
    }

    /**
     * Gets logoId
     *
     * @return string|null
     */
    public function getLogoId()
    {
        return $this->container['logoId'];
    }

    /**
     * Sets logoId
     *
     * @param string|null $logoId logo的图片ID，通过接口（alipay.offline.material.image.upload）上传图片    图片说明：1M以内，格式bmp、png、jpeg、jpg、gif；  尺寸不小于500*500px的正方形；  请优先使用商家LOGO；
     *
     * @return self
     */
    public function setLogoId($logoId)
    {
        $this->container['logoId'] = $logoId;

        return $this;
    }

    /**
     * Gets slogan
     *
     * @return string|null
     */
    public function getSlogan()
    {
        return $this->container['slogan'];
    }

    /**
     * Sets slogan
     *
     * @param string|null $slogan 标语
     *
     * @return self
     */
    public function setSlogan($slogan)
    {
        $this->container['slogan'] = $slogan;

        return $this;
    }

    /**
     * Gets sloganImgId
     *
     * @return string|null
     */
    public function getSloganImgId()
    {
        return $this->container['sloganImgId'];
    }

    /**
     * Sets sloganImgId
     *
     * @param string|null $sloganImgId 标语图片id， 通过接口（alipay.offline.material.image.upload）上传图片
     *
     * @return self
     */
    public function setSloganImgId($sloganImgId)
    {
        $this->container['sloganImgId'] = $sloganImgId;

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


