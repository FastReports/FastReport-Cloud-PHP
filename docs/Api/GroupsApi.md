# OpenAPI\Client\GroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**groupsCreateGroup()**](GroupsApi.md#groupsCreateGroup) | **POST** /api/manage/v1/Groups | Create a new user group |
| [**groupsDeleteGroup()**](GroupsApi.md#groupsDeleteGroup) | **DELETE** /api/manage/v1/Groups/{id} | Delete group by identifier |
| [**groupsGetGroup()**](GroupsApi.md#groupsGetGroup) | **GET** /api/manage/v1/Groups/{id} | Gets group by identifier |
| [**groupsGetGroupList()**](GroupsApi.md#groupsGetGroupList) | **GET** /api/manage/v1/Groups | Returns a list of current user&#39;s groups&lt;br /&gt;  This method will return following data about groups : &lt;br /&gt;  Id, Name, Created time (UTC), Edited time (UTC), creator id, &lt;br /&gt;  editor id, subscription id |
| [**groupsGetPermissions()**](GroupsApi.md#groupsGetPermissions) | **GET** /api/manage/v1/Groups/{id}/permissions | Gets group permissions by identifier |
| [**groupsRenameGroup()**](GroupsApi.md#groupsRenameGroup) | **PUT** /api/manage/v1/Groups/{id}/rename | Rename group by identifier |
| [**groupsUpdatePermissions()**](GroupsApi.md#groupsUpdatePermissions) | **POST** /api/manage/v1/Groups/{id}/permissions | Update permissions |


## `groupsCreateGroup()`

```php
groupsCreateGroup($create_group_vm): \OpenAPI\Client\cloud\fastreport\model\GroupVM
```

Create a new user group

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_group_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateGroupVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateGroupVM | Model for creating

try {
    $result = $apiInstance->groupsCreateGroup($create_group_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsCreateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_group_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateGroupVM**](../Model/CreateGroupVM.md)| Model for creating | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupVM**](../Model/GroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsDeleteGroup()`

```php
groupsDeleteGroup($id)
```

Delete group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group

try {
    $apiInstance->groupsDeleteGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsDeleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of group | |

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

## `groupsGetGroup()`

```php
groupsGetGroup($id): \OpenAPI\Client\cloud\fastreport\model\GroupVM
```

Gets group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group

try {
    $result = $apiInstance->groupsGetGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGetGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of group | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupVM**](../Model/GroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsGetGroupList()`

```php
groupsGetGroupList($skip, $take): \OpenAPI\Client\cloud\fastreport\model\GroupsVM
```

Returns a list of current user's groups<br />  This method will return following data about groups : <br />  Id, Name, Created time (UTC), Edited time (UTC), creator id, <br />  editor id, subscription id

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | How many groups need to skip
$take = 10; // int | How many groups need to take

try {
    $result = $apiInstance->groupsGetGroupList($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGetGroupList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| How many groups need to skip | [optional] [default to 0] |
| **take** | **int**| How many groups need to take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupsVM**](../Model/GroupsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsGetPermissions()`

```php
groupsGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\GroupPermissionsVM
```

Gets group permissions by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group

try {
    $result = $apiInstance->groupsGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of group | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupPermissionsVM**](../Model/GroupPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsRenameGroup()`

```php
groupsRenameGroup($id, $rename_group_vm): \OpenAPI\Client\cloud\fastreport\model\GroupVM
```

Rename group by identifier

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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of group
$rename_group_vm = new \OpenAPI\Client\cloud\fastreport\model\RenameGroupVM(); // \OpenAPI\Client\cloud\fastreport\model\RenameGroupVM | Model for renaming

try {
    $result = $apiInstance->groupsRenameGroup($id, $rename_group_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsRenameGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of group | |
| **rename_group_vm** | [**\OpenAPI\Client\cloud\fastreport\model\RenameGroupVM**](../Model/RenameGroupVM.md)| Model for renaming | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\GroupVM**](../Model/GroupVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `groupsUpdatePermissions()`

```php
groupsUpdatePermissions($id, $update_group_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_group_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateGroupPermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateGroupPermissionsVM | 

try {
    $apiInstance->groupsUpdatePermissions($id, $update_group_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_group_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateGroupPermissionsVM**](../Model/UpdateGroupPermissionsVM.md)|  | [optional] |

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
