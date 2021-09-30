<?php

    namespace Project\Database\Service;

    use Project\Database\Model\Autenticavel;

    class Autenticador
    {
        public function tentarLogin(Autenticavel $autenticavel, string $senha): void
        {
            if($autenticavel->podeAutenticar($senha)){
                echo "Ok. Usuário logoado no sistema";
            } else {
                echo "Ops. Senha incorreta.";
            }
        }
    }
?>