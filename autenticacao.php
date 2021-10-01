<?php

    namespace Project\Database\Service;

    use Project\Database\Model\Functionary\Diretor;
    use Project\Database\Model\Functionary\Gerente;
    use Project\Database\Model\Account\Titular;
    use Project\Database\Model\{Cpf, Endereco};

    require_once 'autoload.php';

    $autenticador = new Autenticador();
    $novoDiretor = new Diretor('João Silva', new Cpf('159.456.357-10'), 1000);
    $novoGerente = new Gerente('Ana Cardoso', new Cpf('789.456.123-10'), 1500);
    $novoTitular = new Titular(new Cpf('789.456.123-10'), 'Ana Cardoso', new Endereco('Teste cidade', 'Teste bairro', 'Teste rua', '1234'));

     echo $autenticador->tentarLogin($novoDiretor, '4321') . PHP_EOL;
     echo $autenticador->tentarLogin($novoGerente, '1234') . PHP_EOL;
     echo $autenticador->tentarLogin($novoTitular, 'dcba') . PHP_EOL;
?>