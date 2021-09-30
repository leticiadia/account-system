<?php

    namespace Project\Database\Model;

    trait AcessoPropriedades 
    {
        public function __get($nomeDoAtributo): string
        {
            $metodo = 'recuperar' . ucfirst($nomeDoAtributo);
            return $this->$metodo();            
        }
    }
?>