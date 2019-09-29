# MailSlurpClient

>Available on Packagist as [mailslurp-client-php](https://packagist.org/packages/mailslurp/mailslurp-client-php)
For documentation see [developer guide](https://www.mailslurp.com/developers). [Create an account](https://app.mailslurp.com) in the MailSlurp Dashboard to [view your API Key](https://app). For all bugs, feature requests, or help please [see support](https://www.mailslurp.com/support/).

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.0.1-alpha
- Package version: 5.2.0
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
*CommonOperationsApi* | [**deleteEmail**](docs/Api/CommonOperationsApi.md#deleteemail) | **DELETE** /deleteEmail | Delete an email
*CommonOperationsApi* | [**deleteEmailAddress**](docs/Api/CommonOperationsApi.md#deleteemailaddress) | **DELETE** /deleteEmailAddress | Delete email address and its emails
*CommonOperationsApi* | [**emptyInbox**](docs/Api/CommonOperationsApi.md#emptyinbox) | **DELETE** /emptyInbox | Delete all emails in an inbox
*CommonOperationsApi* | [**sendEmailSimple**](docs/Api/CommonOperationsApi.md#sendemailsimple) | **POST** /sendEmail | Send an email from a random email address
*CommonOperationsApi* | [**waitForEmailCount**](docs/Api/CommonOperationsApi.md#waitforemailcount) | **GET** /waitForEmailCount | Wait for and return count number of emails
*CommonOperationsApi* | [**waitForLatestEmail**](docs/Api/CommonOperationsApi.md#waitforlatestemail) | **GET** /waitForLatestEmail | Fetch inbox&#39;s latest email or if empty wait for email to arrive
*CommonOperationsApi* | [**waitForMatchingEmail**](docs/Api/CommonOperationsApi.md#waitformatchingemail) | **POST** /waitForMatchingEmails | Wait or return list of emails that match simple matching patterns
*CommonOperationsApi* | [**waitForNthEmail**](docs/Api/CommonOperationsApi.md#waitfornthemail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified
*ExtraOperationsApi* | [**bulkCreateInboxes**](docs/Api/ExtraOperationsApi.md#bulkcreateinboxes) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
*ExtraOperationsApi* | [**bulkDeleteInboxes**](docs/Api/ExtraOperationsApi.md#bulkdeleteinboxes) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
*ExtraOperationsApi* | [**bulkSendEmails**](docs/Api/ExtraOperationsApi.md#bulksendemails) | **POST** /bulk/send | Bulk Send Emails
*ExtraOperationsApi* | [**createDomain**](docs/Api/ExtraOperationsApi.md#createdomain) | **POST** /domains | Create Domain
*ExtraOperationsApi* | [**createInbox**](docs/Api/ExtraOperationsApi.md#createinbox) | **POST** /inboxes | Create an Inbox (email address)
*ExtraOperationsApi* | [**createWebhook**](docs/Api/ExtraOperationsApi.md#createwebhook) | **POST** /inboxes/{inboxId}/webhooks | Attach a WebHook URL to an inbox
*ExtraOperationsApi* | [**deleteDomain**](docs/Api/ExtraOperationsApi.md#deletedomain) | **DELETE** /domains/{id} | Delete a domain
*ExtraOperationsApi* | [**deleteEmail1**](docs/Api/ExtraOperationsApi.md#deleteemail1) | **DELETE** /emails/{emailId} | Delete Email
*ExtraOperationsApi* | [**deleteInbox**](docs/Api/ExtraOperationsApi.md#deleteinbox) | **DELETE** /inboxes/{inboxId} | Delete Inbox / Email Address
*ExtraOperationsApi* | [**deleteWebhook**](docs/Api/ExtraOperationsApi.md#deletewebhook) | **DELETE** /inboxes/{inboxId}/webhooks/{webhookId} | Delete and disable a WebHook for an Inbox
*ExtraOperationsApi* | [**downloadAttachment**](docs/Api/ExtraOperationsApi.md#downloadattachment) | **GET** /emails/{emailId}/attachments/{attachmentId} | Get email attachment
*ExtraOperationsApi* | [**forwardEmail**](docs/Api/ExtraOperationsApi.md#forwardemail) | **POST** /emails/{emailId}/forward | Forward Email
*ExtraOperationsApi* | [**getDomain**](docs/Api/ExtraOperationsApi.md#getdomain) | **GET** /domains/{id} | Get a domain
*ExtraOperationsApi* | [**getDomains**](docs/Api/ExtraOperationsApi.md#getdomains) | **GET** /domains | Get domains
*ExtraOperationsApi* | [**getEmail**](docs/Api/ExtraOperationsApi.md#getemail) | **GET** /emails/{emailId} | Get Email Content
*ExtraOperationsApi* | [**getEmails**](docs/Api/ExtraOperationsApi.md#getemails) | **GET** /inboxes/{inboxId}/emails | List Emails in an Inbox / EmailAddress
*ExtraOperationsApi* | [**getEmailsPaginated**](docs/Api/ExtraOperationsApi.md#getemailspaginated) | **GET** /emails | Get all emails
*ExtraOperationsApi* | [**getInbox**](docs/Api/ExtraOperationsApi.md#getinbox) | **GET** /inboxes/{inboxId} | Get Inbox / EmailAddress
*ExtraOperationsApi* | [**getInboxes**](docs/Api/ExtraOperationsApi.md#getinboxes) | **GET** /inboxes | List Inboxes / Email Addresses
*ExtraOperationsApi* | [**getRawEmailContents**](docs/Api/ExtraOperationsApi.md#getrawemailcontents) | **GET** /emails/{emailId}/raw | Get Raw Email Content
*ExtraOperationsApi* | [**getWebhooks**](docs/Api/ExtraOperationsApi.md#getwebhooks) | **GET** /inboxes/{inboxId}/webhooks | Get all WebHooks for an Inbox
*ExtraOperationsApi* | [**sendEmail**](docs/Api/ExtraOperationsApi.md#sendemail) | **POST** /inboxes/{inboxId} | Send Email
*ExtraOperationsApi* | [**uploadAttachment**](docs/Api/ExtraOperationsApi.md#uploadattachment) | **POST** /attachments | Upload an attachment for sending
*ExtraOperationsApi* | [**uploadMultipartForm**](docs/Api/ExtraOperationsApi.md#uploadmultipartform) | **POST** /attachments/multipart | Upload an attachment for sending using Multipart Form


## Documentation For Models

 - [BasicAuthOptions](docs/Model/BasicAuthOptions.md)
 - [BulkSendEmailOptions](docs/Model/BulkSendEmailOptions.md)
 - [CreateDomainOptions](docs/Model/CreateDomainOptions.md)
 - [CreateWebhookOptions](docs/Model/CreateWebhookOptions.md)
 - [DomainPlusVerificationRecordsAndStatus](docs/Model/DomainPlusVerificationRecordsAndStatus.md)
 - [DomainPreview](docs/Model/DomainPreview.md)
 - [Email](docs/Model/Email.md)
 - [EmailAnalysis](docs/Model/EmailAnalysis.md)
 - [EmailPreview](docs/Model/EmailPreview.md)
 - [EmailProjection](docs/Model/EmailProjection.md)
 - [ForwardEmailOptions](docs/Model/ForwardEmailOptions.md)
 - [Inbox](docs/Model/Inbox.md)
 - [MatchOption](docs/Model/MatchOption.md)
 - [MatchOptions](docs/Model/MatchOptions.md)
 - [PageEmailProjection](docs/Model/PageEmailProjection.md)
 - [Pageable](docs/Model/Pageable.md)
 - [SendEmailOptions](docs/Model/SendEmailOptions.md)
 - [Sort](docs/Model/Sort.md)
 - [UploadAttachmentOptions](docs/Model/UploadAttachmentOptions.md)
 - [Webhook](docs/Model/Webhook.md)


## Documentation For Authorization


## API_KEY

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Author

contact@mailslurp.dev


