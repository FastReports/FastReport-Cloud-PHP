# OpenAPI\Client\FontsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fontsAddPublicFont()**](FontsApi.md#fontsAddPublicFont) | **POST** /api/v1/fonts/add | Allows user to add a font from a list of public fonts to their subscription |
| [**fontsCountFontsAsync()**](FontsApi.md#fontsCountFontsAsync) | **GET** /api/v1/fonts/count | Returns a number of fonts in a subscription |
| [**fontsCountOccupiedSpace()**](FontsApi.md#fontsCountOccupiedSpace) | **GET** /api/v1/fonts/counttotalsizebysubscription | returns storage space occupied by fonts in the subscription |
| [**fontsCountPublicFontsAsync()**](FontsApi.md#fontsCountPublicFontsAsync) | **GET** /api/v1/fonts/public/count | Returns a number of pulbic fonts |
| [**fontsDeleteFont()**](FontsApi.md#fontsDeleteFont) | **DELETE** /api/v1/fonts/{id} | deletes a font from the subscirption by id |
| [**fontsDownloadFont()**](FontsApi.md#fontsDownloadFont) | **GET** /api/v1/fonts/{id}/download | Downloads font by it&#39;s id |
| [**fontsDownloadPublicFont()**](FontsApi.md#fontsDownloadPublicFont) | **GET** /api/v1/fonts/public/{id}/download | Downloads a public font by it&#39;s id |
| [**fontsGetFontFamilies()**](FontsApi.md#fontsGetFontFamilies) | **GET** /api/v1/fonts/families | Returns distinct font names from public and private font lists (excluding disabled fonts) |
| [**fontsGetFonts()**](FontsApi.md#fontsGetFonts) | **GET** /api/v1/fonts/list | returns a list of fonts in the subscription |
| [**fontsGetFontsByReport()**](FontsApi.md#fontsGetFontsByReport) | **GET** /api/v1/fonts/ListByReport/{reportId} | Returns a list of fonts in the subscription by report id. |
| [**fontsGetFontsByTemplate()**](FontsApi.md#fontsGetFontsByTemplate) | **GET** /api/v1/fonts/ListByTemplate/{templateId} | Returns a list of fonts in the subscription by report id. |
| [**fontsGetFontsCss()**](FontsApi.md#fontsGetFontsCss) | **GET** /api/v1/fonts/css | Creates a css stylesheet for a public font |
| [**fontsGetFontsCssByReport()**](FontsApi.md#fontsGetFontsCssByReport) | **GET** /api/v1/fonts/CssByReport/{reportId} | Creates a css stylesheet for a public fonts by report. |
| [**fontsGetFontsCssByTemplate()**](FontsApi.md#fontsGetFontsCssByTemplate) | **GET** /api/v1/fonts/CssByTemplate/{templateId} | Creates a css stylesheet for a public font by template. |
| [**fontsGetMyPermissions()**](FontsApi.md#fontsGetMyPermissions) | **GET** /api/v1/fonts/{id}/mypermissions | Get current user&#39;s permissions to a font |
| [**fontsGetPermissions()**](FontsApi.md#fontsGetPermissions) | **GET** /api/v1/fonts/{id}/permissions | Get font&#39;s permissions |
| [**fontsGetPublicFonts()**](FontsApi.md#fontsGetPublicFonts) | **GET** /api/v1/fonts/public/list | Returns a list of public fonts |
| [**fontsGetPublicFontsCss()**](FontsApi.md#fontsGetPublicFontsCss) | **GET** /api/v1/fonts/public/css | Creates a css stylesheet for a public font |
| [**fontsUpdateFont()**](FontsApi.md#fontsUpdateFont) | **PUT** /api/v1/fonts/{id} | updates a user font model |
| [**fontsUpdatePermissions()**](FontsApi.md#fontsUpdatePermissions) | **PUT** /api/v1/fonts/{id}/permissions | Update permissions |
| [**fontsUploadFont()**](FontsApi.md#fontsUploadFont) | **POST** /api/v1/fonts/upload | Allows user to upload a new truetype font to their subscription |


## `fontsAddPublicFont()`

```php
fontsAddPublicFont($add_public_font_vm): \OpenAPI\Client\cloud\fastreport\model\UserFontVM
```

Allows user to add a font from a list of public fonts to their subscription

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_public_font_vm = new \OpenAPI\Client\cloud\fastreport\model\AddPublicFontVM(); // \OpenAPI\Client\cloud\fastreport\model\AddPublicFontVM | a body with font id and workspace id

try {
    $result = $apiInstance->fontsAddPublicFont($add_public_font_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsAddPublicFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_public_font_vm** | [**\OpenAPI\Client\cloud\fastreport\model\AddPublicFontVM**](../Model/AddPublicFontVM.md)| a body with font id and workspace id | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontVM**](../Model/UserFontVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsCountFontsAsync()`

```php
fontsCountFontsAsync($subscription_id): \OpenAPI\Client\cloud\fastreport\model\CountVM
```

Returns a number of fonts in a subscription

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscripiton id

try {
    $result = $apiInstance->fontsCountFontsAsync($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsCountFontsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscripiton id | [optional] |

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

## `fontsCountOccupiedSpace()`

```php
fontsCountOccupiedSpace($subscription_id): \OpenAPI\Client\cloud\fastreport\model\FontSizeVM
```

returns storage space occupied by fonts in the subscription

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | subscription id

try {
    $result = $apiInstance->fontsCountOccupiedSpace($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsCountOccupiedSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| subscription id | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FontSizeVM**](../Model/FontSizeVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsCountPublicFontsAsync()`

```php
fontsCountPublicFontsAsync(): \OpenAPI\Client\cloud\fastreport\model\CountVM
```

Returns a number of pulbic fonts

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fontsCountPublicFontsAsync();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsCountPublicFontsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `fontsDeleteFont()`

```php
fontsDeleteFont($id)
```

deletes a font from the subscirption by id

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | font id

try {
    $apiInstance->fontsDeleteFont($id);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsDeleteFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| font id | |

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

## `fontsDownloadFont()`

```php
fontsDownloadFont($id): \SplFileObject
```

Downloads font by it's id

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the font

try {
    $result = $apiInstance->fontsDownloadFont($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsDownloadFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the font | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsDownloadPublicFont()`

```php
fontsDownloadPublicFont($id): \SplFileObject
```

Downloads a public font by it's id

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the font

try {
    $result = $apiInstance->fontsDownloadPublicFont($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsDownloadPublicFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the font | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontFamilies()`

```php
fontsGetFontFamilies($subscription_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\FontNamesVM
```

Returns distinct font names from public and private font lists (excluding disabled fonts)

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id of a subscription, to pull the font names from. If null or the subscription has no fonts, only the public fonts will be returned
$skip = 0; // int | how many names to skip
$take = 10; // int | how many namrs to take

try {
    $result = $apiInstance->fontsGetFontFamilies($subscription_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id of a subscription, to pull the font names from. If null or the subscription has no fonts, only the public fonts will be returned | [optional] |
| **skip** | **int**| how many names to skip | [optional] [default to 0] |
| **take** | **int**| how many namrs to take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FontNamesVM**](../Model/FontNamesVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFonts()`

```php
fontsGetFonts($subscription_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\UserFontsVM
```

returns a list of fonts in the subscription

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string | id of a subscription, to pull the fonts from. If null, only the public fonts will be returned
$skip = 0; // int | how many fonts to skip
$take = 10; // int | how many fonts to take

try {
    $result = $apiInstance->fontsGetFonts($subscription_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**| id of a subscription, to pull the fonts from. If null, only the public fonts will be returned | [optional] |
| **skip** | **int**| how many fonts to skip | [optional] [default to 0] |
| **take** | **int**| how many fonts to take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontsVM**](../Model/UserFontsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontsByReport()`

```php
fontsGetFontsByReport($report_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\UserFontsVM
```

Returns a list of fonts in the subscription by report id.

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | id of a report
$skip = 0; // int | how many fonts to skip
$take = 10; // int | how many fonts to take

try {
    $result = $apiInstance->fontsGetFontsByReport($report_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontsByReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| id of a report | |
| **skip** | **int**| how many fonts to skip | [optional] [default to 0] |
| **take** | **int**| how many fonts to take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontsVM**](../Model/UserFontsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontsByTemplate()`

```php
fontsGetFontsByTemplate($template_id, $skip, $take): \OpenAPI\Client\cloud\fastreport\model\UserFontsVM
```

Returns a list of fonts in the subscription by report id.

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | id of a report
$skip = 0; // int | how many fonts to skip
$take = 10; // int | how many fonts to take

try {
    $result = $apiInstance->fontsGetFontsByTemplate($template_id, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontsByTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| id of a report | |
| **skip** | **int**| how many fonts to skip | [optional] [default to 0] |
| **take** | **int**| how many fonts to take | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontsVM**](../Model/UserFontsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontsCss()`

```php
fontsGetFontsCss($subscription_id): string
```

Creates a css stylesheet for a public font

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string

try {
    $result = $apiInstance->fontsGetFontsCss($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontsCss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_id** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/css`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontsCssByReport()`

```php
fontsGetFontsCssByReport($report_id): string
```

Creates a css stylesheet for a public fonts by report.

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | id of a report

try {
    $result = $apiInstance->fontsGetFontsCssByReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontsCssByReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| id of a report | |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetFontsCssByTemplate()`

```php
fontsGetFontsCssByTemplate($template_id): string
```

Creates a css stylesheet for a public font by template.

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | id of a report

try {
    $result = $apiInstance->fontsGetFontsCssByTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetFontsCssByTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| id of a report | |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetMyPermissions()`

```php
fontsGetMyPermissions($id): \OpenAPI\Client\cloud\fastreport\model\UserFontPermissionCRUDVM
```

Get current user's permissions to a font

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user font id

try {
    $result = $apiInstance->fontsGetMyPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetMyPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user font id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontPermissionCRUDVM**](../Model/UserFontPermissionCRUDVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetPermissions()`

```php
fontsGetPermissions($id): \OpenAPI\Client\cloud\fastreport\model\UserFontPermissionsVM
```

Get font's permissions

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | user font id

try {
    $result = $apiInstance->fontsGetPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| user font id | |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontPermissionsVM**](../Model/UserFontPermissionsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetPublicFonts()`

```php
fontsGetPublicFonts($skip, $take): \OpenAPI\Client\cloud\fastreport\model\FontsVM
```

Returns a list of public fonts

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 0; // int | 
$take = 10; // int | 

try {
    $result = $apiInstance->fontsGetPublicFonts($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetPublicFonts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**|  | [optional] [default to 0] |
| **take** | **int**|  | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\FontsVM**](../Model/FontsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsGetPublicFontsCss()`

```php
fontsGetPublicFontsCss(): string
```

Creates a css stylesheet for a public font

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fontsGetPublicFontsCss();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsGetPublicFontsCss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/css`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsUpdateFont()`

```php
fontsUpdateFont($id, $update_user_font_vm): \OpenAPI\Client\cloud\fastreport\model\UserFontVM
```

updates a user font model

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of the font
$update_user_font_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateUserFontVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateUserFontVM | update VM body

try {
    $result = $apiInstance->fontsUpdateFont($id, $update_user_font_vm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsUpdateFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| id of the font | |
| **update_user_font_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateUserFontVM**](../Model/UpdateUserFontVM.md)| update VM body | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontVM**](../Model/UserFontVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fontsUpdatePermissions()`

```php
fontsUpdatePermissions($id, $update_user_font_permissions_vm)
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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$update_user_font_permissions_vm = new \OpenAPI\Client\cloud\fastreport\model\UpdateUserFontPermissionsVM(); // \OpenAPI\Client\cloud\fastreport\model\UpdateUserFontPermissionsVM | 

try {
    $apiInstance->fontsUpdatePermissions($id, $update_user_font_permissions_vm);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsUpdatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_user_font_permissions_vm** | [**\OpenAPI\Client\cloud\fastreport\model\UpdateUserFontPermissionsVM**](../Model/UpdateUserFontPermissionsVM.md)|  | [optional] |

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

## `fontsUploadFont()`

```php
fontsUploadFont($file, $subscription_id, $enabled): \OpenAPI\Client\cloud\fastreport\model\UserFontsVM
```

Allows user to upload a new truetype font to their subscription

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


$apiInstance = new OpenAPI\Client\Api\FontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject
$subscription_id = 'subscription_id_example'; // string
$enabled = True; // bool

try {
    $result = $apiInstance->fontsUploadFont($file, $subscription_id, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FontsApi->fontsUploadFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **subscription_id** | **string**|  | [optional] |
| **enabled** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\cloud\fastreport\model\UserFontsVM**](../Model/UserFontsVM.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
