<?php
/**
 * NumbersApi
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
 * NumbersApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class NumbersApi
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
        'decommissionNumber' => [
            'application/json',
        ],
        'deleteInventoryNumber' => [
            'application/json',
        ],
        'getNumber' => [
            'application/json',
        ],
        'getNumberFull' => [
            'application/json',
        ],
        'listAvailableNumbers' => [
            'application/json',
        ],
        'listInventoryNumbers' => [
            'application/json',
        ],
        'listNumbers' => [
            'application/json',
        ],
        'orderNumber' => [
            'application/json',
        ],
        'updateNumber' => [
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
     * Operation decommissionNumber
     *
     * Decommission a tracking number
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['decommissionNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function decommissionNumber($did, string $contentType = self::contentTypes['decommissionNumber'][0])
    {
        $this->decommissionNumberWithHttpInfo($did, $contentType);
    }

    /**
     * Operation decommissionNumberWithHttpInfo
     *
     * Decommission a tracking number
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['decommissionNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function decommissionNumberWithHttpInfo($did, string $contentType = self::contentTypes['decommissionNumber'][0])
    {
        $request = $this->decommissionNumberRequest($did, $contentType);

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
     * Operation decommissionNumberAsync
     *
     * Decommission a tracking number
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['decommissionNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function decommissionNumberAsync($did, string $contentType = self::contentTypes['decommissionNumber'][0])
    {
        return $this->decommissionNumberAsyncWithHttpInfo($did, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation decommissionNumberAsyncWithHttpInfo
     *
     * Decommission a tracking number
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['decommissionNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function decommissionNumberAsyncWithHttpInfo($did, string $contentType = self::contentTypes['decommissionNumber'][0])
    {
        $returnType = '';
        $request = $this->decommissionNumberRequest($did, $contentType);

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
     * Create request for operation 'decommissionNumber'
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['decommissionNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function decommissionNumberRequest($did, string $contentType = self::contentTypes['decommissionNumber'][0])
    {

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling decommissionNumber'
            );
        }


        $resourcePath = '/number/{did}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($did !== null) {
            $resourcePath = str_replace(
                '{' . 'did' . '}',
                ObjectSerializer::toPathValue($did),
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
     * Operation deleteInventoryNumber
     *
     * Remove a number from inventory (Internal)
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInventoryNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteInventoryNumber($did, string $contentType = self::contentTypes['deleteInventoryNumber'][0])
    {
        $this->deleteInventoryNumberWithHttpInfo($did, $contentType);
    }

    /**
     * Operation deleteInventoryNumberWithHttpInfo
     *
     * Remove a number from inventory (Internal)
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInventoryNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteInventoryNumberWithHttpInfo($did, string $contentType = self::contentTypes['deleteInventoryNumber'][0])
    {
        $request = $this->deleteInventoryNumberRequest($did, $contentType);

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
     * Operation deleteInventoryNumberAsync
     *
     * Remove a number from inventory (Internal)
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInventoryNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryNumberAsync($did, string $contentType = self::contentTypes['deleteInventoryNumber'][0])
    {
        return $this->deleteInventoryNumberAsyncWithHttpInfo($did, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteInventoryNumberAsyncWithHttpInfo
     *
     * Remove a number from inventory (Internal)
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInventoryNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteInventoryNumberAsyncWithHttpInfo($did, string $contentType = self::contentTypes['deleteInventoryNumber'][0])
    {
        $returnType = '';
        $request = $this->deleteInventoryNumberRequest($did, $contentType);

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
     * Create request for operation 'deleteInventoryNumber'
     *
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteInventoryNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteInventoryNumberRequest($did, string $contentType = self::contentTypes['deleteInventoryNumber'][0])
    {

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling deleteInventoryNumber'
            );
        }


        $resourcePath = '/number/inventory/{did}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($did !== null) {
            $resourcePath = str_replace(
                '{' . 'did' . '}',
                ObjectSerializer::toPathValue($did),
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
     * Operation getNumber
     *
     * Get tracking number number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetNumber200Response|object
     */
    public function getNumber($did, string $contentType = self::contentTypes['getNumber'][0])
    {
        list($response) = $this->getNumberWithHttpInfo($did, $contentType);
        return $response;
    }

    /**
     * Operation getNumberWithHttpInfo
     *
     * Get tracking number number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetNumber200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNumberWithHttpInfo($did, string $contentType = self::contentTypes['getNumber'][0])
    {
        $request = $this->getNumberRequest($did, $contentType);

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
                    if ('\WildJar\ApiClient\Model\GetNumber200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetNumber200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetNumber200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetNumber200Response';
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
                        '\WildJar\ApiClient\Model\GetNumber200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getNumberAsync
     *
     * Get tracking number number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNumberAsync($did, string $contentType = self::contentTypes['getNumber'][0])
    {
        return $this->getNumberAsyncWithHttpInfo($did, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNumberAsyncWithHttpInfo
     *
     * Get tracking number number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNumberAsyncWithHttpInfo($did, string $contentType = self::contentTypes['getNumber'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetNumber200Response';
        $request = $this->getNumberRequest($did, $contentType);

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
     * Create request for operation 'getNumber'
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getNumberRequest($did, string $contentType = self::contentTypes['getNumber'][0])
    {

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling getNumber'
            );
        }


        $resourcePath = '/number/{did}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getNumberFull
     *
     * Get full tracking number number details (Dashboard)
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumberFull'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\OrderNumber200Response|object
     */
    public function getNumberFull($did, string $contentType = self::contentTypes['getNumberFull'][0])
    {
        list($response) = $this->getNumberFullWithHttpInfo($did, $contentType);
        return $response;
    }

    /**
     * Operation getNumberFullWithHttpInfo
     *
     * Get full tracking number number details (Dashboard)
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumberFull'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\OrderNumber200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNumberFullWithHttpInfo($did, string $contentType = self::contentTypes['getNumberFull'][0])
    {
        $request = $this->getNumberFullRequest($did, $contentType);

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
                    if ('\WildJar\ApiClient\Model\OrderNumber200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\OrderNumber200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\OrderNumber200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\OrderNumber200Response';
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
                        '\WildJar\ApiClient\Model\OrderNumber200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation getNumberFullAsync
     *
     * Get full tracking number number details (Dashboard)
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumberFull'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNumberFullAsync($did, string $contentType = self::contentTypes['getNumberFull'][0])
    {
        return $this->getNumberFullAsyncWithHttpInfo($did, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getNumberFullAsyncWithHttpInfo
     *
     * Get full tracking number number details (Dashboard)
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumberFull'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getNumberFullAsyncWithHttpInfo($did, string $contentType = self::contentTypes['getNumberFull'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\OrderNumber200Response';
        $request = $this->getNumberFullRequest($did, $contentType);

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
     * Create request for operation 'getNumberFull'
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getNumberFull'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getNumberFullRequest($did, string $contentType = self::contentTypes['getNumberFull'][0])
    {

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling getNumberFull'
            );
        }


        $resourcePath = '/number/{did}/extra';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation listAvailableNumbers
     *
     * Get list of available numbers by country
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $area _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. (optional)
     * @param  string $network Filter the results by tracking number type. (optional)
     * @param  string $order Sort the available number pool by available number in ascending or descending order. (optional)
     * @param  string $prefix Filter results by the number prefix. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listAvailableNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListAvailableNumbers200Response|object
     */
    public function listAvailableNumbers($country_code, $area = null, $network = null, $order = null, $prefix = null, string $contentType = self::contentTypes['listAvailableNumbers'][0])
    {
        list($response) = $this->listAvailableNumbersWithHttpInfo($country_code, $area, $network, $order, $prefix, $contentType);
        return $response;
    }

    /**
     * Operation listAvailableNumbersWithHttpInfo
     *
     * Get list of available numbers by country
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $area _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. (optional)
     * @param  string $network Filter the results by tracking number type. (optional)
     * @param  string $order Sort the available number pool by available number in ascending or descending order. (optional)
     * @param  string $prefix Filter results by the number prefix. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listAvailableNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListAvailableNumbers200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAvailableNumbersWithHttpInfo($country_code, $area = null, $network = null, $order = null, $prefix = null, string $contentType = self::contentTypes['listAvailableNumbers'][0])
    {
        $request = $this->listAvailableNumbersRequest($country_code, $area, $network, $order, $prefix, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListAvailableNumbers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListAvailableNumbers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListAvailableNumbers200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListAvailableNumbers200Response';
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
                        '\WildJar\ApiClient\Model\ListAvailableNumbers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listAvailableNumbersAsync
     *
     * Get list of available numbers by country
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $area _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. (optional)
     * @param  string $network Filter the results by tracking number type. (optional)
     * @param  string $order Sort the available number pool by available number in ascending or descending order. (optional)
     * @param  string $prefix Filter results by the number prefix. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listAvailableNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAvailableNumbersAsync($country_code, $area = null, $network = null, $order = null, $prefix = null, string $contentType = self::contentTypes['listAvailableNumbers'][0])
    {
        return $this->listAvailableNumbersAsyncWithHttpInfo($country_code, $area, $network, $order, $prefix, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAvailableNumbersAsyncWithHttpInfo
     *
     * Get list of available numbers by country
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $area _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. (optional)
     * @param  string $network Filter the results by tracking number type. (optional)
     * @param  string $order Sort the available number pool by available number in ascending or descending order. (optional)
     * @param  string $prefix Filter results by the number prefix. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listAvailableNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAvailableNumbersAsyncWithHttpInfo($country_code, $area = null, $network = null, $order = null, $prefix = null, string $contentType = self::contentTypes['listAvailableNumbers'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListAvailableNumbers200Response';
        $request = $this->listAvailableNumbersRequest($country_code, $area, $network, $order, $prefix, $contentType);

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
     * Create request for operation 'listAvailableNumbers'
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $area _**\&quot;Geo\&quot; numbers only.**_ Filter results by number location or charge area. (optional)
     * @param  string $network Filter the results by tracking number type. (optional)
     * @param  string $order Sort the available number pool by available number in ascending or descending order. (optional)
     * @param  string $prefix Filter results by the number prefix. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listAvailableNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listAvailableNumbersRequest($country_code, $area = null, $network = null, $order = null, $prefix = null, string $contentType = self::contentTypes['listAvailableNumbers'][0])
    {

        // verify the required parameter 'country_code' is set
        if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country_code when calling listAvailableNumbers'
            );
        }






        $resourcePath = '/number/available/{country_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $area,
            'area', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $network,
            'network', // param base name
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
            $prefix,
            'prefix', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($country_code !== null) {
            $resourcePath = str_replace(
                '{' . 'country_code' . '}',
                ObjectSerializer::toPathValue($country_code),
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
     * Operation listInventoryNumbers
     *
     * Get list of inventory by country (Internal)
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $provider Filter results by number provider. (optional)
     * @param  string $type Filter the results by tracking number type. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListInventoryNumbers200Response|object
     */
    public function listInventoryNumbers($country_code, $account = null, $provider = null, $type = null, string $contentType = self::contentTypes['listInventoryNumbers'][0])
    {
        list($response) = $this->listInventoryNumbersWithHttpInfo($country_code, $account, $provider, $type, $contentType);
        return $response;
    }

    /**
     * Operation listInventoryNumbersWithHttpInfo
     *
     * Get list of inventory by country (Internal)
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $provider Filter results by number provider. (optional)
     * @param  string $type Filter the results by tracking number type. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListInventoryNumbers200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listInventoryNumbersWithHttpInfo($country_code, $account = null, $provider = null, $type = null, string $contentType = self::contentTypes['listInventoryNumbers'][0])
    {
        $request = $this->listInventoryNumbersRequest($country_code, $account, $provider, $type, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListInventoryNumbers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListInventoryNumbers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListInventoryNumbers200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListInventoryNumbers200Response';
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
                        '\WildJar\ApiClient\Model\ListInventoryNumbers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listInventoryNumbersAsync
     *
     * Get list of inventory by country (Internal)
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $provider Filter results by number provider. (optional)
     * @param  string $type Filter the results by tracking number type. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryNumbersAsync($country_code, $account = null, $provider = null, $type = null, string $contentType = self::contentTypes['listInventoryNumbers'][0])
    {
        return $this->listInventoryNumbersAsyncWithHttpInfo($country_code, $account, $provider, $type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listInventoryNumbersAsyncWithHttpInfo
     *
     * Get list of inventory by country (Internal)
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $provider Filter results by number provider. (optional)
     * @param  string $type Filter the results by tracking number type. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listInventoryNumbersAsyncWithHttpInfo($country_code, $account = null, $provider = null, $type = null, string $contentType = self::contentTypes['listInventoryNumbers'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListInventoryNumbers200Response';
        $request = $this->listInventoryNumbersRequest($country_code, $account, $provider, $type, $contentType);

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
     * Create request for operation 'listInventoryNumbers'
     *
     * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $provider Filter results by number provider. (optional)
     * @param  string $type Filter the results by tracking number type. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listInventoryNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listInventoryNumbersRequest($country_code, $account = null, $provider = null, $type = null, string $contentType = self::contentTypes['listInventoryNumbers'][0])
    {

        // verify the required parameter 'country_code' is set
        if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $country_code when calling listInventoryNumbers'
            );
        }





        $resourcePath = '/number/all/{country_code}';
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
            $provider,
            'provider', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($country_code !== null) {
            $resourcePath = str_replace(
                '{' . 'country_code' . '}',
                ObjectSerializer::toPathValue($country_code),
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
     * Operation listNumbers
     *
     * Get list of numbers
     *
     * @param  string $type Filter tracking numbers by number type (optional)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\ListNumbers200Response|object
     */
    public function listNumbers($type = null, $account = null, string $contentType = self::contentTypes['listNumbers'][0])
    {
        list($response) = $this->listNumbersWithHttpInfo($type, $account, $contentType);
        return $response;
    }

    /**
     * Operation listNumbersWithHttpInfo
     *
     * Get list of numbers
     *
     * @param  string $type Filter tracking numbers by number type (optional)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listNumbers'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\ListNumbers200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listNumbersWithHttpInfo($type = null, $account = null, string $contentType = self::contentTypes['listNumbers'][0])
    {
        $request = $this->listNumbersRequest($type, $account, $contentType);

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
                    if ('\WildJar\ApiClient\Model\ListNumbers200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\ListNumbers200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListNumbers200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\ListNumbers200Response';
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
                        '\WildJar\ApiClient\Model\ListNumbers200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation listNumbersAsync
     *
     * Get list of numbers
     *
     * @param  string $type Filter tracking numbers by number type (optional)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listNumbersAsync($type = null, $account = null, string $contentType = self::contentTypes['listNumbers'][0])
    {
        return $this->listNumbersAsyncWithHttpInfo($type, $account, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listNumbersAsyncWithHttpInfo
     *
     * Get list of numbers
     *
     * @param  string $type Filter tracking numbers by number type (optional)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listNumbersAsyncWithHttpInfo($type = null, $account = null, string $contentType = self::contentTypes['listNumbers'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\ListNumbers200Response';
        $request = $this->listNumbersRequest($type, $account, $contentType);

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
     * Create request for operation 'listNumbers'
     *
     * @param  string $type Filter tracking numbers by number type (optional)
     * @param  string $account Filter tracking numbers by account number (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listNumbers'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listNumbersRequest($type = null, $account = null, string $contentType = self::contentTypes['listNumbers'][0])
    {




        $resourcePath = '/number';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $account,
            'account', // param base name
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
     * Operation orderNumber
     *
     * Order an tracking number
     *
     * @param  int $account WildJar account number (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\OrderNumber $order_number order_number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\OrderNumber200Response|object
     */
    public function orderNumber($account, $did, $order_number, string $contentType = self::contentTypes['orderNumber'][0])
    {
        list($response) = $this->orderNumberWithHttpInfo($account, $did, $order_number, $contentType);
        return $response;
    }

    /**
     * Operation orderNumberWithHttpInfo
     *
     * Order an tracking number
     *
     * @param  int $account WildJar account number (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\OrderNumber $order_number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\OrderNumber200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderNumberWithHttpInfo($account, $did, $order_number, string $contentType = self::contentTypes['orderNumber'][0])
    {
        $request = $this->orderNumberRequest($account, $did, $order_number, $contentType);

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
                    if ('\WildJar\ApiClient\Model\OrderNumber200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\OrderNumber200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\OrderNumber200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\OrderNumber200Response';
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
                        '\WildJar\ApiClient\Model\OrderNumber200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation orderNumberAsync
     *
     * Order an tracking number
     *
     * @param  int $account WildJar account number (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\OrderNumber $order_number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderNumberAsync($account, $did, $order_number, string $contentType = self::contentTypes['orderNumber'][0])
    {
        return $this->orderNumberAsyncWithHttpInfo($account, $did, $order_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderNumberAsyncWithHttpInfo
     *
     * Order an tracking number
     *
     * @param  int $account WildJar account number (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\OrderNumber $order_number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderNumberAsyncWithHttpInfo($account, $did, $order_number, string $contentType = self::contentTypes['orderNumber'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\OrderNumber200Response';
        $request = $this->orderNumberRequest($account, $did, $order_number, $contentType);

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
     * Create request for operation 'orderNumber'
     *
     * @param  int $account WildJar account number (required)
     * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\OrderNumber $order_number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function orderNumberRequest($account, $did, $order_number, string $contentType = self::contentTypes['orderNumber'][0])
    {

        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling orderNumber'
            );
        }

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling orderNumber'
            );
        }

        // verify the required parameter 'order_number' is set
        if ($order_number === null || (is_array($order_number) && count($order_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_number when calling orderNumber'
            );
        }


        $resourcePath = '/number/{account}/{did}';
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
        if (isset($order_number)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($order_number));
            } else {
                $httpBody = $order_number;
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
     * Operation updateNumber
     *
     * Update tracking number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\Number $number number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WildJar\ApiClient\Model\GetNumber200Response|object
     */
    public function updateNumber($did, $number, string $contentType = self::contentTypes['updateNumber'][0])
    {
        list($response) = $this->updateNumberWithHttpInfo($did, $number, $contentType);
        return $response;
    }

    /**
     * Operation updateNumberWithHttpInfo
     *
     * Update tracking number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\Number $number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNumber'] to see the possible values for this operation
     *
     * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WildJar\ApiClient\Model\GetNumber200Response|object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateNumberWithHttpInfo($did, $number, string $contentType = self::contentTypes['updateNumber'][0])
    {
        $request = $this->updateNumberRequest($did, $number, $contentType);

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
                    if ('\WildJar\ApiClient\Model\GetNumber200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WildJar\ApiClient\Model\GetNumber200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetNumber200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                
            }

            $returnType = '\WildJar\ApiClient\Model\GetNumber200Response';
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
                        '\WildJar\ApiClient\Model\GetNumber200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                
            }
            throw $e;
        }
    }

    /**
     * Operation updateNumberAsync
     *
     * Update tracking number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\Number $number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNumberAsync($did, $number, string $contentType = self::contentTypes['updateNumber'][0])
    {
        return $this->updateNumberAsyncWithHttpInfo($did, $number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateNumberAsyncWithHttpInfo
     *
     * Update tracking number details
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\Number $number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateNumberAsyncWithHttpInfo($did, $number, string $contentType = self::contentTypes['updateNumber'][0])
    {
        $returnType = '\WildJar\ApiClient\Model\GetNumber200Response';
        $request = $this->updateNumberRequest($did, $number, $contentType);

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
     * Create request for operation 'updateNumber'
     *
     * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
     * @param  \WildJar\ApiClient\Model\Number $number (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateNumber'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateNumberRequest($did, $number, string $contentType = self::contentTypes['updateNumber'][0])
    {

        // verify the required parameter 'did' is set
        if ($did === null || (is_array($did) && count($did) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $did when calling updateNumber'
            );
        }

        // verify the required parameter 'number' is set
        if ($number === null || (is_array($number) && count($number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number when calling updateNumber'
            );
        }


        $resourcePath = '/number/{did}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
        if (isset($number)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($number));
            } else {
                $httpBody = $number;
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
