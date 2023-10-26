<?php
/**
 * ConstraintInfo
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
 * ConstraintInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConstraintInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConstraintInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cashPoolId' => 'string',
        'crowdGroupId' => 'string',
        'crowdRestriction' => 'string',
        'crowdRestrictionValue' => 'string',
        'itemIds' => 'string[]',
        'minCost' => 'string',
        'subsidyPercent' => 'string',
        'suitShops' => 'string[]',
        'userWinCount' => 'string',
        'userWinFrequency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cashPoolId' => null,
        'crowdGroupId' => null,
        'crowdRestriction' => null,
        'crowdRestrictionValue' => null,
        'itemIds' => null,
        'minCost' => null,
        'subsidyPercent' => null,
        'suitShops' => null,
        'userWinCount' => null,
        'userWinFrequency' => null
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
        'cashPoolId' => 'cash_pool_id',
        'crowdGroupId' => 'crowd_group_id',
        'crowdRestriction' => 'crowd_restriction',
        'crowdRestrictionValue' => 'crowd_restriction_value',
        'itemIds' => 'item_ids',
        'minCost' => 'min_cost',
        'subsidyPercent' => 'subsidy_percent',
        'suitShops' => 'suit_shops',
        'userWinCount' => 'user_win_count',
        'userWinFrequency' => 'user_win_frequency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cashPoolId' => 'setCashPoolId',
        'crowdGroupId' => 'setCrowdGroupId',
        'crowdRestriction' => 'setCrowdRestriction',
        'crowdRestrictionValue' => 'setCrowdRestrictionValue',
        'itemIds' => 'setItemIds',
        'minCost' => 'setMinCost',
        'subsidyPercent' => 'setSubsidyPercent',
        'suitShops' => 'setSuitShops',
        'userWinCount' => 'setUserWinCount',
        'userWinFrequency' => 'setUserWinFrequency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cashPoolId' => 'getCashPoolId',
        'crowdGroupId' => 'getCrowdGroupId',
        'crowdRestriction' => 'getCrowdRestriction',
        'crowdRestrictionValue' => 'getCrowdRestrictionValue',
        'itemIds' => 'getItemIds',
        'minCost' => 'getMinCost',
        'subsidyPercent' => 'getSubsidyPercent',
        'suitShops' => 'getSuitShops',
        'userWinCount' => 'getUserWinCount',
        'userWinFrequency' => 'getUserWinFrequency'
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
        $this->container['cashPoolId'] = $data['cashPoolId'] ?? null;
        $this->container['crowdGroupId'] = $data['crowdGroupId'] ?? null;
        $this->container['crowdRestriction'] = $data['crowdRestriction'] ?? null;
        $this->container['crowdRestrictionValue'] = $data['crowdRestrictionValue'] ?? null;
        $this->container['itemIds'] = $data['itemIds'] ?? null;
        $this->container['minCost'] = $data['minCost'] ?? null;
        $this->container['subsidyPercent'] = $data['subsidyPercent'] ?? null;
        $this->container['suitShops'] = $data['suitShops'] ?? null;
        $this->container['userWinCount'] = $data['userWinCount'] ?? null;
        $this->container['userWinFrequency'] = $data['userWinFrequency'] ?? null;
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
     * Gets cashPoolId
     *
     * @return string|null
     */
    public function getCashPoolId()
    {
        return $this->container['cashPoolId'];
    }

    /**
     * Sets cashPoolId
     *
     * @param string|null $cashPoolId 资金池ID  （数据来源：需要ISV自己去口碑销售中台创建资金池，拿到对应的资金池ID，此参数仅适用ISV接入口福业务场景时使用，其他场景不需要传递此参数）
     *
     * @return self
     */
    public function setCashPoolId($cashPoolId)
    {
        $this->container['cashPoolId'] = $cashPoolId;

        return $this;
    }

    /**
     * Gets crowdGroupId
     *
     * @return string|null
     */
    public function getCrowdGroupId()
    {
        return $this->container['crowdGroupId'];
    }

    /**
     * Sets crowdGroupId
     *
     * @param string|null $crowdGroupId 人群规则组ID  仅直发奖类型活动设置有效，通过调用营销活动人群组规则创建接口参数返回
     *
     * @return self
     */
    public function setCrowdGroupId($crowdGroupId)
    {
        $this->container['crowdGroupId'] = $crowdGroupId;

        return $this;
    }

    /**
     * Gets crowdRestriction
     *
     * @return string|null
     */
    public function getCrowdRestriction()
    {
        return $this->container['crowdRestriction'];
    }

    /**
     * Sets crowdRestriction
     *
     * @param string|null $crowdRestriction 针对指定人群的约束条件
     *
     * @return self
     */
    public function setCrowdRestriction($crowdRestriction)
    {
        $this->container['crowdRestriction'] = $crowdRestriction;

        return $this;
    }

    /**
     * Gets crowdRestrictionValue
     *
     * @return string|null
     */
    public function getCrowdRestrictionValue()
    {
        return $this->container['crowdRestrictionValue'];
    }

    /**
     * Sets crowdRestrictionValue
     *
     * @param string|null $crowdRestrictionValue 根据crowd_restriction的值不同，设置相应的值，如果crowd_restriction是“MEMBER_CARD”，crowd_restriction_value就是关联会员卡模版ID集合，用逗号拼接
     *
     * @return self
     */
    public function setCrowdRestrictionValue($crowdRestrictionValue)
    {
        $this->container['crowdRestrictionValue'] = $crowdRestrictionValue;

        return $this;
    }

    /**
     * Gets itemIds
     *
     * @return string[]|null
     */
    public function getItemIds()
    {
        return $this->container['itemIds'];
    }

    /**
     * Sets itemIds
     *
     * @param string[]|null $itemIds 单品码列表  仅在创建消费单品送活动时设置，最多设置500个单品码,由商户根据自己的商品管理自定义，一般为国标码
     *
     * @return self
     */
    public function setItemIds($itemIds)
    {
        $this->container['itemIds'] = $itemIds;

        return $this;
    }

    /**
     * Gets minCost
     *
     * @return string|null
     */
    public function getMinCost()
    {
        return $this->container['minCost'];
    }

    /**
     * Sets minCost
     *
     * @param string|null $minCost 最低消费金额，单位元  仅在创建消费送礼包活动时设置
     *
     * @return self
     */
    public function setMinCost($minCost)
    {
        $this->container['minCost'] = $minCost;

        return $this;
    }

    /**
     * Gets subsidyPercent
     *
     * @return string|null
     */
    public function getSubsidyPercent()
    {
        return $this->container['subsidyPercent'];
    }

    /**
     * Sets subsidyPercent
     *
     * @param string|null $subsidyPercent 补贴百分比,95表示 95%，支持两位小数  （参数说明：补贴比例95%，表示ISV出资95%，商户出资5%，此参数仅适用ISV接入口福业务场景时使用，其他场景不需要传递此参数）
     *
     * @return self
     */
    public function setSubsidyPercent($subsidyPercent)
    {
        $this->container['subsidyPercent'] = $subsidyPercent;

        return $this;
    }

    /**
     * Gets suitShops
     *
     * @return string[]|null
     */
    public function getSuitShops()
    {
        return $this->container['suitShops'];
    }

    /**
     * Sets suitShops
     *
     * @param string[]|null $suitShops 活动适用的门店列表  仅品牌商发起的招商活动可为空  最多支持10w家门店
     *
     * @return self
     */
    public function setSuitShops($suitShops)
    {
        $this->container['suitShops'] = $suitShops;

        return $this;
    }

    /**
     * Gets userWinCount
     *
     * @return string|null
     */
    public function getUserWinCount()
    {
        return $this->container['userWinCount'];
    }

    /**
     * Sets userWinCount
     *
     * @param string|null $userWinCount 活动期间用户能够参与的次数限制  如果不设置则不限制参与次数
     *
     * @return self
     */
    public function setUserWinCount($userWinCount)
    {
        $this->container['userWinCount'] = $userWinCount;

        return $this;
    }

    /**
     * Gets userWinFrequency
     *
     * @return string|null
     */
    public function getUserWinFrequency()
    {
        return $this->container['userWinFrequency'];
    }

    /**
     * Sets userWinFrequency
     *
     * @param string|null $userWinFrequency 活动期间用户能够参与的频率限制  如果不设置则不限制参与频率  每日中奖1次: D||1   每周中奖2次: W||2   每月中奖3次: M||3
     *
     * @return self
     */
    public function setUserWinFrequency($userWinFrequency)
    {
        $this->container['userWinFrequency'] = $userWinFrequency;

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


