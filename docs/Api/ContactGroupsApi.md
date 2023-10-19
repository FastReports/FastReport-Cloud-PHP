# OpenAPI\Client\ContactGroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactGroupsCreate()**](ContactGroupsApi.md#contactGroupsCreate) | **POST** /api/v1/ContactGroups/group | Creates contact group |
| [**contactGroupsDelete()**](ContactGroupsApi.md#contactGroupsDelete) | **DELETE** /api/v1/ContactGroups/{id} | Removes contact by id |
| [**contactGroupsGet()**](ContactGroupsApi.md#contactGroupsGet) | **GET** /api/v1/ContactGroups/{id} | Returns contact group by id |
| [**contactGroupsGetList()**](ContactGroupsApi.md#contactGroupsGetList) | **GET** /api/v1/ContactGroups/subscription/{subscriptionId}/groups | Returns contact groups by subscriptionId |
| [**contactGroupsUpdate()**](ContactGroupsApi.md#contactGroupsUpdate) | **PUT** /api/v1/ContactGroups/{id} | Updates contact group by id |


## `contactGroupsCreate()`

```php
contactGroupsCreate($create_contact_group_vm): \OpenAPI\Client\cloud\fastreport\model\ContactGroupVM
```

Creates contact group

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


$apiInstance = new OpenAPI\Client\Api\ContactGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact_group_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateContactGroupVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateContactGroupVM | 

try {
    $result = $apiInstance->contactGroupsCreate($create_contact_group_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupsApi->contactGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_group_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateContactGroupVM**](../Model/CreateContactGroupVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactGroupVM**](../Model/ContactGroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactGroupsDelete()`

```php
contactGroupsDelete($id)
```

Removes contact by id

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


$apiInstance = new OpenAPI\Client\Api\ContactGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->contactGroupsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupsApi->contactGroupsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `contactGroupsGet()`

```php
contactGroupsGet($id): \OpenAPI\Client\cloud\fastreport\model\ContactGroupVM
```

Returns contact group by id

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


$apiInstance = new OpenAPI\Client\Api\ContactGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->contactGroupsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupsApi->contactGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactGroupVM**](../Model/ContactGroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactGroupsGetList()`

```php
contactGroupsGetList($subscription_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\ContactGroupsVM
```

Returns contact groups by subscriptionId

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


$apiInstance = new OpenAPI\Client\Api\ContactGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | 
$skip = 0; // int | 
$take = 10; // int | 

try {
    $result = $apiInstance->contactGroupsGetList($subscription_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupsApi->contactGroupsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactGroupsVM**](../Model/ContactGroupsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactGroupsUpdate()`

```php
contactGroupsUpdate($id, $update_contact_group_vm): \OpenAPI\Client\cloud\fastreport\model\ContactGroupVM
```

Updates contact group by id

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


$apiInstance = new OpenAPI\Client\Api\ContactGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_contact_group_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateContactGroupVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateContactGroupVM | 

try {
    $result = $apiInstance->contactGroupsUpdate($id, $update_contact_group_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactGroupsApi->contactGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_contact_group_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateContactGroupVM**](../Model/UpdateContactGroupVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactGroupVM**](../Model/ContactGroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
