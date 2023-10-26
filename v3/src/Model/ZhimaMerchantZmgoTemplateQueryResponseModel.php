<?php
/**
 * ZhimaMerchantZmgoTemplateQueryResponseModel
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
 * ZhimaMerchantZmgoTemplateQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaMerchantZmgoTemplateQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaMerchantZmgoTemplateQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'basicConfig' => '\Alipay\OpenAPISDK\Model\ZMGOBasicConfig',
        'extConfig' => '\Alipay\OpenAPISDK\Model\ZMGOExtConfig',
        'obligationConfig' => '\Alipay\OpenAPISDK\Model\ZMGOObligationConfig',
        'openConfig' => '\Alipay\OpenAPISDK\Model\ZMGOOpenConfig',
        'quitConfig' => '\Alipay\OpenAPISDK\Model\ZMGOQuitConfig',
        'rightConfig' => '\Alipay\OpenAPISDK\Model\ZMGORightConfig',
        'settlementConfig' => '\Alipay\OpenAPISDK\Model\ZMGOSettlementConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'basicConfig' => null,
        'extConfig' => null,
        'obligationConfig' => null,
        'openConfig' => null,
        'quitConfig' => null,
        'rightConfig' => null,
        'settlementConfig' => null
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
        'basicConfig' => 'basic_config',
        'extConfig' => 'ext_config',
        'obligationConfig' => 'obligation_config',
        'openConfig' => 'open_config',
        'quitConfig' => 'quit_config',
        'rightConfig' => 'right_config',
        'settlementConfig' => 'settlement_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basicConfig' => 'setBasicConfig',
        'extConfig' => 'setExtConfig',
        'obligationConfig' => 'setObligationConfig',
        'openConfig' => 'setOpenConfig',
        'quitConfig' => 'setQuitConfig',
        'rightConfig' => 'setRightConfig',
        'settlementConfig' => 'setSettlementConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basicConfig' => 'getBasicConfig',
        'extConfig' => 'getExtConfig',
        'obligationConfig' => 'getObligationConfig',
        'openConfig' => 'getOpenConfig',
        'quitConfig' => 'getQuitConfig',
        'rightConfig' => 'getRightConfig',
        'settlementConfig' => 'getSettlementConfig'
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
        $this->container['basicConfig'] = $data['basicConfig'] ?? null;
        $this->container['extConfig'] = $data['extConfig'] ?? null;
        $this->container['obligationConfig'] = $data['obligationConfig'] ?? null;
        $this->container['openConfig'] = $data['openConfig'] ?? null;
        $this->container['quitConfig'] = $data['quitConfig'] ?? null;
        $this->container['rightConfig'] = $data['rightConfig'] ?? null;
        $this->container['settlementConfig'] = $data['settlementConfig'] ?? null;
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
     * Gets basicConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOBasicConfig|null
     */
    public function getBasicConfig()
    {
        return $this->container['basicConfig'];
    }

    /**
     * Sets basicConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOBasicConfig|null $basicConfig basicConfig
     *
     * @return self
     */
    public function setBasicConfig($basicConfig)
    {
        $this->container['basicConfig'] = $basicConfig;

        return $this;
    }

    /**
     * Gets extConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOExtConfig|null
     */
    public function getExtConfig()
    {
        return $this->container['extConfig'];
    }

    /**
     * Sets extConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOExtConfig|null $extConfig extConfig
     *
     * @return self
     */
    public function setExtConfig($extConfig)
    {
        $this->container['extConfig'] = $extConfig;

        return $this;
    }

    /**
     * Gets obligationConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOObligationConfig|null
     */
    public function getObligationConfig()
    {
        return $this->container['obligationConfig'];
    }

    /**
     * Sets obligationConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOObligationConfig|null $obligationConfig obligationConfig
     *
     * @return self
     */
    public function setObligationConfig($obligationConfig)
    {
        $this->container['obligationConfig'] = $obligationConfig;

        return $this;
    }

    /**
     * Gets openConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOOpenConfig|null
     */
    public function getOpenConfig()
    {
        return $this->container['openConfig'];
    }

    /**
     * Sets openConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOOpenConfig|null $openConfig openConfig
     *
     * @return self
     */
    public function setOpenConfig($openConfig)
    {
        $this->container['openConfig'] = $openConfig;

        return $this;
    }

    /**
     * Gets quitConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOQuitConfig|null
     */
    public function getQuitConfig()
    {
        return $this->container['quitConfig'];
    }

    /**
     * Sets quitConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOQuitConfig|null $quitConfig quitConfig
     *
     * @return self
     */
    public function setQuitConfig($quitConfig)
    {
        $this->container['quitConfig'] = $quitConfig;

        return $this;
    }

    /**
     * Gets rightConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGORightConfig|null
     */
    public function getRightConfig()
    {
        return $this->container['rightConfig'];
    }

    /**
     * Sets rightConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGORightConfig|null $rightConfig rightConfig
     *
     * @return self
     */
    public function setRightConfig($rightConfig)
    {
        $this->container['rightConfig'] = $rightConfig;

        return $this;
    }

    /**
     * Gets settlementConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOSettlementConfig|null
     */
    public function getSettlementConfig()
    {
        return $this->container['settlementConfig'];
    }

    /**
     * Sets settlementConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOSettlementConfig|null $settlementConfig settlementConfig
     *
     * @return self
     */
    public function setSettlementConfig($settlementConfig)
    {
        $this->container['settlementConfig'] = $settlementConfig;

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


