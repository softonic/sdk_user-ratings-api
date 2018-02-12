# Softonic\UserRatingsApiSdk\AppsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppUserRating**](AppsApi.md#createAppUserRating) | **POST** /apps/{appId}/user-ratings | Register a rating for the given app
[**getAppUserRatings**](AppsApi.md#getAppUserRatings) | **GET** /apps/{appId}/user-ratings | Get the rating information about the given app
[**getAverageAppUserRatings**](AppsApi.md#getAverageAppUserRatings) | **GET** /apps/user-ratings | Get a list of apps with their average user ratings and number of votes


# **createAppUserRating**
> createAppUserRating($app_id, $app_user_rating)

Register a rating for the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\UserRatingsApiSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = "app_id_example"; // string | App id
$app_user_rating = new \Softonic\UserRatingsApiSdk\Client\Model\AppUserRating(); // \Softonic\UserRatingsApiSdk\Client\Model\AppUserRating | 

try {
    $apiInstance->createAppUserRating($app_id, $app_user_rating);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createAppUserRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App id |
 **app_user_rating** | [**\Softonic\UserRatingsApiSdk\Client\Model\AppUserRating**](../Model/AppUserRating.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppUserRatings**
> getAppUserRatings($app_id)

Get the rating information about the given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\UserRatingsApiSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = "app_id_example"; // string | App id

try {
    $apiInstance->getAppUserRatings($app_id);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppUserRatings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| App id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAverageAppUserRatings**
> getAverageAppUserRatings($updated_after, $from_scroll, $scroll_size, $scroll_timeout)

Get a list of apps with their average user ratings and number of votes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\UserRatingsApiSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date to filter the results
$from_scroll = "from_scroll_example"; // string | Token to request the next search context
$scroll_size = 56; // int | Number of results per request (default 10)
$scroll_timeout = 60; // int | Timeout to keep the search context open (in seconds)

try {
    $apiInstance->getAverageAppUserRatings($updated_after, $from_scroll, $scroll_size, $scroll_timeout);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAverageAppUserRatings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_after** | **\DateTime**| Date to filter the results | [optional]
 **from_scroll** | **string**| Token to request the next search context | [optional]
 **scroll_size** | **int**| Number of results per request (default 10) | [optional]
 **scroll_timeout** | **int**| Timeout to keep the search context open (in seconds) | [optional] [default to 60]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

