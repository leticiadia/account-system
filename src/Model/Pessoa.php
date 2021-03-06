<?php

    namespace Project\Database\Model;

     abstract class Pessoa 
     {
        protected string $nome;
        private Cpf $cpf;


        public function __construct(string $nome, Cpf $cpf)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->validarNome($nome);
        }

        public function recuperarNome(): string
        {
            return $this->nome;
        }

        public function recuperarCpf(): string
        {
            return $this->cpf->recuperarCpf();
        }

        protected function validarNome(string $nomeTitular): void
        {
            if (strlen($nomeTitular) < 5) {
                echo "Nome precisa ter pelo menos 5 caracteres";
                exit();
            }
        }

        use AcessoPropriedades;
    }
?>