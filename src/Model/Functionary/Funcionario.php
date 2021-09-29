<?php

    namespace Project\Database\Model\Funcionary;

    use Project\Database\Model\{Pessoa, Cpf};

     abstract class Funcionario extends Pessoa
     {
        private string $cargo;
        private float $salario;

        public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
        {
            parent::__construct($nome, $cpf);
            $this->cargo = $cargo;
            $this->salario = $salario;
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

