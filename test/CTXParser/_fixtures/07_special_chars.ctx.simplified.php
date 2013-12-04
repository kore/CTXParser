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
         'time' => 1312891200,
         'currency' => 'EUR',
         'value' => 10655.21,
      )),
       'transactions' => 
      array (
        0 => 
        CTXParser\Visitor\Simplified\AccountList\Account\Transaction::__set_state(array(
           'bankCode' => '30050000',
           'accountNumber' => '1609114',
           'name' => 'ARAL BOCHUM WITTENER STRAßE',
           'date' => 1344942000,
           'value' => -76.99,
           'currency' => 'EUR',
           'type' => 'LASTSCHRIFT',
           'text' => 
          array (
            0 => '100817583384343121214091200',
            1 => 'OLV71027569 10.08 17.58 ME3',
          ),
        )),
      ),
       'notedTransactions' => 
      array (
      ),
    )),
  ),
));
