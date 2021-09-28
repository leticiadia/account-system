<?php

    namespace Project\Database\Model;

    class Endereco 
    {
        private string $cidade;
        private string $bairro;
        private string $rua;
        // Caso o número não precise fazer nenhum tipo de cálculo , não preciso colocar ele como int, apenas como string...
        private string $numero;

        public function __construct(string $cidade, string $bairro, string $rua, string $numero)
        {
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua = $rua;
            $this->numero = $numero;
        }


        public function recuperarCidade(): string
        {
            return $this->cidade;
        }

        public function recuperarBairro(): string
        {
            return $this->bairro;
        }

        public function recuperarRua(): string 
        {
            return $this->rua;
        }

        public function recuperarNumero(): string 
        {
            return $this->numero;
        }

    }
?>