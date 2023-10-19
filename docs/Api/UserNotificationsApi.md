# OpenAPI\Client\UserNotificationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userNotificationsClearNotifications()**](UserNotificationsApi.md#userNotificationsClearNotifications) | **DELETE** /api/manage/v1/notifications | Use this endpoint to \&quot;clear\&quot; your notifications |
| [**userNotificationsGetNotifications()**](UserNotificationsApi.md#userNotificationsGetNotifications) | **GET** /api/manage/v1/notifications | Use this endpoint to recieve notifications |


## `userNotificationsClearNotifications()`

```php
userNotificationsClearNotifications($clear_notifications_vm)
```

Use this endpoint to \"clear\" your notifications

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


$apiInstance = new OpenAPI\Client\Api\UserNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clear_notifications_vm = new \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM(); // \OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM | 

try {
    $apiInstance->userNotificationsClearNotifications($clear_notifications_vm);
} catch (Exception $e) {
    echo 'Exception when calling UserNotificationsApi->userNotificationsClearNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clear_notifications_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ClearNotificationsVM**](../Model/ClearNotificationsVM.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userNotificationsGetNotifications()`

```php
userNotificationsGetNotifications($skip, $take, $subscription_id): \OpenAPI\Client\cloud\fastreport\model\AuditActionsVM
```

Use this endpoint to recieve notifications

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


$apiInstance = new OpenAPI\Client\Api\UserNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int
$take = 5; // int
$subscription_id = ''; // string

try {
    $result = $apiInstance->userNotificationsGetNotifications($skip, $take, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserNotificationsApi->userNotificationsGetNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 5] |
| **subscription_id** | **string**|  | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM**](../Model/AuditActionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
