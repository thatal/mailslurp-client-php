# MailSlurpClient

>Available on Packagist as [mailslurp-client-php](https://packagist.org/packages/mailslurp/mailslurp-client-php)
For documentation see [developer guide](https://www.mailslurp.com/developers). [Create an account](https://app.mailslurp.com) in the MailSlurp Dashboard to [view your API Key](https://app). For all bugs, feature requests, or help please [see support](https://www.mailslurp.com/support/).

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.0.1-alpha
- Package version: 4.4.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.mailslurp.com](https://www.mailslurp.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/mailslurp/mailslurp-client-php.git"
    }
  ],
  "require": {
    "mailslurp/mailslurp-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/MailSlurpClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new MailSlurp\Api\CommonOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createNewEmailAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonOperationsApi->createNewEmailAddress: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.mailslurp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommonOperationsApi* | [**createNewEmailAddress**](docs/Api/CommonOperationsApi.md#createnewemailaddress) | **POST** /newEmailAddress | Create new email address
*CommonOperationsApi* | [**sendEmailSimple**](docs/Api/CommonOperationsApi.md#sendemailsimple) | **POST** /sendEmail | Send an email from a random email address
*CommonOperationsApi* | [**waitForLatestEmail**](docs/Api/CommonOperationsApi.md#waitforlatestemail) | **GET** /fetchLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive
*CommonOperationsApi* | [**waitForNthEmail**](docs/Api/CommonOperationsApi.md#waitfornthemail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified
*ExtraOperationsApi* | [**bulkCreateInboxes**](docs/Api/ExtraOperationsApi.md#bulkcreateinboxes) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
*ExtraOperationsApi* | [**bulkDeleteInboxes**](docs/Api/ExtraOperationsApi.md#bulkdeleteinboxes) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
*ExtraOperationsApi* | [**bulkSendEmails**](docs/Api/ExtraOperationsApi.md#bulksendemails) | **POST** /bulk/send | Bulk Send Emails
*ExtraOperationsApi* | [**createInbox**](docs/Api/ExtraOperationsApi.md#createinbox) | **POST** /inboxes | Create an Inbox (email address)
*ExtraOperationsApi* | [**createWebhook**](docs/Api/ExtraOperationsApi.md#createwebhook) | **POST** /inboxes/{inboxId}/webhooks | Attach a WebHook URL to an inbox
*ExtraOperationsApi* | [**deleteEmail**](docs/Api/ExtraOperationsApi.md#deleteemail) | **DELETE** /emails/{emailId} | Delete Email
*ExtraOperationsApi* | [**deleteInbox**](docs/Api/ExtraOperationsApi.md#deleteinbox) | **DELETE** /inboxes/{inboxId} | Delete Inbox / Email Address
*ExtraOperationsApi* | [**deleteWebhook**](docs/Api/ExtraOperationsApi.md#deletewebhook) | **DELETE** /inboxes/{inboxId}/webhooks/{webhookId} | Delete and disable a WebHook for an Inbox
*ExtraOperationsApi* | [**downloadAttachment**](docs/Api/ExtraOperationsApi.md#downloadattachment) | **GET** /emails/{emailId}/attachments/{attachmentId} | Get email attachment
*ExtraOperationsApi* | [**getEmail**](docs/Api/ExtraOperationsApi.md#getemail) | **GET** /emails/{emailId} | Get Email Content
*ExtraOperationsApi* | [**getEmails**](docs/Api/ExtraOperationsApi.md#getemails) | **GET** /inboxes/{inboxId}/emails | List Emails in an Inbox / EmailAddress
*ExtraOperationsApi* | [**getInbox**](docs/Api/ExtraOperationsApi.md#getinbox) | **GET** /inboxes/{inboxId} | Get Inbox / EmailAddress
*ExtraOperationsApi* | [**getInboxes**](docs/Api/ExtraOperationsApi.md#getinboxes) | **GET** /inboxes | List Inboxes / Email Addresses
*ExtraOperationsApi* | [**getRawEmailContents**](docs/Api/ExtraOperationsApi.md#getrawemailcontents) | **GET** /emails/{emailId}/raw | Get Raw Email Content
*ExtraOperationsApi* | [**getWebhooks**](docs/Api/ExtraOperationsApi.md#getwebhooks) | **GET** /inboxes/{inboxId}/webhooks | Get all WebHooks for an Inbox
*ExtraOperationsApi* | [**sendEmail**](docs/Api/ExtraOperationsApi.md#sendemail) | **POST** /inboxes/{inboxId} | Send Email


## Documentation For Models

 - [BasicAuthOptions](docs/Model/BasicAuthOptions.md)
 - [BulkSendEmailOptions](docs/Model/BulkSendEmailOptions.md)
 - [CreateWebhookOptions](docs/Model/CreateWebhookOptions.md)
 - [Email](docs/Model/Email.md)
 - [EmailAnalysis](docs/Model/EmailAnalysis.md)
 - [EmailPreview](docs/Model/EmailPreview.md)
 - [Inbox](docs/Model/Inbox.md)
 - [SendEmailOptions](docs/Model/SendEmailOptions.md)
 - [Webhook](docs/Model/Webhook.md)


## Documentation For Authorization


## API_KEY

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Author

contact@mailslurp.dev


