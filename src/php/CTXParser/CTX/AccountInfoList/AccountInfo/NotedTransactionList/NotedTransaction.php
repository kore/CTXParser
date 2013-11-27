<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList;

use CTXParser\Struct;

/**
 * Struct class
 */
class NotedTransaction extends Struct
{
    public $localBankCode;
    public $localAccountNumber;
    public $localName;
    public $remoteBankCode;
    public $remoteAccountNumber;
    public $remoteName;
    public $uniqueId;
    public $idForApplication;
    public $groupId;
    public $valutaDate;
    public $date;
    public $value;
    public $textKey;
    public $textKeyExt;
    public $transactionKey;
    public $customerReference;
    public $bankReference;
    public $transactionCode;
    public $transactionText;
    public $primanota;
    public $purpose;
    public $period;
    public $cycle;
    public $executionDay;
    public $type;
    public $subType;
    public $status;
    public $charge;
    public $endToEndReference;
}
