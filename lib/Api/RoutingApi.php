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
	protected $hostIndex = 0;
	/**
	 * @param ClientInterface $client
	 * @param Configuration   $config
	 * @param HeaderSelector  $selector
	 */
	public function __construct( ClientInterface $client = null, Configuration $config = null, HeaderSelector $selector = null )
	{
		$this->config = $config ?: Configuration::getDefaultConfiguration();
		$this->headerSelector = $selector ?: new HeaderSelector();

		if ($client!==null) {
			$this->client = $client;
		} else {
			$this->client = new Client([
				'defaults' => [
					RequestOptions::CONNECT_TIMEOUT => 5,
					RequestOptions::ALLOW_REDIRECTS => true
				],
				RequestOptions::VERIFY => $this->config->getVerifySSL(),
			]);
		}
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
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked action_blocked (required)
	 * 
	 * @param RequestParams_RoutingApi_blockCaller|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\BlockCaller200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function blockCaller( $account, $action_blocked, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_blockCaller();

		$request = $this->blockCallerRequest( $account,  $action_blocked );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\BlockCaller200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'blockCaller'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionBlocked $action_blocked (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function blockCallerRequest($account, $action_blocked )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling blockCaller' );
		}
				// verify the required parameter 'action_blocked' is set
		if ($action_blocked === null || (is_array($action_blocked) && count($action_blocked) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_blocked when calling blockCaller' );
		}
		

		$resourcePath = '/routing/{account}/blocked';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_blocked)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_blocked));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation blockCallerFromCall 
	 *
	 * Block a caller from a Call record
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request block_caller_from_call_request (required)
	 * 
	 * @param RequestParams_RoutingApi_blockCallerFromCall|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\BlockCaller200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function blockCallerFromCall( $account, $block_caller_from_call_request, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_blockCallerFromCall();

		$request = $this->blockCallerFromCallRequest( $account,  $block_caller_from_call_request );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\BlockCaller200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'blockCallerFromCall'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\BlockCallerFromCallRequest $block_caller_from_call_request (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function blockCallerFromCallRequest($account, $block_caller_from_call_request )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling blockCallerFromCall' );
		}
				// verify the required parameter 'block_caller_from_call_request' is set
		if ($block_caller_from_call_request === null || (is_array($block_caller_from_call_request) && count($block_caller_from_call_request) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $block_caller_from_call_request when calling blockCallerFromCall' );
		}
		

		$resourcePath = '/routing/{account}/blocked';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($block_caller_from_call_request)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($block_caller_from_call_request));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PATCH', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createBranchAction 
	 *
	 * Create a location routing branch
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full action_branch_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createBranchAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createBranchAction( $account, $action_branch_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createBranchAction();

		$request = $this->createBranchActionRequest( $account,  $action_branch_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createBranchAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionBranchFull $action_branch_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createBranchActionRequest($account, $action_branch_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createBranchAction' );
		}
				// verify the required parameter 'action_branch_full' is set
		if ($action_branch_full === null || (is_array($action_branch_full) && count($action_branch_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_branch_full when calling createBranchAction' );
		}
		

		$resourcePath = '/routing/{account}/branch';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_branch_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_branch_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createIVRAction 
	 *
	 * Create an IVR action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full action_ivr_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createIVRAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createIVRAction( $account, $action_ivr_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createIVRAction();

		$request = $this->createIVRActionRequest( $account,  $action_ivr_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createIVRAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createIVRActionRequest($account, $action_ivr_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createIVRAction' );
		}
				// verify the required parameter 'action_ivr_full' is set
		if ($action_ivr_full === null || (is_array($action_ivr_full) && count($action_ivr_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_ivr_full when calling createIVRAction' );
		}
		

		$resourcePath = '/routing/{account}/ivr';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_ivr_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_ivr_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createLocationsAction 
	 *
	 * Create a location routing action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full action_locations_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createLocationsAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateLocationsAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createLocationsAction( $account, $action_locations_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createLocationsAction();

		$request = $this->createLocationsActionRequest( $account,  $action_locations_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateLocationsAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createLocationsAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionLocationsFull $action_locations_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createLocationsActionRequest($account, $action_locations_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createLocationsAction' );
		}
				// verify the required parameter 'action_locations_full' is set
		if ($action_locations_full === null || (is_array($action_locations_full) && count($action_locations_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_locations_full when calling createLocationsAction' );
		}
		

		$resourcePath = '/routing/{account}/locations';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_locations_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_locations_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createRobinAction 
	 *
	 * Create a round robin action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full action_robin_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createRobinAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createRobinAction( $account, $action_robin_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createRobinAction();

		$request = $this->createRobinActionRequest( $account,  $action_robin_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createRobinAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createRobinActionRequest($account, $action_robin_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createRobinAction' );
		}
				// verify the required parameter 'action_robin_full' is set
		if ($action_robin_full === null || (is_array($action_robin_full) && count($action_robin_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_robin_full when calling createRobinAction' );
		}
		

		$resourcePath = '/routing/{account}/robin';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_robin_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_robin_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createTagAction 
	 *
	 * Create a tag action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTag $action_tag action_tag (required)
	 * 
	 * @param RequestParams_RoutingApi_createTagAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTagAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createTagAction( $account, $action_tag, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createTagAction();

		$request = $this->createTagActionRequest( $account,  $action_tag );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createTagAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createTagActionRequest($account, $action_tag )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createTagAction' );
		}
				// verify the required parameter 'action_tag' is set
		if ($action_tag === null || (is_array($action_tag) && count($action_tag) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_tag when calling createTagAction' );
		}
		

		$resourcePath = '/routing/{account}/tag';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_tag)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_tag));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createTimeAction 
	 *
	 * Create a time switch action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full action_time_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createTimeAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createTimeAction( $account, $action_time_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createTimeAction();

		$request = $this->createTimeActionRequest( $account,  $action_time_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createTimeAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createTimeActionRequest($account, $action_time_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createTimeAction' );
		}
				// verify the required parameter 'action_time_full' is set
		if ($action_time_full === null || (is_array($action_time_full) && count($action_time_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_time_full when calling createTimeAction' );
		}
		

		$resourcePath = '/routing/{account}/time';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_time_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_time_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createTransferAction 
	 *
	 * Create a transfer action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full action_transfer_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createTransferAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createTransferAction( $account, $action_transfer_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createTransferAction();

		$request = $this->createTransferActionRequest( $account,  $action_transfer_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createTransferAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createTransferActionRequest($account, $action_transfer_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createTransferAction' );
		}
				// verify the required parameter 'action_transfer_full' is set
		if ($action_transfer_full === null || (is_array($action_transfer_full) && count($action_transfer_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_transfer_full when calling createTransferAction' );
		}
		

		$resourcePath = '/routing/{account}/transfer';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_transfer_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_transfer_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation createVoicemailAction 
	 *
	 * Create a voicemail action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full action_voicemail_full (required)
	 * 
	 * @param RequestParams_RoutingApi_createVoicemailAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function createVoicemailAction( $account, $action_voicemail_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_createVoicemailAction();

		$request = $this->createVoicemailActionRequest( $account,  $action_voicemail_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'createVoicemailAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function createVoicemailActionRequest($account, $action_voicemail_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling createVoicemailAction' );
		}
				// verify the required parameter 'action_voicemail_full' is set
		if ($action_voicemail_full === null || (is_array($action_voicemail_full) && count($action_voicemail_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_voicemail_full when calling createVoicemailAction' );
		}
		

		$resourcePath = '/routing/{account}/voicemail';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_voicemail_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_voicemail_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'PUT', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getBranchAction 
	 *
	 * Show detailed configuration of a branch action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the branch action. (required)
	 * 
	 * @param RequestParams_RoutingApi_getBranchAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getBranchAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getBranchAction();

		$request = $this->getBranchActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getBranchAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the branch action. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getBranchActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getBranchAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getBranchAction' );
		}
		

		$resourcePath = '/routing/{account}/branch/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getIVRAction 
	 *
	 * Show detailed routing for an IVR action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the IVR. (required)
	 * 
	 * @param RequestParams_RoutingApi_getIVRAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getIVRAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getIVRAction();

		$request = $this->getIVRActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getIVRAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the IVR. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getIVRActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getIVRAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getIVRAction' );
		}
		

		$resourcePath = '/routing/{account}/ivr/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getLocationsAction 
	 *
	 * Show detailed configuration of a location action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the locations action. (required)
	 * 
	 * @param RequestParams_RoutingApi_getLocationsAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateLocationsAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getLocationsAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getLocationsAction();

		$request = $this->getLocationsActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateLocationsAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getLocationsAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the locations action. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getLocationsActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getLocationsAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getLocationsAction' );
		}
		

		$resourcePath = '/routing/{account}/locations/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getLocationsMap 
	 *
	 * Show detailed location mapping
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the IVR. (required)
	 * 
	 * @param RequestParams_RoutingApi_getLocationsMap|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\UpdateLocationsAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getLocationsMap( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getLocationsMap();

		$request = $this->getLocationsMapRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateLocationsAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getLocationsMap'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the IVR. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getLocationsMapRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getLocationsMap' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getLocationsMap' );
		}
		

		$resourcePath = '/routing/{account}/locations/{action_id}/map';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getRobinAction 
	 *
	 * Show detailed routing for a round robin action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the round robin. (required)
	 * 
	 * @param RequestParams_RoutingApi_getRobinAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getRobinAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getRobinAction();

		$request = $this->getRobinActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getRobinAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the round robin. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getRobinActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getRobinAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getRobinAction' );
		}
		

		$resourcePath = '/routing/{account}/robin/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getTagAction 
	 *
	 * Show tag action details
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the tag action. (required)
	 * 
	 * @param RequestParams_RoutingApi_getTagAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTagAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getTagAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getTagAction();

		$request = $this->getTagActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getTagAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the tag action. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getTagActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getTagAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getTagAction' );
		}
		

		$resourcePath = '/routing/{account}/tag/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getTimeAction 
	 *
	 * Show detailed routing for a time switch action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the time switch. (required)
	 * 
	 * @param RequestParams_RoutingApi_getTimeAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getTimeAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getTimeAction();

		$request = $this->getTimeActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getTimeAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the time switch. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getTimeActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getTimeAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getTimeAction' );
		}
		

		$resourcePath = '/routing/{account}/time/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getTransferAction 
	 *
	 * Show detailed routing for a transfer action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the transfer. (required)
	 * 
	 * @param RequestParams_RoutingApi_getTransferAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getTransferAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getTransferAction();

		$request = $this->getTransferActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getTransferAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the transfer. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getTransferActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getTransferAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getTransferAction' );
		}
		

		$resourcePath = '/routing/{account}/transfer/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation getVoicemailAction 
	 *
	 * Show detailed routing for a voicemail action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the voicemail. (required)
	 * 
	 * @param RequestParams_RoutingApi_getVoicemailAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getVoicemailAction( $account, $action_id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_getVoicemailAction();

		$request = $this->getVoicemailActionRequest( $account,  $action_id );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getVoicemailAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the voicemail. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getVoicemailActionRequest($account, $action_id )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling getVoicemailAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling getVoicemailAction' );
		}
		

		$resourcePath = '/routing/{account}/voicemail/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listBlockedCallers 
	 *
	 * List blocked callers
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listBlockedCallers|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListBlockedCallers200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listBlockedCallers( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listBlockedCallers();

		$request = $this->listBlockedCallersRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListBlockedCallers200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listBlockedCallers'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listBlockedCallersRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listBlockedCallers' );
		}
		

		$resourcePath = '/routing/{account}/blocked';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listBranchActions 
	 *
	 * List location routing branches
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listBranchActions|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListBranchActions200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listBranchActions( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listBranchActions();

		$request = $this->listBranchActionsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListBranchActions200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listBranchActions'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listBranchActionsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listBranchActions' );
		}
		

		$resourcePath = '/routing/{account}/branch';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listIVRs 
	 *
	 * List IVR actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listIVRs|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListIVRs200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listIVRs( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listIVRs();

		$request = $this->listIVRsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListIVRs200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listIVRs'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listIVRsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listIVRs' );
		}
		

		$resourcePath = '/routing/{account}/ivr';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listLocationsActions 
	 *
	 * List location routing actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listLocationsActions|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListLocationsActions200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listLocationsActions( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listLocationsActions();

		$request = $this->listLocationsActionsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListLocationsActions200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listLocationsActions'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listLocationsActionsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listLocationsActions' );
		}
		

		$resourcePath = '/routing/{account}/locations';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listRobins 
	 *
	 * List round robin actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listRobins|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListRobins200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listRobins( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listRobins();

		$request = $this->listRobinsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListRobins200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listRobins'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listRobinsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listRobins' );
		}
		

		$resourcePath = '/routing/{account}/robin';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listTagActions 
	 *
	 * List tag actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listTagActions|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListTagActions200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listTagActions( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listTagActions();

		$request = $this->listTagActionsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTagActions200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listTagActions'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listTagActionsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listTagActions' );
		}
		

		$resourcePath = '/routing/{account}/tag';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listTimeActions 
	 *
	 * List time switch actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listTimeActions|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListTimeActions200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listTimeActions( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listTimeActions();

		$request = $this->listTimeActionsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTimeActions200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listTimeActions'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listTimeActionsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listTimeActions' );
		}
		

		$resourcePath = '/routing/{account}/time';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listTransfers 
	 *
	 * List transfer actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listTransfers|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListTransfers200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listTransfers( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listTransfers();

		$request = $this->listTransfersRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListTransfers200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listTransfers'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listTransfersRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listTransfers' );
		}
		

		$resourcePath = '/routing/{account}/transfer';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation listVoicemails 
	 *
	 * List voicemail actions
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param RequestParams_RoutingApi_listVoicemails|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListVoicemails200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listVoicemails( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_listVoicemails();

		$request = $this->listVoicemailsRequest( $account );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListVoicemails200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listVoicemails'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listVoicemailsRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling listVoicemails' );
		}
		

		$resourcePath = '/routing/{account}/voicemail';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'GET', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation unblockNumber 
	 *
	 * Unblock a caller
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
	 * 
	 * @param RequestParams_RoutingApi_unblockNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	public function unblockNumber( $account, $number, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_unblockNumber();

		$request = $this->unblockNumberRequest( $account,  $number );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
				$statusCode,
				$response->getHeaders(),
				(string) $response->getBody()
			);
		}

		return new OperationReturnRoutingApi(null, $statusCode, $response->getHeaders() );

	}


	/**
	 * Create request for operation 'unblockNumber'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  string $number A blocked caller&#39;s number in E164 format without a leading plus (+). (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function unblockNumberRequest($account, $number )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling unblockNumber' );
		}
				// verify the required parameter 'number' is set
		if ($number === null || (is_array($number) && count($number) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $number when calling unblockNumber' );
		}
		

		$resourcePath = '/routing/{account}/blocked/{number}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($number !== null) {
			$resourcePath = str_replace( '{' . 'number' . '}', ObjectSerializer::toPathValue($number), $resourcePath );
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

			} elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
				# if Content-Type contains "application/json", json_encode the form parameters
				$httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
			} else {
				// for HTTP post (form)
				$httpBody = ObjectSerializer::buildQuery($formParams);
			}
		}

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'DELETE', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateBranchAction 
	 *
	 * Update a location routing branch
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the branch action. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch action_branch (required)
	 * 
	 * @param RequestParams_RoutingApi_updateBranchAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateBranchAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateBranchAction( $account, $action_id, $action_branch, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateBranchAction();

		$request = $this->updateBranchActionRequest( $account,  $action_id,  $action_branch );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateBranchAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateBranchAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the branch action. (required)
	 * @param  \WildJar\ApiClient\Model\ActionBranch $action_branch (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateBranchActionRequest($account, $action_id, $action_branch )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateBranchAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateBranchAction' );
		}
				// verify the required parameter 'action_branch' is set
		if ($action_branch === null || (is_array($action_branch) && count($action_branch) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_branch when calling updateBranchAction' );
		}
		

		$resourcePath = '/routing/{account}/branch/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_branch)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_branch));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateDidRouting 
	 *
	 * Update the routing of a tracking number
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action routing_action (required)
	 * 
	 * @param RequestParams_RoutingApi_updateDidRouting|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\UpdateDidRouting200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateDidRouting( $account, $did, $routing_action, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateDidRouting();

		$request = $this->updateDidRoutingRequest( $account,  $did,  $routing_action );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateDidRouting200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateDidRouting'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * @param  \WildJar\ApiClient\Model\RoutingAction $routing_action (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateDidRoutingRequest($account, $did, $routing_action )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateDidRouting' );
		}
				// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling updateDidRouting' );
		}
				// verify the required parameter 'routing_action' is set
		if ($routing_action === null || (is_array($routing_action) && count($routing_action) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $routing_action when calling updateDidRouting' );
		}
		

		$resourcePath = '/routing/{account}/did/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
		}


		// for model (json/xml)
		if (isset($routing_action)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($routing_action));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateIVRAction 
	 *
	 * Update an IVR action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the IVR. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full action_ivr_full (required)
	 * 
	 * @param RequestParams_RoutingApi_updateIVRAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateIVRAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateIVRAction( $account, $action_id, $action_ivr_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateIVRAction();

		$request = $this->updateIVRActionRequest( $account,  $action_id,  $action_ivr_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateIVRAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateIVRAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the IVR. (required)
	 * @param  \WildJar\ApiClient\Model\ActionIVRFull $action_ivr_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateIVRActionRequest($account, $action_id, $action_ivr_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateIVRAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateIVRAction' );
		}
				// verify the required parameter 'action_ivr_full' is set
		if ($action_ivr_full === null || (is_array($action_ivr_full) && count($action_ivr_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_ivr_full when calling updateIVRAction' );
		}
		

		$resourcePath = '/routing/{account}/ivr/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_ivr_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_ivr_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateLocationsAction 
	 *
	 * Update a location routing action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the locations action. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update action_locations_map_update (required)
	 * 
	 * @param RequestParams_RoutingApi_updateLocationsAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\UpdateLocationsAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateLocationsAction( $account, $action_id, $action_locations_map_update, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateLocationsAction();

		$request = $this->updateLocationsActionRequest( $account,  $action_id,  $action_locations_map_update );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\UpdateLocationsAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateLocationsAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the locations action. (required)
	 * @param  \WildJar\ApiClient\Model\ActionLocationsMapUpdate $action_locations_map_update (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateLocationsActionRequest($account, $action_id, $action_locations_map_update )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateLocationsAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateLocationsAction' );
		}
				// verify the required parameter 'action_locations_map_update' is set
		if ($action_locations_map_update === null || (is_array($action_locations_map_update) && count($action_locations_map_update) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_locations_map_update when calling updateLocationsAction' );
		}
		

		$resourcePath = '/routing/{account}/locations/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_locations_map_update)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_locations_map_update));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateRobinAction 
	 *
	 * Update a round robin action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the round robin. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full action_robin_full (required)
	 * 
	 * @param RequestParams_RoutingApi_updateRobinAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateRobinAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateRobinAction( $account, $action_id, $action_robin_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateRobinAction();

		$request = $this->updateRobinActionRequest( $account,  $action_id,  $action_robin_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateRobinAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateRobinAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the round robin. (required)
	 * @param  \WildJar\ApiClient\Model\ActionRobinFull $action_robin_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateRobinActionRequest($account, $action_id, $action_robin_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateRobinAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateRobinAction' );
		}
				// verify the required parameter 'action_robin_full' is set
		if ($action_robin_full === null || (is_array($action_robin_full) && count($action_robin_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_robin_full when calling updateRobinAction' );
		}
		

		$resourcePath = '/routing/{account}/robin/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_robin_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_robin_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateTagAction 
	 *
	 * Update a tag action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the tag action. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTag $action_tag action_tag (required)
	 * 
	 * @param RequestParams_RoutingApi_updateTagAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTagAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateTagAction( $account, $action_id, $action_tag, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateTagAction();

		$request = $this->updateTagActionRequest( $account,  $action_id,  $action_tag );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTagAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateTagAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the tag action. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTag $action_tag (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateTagActionRequest($account, $action_id, $action_tag )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateTagAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateTagAction' );
		}
				// verify the required parameter 'action_tag' is set
		if ($action_tag === null || (is_array($action_tag) && count($action_tag) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_tag when calling updateTagAction' );
		}
		

		$resourcePath = '/routing/{account}/tag/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_tag)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_tag));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateTimeAction 
	 *
	 * Update a time switch action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the time switch. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full action_time_full (required)
	 * 
	 * @param RequestParams_RoutingApi_updateTimeAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTimeAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateTimeAction( $account, $action_id, $action_time_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateTimeAction();

		$request = $this->updateTimeActionRequest( $account,  $action_id,  $action_time_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTimeAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateTimeAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the time switch. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTimeFull $action_time_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateTimeActionRequest($account, $action_id, $action_time_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateTimeAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateTimeAction' );
		}
				// verify the required parameter 'action_time_full' is set
		if ($action_time_full === null || (is_array($action_time_full) && count($action_time_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_time_full when calling updateTimeAction' );
		}
		

		$resourcePath = '/routing/{account}/time/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_time_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_time_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateTransferAction 
	 *
	 * Update a transfer action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the transfer. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full action_transfer_full (required)
	 * 
	 * @param RequestParams_RoutingApi_updateTransferAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateTransferAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateTransferAction( $account, $action_id, $action_transfer_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateTransferAction();

		$request = $this->updateTransferActionRequest( $account,  $action_id,  $action_transfer_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateTransferAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateTransferAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the transfer. (required)
	 * @param  \WildJar\ApiClient\Model\ActionTransferFull $action_transfer_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateTransferActionRequest($account, $action_id, $action_transfer_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateTransferAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateTransferAction' );
		}
				// verify the required parameter 'action_transfer_full' is set
		if ($action_transfer_full === null || (is_array($action_transfer_full) && count($action_transfer_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_transfer_full when calling updateTransferAction' );
		}
		

		$resourcePath = '/routing/{account}/transfer/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_transfer_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_transfer_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
	}


	/**
	 * Operation updateVoicemailAction 
	 *
	 * Update a voicemail action
	 * 
	 * @param  int $account WildJar account number. (required)
	 * 
	 * @param  float $action_id The action ID of the voicemail. (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full action_voicemail_full (required)
	 * 
	 * @param RequestParams_RoutingApi_updateVoicemailAction|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\CreateVoicemailAction200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateVoicemailAction( $account, $action_id, $action_voicemail_full, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_RoutingApi_updateVoicemailAction();

		$request = $this->updateVoicemailActionRequest( $account,  $action_id,  $action_voicemail_full );

		$options = $this->createHttpClientOption();
		try {
			$response = $this->client->send($request, $options);
		} catch (RequestException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null );
		} catch (ConnectException $e) {
			throw new ApiException( "[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), null, null );
		}

		$statusCode = $response->getStatusCode();

		if ($statusCode < 200 || $statusCode > 299) {
			throw new ApiException(
				sprintf( '[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri() ),
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
								sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
								$statusCode,
								$response->getHeaders(),
								$content
							);
						}
					}
				}

				return new OperationReturnRoutingApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\CreateVoicemailAction200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnRoutingApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateVoicemailAction'
	 *
	 * @param  int $account WildJar account number. (required)
	 * @param  float $action_id The action ID of the voicemail. (required)
	 * @param  \WildJar\ApiClient\Model\ActionVoicemailFull $action_voicemail_full (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateVoicemailActionRequest($account, $action_id, $action_voicemail_full )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateVoicemailAction' );
		}
				// verify the required parameter 'action_id' is set
		if ($action_id === null || (is_array($action_id) && count($action_id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_id when calling updateVoicemailAction' );
		}
				// verify the required parameter 'action_voicemail_full' is set
		if ($action_voicemail_full === null || (is_array($action_voicemail_full) && count($action_voicemail_full) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $action_voicemail_full when calling updateVoicemailAction' );
		}
		

		$resourcePath = '/routing/{account}/voicemail/{action_id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($account !== null) {
			$resourcePath = str_replace( '{' . 'account' . '}', ObjectSerializer::toPathValue($account), $resourcePath );
		}
		// path params
		if ($action_id !== null) {
			$resourcePath = str_replace( '{' . 'action_id' . '}', ObjectSerializer::toPathValue($action_id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($action_voicemail_full)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($action_voicemail_full));
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

		$query = ObjectSerializer::buildQuery($queryParams);

		// set headers
		$headers['Accept'] = 'application/json';
		if (!$multipart) $headers['Content-Type'] = 'application/json';
		if ($this->config->getUserAgent()) $headers['User-Agent'] = $this->config->getUserAgent();
		
		// this endpoint requires Bearer authentication (access token)
		if (!empty($this->config->getAccessToken())) $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
		

		return new Request( 'POST', $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''), $headers, $httpBody );
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


	
	class RequestParams_RoutingApi_blockCaller {
		
	}
	
	
	class RequestParams_RoutingApi_blockCallerFromCall {
		
	}
	
	
	class RequestParams_RoutingApi_createBranchAction {
		
	}
	
	
	class RequestParams_RoutingApi_createIVRAction {
		
	}
	
	
	class RequestParams_RoutingApi_createLocationsAction {
		
	}
	
	
	class RequestParams_RoutingApi_createRobinAction {
		
	}
	
	
	class RequestParams_RoutingApi_createTagAction {
		
	}
	
	
	class RequestParams_RoutingApi_createTimeAction {
		
	}
	
	
	class RequestParams_RoutingApi_createTransferAction {
		
	}
	
	
	class RequestParams_RoutingApi_createVoicemailAction {
		
	}
	
	
	class RequestParams_RoutingApi_getBranchAction {
		
	}
	
	
	class RequestParams_RoutingApi_getIVRAction {
		
	}
	
	
	class RequestParams_RoutingApi_getLocationsAction {
		
	}
	
	
	class RequestParams_RoutingApi_getLocationsMap {
		
	}
	
	
	class RequestParams_RoutingApi_getRobinAction {
		
	}
	
	
	class RequestParams_RoutingApi_getTagAction {
		
	}
	
	
	class RequestParams_RoutingApi_getTimeAction {
		
	}
	
	
	class RequestParams_RoutingApi_getTransferAction {
		
	}
	
	
	class RequestParams_RoutingApi_getVoicemailAction {
		
	}
	
	
	class RequestParams_RoutingApi_listBlockedCallers {
		
	}
	
	
	class RequestParams_RoutingApi_listBranchActions {
		
	}
	
	
	class RequestParams_RoutingApi_listIVRs {
		
	}
	
	
	class RequestParams_RoutingApi_listLocationsActions {
		
	}
	
	
	class RequestParams_RoutingApi_listRobins {
		
	}
	
	
	class RequestParams_RoutingApi_listTagActions {
		
	}
	
	
	class RequestParams_RoutingApi_listTimeActions {
		
	}
	
	
	class RequestParams_RoutingApi_listTransfers {
		
	}
	
	
	class RequestParams_RoutingApi_listVoicemails {
		
	}
	
	
	class RequestParams_RoutingApi_unblockNumber {
		
	}
	
	
	class RequestParams_RoutingApi_updateBranchAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateDidRouting {
		
	}
	
	
	class RequestParams_RoutingApi_updateIVRAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateLocationsAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateRobinAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateTagAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateTimeAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateTransferAction {
		
	}
	
	
	class RequestParams_RoutingApi_updateVoicemailAction {
		
	}
	

class OperationReturnRoutingApi {
	public $data;
	public $resStatus = 'unknown';
	public $statusCode;
	public $headers;
	public $info;

	public function __construct($res,$statusCode,$headers) {
		$this->statusCode = $statusCode;
		$this->headers = $headers;
		if(method_exists($res, "getStatus") && method_exists($res, "getData")) {
            $this->data = $res->getData();
			$this->resStatus = $res->getStatus();
		} else {
			$this->data = $res;
		}
	}
}