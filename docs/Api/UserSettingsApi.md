# OpenAPI\Client\UserSettingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userSettingsAcceptAgreements()**](UserSettingsApi.md#userSettingsAcceptAgreements) | **POST** /api/manage/v1/UserSettings/accept | Use this endpoint to accept current version of service license agreement |
| [**userSettingsGetCurrentUserSettings()**](UserSettingsApi.md#userSettingsGetCurrentUserSettings) | **GET** /api/manage/v1/UserSettings | Return current user settings. |
| [**userSettingsUpdateMySettings()**](UserSettingsApi.md#userSettingsUpdateMySettings) | **PUT** /api/manage/v1/UserSettings | Update settings of the current user |


## `userSettingsAcceptAgreements()`

```php
userSettingsAcceptAgreements($accept_agreements_vm)
```

Use this endpoint to accept current version of service license agreement

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


$apiInstance = new OpenAPI\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_agreements_vm = new \OpenAPI\Client\cloud\fastreport\model\AcceptAgreementsVM(); // \OpenAPI\Client\cloud\fastreport\model\AcceptAgreementsVM | 

try {
    $apiInstance->userSettingsAcceptAgreements($accept_agreements_vm);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->userSettingsAcceptAgreements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept_agreements_vm** | [**\OpenAPI\Client\cloud\fastreport\model\AcceptAgreementsVM**](../Model/AcceptAgreementsVM.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSettingsGetCurrentUserSettings()`

```php
userSettingsGetCurrentUserSettings(): \OpenAPI\Client\cloud\fastreport\model\UserSettingsVM
```

Return current user settings.

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


$apiInstance = new OpenAPI\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userSettingsGetCurrentUserSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->userSettingsGetCurrentUserSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserSettingsVM**](../Model/UserSettingsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userSettingsUpdateMySettings()`

```php
userSettingsUpdateMySettings($update_user_settings_vm): \OpenAPI\Client\cloud\fastreport\model\UserSettingsVM
```

Update settings of the current user

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


$apiInstance = new OpenAPI\Client\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_user_settings_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateUserSettingsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateUserSettingsVM | 

try {
    $result = $apiInstance->userSettingsUpdateMySettings($update_user_settings_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->userSettingsUpdateMySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_user_settings_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateUserSettingsVM**](../Model/UpdateUserSettingsVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserSettingsVM**](../Model/UserSettingsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
