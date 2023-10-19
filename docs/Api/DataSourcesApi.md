# OpenAPI\Client\DataSourcesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dataSourcesCountDataSourcesAsync()**](DataSourcesApi.md#dataSourcesCountDataSourcesAsync) | **GET** /api/data/v1/DataSources/{subscriptionId}/count | Returns a number of data sources in subscription |
| [**dataSourcesCreateDataSource()**](DataSourcesApi.md#dataSourcesCreateDataSource) | **POST** /api/data/v1/DataSources | Create new data source |
| [**dataSourcesDeleteDataSource()**](DataSourcesApi.md#dataSourcesDeleteDataSource) | **DELETE** /api/data/v1/DataSources/{id} | Delete data source by id |
| [**dataSourcesFetchData()**](DataSourcesApi.md#dataSourcesFetchData) | **GET** /api/data/v1/DataSources/{id}/fetch | This should connect to a database and set data structure |
| [**dataSourcesGetAvailableDataSources()**](DataSourcesApi.md#dataSourcesGetAvailableDataSources) | **GET** /api/data/v1/DataSources | Returns all of the data sources, that current user have permission for in a subscription &lt;br /&gt;  The method will return minimal infomration about the datasources: &lt;br /&gt;  id, name, editedTime, status. |
| [**dataSourcesGetDataSource()**](DataSourcesApi.md#dataSourcesGetDataSource) | **GET** /api/data/v1/DataSources/{id} | Get data source by id |
| [**dataSourcesGetPermissions()**](DataSourcesApi.md#dataSourcesGetPermissions) | **GET** /api/data/v1/DataSources/{id}/permissions | Get all Data source permissions |
| [**dataSourcesRenameDataSource()**](DataSourcesApi.md#dataSourcesRenameDataSource) | **PUT** /api/data/v1/DataSources/{id}/rename | Rename data source by id |
| [**dataSourcesUpdateConnectionString()**](DataSourcesApi.md#dataSourcesUpdateConnectionString) | **PUT** /api/data/v1/DataSources/{id}/ConnectionString | Update data source&#39;s connection string by id |
| [**dataSourcesUpdatePermissions()**](DataSourcesApi.md#dataSourcesUpdatePermissions) | **POST** /api/data/v1/DataSources/{id}/permissions | Update permissions |
| [**dataSourcesUpdateSubscriptionDataSource()**](DataSourcesApi.md#dataSourcesUpdateSubscriptionDataSource) | **PUT** /api/data/v1/DataSources/{id}/updateSubscription | Update data source&#39;s subscription |


## `dataSourcesCountDataSourcesAsync()`

```php
dataSourcesCountDataSourcesAsync($subscription_id): int
```

Returns a number of data sources in subscription

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscripiton id

try {
    $result = $apiInstance->dataSourcesCountDataSourcesAsync($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesCountDataSourcesAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscripiton id | |

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

## `dataSourcesCreateDataSource()`

```php
dataSourcesCreateDataSource($create_data_source_vm): \OpenAPI\Client\cloud\fastreport\model\DataSourceVM
```

Create new data source

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_data_source_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateDataSourceVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateDataSourceVM | create viewmodel

try {
    $result = $apiInstance->dataSourcesCreateDataSource($create_data_source_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesCreateDataSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_data_source_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateDataSourceVM**](../Model/CreateDataSourceVM.md)| create viewmodel | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourceVM**](../Model/DataSourceVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesDeleteDataSource()`

```php
dataSourcesDeleteDataSource($id)
```

Delete data source by id

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id

try {
    $apiInstance->dataSourcesDeleteDataSource($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesDeleteDataSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |

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

## `dataSourcesFetchData()`

```php
dataSourcesFetchData($id)
```

This should connect to a database and set data structure

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | datasource's id

try {
    $apiInstance->dataSourcesFetchData($id);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesFetchData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| datasource&#39;s id | |

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

## `dataSourcesGetAvailableDataSources()`

```php
dataSourcesGetAvailableDataSources($subscription_id, $skip, $take, $order_by, $desc): \OpenAPI\Client\cloud\fastreport\model\DataSourcesVM
```

Returns all of the data sources, that current user have permission for in a subscription <br />  The method will return minimal infomration about the datasources: <br />  id, name, editedTime, status.

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id of subscription where the datasources are located
$skip = 0; // int | how many data sources will be skipped
$take = 10; // int | how many data sources will be taken
$order_by = new \OpenAPI\Client\cloud\fastreport\model\DataSourceSorting(); // DataSourceSorting | field to order by
$desc = false; // bool | descending sort

try {
    $result = $apiInstance->dataSourcesGetAvailableDataSources($subscription_id, $skip, $take, $order_by, $desc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesGetAvailableDataSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id of subscription where the datasources are located | [optional] |
| **skip** | **int**| how many data sources will be skipped | [optional] [default to 0] |
| **take** | **int**| how many data sources will be taken | [optional] [default to 10] |
| **order_by** | [**DataSourceSorting**](../Model/.md)| field to order by | [optional] |
| **desc** | **bool**| descending sort | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourcesVM**](../Model/DataSourcesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesGetDataSource()`

```php
dataSourcesGetDataSource($id): \OpenAPI\Client\cloud\fastreport\model\DataSourceVM
```

Get data source by id

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id

try {
    $result = $apiInstance->dataSourcesGetDataSource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesGetDataSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourceVM**](../Model/DataSourceVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesGetPermissions()`

```php
dataSourcesGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\DataSourcePermissionsVM
```

Get all Data source permissions

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id

try {
    $result = $apiInstance->dataSourcesGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourcePermissionsVM**](../Model/DataSourcePermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesRenameDataSource()`

```php
dataSourcesRenameDataSource($id, $rename_data_source_vm): \OpenAPI\Client\cloud\fastreport\model\DataSourceVM
```

Rename data source by id

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id
$rename_data_source_vm = new \OpenAPI\Client\cloud\fastreport\model\RenameDataSourceVM(); // \OpenAPI\Client\cloud\fastreport\model\RenameDataSourceVM | rename viewmodel

try {
    $result = $apiInstance->dataSourcesRenameDataSource($id, $rename_data_source_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesRenameDataSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |
| **rename_data_source_vm** | [**\OpenAPI\Client\cloud\fastreport\model\RenameDataSourceVM**](../Model/RenameDataSourceVM.md)| rename viewmodel | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourceVM**](../Model/DataSourceVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesUpdateConnectionString()`

```php
dataSourcesUpdateConnectionString($id, $update_data_source_connection_string_vm): \OpenAPI\Client\cloud\fastreport\model\DataSourceVM
```

Update data source's connection string by id

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id
$update_data_source_connection_string_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceConnectionStringVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceConnectionStringVM | update viewmodel

try {
    $result = $apiInstance->dataSourcesUpdateConnectionString($id, $update_data_source_connection_string_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesUpdateConnectionString: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |
| **update_data_source_connection_string_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceConnectionStringVM**](../Model/UpdateDataSourceConnectionStringVM.md)| update viewmodel | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\DataSourceVM**](../Model/DataSourceVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataSourcesUpdatePermissions()`

```php
dataSourcesUpdatePermissions($id, $update_data_source_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_data_source_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourcePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourcePermissionsVM | 

try {
    $apiInstance->dataSourcesUpdatePermissions($id, $update_data_source_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_data_source_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateDataSourcePermissionsVM**](../Model/UpdateDataSourcePermissionsVM.md)|  | [optional] |

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

## `dataSourcesUpdateSubscriptionDataSource()`

```php
dataSourcesUpdateSubscriptionDataSource($id, $update_data_source_subscription_vm)
```

Update data source's subscription

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


$apiInstance = new OpenAPI\Client\Api\DataSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | data source id
$update_data_source_subscription_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceSubscriptionVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceSubscriptionVM | update subscription viewmodel

try {
    $apiInstance->dataSourcesUpdateSubscriptionDataSource($id, $update_data_source_subscription_vm);
} catch (Exception $e) {
    echo 'Exception when calling DataSourcesApi->dataSourcesUpdateSubscriptionDataSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| data source id | |
| **update_data_source_subscription_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateDataSourceSubscriptionVM**](../Model/UpdateDataSourceSubscriptionVM.md)| update subscription viewmodel | [optional] |

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
