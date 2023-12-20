<?php
/**
 * AlipayEcoMycarParkingEnterinfoSyncModel
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
 * AlipayEcoMycarParkingEnterinfoSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingEnterinfoSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingEnterinfoSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementQuery' => 'bool',
        'carColor' => 'string',
        'carNumber' => 'string',
        'entranceId' => 'string',
        'freeMinutes' => 'int',
        'inTime' => 'string',
        'isEncryptCarNumber' => 'bool',
        'isvUrl' => 'string',
        'outSerialNo' => 'string',
        'parkingId' => 'string',
        'spaceNumber' => 'string',
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
        'agreementQuery' => null,
        'carColor' => null,
        'carNumber' => null,
        'entranceId' => null,
        'freeMinutes' => null,
        'inTime' => null,
        'isEncryptCarNumber' => null,
        'isvUrl' => null,
        'outSerialNo' => null,
        'parkingId' => null,
        'spaceNumber' => null,
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
        'agreementQuery' => 'agreement_query',
        'carColor' => 'car_color',
        'carNumber' => 'car_number',
        'entranceId' => 'entrance_id',
        'freeMinutes' => 'free_minutes',
        'inTime' => 'in_time',
        'isEncryptCarNumber' => 'is_encrypt_car_number',
        'isvUrl' => 'isv_url',
        'outSerialNo' => 'out_serial_no',
        'parkingId' => 'parking_id',
        'spaceNumber' => 'space_number',
        'storeId' => 'store_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementQuery' => 'setAgreementQuery',
        'carColor' => 'setCarColor',
        'carNumber' => 'setCarNumber',
        'entranceId' => 'setEntranceId',
        'freeMinutes' => 'setFreeMinutes',
        'inTime' => 'setInTime',
        'isEncryptCarNumber' => 'setIsEncryptCarNumber',
        'isvUrl' => 'setIsvUrl',
        'outSerialNo' => 'setOutSerialNo',
        'parkingId' => 'setParkingId',
        'spaceNumber' => 'setSpaceNumber',
        'storeId' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementQuery' => 'getAgreementQuery',
        'carColor' => 'getCarColor',
        'carNumber' => 'getCarNumber',
        'entranceId' => 'getEntranceId',
        'freeMinutes' => 'getFreeMinutes',
        'inTime' => 'getInTime',
        'isEncryptCarNumber' => 'getIsEncryptCarNumber',
        'isvUrl' => 'getIsvUrl',
        'outSerialNo' => 'getOutSerialNo',
        'parkingId' => 'getParkingId',
        'spaceNumber' => 'getSpaceNumber',
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
        $this->container['agreementQuery'] = $data['agreementQuery'] ?? null;
        $this->container['carColor'] = $data['carColor'] ?? null;
        $this->container['carNumber'] = $data['carNumber'] ?? null;
        $this->container['entranceId'] = $data['entranceId'] ?? null;
        $this->container['freeMinutes'] = $data['freeMinutes'] ?? null;
        $this->container['inTime'] = $data['inTime'] ?? null;
        $this->container['isEncryptCarNumber'] = $data['isEncryptCarNumber'] ?? null;
        $this->container['isvUrl'] = $data['isvUrl'] ?? null;
        $this->container['outSerialNo'] = $data['outSerialNo'] ?? null;
        $this->container['parkingId'] = $data['parkingId'] ?? null;
        $this->container['spaceNumber'] = $data['spaceNumber'] ?? null;
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
     * Gets agreementQuery
     *
     * @return bool|null
     */
    public function getAgreementQuery()
    {
        return $this->container['agreementQuery'];
    }

    /**
     * Sets agreementQuery
     *
     * @param bool|null $agreementQuery 是否启用车牌代扣状态查询功能，true为启用，false为停用
     *
     * @return self
     */
    public function setAgreementQuery($agreementQuery)
    {
        $this->container['agreementQuery'] = $agreementQuery;

        return $this;
    }

    /**
     * Gets carColor
     *
     * @return string|null
     */
    public function getCarColor()
    {
        return $this->container['carColor'];
    }

    /**
     * Sets carColor
     *
     * @param string|null $carColor 车牌颜色，车牌颜色，枚举支持： *BLUE：蓝。 *GREEN：绿。 *YELLOW：黄。 *WHITE：白。 *BLACK：黑。 *LIMEGREEN：黄绿色。
     *
     * @return self
     */
    public function setCarColor($carColor)
    {
        $this->container['carColor'] = $carColor;

        return $this;
    }

    /**
     * Gets carNumber
     *
     * @return string|null
     */
    public function getCarNumber()
    {
        return $this->container['carNumber'];
    }

    /**
     * Sets carNumber
     *
     * @param string|null $carNumber 车牌号
     *
     * @return self
     */
    public function setCarNumber($carNumber)
    {
        $this->container['carNumber'] = $carNumber;

        return $this;
    }

    /**
     * Gets entranceId
     *
     * @return string|null
     */
    public function getEntranceId()
    {
        return $this->container['entranceId'];
    }

    /**
     * Sets entranceId
     *
     * @param string|null $entranceId 用于识别车辆进口，多出入口车场适用
     *
     * @return self
     */
    public function setEntranceId($entranceId)
    {
        $this->container['entranceId'] = $entranceId;

        return $this;
    }

    /**
     * Gets freeMinutes
     *
     * @return int|null
     */
    public function getFreeMinutes()
    {
        return $this->container['freeMinutes'];
    }

    /**
     * Sets freeMinutes
     *
     * @param int|null $freeMinutes 当前停车场的入场免费时长分钟数
     *
     * @return self
     */
    public function setFreeMinutes($freeMinutes)
    {
        $this->container['freeMinutes'] = $freeMinutes;

        return $this;
    }

    /**
     * Gets inTime
     *
     * @return string|null
     */
    public function getInTime()
    {
        return $this->container['inTime'];
    }

    /**
     * Sets inTime
     *
     * @param string|null $inTime 车辆入场的时间，格式\"YYYY-MM-DD HH:mm:ss\"，24小时制，请保证服务器时间准确，入场时间不应晚于当前网络时间
     *
     * @return self
     */
    public function setInTime($inTime)
    {
        $this->container['inTime'] = $inTime;

        return $this;
    }

    /**
     * Gets isEncryptCarNumber
     *
     * @return bool|null
     */
    public function getIsEncryptCarNumber()
    {
        return $this->container['isEncryptCarNumber'];
    }

    /**
     * Sets isEncryptCarNumber
     *
     * @param bool|null $isEncryptCarNumber 是否加密，默认为false
     *
     * @return self
     */
    public function setIsEncryptCarNumber($isEncryptCarNumber)
    {
        $this->container['isEncryptCarNumber'] = $isEncryptCarNumber;

        return $this;
    }

    /**
     * Gets isvUrl
     *
     * @return string|null
     */
    public function getIsvUrl()
    {
        return $this->container['isvUrl'];
    }

    /**
     * Sets isvUrl
     *
     * @param string|null $isvUrl 智能助理当前的跳转链接。为ISV/<a href=\"https://opendocs.alipay.com/support/01rb18\">商家小程序scheme地址</a>或H5页面地址。
     *
     * @return self
     */
    public function setIsvUrl($isvUrl)
    {
        $this->container['isvUrl'] = $isvUrl;

        return $this;
    }

    /**
     * Gets outSerialNo
     *
     * @return string|null
     */
    public function getOutSerialNo()
    {
        return $this->container['outSerialNo'];
    }

    /**
     * Sets outSerialNo
     *
     * @param string|null $outSerialNo 外部停车流水号(用于串通进场与出场信息)
     *
     * @return self
     */
    public function setOutSerialNo($outSerialNo)
    {
        $this->container['outSerialNo'] = $outSerialNo;

        return $this;
    }

    /**
     * Gets parkingId
     *
     * @return string|null
     */
    public function getParkingId()
    {
        return $this->container['parkingId'];
    }

    /**
     * Sets parkingId
     *
     * @param string|null $parkingId 支付宝停车平台ID，由支付宝定义的该停车场标识，同一个isv或商户范围内唯一。通过 <a href=\"https://opendocs.alipay.com/apis/api_19/alipay.eco.mycar.parking.parkinglotinfo.create\">alipay.eco.mycar.parking.parkinglotinfo.create</a>(录入停车场信息)接口获取。
     *
     * @return self
     */
    public function setParkingId($parkingId)
    {
        $this->container['parkingId'] = $parkingId;

        return $this;
    }

    /**
     * Gets spaceNumber
     *
     * @return string|null
     */
    public function getSpaceNumber()
    {
        return $this->container['spaceNumber'];
    }

    /**
     * Sets spaceNumber
     *
     * @param string|null $spaceNumber 用于标识车辆停放车位编号，路侧适用
     *
     * @return self
     */
    public function setSpaceNumber($spaceNumber)
    {
        $this->container['spaceNumber'] = $spaceNumber;

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
     * @param string|null $storeId 与parking_id对应的外部停车场编号，在门店中维护
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


