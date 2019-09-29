<?php
/**
 * EmailAnalysis
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
 * EmailAnalysis Class Doc Comment
 *
 * @category Class
 * @description Analysis of email
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailAnalysis implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailAnalysis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dkim_verdict' => 'string',
        'dmarc_verdict' => 'string',
        'spam_verdict' => 'string',
        'spf_verdict' => 'string',
        'virus_verdict' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dkim_verdict' => null,
        'dmarc_verdict' => null,
        'spam_verdict' => null,
        'spf_verdict' => null,
        'virus_verdict' => null
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
        'dkim_verdict' => 'dkimVerdict',
        'dmarc_verdict' => 'dmarcVerdict',
        'spam_verdict' => 'spamVerdict',
        'spf_verdict' => 'spfVerdict',
        'virus_verdict' => 'virusVerdict'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dkim_verdict' => 'setDkimVerdict',
        'dmarc_verdict' => 'setDmarcVerdict',
        'spam_verdict' => 'setSpamVerdict',
        'spf_verdict' => 'setSpfVerdict',
        'virus_verdict' => 'setVirusVerdict'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dkim_verdict' => 'getDkimVerdict',
        'dmarc_verdict' => 'getDmarcVerdict',
        'spam_verdict' => 'getSpamVerdict',
        'spf_verdict' => 'getSpfVerdict',
        'virus_verdict' => 'getVirusVerdict'
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
        $this->container['dkim_verdict'] = isset($data['dkim_verdict']) ? $data['dkim_verdict'] : null;
        $this->container['dmarc_verdict'] = isset($data['dmarc_verdict']) ? $data['dmarc_verdict'] : null;
        $this->container['spam_verdict'] = isset($data['spam_verdict']) ? $data['spam_verdict'] : null;
        $this->container['spf_verdict'] = isset($data['spf_verdict']) ? $data['spf_verdict'] : null;
        $this->container['virus_verdict'] = isset($data['virus_verdict']) ? $data['virus_verdict'] : null;
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
     * Gets dkim_verdict
     *
     * @return string|null
     */
    public function getDkimVerdict()
    {
        return $this->container['dkim_verdict'];
    }

    /**
     * Sets dkim_verdict
     *
     * @param string|null $dkim_verdict dkim_verdict
     *
     * @return $this
     */
    public function setDkimVerdict($dkim_verdict)
    {
        $this->container['dkim_verdict'] = $dkim_verdict;

        return $this;
    }

    /**
     * Gets dmarc_verdict
     *
     * @return string|null
     */
    public function getDmarcVerdict()
    {
        return $this->container['dmarc_verdict'];
    }

    /**
     * Sets dmarc_verdict
     *
     * @param string|null $dmarc_verdict dmarc_verdict
     *
     * @return $this
     */
    public function setDmarcVerdict($dmarc_verdict)
    {
        $this->container['dmarc_verdict'] = $dmarc_verdict;

        return $this;
    }

    /**
     * Gets spam_verdict
     *
     * @return string|null
     */
    public function getSpamVerdict()
    {
        return $this->container['spam_verdict'];
    }

    /**
     * Sets spam_verdict
     *
     * @param string|null $spam_verdict spam_verdict
     *
     * @return $this
     */
    public function setSpamVerdict($spam_verdict)
    {
        $this->container['spam_verdict'] = $spam_verdict;

        return $this;
    }

    /**
     * Gets spf_verdict
     *
     * @return string|null
     */
    public function getSpfVerdict()
    {
        return $this->container['spf_verdict'];
    }

    /**
     * Sets spf_verdict
     *
     * @param string|null $spf_verdict spf_verdict
     *
     * @return $this
     */
    public function setSpfVerdict($spf_verdict)
    {
        $this->container['spf_verdict'] = $spf_verdict;

        return $this;
    }

    /**
     * Gets virus_verdict
     *
     * @return string|null
     */
    public function getVirusVerdict()
    {
        return $this->container['virus_verdict'];
    }

    /**
     * Sets virus_verdict
     *
     * @param string|null $virus_verdict virus_verdict
     *
     * @return $this
     */
    public function setVirusVerdict($virus_verdict)
    {
        $this->container['virus_verdict'] = $virus_verdict;

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


