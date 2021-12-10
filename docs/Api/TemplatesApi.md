# OpenAPI\Client\TemplatesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**templateFolderAndFileGetCount()**](TemplatesApi.md#templateFolderAndFileGetCount) | **GET** /api/rp/v1/Templates/Folder/{id}/CountFolderAndFiles | Get count of files and folders what contains in a specified folder
[**templateFolderAndFileGetFoldersAndFiles()**](TemplatesApi.md#templateFolderAndFileGetFoldersAndFiles) | **GET** /api/rp/v1/Templates/Folder/{id}/ListFolderAndFiles | Get all folders and files from specified folder
[**templateFoldersCopyFolder()**](TemplatesApi.md#templateFoldersCopyFolder) | **POST** /api/rp/v1/Templates/Folder/{id}/Copy/{folderId} | Move folder to a specified folder
[**templateFoldersDeleteFolder()**](TemplatesApi.md#templateFoldersDeleteFolder) | **DELETE** /api/rp/v1/Templates/Folder/{id} | Delete specified folder
[**templateFoldersGetBreadcrumbs()**](TemplatesApi.md#templateFoldersGetBreadcrumbs) | **GET** /api/rp/v1/Templates/Folder/{id}/Breadcrumbs | Get specified folder breadcrumbs
[**templateFoldersGetFolder()**](TemplatesApi.md#templateFoldersGetFolder) | **GET** /api/rp/v1/Templates/Folder/{id} | Get specified folder
[**templateFoldersGetFolders()**](TemplatesApi.md#templateFoldersGetFolders) | **GET** /api/rp/v1/Templates/Folder/{id}/ListFolders | Get all folders from specified folder
[**templateFoldersGetFoldersCount()**](TemplatesApi.md#templateFoldersGetFoldersCount) | **GET** /api/rp/v1/Templates/Folder/{id}/CountFolders | Get count of folders what contains in a specified folder
[**templateFoldersGetPermissions()**](TemplatesApi.md#templateFoldersGetPermissions) | **GET** /api/rp/v1/Templates/Folder/{id}/permissions | Get all folder permissions
[**templateFoldersGetRootFolder()**](TemplatesApi.md#templateFoldersGetRootFolder) | **GET** /api/rp/v1/Templates/Root | Get user&#39;s root folder (without parents)
[**templateFoldersMoveFolder()**](TemplatesApi.md#templateFoldersMoveFolder) | **POST** /api/rp/v1/Templates/Folder/{id}/Move/{folderId} | Move folder to a specified folder
[**templateFoldersPostFolder()**](TemplatesApi.md#templateFoldersPostFolder) | **POST** /api/rp/v1/Templates/Folder/{id}/Folder | Create folder
[**templateFoldersRenameFolder()**](TemplatesApi.md#templateFoldersRenameFolder) | **PUT** /api/rp/v1/Templates/Folder/{id}/Rename | Rename a folder
[**templateFoldersUpdateIcon()**](TemplatesApi.md#templateFoldersUpdateIcon) | **PUT** /api/rp/v1/Templates/Folder/{id}/Icon | Update a folder&#39;s icon
[**templateFoldersUpdatePermissions()**](TemplatesApi.md#templateFoldersUpdatePermissions) | **POST** /api/rp/v1/Templates/{id}/permissions | Update permissions
[**templateFoldersUpdateTags()**](TemplatesApi.md#templateFoldersUpdateTags) | **PUT** /api/rp/v1/Templates/Folder/{id}/UpdateTags | Update tags
[**templatesCopyFile()**](TemplatesApi.md#templatesCopyFile) | **POST** /api/rp/v1/Templates/File/{id}/Copy/{folderId} | Copy file to a specified folder
[**templatesDeleteFile()**](TemplatesApi.md#templatesDeleteFile) | **DELETE** /api/rp/v1/Templates/File/{id} | Delete specified file
[**templatesExport()**](TemplatesApi.md#templatesExport) | **POST** /api/rp/v1/Templates/File/{id}/Export | Export specified report template to a specified format
[**templatesGetFile()**](TemplatesApi.md#templatesGetFile) | **GET** /api/rp/v1/Templates/File/{id} | Get specified file
[**templatesGetFilesCount()**](TemplatesApi.md#templatesGetFilesCount) | **GET** /api/rp/v1/Templates/Folder/{id}/CountFiles | Get count of files what contains in a specified folder
[**templatesGetFilesList()**](TemplatesApi.md#templatesGetFilesList) | **GET** /api/rp/v1/Templates/Folder/{id}/ListFiles | Get all files from specified folder. &lt;br /&gt;  User with Get Entity permission can access this method. &lt;br /&gt;  The method will returns minimal infomration about the file: &lt;br /&gt;  id, name, size, editedTime, createdTime, tags, status, statusReason.
[**templatesGetPermissions()**](TemplatesApi.md#templatesGetPermissions) | **GET** /api/rp/v1/Templates/File/{id}/permissions | Get all file permissions
[**templatesMoveFile()**](TemplatesApi.md#templatesMoveFile) | **POST** /api/rp/v1/Templates/File/{id}/Move/{folderId} | Move file to a specified folder
[**templatesPrepare()**](TemplatesApi.md#templatesPrepare) | **POST** /api/rp/v1/Templates/File/{id}/Prepare | Prepare specified template to report
[**templatesRenameFile()**](TemplatesApi.md#templatesRenameFile) | **PUT** /api/rp/v1/Templates/File/{id}/Rename | Rename a file
[**templatesUpdateIcon()**](TemplatesApi.md#templatesUpdateIcon) | **PUT** /api/rp/v1/Templates/File/{id}/Icon | Update a files&#39;s icon
[**templatesUpdatePermissions()**](TemplatesApi.md#templatesUpdatePermissions) | **POST** /api/rp/v1/Templates/File/{id}/permissions | Update permissions
[**templatesUpdateTags()**](TemplatesApi.md#templatesUpdateTags) | **PUT** /api/rp/v1/Templates/File/{id}/UpdateTags | Update tags
[**templatesUploadFile()**](TemplatesApi.md#templatesUploadFile) | **POST** /api/rp/v1/Templates/Folder/{id}/File | Upload a file to the specified folder  !


## `templateFolderAndFileGetCount()`

```php
templateFolderAndFileGetCount($id, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$search_pattern = 'search_pattern_example'; // string | string, that must be incuded in file or folder name to be counted <br />              (leave undefined to count all files and folders)

try {
    $result = $apiInstance->templateFolderAndFileGetCount($id, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFolderAndFileGetCount: ', $e->getMessage(), PHP_EOL;
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

## `templateFolderAndFileGetFoldersAndFiles()`

```php
templateFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\FilesVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
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
    $result = $apiInstance->templateFolderAndFileGetFoldersAndFiles($id, $skip, $take, $order_by, $desc, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFolderAndFileGetFoldersAndFiles: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersCopyFolder()`

```php
templateFoldersCopyFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->templateFoldersCopyFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersCopyFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersDeleteFolder()`

```php
templateFoldersDeleteFolder($id, $recursive)
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$recursive = true; // bool | delete all childs

try {
    $apiInstance->templateFoldersDeleteFolder($id, $recursive);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersDeleteFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetBreadcrumbs()`

```php
templateFoldersGetBreadcrumbs($id): \OpenAPI\Client\cloud\fastreport\model\BreadcrumbsVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->templateFoldersGetBreadcrumbs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetBreadcrumbs: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetFolder()`

```php
templateFoldersGetFolder($id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->templateFoldersGetFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetFolders()`

```php
templateFoldersGetFolders($id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\FilesVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id
$skip = 0; // int | number of files, that have to be skipped
$take = 10; // int | number of files, that have to be returned

try {
    $result = $apiInstance->templateFoldersGetFolders($id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetFolders: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetFoldersCount()`

```php
templateFoldersGetFoldersCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->templateFoldersGetFoldersCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetFoldersCount: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetPermissions()`

```php
templateFoldersGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->templateFoldersGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetPermissions: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersGetRootFolder()`

```php
templateFoldersGetRootFolder($subscription_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->templateFoldersGetRootFolder($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersGetRootFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersMoveFolder()`

```php
templateFoldersMoveFolder($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | moving folder id
$folder_id = 'folder_id_example'; // string | destination folder id

try {
    $result = $apiInstance->templateFoldersMoveFolder($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersMoveFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersPostFolder()`

```php
templateFoldersPostFolder($id, $template_folder_create_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of parent folder id
$template_folder_create_vm = new \OpenAPI\Client\cloud\fastreport\model\TemplateFolderCreateVM(); // \OpenAPI\Client\cloud\fastreport\model\TemplateFolderCreateVM | create VM

try {
    $result = $apiInstance->templateFoldersPostFolder($id, $template_folder_create_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersPostFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of parent folder id |
 **template_folder_create_vm** | [**\OpenAPI\Client\cloud\fastreport\model\TemplateFolderCreateVM**](../Model/TemplateFolderCreateVM.md)| create VM | [optional]

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

## `templateFoldersRenameFolder()`

```php
templateFoldersRenameFolder($id, $folder_rename_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderRenameVM

try {
    $result = $apiInstance->templateFoldersRenameFolder($id, $folder_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersRenameFolder: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersUpdateIcon()`

```php
templateFoldersUpdateIcon($id, $folder_icon_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of folder
$folder_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderIconVM | Update icon model

try {
    $result = $apiInstance->templateFoldersUpdateIcon($id, $folder_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersUpdateIcon: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersUpdatePermissions()`

```php
templateFoldersUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM

try {
    $apiInstance->templateFoldersUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersUpdatePermissions: ', $e->getMessage(), PHP_EOL;
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

## `templateFoldersUpdateTags()`

```php
templateFoldersUpdateTags($id, $folder_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\FileVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$folder_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FolderTagsUpdateVM

try {
    $result = $apiInstance->templateFoldersUpdateTags($id, $folder_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateFoldersUpdateTags: ', $e->getMessage(), PHP_EOL;
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

## `templatesCopyFile()`

```php
templatesCopyFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->templatesCopyFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesCopyFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |
 **folder_id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesDeleteFile()`

```php
templatesDeleteFile($id)
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $apiInstance->templatesDeleteFile($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesDeleteFile: ', $e->getMessage(), PHP_EOL;
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

## `templatesExport()`

```php
templatesExport($id, $export_template_vm): \OpenAPI\Client\cloud\fastreport\model\ExportVM
```

Export specified report template to a specified format

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | report id
$export_template_vm = new \OpenAPI\Client\cloud\fastreport\model\ExportTemplateVM(); // \OpenAPI\Client\cloud\fastreport\model\ExportTemplateVM | export parameters (string only)

try {
    $result = $apiInstance->templatesExport($id, $export_template_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| report id |
 **export_template_vm** | [**\OpenAPI\Client\cloud\fastreport\model\ExportTemplateVM**](../Model/ExportTemplateVM.md)| export parameters (string only) | [optional]

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

## `templatesGetFile()`

```php
templatesGetFile($id): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id

try {
    $result = $apiInstance->templatesGetFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesGetFilesCount()`

```php
templatesGetFilesCount($id): \OpenAPI\Client\cloud\fastreport\model\CountVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | folder id

try {
    $result = $apiInstance->templatesGetFilesCount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetFilesCount: ', $e->getMessage(), PHP_EOL;
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

## `templatesGetFilesList()`

```php
templatesGetFilesList($id, $skip, $take, $search_pattern): \OpenAPI\Client\cloud\fastreport\model\TemplatesVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
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
    $result = $apiInstance->templatesGetFilesList($id, $skip, $take, $search_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetFilesList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\cloud\fastreport\model\TemplatesVM**](../Model/TemplatesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesGetPermissions()`

```php
templatesGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\FilePermissionsVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->templatesGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesGetPermissions: ', $e->getMessage(), PHP_EOL;
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

## `templatesMoveFile()`

```php
templatesMoveFile($id, $folder_id): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | file id
$folder_id = 'folder_id_example'; // string | folder id

try {
    $result = $apiInstance->templatesMoveFile($id, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesMoveFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| file id |
 **folder_id** | **string**| folder id |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesPrepare()`

```php
templatesPrepare($id, $prepare_template_vm): \OpenAPI\Client\cloud\fastreport\model\ReportVM
```

Prepare specified template to report

User with Execute Prepare permission on report and  Create Entity on a prepared report folder can access this method.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | template id
$prepare_template_vm = new \OpenAPI\Client\cloud\fastreport\model\PrepareTemplateVM(); // \OpenAPI\Client\cloud\fastreport\model\PrepareTemplateVM | Template prepare view model

try {
    $result = $apiInstance->templatesPrepare($id, $prepare_template_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesPrepare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| template id |
 **prepare_template_vm** | [**\OpenAPI\Client\cloud\fastreport\model\PrepareTemplateVM**](../Model/PrepareTemplateVM.md)| Template prepare view model | [optional]

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

## `templatesRenameFile()`

```php
templatesRenameFile($id, $file_rename_vm): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_rename_vm = new \OpenAPI\Client\cloud\fastreport\model\FileRenameVM(); // \OpenAPI\Client\cloud\fastreport\model\FileRenameVM

try {
    $result = $apiInstance->templatesRenameFile($id, $file_rename_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesRenameFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_rename_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileRenameVM**](../Model/FileRenameVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesUpdateIcon()`

```php
templatesUpdateIcon($id, $file_icon_vm): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_icon_vm = new \OpenAPI\Client\cloud\fastreport\model\FileIconVM(); // \OpenAPI\Client\cloud\fastreport\model\FileIconVM

try {
    $result = $apiInstance->templatesUpdateIcon($id, $file_icon_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesUpdateIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_icon_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileIconVM**](../Model/FileIconVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesUpdatePermissions()`

```php
templatesUpdatePermissions($id, $update_file_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$update_file_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateFilePermissionsVM

try {
    $apiInstance->templatesUpdatePermissions($id, $update_file_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesUpdatePermissions: ', $e->getMessage(), PHP_EOL;
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

## `templatesUpdateTags()`

```php
templatesUpdateTags($id, $file_tags_update_vm): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$file_tags_update_vm = new \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM(); // \OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM

try {
    $result = $apiInstance->templatesUpdateTags($id, $file_tags_update_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesUpdateTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **file_tags_update_vm** | [**\OpenAPI\Client\cloud\fastreport\model\FileTagsUpdateVM**](../Model/FileTagsUpdateVM.md)|  | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesUploadFile()`

```php
templatesUploadFile($id, $template_create_vm): \OpenAPI\Client\cloud\fastreport\model\TemplateVM
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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of folder
$template_create_vm = new \OpenAPI\Client\cloud\fastreport\model\TemplateCreateVM(); // \OpenAPI\Client\cloud\fastreport\model\TemplateCreateVM | file's view model

try {
    $result = $apiInstance->templatesUploadFile($id, $template_create_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesUploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of folder |
 **template_create_vm** | [**\OpenAPI\Client\cloud\fastreport\model\TemplateCreateVM**](../Model/TemplateCreateVM.md)| file&#39;s view model | [optional]

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\TemplateVM**](../Model/TemplateVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
