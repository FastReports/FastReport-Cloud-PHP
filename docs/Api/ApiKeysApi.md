# OpenAPI\Client\ApiKeysApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiKeysCreateApiKey()**](ApiKeysApi.md#apiKeysCreateApiKey) | **POST** /api/manage/v1/ApiKeys | Create a new apikey, 5 apikeys for user. Hardcoded for ddos.
[**apiKeysDeleteApiKey()**](ApiKeysApi.md#apiKeysDeleteApiKey) | **DELETE** /api/manage/v1/ApiKeys | Delete an apikey
[**apiKeysGetApiKeys()**](ApiKeysApi.md#apiKeysGetApiKeys) | **GET** /api/manage/v1/ApiKeys | Returns list with all api keys of current user


## `apiKeysCreateApiKey()`

```php
apiKeysCreateApiKey($create_api_key_vm): \OpenAPI\Client\cloud\fastreport\model\ApiKeyVM
```

Create a new apikey, 5 apikeys for user. Hardcoded for ddos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_key_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateApiKeyVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateApiKeyVM

try {
    $result = $apiInstance->apiKeysCreateApiKey($create_api_key_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysCreateApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_api_key_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateApiKeyVM**](../Model/CreateApiKeyVM.md)|  |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ApiKeyVM**](../Model/ApiKeyVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeysDeleteApiKey()`

```php
apiKeysDeleteApiKey($delete_api_key_vm)
```

Delete an apikey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delete_api_key_vm = new \OpenAPI\Client\cloud\fastreport\model\DeleteApiKeyVM(); // \OpenAPI\Client\cloud\fastreport\model\DeleteApiKeyVM

try {
    $apiInstance->apiKeysDeleteApiKey($delete_api_key_vm);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysDeleteApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_api_key_vm** | [**\OpenAPI\Client\cloud\fastreport\model\DeleteApiKeyVM**](../Model/DeleteApiKeyVM.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiKeysGetApiKeys()`

```php
apiKeysGetApiKeys(): \OpenAPI\Client\cloud\fastreport\model\ApiKeysVM
```

Returns list with all api keys of current user

Always work, it should make only 200 response (except if user is not authorized).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: JWT
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiKeysGetApiKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->apiKeysGetApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ApiKeysVM**](../Model/ApiKeysVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
