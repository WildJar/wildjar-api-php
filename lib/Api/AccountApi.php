<?php
/**
 * AccountApi
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
 * AccountApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class AccountApi
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
	 * Operation addAccount 
	 *
	 * Create a new account
	 * 
	 * @param  \WildJar\ApiClient\Model\Account $account account (required)
	 * 
	 * @param RequestParams_AccountApi_addAccount|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function addAccount( $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_addAccount();

		$request = $this->addAccountRequest( $account );

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
				if ('\WildJar\ApiClient\Model\AddAccount200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\AddAccount200Response' !== 'string') {
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

				return new OperationReturnAccountApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\AddAccount200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\AddAccount200Response';
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

		return new OperationReturnAccountApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'addAccount'
	 *
	 * @param  \WildJar\ApiClient\Model\Account $account (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function addAccountRequest($account )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling addAccount' );
		}
		

		$resourcePath = '/account';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		


		// for model (json/xml)
		if (isset($account)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($account));
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
	 * Operation getAccount 
	 *
	 * Get account details
	 * 
	 * @param  int $id Account ID (required)
	 * 
	 * @param RequestParams_AccountApi_getAccount|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getAccount( $id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_getAccount();

		$request = $this->getAccountRequest( $id,  $passParams->show );

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
				if ('\WildJar\ApiClient\Model\AddAccount200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\AddAccount200Response' !== 'string') {
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

				return new OperationReturnAccountApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\AddAccount200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\AddAccount200Response';
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

		return new OperationReturnAccountApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getAccount'
	 *
	 * @param  int $id Account ID (required)
	 * @param  string $show Use &#x60;links&#x60; to include the account&#39;s parent and child accounts. (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getAccountRequest($id, $show = null )
	{
		// verify the required parameter 'id' is set
		if ($id === null || (is_array($id) && count($id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $id when calling getAccount' );
		}
				

		$resourcePath = '/account/{id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $show, 'show', 'string','form', true, false ) ?? [] );
		
		// path params
		if ($id !== null) {
			$resourcePath = str_replace( '{' . 'id' . '}', ObjectSerializer::toPathValue($id), $resourcePath );
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
	 * Operation listAccount 
	 *
	 * Get list of accounts
	 * 
	 * @param RequestParams_AccountApi_listAccount|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListAccount200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function listAccount( $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_listAccount();

		$request = $this->listAccountRequest( $passParams->page,  $passParams->per_page,  $passParams->order,  $passParams->status,  $passParams->name );

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
				if ('\WildJar\ApiClient\Model\ListAccount200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\ListAccount200Response' !== 'string') {
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

				return new OperationReturnAccountApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListAccount200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\ListAccount200Response';
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

		return new OperationReturnAccountApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listAccount'
	 *
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @param  string $status Filter accounts by their status (optional)
	 * @param  string $name Filter accounts by name (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listAccountRequest($page = 1, $per_page = 10, $order = null, $status = null, $name = null )
	{
		
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling AccountApi.listAccount, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling AccountApi.listAccount, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling AccountApi.listAccount, must be bigger than or equal to 1.');
		}						

		$resourcePath = '/account';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $status, 'status', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $name, 'name', 'string','form', true, false ) ?? [] );
		


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
	 * Operation moveAccount 
	 *
	 * Move an account
	 * 
	 * @param  float $child The account ID of the account to be moved (required)
	 * 
	 * @param  float $parent The account ID of the new parent account. (required)
	 * 
	 * @param RequestParams_AccountApi_moveAccount|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\MoveAccount200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function moveAccount( $child, $parent, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_moveAccount();

		$request = $this->moveAccountRequest( $child,  $parent );

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
				if ('\WildJar\ApiClient\Model\MoveAccount200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\MoveAccount200Response' !== 'string') {
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

				return new OperationReturnAccountApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\MoveAccount200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\MoveAccount200Response';
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

		return new OperationReturnAccountApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'moveAccount'
	 *
	 * @param  float $child The account ID of the account to be moved (required)
	 * @param  float $parent The account ID of the new parent account. (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function moveAccountRequest($child, $parent )
	{
		// verify the required parameter 'child' is set
		if ($child === null || (is_array($child) && count($child) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $child when calling moveAccount' );
		}
				// verify the required parameter 'parent' is set
		if ($parent === null || (is_array($parent) && count($parent) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $parent when calling moveAccount' );
		}
		

		$resourcePath = '/account/tree/{child}/{parent}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($child !== null) {
			$resourcePath = str_replace( '{' . 'child' . '}', ObjectSerializer::toPathValue($child), $resourcePath );
		}
		// path params
		if ($parent !== null) {
			$resourcePath = str_replace( '{' . 'parent' . '}', ObjectSerializer::toPathValue($parent), $resourcePath );
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
	 * Operation updateAccount 
	 *
	 * Update an existing account
	 * 
	 * @param  int $id Account ID (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\Account $account account (required)
	 * 
	 * @param RequestParams_AccountApi_updateAccount|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateAccount( $id, $account, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_updateAccount();

		$request = $this->updateAccountRequest( $id,  $account );

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
				if ('\WildJar\ApiClient\Model\AddAccount200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\AddAccount200Response' !== 'string') {
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

				return new OperationReturnAccountApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\AddAccount200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\AddAccount200Response';
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

		return new OperationReturnAccountApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateAccount'
	 *
	 * @param  int $id Account ID (required)
	 * @param  \WildJar\ApiClient\Model\Account $account (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateAccountRequest($id, $account )
	{
		// verify the required parameter 'id' is set
		if ($id === null || (is_array($id) && count($id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $id when calling updateAccount' );
		}
				// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling updateAccount' );
		}
		

		$resourcePath = '/account/{id}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($id !== null) {
			$resourcePath = str_replace( '{' . 'id' . '}', ObjectSerializer::toPathValue($id), $resourcePath );
		}


		// for model (json/xml)
		if (isset($account)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($account));
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


	
	class RequestParams_AccountApi_addAccount {
		
	}
	
	
	class RequestParams_AccountApi_getAccount {
		
		/** @var  string $show Use &#x60;links&#x60; to include the account&#39;s parent and child accounts.  */
		public $show ;
		
	}
	
	
	class RequestParams_AccountApi_listAccount {
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
		/** @var  string $status Filter accounts by their status  */
		public $status ;
		
		/** @var  string $name Filter accounts by name  */
		public $name ;
		
	}
	
	
	class RequestParams_AccountApi_moveAccount {
		
	}
	
	
	class RequestParams_AccountApi_updateAccount {
		
	}
	

class OperationReturnAccountApi {
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