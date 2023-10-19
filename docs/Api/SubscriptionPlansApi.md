# OpenAPI\Client\SubscriptionPlansApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subscriptionPlansGetSubscriptionPlan()**](SubscriptionPlansApi.md#subscriptionPlansGetSubscriptionPlan) | **GET** /api/manage/v1/SubscriptionPlans/{id} | Returns a subscription plan. Not all subscriptions can be issued for customer. |
| [**subscriptionPlansGetSubscriptionPlans()**](SubscriptionPlansApi.md#subscriptionPlansGetSubscriptionPlans) | **GET** /api/manage/v1/SubscriptionPlans | Returns a list of active subscription plans that can be issued to the user. |


## `subscriptionPlansGetSubscriptionPlan()`

```php
subscriptionPlansGetSubscriptionPlan($id): \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM
```

Returns a subscription plan. Not all subscriptions can be issued for customer.

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of subsctiption plan

try {
    $result = $apiInstance->subscriptionPlansGetSubscriptionPlan($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->subscriptionPlansGetSubscriptionPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of subsctiption plan | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlanVM**](../Model/SubscriptionPlanVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionPlansGetSubscriptionPlans()`

```php
subscriptionPlansGetSubscriptionPlans($skip, $take): \OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM
```

Returns a list of active subscription plans that can be issued to the user.

If no active subscription plans, then the endpoint will return empty list

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


$apiInstance = new OpenAPI\Client\Api\SubscriptionPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | Variable for pagination, defautl value is 0
$take = 10; // int | Variable for pagination, default value is 10

try {
    $result = $apiInstance->subscriptionPlansGetSubscriptionPlans($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionPlansApi->subscriptionPlansGetSubscriptionPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Variable for pagination, defautl value is 0 | [optional] [default to 0] |
| **take** | **int**| Variable for pagination, default value is 10 | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\SubscriptionPlansVM**](../Model/SubscriptionPlansVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
