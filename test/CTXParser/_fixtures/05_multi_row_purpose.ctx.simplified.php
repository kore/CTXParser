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
           'bankCode' => '43250030',
           'accountNumber' => '14007793',
           'name' => 
          array (
            0 => 'DSC WANNE-EICKEL BADMINTON',
            1 => 'E.V',
          ),
           'date' => 1317729600,
           'value' => -21,
           'currency' => 'EUR',
           'type' => 'LASTSCHRIFT',
           'text' => 
          array (
            0 => 'BEITRAG 00272 DSC WANNE-EIC',
            1 => 'NORDMANN KORE',
          ),
        )),
      ),
       'notedTransactions' => 
      array (
      ),
    )),
  ),
));
