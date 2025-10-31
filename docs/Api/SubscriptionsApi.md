# OpenAPI\Client\SubscriptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriptionsGetDefaultPermissions()**](SubscriptionsApi.md#subscriptionsGetDefaultPermissions) | **GET** /api/manage/v1/Subscriptions/{subscriptionId}/defaultPermissions | Get subscription&#39;s default permissions for new entities |
| [**subscriptionsGetMyPermissions()**](SubscriptionsApi.md#subscriptionsGetMyPermissions) | **GET** /api/manage/v1/Subscriptions/{subId}/mypermissions | Get user&#39;s permissions for a subscription by id |
| [**subscriptionsGetPermissions()**](SubscriptionsApi.md#subscriptionsGetPermissions) | **GET** /api/manage/v1/Subscriptions/{id}/permissions | Get permissions for a subscription by id |
| [**subscriptionsGetSubscription()**](SubscriptionsApi.md#subscriptionsGetSubscription) | **GET** /api/manage/v1/Subscriptions/{id} | Returns the subscription by id |
| [**subscriptionsGetSubscriptions()**](SubscriptionsApi.md#subscriptionsGetSubscriptions) | **GET** /api/manage/v1/Subscriptions | Returns a list of all subscriptions of current user |
| [**subscriptionsRenameSubscription()**](SubscriptionsApi.md#subscriptionsRenameSubscription) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/rename | Rename subscription |
| [**subscriptionsUpdateDefaultPermissions()**](SubscriptionsApi.md#subscriptionsUpdateDefaultPermissions) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/defaultPermissions | Change subscription&#39;s default permissions for new entities |
| [**subscriptionsUpdateLocale()**](SubscriptionsApi.md#subscriptionsUpdateLocale) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/Locale | Update subscription&#39;s default locale |
| [**subscriptionsUpdatePermissions()**](SubscriptionsApi.md#subscriptionsUpdatePermissions) | **POST** /api/manage/v1/Subscriptions/{id}/permissions | Update permissions |
| [**subscriptionsUpdatePreviewType()**](SubscriptionsApi.md#subscriptionsUpdatePreviewType) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/PreviewType | Update subscription&#39;s preview type |
| [**subscriptionsUpdateSubscriptionDomains()**](SubscriptionsApi.md#subscriptionsUpdateSubscriptionDomains) | **PUT** /api/manage/v1/Subscriptions/{subscriptionId}/Domains | Update subscription&#39;s allowed domains |


## `subscriptionsGetDefaultPermissions()`

```php
subscriptionsGetDefaultPermissions($subscription_id): \OpenAPI\Client\cloud\fastreport\model\DefaultPermissionsVM
```

Get subscription's default permissions for new entities

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id

try {
    $result = $apiInstance->subscriptionsGetDefaultPermissions($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetDefaultPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DefaultPermissionsVM**](../Model/DefaultPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsGetMyPermissions()`

```php
subscriptionsGetMyPermissions($sub_id): \OpenAPI\Client\cloud\fastreport\model\MyPermissionsVM
```

Get user's permissions for a subscription by id

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_id = 'sub_id_example'; // string | subscription id

try {
    $result = $apiInstance->subscriptionsGetMyPermissions($sub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetMyPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sub_id** | **string**| subscription id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\MyPermissionsVM**](../Model/MyPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsGetPermissions()`

```php
subscriptionsGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\SubscriptionPermissionsVM
```

Get permissions for a subscription by id

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->subscriptionsGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionPermissionsVM**](../Model/SubscriptionPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsGetSubscription()`

```php
subscriptionsGetSubscription($id): \OpenAPI\Client\cloud\fastreport\model\SubscriptionVM
```

Returns the subscription by id

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of subscription

try {
    $result = $apiInstance->subscriptionsGetSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of subscription | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionVM**](../Model/SubscriptionVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsGetSubscriptions()`

```php
subscriptionsGetSubscriptions($skip, $take): \OpenAPI\Client\cloud\fastreport\model\SubscriptionsVM
```

Returns a list of all subscriptions of current user

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | Variable for pagination, defautl value is 0
$take = 10; // int | Variable for pagination, default value is 10

try {
    $result = $apiInstance->subscriptionsGetSubscriptions($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Variable for pagination, defautl value is 0 | [optional] [default to 0] |
| **take** | **int**| Variable for pagination, default value is 10 | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionsVM**](../Model/SubscriptionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsRenameSubscription()`

```php
subscriptionsRenameSubscription($subscription_id, $rename_subscription_vm): \OpenAPI\Client\cloud\fastreport\model\SubscriptionVM
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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$rename_subscription_vm = new \OpenAPI\Client\cloud\fastreport\model\RenameSubscriptionVM(); // \OpenAPI\Client\cloud\fastreport\model\RenameSubscriptionVM | rename VM

try {
    $result = $apiInstance->subscriptionsRenameSubscription($subscription_id, $rename_subscription_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsRenameSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **rename_subscription_vm** | [**\OpenAPI\Client\cloud\fastreport\model\RenameSubscriptionVM**](../Model/RenameSubscriptionVM.md)| rename VM | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionVM**](../Model/SubscriptionVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsUpdateDefaultPermissions()`

```php
subscriptionsUpdateDefaultPermissions($subscription_id, $update_default_permissions_vm): \OpenAPI\Client\cloud\fastreport\model\DefaultPermissionsVM
```

Change subscription's default permissions for new entities

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$update_default_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateDefaultPermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateDefaultPermissionsVM | update default permissions VM

try {
    $result = $apiInstance->subscriptionsUpdateDefaultPermissions($subscription_id, $update_default_permissions_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateDefaultPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **update_default_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateDefaultPermissionsVM**](../Model/UpdateDefaultPermissionsVM.md)| update default permissions VM | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DefaultPermissionsVM**](../Model/DefaultPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsUpdateLocale()`

```php
subscriptionsUpdateLocale($subscription_id, $update_subscription_locale_vm): \OpenAPI\Client\cloud\fastreport\model\SubscriptionVM
```

Update subscription's default locale

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$update_subscription_locale_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionLocaleVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionLocaleVM | update VM

try {
    $result = $apiInstance->subscriptionsUpdateLocale($subscription_id, $update_subscription_locale_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateLocale: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **update_subscription_locale_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionLocaleVM**](../Model/UpdateSubscriptionLocaleVM.md)| update VM | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionVM**](../Model/SubscriptionVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsUpdatePermissions()`

```php
subscriptionsUpdatePermissions($id, $update_subscription_permissions_vm)
```

Update permissions

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_subscription_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPermissionsVM | 

try {
    $apiInstance->subscriptionsUpdatePermissions($id, $update_subscription_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_subscription_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPermissionsVM**](../Model/UpdateSubscriptionPermissionsVM.md)|  | [optional] |

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

## `subscriptionsUpdatePreviewType()`

```php
subscriptionsUpdatePreviewType($subscription_id, $update_subscription_preview_type_vm): \OpenAPI\Client\cloud\fastreport\model\SubscriptionVM
```

Update subscription's preview type

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$update_subscription_preview_type_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPreviewTypeVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPreviewTypeVM | update VM

try {
    $result = $apiInstance->subscriptionsUpdatePreviewType($subscription_id, $update_subscription_preview_type_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdatePreviewType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **update_subscription_preview_type_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionPreviewTypeVM**](../Model/UpdateSubscriptionPreviewTypeVM.md)| update VM | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionVM**](../Model/SubscriptionVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionsUpdateSubscriptionDomains()`

```php
subscriptionsUpdateSubscriptionDomains($subscription_id, $update_subscription_domains_vm): \OpenAPI\Client\cloud\fastreport\model\SubscriptionVM
```

Update subscription's allowed domains

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id
$update_subscription_domains_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionDomainsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionDomainsVM | update VM

try {
    $result = $apiInstance->subscriptionsUpdateSubscriptionDomains($subscription_id, $update_subscription_domains_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateSubscriptionDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id | |
| **update_subscription_domains_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateSubscriptionDomainsVM**](../Model/UpdateSubscriptionDomainsVM.md)| update VM | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionVM**](../Model/SubscriptionVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
