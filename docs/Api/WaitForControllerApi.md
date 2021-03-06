# MailSlurp\WaitForControllerApi

All URIs are relative to *https://api.mailslurp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**waitFor**](WaitForControllerApi.md#waitFor) | **POST** /waitFor | Wait for conditions to be met
[**waitForEmailCount**](WaitForControllerApi.md#waitForEmailCount) | **GET** /waitForEmailCount | Wait for and return count number of emails
[**waitForLatestEmail**](WaitForControllerApi.md#waitForLatestEmail) | **GET** /waitForLatestEmail | Fetch inbox&#39;s latest email or if empty wait for an email to arrive
[**waitForMatchingEmail**](WaitForControllerApi.md#waitForMatchingEmail) | **POST** /waitForMatchingEmails | Wait or return list of emails that match simple matching patterns
[**waitForMatchingFirstEmail**](WaitForControllerApi.md#waitForMatchingFirstEmail) | **POST** /waitForMatchingFirstEmail | Wait for or return the first email that matches proved MatchOptions array
[**waitForNthEmail**](WaitForControllerApi.md#waitForNthEmail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified



## waitFor

> \MailSlurp\Models\EmailPreview[] waitFor($wait_for_conditions)

Wait for conditions to be met

Generic waitFor method that will wait until an inbox meets given conditions or return immediately if already met

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wait_for_conditions = new \MailSlurp\Models\WaitForConditions(); // \MailSlurp\Models\WaitForConditions | Conditions to wait for

try {
    $result = $apiInstance->waitFor($wait_for_conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitFor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wait_for_conditions** | [**\MailSlurp\Models\WaitForConditions**](../Model/WaitForConditions.md)| Conditions to wait for | [optional]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForEmailCount

> \MailSlurp\Models\EmailPreview[] waitForEmailCount($count, $inbox_id, $timeout, $unread_only)

Wait for and return count number of emails

If inbox contains count or more emails at time of request then return count worth of emails. If not wait until the count is reached and return those or return an error if timeout is exceeded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | Number of emails to wait for. Must be greater that 1
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForEmailCount($count, $inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForEmailCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of emails to wait for. Must be greater that 1 | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForLatestEmail

> \MailSlurp\Models\Email waitForLatestEmail($inbox_id, $timeout, $unread_only)

Fetch inbox's latest email or if empty wait for an email to arrive

Will return either the last received email or wait for an email to arrive and return that. If you need to wait for an email for a non-empty inbox set `unreadOnly=true` or see the other receive methods such as `waitForNthEmail` or `waitForEmailCount`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only.

try {
    $result = $apiInstance->waitForLatestEmail($inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForLatestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only. | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForMatchingEmail

> \MailSlurp\Models\EmailPreview[] waitForMatchingEmail($match_options, $count, $inbox_id, $timeout, $unread_only)

Wait or return list of emails that match simple matching patterns

Perform a search of emails in an inbox with the given patterns. If results match expected count then return or else retry the search until results are found or timeout is reached. Match options allow simple CONTAINS or EQUALS filtering on SUBJECT, TO, BCC, CC, and FROM. See the `MatchOptions` object for options. An example payload is `{ matches: [{field: 'SUBJECT',should:'CONTAIN',value:'needle'}] }`. You can use an array of matches and they will be applied sequentially to filter out emails. If you want to perform matches and extractions of content using Regex patterns see the EmailController `getEmailContentMatch` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_options = new \MailSlurp\Models\MatchOptions(); // \MailSlurp\Models\MatchOptions | matchOptions
$count = 56; // int | Number of emails to wait for. Must be greater that 1
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are fetching emails from
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForMatchingEmail($match_options, $count, $inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForMatchingEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_options** | [**\MailSlurp\Models\MatchOptions**](../Model/MatchOptions.md)| matchOptions |
 **count** | **int**| Number of emails to wait for. Must be greater that 1 | [optional]
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are fetching emails from | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\EmailPreview[]**](../Model/EmailPreview.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForMatchingFirstEmail

> \MailSlurp\Models\Email waitForMatchingFirstEmail($match_options, $inbox_id, $timeout, $unread_only)

Wait for or return the first email that matches proved MatchOptions array

Perform a search of emails in an inbox with the given patterns. If a result if found then return or else retry the search until a result is found or timeout is reached. Match options allow simple CONTAINS or EQUALS filtering on SUBJECT, TO, BCC, CC, and FROM. See the `MatchOptions` object for options. An example payload is `{ matches: [{field: 'SUBJECT',should:'CONTAIN',value:'needle'}] }`. You can use an array of matches and they will be applied sequentially to filter out emails. If you want to perform matches and extractions of content using Regex patterns see the EmailController `getEmailContentMatch` method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_options = new \MailSlurp\Models\MatchOptions(); // \MailSlurp\Models\MatchOptions | matchOptions
$inbox_id = 'inbox_id_example'; // string | Id of the inbox we are matching an email for
$timeout = 56; // int | Max milliseconds to wait
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForMatchingFirstEmail($match_options, $inbox_id, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForMatchingFirstEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **match_options** | [**\MailSlurp\Models\MatchOptions**](../Model/MatchOptions.md)| matchOptions |
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox we are matching an email for | [optional]
 **timeout** | **int**| Max milliseconds to wait | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## waitForNthEmail

> \MailSlurp\Models\Email waitForNthEmail($inbox_id, $index, $timeout, $unread_only)

Wait for or fetch the email with a given index in the inbox specified

If nth email is already present in inbox then return it. If not hold the connection open until timeout expires or the nth email is received and returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\WaitForControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inbox_id = 'inbox_id_example'; // string | Id of the inbox you are fetching emails from
$index = 0; // int | Zero based index of the email to wait for. If an inbox has 1 email already and you want to wait for the 2nd email pass index=1
$timeout = 56; // int | Max milliseconds to wait for the nth email if not already present
$unread_only = false; // bool | Optional filter for unread only

try {
    $result = $apiInstance->waitForNthEmail($inbox_id, $index, $timeout, $unread_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaitForControllerApi->waitForNthEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inbox_id** | [**string**](../Model/.md)| Id of the inbox you are fetching emails from | [optional]
 **index** | **int**| Zero based index of the email to wait for. If an inbox has 1 email already and you want to wait for the 2nd email pass index&#x3D;1 | [optional] [default to 0]
 **timeout** | **int**| Max milliseconds to wait for the nth email if not already present | [optional]
 **unread_only** | **bool**| Optional filter for unread only | [optional] [default to false]

### Return type

[**\MailSlurp\Models\Email**](../Model/Email.md)

### Authorization

[API_KEY](../../README.md#API_KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

