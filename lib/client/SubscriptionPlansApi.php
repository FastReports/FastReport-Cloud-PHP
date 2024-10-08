<?php
/**
 * SubscriptionPlansApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FastReport Cloud
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * SubscriptionPlansApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscriptionPlansApi
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
        'subscriptionPlansGetSubscriptionPlan' => [
            'application/json',
        ],
        'subscriptionPlansGetSubscriptionPlans' => [
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
     * Operation subscriptionPlansGetSubscriptionPlan
     *
     * Returns a subscription plan. Not all subscriptions can be issued for customer.
     *
     * @param  string $id Identifier of subsctiption plan (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlan'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails
     */
    public function subscriptionPlansGetSubscriptionPlan($id, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlan'][0])
    {
        list($response) = $this->subscriptionPlansGetSubscriptionPlanWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlanWithHttpInfo
     *
     * Returns a subscription plan. Not all subscriptions can be issued for customer.
     *
     * @param  string $id Identifier of subsctiption plan (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlan'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlansGetSubscriptionPlanWithHttpInfo($id, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlan'][0])
    {
        $request = $this->subscriptionPlansGetSubscriptionPlanRequest($id, $contentType);

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
                    if ('\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM';
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
                        '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlanAsync
     *
     * Returns a subscription plan. Not all subscriptions can be issued for customer.
     *
     * @param  string $id Identifier of subsctiption plan (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlan'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscriptionPlansGetSubscriptionPlanAsync($id, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlan'][0])
    {
        return $this->subscriptionPlansGetSubscriptionPlanAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlanAsyncWithHttpInfo
     *
     * Returns a subscription plan. Not all subscriptions can be issued for customer.
     *
     * @param  string $id Identifier of subsctiption plan (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlan'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscriptionPlansGetSubscriptionPlanAsyncWithHttpInfo($id, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlan'][0])
    {
        $returnType = '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM';
        $request = $this->subscriptionPlansGetSubscriptionPlanRequest($id, $contentType);

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
     * Create request for operation 'subscriptionPlansGetSubscriptionPlan'
     *
     * @param  string $id Identifier of subsctiption plan (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlan'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function subscriptionPlansGetSubscriptionPlanRequest($id, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlan'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling subscriptionPlansGetSubscriptionPlan'
            );
        }
        if (!preg_match("/^[A-Fa-f0-9]{24}$/", $id)) {
            throw new \InvalidArgumentException("invalid value for \"id\" when calling SubscriptionPlansApi.subscriptionPlansGetSubscriptionPlan, must conform to the pattern /^[A-Fa-f0-9]{24}$/.");
        }
        

        $resourcePath = '/api/manage/v1/SubscriptionPlans/{id}';
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
            ['application/json', ],
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
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
     * Operation subscriptionPlansGetSubscriptionPlans
     *
     * Returns a list of active subscription plans that can be issued to the user.
     *
     * @param  int $skip Variable for pagination, defautl value is 0 (optional, default to 0)
     * @param  int $take Variable for pagination, default value is 10 (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlans'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails
     */
    public function subscriptionPlansGetSubscriptionPlans($skip = 0, $take = 10, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlans'][0])
    {
        list($response) = $this->subscriptionPlansGetSubscriptionPlansWithHttpInfo($skip, $take, $contentType);
        return $response;
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlansWithHttpInfo
     *
     * Returns a list of active subscription plans that can be issued to the user.
     *
     * @param  int $skip Variable for pagination, defautl value is 0 (optional, default to 0)
     * @param  int $take Variable for pagination, default value is 10 (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlans'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM|\OpenAPI\Client\cloud\fastreport\model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscriptionPlansGetSubscriptionPlansWithHttpInfo($skip = 0, $take = 10, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlans'][0])
    {
        $request = $this->subscriptionPlansGetSubscriptionPlansRequest($skip, $take, $contentType);

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
                    if ('\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\ProblemDetails' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM';
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
                        '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\cloud\fastreport\model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlansAsync
     *
     * Returns a list of active subscription plans that can be issued to the user.
     *
     * @param  int $skip Variable for pagination, defautl value is 0 (optional, default to 0)
     * @param  int $take Variable for pagination, default value is 10 (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscriptionPlansGetSubscriptionPlansAsync($skip = 0, $take = 10, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlans'][0])
    {
        return $this->subscriptionPlansGetSubscriptionPlansAsyncWithHttpInfo($skip, $take, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation subscriptionPlansGetSubscriptionPlansAsyncWithHttpInfo
     *
     * Returns a list of active subscription plans that can be issued to the user.
     *
     * @param  int $skip Variable for pagination, defautl value is 0 (optional, default to 0)
     * @param  int $take Variable for pagination, default value is 10 (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscriptionPlansGetSubscriptionPlansAsyncWithHttpInfo($skip = 0, $take = 10, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlans'][0])
    {
        $returnType = '\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM';
        $request = $this->subscriptionPlansGetSubscriptionPlansRequest($skip, $take, $contentType);

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
     * Create request for operation 'subscriptionPlansGetSubscriptionPlans'
     *
     * @param  int $skip Variable for pagination, defautl value is 0 (optional, default to 0)
     * @param  int $take Variable for pagination, default value is 10 (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['subscriptionPlansGetSubscriptionPlans'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function subscriptionPlansGetSubscriptionPlansRequest($skip = 0, $take = 10, string $contentType = self::contentTypes['subscriptionPlansGetSubscriptionPlans'][0])
    {

        if ($skip !== null && $skip > 2147483647) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling SubscriptionPlansApi.subscriptionPlansGetSubscriptionPlans, must be smaller than or equal to 2147483647.');
        }
        if ($skip !== null && $skip < 0) {
            throw new \InvalidArgumentException('invalid value for "$skip" when calling SubscriptionPlansApi.subscriptionPlansGetSubscriptionPlans, must be bigger than or equal to 0.');
        }
        
        if ($take !== null && $take > 120) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling SubscriptionPlansApi.subscriptionPlansGetSubscriptionPlans, must be smaller than or equal to 120.');
        }
        if ($take !== null && $take < 1) {
            throw new \InvalidArgumentException('invalid value for "$take" when calling SubscriptionPlansApi.subscriptionPlansGetSubscriptionPlans, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/api/manage/v1/SubscriptionPlans';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $skip,
            'skip', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $take,
            'take', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
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
