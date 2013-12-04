<?php

return CTXParser\CTX\AccountInfoList::__set_state(array(
   'accountInfo' => 
  array (
    0 => 
    CTXParser\CTX\AccountInfoList\AccountInfo::__set_state(array(
       'bankCode' => '42050001',
       'bankName' => 'Sparkasse Gelsenkirchen',
       'accountNumber' => '4149030305013196',
       'accountName' => 'Standard Privat',
       'owner' => 'Nordmann',
       'currency' => 'EUR',
       'accountType' => 0,
       'accountId' => 8,
       'statusList' => NULL,
       'transactionList' => NULL,
       'notedTransactionList' => NULL,
    )),
    1 => 
    CTXParser\CTX\AccountInfoList\AccountInfo::__set_state(array(
       'bankCode' => '42050001',
       'bankName' => 'Sparkasse Gelsenkirchen',
       'accountNumber' => '123456789',
       'accountName' => 'Sichteinlagen',
       'owner' => 'Nordmann',
       'currency' => 'EUR',
       'accountType' => 0,
       'accountId' => 6,
       'statusList' => 
      array (
        0 => 
        CTXParser\CTX\AccountInfoList\AccountInfo\StatusList::__set_state(array(
           'status' => 
          array (
            0 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status::__set_state(array(
               'time' => 1312891200,
               'notedBalance' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance::__set_state(array(
                   'value' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance\Value::__set_state(array(
                       'value' => 10655.21,
                       'currency' => 'EUR',
                    )),
                  ),
                   'time' => 1312891200,
                )),
              ),
            )),
          ),
        )),
      ),
       'transactionList' => 
      array (
        0 => 
        CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList::__set_state(array(
           'transaction' => 
          array (
            0 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction::__set_state(array(
               'localBankCode' => '42050001',
               'localAccountNumber' => '272160342',
               'localName' => 'Nordmann',
               'remoteBankCode' => '30050000',
               'remoteAccountNumber' => '1609114',
               'remoteName' => 'ARAL BOCHUM WITTENER STRAßE',
               'uniqueId' => 0,
               'idForApplication' => 0,
               'groupId' => 0,
               'valutaDate' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\ValutaDate::__set_state(array(
                   'date' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\ValutaDate\Date::__set_state(array(
                       'day' => 14,
                       'month' => 8,
                       'year' => 2012,
                    )),
                  ),
                   'inUtc' => 1,
                   'time' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\ValutaDate\Time::__set_state(array(
                       'hour' => 12,
                       'min' => 0,
                       'sec' => 0,
                    )),
                  ),
                )),
              ),
               'date' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\Date::__set_state(array(
                   'date' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\Date\Date::__set_state(array(
                       'day' => 14,
                       'month' => 8,
                       'year' => 2012,
                    )),
                  ),
                   'inUtc' => 1,
                   'time' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\Date\Time::__set_state(array(
                       'hour' => 12,
                       'min' => 0,
                       'sec' => 0,
                    )),
                  ),
                )),
              ),
               'value' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction\Value::__set_state(array(
                   'value' => -76.99,
                   'currency' => 'EUR',
                )),
              ),
               'textKey' => 0,
               'textKeyExt' => 0,
               'transactionKey' => '011',
               'customerReference' => NULL,
               'bankReference' => NULL,
               'transactionCode' => 5,
               'transactionText' => 'LASTSCHRIFT',
               'primanota' => '9250',
               'purpose' => 
              array (
                0 => '100817583384343121214091200',
                1 => 'OLV71027569 10.08 17.58 ME3',
              ),
               'period' => 'unknown',
               'cycle' => 0,
               'executionDay' => 0,
               'type' => 'unknown',
               'subType' => 'unknown',
               'status' => 'unknown',
               'charge' => 'unknown',
               'endToEndReference' => NULL,
            )),
          ),
        )),
      ),
       'notedTransactionList' => NULL,
    )),
  ),
));
