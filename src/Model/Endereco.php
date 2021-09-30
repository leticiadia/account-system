<?php

    namespace Project\Database\Model;

    final class Endereco 
    {
        private string $cidade;
        private string $bairro;
        private string $rua;
        // Caso o número não precise fazer nenhum tipo de cálculo , não preciso colocar ele como int, apenas como string...
        private string $numero;

        public function __construct(string $rua, string $numero, string $bairro, string $cidade)
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

        public function __toString(): string
        {
           return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
        }

        public function __get($nomeDoAtributo): string
        {
            $metodo = 'recuperar' . ucfirst($nomeDoAtributo);
            return $this->$metodo();            
        }

    }
?>