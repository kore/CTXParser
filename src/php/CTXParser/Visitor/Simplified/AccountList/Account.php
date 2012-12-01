<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Visitor\Simplified\AccountList;

use CTXParser\Struct;

/**
 * Visitor returning a simplified version of the transactions data
 */
class Account extends Struct
{
    public $bankCode;
    public $bankName;
    public $accountNumber;
    public $accountName;
    public $owner;
    public $status;
    public $transactions = array();
    public $notedTransactions = array();
}
