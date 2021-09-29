<?php

    use Project\Database\Model\Account\Conta;
    use Project\Database\Model\Account\ContaCorrente;
    use Project\Database\Model\Account\ContaPoupanca;
    use Project\Database\Model\Account\Titular;
    use Project\Database\Model\Cpf;
    use Project\Database\Model\Endereco;

    require_once 'autoload.php';

    $conta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Felipe Dias', new Endereco('Petrópolis', 'Bairro Teste', 'Rua lá', 37)));
    $conta2 = new ContaPoupanca(new Titular(new Cpf('987.654.321-10'), 'Fernando Pessoa', new Endereco('Salvador', 'Bairro Teste 2', 'Logo ali', 75)));
    $conta3 = new ContaCorrente(new Titular(new Cpf('321.564.978-10'), 'Aline Pereira', new Endereco('Sergipe', 'Bairro Teste 3', 'Em algum lugar do mundo', 56)));

    $conta3->transfere();
    $conta->depositar(500);
    $conta->sacar(100);

    echo $conta->recuperarSaldo();
    echo $conta2->recuperarSaldo();
    echo $conta3->recuperarSaldo();

?>