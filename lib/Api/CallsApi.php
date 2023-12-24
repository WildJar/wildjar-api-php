<?php
/**
 * CallsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */

/**
 * WildJar API
 *
 * The WildJar API allows you to programmatically access call data, create and manage accounts,  create and configure services, enable features and integrations, and send SMS.
 *
 * The version of the document: 1.0.0
 * Contact: support@wildjar.com
 * Generated automatically
 */

/**
 * NOTE: This class is auto generated
 * Do not edit the class manually.
 */

namespace WildJar\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WildJar\ApiClient\ApiException;
use WildJar\ApiClient\Configuration;
use WildJar\ApiClient\HeaderSelector;
use WildJar\ApiClient\ObjectSerializer;

/**
 * CallsApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class CallsApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getCallDetails' => [
            'application/json',
        ],
        'getCalls' => [
            'application/json',
        ],
        'getOutboundCallDetails' => [
            'application/json',
        ],
        'getOutboundCalls' => [
            'application/json',
        ],
        'updateCall' => [
            'application/json',
        ],
    ];

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
    public function setHostIndex($hostIndex): void
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
     * Operation getCallDetails
     *
     * Show call details
     *
     * @param  int $id Call ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCallDetails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetCallDetails200Response|object
     */
    public function getCallDetails($id, string $contentType = self::contentTypes['getCallDetails'][0])
    {
        list($response) = $this->getCallDetailsWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation getCallDetailsWithHttpInfo
     *
     * Show call details
     *
     * @param  int $id Call ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCallDetails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetCallDetails200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCallDetailsWithHttpInfo($id, string $contentType = self::contentTypes['getCallDetails'][0])
    {
        $request = $this->getCallDetailsRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WildJar\ApiClient\Model\GetCallDetails200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetCallDetails200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCallDetails200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetCallDetails200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\WildJar\ApiClient\Model\GetCallDetails200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getCallDetailsAsync
     *
     * Show call details
     *
     * @param  int $id Call ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallDetailsAsync($id, string $contentType = self::contentTypes['getCallDetails'][0])
    {
        return $this->getCallDetailsAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCallDetailsAsyncWithHttpInfo
     *
     * Show call details
     *
     * @param  int $id Call ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallDetailsAsyncWithHttpInfo($id, string $contentType = self::contentTypes['getCallDetails'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetCallDetails200Response';
        $request = $this->getCallDetailsRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCallDetails'
     *
     * @param  int $id Call ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCallDetailsRequest($id, string $contentType = self::contentTypes['getCallDetails'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getCallDetails'
            );
        }


        $resourcePath = '/call/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCalls
     *
     * List Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $first_time_caller Filter the results by first time caller. (optional)
     * @param  string $order Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
     * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCalls'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetCalls200Response|object
     */
    public function getCalls($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $order = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null, string $contentType = self::contentTypes['getCalls'][0])
    {
        list($response) = $this->getCallsWithHttpInfo($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source, $contentType);
        return $response;
    }

    /**
     * Operation getCallsWithHttpInfo
     *
     * List Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $first_time_caller Filter the results by first time caller. (optional)
     * @param  string $order Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
     * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCalls'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetCalls200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCallsWithHttpInfo($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $order = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null, string $contentType = self::contentTypes['getCalls'][0])
    {
        $request = $this->getCallsRequest($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WildJar\ApiClient\Model\GetCalls200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetCalls200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCalls200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetCalls200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\WildJar\ApiClient\Model\GetCalls200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getCallsAsync
     *
     * List Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $first_time_caller Filter the results by first time caller. (optional)
     * @param  string $order Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
     * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallsAsync($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $order = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null, string $contentType = self::contentTypes['getCalls'][0])
    {
        return $this->getCallsAsyncWithHttpInfo($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCallsAsyncWithHttpInfo
     *
     * List Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $first_time_caller Filter the results by first time caller. (optional)
     * @param  string $order Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
     * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCallsAsyncWithHttpInfo($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $order = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null, string $contentType = self::contentTypes['getCalls'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetCalls200Response';
        $request = $this->getCallsRequest($account, $date_from, $date_to, $duration_min, $duration_max, $first_time_caller, $order, $status, $timezone, $tracking_number, $tracking_source, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCalls'
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $first_time_caller Filter the results by first time caller. (optional)
     * @param  string $order Sort the call log by the Call ID. To sort ascending, use order&#x3D;id and to sort descending, use order&#x3D;-id. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
     * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCallsRequest($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $order = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null, string $contentType = self::contentTypes['getCalls'][0])
    {













        $resourcePath = '/call';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_from,
            'dateFrom', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_to,
            'dateTo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $duration_min,
            'durationMin', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $duration_max,
            'durationMax', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_time_caller,
            'firstTimeCaller', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timezone,
            'timezone', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tracking_number,
            'trackingNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tracking_source,
            'trackingSource', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOutboundCallDetails
     *
     * Show outbound call details
     *
     * @param  string $uuid Outbound call UUID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCallDetails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetOutboundCallDetails200Response|object
     */
    public function getOutboundCallDetails($uuid, string $contentType = self::contentTypes['getOutboundCallDetails'][0])
    {
        list($response) = $this->getOutboundCallDetailsWithHttpInfo($uuid, $contentType);
        return $response;
    }

    /**
     * Operation getOutboundCallDetailsWithHttpInfo
     *
     * Show outbound call details
     *
     * @param  string $uuid Outbound call UUID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCallDetails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetOutboundCallDetails200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutboundCallDetailsWithHttpInfo($uuid, string $contentType = self::contentTypes['getOutboundCallDetails'][0])
    {
        $request = $this->getOutboundCallDetailsRequest($uuid, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getOutboundCallDetailsAsync
     *
     * Show outbound call details
     *
     * @param  string $uuid Outbound call UUID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundCallDetailsAsync($uuid, string $contentType = self::contentTypes['getOutboundCallDetails'][0])
    {
        return $this->getOutboundCallDetailsAsyncWithHttpInfo($uuid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOutboundCallDetailsAsyncWithHttpInfo
     *
     * Show outbound call details
     *
     * @param  string $uuid Outbound call UUID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundCallDetailsAsyncWithHttpInfo($uuid, string $contentType = self::contentTypes['getOutboundCallDetails'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response';
        $request = $this->getOutboundCallDetailsRequest($uuid, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOutboundCallDetails'
     *
     * @param  string $uuid Outbound call UUID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCallDetails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOutboundCallDetailsRequest($uuid, string $contentType = self::contentTypes['getOutboundCallDetails'][0])
    {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling getOutboundCallDetails'
            );
        }


        $resourcePath = '/call/outbound/{uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOutboundCalls
     *
     * List Outbound Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $order Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCalls'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetOutboundCalls200Response|object
     */
    public function getOutboundCalls($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $order = null, $status = null, $timezone = null, $tracking_number = null, string $contentType = self::contentTypes['getOutboundCalls'][0])
    {
        list($response) = $this->getOutboundCallsWithHttpInfo($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number, $contentType);
        return $response;
    }

    /**
     * Operation getOutboundCallsWithHttpInfo
     *
     * List Outbound Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $order Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCalls'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetOutboundCalls200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOutboundCallsWithHttpInfo($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $order = null, $status = null, $timezone = null, $tracking_number = null, string $contentType = self::contentTypes['getOutboundCalls'][0])
    {
        $request = $this->getOutboundCallsRequest($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WildJar\ApiClient\Model\GetOutboundCalls200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetOutboundCalls200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetOutboundCalls200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetOutboundCalls200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\WildJar\ApiClient\Model\GetOutboundCalls200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getOutboundCallsAsync
     *
     * List Outbound Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $order Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundCallsAsync($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $order = null, $status = null, $timezone = null, $tracking_number = null, string $contentType = self::contentTypes['getOutboundCalls'][0])
    {
        return $this->getOutboundCallsAsyncWithHttpInfo($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOutboundCallsAsyncWithHttpInfo
     *
     * List Outbound Calls
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $order Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOutboundCallsAsyncWithHttpInfo($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $order = null, $status = null, $timezone = null, $tracking_number = null, string $contentType = self::contentTypes['getOutboundCalls'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetOutboundCalls200Response';
        $request = $this->getOutboundCallsRequest($account, $date_from, $date_to, $duration_min, $duration_max, $order, $status, $timezone, $tracking_number, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOutboundCalls'
     *
     * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
     * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
     * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
     * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
     * @param  string $order Sort the call log by the outbound call UUID. To sort ascending, use order&#x3D;uuid and to sort descending, use order&#x3D;-uuid. (optional)
     * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
     * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
     * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getOutboundCalls'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOutboundCallsRequest($account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $order = null, $status = null, $timezone = null, $tracking_number = null, string $contentType = self::contentTypes['getOutboundCalls'][0])
    {











        $resourcePath = '/call/outbound';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_from,
            'dateFrom', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $date_to,
            'dateTo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $duration_min,
            'durationMin', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $duration_max,
            'durationMax', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timezone,
            'timezone', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tracking_number,
            'trackingNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateCall
     *
     * Add a score, tag or note to a call
     *
     * @param  int $id Call ID (required)
     * @param  \WildJar\ApiClient\Model\Call $call call (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCall'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetCallDetails200Response|object
     */
    public function updateCall($id, $call, string $contentType = self::contentTypes['updateCall'][0])
    {
        list($response) = $this->updateCallWithHttpInfo($id, $call, $contentType);
        return $response;
    }

    /**
     * Operation updateCallWithHttpInfo
     *
     * Add a score, tag or note to a call
     *
     * @param  int $id Call ID (required)
     * @param  \WildJar\ApiClient\Model\Call $call (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCall'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetCallDetails200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCallWithHttpInfo($id, $call, string $contentType = self::contentTypes['updateCall'][0])
    {
        $request = $this->updateCallRequest($id, $call, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WildJar\ApiClient\Model\GetCallDetails200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetCallDetails200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCallDetails200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetCallDetails200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\WildJar\ApiClient\Model\GetCallDetails200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateCallAsync
     *
     * Add a score, tag or note to a call
     *
     * @param  int $id Call ID (required)
     * @param  \WildJar\ApiClient\Model\Call $call (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCallAsync($id, $call, string $contentType = self::contentTypes['updateCall'][0])
    {
        return $this->updateCallAsyncWithHttpInfo($id, $call, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCallAsyncWithHttpInfo
     *
     * Add a score, tag or note to a call
     *
     * @param  int $id Call ID (required)
     * @param  \WildJar\ApiClient\Model\Call $call (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCallAsyncWithHttpInfo($id, $call, string $contentType = self::contentTypes['updateCall'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetCallDetails200Response';
        $request = $this->updateCallRequest($id, $call, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateCall'
     *
     * @param  int $id Call ID (required)
     * @param  \WildJar\ApiClient\Model\Call $call (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateCallRequest($id, $call, string $contentType = self::contentTypes['updateCall'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateCall'
            );
        }

        // verify the required parameter 'call' is set
        if ($call === null || (is_array($call) && count($call) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $call when calling updateCall'
            );
        }


        $resourcePath = '/call/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($call)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($call));
            } else {
                $httpBody = $call;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
