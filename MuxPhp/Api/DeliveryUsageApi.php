<?php
/**
 * DeliveryUsageApi
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

namespace MuxPhp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MuxPhp\ApiException;
use MuxPhp\Configuration;
use MuxPhp\HeaderSelector;
use MuxPhp\ObjectSerializer;

/**
 * DeliveryUsageApi Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */
class DeliveryUsageApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listDeliveryUsage
     *
     * List Usage
     *
     * @param  int $page Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     * @param  int $limit Number of items to include in the response (optional, default to 100)
     * @param  string $asset_id Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string $live_stream_id Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string[] $timeframe Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MuxPhp\Models\ListDeliveryUsageResponse
     */
    public function listDeliveryUsage($page = 1, $limit = 100, $asset_id = null, $live_stream_id = null, $timeframe = null)
    {
        list($response) = $this->listDeliveryUsageWithHttpInfo($page, $limit, $asset_id, $live_stream_id, $timeframe);
        return $response;
    }

    /**
     * Operation listDeliveryUsageWithHttpInfo
     *
     * List Usage
     *
     * @param  int $page Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     * @param  int $limit Number of items to include in the response (optional, default to 100)
     * @param  string $asset_id Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string $live_stream_id Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string[] $timeframe Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MuxPhp\Models\ListDeliveryUsageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDeliveryUsageWithHttpInfo($page = 1, $limit = 100, $asset_id = null, $live_stream_id = null, $timeframe = null)
    {
        $request = $this->listDeliveryUsageRequest($page, $limit, $asset_id, $live_stream_id, $timeframe);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\MuxPhp\Models\ListDeliveryUsageResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MuxPhp\Models\ListDeliveryUsageResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MuxPhp\Models\ListDeliveryUsageResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MuxPhp\Models\ListDeliveryUsageResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDeliveryUsageAsync
     *
     * List Usage
     *
     * @param  int $page Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     * @param  int $limit Number of items to include in the response (optional, default to 100)
     * @param  string $asset_id Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string $live_stream_id Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string[] $timeframe Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDeliveryUsageAsync($page = 1, $limit = 100, $asset_id = null, $live_stream_id = null, $timeframe = null)
    {
        return $this->listDeliveryUsageAsyncWithHttpInfo($page, $limit, $asset_id, $live_stream_id, $timeframe)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDeliveryUsageAsyncWithHttpInfo
     *
     * List Usage
     *
     * @param  int $page Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     * @param  int $limit Number of items to include in the response (optional, default to 100)
     * @param  string $asset_id Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string $live_stream_id Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string[] $timeframe Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDeliveryUsageAsyncWithHttpInfo($page = 1, $limit = 100, $asset_id = null, $live_stream_id = null, $timeframe = null)
    {
        $returnType = '\MuxPhp\Models\ListDeliveryUsageResponse';
        $request = $this->listDeliveryUsageRequest($page, $limit, $asset_id, $live_stream_id, $timeframe);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listDeliveryUsage'
     *
     * @param  int $page Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     * @param  int $limit Number of items to include in the response (optional, default to 100)
     * @param  string $asset_id Filter response to return delivery usage for this asset only. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string $live_stream_id Filter response to return delivery usage for assets for this live stream. You cannot specify both the &#x60;asset_id&#x60; and &#x60;live_stream_id&#x60; parameters together. (optional)
     * @param  string[] $timeframe Time window to get delivery usage information. timeframe[0] indicates the start time, timeframe[1] indicates the end time in seconds since the Unix epoch. Default time window is 1 hour representing usage from 13th to 12th hour from when the request is made. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDeliveryUsageRequest($page = 1, $limit = 100, $asset_id = null, $live_stream_id = null, $timeframe = null)
    {

        $resourcePath = '/video/v1/delivery-usage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($asset_id !== null) {
            if('form' === 'form' && is_array($asset_id)) {
                foreach($asset_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['asset_id'] = $asset_id;
            }
        }
        // query params
        if ($live_stream_id !== null) {
            if('form' === 'form' && is_array($live_stream_id)) {
                foreach($live_stream_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['live_stream_id'] = $live_stream_id;
            }
        }
        // query params
        if ($timeframe !== null) {
            if('form' === 'form' && is_array($timeframe)) {
                foreach($timeframe as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['timeframe[]'] = $timeframe;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );


        // MUX: adds support for array params.
        // TODO: future upstream?
        $query = ObjectSerializer::buildBetterQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
