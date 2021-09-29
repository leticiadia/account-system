<?php

    namespace Project\Database\Model\Funcionary;

    class Diretor extends Funcionario
    {
        public function calculaBonificacao(): float
        {
            return $this->recuperarSalario() * 2;
        }

        public function poeAutenticar(string $senha): bool
        {
            return $senha === '1234';
        }
    }
?>