<?php

    namespace Project\Database\Service;

    use Project\Database\Model\Functionary\Diretor;

    class Autenticador
    {
        public function tentarLogin(Diretor $diretor, string $senha): void
        {
            if($diretor->podeAutenticar($senha)){
                echo "Ok. Usuário logoado no sistema";
            } else {
                echo "Ops. Senha incorreta.";
            }
        }
    }
?>