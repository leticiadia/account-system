<?php

    namespace Project\Database\Model\Account;

    class ContaCorrente extends Conta
    {
        public function percentualTarifa(): float
        {
            return 0.05;
        }

        public function transfere(float $valorATransferir, Conta $contaDestino): void
        {
            if ($valorATransferir > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }

            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }
?>