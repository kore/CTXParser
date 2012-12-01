<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Visitor\Simplified\AccountList\Account;

use CTXParser\Struct;

/**
 * Visitor returning a simplified version of the transactions data
 */
class Transaction extends Struct
{
    public $bankCode;
    public $accountNumber;
    public $name;
    public $date;
    public $value;
    public $currency;
    public $type;
    public $text;
}
