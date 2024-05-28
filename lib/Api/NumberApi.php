<?php
/**
 * NumberApi
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
 * NumberApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class NumberApi
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
	 * Operation decommissionNumber 
	 *
	 * Decommission a tracking number
	 * 
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param RequestParams_NumberApi_decommissionNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	public function decommissionNumber( $did, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_decommissionNumber();

		$request = $this->decommissionNumberRequest( $did );

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

		return new OperationReturnNumberApi(null, $statusCode, $response->getHeaders() );

	}


	/**
	 * Create request for operation 'decommissionNumber'
	 *
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function decommissionNumberRequest($did )
	{
		// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling decommissionNumber' );
		}
		

		$resourcePath = '/number/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
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
	 * Operation deleteInventoryNumber 
	 *
	 * Remove a number from inventory (Internal)
	 * 
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param RequestParams_NumberApi_deleteInventoryNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	public function deleteInventoryNumber( $did, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_deleteInventoryNumber();

		$request = $this->deleteInventoryNumberRequest( $did );

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

		return new OperationReturnNumberApi(null, $statusCode, $response->getHeaders() );

	}


	/**
	 * Create request for operation 'deleteInventoryNumber'
	 *
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function deleteInventoryNumberRequest($did )
	{
		// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling deleteInventoryNumber' );
		}
		

		$resourcePath = '/number/inventory/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
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
	 * Operation getNumber 
	 *
	 * Get tracking number number details
	 * 
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param RequestParams_NumberApi_getNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetNumber200Response|object
	 */
	public function getNumber( $did, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_getNumber();

		$request = $this->getNumberRequest( $did );

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
				if ('\WildJar\ApiClient\Model\GetNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getNumber'
	 *
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getNumberRequest($did )
	{
		// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling getNumber' );
		}
		

		$resourcePath = '/number/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
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
	 * Operation getNumberFull 
	 *
	 * Get full tracking number number details (Dashboard)
	 * 
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param RequestParams_NumberApi_getNumberFull|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\OrderNumber200Response|object
	 */
	public function getNumberFull( $did, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_getNumberFull();

		$request = $this->getNumberFullRequest( $did );

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
				if ('\WildJar\ApiClient\Model\OrderNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\OrderNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\OrderNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getNumberFull'
	 *
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getNumberFullRequest($did )
	{
		// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling getNumberFull' );
		}
		

		$resourcePath = '/number/extra/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
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
	 * Operation listAvailableNumber 
	 *
	 * Get list of available numbers by country
	 * 
	 * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
	 * 
	 * @param RequestParams_NumberApi_listAvailableNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListAvailableNumber200Response|object
	 */
	public function listAvailableNumber( $country_code, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_listAvailableNumber();

		$request = $this->listAvailableNumberRequest( $country_code,  $passParams->area,  $passParams->network,  $passParams->prefix,  $passParams->page,  $passParams->per_page,  $passParams->order );

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
				if ('\WildJar\ApiClient\Model\ListAvailableNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\ListAvailableNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListAvailableNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\ListAvailableNumber200Response';
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

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listAvailableNumber'
	 *
	 * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
	 * @param  string $area _**Geo numbers only.**_ Filter results by number location or charge area. (optional)
	 * @param  string $network Filter the results by tracking number type. (optional)
	 * @param  string $prefix Filter results by the number prefix. (optional)
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listAvailableNumberRequest($country_code, $area = null, $network = null, $prefix = null, $page = 1, $per_page = 10, $order = null )
	{
		// verify the required parameter 'country_code' is set
		if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $country_code when calling listAvailableNumber' );
		}
										
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling NumberApi.listAvailableNumber, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listAvailableNumber, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listAvailableNumber, must be bigger than or equal to 1.');
		}		

		$resourcePath = '/number/available/{country_code}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $area, 'area', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $network, 'network', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $prefix, 'prefix', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		
		// path params
		if ($country_code !== null) {
			$resourcePath = str_replace( '{' . 'country_code' . '}', ObjectSerializer::toPathValue($country_code), $resourcePath );
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
	 * Operation listInventoryNumber 
	 *
	 * Get list of inventory by country (Internal)
	 * 
	 * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
	 * 
	 * @param RequestParams_NumberApi_listInventoryNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListInventoryNumber200Response|object
	 */
	public function listInventoryNumber( $country_code, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_listInventoryNumber();

		$request = $this->listInventoryNumberRequest( $country_code,  $passParams->page,  $passParams->per_page,  $passParams->order,  $passParams->account,  $passParams->provider,  $passParams->type );

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
				if ('\WildJar\ApiClient\Model\ListInventoryNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\ListInventoryNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListInventoryNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\ListInventoryNumber200Response';
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

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listInventoryNumber'
	 *
	 * @param  string $country_code 2 character country code (ie. AU, GB, NZ, US). Refer to [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) for more information. (required)
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @param  string $account Filter tracking numbers by account number (optional)
	 * @param  string $provider Filter results by number provider. (optional)
	 * @param  string $type Filter the results by tracking number type. (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listInventoryNumberRequest($country_code, $page = 1, $per_page = 10, $order = null, $account = null, $provider = null, $type = null )
	{
		// verify the required parameter 'country_code' is set
		if ($country_code === null || (is_array($country_code) && count($country_code) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $country_code when calling listInventoryNumber' );
		}
				
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling NumberApi.listInventoryNumber, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listInventoryNumber, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listInventoryNumber, must be bigger than or equal to 1.');
		}								

		$resourcePath = '/number/all/{country_code}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $account, 'account', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $provider, 'provider', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $type, 'type', 'string','form', true, false ) ?? [] );
		
		// path params
		if ($country_code !== null) {
			$resourcePath = str_replace( '{' . 'country_code' . '}', ObjectSerializer::toPathValue($country_code), $resourcePath );
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
	 * Operation listNumber 
	 *
	 * Get list of numbers
	 * 
	 * @param RequestParams_NumberApi_listNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\ListNumber200Response|object
	 */
	public function listNumber( $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_listNumber();

		$request = $this->listNumberRequest( $passParams->page,  $passParams->per_page,  $passParams->order,  $passParams->type,  $passParams->account );

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
				if ('\WildJar\ApiClient\Model\ListNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\ListNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\ListNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\ListNumber200Response';
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

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'listNumber'
	 *
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @param  string $type Filter tracking numbers by number type (optional)
	 * @param  string $account Filter tracking numbers by account number (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function listNumberRequest($page = 1, $per_page = 10, $order = null, $type = null, $account = null )
	{
		
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling NumberApi.listNumber, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listNumber, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling NumberApi.listNumber, must be bigger than or equal to 1.');
		}						

		$resourcePath = '/number';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $type, 'type', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $account, 'account', 'string','form', true, false ) ?? [] );
		


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
	 * Operation orderNumber 
	 *
	 * Order an tracking number
	 * 
	 * @param  int $account WildJar account number (required)
	 * 
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\OrderNumber $order_number order_number (required)
	 * 
	 * @param RequestParams_NumberApi_orderNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\OrderNumber200Response|object
	 */
	public function orderNumber( $account, $did, $order_number, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_orderNumber();

		$request = $this->orderNumberRequest( $account,  $did,  $order_number );

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
				if ('\WildJar\ApiClient\Model\OrderNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\OrderNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\OrderNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'orderNumber'
	 *
	 * @param  int $account WildJar account number (required)
	 * @param  string $did Tracking number in E164 format without a leading plus (+). (required)
	 * @param  \WildJar\ApiClient\Model\OrderNumber $order_number (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function orderNumberRequest($account, $did, $order_number )
	{
		// verify the required parameter 'account' is set
		if ($account === null || (is_array($account) && count($account) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $account when calling orderNumber' );
		}
				// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling orderNumber' );
		}
				// verify the required parameter 'order_number' is set
		if ($order_number === null || (is_array($order_number) && count($order_number) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $order_number when calling orderNumber' );
		}
		

		$resourcePath = '/number/{account}/{did}';
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
		if (isset($order_number)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($order_number));
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
	 * Operation updateNumber 
	 *
	 * Update tracking number details
	 * 
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\Number $number number (required)
	 * 
	 * @param RequestParams_NumberApi_updateNumber|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetNumber200Response|object
	 */
	public function updateNumber( $did, $number, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_NumberApi_updateNumber();

		$request = $this->updateNumberRequest( $did,  $number );

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
				if ('\WildJar\ApiClient\Model\GetNumber200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetNumber200Response' !== 'string') {
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

				return new OperationReturnNumberApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetNumber200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnNumberApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateNumber'
	 *
	 * @param  int $did Tracking number in E164 format without a leading plus (+). (required)
	 * @param  \WildJar\ApiClient\Model\Number $number (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateNumberRequest($did, $number )
	{
		// verify the required parameter 'did' is set
		if ($did === null || (is_array($did) && count($did) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $did when calling updateNumber' );
		}
				// verify the required parameter 'number' is set
		if ($number === null || (is_array($number) && count($number) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $number when calling updateNumber' );
		}
		

		$resourcePath = '/number/{did}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($did !== null) {
			$resourcePath = str_replace( '{' . 'did' . '}', ObjectSerializer::toPathValue($did), $resourcePath );
		}


		// for model (json/xml)
		if (isset($number)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($number));
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


	
	class RequestParams_NumberApi_decommissionNumber {
		
	}
	
	
	class RequestParams_NumberApi_deleteInventoryNumber {
		
	}
	
	
	class RequestParams_NumberApi_getNumber {
		
	}
	
	
	class RequestParams_NumberApi_getNumberFull {
		
	}
	
	
	class RequestParams_NumberApi_listAvailableNumber {
		
		/** @var  string $area _**Geo numbers only.**_ Filter results by number location or charge area.  */
		public $area ;
		
		/** @var  string $network Filter the results by tracking number type.  */
		public $network ;
		
		/** @var  string $prefix Filter results by the number prefix.  */
		public $prefix ;
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
	}
	
	
	class RequestParams_NumberApi_listInventoryNumber {
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
		/** @var  string $account Filter tracking numbers by account number  */
		public $account ;
		
		/** @var  string $provider Filter results by number provider.  */
		public $provider ;
		
		/** @var  string $type Filter the results by tracking number type.  */
		public $type ;
		
	}
	
	
	class RequestParams_NumberApi_listNumber {
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
		/** @var  string $type Filter tracking numbers by number type  */
		public $type ;
		
		/** @var  string $account Filter tracking numbers by account number  */
		public $account ;
		
	}
	
	
	class RequestParams_NumberApi_orderNumber {
		
	}
	
	
	class RequestParams_NumberApi_updateNumber {
		
	}
	

class OperationReturnNumberApi {
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