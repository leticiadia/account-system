<?php

    namespace Project\Database\Model\Functionary;

    use Project\Database\Model\Autenticavel;

    class Diretor extends Funcionario implements Autenticavel
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