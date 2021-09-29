<?php

    namespace Project\Database\Service;

    use Project\Database\Model\Functionary\Diretor;
    use Project\Database\Model\{Cpf};

    require_once 'autoload.php';

    $autenticador = new Autenticador();
    $umDiretor = new Diretor('João Silva', new Cpf('159.456.357-10'), 100000);

    $autenticador->tentarLogin($umDiretor, '1234');
?>