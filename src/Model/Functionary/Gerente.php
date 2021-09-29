<?php

    namespace Project\Database\Model\Functionary;

    class Gerente extends Funcionario
    {
        public function calculaBonificacao(): float
        {
            return $this->recuperarSalario();
        }
    }
?>