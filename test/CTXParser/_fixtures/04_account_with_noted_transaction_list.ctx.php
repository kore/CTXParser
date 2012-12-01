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
                       'value' => '1065521%2F100',
                       'currency' => 'EUR',
                    )),
                  ),
                   'time' => 1312891200,
                )),
              ),
            )),
            1 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status::__set_state(array(
               'time' => 1313064000,
               'notedBalance' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance::__set_state(array(
                   'value' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance\Value::__set_state(array(
                       'value' => '1053177%2F100',
                       'currency' => 'EUR',
                    )),
                  ),
                   'time' => 1313064000,
                )),
              ),
            )),
            2 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status::__set_state(array(
               'time' => 1313409600,
               'notedBalance' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance::__set_state(array(
                   'value' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\StatusList\Status\NotedBalance\Value::__set_state(array(
                       'value' => '1052677%2F100',
                       'currency' => 'EUR',
                    )),
                  ),
                   'time' => 1313409600,
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
               'localAccountNumber' => '123456789',
               'localName' => 'Nordmann',
               'remoteBankCode' => '30030880',
               'remoteAccountNumber' => '1938073003',
               'remoteName' => 'AMAZON SERVICES EUROPE SA',
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
                       'day' => 9,
                       'month' => 8,
                       'year' => 2011,
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
                       'day' => 9,
                       'month' => 8,
                       'year' => 2011,
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
                   'value' => '-689%2F100',
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
               'primanota' => '9262',
               'purpose' => '2091190764468248',
               'period' => 'unknown',
               'cycle' => 0,
               'executionDay' => 0,
               'type' => 'unknown',
               'subType' => 'unknown',
               'status' => 'unknown',
               'charge' => 'unknown',
            )),
            1 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction::__set_state(array(
               'localBankCode' => '42050001',
               'localAccountNumber' => '123456789',
               'localName' => 'Nordmann',
               'remoteBankCode' => '30030880',
               'remoteAccountNumber' => '1938073003',
               'remoteName' => 'AMAZON SERVICES EUROPE SA',
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
                       'day' => 9,
                       'month' => 8,
                       'year' => 2011,
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
                       'day' => 9,
                       'month' => 8,
                       'year' => 2011,
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
                   'value' => '-2350%2F100',
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
               'primanota' => '9262',
               'purpose' => '1627550610015706',
               'period' => 'unknown',
               'cycle' => 0,
               'executionDay' => 0,
               'type' => 'unknown',
               'subType' => 'unknown',
               'status' => 'unknown',
               'charge' => 'unknown',
            )),
            2 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\TransactionList\Transaction::__set_state(array(
               'localBankCode' => '42050001',
               'localAccountNumber' => '123456789',
               'localName' => 'Nordmann',
               'remoteBankCode' => '30050000',
               'remoteAccountNumber' => '1583319',
               'remoteName' => 'REWE MARKT FEIERTAG OHG',
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
                       'day' => 11,
                       'month' => 8,
                       'year' => 2011,
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
                       'day' => 11,
                       'month' => 8,
                       'year' => 2011,
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
                   'value' => '-12344%2F100',
                   'currency' => 'EUR',
                )),
              ),
               'textKey' => 0,
               'textKeyExt' => 11,
               'transactionKey' => '037',
               'customerReference' => NULL,
               'bankReference' => '100000254900',
               'transactionCode' => 6,
               'transactionText' => 'SONSTIGER EINZUG',
               'primanota' => '9250',
               'purpose' => 'EC 65159373 100811123847OC3',
               'period' => 'unknown',
               'cycle' => 0,
               'executionDay' => 0,
               'type' => 'unknown',
               'subType' => 'unknown',
               'status' => 'unknown',
               'charge' => 'unknown',
            )),
          ),
        )),
      ),
       'notedTransactionList' => 
      array (
        0 => 
        CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList::__set_state(array(
           'notedTransaction' => 
          array (
            0 => 
            CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction::__set_state(array(
               'localBankCode' => '42050001',
               'localAccountNumber' => '123456789',
               'localName' => 'Nordmann',
               'remoteBankCode' => NULL,
               'remoteAccountNumber' => NULL,
               'remoteName' => NULL,
               'uniqueId' => 0,
               'idForApplication' => 0,
               'groupId' => 0,
               'valutaDate' => 
              array (
                0 => 
                CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\ValutaDate::__set_state(array(
                   'date' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\ValutaDate\Date::__set_state(array(
                       'day' => 19,
                       'month' => 11,
                       'year' => 2012,
                    )),
                  ),
                   'inUtc' => 1,
                   'time' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\ValutaDate\Time::__set_state(array(
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
                CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\Date::__set_state(array(
                   'date' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\Date\Date::__set_state(array(
                       'day' => 19,
                       'month' => 11,
                       'year' => 2012,
                    )),
                  ),
                   'inUtc' => 1,
                   'time' => 
                  array (
                    0 => 
                    CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\Date\Time::__set_state(array(
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
                CTXParser\CTX\AccountInfoList\AccountInfo\NotedTransactionList\NotedTransaction\Value::__set_state(array(
                   'value' => '-3300%2F100',
                   'currency' => 'EUR',
                )),
              ),
               'textKey' => 0,
               'textKeyExt' => 11,
               'transactionKey' => '037',
               'customerReference' => '161200030',
               'bankReference' => '100000003337',
               'transactionCode' => 6,
               'transactionText' => 'SONSTIGER EINZUG',
               'primanota' => NULL,
               'purpose' => 'EC 68067326 191112133628 3',
               'period' => 'unknown',
               'cycle' => 0,
               'executionDay' => 0,
               'type' => 'unknown',
               'subType' => 'unknown',
               'status' => 'unknown',
               'charge' => 'unknown',
            )),
          ),
        )),
      ),
    )),
  ),
));