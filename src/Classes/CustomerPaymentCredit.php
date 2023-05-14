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

class CustomerPaymentCredit {
    /**
     * @var boolean
     */
    public $apply;
    /**
     * @var integer
     */
    public $doc;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var string
     */
    public $creditDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var string
     */
    public $appliedTo;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $due;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var float
     */
    public $amount;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "creditDate" => "dateTime",
        "type" => "string",
        "refNum" => "string",
        "appliedTo" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "amount" => "float",
    );
}
