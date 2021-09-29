<?php

    namespace Project\Database\Model\Functionary;

    class EditorVideo extends Funcionario
    {
        public function calculaBonificacao(): float
        {
            return 600;
        }
    }

?>