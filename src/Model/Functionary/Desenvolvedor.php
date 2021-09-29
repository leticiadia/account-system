<?php

    namespace Project\Database\Model\Funcionary;

    use Project\Database\Model\Funcionary\Funcionario;

    class Desenvolvedor extends Funcionario
    {
        public function sobeDeNivel()
        {
            $this->recebeAumento($this->recuperarSalario() * 0.75);
        }
    }
?>