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

class AccountingPeriodSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allLocked;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $allowNonGlChanges;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $apLocked;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $arLocked;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $closed;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $closedOnDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
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
    public $isAdjust;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isQuarter;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isYear;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $payrollLocked;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $periodName;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    static $paramtypesmap = array(
        "allLocked" => "SearchBooleanField",
        "allowNonGlChanges" => "SearchBooleanField",
        "apLocked" => "SearchBooleanField",
        "arLocked" => "SearchBooleanField",
        "closed" => "SearchBooleanField",
        "closedOnDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isAdjust" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isQuarter" => "SearchBooleanField",
        "isYear" => "SearchBooleanField",
        "parent" => "SearchMultiSelectField",
        "payrollLocked" => "SearchBooleanField",
        "periodName" => "SearchStringField",
        "startDate" => "SearchDateField",
    );
}
