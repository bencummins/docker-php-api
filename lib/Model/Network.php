<?php
/**
 * Network
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.41) is used. For example, calling `/info` is the same as calling `/v1.41/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * OpenAPI spec version: 1.41
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Network Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Network implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Network';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'id' => 'string',
        'created' => 'string',
        'scope' => 'string',
        'driver' => 'string',
        'enable_i_pv6' => 'bool',
        'ipam' => '\Swagger\Client\Model\IPAM',
        'internal' => 'bool',
        'attachable' => 'bool',
        'ingress' => 'bool',
        'containers' => 'map[string,\Swagger\Client\Model\NetworkContainer]',
        'options' => 'map[string,string]',
        'labels' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'id' => null,
        'created' => 'dateTime',
        'scope' => null,
        'driver' => null,
        'enable_i_pv6' => null,
        'ipam' => null,
        'internal' => null,
        'attachable' => null,
        'ingress' => null,
        'containers' => null,
        'options' => null,
        'labels' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'id' => 'Id',
        'created' => 'Created',
        'scope' => 'Scope',
        'driver' => 'Driver',
        'enable_i_pv6' => 'EnableIPv6',
        'ipam' => 'IPAM',
        'internal' => 'Internal',
        'attachable' => 'Attachable',
        'ingress' => 'Ingress',
        'containers' => 'Containers',
        'options' => 'Options',
        'labels' => 'Labels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'created' => 'setCreated',
        'scope' => 'setScope',
        'driver' => 'setDriver',
        'enable_i_pv6' => 'setEnableIPv6',
        'ipam' => 'setIpam',
        'internal' => 'setInternal',
        'attachable' => 'setAttachable',
        'ingress' => 'setIngress',
        'containers' => 'setContainers',
        'options' => 'setOptions',
        'labels' => 'setLabels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'created' => 'getCreated',
        'scope' => 'getScope',
        'driver' => 'getDriver',
        'enable_i_pv6' => 'getEnableIPv6',
        'ipam' => 'getIpam',
        'internal' => 'getInternal',
        'attachable' => 'getAttachable',
        'ingress' => 'getIngress',
        'containers' => 'getContainers',
        'options' => 'getOptions',
        'labels' => 'getLabels'
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
        return self::$swaggerModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['enable_i_pv6'] = isset($data['enable_i_pv6']) ? $data['enable_i_pv6'] : null;
        $this->container['ipam'] = isset($data['ipam']) ? $data['ipam'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['attachable'] = isset($data['attachable']) ? $data['attachable'] : null;
        $this->container['ingress'] = isset($data['ingress']) ? $data['ingress'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets driver
     *
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     *
     * @param string $driver driver
     *
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
    }

    /**
     * Gets enable_i_pv6
     *
     * @return bool
     */
    public function getEnableIPv6()
    {
        return $this->container['enable_i_pv6'];
    }

    /**
     * Sets enable_i_pv6
     *
     * @param bool $enable_i_pv6 enable_i_pv6
     *
     * @return $this
     */
    public function setEnableIPv6($enable_i_pv6)
    {
        $this->container['enable_i_pv6'] = $enable_i_pv6;

        return $this;
    }

    /**
     * Gets ipam
     *
     * @return \Swagger\Client\Model\IPAM
     */
    public function getIpam()
    {
        return $this->container['ipam'];
    }

    /**
     * Sets ipam
     *
     * @param \Swagger\Client\Model\IPAM $ipam ipam
     *
     * @return $this
     */
    public function setIpam($ipam)
    {
        $this->container['ipam'] = $ipam;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return bool
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool $internal internal
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets attachable
     *
     * @return bool
     */
    public function getAttachable()
    {
        return $this->container['attachable'];
    }

    /**
     * Sets attachable
     *
     * @param bool $attachable attachable
     *
     * @return $this
     */
    public function setAttachable($attachable)
    {
        $this->container['attachable'] = $attachable;

        return $this;
    }

    /**
     * Gets ingress
     *
     * @return bool
     */
    public function getIngress()
    {
        return $this->container['ingress'];
    }

    /**
     * Sets ingress
     *
     * @param bool $ingress ingress
     *
     * @return $this
     */
    public function setIngress($ingress)
    {
        $this->container['ingress'] = $ingress;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return map[string,\Swagger\Client\Model\NetworkContainer]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param map[string,\Swagger\Client\Model\NetworkContainer] $containers containers
     *
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets options
     *
     * @return map[string,string]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param map[string,string] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


