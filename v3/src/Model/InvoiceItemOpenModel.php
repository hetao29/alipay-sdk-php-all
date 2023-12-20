<?php
/**
 * InvoiceItemOpenModel
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
 * InvoiceItemOpenModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceItemOpenModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItemOpenModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemExTaxAmount' => 'string',
        'itemName' => 'string',
        'itemNo' => 'string',
        'itemQuantity' => 'int',
        'itemSpec' => 'string',
        'itemSumAmount' => 'string',
        'itemTaxAmount' => 'string',
        'itemTaxRate' => 'string',
        'itemUnit' => 'string',
        'itemUnitPrice' => 'string',
        'rowType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemExTaxAmount' => null,
        'itemName' => null,
        'itemNo' => null,
        'itemQuantity' => null,
        'itemSpec' => null,
        'itemSumAmount' => null,
        'itemTaxAmount' => null,
        'itemTaxRate' => null,
        'itemUnit' => null,
        'itemUnitPrice' => null,
        'rowType' => null
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
        'itemExTaxAmount' => 'item_ex_tax_amount',
        'itemName' => 'item_name',
        'itemNo' => 'item_no',
        'itemQuantity' => 'item_quantity',
        'itemSpec' => 'item_spec',
        'itemSumAmount' => 'item_sum_amount',
        'itemTaxAmount' => 'item_tax_amount',
        'itemTaxRate' => 'item_tax_rate',
        'itemUnit' => 'item_unit',
        'itemUnitPrice' => 'item_unit_price',
        'rowType' => 'row_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemExTaxAmount' => 'setItemExTaxAmount',
        'itemName' => 'setItemName',
        'itemNo' => 'setItemNo',
        'itemQuantity' => 'setItemQuantity',
        'itemSpec' => 'setItemSpec',
        'itemSumAmount' => 'setItemSumAmount',
        'itemTaxAmount' => 'setItemTaxAmount',
        'itemTaxRate' => 'setItemTaxRate',
        'itemUnit' => 'setItemUnit',
        'itemUnitPrice' => 'setItemUnitPrice',
        'rowType' => 'setRowType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemExTaxAmount' => 'getItemExTaxAmount',
        'itemName' => 'getItemName',
        'itemNo' => 'getItemNo',
        'itemQuantity' => 'getItemQuantity',
        'itemSpec' => 'getItemSpec',
        'itemSumAmount' => 'getItemSumAmount',
        'itemTaxAmount' => 'getItemTaxAmount',
        'itemTaxRate' => 'getItemTaxRate',
        'itemUnit' => 'getItemUnit',
        'itemUnitPrice' => 'getItemUnitPrice',
        'rowType' => 'getRowType'
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
        $this->container['itemExTaxAmount'] = $data['itemExTaxAmount'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
        $this->container['itemNo'] = $data['itemNo'] ?? null;
        $this->container['itemQuantity'] = $data['itemQuantity'] ?? null;
        $this->container['itemSpec'] = $data['itemSpec'] ?? null;
        $this->container['itemSumAmount'] = $data['itemSumAmount'] ?? null;
        $this->container['itemTaxAmount'] = $data['itemTaxAmount'] ?? null;
        $this->container['itemTaxRate'] = $data['itemTaxRate'] ?? null;
        $this->container['itemUnit'] = $data['itemUnit'] ?? null;
        $this->container['itemUnitPrice'] = $data['itemUnitPrice'] ?? null;
        $this->container['rowType'] = $data['rowType'] ?? null;
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
     * Gets itemExTaxAmount
     *
     * @return string|null
     */
    public function getItemExTaxAmount()
    {
        return $this->container['itemExTaxAmount'];
    }

    /**
     * Sets itemExTaxAmount
     *
     * @param string|null $itemExTaxAmount 明细行不含税金额，单位元，保留两位小数
     *
     * @return self
     */
    public function setItemExTaxAmount($itemExTaxAmount)
    {
        $this->container['itemExTaxAmount'] = $itemExTaxAmount;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|null $itemName 开票项目：货物或应税劳务、服务名称
     *
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets itemNo
     *
     * @return string|null
     */
    public function getItemNo()
    {
        return $this->container['itemNo'];
    }

    /**
     * Sets itemNo
     *
     * @param string|null $itemNo 国税局制定的商品税收编码，必须是最末级
     *
     * @return self
     */
    public function setItemNo($itemNo)
    {
        $this->container['itemNo'] = $itemNo;

        return $this;
    }

    /**
     * Gets itemQuantity
     *
     * @return int|null
     */
    public function getItemQuantity()
    {
        return $this->container['itemQuantity'];
    }

    /**
     * Sets itemQuantity
     *
     * @param int|null $itemQuantity 数量； 1.当row_type=0或2且item_unit_price为空，可空； 2.可精确到小数点后6位
     *
     * @return self
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->container['itemQuantity'] = $itemQuantity;

        return $this;
    }

    /**
     * Gets itemSpec
     *
     * @return string|null
     */
    public function getItemSpec()
    {
        return $this->container['itemSpec'];
    }

    /**
     * Sets itemSpec
     *
     * @param string|null $itemSpec 规格型号
     *
     * @return self
     */
    public function setItemSpec($itemSpec)
    {
        $this->container['itemSpec'] = $itemSpec;

        return $this;
    }

    /**
     * Gets itemSumAmount
     *
     * @return string|null
     */
    public function getItemSumAmount()
    {
        return $this->container['itemSumAmount'];
    }

    /**
     * Sets itemSumAmount
     *
     * @param string|null $itemSumAmount 明细行价税合计，单位元，必须保证item_sum_amount=item_ex_tax_amount+item_tax_amount。
     *
     * @return self
     */
    public function setItemSumAmount($itemSumAmount)
    {
        $this->container['itemSumAmount'] = $itemSumAmount;

        return $this;
    }

    /**
     * Gets itemTaxAmount
     *
     * @return string|null
     */
    public function getItemTaxAmount()
    {
        return $this->container['itemTaxAmount'];
    }

    /**
     * Sets itemTaxAmount
     *
     * @param string|null $itemTaxAmount 明细行税额，单位元，保留两位小数，无税或者免税情况下输入：0.00。
     *
     * @return self
     */
    public function setItemTaxAmount($itemTaxAmount)
    {
        $this->container['itemTaxAmount'] = $itemTaxAmount;

        return $this;
    }

    /**
     * Gets itemTaxRate
     *
     * @return string|null
     */
    public function getItemTaxRate()
    {
        return $this->container['itemTaxRate'];
    }

    /**
     * Sets itemTaxRate
     *
     * @param string|null $itemTaxRate 明细行税率，无税或者免税情况下输入：0.00。
     *
     * @return self
     */
    public function setItemTaxRate($itemTaxRate)
    {
        $this->container['itemTaxRate'] = $itemTaxRate;

        return $this;
    }

    /**
     * Gets itemUnit
     *
     * @return string|null
     */
    public function getItemUnit()
    {
        return $this->container['itemUnit'];
    }

    /**
     * Sets itemUnit
     *
     * @param string|null $itemUnit 单位
     *
     * @return self
     */
    public function setItemUnit($itemUnit)
    {
        $this->container['itemUnit'] = $itemUnit;

        return $this;
    }

    /**
     * Gets itemUnitPrice
     *
     * @return string|null
     */
    public function getItemUnitPrice()
    {
        return $this->container['itemUnitPrice'];
    }

    /**
     * Sets itemUnitPrice
     *
     * @param string|null $itemUnitPrice 不含税单价（元）; 1.当row_type=0或2且item_quantity为空，可空 2.可精确到小数点后8位；
     *
     * @return self
     */
    public function setItemUnitPrice($itemUnitPrice)
    {
        $this->container['itemUnitPrice'] = $itemUnitPrice;

        return $this;
    }

    /**
     * Gets rowType
     *
     * @return string|null
     */
    public function getRowType()
    {
        return $this->container['rowType'];
    }

    /**
     * Sets rowType
     *
     * @param string|null $rowType 发票行性质：0表示正常行，1表示折扣行，2表示被折扣行。
     *
     * @return self
     */
    public function setRowType($rowType)
    {
        $this->container['rowType'] = $rowType;

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


