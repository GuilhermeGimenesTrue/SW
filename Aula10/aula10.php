<?php 
    include_once 'COnta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Lamar Borges";
    $conta1->Cpf = "129.456.779-00";
    
    $conta1->ConsultarSaldo();

    echo $conta1->Depositar(500);

    $conta1->ConsultarSaldo();

    echo $conta1->Sacar(700);

    $conta1->ConsultarSaldo();
?>