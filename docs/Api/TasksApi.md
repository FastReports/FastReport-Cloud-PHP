# OpenAPI\Client\TasksApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tasksCreateTask()**](TasksApi.md#tasksCreateTask) | **POST** /api/tasks/v1/Tasks | Create a new task |
| [**tasksDeleteTask()**](TasksApi.md#tasksDeleteTask) | **DELETE** /api/tasks/v1/Tasks/{taskId} | Delete a task from a storage |
| [**tasksGet()**](TasksApi.md#tasksGet) | **GET** /api/tasks/v1/Tasks/{taskId} | Get a task by a specified id |
| [**tasksGetList()**](TasksApi.md#tasksGetList) | **GET** /api/tasks/v1/Tasks | Get tasks list |
| [**tasksGetPermissions()**](TasksApi.md#tasksGetPermissions) | **GET** /api/tasks/v1/Tasks/{id}/permissions | Get all Task permissions |
| [**tasksRenameTask()**](TasksApi.md#tasksRenameTask) | **PUT** /api/tasks/v1/Tasks/{taskId}/rename | Rename a task |
| [**tasksRunTask()**](TasksApi.md#tasksRunTask) | **POST** /api/tasks/v1/Tasks/run | Run a task from request body |
| [**tasksRunTaskById()**](TasksApi.md#tasksRunTaskById) | **POST** /api/tasks/v1/Tasks/{taskId}/run | Run a task by id |
| [**tasksUpdatePermissions()**](TasksApi.md#tasksUpdatePermissions) | **POST** /api/tasks/v1/Tasks/{id}/permissions | Update permissions |
| [**tasksUpdateTask()**](TasksApi.md#tasksUpdateTask) | **PUT** /api/tasks/v1/Tasks/{taskId} | Update a task |


## `tasksCreateTask()`

```php
tasksCreateTask($create_task_base_vm): \OpenAPI\Client\cloud\fastreport\model\TaskBaseVM
```

Create a new task

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_task_base_vm = new \OpenAPI\Client\cloud\fastreport\model\CreateTaskBaseVM(); // \OpenAPI\Client\cloud\fastreport\model\CreateTaskBaseVM | task's view model. You have to specify task type (type: \"ExportTemplate\")

try {
    $result = $apiInstance->tasksCreateTask($create_task_base_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksCreateTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_task_base_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateTaskBaseVM**](../Model/CreateTaskBaseVM.md)| task&#39;s view model. You have to specify task type (type: \&quot;ExportTemplate\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskBaseVM**](../Model/TaskBaseVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksDeleteTask()`

```php
tasksDeleteTask($task_id)
```

Delete a task from a storage

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | deleting task id

try {
    $apiInstance->tasksDeleteTask($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksDeleteTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| deleting task id | |

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

## `tasksGet()`

```php
tasksGet($task_id): \OpenAPI\Client\cloud\fastreport\model\TaskBaseVM
```

Get a task by a specified id

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | a task id

try {
    $result = $apiInstance->tasksGet($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| a task id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskBaseVM**](../Model/TaskBaseVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksGetList()`

```php
tasksGetList($skip, $take, $subscription_id, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\TasksVM
```

Get tasks list

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | number of tasks, that have to be skipped
$take = 10; // int | number of tasks, that have to be returned
$subscription_id = 'subscription_id_example'; // string | subscription id
$search_pattern = ''; // string | 

try {
    $result = $apiInstance->tasksGetList($skip, $take, $subscription_id, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| number of tasks, that have to be skipped | [optional] [default to 0] |
| **take** | **int**| number of tasks, that have to be returned | [optional] [default to 10] |
| **subscription_id** | **string**| subscription id | [optional] |
| **search_pattern** | **string**|  | [optional] [default to &#39;&#39;] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TasksVM**](../Model/TasksVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksGetPermissions()`

```php
tasksGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\TaskPermissionsVM
```

Get all Task permissions

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | task id

try {
    $result = $apiInstance->tasksGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| task id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskPermissionsVM**](../Model/TaskPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksRenameTask()`

```php
tasksRenameTask($task_id, $new_name): \OpenAPI\Client\cloud\fastreport\model\TaskBaseVM
```

Rename a task

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | renaming task id
$new_name = 'new_name_example'; // string | task's new Name

try {
    $result = $apiInstance->tasksRenameTask($task_id, $new_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksRenameTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| renaming task id | |
| **new_name** | **string**| task&#39;s new Name | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskBaseVM**](../Model/TaskBaseVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksRunTask()`

```php
tasksRunTask($run_task_base_vm)
```

Run a task from request body

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$run_task_base_vm = new \OpenAPI\Client\cloud\fastreport\model\RunTaskBaseVM(); // \OpenAPI\Client\cloud\fastreport\model\RunTaskBaseVM | task's view model

try {
    $apiInstance->tasksRunTask($run_task_base_vm);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksRunTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **run_task_base_vm** | [**\OpenAPI\Client\cloud\fastreport\model\RunTaskBaseVM**](../Model/RunTaskBaseVM.md)| task&#39;s view model | [optional] |

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

## `tasksRunTaskById()`

```php
tasksRunTaskById($task_id)
```

Run a task by id

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | task id

try {
    $apiInstance->tasksRunTaskById($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksRunTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| task id | |

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

## `tasksUpdatePermissions()`

```php
tasksUpdatePermissions($id, $update_task_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | task id
$update_task_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateTaskPermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateTaskPermissionsVM | new permissions

try {
    $apiInstance->tasksUpdatePermissions($id, $update_task_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| task id | |
| **update_task_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateTaskPermissionsVM**](../Model/UpdateTaskPermissionsVM.md)| new permissions | [optional] |

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

## `tasksUpdateTask()`

```php
tasksUpdateTask($task_id, $update_task_base_vm): \OpenAPI\Client\cloud\fastreport\model\TaskBaseVM
```

Update a task

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_id = 'task_id_example'; // string | updating task id
$update_task_base_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateTaskBaseVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateTaskBaseVM | task's view model. You have to specify task type (type: \"ExportTemplate\")

try {
    $result = $apiInstance->tasksUpdateTask($task_id, $update_task_base_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUpdateTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_id** | **string**| updating task id | |
| **update_task_base_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateTaskBaseVM**](../Model/UpdateTaskBaseVM.md)| task&#39;s view model. You have to specify task type (type: \&quot;ExportTemplate\&quot;) | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskBaseVM**](../Model/TaskBaseVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
