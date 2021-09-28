<?php
    
    class Titular extends Pessoa
    {
        private Endereco $endereco;

        public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
        {
            parent::__construct($nome, $cpf);
            $this->endereco = $endereco;
        }  

        public function recuperarCpfTitular(): string
        {
           return $this->cpf->recuperarCpf();
        }

        public function recuperarEndereco(): Endereco
        {
            return $this->endereco;
        }
    }

?>