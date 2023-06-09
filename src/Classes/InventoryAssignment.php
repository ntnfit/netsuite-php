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

class InventoryAssignment {
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $issueInventoryNumber;
    /**
     * @var string
     */
    public $receiptInventoryNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $binNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $toBinNumber;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var float
     */
    public $quantityAvailable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inventoryStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $toInventoryStatus;
    static $paramtypesmap = array(
        "internalId" => "string",
        "issueInventoryNumber" => "RecordRef",
        "receiptInventoryNumber" => "string",
        "binNumber" => "RecordRef",
        "toBinNumber" => "RecordRef",
        "quantity" => "float",
        "expirationDate" => "dateTime",
        "quantityAvailable" => "float",
        "inventoryStatus" => "RecordRef",
        "toInventoryStatus" => "RecordRef",
    );
}
