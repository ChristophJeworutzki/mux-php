<?php
/**
 * LiveStream
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
 * LiveStream Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LiveStream implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LiveStream';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => 'string',
        'stream_key' => 'string',
        'active_asset_id' => 'string',
        'recent_asset_ids' => 'string[]',
        'status' => '\MuxPhp\Models\LiveStreamStatus',
        'playback_ids' => '\MuxPhp\Models\PlaybackID[]',
        'new_asset_settings' => '\MuxPhp\Models\CreateAssetRequest',
        'passthrough' => 'string',
        'audio_only' => 'bool',
        'embedded_subtitles' => '\MuxPhp\Models\LiveStreamEmbeddedSubtitleSettings[]',
        'generated_subtitles' => '\MuxPhp\Models\LiveStreamGeneratedSubtitleSettings[]',
        'reconnect_window' => 'float',
        'use_slate_for_standard_latency' => 'bool',
        'reconnect_slate_url' => 'string',
        'reduced_latency' => 'bool',
        'low_latency' => 'bool',
        'simulcast_targets' => '\MuxPhp\Models\SimulcastTarget[]',
        'latency_mode' => 'string',
        'test' => 'bool',
        'max_continuous_duration' => 'int'
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
        'stream_key' => null,
        'active_asset_id' => null,
        'recent_asset_ids' => null,
        'status' => null,
        'playback_ids' => null,
        'new_asset_settings' => null,
        'passthrough' => null,
        'audio_only' => null,
        'embedded_subtitles' => null,
        'generated_subtitles' => null,
        'reconnect_window' => 'float',
        'use_slate_for_standard_latency' => 'boolean',
        'reconnect_slate_url' => null,
        'reduced_latency' => 'boolean',
        'low_latency' => 'boolean',
        'simulcast_targets' => null,
        'latency_mode' => null,
        'test' => 'boolean',
        'max_continuous_duration' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'stream_key' => false,
		'active_asset_id' => false,
		'recent_asset_ids' => false,
		'status' => false,
		'playback_ids' => false,
		'new_asset_settings' => false,
		'passthrough' => false,
		'audio_only' => false,
		'embedded_subtitles' => false,
		'generated_subtitles' => false,
		'reconnect_window' => false,
		'use_slate_for_standard_latency' => false,
		'reconnect_slate_url' => false,
		'reduced_latency' => false,
		'low_latency' => false,
		'simulcast_targets' => false,
		'latency_mode' => false,
		'test' => false,
		'max_continuous_duration' => false
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
        'stream_key' => 'stream_key',
        'active_asset_id' => 'active_asset_id',
        'recent_asset_ids' => 'recent_asset_ids',
        'status' => 'status',
        'playback_ids' => 'playback_ids',
        'new_asset_settings' => 'new_asset_settings',
        'passthrough' => 'passthrough',
        'audio_only' => 'audio_only',
        'embedded_subtitles' => 'embedded_subtitles',
        'generated_subtitles' => 'generated_subtitles',
        'reconnect_window' => 'reconnect_window',
        'use_slate_for_standard_latency' => 'use_slate_for_standard_latency',
        'reconnect_slate_url' => 'reconnect_slate_url',
        'reduced_latency' => 'reduced_latency',
        'low_latency' => 'low_latency',
        'simulcast_targets' => 'simulcast_targets',
        'latency_mode' => 'latency_mode',
        'test' => 'test',
        'max_continuous_duration' => 'max_continuous_duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'stream_key' => 'setStreamKey',
        'active_asset_id' => 'setActiveAssetId',
        'recent_asset_ids' => 'setRecentAssetIds',
        'status' => 'setStatus',
        'playback_ids' => 'setPlaybackIds',
        'new_asset_settings' => 'setNewAssetSettings',
        'passthrough' => 'setPassthrough',
        'audio_only' => 'setAudioOnly',
        'embedded_subtitles' => 'setEmbeddedSubtitles',
        'generated_subtitles' => 'setGeneratedSubtitles',
        'reconnect_window' => 'setReconnectWindow',
        'use_slate_for_standard_latency' => 'setUseSlateForStandardLatency',
        'reconnect_slate_url' => 'setReconnectSlateUrl',
        'reduced_latency' => 'setReducedLatency',
        'low_latency' => 'setLowLatency',
        'simulcast_targets' => 'setSimulcastTargets',
        'latency_mode' => 'setLatencyMode',
        'test' => 'setTest',
        'max_continuous_duration' => 'setMaxContinuousDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'stream_key' => 'getStreamKey',
        'active_asset_id' => 'getActiveAssetId',
        'recent_asset_ids' => 'getRecentAssetIds',
        'status' => 'getStatus',
        'playback_ids' => 'getPlaybackIds',
        'new_asset_settings' => 'getNewAssetSettings',
        'passthrough' => 'getPassthrough',
        'audio_only' => 'getAudioOnly',
        'embedded_subtitles' => 'getEmbeddedSubtitles',
        'generated_subtitles' => 'getGeneratedSubtitles',
        'reconnect_window' => 'getReconnectWindow',
        'use_slate_for_standard_latency' => 'getUseSlateForStandardLatency',
        'reconnect_slate_url' => 'getReconnectSlateUrl',
        'reduced_latency' => 'getReducedLatency',
        'low_latency' => 'getLowLatency',
        'simulcast_targets' => 'getSimulcastTargets',
        'latency_mode' => 'getLatencyMode',
        'test' => 'getTest',
        'max_continuous_duration' => 'getMaxContinuousDuration'
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

    public const LATENCY_MODE_LOW = 'low';
    public const LATENCY_MODE_REDUCED = 'reduced';
    public const LATENCY_MODE_STANDARD = 'standard';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLatencyModeAllowableValues()
    {
        return [
            self::LATENCY_MODE_LOW,
            self::LATENCY_MODE_REDUCED,
            self::LATENCY_MODE_STANDARD,
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
        $this->setIfExists('stream_key', $data ?? [], null);
        $this->setIfExists('active_asset_id', $data ?? [], null);
        $this->setIfExists('recent_asset_ids', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('playback_ids', $data ?? [], null);
        $this->setIfExists('new_asset_settings', $data ?? [], null);
        $this->setIfExists('passthrough', $data ?? [], null);
        $this->setIfExists('audio_only', $data ?? [], null);
        $this->setIfExists('embedded_subtitles', $data ?? [], null);
        $this->setIfExists('generated_subtitles', $data ?? [], null);
        $this->setIfExists('reconnect_window', $data ?? [], 60);
        $this->setIfExists('use_slate_for_standard_latency', $data ?? [], false);
        $this->setIfExists('reconnect_slate_url', $data ?? [], null);
        $this->setIfExists('reduced_latency', $data ?? [], null);
        $this->setIfExists('low_latency', $data ?? [], null);
        $this->setIfExists('simulcast_targets', $data ?? [], null);
        $this->setIfExists('latency_mode', $data ?? [], null);
        $this->setIfExists('test', $data ?? [], null);
        $this->setIfExists('max_continuous_duration', $data ?? [], 43200);
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

        if (!is_null($this->container['reconnect_window']) && ($this->container['reconnect_window'] > 1800)) {
            $invalidProperties[] = "invalid value for 'reconnect_window', must be smaller than or equal to 1800.";
        }

        if (!is_null($this->container['reconnect_window']) && ($this->container['reconnect_window'] < 0)) {
            $invalidProperties[] = "invalid value for 'reconnect_window', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getLatencyModeAllowableValues();
        if (!is_null($this->container['latency_mode']) && !in_array($this->container['latency_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'latency_mode', must be one of '%s'",
                $this->container['latency_mode'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['max_continuous_duration']) && ($this->container['max_continuous_duration'] > 43200)) {
            $invalidProperties[] = "invalid value for 'max_continuous_duration', must be smaller than or equal to 43200.";
        }

        if (!is_null($this->container['max_continuous_duration']) && ($this->container['max_continuous_duration'] < 60)) {
            $invalidProperties[] = "invalid value for 'max_continuous_duration', must be bigger than or equal to 60.";
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
     * @param string|null $id Unique identifier for the Live Stream. Max 255 characters.
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
     * @param string|null $created_at Time the Live Stream was created, defined as a Unix timestamp (seconds since epoch).
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
     * Gets stream_key
     *
     * @return string|null
     */
    public function getStreamKey()
    {
        return $this->container['stream_key'];
    }

    /**
     * Sets stream_key
     *
     * @param string|null $stream_key Unique key used for streaming to a Mux RTMP endpoint. This should be considered as sensitive as credentials, anyone with this stream key can begin streaming.
     *
     * @return self
     */
    public function setStreamKey($stream_key)
    {

        if (is_null($stream_key)) {
            throw new \InvalidArgumentException('non-nullable stream_key cannot be null');
        }

        $this->container['stream_key'] = $stream_key;

        return $this;
    }

    /**
     * Gets active_asset_id
     *
     * @return string|null
     */
    public function getActiveAssetId()
    {
        return $this->container['active_asset_id'];
    }

    /**
     * Sets active_asset_id
     *
     * @param string|null $active_asset_id The Asset that is currently being created if there is an active broadcast.
     *
     * @return self
     */
    public function setActiveAssetId($active_asset_id)
    {

        if (is_null($active_asset_id)) {
            throw new \InvalidArgumentException('non-nullable active_asset_id cannot be null');
        }

        $this->container['active_asset_id'] = $active_asset_id;

        return $this;
    }

    /**
     * Gets recent_asset_ids
     *
     * @return string[]|null
     */
    public function getRecentAssetIds()
    {
        return $this->container['recent_asset_ids'];
    }

    /**
     * Sets recent_asset_ids
     *
     * @param string[]|null $recent_asset_ids An array of strings with the most recent Assets that were created from this live stream.
     *
     * @return self
     */
    public function setRecentAssetIds($recent_asset_ids)
    {

        if (is_null($recent_asset_ids)) {
            throw new \InvalidArgumentException('non-nullable recent_asset_ids cannot be null');
        }

        $this->container['recent_asset_ids'] = $recent_asset_ids;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \MuxPhp\Models\LiveStreamStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MuxPhp\Models\LiveStreamStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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
     * Gets new_asset_settings
     *
     * @return \MuxPhp\Models\CreateAssetRequest|null
     */
    public function getNewAssetSettings()
    {
        return $this->container['new_asset_settings'];
    }

    /**
     * Sets new_asset_settings
     *
     * @param \MuxPhp\Models\CreateAssetRequest|null $new_asset_settings new_asset_settings
     *
     * @return self
     */
    public function setNewAssetSettings($new_asset_settings)
    {

        if (is_null($new_asset_settings)) {
            throw new \InvalidArgumentException('non-nullable new_asset_settings cannot be null');
        }

        $this->container['new_asset_settings'] = $new_asset_settings;

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
     * Gets audio_only
     *
     * @return bool|null
     */
    public function getAudioOnly()
    {
        return $this->container['audio_only'];
    }

    /**
     * Sets audio_only
     *
     * @param bool|null $audio_only The live stream only processes the audio track if the value is set to true. Mux drops the video track if broadcasted.
     *
     * @return self
     */
    public function setAudioOnly($audio_only)
    {

        if (is_null($audio_only)) {
            throw new \InvalidArgumentException('non-nullable audio_only cannot be null');
        }

        $this->container['audio_only'] = $audio_only;

        return $this;
    }

    /**
     * Gets embedded_subtitles
     *
     * @return \MuxPhp\Models\LiveStreamEmbeddedSubtitleSettings[]|null
     */
    public function getEmbeddedSubtitles()
    {
        return $this->container['embedded_subtitles'];
    }

    /**
     * Sets embedded_subtitles
     *
     * @param \MuxPhp\Models\LiveStreamEmbeddedSubtitleSettings[]|null $embedded_subtitles Describes the embedded closed caption configuration of the incoming live stream.
     *
     * @return self
     */
    public function setEmbeddedSubtitles($embedded_subtitles)
    {

        if (is_null($embedded_subtitles)) {
            throw new \InvalidArgumentException('non-nullable embedded_subtitles cannot be null');
        }

        $this->container['embedded_subtitles'] = $embedded_subtitles;

        return $this;
    }

    /**
     * Gets generated_subtitles
     *
     * @return \MuxPhp\Models\LiveStreamGeneratedSubtitleSettings[]|null
     */
    public function getGeneratedSubtitles()
    {
        return $this->container['generated_subtitles'];
    }

    /**
     * Sets generated_subtitles
     *
     * @param \MuxPhp\Models\LiveStreamGeneratedSubtitleSettings[]|null $generated_subtitles Configure the incoming live stream to include subtitles created with automatic speech recognition. Each Asset created from a live stream with `generated_subtitles` configured will automatically receive two text tracks. The first of these will have a `text_source` value of `generated_live`, and will be available with `ready` status as soon as the stream is live. The second text track will have a `text_source` value of `generated_live_final` and will contain subtitles with improved accuracy, timing, and formatting. However, `generated_live_final` tracks will not be available in `ready` status until the live stream ends. If an Asset has both `generated_live` and `generated_live_final` tracks that are `ready`, then only the `generated_live_final` track will be included during playback.
     *
     * @return self
     */
    public function setGeneratedSubtitles($generated_subtitles)
    {

        if (is_null($generated_subtitles)) {
            throw new \InvalidArgumentException('non-nullable generated_subtitles cannot be null');
        }

        $this->container['generated_subtitles'] = $generated_subtitles;

        return $this;
    }

    /**
     * Gets reconnect_window
     *
     * @return float|null
     */
    public function getReconnectWindow()
    {
        return $this->container['reconnect_window'];
    }

    /**
     * Sets reconnect_window
     *
     * @param float|null $reconnect_window When live streaming software disconnects from Mux, either intentionally or due to a drop in the network, the Reconnect Window is the time in seconds that Mux should wait for the streaming software to reconnect before considering the live stream finished and completing the recorded asset. **Max**: 1800s (30 minutes).  Reduced and Low Latency streams with a Reconnect Window greater than zero will insert slate media into the recorded asset while waiting for the streaming software to reconnect or when there are brief interruptions in the live stream media. When using a Reconnect Window setting higher than 60 seconds with a Standard Latency stream, we highly recommend enabling slate with the `use_slate_for_standard_latency` option.
     *
     * @return self
     */
    public function setReconnectWindow($reconnect_window)
    {

        if (!is_null($reconnect_window) && ($reconnect_window > 1800)) {
            throw new \InvalidArgumentException('invalid value for $reconnect_window when calling LiveStream., must be smaller than or equal to 1800.');
        }
        if (!is_null($reconnect_window) && ($reconnect_window < 0)) {
            throw new \InvalidArgumentException('invalid value for $reconnect_window when calling LiveStream., must be bigger than or equal to 0.');
        }


        if (is_null($reconnect_window)) {
            throw new \InvalidArgumentException('non-nullable reconnect_window cannot be null');
        }

        $this->container['reconnect_window'] = $reconnect_window;

        return $this;
    }

    /**
     * Gets use_slate_for_standard_latency
     *
     * @return bool|null
     */
    public function getUseSlateForStandardLatency()
    {
        return $this->container['use_slate_for_standard_latency'];
    }

    /**
     * Sets use_slate_for_standard_latency
     *
     * @param bool|null $use_slate_for_standard_latency By default, Standard Latency live streams do not have slate media inserted while waiting for live streaming software to reconnect to Mux. Setting this to true enables slate insertion on a Standard Latency stream.
     *
     * @return self
     */
    public function setUseSlateForStandardLatency($use_slate_for_standard_latency)
    {

        if (is_null($use_slate_for_standard_latency)) {
            throw new \InvalidArgumentException('non-nullable use_slate_for_standard_latency cannot be null');
        }

        $this->container['use_slate_for_standard_latency'] = $use_slate_for_standard_latency;

        return $this;
    }

    /**
     * Gets reconnect_slate_url
     *
     * @return string|null
     */
    public function getReconnectSlateUrl()
    {
        return $this->container['reconnect_slate_url'];
    }

    /**
     * Sets reconnect_slate_url
     *
     * @param string|null $reconnect_slate_url The URL of the image file that Mux should download and use as slate media during interruptions of the live stream media. This file will be downloaded each time a new recorded asset is created from the live stream. If this is not set, the default slate media will be used.
     *
     * @return self
     */
    public function setReconnectSlateUrl($reconnect_slate_url)
    {

        if (is_null($reconnect_slate_url)) {
            throw new \InvalidArgumentException('non-nullable reconnect_slate_url cannot be null');
        }

        $this->container['reconnect_slate_url'] = $reconnect_slate_url;

        return $this;
    }

    /**
     * Gets reduced_latency
     *
     * @return bool|null
     * @deprecated
     */
    public function getReducedLatency()
    {
        return $this->container['reduced_latency'];
    }

    /**
     * Sets reduced_latency
     *
     * @param bool|null $reduced_latency This field is deprecated. Please use latency_mode instead. Latency is the time from when the streamer transmits a frame of video to when you see it in the player. Set this if you want lower latency for your live stream. See the [Reduce live stream latency guide](https://docs.mux.com/guides/video/reduce-live-stream-latency) to understand the tradeoffs.
     *
     * @return self
     * @deprecated
     */
    public function setReducedLatency($reduced_latency)
    {

        if (is_null($reduced_latency)) {
            throw new \InvalidArgumentException('non-nullable reduced_latency cannot be null');
        }

        $this->container['reduced_latency'] = $reduced_latency;

        return $this;
    }

    /**
     * Gets low_latency
     *
     * @return bool|null
     * @deprecated
     */
    public function getLowLatency()
    {
        return $this->container['low_latency'];
    }

    /**
     * Sets low_latency
     *
     * @param bool|null $low_latency This field is deprecated. Please use latency_mode instead. Latency is the time from when the streamer transmits a frame of video to when you see it in the player. Setting this option will enable compatibility with the LL-HLS specification for low-latency streaming. This typically has lower latency than Reduced Latency streams, and cannot be combined with Reduced Latency.
     *
     * @return self
     * @deprecated
     */
    public function setLowLatency($low_latency)
    {

        if (is_null($low_latency)) {
            throw new \InvalidArgumentException('non-nullable low_latency cannot be null');
        }

        $this->container['low_latency'] = $low_latency;

        return $this;
    }

    /**
     * Gets simulcast_targets
     *
     * @return \MuxPhp\Models\SimulcastTarget[]|null
     */
    public function getSimulcastTargets()
    {
        return $this->container['simulcast_targets'];
    }

    /**
     * Sets simulcast_targets
     *
     * @param \MuxPhp\Models\SimulcastTarget[]|null $simulcast_targets Each Simulcast Target contains configuration details to broadcast (or \"restream\") a live stream to a third-party streaming service. [See the Stream live to 3rd party platforms guide](https://docs.mux.com/guides/video/stream-live-to-3rd-party-platforms).
     *
     * @return self
     */
    public function setSimulcastTargets($simulcast_targets)
    {

        if (is_null($simulcast_targets)) {
            throw new \InvalidArgumentException('non-nullable simulcast_targets cannot be null');
        }

        $this->container['simulcast_targets'] = $simulcast_targets;

        return $this;
    }

    /**
     * Gets latency_mode
     *
     * @return string|null
     */
    public function getLatencyMode()
    {
        return $this->container['latency_mode'];
    }

    /**
     * Sets latency_mode
     *
     * @param string|null $latency_mode Latency is the time from when the streamer transmits a frame of video to when you see it in the player. Set this as an alternative to setting low latency or reduced latency flags. The Low Latency value is a beta feature. Read more here: https://mux.com/blog/introducing-low-latency-live-streaming/
     *
     * @return self
     */
    public function setLatencyMode($latency_mode)
    {
        $allowedValues = $this->getLatencyModeAllowableValues();
        if (!is_null($latency_mode) && !in_array($latency_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'latency_mode', must be one of '%s'",
                    $latency_mode,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($latency_mode)) {
            throw new \InvalidArgumentException('non-nullable latency_mode cannot be null');
        }

        $this->container['latency_mode'] = $latency_mode;

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
     * @param bool|null $test True means this live stream is a test live stream. Test live streams can be used to help evaluate the Mux Video APIs for free. There is no limit on the number of test live streams, but they are watermarked with the Mux logo, and limited to 5 minutes. The test live stream is disabled after the stream is active for 5 mins and the recorded asset also deleted after 24 hours.
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
     * Gets max_continuous_duration
     *
     * @return int|null
     */
    public function getMaxContinuousDuration()
    {
        return $this->container['max_continuous_duration'];
    }

    /**
     * Sets max_continuous_duration
     *
     * @param int|null $max_continuous_duration The time in seconds a live stream may be continuously active before being disconnected. Defaults to 12 hours.
     *
     * @return self
     */
    public function setMaxContinuousDuration($max_continuous_duration)
    {

        if (!is_null($max_continuous_duration) && ($max_continuous_duration > 43200)) {
            throw new \InvalidArgumentException('invalid value for $max_continuous_duration when calling LiveStream., must be smaller than or equal to 43200.');
        }
        if (!is_null($max_continuous_duration) && ($max_continuous_duration < 60)) {
            throw new \InvalidArgumentException('invalid value for $max_continuous_duration when calling LiveStream., must be bigger than or equal to 60.');
        }


        if (is_null($max_continuous_duration)) {
            throw new \InvalidArgumentException('non-nullable max_continuous_duration cannot be null');
        }

        $this->container['max_continuous_duration'] = $max_continuous_duration;

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


