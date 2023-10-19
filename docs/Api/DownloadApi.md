# OpenAPI\Client\DownloadApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadGetExport()**](DownloadApi.md#downloadGetExport) | **GET** /download/e/{id} | Returns a export file with specified id |
| [**downloadGetExportThumbnail()**](DownloadApi.md#downloadGetExportThumbnail) | **GET** /download/e/{id}/thumbnail | Returns export&#39;s thumbnail |
| [**downloadGetExports()**](DownloadApi.md#downloadGetExports) | **GET** /download/es/{archiveName} | Returns a zip archive with selected ids |
| [**downloadGetLastSVGExport()**](DownloadApi.md#downloadGetLastSVGExport) | **GET** /download/lastPreview/{reportId} | returns export, that was created from report with specified id.  INTERNAL USAGE ONLY! |
| [**downloadGetReport()**](DownloadApi.md#downloadGetReport) | **GET** /download/r/{id} | Returns a prepared file with specified id |
| [**downloadGetReportThumbnail()**](DownloadApi.md#downloadGetReportThumbnail) | **GET** /download/r/{id}/thumbnail | Returns report&#39;s thumbnail |
| [**downloadGetReports()**](DownloadApi.md#downloadGetReports) | **GET** /download/rs/{archiveName} | Returns a zip archive with selected files |
| [**downloadGetTemplate()**](DownloadApi.md#downloadGetTemplate) | **GET** /download/t/{id} | Returns a Template file with specified id |
| [**downloadGetTemplateThumbnail()**](DownloadApi.md#downloadGetTemplateThumbnail) | **GET** /download/t/{id}/thumbnail | Returns template&#39;s thumbnail |
| [**downloadGetTemplates()**](DownloadApi.md#downloadGetTemplates) | **GET** /download/ts/{archiveName} | Returns a zip archive with selected files |


## `downloadGetExport()`

```php
downloadGetExport($id, $preview): \SplFileObject
```

Returns a export file with specified id

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$preview = false; // bool | 

try {
    $result = $apiInstance->downloadGetExport($id, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **preview** | **bool**|  | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/octet-stream`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetExportThumbnail()`

```php
downloadGetExportThumbnail($id): \SplFileObject
```

Returns export's thumbnail

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->downloadGetExportThumbnail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetExportThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `image/png`, `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetExports()`

```php
downloadGetExports($archive_name, $file_ids, $folder_ids): \SplFileObject
```

Returns a zip archive with selected ids

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archive_name = 'archive_name_example'; // string | name of the created archive
$file_ids = 'file_ids_example'; // string | ids separated with a ',' sign
$folder_ids = 'folder_ids_example'; // string | ids separated with a ',' sign

try {
    $result = $apiInstance->downloadGetExports($archive_name, $file_ids, $folder_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetExports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **archive_name** | **string**| name of the created archive | |
| **file_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |
| **folder_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetLastSVGExport()`

```php
downloadGetLastSVGExport($report_id): \SplFileObject
```

returns export, that was created from report with specified id.  INTERNAL USAGE ONLY!

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | 

try {
    $result = $apiInstance->downloadGetLastSVGExport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetLastSVGExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetReport()`

```php
downloadGetReport($id): \SplFileObject
```

Returns a prepared file with specified id

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->downloadGetReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetReportThumbnail()`

```php
downloadGetReportThumbnail($id): \SplFileObject
```

Returns report's thumbnail

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->downloadGetReportThumbnail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetReportThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `image/png`, `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetReports()`

```php
downloadGetReports($archive_name, $file_ids, $folder_ids): \SplFileObject
```

Returns a zip archive with selected files

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archive_name = 'archive_name_example'; // string | name of the created archive
$file_ids = 'file_ids_example'; // string | ids separated with a ',' sign
$folder_ids = 'folder_ids_example'; // string | ids separated with a ',' sign

try {
    $result = $apiInstance->downloadGetReports($archive_name, $file_ids, $folder_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **archive_name** | **string**| name of the created archive | |
| **file_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |
| **folder_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetTemplate()`

```php
downloadGetTemplate($id): \SplFileObject
```

Returns a Template file with specified id

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | template id

try {
    $result = $apiInstance->downloadGetTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| template id | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetTemplateThumbnail()`

```php
downloadGetTemplateThumbnail($id): \SplFileObject
```

Returns template's thumbnail

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->downloadGetTemplateThumbnail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetTemplateThumbnail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `image/png`, `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadGetTemplates()`

```php
downloadGetTemplates($archive_name, $file_ids, $folder_ids): \SplFileObject
```

Returns a zip archive with selected files

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


$apiInstance = new OpenAPI\Client\Api\DownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archive_name = 'archive_name_example'; // string | name of the created archive
$file_ids = 'file_ids_example'; // string | ids separated with a ',' sign
$folder_ids = 'folder_ids_example'; // string | ids separated with a ',' sign

try {
    $result = $apiInstance->downloadGetTemplates($archive_name, $file_ids, $folder_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadApi->downloadGetTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **archive_name** | **string**| name of the created archive | |
| **file_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |
| **folder_ids** | **string**| ids separated with a &#39;,&#39; sign | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
