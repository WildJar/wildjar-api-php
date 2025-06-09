<?php
/**
 * CallApi
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
 * CallApi Class Doc Comment
 *
 * @category Class
 * @package  WildJar\ApiClient
 * @author   WildJar pty ltd
 * @link     https://wildjar.com
 */
class CallApi
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
	 * Operation getCall 
	 *
	 * List Calls
	 * 
	 * @param RequestParams_CallApi_getCall|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetCall200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getCall( $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_getCall();

		$request = $this->getCallRequest( $passParams->page,  $passParams->per_page,  $passParams->order,  $passParams->account,  $passParams->date_from,  $passParams->date_to,  $passParams->duration_min,  $passParams->duration_max,  $passParams->first_time_caller,  $passParams->status,  $passParams->timezone,  $passParams->tracking_number,  $passParams->tracking_source );

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
				if ('\WildJar\ApiClient\Model\GetCall200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetCall200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCall200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
		}

		$returnType = '\WildJar\ApiClient\Model\GetCall200Response';
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

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getCall'
	 *
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
	 * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
	 * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
	 * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
	 * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
	 * @param  string $first_time_caller Filter the results by first time caller. (optional)
	 * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
	 * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
	 * @param  string $tracking_number Filter tracking numbers by inbound tracking number (optional)
	 * @param  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;. (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getCallRequest($page = 1, $per_page = 10, $order = null, $account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $first_time_caller = null, $status = null, $timezone = null, $tracking_number = null, $tracking_source = null )
	{
		
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling CallApi.getCall, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling CallApi.getCall, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling CallApi.getCall, must be bigger than or equal to 1.');
		}																						

		$resourcePath = '/call';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $account, 'account', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $date_from, 'dateFrom', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $date_to, 'dateTo', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $duration_min, 'durationMin', 'number','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $duration_max, 'durationMax', 'number','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $first_time_caller, 'firstTimeCaller', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $status, 'status', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $timezone, 'timezone', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $tracking_number, 'trackingNumber', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $tracking_source, 'trackingSource', 'string','form', true, false ) ?? [] );
		


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
	 * Operation getCallDetails 
	 *
	 * Show call details
	 * 
	 * @param  int $id Call ID (required)
	 * 
	 * @param RequestParams_CallApi_getCallDetails|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetCallDetails200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getCallDetails( $id, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_getCallDetails();

		$request = $this->getCallDetailsRequest( $id );

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
				if ('\WildJar\ApiClient\Model\GetCallDetails200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetCallDetails200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCallDetails200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getCallDetails'
	 *
	 * @param  int $id Call ID (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getCallDetailsRequest($id )
	{
		// verify the required parameter 'id' is set
		if ($id === null || (is_array($id) && count($id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $id when calling getCallDetails' );
		}
		

		$resourcePath = '/call/{id}';
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
	 * Operation getOutboundCallDetails 
	 *
	 * Show outbound call details
	 * 
	 * @param  string $uuid Outbound call UUID (required)
	 * 
	 * @param RequestParams_CallApi_getOutboundCallDetails|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetOutboundCallDetails200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getOutboundCallDetails( $uuid, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_getOutboundCallDetails();

		$request = $this->getOutboundCallDetailsRequest( $uuid );

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
				if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getOutboundCallDetails'
	 *
	 * @param  string $uuid Outbound call UUID (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getOutboundCallDetailsRequest($uuid )
	{
		// verify the required parameter 'uuid' is set
		if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $uuid when calling getOutboundCallDetails' );
		}
		

		$resourcePath = '/call/outbound/{uuid}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($uuid !== null) {
			$resourcePath = str_replace( '{' . 'uuid' . '}', ObjectSerializer::toPathValue($uuid), $resourcePath );
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
	 * Operation getOutboundCalls 
	 *
	 * List Outbound Calls
	 * 
	 * @param RequestParams_CallApi_getOutboundCalls|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetOutboundCalls200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function getOutboundCalls( $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_getOutboundCalls();

		$request = $this->getOutboundCallsRequest( $passParams->page,  $passParams->per_page,  $passParams->order,  $passParams->account,  $passParams->date_from,  $passParams->date_to,  $passParams->duration_min,  $passParams->duration_max,  $passParams->status,  $passParams->timezone,  $passParams->tracking_number );

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
				if ('\WildJar\ApiClient\Model\GetOutboundCalls200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetOutboundCalls200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetOutboundCalls200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'getOutboundCalls'
	 *
	 * @param  int $page Page number of results to return. (optional, default to 1)
	 * @param  int $per_page Number of results to return per page. (optional, default to 10)
	 * @param  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order. (optional)
	 * @param  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers. (optional)
	 * @param  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
	 * @param  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required. (optional)
	 * @param  float $duration_min Filter the results by minumum duration in seconds. (optional)
	 * @param  float $duration_max Filter the results by maximum duration in seconds. (optional)
	 * @param  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout. (optional)
	 * @param  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user. (optional)
	 * @param  string $tracking_number Filter tracking numbers by sip extension (optional)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function getOutboundCallsRequest($page = 1, $per_page = 10, $order = null, $account = null, $date_from = null, $date_to = null, $duration_min = null, $duration_max = null, $status = null, $timezone = null, $tracking_number = null )
	{
		
		if ($page !== null && $page < 1) {
			throw new \InvalidArgumentException('invalid value for "$page" when calling CallApi.getOutboundCalls, must be bigger than or equal to 1.');
		}		
		if ($per_page !== null && $per_page > 1000) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling CallApi.getOutboundCalls, must be smaller than or equal to 1000.');
		}
		if ($per_page !== null && $per_page < 1) {
			throw new \InvalidArgumentException('invalid value for "$per_page" when calling CallApi.getOutboundCalls, must be bigger than or equal to 1.');
		}																		

		$resourcePath = '/call/outbound';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $page, 'page', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $per_page, 'perPage', 'integer','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $order, 'order', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $account, 'account', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $date_from, 'dateFrom', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $date_to, 'dateTo', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $duration_min, 'durationMin', 'number','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $duration_max, 'durationMax', 'number','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $status, 'status', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $timezone, 'timezone', 'string','form', true, false ) ?? [] );
		$queryParams = array_merge( $queryParams, ObjectSerializer::toQueryValue( $tracking_number, 'trackingNumber', 'string','form', true, false ) ?? [] );
		


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
	 * Operation updateCall 
	 *
	 * Add a score, tag or note to a call
	 * 
	 * @param  int $id Call ID (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\Call $call call (required)
	 * 
	 * @param RequestParams_CallApi_updateCall|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetCallDetails200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateCall( $id, $call, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_updateCall();

		$request = $this->updateCallRequest( $id,  $call );

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
				if ('\WildJar\ApiClient\Model\GetCallDetails200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetCallDetails200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetCallDetails200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateCall'
	 *
	 * @param  int $id Call ID (required)
	 * @param  \WildJar\ApiClient\Model\Call $call (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateCallRequest($id, $call )
	{
		// verify the required parameter 'id' is set
		if ($id === null || (is_array($id) && count($id) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $id when calling updateCall' );
		}
				// verify the required parameter 'call' is set
		if ($call === null || (is_array($call) && count($call) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $call when calling updateCall' );
		}
		

		$resourcePath = '/call/{id}';
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
		if (isset($call)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($call));
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
	 * Operation updateOutboundCall 
	 *
	 * Add a score, tag or note to an outbound call
	 * 
	 * @param  string $uuid Outbound call UUID (required)
	 * 
	 * @param  \WildJar\ApiClient\Model\OutboundCall $outbound_call outbound_call (required)
	 * 
	 * @param RequestParams_CallApi_updateOutboundCall|null $passParams
	 *
	 * @throws \WildJar\ApiClient\ApiException on non-2xx response or if the response body is not in the expected format
	 * @throws \InvalidArgumentException
	 * @return \WildJar\ApiClient\Model\GetOutboundCallDetails200Response|\WildJar\ApiClient\Model\InlineObject
	 */
	public function updateOutboundCall( $uuid, $outbound_call, $passParams = null) {
		if ($passParams===null) $passParams = new RequestParams_CallApi_updateOutboundCall();

		$request = $this->updateOutboundCallRequest( $uuid,  $outbound_call );

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
				if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' === '\SplFileObject') {
					$content = $response->getBody(); //stream goes to serializer
				} else {
					$content = (string) $response->getBody();
					if ('\WildJar\ApiClient\Model\GetOutboundCallDetails200Response' !== 'string') {
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

				return new OperationReturnCallApi(
					ObjectSerializer::deserialize($content, '\WildJar\ApiClient\Model\GetOutboundCallDetails200Response', []),
					$response->getStatusCode(),
					$response->getHeaders()
				);
			
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
						sprintf( 'Error JSON decoding server response (%s)', $request->getUri() ),
						$statusCode,
						$response->getHeaders(),
						$content
					);
				}
			}
		}

		return new OperationReturnCallApi(
			ObjectSerializer::deserialize($content, $returnType, []),
			$response->getStatusCode(),
			$response->getHeaders()
		);

	}


	/**
	 * Create request for operation 'updateOutboundCall'
	 *
	 * @param  string $uuid Outbound call UUID (required)
	 * @param  \WildJar\ApiClient\Model\OutboundCall $outbound_call (required)
	 * @throws \InvalidArgumentException
	 * @return \GuzzleHttp\Psr7\Request
	 */
	public function updateOutboundCallRequest($uuid, $outbound_call )
	{
		// verify the required parameter 'uuid' is set
		if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $uuid when calling updateOutboundCall' );
		}
				// verify the required parameter 'outbound_call' is set
		if ($outbound_call === null || (is_array($outbound_call) && count($outbound_call) === 0)) {
			throw new \InvalidArgumentException( 'Missing the required parameter $outbound_call when calling updateOutboundCall' );
		}
		

		$resourcePath = '/call/outbound/{uuid}';
		$formParams = [];
		$queryParams = [];
		$headers = [];
		$httpBody = '';
		$multipart = false;

		
		// path params
		if ($uuid !== null) {
			$resourcePath = str_replace( '{' . 'uuid' . '}', ObjectSerializer::toPathValue($uuid), $resourcePath );
		}


		// for model (json/xml)
		if (isset($outbound_call)) {
			$httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($outbound_call));
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


	
	class RequestParams_CallApi_getCall {
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
		/** @var  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers.  */
		public $account ;
		
		/** @var  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.  */
		public $date_from ;
		
		/** @var  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.  */
		public $date_to ;
		
		/** @var  float $duration_min Filter the results by minumum duration in seconds.  */
		public $duration_min ;
		
		/** @var  float $duration_max Filter the results by maximum duration in seconds.  */
		public $duration_max ;
		
		/** @var  string $first_time_caller Filter the results by first time caller.  */
		public $first_time_caller ;
		
		/** @var  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.  */
		public $status ;
		
		/** @var  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user.  */
		public $timezone ;
		
		/** @var  string $tracking_number Filter tracking numbers by inbound tracking number  */
		public $tracking_number ;
		
		/** @var  string $tracking_source Filter the results by the tracking source. For example, trackingSource&#x3D;SMS will show the numbers with the names \&quot;SMS\&quot; and \&quot;SMS Follow Up\&quot;.  */
		public $tracking_source ;
		
	}
	
	
	class RequestParams_CallApi_getCallDetails {
		
	}
	
	
	class RequestParams_CallApi_getOutboundCallDetails {
		
	}
	
	
	class RequestParams_CallApi_getOutboundCalls {
		
		/** @var  int $page Page number of results to return.  */
		public $page = 1 ;
		
		/** @var  int $per_page Number of results to return per page.  */
		public $per_page = 10 ;
		
		/** @var  string $order Field name to sort results by. Prefix the field name by a minus sign (ie. -id) to filter in descending order.  */
		public $order ;
		
		/** @var  string $account Filter calls by account number. You can request multiple accounts by comma separating the account numbers.  */
		public $account ;
		
		/** @var  \DateTime $date_from Filter the results by date from. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.  */
		public $date_from ;
		
		/** @var  \DateTime $date_to Filter the results by date to. You can specify dates in YYYY-MM-DD format or dates and times in YYYY-MM-DDTHH:MM:SS format. You can also specify the time zone offset YYYY-MM-DDTHH:MM:SS+11:00 if required.  */
		public $date_to ;
		
		/** @var  float $duration_min Filter the results by minumum duration in seconds.  */
		public $duration_min ;
		
		/** @var  float $duration_max Filter the results by maximum duration in seconds.  */
		public $duration_max ;
		
		/** @var  string $status The status of the call:   * &#x60;answered&#x60; - The call has has been answered (by a person or the answer point phone system).   * &#x60;abandoned&#x60; - The caller has hung up before the call is answered (by a person or the answer point phone system) and before the missed call timeout.   * &#x60;missed&#x60; - The call has not been answered (by a person or the answer point phone system) before the missed call timeout.  */
		public $status ;
		
		/** @var  \DateTime $timezone The tz database time zone name to apply to datefrom and dateto filters if not specified explicitly, for example timezone&#x3D;Australia%2FSydney. To get the time zone of an account, use the \&quot;timezone\&quot; field from an account or \&quot;tz\&quot; field from a user.  */
		public $timezone ;
		
		/** @var  string $tracking_number Filter tracking numbers by sip extension  */
		public $tracking_number ;
		
	}
	
	
	class RequestParams_CallApi_updateCall {
		
	}
	
	
	class RequestParams_CallApi_updateOutboundCall {
		
	}
	

class OperationReturnCallApi {
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