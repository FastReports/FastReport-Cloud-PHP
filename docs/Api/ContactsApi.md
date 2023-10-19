# OpenAPI\Client\ContactsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contactsCreate()**](ContactsApi.md#contactsCreate) | **POST** /api/v1/Contacts/contact | Creates new contact |
| [**contactsDelete()**](ContactsApi.md#contactsDelete) | **DELETE** /api/v1/Contacts/{id} | Removes contact by id |
| [**contactsGet()**](ContactsApi.md#contactsGet) | **GET** /api/v1/Contacts/{id} | Returns contact group by id |
| [**contactsGetByGroup()**](ContactsApi.md#contactsGetByGroup) | **GET** /api/v1/Contacts/group/{groupId}/contacts | Returns contacts by group id |
| [**contactsGetList()**](ContactsApi.md#contactsGetList) | **GET** /api/v1/Contacts/subscription/{subscriptionId}/contacts | Allows to search for contacts |
| [**contactsUpdate()**](ContactsApi.md#contactsUpdate) | **PUT** /api/v1/Contacts/{id} | Updates contact by id |


## `contactsCreate()`

```php
contactsCreate($create_contact_vm): \OpenAPI\Client\cloud\fastreport\model\ContactVM
```

Creates new contact

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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateContactVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateContactVM | 

try {
    $result = $apiInstance->contactsCreate($create_contact_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateContactVM**](../Model/CreateContactVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactVM**](../Model/ContactVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsDelete()`

```php
contactsDelete($id)
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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $apiInstance->contactsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDelete: ', $e->getMessage(), PHP_EOL;
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

## `contactsGet()`

```php
contactsGet($id): \OpenAPI\Client\cloud\fastreport\model\ContactVM
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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->contactsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactVM**](../Model/ContactVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsGetByGroup()`

```php
contactsGetByGroup($group_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\ContactsVM
```

Returns contacts by group id

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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | 
$skip = 0; // int | 
$take = 10; // int | 

try {
    $result = $apiInstance->contactsGetByGroup($group_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGetByGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactsVM**](../Model/ContactsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsGetList()`

```php
contactsGetList($subscription_id, $skip, $take, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\ContactsVM
```

Allows to search for contacts

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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | 
$skip = 0; // int | 
$take = 10; // int | 
$search_pattern = 'search_pattern_example'; // string | 

try {
    $result = $apiInstance->contactsGetList($subscription_id, $skip, $take, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |
| **search_pattern** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactsVM**](../Model/ContactsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsUpdate()`

```php
contactsUpdate($id, $update_contact_vm): \OpenAPI\Client\cloud\fastreport\model\ContactVM
```

Updates contact by id

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


$apiInstance = new OpenAPI\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_contact_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateContactVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateContactVM | 

try {
    $result = $apiInstance->contactsUpdate($id, $update_contact_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_contact_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateContactVM**](../Model/UpdateContactVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ContactVM**](../Model/ContactVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
