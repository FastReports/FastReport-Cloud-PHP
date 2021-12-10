# OpenAPI\Client\TasksApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tasksCreateTask()**](TasksApi.md#tasksCreateTask) | **POST** /api/tasks | Create a new task
[**tasksDeleteTask()**](TasksApi.md#tasksDeleteTask) | **DELETE** /api/tasks/{taskId} | Delete a task from a storage
[**tasksGet()**](TasksApi.md#tasksGet) | **GET** /api/tasks/{taskId} | Get a task by a specified id
[**tasksGetList()**](TasksApi.md#tasksGetList) | **GET** /api/tasks | Get tasks list
[**tasksRunTask()**](TasksApi.md#tasksRunTask) | **POST** /api/tasks/run | Run a task from request body
[**tasksRunTaskById()**](TasksApi.md#tasksRunTaskById) | **POST** /api/tasks/{taskId}/run | Run a task by id


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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_task_base_vm** | [**\OpenAPI\Client\cloud\fastreport\model\CreateTaskBaseVM**](../Model/CreateTaskBaseVM.md)| task&#39;s view model. You have to specify task type (type: \&quot;ExportTemplate\&quot;) | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TaskBaseVM**](../Model/TaskBaseVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| deleting task id |

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| a task id |

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
tasksGetList($skip, $take, $subscription_id): \OpenAPI\Client\cloud\fastreport\model\TasksVM
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

try {
    $result = $apiInstance->tasksGetList($skip, $take, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| number of tasks, that have to be skipped | [optional] [default to 0]
 **take** | **int**| number of tasks, that have to be returned | [optional] [default to 10]
 **subscription_id** | **string**| subscription id | [optional]

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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **run_task_base_vm** | [**\OpenAPI\Client\cloud\fastreport\model\RunTaskBaseVM**](../Model/RunTaskBaseVM.md)| task&#39;s view model | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| task id |

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
