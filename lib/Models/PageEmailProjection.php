<?php
/**
 * PageEmailProjection
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * For documentation see [developer guide](https://www.mailslurp.com/developers). [Create an account](https://app.mailslurp.com) in the MailSlurp Dashboard to [view your API Key](https://app). For all bugs, feature requests, or help please [see support](https://www.mailslurp.com/support/).
 *
 * OpenAPI spec version: 0.0.1-alpha
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * PageEmailProjection Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageEmailProjection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Page«EmailProjection»';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\MailSlurp\Models\EmailProjection[]',
        'first' => 'bool',
        'last' => 'bool',
        'number' => 'int',
        'number_of_elements' => 'int',
        'pageable' => '\MailSlurp\Models\Pageable',
        'size' => 'int',
        'sort' => '\MailSlurp\Models\Sort',
        'total_elements' => 'int',
        'total_pages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'first' => null,
        'last' => null,
        'number' => 'int32',
        'number_of_elements' => 'int32',
        'pageable' => null,
        'size' => 'int32',
        'sort' => null,
        'total_elements' => 'int64',
        'total_pages' => 'int32'
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
        'content' => 'content',
        'first' => 'first',
        'last' => 'last',
        'number' => 'number',
        'number_of_elements' => 'numberOfElements',
        'pageable' => 'pageable',
        'size' => 'size',
        'sort' => 'sort',
        'total_elements' => 'totalElements',
        'total_pages' => 'totalPages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'first' => 'setFirst',
        'last' => 'setLast',
        'number' => 'setNumber',
        'number_of_elements' => 'setNumberOfElements',
        'pageable' => 'setPageable',
        'size' => 'setSize',
        'sort' => 'setSort',
        'total_elements' => 'setTotalElements',
        'total_pages' => 'setTotalPages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'first' => 'getFirst',
        'last' => 'getLast',
        'number' => 'getNumber',
        'number_of_elements' => 'getNumberOfElements',
        'pageable' => 'getPageable',
        'size' => 'getSize',
        'sort' => 'getSort',
        'total_elements' => 'getTotalElements',
        'total_pages' => 'getTotalPages'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['first'] = isset($data['first']) ? $data['first'] : null;
        $this->container['last'] = isset($data['last']) ? $data['last'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_of_elements'] = isset($data['number_of_elements']) ? $data['number_of_elements'] : null;
        $this->container['pageable'] = isset($data['pageable']) ? $data['pageable'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['total_elements'] = isset($data['total_elements']) ? $data['total_elements'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
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
     * Gets content
     *
     * @return \MailSlurp\Models\EmailProjection[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \MailSlurp\Models\EmailProjection[]|null $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets first
     *
     * @return bool|null
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param bool|null $first first
     *
     * @return $this
     */
    public function setFirst($first)
    {
        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     *
     * @return bool|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param bool|null $last last
     *
     * @return $this
     */
    public function setLast($last)
    {
        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_of_elements
     *
     * @return int|null
     */
    public function getNumberOfElements()
    {
        return $this->container['number_of_elements'];
    }

    /**
     * Sets number_of_elements
     *
     * @param int|null $number_of_elements number_of_elements
     *
     * @return $this
     */
    public function setNumberOfElements($number_of_elements)
    {
        $this->container['number_of_elements'] = $number_of_elements;

        return $this;
    }

    /**
     * Gets pageable
     *
     * @return \MailSlurp\Models\Pageable|null
     */
    public function getPageable()
    {
        return $this->container['pageable'];
    }

    /**
     * Sets pageable
     *
     * @param \MailSlurp\Models\Pageable|null $pageable pageable
     *
     * @return $this
     */
    public function setPageable($pageable)
    {
        $this->container['pageable'] = $pageable;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return \MailSlurp\Models\Sort|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param \MailSlurp\Models\Sort|null $sort sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets total_elements
     *
     * @return int|null
     */
    public function getTotalElements()
    {
        return $this->container['total_elements'];
    }

    /**
     * Sets total_elements
     *
     * @param int|null $total_elements total_elements
     *
     * @return $this
     */
    public function setTotalElements($total_elements)
    {
        $this->container['total_elements'] = $total_elements;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int|null $total_pages total_pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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
}


