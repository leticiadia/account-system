<?php

    namespace Project\Database\Model;


     interface Autenticavel
     {
        public function podeAutenticar(string $senha): bool;
     }

?>