<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ntn/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class GiftCertificateSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amountAvailableBilled;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amountRemaining;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $email;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $expirationDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $giftCertCode;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $incomeAccount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isActive;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $liabilityAccount;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $originalAmount;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $purchaseDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $sender;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "amountAvailableBilled" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "email" => "SearchStringField",
        "expirationDate" => "SearchDateField",
        "giftCertCode" => "SearchStringField",
        "incomeAccount" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isActive" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "liabilityAccount" => "SearchMultiSelectField",
        "message" => "SearchStringField",
        "name" => "SearchStringField",
        "originalAmount" => "SearchDoubleField",
        "purchaseDate" => "SearchDateField",
        "sender" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
