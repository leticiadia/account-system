<?php
    class Titular
    {
        private Cpf $cpf;
        private string $nome;
        private Endereco $endereco;

        public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
        {
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->validaNomeTitular($nome);
            $this->endereco = $endereco;
        }

        public function recuperarNome(): string
        {
            return $this->nome;
        }

        public function recuperarCpfTitular(): string
        {
           return $this->cpf->recuperarCpf();
        }

        private function validaNomeTitular(string $nomeTitular): void
        {
            if (strlen($nomeTitular) < 5) {
                echo "Nome precisa ter pelo menos 5 caracteres";
                exit();
            }
        }
    }

?>