# OpenAPI\Client\ExportsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportFolderAndFileClearRecycleBin()**](ExportsApi.md#exportFolderAndFileClearRecycleBin) | **DELETE** /api/rp/v1/Exports/{subscriptionId}/ClearRecycleBin | Delete all folders and files from recycle bin |
| [**exportFolderAndFileDeleteFiles()**](ExportsApi.md#exportFolderAndFileDeleteFiles) | **POST** /api/rp/v1/Exports/{subscriptionId}/DeleteFiles | Delete folders and files |
| [**exportFolderAndFileGetCount()**](ExportsApi.md#exportFolderAndFileGetCount) | **GET** /api/rp/v1/Exports/Folder/{id}/CountFolderAndFiles | Get count of files and folders what contains in a specified folder |
| [**exportFolderAndFileGetFoldersAndFiles()**](ExportsApi.md#exportFolderAndFileGetFoldersAndFiles) | **GET** /api/rp/v1/Exports/Folder/{id}/ListFolderAndFiles | Get all folders and files from specified folder |
| [**exportFolderAndFileGetRecycleBinFoldersAndFiles()**](ExportsApi.md#exportFolderAndFileGetRecycleBinFoldersAndFiles) | **GET** /api/rp/v1/Exports/{subscriptionId}/ListRecycleBinFolderAndFiles | Get all folders and files from recycle bin |
| [**exportFolderAndFileRecoverAllFromRecycleBin()**](ExportsApi.md#exportFolderAndFileRecoverAllFromRecycleBin) | **POST** /api/rp/v1/Exports/{subscriptionId}/RecoverRecycleBin | Recover all folders and files from recycle bin |
| [**exportFoldersCalculateFolderSize()**](ExportsApi.md#exportFoldersCalculateFolderSize) | **GET** /api/rp/v1/Exports/Folder/{id}/size | Get specified folder, calculate it&#39;s size |
| [**exportFoldersCopyFolder()**](ExportsApi.md#exportFoldersCopyFolder) | **POST** /api/rp/v1/Exports/Folder/{id}/Copy/{folderId} | Move folder to a specified folder |
| [**exportFoldersDeleteFolder()**](ExportsApi.md#exportFoldersDeleteFolder) | **DELETE** /api/rp/v1/Exports/Folder/{id} | Delete specified folder |
| [**exportFoldersGetBreadcrumbs()**](ExportsApi.md#exportFoldersGetBreadcrumbs) | **GET** /api/rp/v1/Exports/Folder/{id}/Breadcrumbs | Get specified folder breadcrumbs |
| [**exportFoldersGetFolder()**](ExportsApi.md#exportFoldersGetFolder) | **GET** /api/rp/v1/Exports/Folder/{id} | Get specified folder |
| [**exportFoldersGetFolders()**](ExportsApi.md#exportFoldersGetFolders) | **GET** /api/rp/v1/Exports/Folder/{id}/ListFolders | Get all folders from specified folder |
| [**exportFoldersGetFoldersCount()**](ExportsApi.md#exportFoldersGetFoldersCount) | **GET** /api/rp/v1/Exports/Folder/{id}/CountFolders | Get count of folders what contains in a specified folder |
| [**exportFoldersGetOrCreate()**](ExportsApi.md#exportFoldersGetOrCreate) | **GET** /api/rp/v1/Exports/Folder/getOrCreate | Get specified folder |
| [**exportFoldersGetPermissions()**](ExportsApi.md#exportFoldersGetPermissions) | **GET** /api/rp/v1/Exports/Folder/{id}/permissions | Get all folder permissions |
| [**exportFoldersGetRootFolder()**](ExportsApi.md#exportFoldersGetRootFolder) | **GET** /api/rp/v1/Exports/Root | Get user&#39;s root folder (without parents) |
| [**exportFoldersMoveFolder()**](ExportsApi.md#exportFoldersMoveFolder) | **POST** /api/rp/v1/Exports/Folder/{id}/Move/{folderId} | Move folder to a specified folder |
| [**exportFoldersMoveFolderToBin()**](ExportsApi.md#exportFoldersMoveFolderToBin) | **DELETE** /api/rp/v1/Exports/Folder/{id}/ToBin | Move specified folder to recycle bin |
| [**exportFoldersPostFolder()**](ExportsApi.md#exportFoldersPostFolder) | **POST** /api/rp/v1/Exports/Folder/{id}/Folder | Create folder |
| [**exportFoldersRecoverFolder()**](ExportsApi.md#exportFoldersRecoverFolder) | **POST** /api/rp/v1/Exports/Folder/{id}/Recover | Recover specified folder |
| [**exportFoldersRenameFolder()**](ExportsApi.md#exportFoldersRenameFolder) | **PUT** /api/rp/v1/Exports/Folder/{id}/Rename | Rename a folder |
| [**exportFoldersUpdateIcon()**](ExportsApi.md#exportFoldersUpdateIcon) | **PUT** /api/rp/v1/Exports/Folder/{id}/Icon | Update a folder&#39;s icon |
| [**exportFoldersUpdatePermissions()**](ExportsApi.md#exportFoldersUpdatePermissions) | **POST** /api/rp/v1/Exports/{id}/permissions | Update permissions |
| [**exportFoldersUpdateTags()**](ExportsApi.md#exportFoldersUpdateTags) | **PUT** /api/rp/v1/Exports/Folder/{id}/UpdateTags | Update tags |
| [**exportsCopyFile()**](ExportsApi.md#exportsCopyFile) | **POST** /api/rp/v1/Exports/File/{id}/Copy/{folderId} | Copy file to a specified folder |
| [**exportsDeleteFile()**](ExportsApi.md#exportsDeleteFile) | **DELETE** /api/rp/v1/Exports/File/{id} | Delete specified file |
| [**exportsGetFile()**](ExportsApi.md#exportsGetFile) | **GET** /api/rp/v1/Exports/File/{id} | Get specified file |
| [**exportsGetFileHistory()**](ExportsApi.md#exportsGetFileHistory) | **GET** /api/rp/v1/Exports/File/{id}/History | Returns list of actions, performed on this file |
| [**exportsGetFilesCount()**](ExportsApi.md#exportsGetFilesCount) | **GET** /api/rp/v1/Exports/Folder/{id}/CountFiles | Get count of files what contains in a specified folder |
| [**exportsGetFilesList()**](ExportsApi.md#exportsGetFilesList) | **GET** /api/rp/v1/Exports/Folder/{id}/ListFiles | Get all files from specified folder. &lt;br /&gt;  User with Get Entity permission can access this method. &lt;br /&gt;  The method will returns minimal infomration about the file: &lt;br /&gt;  id, name, size, editedTime, createdTime, tags, status, statusReason. |
| [**exportsGetPermissions()**](ExportsApi.md#exportsGetPermissions) | **GET** /api/rp/v1/Exports/File/{id}/permissions | Get all file permissions |
| [**exportsMoveFile()**](ExportsApi.md#exportsMoveFile) | **POST** /api/rp/v1/Exports/File/{id}/Move/{folderId} | Move file to a specified folder |
| [**exportsMoveFileToBin()**](ExportsApi.md#exportsMoveFileToBin) | **DELETE** /api/rp/v1/Exports/File/{id}/ToBin | Move specified file to recycle bin |
| [**exportsRecoverFile()**](ExportsApi.md#exportsRecoverFile) | **POST** /api/rp/v1/Exports/File/{id}/Recover | Recover specified file from bin |
| [**exportsRenameFile()**](ExportsApi.md#exportsRenameFile) | **PUT** /api/rp/v1/Exports/File/{id}/Rename | Rename a file |
| [**exportsUpdateIcon()**](ExportsApi.md#exportsUpdateIcon) | **PUT** /api/rp/v1/Exports/File/{id}/Icon | Update a files&#39;s icon |
| [**exportsUpdatePermissions()**](ExportsApi.md#exportsUpdatePermissions) | **POST** /api/rp/v1/Exports/File/{id}/permissions | Update permissions |
| [**exportsUpdateTags()**](ExportsApi.md#exportsUpdateTags) | **PUT** /api/rp/v1/Exports/File/{id}/UpdateTags | Update tags |


## `exportFolderAndFileClearRecycleBin()`

```php
exportFolderAndFileClearRecycleBin($subscription_id)
```

Delete all folders and files from recycle bin

User with a Delete RecycleBin permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscription id

try {
    $apiInstance->exportFolderAndFileClearRecycleBin($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileClearRecycleBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscription id | |

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

## `exportFolderAndFileDeleteFiles()`

```php
exportFolderAndFileDeleteFiles($subscription_id, $selected_files_for_deleting_vm)
```

Delete folders and files

User with a Delete permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id of current subscription
$selected_files_for_deleting_vm = new \OpenAPI\Client\cloud\fastreport\model\SelectedFilesForDeletingVM(); // \OpenAPI\Client\cloud\fastreport\model\SelectedFilesForDeletingVM | VM with files' ids and params of their destination

try {
    $apiInstance->exportFolderAndFileDeleteFiles($subscription_id, $selected_files_for_deleting_vm);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileDeleteFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id of current subscription | |
| **selected_files_for_deleting_vm** | [**\OpenAPI\Client\cloud\fastreport\model\SelectedFilesForDeletingVM**](../Model/SelectedFilesForDeletingVM.md)| VM with files&#39; ids and params of their destination | [optional] |

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

## `exportFolderAndFileGetCount()`

```php
exportFolderAndFileGetCount($id, $search_pattern, $use_regex): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$search_pattern = 'search_pattern_example'; // string | string, that must be incuded in file or folder name to be counted <br />              (leave undefined to count all files and folders)
$use_regex = false; // bool | set this to true if you want to use regular expression to search

try {
    $result = $apiInstance->exportFolderAndFileGetCount($id, $search_pattern, $use_regex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |
| **search_pattern** | **string**| string, that must be incuded in file or folder name to be counted &lt;br /&gt;              (leave undefined to count all files and folders) | [optional] |
| **use_regex** | **bool**| set this to true if you want to use regular expression to search | [optional] [default to false] |

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

## `exportFolderAndFileGetFoldersAndFiles()`

```php
exportFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex): \OpenAPI\Client\cloud\fastreport\model\FilesVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of folder and files, that have to be skipped
$take = 10; // int | number of folder and files, that have to be returned
$order_by = new \OpenAPI\Client\cloud\fastreport\model\FileSorting(); // FileSorting | indicates a field to sort by
$desc = false; // bool | indicates if sorting is descending
$search_pattern = ''; // string | 
$use_regex = false; // bool | 

try {
    $result = $apiInstance->exportFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileGetFoldersAndFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |
| **skip** | **int**| number of folder and files, that have to be skipped | [optional] [default to 0] |
| **take** | **int**| number of folder and files, that have to be returned | [optional] [default to 10] |
| **order_by** | [**FileSorting**](../Model/.md)| indicates a field to sort by | [optional] |
| **desc** | **bool**| indicates if sorting is descending | [optional] [default to false] |
| **search_pattern** | **string**|  | [optional] [default to &#39;&#39;] |
| **use_regex** | **bool**|  | [optional] [default to false] |

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

## `exportFolderAndFileGetRecycleBinFoldersAndFiles()`

```php
exportFolderAndFileGetRecycleBinFoldersAndFiles($subscription_id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex): \OpenAPI\Client\cloud\fastreport\model\FilesVM
```

Get all folders and files from recycle bin

User with a Get DeletedFiles permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscription id
$skip = 0; // int | number of folder and files, that have to be skipped
$take = 10; // int | number of folder and files, that have to be returned
$order_by = new \OpenAPI\Client\cloud\fastreport\model\FileSorting(); // FileSorting | indicates a field to sort by
$desc = false; // bool | indicates if sorting is descending
$search_pattern = ''; // string | 
$use_regex = false; // bool | 

try {
    $result = $apiInstance->exportFolderAndFileGetRecycleBinFoldersAndFiles($subscription_id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileGetRecycleBinFoldersAndFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscription id | |
| **skip** | **int**| number of folder and files, that have to be skipped | [optional] [default to 0] |
| **take** | **int**| number of folder and files, that have to be returned | [optional] [default to 10] |
| **order_by** | [**FileSorting**](../Model/.md)| indicates a field to sort by | [optional] |
| **desc** | **bool**| indicates if sorting is descending | [optional] [default to false] |
| **search_pattern** | **string**|  | [optional] [default to &#39;&#39;] |
| **use_regex** | **bool**|  | [optional] [default to false] |

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

## `exportFolderAndFileRecoverAllFromRecycleBin()`

```php
exportFolderAndFileRecoverAllFromRecycleBin($subscription_id)
```

Recover all folders and files from recycle bin

User with a Create RecycleBin permission can access this method.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscription id

try {
    $apiInstance->exportFolderAndFileRecoverAllFromRecycleBin($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFolderAndFileRecoverAllFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscription id | |

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

## `exportFoldersCalculateFolderSize()`

```php
exportFoldersCalculateFolderSize($id): \OpenAPI\Client\cloud\fastreport\model\FolderSizeVM
```

Get specified folder, calculate it's size

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->exportFoldersCalculateFolderSize($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersCalculateFolderSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FolderSizeVM**](../Model/FolderSizeVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportFoldersCopyFolder()`

```php
exportFoldersCopyFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->exportFoldersCopyFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersCopyFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| moving folder id | |
| **folder_id** | **string**| destination folder id | |

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

## `exportFoldersDeleteFolder()`

```php
exportFoldersDeleteFolder($id)
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $apiInstance->exportFoldersDeleteFolder($id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersDeleteFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportFoldersGetBreadcrumbs()`

```php
exportFoldersGetBreadcrumbs($id): \OpenAPI\Client\cloud\fastreport\model\BreadcrumbsVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->exportFoldersGetBreadcrumbs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetBreadcrumbs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportFoldersGetFolder()`

```php
exportFoldersGetFolder($id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->exportFoldersGetFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportFoldersGetFolders()`

```php
exportFoldersGetFolders($id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex): \OpenAPI\Client\cloud\fastreport\model\FilesVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of files, that have to be skipped
$take = 10; // int | number of files, that have to be returned
$order_by = new \OpenAPI\Client\cloud\fastreport\model\FileSorting(); // FileSorting | 
$desc = false; // bool | 
$search_pattern = ''; // string | 
$use_regex = false; // bool | 

try {
    $result = $apiInstance->exportFoldersGetFolders($id, $skip, $take, $order_by, $desc, $search_pattern, $use_regex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |
| **skip** | **int**| number of files, that have to be skipped | [optional] [default to 0] |
| **take** | **int**| number of files, that have to be returned | [optional] [default to 10] |
| **order_by** | [**FileSorting**](../Model/.md)|  | [optional] |
| **desc** | **bool**|  | [optional] [default to false] |
| **search_pattern** | **string**|  | [optional] [default to &#39;&#39;] |
| **use_regex** | **bool**|  | [optional] [default to false] |

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

## `exportFoldersGetFoldersCount()`

```php
exportFoldersGetFoldersCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->exportFoldersGetFoldersCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetFoldersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportFoldersGetOrCreate()`

```php
exportFoldersGetOrCreate($name, $subscription_id, $parent_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | folder name
$subscription_id = 'subscription_id_example'; // string | subscriptionId
$parent_id = 'parent_id_example'; // string | parent folder id

try {
    $result = $apiInstance->exportFoldersGetOrCreate($name, $subscription_id, $parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetOrCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| folder name | [optional] |
| **subscription_id** | **string**| subscriptionId | [optional] |
| **parent_id** | **string**| parent folder id | [optional] |

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

## `exportFoldersGetPermissions()`

```php
exportFoldersGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->exportFoldersGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `exportFoldersGetRootFolder()`

```php
exportFoldersGetRootFolder($subscription_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->exportFoldersGetRootFolder($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersGetRootFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | [optional] |

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

## `exportFoldersMoveFolder()`

```php
exportFoldersMoveFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->exportFoldersMoveFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersMoveFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| moving folder id | |
| **folder_id** | **string**| destination folder id | |

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

## `exportFoldersMoveFolderToBin()`

```php
exportFoldersMoveFolderToBin($id)
```

Move specified folder to recycle bin

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $apiInstance->exportFoldersMoveFolderToBin($id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersMoveFolderToBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportFoldersPostFolder()`

```php
exportFoldersPostFolder($id, $export_folder_create_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of parent folder id
$export_folder_create_vm = new \OpenAPI\Client\cloud\fastreport\model\ExportFolderCreateVM(); // \OpenAPI\Client\cloud\fastreport\model\ExportFolderCreateVM | create VM

try {
    $result = $apiInstance->exportFoldersPostFolder($id, $export_folder_create_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersPostFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of parent folder id | |
| **export_folder_create_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ExportFolderCreateVM**](../Model/ExportFolderCreateVM.md)| create VM | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportFoldersRecoverFolder()`

```php
exportFoldersRecoverFolder($id, $recovery_path)
```

Recover specified folder

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$recovery_path = 'recovery_path_example'; // string | 

try {
    $apiInstance->exportFoldersRecoverFolder($id, $recovery_path);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersRecoverFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |
| **recovery_path** | **string**|  | [optional] |

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

## `exportFoldersRenameFolder()`

```php
exportFoldersRenameFolder($id, $folder_rename_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM

try {
    $result = $apiInstance->exportFoldersRenameFolder($id, $folder_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersRenameFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **folder_rename_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderRenameVM**](../Model/FolderRenameVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportFoldersUpdateIcon()`

```php
exportFoldersUpdateIcon($id, $folder_icon_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of folder
$folder_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderIconVM | Update icon model

try {
    $result = $apiInstance->exportFoldersUpdateIcon($id, $folder_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersUpdateIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of folder | |
| **folder_icon_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderIconVM**](../Model/FolderIconVM.md)| Update icon model | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportFoldersUpdatePermissions()`

```php
exportFoldersUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM | 

try {
    $apiInstance->exportFoldersUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_file_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM**](../Model/UpdateFilePermissionsVM.md)|  | [optional] |

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

## `exportFoldersUpdateTags()`

```php
exportFoldersUpdateTags($id, $folder_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM

try {
    $result = $apiInstance->exportFoldersUpdateTags($id, $folder_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportFoldersUpdateTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **folder_tags_update_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM**](../Model/FolderTagsUpdateVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FileVM**](../Model/FileVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsCopyFile()`

```php
exportsCopyFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->exportsCopyFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsCopyFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |
| **folder_id** | **string**| folder id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsDeleteFile()`

```php
exportsDeleteFile($id)
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $apiInstance->exportsDeleteFile($id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsDeleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |

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

## `exportsGetFile()`

```php
exportsGetFile($id): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $result = $apiInstance->exportsGetFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsGetFileHistory()`

```php
exportsGetFileHistory($id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\AuditActionsVM
```

Returns list of actions, performed on this file

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$skip = 0; // int | 
$take = 10; // int | 

try {
    $result = $apiInstance->exportsGetFileHistory($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetFileHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\AuditActionsVM**](../Model/AuditActionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsGetFilesCount()`

```php
exportsGetFilesCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->exportsGetFilesCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetFilesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |

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

## `exportsGetFilesList()`

```php
exportsGetFilesList($id, $skip, $take, $search_pattern, $order_by, $desc, $use_regex): \OpenAPI\Client\cloud\fastreport\model\ExportsVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of files, that have to be skipped
$take = 10; // int | number of files, that have to be returned
$search_pattern = 'search_pattern_example'; // string | 
$order_by = new \OpenAPI\Client\cloud\fastreport\model\FileSorting(); // FileSorting | 
$desc = false; // bool | 
$use_regex = false; // bool | 

try {
    $result = $apiInstance->exportsGetFilesList($id, $skip, $take, $search_pattern, $order_by, $desc, $use_regex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetFilesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| folder id | |
| **skip** | **int**| number of files, that have to be skipped | [optional] [default to 0] |
| **take** | **int**| number of files, that have to be returned | [optional] [default to 10] |
| **search_pattern** | **string**|  | [optional] |
| **order_by** | [**FileSorting**](../Model/.md)|  | [optional] |
| **desc** | **bool**|  | [optional] [default to false] |
| **use_regex** | **bool**|  | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportsVM**](../Model/ExportsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsGetPermissions()`

```php
exportsGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->exportsGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `exportsMoveFile()`

```php
exportsMoveFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->exportsMoveFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsMoveFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |
| **folder_id** | **string**| folder id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsMoveFileToBin()`

```php
exportsMoveFileToBin($id)
```

Move specified file to recycle bin

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $apiInstance->exportsMoveFileToBin($id);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsMoveFileToBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |

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

## `exportsRecoverFile()`

```php
exportsRecoverFile($id, $recovery_path)
```

Recover specified file from bin

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$recovery_path = 'recovery_path_example'; // string | 

try {
    $apiInstance->exportsRecoverFile($id, $recovery_path);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsRecoverFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| file id | |
| **recovery_path** | **string**|  | [optional] |

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

## `exportsRenameFile()`

```php
exportsRenameFile($id, $file_rename_vm): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FileRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FileRenameVM

try {
    $result = $apiInstance->exportsRenameFile($id, $file_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsRenameFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **file_rename_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileRenameVM**](../Model/FileRenameVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsUpdateIcon()`

```php
exportsUpdateIcon($id, $file_icon_vm): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FileIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FileIconVM

try {
    $result = $apiInstance->exportsUpdateIcon($id, $file_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsUpdateIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **file_icon_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileIconVM**](../Model/FileIconVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportsUpdatePermissions()`

```php
exportsUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM | 

try {
    $apiInstance->exportsUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_file_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM**](../Model/UpdateFilePermissionsVM.md)|  | [optional] |

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

## `exportsUpdateTags()`

```php
exportsUpdateTags($id, $file_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\ExportVM
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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM

try {
    $result = $apiInstance->exportsUpdateTags($id, $file_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->exportsUpdateTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **file_tags_update_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM**](../Model/FileTagsUpdateVM.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\ExportVM**](../Model/ExportVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
