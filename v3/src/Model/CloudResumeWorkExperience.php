<?php
/**
 * CloudResumeWorkExperience
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
 * CloudResumeWorkExperience Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CloudResumeWorkExperience implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CloudResumeWorkExperience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'companyName' => 'string',
        'jobId' => 'string',
        'jobName' => 'string',
        'positionName' => 'string',
        'professionId' => 'string',
        'professionName' => 'string',
        'workDesc' => 'string',
        'workEndTime' => 'int',
        'workStartTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'companyName' => null,
        'jobId' => null,
        'jobName' => null,
        'positionName' => null,
        'professionId' => null,
        'professionName' => null,
        'workDesc' => null,
        'workEndTime' => null,
        'workStartTime' => null
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
        'companyName' => 'company_name',
        'jobId' => 'job_id',
        'jobName' => 'job_name',
        'positionName' => 'position_name',
        'professionId' => 'profession_id',
        'professionName' => 'profession_name',
        'workDesc' => 'work_desc',
        'workEndTime' => 'work_end_time',
        'workStartTime' => 'work_start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyName' => 'setCompanyName',
        'jobId' => 'setJobId',
        'jobName' => 'setJobName',
        'positionName' => 'setPositionName',
        'professionId' => 'setProfessionId',
        'professionName' => 'setProfessionName',
        'workDesc' => 'setWorkDesc',
        'workEndTime' => 'setWorkEndTime',
        'workStartTime' => 'setWorkStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyName' => 'getCompanyName',
        'jobId' => 'getJobId',
        'jobName' => 'getJobName',
        'positionName' => 'getPositionName',
        'professionId' => 'getProfessionId',
        'professionName' => 'getProfessionName',
        'workDesc' => 'getWorkDesc',
        'workEndTime' => 'getWorkEndTime',
        'workStartTime' => 'getWorkStartTime'
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
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['jobId'] = $data['jobId'] ?? null;
        $this->container['jobName'] = $data['jobName'] ?? null;
        $this->container['positionName'] = $data['positionName'] ?? null;
        $this->container['professionId'] = $data['professionId'] ?? null;
        $this->container['professionName'] = $data['professionName'] ?? null;
        $this->container['workDesc'] = $data['workDesc'] ?? null;
        $this->container['workEndTime'] = $data['workEndTime'] ?? null;
        $this->container['workStartTime'] = $data['workStartTime'] ?? null;
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
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName 公司名称
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string|null $jobId 职业id
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets jobName
     *
     * @return string|null
     */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
     * Sets jobName
     *
     * @param string|null $jobName 职业
     *
     * @return self
     */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;

        return $this;
    }

    /**
     * Gets positionName
     *
     * @return string|null
     */
    public function getPositionName()
    {
        return $this->container['positionName'];
    }

    /**
     * Sets positionName
     *
     * @param string|null $positionName 用户在求职意向页面自主录入
     *
     * @return self
     */
    public function setPositionName($positionName)
    {
        $this->container['positionName'] = $positionName;

        return $this;
    }

    /**
     * Gets professionId
     *
     * @return string|null
     */
    public function getProfessionId()
    {
        return $this->container['professionId'];
    }

    /**
     * Sets professionId
     *
     * @param string|null $professionId 行业id
     *
     * @return self
     */
    public function setProfessionId($professionId)
    {
        $this->container['professionId'] = $professionId;

        return $this;
    }

    /**
     * Gets professionName
     *
     * @return string|null
     */
    public function getProfessionName()
    {
        return $this->container['professionName'];
    }

    /**
     * Sets professionName
     *
     * @param string|null $professionName 行业名称
     *
     * @return self
     */
    public function setProfessionName($professionName)
    {
        $this->container['professionName'] = $professionName;

        return $this;
    }

    /**
     * Gets workDesc
     *
     * @return string|null
     */
    public function getWorkDesc()
    {
        return $this->container['workDesc'];
    }

    /**
     * Sets workDesc
     *
     * @param string|null $workDesc 工作描述
     *
     * @return self
     */
    public function setWorkDesc($workDesc)
    {
        $this->container['workDesc'] = $workDesc;

        return $this;
    }

    /**
     * Gets workEndTime
     *
     * @return int|null
     */
    public function getWorkEndTime()
    {
        return $this->container['workEndTime'];
    }

    /**
     * Sets workEndTime
     *
     * @param int|null $workEndTime 工作结束时间
     *
     * @return self
     */
    public function setWorkEndTime($workEndTime)
    {
        $this->container['workEndTime'] = $workEndTime;

        return $this;
    }

    /**
     * Gets workStartTime
     *
     * @return int|null
     */
    public function getWorkStartTime()
    {
        return $this->container['workStartTime'];
    }

    /**
     * Sets workStartTime
     *
     * @param int|null $workStartTime 工作开始日期
     *
     * @return self
     */
    public function setWorkStartTime($workStartTime)
    {
        $this->container['workStartTime'] = $workStartTime;

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


