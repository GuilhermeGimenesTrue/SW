<?php 

    include_once 'Funcionario.class.php';

    $Funcionario = new Funcionario("Fábio",200.00);

    $Funcionario->aumentarSalario(50);
    $Funcionario->exibirInformacoes();

?>