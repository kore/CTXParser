<?php

return CTXParser\Visitor\Simplified\AccountList::__set_state(array(
   'accounts' => 
  array (
    0 => 
    CTXParser\Visitor\Simplified\AccountList\Account::__set_state(array(
       'bankCode' => '42050001',
       'bankName' => 'Sparkasse Gelsenkirchen',
       'accountNumber' => '4149030305013196',
       'accountName' => 'Standard Privat',
       'owner' => 'Nordmann',
       'status' => NULL,
       'transactions' => 
      array (
      ),
       'notedTransactions' => 
      array (
      ),
    )),
    1 => 
    CTXParser\Visitor\Simplified\AccountList\Account::__set_state(array(
       'bankCode' => '42050001',
       'bankName' => 'Sparkasse Gelsenkirchen',
       'accountNumber' => '123456789',
       'accountName' => 'Sichteinlagen',
       'owner' => 'Nordmann',
       'status' => 
      CTXParser\Visitor\Simplified\AccountList\Account\Status::__set_state(array(
         'time' => 1313409600,
         'currency' => 'EUR',
         'value' => 10526.77,
      )),
       'transactions' => 
      array (
        0 => 
        CTXParser\Visitor\Simplified\AccountList\Account\Transaction::__set_state(array(
           'bankCode' => '30050000',
           'accountNumber' => '1583319',
           'name' => 'REWE MARKT FEIERTAG OHG',
           'date' => 1313064000,
           'value' => -123.44,
           'currency' => 'EUR',
           'type' => 'SONSTIGER EINZUG',
           'text' => 
          array (
            0 => 'EC 65159373 100811123847OC3',
          ),
        )),
        1 => 
        CTXParser\Visitor\Simplified\AccountList\Account\Transaction::__set_state(array(
           'bankCode' => '30030880',
           'accountNumber' => '1938073003',
           'name' => 'AMAZON SERVICES EUROPE SA',
           'date' => 1312891200,
           'value' => -23.5,
           'currency' => 'EUR',
           'type' => 'LASTSCHRIFT',
           'text' => 
          array (
            0 => '1627550610015706',
          ),
        )),
        2 => 
        CTXParser\Visitor\Simplified\AccountList\Account\Transaction::__set_state(array(
           'bankCode' => '30030880',
           'accountNumber' => '1938073003',
           'name' => 'AMAZON SERVICES EUROPE SA',
           'date' => 1312891200,
           'value' => -6.89,
           'currency' => 'EUR',
           'type' => 'LASTSCHRIFT',
           'text' => 
          array (
            0 => '2091190764468248',
          ),
        )),
      ),
       'notedTransactions' => 
      array (
        0 => 
        CTXParser\Visitor\Simplified\AccountList\Account\Transaction::__set_state(array(
           'bankCode' => NULL,
           'accountNumber' => NULL,
           'name' => NULL,
           'date' => 1353326400,
           'value' => -33,
           'currency' => 'EUR',
           'type' => 'SONSTIGER EINZUG',
           'text' => 
          array (
            0 => 'EC 68067326 191112133628 3',
          ),
        )),
      ),
    )),
  ),
));
