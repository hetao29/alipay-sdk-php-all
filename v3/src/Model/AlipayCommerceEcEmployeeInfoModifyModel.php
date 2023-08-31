<?php
/**
 * AlipayCommerceEcEmployeeInfoModifyModel
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
 * AlipayCommerceEcEmployeeInfoModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceEcEmployeeInfoModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceEcEmployeeInfoModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'departmentIds' => 'string[]',
        'employeeEmail' => 'string',
        'employeeId' => 'string',
        'employeeMobile' => 'string',
        'employeeName' => 'string',
        'employeeNo' => 'string',
        'enterpriseId' => 'string',
        'roleList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'departmentIds' => null,
        'employeeEmail' => null,
        'employeeId' => null,
        'employeeMobile' => null,
        'employeeName' => null,
        'employeeNo' => null,
        'enterpriseId' => null,
        'roleList' => null
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
        'departmentIds' => 'department_ids',
        'employeeEmail' => 'employee_email',
        'employeeId' => 'employee_id',
        'employeeMobile' => 'employee_mobile',
        'employeeName' => 'employee_name',
        'employeeNo' => 'employee_no',
        'enterpriseId' => 'enterprise_id',
        'roleList' => 'role_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'departmentIds' => 'setDepartmentIds',
        'employeeEmail' => 'setEmployeeEmail',
        'employeeId' => 'setEmployeeId',
        'employeeMobile' => 'setEmployeeMobile',
        'employeeName' => 'setEmployeeName',
        'employeeNo' => 'setEmployeeNo',
        'enterpriseId' => 'setEnterpriseId',
        'roleList' => 'setRoleList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'departmentIds' => 'getDepartmentIds',
        'employeeEmail' => 'getEmployeeEmail',
        'employeeId' => 'getEmployeeId',
        'employeeMobile' => 'getEmployeeMobile',
        'employeeName' => 'getEmployeeName',
        'employeeNo' => 'getEmployeeNo',
        'enterpriseId' => 'getEnterpriseId',
        'roleList' => 'getRoleList'
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
        $this->container['departmentIds'] = $data['departmentIds'] ?? null;
        $this->container['employeeEmail'] = $data['employeeEmail'] ?? null;
        $this->container['employeeId'] = $data['employeeId'] ?? null;
        $this->container['employeeMobile'] = $data['employeeMobile'] ?? null;
        $this->container['employeeName'] = $data['employeeName'] ?? null;
        $this->container['employeeNo'] = $data['employeeNo'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['roleList'] = $data['roleList'] ?? null;
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
     * Gets departmentIds
     *
     * @return string[]|null
     */
    public function getDepartmentIds()
    {
        return $this->container['departmentIds'];
    }

    /**
     * Sets departmentIds
     *
     * @param string[]|null $departmentIds 员工所属部门
     *
     * @return self
     */
    public function setDepartmentIds($departmentIds)
    {
        $this->container['departmentIds'] = $departmentIds;

        return $this;
    }

    /**
     * Gets employeeEmail
     *
     * @return string|null
     */
    public function getEmployeeEmail()
    {
        return $this->container['employeeEmail'];
    }

    /**
     * Sets employeeEmail
     *
     * @param string|null $employeeEmail 员工邮箱
     *
     * @return self
     */
    public function setEmployeeEmail($employeeEmail)
    {
        $this->container['employeeEmail'] = $employeeEmail;

        return $this;
    }

    /**
     * Gets employeeId
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employeeId'];
    }

    /**
     * Sets employeeId
     *
     * @param string|null $employeeId 员工id
     *
     * @return self
     */
    public function setEmployeeId($employeeId)
    {
        $this->container['employeeId'] = $employeeId;

        return $this;
    }

    /**
     * Gets employeeMobile
     *
     * @return string|null
     */
    public function getEmployeeMobile()
    {
        return $this->container['employeeMobile'];
    }

    /**
     * Sets employeeMobile
     *
     * @param string|null $employeeMobile 员工手机号
     *
     * @return self
     */
    public function setEmployeeMobile($employeeMobile)
    {
        $this->container['employeeMobile'] = $employeeMobile;

        return $this;
    }

    /**
     * Gets employeeName
     *
     * @return string|null
     */
    public function getEmployeeName()
    {
        return $this->container['employeeName'];
    }

    /**
     * Sets employeeName
     *
     * @param string|null $employeeName 员工姓名
     *
     * @return self
     */
    public function setEmployeeName($employeeName)
    {
        $this->container['employeeName'] = $employeeName;

        return $this;
    }

    /**
     * Gets employeeNo
     *
     * @return string|null
     */
    public function getEmployeeNo()
    {
        return $this->container['employeeNo'];
    }

    /**
     * Sets employeeNo
     *
     * @param string|null $employeeNo 员工工号
     *
     * @return self
     */
    public function setEmployeeNo($employeeNo)
    {
        $this->container['employeeNo'] = $employeeNo;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业id
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets roleList
     *
     * @return string[]|null
     */
    public function getRoleList()
    {
        return $this->container['roleList'];
    }

    /**
     * Sets roleList
     *
     * @param string[]|null $roleList 角色列表，目前只支持填一种角色
     *
     * @return self
     */
    public function setRoleList($roleList)
    {
        $this->container['roleList'] = $roleList;

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


