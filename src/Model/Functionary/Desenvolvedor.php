<?php

    namespace Project\Database\Model\Functionary;

    use Project\Database\Model\Functionary\Funcionario;

    class Desenvolvedor extends Funcionario
    {
        public function sobeDeNivel()
        {
            $this->recebeAumento($this->recuperarSalario() * 0.75);
        }

        public function calculaBonificacao(): float
        {
            return 500;
        }
    }
?>