# OpenAPI\Client\GroupUsersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupUsersAddUserToGroup()**](GroupUsersApi.md#groupUsersAddUserToGroup) | **PUT** /api/manage/v1/Groups/{id}/Users/{userId} | Add user to the group by identifier
[**groupUsersGetUsersInGroup()**](GroupUsersApi.md#groupUsersGetUsersInGroup) | **GET** /api/manage/v1/Groups/{id}/Users | Returns users in the group by identifier
[**groupUsersLeaveFromGroup()**](GroupUsersApi.md#groupUsersLeaveFromGroup) | **DELETE** /api/manage/v1/Groups/{id}/leave | Leave from the group
[**groupUsersRemoveFromGroup()**](GroupUsersApi.md#groupUsersRemoveFromGroup) | **DELETE** /api/manage/v1/Groups/{id}/Users/{userId} | Remove user from the group by identifier


## `groupUsersAddUserToGroup()`

```php
groupUsersAddUserToGroup($id, $user_id)
```

Add user to the group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group
$user_id = 'user_id_example'; // string | Identifier of user

try {
    $apiInstance->groupUsersAddUserToGroup($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupUsersApi->groupUsersAddUserToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of group |
 **user_id** | **string**| Identifier of user |

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

## `groupUsersGetUsersInGroup()`

```php
groupUsersGetUsersInGroup($id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\GroupUsersVM
```

Returns users in the group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group
$skip = 0; // int | how many to skip
$take = 10; // int | how many to take

try {
    $result = $apiInstance->groupUsersGetUsersInGroup($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupUsersApi->groupUsersGetUsersInGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of group |
 **skip** | **int**| how many to skip | [optional] [default to 0]
 **take** | **int**| how many to take | [optional] [default to 10]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupUsersVM**](../Model/GroupUsersVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupUsersLeaveFromGroup()`

```php
groupUsersLeaveFromGroup($id)
```

Leave from the group

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


$apiInstance = new OpenAPI\Client\Api\GroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group

try {
    $apiInstance->groupUsersLeaveFromGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupUsersApi->groupUsersLeaveFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of group |

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

## `groupUsersRemoveFromGroup()`

```php
groupUsersRemoveFromGroup($id, $user_id)
```

Remove user from the group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group
$user_id = 'user_id_example'; // string | Identifier of user

try {
    $apiInstance->groupUsersRemoveFromGroup($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupUsersApi->groupUsersRemoveFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of group |
 **user_id** | **string**| Identifier of user |

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
