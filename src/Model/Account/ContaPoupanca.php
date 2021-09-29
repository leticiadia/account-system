<?php

    namespace Project\Database\Model\Account;

    class ContaPoupanca extends Conta
    {
       public function percentualTarifa(): float
       {
           return 0.03;
       }
    }
?>