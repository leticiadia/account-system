<?php

    namespace Project\Database\Model\Functionary;

    class Diretor extends Funcionario
    {
        public function calculaBonificacao(): float
        {
            return $this->recuperarSalario() * 2;
        }

        public function podeAutenticar(string $senha): bool
        {
            return $senha === '1234';
        }
    }
?>