<?php
/**
 * EmailControllerApiTest
 * PHP version 5
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.   ## Resources - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://www.mailslurp.com/docs/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace MailSlurp;

use \MailSlurp\Configuration;
use \MailSlurp\ApiException;
use \MailSlurp\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * EmailControllerApiTest Class Doc Comment
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailControllerApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for deleteAllEmails
     *
     * Delete all emails.
     *
     */
    public function testDeleteAllEmails()
    {
    }

    /**
     * Test case for deleteEmail
     *
     * Delete an email.
     *
     */
    public function testDeleteEmail()
    {
    }

    /**
     * Test case for downloadAttachment
     *
     * Get email attachment bytes. If you have trouble with byte responses try the `downloadAttachmentBase64` response endpoints..
     *
     */
    public function testDownloadAttachment()
    {
    }

    /**
     * Test case for downloadAttachmentBase64
     *
     * Get email attachment as base64 encoded string (alternative to binary responses).
     *
     */
    public function testDownloadAttachmentBase64()
    {
    }

    /**
     * Test case for forwardEmail
     *
     * Forward email.
     *
     */
    public function testForwardEmail()
    {
    }

    /**
     * Test case for getAttachmentMetaData
     *
     * Get email attachment metadata.
     *
     */
    public function testGetAttachmentMetaData()
    {
    }

    /**
     * Test case for getAttachments
     *
     * Get all email attachment metadata.
     *
     */
    public function testGetAttachments()
    {
    }

    /**
     * Test case for getEmail
     *
     * Get email content.
     *
     */
    public function testGetEmail()
    {
    }

    /**
     * Test case for getEmailContentMatch
     *
     * Get email content regex pattern match results. Runs regex against email body and returns match groups..
     *
     */
    public function testGetEmailContentMatch()
    {
    }

    /**
     * Test case for getEmailHTML
     *
     * Get email content as HTML.
     *
     */
    public function testGetEmailHTML()
    {
    }

    /**
     * Test case for getEmailHTMLQuery
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailHTMLQuery()
    {
    }

    /**
     * Test case for getEmailTextLines
     *
     * Parse and return text from an email, stripping HTML and decoding encoded characters.
     *
     */
    public function testGetEmailTextLines()
    {
    }

    /**
     * Test case for getEmailsPaginated
     *
     * Get all emails.
     *
     */
    public function testGetEmailsPaginated()
    {
    }

    /**
     * Test case for getRawEmailContents
     *
     * Get raw email string.
     *
     */
    public function testGetRawEmailContents()
    {
    }

    /**
     * Test case for getRawEmailJson
     *
     * Get raw email in JSON.
     *
     */
    public function testGetRawEmailJson()
    {
    }

    /**
     * Test case for getUnreadEmailCount
     *
     * Get unread email count.
     *
     */
    public function testGetUnreadEmailCount()
    {
    }

    /**
     * Test case for replyToEmail
     *
     * Reply to an email.
     *
     */
    public function testReplyToEmail()
    {
    }

    /**
     * Test case for validateEmail
     *
     * Validate email.
     *
     */
    public function testValidateEmail()
    {
    }
}
