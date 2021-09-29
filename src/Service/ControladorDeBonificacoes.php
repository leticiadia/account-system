<?php

    namespace Project\Database\Service;

    use Project\Database\Model\Functionary\Funcionario;
    // use Project\Database\Model\Functionary\Funcionario;

    class ControladorDeBonificacoes
    {
        private $totalBonificacoes = 0;

        public function adicionarBonificacao(Funcionario $funcionario)
        {
            $this->totalBonificacoes += $funcionario->calculaBonificacao();
        }

        public function recuperarTotal(): float
        {
            return $this->totalBonificacoes;
        }
    }
?>