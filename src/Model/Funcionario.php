<?php

    namespace Project\Database\Model;

    class Funcionario extends Pessoa
    {
        private string $cargo;

        public function __construct(string $nome, Cpf $cpf, string $cargo)
        {
            parent::__construct($nome, $cpf);
            $this->cargo = $cargo;
        }

        public function recuperarCargo(): string
        {
            return $this->cargo;
        }

        public function alterarNome(string $nome): void
        {
            $this->validaNomeTitular($nome);
            $this->nome = $nome;
        }
    }
?>

