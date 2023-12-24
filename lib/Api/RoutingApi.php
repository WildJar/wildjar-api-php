<?php
/**
 * RoutingApi
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
 * RoutingApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class RoutingApi
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
        'blockCaller' => [
            'application/json',
        ],
        'blockCallerFromCall' => [
            'application/json',
        ],
        'createBranchAction' => [
            'application/json',
        ],
        'createIVRAction' => [
            'application/json',
        ],
        'createLocationsAction' => [
            'application/json',
        ],
        'createRobinAction' => [
            'application/json',
        ],
        'createTagAction' => [
            'application/json',
        ],
        'createTimeAction' => [
            'application/json',
        ],
        'createTransferAction' => [
            'application/json',
        ],
        'createVoicemailAction' => [
            'application/json',
        ],
        'getBranchAction' => [
            'application/json',
        ],
        'getIVRAction' => [
            'application/json',
        ],
        'getLocationsAction' => [
            'application/json',
        ],
        'getLocationsMap' => [
            'application/json',
        ],
        'getRobinAction' => [
            'application/json',
        ],
        'getTagAction' => [
            'application/json',
        ],
        'getTimeAction' => [
            'application/json',
        ],
        'getTransferAction' => [
            'application/json',
        ],
        'getVoicemailAction' => [
            'application/json',
        ],
        'listBlockedCallers' => [
            'application/json',
        ],
        'listBranchActions' => [
            'application/json',
        ],
        'listIVRs' => [
            'application/json',
        ],
        'listLocationsActions' => [
            'application/json',
        ],
        'listRobins' => [
            'application/json',
        ],
        'listTagActions' => [
            'application/json',
        ],
        'listTimeActions' => [
            'application/json',
        ],
        'listTransfers' => [
            'application/json',
        ],
        'listVoicemails' => [
            'application/json',
        ],
        'unblockNumber' => [
            'application/json',
        ],
        'updateBranchAction' => [
            'application/json',
        ],
        'updateDidRouting' => [
            'application/json',
        ],
        'updateIVRAction' => [
            'application/json',
        ],
        'updateLocationsAction' => [
            'application/json',
        ],
        'updateRobinAction' => [
            'application/json',
        ],
        'updateTagAction' => [
            'application/json',
        ],
        'updateTimeAction' => [
            'application/json',
        ],
        'updateTransferAction' => [
            'application/json',
        ],
        'updateVoicemailAction' => [
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
     * Operation blockCaller
     *
     * Block a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked action_blocked (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCaller'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\BlockCaller200Response|object
     */
    public function blockCaller($account, $action_blocked, string $contentType = self::contentTypes['blockCaller'][0])
    {
        list($response) = $this->blockCallerWithHttpInfo($account, $action_blocked, $contentType);
        return $response;
    }

    /**
     * Operation blockCallerWithHttpInfo
     *
     * Block a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCaller'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\BlockCaller200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function blockCallerWithHttpInfo($account, $action_blocked, string $contentType = self::contentTypes['blockCaller'][0])
    {
        $request = $this->blockCallerRequest($account, $action_blocked, $contentType);

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
                    if ('\WildJar\ApiClient\Model\BlockCaller200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\BlockCaller200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\BlockCaller200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\BlockCaller200Response';
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
                        '\WildJar\ApiClient\Model\BlockCaller200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation blockCallerAsync
     *
     * Block a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCaller'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockCallerAsync($account, $action_blocked, string $contentType = self::contentTypes['blockCaller'][0])
    {
        return $this->blockCallerAsyncWithHttpInfo($account, $action_blocked, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blockCallerAsyncWithHttpInfo
     *
     * Block a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCaller'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockCallerAsyncWithHttpInfo($account, $action_blocked, string $contentType = self::contentTypes['blockCaller'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\BlockCaller200Response';
        $request = $this->blockCallerRequest($account, $action_blocked, $contentType);

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
     * Create request for operation 'blockCaller'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCaller'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blockCallerRequest($account, $action_blocked, string $contentType = self::contentTypes['blockCaller'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling blockCaller'
            );
        }

        // verify the required parameter 'action_blocked' is set
        if ($action_blocked === null || (is_array($action_blocked) && count($action_blocked) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_blocked when calling blockCaller'
            );
        }


        $resourcePath = '/routing/{account}/blocked';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_blocked)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_blocked));
            } else {
                $httpBody = $action_blocked;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation blockCallerFromCall
     *
     * Block a caller from a Call record
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request block_caller_from_call_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCallerFromCall'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\BlockCaller200Response|object
     */
    public function blockCallerFromCall($account, $block_caller_from_call_request, string $contentType = self::contentTypes['blockCallerFromCall'][0])
    {
        list($response) = $this->blockCallerFromCallWithHttpInfo($account, $block_caller_from_call_request, $contentType);
        return $response;
    }

    /**
     * Operation blockCallerFromCallWithHttpInfo
     *
     * Block a caller from a Call record
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCallerFromCall'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\BlockCaller200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function blockCallerFromCallWithHttpInfo($account, $block_caller_from_call_request, string $contentType = self::contentTypes['blockCallerFromCall'][0])
    {
        $request = $this->blockCallerFromCallRequest($account, $block_caller_from_call_request, $contentType);

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
                    if ('\WildJar\ApiClient\Model\BlockCaller200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\BlockCaller200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\BlockCaller200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\BlockCaller200Response';
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
                        '\WildJar\ApiClient\Model\BlockCaller200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation blockCallerFromCallAsync
     *
     * Block a caller from a Call record
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCallerFromCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockCallerFromCallAsync($account, $block_caller_from_call_request, string $contentType = self::contentTypes['blockCallerFromCall'][0])
    {
        return $this->blockCallerFromCallAsyncWithHttpInfo($account, $block_caller_from_call_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blockCallerFromCallAsyncWithHttpInfo
     *
     * Block a caller from a Call record
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCallerFromCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockCallerFromCallAsyncWithHttpInfo($account, $block_caller_from_call_request, string $contentType = self::contentTypes['blockCallerFromCall'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\BlockCaller200Response';
        $request = $this->blockCallerFromCallRequest($account, $block_caller_from_call_request, $contentType);

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
     * Create request for operation 'blockCallerFromCall'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['blockCallerFromCall'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function blockCallerFromCallRequest($account, $block_caller_from_call_request, string $contentType = self::contentTypes['blockCallerFromCall'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling blockCallerFromCall'
            );
        }

        // verify the required parameter 'block_caller_from_call_request' is set
        if ($block_caller_from_call_request === null || (is_array($block_caller_from_call_request) && count($block_caller_from_call_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $block_caller_from_call_request when calling blockCallerFromCall'
            );
        }


        $resourcePath = '/routing/{account}/blocked';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($block_caller_from_call_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($block_caller_from_call_request));
            } else {
                $httpBody = $block_caller_from_call_request;
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
     * Operation createBranchAction
     *
     * Create a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full action_branch_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|object
     */
    public function createBranchAction($account, $action_branch_full, string $contentType = self::contentTypes['createBranchAction'][0])
    {
        list($response) = $this->createBranchActionWithHttpInfo($account, $action_branch_full, $contentType);
        return $response;
    }

    /**
     * Operation createBranchActionWithHttpInfo
     *
     * Create a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateBranchAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBranchActionWithHttpInfo($account, $action_branch_full, string $contentType = self::contentTypes['createBranchAction'][0])
    {
        $request = $this->createBranchActionRequest($account, $action_branch_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateBranchAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createBranchActionAsync
     *
     * Create a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBranchActionAsync($account, $action_branch_full, string $contentType = self::contentTypes['createBranchAction'][0])
    {
        return $this->createBranchActionAsyncWithHttpInfo($account, $action_branch_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createBranchActionAsyncWithHttpInfo
     *
     * Create a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBranchActionAsyncWithHttpInfo($account, $action_branch_full, string $contentType = self::contentTypes['createBranchAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
        $request = $this->createBranchActionRequest($account, $action_branch_full, $contentType);

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
     * Create request for operation 'createBranchAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createBranchActionRequest($account, $action_branch_full, string $contentType = self::contentTypes['createBranchAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createBranchAction'
            );
        }

        // verify the required parameter 'action_branch_full' is set
        if ($action_branch_full === null || (is_array($action_branch_full) && count($action_branch_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_branch_full when calling createBranchAction'
            );
        }


        $resourcePath = '/routing/{account}/branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_branch_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_branch_full));
            } else {
                $httpBody = $action_branch_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createIVRAction
     *
     * Create an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|object
     */
    public function createIVRAction($account, $action_ivr_full, string $contentType = self::contentTypes['createIVRAction'][0])
    {
        list($response) = $this->createIVRActionWithHttpInfo($account, $action_ivr_full, $contentType);
        return $response;
    }

    /**
     * Operation createIVRActionWithHttpInfo
     *
     * Create an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateIVRAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createIVRActionWithHttpInfo($account, $action_ivr_full, string $contentType = self::contentTypes['createIVRAction'][0])
    {
        $request = $this->createIVRActionRequest($account, $action_ivr_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateIVRAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createIVRActionAsync
     *
     * Create an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createIVRActionAsync($account, $action_ivr_full, string $contentType = self::contentTypes['createIVRAction'][0])
    {
        return $this->createIVRActionAsyncWithHttpInfo($account, $action_ivr_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createIVRActionAsyncWithHttpInfo
     *
     * Create an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createIVRActionAsyncWithHttpInfo($account, $action_ivr_full, string $contentType = self::contentTypes['createIVRAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
        $request = $this->createIVRActionRequest($account, $action_ivr_full, $contentType);

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
     * Create request for operation 'createIVRAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createIVRActionRequest($account, $action_ivr_full, string $contentType = self::contentTypes['createIVRAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createIVRAction'
            );
        }

        // verify the required parameter 'action_ivr_full' is set
        if ($action_ivr_full === null || (is_array($action_ivr_full) && count($action_ivr_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_ivr_full when calling createIVRAction'
            );
        }


        $resourcePath = '/routing/{account}/ivr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_ivr_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_ivr_full));
            } else {
                $httpBody = $action_ivr_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createLocationsAction
     *
     * Create a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full action_locations_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateLocationsAction200Response|object
     */
    public function createLocationsAction($account, $action_locations_full, string $contentType = self::contentTypes['createLocationsAction'][0])
    {
        list($response) = $this->createLocationsActionWithHttpInfo($account, $action_locations_full, $contentType);
        return $response;
    }

    /**
     * Operation createLocationsActionWithHttpInfo
     *
     * Create a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateLocationsAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLocationsActionWithHttpInfo($account, $action_locations_full, string $contentType = self::contentTypes['createLocationsAction'][0])
    {
        $request = $this->createLocationsActionRequest($account, $action_locations_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateLocationsAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateLocationsAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateLocationsAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateLocationsAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateLocationsAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createLocationsActionAsync
     *
     * Create a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLocationsActionAsync($account, $action_locations_full, string $contentType = self::contentTypes['createLocationsAction'][0])
    {
        return $this->createLocationsActionAsyncWithHttpInfo($account, $action_locations_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLocationsActionAsyncWithHttpInfo
     *
     * Create a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLocationsActionAsyncWithHttpInfo($account, $action_locations_full, string $contentType = self::contentTypes['createLocationsAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateLocationsAction200Response';
        $request = $this->createLocationsActionRequest($account, $action_locations_full, $contentType);

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
     * Create request for operation 'createLocationsAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createLocationsActionRequest($account, $action_locations_full, string $contentType = self::contentTypes['createLocationsAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createLocationsAction'
            );
        }

        // verify the required parameter 'action_locations_full' is set
        if ($action_locations_full === null || (is_array($action_locations_full) && count($action_locations_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_locations_full when calling createLocationsAction'
            );
        }


        $resourcePath = '/routing/{account}/locations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_locations_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_locations_full));
            } else {
                $httpBody = $action_locations_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createRobinAction
     *
     * Create a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|object
     */
    public function createRobinAction($account, $action_robin_full, string $contentType = self::contentTypes['createRobinAction'][0])
    {
        list($response) = $this->createRobinActionWithHttpInfo($account, $action_robin_full, $contentType);
        return $response;
    }

    /**
     * Operation createRobinActionWithHttpInfo
     *
     * Create a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateRobinAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRobinActionWithHttpInfo($account, $action_robin_full, string $contentType = self::contentTypes['createRobinAction'][0])
    {
        $request = $this->createRobinActionRequest($account, $action_robin_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateRobinAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createRobinActionAsync
     *
     * Create a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRobinActionAsync($account, $action_robin_full, string $contentType = self::contentTypes['createRobinAction'][0])
    {
        return $this->createRobinActionAsyncWithHttpInfo($account, $action_robin_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRobinActionAsyncWithHttpInfo
     *
     * Create a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRobinActionAsyncWithHttpInfo($account, $action_robin_full, string $contentType = self::contentTypes['createRobinAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
        $request = $this->createRobinActionRequest($account, $action_robin_full, $contentType);

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
     * Create request for operation 'createRobinAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRobinActionRequest($account, $action_robin_full, string $contentType = self::contentTypes['createRobinAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createRobinAction'
            );
        }

        // verify the required parameter 'action_robin_full' is set
        if ($action_robin_full === null || (is_array($action_robin_full) && count($action_robin_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_robin_full when calling createRobinAction'
            );
        }


        $resourcePath = '/routing/{account}/robin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_robin_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_robin_full));
            } else {
                $httpBody = $action_robin_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createTagAction
     *
     * Create a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTagAction200Response|object
     */
    public function createTagAction($account, $action_tag, string $contentType = self::contentTypes['createTagAction'][0])
    {
        list($response) = $this->createTagActionWithHttpInfo($account, $action_tag, $contentType);
        return $response;
    }

    /**
     * Operation createTagActionWithHttpInfo
     *
     * Create a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTagAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTagActionWithHttpInfo($account, $action_tag, string $contentType = self::contentTypes['createTagAction'][0])
    {
        $request = $this->createTagActionRequest($account, $action_tag, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTagAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTagAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTagAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createTagActionAsync
     *
     * Create a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagActionAsync($account, $action_tag, string $contentType = self::contentTypes['createTagAction'][0])
    {
        return $this->createTagActionAsyncWithHttpInfo($account, $action_tag, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTagActionAsyncWithHttpInfo
     *
     * Create a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTagActionAsyncWithHttpInfo($account, $action_tag, string $contentType = self::contentTypes['createTagAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
        $request = $this->createTagActionRequest($account, $action_tag, $contentType);

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
     * Create request for operation 'createTagAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createTagActionRequest($account, $action_tag, string $contentType = self::contentTypes['createTagAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createTagAction'
            );
        }

        // verify the required parameter 'action_tag' is set
        if ($action_tag === null || (is_array($action_tag) && count($action_tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_tag when calling createTagAction'
            );
        }


        $resourcePath = '/routing/{account}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_tag)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_tag));
            } else {
                $httpBody = $action_tag;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createTimeAction
     *
     * Create a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|object
     */
    public function createTimeAction($account, $action_time_full, string $contentType = self::contentTypes['createTimeAction'][0])
    {
        list($response) = $this->createTimeActionWithHttpInfo($account, $action_time_full, $contentType);
        return $response;
    }

    /**
     * Operation createTimeActionWithHttpInfo
     *
     * Create a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTimeAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTimeActionWithHttpInfo($account, $action_time_full, string $contentType = self::contentTypes['createTimeAction'][0])
    {
        $request = $this->createTimeActionRequest($account, $action_time_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTimeAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createTimeActionAsync
     *
     * Create a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTimeActionAsync($account, $action_time_full, string $contentType = self::contentTypes['createTimeAction'][0])
    {
        return $this->createTimeActionAsyncWithHttpInfo($account, $action_time_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTimeActionAsyncWithHttpInfo
     *
     * Create a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTimeActionAsyncWithHttpInfo($account, $action_time_full, string $contentType = self::contentTypes['createTimeAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
        $request = $this->createTimeActionRequest($account, $action_time_full, $contentType);

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
     * Create request for operation 'createTimeAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createTimeActionRequest($account, $action_time_full, string $contentType = self::contentTypes['createTimeAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createTimeAction'
            );
        }

        // verify the required parameter 'action_time_full' is set
        if ($action_time_full === null || (is_array($action_time_full) && count($action_time_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_time_full when calling createTimeAction'
            );
        }


        $resourcePath = '/routing/{account}/time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_time_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_time_full));
            } else {
                $httpBody = $action_time_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createTransferAction
     *
     * Create a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|object
     */
    public function createTransferAction($account, $action_transfer_full, string $contentType = self::contentTypes['createTransferAction'][0])
    {
        list($response) = $this->createTransferActionWithHttpInfo($account, $action_transfer_full, $contentType);
        return $response;
    }

    /**
     * Operation createTransferActionWithHttpInfo
     *
     * Create a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTransferAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTransferActionWithHttpInfo($account, $action_transfer_full, string $contentType = self::contentTypes['createTransferAction'][0])
    {
        $request = $this->createTransferActionRequest($account, $action_transfer_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTransferAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createTransferActionAsync
     *
     * Create a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTransferActionAsync($account, $action_transfer_full, string $contentType = self::contentTypes['createTransferAction'][0])
    {
        return $this->createTransferActionAsyncWithHttpInfo($account, $action_transfer_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTransferActionAsyncWithHttpInfo
     *
     * Create a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTransferActionAsyncWithHttpInfo($account, $action_transfer_full, string $contentType = self::contentTypes['createTransferAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
        $request = $this->createTransferActionRequest($account, $action_transfer_full, $contentType);

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
     * Create request for operation 'createTransferAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createTransferActionRequest($account, $action_transfer_full, string $contentType = self::contentTypes['createTransferAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createTransferAction'
            );
        }

        // verify the required parameter 'action_transfer_full' is set
        if ($action_transfer_full === null || (is_array($action_transfer_full) && count($action_transfer_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_transfer_full when calling createTransferAction'
            );
        }


        $resourcePath = '/routing/{account}/transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_transfer_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_transfer_full));
            } else {
                $httpBody = $action_transfer_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createVoicemailAction
     *
     * Create a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object
     */
    public function createVoicemailAction($account, $action_voicemail_full, string $contentType = self::contentTypes['createVoicemailAction'][0])
    {
        list($response) = $this->createVoicemailActionWithHttpInfo($account, $action_voicemail_full, $contentType);
        return $response;
    }

    /**
     * Operation createVoicemailActionWithHttpInfo
     *
     * Create a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVoicemailActionWithHttpInfo($account, $action_voicemail_full, string $contentType = self::contentTypes['createVoicemailAction'][0])
    {
        $request = $this->createVoicemailActionRequest($account, $action_voicemail_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateVoicemailAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation createVoicemailActionAsync
     *
     * Create a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVoicemailActionAsync($account, $action_voicemail_full, string $contentType = self::contentTypes['createVoicemailAction'][0])
    {
        return $this->createVoicemailActionAsyncWithHttpInfo($account, $action_voicemail_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createVoicemailActionAsyncWithHttpInfo
     *
     * Create a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVoicemailActionAsyncWithHttpInfo($account, $action_voicemail_full, string $contentType = self::contentTypes['createVoicemailAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
        $request = $this->createVoicemailActionRequest($account, $action_voicemail_full, $contentType);

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
     * Create request for operation 'createVoicemailAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createVoicemailActionRequest($account, $action_voicemail_full, string $contentType = self::contentTypes['createVoicemailAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling createVoicemailAction'
            );
        }

        // verify the required parameter 'action_voicemail_full' is set
        if ($action_voicemail_full === null || (is_array($action_voicemail_full) && count($action_voicemail_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_voicemail_full when calling createVoicemailAction'
            );
        }


        $resourcePath = '/routing/{account}/voicemail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_voicemail_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_voicemail_full));
            } else {
                $httpBody = $action_voicemail_full;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBranchAction
     *
     * Show detailed configuration of a branch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|object
     */
    public function getBranchAction($account, $action_id, string $contentType = self::contentTypes['getBranchAction'][0])
    {
        list($response) = $this->getBranchActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getBranchActionWithHttpInfo
     *
     * Show detailed configuration of a branch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateBranchAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBranchActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getBranchAction'][0])
    {
        $request = $this->getBranchActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateBranchAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getBranchActionAsync
     *
     * Show detailed configuration of a branch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranchActionAsync($account, $action_id, string $contentType = self::contentTypes['getBranchAction'][0])
    {
        return $this->getBranchActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBranchActionAsyncWithHttpInfo
     *
     * Show detailed configuration of a branch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBranchActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getBranchAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
        $request = $this->getBranchActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getBranchAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBranchActionRequest($account, $action_id, string $contentType = self::contentTypes['getBranchAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getBranchAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getBranchAction'
            );
        }


        $resourcePath = '/routing/{account}/branch/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getIVRAction
     *
     * Show detailed routing for an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|object
     */
    public function getIVRAction($account, $action_id, string $contentType = self::contentTypes['getIVRAction'][0])
    {
        list($response) = $this->getIVRActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getIVRActionWithHttpInfo
     *
     * Show detailed routing for an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateIVRAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIVRActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getIVRAction'][0])
    {
        $request = $this->getIVRActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateIVRAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getIVRActionAsync
     *
     * Show detailed routing for an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIVRActionAsync($account, $action_id, string $contentType = self::contentTypes['getIVRAction'][0])
    {
        return $this->getIVRActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIVRActionAsyncWithHttpInfo
     *
     * Show detailed routing for an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIVRActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getIVRAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
        $request = $this->getIVRActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getIVRAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getIVRActionRequest($account, $action_id, string $contentType = self::contentTypes['getIVRAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getIVRAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getIVRAction'
            );
        }


        $resourcePath = '/routing/{account}/ivr/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getLocationsAction
     *
     * Show detailed configuration of a location action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateLocationsAction200Response|object
     */
    public function getLocationsAction($account, $action_id, string $contentType = self::contentTypes['getLocationsAction'][0])
    {
        list($response) = $this->getLocationsActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getLocationsActionWithHttpInfo
     *
     * Show detailed configuration of a location action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateLocationsAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLocationsActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getLocationsAction'][0])
    {
        $request = $this->getLocationsActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateLocationsAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateLocationsAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateLocationsAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateLocationsAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateLocationsAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getLocationsActionAsync
     *
     * Show detailed configuration of a location action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLocationsActionAsync($account, $action_id, string $contentType = self::contentTypes['getLocationsAction'][0])
    {
        return $this->getLocationsActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLocationsActionAsyncWithHttpInfo
     *
     * Show detailed configuration of a location action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLocationsActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getLocationsAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateLocationsAction200Response';
        $request = $this->getLocationsActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getLocationsAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLocationsActionRequest($account, $action_id, string $contentType = self::contentTypes['getLocationsAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getLocationsAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getLocationsAction'
            );
        }


        $resourcePath = '/routing/{account}/locations/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getLocationsMap
     *
     * Show detailed location mapping
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsMap'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\UpdateLocationsAction200Response|object
     */
    public function getLocationsMap($account, $action_id, string $contentType = self::contentTypes['getLocationsMap'][0])
    {
        list($response) = $this->getLocationsMapWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getLocationsMapWithHttpInfo
     *
     * Show detailed location mapping
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsMap'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\UpdateLocationsAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLocationsMapWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getLocationsMap'][0])
    {
        $request = $this->getLocationsMapRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\UpdateLocationsAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\UpdateLocationsAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateLocationsAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\UpdateLocationsAction200Response';
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
                        '\WildJar\ApiClient\Model\UpdateLocationsAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getLocationsMapAsync
     *
     * Show detailed location mapping
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsMap'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLocationsMapAsync($account, $action_id, string $contentType = self::contentTypes['getLocationsMap'][0])
    {
        return $this->getLocationsMapAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLocationsMapAsyncWithHttpInfo
     *
     * Show detailed location mapping
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsMap'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLocationsMapAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getLocationsMap'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\UpdateLocationsAction200Response';
        $request = $this->getLocationsMapRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getLocationsMap'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getLocationsMap'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLocationsMapRequest($account, $action_id, string $contentType = self::contentTypes['getLocationsMap'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getLocationsMap'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getLocationsMap'
            );
        }


        $resourcePath = '/routing/{account}/locations/{action_id}/map';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getRobinAction
     *
     * Show detailed routing for a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|object
     */
    public function getRobinAction($account, $action_id, string $contentType = self::contentTypes['getRobinAction'][0])
    {
        list($response) = $this->getRobinActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getRobinActionWithHttpInfo
     *
     * Show detailed routing for a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateRobinAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRobinActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getRobinAction'][0])
    {
        $request = $this->getRobinActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateRobinAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getRobinActionAsync
     *
     * Show detailed routing for a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRobinActionAsync($account, $action_id, string $contentType = self::contentTypes['getRobinAction'][0])
    {
        return $this->getRobinActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRobinActionAsyncWithHttpInfo
     *
     * Show detailed routing for a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRobinActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getRobinAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
        $request = $this->getRobinActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getRobinAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRobinActionRequest($account, $action_id, string $contentType = self::contentTypes['getRobinAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getRobinAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getRobinAction'
            );
        }


        $resourcePath = '/routing/{account}/robin/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getTagAction
     *
     * Show tag action details
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTagAction200Response|object
     */
    public function getTagAction($account, $action_id, string $contentType = self::contentTypes['getTagAction'][0])
    {
        list($response) = $this->getTagActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getTagActionWithHttpInfo
     *
     * Show tag action details
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTagAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTagActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTagAction'][0])
    {
        $request = $this->getTagActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTagAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTagAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTagAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getTagActionAsync
     *
     * Show tag action details
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTagActionAsync($account, $action_id, string $contentType = self::contentTypes['getTagAction'][0])
    {
        return $this->getTagActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTagActionAsyncWithHttpInfo
     *
     * Show tag action details
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTagActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTagAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
        $request = $this->getTagActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getTagAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTagActionRequest($account, $action_id, string $contentType = self::contentTypes['getTagAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getTagAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getTagAction'
            );
        }


        $resourcePath = '/routing/{account}/tag/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getTimeAction
     *
     * Show detailed routing for a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|object
     */
    public function getTimeAction($account, $action_id, string $contentType = self::contentTypes['getTimeAction'][0])
    {
        list($response) = $this->getTimeActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getTimeActionWithHttpInfo
     *
     * Show detailed routing for a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTimeAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTimeActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTimeAction'][0])
    {
        $request = $this->getTimeActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTimeAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getTimeActionAsync
     *
     * Show detailed routing for a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTimeActionAsync($account, $action_id, string $contentType = self::contentTypes['getTimeAction'][0])
    {
        return $this->getTimeActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTimeActionAsyncWithHttpInfo
     *
     * Show detailed routing for a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTimeActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTimeAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
        $request = $this->getTimeActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getTimeAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTimeActionRequest($account, $action_id, string $contentType = self::contentTypes['getTimeAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getTimeAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getTimeAction'
            );
        }


        $resourcePath = '/routing/{account}/time/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getTransferAction
     *
     * Show detailed routing for a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|object
     */
    public function getTransferAction($account, $action_id, string $contentType = self::contentTypes['getTransferAction'][0])
    {
        list($response) = $this->getTransferActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getTransferActionWithHttpInfo
     *
     * Show detailed routing for a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTransferAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransferActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTransferAction'][0])
    {
        $request = $this->getTransferActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTransferAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getTransferActionAsync
     *
     * Show detailed routing for a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransferActionAsync($account, $action_id, string $contentType = self::contentTypes['getTransferAction'][0])
    {
        return $this->getTransferActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransferActionAsyncWithHttpInfo
     *
     * Show detailed routing for a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransferActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getTransferAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
        $request = $this->getTransferActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getTransferAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTransferActionRequest($account, $action_id, string $contentType = self::contentTypes['getTransferAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getTransferAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getTransferAction'
            );
        }


        $resourcePath = '/routing/{account}/transfer/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation getVoicemailAction
     *
     * Show detailed routing for a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object
     */
    public function getVoicemailAction($account, $action_id, string $contentType = self::contentTypes['getVoicemailAction'][0])
    {
        list($response) = $this->getVoicemailActionWithHttpInfo($account, $action_id, $contentType);
        return $response;
    }

    /**
     * Operation getVoicemailActionWithHttpInfo
     *
     * Show detailed routing for a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVoicemailActionWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getVoicemailAction'][0])
    {
        $request = $this->getVoicemailActionRequest($account, $action_id, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateVoicemailAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getVoicemailActionAsync
     *
     * Show detailed routing for a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoicemailActionAsync($account, $action_id, string $contentType = self::contentTypes['getVoicemailAction'][0])
    {
        return $this->getVoicemailActionAsyncWithHttpInfo($account, $action_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVoicemailActionAsyncWithHttpInfo
     *
     * Show detailed routing for a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoicemailActionAsyncWithHttpInfo($account, $action_id, string $contentType = self::contentTypes['getVoicemailAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
        $request = $this->getVoicemailActionRequest($account, $action_id, $contentType);

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
     * Create request for operation 'getVoicemailAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVoicemailActionRequest($account, $action_id, string $contentType = self::contentTypes['getVoicemailAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling getVoicemailAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling getVoicemailAction'
            );
        }


        $resourcePath = '/routing/{account}/voicemail/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
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
     * Operation listBlockedCallers
     *
     * List blocked callers
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBlockedCallers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListBlockedCallers200Response|object
     */
    public function listBlockedCallers($account, string $contentType = self::contentTypes['listBlockedCallers'][0])
    {
        list($response) = $this->listBlockedCallersWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listBlockedCallersWithHttpInfo
     *
     * List blocked callers
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBlockedCallers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListBlockedCallers200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listBlockedCallersWithHttpInfo($account, string $contentType = self::contentTypes['listBlockedCallers'][0])
    {
        $request = $this->listBlockedCallersRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListBlockedCallers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListBlockedCallers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListBlockedCallers200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListBlockedCallers200Response';
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
                        '\WildJar\ApiClient\Model\ListBlockedCallers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listBlockedCallersAsync
     *
     * List blocked callers
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBlockedCallers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBlockedCallersAsync($account, string $contentType = self::contentTypes['listBlockedCallers'][0])
    {
        return $this->listBlockedCallersAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listBlockedCallersAsyncWithHttpInfo
     *
     * List blocked callers
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBlockedCallers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBlockedCallersAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listBlockedCallers'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListBlockedCallers200Response';
        $request = $this->listBlockedCallersRequest($account, $contentType);

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
     * Create request for operation 'listBlockedCallers'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBlockedCallers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listBlockedCallersRequest($account, string $contentType = self::contentTypes['listBlockedCallers'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listBlockedCallers'
            );
        }


        $resourcePath = '/routing/{account}/blocked';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listBranchActions
     *
     * List location routing branches
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBranchActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListBranchActions200Response|object
     */
    public function listBranchActions($account, string $contentType = self::contentTypes['listBranchActions'][0])
    {
        list($response) = $this->listBranchActionsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listBranchActionsWithHttpInfo
     *
     * List location routing branches
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBranchActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListBranchActions200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listBranchActionsWithHttpInfo($account, string $contentType = self::contentTypes['listBranchActions'][0])
    {
        $request = $this->listBranchActionsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListBranchActions200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListBranchActions200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListBranchActions200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListBranchActions200Response';
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
                        '\WildJar\ApiClient\Model\ListBranchActions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listBranchActionsAsync
     *
     * List location routing branches
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBranchActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBranchActionsAsync($account, string $contentType = self::contentTypes['listBranchActions'][0])
    {
        return $this->listBranchActionsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listBranchActionsAsyncWithHttpInfo
     *
     * List location routing branches
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBranchActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listBranchActionsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listBranchActions'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListBranchActions200Response';
        $request = $this->listBranchActionsRequest($account, $contentType);

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
     * Create request for operation 'listBranchActions'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listBranchActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listBranchActionsRequest($account, string $contentType = self::contentTypes['listBranchActions'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listBranchActions'
            );
        }


        $resourcePath = '/routing/{account}/branch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listIVRs
     *
     * List IVR actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listIVRs'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListIVRs200Response|object
     */
    public function listIVRs($account, string $contentType = self::contentTypes['listIVRs'][0])
    {
        list($response) = $this->listIVRsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listIVRsWithHttpInfo
     *
     * List IVR actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listIVRs'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListIVRs200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listIVRsWithHttpInfo($account, string $contentType = self::contentTypes['listIVRs'][0])
    {
        $request = $this->listIVRsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListIVRs200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListIVRs200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListIVRs200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListIVRs200Response';
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
                        '\WildJar\ApiClient\Model\ListIVRs200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listIVRsAsync
     *
     * List IVR actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listIVRs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listIVRsAsync($account, string $contentType = self::contentTypes['listIVRs'][0])
    {
        return $this->listIVRsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listIVRsAsyncWithHttpInfo
     *
     * List IVR actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listIVRs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listIVRsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listIVRs'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListIVRs200Response';
        $request = $this->listIVRsRequest($account, $contentType);

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
     * Create request for operation 'listIVRs'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listIVRs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listIVRsRequest($account, string $contentType = self::contentTypes['listIVRs'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listIVRs'
            );
        }


        $resourcePath = '/routing/{account}/ivr';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listLocationsActions
     *
     * List location routing actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLocationsActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListLocationsActions200Response|object
     */
    public function listLocationsActions($account, string $contentType = self::contentTypes['listLocationsActions'][0])
    {
        list($response) = $this->listLocationsActionsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listLocationsActionsWithHttpInfo
     *
     * List location routing actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLocationsActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListLocationsActions200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listLocationsActionsWithHttpInfo($account, string $contentType = self::contentTypes['listLocationsActions'][0])
    {
        $request = $this->listLocationsActionsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListLocationsActions200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListLocationsActions200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListLocationsActions200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListLocationsActions200Response';
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
                        '\WildJar\ApiClient\Model\ListLocationsActions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listLocationsActionsAsync
     *
     * List location routing actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLocationsActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLocationsActionsAsync($account, string $contentType = self::contentTypes['listLocationsActions'][0])
    {
        return $this->listLocationsActionsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLocationsActionsAsyncWithHttpInfo
     *
     * List location routing actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLocationsActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLocationsActionsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listLocationsActions'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListLocationsActions200Response';
        $request = $this->listLocationsActionsRequest($account, $contentType);

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
     * Create request for operation 'listLocationsActions'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listLocationsActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listLocationsActionsRequest($account, string $contentType = self::contentTypes['listLocationsActions'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listLocationsActions'
            );
        }


        $resourcePath = '/routing/{account}/locations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listRobins
     *
     * List round robin actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listRobins'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListRobins200Response|object
     */
    public function listRobins($account, string $contentType = self::contentTypes['listRobins'][0])
    {
        list($response) = $this->listRobinsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listRobinsWithHttpInfo
     *
     * List round robin actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listRobins'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListRobins200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRobinsWithHttpInfo($account, string $contentType = self::contentTypes['listRobins'][0])
    {
        $request = $this->listRobinsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListRobins200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListRobins200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListRobins200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListRobins200Response';
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
                        '\WildJar\ApiClient\Model\ListRobins200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listRobinsAsync
     *
     * List round robin actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listRobins'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRobinsAsync($account, string $contentType = self::contentTypes['listRobins'][0])
    {
        return $this->listRobinsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRobinsAsyncWithHttpInfo
     *
     * List round robin actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listRobins'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRobinsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listRobins'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListRobins200Response';
        $request = $this->listRobinsRequest($account, $contentType);

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
     * Create request for operation 'listRobins'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listRobins'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRobinsRequest($account, string $contentType = self::contentTypes['listRobins'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listRobins'
            );
        }


        $resourcePath = '/routing/{account}/robin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listTagActions
     *
     * List tag actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTagActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListTagActions200Response|object
     */
    public function listTagActions($account, string $contentType = self::contentTypes['listTagActions'][0])
    {
        list($response) = $this->listTagActionsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listTagActionsWithHttpInfo
     *
     * List tag actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTagActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListTagActions200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTagActionsWithHttpInfo($account, string $contentType = self::contentTypes['listTagActions'][0])
    {
        $request = $this->listTagActionsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListTagActions200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListTagActions200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTagActions200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListTagActions200Response';
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
                        '\WildJar\ApiClient\Model\ListTagActions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listTagActionsAsync
     *
     * List tag actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTagActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTagActionsAsync($account, string $contentType = self::contentTypes['listTagActions'][0])
    {
        return $this->listTagActionsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTagActionsAsyncWithHttpInfo
     *
     * List tag actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTagActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTagActionsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listTagActions'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListTagActions200Response';
        $request = $this->listTagActionsRequest($account, $contentType);

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
     * Create request for operation 'listTagActions'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTagActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTagActionsRequest($account, string $contentType = self::contentTypes['listTagActions'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listTagActions'
            );
        }


        $resourcePath = '/routing/{account}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listTimeActions
     *
     * List time switch actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTimeActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListTimeActions200Response|object
     */
    public function listTimeActions($account, string $contentType = self::contentTypes['listTimeActions'][0])
    {
        list($response) = $this->listTimeActionsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listTimeActionsWithHttpInfo
     *
     * List time switch actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTimeActions'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListTimeActions200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTimeActionsWithHttpInfo($account, string $contentType = self::contentTypes['listTimeActions'][0])
    {
        $request = $this->listTimeActionsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListTimeActions200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListTimeActions200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTimeActions200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListTimeActions200Response';
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
                        '\WildJar\ApiClient\Model\ListTimeActions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listTimeActionsAsync
     *
     * List time switch actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTimeActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTimeActionsAsync($account, string $contentType = self::contentTypes['listTimeActions'][0])
    {
        return $this->listTimeActionsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTimeActionsAsyncWithHttpInfo
     *
     * List time switch actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTimeActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTimeActionsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listTimeActions'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListTimeActions200Response';
        $request = $this->listTimeActionsRequest($account, $contentType);

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
     * Create request for operation 'listTimeActions'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTimeActions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTimeActionsRequest($account, string $contentType = self::contentTypes['listTimeActions'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listTimeActions'
            );
        }


        $resourcePath = '/routing/{account}/time';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listTransfers
     *
     * List transfer actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTransfers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListTransfers200Response|object
     */
    public function listTransfers($account, string $contentType = self::contentTypes['listTransfers'][0])
    {
        list($response) = $this->listTransfersWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listTransfersWithHttpInfo
     *
     * List transfer actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTransfers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListTransfers200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTransfersWithHttpInfo($account, string $contentType = self::contentTypes['listTransfers'][0])
    {
        $request = $this->listTransfersRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListTransfers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListTransfers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTransfers200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListTransfers200Response';
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
                        '\WildJar\ApiClient\Model\ListTransfers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listTransfersAsync
     *
     * List transfer actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransfersAsync($account, string $contentType = self::contentTypes['listTransfers'][0])
    {
        return $this->listTransfersAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTransfersAsyncWithHttpInfo
     *
     * List transfer actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTransfersAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listTransfers'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListTransfers200Response';
        $request = $this->listTransfersRequest($account, $contentType);

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
     * Create request for operation 'listTransfers'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTransfers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTransfersRequest($account, string $contentType = self::contentTypes['listTransfers'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listTransfers'
            );
        }


        $resourcePath = '/routing/{account}/transfer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation listVoicemails
     *
     * List voicemail actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listVoicemails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListVoicemails200Response|object
     */
    public function listVoicemails($account, string $contentType = self::contentTypes['listVoicemails'][0])
    {
        list($response) = $this->listVoicemailsWithHttpInfo($account, $contentType);
        return $response;
    }

    /**
     * Operation listVoicemailsWithHttpInfo
     *
     * List voicemail actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listVoicemails'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListVoicemails200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listVoicemailsWithHttpInfo($account, string $contentType = self::contentTypes['listVoicemails'][0])
    {
        $request = $this->listVoicemailsRequest($account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListVoicemails200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListVoicemails200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListVoicemails200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListVoicemails200Response';
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
                        '\WildJar\ApiClient\Model\ListVoicemails200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listVoicemailsAsync
     *
     * List voicemail actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listVoicemails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVoicemailsAsync($account, string $contentType = self::contentTypes['listVoicemails'][0])
    {
        return $this->listVoicemailsAsyncWithHttpInfo($account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listVoicemailsAsyncWithHttpInfo
     *
     * List voicemail actions
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listVoicemails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVoicemailsAsyncWithHttpInfo($account, string $contentType = self::contentTypes['listVoicemails'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListVoicemails200Response';
        $request = $this->listVoicemailsRequest($account, $contentType);

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
     * Create request for operation 'listVoicemails'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listVoicemails'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listVoicemailsRequest($account, string $contentType = self::contentTypes['listVoicemails'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling listVoicemails'
            );
        }


        $resourcePath = '/routing/{account}/voicemail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
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
     * Operation unblockNumber
     *
     * Unblock a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unblockNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function unblockNumber($account, $number, string $contentType = self::contentTypes['unblockNumber'][0])
    {
        $this->unblockNumberWithHttpInfo($account, $number, $contentType);
    }

    /**
     * Operation unblockNumberWithHttpInfo
     *
     * Unblock a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unblockNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function unblockNumberWithHttpInfo($account, $number, string $contentType = self::contentTypes['unblockNumber'][0])
    {
        $request = $this->unblockNumberRequest($account, $number, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                
            }
            throw $e;
        }
    }

    /**
     * Operation unblockNumberAsync
     *
     * Unblock a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unblockNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unblockNumberAsync($account, $number, string $contentType = self::contentTypes['unblockNumber'][0])
    {
        return $this->unblockNumberAsyncWithHttpInfo($account, $number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unblockNumberAsyncWithHttpInfo
     *
     * Unblock a caller
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unblockNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unblockNumberAsyncWithHttpInfo($account, $number, string $contentType = self::contentTypes['unblockNumber'][0])
    {
        $returnType = '';
        $request = $this->unblockNumberRequest($account, $number, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'unblockNumber'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['unblockNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function unblockNumberRequest($account, $number, string $contentType = self::contentTypes['unblockNumber'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling unblockNumber'
            );
        }

        // verify the required parameter 'number' is set
        if ($number === null || (is_array($number) && count($number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number when calling unblockNumber'
            );
        }


        $resourcePath = '/routing/{account}/blocked/{number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($number !== null) {
            $resourcePath = str_replace(
                '{' . 'number' . '}',
                ObjectSerializer::toPathValue($number),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/problem+json', ],
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateBranchAction
     *
     * Update a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch action_branch (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|object
     */
    public function updateBranchAction($account, $action_id, $action_branch, string $contentType = self::contentTypes['updateBranchAction'][0])
    {
        list($response) = $this->updateBranchActionWithHttpInfo($account, $action_id, $action_branch, $contentType);
        return $response;
    }

    /**
     * Operation updateBranchActionWithHttpInfo
     *
     * Update a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateBranchAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateBranchAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBranchActionWithHttpInfo($account, $action_id, $action_branch, string $contentType = self::contentTypes['updateBranchAction'][0])
    {
        $request = $this->updateBranchActionRequest($account, $action_id, $action_branch, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateBranchAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateBranchAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateBranchActionAsync
     *
     * Update a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBranchActionAsync($account, $action_id, $action_branch, string $contentType = self::contentTypes['updateBranchAction'][0])
    {
        return $this->updateBranchActionAsyncWithHttpInfo($account, $action_id, $action_branch, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBranchActionAsyncWithHttpInfo
     *
     * Update a location routing branch
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBranchActionAsyncWithHttpInfo($account, $action_id, $action_branch, string $contentType = self::contentTypes['updateBranchAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateBranchAction200Response';
        $request = $this->updateBranchActionRequest($account, $action_id, $action_branch, $contentType);

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
     * Create request for operation 'updateBranchAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the branch action. (required)
     * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateBranchAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateBranchActionRequest($account, $action_id, $action_branch, string $contentType = self::contentTypes['updateBranchAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateBranchAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateBranchAction'
            );
        }

        // verify the required parameter 'action_branch' is set
        if ($action_branch === null || (is_array($action_branch) && count($action_branch) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_branch when calling updateBranchAction'
            );
        }


        $resourcePath = '/routing/{account}/branch/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_branch)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_branch));
            } else {
                $httpBody = $action_branch;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateDidRouting
     *
     * Update the routing of a tracking number
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action routing_action (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDidRouting'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\UpdateDidRouting200Response|object
     */
    public function updateDidRouting($account, $did, $routing_action, string $contentType = self::contentTypes['updateDidRouting'][0])
    {
        list($response) = $this->updateDidRoutingWithHttpInfo($account, $did, $routing_action, $contentType);
        return $response;
    }

    /**
     * Operation updateDidRoutingWithHttpInfo
     *
     * Update the routing of a tracking number
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDidRouting'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\UpdateDidRouting200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDidRoutingWithHttpInfo($account, $did, $routing_action, string $contentType = self::contentTypes['updateDidRouting'][0])
    {
        $request = $this->updateDidRoutingRequest($account, $did, $routing_action, $contentType);

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
                    if ('\WildJar\ApiClient\Model\UpdateDidRouting200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\UpdateDidRouting200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateDidRouting200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\UpdateDidRouting200Response';
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
                        '\WildJar\ApiClient\Model\UpdateDidRouting200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateDidRoutingAsync
     *
     * Update the routing of a tracking number
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDidRouting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDidRoutingAsync($account, $did, $routing_action, string $contentType = self::contentTypes['updateDidRouting'][0])
    {
        return $this->updateDidRoutingAsyncWithHttpInfo($account, $did, $routing_action, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDidRoutingAsyncWithHttpInfo
     *
     * Update the routing of a tracking number
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDidRouting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDidRoutingAsyncWithHttpInfo($account, $did, $routing_action, string $contentType = self::contentTypes['updateDidRouting'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\UpdateDidRouting200Response';
        $request = $this->updateDidRoutingRequest($account, $did, $routing_action, $contentType);

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
     * Create request for operation 'updateDidRouting'
     *
     * @param  int $account WildJar account number. (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDidRouting'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDidRoutingRequest($account, $did, $routing_action, string $contentType = self::contentTypes['updateDidRouting'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateDidRouting'
            );
        }

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling updateDidRouting'
            );
        }

        // verify the required parameter 'routing_action' is set
        if ($routing_action === null || (is_array($routing_action) && count($routing_action) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $routing_action when calling updateDidRouting'
            );
        }


        $resourcePath = '/routing/{account}/did/{did}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($did !== null) {
            $resourcePath = str_replace(
                '{' . 'did' . '}',
                ObjectSerializer::toPathValue($did),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($routing_action)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($routing_action));
            } else {
                $httpBody = $routing_action;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateIVRAction
     *
     * Update an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|object
     */
    public function updateIVRAction($account, $action_id, $action_ivr_full, string $contentType = self::contentTypes['updateIVRAction'][0])
    {
        list($response) = $this->updateIVRActionWithHttpInfo($account, $action_id, $action_ivr_full, $contentType);
        return $response;
    }

    /**
     * Operation updateIVRActionWithHttpInfo
     *
     * Update an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateIVRAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateIVRAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateIVRActionWithHttpInfo($account, $action_id, $action_ivr_full, string $contentType = self::contentTypes['updateIVRAction'][0])
    {
        $request = $this->updateIVRActionRequest($account, $action_id, $action_ivr_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateIVRAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateIVRAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateIVRActionAsync
     *
     * Update an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateIVRActionAsync($account, $action_id, $action_ivr_full, string $contentType = self::contentTypes['updateIVRAction'][0])
    {
        return $this->updateIVRActionAsyncWithHttpInfo($account, $action_id, $action_ivr_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateIVRActionAsyncWithHttpInfo
     *
     * Update an IVR action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateIVRActionAsyncWithHttpInfo($account, $action_id, $action_ivr_full, string $contentType = self::contentTypes['updateIVRAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateIVRAction200Response';
        $request = $this->updateIVRActionRequest($account, $action_id, $action_ivr_full, $contentType);

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
     * Create request for operation 'updateIVRAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the IVR. (required)
     * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateIVRAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateIVRActionRequest($account, $action_id, $action_ivr_full, string $contentType = self::contentTypes['updateIVRAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateIVRAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateIVRAction'
            );
        }

        // verify the required parameter 'action_ivr_full' is set
        if ($action_ivr_full === null || (is_array($action_ivr_full) && count($action_ivr_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_ivr_full when calling updateIVRAction'
            );
        }


        $resourcePath = '/routing/{account}/ivr/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_ivr_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_ivr_full));
            } else {
                $httpBody = $action_ivr_full;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateLocationsAction
     *
     * Update a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update action_locations_map_update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\UpdateLocationsAction200Response|object
     */
    public function updateLocationsAction($account, $action_id, $action_locations_map_update, string $contentType = self::contentTypes['updateLocationsAction'][0])
    {
        list($response) = $this->updateLocationsActionWithHttpInfo($account, $action_id, $action_locations_map_update, $contentType);
        return $response;
    }

    /**
     * Operation updateLocationsActionWithHttpInfo
     *
     * Update a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateLocationsAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\UpdateLocationsAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLocationsActionWithHttpInfo($account, $action_id, $action_locations_map_update, string $contentType = self::contentTypes['updateLocationsAction'][0])
    {
        $request = $this->updateLocationsActionRequest($account, $action_id, $action_locations_map_update, $contentType);

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
                    if ('\WildJar\ApiClient\Model\UpdateLocationsAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\UpdateLocationsAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateLocationsAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\UpdateLocationsAction200Response';
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
                        '\WildJar\ApiClient\Model\UpdateLocationsAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateLocationsActionAsync
     *
     * Update a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLocationsActionAsync($account, $action_id, $action_locations_map_update, string $contentType = self::contentTypes['updateLocationsAction'][0])
    {
        return $this->updateLocationsActionAsyncWithHttpInfo($account, $action_id, $action_locations_map_update, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLocationsActionAsyncWithHttpInfo
     *
     * Update a location routing action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLocationsActionAsyncWithHttpInfo($account, $action_id, $action_locations_map_update, string $contentType = self::contentTypes['updateLocationsAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\UpdateLocationsAction200Response';
        $request = $this->updateLocationsActionRequest($account, $action_id, $action_locations_map_update, $contentType);

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
     * Create request for operation 'updateLocationsAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the locations action. (required)
     * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateLocationsAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateLocationsActionRequest($account, $action_id, $action_locations_map_update, string $contentType = self::contentTypes['updateLocationsAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateLocationsAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateLocationsAction'
            );
        }

        // verify the required parameter 'action_locations_map_update' is set
        if ($action_locations_map_update === null || (is_array($action_locations_map_update) && count($action_locations_map_update) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_locations_map_update when calling updateLocationsAction'
            );
        }


        $resourcePath = '/routing/{account}/locations/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_locations_map_update)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_locations_map_update));
            } else {
                $httpBody = $action_locations_map_update;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateRobinAction
     *
     * Update a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|object
     */
    public function updateRobinAction($account, $action_id, $action_robin_full, string $contentType = self::contentTypes['updateRobinAction'][0])
    {
        list($response) = $this->updateRobinActionWithHttpInfo($account, $action_id, $action_robin_full, $contentType);
        return $response;
    }

    /**
     * Operation updateRobinActionWithHttpInfo
     *
     * Update a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateRobinAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateRobinAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRobinActionWithHttpInfo($account, $action_id, $action_robin_full, string $contentType = self::contentTypes['updateRobinAction'][0])
    {
        $request = $this->updateRobinActionRequest($account, $action_id, $action_robin_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateRobinAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateRobinAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateRobinActionAsync
     *
     * Update a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRobinActionAsync($account, $action_id, $action_robin_full, string $contentType = self::contentTypes['updateRobinAction'][0])
    {
        return $this->updateRobinActionAsyncWithHttpInfo($account, $action_id, $action_robin_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateRobinActionAsyncWithHttpInfo
     *
     * Update a round robin action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRobinActionAsyncWithHttpInfo($account, $action_id, $action_robin_full, string $contentType = self::contentTypes['updateRobinAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateRobinAction200Response';
        $request = $this->updateRobinActionRequest($account, $action_id, $action_robin_full, $contentType);

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
     * Create request for operation 'updateRobinAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the round robin. (required)
     * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateRobinAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRobinActionRequest($account, $action_id, $action_robin_full, string $contentType = self::contentTypes['updateRobinAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateRobinAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateRobinAction'
            );
        }

        // verify the required parameter 'action_robin_full' is set
        if ($action_robin_full === null || (is_array($action_robin_full) && count($action_robin_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_robin_full when calling updateRobinAction'
            );
        }


        $resourcePath = '/routing/{account}/robin/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_robin_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_robin_full));
            } else {
                $httpBody = $action_robin_full;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateTagAction
     *
     * Update a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTagAction200Response|object
     */
    public function updateTagAction($account, $action_id, $action_tag, string $contentType = self::contentTypes['updateTagAction'][0])
    {
        list($response) = $this->updateTagActionWithHttpInfo($account, $action_id, $action_tag, $contentType);
        return $response;
    }

    /**
     * Operation updateTagActionWithHttpInfo
     *
     * Update a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTagAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTagAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTagActionWithHttpInfo($account, $action_id, $action_tag, string $contentType = self::contentTypes['updateTagAction'][0])
    {
        $request = $this->updateTagActionRequest($account, $action_id, $action_tag, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTagAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTagAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTagAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateTagActionAsync
     *
     * Update a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTagActionAsync($account, $action_id, $action_tag, string $contentType = self::contentTypes['updateTagAction'][0])
    {
        return $this->updateTagActionAsyncWithHttpInfo($account, $action_id, $action_tag, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateTagActionAsyncWithHttpInfo
     *
     * Update a tag action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTagActionAsyncWithHttpInfo($account, $action_id, $action_tag, string $contentType = self::contentTypes['updateTagAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTagAction200Response';
        $request = $this->updateTagActionRequest($account, $action_id, $action_tag, $contentType);

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
     * Create request for operation 'updateTagAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the tag action. (required)
     * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTagAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateTagActionRequest($account, $action_id, $action_tag, string $contentType = self::contentTypes['updateTagAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateTagAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateTagAction'
            );
        }

        // verify the required parameter 'action_tag' is set
        if ($action_tag === null || (is_array($action_tag) && count($action_tag) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_tag when calling updateTagAction'
            );
        }


        $resourcePath = '/routing/{account}/tag/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_tag)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_tag));
            } else {
                $httpBody = $action_tag;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateTimeAction
     *
     * Update a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|object
     */
    public function updateTimeAction($account, $action_id, $action_time_full, string $contentType = self::contentTypes['updateTimeAction'][0])
    {
        list($response) = $this->updateTimeActionWithHttpInfo($account, $action_id, $action_time_full, $contentType);
        return $response;
    }

    /**
     * Operation updateTimeActionWithHttpInfo
     *
     * Update a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTimeAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTimeAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTimeActionWithHttpInfo($account, $action_id, $action_time_full, string $contentType = self::contentTypes['updateTimeAction'][0])
    {
        $request = $this->updateTimeActionRequest($account, $action_id, $action_time_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTimeAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTimeAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateTimeActionAsync
     *
     * Update a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTimeActionAsync($account, $action_id, $action_time_full, string $contentType = self::contentTypes['updateTimeAction'][0])
    {
        return $this->updateTimeActionAsyncWithHttpInfo($account, $action_id, $action_time_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateTimeActionAsyncWithHttpInfo
     *
     * Update a time switch action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTimeActionAsyncWithHttpInfo($account, $action_id, $action_time_full, string $contentType = self::contentTypes['updateTimeAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTimeAction200Response';
        $request = $this->updateTimeActionRequest($account, $action_id, $action_time_full, $contentType);

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
     * Create request for operation 'updateTimeAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the time switch. (required)
     * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTimeAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateTimeActionRequest($account, $action_id, $action_time_full, string $contentType = self::contentTypes['updateTimeAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateTimeAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateTimeAction'
            );
        }

        // verify the required parameter 'action_time_full' is set
        if ($action_time_full === null || (is_array($action_time_full) && count($action_time_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_time_full when calling updateTimeAction'
            );
        }


        $resourcePath = '/routing/{account}/time/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_time_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_time_full));
            } else {
                $httpBody = $action_time_full;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateTransferAction
     *
     * Update a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|object
     */
    public function updateTransferAction($account, $action_id, $action_transfer_full, string $contentType = self::contentTypes['updateTransferAction'][0])
    {
        list($response) = $this->updateTransferActionWithHttpInfo($account, $action_id, $action_transfer_full, $contentType);
        return $response;
    }

    /**
     * Operation updateTransferActionWithHttpInfo
     *
     * Update a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTransferAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateTransferAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTransferActionWithHttpInfo($account, $action_id, $action_transfer_full, string $contentType = self::contentTypes['updateTransferAction'][0])
    {
        $request = $this->updateTransferActionRequest($account, $action_id, $action_transfer_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateTransferAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateTransferAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateTransferActionAsync
     *
     * Update a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTransferActionAsync($account, $action_id, $action_transfer_full, string $contentType = self::contentTypes['updateTransferAction'][0])
    {
        return $this->updateTransferActionAsyncWithHttpInfo($account, $action_id, $action_transfer_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateTransferActionAsyncWithHttpInfo
     *
     * Update a transfer action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateTransferActionAsyncWithHttpInfo($account, $action_id, $action_transfer_full, string $contentType = self::contentTypes['updateTransferAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateTransferAction200Response';
        $request = $this->updateTransferActionRequest($account, $action_id, $action_transfer_full, $contentType);

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
     * Create request for operation 'updateTransferAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the transfer. (required)
     * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateTransferAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateTransferActionRequest($account, $action_id, $action_transfer_full, string $contentType = self::contentTypes['updateTransferAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateTransferAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateTransferAction'
            );
        }

        // verify the required parameter 'action_transfer_full' is set
        if ($action_transfer_full === null || (is_array($action_transfer_full) && count($action_transfer_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_transfer_full when calling updateTransferAction'
            );
        }


        $resourcePath = '/routing/{account}/transfer/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_transfer_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_transfer_full));
            } else {
                $httpBody = $action_transfer_full;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateVoicemailAction
     *
     * Update a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object
     */
    public function updateVoicemailAction($account, $action_id, $action_voicemail_full, string $contentType = self::contentTypes['updateVoicemailAction'][0])
    {
        list($response) = $this->updateVoicemailActionWithHttpInfo($account, $action_id, $action_voicemail_full, $contentType);
        return $response;
    }

    /**
     * Operation updateVoicemailActionWithHttpInfo
     *
     * Update a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoicemailAction'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\CreateVoicemailAction200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVoicemailActionWithHttpInfo($account, $action_id, $action_voicemail_full, string $contentType = self::contentTypes['updateVoicemailAction'][0])
    {
        $request = $this->updateVoicemailActionRequest($account, $action_id, $action_voicemail_full, $contentType);

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
                    if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\CreateVoicemailAction200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
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
                        '\WildJar\ApiClient\Model\CreateVoicemailAction200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateVoicemailActionAsync
     *
     * Update a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVoicemailActionAsync($account, $action_id, $action_voicemail_full, string $contentType = self::contentTypes['updateVoicemailAction'][0])
    {
        return $this->updateVoicemailActionAsyncWithHttpInfo($account, $action_id, $action_voicemail_full, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVoicemailActionAsyncWithHttpInfo
     *
     * Update a voicemail action
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVoicemailActionAsyncWithHttpInfo($account, $action_id, $action_voicemail_full, string $contentType = self::contentTypes['updateVoicemailAction'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\CreateVoicemailAction200Response';
        $request = $this->updateVoicemailActionRequest($account, $action_id, $action_voicemail_full, $contentType);

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
     * Create request for operation 'updateVoicemailAction'
     *
     * @param  int $account WildJar account number. (required)
     * @param  float $action_id The action ID of the voicemail. (required)
     * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateVoicemailAction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateVoicemailActionRequest($account, $action_id, $action_voicemail_full, string $contentType = self::contentTypes['updateVoicemailAction'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling updateVoicemailAction'
            );
        }

        // verify the required parameter 'action_id' is set
        if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_id when calling updateVoicemailAction'
            );
        }

        // verify the required parameter 'action_voicemail_full' is set
        if ($action_voicemail_full === null || (is_array($action_voicemail_full) && count($action_voicemail_full) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $action_voicemail_full when calling updateVoicemailAction'
            );
        }


        $resourcePath = '/routing/{account}/voicemail/{action_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($account !== null) {
            $resourcePath = str_replace(
                '{' . 'account' . '}',
                ObjectSerializer::toPathValue($account),
                $resourcePath
            );
        }
        // path params
        if ($action_id !== null) {
            $resourcePath = str_replace(
                '{' . 'action_id' . '}',
                ObjectSerializer::toPathValue($action_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/problem+json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($action_voicemail_full)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_voicemail_full));
            } else {
                $httpBody = $action_voicemail_full;
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
            'POST',
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
