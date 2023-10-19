# OpenAPI\Client\SubscriptionUsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriptionUsersAddUser()**](SubscriptionUsersApi.md#subscriptionUsersAddUser) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/users/{userId} | Add a user to the subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription. |
| [**subscriptionUsersCountUsersAsync()**](SubscriptionUsersApi.md#subscriptionUsersCountUsersAsync) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/UsersCount | Returns a number of users in subscription |
| [**subscriptionUsersGetUsers()**](SubscriptionUsersApi.md#subscriptionUsersGetUsers) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/users | Returns all users of subscription |
| [**subscriptionUsersLeaveSubscripiton()**](SubscriptionUsersApi.md#subscriptionUsersLeaveSubscripiton) | **DELETE** /api/manage/v1/Subscriptions/{subscriptionId}/leave | Allows user to leave subscription,. |
| [**subscriptionUsersRemoveUser()**](SubscriptionUsersApi.md#subscriptionUsersRemoveUser) | **DELETE** /api/manage/v1/Subscriptions/{subscriptionId}/users/{userId} | Delete a user from the subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription. |


## `subscriptionUsersAddUser()`

```php
subscriptionUsersAddUser($subscription_id, $user_id)
```

Add a user to the subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription
$user_id = 'user_id_example'; // string | Idenitifier of user

try {
    $apiInstance->subscriptionUsersAddUser($subscription_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionUsersApi->subscriptionUsersAddUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |
| **user_id** | **string**| Idenitifier of user | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionUsersCountUsersAsync()`

```php
subscriptionUsersCountUsersAsync($subscription_id): int
```

Returns a number of users in subscription

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | 

try {
    $result = $apiInstance->subscriptionUsersCountUsersAsync($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionUsersApi->subscriptionUsersCountUsersAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |

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

## `subscriptionUsersGetUsers()`

```php
subscriptionUsersGetUsers($subscription_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\SubscriptionUsersVM
```

Returns all users of subscription

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription
$skip = 0; // int | How many entities skip
$take = 10; // int | How many entities take

try {
    $result = $apiInstance->subscriptionUsersGetUsers($subscription_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionUsersApi->subscriptionUsersGetUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |
| **skip** | **int**| How many entities skip | [optional] [default to 0] |
| **take** | **int**| How many entities take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionUsersVM**](../Model/SubscriptionUsersVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionUsersLeaveSubscripiton()`

```php
subscriptionUsersLeaveSubscripiton($subscription_id)
```

Allows user to leave subscription,.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription

try {
    $apiInstance->subscriptionUsersLeaveSubscripiton($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionUsersApi->subscriptionUsersLeaveSubscripiton: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionUsersRemoveUser()`

```php
subscriptionUsersRemoveUser($subscription_id, $user_id)
```

Delete a user from the subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription
$user_id = 'user_id_example'; // string | Idenitifier of user

try {
    $apiInstance->subscriptionUsersRemoveUser($subscription_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionUsersApi->subscriptionUsersRemoveUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |
| **user_id** | **string**| Idenitifier of user | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
