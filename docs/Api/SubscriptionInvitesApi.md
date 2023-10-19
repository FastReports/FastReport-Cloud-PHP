# OpenAPI\Client\SubscriptionInvitesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriptionInvitesAcceptInvite()**](SubscriptionInvitesApi.md#subscriptionInvitesAcceptInvite) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/invite/{accessToken}/accept | Add a user to the subscription using invite,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription. |
| [**subscriptionInvitesCreateInvite()**](SubscriptionInvitesApi.md#subscriptionInvitesCreateInvite) | **POST** /api/manage/v1/Subscriptions/{subscriptionId}/invite | Create invite to subscription |
| [**subscriptionInvitesDeleteInvite()**](SubscriptionInvitesApi.md#subscriptionInvitesDeleteInvite) | **DELETE** /api/manage/v1/Subscriptions/{subscriptionId}/invite/{accesstoken} | Rename subscription |
| [**subscriptionInvitesGetInvites()**](SubscriptionInvitesApi.md#subscriptionInvitesGetInvites) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/invites | Get list of invites in a subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription. |


## `subscriptionInvitesAcceptInvite()`

```php
subscriptionInvitesAcceptInvite($subscription_id, $access_token)
```

Add a user to the subscription using invite,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription
$access_token = 'access_token_example'; // string | access token of the subscription

try {
    $apiInstance->subscriptionInvitesAcceptInvite($subscription_id, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionInvitesApi->subscriptionInvitesAcceptInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |
| **access_token** | **string**| access token of the subscription | |

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

## `subscriptionInvitesCreateInvite()`

```php
subscriptionInvitesCreateInvite($subscription_id, $create_subscription_invite_vm): \OpenAPI\Client\cloud\fastreport\model\SubscriptionInviteVM
```

Create invite to subscription

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$create_subscription_invite_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateSubscriptionInviteVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateSubscriptionInviteVM | create VM

try {
    $result = $apiInstance->subscriptionInvitesCreateInvite($subscription_id, $create_subscription_invite_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionInvitesApi->subscriptionInvitesCreateInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **create_subscription_invite_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateSubscriptionInviteVM**](../Model/CreateSubscriptionInviteVM.md)| create VM | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionInviteVM**](../Model/SubscriptionInviteVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionInvitesDeleteInvite()`

```php
subscriptionInvitesDeleteInvite($subscription_id, $accesstoken)
```

Rename subscription

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$accesstoken = 'accesstoken_example'; // string | invite's token

try {
    $apiInstance->subscriptionInvitesDeleteInvite($subscription_id, $accesstoken);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionInvitesApi->subscriptionInvitesDeleteInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **accesstoken** | **string**| invite&#39;s token | |

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

## `subscriptionInvitesGetInvites()`

```php
subscriptionInvitesGetInvites($subscription_id): \OpenAPI\Client\cloud\fastreport\model\SubscriptionInvitesVM
```

Get list of invites in a subscription,  the added users will be displayed in the list of users of the subscription,  and these users will also have an active subscription.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionInvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | Idenitifier of subscription

try {
    $result = $apiInstance->subscriptionInvitesGetInvites($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionInvitesApi->subscriptionInvitesGetInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| Idenitifier of subscription | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionInvitesVM**](../Model/SubscriptionInvitesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
