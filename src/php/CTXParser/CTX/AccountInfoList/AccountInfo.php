<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\CTX\AccountInfoList;

use CTXParser\Struct;

/**
 * Struct class
 */
class AccountInfo extends Struct
{
    public $bankCode;
    public $bankName;
    public $accountNumber;
    public $accountName;
    public $owner;
    public $currency;
    public $accountType;
    public $accountId;
    public $statusList;
    public $transactionList;
}
