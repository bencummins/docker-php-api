<?php
/**
 * RegistryServiceConfig
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
 * RegistryServiceConfig Class Doc Comment
 *
 * @category Class
 * @description RegistryServiceConfig stores daemon registry services configuration.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistryServiceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegistryServiceConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_nondistributable_artifacts_cid_rs' => 'string[]',
        'allow_nondistributable_artifacts_hostnames' => 'string[]',
        'insecure_registry_cid_rs' => 'string[]',
        'index_configs' => 'map[string,\Swagger\Client\Model\IndexInfo]',
        'mirrors' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_nondistributable_artifacts_cid_rs' => null,
        'allow_nondistributable_artifacts_hostnames' => null,
        'insecure_registry_cid_rs' => null,
        'index_configs' => null,
        'mirrors' => null
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
        'allow_nondistributable_artifacts_cid_rs' => 'AllowNondistributableArtifactsCIDRs',
        'allow_nondistributable_artifacts_hostnames' => 'AllowNondistributableArtifactsHostnames',
        'insecure_registry_cid_rs' => 'InsecureRegistryCIDRs',
        'index_configs' => 'IndexConfigs',
        'mirrors' => 'Mirrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_nondistributable_artifacts_cid_rs' => 'setAllowNondistributableArtifactsCidRs',
        'allow_nondistributable_artifacts_hostnames' => 'setAllowNondistributableArtifactsHostnames',
        'insecure_registry_cid_rs' => 'setInsecureRegistryCidRs',
        'index_configs' => 'setIndexConfigs',
        'mirrors' => 'setMirrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_nondistributable_artifacts_cid_rs' => 'getAllowNondistributableArtifactsCidRs',
        'allow_nondistributable_artifacts_hostnames' => 'getAllowNondistributableArtifactsHostnames',
        'insecure_registry_cid_rs' => 'getInsecureRegistryCidRs',
        'index_configs' => 'getIndexConfigs',
        'mirrors' => 'getMirrors'
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
        $this->container['allow_nondistributable_artifacts_cid_rs'] = isset($data['allow_nondistributable_artifacts_cid_rs']) ? $data['allow_nondistributable_artifacts_cid_rs'] : null;
        $this->container['allow_nondistributable_artifacts_hostnames'] = isset($data['allow_nondistributable_artifacts_hostnames']) ? $data['allow_nondistributable_artifacts_hostnames'] : null;
        $this->container['insecure_registry_cid_rs'] = isset($data['insecure_registry_cid_rs']) ? $data['insecure_registry_cid_rs'] : null;
        $this->container['index_configs'] = isset($data['index_configs']) ? $data['index_configs'] : null;
        $this->container['mirrors'] = isset($data['mirrors']) ? $data['mirrors'] : null;
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
     * Gets allow_nondistributable_artifacts_cid_rs
     *
     * @return string[]
     */
    public function getAllowNondistributableArtifactsCidRs()
    {
        return $this->container['allow_nondistributable_artifacts_cid_rs'];
    }

    /**
     * Sets allow_nondistributable_artifacts_cid_rs
     *
     * @param string[] $allow_nondistributable_artifacts_cid_rs List of IP ranges to which nondistributable artifacts can be pushed, using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).  Some images (for example, Windows base images) contain artifacts whose distribution is restricted by license. When these images are pushed to a registry, restricted artifacts are not included.  This configuration override this behavior, and enables the daemon to push nondistributable artifacts to all registries whose resolved IP address is within the subnet described by the CIDR syntax.  This option is useful when pushing images containing nondistributable artifacts to a registry on an air-gapped network so hosts on that network can pull the images without connecting to another server.  > **Warning**: Nondistributable artifacts typically have restrictions > on how and where they can be distributed and shared. Only use this > feature to push artifacts to private registries and ensure that you > are in compliance with any terms that cover redistributing > nondistributable artifacts.
     *
     * @return $this
     */
    public function setAllowNondistributableArtifactsCidRs($allow_nondistributable_artifacts_cid_rs)
    {
        $this->container['allow_nondistributable_artifacts_cid_rs'] = $allow_nondistributable_artifacts_cid_rs;

        return $this;
    }

    /**
     * Gets allow_nondistributable_artifacts_hostnames
     *
     * @return string[]
     */
    public function getAllowNondistributableArtifactsHostnames()
    {
        return $this->container['allow_nondistributable_artifacts_hostnames'];
    }

    /**
     * Sets allow_nondistributable_artifacts_hostnames
     *
     * @param string[] $allow_nondistributable_artifacts_hostnames List of registry hostnames to which nondistributable artifacts can be pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.  Some images (for example, Windows base images) contain artifacts whose distribution is restricted by license. When these images are pushed to a registry, restricted artifacts are not included.  This configuration override this behavior for the specified registries.  This option is useful when pushing images containing nondistributable artifacts to a registry on an air-gapped network so hosts on that network can pull the images without connecting to another server.  > **Warning**: Nondistributable artifacts typically have restrictions > on how and where they can be distributed and shared. Only use this > feature to push artifacts to private registries and ensure that you > are in compliance with any terms that cover redistributing > nondistributable artifacts.
     *
     * @return $this
     */
    public function setAllowNondistributableArtifactsHostnames($allow_nondistributable_artifacts_hostnames)
    {
        $this->container['allow_nondistributable_artifacts_hostnames'] = $allow_nondistributable_artifacts_hostnames;

        return $this;
    }

    /**
     * Gets insecure_registry_cid_rs
     *
     * @return string[]
     */
    public function getInsecureRegistryCidRs()
    {
        return $this->container['insecure_registry_cid_rs'];
    }

    /**
     * Sets insecure_registry_cid_rs
     *
     * @param string[] $insecure_registry_cid_rs List of IP ranges of insecure registries, using the CIDR syntax ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from unknown CAs) communication.  By default, local registries (`127.0.0.0/8`) are configured as insecure. All other registries are secure. Communicating with an insecure registry is not possible if the daemon assumes that registry is secure.  This configuration override this behavior, insecure communication with registries whose resolved IP address is within the subnet described by the CIDR syntax.  Registries can also be marked insecure by hostname. Those registries are listed under `IndexConfigs` and have their `Secure` field set to `false`.  > **Warning**: Using this option can be useful when running a local > registry, but introduces security vulnerabilities. This option > should therefore ONLY be used for testing purposes. For increased > security, users should add their CA to their system's list of trusted > CAs instead of enabling this option.
     *
     * @return $this
     */
    public function setInsecureRegistryCidRs($insecure_registry_cid_rs)
    {
        $this->container['insecure_registry_cid_rs'] = $insecure_registry_cid_rs;

        return $this;
    }

    /**
     * Gets index_configs
     *
     * @return map[string,\Swagger\Client\Model\IndexInfo]
     */
    public function getIndexConfigs()
    {
        return $this->container['index_configs'];
    }

    /**
     * Sets index_configs
     *
     * @param map[string,\Swagger\Client\Model\IndexInfo] $index_configs index_configs
     *
     * @return $this
     */
    public function setIndexConfigs($index_configs)
    {
        $this->container['index_configs'] = $index_configs;

        return $this;
    }

    /**
     * Gets mirrors
     *
     * @return string[]
     */
    public function getMirrors()
    {
        return $this->container['mirrors'];
    }

    /**
     * Sets mirrors
     *
     * @param string[] $mirrors List of registry URLs that act as a mirror for the official (`docker.io`) registry.
     *
     * @return $this
     */
    public function setMirrors($mirrors)
    {
        $this->container['mirrors'] = $mirrors;

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


