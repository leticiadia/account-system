<?php

require_once 'src/Conta.php';
require_once 'src/Cpf.php';
require_once 'src/Titular.php';
require_once 'src/Endereco.php';

$endereco = new Endereco('Rio de Janeiro', 'Fluminense', 'Minha rua', '78C');
$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias',  $endereco));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Titular(new Cpf('987.654.321-10'), 'Patricia',  $endereco);
var_dump($segundaConta);

$outra = new Conta(new Titular(new Cpf('123.456.789-10'), 'Ana',  $endereco));
unset($segundaConta);
echo Conta::recuperarNumeroDeContas();
