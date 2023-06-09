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

class EntityType {
    static $paramtypesmap = array(
    );
    const _company = "_company";
    const _contact = "_contact";
    const _customer = "_customer";
    const _employee = "_employee";
    const _genericResource = "_genericResource";
    const _group = "_group";
    const _internal = "_internal";
    const _job = "_job";
    const _otherName = "_otherName";
    const _partner = "_partner";
    const _resourceGroup = "_resourceGroup";
    const _vendor = "_vendor";
}
