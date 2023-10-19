# OpenAPI\Client\UserProfileApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userProfileGetMyProfile()**](UserProfileApi.md#userProfileGetMyProfile) | **GET** /api/manage/v1/UserProfile | Return current profile of the current user |
| [**userProfileGetUserProfile()**](UserProfileApi.md#userProfileGetUserProfile) | **GET** /api/manage/v1/UserProfile/{userId} | Return user profile by user identifier.  If the user did not provide information about himself or blocked, then the endpoint will return an empty model. (only id) |
| [**userProfileUpdateMyProfile()**](UserProfileApi.md#userProfileUpdateMyProfile) | **PUT** /api/manage/v1/UserProfile | Update profile of the current user |


## `userProfileGetMyProfile()`

```php
userProfileGetMyProfile(): \OpenAPI\Client\cloud\fastreport\model\UserProfileVM
```

Return current profile of the current user

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


$apiInstance = new OpenAPI\Client\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userProfileGetMyProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileGetMyProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserProfileVM**](../Model/UserProfileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userProfileGetUserProfile()`

```php
userProfileGetUserProfile($user_id): \OpenAPI\Client\cloud\fastreport\model\UserProfileVM
```

Return user profile by user identifier.  If the user did not provide information about himself or blocked, then the endpoint will return an empty model. (only id)

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


$apiInstance = new OpenAPI\Client\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->userProfileGetUserProfile($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileGetUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserProfileVM**](../Model/UserProfileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userProfileUpdateMyProfile()`

```php
userProfileUpdateMyProfile($update_user_profile_vm)
```

Update profile of the current user

This method is only allowed for local sign in via intranet

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


$apiInstance = new OpenAPI\Client\Api\UserProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_user_profile_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateUserProfileVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateUserProfileVM | 

try {
    $apiInstance->userProfileUpdateMyProfile($update_user_profile_vm);
} catch (Exception $e) {
    echo 'Exception when calling UserProfileApi->userProfileUpdateMyProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_user_profile_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateUserProfileVM**](../Model/UpdateUserProfileVM.md)|  | [optional] |

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
