<?php

    require_once 'autoload.php';

    use Project\Database\Service\ControladorDeBonificacoes;
    use Project\Database\Model\Funcionario\{Desenvolvedor, Gerente, Diretor};
    use Project\Database\Model\{Cpf};

    $umFuncionario = new Desenvolvedor('Felipe Dias', new Cpf('123.456.789-10'), 'Desenvolvedor', 1000);
    $umaFuncionaria = new Gerente('Aline Pereira', new Cpf('987.654.321-10'), 'Gerente', 1000);
    $umDiretor = new Diretor('Ana Paula', new Cpf('321.465.798-10'), 'Diretor', 1000);

    $umFuncionario->sobeDeNivel();

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionarBonificacao($umFuncionario);
    $controlador->adicionarBonificacao($umaFuncionaria);
    $controlador->adicionarBonificacao($umDiretor);

    echo $controlador->recuperarTotal();
?>