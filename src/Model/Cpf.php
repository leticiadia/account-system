<?php

    namespace Project\Database\Model;
    
    final class Cpf 
    {
        private string $cpf;

        public function __construct(string $cpf)
        {
            $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
                'options' => ['regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/']
            ]);

            if($cpf === false){
                echo "Cpf inválido";
                exit();
            }

            $this->cpf = $cpf;
        }

        public function recuperarCpf(): string
        {
            return $this->cpf;
        }
    }
?>