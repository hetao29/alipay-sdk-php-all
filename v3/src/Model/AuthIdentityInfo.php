<?php
/**
 * AuthIdentityInfo
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
 * AuthIdentityInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuthIdentityInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthIdentityInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certificateInfo' => '\Alipay\OpenAPISDK\Model\IndirectCertificateInfo',
        'certificateType' => 'string',
        'employerLetterImg' => 'string',
        'financialOrgInfo' => '\Alipay\OpenAPISDK\Model\IndirectFinancialOrgInfo',
        'identityType' => 'string',
        'isFinancialOrg' => 'bool',
        'qualificationInfoList' => '\Alipay\OpenAPISDK\Model\IndirectQualificationInfo[]',
        'supportCredentials' => '\Alipay\OpenAPISDK\Model\IndirectSupportCredentials'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certificateInfo' => null,
        'certificateType' => null,
        'employerLetterImg' => null,
        'financialOrgInfo' => null,
        'identityType' => null,
        'isFinancialOrg' => null,
        'qualificationInfoList' => null,
        'supportCredentials' => null
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
        'certificateInfo' => 'certificate_info',
        'certificateType' => 'certificate_type',
        'employerLetterImg' => 'employer_letter_img',
        'financialOrgInfo' => 'financial_org_info',
        'identityType' => 'identity_type',
        'isFinancialOrg' => 'is_financial_org',
        'qualificationInfoList' => 'qualification_info_list',
        'supportCredentials' => 'support_credentials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificateInfo' => 'setCertificateInfo',
        'certificateType' => 'setCertificateType',
        'employerLetterImg' => 'setEmployerLetterImg',
        'financialOrgInfo' => 'setFinancialOrgInfo',
        'identityType' => 'setIdentityType',
        'isFinancialOrg' => 'setIsFinancialOrg',
        'qualificationInfoList' => 'setQualificationInfoList',
        'supportCredentials' => 'setSupportCredentials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificateInfo' => 'getCertificateInfo',
        'certificateType' => 'getCertificateType',
        'employerLetterImg' => 'getEmployerLetterImg',
        'financialOrgInfo' => 'getFinancialOrgInfo',
        'identityType' => 'getIdentityType',
        'isFinancialOrg' => 'getIsFinancialOrg',
        'qualificationInfoList' => 'getQualificationInfoList',
        'supportCredentials' => 'getSupportCredentials'
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
        $this->container['certificateInfo'] = $data['certificateInfo'] ?? null;
        $this->container['certificateType'] = $data['certificateType'] ?? null;
        $this->container['employerLetterImg'] = $data['employerLetterImg'] ?? null;
        $this->container['financialOrgInfo'] = $data['financialOrgInfo'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['isFinancialOrg'] = $data['isFinancialOrg'] ?? null;
        $this->container['qualificationInfoList'] = $data['qualificationInfoList'] ?? null;
        $this->container['supportCredentials'] = $data['supportCredentials'] ?? null;
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
     * Gets certificateInfo
     *
     * @return \Alipay\OpenAPISDK\Model\IndirectCertificateInfo|null
     */
    public function getCertificateInfo()
    {
        return $this->container['certificateInfo'];
    }

    /**
     * Sets certificateInfo
     *
     * @param \Alipay\OpenAPISDK\Model\IndirectCertificateInfo|null $certificateInfo certificateInfo
     *
     * @return self
     */
    public function setCertificateInfo($certificateInfo)
    {
        $this->container['certificateInfo'] = $certificateInfo;

        return $this;
    }

    /**
     * Gets certificateType
     *
     * @return string|null
     */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
     * Sets certificateType
     *
     * @param string|null $certificateType 主体类型为企业/个体户/政府机关/事业单位/社会组织时，必填； 证照类型：营业执照(BUSINESS_CERT)/登记证书(REGISTER_CERT) 主体为政府机关/事业单位/社会组织时，填登记证书； 主体类型为企业/个体户时，填营业执照；
     *
     * @return self
     */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;

        return $this;
    }

    /**
     * Gets employerLetterImg
     *
     * @return string|null
     */
    public function getEmployerLetterImg()
    {
        return $this->container['employerLetterImg'];
    }

    /**
     * Sets employerLetterImg
     *
     * @param string|null $employerLetterImg 单位证明函照片（使用图片上传接口）主体类型为政府机关/事业单位时，单位证明函照片必填
     *
     * @return self
     */
    public function setEmployerLetterImg($employerLetterImg)
    {
        $this->container['employerLetterImg'] = $employerLetterImg;

        return $this;
    }

    /**
     * Gets financialOrgInfo
     *
     * @return \Alipay\OpenAPISDK\Model\IndirectFinancialOrgInfo|null
     */
    public function getFinancialOrgInfo()
    {
        return $this->container['financialOrgInfo'];
    }

    /**
     * Sets financialOrgInfo
     *
     * @param \Alipay\OpenAPISDK\Model\IndirectFinancialOrgInfo|null $financialOrgInfo financialOrgInfo
     *
     * @return self
     */
    public function setFinancialOrgInfo($financialOrgInfo)
    {
        $this->container['financialOrgInfo'] = $financialOrgInfo;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType 主体类型，枚举定义：企业(ENTERPRISE)、个体工商户(IND_BIZ)、事业单位(INST)、党政机关(GOV)、社会组织(ORG)、小微商户(MSE)
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

        return $this;
    }

    /**
     * Gets isFinancialOrg
     *
     * @return bool|null
     */
    public function getIsFinancialOrg()
    {
        return $this->container['isFinancialOrg'];
    }

    /**
     * Sets isFinancialOrg
     *
     * @param bool|null $isFinancialOrg 是否金融机构
     *
     * @return self
     */
    public function setIsFinancialOrg($isFinancialOrg)
    {
        $this->container['isFinancialOrg'] = $isFinancialOrg;

        return $this;
    }

    /**
     * Gets qualificationInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\IndirectQualificationInfo[]|null
     */
    public function getQualificationInfoList()
    {
        return $this->container['qualificationInfoList'];
    }

    /**
     * Sets qualificationInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\IndirectQualificationInfo[]|null $qualificationInfoList 经营许可证列表，填写特殊行业的经营许可证信息，一个主体最多5个行业
     *
     * @return self
     */
    public function setQualificationInfoList($qualificationInfoList)
    {
        $this->container['qualificationInfoList'] = $qualificationInfoList;

        return $this;
    }

    /**
     * Gets supportCredentials
     *
     * @return \Alipay\OpenAPISDK\Model\IndirectSupportCredentials|null
     */
    public function getSupportCredentials()
    {
        return $this->container['supportCredentials'];
    }

    /**
     * Sets supportCredentials
     *
     * @param \Alipay\OpenAPISDK\Model\IndirectSupportCredentials|null $supportCredentials supportCredentials
     *
     * @return self
     */
    public function setSupportCredentials($supportCredentials)
    {
        $this->container['supportCredentials'] = $supportCredentials;

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


