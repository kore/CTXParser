<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Visitor\Simplified;

use CTXParser\Struct;

/**
 * Visitor returning a simplified version of the transactions data
 */
class AccountList extends Struct
{
    public $accounts = array();
}
