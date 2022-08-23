<?php
/**
 * Asset
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * Contact: devex@mux.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * Asset Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Asset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Asset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => 'string',
        'status' => 'string',
        'duration' => 'double',
        'max_stored_resolution' => 'string',
        'max_stored_frame_rate' => 'double',
        'aspect_ratio' => 'string',
        'playback_ids' => '\MuxPhp\Models\PlaybackID[]',
        'tracks' => '\MuxPhp\Models\Track[]',
        'errors' => '\MuxPhp\Models\AssetErrors',
        'per_title_encode' => 'bool',
        'upload_id' => 'string',
        'is_live' => 'bool',
        'passthrough' => 'string',
        'live_stream_id' => 'string',
        'master' => '\MuxPhp\Models\AssetMaster',
        'master_access' => 'string',
        'mp4_support' => 'string',
        'source_asset_id' => 'string',
        'normalize_audio' => 'bool',
        'static_renditions' => '\MuxPhp\Models\AssetStaticRenditions',
        'recording_times' => '\MuxPhp\Models\AssetRecordingTimes[]',
        'non_standard_input_reasons' => '\MuxPhp\Models\AssetNonStandardInputReasons',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'int64',
        'status' => null,
        'duration' => 'double',
        'max_stored_resolution' => null,
        'max_stored_frame_rate' => 'double',
        'aspect_ratio' => null,
        'playback_ids' => null,
        'tracks' => null,
        'errors' => null,
        'per_title_encode' => 'boolean',
        'upload_id' => null,
        'is_live' => 'boolean',
        'passthrough' => null,
        'live_stream_id' => null,
        'master' => null,
        'master_access' => null,
        'mp4_support' => null,
        'source_asset_id' => null,
        'normalize_audio' => null,
        'static_renditions' => null,
        'recording_times' => null,
        'non_standard_input_reasons' => null,
        'test' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'status' => false,
		'duration' => false,
		'max_stored_resolution' => false,
		'max_stored_frame_rate' => false,
		'aspect_ratio' => false,
		'playback_ids' => false,
		'tracks' => false,
		'errors' => false,
		'per_title_encode' => false,
		'upload_id' => false,
		'is_live' => false,
		'passthrough' => false,
		'live_stream_id' => false,
		'master' => false,
		'master_access' => false,
		'mp4_support' => false,
		'source_asset_id' => false,
		'normalize_audio' => false,
		'static_renditions' => false,
		'recording_times' => false,
		'non_standard_input_reasons' => false,
		'test' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'status' => 'status',
        'duration' => 'duration',
        'max_stored_resolution' => 'max_stored_resolution',
        'max_stored_frame_rate' => 'max_stored_frame_rate',
        'aspect_ratio' => 'aspect_ratio',
        'playback_ids' => 'playback_ids',
        'tracks' => 'tracks',
        'errors' => 'errors',
        'per_title_encode' => 'per_title_encode',
        'upload_id' => 'upload_id',
        'is_live' => 'is_live',
        'passthrough' => 'passthrough',
        'live_stream_id' => 'live_stream_id',
        'master' => 'master',
        'master_access' => 'master_access',
        'mp4_support' => 'mp4_support',
        'source_asset_id' => 'source_asset_id',
        'normalize_audio' => 'normalize_audio',
        'static_renditions' => 'static_renditions',
        'recording_times' => 'recording_times',
        'non_standard_input_reasons' => 'non_standard_input_reasons',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'status' => 'setStatus',
        'duration' => 'setDuration',
        'max_stored_resolution' => 'setMaxStoredResolution',
        'max_stored_frame_rate' => 'setMaxStoredFrameRate',
        'aspect_ratio' => 'setAspectRatio',
        'playback_ids' => 'setPlaybackIds',
        'tracks' => 'setTracks',
        'errors' => 'setErrors',
        'per_title_encode' => 'setPerTitleEncode',
        'upload_id' => 'setUploadId',
        'is_live' => 'setIsLive',
        'passthrough' => 'setPassthrough',
        'live_stream_id' => 'setLiveStreamId',
        'master' => 'setMaster',
        'master_access' => 'setMasterAccess',
        'mp4_support' => 'setMp4Support',
        'source_asset_id' => 'setSourceAssetId',
        'normalize_audio' => 'setNormalizeAudio',
        'static_renditions' => 'setStaticRenditions',
        'recording_times' => 'setRecordingTimes',
        'non_standard_input_reasons' => 'setNonStandardInputReasons',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'status' => 'getStatus',
        'duration' => 'getDuration',
        'max_stored_resolution' => 'getMaxStoredResolution',
        'max_stored_frame_rate' => 'getMaxStoredFrameRate',
        'aspect_ratio' => 'getAspectRatio',
        'playback_ids' => 'getPlaybackIds',
        'tracks' => 'getTracks',
        'errors' => 'getErrors',
        'per_title_encode' => 'getPerTitleEncode',
        'upload_id' => 'getUploadId',
        'is_live' => 'getIsLive',
        'passthrough' => 'getPassthrough',
        'live_stream_id' => 'getLiveStreamId',
        'master' => 'getMaster',
        'master_access' => 'getMasterAccess',
        'mp4_support' => 'getMp4Support',
        'source_asset_id' => 'getSourceAssetId',
        'normalize_audio' => 'getNormalizeAudio',
        'static_renditions' => 'getStaticRenditions',
        'recording_times' => 'getRecordingTimes',
        'non_standard_input_reasons' => 'getNonStandardInputReasons',
        'test' => 'getTest'
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

    public const STATUS_PREPARING = 'preparing';
    public const STATUS_READY = 'ready';
    public const STATUS_ERRORED = 'errored';
    public const MAX_STORED_RESOLUTION_AUDIO_ONLY = 'Audio only';
    public const MAX_STORED_RESOLUTION_SD = 'SD';
    public const MAX_STORED_RESOLUTION_HD = 'HD';
    public const MAX_STORED_RESOLUTION_FHD = 'FHD';
    public const MAX_STORED_RESOLUTION_UHD = 'UHD';
    public const MASTER_ACCESS_TEMPORARY = 'temporary';
    public const MASTER_ACCESS_NONE = 'none';
    public const MP4_SUPPORT_STANDARD = 'standard';
    public const MP4_SUPPORT_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PREPARING,
            self::STATUS_READY,
            self::STATUS_ERRORED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaxStoredResolutionAllowableValues()
    {
        return [
            self::MAX_STORED_RESOLUTION_AUDIO_ONLY,
            self::MAX_STORED_RESOLUTION_SD,
            self::MAX_STORED_RESOLUTION_HD,
            self::MAX_STORED_RESOLUTION_FHD,
            self::MAX_STORED_RESOLUTION_UHD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMasterAccessAllowableValues()
    {
        return [
            self::MASTER_ACCESS_TEMPORARY,
            self::MASTER_ACCESS_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMp4SupportAllowableValues()
    {
        return [
            self::MP4_SUPPORT_STANDARD,
            self::MP4_SUPPORT_NONE,
        ];
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
        // MUX: enum hack (self::) due to OAS emitting problems.
        //      please re-integrate with mainline when possible.
        //      src: https://github.com/OpenAPITools/openapi-generator/issues/9038
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('max_stored_resolution', $data ?? [], null);
        $this->setIfExists('max_stored_frame_rate', $data ?? [], null);
        $this->setIfExists('aspect_ratio', $data ?? [], null);
        $this->setIfExists('playback_ids', $data ?? [], null);
        $this->setIfExists('tracks', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('per_title_encode', $data ?? [], null);
        $this->setIfExists('upload_id', $data ?? [], null);
        $this->setIfExists('is_live', $data ?? [], null);
        $this->setIfExists('passthrough', $data ?? [], null);
        $this->setIfExists('live_stream_id', $data ?? [], null);
        $this->setIfExists('master', $data ?? [], null);
        $this->setIfExists('master_access', $data ?? [], self::MASTER_ACCESS_NONE);
        $this->setIfExists('mp4_support', $data ?? [], self::MP4_SUPPORT_NONE);
        $this->setIfExists('source_asset_id', $data ?? [], null);
        $this->setIfExists('normalize_audio', $data ?? [], false);
        $this->setIfExists('static_renditions', $data ?? [], null);
        $this->setIfExists('recording_times', $data ?? [], null);
        $this->setIfExists('non_standard_input_reasons', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMaxStoredResolutionAllowableValues();
        if (!is_null($this->container['max_stored_resolution']) && !in_array($this->container['max_stored_resolution'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'max_stored_resolution', must be one of '%s'",
                $this->container['max_stored_resolution'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($this->container['master_access']) && !in_array($this->container['master_access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'master_access', must be one of '%s'",
                $this->container['master_access'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($this->container['mp4_support']) && !in_array($this->container['mp4_support'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mp4_support', must be one of '%s'",
                $this->container['mp4_support'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the Asset. Max 255 characters.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Time the Asset was created, defined as a Unix timestamp (seconds since epoch).
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the asset.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return double|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double|null $duration The duration of the asset in seconds (max duration for a single asset is 12 hours).
     *
     * @return self
     */
    public function setDuration($duration)
    {

        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }

        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets max_stored_resolution
     *
     * @return string|null
     */
    public function getMaxStoredResolution()
    {
        return $this->container['max_stored_resolution'];
    }

    /**
     * Sets max_stored_resolution
     *
     * @param string|null $max_stored_resolution The maximum resolution that has been stored for the asset. The asset may be delivered at lower resolutions depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored.
     *
     * @return self
     */
    public function setMaxStoredResolution($max_stored_resolution)
    {
        $allowedValues = $this->getMaxStoredResolutionAllowableValues();
        if (!is_null($max_stored_resolution) && !in_array($max_stored_resolution, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'max_stored_resolution', must be one of '%s'",
                    $max_stored_resolution,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($max_stored_resolution)) {
            throw new \InvalidArgumentException('non-nullable max_stored_resolution cannot be null');
        }

        $this->container['max_stored_resolution'] = $max_stored_resolution;

        return $this;
    }

    /**
     * Gets max_stored_frame_rate
     *
     * @return double|null
     */
    public function getMaxStoredFrameRate()
    {
        return $this->container['max_stored_frame_rate'];
    }

    /**
     * Sets max_stored_frame_rate
     *
     * @param double|null $max_stored_frame_rate The maximum frame rate that has been stored for the asset. The asset may be delivered at lower frame rates depending on the device and bandwidth, however it cannot be delivered at a higher value than is stored. This field may return -1 if the frame rate of the input cannot be reliably determined.
     *
     * @return self
     */
    public function setMaxStoredFrameRate($max_stored_frame_rate)
    {

        if (is_null($max_stored_frame_rate)) {
            throw new \InvalidArgumentException('non-nullable max_stored_frame_rate cannot be null');
        }

        $this->container['max_stored_frame_rate'] = $max_stored_frame_rate;

        return $this;
    }

    /**
     * Gets aspect_ratio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param string|null $aspect_ratio The aspect ratio of the asset in the form of `width:height`, for example `16:9`.
     *
     * @return self
     */
    public function setAspectRatio($aspect_ratio)
    {

        if (is_null($aspect_ratio)) {
            throw new \InvalidArgumentException('non-nullable aspect_ratio cannot be null');
        }

        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets playback_ids
     *
     * @return \MuxPhp\Models\PlaybackID[]|null
     */
    public function getPlaybackIds()
    {
        return $this->container['playback_ids'];
    }

    /**
     * Sets playback_ids
     *
     * @param \MuxPhp\Models\PlaybackID[]|null $playback_ids An array of Playback ID objects. Use these to create HLS playback URLs. See [Play your videos](https://docs.mux.com/guides/video/play-your-videos) for more details.
     *
     * @return self
     */
    public function setPlaybackIds($playback_ids)
    {

        if (is_null($playback_ids)) {
            throw new \InvalidArgumentException('non-nullable playback_ids cannot be null');
        }

        $this->container['playback_ids'] = $playback_ids;

        return $this;
    }

    /**
     * Gets tracks
     *
     * @return \MuxPhp\Models\Track[]|null
     */
    public function getTracks()
    {
        return $this->container['tracks'];
    }

    /**
     * Sets tracks
     *
     * @param \MuxPhp\Models\Track[]|null $tracks The individual media tracks that make up an asset.
     *
     * @return self
     */
    public function setTracks($tracks)
    {

        if (is_null($tracks)) {
            throw new \InvalidArgumentException('non-nullable tracks cannot be null');
        }

        $this->container['tracks'] = $tracks;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \MuxPhp\Models\AssetErrors|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \MuxPhp\Models\AssetErrors|null $errors errors
     *
     * @return self
     */
    public function setErrors($errors)
    {

        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets per_title_encode
     *
     * @return bool|null
     * @deprecated
     */
    public function getPerTitleEncode()
    {
        return $this->container['per_title_encode'];
    }

    /**
     * Sets per_title_encode
     *
     * @param bool|null $per_title_encode per_title_encode
     *
     * @return self
     * @deprecated
     */
    public function setPerTitleEncode($per_title_encode)
    {

        if (is_null($per_title_encode)) {
            throw new \InvalidArgumentException('non-nullable per_title_encode cannot be null');
        }

        $this->container['per_title_encode'] = $per_title_encode;

        return $this;
    }

    /**
     * Gets upload_id
     *
     * @return string|null
     */
    public function getUploadId()
    {
        return $this->container['upload_id'];
    }

    /**
     * Sets upload_id
     *
     * @param string|null $upload_id Unique identifier for the Direct Upload. This is an optional parameter added when the asset is created from a direct upload.
     *
     * @return self
     */
    public function setUploadId($upload_id)
    {

        if (is_null($upload_id)) {
            throw new \InvalidArgumentException('non-nullable upload_id cannot be null');
        }

        $this->container['upload_id'] = $upload_id;

        return $this;
    }

    /**
     * Gets is_live
     *
     * @return bool|null
     */
    public function getIsLive()
    {
        return $this->container['is_live'];
    }

    /**
     * Sets is_live
     *
     * @param bool|null $is_live Indicates whether the live stream that created this asset is currently `active` and not in `idle` state. This is an optional parameter added when the asset is created from a live stream.
     *
     * @return self
     */
    public function setIsLive($is_live)
    {

        if (is_null($is_live)) {
            throw new \InvalidArgumentException('non-nullable is_live cannot be null');
        }

        $this->container['is_live'] = $is_live;

        return $this;
    }

    /**
     * Gets passthrough
     *
     * @return string|null
     */
    public function getPassthrough()
    {
        return $this->container['passthrough'];
    }

    /**
     * Sets passthrough
     *
     * @param string|null $passthrough Arbitrary user-supplied metadata set for the asset. Max 255 characters.
     *
     * @return self
     */
    public function setPassthrough($passthrough)
    {

        if (is_null($passthrough)) {
            throw new \InvalidArgumentException('non-nullable passthrough cannot be null');
        }

        $this->container['passthrough'] = $passthrough;

        return $this;
    }

    /**
     * Gets live_stream_id
     *
     * @return string|null
     */
    public function getLiveStreamId()
    {
        return $this->container['live_stream_id'];
    }

    /**
     * Sets live_stream_id
     *
     * @param string|null $live_stream_id Unique identifier for the live stream. This is an optional parameter added when the asset is created from a live stream.
     *
     * @return self
     */
    public function setLiveStreamId($live_stream_id)
    {

        if (is_null($live_stream_id)) {
            throw new \InvalidArgumentException('non-nullable live_stream_id cannot be null');
        }

        $this->container['live_stream_id'] = $live_stream_id;

        return $this;
    }

    /**
     * Gets master
     *
     * @return \MuxPhp\Models\AssetMaster|null
     */
    public function getMaster()
    {
        return $this->container['master'];
    }

    /**
     * Sets master
     *
     * @param \MuxPhp\Models\AssetMaster|null $master master
     *
     * @return self
     */
    public function setMaster($master)
    {

        if (is_null($master)) {
            throw new \InvalidArgumentException('non-nullable master cannot be null');
        }

        $this->container['master'] = $master;

        return $this;
    }

    /**
     * Gets master_access
     *
     * @return string|null
     */
    public function getMasterAccess()
    {
        return $this->container['master_access'];
    }

    /**
     * Sets master_access
     *
     * @param string|null $master_access master_access
     *
     * @return self
     */
    public function setMasterAccess($master_access)
    {
        $allowedValues = $this->getMasterAccessAllowableValues();
        if (!is_null($master_access) && !in_array($master_access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'master_access', must be one of '%s'",
                    $master_access,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($master_access)) {
            throw new \InvalidArgumentException('non-nullable master_access cannot be null');
        }

        $this->container['master_access'] = $master_access;

        return $this;
    }

    /**
     * Gets mp4_support
     *
     * @return string|null
     */
    public function getMp4Support()
    {
        return $this->container['mp4_support'];
    }

    /**
     * Sets mp4_support
     *
     * @param string|null $mp4_support mp4_support
     *
     * @return self
     */
    public function setMp4Support($mp4_support)
    {
        $allowedValues = $this->getMp4SupportAllowableValues();
        if (!is_null($mp4_support) && !in_array($mp4_support, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mp4_support', must be one of '%s'",
                    $mp4_support,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($mp4_support)) {
            throw new \InvalidArgumentException('non-nullable mp4_support cannot be null');
        }

        $this->container['mp4_support'] = $mp4_support;

        return $this;
    }

    /**
     * Gets source_asset_id
     *
     * @return string|null
     */
    public function getSourceAssetId()
    {
        return $this->container['source_asset_id'];
    }

    /**
     * Sets source_asset_id
     *
     * @param string|null $source_asset_id Asset Identifier of the video used as the source for creating the clip.
     *
     * @return self
     */
    public function setSourceAssetId($source_asset_id)
    {

        if (is_null($source_asset_id)) {
            throw new \InvalidArgumentException('non-nullable source_asset_id cannot be null');
        }

        $this->container['source_asset_id'] = $source_asset_id;

        return $this;
    }

    /**
     * Gets normalize_audio
     *
     * @return bool|null
     */
    public function getNormalizeAudio()
    {
        return $this->container['normalize_audio'];
    }

    /**
     * Sets normalize_audio
     *
     * @param bool|null $normalize_audio Normalize the audio track loudness level. This parameter is only applicable to on-demand (not live) assets.
     *
     * @return self
     */
    public function setNormalizeAudio($normalize_audio)
    {

        if (is_null($normalize_audio)) {
            throw new \InvalidArgumentException('non-nullable normalize_audio cannot be null');
        }

        $this->container['normalize_audio'] = $normalize_audio;

        return $this;
    }

    /**
     * Gets static_renditions
     *
     * @return \MuxPhp\Models\AssetStaticRenditions|null
     */
    public function getStaticRenditions()
    {
        return $this->container['static_renditions'];
    }

    /**
     * Sets static_renditions
     *
     * @param \MuxPhp\Models\AssetStaticRenditions|null $static_renditions static_renditions
     *
     * @return self
     */
    public function setStaticRenditions($static_renditions)
    {

        if (is_null($static_renditions)) {
            throw new \InvalidArgumentException('non-nullable static_renditions cannot be null');
        }

        $this->container['static_renditions'] = $static_renditions;

        return $this;
    }

    /**
     * Gets recording_times
     *
     * @return \MuxPhp\Models\AssetRecordingTimes[]|null
     */
    public function getRecordingTimes()
    {
        return $this->container['recording_times'];
    }

    /**
     * Sets recording_times
     *
     * @param \MuxPhp\Models\AssetRecordingTimes[]|null $recording_times An array of individual live stream recording sessions. A recording session is created on each encoder connection during the live stream. Additionally any time slate media is inserted during brief interruptions in the live stream media or times when the live streaming software disconnects, a recording session representing the slate media will be added with a \"slate\" type.
     *
     * @return self
     */
    public function setRecordingTimes($recording_times)
    {

        if (is_null($recording_times)) {
            throw new \InvalidArgumentException('non-nullable recording_times cannot be null');
        }

        $this->container['recording_times'] = $recording_times;

        return $this;
    }

    /**
     * Gets non_standard_input_reasons
     *
     * @return \MuxPhp\Models\AssetNonStandardInputReasons|null
     */
    public function getNonStandardInputReasons()
    {
        return $this->container['non_standard_input_reasons'];
    }

    /**
     * Sets non_standard_input_reasons
     *
     * @param \MuxPhp\Models\AssetNonStandardInputReasons|null $non_standard_input_reasons non_standard_input_reasons
     *
     * @return self
     */
    public function setNonStandardInputReasons($non_standard_input_reasons)
    {

        if (is_null($non_standard_input_reasons)) {
            throw new \InvalidArgumentException('non-nullable non_standard_input_reasons cannot be null');
        }

        $this->container['non_standard_input_reasons'] = $non_standard_input_reasons;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test True means this live stream is a test asset. A test asset can help evaluate the Mux Video APIs without incurring any cost. There is no limit on number of test assets created. Test assets are watermarked with the Mux logo, limited to 10 seconds, and deleted after 24 hrs.
     *
     * @return self
     */
    public function setTest($test)
    {

        if (is_null($test)) {
            throw new \InvalidArgumentException('non-nullable test cannot be null');
        }

        $this->container['test'] = $test;

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
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


