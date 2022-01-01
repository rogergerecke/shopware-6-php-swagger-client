<?php
/**
 * BulkOperationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * OpenAPI spec version: 6.4.7.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BulkOperationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkOperationsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sync
     *
     * Bulk edit entities
     *
     * @param  \Swagger\Client\Model\ActionSyncBody[] $body body (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  bool $single_operation Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction (optional, default to false)
     * @param  string $indexing_behavior Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2006
     */
    public function sync($body, $fail_on_error = 'true', $single_operation = 'false', $indexing_behavior = null)
    {
        list($response) = $this->syncWithHttpInfo($body, $fail_on_error, $single_operation, $indexing_behavior);
        return $response;
    }

    /**
     * Operation syncWithHttpInfo
     *
     * Bulk edit entities
     *
     * @param  \Swagger\Client\Model\ActionSyncBody[] $body (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  bool $single_operation Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction (optional, default to false)
     * @param  string $indexing_behavior Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function syncWithHttpInfo($body, $fail_on_error = 'true', $single_operation = 'false', $indexing_behavior = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->syncRequest($body, $fail_on_error, $single_operation, $indexing_behavior);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Model\InlineResponse2006',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation syncAsync
     *
     * Bulk edit entities
     *
     * @param  \Swagger\Client\Model\ActionSyncBody[] $body (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  bool $single_operation Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction (optional, default to false)
     * @param  string $indexing_behavior Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncAsync($body, $fail_on_error = 'true', $single_operation = 'false', $indexing_behavior = null)
    {
        return $this->syncAsyncWithHttpInfo($body, $fail_on_error, $single_operation, $indexing_behavior)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncAsyncWithHttpInfo
     *
     * Bulk edit entities
     *
     * @param  \Swagger\Client\Model\ActionSyncBody[] $body (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  bool $single_operation Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction (optional, default to false)
     * @param  string $indexing_behavior Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncAsyncWithHttpInfo($body, $fail_on_error = 'true', $single_operation = 'false', $indexing_behavior = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->syncRequest($body, $fail_on_error, $single_operation, $indexing_behavior);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sync'
     *
     * @param  \Swagger\Client\Model\ActionSyncBody[] $body (required)
     * @param  bool $fail_on_error To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. (optional, default to true)
     * @param  bool $single_operation Controls weather the data is written at once or in seperate transactions. - &#x60;true&#x60;: Data will be written in a single transaction (optional, default to false)
     * @param  string $indexing_behavior Controls the indexing behavior. - &#x60;disable-indexing&#x60;: Data indexing is completely disabled (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function syncRequest($body, $fail_on_error = 'true', $single_operation = 'false', $indexing_behavior = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling sync'
            );
        }

        $resourcePath = '/_action/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($fail_on_error !== null) {
            $headerParams['fail-on-error'] = ObjectSerializer::toHeaderValue($fail_on_error);
        }
        // header params
        if ($single_operation !== null) {
            $headerParams['single-operation'] = ObjectSerializer::toHeaderValue($single_operation);
        }
        // header params
        if ($indexing_behavior !== null) {
            $headerParams['indexing-behavior'] = ObjectSerializer::toHeaderValue($indexing_behavior);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
