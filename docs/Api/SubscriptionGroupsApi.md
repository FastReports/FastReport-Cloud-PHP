# OpenAPI\Client\SubscriptionGroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriptionGroupsCountGroupsAsync()**](SubscriptionGroupsApi.md#subscriptionGroupsCountGroupsAsync) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/count | Returns a number of groups in subscription |
| [**subscriptionGroupsGetGroupsList()**](SubscriptionGroupsApi.md#subscriptionGroupsGetGroupsList) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/groups | returns groups of the subscription or subscription user |


## `subscriptionGroupsCountGroupsAsync()`

```php
subscriptionGroupsCountGroupsAsync($subscription_id): int
```

Returns a number of groups in subscription

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscripiton id

try {
    $result = $apiInstance->subscriptionGroupsCountGroupsAsync($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionGroupsApi->subscriptionGroupsCountGroupsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscripiton id | |

### Return type

**int**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionGroupsGetGroupsList()`

```php
subscriptionGroupsGetGroupsList($subscription_id, $user_id): \OpenAPI\Client\cloud\fastreport\model\GroupsVM
```

returns groups of the subscription or subscription user

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscripiton id
$user_id = 'user_id_example'; // string | user Id (optional)

try {
    $result = $apiInstance->subscriptionGroupsGetGroupsList($subscription_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionGroupsApi->subscriptionGroupsGetGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscripiton id | |
| **user_id** | **string**| user Id (optional) | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupsVM**](../Model/GroupsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
