<?php

    use Project\Database\Model\Endereco;

    require_once 'autoload.php';

    $umNovoEndereco = new Endereco('Uma rua aí', '84B', 'Um bairro', 'Rio de Janeito');
    $umOutroEndereco = new Endereco('Uma outra rua', '15C', 'Um outro bairro', 'Petrópolis');


    echo $umNovoEndereco->bairro . PHP_EOL;
    echo $umOutroEndereco->cidade;
?>