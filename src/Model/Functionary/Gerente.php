<?php

    namespace Project\Database\Model\Funcionary;

    class Gerente extends Funcionario
    {
        public function calculaBonificacao(): float
        {
            return $this->recuperarSalario();
        }
    }
?>