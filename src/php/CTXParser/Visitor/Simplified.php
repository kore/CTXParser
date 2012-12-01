<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Visitor;

use CTXParser\Visitor;
use CTXParser\CTX\AccountInfoList;

/**
 * Visitor returning a simplified version of the transactions data
 */
class Simplified extends Visitor
{
    /**
     * Maximum number of transactions to list
     *
     * @var int
     */
    protected $transactions;

    /**
     * COnstruct from maximum transactin count
     *
     * @param int $transactions
     * @return void
     */
    public function __construct($transactions = 5)
    {
        $this->transactions = $transactions;
    }

    /**
     * Visit account info list
     *
     * @param AccountInfoList $account
     * @return mixed
     */
    public function visit(AccountInfoList $accountList)
    {
        $list = new Simplified\AccountList();
        foreach ($accountList->accountInfo as $accountInfo) {
            $list->accounts[] = $this->visitAccount($accountInfo);
        }

        return $list;
    }

    protected function visitAccount(AccountInfoList\AccountInfo $accountInfo)
    {
        $account = new Simplified\AccountList\Account();
        $account->bankCode      = $accountInfo->bankCode;
        $account->bankName      = $accountInfo->bankName;
        $account->accountNumber = $accountInfo->accountNumber;
        $account->accountName   = $accountInfo->accountName;
        $account->owner         = $accountInfo->owner;

        if ($accountInfo->statusList) {
            $lastStatus = end($accountInfo->statusList[0]->status);
            $account->status = $this->visitStatus($lastStatus);
        }

        if ($accountInfo->transactionList) {
            foreach ($accountInfo->transactionList[0]->transaction as $transaction) {
                $account->transactions[] = $this->visitTransaction($transaction);
            }

            usort(
                $account->transactions,
                function ($a, $b) {
                    return $b->date - $a->date;
                }
            );
            $account->transactions = array_slice(
                $account->transactions,
                0,
                $this->transactions
            );
        }

        if ($accountInfo->notedTransactionList) {
            foreach ($accountInfo->notedTransactionList[0]->notedTransaction as $notedTransaction) {
                $account->notedTransactions[] = $this->visitTransaction($notedTransaction);
            }
        }

        return $account;
    }

    protected function visitStatus(AccountInfoList\AccountInfo\StatusList\Status $status)
    {
        $new = new Simplified\AccountList\Account\Status();
        $new->time     = $status->time;
        $new->currency = $status->notedBalance[0]->value[0]->currency;
        $new->value    = $status->notedBalance[0]->value[0]->value;
        return $new;
    }

    protected function visitTransaction($transaction)
    {
        $new = new Simplified\AccountList\Account\Transaction();
        $new->bankCode      = $transaction->remoteBankCode;
        $new->accountNumber = $transaction->remoteAccountNumber;
        $new->name          = $transaction->remoteName;
        $new->value         = $transaction->value[0]->value;
        $new->currency      = $transaction->value[0]->currency;
        $new->type          = $transaction->transactionText;
        $new->text          = (array) $transaction->purpose;
        $new->date          = gmmktime(
           $transaction->date[0]->time[0]->hour,
           $transaction->date[0]->time[0]->min,
           $transaction->date[0]->time[0]->sec,
           $transaction->date[0]->date[0]->month,
           $transaction->date[0]->date[0]->day,
           $transaction->date[0]->date[0]->year
        );
        return $new;
    }
}
