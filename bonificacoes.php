<?php

    require_once 'autoload.php';

    use Project\Database\Service\ControladorDeBonificacoes;
    use Project\Database\Model\Functionary\{Desenvolvedor, Gerente, Diretor, EditorVideo};
    use Project\Database\Model\{Cpf};

    $umFuncionario = new Desenvolvedor('Felipe Dias', new Cpf('123.456.789-10'), 1000);
    $umaFuncionaria = new Gerente('Aline Pereira', new Cpf('987.654.321-10'), 1000);
    $umDiretor = new Diretor('Ana Paula', new Cpf('321.465.798-10'), 2600);
    $umEditorVideo = new EditorVideo('Tiago Lemos', new Cpf('258.369.147-10'), 1500);

    $umFuncionario->sobeDeNivel();

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionarBonificacao($umFuncionario);
    $controlador->adicionarBonificacao($umaFuncionaria);
    $controlador->adicionarBonificacao($umDiretor);
    $controlador->adicionarBonificacao($umEditorVideo);

    echo $controlador->recuperarTotal();
?>