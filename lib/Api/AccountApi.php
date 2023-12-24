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
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|object
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
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|object
	 */
	public function getAccount( $id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_getAccount();

		$request = $this->getAccountRequest( $id );

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
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getAccountRequest($id )
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
	 * Operation listAccounts 
	 *
	 * Get list of accounts
	 * 
	 * @param RequestParams_AccountApi_listAccounts|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListAccounts200Response|object
	 */
	public function listAccounts( $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_AccountApi_listAccounts();

		$request = $this->listAccountsRequest( $passParams->status,  $passParams->name );

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
				if ('\WildJar\ApiClient\Model\ListAccounts200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\ListAccounts200Response' !== 'string') {
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
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListAccounts200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\ListAccounts200Response';
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
	 * Create request for operation 'listAccounts'
	 *
	 * @param  string $status Filter accounts by their status (optional)
	 * @param  string $name Filter accounts by name (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listAccountsRequest($status = null, $name = null )
	{
				

		$resourcePath = '/account';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

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
	 * @return \WildJar\ApiClient\Model\AddAccount200Response|object
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
		
	}
	
	
	class RequestParams_AccountApi_listAccounts {
		
		/** @var  string $status Filter accounts by their status  */
		public $status ;
		
		/** @var  string $name Filter accounts by name  */
		public $name ;
		
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