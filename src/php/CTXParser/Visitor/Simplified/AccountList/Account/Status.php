<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Visitor\Simplified\AccountList\Account;

use CTXParser\Struct;

/**
 * Visitor returning a simplified version of the transactions data
 */
class Status extends Struct
{
    public $time;
    public $currency;
    public $value;
}
