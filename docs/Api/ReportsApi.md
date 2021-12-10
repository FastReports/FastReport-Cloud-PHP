# OpenAPI\Client\ReportsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportFolderAndFileGetCount()**](ReportsApi.md#reportFolderAndFileGetCount) | **GET** /api/rp/v1/Reports/Folder/{id}/CountFolderAndFiles | Get count of files and folders what contains in a specified folder
[**reportFolderAndFileGetFoldersAndFiles()**](ReportsApi.md#reportFolderAndFileGetFoldersAndFiles) | **GET** /api/rp/v1/Reports/Folder/{id}/ListFolderAndFiles | Get all folders and files from specified folder
[**reportFoldersCopyFolder()**](ReportsApi.md#reportFoldersCopyFolder) | **POST** /api/rp/v1/Reports/Folder/{id}/Copy/{folderId} | Move folder to a specified folder
[**reportFoldersDeleteFolder()**](ReportsApi.md#reportFoldersDeleteFolder) | **DELETE** /api/rp/v1/Reports/Folder/{id} | Delete specified folder
[**reportFoldersGetBreadcrumbs()**](ReportsApi.md#reportFoldersGetBreadcrumbs) | **GET** /api/rp/v1/Reports/Folder/{id}/Breadcrumbs | Get specified folder breadcrumbs
[**reportFoldersGetFolder()**](ReportsApi.md#reportFoldersGetFolder) | **GET** /api/rp/v1/Reports/Folder/{id} | Get specified folder
[**reportFoldersGetFolders()**](ReportsApi.md#reportFoldersGetFolders) | **GET** /api/rp/v1/Reports/Folder/{id}/ListFolders | Get all folders from specified folder
[**reportFoldersGetFoldersCount()**](ReportsApi.md#reportFoldersGetFoldersCount) | **GET** /api/rp/v1/Reports/Folder/{id}/CountFolders | Get count of folders what contains in a specified folder
[**reportFoldersGetPermissions()**](ReportsApi.md#reportFoldersGetPermissions) | **GET** /api/rp/v1/Reports/Folder/{id}/permissions | Get all folder permissions
[**reportFoldersGetRootFolder()**](ReportsApi.md#reportFoldersGetRootFolder) | **GET** /api/rp/v1/Reports/Root | Get user&#39;s root folder (without parents)
[**reportFoldersMoveFolder()**](ReportsApi.md#reportFoldersMoveFolder) | **POST** /api/rp/v1/Reports/Folder/{id}/Move/{folderId} | Move folder to a specified folder
[**reportFoldersPostFolder()**](ReportsApi.md#reportFoldersPostFolder) | **POST** /api/rp/v1/Reports/Folder/{id}/Folder | Create folder
[**reportFoldersRenameFolder()**](ReportsApi.md#reportFoldersRenameFolder) | **PUT** /api/rp/v1/Reports/Folder/{id}/Rename | Rename a folder
[**reportFoldersUpdateIcon()**](ReportsApi.md#reportFoldersUpdateIcon) | **PUT** /api/rp/v1/Reports/Folder/{id}/Icon | Update a folder&#39;s icon
[**reportFoldersUpdatePermissions()**](ReportsApi.md#reportFoldersUpdatePermissions) | **POST** /api/rp/v1/Reports/{id}/permissions | Update permissions
[**reportFoldersUpdateTags()**](ReportsApi.md#reportFoldersUpdateTags) | **PUT** /api/rp/v1/Reports/Folder/{id}/UpdateTags | Update tags
[**reportsCopyFile()**](ReportsApi.md#reportsCopyFile) | **POST** /api/rp/v1/Reports/File/{id}/Copy/{folderId} | Copy file to a specified folder
[**reportsDeleteFile()**](ReportsApi.md#reportsDeleteFile) | **DELETE** /api/rp/v1/Reports/File/{id} | Delete specified file
[**reportsExport()**](ReportsApi.md#reportsExport) | **POST** /api/rp/v1/Reports/File/{id}/Export | Export specified report to a specified format
[**reportsGetFile()**](ReportsApi.md#reportsGetFile) | **GET** /api/rp/v1/Reports/File/{id} | Get specified file
[**reportsGetFilesCount()**](ReportsApi.md#reportsGetFilesCount) | **GET** /api/rp/v1/Reports/Folder/{id}/CountFiles | Get count of files what contains in a specified folder
[**reportsGetFilesList()**](ReportsApi.md#reportsGetFilesList) | **GET** /api/rp/v1/Reports/Folder/{id}/ListFiles | Get all files from specified folder. &lt;br /&gt;  User with Get Entity permission can access this method. &lt;br /&gt;  The method will returns minimal infomration about the file: &lt;br /&gt;  id, name, size, editedTime, createdTime, tags, status, statusReason.
[**reportsGetPermissions()**](ReportsApi.md#reportsGetPermissions) | **GET** /api/rp/v1/Reports/File/{id}/permissions | Get all file permissions
[**reportsMoveFile()**](ReportsApi.md#reportsMoveFile) | **POST** /api/rp/v1/Reports/File/{id}/Move/{folderId} | Move file to a specified folder
[**reportsRenameFile()**](ReportsApi.md#reportsRenameFile) | **PUT** /api/rp/v1/Reports/File/{id}/Rename | Rename a file
[**reportsUpdateIcon()**](ReportsApi.md#reportsUpdateIcon) | **PUT** /api/rp/v1/Reports/File/{id}/Icon | Update a files&#39;s icon
[**reportsUpdatePermissions()**](ReportsApi.md#reportsUpdatePermissions) | **POST** /api/rp/v1/Reports/File/{id}/permissions | Update permissions
[**reportsUpdateTags()**](ReportsApi.md#reportsUpdateTags) | **PUT** /api/rp/v1/Reports/File/{id}/UpdateTags | Update tags
[**reportsUploadFile()**](ReportsApi.md#reportsUploadFile) | **POST** /api/rp/v1/Reports/Folder/{id}/File | Upload a file to the specified folder  !


## `reportFolderAndFileGetCount()`

```php
reportFolderAndFileGetCount($id, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\CountVM
```

Get count of files and folders what contains in a specified folder

User with a Get Count permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$search_pattern = 'search_pattern_example'; // string | string, that must be incuded in file or folder name to be counted <br />              (leave undefined to count all files and folders)

try {
    $result = $apiInstance->reportFolderAndFileGetCount($id, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFolderAndFileGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |
 **search_pattern** | **string**| string, that must be incuded in file or folder name to be counted &lt;br /&gt;              (leave undefined to count all files and folders) | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\CountVM**](../Model/CountVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFolderAndFileGetFoldersAndFiles()`

```php
reportFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\FilesVM
```

Get all folders and files from specified folder

User with a Get Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of folder and files, that have to be skipped
$take = 10; // int | number of folder and files, that have to be returned
$order_by = new \OpenAPI\Client\cloud\fastreport\model\\OpenAPI\Client\cloud\fastreport\model\FileSorting(); // \OpenAPI\Client\cloud\fastreport\model\FileSorting | indicates a field to sort by
$desc = false; // bool | indicates if sorting is descending
$search_pattern = ''; // string

try {
    $result = $apiInstance->reportFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFolderAndFileGetFoldersAndFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |
 **skip** | **int**| number of folder and files, that have to be skipped | [optional] [default to 0]
 **take** | **int**| number of folder and files, that have to be returned | [optional] [default to 10]
 **order_by** | [**\OpenAPI\Client\cloud\fastreport\model\FileSorting**](../Model/.md)| indicates a field to sort by | [optional]
 **desc** | **bool**| indicates if sorting is descending | [optional] [default to false]
 **search_pattern** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FilesVM**](../Model/FilesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersCopyFolder()`

```php
reportFoldersCopyFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Move folder to a specified folder

User with a Update Place permission for a folder and Create Entity  for a Parent Folder can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->reportFoldersCopyFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersCopyFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| moving folder id |
 **folder_id** | **string**| destination folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersDeleteFolder()`

```php
reportFoldersDeleteFolder($id, $recursive)
```

Delete specified folder

User with a Delete Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$recursive = true; // bool | delete all childs

try {
    $apiInstance->reportFoldersDeleteFolder($id, $recursive);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |
 **recursive** | **bool**| delete all childs | [optional] [default to true]

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

## `reportFoldersGetBreadcrumbs()`

```php
reportFoldersGetBreadcrumbs($id): \OpenAPI\Client\cloud\fastreport\model\BreadcrumbsVM
```

Get specified folder breadcrumbs

User with a Get Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->reportFoldersGetBreadcrumbs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetBreadcrumbs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\BreadcrumbsVM**](../Model/BreadcrumbsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersGetFolder()`

```php
reportFoldersGetFolder($id): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Get specified folder

User with a Get Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->reportFoldersGetFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersGetFolders()`

```php
reportFoldersGetFolders($id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\FilesVM
```

Get all folders from specified folder

User with a Get Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of files, that have to be skipped
$take = 10; // int | number of files, that have to be returned

try {
    $result = $apiInstance->reportFoldersGetFolders($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |
 **skip** | **int**| number of files, that have to be skipped | [optional] [default to 0]
 **take** | **int**| number of files, that have to be returned | [optional] [default to 10]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FilesVM**](../Model/FilesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersGetFoldersCount()`

```php
reportFoldersGetFoldersCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
```

Get count of folders what contains in a specified folder

User with a Get Count permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->reportFoldersGetFoldersCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetFoldersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\CountVM**](../Model/CountVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersGetPermissions()`

```php
reportFoldersGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
```

Get all folder permissions

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->reportFoldersGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM**](../Model/FilePermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersGetRootFolder()`

```php
reportFoldersGetRootFolder($subscription_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Get user's root folder (without parents)

> Breakchange. Now user model doesn't contain a root folders.  This method can return error 400 and 404 when subscription is not found.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->reportFoldersGetRootFolder($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersGetRootFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersMoveFolder()`

```php
reportFoldersMoveFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Move folder to a specified folder

User with a Update Place permission for a folder and Create Entity  for a Parent Folder can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->reportFoldersMoveFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersMoveFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| moving folder id |
 **folder_id** | **string**| destination folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersPostFolder()`

```php
reportFoldersPostFolder($id, $report_folder_create_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Create folder

User with a Create Entity permisison can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of parent folder id
$report_folder_create_vm = new \OpenAPI\Client\cloud\fastreport\model\ReportFolderCreateVM(); // \OpenAPI\Client\cloud\fastreport\model\ReportFolderCreateVM | create VM

try {
    $result = $apiInstance->reportFoldersPostFolder($id, $report_folder_create_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersPostFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of parent folder id |
 **report_folder_create_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ReportFolderCreateVM**](../Model/ReportFolderCreateVM.md)| create VM | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersRenameFolder()`

```php
reportFoldersRenameFolder($id, $folder_rename_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Rename a folder

User with a Update Name permision can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM

try {
    $result = $apiInstance->reportFoldersRenameFolder($id, $folder_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersRenameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **folder_rename_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderRenameVM**](../Model/FolderRenameVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersUpdateIcon()`

```php
reportFoldersUpdateIcon($id, $folder_icon_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Update a folder's icon

User with a Update Icon permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of folder
$folder_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderIconVM | Update icon model

try {
    $result = $apiInstance->reportFoldersUpdateIcon($id, $folder_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersUpdateIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of folder |
 **folder_icon_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderIconVM**](../Model/FolderIconVM.md)| Update icon model | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportFoldersUpdatePermissions()`

```php
reportFoldersUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM

try {
    $apiInstance->reportFoldersUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_file_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM**](../Model/UpdateFilePermissionsVM.md)|  | [optional]

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

## `reportFoldersUpdateTags()`

```php
reportFoldersUpdateTags($id, $folder_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
```

Update tags

User with a Update Tags permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM

try {
    $result = $apiInstance->reportFoldersUpdateTags($id, $folder_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportFoldersUpdateTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **folder_tags_update_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM**](../Model/FolderTagsUpdateVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsCopyFile()`

```php
reportsCopyFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Copy file to a specified folder

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->reportsCopyFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsCopyFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |
 **folder_id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsDeleteFile()`

```php
reportsDeleteFile($id)
```

Delete specified file

User with Delete permission can access the method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $apiInstance->reportsDeleteFile($id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsDeleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |

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

## `reportsExport()`

```php
reportsExport($id, $export_report_vm): \OpenAPI\Client\cloud\fastreport\model\ExportVM
```

Export specified report to a specified format

User with Execute Export permission on prepared report and  Create Entity on an export folder can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | report id
$export_report_vm = new \OpenAPI\Client\cloud\fastreport\model\ExportReportVM(); // \OpenAPI\Client\cloud\fastreport\model\ExportReportVM | export parameters

try {
    $result = $apiInstance->reportsExport($id, $export_report_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| report id |
 **export_report_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ExportReportVM**](../Model/ExportReportVM.md)| export parameters | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGetFile()`

```php
reportsGetFile($id): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Get specified file

User with Get Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $result = $apiInstance->reportsGetFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGetFilesCount()`

```php
reportsGetFilesCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
```

Get count of files what contains in a specified folder

User with Get Count permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->reportsGetFilesCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetFilesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\CountVM**](../Model/CountVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGetFilesList()`

```php
reportsGetFilesList($id, $skip, $take, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\ReportsVM
```

Get all files from specified folder. <br />  User with Get Entity permission can access this method. <br />  The method will returns minimal infomration about the file: <br />  id, name, size, editedTime, createdTime, tags, status, statusReason.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of files, that have to be skipped
$take = 10; // int | number of files, that have to be returned
$search_pattern = 'search_pattern_example'; // string

try {
    $result = $apiInstance->reportsGetFilesList($id, $skip, $take, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetFilesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| folder id |
 **skip** | **int**| number of files, that have to be skipped | [optional] [default to 0]
 **take** | **int**| number of files, that have to be returned | [optional] [default to 10]
 **search_pattern** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportsVM**](../Model/ReportsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsGetPermissions()`

```php
reportsGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
```

Get all file permissions

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->reportsGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM**](../Model/FilePermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsMoveFile()`

```php
reportsMoveFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Move file to a specified folder

User with Update Place permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->reportsMoveFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsMoveFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |
 **folder_id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsRenameFile()`

```php
reportsRenameFile($id, $file_rename_vm): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Rename a file

User with Update Name permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FileRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FileRenameVM

try {
    $result = $apiInstance->reportsRenameFile($id, $file_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsRenameFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_rename_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileRenameVM**](../Model/FileRenameVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsUpdateIcon()`

```php
reportsUpdateIcon($id, $file_icon_vm): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Update a files's icon

User with Update Icon permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FileIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FileIconVM

try {
    $result = $apiInstance->reportsUpdateIcon($id, $file_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUpdateIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_icon_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileIconVM**](../Model/FileIconVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsUpdatePermissions()`

```php
reportsUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM

try {
    $apiInstance->reportsUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **update_file_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM**](../Model/UpdateFilePermissionsVM.md)|  | [optional]

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

## `reportsUpdateTags()`

```php
reportsUpdateTags($id, $file_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Update tags

User with Update Tags permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM

try {
    $result = $apiInstance->reportsUpdateTags($id, $file_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUpdateTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_tags_update_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM**](../Model/FileTagsUpdateVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsUploadFile()`

```php
reportsUploadFile($id, $report_create_vm): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Upload a file to the specified folder  !

User with Create Entity permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of folder
$report_create_vm = new \OpenAPI\Client\cloud\fastreport\model\ReportCreateVM(); // \OpenAPI\Client\cloud\fastreport\model\ReportCreateVM | file's view model

try {
    $result = $apiInstance->reportsUploadFile($id, $report_create_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of folder |
 **report_create_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ReportCreateVM**](../Model/ReportCreateVM.md)| file&#39;s view model | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ReportVM**](../Model/ReportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
