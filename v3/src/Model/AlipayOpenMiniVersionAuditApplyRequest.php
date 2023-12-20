<?php
/**
 * AlipayOpenMiniVersionAuditApplyRequest
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
 * AlipayOpenMiniVersionAuditApplyRequest Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniVersionAuditApplyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_open_mini_version_audit_apply_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appLogo' => '\SplFileObject',
        'data' => '\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel',
        'fifthLicensePic' => '\SplFileObject',
        'fifthScreenShot' => '\SplFileObject',
        'firstLicensePic' => '\SplFileObject',
        'firstScreenShot' => '\SplFileObject',
        'firstSpecialLicensePic' => '\SplFileObject',
        'fourthLicensePic' => '\SplFileObject',
        'fourthScreenShot' => '\SplFileObject',
        'outDoorPic' => '\SplFileObject',
        'secondLicensePic' => '\SplFileObject',
        'secondScreenShot' => '\SplFileObject',
        'secondSpecialLicensePic' => '\SplFileObject',
        'testFileName' => '\SplFileObject',
        'thirdLicensePic' => '\SplFileObject',
        'thirdScreenShot' => '\SplFileObject',
        'thirdSpecialLicensePic' => '\SplFileObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appLogo' => 'binary',
        'data' => null,
        'fifthLicensePic' => 'binary',
        'fifthScreenShot' => 'binary',
        'firstLicensePic' => 'binary',
        'firstScreenShot' => 'binary',
        'firstSpecialLicensePic' => 'binary',
        'fourthLicensePic' => 'binary',
        'fourthScreenShot' => 'binary',
        'outDoorPic' => 'binary',
        'secondLicensePic' => 'binary',
        'secondScreenShot' => 'binary',
        'secondSpecialLicensePic' => 'binary',
        'testFileName' => 'binary',
        'thirdLicensePic' => 'binary',
        'thirdScreenShot' => 'binary',
        'thirdSpecialLicensePic' => 'binary'
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
        'appLogo' => 'app_logo',
        'data' => 'data',
        'fifthLicensePic' => 'fifth_license_pic',
        'fifthScreenShot' => 'fifth_screen_shot',
        'firstLicensePic' => 'first_license_pic',
        'firstScreenShot' => 'first_screen_shot',
        'firstSpecialLicensePic' => 'first_special_license_pic',
        'fourthLicensePic' => 'fourth_license_pic',
        'fourthScreenShot' => 'fourth_screen_shot',
        'outDoorPic' => 'out_door_pic',
        'secondLicensePic' => 'second_license_pic',
        'secondScreenShot' => 'second_screen_shot',
        'secondSpecialLicensePic' => 'second_special_license_pic',
        'testFileName' => 'test_file_name',
        'thirdLicensePic' => 'third_license_pic',
        'thirdScreenShot' => 'third_screen_shot',
        'thirdSpecialLicensePic' => 'third_special_license_pic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appLogo' => 'setAppLogo',
        'data' => 'setData',
        'fifthLicensePic' => 'setFifthLicensePic',
        'fifthScreenShot' => 'setFifthScreenShot',
        'firstLicensePic' => 'setFirstLicensePic',
        'firstScreenShot' => 'setFirstScreenShot',
        'firstSpecialLicensePic' => 'setFirstSpecialLicensePic',
        'fourthLicensePic' => 'setFourthLicensePic',
        'fourthScreenShot' => 'setFourthScreenShot',
        'outDoorPic' => 'setOutDoorPic',
        'secondLicensePic' => 'setSecondLicensePic',
        'secondScreenShot' => 'setSecondScreenShot',
        'secondSpecialLicensePic' => 'setSecondSpecialLicensePic',
        'testFileName' => 'setTestFileName',
        'thirdLicensePic' => 'setThirdLicensePic',
        'thirdScreenShot' => 'setThirdScreenShot',
        'thirdSpecialLicensePic' => 'setThirdSpecialLicensePic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appLogo' => 'getAppLogo',
        'data' => 'getData',
        'fifthLicensePic' => 'getFifthLicensePic',
        'fifthScreenShot' => 'getFifthScreenShot',
        'firstLicensePic' => 'getFirstLicensePic',
        'firstScreenShot' => 'getFirstScreenShot',
        'firstSpecialLicensePic' => 'getFirstSpecialLicensePic',
        'fourthLicensePic' => 'getFourthLicensePic',
        'fourthScreenShot' => 'getFourthScreenShot',
        'outDoorPic' => 'getOutDoorPic',
        'secondLicensePic' => 'getSecondLicensePic',
        'secondScreenShot' => 'getSecondScreenShot',
        'secondSpecialLicensePic' => 'getSecondSpecialLicensePic',
        'testFileName' => 'getTestFileName',
        'thirdLicensePic' => 'getThirdLicensePic',
        'thirdScreenShot' => 'getThirdScreenShot',
        'thirdSpecialLicensePic' => 'getThirdSpecialLicensePic'
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
        $this->container['appLogo'] = $data['appLogo'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['fifthLicensePic'] = $data['fifthLicensePic'] ?? null;
        $this->container['fifthScreenShot'] = $data['fifthScreenShot'] ?? null;
        $this->container['firstLicensePic'] = $data['firstLicensePic'] ?? null;
        $this->container['firstScreenShot'] = $data['firstScreenShot'] ?? null;
        $this->container['firstSpecialLicensePic'] = $data['firstSpecialLicensePic'] ?? null;
        $this->container['fourthLicensePic'] = $data['fourthLicensePic'] ?? null;
        $this->container['fourthScreenShot'] = $data['fourthScreenShot'] ?? null;
        $this->container['outDoorPic'] = $data['outDoorPic'] ?? null;
        $this->container['secondLicensePic'] = $data['secondLicensePic'] ?? null;
        $this->container['secondScreenShot'] = $data['secondScreenShot'] ?? null;
        $this->container['secondSpecialLicensePic'] = $data['secondSpecialLicensePic'] ?? null;
        $this->container['testFileName'] = $data['testFileName'] ?? null;
        $this->container['thirdLicensePic'] = $data['thirdLicensePic'] ?? null;
        $this->container['thirdScreenShot'] = $data['thirdScreenShot'] ?? null;
        $this->container['thirdSpecialLicensePic'] = $data['thirdSpecialLicensePic'] ?? null;
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
     * Gets appLogo
     *
     * @return \SplFileObject|null
     */
    public function getAppLogo()
    {
        return $this->container['appLogo'];
    }

    /**
     * Sets appLogo
     *
     * @param \SplFileObject|null $appLogo appLogo
     *
     * @return self
     */
    public function setAppLogo($appLogo)
    {
        $this->container['appLogo'] = $appLogo;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionAuditApplyModel|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets fifthLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getFifthLicensePic()
    {
        return $this->container['fifthLicensePic'];
    }

    /**
     * Sets fifthLicensePic
     *
     * @param \SplFileObject|null $fifthLicensePic fifthLicensePic
     *
     * @return self
     */
    public function setFifthLicensePic($fifthLicensePic)
    {
        $this->container['fifthLicensePic'] = $fifthLicensePic;

        return $this;
    }

    /**
     * Gets fifthScreenShot
     *
     * @return \SplFileObject|null
     */
    public function getFifthScreenShot()
    {
        return $this->container['fifthScreenShot'];
    }

    /**
     * Sets fifthScreenShot
     *
     * @param \SplFileObject|null $fifthScreenShot fifthScreenShot
     *
     * @return self
     */
    public function setFifthScreenShot($fifthScreenShot)
    {
        $this->container['fifthScreenShot'] = $fifthScreenShot;

        return $this;
    }

    /**
     * Gets firstLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getFirstLicensePic()
    {
        return $this->container['firstLicensePic'];
    }

    /**
     * Sets firstLicensePic
     *
     * @param \SplFileObject|null $firstLicensePic firstLicensePic
     *
     * @return self
     */
    public function setFirstLicensePic($firstLicensePic)
    {
        $this->container['firstLicensePic'] = $firstLicensePic;

        return $this;
    }

    /**
     * Gets firstScreenShot
     *
     * @return \SplFileObject|null
     */
    public function getFirstScreenShot()
    {
        return $this->container['firstScreenShot'];
    }

    /**
     * Sets firstScreenShot
     *
     * @param \SplFileObject|null $firstScreenShot firstScreenShot
     *
     * @return self
     */
    public function setFirstScreenShot($firstScreenShot)
    {
        $this->container['firstScreenShot'] = $firstScreenShot;

        return $this;
    }

    /**
     * Gets firstSpecialLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getFirstSpecialLicensePic()
    {
        return $this->container['firstSpecialLicensePic'];
    }

    /**
     * Sets firstSpecialLicensePic
     *
     * @param \SplFileObject|null $firstSpecialLicensePic firstSpecialLicensePic
     *
     * @return self
     */
    public function setFirstSpecialLicensePic($firstSpecialLicensePic)
    {
        $this->container['firstSpecialLicensePic'] = $firstSpecialLicensePic;

        return $this;
    }

    /**
     * Gets fourthLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getFourthLicensePic()
    {
        return $this->container['fourthLicensePic'];
    }

    /**
     * Sets fourthLicensePic
     *
     * @param \SplFileObject|null $fourthLicensePic fourthLicensePic
     *
     * @return self
     */
    public function setFourthLicensePic($fourthLicensePic)
    {
        $this->container['fourthLicensePic'] = $fourthLicensePic;

        return $this;
    }

    /**
     * Gets fourthScreenShot
     *
     * @return \SplFileObject|null
     */
    public function getFourthScreenShot()
    {
        return $this->container['fourthScreenShot'];
    }

    /**
     * Sets fourthScreenShot
     *
     * @param \SplFileObject|null $fourthScreenShot fourthScreenShot
     *
     * @return self
     */
    public function setFourthScreenShot($fourthScreenShot)
    {
        $this->container['fourthScreenShot'] = $fourthScreenShot;

        return $this;
    }

    /**
     * Gets outDoorPic
     *
     * @return \SplFileObject|null
     */
    public function getOutDoorPic()
    {
        return $this->container['outDoorPic'];
    }

    /**
     * Sets outDoorPic
     *
     * @param \SplFileObject|null $outDoorPic outDoorPic
     *
     * @return self
     */
    public function setOutDoorPic($outDoorPic)
    {
        $this->container['outDoorPic'] = $outDoorPic;

        return $this;
    }

    /**
     * Gets secondLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getSecondLicensePic()
    {
        return $this->container['secondLicensePic'];
    }

    /**
     * Sets secondLicensePic
     *
     * @param \SplFileObject|null $secondLicensePic secondLicensePic
     *
     * @return self
     */
    public function setSecondLicensePic($secondLicensePic)
    {
        $this->container['secondLicensePic'] = $secondLicensePic;

        return $this;
    }

    /**
     * Gets secondScreenShot
     *
     * @return \SplFileObject|null
     */
    public function getSecondScreenShot()
    {
        return $this->container['secondScreenShot'];
    }

    /**
     * Sets secondScreenShot
     *
     * @param \SplFileObject|null $secondScreenShot secondScreenShot
     *
     * @return self
     */
    public function setSecondScreenShot($secondScreenShot)
    {
        $this->container['secondScreenShot'] = $secondScreenShot;

        return $this;
    }

    /**
     * Gets secondSpecialLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getSecondSpecialLicensePic()
    {
        return $this->container['secondSpecialLicensePic'];
    }

    /**
     * Sets secondSpecialLicensePic
     *
     * @param \SplFileObject|null $secondSpecialLicensePic secondSpecialLicensePic
     *
     * @return self
     */
    public function setSecondSpecialLicensePic($secondSpecialLicensePic)
    {
        $this->container['secondSpecialLicensePic'] = $secondSpecialLicensePic;

        return $this;
    }

    /**
     * Gets testFileName
     *
     * @return \SplFileObject|null
     */
    public function getTestFileName()
    {
        return $this->container['testFileName'];
    }

    /**
     * Sets testFileName
     *
     * @param \SplFileObject|null $testFileName testFileName
     *
     * @return self
     */
    public function setTestFileName($testFileName)
    {
        $this->container['testFileName'] = $testFileName;

        return $this;
    }

    /**
     * Gets thirdLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getThirdLicensePic()
    {
        return $this->container['thirdLicensePic'];
    }

    /**
     * Sets thirdLicensePic
     *
     * @param \SplFileObject|null $thirdLicensePic thirdLicensePic
     *
     * @return self
     */
    public function setThirdLicensePic($thirdLicensePic)
    {
        $this->container['thirdLicensePic'] = $thirdLicensePic;

        return $this;
    }

    /**
     * Gets thirdScreenShot
     *
     * @return \SplFileObject|null
     */
    public function getThirdScreenShot()
    {
        return $this->container['thirdScreenShot'];
    }

    /**
     * Sets thirdScreenShot
     *
     * @param \SplFileObject|null $thirdScreenShot thirdScreenShot
     *
     * @return self
     */
    public function setThirdScreenShot($thirdScreenShot)
    {
        $this->container['thirdScreenShot'] = $thirdScreenShot;

        return $this;
    }

    /**
     * Gets thirdSpecialLicensePic
     *
     * @return \SplFileObject|null
     */
    public function getThirdSpecialLicensePic()
    {
        return $this->container['thirdSpecialLicensePic'];
    }

    /**
     * Sets thirdSpecialLicensePic
     *
     * @param \SplFileObject|null $thirdSpecialLicensePic thirdSpecialLicensePic
     *
     * @return self
     */
    public function setThirdSpecialLicensePic($thirdSpecialLicensePic)
    {
        $this->container['thirdSpecialLicensePic'] = $thirdSpecialLicensePic;

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


