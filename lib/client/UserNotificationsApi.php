<?php
/**
 * UserNotificationsApi
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
 * UserNotificationsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserNotificationsApi
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
        'userNotificationsClearNotifications' => [
            'application/json',
            'text/json',
            'application/*+json',
        ],
        'userNotificationsGetNotifications' => [
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
     * Operation userNotificationsClearNotifications
     *
     * Use this endpoint to \&quot;clear\&quot; your notifications
     *
     * @param  \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM $clear_notifications_vm  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsClearNotifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function userNotificationsClearNotifications($clear_notifications_vm = null, string $contentType = self::contentTypes['userNotificationsClearNotifications'][0])
    {
        $this->userNotificationsClearNotificationsWithHttpInfo($clear_notifications_vm, $contentType);
    }

    /**
     * Operation userNotificationsClearNotificationsWithHttpInfo
     *
     * Use this endpoint to \&quot;clear\&quot; your notifications
     *
     * @param  \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM $clear_notifications_vm  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsClearNotifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function userNotificationsClearNotificationsWithHttpInfo($clear_notifications_vm = null, string $contentType = self::contentTypes['userNotificationsClearNotifications'][0])
    {
        $request = $this->userNotificationsClearNotificationsRequest($clear_notifications_vm, $contentType);

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
     * Operation userNotificationsClearNotificationsAsync
     *
     * Use this endpoint to \&quot;clear\&quot; your notifications
     *
     * @param  \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM $clear_notifications_vm  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsClearNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userNotificationsClearNotificationsAsync($clear_notifications_vm = null, string $contentType = self::contentTypes['userNotificationsClearNotifications'][0])
    {
        return $this->userNotificationsClearNotificationsAsyncWithHttpInfo($clear_notifications_vm, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userNotificationsClearNotificationsAsyncWithHttpInfo
     *
     * Use this endpoint to \&quot;clear\&quot; your notifications
     *
     * @param  \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM $clear_notifications_vm  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsClearNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userNotificationsClearNotificationsAsyncWithHttpInfo($clear_notifications_vm = null, string $contentType = self::contentTypes['userNotificationsClearNotifications'][0])
    {
        $returnType = '';
        $request = $this->userNotificationsClearNotificationsRequest($clear_notifications_vm, $contentType);

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
     * Create request for operation 'userNotificationsClearNotifications'
     *
     * @param  \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM $clear_notifications_vm  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsClearNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userNotificationsClearNotificationsRequest($clear_notifications_vm = null, string $contentType = self::contentTypes['userNotificationsClearNotifications'][0])
    {



        $resourcePath = '/api/manage/v1/notifications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($clear_notifications_vm)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($clear_notifications_vm));
            } else {
                $httpBody = $clear_notifications_vm;
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation userNotificationsGetNotifications
     *
     * Use this endpoint to recieve notifications
     *
     * @param  int $skip skip (optional, default to 0)
     * @param  int $take take (optional, default to 5)
     * @param  string $subscription_id subscription_id (optional, default to '')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsGetNotifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\cloud\fastreport\model\AuditActionsVM
     */
    public function userNotificationsGetNotifications($skip = 0, $take = 5, $subscription_id = '', string $contentType = self::contentTypes['userNotificationsGetNotifications'][0])
    {
        list($response) = $this->userNotificationsGetNotificationsWithHttpInfo($skip, $take, $subscription_id, $contentType);
        return $response;
    }

    /**
     * Operation userNotificationsGetNotificationsWithHttpInfo
     *
     * Use this endpoint to recieve notifications
     *
     * @param  int $skip (optional, default to 0)
     * @param  int $take (optional, default to 5)
     * @param  string $subscription_id (optional, default to '')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsGetNotifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\cloud\fastreport\model\AuditActionsVM, HTTP status code, HTTP response headers (array of strings)
     */
    public function userNotificationsGetNotificationsWithHttpInfo($skip = 0, $take = 5, $subscription_id = '', string $contentType = self::contentTypes['userNotificationsGetNotifications'][0])
    {
        $request = $this->userNotificationsGetNotificationsRequest($skip, $take, $subscription_id, $contentType);

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
                    if ('\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM';
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
                        '\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation userNotificationsGetNotificationsAsync
     *
     * Use this endpoint to recieve notifications
     *
     * @param  int $skip (optional, default to 0)
     * @param  int $take (optional, default to 5)
     * @param  string $subscription_id (optional, default to '')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsGetNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userNotificationsGetNotificationsAsync($skip = 0, $take = 5, $subscription_id = '', string $contentType = self::contentTypes['userNotificationsGetNotifications'][0])
    {
        return $this->userNotificationsGetNotificationsAsyncWithHttpInfo($skip, $take, $subscription_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userNotificationsGetNotificationsAsyncWithHttpInfo
     *
     * Use this endpoint to recieve notifications
     *
     * @param  int $skip (optional, default to 0)
     * @param  int $take (optional, default to 5)
     * @param  string $subscription_id (optional, default to '')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsGetNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userNotificationsGetNotificationsAsyncWithHttpInfo($skip = 0, $take = 5, $subscription_id = '', string $contentType = self::contentTypes['userNotificationsGetNotifications'][0])
    {
        $returnType = '\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM';
        $request = $this->userNotificationsGetNotificationsRequest($skip, $take, $subscription_id, $contentType);

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
     * Create request for operation 'userNotificationsGetNotifications'
     *
     * @param  int $skip (optional, default to 0)
     * @param  int $take (optional, default to 5)
     * @param  string $subscription_id (optional, default to '')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userNotificationsGetNotifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userNotificationsGetNotificationsRequest($skip = 0, $take = 5, $subscription_id = '', string $contentType = self::contentTypes['userNotificationsGetNotifications'][0])
    {



        if ($subscription_id !== null && !preg_match("/(^$)|(^[A-Fa-f0-9]{24}$)/", $subscription_id)) {
            throw new \InvalidArgumentException("invalid value for \"subscription_id\" when calling UserNotificationsApi.userNotificationsGetNotifications, must conform to the pattern /(^$)|(^[A-Fa-f0-9]{24}$)/.");
        }
        

        $resourcePath = '/api/manage/v1/notifications';
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $subscription_id,
            'subscriptionId', // param base name
            'string', // openApiType
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
