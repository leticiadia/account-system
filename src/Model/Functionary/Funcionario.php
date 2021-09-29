<?php

    namespace Project\Database\Model\Funcionary;

    use Project\Database\Model\{Pessoa, Cpf};

     abstract class Funcionario extends Pessoa
     {

        private float $salario;

        public function __construct(string $nome, Cpf $cpf, float $salario)
        {
            parent::__construct($nome, $cpf);
            $this->salario = $salario;
        }
        
        public function alterarNome(string $nome): void
        {
            $this->validaNomeTitular($nome);
            $this->nome = $nome;
        }

        public function recuperarSalario(): float
        {
            return $this->salario;
        }

        public function calculaBonificacao(): float
        {
            return $this->salario * 0.1;
        }

        public function recebeAumento(float $valorAumento): void
        {
            if($valorAumento < 0) {
                echo "Aumento deve ser positivo";
                return;
            }

            $this->salrio += $valorAumento;
        }
     }
?>

