<?php
    class Titular
    {
        private Cpf $cpfTeste;
        private string $nome;

        public function __construct(Cpf $cpfTeste, string $nome)
        {
            $this->cpfTeste = $cpfTeste;
            $this->nome = $nome;
            $this->validaNomeTitular($nome);
        }

        public function recuperarNome(): string
        {
            return $this->nome;
        }

        public function recuperarCpfTitular(): string
        {
           return $this->cpfTeste->recuperarCpf();
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