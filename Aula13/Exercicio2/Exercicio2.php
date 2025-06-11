<?php 

    include_once 'Livro.class.php';

    $Livro = new Livro("Não Tenho Boca e Preciso Gritar","Harlan Ellison");

    $Livro->emprestarLivro();
    $Livro->exibirStatus();
    $Livro->devolverLivro();
    $Livro->exibirStatus();

?>