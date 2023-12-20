<?php
/**
 * AlipayCommerceTransportChargerChargerbindinfoSyncModel
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
 * AlipayCommerceTransportChargerChargerbindinfoSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceTransportChargerChargerbindinfoSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceTransportChargerChargerbindinfoSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bindQrcode' => 'string',
        'bindStatus' => 'string',
        'bindTime' => 'string',
        'connectorType' => 'string',
        'currentOutputType' => 'string',
        'equipId' => 'string',
        'equipImei' => 'string',
        'equipName' => 'string',
        'equipSn' => 'string',
        'equipStatus' => 'string',
        'equipTypeNo' => 'string',
        'operatorId' => 'string',
        'operatorUid' => 'string',
        'ratedCurrent' => 'string',
        'ratedPower' => 'string',
        'ratedVoltage' => 'string',
        'unbindTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bindQrcode' => null,
        'bindStatus' => null,
        'bindTime' => null,
        'connectorType' => null,
        'currentOutputType' => null,
        'equipId' => null,
        'equipImei' => null,
        'equipName' => null,
        'equipSn' => null,
        'equipStatus' => null,
        'equipTypeNo' => null,
        'operatorId' => null,
        'operatorUid' => null,
        'ratedCurrent' => null,
        'ratedPower' => null,
        'ratedVoltage' => null,
        'unbindTime' => null
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
        'bindQrcode' => 'bind_qrcode',
        'bindStatus' => 'bind_status',
        'bindTime' => 'bind_time',
        'connectorType' => 'connector_type',
        'currentOutputType' => 'current_output_type',
        'equipId' => 'equip_id',
        'equipImei' => 'equip_imei',
        'equipName' => 'equip_name',
        'equipSn' => 'equip_sn',
        'equipStatus' => 'equip_status',
        'equipTypeNo' => 'equip_type_no',
        'operatorId' => 'operator_id',
        'operatorUid' => 'operator_uid',
        'ratedCurrent' => 'rated_current',
        'ratedPower' => 'rated_power',
        'ratedVoltage' => 'rated_voltage',
        'unbindTime' => 'unbind_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bindQrcode' => 'setBindQrcode',
        'bindStatus' => 'setBindStatus',
        'bindTime' => 'setBindTime',
        'connectorType' => 'setConnectorType',
        'currentOutputType' => 'setCurrentOutputType',
        'equipId' => 'setEquipId',
        'equipImei' => 'setEquipImei',
        'equipName' => 'setEquipName',
        'equipSn' => 'setEquipSn',
        'equipStatus' => 'setEquipStatus',
        'equipTypeNo' => 'setEquipTypeNo',
        'operatorId' => 'setOperatorId',
        'operatorUid' => 'setOperatorUid',
        'ratedCurrent' => 'setRatedCurrent',
        'ratedPower' => 'setRatedPower',
        'ratedVoltage' => 'setRatedVoltage',
        'unbindTime' => 'setUnbindTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bindQrcode' => 'getBindQrcode',
        'bindStatus' => 'getBindStatus',
        'bindTime' => 'getBindTime',
        'connectorType' => 'getConnectorType',
        'currentOutputType' => 'getCurrentOutputType',
        'equipId' => 'getEquipId',
        'equipImei' => 'getEquipImei',
        'equipName' => 'getEquipName',
        'equipSn' => 'getEquipSn',
        'equipStatus' => 'getEquipStatus',
        'equipTypeNo' => 'getEquipTypeNo',
        'operatorId' => 'getOperatorId',
        'operatorUid' => 'getOperatorUid',
        'ratedCurrent' => 'getRatedCurrent',
        'ratedPower' => 'getRatedPower',
        'ratedVoltage' => 'getRatedVoltage',
        'unbindTime' => 'getUnbindTime'
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
        $this->container['bindQrcode'] = $data['bindQrcode'] ?? null;
        $this->container['bindStatus'] = $data['bindStatus'] ?? null;
        $this->container['bindTime'] = $data['bindTime'] ?? null;
        $this->container['connectorType'] = $data['connectorType'] ?? null;
        $this->container['currentOutputType'] = $data['currentOutputType'] ?? null;
        $this->container['equipId'] = $data['equipId'] ?? null;
        $this->container['equipImei'] = $data['equipImei'] ?? null;
        $this->container['equipName'] = $data['equipName'] ?? null;
        $this->container['equipSn'] = $data['equipSn'] ?? null;
        $this->container['equipStatus'] = $data['equipStatus'] ?? null;
        $this->container['equipTypeNo'] = $data['equipTypeNo'] ?? null;
        $this->container['operatorId'] = $data['operatorId'] ?? null;
        $this->container['operatorUid'] = $data['operatorUid'] ?? null;
        $this->container['ratedCurrent'] = $data['ratedCurrent'] ?? null;
        $this->container['ratedPower'] = $data['ratedPower'] ?? null;
        $this->container['ratedVoltage'] = $data['ratedVoltage'] ?? null;
        $this->container['unbindTime'] = $data['unbindTime'] ?? null;
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
     * Gets bindQrcode
     *
     * @return string|null
     */
    public function getBindQrcode()
    {
        return $this->container['bindQrcode'];
    }

    /**
     * Sets bindQrcode
     *
     * @param string|null $bindQrcode 绑定充电桩二维码值，用户扫码绑桩扫描的二维码
     *
     * @return self
     */
    public function setBindQrcode($bindQrcode)
    {
        $this->container['bindQrcode'] = $bindQrcode;

        return $this;
    }

    /**
     * Gets bindStatus
     *
     * @return string|null
     */
    public function getBindStatus()
    {
        return $this->container['bindStatus'];
    }

    /**
     * Sets bindStatus
     *
     * @param string|null $bindStatus 绑定状态 1:绑定; 2:解绑;  0:未知
     *
     * @return self
     */
    public function setBindStatus($bindStatus)
    {
        $this->container['bindStatus'] = $bindStatus;

        return $this;
    }

    /**
     * Gets bindTime
     *
     * @return string|null
     */
    public function getBindTime()
    {
        return $this->container['bindTime'];
    }

    /**
     * Sets bindTime
     *
     * @param string|null $bindTime 绑定时间，绑定成功必传
     *
     * @return self
     */
    public function setBindTime($bindTime)
    {
        $this->container['bindTime'] = $bindTime;

        return $this;
    }

    /**
     * Gets connectorType
     *
     * @return string|null
     */
    public function getConnectorType()
    {
        return $this->container['connectorType'];
    }

    /**
     * Sets connectorType
     *
     * @param string|null $connectorType 1：家用插座 2、交流接口插座 3：交流接口插头 4、直流接口枪头 5、无线充电座 6、其他
     *
     * @return self
     */
    public function setConnectorType($connectorType)
    {
        $this->container['connectorType'] = $connectorType;

        return $this;
    }

    /**
     * Gets currentOutputType
     *
     * @return string|null
     */
    public function getCurrentOutputType()
    {
        return $this->container['currentOutputType'];
    }

    /**
     * Sets currentOutputType
     *
     * @param string|null $currentOutputType 1：国标 2：欧标 3：美标 4：日标 5：其他
     *
     * @return self
     */
    public function setCurrentOutputType($currentOutputType)
    {
        $this->container['currentOutputType'] = $currentOutputType;

        return $this;
    }

    /**
     * Gets equipId
     *
     * @return string|null
     */
    public function getEquipId()
    {
        return $this->container['equipId'];
    }

    /**
     * Sets equipId
     *
     * @param string|null $equipId 设备编号
     *
     * @return self
     */
    public function setEquipId($equipId)
    {
        $this->container['equipId'] = $equipId;

        return $this;
    }

    /**
     * Gets equipImei
     *
     * @return string|null
     */
    public function getEquipImei()
    {
        return $this->container['equipImei'];
    }

    /**
     * Sets equipImei
     *
     * @param string|null $equipImei 设备IMEI号
     *
     * @return self
     */
    public function setEquipImei($equipImei)
    {
        $this->container['equipImei'] = $equipImei;

        return $this;
    }

    /**
     * Gets equipName
     *
     * @return string|null
     */
    public function getEquipName()
    {
        return $this->container['equipName'];
    }

    /**
     * Sets equipName
     *
     * @param string|null $equipName 设备名称，对用户展示，可以是设备名称，也可以是设备SN号，设备编号
     *
     * @return self
     */
    public function setEquipName($equipName)
    {
        $this->container['equipName'] = $equipName;

        return $this;
    }

    /**
     * Gets equipSn
     *
     * @return string|null
     */
    public function getEquipSn()
    {
        return $this->container['equipSn'];
    }

    /**
     * Sets equipSn
     *
     * @param string|null $equipSn 设备SN号
     *
     * @return self
     */
    public function setEquipSn($equipSn)
    {
        $this->container['equipSn'] = $equipSn;

        return $this;
    }

    /**
     * Gets equipStatus
     *
     * @return string|null
     */
    public function getEquipStatus()
    {
        return $this->container['equipStatus'];
    }

    /**
     * Sets equipStatus
     *
     * @param string|null $equipStatus 设备状态，遵循中电联协议的设备状态。0：离网;1：空闲;2：占用未充电;3：占用充电中;4：占用（预约锁定）;255：故障
     *
     * @return self
     */
    public function setEquipStatus($equipStatus)
    {
        $this->container['equipStatus'] = $equipStatus;

        return $this;
    }

    /**
     * Gets equipTypeNo
     *
     * @return string|null
     */
    public function getEquipTypeNo()
    {
        return $this->container['equipTypeNo'];
    }

    /**
     * Sets equipTypeNo
     *
     * @param string|null $equipTypeNo 设备型号
     *
     * @return self
     */
    public function setEquipTypeNo($equipTypeNo)
    {
        $this->container['equipTypeNo'] = $equipTypeNo;

        return $this;
    }

    /**
     * Gets operatorId
     *
     * @return string|null
     */
    public function getOperatorId()
    {
        return $this->container['operatorId'];
    }

    /**
     * Sets operatorId
     *
     * @param string|null $operatorId 运营商编码，一般为企业组织机构代码
     *
     * @return self
     */
    public function setOperatorId($operatorId)
    {
        $this->container['operatorId'] = $operatorId;

        return $this;
    }

    /**
     * Gets operatorUid
     *
     * @return string|null
     */
    public function getOperatorUid()
    {
        return $this->container['operatorUid'];
    }

    /**
     * Sets operatorUid
     *
     * @param string|null $operatorUid 商户内部唯一标识用户的用户标识
     *
     * @return self
     */
    public function setOperatorUid($operatorUid)
    {
        $this->container['operatorUid'] = $operatorUid;

        return $this;
    }

    /**
     * Gets ratedCurrent
     *
     * @return string|null
     */
    public function getRatedCurrent()
    {
        return $this->container['ratedCurrent'];
    }

    /**
     * Sets ratedCurrent
     *
     * @param string|null $ratedCurrent 额定电流,单位：A
     *
     * @return self
     */
    public function setRatedCurrent($ratedCurrent)
    {
        $this->container['ratedCurrent'] = $ratedCurrent;

        return $this;
    }

    /**
     * Gets ratedPower
     *
     * @return string|null
     */
    public function getRatedPower()
    {
        return $this->container['ratedPower'];
    }

    /**
     * Sets ratedPower
     *
     * @param string|null $ratedPower 额定功率，单位：kW
     *
     * @return self
     */
    public function setRatedPower($ratedPower)
    {
        $this->container['ratedPower'] = $ratedPower;

        return $this;
    }

    /**
     * Gets ratedVoltage
     *
     * @return string|null
     */
    public function getRatedVoltage()
    {
        return $this->container['ratedVoltage'];
    }

    /**
     * Sets ratedVoltage
     *
     * @param string|null $ratedVoltage 额定电压，单位：V
     *
     * @return self
     */
    public function setRatedVoltage($ratedVoltage)
    {
        $this->container['ratedVoltage'] = $ratedVoltage;

        return $this;
    }

    /**
     * Gets unbindTime
     *
     * @return string|null
     */
    public function getUnbindTime()
    {
        return $this->container['unbindTime'];
    }

    /**
     * Sets unbindTime
     *
     * @param string|null $unbindTime 解绑时间，解绑必传
     *
     * @return self
     */
    public function setUnbindTime($unbindTime)
    {
        $this->container['unbindTime'] = $unbindTime;

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


